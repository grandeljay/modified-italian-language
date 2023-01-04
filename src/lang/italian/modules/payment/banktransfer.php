<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_TITLE', 'Flusso diretto');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_DESCRIPTION', 'Flusso diretto');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_INFO', '');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK', 'Flusso diretto');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_EMAIL_FOOTER', defined('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE') ? 'Nota: può scaricare il nostro modulo fax all\'indirizzo ' . HTTP_SERVER . DIR_WS_CATALOG . MODULO_PAYMENT_TRANSFER_BANK_URL_NOTE . 'e ce lo rispedisca completato.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_INFO', ((defined('MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY') && 'True' != MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY) ? 'La preghiamo di notare che l\'addebito diretto senza IBAN/BIC <b>è</b> possibile <b>solo</b> da un <b>conto corrente tedesco</b>. Specificando l\'IBAN/BIC, può utilizzare la procedura di addebito diretto <b>in tutta l\'UE</b>.<br/>' : '') . 'I campi contrassegnati con (*) sono obbligatori. Per un IBAN tedesco, il BIC è opzionale.<br/><br/>');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_OWNER', 'Titolare del conto:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_OWNER_EMAIL', 'Titolare dell\'account e-mail:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_NUMBER', 'WhoNr / IBAN:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_IBAN', 'IBAN:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_BLZ', 'BLZ / BIC:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_BIC', 'BIC:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_NAME', 'Banco :');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_FAX', 'L\'autorizzazione all\'addebito diretto viene confermata via fax.');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR', 'ERRORE : ');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_1', 'Il numero di conto e il codice bancario non corrispondono, la preghiamo di correggere le informazioni.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_2', 'Questo numero di conto non è verificabile, la preghiamo di ricontrollare la sua iscrizione per essere sicuro.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_3', 'Questo numero di conto non è verificabile, la preghiamo di ricontrollare la sua iscrizione per essere sicuro.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_4', 'Questo numero di conto non è verificabile, la preghiamo di ricontrollare la sua iscrizione per essere sicuro.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_5', 'Questo codice bancario non esiste, la preghiamo di correggere il suo inserimento.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_8', 'Non ha inserito un codice bancario corretto.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_9', 'Non ha inserito un numero di conto corretto.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_10', 'Non ha specificato il titolare del conto.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_11', 'Non ha inserito un BIC corretto.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_12', 'Non ha inserito un IBAN corretto.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_13', 'Indirizzo e-mail non valido per la notifica al titolare del conto.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_14', 'Non esiste un\'autorizzazione all\'addebito diretto per questo Paese SEPA.');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE', 'Suggerimento :');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE2', 'Se, per motivi di sicurezza, non desidera trasmettere i suoi dati bancari via internet<br />, può scaricare il nostro sito web ');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE3', 'Modulo fax');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE4', ' e ce lo rispedisca completato.');

define('JS_BANK_BLZ', '* Inserisca il BLZ / BIC della sua banca!');
define('JS_BANK_NAME', '* Inserisca il nome della sua banca.');
define('JS_BANK_NUMBER', '* Inserisca il suo numero di conto / numero IBAN');
define('JS_BANK_OWNER', '* Inserire il nome dell\'intestatario del conto.');
define('JS_BANK_OWNER_EMAIL', '* Inserire l\'indirizzo e-mail del titolare del conto.');

define('MODULE_PAYMENT_BANKTRANSFER_DATABASE_BLZ_TITLE', 'Utilizza il lookup del database per controllare il codice di ordinamento della banca?');
define('MODULE_PAYMENT_BANKTRANSFER_DATABASE_BLZ_DESC', 'Vuole utilizzare il database per il controllo di plausibilità del codice di ordinamento bancario ("true")?<br/>Si assicuri che i codici di selezione bancaria nel database siano aggiornati.<br/><br/>Se "false" (default), viene utilizzato il file blz.csv fornito, che potrebbe contenere voci non aggiornate!');
define('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE_TITLE', 'Fax-URL');
define('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE_DESC', 'Il file di conferma del fax. Deve trovarsi nella directory del catalogo');
define('MODULE_PAYMENT_BANKTRANSFER_FAX_CONFIRMATION_TITLE', 'Consentire la conferma via fax');
define('MODULE_PAYMENT_BANKTRANSFER_FAX_CONFIRMATION_DESC', 'Vuole consentire la conferma via fax?');
define('MODULE_PAYMENT_BANKTRANSFER_SORT_ORDER_TITLE', 'Ordine di visualizzazione');
define('MODULE_PAYMENT_BANKTRANSFER_SORT_ORDER_DESC', 'Ordine di visualizzazione. Il numero più piccolo viene visualizzato per primo.');
define('MODULE_PAYMENT_BANKTRANSFER_ORDER_STATUS_ID_TITLE', 'Impostare lo stato dell\'ordine');
define('MODULE_PAYMENT_BANKTRANSFER_ORDER_STATUS_ID_DESC', 'Imposta gli ordini effettuati con questo modulo in questo stato.');
define('MODULE_PAYMENT_BANKTRANSFER_ZONE_TITLE', 'Area di pagamento');
define('MODULE_PAYMENT_BANKTRANSFER_ZONE_DESC', 'Quando viene selezionata una zona, il metodo di pagamento si applica solo a quella zona.');
define('MODULE_PAYMENT_BANKTRANSFER_ALLOWED_TITLE', 'Aree consentite');
define('MODULE_PAYMENT_BANKTRANSFER_ALLOWED_DESC', 'Specifichi <b>individualmente</b> le zone che devono essere consentite per questo modulo (ad esempio, AT,DE (se vuoto, tutte le zone sono consentite)).');
define('MODULE_PAYMENT_BANKTRANSFER_STATUS_TITLE', 'Consentire i pagamenti tramite bonifico bancario');
define('MODULE_PAYMENT_BANKTRANSFER_STATUS_DESC', 'Vuole consentire i pagamenti tramite bonifico bancario?');
define('MODULE_PAYMENT_BANKTRANSFER_MIN_ORDER_TITLE', 'Condizioni d\'ordine');
define('MODULE_PAYMENT_BANKTRANSFER_MIN_ORDER_DESC', 'Il numero minimo di ordini che un cliente deve avere perché l\'opzione sia disponibile.');
define('MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY_TITLE', 'Modalità IBAN');
define('MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY_DESC', 'Vuole consentire solo i pagamenti con IBAN?');

define('MODULE_PAYMENT_BANKTRANSFER_CI_TITLE', 'Numero di identificazione del creditore (CI)');
define('MODULE_PAYMENT_BANKTRANSFER_CI_DESC', 'Inserisca qui il suo ID Creditore SEPA');
define('MODULE_PAYMENT_BANKTRANSFER_REFERENCE_PREFIX_TITLE', 'Prefisso per il riferimento del mandato (opzionale)');
define('MODULE_PAYMENT_BANKTRANSFER_REFERENCE_PREFIX_DESC', 'Inserisca qui un prefisso per il riferimento al mandato');
define('MODULE_PAYMENT_BANKTRANSFER_DUE_DELAY_TITLE', 'Maturo');
define('MODULE_PAYMENT_BANKTRANSFER_DUE_DELAY_DESC', 'Inserisca il periodo (in giorni) dopo il quale eseguirà l\'addebito diretto.');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_EXTENDED_DESCRIPTION', '<strong><font color="red">ATTENZIONE :</font></strong> Si prega di aggiornare i codici bancari');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_UPDATE_SUCCESS', 'Aggiornamento dei codici bancari: ');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_UPDATE_ERROR', 'Non è stato possibile aggiornare i codici bancari.');
