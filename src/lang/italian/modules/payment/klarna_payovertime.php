<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

$klarna_code = 'KLARNA_PAYOVERTIME';

include DIR_FS_CATALOG . 'lang/italian/modules/payment/klarna.php';

$lang_array['MODULE_PAYMENT_' . $klarna_code . '_TEXT_TITLE']         = 'Posizione-vento Klarna';
$lang_array['MODULE_PAYMENT_' . $klarna_code . '_TEXT_ERROR_MESSAGE'] = 'Il pagamento dell\'acquisto a rate è stato annullato.';

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
