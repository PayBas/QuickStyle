<?php
/**
 *
 * @package Quick Style
 * Turkish translation by pikachuturkey
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
	'QUICK_STYLE'						=> 'Hızlı Stil',
	'QUICK_STYLE_EXPLAIN'				=> 'Her sayfanın üst kısmına stiller arası hızlıca geçiş yapmayı sağlayan açılır kapanır bir kutucuk ekler. Primehalonun orijinal Prime Quick Style modunu temel almıştır.',
	'QUICK_STYLE_SETTINGS'				=> 'Hızlı Stil ayarları',
	'QUICK_STYLE_DEFAULT_LOC'			=> 'Varsayılan şablon konumunu kullan',
	'QUICK_STYLE_DEFAULT_LOC_EXPLAIN'	=> 'Varsayılan olarak, Hızlı Stil eklentisi sayfa üst kısımda (header) sağ tarafta seçim kutusu ekler. "Hayır"ı seçerseniz size quickstyle_event kısmını stilinizde herhangi bir yere eklemenize izin verir.',
	'QUICK_STYLE_ALLOW_GUESTS'			=> 'Misafirlerin stili değiştirmesine izin ver',
	'QUICK_STYLE_ALLOW_GUESTS_EXPLAIN'	=> 'Bu ayar misafir kullanıcıların da stili değiştirmesine izin verir. Onlar oturum açtıktan sonra, bir önbellk çerezi onların seçtiği stili hatırlayacak.',
	'QUICK_STYLE_OVERRIDE_ENABLED'		=> '"Kullanıcı stilinin üstüne yaz" ayarı bu sitede aktif durumda. siz bu ayarı kapatana kadar Stil değiştirici çalışmayacak.',
));
