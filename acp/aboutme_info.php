<?php
/**
*
* @package Safirina.com About Me
* @copyright (c) 2014 SoubisSacrifice
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
/**
* @ignore
*/
namespace soubissacrifice\aboutme\acp;
class aboutme_info
{
	function module()
	{
		return array(
			'filename'	=> '\soubissacrifice\aboutme\acp\aboutme_module',
			'title'		=> 'About Me',
			'version'	=> '0.0.1',
			'modes'		=> array(
				'add'		=> array(
									'title' => 'ACP_ABOUT_ME_ADD',
									'auth' 		=> 'ext_soubissacrifice/aboutme && acl_a_board',
									'cat'		=> array('ACP_ABOUT_ME')
									),
				'edit'		=> array(
									'title' => 'ACP_ABOUT_ME_EDIT',
									'auth' 		=> 'ext_soubissacrifice/aboutme && acl_a_board',
									'cat'		=> array('ACP_ABOUT_ME')
									),
			),
		);
	}
	function install()
	{
	}
	function uninstall()
	{
	}
}
