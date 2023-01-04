<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('MODULE_SHIPPING_FREEAMOUNT_TEXT_TITLE', 'Spedizione gratuita');
define('MODULE_SHIPPING_FREEAMOUNT_TEXT_DESCRIPTION', 'Spedizione gratuita');
define('MODULE_SHIPPING_FREEAMOUNT_TEXT_WAY', 'a partire da %s del valore dell\'ordine spediamo il suo ordine gratuitamente');
define('MODULE_SHIPPING_FREEAMOUNT_INVALID_ZONE', 'Siamo spiacenti, la spedizione in questo Paese non è possibile.');

define('MODULE_SHIPPING_FREEAMOUNT_ALLOWED_TITLE', 'Aree di imbarco autorizzate');
define('MODULE_SHIPPING_FREEAMOUNT_ALLOWED_DESC', 'Specifichi <b>individualmente</b> le zone verso le quali l\'invio deve essere possibile (ad esempio, AT,DE (lasci questo campo vuoto se desidera consentire tutte le zone)).');
define('MODULE_SHIPPING_FREEAMOUNT_STATUS_TITLE', 'Attivare la spedizione gratuita');
define('MODULE_SHIPPING_FREEAMOUNT_STATUS_DESC', 'Vuole offrire la consegna gratuita?');
define('MODULE_SHIPPING_FREEAMOUNT_ZONE_TITLE', 'Area di distribuzione');
define('MODULE_SHIPPING_FREEAMOUNT_ZONE_DESC', 'Se seleziona una zona, questo metodo di spedizione è offerto solo in quella zona.');
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER_TITLE', 'Ordine di classifica');
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER_DESC', 'Ordine di visualizzazione');
define('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES_TITLE', 'Numero di zone');
define('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES_DESC', 'Numero di aree pianificate');
define('MODULE_SHIPPING_FREEAMOUNT_DISPLAY_TITLE', 'Attivare il display');
define('MODULE_SHIPPING_FREEAMOUNT_DISPLAY_DESC', 'Vuole indicare se la spedizione nel Paese non è possibile o se i costi di spedizione non possono essere calcolati?');

if (defined('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES')) {
    for ($i = 1; $i <= MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES; $i++) {
        define('MODULE_SHIPPING_FREEAMOUNT_COUNTRIES_' . $i . '_TITLE', '<hr/>Zona ' . $i . ' L&auml;nder');
        define('MODULE_SHIPPING_FREEAMOUNT_COUNTRIES_' . $i . '_DESC', 'Elenco separato da virgola di codici Paese ISO (2 caratteri) che fanno parte di ' . $i . ' (Inserisca WORLD per il resto del mondo).');
        define('MODULE_SHIPPING_FREEAMOUNT_AMOUNT_' . $i . '_TITLE', 'Zona ' . $i . ' Importazione minima');
        define('MODULE_SHIPPING_FREEAMOUNT_AMOUNT_' . $i . '_DESC', 'Valore minimo dell\'ordine per la zona ' . $i . ' per la spedizione gratuita.');
    }
}
