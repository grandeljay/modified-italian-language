<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('MODULE_PAYMENT_MONEYBOOKERS_CSI_TEXT_TITLE', 'CartaSi');

$_var = 'CartaSi via Skrill';

if ('' === _PAYMENT_MONEYBOOKERS_EMAILID) {
    $_var .= '<br /><br /><b><font color="red">Effettui prima le impostazioni su<br /> Impostazioni avanzate -&gt; Partner -&gt; Skrill.com!</font></b>';
}

define('MODULE_PAYMENT_MONEYBOOKERS_CSI_TEXT_DESCRIPTION', $_var);
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_NOCURRENCY_ERROR', 'Non è installata alcuna valuta accettata da Skrill.');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_ERRORTEXT1', 'payment_error=');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_TEXT_INFO', '');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_ERRORTEXT2', '&amp;error=Errore durante il pagamento con Skrill!');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_ORDER_TEXT', 'Data dell\'ordine : ');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_TEXT_ERROR', 'Errore di pagamento!');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_CONFIRMATION_TEXT', 'Grazie per il suo ordine.');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_TRANSACTION_FAILED_TEXT', 'La sua transazione di pagamento con skrill.com non è andata a buon fine. Provi di nuovo o scelga un altro metodo di pagamento.');

define('MODULE_PAYMENT_MONEYBOOKERS_CSI_STATUS_TITLE', 'Skrill attivo');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_STATUS_DESC', 'Vuole accettare pagamenti tramite Skrill?');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_SORT_ORDER_TITLE', 'Ordine di visualizzazione');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_SORT_ORDER_DESC', 'Ordine di visualizzazione. Il numero più piccolo viene visualizzato per primo.');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_ZONE_TITLE', 'Area di pagamento');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_ZONE_DESC', 'Quando viene selezionata una zona, il metodo di pagamento si applica solo a quella zona.');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_ALLOWED_TITLE', 'Aree consentite');
define('MODULE_PAYMENT_MONEYBOOKERS_CSI_ALLOWED_DESC', 'Specifichi <b>individualmente</b> le zone che devono essere consentite per questo modulo (ad esempio, AT,DE (se vuoto, tutte le zone sono consentite)).');
