<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

require_once 'ot_billpay_fee.php';

$prefix = 'MODULE_ORDER_TOTAL_BILLPAYDEBIT_';
$parent = 'MODULE_ORDER_TOTAL_BILLPAY_';

define($prefix . 'FEE_TITLE', 'Sovrapprezzo per il metodo di pagamento con addebito diretto (BillPay)');
define($prefix . 'FEE_DESCRIPTION', 'Calcolo della tariffa per gli ordini con metodo di pagamento con addebito diretto (BillPay)');

$fields = array(
    'FEE_DESCRIPTION', 'FEE_STATUS_TITLE', 'FEE_STATUS_DESC', 'FEE_SORT_ORDER_TITLE', 'FEE_SORT_ORDER_DESC',
    'FEE_TYPE_TITLE', 'FEE_TYPE_DESC', 'FEE_PERCENT_TITLE', 'FEE_PERCENT_DESC', 'FEE_VALUE_TITLE', 'FEE_VALUE_DESC',
    'FEE_TAX_CLASS_TITLE', 'FEE_TAX_CLASS_DESC',
    'FEE_FROM_TOTAL',
);

foreach ($fields as $field) {
    defined($prefix . $field) || define($prefix . $field, constant($parent . $field));
}
