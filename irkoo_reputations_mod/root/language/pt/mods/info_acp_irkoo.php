<?php
/**
*
* mod_irkoo [Portuguese]
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
    'ACP_IRKOO'                             => 'Irkoo Reputações',
    'ACP_IRKOO_SETTINGS'                    => 'Irkoo Configurações',
    'IRKOO_REGISTER'                        => 'Para o Ikroo Reputações funcionar, têm que criar uma conta em <a href="http://irkoo.com/useit?enhanced">irkoo.com</a>.',
    'IRKOO_SITEID'                          => 'Irkoo Site ID',
    'IRKOO_SECRET'                          => 'Irkoo chave secreta',
    'IRKOO_STEP1'                           => 'Completa o <a href="http://irkoo.com/useit?enhanced"><strong>primeiro passo</strong> at irkoo.com</a> (Salta os outros passos).',
    'IRKOO_STEP2'                           => 'Introduz o Irkoo Site ID (IK-XXXXX) e a palavra chave nos campos em baixo.',
    'IRKOO_PROVIDE_SITEID'                  => 'Forneçe o Irkoo Site ID na forma de IK-XXXXX.',
    'IRKOO_INVALID_SITEID'                  => 'O Site ID é inválido. Deve ser no formato IK-XXXXX.',
    'IRKOO_PROVIDE_SECRET'                  => 'Forneçe a Palavra Chave.',
    'IRKOO_INVALID_SECRET'                  => 'A chave secreta é inválida.',

));
?>
