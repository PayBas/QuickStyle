<?php
/**
 *
 * @package Quick Style
 * Arabic translation by Basil Taha Alhitary (www.alhitary.net)
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
	'QUICK_STYLE'						=> 'أداة تغيير الاستايل ',
	'QUICK_STYLE_EXPLAIN'				=> 'إضافة قائمة منسدلة في الشريط العلوي لترويسة المنتدى , تستطيع من خلالها التغيير بين الاستايلات المتوفرة في الموقع. هذه الإضافة مبنية على الهاك الأصلي "Prime Quick Style" بواسطة المؤلف "primehalo".',
	'QUICK_STYLE_SETTINGS'				=> 'الإعدادات',
	'QUICK_STYLE_DEFAULT_LOC'			=> 'استخدام مكان القالب الإفتراضي ',
	'QUICK_STYLE_DEFAULT_LOC_EXPLAIN'	=> 'اختيارك "نعم" يعني وضع "أداة تغيير الاستايل" بصورة افتراضية في الشريط العلوى لترويسة المنتدى. اختيارك "لا" يعني انك تستطيغ تغيير مكان "أداة تغيير الاستايل" باستخدام الـ quickstyle_event في أي مكان تريده في الاستايل.',
	'QUICK_STYLE_ALLOW_GUESTS'			=> 'السماح للزوار بتغيير الاستايل',
	'QUICK_STYLE_ALLOW_GUESTS_EXPLAIN'	=> 'اختيارك "نعم" يعني اعطاء الزائر امكانية تغيير الاستايل. وبما أنه لم يسجل دخوله للمنتدى , فسيتم استخدام الكوكيز cookie لحفظ الاستايل الذي حدده الزائر.',
	'QUICK_STYLE_OVERRIDE_ENABLED'		=> 'هذه الإضافة لا تعمل خالياً بسبب تفعيل "تجاوز تنسيق المستخدم" من اعدادات المنتدى لديك. يجب عليك تعطيل هذا الخيار من -> اعدادات المنتدى -> ستايل المنتدى -> تجاوز تنسيق المستخدم ( اختار " لا " ).',
));
