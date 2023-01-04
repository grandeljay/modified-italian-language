<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('MODULE_SHIPPING_AP_TEXT_TITLE', 'La Posta austriaca');
define('MODULE_SHIPPING_AP_TEXT_DESCRIPTION', '&Ouml;sterreichische Post AG - Modulo di spedizione globale');
define('MODULE_SHIPPING_AP_TEXT_WAY', 'Spedizione a');
define('MODULE_SHIPPING_AP_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_AP_INVALID_ZONE', 'Siamo spiacenti, la spedizione in questo Paese non è possibile.');
define('MODULE_SHIPPING_AP_UNDEFINED_RATE', 'Le spese di spedizione non possono essere calcolate in questo momento.');

define('MODULE_SHIPPING_AP_STATUS_TITLE', 'La Posta austriaca');
define('MODULE_SHIPPING_AP_STATUS_DESC', 'Vuole offrire la consegna da parte di &Ouml;sterreichische Post AG?');
define('MODULE_SHIPPING_AP_TAX_CLASS_TITLE', 'Tipo di imposta');
define('MODULE_SHIPPING_AP_TAX_CLASS_DESC', 'Selezioni l\'aliquota IVA per questo metodo di spedizione.');
define('MODULE_SHIPPING_AP_ZONE_TITLE', 'Area di distribuzione');
define('MODULE_SHIPPING_AP_ZONE_DESC', 'Se seleziona una zona, questo metodo di spedizione è offerto solo in quella zona.');
define('MODULE_SHIPPING_AP_SORT_ORDER_TITLE', 'Ordine di visualizzazione');
define('MODULE_SHIPPING_AP_SORT_ORDER_DESC', 'Il più basso viene visualizzato per primo.');
define('MODULE_SHIPPING_AP_ALLOWED_TITLE', 'Zone di spedizione individuali');
define('MODULE_SHIPPING_AP_ALLOWED_DESC', 'Specifichi <b>individualmente</b> le aree in cui la spedizione deve essere possibile, ad esempio AT,DE');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_TITLE', 'Numero di zone');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_DESC', 'Numero di aree pianificate');
define('MODULE_SHIPPING_AP_DISPLAY_TITLE', 'Attivare il display');
define('MODULE_SHIPPING_AP_DISPLAY_DESC', 'Desidera indicare se la spedizione nel Paese non è possibile o se non è possibile calcolare i costi di spedizione?');

if (defined('MODULE_SHIPPING_AP_NUMBER_ZONES')) {
    for ($i = 1; $i <= MODULE_SHIPPING_AP_NUMBER_ZONES; $i++) {
        define('MODULE_SHIPPING_AP_COUNTRIES_' . $i . '_TITLE', '<hr/>Zona ' . $i . ' L&auml;nder');
        define('MODULE_SHIPPING_AP_COUNTRIES_' . $i . '_DESC', 'Elenco separato da virgola di codici Paese ISO (2 caratteri) che fanno parte di ' . $i . ' (Inserisca WORLD per il resto del mondo).');
        define('MODULE_SHIPPING_AP_COST_' . $i . '_TITLE', 'Zona ' . $i . ' Tabella delle tariffe fino a 20 kg');
        define('MODULE_SHIPPING_AP_COST_' . $i . '_DESC', 'Costi di spedizione per zona ' . $i . ' destinazioni, in base a un gruppo di peso massimo dell\'ordine. Esempio: 3:8.50,7:10.50,.... Un peso di 3 o meno costerebbe 8,50 per zona ' . $i . ' 8,50 per ogni Paese di destinazione.');
        define('MODULE_SHIPPING_AP_HANDLING_' . $i . '_TITLE', 'Area ' . $i . ' Costi del trattamento');
        define('MODULE_SHIPPING_AP_HANDLING_' . $i . '_DESC', 'Spese di gestione per questa area di spedizione');
    }
}
