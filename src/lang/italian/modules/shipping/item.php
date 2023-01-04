<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('MODULE_SHIPPING_ITEM_TEXT_TITLE', 'Costi di spedizione per pezzo');
define('MODULE_SHIPPING_ITEM_TEXT_DESCRIPTION', 'Costi di spedizione per pezzo');
define('MODULE_SHIPPING_ITEM_TEXT_WAY', 'Il modo migliore');
define('MODULE_SHIPPING_ITEM_INVALID_ZONE', 'Siamo spiacenti, la spedizione in questo Paese non è possibile.');

define('MODULE_SHIPPING_ITEM_STATUS_TITLE', 'Abilita le spese di spedizione per pezzo');
define('MODULE_SHIPPING_ITEM_STATUS_DESC', 'Desidera offrire i costi di spedizione per pezzo?');
define('MODULE_SHIPPING_ITEM_ALLOWED_TITLE', 'Aree di imbarco autorizzate');
define('MODULE_SHIPPING_ITEM_ALLOWED_DESC', 'Specifichi <b>individualmente</b> le zone verso le quali l\'invio deve essere possibile (ad esempio, AT,DE (lasci questo campo vuoto se desidera consentire tutte le zone)).');
define('MODULE_SHIPPING_ITEM_TAX_CLASS_TITLE', 'Classe fiscale');
define('MODULE_SHIPPING_ITEM_TAX_CLASS_DESC', 'Applichi la seguente aliquota fiscale alle spese di spedizione');
define('MODULE_SHIPPING_ITEM_ZONE_TITLE', 'Versandzone');
define('MODULE_SHIPPING_ITEM_ZONE_DESC', 'Quando viene selezionata una zona, questo metodo di spedizione viene utilizzato esclusivamente per quella zona.');
define('MODULE_SHIPPING_ITEM_SORT_ORDER_TITLE', 'Ordine di classifica');
define('MODULE_SHIPPING_ITEM_SORT_ORDER_DESC', 'Ordine di visualizzazione');
define('MODULE_SHIPPING_ITEM_NUMBER_ZONES_TITLE', 'Numero di zone');
define('MODULE_SHIPPING_ITEM_NUMBER_ZONES_DESC', 'Numero di aree pianificate');
define('MODULE_SHIPPING_ITEM_DISPLAY_TITLE', 'Attivare il display');
define('MODULE_SHIPPING_ITEM_DISPLAY_DESC', 'Desidera indicare se la spedizione nel Paese non è possibile o se non è possibile calcolare i costi di spedizione?');

if (defined('MODULE_SHIPPING_ITEM_NUMBER_ZONES')) {
    for ($i = 1; $i <= MODULE_SHIPPING_ITEM_NUMBER_ZONES; $i++) {
        define('MODULE_SHIPPING_ITEM_COUNTRIES_' . $i . '_TITLE', '<hr/>Zona ' . $i . ' L&auml;nder');
        define('MODULE_SHIPPING_ITEM_COUNTRIES_' . $i . '_DESC', 'Elenco separato da virgola di codici Paese ISO (2 caratteri) che fanno parte di ' . $i . ' (Inserisca WORLD per il resto del mondo).');
        define('MODULE_SHIPPING_ITEM_COST_' . $i . '_TITLE', 'Zona ' . $i . ' Costi di spedizione');
        define('MODULE_SHIPPING_ITEM_COST_' . $i . '_DESC', 'Spese di spedizione per zona ' . $i . ' vengono moltiplicati per il numero di articoli di un ordine, se viene specificato questo metodo di spedizione.');
        define('MODULE_SHIPPING_ITEM_HANDLING_' . $i . '_TITLE', 'Area ' . $i . ' Costi del trattamento');
        define('MODULE_SHIPPING_ITEM_HANDLING_' . $i . '_DESC', 'Spese di gestione per questa area di spedizione');
    }
}
