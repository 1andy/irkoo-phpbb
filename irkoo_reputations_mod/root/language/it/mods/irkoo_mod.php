<?php
/**
*
* mod_irkoo [Italian]
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
    'IRKOO_REPUTATIONS_LIST'    => 'Reputazioni',
    'IRKOO_REPUTATION'          => 'Reputazione',
    'IRKOO_MSG_VOTEUP'          => 'Voto positivo',
    'IRKOO_MSG_VOTEDOWN'        => 'Voto negativo',
    'IRKOO_MSG_NOT_AUTHORIZED'  => 'Accedi per votare, grazie',
    'IRKOO_MSG_MIN_VOTE_UP'     => 'Per votare positivamente sono richiesti minimo %d punti reputazione',
    'IRKOO_MSG_MIN_VOTE_DOWN'   => 'Per votare negativamente sono richiesti minimo %d punti reputazione',
    'IRKOO_MSG_SELF'            => 'Non puoi votare un tuo messaggio',
    'IRKOO_MSG_NOVOTES'         => 'Nessun voto',
    'IRKOO_AGO_SECONDS'         => 'meno di un minuto fa',
    'IRKOO_AGO_MINUTE'          => 'circa di un minuto fa',
    'IRKOO_AGO_MINUTES'         => '%d minuti fa',
    'IRKOO_AGO_HOUR'            => 'circa un’ora fa',
    'IRKOO_AGO_HOURS'           => 'circa %d ore fa',
    'IRKOO_AGO_DAY'             => 'un giorno fa',
    'IRKOO_AGO_DAYS'            => '%d giorni fa',
    'IRKOO_AGO_MONTH'           => 'circa un mese fa',
    'IRKOO_AGO_MONTHS'          => '%d mesi fa',
    'IRKOO_AGO_YEAR'            => 'circa un anno fa',
    'IRKOO_AGO_YEARS'           => '%d anni fa',
));
?>
