<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('MODULE_SHIPPING_DP_TEXT_TITLE', 'Poste allemande');
define('MODULE_SHIPPING_DP_TEXT_DESCRIPTION', 'Deutsche Post - Modulo di consegna globale');
define('MODULE_SHIPPING_DP_TEXT_WAY', 'Spedizione a');
define('MODULE_SHIPPING_DP_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_DP_INVALID_ZONE', 'Siamo spiacenti, la spedizione in questo Paese non è possibile.');
define('MODULE_SHIPPING_DP_UNDEFINED_RATE', 'Le spese di spedizione non possono essere calcolate in questo momento.');

define('MODULE_SHIPPING_DP_STATUS_TITLE', 'Posta WorldNet tedesca');
define('MODULE_SHIPPING_DP_STATUS_DESC', 'Vuole offrire la consegna tramite posta tedesca?');
define('MODULE_SHIPPING_DP_HANDLING_TITLE', 'Spese di elaborazione');
define('MODULE_SHIPPING_DP_HANDLING_DESC', 'Spese di gestione per questo metodo di spedizione in euro');
define('MODULE_SHIPPING_DP_TAX_CLASS_TITLE', 'Classe fiscale');
define('MODULE_SHIPPING_DP_TAX_CLASS_DESC', 'Applichi la seguente aliquota fiscale alle spese di spedizione.');
define('MODULE_SHIPPING_DP_ZONE_TITLE', 'Area di distribuzione');
define('MODULE_SHIPPING_DP_ZONE_DESC', 'Se seleziona una zona, questo metodo di spedizione è offerto solo in quella zona.');
define('MODULE_SHIPPING_DP_SORT_ORDER_TITLE', 'Ordine di visualizzazione');
define('MODULE_SHIPPING_DP_SORT_ORDER_DESC', 'Il più basso viene visualizzato per primo.');
define('MODULE_SHIPPING_DP_ALLOWED_TITLE', 'Zone di spedizione individuali');
define('MODULE_SHIPPING_DP_ALLOWED_DESC', 'Specifichi <b>individualmente</b> le aree in cui la spedizione deve essere possibile, ad esempio AT,DE');
define('MODULE_SHIPPING_DP_NUMBER_ZONES_TITLE', 'Numero di zone');
define('MODULE_SHIPPING_DP_NUMBER_ZONES_DESC', 'Numero di aree pianificate');
define('MODULE_SHIPPING_DP_DISPLAY_TITLE', 'Attivare il display');
define('MODULE_SHIPPING_DP_DISPLAY_DESC', 'Desidera indicare se la spedizione nel Paese non è possibile o se non è possibile calcolare i costi di spedizione?');

if (defined('MODULE_SHIPPING_DP_NUMBER_ZONES')) {
    for ($i = 1; $i <= MODULE_SHIPPING_DP_NUMBER_ZONES; $i++) {
        define('MODULE_SHIPPING_DP_COUNTRIES_' . $i . '_TITLE', '<hr/>Zona "DP"' . $i . ' L&auml;nder');
        define('MODULE_SHIPPING_DP_COUNTRIES_' . $i . '_DESC', 'Elenco separato da una virgola di codici Paese ISO a 2 cifre per l\'area ' . $i . ' (Inserisca WORLD per il resto del mondo).');
        define('MODULE_SHIPPING_DP_COST_' . $i . '_TITLE', 'Zona DP ' . $i . ' Tabella di spedizione');
        define('MODULE_SHIPPING_DP_COST_' . $i . '_DESC', 'Costi di spedizione per la regione ' . $i . ' legato al peso dell\'ordine. Beispiel: 3:8.50,7:10.50,99999:12.00... I pesi superiori a 0 e inferiori a 3 costano 8,50, i pesi inferiori a 7 costano 10,50 per il ' . $i . '.');
    }
}
