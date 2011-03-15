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
    'IRKOO_REPUTATIONS_LIST'    => 'Reputações',
    'IRKOO_REPUTATION'          => 'Reputação',
    'IRKOO_MSG_VOTEUP'          => 'Dar Reputação',
    'IRKOO_MSG_VOTEDOWN'        => 'Tirar Reputação',
    'IRKOO_MSG_NOT_AUTHORIZED'  => 'Por favor faça login para dar reputação',
    'IRKOO_MSG_MIN_VOTE_UP'     => 'Dar Reputação requer que tenha %d de Reputação',
    'IRKOO_MSG_MIN_VOTE_DOWN'   => 'Tirar Reputação requer que tenha %d de Reputação',
    'IRKOO_MSG_SELF'            => 'Não podes dar reputação nas tuas mensagens.',
    'IRKOO_MSG_NOVOTES'         => 'Sem Reputação',
    'IRKOO_AGO_SECONDS'         => 'Agora mesmo',
    'IRKOO_AGO_MINUTE'          => 'Há um minuto atrás',
    'IRKOO_AGO_MINUTES'         => '%d minuto(s) atrás',
    'IRKOO_AGO_HOUR'            => 'Há uma hora atrás',
    'IRKOO_AGO_HOURS'           => '%d horas atrás',
    'IRKOO_AGO_DAY'             => 'Há um dia atrás',
    'IRKOO_AGO_DAYS'            => '%d dias atrás',
    'IRKOO_AGO_MONTH'           => 'Há um mês atrás',
    'IRKOO_AGO_MONTHS'          => '%d meses atrás',
    'IRKOO_AGO_YEAR'            => 'Há um ano atrás',
    'IRKOO_AGO_YEARS'           => '%d anos atrás',
));
?>
