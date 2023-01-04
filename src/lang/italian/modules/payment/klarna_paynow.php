<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

$klarna_code = 'KLARNA_PAYNOW';

include DIR_FS_CATALOG . 'lang/italian/modules/payment/klarna.php';

$lang_array['MODULE_PAYMENT_' . $klarna_code . '_TEXT_TITLE']         = 'Klarna Paga Ora';
$lang_array['MODULE_PAYMENT_' . $klarna_code . '_TEXT_ERROR_MESSAGE'] = 'Il pagamento è stato annullato per il pagamento immediato.';

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
