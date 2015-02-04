<?php
/**
 *
 * @package Quick Style
 * Croatian translation by Ančica Sečan (http://ancica.sunceko.net)
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
	'QUICK_STYLE'						=> 'Prebacivanje stilova',
	'QUICK_STYLE_EXPLAIN'				=> 'Prikazuje padajući izbornik [instaliranih] stilova na zaglavlju svake stranice (a) za [brzo] prebacivanje između stilova.<br />Bazirano na originalu <em>Prime Quick Style</em> primehaloa.',
	'QUICK_STYLE_SETTINGS'				=> 'Postavke',
	'QUICK_STYLE_DEFAULT_LOC'			=> 'Koristi lokaciju zadanog predloška',
	'QUICK_STYLE_DEFAULT_LOC_EXPLAIN'	=> 'Zadano, <em>Prebacivanje stilova</em> umeće padajući izbornik [instaliranih] stilova na zaglavlje svake stranice (i to) na desnu stranu Breadcrumb navigacije.<br />Ukoliko je onemogućeno, padajući izbornik [instaliranih] stilova moguće je postaviti bilo gdje [drugdje].',
	'QUICK_STYLE_ALLOW_GUESTS'			=> 'Dopusti gostima prebacivanje između stilova',
	'QUICK_STYLE_ALLOW_GUESTS_EXPLAIN'	=> 'Ukoliko je omogućeno, gosti će moći koristiti <em>Prebacivanje stilova</em>.<br />Obzirom gosti nisu prijavljeni/e, za pamćenje [im] izabranog stila bit će korišteni kolačići.',
	'QUICK_STYLE_OVERRIDE_ENABLED'		=> '<em>Prebacivanje stilova</em> je onemogućeno jer je "<em>Pregazi</em> korisnički stil" opcija omogućena.<br />Onemogući "<em>Pregazi</em> korisnički stil" opciju da bi <em>Prebacivanje stilova</em> moglo biti omogućeno',
));