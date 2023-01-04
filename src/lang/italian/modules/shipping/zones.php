<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('MODULE_SHIPPING_ZONES_TEXT_TITLE', 'Costi di spedizione per zona');
define('MODULE_SHIPPING_ZONES_TEXT_DESCRIPTION', 'Costi di spedizione per zona');
define('MODULE_SHIPPING_ZONES_TEXT_WAY', 'Spedizione a :');
define('MODULE_SHIPPING_ZONES_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_ZONES_INVALID_ZONE', 'La spedizione in questo Paese non è possibile!');
define('MODULE_SHIPPING_ZONES_UNDEFINED_RATE', 'Le spese di spedizione non possono essere calcolate in questo momento.');

define('MODULE_SHIPPING_ZONES_STATUS_TITLE', 'Attivare il metodo di misurazione zonale');
define('MODULE_SHIPPING_ZONES_STATUS_DESC', 'Desidera offrire le spese di consegna per zona?');
define('MODULE_SHIPPING_ZONES_ALLOWED_TITLE', 'Aree di imbarco autorizzate');
define('MODULE_SHIPPING_ZONES_ALLOWED_DESC', 'Specifichi <b>individualmente</b> le zone verso le quali l\'invio deve essere possibile (ad esempio, AT,DE (lasci questo campo vuoto se desidera consentire tutte le zone)).');
define('MODULE_SHIPPING_ZONES_TAX_CLASS_TITLE', 'Classe fiscale');
define('MODULE_SHIPPING_ZONES_TAX_CLASS_DESC', 'Applichi la seguente aliquota fiscale alle spese di spedizione');
define('MODULE_SHIPPING_ZONES_ZONE_TITLE', 'Area di distribuzione');
define('MODULE_SHIPPING_ZONES_ZONE_DESC', 'Se seleziona una zona, questo metodo di spedizione è offerto solo in quella zona.');
define('MODULE_SHIPPING_ZONES_SORT_ORDER_TITLE', 'Ordine di classifica');
define('MODULE_SHIPPING_ZONES_SORT_ORDER_DESC', 'Ordine di visualizzazione');
define('MODULE_SHIPPING_ZONES_NUMBER_ZONES_TITLE', 'Numero di zone');
define('MODULE_SHIPPING_ZONES_NUMBER_ZONES_DESC', 'Numero di aree pianificate');
define('MODULE_SHIPPING_ZONES_DISPLAY_TITLE', 'Attivare il display');
define('MODULE_SHIPPING_ZONES_DISPLAY_DESC', 'Desidera indicare se la spedizione nel Paese non è possibile o se non è possibile calcolare i costi di spedizione?');

if (defined('MODULE_SHIPPING_ZONES_NUMBER_ZONES')) {
    for ($i = 1; $i <= MODULE_SHIPPING_ZONES_NUMBER_ZONES; $i++) {
        define('MODULE_SHIPPING_ZONES_COUNTRIES_' . $i . '_TITLE', '<hr/>Zona ' . $i . ' L&auml;nder');
        define('MODULE_SHIPPING_ZONES_COUNTRIES_' . $i . '_DESC', 'Elenco separato da virgola di codici Paese ISO (2 caratteri) che fanno parte di ' . $i . ' (Inserisca WORLD per il resto del mondo).');
        define('MODULE_SHIPPING_ZONES_COST_' . $i . '_TITLE', 'Zona ' . $i . ' Costi di spedizione');
        define('MODULE_SHIPPING_ZONES_COST_' . $i . '_DESC', 'Costi di spedizione per zona ' . $i . ' destinazioni, in base a un gruppo di peso massimo dell\'ordine. Esempio: 3:8.50,7:10.50,.... Un peso di 3 o meno costerebbe 8,50 per zona ' . $i . ' 8,50 per ogni Paese di destinazione.');
        define('MODULE_SHIPPING_ZONES_HANDLING_' . $i . '_TITLE', 'Area ' . $i . ' Costi del trattamento');
        define('MODULE_SHIPPING_ZONES_HANDLING_' . $i . '_DESC', 'Spese di gestione per questa area di spedizione');
    }
}
