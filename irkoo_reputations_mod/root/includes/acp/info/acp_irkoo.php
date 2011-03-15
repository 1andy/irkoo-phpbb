<?php

/**
 *
 * @author 1Andy (1Andy) contact@irkoo.com
 * @version $Id$
 * @copyright (c) 2011 1Andy
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 */

/**
* @package module_install
*/
if (!defined('IN_PHPBB'))
{
   exit;
}

class acp_irkoo_info
{
        function module()
        {
                return array(
                        'filename'      => 'acp_irkoo',
                        'title'         => 'ACP_IRKOO_SETTINGS',
                        'version'       => '1.0.4',
                        'modes'         => array(
                                'index' => array('title' => 'ACP_IRKOO_SETTINGS', 'auth' => 'acl_a_board', 'cat' => array('')),
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

?>