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
    'IRKOO_REPUTATIONS_LIST'    => 'Reputations',
    'IRKOO_REPUTATION'          => 'Reputation',
    'IRKOO_MSG_VOTEUP'          => 'Vote Up',
    'IRKOO_MSG_VOTEDOWN'        => 'Vote Down',
    'IRKOO_MSG_NOT_AUTHORIZED'  => 'Please login to vote',
    'IRKOO_MSG_MIN_VOTE_UP'     => 'Vote Up requires %d reputation',
    'IRKOO_MSG_MIN_VOTE_DOWN'   => 'Vote Down requires %d reputation',
    'IRKOO_MSG_SELF'            => 'You can’t vote for your own message',
    'IRKOO_MSG_NOVOTES'         => 'No votes',
    'IRKOO_AGO_SECONDS'         => 'just now',
    'IRKOO_AGO_MINUTE'          => 'about a minute ago',
    'IRKOO_AGO_MINUTES'         => '%d minutes ago',
    'IRKOO_AGO_HOUR'            => 'about an hour ago',
    'IRKOO_AGO_HOURS'           => 'about %d hours ago',
    'IRKOO_AGO_DAY'             => 'a day ago',
    'IRKOO_AGO_DAYS'            => '%d days ago',
    'IRKOO_AGO_MONTH'           => 'about a month ago',
    'IRKOO_AGO_MONTHS'          => '%d months ago',
    'IRKOO_AGO_YEAR'            => 'about a year ago',
    'IRKOO_AGO_YEARS'           => '%d years ago',
));
?>