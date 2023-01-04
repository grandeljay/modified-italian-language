<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('MODULE_EXCLUDE_PAYMENT_TEXT_TITLE', 'Metodi di pagamento in base al metodo di consegna');
define('MODULE_EXCLUDE_PAYMENT_TEXT_DESCRIPTION', '');
define('MODULE_EXCLUDE_PAYMENT_STATUS_TITLE', 'Stato');
define('MODULE_EXCLUDE_PAYMENT_STATUS_DESC', 'Attivare il modulo?');
define('MODULE_EXCLUDE_PAYMENT_NUMBER_TITLE', 'Numero di metodi di spedizione');
define('MODULE_EXCLUDE_PAYMENT_NUMBER_DESC', 'Il numero di tipi di posta da configurare.');

if (defined('MODULE_EXCLUDE_PAYMENT_NUMBER')) {
    for ($i = 1; $i <= MODULE_EXCLUDE_PAYMENT_NUMBER; $i++) {
        define('MODULE_EXCLUDE_PAYMENT_SHIPPING_' . $i . '_TITLE', '<hr noshade>' . $i . '. Metodo di invio');
        define('MODULE_EXCLUDE_PAYMENT_SHIPPING_' . $i . '_DESC', 'Selezionare il metodo di spedizione per il quale si desidera escludere un metodo di pagamento.');
        define('MODULE_EXCLUDE_PAYMENT_PAYMENT_' . $i . '_TITLE', $i . '. Metodo di pagamento escluso');
        define('MODULE_EXCLUDE_PAYMENT_PAYMENT_' . $i . '_DESC', 'Selezionare il metodo di pagamento che si desidera escludere.');
    }
}
