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

$extra_files = auto_include(DIR_FS_LANGUAGES . 'italian/extra/admin/', 'php');

foreach ($extra_files as $extra_file) {
    require $extra_file;
}

/**
 * Translations
 */
define('TITLE', defined('PROJECT_VERSION') ? PROJECT_VERSION : 'indefinito');

define('HEADER_TITLE_TOP', 'Amministrazione');
define('HEADER_TITLE_SUPPORT_SITE', 'Pagina di supporto');
define('HEADER_TITLE_ONLINE_CATALOG', 'Catalogo online');
define('HEADER_TITLE_ADMINISTRATION', 'Amministrazione');

define('MALE', 'Sr.');
define('FEMALE', 'Mme.');
define('DIVERSE', 'Succhiatori');

define('DOB_FORMAT_STRING', 'tt.mm.jjjj');

define('BOX_HEADING_CONFIGURATION', 'Konfiguración');
define('BOX_HEADING_MODULES', 'Modulo');
define('BOX_HEADING_PARTNER_MODULES', 'Moduli associati');
define('BOX_HEADING_ZONE', 'Terreni/tasse');
define('BOX_HEADING_CUSTOMERS', 'Clienti');
define('BOX_HEADING_PRODUCTS', 'Catalogo');
define('BOX_HEADING_STATISTICS', 'Statistiche');
define('BOX_HEADING_TOOLS', 'Programmi di sostegno');
define('BOX_HEADING_LOCALIZATION', 'Lingue/valute');
define('BOX_HEADING_TEMPLATES', 'Plantillas');
define('BOX_HEADING_LOCATION_AND_TAXES', 'Terreni/tasse');
define('BOX_HEADING_CATALOG', 'Catalogo');
define('BOX_MODULE_NEWSLETTER', 'Newsletter');

define('BOX_CONTENT', 'Sistema di gestione dei contenuti');
define('TEXT_ALLOWED', 'Permission');
define('TEXT_ACCESS', 'Zona di accesso');
define('BOX_CONFIGURATION', 'Impostazioni di base');
define('BOX_CONFIGURATION_1', 'Il mio negozio');
define('BOX_CONFIGURATION_2', 'Valori minimi');
define('BOX_CONFIGURATION_3', 'Valori massimi');
define('BOX_CONFIGURATION_4', 'Opzioni di immagine');
define('BOX_CONFIGURATION_5', 'Dettagli del cliente');
define('BOX_CONFIGURATION_6', 'Opzioni del modulo');
define('BOX_CONFIGURATION_7', 'Opzioni di spedizione');
define('BOX_CONFIGURATION_8', 'Opzioni dell\'elenco degli articoli');
define('BOX_CONFIGURATION_9', 'Opzioni di gestione del magazzino');
define('BOX_CONFIGURATION_10', 'Opzioni di registrazione');
define('BOX_CONFIGURATION_11', 'Opzioni della cache');
define('BOX_CONFIGURATION_12', 'Opzioni e-mail');
define('BOX_CONFIGURATION_13', 'Descargar opzioni');
define('BOX_CONFIGURATION_14', 'Compression');
define('BOX_CONFIGURATION_15', 'Sessioni');
define('BOX_CONFIGURATION_16', 'Meta tag/motori di ricerca');
define('BOX_CONFIGURATION_17', 'Moduli aggiuntivi');
define('BOX_CONFIGURATION_18', 'USt-IdNr.');
define('BOX_CONFIGURATION_19', 'Partner');
define('BOX_CONFIGURATION_22', 'Opzioni di ricerca');
define('BOX_CONFIGURATION_24', 'Google, Matomo e Facebook');
define('BOX_CONFIGURATION_25', 'Captcha');
define('BOX_CONFIGURATION_31', 'Skrill');
define('BOX_CONFIGURATION_40', 'Opzioni della finestra pop-up');
define('BOX_CONFIGURATION_1000', 'Opzioni dell\'area di amministrazione');

define('BOX_MODULES', 'Moduli di pagamento/spedizione/fatturazione');
define('BOX_PAYMENT', 'Metodi di pagamento');
define('BOX_SHIPPING', 'Metodo di spedizione');
define('BOX_ORDER_TOTAL', 'Resumen');
define('BOX_CATEGORIES', 'Categorie/Articoli');
define('BOX_PRODUCTS_ATTRIBUTES', 'Caratteristiche dell\'articolo');
define('BOX_MANUFACTURERS', 'Fabricant');
define('BOX_REVIEWS', 'Commenti sui prodotti');
define('BOX_CAMPAIGNS', 'Kampagnen');
define('BOX_XSELL_PRODUCTS', 'Marketing cruzado');
define('BOX_SPECIALS', 'Offerte speciali');
define('BOX_PRODUCTS_EXPECTED', 'Articoli pianificati');
define('BOX_CUSTOMERS', 'Clienti');
define('BOX_ACCOUNTING', 'Gestione dei diritti dell\'amministratore');
define('BOX_CUSTOMERS_STATUS', 'Gruppi di clienti');
define('BOX_ORDERS', 'Applicazioni');
define('BOX_COUNTRIES', 'Paese');
define('BOX_ZONES', 'Stati federali');
define('BOX_GEO_ZONES', 'Zone fiscali');
define('BOX_TAX_CLASSES', 'Tramos impositivos');
define('BOX_TAX_RATES', 'Aliquote fiscali');
define('BOX_HEADING_REPORTS', 'Informare');
define('BOX_PRODUCTS_VIEWED', 'Articoli visitati');
define('BOX_STOCK_WARNING', 'Rapporto sul campo');
define('BOX_PRODUCTS_PURCHASED', 'Articoli venduti');
define('BOX_STATS_CUSTOMERS', 'Statistiche sugli ordini dei clienti');
define('BOX_BACKUP', 'Responsabile del database');
define('BOX_BANNER_MANAGER', 'Responsabile Banner');
define('BOX_CACHE', 'Controllo del nascosto');
define('BOX_DEFINE_LANGUAGE', 'Definire le lingue');
define('BOX_FILE_MANAGER', 'Gestore di file');
define('BOX_MAIL', 'Invii un\'e-mail');
define('BOX_NEWSLETTERS', 'Responsabile della newsletter');
define('BOX_SERVER_INFO', 'Informazioni sul server');
define('BOX_WHOS_ONLINE', 'Chi è online');
define('BOX_TPL_BOXES', 'Sequenza di scatole');
define('BOX_CURRENCIES', 'Divisas');
define('BOX_LANGUAGES', 'Lingue');
define('BOX_ORDERS_STATUS', 'Stato dell\'ordine');
define('BOX_ATTRIBUTES_MANAGER', 'Gestione degli attributi');
define('BOX_SHIPPING_STATUS', 'Stato della consegna');
define('BOX_SALES_REPORT', 'Statistiche di rotazione');
define('BOX_MODULE_EXPORT', 'Modulo di esportazione');
define('BOX_MODULE_SYSTEM', 'Moduli del sistema');
define('BOX_HEADING_GV_ADMIN', 'Buoni/Coupon');
define('BOX_GV_ADMIN_QUEUE', 'Coda dei voucher');
define('BOX_GV_ADMIN_MAIL', 'Indirizzo e-mail del buono');
define('BOX_GV_ADMIN_SENT', 'I tagliandi inviati');
define('BOX_COUPON_ADMIN', 'Amministrazione dei voucher');
define('BOX_TOOLS_BLACKLIST', 'Lista nera delle carte di credito');
define('BOX_IMPORT', 'Importazione ed esportazione');
define('BOX_PRODUCTS_VPE', 'Unità di imballaggio');
define('BOX_CAMPAIGNS_REPORT', 'Rapporto sulla campagna');
define('BOX_ORDERS_XSELL_GROUP', 'Gruppi di cross marketing');
define('BOX_REMOVEOLDPICS', 'Cancellare le vecchie immagini');
define('BOX_JANOLAW', 'janolaw Alloggio AGB');
define('BOX_HAENDLERBUND', 'Termini e condizioni generali del Servicio H&auml;ndlerbund');
define('BOX_SHOP', 'Negozio');
define('BOX_LOGOUT', 'Disconnessione');
define('BOX_CREDITS', 'Crediti');
define('BOX_UPDATE', 'Controllo della versione');
define('BOX_GV_CUSTOMERS', 'Credito al cliente');
define('BOX_IT_RECHT_KANZLEI', 'Studio legale specializzato in IT');
define('BOX_PROTECTEDSHOPS', 'Negozi protetti - Servizio AGB');
define('BOX_CLEVERREACH', 'CleverReach');
define('BOX_SUPERMAILER', 'SuperMailer');
define('BOX_OFFLINE', 'Negozio offline');
define('BOX_LOGS', 'File di registro');
define('BOX_SHIPCLOUD', 'nave-nuvola');
define('BOX_SHIPCLOUD_PICKUP', 'shipcloud - Collezione');
define('BOX_PRODUCTS_TAGS', 'Proprietà dell\'articolo');
define('BOX_TRUSTEDSHOPS', 'Negozi di fiducia');
define('BOX_NEWSLETTER_RECIPIENTS', 'Destinatari della newsletter');
define('BOX_DSGVO_EXPORT', 'Esportazione GDPR');
define('BOX_SUPPORT', 'Supporto');
define('BOX_CACHING', 'Caching');
define('BOX_COOKIE_CONSENT', 'Consenso ai cookie');
define('BOX_SEMKNOX', 'Ricerca nel sito Ricerca di prodotti a 360°');
define('BOX_PAGES_CONTENT', 'Pagine di contenuto');
define('BOX_PRODUCTS_CONTENT', 'Allegati all\'articolo');
define('BOX_CONTENT_CONTENT', 'Contenuti Allegati');
define('BOX_EMAIL_CONTENT', 'Allegati alle e-mail');
define('BOX_DHL', 'Spedizione DHL e creazione di etichette');

define('TXT_GROUPS', '<b>Gruppi</b>:');
define('TXT_SYSTEM', 'Sistema');
define('TXT_CUSTOMERS', 'Clienti/Ordini');
define('TXT_PRODUCTS', 'Articoli/Categorie');
define('TXT_STATISTICS', 'Strumenti statistici');
define('TXT_TOOLS', 'Programmi aggiuntivi');
define('TEXT_ACCOUNTING', 'Parametri di accesso per :');

define('JS_ERROR', 'Si sono verificati degli errori durante l\'inserimento! La preghiamo di correggere quanto segue.');

define('JS_OPTIONS_VALUE_PRICE', '* Deve assegnare un prezzo a questo valore.');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', 'Deve specificare un segno per il prezzo (+/-)*.');

define('JS_PRODUCTS_NAME', '* Il nuovo elemento deve avere un nome.');
define('JS_PRODUCTS_DESCRIPTION', '* Il nuovo elemento deve avere una descrizione.');
define('JS_PRODUCTS_PRICE', '* Il nuovo articolo deve avere un prezzo.');
define('JS_PRODUCTS_WEIGHT', '* Il nuovo articolo deve avere un\'indicazione di peso.');
define('JS_PRODUCTS_QUANTITY', '* Deve assegnare una quantità disponibile al nuovo articolo.');
define('JS_PRODUCTS_MODEL', '* Deve assegnare un numero d\'articolo al nuovo articolo.');
define('JS_PRODUCTS_IMAGE', '* Deve assegnare un\'immagine all\'articolo.');

define('JS_SPECIALS_PRODUCTS_PRICE', '* È necessario impostare un nuovo prezzo per questo articolo.');

define('JS_ORDER_DOES_NOT_EXIST', 'Il numero d\'ordine %s non esiste!');

define('CATEGORY_PERSONAL', 'Dati personali');
define('CATEGORY_ADDRESS', 'Indirizzo');
define('CATEGORY_CONTACT', 'La preghiamo di contattare');
define('CATEGORY_COMPANY', 'Azienda');
define('CATEGORY_OPTIONS', 'Altre opzioni');

define('ENTRY_GENDER', 'Saluto :');
define('ENTRY_GENDER_ERROR', ' <span class="errorText">input necessari</span>');
define('ENTRY_FIRST_NAME', 'Numero di pila:');
define('ENTRY_FIRST_NAME_ERROR', ' <span class="errorText">almeno "' . (defined('ENTRY_FIRST_NAME_MIN_LENGTH') ? ENTRY_FIRST_NAME_MIN_LENGTH : 0) . ' Lettere</span>');
define('ENTRY_LAST_NAME', 'Cognome :');
define('ENTRY_LAST_NAME_ERROR', ' <span class="errorText">almeno "' . (defined('ENTRY_LAST_NAME_MIN_LENGTH') ? ENTRY_LAST_NAME_MIN_LENGTH : 0) . ' Lettere</span>');
define('ENTRY_DATE_OF_BIRTH', 'Data di nascita :');
define('ENTRY_DATE_OF_BIRTH_ERROR', ' <span class="errorText">(ad esempio, 21.05.1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'Indirizzo e-mail :');
define('ENTRY_EMAIL_ADDRESS_ERROR', ' <span class="errorText">almeno "' . (defined('ENTRY_EMAIL_ADDRESS_MIN_LENGTH') ? ENTRY_EMAIL_ADDRESS_MIN_LENGTH : 0) . ' Lettere</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', ' <span class="errorText">Indirizzo e-mail non valido! (Attualmente, gli umlaut non sono ammessi negli indirizzi e-mail).</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', ' <span class="errorText">Questo indirizzo e-mail esiste già!</span>');
define('ENTRY_COMPANY', 'Nome dell\'azienda :');
define('ENTRY_STREET_ADDRESS', 'Stra&szlig;e :');
define('ENTRY_STREET_ADDRESS_ERROR', ' <span class="errorText">almeno "' . (defined('ENTRY_STREET_ADDRESS_MIN_LENGTH') ? ENTRY_STREET_ADDRESS_MIN_LENGTH : 0) . ' Lettere</span>');
define('ENTRY_SUBURB', 'Altri indirizzi:');
define('ENTRY_POST_CODE', 'Codice postale :');
define('ENTRY_POST_CODE_ERROR', ' <span class="errorText">almeno "' . (defined('ENTRY_POSTCODE_MIN_LENGTH') ? ENTRY_POSTCODE_MIN_LENGTH : 0) . ' Numeri</span>');
define('ENTRY_CITY', 'Città :');
define('ENTRY_CITY_ERROR', ' <span class="errorText">almeno "' . (defined('ENTRY_CITY_MIN_LENGTH') ? ENTRY_CITY_MIN_LENGTH : 0) . ' Lettere</span>');
define('ENTRY_STATE', 'Stato:');
define('ENTRY_STATE_ERROR', '<span class="errorText">input necessari</font></small>');
define('ENTRY_COUNTRY', 'Paese :');
define('ENTRY_COUNTRY_ERROR', 'Selezioni il suo Paese dall\'elenco.');
define('ENTRY_TELEPHONE_NUMBER', 'Numero di telefono :');
define('ENTRY_TELEPHONE_NUMBER_ERROR', ' <span class="errorText">almeno "' . (defined('ENTRY_TELEPHONE_MIN_LENGTH') ? ENTRY_TELEPHONE_MIN_LENGTH : 0) . ' Numeri</span>');
define('ENTRY_FAX_NUMBER', 'Numero di fax :');
define('ENTRY_NEWSLETTER', 'Newsletter :');
define('ENTRY_CUSTOMERS_STATUS', 'Gruppo di clienti :');
define('ENTRY_NEWSLETTER_YES', 'sottoscritto');
define('ENTRY_NEWSLETTER_NO', 'Non registrato');
define('ENTRY_MAIL_ERROR', 'La preghiamo di <span class="errorText">effettuare una selezione</span>');
define('ENTRY_PASSWORD', 'Password (creata automaticamente)');
define('ENTRY_PASSWORD_ERROR', ' <span class="errorText">La sua password deve essere almeno ' . (defined('ENTRY_PASSWORD_MIN_LENGTH') ? ENTRY_PASSWORD_MIN_LENGTH : 0) . ' dei personaggi.</span>');
define('ENTRY_MAIL_COMMENTS', 'Testo aggiuntivo nell\'e-mail:');

define('ENTRY_MAIL', 'Inviare e-mail protette da password ai clienti?');
define('YES', 'qui');
define('NO', 'no');
define('SAVE_ENTRY', 'Cambiamenti nella registrazione?');
define('TEXT_CHOOSE_INFO_TEMPLATE', 'Modello di dettaglio dell\'articolo');
define('TEXT_CHOOSE_OPTIONS_TEMPLATE', 'Opzioni di modello per gli articoli');
define('TEXT_SELECT', 'Per favore, selezioni -- Per favore, selezioni -- Per favore, selezioni -- Per favore, selezioni -- Per favore.');
define('PULL_DOWN_DEFAULT', 'Si prega di selezionare');

define('ICON_ARROW_RIGHT', 'marche');
define('ICON_BIG_WARNING', 'Attenzione!');
define('ICON_CROSS', 'Non è corretto');
define('ICON_CURRENT_FOLDER', 'File corrente');
define('ICON_DELETE', 'Esercitazioni');
define('ICON_EDIT', 'Edite');
define('ICON_ERROR', 'Errore');
define('ICON_FILE', 'Archivi');
define('ICON_FILE_DOWNLOAD', 'Scaricare');
define('ICON_FOLDER', 'Dossier');
define('ICON_LOCKED', 'Ho bloccato');
define('ICON_POPUP', 'Vista frontale del banner');
define('ICON_PREVIOUS_LEVEL', 'Livello precedente');
define('ICON_PREVIEW', 'Vista frontale');
define('ICON_STATISTICS', 'Statistiche');
define('ICON_SUCCESS', 'Il successo');
define('ICON_TICK', 'Verdadero');
define('ICON_UNLOCKED', 'Sbloccato');
define('ICON_WARNING', 'Avvertimento');

define('TEXT_RESULT_PAGE', 'Pagina %s di %d');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Visualizzati da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> banner)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Mostrato da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> Paesi)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Mostrato da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> clienti)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Mostra da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> pezzi).');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Mostrato da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> lingue)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Mostrato da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> produttori)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Mostrato da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> schede)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS_RECIPIENTS', 'Mostrato da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> destinatari di newsletter).');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Mostrato da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> ordini).');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Mostrato da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> stati di controllo)');
define('TEXT_DISPLAY_NUMBER_OF_XSELL_GROUP', 'Mostrato da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> gruppi di cross marketing)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_VPE', 'Mostrato da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> unità di imballaggio).');
define('TEXT_DISPLAY_NUMBER_OF_SHIPPING_STATUS', 'Visualizzato da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> stati di consegna).');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Mostrato da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> articoli)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Mostrati da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> articoli previsti)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Mostrato da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> recensioni)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Presentato da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> offerte speciali)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Mostrato da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> classi fiscali)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Visualizzato da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> zone fiscali).');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Visualizzato da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> aliquote fiscali).');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Mostrato da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> Stati federali)');
define('TEXT_DISPLAY_NUMBER_OF_WHOS_ONLINE', 'Mostrato da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> clienti che sono online)');

define('PREVNEXT_BUTTON_PREV', '"');
define('PREVNEXT_BUTTON_NEXT', '"');

define('TEXT_DEFAULT', 'Standard');
define('TEXT_SET_DEFAULT', 'Imposta come standard');
define('TEXT_FIELD_REQUIRED', ' <span class="fieldRequired">* Requis</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Errore: non è stata definita alcuna valuta predefinita. Definisca una valuta predefinita in Amministrazione -&gt; Lingue/Currenze -&gt; Valute.');

define('TEXT_CACHE_CATEGORIES', 'Categoria box');
define('TEXT_CACHE_MANUFACTURERS', 'Scatola del produttore');
define('TEXT_CACHE_ALSO_PURCHASED', 'Modulo acquistato anche');

define('TEXT_NONE', '--Non...');
define('TEXT_AUTO_PROPORTIONAL', '-autoproporzionale.');
define('TEXT_AUTO_MAX', '--auto max--');
define('TEXT_TOP', 'Top');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Errore: il magazzino non esiste.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Errore: la posizione di archiviazione non è scrivibile.');
define('ERROR_FILE_NOT_SAVED', 'Errore: il file non è stato salvato.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Errore: il tipo di file non è consentito.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Successo: il file scaricato è stato salvato con successo.');
define('WARNING_NO_FILE_UPLOADED', 'Attenzione: Non è stato caricato alcun file.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Errore: non è stato possibile eliminare il file.');

define('DELETE_ENTRY', 'Ingresso libero?');
define('TEXT_PAYMENT_ERROR', '<b>ATTENZIONE:</b> attivi un <a href="%s">modulo di pagamento</a>!');
define('TEXT_SHIPPING_ERROR', '<b>ATTENZIONE:</b> Attivare un <a href="%s">modulo di spedizione</a>!');
define('TEXT_PAYPAL_CONFIG', '<b>ATTENZIONE:</b> imposti il modulo di pagamento PayPal su "modalità attiva": <a href="%s"><strong>Partner -&gt; PayPal</strong></a>');
define('TEXT_NETTO', 'Nipote : ');
define('TEXT_DUPLICATE_CONFIG_ERROR', '<b>ATTENZIONE:</b> Duplicazione della chiave di configurazione : ');

define('ENTRY_CID', 'Numero cliente :');
define('IP', 'Pedir IP :');
define('CUSTOMERS_MEMO', 'Promemoria :');
define('DISPLAY_MEMOS', 'Visione/Scrittura');
define('TITLE_MEMO', 'Clienti MEMO');
define('ENTRY_LANGUAGE', 'Lingua :');
define('CATEGORIE_NOT_FOUND', 'Categoria non disponibile');

define('IMAGE_RELEASE', 'Canjear vale');
define('IMAGE_ICON_STATUS_GREEN_STOCK', 'in stock');
define('IMAGE_ICON_STATUS_GREEN', 'attività');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'attività');
define('IMAGE_ICON_STATUS_RED', 'inactif');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'disattivare');
define('IMAGE_ICON_INFO', 'selezionare');

define('_JANUARY', 'Gennaio');
define('_FEBRUARY', 'Febbraio');
define('_MARCH', 'Marte');
define('_APRIL', 'Aprile');
define('_MAY', 'Mai');
define('_JUNE', 'Giugno');
define('_JULY', 'Luglio');
define('_AUGUST', 'Agosto');
define('_SEPTEMBER', 'Settembre');
define('_OCTOBER', 'Ottobre');
define('_NOVEMBER', 'Novembre');
define('_DECEMBER', 'Dicembre');

define('TEXT_NEWSLETTER_REMOVE', 'Per annullare l\'iscrizione alla nostra newsletter, clicchi qui:');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Mostrati da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> voucher)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Mostrati <b> da %d</b> a <b>%d</b> (su un totale di <b>%d</b> tagliandi)');
define('TEXT_VALID_PRODUCTS_LIST', 'Elenchi di articoli');
define('TEXT_VALID_PRODUCTS_ID', 'ID articolo');
define('TEXT_VALID_PRODUCTS_NAME', 'Nome dell\'articolo');
define('TEXT_VALID_PRODUCTS_MODEL', 'Articolo n.');

define('TEXT_VALID_CATEGORIES_LIST', 'Elenco delle categorie');
define('TEXT_VALID_CATEGORIES_ID', 'Categoria ID');
define('TEXT_VALID_CATEGORIES_NAME', 'Nome della categoria');

define('TXT_ALL', 'Tutti');

define('HEADING_TITLE_VAT', 'USt-IdNr.');
define('ENTRY_VAT_ID', 'USt-IdNr :');
define('ENTRY_CUSTOMERS_VAT_ID', 'USt-IdNr :');
define('TEXT_VAT_FALSE', '<span class="messageStackError">Controllato/USt-IdNr. non è valido!</span>');
define('TEXT_VAT_TRUE', '<span class="messageStackSuccess">Audit/USt-IdNr. è valido</span>');
define('TEXT_VAT_UNKNOWN_COUNTRY', '<span class="messageStackError">Non testato/paese sconosciuto</span>');
define('TEXT_VAT_INVALID_INPUT', '<span class="messageStackError">Non verificato/Codice paese trasferito non valido o numero di identificazione IVA vuoto.</span>');
define('TEXT_VAT_SERVICE_UNAVAILABLE', '<span class="messageStackError">Non verificato/Servizio SOAP non raggiungibile, riprovare più tardi.</span>');
define('TEXT_VAT_MS_UNAVAILABLE', '<span class="messageStackError">Non verificato/Servizio dello Stato membro non disponibile, riprovi più tardi o con un altro Stato membro.</span>');
define('TEXT_VAT_TIMEOUT', '<span class="messageStackError">Non selezionato/Impossibile contattare il servizio dello Stato membro (timeout), riprovi più tardi o provi con un altro Stato membro.</span>');
define('TEXT_VAT_SERVER_BUSY', '<span class="messageStackError">Deselezionato / Il servizio non può elaborare la sua richiesta. La preghiamo di riprovare più tardi.</span>');
define('TEXT_VAT_NO_PHP5_SOAP_SUPPORT', '<span class="messageStackError">Il supporto PHP5 SOAP non è testato/il supporto non è disponibile!</span>');
define('TEXT_VAT_CONNECTION_NOT_POSSIBLE', '<span class="messageStackError">ERRORE: Impossibile connettersi al servizio web (ERRORE SOAP)!</span>');

define('ERROR_GIF_MERGE', 'Manca il supporto Gif di GDlib, non è possibile la filigrana (fusione).');
define('ERROR_GIF_UPLOAD', 'Manca il supporto GDlib Gif, le immagini GIF non possono essere scaricate.');

define('BOX_GOOGLE_SITEMAP', 'Mappa del sito di Google');
define('BOX_PAYPAL', 'PayPal');

define('_PAYMENT_MONEYBOOKERS_EMAILID_TITLE', 'Indirizzo e-mail Skrill');
define('_PAYMENT_MONEYBOOKERS_EMAILID_DESC', 'L\'indirizzo e-mail che ha utilizzato per registrarsi su Skrill.com.<br />Se non ha ancora un account, si <b>registri</b> ora su <a href="https://account.skrill.com/signup/page1" target="_blank"><b>Skrill</b></a> <b>gratuitamente</b>.');
define('_PAYMENT_MONEYBOOKERS_MERCHANTID_TITLE', 'ID commerciante Skrill');
define('_PAYMENT_MONEYBOOKERS_MERCHANTID_DESC', 'Il suo ID commerciante Skrill.com');
define('_PAYMENT_MONEYBOOKERS_PWD_TITLE', 'La parola segreta di Skrill');
define('_PAYMENT_MONEYBOOKERS_PWD_DESC', '<span>Inserendo la parola segreta, la connessione viene crittografata durante il processo di pagamento. Questo garantisce il massimo livello di sicurezza. Inserisca la sua parola segreta Skrill (non la password!). La parola segreta può essere composta solo da lettere minuscole e numeri. Può</span> impostare la sua parola<span>segreta <b><span class="col-red">dopo l\'attivazione nel</span></b></span> suo conto utente Skrill (impostazioni dell\'esercente).<br /><br /><span class="col-red">Come attivare il suo conto Skrill.com per l\'elaborazione dei pagamenti!</span><br /><br />Invii un\'e-mail con:<br/>- il dominio del suo negozio<br/>- il suo indirizzo e-mail Skrill<br /><br />A: <a href="mailto:ecommerce@skrill.com?subject=modified eCommerce Shopsoftware: Aktivierung fuer Skrill Quick Checkout">ecommerce@skrill.com</a>');
define('_PAYMENT_MONEYBOOKERS_TMP_STATUS_ID_TITLE', 'Stato dell\'ordine - Processo di pagamento');
define('_PAYMENT_MONEYBOOKERS_TMP_STATUS_ID_DESC', ' Non appena il cliente clicca su "Invia ordine" nel negozio, viene creato un "ordine temporaneo". Questo ha il vantaggio che un ordine viene salvato per i clienti che annullano il processo di pagamento in Moneybookes.');
define('_PAYMENT_MONEYBOOKERS_PROCESSED_STATUS_ID_TITLE', 'Stato dell\'ordine - Pagamento OK');
define('_PAYMENT_MONEYBOOKERS_PROCESSED_STATUS_ID_DESC', 'Appare quando il pagamento è stato confermato da Skrill.');
define('_PAYMENT_MONEYBOOKERS_PENDING_STATUS_ID_TITLE', 'Stato dell\'ordine - pagamento in sospeso');
define('_PAYMENT_MONEYBOOKERS_PENDING_STATUS_ID_DESC', 'Se il cliente non dispone di fondi sul proprio conto, il pagamento viene messo in attesa fino a quando il conto Skrill non viene sbloccato.');
define('_PAYMENT_MONEYBOOKERS_CANCELED_STATUS_ID_TITLE', 'Stato dell\'ordine - Pagamento annullato');
define('_PAYMENT_MONEYBOOKERS_CANCELED_STATUS_ID_DESC', 'Viene visualizzato se, ad esempio, una carta di credito è stata rifiutata.');
define('MB_ERROR_NO_MERCHANT', 'Non esiste un conto Skrill.com con questo indirizzo e-mail.');
define('MB_MERCHANT_OK', 'Il conto Skrill.com è andato a buon fine, l\'ID commerciante %s è stato ricevuto e memorizzato da Skrill.com.');
define('MB_INFO', '<img src="../images/icons/moneybookers/MBbanner.jpg" /><br /><br />Ora può accettare carte di credito, addebiti diretti, Sofort, Giropay e tutte le altre principali opzioni di pagamento locali direttamente con una semplice attivazione nel negozio. Con Skrill come soluzione all-in-one, non è necessario stipulare contratti individuali per ogni metodo di pagamento. Ha bisogno solo di uno <a href="https://account.skrill.com/signup/page1" target="_blank"><b>Conto Skrill gratuito</b></a>per accettare tutte le principali opzioni di pagamento nel suo negozio. I metodi di pagamento aggiuntivi sono gratuiti, il modulo non prevede alcun <b>canone mensile fisso o costi di installazione</b>.<br /><br /><b>I suoi vantaggi:</b><br />- L\'accettazione di tutte le principali opzioni di pagamento aumenta il suo fatturato<br />- Un unico fornitore riduce il suo impegno e i suoi costi<br />- Il suo cliente paga direttamente e senza procedura di registrazione<br />- Attivazione e integrazione in un solo clic<br />- Molto attraente <a href="https://www.skrill.com/de/fees/" target="_blank"><b>Termini e condizioni</b></a> <br /> Conferma immediata del pagamento e verifica dei dati del cliente<br />- Elaborazione dei pagamenti anche all\'estero e senza costi aggiuntivi<br />- 6 milioni di clienti in tutto il mondo si fidano di Skrill');

define('BOX_CUSTOMERS_GROUP', 'Autorizzazioni KG');

define('TEXT_ADMIN_START', 'Inizio');
define('BOX_HEADING_CONFIGURATION2', 'Configurazione avanzata');

define('ASB_QUICK_SEARCH_CUSTOMER', 'Cerca i clienti...');
define('ASB_QUICK_SEARCH_ORDER', 'Ordine di ricerca...');
define('ASB_QUICK_SEARCH_ORDER_ID', 'Cerchi il numero d\'ordine...');
define('ASB_QUICK_SEARCH_ARTICLE', 'Cerchi un articolo/categoria...');
define('ASB_QUICK_SEARCH_EMAIL', 'Trovi l\'indirizzo e-mail...');
define('ASB_QUICK_SEARCH_ARTICLE_ID', 'Cerca l\'ID dell\'articolo/categoria...');
define('ASB_QUICK_SEARCH_ORDER_OR_INVOICE', 'Numero di mandato di ricerca /Rg.No....');

define('BUTTON_SET', 'Attivare tutti');
define('BUTTON_UNSET', 'Disabilita tutti');

define('TEXT_ROWS', 'Linea');
define('TABLE_HEADING_RESET', 'Azzeramento delle statistiche');

define('BUTTON_CLOSE_WINDOW', 'Finestra di chiusura');

define('ENTRY_INVOICE_NUMBER', 'Numero di fattura :');
define('ENTRY_INVOICE_DATE', 'Data della fattura :');

define('ENTRY_VAT_ERROR', ' <span class="errorText">Numero di partita IVA valido</span>');

define('CONFIG_INT_VALUE_ERROR', '"%s" ERRORE: Inserisca solo numeri! La voce %s è stata ignorata!');
define('CONFIG_MAX_VALUE_WARNING', '"AVVERTENZA: l\'input %s è stato ignorato! [Massimo: %s]');
define('CONFIG_MIN_VALUE_WARNING', '"AVVERTENZA: l\'input %s è stato ignorato! [Minimo: %s]');

define('WHOS_ONLINE_TIME_LAST_CLICK_INFO', 'Periodo di visualizzazione in secondi: %s. Trascorso questo tempo, le voci vengono eliminate.');

define('TEXT_GLOBAL_PRODUCTS_MODEL', 'Articolo n.');

define('TEXT_INFO_MODULE_RESTORE', 'Vuole ripristinare le impostazioni salvate?<br /><br /><b>ATTENZIONE</b>: tutte le impostazioni attuali saranno sovrascritte!');
define('TEXT_INFO_MODULE_REMOVE', 'Vuole disinstallare il modulo?<br /><br /><b>ATTENZIONE</b>: anche tutte le impostazioni del modulo saranno cancellate!');
define('TEXT_INFO_MODULE_BACKUP', 'Vuole salvare la configurazione del modulo?');
define('MODULE_BACKUP_CONFIRM', 'Le impostazioni del modulo sono state salvate con successo!');
define('MODULE_RESTORE_CONFIRM', 'Le impostazioni del modulo sono state ripristinate con successo!');
define('MODULE_UPDATE_CONFIRM', 'La configurazione del modulo è stata aggiornata con successo!');

define('BOX_HEADING_MAGNALISTER', 'magnalister');
define('BOX_MAGNALISTER', 'magnalister Admin');

define('CHARS_LEFT', 'Caratteri rimanenti');
define('CHARS_MAX', 'il massimo.');

define('DISPLAY_PER_PAGE', 'Visualizzazione per pagina : ');

define('SPECIALS_DATE_START_TT', 'Le offerte iniziano alle ore 00:00:00');
define('SPECIALS_DATE_END_TT', 'Le offerte si chiudono a mezzanotte (23:59:59)');

define('BOX_PARCEL_CARRIERS', 'Servizio di consegna pacchi');
define('TEXT_DISPLAY_NUMBER_OF_CARRIERS', 'Visualizzazione di <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> fornitori di servizi di consegna pacchi)');

define('RSS_FEED_TITLE', 'Informazioni aggiornate sul Blog Shopsoftware eCommerce modificato');
define('RSS_FEED_DESCRIPTION', 'Informazioni aggiornate sul Forum di supporto Shopsoftware eCommerce modificato');
define('RSS_FEED_LINK', 'http://www.modified-shop.org/blog');
define('RSS_FEED_ALTERNATIVE', 'Purtroppo, le ultime notizie non possono essere visualizzate nel feed RSS. Visiti il nostro blog all\'indirizzo <a href="' . RSS_FEED_LINK . '">www.modified-shop.org/blog</a> per trovare informazioni importanti su questi temi per i direttori di negozio: <ul><li>Aggiornamenti e correzioni importanti</li><li>Miglioramenti funzionali</li><li>La giurisprudenza</li><li>Notizie</li><li>Voci e pettegolezzi</li></ul>');
define('RSS_FEED_NOT_REACHABLE', 'Il feed di notizie non poteva essere aggiornato per qualche tempo.<br>Non perda le notizie importanti, le offerte, ecc. e visiti il sito <a target="_blank" href="https://www.modified-shop.org/blog">www.modified-shop.org/blog</a>.<br></br></br>');
define('TEXT_DISPLAY_NUMBER_OF_NEWSFEED', 'Visualizzazione di <b>%d</b> a <b>%d</b> (su un totale di <b> %d</b> notizie)');

define('CFG_TXT_YES', 'Ja');
define('CFG_TXT_NO', 'Non');
define('CFG_TXT_OR', 'ou');
define('CFG_TXT_AND', 'und');
define('CFG_TXT_ASC', 'in ordine crescente');
define('CFG_TXT_DESC', 'in diminuzione');
define('CFG_TXT_PRODUCTS_NAME', 'Nome dell\'articolo');
define('CFG_TXT_PRODUCTS_MODEL', 'Numero dell\'articolo');
define('CFG_TXT_DATE_EXPECTED', 'disponibile presso');
define('CFG_TXT_ACCOUNT', 'Conto cliente');
define('CFG_TXT_GUEST', 'Account ospite');
define('CFG_TXT_BOTH', 'entrambi');
define('CFG_TXT_NONE', 'disabilitato');
define('CFG_TXT_ADMIN', 'Admin');
define('CFG_TXT_ALL', 'alle');
define('CFG_TXT_WEIGHT', 'Peso');
define('CFG_TXT_PRICE', 'Premi');
define('CFG_TXT_ITEM', 'Camera');
define('CFG_TXT_WHOS_ONLINE', 'In linea');
define('CFG_TXT_ORDERS', 'Ordini');
define('CFG_TXT_CUSTOMERS', 'Clienti');
define('CFG_TXT_SALES_REPORT', 'Statistiche');
define('CFG_TXT_BLOG', 'Blog');
define('CFG_TXT_P.PRODUCTS_PRICE', 'Prix');
define('CFG_TXT_PD.PRODUCTS_NAME', 'Nome dell\'articolo');
define('CFG_TXT_P.PRODUCTS_DATE_ADDED', 'Data di impostazione');
define('CFG_TXT_P.PRODUCTS_MODEL', 'Numero di articolo');
define('CFG_TXT_P.PRODUCTS_ORDERED', 'Articoli ordinati');
define('CFG_TXT_P.PRODUCTS_SORT', 'Ordinamento');
define('CFG_TXT_P.PRODUCTS_WEIGHT', 'Poids');
define('CFG_TXT_P.PRODUCTS_QUANTITY', 'In magazzino');
define('CFG_TXT_S.SPECIALS_DATE_ADDED', 'Data di impostazione');

define('CSRF_TOKEN_MANIPULATION', 'manipolazione di CSRFToken (per motivi di sicurezza, non è più consentito lavorare in schede diverse nell\'area di amministrazione).');
define('CSRF_TOKEN_NOT_DEFINED', 'CSRFToken non definito (per motivi di sicurezza, non è più consentito lavorare in schede diverse nell\'area di amministrazione).');

define('TEXT_ACCOUNTING_INFO', 'L\'amministratore principale [1] non può essere privato dei suoi diritti di accesso!');

define('JAVASCRIPT_DISABLED_INFO', 'JavaScript è disattivato nel suo browser. Abiliti JavaScript per utilizzare tutte le funzioni di questo sito e vedere tutti i suoi contenuti.');

define('BOX_MODULE_TYPE', 'Moduli di estensione della classe');

define('MULTIPLE_INSTALLATION', '<span style="color:red">[Installazione multipla : %s]</span>');

define('FILEUPLOAD_INPUT_TXT', 'Nessun file');
define('FILEUPLOAD_BTN_TXT', 'Sfoglia');

define('CHECK_LABEL_PRICE', 'Vedere il prezzo');

define('TEXT_PAYPAL_TAB_CONFIG', 'Konfigurazione di PayPal');
define('TEXT_PAYPAL_TAB_PROFILE', 'Profilo PayPal');
define('TEXT_PAYPAL_TAB_WEBHOOK', 'Webhook PayPal');
define('TEXT_PAYPAL_TAB_MODULE', 'Prodotti PayPal');
define('TEXT_PAYPAL_TAB_INFO', 'Informazioni su PayPal');

define('TEXT_DEFAULT_SORT_ORDER_TITLE', 'Ordine di ordinamento');
define('TEXT_DEFAULT_SORT_ORDER_DESC', 'Ordine di elaborazione dei dati. Il numero più piccolo viene eseguito per primo.');
define('TEXT_DEFAULT_STATUS_TITLE', 'Attivare il modulo?');
define('TEXT_DEFAULT_STATUS_DESC', 'Modulo di stato');

define('TEXT_HOUR', 'Tempo');
define('TEXT_HOURS', 'Ore');

define('DELETE_LOGS_SUCCESSFUL', 'I file di registro sono stati eliminati con successo.');

define('BOX_BLACKLIST_LOGS', 'Giornali nella lista nera');

define('CONTINUE_WITHOUT_SAVE', 'Le modifiche non salvate andranno perse.');

define('TEXT_SORT_ASC', 'in ordine crescente');
define('TEXT_SORT_DESC', 'in diminuzione');

define('MSRP', 'UVP');
define('YOUR_PRICE', 'Il suo prezzo ');
define('UNIT_PRICE', 'Prezzo per unità ');
define('ONLY', ' Solo ora ');
define('FROM', 'ab ');
define('YOU_SAVE', 'Si risparmia ');
define('INSTEAD', 'Il nostro prezzo attuale ');
define('TXT_PER', ' Per ');
define('TEXT_NO_PAYMENT', 'Nessun metodo di pagamento');
