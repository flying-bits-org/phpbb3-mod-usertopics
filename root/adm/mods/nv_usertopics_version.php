<?php
/**
*
* @package acp
* @version $Id$
* @copyright (c) 2007 StarTrekGuide
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package mod_version_check
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

class nv_usertopics_version
{
	function version()
	{
		return array(
			'author'	=> 'nickvergessen',
			'title'		=> 'NV usertopics',
			'tag'		=> 'nv_usertopics',
			'version'	=> '1.0.4.1',
			'file'		=> array('www.flying-bits.org', 'updatecheck', 'nv_usertopics.xml'),
		);
	}
}

?>