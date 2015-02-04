<?php
/**
 *
 * @package Quick Style
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
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
