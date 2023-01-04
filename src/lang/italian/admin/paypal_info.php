<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

$lang_array = array(
    'TEXT_PAYPAL_INFO_HEADING_TITLE' => 'Informazioni su PayPal',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
