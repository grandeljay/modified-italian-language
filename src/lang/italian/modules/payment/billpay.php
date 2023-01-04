<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('MODULE_PAYMENT_BILLPAY_TEXT_TITLE', 'BillPay - Factura');
define('MODULE_PAYMENT_BILLPAY_TEXT_DESCRIPTION', 'BillPay - Factura');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_MESSAGE', 'Messaggio di errore BillPay');
define('MODULE_PAYMENT_BILLPAY_TEXT_INFO', '<div style="margin-top:6px"><img src="https://www.billpay.de/wp-content/uploads/2011/04/LogoSmall_0.png" alt="BillPay Logo" title="BillPay Logo" /></div>');

define('MODULE_PAYMENT_BILLPAY_ALLOWED_TITLE', 'Aree consentite');
define('MODULE_PAYMENT_BILLPAY_ALLOWED_DESC', 'Specifichi individualmente le zone che devono essere consentite per questo modulo (ad esempio, AT,DE (se vuoto, tutte le zone sono consentite)).');

define('MODULE_PAYMENT_BILLPAY_LOGGING_TITLE', 'Percorso assoluto del file di registro');
define('MODULE_PAYMENT_BILLPAY_LOGGING_DESC', 'Se non viene impostato alcun valore, l\'impostazione predefinita prevede la scrittura nella directory /includes/external/billpay/log (i permessi di scrittura devono essere disponibili).');

define('MODULE_PAYMENT_BILLPAY_GS_MERCHANT_ID_TITLE', 'Identificazione del venditore');
define('MODULE_PAYMENT_BILLPAY_GS_MERCHANT_ID_DESC', 'Lei riceve questi dati da BillPay');

define('MODULE_PAYMENT_BILLPAY_ORDER_STATUS_TITLE', 'Imposta lo stato dell\'ordine');
define('MODULE_PAYMENT_BILLPAY_ORDER_STATUS_DESC', 'Imposta gli ordini effettuati con questo modulo in questo stato.');

define('MODULE_PAYMENT_BILLPAY_GS_PORTAL_ID_TITLE', 'ID portale');
define('MODULE_PAYMENT_BILLPAY_GS_PORTAL_ID_DESC', 'Lei riceve questi dati da BillPay');

define('MODULE_PAYMENT_BILLPAY_GS_SECURE_TITLE', 'Chiave di sicurezza');
define('MODULE_PAYMENT_BILLPAY_GS_SECURE_DESC', 'Lei riceve questi dati da BillPay');

define('MODULE_PAYMENT_BILLPAY_GS_PUBLIC_API_KEY_TITLE', 'Chiave API pubblica');
define('MODULE_PAYMENT_BILLPAY_GS_PUBLIC_API_KEY_DESC', 'Lei riceve questi dati da BillPay');

define('MODULE_PAYMENT_BILLPAY_SORT_ORDER_TITLE', 'Ordine di visualizzazione');
define('MODULE_PAYMENT_BILLPAY_SORT_ORDER_DESC', 'Ordine di visualizzazione. Il numero più piccolo viene visualizzato per primo.');

define('MODULE_PAYMENT_BILLPAY_STATUS_TITLE', 'Attivato');
define('MODULE_PAYMENT_BILLPAY_STATUS_DESC', 'Vuole autorizzare l\'acquisto su conto con BillPay?');

define('MODULE_PAYMENT_BILLPAY_GS_TESTMODE_TITLE', 'Modalità transazionale');
define('MODULE_PAYMENT_BILLPAY_GS_TESTMODE_DESC', 'In modalità test, vengono visualizzati messaggi di errore dettagliati. Per un funzionamento produttivo, è necessario attivare la modalità diretta.');

define('MODULE_PAYMENT_BILLPAY_ZONE_TITLE', 'Zona fiscal');
define('MODULE_PAYMENT_BILLPAY_ZONE_DESC', '');

define('MODULE_PAYMENT_BILLPAY_GS_API_URL_BASE_TITLE', 'API di base d\'url');
define('MODULE_PAYMENT_BILLPAY_GS_API_URL_BASE_DESC', 'Riceverà questi dati da BillPay (Attenzione! Gli URL del sistema di prova e del sistema live sono diversi).');

define('MODULE_PAYMENT_BILLPAY_GS_TESTAPI_URL_BASE_TITLE', 'URL di base Test API');
define('MODULE_PAYMENT_BILLPAY_GS_TESTAPI_URL_BASE_DESC', 'Riceverà questi dati da BillPay (Attenzione! Gli URL del sistema di prova e del sistema live sono diversi).');

define('MODULE_PAYMENT_BILLPAY_LOGGING_ENABLE_TITLE', 'Registrazione attivata');
define('MODULE_PAYMENT_BILLPAY_LOGGING_ENABLE_DESC', 'Le richieste all\'interfaccia di pagamento BillPay devono essere scritte nel file di log?');

define('MODULE_PAYMENT_BILLPAY_MIN_AMOUNT_TITLE', 'Valore minimo dell\'ordine');
define('MODULE_PAYMENT_BILLPAY_MIN_AMOUNT_DESC', 'Da questo valore dell\'ordine, viene visualizzato il metodo di pagamento.');

define('MODULE_PAYMENT_BILLPAY_LOGPATH_TITLE', 'Percorso di registrazione');
define('MODULE_PAYMENT_BILLPAY_LOGPATH_DESC', '');

define('MODULE_PAYMENT_BILLPAY_GS_HTTP_X_TITLE', 'X_FORWARDED_FOR activer');
define('MODULE_PAYMENT_BILLPAY_GS_HTTP_X_DESC', 'Attivi questa funzione se il suo negozio funziona su un sistema cloud.');

define('MODULE_PAYMENT_BILLPAY_HTTP_X_TITLE', 'X_FORWARDED_FOR activer');
define('MODULE_PAYMENT_BILLPAY_HTTP_X_DESC', 'Attivi questa funzione se il suo negozio funziona su un sistema cloud.');

define('MODULE_PAYMENT_BILLPAY_TEXT_BIRTHDATE', 'Data di nascita');
define('MODULE_PAYMENT_BILLPAY_TEXT_PHONE', 'Numero di telefono');
define('MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK', 'Accetto che i dati necessari per l\'elaborazione dell\'acquisto del conto e per il controllo dell\'identità e del credito vengano trasmessi a <a href="https://www.billpay.de/endkunden/" target="blank">BillPay GmbH</a>. Si applicano le <a href="%s" target="_blank">norme sulla protezione dei dati di</a> BillPay.');
define('MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK_CH', '<label for="billpay_eula">Con la presente confermo i <a href="https://www.billpay.de/kunden/agb-ch" target="_blank">termini e le condizioni generali e l\'</a> <a href="https://www.billpay.de/kunden/agb-ch#datenschutz" target="_blank">informativa sulla privacy di</a> BillPay GmbH.</label> <br />');

define('MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK_SEPA', "Accetto che i dati necessari per l'elaborazione del pagamento e per il controllo dell'identità e del credito vengano trasmessi a <a href='https://www.billpay.de/endkunden/' target='_blank'>BillPay GmbH</a>. L'<a href='%s' target='_blank'>informativa sulla privacy</a> di BillPay.<br/><br/> Concedo a BillPay un mandato di addebito diretto SEPA<a href='#' class='bpy-btn-details'>(dettagli</a>) per riscuotere i pagamenti dovuti e do istruzioni al mio istituto di credito di riscuotere gli addebiti diretti.");
define('MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK_SEPA_AT', "Accetto che i dati necessari per l'elaborazione del pagamento e per il controllo dell'identità e del credito vengano trasmessi a <a href='https://www.billpay.de/endkunden/' target='_blank'>BillPay GmbH</a>. L'<a href='%s' target='_blank'>informativa sulla privacy</a> di BillPay.<br/><br/> Concedo a BillPay e <a href='https://www.privatbank1891.com/' target='_blank'>net-m privatbank 1891 AG</a> un mandato di addebito diretto SEPA<a href='#' class='bpy-btn-details'>(dettagli</a>) per la riscossione dei pagamenti in sospeso e do mandato al mio istituto di credito di riscuotere gli addebiti diretti.");

define('MODULE_PAYMENT_BILLPAY_UTF8_ENCODE_TITLE', 'Abilita la codifica UTF8');
define('MODULE_PAYMENT_BILLPAY_UTF8_ENCODE_DESC', 'Deselezioni questa opzione se utilizza la codifica UTF-8 nel suo negozio online.');

define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_BIRTHDATE', 'Inserisca la sua data di nascita');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_GENDER', 'Inserisca il suo sesso');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_TITLE', 'Inserisca il suo titolo');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_BIRTHDATE_AND_GENDER', 'Inserisca la sua data di nascita e il suo sesso');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_PHONE', 'Inserisca il suo numero di telefono');
define('MODULE_PAYMENT_BILLPAY_TEXT_NOTE', '');
define('MODULE_PAYMENT_BILLPAY_TEXT_REQ', '');
define('MODULE_PAYMENT_BILLPAY_TEXT_GENDER', 'Genere');
define('MODULE_PAYMENT_BILLPAY_TEXT_SALUTATION', 'Saludo');
define('MODULE_PAYMENT_BILLPAY_TEXT_MALE', 'uomo');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEMALE', 'donna');
define('MODULE_PAYMENT_BILLPAY_TEXT_MR', 'Sr.');
define('MODULE_PAYMENT_BILLPAY_TEXT_MRS', 'Mme.');

define('JS_BILLPAY_EULA', '* Confermare i T&amp;C di BillPay!');
define('JS_BILLPAY_DOBDAY', '* Inserisca la sua data di nascita.');
define('JS_BILLPAY_DOBMONTH', '* Inserisca il suo mese di nascita.');
define('JS_BILLPAY_DOBYEAR', '* Inserisca il suo anno di nascita.');
define('JS_BILLPAY_GENDER', '* Inserisci il tuo sesso.');

define('JS_BILLPAY_CODE', '* Inserire il BIC.');
define('JS_BILLPAY_NUMBER', '* Inserisci il tuo IBAN.');
define('JS_BILLPAY_NAME', '* Inserire il nome dell\'intestatario del conto.');
define('JS_BILLPAY_PHONE', '* Inserisca il suo numero di telefono.');

define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NUMBER', '* Inserire l\'IBAN.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_CODE', '* Inserire il BIC.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NAME', '* Inserire il nome del titolare del conto.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_PHONE', '* Inserisca il suo numero di telefono.');

define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_EULA', '* Accetti i T&amp;C di BillPay!');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DOB', '* Inserisca la sua data di nascita.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DOB_UNDER', 'Per utilizzare BillPay deve avere almeno 18 anni.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DEFAULT', 'Si è verificato un errore interno. Selezionare un altro metodo di pagamento');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_SHORT', 'Si è verificato un errore interno!');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_CREATED_COMMENT', 'Il periodo di pagamento per l\'ordine è stato avviato con successo con BillPay.');
define('MODULE_PAYMENT_BILLPAY_TEXT_CANCEL_COMMENT', 'L\'ordine è stato annullato con successo con BillPay.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DUEDATE', 'Non è stato possibile avviare l\'obiettivo di pagamento perché la data di scadenza è vuota.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NO_RATEPLAN', 'Chieda un piano scale per il numero totale di scale.');

define('MODULE_PAYMENT_BILLPAY_TEXT_CREATE_INVOICE', 'Attivare ora il ritardo del pagamento BillPay?');
define('MODULE_PAYMENT_BILLPAY_TEXT_CANCEL_ORDER', 'Annullare subito l\'ordine di BillPay?');

define('MODULE_PAYMENT_BILLPAY_TEXT_ACCOUNT_HOLDER', 'Titolare del conto');
define('MODULE_PAYMENT_BILLPAY_TEXT_IBAN', 'IBAN');
define('MODULE_PAYMENT_BILLPAY_TEXT_BANK_NAME', 'Banco');
define('MODULE_PAYMENT_BILLPAY_TEXT_BIC', 'BIC');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_REFERENCE', 'Numero di fattura');

define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO', 'La preghiamo di trasferire l\'importo totale, indicando il numero della transazione BillPay nella causale di pagamento (%1$s), sul seguente conto entro la scadenza del pagamento %2$02s.%3$02s.%4$04s :');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO_NO_DUEDATE', 'La preghiamo di trasferire l\'importo totale, indicando il numero della transazione BillPay nella causale di pagamento (%1$s), sul seguente conto entro il periodo di pagamento fino alla data di scadenza, che riceverà insieme alla fattura:');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO1', 'Ha scelto di acquistare su conto corrente con BillPay. La preghiamo di trasferire l\'importo totale tramite ');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO2', ' al seguente conto: ');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO3', 'Data di scadenza che riceve con la fattura');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO_MAIL', '<br/>La preghiamo di trasferire l\'importo totale, indicando il numero della transazione BillPay nella causale (%s), sul seguente conto prima della data di scadenza, che riceverà insieme alla fattura:');

define('MODULE_PAYMENT_BILLPAY_TEXT_BANKDATA', 'Inserisca le sue coordinate bancarie.');

define('MODULE_PAYMENT_BILLPAY_DUEDATE_TITLE', 'Termine di pagamento');

define('MODULE_PAYMENT_BILLPAY_TEXT_PURPOSE', 'Uso previsto');

define('MODULE_PAYMENT_BILLPAY_TEXT_ADD', 'di più');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEE', 'Tarifa');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEE_INFO1', 'Per questo ordine per fattura, una tariffa di ');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEE_INFO2', ' top');

define('MODULE_PAYMENT_BILLPAY_TEXT_SANDBOX', 'È in modalità sandbox:');
define('MODULE_PAYMENT_BILLPAY_TEXT_CHECK', 'Lei è in modalità di accettazione:');
define('MODULE_PAYMENT_BILLPAY_UNLOCK_INFO', 'Informazioni sul tour dal vivo');

define('MODULE_PAYMENT_BILLPAY_B2BCONFIG_TITLE', 'Tipi di clienti ammessi');
define('MODULE_PAYMENT_BILLPAY_B2BCONFIG_DESC', 'Vuole attivare il metodo di pagamento per i clienti privati (B2C), per i clienti commerciali (B2B) o per entrambi (BOTH)?');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_NAME_TEXT', 'Nome dell\'azienda');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_LEGAL_FORM_TEXT', 'Forma giuridica');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_LEGAL_FORM_SELECT_HTML', "");
define('MODULE_PAYMENT_BILLPAY_B2B_LEGALFORM_VALUES', 'ag:AG (società per azioni) |eg:eG (cooperativa registrata) |ek:EK (commerciante registrato) |ev:e.V. (associazione registrata). (associazione registrata)|freelancer:Lavoratore autonomo/piccolo imprenditore/rappresentante d\'impresa|gbr:GbR/BGB (Gesellschaft b&uuml;rgerlichen Rechts)|gmbh:GmbH (società a responsabilità limitata)|gmbh_ig:GmbH in Gr&uuml;ndung|gmbh_co_kg:GmbH &amp; Co. KG|kg:KG (società in accomandita semplice)|ltd:Limited|ltd_co_kg:Limited &amp; Co. KG|ohg:OHG (società in nome collettivo)|public_inst:Ente pubblico|misc_capital:Altra società per azioni|misc:Altra società in nome collettivo|foundation:Fondazione|ug:UG (società a responsabilità limitata)');
define('MODULE_PAYMENT_BILLPAY_B2B_REGISTER_NUMBER_TEXT', 'Numero di registro commerciale');
define('MODULE_PAYMENT_BILLPAY_B2B_TAX_NUMBER_TEXT', 'CIF');
define('MODULE_PAYMENT_BILLPAY_B2B_HOLDER_NAME_TEXT', 'Nome del proprietario');
define('MODULE_PAYMENT_BILLPAY_B2B_CONTACT_PERSON_TEXT', 'Persona di contatto');

define('MODULE_PAYMENT_BILLPAY_B2B_CHOOSE_CLIENT_TEXT', 'Tipo di cliente');
define('MODULE_PAYMENT_BILLPAY_B2B_PRIVATE_CLIENT_TEXT', 'Clienti privati');
define('MODULE_PAYMENT_BILLPAY_B2B_BUSINESS_CLIENT_TEXT', 'Cliente commerciale');

define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_FIELD_EMPTY', 'Inserisca il nome dell\'azienda');
define('MODULE_PAYMENT_BILLPAY_B2B_LEGAL_FORM_FIELD_EMPTY', 'Inserisca la forma giuridica della società');
define('MODULE_PAYMENT_BILLPAY_B2B_HOLDER_NAME_EMPTY', 'Inserisca il nome del proprietario');
define('MODULE_PAYMENT_BILLPAY_B2B_REGISTER_NUMBER_EMPTY', 'Inserisca il numero di registrazione commerciale');
define('MODULE_PAYMENT_BILLPAY_B2B_TAX_NUMBER_EMPTY', 'Inserisca il suo numero di partita IVA');

defined('MODULE_ORDER_TOTAL_BILLPAY_FEE_FROM_TOTAL') || define('MODULE_ORDER_TOTAL_BILLPAY_FEE_FROM_TOTAL', 'dell\'importo della fattura');

define('MODULE_PAYMENT_BILLPAY_GS_UTF8_ENCODE_TITLE', 'Codifica regionale');
define('MODULE_PAYMENT_BILLPAY_GS_UTF8_ENCODE_DESC', 'Il suo sito utilizza una codifica regionale (diversa da UTF-8)?');


define('MODULE_PAYMENT_BILLPAY_ACTIVATE_ORDER', 'L\'ordine non è ancora stato attivato con BillPay. La preghiamo di attivare l\'ordine immediatamente prima della spedizione, impostando lo stato appropriato.');
define('MODULE_PAYMENT_BILLPAY_ACTIVATE_ORDER_WARNING', "Attenzione: il periodo di pagamento non è ancora iniziato con BillPay!");

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADDRESS', 'L\'adeguamento dell\'indirizzo non è consentito per gli ordini BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_PRODUCT', 'Non è consentito riordinare gli articoli quando si ordina con BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_PAYMENT', 'La modifica del metodo di pagamento non è consentita per gli ordini BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_CURRENCY', 'L\'adeguamento della valuta non è consentito per gli ordini BillPay.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_HIGHER_QUANTITY', 'Non può ordinare più prodotti rispetto all\'ordine iniziale con BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_NEGATIVE_QUANTITY', 'Per gli ordini BillPay, il numero di articoli non deve essere negativo.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_TAX', 'Gli aggiustamenti delle aliquote fiscali non sono consentiti per gli ordini BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_PRICE', 'Gli adeguamenti del prezzo del prodotto non sono consentiti per gli ordini BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ID', 'L\'ID prodotto non può essere impostato per gli ordini BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ZERO_REDUCTION', 'Inserisca l\'importo da cancellare');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_NEGATIVE_REDUCTION', 'Non è consentito riordinare gli articoli quando si ordina con BillPay.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_NEGATIVE_SHIPPING', 'Le spese di spedizione negative non sono accettate per gli ordini con BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_INCREASED_SHIPPING', 'Aumento delle spese di spedizione non autorizzate per gli ordini con BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADDED_SHIPPING', 'Le spese di spedizione non possono essere aggiunte agli ordini BillPay.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_FORBIDDEN', 'Azione non autorizzata per gli ordini con BillPay');
define('MODULE_PAYMENT_BILLPAY_PARTIAL_CANCEL_NOT_PROCESSED', 'Si prega di notare! L\'adeguamento degli ordini senza imposta sugli articoli non viene inviato automaticamente a BillPay a causa di un errore nel software del negozio, la preghiamo invece di adeguare l\'importo manualmente nel back office di BillPay (https://admin.billpay.de)!');
define('MODULE_PAYMENT_BILLPAY_PARTIAL_CANCEL_ERROR_CUSTOMER_CARE', 'L\'impostazione dell\'ordine in BillPay è fallita. Contatti immediatamente il nostro servizio clienti (haendler@billpay.de).');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADJUST_CHARGEABLE', 'La personalizzazione di un\'opzione di prodotto fatturabile non è consentita per gli ordini con BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADD_CHARGEABLE', 'L\'aggiunta di un\'opzione di prodotto fatturabile non è consentita per gli ordini BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_REMOVE_CHARGEABLE', 'Rimozione di un\'opzione di prodotto fatturabile non autorizzata per gli ordini con BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_GENERAL', 'Non può farlo per il metodo di pagamento BillPay.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_CONTACT_BILLPAY', 'Si è verificato un errore! Si rivolga a BillPay.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_INFO_PARTIAL_CANCEL', 'La cancellazione parziale è stata inviata con successo a BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_INFO_EDIT_CART_CONTENT', 'La modifica dell\'ordine è stata inviata con successo a BillPay.');

define('MODULE_PAYMENT_BILLPAY_TRANSACTION_MODE_TEST', 'Testmodus');
define('MODULE_PAYMENT_BILLPAY_TRANSACTION_MODE_LIVE', 'Livemodus');

define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_TITLE_EN', 'BillPay in sospeso');
define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_TITLE_DE', 'BillPay non terminé');

define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_TITLE_EN', 'BillPay approvato');
define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_TITLE_DE', 'BillPay approvato');

define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_TITLE_EN', 'BillPay attivato');
define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_TITLE_DE', 'BillPay attivato');

define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_TITLE_EN', 'BillPay annullato');
define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_TITLE_DE', 'BillPay è stato bloccato');

define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_TITLE_EN', 'Errore di BillPay!');
define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_TITLE_DE', 'Errore di BillPay!');

define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_DESC', 'BillPay - In attesa di conferma');
define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_DESC', 'BillPay - Confirmé');
define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_DESC', 'BillPay - Activado');
define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_DESC', 'BillPay - Cancelado');
define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_DESC', 'BillPay - A causa di un errore, questo ordine richiede una correzione manuale. Contatti l\'assistenza di BillPay.');

define('MODULE_PAYMENT_BILLPAY_SALUTATION_MALE', MODULE_PAYMENT_BILLPAY_TEXT_MR);
define('MODULE_PAYMENT_BILLPAY_SALUTATION_FEMALE', MODULE_PAYMENT_BILLPAY_TEXT_MRS);

define('MODULE_PAYMENT_BILLPAY_TEXT_SEPA_INFORMATION', "Il numero di identificazione del creditore BillPay è DE19ZZ00000237180. Il numero di riferimento del mandato mi verrà inviato via e-mail insieme a un esempio di mandato scritto. Firmerò anche questo mandato scritto e lo invierò a BillPay.<br/><br/>Nota: posso richiedere il rimborso dell'importo dovuto entro otto settimane dalla data dell'addebito. Si applicano le condizioni concordate con il mio istituto finanziario. La preghiamo di notare che l'importo dovuto rimane da pagare anche se la nota di addebito viene restituita. Per maggiori informazioni, visiti il sito <a href='https://www.billpay.de/sepa' target='_blank'>https://www.billpay.de/sepa.</a>");
define('MODULE_PAYMENT_BILLPAY_TEXT_SEPA_INFORMATION_AT', "Il numero di identificazione del creditore di BillPay è DE19ZZ00000237180, il numero di identificazione del creditore di net-m privatbank AG è DE62ZZ000009232. Il numero di riferimento del mandato mi verrà poi inviato via e-mail, insieme a un esempio di mandato scritto. Firmerò anche questo mandato scritto e lo invierò a BillPay.<br/><br/>Nota: posso richiedere il rimborso dell'importo dovuto entro otto settimane dalla data dell'addebito. Si applicano le condizioni concordate con il mio istituto finanziario. Tenga presente che il debito residuo rimane anche se la nota di addebito viene restituita. Per maggiori informazioni, visiti il sito <a href='https://www.billpay.de/sepa' target='_blank'>https://www.billpay.de/sepa.</a>");

define('MODULE_PAYMENT_BILLPAY_THANK_YOU_TEXT', 'Grazie per aver scelto Fattura BillPay per il suo acquisto.');
define('MODULE_PAYMENT_BILLPAY_PAY_UNTIL_TEXT', 'La preghiamo di trasferire l\'importo di %1$s %2$s sul seguente conto entro %3$s, indicando lo scopo del pagamento:');
define('MODULE_PAYMENT_BILLPAY_PAY_UNTIL_TEXT_NO_DUE_DATE', 'La preghiamo di trasferire l\'importo di %1$s %2$s entro il periodo di pagamento, indicando lo scopo del pagamento, sul seguente conto.');
define('MODULE_PAYMENT_BILLPAY_PAY_UNTIL_TEXT_ADD_CH', 'Per i depositi effettuati allo sportello postale si applicano costi aggiuntivi. Si prega di trasferire un ulteriore %1$s %2$s se si paga con una polizza di versamento.');
define('MODULE_PAYMENT_BILLPAY_TEXT_PAYEE', 'Beneficiario');
define('MODULE_PAYMENT_BILLPAY_TEXT_PAYEE_CH', 'Succursale suisse (Regensdorf)');
define('MODULE_PAYMENT_BILLPAY_TEXT_IBAN_CH', 'Numero di conto');
define('MODULE_PAYMENT_BILLPAY_TEXT_BIC_CH', 'Numero BC');
define('MODULE_PAYMENT_BILLPAY_TEXT_BANK', 'Kreditinstitut');
define('MODULE_PAYMENT_BILLPAY_TEXT_TOTAL_AMOUNT', 'Importazione');
define('MODULE_PAYMENT_BILLPAY_UPDATE_AVAILABLE', 'È disponibile la versione %2s$ del plugin per il metodo di pagamento BillPay (attualmente installato: %1s$). Clicchi <a href="%3s$">qui</a> per scaricare.');
