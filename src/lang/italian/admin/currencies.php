<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('HEADING_TITLE', 'Divisas');

define('TABLE_HEADING_CURRENCY_NAME', 'Ideare');
define('TABLE_HEADING_CURRENCY_CODES', 'Abbreviazione');
define('TABLE_HEADING_CURRENCY_VALUE', 'Valore');
define('TABLE_HEADING_ACTION', 'Azione');
define('TABLE_HEADING_CURRENCY_STATUS', 'Stato');

define('TEXT_INFO_EDIT_INTRO', 'Apporti le modifiche necessarie');
define('TEXT_INFO_CURRENCY_TITLE', 'Nome :');
define('TEXT_INFO_CURRENCY_CODE', 'Code devise selon la norme ISO 4217 :');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Simbolo a sinistra :');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Simbolo a destra :');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', 'Punto decimale :');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', 'Mille punti :');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Decimali :');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', 'Ultima modifica :');
define('TEXT_INFO_CURRENCY_VALUE', 'Valore :');
define('TEXT_INFO_CURRENCY_EXAMPLE', 'Esempio:');
define('TEXT_INFO_INSERT_INTRO', 'Inserisca la nuova valuta con tutti i dati pertinenti.');
define('TEXT_INFO_DELETE_INTRO', 'È sicuro di voler eliminare questo motto?');
define('TEXT_INFO_HEADING_NEW_CURRENCY', 'nuova valuta');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', 'Cambiare la valuta');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', 'Moneda de forage');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . '(è necessario un aggiornamento manuale dei tassi di cambio).');
define('TEXT_INFO_CURRENCY_UPDATED', 'Il tasso di cambio %s (%s) è stato aggiornato correttamente.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Errore: impossibile rimuovere la valuta predefinita. Imposti una nuova valuta predefinita e ripeta la procedura.');
define('ERROR_CURRENCY_INVALID', 'Errore: il tasso di cambio di %s (%s) non è stato aggiornato. È un\'abbreviazione di valuta valida?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Il servizio primario \'%s\' non è stato in grado di determinare il tasso di cambio %s o non è disponibile. Viene effettuato un nuovo tentativo tramite il servizio secondario.');
