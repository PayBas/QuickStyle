<?php
/**
 *
 * @package Quick Style
 * French translation by Galixte (http://www.galixte.com)
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
	'QUICK_STYLE'						=> 'Style rapide',
	'QUICK_STYLE_EXPLAIN'				=> 'Ajoute un menu déroulant en haut de chaque page pour changer de style. Cette extension est basée sur le MOD original « Prime Quick Style » crée par primehalo.',
	'QUICK_STYLE_SETTINGS'				=> 'Paramètres du style rapide',
	'QUICK_STYLE_DEFAULT_LOC'			=> 'Utiliser l’emplacement par défaut du style',
	'QUICK_STYLE_DEFAULT_LOC_EXPLAIN'	=> 'Par défaut, l’extension style rapide positionne le menu déroulant de changement de style en haut de la page à droite de la barre de navigation après le fil d’Ariane. Paramétrer sur « Non » permettra de placer quickstyle_event à un autre endroit dans votre style.',
	'QUICK_STYLE_ALLOW_GUESTS'			=> 'Permettre au invités de changer le style',
	'QUICK_STYLE_ALLOW_GUESTS_EXPLAIN'	=> 'Ce réglage permettra aux visiteurs de changer aussi le style. Puisqu’ils ne sont pas connectés, un cookie sera utilisé pour se souvenir du dernier style sélectionné.',
	'QUICK_STYLE_OVERRIDE_ENABLED'		=> 'Le paramètre « Annuler le style de l’utilisateur » est activé sur ce forum. Le changement de style ne fonctionnera pas jusqu’à ce que vous le désactiviez.',
));
