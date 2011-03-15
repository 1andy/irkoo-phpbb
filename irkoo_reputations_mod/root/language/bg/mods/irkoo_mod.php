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
    'IRKOO_REPUTATIONS_LIST'    => 'Рейтинг',
    'IRKOO_REPUTATION'          => 'Репутация',
    'IRKOO_MSG_VOTEUP'          => 'Харесва ми!',
    'IRKOO_MSG_VOTEDOWN'        => 'Не ми харесва!',
    'IRKOO_MSG_NOT_AUTHORIZED'  => 'Трябва да се логнете във форума за да гласувате.',
    'IRKOO_MSG_MIN_VOTE_UP'     => 'За да гласувате, че мнението ви харесва се нуждаете от %d точки репутация.',
    'IRKOO_MSG_MIN_VOTE_DOWN'   => 'За да гласувате, че мнението не ви харесва се нуждаете от %d точки репутация.',
    'IRKOO_MSG_SELF'            => 'Не можете да гласувате за собствените си мнения.',
    'IRKOO_MSG_NOVOTES'         => 'Все още не са дадени гласове.',
    'IRKOO_AGO_SECONDS'         => 'сега',
    'IRKOO_AGO_MINUTE'          => 'преди около минута',
    'IRKOO_AGO_MINUTES'         => 'преди %d минути',
    'IRKOO_AGO_HOUR'            => 'преди около час',
    'IRKOO_AGO_HOURS'           => 'преди около %d часа',
    'IRKOO_AGO_DAY'             => 'преди един ден',
    'IRKOO_AGO_DAYS'            => 'преди %d дни',
    'IRKOO_AGO_MONTH'           => 'преди около месец',
    'IRKOO_AGO_MONTHS'          => 'преди %d месеца',
    'IRKOO_AGO_YEAR'            => 'преди около една година',
    'IRKOO_AGO_YEARS'           => 'преди %d години',
));
?>