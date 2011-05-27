<?php
/**
*
* mod_irkoo [French]
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
    'ACP_IRKOO'                             => 'Répoutations Irkoo',
    'ACP_IRKOO_SETTINGS'                    => 'Paramètres Irkoo',
    'IRKOO_REGISTER'                        => 'Pour que les réputations Ikroo fonctionnent, vous devez créer un compte sur <a href="http://irkoo.com/useit?enhanced">irkoo.com</a>.',
    'IRKOO_SITEID'                          => 'Irkoo Site ID',
    'IRKOO_SECRET'                          => 'Irkoo Secret Key',
    'IRKOO_STEP1'                           => 'Completez l\'<a href="http://irkoo.com/useit?enhanced"><strong>étape 1</strong> sur irkoo.com</a> (passer les autres étapes).',
    'IRKOO_STEP2'                           => 'Copiez l\'Irkoo Site ID (IK-XXXXX) généré et la clef secrète (Secret Key) dans les champs ci-dessous.',
    'IRKOO_PROVIDE_SITEID'                  => 'Saisissez l\'Irkoo Site ID sous la forme IK-XXXXX.',
    'IRKOO_INVALID_SITEID'                  => 'Le Site ID saisi est invalide. Il doit être sous la forme IK-XXXXX.',
    'IRKOO_PROVIDE_SECRET'                  => 'Saisissez l\'Irkoo Secret Key.',
    'IRKOO_INVALID_SECRET'                  => 'Le code secret (Secret Key) saisi est invalide.',

));
?>