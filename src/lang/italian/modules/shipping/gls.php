<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('MODULE_SHIPPING_GLS_TEXT_TITLE', 'GLS');
define('MODULE_SHIPPING_GLS_TEXT_DESCRIPTION', 'GLS - Modulo di consegna a livello europeo');
define('MODULE_SHIPPING_GLS_TEXT_WAY', 'Spedizione a');
define('MODULE_SHIPPING_GLS_POSTCODE_INFO_TEXT', 'incluso il supplemento per l\'isola');
define('MODULE_SHIPPING_GLS_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_GLS_INVALID_ZONE', 'Siamo spiacenti, la spedizione in questo Paese non è possibile.');
define('MODULE_SHIPPING_GLS_UNDEFINED_RATE', 'Le spese di spedizione non possono essere calcolate in questo momento.');

define('MODULE_SHIPPING_GLS_STATUS_TITLE', 'GLS');
define('MODULE_SHIPPING_GLS_STATUS_DESC', 'Desidera offrire la spedizione tramite GLS?');
define('MODULE_SHIPPING_GLS_HANDLING_TITLE', 'Spese di elaborazione');
define('MODULE_SHIPPING_GLS_HANDLING_DESC', 'Spese di gestione per questo metodo di spedizione in euro');
define('MODULE_SHIPPING_GLS_TAX_CLASS_TITLE', 'Tipo di imposta');
define('MODULE_SHIPPING_GLS_TAX_CLASS_DESC', 'Selezioni l\'aliquota IVA per questo metodo di spedizione.');
define('MODULE_SHIPPING_GLS_ZONE_TITLE', 'Area di distribuzione');
define('MODULE_SHIPPING_GLS_ZONE_DESC', 'Se seleziona una zona, questo metodo di spedizione è offerto solo in quella zona.');
define('MODULE_SHIPPING_GLS_SORT_ORDER_TITLE', 'Ordine di visualizzazione');
define('MODULE_SHIPPING_GLS_SORT_ORDER_DESC', 'Il più basso viene visualizzato per primo.');
define('MODULE_SHIPPING_GLS_ALLOWED_TITLE', 'Zone di spedizione individuali');
define('MODULE_SHIPPING_GLS_ALLOWED_DESC', 'Specifichi <b>individualmente</b> le aree in cui la spedizione deve essere possibile, ad esempio AT,DE');
define('MODULE_SHIPPING_GLS_DISPLAY_TITLE', 'Attivare il display');
define('MODULE_SHIPPING_GLS_DISPLAY_DESC', 'Desidera indicare se la spedizione nel Paese non è possibile o se non è possibile calcolare i costi di spedizione?');

define('MODULE_SHIPPING_GLS_POSTCODE_TITLE', 'Supplemento Isola GLS - Codici postali');
define('MODULE_SHIPPING_GLS_POSTCODE_DESC', 'Aree con codice postale');
define('MODULE_SHIPPING_GLS_POSTCODE_EXTRA_COST_TITLE', 'Ricaricare le isole GLS - Costes');
define('MODULE_SHIPPING_GLS_POSTCODE_EXTRA_COST_DESC', 'Supplemento isola: inserisca l\'importo da aggiungere alle spese di spedizione se l\'indirizzo di consegna si trova su un\'isola tedesca.');

for ($i = 1; $i <= 6; $i++) {
    define('MODULE_SHIPPING_GLS_COUNTRIES_' . $i . '_TITLE', '<hr/>Zona ' . $i . ' L&auml;nder');
    define('MODULE_SHIPPING_GLS_COUNTRIES_' . $i . '_DESC', 'Elenco separato da virgola di codici Paese ISO (2 caratteri) che fanno parte di ' . $i . ' (Inserisca WORLD per il resto del mondo).');
    define('MODULE_SHIPPING_GLS_COST_' . $i . '_TITLE', 'Zona ' . $i . ' Costi di spedizione');
    define('MODULE_SHIPPING_GLS_COST_' . $i . '_DESC', 'Costi di spedizione per zona ' . $i . ' destinazioni, in base a un gruppo di peso massimo dell \'ordine. Esempio: 3:8.50,7:10.50,.... Un peso di 3 o meno costerebbe 8,50 per zona ' . $i . ' 8,50 per ogni Paese di destinazione.');
}
