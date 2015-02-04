<?php
/**
 *
 * @package Quick Style
 * Spanish translation by Raul [ThE KuKa] (www.phpbb-es.com)
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
	'QUICK_STYLE'						=> 'Estilo Rápido',
	'QUICK_STYLE_EXPLAIN'				=> 'Añade un cuadro de estilo desplegable a la cabecera de cada página para cambiar rápidamente de estilos. Basado en el original de Prime Quick Style por primehalo.',
	'QUICK_STYLE_SETTINGS'				=> 'Ajustes de Estilo Rápido',
	'QUICK_STYLE_DEFAULT_LOC'			=> 'Usar ubicación por defecto de plantilla',
	'QUICK_STYLE_DEFAULT_LOC_EXPLAIN'	=> 'Por defecto, la extensión Estilo Rápido insertará el conmutador de estilo a la derecha de la ruta de navegación en la cabecera. Al establecer esto como "no", le permitirá incluir el quickstyle_event en otra parte de su estilo.',
	'QUICK_STYLE_ALLOW_GUESTS'			=> 'Permitir a invitados cambiar de estilos',
	'QUICK_STYLE_ALLOW_GUESTS_EXPLAIN'	=> 'Este ajuste permitirá a los visitantes invitados el poder cambiar de estilos. Puesto que no se identifican, una cookie se usa para recordar su estilo seleccionado.',
	'QUICK_STYLE_OVERRIDE_ENABLED'		=> 'The "Override user style" configuration setting is enabled on this board. The style switcher will not work until you disable it.',
));
