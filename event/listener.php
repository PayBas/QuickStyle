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
			'core.page_header_after' => 'select_style',
			'core.ucp_display_module_before' => 'switch_style',
			'core.user_setup' => 'set_guest_style', 
		);
	}

	protected $enabled = true;
	protected $allow_guests = true;

	/**
	* Constructor (TODO)
	*/
	function prime_quick_style()
	{
		global $config;

		$this->enabled = (PRIME_QUICK_STYLE_ENABLED && !$config['override_user_style']) ? true : false;
	}

	/**
	*/
	public function request_cookie($name, $default = null)
	{
		global $config;

		$name = $config['cookie_name'] . '_' . $name;
		return request_var($name, $default, false, true);
	}

	/**
	*/
	public function switch_style()
	{
		global $config, $user, $db, $phpbb_root_path, $phpEx;

		if ($this->enabled && ($allow_guests || $user->data['is_registered']) && ($style = request_var('prime_quick_style', 0)))
		{
			$redirect_url = request_var('redirect', append_sid("{$phpbb_root_path}index.$phpEx"));
			$style = ($config['override_user_style']) ? $config['default_style'] : $style;
			if ($user->data['is_registered'])
			{
				$sql = 'UPDATE ' . USERS_TABLE . ' SET user_style = ' . intval($style) . ' WHERE user_id = ' . $user->data['user_id'];
				$db->sql_query($sql);
			}
			else
			{
				$user->set_cookie('style', $style, 0);
			}
			redirect($redirect_url);
		}
	}

	/**
	*/
	public function select_style()
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
		global $user;
		
		$style = $event['style_id'];

		if ($this->enabled && $this->allow_guests && $user->data['user_id'] == ANONYMOUS) // $user->data['is_registered'] may not be set at this point, such as if the user was banned
		{
			$event['style_id'] = ($style) ? $style : $this->request_cookie('style', intval($user->data['user_style']));
		}
	}
}