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
    'IRKOO_REPUTATIONS_LIST'    => 'Réputations',
    'IRKOO_REPUTATION'          => 'Réputation',
    'IRKOO_MSG_VOTEUP'          => 'Voter pour',
    'IRKOO_MSG_VOTEDOWN'        => 'Voter contre',
    'IRKOO_MSG_NOT_AUTHORIZED'  => 'Veuillez vous identifier pour voter',
    'IRKOO_MSG_MIN_VOTE_UP'     => 'Voter Pour nécessite %d points de réputation',
    'IRKOO_MSG_MIN_VOTE_DOWN'   => 'Voter Contre nécessite %d points de réputation',
    'IRKOO_MSG_SELF'            => 'Vous ne pouvez pas voter pour votre propre message',
    'IRKOO_MSG_NOVOTES'         => 'Aucun vote',
    'IRKOO_AGO_SECONDS'         => 'à l\'instant',
    'IRKOO_AGO_MINUTE'          => 'il y a moins d\'une une minute',
    'IRKOO_AGO_MINUTES'         => 'il y a %d minutes',
    'IRKOO_AGO_HOUR'            => 'il y a environ une heure',
    'IRKOO_AGO_HOURS'           => 'il y a %d heures',
    'IRKOO_AGO_DAY'             => 'hier',
    'IRKOO_AGO_DAYS'            => 'il y a %d jours',
    'IRKOO_AGO_MONTH'           => 'le mois dernier',
    'IRKOO_AGO_MONTHS'          => 'il y a %d mois',
    'IRKOO_AGO_YEAR'            => 'l\'année dernière',
    'IRKOO_AGO_YEARS'           => 'il y a %d ans',
));
?>