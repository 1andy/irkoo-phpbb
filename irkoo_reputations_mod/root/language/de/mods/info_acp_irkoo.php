<?php
/**
*
* mod_irkoo [German]
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
    'ACP_IRKOO'                             => 'Irkoo Reputationen',
    'ACP_IRKOO_SETTINGS'                    => 'Irkoo Einstellungen',
    'IRKOO_REGISTER'                        => 'Um Irkoo Reputationen zu nutzen, musst du einen Account bei <a href="http://irkoo.com/useit?enhanced">irkoo.com</a> erstellen.',
    'IRKOO_SITEID'                          => 'Irkoo Site ID',
    'IRKOO_SECRET'                          => 'Irkoo Secret Key',
    'IRKOO_STEP1'                           => 'Schließe <a href="http://irkoo.com/useit?enhanced"><strong>Step 1</strong> auf irkoo.com</a> ab (überspringe die weiteren Schritte).',
    'IRKOO_STEP2'                           => 'Kopiere die generierte Irkoo Site ID (IK-XXXXX) und den Secret Key in die unteren Felder.',
    'IRKOO_PROVIDE_SITEID'                  => 'Nenne die Irkoo Site ID in folgender Form: IK-XXXXX.',
    'IRKOO_INVALID_SITEID'                  => 'Die eingegebene Site ID ist ungültig. Sie sollte in folgender Form eingegeben werden: IK-XXXXX.',
    'IRKOO_PROVIDE_SECRET'                  => 'Nenne den Irkoo Secret Key.',
    'IRKOO_INVALID_SECRET'                  => 'Der eingegebene Secret Key ist ungültig.',

));
?>
