<?php

/**
*
* @package Prime Quick Style
* @copyright (c) 2008-2014 Ken F. Innes IV
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace primehalo\quickstyle\migrations;

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
    exit;
}

class release_1_3_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['primequickstyle_version']) && version_compare($this->config['primequickstyle_version'], '1.3.0', '>=');
	}
	
	public function update_data()
	{
		return array(
			array('config.add', array('primequickstyle_version', '1.3.0')),
		);
	}
}