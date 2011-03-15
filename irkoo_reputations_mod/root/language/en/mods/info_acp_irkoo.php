<?php
/**
*
* mod_irkoo [English]
*
* @author 1Andy (1Andy) contact@irkoo.com
* @version $Id$
* @copyright (c) 2011 1Andy
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
    'ACP_IRKOO'                             => 'Irkoo Reputations',
    'ACP_IRKOO_SETTINGS'                    => 'Irkoo Settings',
    'IRKOO_REGISTER'                        => 'In order for the Ikroo Reputations to work, you should create an account at <a href="http://irkoo.com/useit?enhanced">irkoo.com</a>.',
    'IRKOO_SITEID'                          => 'Irkoo Site ID',
    'IRKOO_SECRET'                          => 'Irkoo Secret Key',
    'IRKOO_STEP1'                           => 'Complete the <a href="http://irkoo.com/useit?enhanced"><strong>Step 1</strong> at irkoo.com</a> (skip the other steps).',
    'IRKOO_STEP2'                           => 'Copy the generated Irkoo Site ID (IK-XXXXX) and the Secret Key into the fields below.',
    'IRKOO_PROVIDE_SITEID'                  => 'Provide the Irkoo Site ID in form of IK-XXXXX.',
    'IRKOO_INVALID_SITEID'                  => 'The entered Site ID is invalid. Should be in form of IK-XXXXX.',
    'IRKOO_PROVIDE_SECRET'                  => 'Provide the Irkoo Secret Key.',
    'IRKOO_INVALID_SECRET'                  => 'The entered Secret Key is invalid.',

));
?>