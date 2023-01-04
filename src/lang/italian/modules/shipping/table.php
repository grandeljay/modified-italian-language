<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('MODULE_SHIPPING_TABLE_TEXT_TITLE', 'Tabella dei costi di spedizione');
define('MODULE_SHIPPING_TABLE_TEXT_DESCRIPTION', 'Tabella dei costi di spedizione');
define('MODULE_SHIPPING_TABLE_TEXT_WAY', 'Il modo migliore');
define('MODULE_SHIPPING_TABLE_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_TABLE_TEXT_WEIGHT', 'Poids');
define('MODULE_SHIPPING_TABLE_TEXT_AMOUNT', 'Cantidad');
define('MODULE_SHIPPING_TABLE_UNDEFINED_RATE', 'Le spese di spedizione non possono essere calcolate in questo momento.');
define('MODULE_SHIPPING_TABLE_INVALID_ZONE', 'La spedizione in questo Paese non è possibile!');

define('MODULE_SHIPPING_TABLE_STATUS_TITLE', 'Attivare i costi di spedizione tabellari');
define('MODULE_SHIPPING_TABLE_STATUS_DESC', 'Desidera offrire una tabella dei costi di spedizione?');
define('MODULE_SHIPPING_TABLE_ALLOWED_TITLE', 'Aree di imbarco autorizzate');
define('MODULE_SHIPPING_TABLE_ALLOWED_DESC', 'Specifichi <b>individualmente</b> le zone verso le quali l\'invio deve essere possibile (ad esempio, AT,DE (lasci questo campo vuoto se desidera consentire tutte le zone)).');
define('MODULE_SHIPPING_TABLE_MODE_TITLE', 'Metodo di spedizione');
define('MODULE_SHIPPING_TABLE_MODE_DESC', 'Le spese di spedizione si basano sul costo totale o sul peso della merce ordinata.');
define('MODULE_SHIPPING_TABLE_TAX_CLASS_TITLE', 'Classe fiscale');
define('MODULE_SHIPPING_TABLE_TAX_CLASS_DESC', 'Applichi la seguente aliquota fiscale alle spese di spedizione');
define('MODULE_SHIPPING_TABLE_ZONE_TITLE', 'Versandzone');
define('MODULE_SHIPPING_TABLE_ZONE_DESC', 'Quando viene selezionata una zona, questo metodo di spedizione viene utilizzato esclusivamente per quella zona.');
define('MODULE_SHIPPING_TABLE_SORT_ORDER_TITLE', 'Ordine di classifica');
define('MODULE_SHIPPING_TABLE_SORT_ORDER_DESC', 'Ordine di visualizzazione');
define('MODULE_SHIPPING_TABLE_NUMBER_ZONES_TITLE', 'Numero di zone');
define('MODULE_SHIPPING_TABLE_NUMBER_ZONES_DESC', 'Numero di aree pianificate');
define('MODULE_SHIPPING_TABLE_DISPLAY_TITLE', 'Attivare il display');
define('MODULE_SHIPPING_TABLE_DISPLAY_DESC', 'Vuole indicare se la spedizione nel Paese non è possibile o se i costi di spedizione non possono essere calcolati?');

if (defined('MODULE_SHIPPING_TABLE_NUMBER_ZONES')) {
    for ($i = 1; $i <= MODULE_SHIPPING_TABLE_NUMBER_ZONES; $i++) {
        define('MODULE_SHIPPING_TABLE_COUNTRIES_' . $i . '_TITLE', '<hr/>Zona ' . $i . ' L&auml;nder');
        define('MODULE_SHIPPING_TABLE_COUNTRIES_' . $i . '_DESC', 'Elenco separato da virgola di codici Paese ISO (2 caratteri) che fanno parte di ' . $i . ' (Inserisca WORLD per il resto del mondo).');
        define('MODULE_SHIPPING_TABLE_COST_' . $i . '_TITLE', 'Zona ' . $i . ' Costi di spedizione');
        define('MODULE_SHIPPING_TABLE_COST_' . $i . '_DESC', 'Spese di spedizione per zona ' . $i . ' destinazioni, in base a un gruppo di peso massimo dell\'ordine o a un valore del carrello, a seconda della configurazione del modulo. Esempio: 3:8.50, 7:10.50,... Un peso/prezzo inferiore o uguale a 3 costerebbe 8,50 per zona ' . $i . ' Paese di destinazione.');
        define('MODULE_SHIPPING_TABLE_HANDLING_' . $i . '_TITLE', 'Area ' . $i . ' Costi del trattamento');
        define('MODULE_SHIPPING_TABLE_HANDLING_' . $i . '_DESC', 'Spese di gestione per questa area di spedizione');
    }
}
