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
    'ACP_IRKOO'                             => 'Irkoo Reputazione',
    'ACP_IRKOO_SETTINGS'                    => 'Irkoo Opzioni',
    'IRKOO_REGISTER'                        => 'Per far funzionare la Ikroo Reputazione, devi crearti un utente su <a href="http://irkoo.com/useit?enhanced">irkoo.com</a>.',
    'IRKOO_SITEID'                          => 'Irkoo Site ID',
    'IRKOO_SECRET'                          => 'Irkoo Secret Key',
    'IRKOO_STEP1'                           => 'Completa il <a href="http://irkoo.com/useit?enhanced"><strong>Passo 1</strong> su irkoo.com</a> (supera gli altri passaggi).',
    'IRKOO_STEP2'                           => 'Copia il codice generato Irkoo Site ID (IK-XXXXX) e il codice segreto nei spazi che seguono.',
    'IRKOO_PROVIDE_SITEID'                  => 'Fornici il Irkoo Site ID simile a IK-XXXXX.',
    'IRKOO_INVALID_SITEID'                  => 'Il Site ID inserito non e’ valido. Deve essere simile a IK-XXXXX.',
    'IRKOO_PROVIDE_SECRET'                  => 'Inserisci il codice segreto Irkoo.',
    'IRKOO_INVALID_SECRET'                  => 'Il codice segreto inserito non e’ valido.',

));
?>
