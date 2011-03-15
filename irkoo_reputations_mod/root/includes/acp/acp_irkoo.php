<?php

/**
 *
 * @author 1Andy (1Andy) contact@irkoo.com
 * @version $Id$
 * @copyright (c) 2011 1Andy
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 */

if (!defined('IN_PHPBB'))
{
   exit;
}

class acp_irkoo
{
    var $u_action;
    var $new_config;
    function main($id, $mode)
    {
        global $db, $user, $auth, $template;
        global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

        $config_vars = array(
            'irkoo_siteid'              => 'IRKOO_SITEID',
            'irkoo_secret'              => 'IRKOO_SECRET',
        );

        $this->tpl_name = 'acp_irkoo';
        $this->page_title = 'ACP_IRKOO';
        $form_key = 'acp_irkoo';
        add_form_key($form_key);

        $submit = request_var('submit', false);

        
        if ($submit)
        {
            if (check_form_key($form_key))
            {
                $siteid = request_var('irkoo_siteid', '');
                $secret = request_var('irkoo_secret', '');

                if ($siteid != '' && !preg_match("/^IK-\\d{5}$/", $siteid))
                {
                    trigger_error($user->lang['IRKOO_INVALID_SITEID'] . adm_back_link($this->u_action), E_USER_WARNING);
                }
                else if ($siteid != '' && $secret == '')
                {
                    trigger_error($user->lang['IRKOO_PROVIDE_SECRET'] . adm_back_link($this->u_action), E_USER_WARNING);
                }
                else if ($secret != '' && !preg_match("/^[a-zA-Z0-9]{32}$/", $secret))
                {
                    trigger_error($user->lang['IRKOO_INVALID_SECRET'] . adm_back_link($this->u_action), E_USER_WARNING);
                }
                else 
                {
                    $config_vars = array_keys($config_vars);
                    foreach ($config_vars as $config_var)
                    {
                        set_config($config_var, request_var($config_var, ''));
                    }
                    trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
                }
            }
            else
            {
                trigger_error($user->lang['FORM_INVALID'] . adm_back_link($this->u_action),  E_USER_WARNING);
            }

        }
        else
        {   
            foreach ($config_vars as $config_var => $template_var)
            {
                $template->assign_var($template_var, (isset($_POST[$config_var])) ? request_var($config_var, '') : 
                    (isset($config[$config_var]) ? $config[$config_var] : ''));
            }
        }
    }
}

?>