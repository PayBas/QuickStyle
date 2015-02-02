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

namespace paybas\quickstyle\acp;

class quickstyle_info
{
	function module()
	{
		return array(
			'filename'	=> '\paybas\quickstyle\acp\quickstyle_module',
			'title'		=> 'QUICK_STYLE',
			'modes'		=> array(
				'settings'	=> array('title' => 'QUICK_STYLE_SETTINGS', 'auth' => 'ext_paybas/quickstyle && acl_a_board', 'cat' => array('QUICK_STYLE')),
			),
		);
	}
}
