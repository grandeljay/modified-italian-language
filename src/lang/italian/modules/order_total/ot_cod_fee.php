<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('MODULE_ORDER_TOTAL_COD_FEE_TITLE', 'Spese di contrassegno');
define('MODULE_ORDER_TOTAL_COD_FEE_DESCRIPTION', 'Calcolo del carico C.O.D.');

define('MODULE_ORDER_TOTAL_COD_FEE_STATUS_TITLE', 'Spese di contrassegno');
define('MODULE_ORDER_TOTAL_COD_FEE_STATUS_DESC', 'Calcolo del carico C.O.D.');

define('MODULE_ORDER_TOTAL_COD_FEE_SORT_ORDER_TITLE', 'Ordine di classifica');
define('MODULE_ORDER_TOTAL_COD_FEE_SORT_ORDER_DESC', 'Ordine di visualizzazione');

define('MODULE_ORDER_TOTAL_COD_FEE_TAX_CLASS_TITLE', 'Classe fiscale');
define('MODULE_ORDER_TOTAL_COD_FEE_TAX_CLASS_DESC', 'Scelga una classe fiscale.');

$module_keys                  = str_replace('.php', '', MODULE_SHIPPING_INSTALLED);
$installed_shipping_modules   = explode(';', $module_keys);
$installed_shipping_modules[] = 'free';

if (count($installed_shipping_modules) > 0) {
    foreach ($installed_shipping_modules as $shipping_code) {
        $module_type   = 'shipping';
        $file          = $shipping_code . '.php';
        $shipping_code = strtoupper($shipping_code);
        $title         = '';

        if (defined('DIR_FS_LANGUAGES') && file_exists(DIR_FS_LANGUAGES . 'italian/modules/' . $module_type . '/' . $file)) {
            include_once DIR_FS_LANGUAGES . 'italian/modules/' . $module_type . '/' . $file;

            $title = constant('MODULE_SHIPPING_' . $shipping_code . '_TEXT_TITLE');
        }

        $title = 'FREE' === $shipping_code ? 'Spedizione gratuita (modulo riassuntivo ot_shipping)' : $title;

        $shipping_code = ('FREEAMOUNT' === $shipping_code) ? 'FREEAMOUNT_FREE' : 'FEE_' . $shipping_code;

        define('MODULE_ORDER_TOTAL_COD_' . $shipping_code . '_TITLE', $title);
        define(
            'MODULE_ORDER_TOTAL_COD_' . $shipping_code . '_DESC',
            '&lt;codice ISO2&gt;:&lt;prezzo&gt;, ....<br />
            00 perché il codice ISO2 consente il pagamento in contanti alla consegna in tutti i Paesi. Se
            00, questo deve essere inserito come ultimo argomento. Se
            00:9.99 non viene inserito, il contrassegno estero non verrà addebitato (non è possibile).
            (non possibile). Per escludere un singolo Paese, non inserisca un costo per quel Paese.
            per quel Paese. Esempio: DE:4.00,CH :,00:9.99<br />-&gt; Spiegazione: Spedizione a DE: 4.00 /
            Spedizione in CH: non possibile / Spedizione nel resto del mondo: 9,99'
        );
    }
}
