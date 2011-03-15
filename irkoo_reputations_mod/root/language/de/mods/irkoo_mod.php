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
    'IRKOO_REPUTATIONS_LIST'    => 'Reputationen',
    'IRKOO_REPUTATION'          => 'Reputation',
    'IRKOO_MSG_VOTEUP'          => 'Daumen hoch',
    'IRKOO_MSG_VOTEDOWN'        => 'Daumen runter',
    'IRKOO_MSG_NOT_AUTHORIZED'  => 'Bitte einloggen zum abstimmen',
    'IRKOO_MSG_MIN_VOTE_UP'     => 'Daumen hoch brauch %d Reputation',
    'IRKOO_MSG_MIN_VOTE_DOWN'   => 'Daumen runter brauch %d Reputation',
    'IRKOO_MSG_SELF'            => 'Du kannst nicht für eigene Beiträge abstimmen',
    'IRKOO_MSG_NOVOTES'         => 'Noch keine Stimmen abgegeben',
    'IRKOO_AGO_SECONDS'         => 'Jetzt gerade',
    'IRKOO_AGO_MINUTE'          => 'vor etwa einer Minute',
    'IRKOO_AGO_MINUTES'         => 'vor %d Minuten',
    'IRKOO_AGO_HOUR'            => 'vor etwa einer Stunde',
    'IRKOO_AGO_HOURS'           => 'vor %d Stunden',
    'IRKOO_AGO_DAY'             => 'vor einem Tag',
    'IRKOO_AGO_DAYS'            => 'vor %d Tagen',
    'IRKOO_AGO_MONTH'           => 'vor etwa einem Monat',
    'IRKOO_AGO_MONTHS'          => 'vor %d Monaten',
    'IRKOO_AGO_YEAR'            => 'vor etwa einem Jahr',
    'IRKOO_AGO_YEARS'           => 'vor %d Jahren',
));
?>
