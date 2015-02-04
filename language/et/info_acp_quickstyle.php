<?php
/**
 *
 * @package Quick Style
 * Estonian translation by phpBBeesti (phpBBeesti.com)
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
	'QUICK_STYLE'						=> 'Stiili kiirvalik',
	'QUICK_STYLE_EXPLAIN'				=> 'Lisab iga lehekülje päisesse rippmenüüst koosneva stiilide valiku, et kiiresti saaks vahetada olemas oleva stiili mõne muu vastu. Rippmenüüd näidatakse ainult juhul, kui foorumil on rohkem kui 1 stiil.',
	'QUICK_STYLE_SETTINGS'				=> 'Stiili kiirvaliku seaded',
	'QUICK_STYLE_DEFAULT_LOC'			=> 'Kasuta vaikimisi asukohta',
	'QUICK_STYLE_DEFAULT_LOC_EXPLAIN'	=> 'Vaikimisi lisatakse stiilide kiirvalik paremale poole vastu breadcrumb navigatsooni. Seadistades selle väärtuseks "Ei" lubab sul lisada quickstyle_event ükskõik kuhu oma stiilile.',
	'QUICK_STYLE_ALLOW_GUESTS'			=> 'Luba külalistel vahetada stiile',
	'QUICK_STYLE_ALLOW_GUESTS_EXPLAIN'	=> 'Lubades selle, siis külalised saavad samuti muuta stiile. Kuna külalised ei ole sisselogitud, siis nende poolt valitud stiili mäletavad küpsised.',
	'QUICK_STYLE_OVERRIDE_ENABLED'		=> '"Muuda kasutajate valitud stiil" on lubatud foorumi seadetes. Stiilide kiirvalikut ei näidata enne, kui oled selle valiku keelanud.',
));
