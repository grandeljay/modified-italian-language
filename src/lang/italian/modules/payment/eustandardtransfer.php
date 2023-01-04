<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_TITLE', 'Bonifico bancario standard UE');
define(
    'MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_DESCRIPTION',
    '<br />Il modo più economico e semplice per pagare all\'interno dell\'UE è il bonifico bancario utilizzando i codici IBAN e BIC' .
    '<br />Utilizzi i seguenti recapiti per trasferire l\'importo totale:<br />' .
    (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM') ? '<br />Nome della banca : ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM : '') .
    (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH')  ? '<br />Beneficiario : ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH : '') .
    (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM')  ? '<br />Codice bancario : ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM : '') .
    (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM')  ? '<br />Numero di conto : ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM : '') .
    (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN') ? '<br />IBAN : ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN : '') .
    (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC') ? '<br />BIC/SWIFT : ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC : '') .
    '<br />Uso previsto: %s' .
    '<br /><br />La merce sarà consegnata solo quando l\'importo sarà stato accreditato sul nostro conto.<br />'
);

if (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS') && 'True' === MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS) {
    define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_INFO', 'La preghiamo di trasferire l\'importo della fattura dovuta sul nostro conto. Riceverà i dettagli del conto nell\'ultima fase del processo d\'ordine.');
} else {
    define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_INFO', 'La preghiamo di trasferire l\'importo della fattura dovuta sul nostro conto. Riceverà i dettagli del conto via e-mail una volta accettato l\'ordine.');
}

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_STATUS_TITLE', 'Attivi il modulo di bonifico bancario standard UE');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_STATUS_DESC', 'Desidera accettare bonifici bancari?');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH_TITLE', 'Ricevitore');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH_DESC', 'Il destinatario del trasferimento.');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM_TITLE', 'Nome della banca');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM_DESC', 'Il nome completo della banca.');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM_TITLE', 'Codice bancario');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM_DESC', 'Il codice bancario del conto specificato.');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM_TITLE', 'Numero di conto');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM_DESC', 'Il suo numero di conto.');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN_TITLE', 'Cuenta bancaria IBAN');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN_DESC', 'ID conto internazionale.<br />(Chieda alla sua banca se non è sicuro).');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC_TITLE', 'Banca Bic');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC_DESC', 'ID bancario internazionale.<br />(Chieda alla sua banca se non è sicuro).');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SORT_ORDER_TITLE', 'Ordine di visualizzazione');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SORT_ORDER_DESC', 'Ordine di visualizzazione. Il numero più piccolo viene visualizzato per primo.');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ALLOWED_TITLE', 'Aree consentite');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ALLOWED_DESC', 'Specifichi <b>individualmente</b> le zone che devono essere consentite per questo modulo (ad esempio, AT,DE (se vuoto, tutte le zone sono consentite)).');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ZONE_TITLE', 'Area di pagamento');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ZONE_DESC', 'Quando viene selezionata una zona, il metodo di pagamento si applica solo a quella zona.');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ORDER_STATUS_ID_TITLE', 'Definire lo stato dell\'ordine');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ORDER_STATUS_ID_DESC', 'Imposta gli ordini effettuati con questo modulo in questo stato.');

define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS_TITLE', 'Visualizza i dettagli della banca');
define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS_DESC', 'Le coordinate bancarie devono essere presenti nella pagina del successo?');
