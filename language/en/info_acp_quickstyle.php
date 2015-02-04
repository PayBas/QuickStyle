<?php
/**
 *
 * @package Quick Style
 * English translation by PayBas
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original Prime Quick Style by Ken F. Innes IV (primehalo)
 *
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'QUICK_STYLE'						=> 'Quick Style',
	'QUICK_STYLE_EXPLAIN'				=> 'Adds a style dropdown box to the header of every page for quickly switching between styles. Based on the original Prime Quick Style by primehalo.',
	'QUICK_STYLE_SETTINGS'				=> 'Quick Style settings',
	'QUICK_STYLE_DEFAULT_LOC'			=> 'Use default template location',
	'QUICK_STYLE_DEFAULT_LOC_EXPLAIN'	=> 'By default, the Quick Style extension will insert the style switcher to the right of the breadcrumb navigation in the header. Setting this to "no" will allow you to include the quickstyle_event somewhere else in your style.',
	'QUICK_STYLE_ALLOW_GUESTS'			=> 'Allow guests to change styles',
	'QUICK_STYLE_ALLOW_GUESTS_EXPLAIN'	=> 'This setting will allow guest visitors to change styles as well. Since they are not logged-in, a cookie will be used to remember their selected style.',
	'QUICK_STYLE_OVERRIDE_ENABLED'		=> 'The "Override user style" configuration setting is enabled on this board. The style switcher will not work until you disable it.',
));
