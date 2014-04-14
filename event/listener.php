<?php

/**
*
* @package Prime Quick Style
* @copyright (c) 2008-2014 Ken F. Innes IV
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace primehalo\quickstyle\event;

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
    exit;
}

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.common' => 'setup',
			'core.page_header_after' => 'select_style_form',
			'core.ucp_display_module_before' => 'switch_style',
			'core.user_setup' => 'set_guest_style', 
		);
	}

	protected $enabled;
	protected $allow_guests;

	/**
	*/
	public function setup($event)
	{
		global $config;

		$this->enabled = $config['override_user_style'] ? false : true;
		$this->allow_guests = true; // make an option, later
	}

	/**
	* The UCP event is only triggered when the user is logged in, so we have to set the guest cookie using some other event
	*/
	public function switch_style()
	{
		global $config, $user, $db, $phpbb_root_path, $phpEx;

		if ($this->enabled &&  $style = request_var('prime_quick_style', 0))
		{
			$redirect_url = request_var('redirect', append_sid("{$phpbb_root_path}index.$phpEx"));
			$style = ($config['override_user_style']) ? $config['default_style'] : $style;

			$sql = 'UPDATE ' . USERS_TABLE . ' SET user_style = ' . intval($style) . ' WHERE user_id = ' . $user->data['user_id'];
			$db->sql_query($sql);

			redirect($redirect_url);
		}
	}

	/**
	* Assing the style switcher form variables
	*/
	public function select_style_form()
	{
		global $config, $template, $user, $phpbb_root_path, $phpEx;

		if ($this->enabled && ($this->allow_guests || $user->data['is_registered']))
		{
			$current_style = ($user->data['is_registered']) ? $user->data['user_style'] : $this->request_cookie('style', $user->data['user_style']);
			$style_options = style_select(request_var('style', (int)$current_style));
			if (substr_count($style_options, '<option') > 1)
			{
				$user->add_lang_ext('primehalo/quickstyle', 'prime_quick_style');
				$redirect = '&amp;redirect=' . urlencode(str_replace('&amp;', '&', build_url(array('_f_', 'style'))));
				$template->assign_var('S_QUICK_STYLE_ACTION', append_sid("{$phpbb_root_path}ucp.$phpEx", 'i=prefs&amp;mode=personal' .  $redirect));
				$template->assign_var('S_QUICK_STYLE_OPTIONS', ($config['override_user_style']) ? '' : $style_options);
			}
		}
	}

	/**
	*/
	public function set_guest_style($event)
	{
		global $config, $user, $phpbb_root_path, $phpEx;

		if ($this->enabled && $this->allow_guests && $user->data['user_id'] == ANONYMOUS) // $user->data['is_registered'] may not be set at this point, such as if the user was banned
		{
			$style = $event['style_id'];

			// Set the style to display
			$event['style_id'] = ($style) ? $style : $this->request_cookie('style', intval($user->data['user_style']));

			// Set the cookie (and redirect) when the style is switched
			if ($style = request_var('prime_quick_style', 0))
			{
				$redirect_url = request_var('redirect', append_sid("{$phpbb_root_path}index.$phpEx"));
				$style = ($config['override_user_style']) ? $config['default_style'] : $style;

				$user->set_cookie('style', $style, 0);

				redirect($redirect_url);
			}
		}
	}

	/**
	*/
	public function request_cookie($name, $default = null)
	{
		global $config;

		$name = $config['cookie_name'] . '_' . $name;
		return request_var($name, $default, false, true);
	}
}