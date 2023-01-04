<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Pagamento anticipato/Bonifico bancario');
define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Coordinate bancarie :<br />' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? nl2br(MODULE_PAYMENT_MONEYORDER_PAYTO) : '') . '<br />Motivo del pagamento: %s<br /><br />Titolare del conto :<br />' . nl2br(STORE_OWNER) . '<br /><br />' . 'Il suo ordine le sarà inviato non appena il denaro sarà stato accreditato sul nostro conto.');
define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Coordinate bancarie : " . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '') . "\nScopo dell'utilizzo: %s\n\nTitolare del conto :\n" . STORE_OWNER . "\n\n" . 'Il suo ordine le sarà inviato non appena il denaro sarà stato accreditato sul nostro conto.');

if (defined('MODULE_PAYMENT_MONEYORDER_SUCCESS') && 'True' === MODULE_PAYMENT_MONEYORDER_SUCCESS) {
    define('MODULE_PAYMENT_MONEYORDER_TEXT_INFO', 'Spediremo il suo ordine dopo aver ricevuto il pagamento. Riceverà i dettagli del conto nell\'ultima fase dell\'ordine.');
} else {
    define('MODULE_PAYMENT_MONEYORDER_TEXT_INFO', 'Spediremo il suo ordine non appena il pagamento sarà stato ricevuto. Riceverà i dettagli del suo conto via e-mail dopo l\'accettazione dell\'ordine.');
}

define('MODULE_PAYMENT_MONEYORDER_STATUS_TITLE', 'Attivi il modulo Assegno/Vaglia');
define('MODULE_PAYMENT_MONEYORDER_STATUS_DESC', 'Desidera accettare il pagamento tramite assegno/vaglia?');
define('MODULE_PAYMENT_MONEYORDER_ALLOWED_TITLE', 'Aree consentite');
define('MODULE_PAYMENT_MONEYORDER_ALLOWED_DESC', 'Specifichi <b>individualmente</b> le zone che devono essere consentite per questo modulo (ad esempio, AT,DE (se vuoto, tutte le zone sono consentite)).');
define('MODULE_PAYMENT_MONEYORDER_PAYTO_TITLE', 'Pagabile all\'ordine di :');
define('MODULE_PAYMENT_MONEYORDER_PAYTO_DESC', 'A chi devono essere effettuati i pagamenti?');
define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_TITLE', 'Ordine di visualizzazione');
define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_DESC', 'Ordine di visualizzazione. Il numero più piccolo viene visualizzato per primo.');
define('MODULE_PAYMENT_MONEYORDER_ZONE_TITLE', 'Area di pagamento');
define('MODULE_PAYMENT_MONEYORDER_ZONE_DESC', 'Quando viene selezionata una zona, il metodo di pagamento si applica solo a quella zona.');
define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_TITLE', 'Impostare lo stato dell\'ordine');
define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_DESC', 'Imposta gli ordini effettuati con questo modulo in questo stato.');
define('MODULE_PAYMENT_MONEYORDER_SUCCESS_TITLE', 'Visualizza i dettagli della banca');
define('MODULE_PAYMENT_MONEYORDER_SUCCESS_DESC', 'Le coordinate bancarie devono essere presenti nella pagina del successo?');
