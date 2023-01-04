<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

/**
 * Locale
 */
define('HTML_PARAMS', 'dir="ltr" xml:lang="it" xmlns="http://www.w3.org/1999/xhtml"');

define('DATE_LOCALE', 'it_IT');
define('DATE_FORMAT_SHORT', 'd.m.Y');
define('DATE_FORMAT_LONG', 'l d F, Y');
define('DATE_FORMAT', DATE_FORMAT_SHORT);
define('PHP_DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' H:i:s');
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' H:i:s');
define('LANGUAGE_CURRENCY', 'EUR');

setlocale(LC_ALL, DATE_LOCALE);

function xtc_date_raw($date, $reverse = false): string
{
    if ($reverse) {
        return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
    } else {
        return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
    }
}

/**
 * Extra files
 */
require_once DIR_FS_INC . 'auto_include.inc.php';

$extra_files = auto_include(DIR_WS_LANGUAGES . 'italian/extra/', 'php');

foreach ($extra_files as $extra_file) {
    require $extra_file;
}

/**
 * Translations
 */
define('TITLE', STORE_NAME);
define('HEADER_TITLE_TOP', 'Pagina iniziale');
define('HEADER_TITLE_CATALOG', 'Catalogo');

define('MALE', 'Sr.');
define('FEMALE', 'Mme/Mme.');
define('DIVERSE', 'Varie');

/**
 * Boxes
 */
define('IMAGE_REDEEM_GIFT', 'Riscuota il suo buono regalo');

define('BOX_TITLE_STATISTICS', 'Statistiche :');
define('BOX_ENTRY_CUSTOMERS', 'Clienti :');
define('BOX_ENTRY_PRODUCTS', 'Prodotti :');
define('BOX_ENTRY_REVIEWS', 'Recensioni :');
define('TEXT_VALIDATING', 'Non convalidato');

define('BOX_MANUFACTURER_INFO_HOMEPAGE', 'homepage di %s');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Altri prodotti');

define('BOX_HEADING_ADD_PRODUCT_ID', 'Aggiungi al carrello');

define('BOX_LOGINBOX_STATUS', 'Gruppo di clienti :');
define('BOX_LOGINBOX_DISCOUNT', 'Sconto sul prodotto');
define('BOX_LOGINBOX_DISCOUNT_TEXT', 'Remise');
define('BOX_LOGINBOX_DISCOUNT_OT', '');

define('BOX_REVIEWS_WRITE_REVIEW', 'Recensisca questo prodotto');
define('BOX_REVIEWS_NO_WRITE_REVIEW', 'Non è possibile effettuare una revisione.');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '5 stelle!');

define('PULL_DOWN_DEFAULT', 'Si prega di selezionare');

define('JS_ERROR', 'Mancano le informazioni necessarie. La preghiamo di compilare tutto.');
define('JS_REVIEW_TEXT', '* Il testo deve essere almeno ' . REVIEW_TEXT_MIN_LENGTH . ' dei personaggi.');
define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Scegliere un metodo di pagamento per il suo ordine.');
define('ERROR_NO_PAYMENT_MODULE_SELECTED', '* Scegliere un metodo di pagamento per il suo ordine.');
define('JS_ERROR_NO_SHIPPING_MODULE_SELECTED', '* Scegliere un metodo di spedizione per il suo ordine.');
define('JS_ERROR_CONDITIONS_NOT_ACCEPTED', '* Se non rispetta i nostri termini e condizioni, siamo spiacenti di non poter accettare il suo ordine.');
define('JS_ERROR_REVOCATION_NOT_ACCEPTED', '* Se non accetta la rinuncia al diritto di recesso per i beni virtuali, ci dispiace non poter accettare il suo ordine.');
define('JS_ERROR_PRIVACY_NOTICE_NOT_ACCEPTED', '* Se non rispetta le nostre norme sulla protezione dei dati, ci dispiace non poter accettare il suo ordine.');

/**
 * Account forms
 */
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER_ERROR', 'Selezioni il suo saluto.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME_ERROR', 'Il suo nome deve essere almeno ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' dei personaggi.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME_ERROR', 'Il suo cognome deve essere almeno ' . ENTRY_LAST_NAME_MIN_LENGTH . ' dei personaggi.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'La sua data di nascita deve essere inserita nel formato GG.MM.AAAA (ad esempio, 21.05.1970).');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (ad esempio, 21.05.1970)');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Il suo indirizzo e-mail deve essere almeno ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' personaggi.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'L\'indirizzo e-mail inserito non è corretto o è già registrato.');
define('ENTRY_EMAIL_ERROR_NOT_MATCHING', 'I vostri indirizzi e-mail non sono corretti.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'L\'indirizzo e-mail inserito esiste già - la preghiamo di controllarlo.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS_ERROR', 'La via/numero civico deve essere almeno ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' dei personaggi.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE_ERROR', 'Il suo codice postale deve essere almeno ' . ENTRY_POSTCODE_MIN_LENGTH . ' personaggi.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY_ERROR', 'La posizione deve essere composta da almeno ' . ENTRY_CITY_MIN_LENGTH . ' dei personaggi.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE_ERROR', 'Il suo stato deve essere composto da almeno ' . ENTRY_STATE_MIN_LENGTH . ' personaggi.');
define('ENTRY_STATE_ERROR_SELECT', 'Selezioni il suo Stato federale dall\'elenco.');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY_ERROR', 'Selezioni il suo Paese dall\'elenco.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Il suo numero di telefono deve essere almeno ' . ENTRY_TELEPHONE_MIN_LENGTH . ' dei personaggi.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_PASSWORD_ERROR', 'La sua password deve essere almeno ' . ENTRY_PASSWORD_MIN_LENGTH . ' dei personaggi.');
define('ENTRY_PASSWORD_ERROR_MIN_LOWER', 'La sua password deve contenere almeno %s lettere minuscole.');
define('ENTRY_PASSWORD_ERROR_MIN_UPPER', 'La sua password deve contenere almeno %s lettere maiuscole.');
define('ENTRY_PASSWORD_ERROR_MIN_NUM', 'La sua password deve contenere almeno il numero %s.');
define('ENTRY_PASSWORD_ERROR_MIN_CHAR', 'La sua password deve contenere almeno i caratteri speciali %s.');
define('ENTRY_PASSWORD_ERROR_INVALID_CHAR', 'La sua password contiene caratteri non validi. Utilizzi una password diversa.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Le sue password non sono corrette.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'La sua password attuale non deve essere vuota.');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'La sua nuova password deve essere almeno ' . ENTRY_PASSWORD_MIN_LENGTH . ' dei personaggi.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Le sue password non sono corrette.');

/**
 * Result pages
 */
define('TEXT_RESULT_PAGE', 'Siti :');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Visualizzi <strong> da %d</strong> a <strong>%d</strong> (su un totale di <strong>%d</strong> elementi).');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Visualizzi <strong> da %d</strong> a <strong>%d</strong> (su un totale di <strong>%d</strong> ordini)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Visualizza <strong> da %d</strong> a <strong>%d</strong> (su <strong>%d</strong> visualizzazioni)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Visualizzi <strong> da %d</strong> a <strong>%d</strong> (su un totale di <strong>%d</strong> nuovi elementi).');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Mostra <strong> da %d</strong> a <strong>%d</strong> (di <strong>%d</strong> offerte)');

/**
 * Site navigation
 */
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'pagina precedente');
define('PREVNEXT_TITLE_NEXT_PAGE', 'pagina successiva');
define('PREVNEXT_TITLE_PAGE_NO', 'Pagina %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Pagine precedenti %d');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Le prossime %d pagine');

/**
 * Product navigation
 */
define('PREVNEXT_BUTTON_PREV', '&laquo;');
define('PREVNEXT_BUTTON_NEXT', '&raquo;');

/**
 * Image buttons
 */
define('IMAGE_BUTTON_ADD_ADDRESS', 'Nuovo indirizzo');
define('IMAGE_BUTTON_BACK', 'Volver');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Cambio di indirizzo');
define('IMAGE_BUTTON_CHECKOUT', 'Applicazione');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Acquistare');
define('IMAGE_BUTTON_CONTINUE', 'Di più');
define('IMAGE_BUTTON_DELETE', 'Esercitazioni');
define('IMAGE_BUTTON_LOGIN', 'Si colleghi a');
define('IMAGE_BUTTON_IN_CART', 'Aggiungi al carrello');
define('IMAGE_BUTTON_SEARCH', 'Ricerca');
define('IMAGE_BUTTON_UPDATE', 'Aggiornamento');
define('IMAGE_BUTTON_UPDATE_CART', 'Aggiornare il carrello della spesa');
define('IMAGE_BUTTON_WRITE_REVIEW', 'La sua opinione');
define('IMAGE_BUTTON_ADMIN', 'Admin');
define('IMAGE_BUTTON_PRODUCT_EDIT', 'Modificare il prodotto');
define('IMAGE_BUTTON_SEND', 'Inviare');
define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'Continua a fare acquisti');
define('IMAGE_BUTTON_CHECKOUT_STEP2', 'Vai al passo 2');
define('IMAGE_BUTTON_CHECKOUT_STEP3', 'Vai al passo 3');

define('SMALL_IMAGE_BUTTON_DELETE', 'Esercitazioni');
define('SMALL_IMAGE_BUTTON_EDIT', 'Cambiamento');
define('SMALL_IMAGE_BUTTON_VIEW', 'Ver');

define('ICON_ARROW_RIGHT', 'Vedi di più');
define('ICON_CART', 'Aggiungi al carrello');
define('ICON_SUCCESS', 'Il successo');
define('ICON_WARNING', 'Avvertimento');
define('ICON_ERROR', 'Errore');

define('TEXT_PRINT', 'Imprimere');

define('BUTTON_RESET', 'Azzeramento');
define('BUTTON_UPDATE', 'Aggiornamento');

/**
 * Greetings
 */
define('TEXT_GREETING_PERSONAL', 'È un piacere rivederla, <span class="greetUser">%s !</span> Vuole vedere i nostri <a href="%s">nuovi articoli</a>?');
define('TEXT_GREETING_PERSONAL_RELOGON', '<small>Se non è un membro, effettui il <a href="%s">login qui</a> con i suoi dati di accesso.</small>');
define('TEXT_GREETING_GUEST', 'Benvenuto a <span class="greetUser">lei</span>, desidera <a href="%s">registrarsi</a> o aprire un <a href="%s">conto cliente</a>?');

define('TEXT_SORT_PRODUCTS', 'La classificazione degli articoli è la seguente ');
define('TEXT_DESCENDINGLY', 'descendant');
define('TEXT_ASCENDINGLY', 'ascendant');
define('TEXT_BY', ' a ');

define('TEXT_OF_5_STARS', '5 stelle!');
define('TEXT_REVIEW_BY', 'de %s');
define('TEXT_REVIEW_WORD_COUNT', 'Parole %s');
define('TEXT_REVIEW_RATING', 'Classifica: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'Aggiunto il : %s');
define('TEXT_NO_REVIEWS', 'Non ci sono ancora recensioni disponibili.');
define('TEXT_NO_NEW_PRODUCTS', 'Non sono apparsi nuovi articoli nell\'ultimo ' . MAX_DISPLAY_NEW_PRODUCTS_DAYS . ' giorni. Invece, può vedere gli articoli pubblicati più di recente qui.');
define('TEXT_UNKNOWN_TAX_RATE', 'Aliquota fiscale sconosciuta');

/**
 * Warnings
 */
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Attenzione: La directory di installazione esiste ancora in: %s. La preghiamo di eliminare la directory per motivi di sicurezza.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Attenzione: questo software di negozio online modificato può scrivere nel file di configurazione: %s. Si tratta di un potenziale rischio per la sicurezza - la preghiamo di impostare i permessi utente corretti su questo file.');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Attenzione: la directory per le sessioni non esiste: ' . xtc_session_save_path() . '. Le sessioni non funzioneranno finché la directory non sarà stata creata.');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Attenzione: il software del webshop modificato non può scrivere nella directory della sessione: ' . xtc_session_save_path() . '. Le sessioni non funzioneranno fino a quando non saranno stati impostati i permessi utente corretti.');
define('WARNING_SESSION_AUTO_START', 'Attenzione: session.auto_start è abilitato - Disabiliti questa funzione PHP in php.ini e riavvii il server web.');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Attenzione : La directory per il download dell\'articolo non esiste : ' . DIR_FS_DOWNLOAD . '. Questa funzione non funzionerà finché la directory non sarà stata creata.');

define('SUCCESS_ACCOUNT_UPDATED', 'Il suo account è stato aggiornato con successo.');
define('SUCCESS_PASSWORD_UPDATED', 'La sua password è stata modificata con successo.');
define('ERROR_CURRENT_PASSWORD_NOT_MATCHING', 'La password inserita non corrisponde alla password registrata. La preghiamo di riprovare.');
define('TEXT_MAXIMUM_ENTRIES', '<strong>Nota:</strong> nella sua rubrica ci sono %s voci.');
define('SUCCESS_ADDRESS_BOOK_ENTRY_DELETED', 'La voce selezionata è stata eliminata con successo.');
define('SUCCESS_ADDRESS_BOOK_ENTRY_UPDATED', 'La sua rubrica è stata aggiornata con successo.');
define('WARNING_PRIMARY_ADDRESS_DELETION', 'L\'indirizzo predefinito non può essere eliminato. Selezioni prima un altro indirizzo predefinito. Può quindi eliminare la voce.');
define('ERROR_NONEXISTING_ADDRESS_BOOK_ENTRY', 'Questa voce della rubrica non esiste.');
define('ERROR_ADDRESS_BOOK_FULL', 'La sua rubrica non può più contenere indirizzi. La preghiamo di eliminare un indirizzo che non è più necessario. Può quindi registrare una nuova voce.');
define('ERROR_CHECKOUT_SHIPPING_NO_METHOD', 'Non è stato selezionato alcun metodo di spedizione.');
define('ERROR_CHECKOUT_SHIPPING_NO_MODULE', 'Non è disponibile un metodo di spedizione.');

define('ERROR_CONDITIONS_NOT_ACCEPTED', '* Se non rispetta i nostri termini e condizioni, siamo spiacenti di non poter accettare il suo ordine.');
define('ERROR_REVOCATION_NOT_ACCEPTED', '* A meno che non accetti la scadenza del diritto di recesso per i beni virtuali, siamo spiacenti di non poter accettare il suo ordine.');
define('ERROR_PRIVACY_NOTICE_NOT_ACCEPTED', '* Se non rispetta le nostre regole di protezione dei dati, ci dispiace non poter accettare il suo ordine.');

define('SUB_TITLE_OT_DISCOUNT', 'Remise :');

define('NOT_ALLOWED_TO_SEE_PRICES', 'Non può visualizzare i prezzi come ospite (o con il suo stato attuale).');
define('NOT_ALLOWED_TO_SEE_PRICES_TEXT', 'Non ha il permesso di vedere i prezzi. Crei un conto cliente.');

define('TEXT_DOWNLOAD', 'Scaricare');
define('TEXT_VIEW', 'Ver');

define('TEXT_BUY', '%s x \".');
define('TEXT_NOW', 'L\'ordine ');
define('TEXT_GUEST', ' Ospite :');
define('TEXT_SEARCH_ENGINE_AGENT', 'Motore di ricerca');

/**
 * Advanced search
 */
define('TEXT_AC_ALL_CATEGORIES', 'Tutti');
define('TEXT_ALL_CATEGORIES', 'Tutte le categorie');
define('TEXT_ALL_MANUFACTURERS', 'Tutti i produttori');
define('JS_AT_LEAST_ONE_INPUT', 'Deve compilare uno dei seguenti campi:* Parole chiave Prezzo a');
define('AT_LEAST_ONE_INPUT', 'Deve compilare uno dei seguenti campi:<br />Parole chiave con almeno tre caratteri<br />Prezzo da<br />Prezzo a<br />');
define('TEXT_SEARCH_TERM', 'La sua ricerca per : ');
define('JS_INVALID_FROM_DATE', '* data disabilitata (de)');
define('JS_INVALID_TO_DATE', 'data non valida (al)* data non valida (al)* data non valida (al)* data non valida (al)');
define('JS_TO_DATE_LESS_THAN_FROM_DATE', '* La data (da) deve essere maggiore o uguale alla data (a).');
define('JS_PRICE_FROM_MUST_BE_NUM', '* Il prezzo di deve essere un numero.');
define('JS_PRICE_TO_MUST_BE_NUM', '* Il prezzo fino a deve essere un numero.');
define('JS_PRICE_TO_LESS_THAN_PRICE_FROM', '* Il prezzo al rialzo deve essere maggiore o uguale al prezzo al ribasso.');
define('JS_INVALID_KEYWORDS', '* Termine di ricerca non ammissibile');
define('TEXT_LOGIN_ERROR', '<b>ERRORE:</b> l\'indirizzo e-mail e/o la password inseriti non corrispondono.');
define('TEXT_RELOGIN_NEEDED', 'La preghiamo di effettuare nuovamente il login.');
define('TEXT_PASSWORD_SENT', 'Una nuova password è stata inviata via e-mail.');
define('TEXT_PRODUCT_NOT_FOUND', 'Articolo non trovato.');
define('TEXT_MORE_INFORMATION', 'Per maggiori informazioni, consulti la<a href="%s" onclick="window.open(this.href); return false;">pagina iniziale</a> di questo articolo.');
define('TEXT_DATE_ADDED', 'Questo prodotto è stato aggiunto al nostro catalogo il %s.');
define('TEXT_DATE_AVAILABLE', '<span class="color_error_message">Questo prodotto dovrebbe essere nuovamente disponibile da %s.</span>');
define('SUB_TITLE_SUB_TOTAL', 'Subtotale :');

define('OUT_OF_STOCK_CANT_CHECKOUT', 'Gli articoli contrassegnati con ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' non sono purtroppo disponibili in magazzino nella quantità da lei ordinata.<br />La preghiamo di ridurre la quantità dell\'ordine per gli articoli contrassegnati. Grazie mille per il suo ordine.');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'Gli articoli contrassegnati con ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' non sono purtroppo disponibili in magazzino nella quantità ordinata.<br />Consegneremo la quantità ordinata il prima possibile. Su richiesta, possiamo anche effettuare una consegna parziale.');

define('MINIMUM_ORDER_VALUE_NOT_REACHED_1', 'Ha raggiunto il valore minimo d\'ordine di : ');
define('MINIMUM_ORDER_VALUE_NOT_REACHED_2', ' Purtroppo, questo obiettivo non è ancora stato raggiunto.<br />La prego di chiedere almeno un po\' di più: ');
define('MAXIMUM_ORDER_VALUE_REACHED_1', 'Ha un valore d\'ordine massimo di : ');
define('MAXIMUM_ORDER_VALUE_REACHED_2', 'superato.<br /> La preghiamo di ridurre il suo ordine ad almeno : ');

define('ERROR_INVALID_PRODUCT', 'L\'elemento selezionato non è stato trovato.');
define('JS_KEYWORDS_MIN_LENGTH', 'Il termine di ricerca deve avere almeno ' . SEARCH_MIN_LENGTH . ' personaggi.');

/**
 * Navbar title
 */
define('NAVBAR_TITLE_ACCOUNT', 'Il suo conto');
define('NAVBAR_TITLE_1_ACCOUNT_EDIT', 'Il suo conto');
define('NAVBAR_TITLE_2_ACCOUNT_EDIT', 'Modificare i suoi dati personali');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY', 'Il suo conto');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY', 'I suoi ordini passati');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY_INFO', 'Il suo conto');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY_INFO', 'Ordine effettuato');
define('NAVBAR_TITLE_3_ACCOUNT_HISTORY_INFO', 'Numero d\'ordine %s');
define('NAVBAR_TITLE_1_ACCOUNT_PASSWORD', 'Il suo conto');
define('NAVBAR_TITLE_2_ACCOUNT_PASSWORD', 'Modifica della password');
define('NAVBAR_TITLE_1_ADDRESS_BOOK', 'Il suo conto');
define('NAVBAR_TITLE_2_ADDRESS_BOOK', 'Agenda');
define('NAVBAR_TITLE_1_ADDRESS_BOOK_PROCESS', 'Il suo conto');
define('NAVBAR_TITLE_2_ADDRESS_BOOK_PROCESS', 'Agenda');
define('NAVBAR_TITLE_ADD_ENTRY_ADDRESS_BOOK_PROCESS', 'Nuova voce');
define('NAVBAR_TITLE_MODIFY_ENTRY_ADDRESS_BOOK_PROCESS', 'Modificare la voce');
define('NAVBAR_TITLE_DELETE_ENTRY_ADDRESS_BOOK_PROCESS', 'Eliminazione dell\'ingresso');
define('NAVBAR_TITLE_ADVANCED_SEARCH', 'Ricerca avanzata');
define('NAVBAR_TITLE1_ADVANCED_SEARCH', 'Ricerca avanzata');
define('NAVBAR_TITLE2_ADVANCED_SEARCH', 'Risultati della ricerca');
define('NAVBAR_TITLE_1_CHECKOUT_CONFIRMATION', 'Applicazione');
define('NAVBAR_TITLE_2_CHECKOUT_CONFIRMATION', 'Conferma');
define('NAVBAR_TITLE_1_CHECKOUT_PAYMENT', 'Applicazione');
define('NAVBAR_TITLE_2_CHECKOUT_PAYMENT', 'Metodo di pagamento');
define('NAVBAR_TITLE_1_PAYMENT_ADDRESS', 'Applicazione');
define('NAVBAR_TITLE_2_PAYMENT_ADDRESS', 'Modifica dell\'indirizzo di fatturazione');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING', 'Applicazione');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING', 'Informazioni sulla spedizione');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING_ADDRESS', 'Applicazione');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING_ADDRESS', 'Modificare l\'indirizzo di consegna');
define('NAVBAR_TITLE_1_CHECKOUT_SUCCESS', 'Applicazione');
define('NAVBAR_TITLE_2_CHECKOUT_SUCCESS', 'Il successo');
define('NAVBAR_TITLE_CREATE_ACCOUNT', 'Creare un account');
define('NAVBAR_TITLE_LOGIN', 'Si colleghi a');
define('NAVBAR_TITLE_LOGOFF', 'Adiós');
define('NAVBAR_TITLE_PRODUCTS_NEW', 'Nuovi articoli');
define('NAVBAR_TITLE_SHOPPING_CART', 'Carrello della spesa');
define('NAVBAR_TITLE_SPECIALS', 'Offerte');
define('NAVBAR_TITLE_COOKIE_USAGE', 'Uso dei cookie');
define('NAVBAR_TITLE_PRODUCT_REVIEWS', 'Recensioni');
define('NAVBAR_TITLE_REVIEWS_WRITE', 'Recensioni');
define('NAVBAR_TITLE_REVIEWS', 'Recensioni');
define('NAVBAR_TITLE_SSL_CHECK', 'Avviso di sicurezza');
define('NAVBAR_TITLE_CREATE_GUEST_ACCOUNT', 'L\'indirizzo del suo cliente');
define('NAVBAR_TITLE_PASSWORD_DOUBLE_OPT', 'Ha dimenticato la password?');
define('NAVBAR_TITLE_NEWSLETTER', 'Newsletter');
define('NAVBAR_GV_REDEEM', 'Canjear vale');
define('NAVBAR_GV_SEND', 'Inviare un voucher');
define('NAVBAR_TITLE_DOWNLOAD', 'Download');

/**
 * Miscellaneous
 */
define('TEXT_NEWSLETTER', 'Vuole essere sempre aggiornato?<br />Nessun problema, si iscriva alla nostra newsletter e sarà sempre aggiornato.');
define('TEXT_EMAIL_INPUT', 'Il suo indirizzo e-mail è stato inserito nel nostro sistema.<br />Allo stesso tempo, il sistema le ha inviato un\'e-mail con un link di attivazione. Dopo aver ricevuto l\'e-mail, clicchi sul link per confermare la sua registrazione. In caso contrario, non riceverà la nostra newsletter.');

define('TEXT_WRONG_CODE', 'Il codice di sicurezza inserito non corrisponde al codice visualizzato. La preghiamo di riprovare.');
define('TEXT_EMAIL_EXIST_NO_NEWSLETTER', 'Questo indirizzo e-mail esiste già nel nostro database, ma non è ancora attivato per ricevere la newsletter.');
define('TEXT_EMAIL_EXIST_NEWSLETTER', 'Questo indirizzo e-mail esiste già nel nostro database ed è già attivato per ricevere la newsletter.');
define('TEXT_EMAIL_NOT_EXIST', 'Questo indirizzo e-mail non esiste nel nostro database.');
define('TEXT_EMAIL_DEL', 'Il suo indirizzo e-mail è stato rimosso dal nostro database di newsletter.');
define('TEXT_EMAIL_DEL_ERROR', 'Si è verificato un errore, il suo indirizzo e-mail non è stato cancellato!');
define('TEXT_EMAIL_ACTIVE', 'Il suo indirizzo e-mail è stato attivato con successo per ricevere la newsletter.');
define('TEXT_EMAIL_ACTIVE_ERROR', 'Si è verificato un errore, il suo indirizzo e-mail non è stato attivato!');
define('TEXT_EMAIL_SUBJECT', 'La sua iscrizione alla newsletter');

define('TEXT_CUSTOMER_GUEST', ' Ospite :');

define('TEXT_LINK_MAIL_SENDED', 'La richiesta di una nuova password deve essere prima confermata da lei.<br />Il sistema le ha quindi inviato un\'e-mail con un link di conferma. Quando riceve l\'e-mail, clicchi sul link che le è stato inviato. In caso contrario, non potrà assegnare una nuova password.<br/><br/>Il link di conferma è valido per %s minuti.');
define('TEXT_PASSWORD_MAIL_SENDED', 'Ha appena ricevuto un\'e-mail con una nuova password di accesso.<br />La preghiamo di modificare la password come richiesto dopo il suo prossimo accesso.');
define('TEXT_CODE_ERROR', 'Inserisca nuovamente il suo indirizzo e-mail e il codice di sicurezza.<br />Attenzione agli errori di battitura!');
define('TEXT_EMAIL_ERROR', 'Inserisca nuovamente il suo indirizzo e-mail.<br />Attenzione agli errori di battitura!');
define('TEXT_NO_ACCOUNT', 'Siamo spiacenti di informarla che la sua richiesta di una nuova password di accesso non è valida o è scaduta.<br />La preghiamo di riprovare.');
define('HEADING_PASSWORD_FORGOTTEN', 'Ha dimenticato la password?');
define('TEXT_PASSWORD_FORGOTTEN', 'Cambi la sua password in tre semplici passi.');
define('TEXT_EMAIL_PASSWORD_FORGOTTEN', 'Email di conferma della modifica della password');
define('TEXT_EMAIL_PASSWORD_NEW_PASSWORD', 'La sua nuova password');
define('ERROR_MAIL', 'La preghiamo di controllare i dati inseriti nel modulo.');

define('CATEGORIE_NOT_FOUND', 'Categoria non trovata');

define('GV_FAQ', 'Vales FAQ');
define('ERROR_NO_REDEEM_CODE', 'Spiacente, non ha inserito un codice.');
define('ERROR_NO_INVALID_REDEEM_GV', 'Codice voucher valido');
define('TABLE_HEADING_CREDIT', 'Credito');
define('EMAIL_GV_TEXT_SUBJECT', 'Un regalo di %s');
define('MAIN_MESSAGE', 'Ha scelto di inviare un buono del valore di %s a %s, il cui indirizzo e-mail è %s.<br /><br />Il seguente testo appare nella sua e-mail:<br /><br />Salve %s,<br /><br /> %s le ha inviato un buono del valore di %s.');
define('REDEEMED_AMOUNT', 'Il suo buono è stato accreditato con successo sul suo conto. Valore del buono: %s');
define('REDEEMED_COUPON', 'Il suo buono è stato inviato con successo e sarà riscattato automaticamente al momento dell\'ordine.');

define('ERROR_INVALID_USES_USER_COUPON', 'Può utilizzare il coupon solo ');
define('ERROR_INVALID_USES_COUPON', 'I clienti possono utilizzare questo coupon solo ');
define('TIMES', ' tempo.');
define('ERROR_INVALID_STARTDATE_COUPON', 'Il suo coupon non è ancora disponibile.');
define('ERROR_INVALID_FINISDATE_COUPON', 'Il suo coupon è scaduto.');
define('ERROR_INVALID_MINIMUM_ORDER_COUPON', 'Questo buono può essere utilizzato solo per ordini con un valore minimo di %s!');
define('ERROR_INVALID_MINIMUM_ORDER_COUPON_ADD', '<br/>Dovrà inserire nuovamente il codice del buono quando raggiungerà il valore minimo dell\'ordine.');
define('ERROR_COUPON_REQUIRES_ACCOUNT', 'Per riscattare il buono è necessario un conto cliente.');
define('PERSONAL_MESSAGE', '%s scrive :');

define('TEXT_LINK_TITLE_INFORMATION', 'Informazioni');

/**
 * Coupon popup
 */
define('TEXT_CLOSE_WINDOW', 'Cerrar ventana [x]');
define('TEXT_COUPON_HELP_HEADER', 'Il suo buono/coupon è stato prenotato con successo.');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Nome del buono/coupon: %s');
define('TEXT_COUPON_HELP_SPECIALS', '<br /><br />Il suo buono non può essere applicato alle offerte speciali.');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />Il valore dell\'obbligazione/coupon è %s ');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />Il valore minimo del comando è %s ');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Buono per la consegna gratuita');
define('TEXT_COUPON_HELP_DESC', '<br /><br />Descrizione del buono: %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Questo coupon è valido dal %s al %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Limitazioni dell\'articolo / categoria');
define('TEXT_COUPON_HELP_CATEGORIES', 'Categoria');
define('TEXT_COUPON_HELP_PRODUCTS', 'Articolo');
define('ERROR_ENTRY_AMOUNT_CHECK', 'Importo del buono non valido');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'Adresse e-mail non valide');
define('TEXT_COUPON_PRODUCTS_RESTRICT', 'Il buono è limitato a una selezione di articoli.');
define('TEXT_COUPON_CATEGORIES_RESTRICT', 'Il coupon è limitato a una selezione di categorie.');

define('ENTRY_VAT_TEXT', 'Solo per la Germania e l\'UE');
define('ENTRY_VAT_ERROR', 'L\'ID inserito non è valido o non può essere verificato in questo momento. Inserisca un ID valido o lasci il campo vuoto per il momento.');
define('MSRP', 'UVP');
define('YOUR_PRICE', 'Il suo prezzo ');
define('UNIT_PRICE', 'Prezzo per unità ');
define('ONLY', ' Solo ora ');
define('FROM', 'ab ');
define('YOU_SAVE', 'Usted ahorra ');
define('INSTEAD', 'Il nostro vecchio prezzo ');
define('TXT_PER', ' À ');
define('TAX_INFO_INCL', 'incl. %s IVA.');
define('TAX_INFO_EXCL', 'escluse %s IVA');
define('TAX_INFO_ADD', 'più il % di IVA.');
define('SHIPPING_EXCL', 'di più');
define('SHIPPING_INCL', 'incl.');
define('SHIPPING_COSTS', 'Costi di spedizione');

define('SHIPPING_TIME', 'Tempo di consegna : ');
define('MORE_INFO', '[Altro]');

define('ENTRY_PRIVACY_ERROR', 'La preghiamo di confermare di aver letto la nostra politica sulla privacy.');
define('TEXT_PAYMENT_FEE', 'Tasso di pagamento');

define('_MODULE_INVALID_SHIPPING_ZONE', 'Siamo spiacenti, la spedizione in questo Paese non è possibile.');
define('_MODULE_UNDEFINED_SHIPPING_RATE', 'Le spese di spedizione non possono essere calcolate in questo momento.');

define('NAVBAR_TITLE_1_ACCOUNT_DELETE', 'Il suo conto');
define('NAVBAR_TITLE_2_ACCOUNT_DELETE', 'Cancellare l\'account');

define('ERROR_EMAIL', '<p><b>Il suo indirizzo e-mail:</b> Nessuna iscrizione o iscrizione non valida</p>');
define('ERROR_VVCODE', '<p><b>Codice di sicurezza:</b> nessuna corrispondenza, inserisca nuovamente il codice di sicurezza.</p>');
define('ERROR_MSG_BODY', '<p><b>Il suo messaggio</b>: Nessun biglietto!</p>');

define('HEADER_QTY', 'Numero');
define('HEADER_ARTICLE', 'Articolo');
define('HEADER_SINGLE', 'Prezzo per unità');
define('HEADER_TOTAL', 'Somma');
define('HEADER_MODEL', 'Articolo No.');

define('ERROR_ADDRESS_NOT_ACCEPTED', '* Se non accetta l\'indirizzo di fatturazione e di consegna, siamo spiacenti di non poter accettare il suo ordine!');
define('PAYPAL_EXP_VORL', 'Costi di spedizione provvisori');

define('BASICPRICE_VPE_TEXT', 'solo con questo importo ');
define('GRADUATED_PRICE_MAX_VALUE', 'ab');
define('_SHIPPING_TO', 'Spedizione a ');

define('ERROR_SQL_DB_QUERY', 'Siamo spiacenti, ma si è verificato un errore nel database.');
define('ERROR_SQL_DB_QUERY_REDIRECT', 'Verrà reindirizzato alla nostra homepage in %s di secondi!');

define('TEXT_AGB_CHECKOUT', 'La invitiamo a leggere i nostri Termini e condizioni e le Informazioni per i clienti %s e la nostra Informativa sulla privacy %s.');
define('TEXT_REVOCATION_CHECKOUT', 'la nostra politica di cancellazione %s');
define('DOWNLOAD_NOT_ALLOWED', '<h1>ProhibitedServer</h1>non è stato in grado di verificare che lei sia autorizzato ad accedere al documento richiesto. O ha fornito credenziali errate (ad esempio, una password errata) o il suo browser non capisce come fornire le credenziali richieste.');

define('TEXT_INFO_DETAILS', ' Detalles');
define('TEXT_SAVED_BASKET', 'Controlli il suo carrello. Contiene ancora oggetti di una visita precedente.');

define('ERROR_REVIEW_TEXT', 'Il testo della recensione deve essere almeno ' . REVIEW_TEXT_MIN_LENGTH . ' dei personaggi.');
define('ERROR_REVIEW_RATING', 'La prego di fornire la sua valutazione.');
define('ERROR_REVIEW_AUTHOR', 'Inserisca il suo nome.');
define('ERROR_REVIEW_PRODUCT_PURCHASED', 'Solo gli articoli che sono stati acquistati anche da noi possono essere valutati.');

define('GV_NO_PAYMENT_INFO', '<div class="infomessage">Può utilizzare il suo credito per pagare l\'intero ordine. Se non desidera utilizzare il credito, disattivi la selezione del credito e scelga un metodo di pagamento.</div>');
define('GV_ADD_PAYMENT_INFO', '<div class="errormessage">Il suo credito non è sufficiente o non può essere applicato a tutti gli articoli per pagare l\'intero ordine. Selezioni un metodo di pagamento aggiuntivo</div>');

define('_SHIPPING_FREE', 'Spedizione gratuita');
define('TEXT_INFO_FREE_SHIPPING_COUPON', 'Le spese di spedizione sono coperte dal suo buono.');

define('TEXT_CONTENT_NOT_FOUND', 'Questa pagina non è stata trovata.');
define('TEXT_SITE_NOT_FOUND', 'Questa pagina non è stata trovata.');

define('MAX_PROD_QTY_EXCEEDED', 'Il numero massimo consentito di articoli per quantità di ' . MAX_PRODUCTS_QTY . ' per <span style="font-style:italic;">\'%s\'</span> è stato superato.<br />Il numero di articoli è stato automaticamente ridotto al numero consentito.');

define('IMAGE_BUTTON_CONTENT_EDIT', 'Modificare il contenuto');
define('PRINTVIEW_INFO', 'Stampi la scheda tecnica dell\'articolo');
define('PRODUCTS_REVIEW_LINK', 'Scrivi un commento');

define('TAX_INFO_SMALL_BUSINESS', 'Prezzo finale secondo il &sect; 19 UStG.');
define('TAX_INFO_SMALL_BUSINESS_FOOTER', 'In virtù dello status di piccola impresa ai sensi del &sect; 19 UStG, non applichiamo l\'IVA e pertanto non la indichiamo.');

define('NEED_CHANGE_PWD', 'La preghiamo di cambiare la sua password.');
define('TEXT_REQUEST_NOT_VALID', 'Il link è scaduto. Richieda una nuova password.');

define('NAVBAR_TITLE_WISHLIST', 'Blocco di note');
define('TEXT_TO_WISHLIST', 'Sul notebook');
define('IMAGE_BUTTON_TO_WISHLIST', 'Sul notebook');

define('GUEST_REDEEM_NOT_ALLOWED', 'I buoni non possono essere riscattati dagli ospiti.');
define('GUEST_VOUCHER_NOT_ALLOWED', 'I buoni non possono essere acquistati come ospiti.');

define('TEXT_FILTER_SETTING_DEFAULT', 'Articoli per pagina');
define('TEXT_FILTER_SETTING', '%s articoli per pagina');
define('TEXT_FILTER_SETTING_ALL', 'Visualizza tutti gli articoli');
define('TEXT_SHOW_ALL', ' (mostra tutti)');
define('TEXT_FILTER_SORTING_DEFAULT', 'Ordina per ...');
define('TEXT_FILTER_SORTING_ABC_ASC', 'Dalla A alla Z');
define('TEXT_FILTER_SORTING_ABC_DESC', 'Z e A');
define('TEXT_FILTER_SORTING_PRICE_ASC', 'Precio ascendente');
define('TEXT_FILTER_SORTING_PRICE_DESC', 'Prezzi in calo');
define('TEXT_FILTER_SORTING_DATE_DESC', 'Prima i prodotti più recenti');
define('TEXT_FILTER_SORTING_DATE_ASC', 'Prima i prodotti più vecchi');
define('TEXT_FILTER_SORTING_ORDER_DESC', 'I migliori venditori');

define('NAVBAR_TITLE_ACCOUNT_CHECKOUT_EXPRESS_EDIT', 'Impostazioni per il mio acquisto rapido');
define('SUCCESS_CHECKOUT_EXPRESS_UPDATED', 'Le mie impostazioni di acquisto rapido sono state salvate.');
define('TEXT_ERROR_CHECKOUT_EXPRESS_SHIPPING_ADDRESS', 'Selezioni un indirizzo di spedizione');
define('TEXT_ERROR_CHECKOUT_EXPRESS_SHIPPING_MODULE', 'Selezionare un metodo di spedizione');
define('TEXT_ERROR_CHECKOUT_EXPRESS_PAYMENT_ADDRESS', 'Selezionare un indirizzo di fatturazione');
define('TEXT_ERROR_CHECKOUT_EXPRESS_PAYMENT_MODULE', 'Selezionare un metodo di pagamento');
define('TEXT_CHECKOUT_EXPRESS_INFO_LINK', 'Mon achat rapide');
define('TEXT_CHECKOUT_EXPRESS_INFO_LINK_MORE', 'Maggiori informazioni su My Quick Buy "');
define('TEXT_CHECKOUT_EXPRESS_CHECK_CHEAPEST', 'Scelga sempre il metodo di spedizione più economico');

define('AC_SHOW_PAGE', 'Pagina ');
define('AC_SHOW_PAGE_OF', ' da ');

define('FREE_SHIPPING_INFO', 'a partire da %s del valore dell\'ordine spediamo il suo ordine gratuitamente');

define('MANUFACTURER_NOT_FOUND', 'Produttore non trovato');
define('ENTRY_TOKEN_ERROR', 'La preghiamo di controllare le sue iscrizioni.');

define('IMAGE_BUTTON_CONFIRM', 'Confirmez');

/**
 * Bank account
 */
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_0', 'Coordinate bancarie OK.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1', 'Il numero di conto e/o il codice di selezione non sono validi o non corrispondono.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2', 'Il numero di conto non è verificabile automaticamente.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_3', 'Il numero di conto non è verificabile.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_4', 'Impossibile verificare il numero del conto La preghiamo di ricontrollare i suoi dati.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_5', 'Questo codice bancario non esiste, la preghiamo di correggere il suo inserimento.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_8', 'Errore del codice bancario o nessun codice bancario specificato.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_9', 'Non viene fornito alcun numero di conto');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_10', 'Non ha specificato il titolare del conto.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_128', 'Errore interno durante la verifica dei dati bancari.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1000', 'Codice Paese contenuto nell\'IBAN (1a e 2a cifra) sconosciuto.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1010', 'Lunghezza IBAN errata: sono state inserite troppe cifre.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1020', 'Lunghezza errata dell\'IBAN: sono state inserite troppo poche cifre.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1030', 'L\'IBAN non corrisponde al formato specificato per il Paese.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1040', 'Le cifre di controllo dell\'IBAN (cifre 3 e 4) non sono corrette -&gt; errore di battitura nell\'IBAN.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1050', 'Il BIC ha un formato non valido.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1060', 'Lunghezza BIC errata: sono stati inseriti troppi caratteri. Sono richiesti 8 o 11 caratteri.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1070', 'Lunghezza BIC errata: inserisca un numero di caratteri troppo basso. Sono necessari 8 o 11 caratteri.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1080', 'La lunghezza del BIC non è valida: sono necessari 8 o 11 caratteri.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1200', 'Purtroppo non possiamo accettare IBAN del Paese specificato (1a e 2a cifra dell\'IBAN).');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2001', 'Il numero di conto (cifre da 13 a 22) e/o il codice bancario (cifre da 5 a 12) contenuti nell\'IBAN non sono validi o non corrispondono.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2002', 'Il numero di conto nell\'IBAN (cifre da 13 a 22) non può essere verificato automaticamente.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2003', 'Non viene definita alcuna procedura di verifica delle cifre per i numeri di conto contenuti nell\'IBAN (cifre da 13 a 22).');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2004', 'Il numero di conto nell\'IBAN (cifre da 13 a 22) non può essere verificato.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2005', 'Il codice bancario (cifre da 5 a 12 dell\'IBAN) non esiste.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2008', 'Errore nel codice bancario (cifre da 5 a 12 dell\'IBAN) o non è stato specificato alcun codice bancario.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2009', 'Il numero di conto (cifre da 13 a 22 dell\'IBAN) non viene fornito.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2010', 'Il titolare del conto non è stato specificato.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2020', 'BIC non valido: non esiste una banca con questo BIC.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2128', 'Errore interno durante la verifica dei dati bancari.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_UNKNOWN', 'Errore sconosciuto durante la verifica dei dati bancari.');

define('PRODUCT_REVIEWS_SUCCESS', 'Grazie per il suo commento.');
define('PRODUCT_REVIEWS_SUCCESS_WAITING', 'Grazie per il suo commento. Ora sarà rivisto prima di essere pubblicato.');

define('TITLE_PRODUCTS_NEW', 'Nuovi articoli');
define('TITLE_SPECIALS', 'Offerte');

define('SITEMAP_ERROR_400', 'Errore 400: la richiesta era sintatticamente errata.');
define('SITEMAP_ERROR_401', 'Errore 401: errore di autenticazione.');
define('SITEMAP_ERROR_403', 'Errore 403: il server si rifiuta di funzionare.');
define('SITEMAP_ERROR_404', 'Errore 404: la pagina che sta cercando non è stata trovata!');
define('SITEMAP_ERROR_500', 'Errore 500: si è verificato un errore interno del server.');

define('ERROR_PRODUCTS_MISSING_CONFIGURATION_NOT_ADDED', 'Alcuni articoli del suo ordine non sono più disponibili nella configurazione desiderata e non sono stati aggiunti al suo carrello.');
