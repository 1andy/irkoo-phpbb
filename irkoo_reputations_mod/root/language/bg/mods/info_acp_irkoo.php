<?php
/**
*
* mod_irkoo [Bulgarian]
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
    'ACP_IRKOO_SETTINGS'                    => 'Irkoo Настройки',
    'IRKOO_REGISTER'                        => 'За да работи модулът Ikroo Reputations се нуждаете от регистрация в <a href="http://irkoo.com/useit?enhanced">irkoo.com</a>.',
    'IRKOO_SITEID'                          => 'Irkoo Site ID',
    'IRKOO_SECRET'                          => 'Irkoo Secret Key',
    'IRKOO_STEP1'                           => 'Изпълнете <a href="http://irkoo.com/useit?enhanced"><strong>Стъпка 1</strong> в irkoo.com</a> (пропуснете останалите стъпки).',
    'IRKOO_STEP2'                           => 'Копирайте генерирания Irkoo Site ID (IK-XXXXX) и новия Secret Key в полетата по-долу.',
    'IRKOO_PROVIDE_SITEID'                  => 'Irkoo Site ID трябва да бъде във формат IK-XXXXX.',
    'IRKOO_INVALID_SITEID'                  => 'Въведеният Site ID е невалиден. Той трябва да бъде във формат: IK-XXXXX.',
    'IRKOO_PROVIDE_SECRET'                  => 'Въведете Irkoo Secret Key.',
    'IRKOO_INVALID_SECRET'                  => 'Въведеният Secret Key е невалиден.',
));
?>