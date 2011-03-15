<?php
/**
*
* mod_irkoo [Russian]
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
    'ACP_IRKOO'                             => 'Репутации Irkoo',
    'ACP_IRKOO_SETTINGS'                    => 'Настройки Irkoo',
    'IRKOO_REGISTER'                        => 'Для работы Irkoo необходимо создать акаунт на <a href="http://irkoo.com/useit?enhanced">irkoo.com</a>.',
    'IRKOO_SITEID'                          => 'Irkoo Site ID',
    'IRKOO_SECRET'                          => 'Irkoo Secret Key',
    'IRKOO_STEP1'                           => 'Зарегистрируйтесь на irkoo.com, используя <a href="http://irkoo.com/useit?enhanced"><strong>Шаг 1</strong></a> (пропустите остальные пункты).',
    'IRKOO_STEP2'                           => 'Скопируйте сгенерированные Irkoo Site ID (IK-XXXXX) и Secret Key в соответствующие поля ниже.',
    'IRKOO_PROVIDE_SITEID'                  => 'Вставьте Irkoo Site ID в формате IK-XXXXX.',
    'IRKOO_INVALID_SITEID'                  => 'Указанный Site ID имеет неверный формат. Он должен иметь вид IK-XXXXX (каждый X - цифра).',
    'IRKOO_PROVIDE_SECRET'                  => 'Вставьте Irkoo Secret Key.',
    'IRKOO_INVALID_SECRET'                  => 'Указанный Secret Key имеет неверный формат.',
));
?>