<?php

/**
*
* @package Quick Style
* @copyright (c) 2014 PayBas
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Based on the original Prime Quick Style by Ken F. Innes IV (primehalo)
*
*/

namespace paybas\quickstyle\migrations;

class release_1_3_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['quickstyle_version']) && version_compare($this->config['quickstyle_version'], '1.3.0', '>=');
	}

	public function update_data()
	{
		return array(
			array('if', array(
				(isset($this->config['primequickstyle_version'])),
				array('config.remove', array('primequickstyle_version')),
			)),

			array('config.add', array('quickstyle_version', '1.3.0')),
			array('config.add', array('quickstyle_default_loc', '1')),
			array('config.add', array('quickstyle_allow_guests', '1')),

			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'QUICK_STYLE'
			)),

			array('module.add', array(
				'acp',
				'QUICK_STYLE',
				array(
					'module_basename'	=> '\paybas\quickstyle\acp\quickstyle_module',
					'modes'	=> array('settings'),
				),
			)),
		);
	}
}
