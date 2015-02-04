<?php
/**
 *
 * @package Quick Style
 * Russian translation by rxu
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
	'QUICK_STYLE'						=> 'Быстрый стиль',
	'QUICK_STYLE_EXPLAIN'				=> 'Добавляет выпадающий список стилей в заголовок каждой страницы для быстрого переключения между стилями.',
	'QUICK_STYLE_SETTINGS'				=> 'Настройки быстрого стиля',
	'QUICK_STYLE_DEFAULT_LOC'			=> 'Использование стилей по умолчанию.',
	'QUICK_STYLE_DEFAULT_LOC_EXPLAIN'	=> 'По умолчанию, расширение ставит переключатель стилей справа от навигации в заголовке. Установка этого значения в "нет" позволит вам включить где-то в вашем стиле.',
	'QUICK_STYLE_ALLOW_GUESTS'			=> 'Разрешить гостям изменять стили',
	'QUICK_STYLE_ALLOW_GUESTS_EXPLAIN'	=> 'Эта настройка позволит гостям изменять стили. Так как они не авторизованы на форуме будут использоваться куки, чтобы помнить их стиль.',
	'QUICK_STYLE_OVERRIDE_ENABLED'		=> 'Для настройки переопределения стиля пользователя включен на этом форуме.Переключатель стилей не будет работать, пока вы не отключите его.',
));
