<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('ATTENTION_TITLE', 'Attenzione!');

if (!defined('APS_INSTALL')) {
    define('TEXT_FILE_WARNING_WRITABLE', '<b>ATTENZIONE:</b><br />Il server può scrivere sui seguenti file. La preghiamo di modificare i permessi di questo file per motivi di sicurezza. ( <b>444 )</b> su Unix, <b>(solo lettura)</b> su Win32.');
} else {
    define('TEXT_FILE_WARNING_WRITABLE', '<b>ATTENZIONE:</b><br />Il server può scrivere sui seguenti file. La preghiamo di modificare i permessi di questo file per motivi di sicurezza. <b>(444)</b> su unix, <b>(solo lettura)</b> su Win32.<br />Se l\'installazione è stata eseguita tramite un pacchetto software del fornitore, i diritti di accesso potrebbero dover essere impostati diversamente (HostEurope: <b>CHMOD 400</b> o <b>CHMOD 440</b>).');
}

define('TEXT_FILE_WARNING', '<b>ATTENZIONE:</b><br />Il server deve essere in grado di scrivere sui seguenti file. La preghiamo di modificare i permessi di questi file. <b>(777)</b> su Unix, <b>(lettura-scrittura)</b> su Win32.');
define('TEXT_FOLDER_WARNING', '<b>ATTENZIONE:</b><br />Il server deve essere in grado di scrivere nelle seguenti directory. Modifichi le autorizzazioni di queste directory: <b>(777)</b> su unix, <b>(lettura-scrittura)</b> su Win32.');
define('REPORT_GENERATED_FOR', 'Informe para:');
define('REPORT_GENERATED_ON', 'Creato il :');
define('FIRST_VISIT_ON', 'Prima visita :');
define('HEADING_QUICK_STATS', 'Breve riassunto');
define('VISITS_TODAY', 'Visite oggi:');
define('UNIQUE_TODAY', 'Visitatori individuali :');
define('DAILY_AVERAGE', 'Indennità giornaliera media :');
define('TOTAL_VISITS', 'Visite totali :');
define('TOTAL_UNIQUE', 'Totale visitatori individuali :');
define('TOP_REFFERER', 'Top Refferer :');
define('TOP_ENGINE', 'Il miglior motore di ricerca :');
define('DAY_SUMMARY', 'Riepilogo a 30 giorni :');
define('VERY_LAST_VISITORS', 'Gli ultimi 10 visitatori :');
define('TODAY_VISITORS', 'Visitatori fino ad oggi :');
define('LAST_VISITORS', 'Gli ultimi 100 visitatori :');
define('ALL_LAST_VISITORS', 'Tutti i visitatori :');
define('DATE_TIME', 'Data / Ora :');
define('IP_ADRESS', 'Indirizzo IP :');
define('OPERATING_SYSTEM', 'Sistema operativo :');
define('REFFERING_HOST', 'Ospite inviante :');
define('ENTRY_PAGE', 'Pagina iniziale :');
define('HOURLY_TRAFFIC_SUMMARY', 'Riepilogo degli orari del traffico');
define('WEB_BROWSER_SUMMARY', 'Panoramica del browser web');
define('OPERATING_SYSTEM_SUMMARY', 'Panoramica del sistema operativo');
define('TOP_REFERRERS', 'Top 10 degli spedizionieri');
define('TOP_HOSTS', 'La top ten dei padroni di casa');
define('LIST_ALL', 'Vedi tutti');
define('SEARCH_ENGINE_SUMMARY', 'Panoramica dei motori di ricerca');
define('SEARCH_ENGINE_SUMMARY_TEXT', ' ( Le percentuali si basano sul numero totale di visite tramite i motori di ricerca. )');
define('SEARCH_QUERY_SUMMARY', 'Panoramica delle query di ricerca');
define('SEARCH_QUERY_SUMMARY_TEXT', ' ) ( Le percentuali si basano sul numero totale di ricerche registrate. )');
define('REFERRING_URL', 'Refferrer Url');
define('HITS', 'Colpi');
define('PERCENTAGE', 'Percentuale');
define('HOST', 'Ospite');

define('HEADING_TITLE_SEARCH', 'Numero d\'ordine');
define('HEADING_TITLE_STATUS', 'Stato:');
define('TABLE_HEADING_AFTERBUY', 'Dopo l\'acquisto');
define('TABLE_HEADING_CUSTOMERS', 'Clienti');
define('TABLE_HEADING_ORDER_TOTAL', 'Valore totale');
define('TABLE_HEADING_DATE_PURCHASED', 'Data dell\'ordine');
define('TABLE_HEADING_STATUS', 'Stato');
define('TABLE_HEADING_QUANTITY', 'Numero');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Articolo n.');
define('TABLE_HEADING_PRODUCTS', 'Articolo');
define('TABLE_HEADING_TAX', 'IVA');
define('TABLE_HEADING_TOTAL', 'Totale');
define('TABLE_HEADING_DATE_ADDED', 'aggiunto su :');
define('ENTRY_CUSTOMER', 'Cliente :');
define('TEXT_DATE_ORDER_CREATED', 'Data dell\'ordine :');
define('TEXT_INFO_PAYMENT_METHOD', 'Metodo di pagamento :');
define('TEXT_VALIDATING', 'Non confermato');
define('TEXT_ALL_ORDERS', 'Tutti gli ordini');
define('TEXT_NO_ORDER_HISTORY', 'Non è disponibile la cronologia degli ordini');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Ultima modifica');

define('TOTAL_CUSTOMERS', 'Clienti totali');
define('TOTAL_SUBSCRIBERS', 'Iscrizioni alla newsletter');
define('TOTAL_PRODUCTS_ACTIVE', 'Articoli attivi');
define('TOTAL_PRODUCTS_INACTIVE', 'Articoli inattivi');
define('TOTAL_PRODUCTS', 'Articolo totale');
define('TOTAL_SPECIALS', 'Offerte speciali');
define('UNASSIGNED', 'Non assegnato');
define('TURNOVER_TODAY', 'Fatturato oggi');
define('TURNOVER_YESTERDAY', 'Il fatturato di ieri');
define('TURNOVER_THIS_MONTH', 'mese corrente');
define('TURNOVER_LAST_MONTH', 'il mese scorso (tutti)');
define('TURNOVER_LAST_MONTH_PAID', 'il mese scorso (pagato)');
define('TOTAL_TURNOVER', 'Fatturato totale');

define('HEADING_TITLE', 'Benvenuto nell\'area amministrativa');

define('TABLE_CAPTION_USERS_ONLINE', 'In linea');
define('TABLE_CAPTION_USERS_ONLINE_HINT', '***Per ottenere informazioni su un utente, clicchi sul suo nome***.');
define('TABLE_HEADING_USERS_ONLINE_SINCE', 'Online da');
define('TABLE_HEADING_USERS_ONLINE_NAME', 'Numero');
define('TABLE_HEADING_USERS_ONLINE_LAST_CLICK', 'Ultimo clic');
define('TABLE_HEADING_USERS_ONLINE_INFO', 'Informazioni');
define('TABLE_CELL_USERS_ONLINE_INFO', 'più...');

define('TABLE_CAPTION_NEW_CUSTOMERS', 'Clienti');
define('TABLE_CAPTION_NEW_CUSTOMERS_COMMENT', '(gli ultimi 15)');
define('TABLE_HEADING_NEW_CUSTOMERS_LASTNAME', 'Numero');
define('TABLE_HEADING_NEW_CUSTOMERS_FIRSTNAME', 'Numero');
define('TABLE_HEADING_NEW_CUSTOMERS_REGISTERED', 'registrato el');
define('TABLE_HEADING_NEW_CUSTOMERS_EDIT', 'modifica');
define('TABLE_HEADING_NEW_CUSTOMERS_ORDERS', 'Applicazioni');
define('TABLE_CELL_NEW_CUSTOMERS_EDIT', 'edit...');
define('TABLE_CELL_NEW_CUSTOMERS_DELETE', 'gli esercizi...');
define('TABLE_CELL_NEW_CUSTOMERS_ORDERS', 'mostra...');

define('TABLE_CAPTION_NEW_ORDERS', 'Applicazioni');
define('TABLE_CAPTION_NEW_ORDERS_COMMENT', '(gli ultimi 20)');
define('TABLE_HEADING_NEW_ORDERS_ORDER_NUMBER', 'Numero d\'ordine');
define('TABLE_HEADING_NEW_ORDERS_ORDER_DATE', 'Data dell\'ordine');
define('TABLE_HEADING_NEW_ORDERS_CUSTOMERS_NAME', 'Nome del cliente');
define('TABLE_HEADING_NEW_ORDERS_EDIT', 'modifica');
define('TABLE_HEADING_NEW_ORDERS_DELETE', 'punte per trapano');

define('TABLE_CAPTION_NEWSFEED', 'Visita il');

define('TABLE_CAPTION_BIRTHDAYS', 'Elenco dei compleanni');
define('TABLE_CELL_BIRTHDAYS_TODAY', 'I clienti festeggiano oggi il loro compleanno');
define('TABLE_CELL_BIRTHDAYS_THIS_MONTH', 'I clienti che compiono gli anni questo mese');

define('HEADING_CAPTION_STATISTIC', 'Statistiche');
define('ERROR_DB_VERSION_UPDATE', '<strong>ATTENZIONE:</strong> il suo DB deve essere aggiornato, esegua il <a href="' . DIR_WS_CATALOG . '_installer/">programma di installazione</a>:');
define('ERROR_DB_VERSION_UPDATE_INFO', 'Il database deve essere aggiornato dalla versione %s a %s.');

define('ERROR_EMAIL_CHECK', '<strong>ATTENZIONE:</strong> i seguenti indirizzi e-mail sembrano non essere corretti:');
define('ERROR_EMAIL_CHECK_INFO', '%s: &lt;%s&gt;');

define('WARNING_DB_FILE_PRIVILEGES', '<strong>ATTENZIONE:</strong> i privilegi di FILE sono abilitati sulla cartella ' . DB_DATABASE . ' per l\'utente del negozio ' . DB_SERVER_USERNAME . ' !');

define('WARNING_REGISTER_GLOBALS', '<strong>ATTENZIONE:</strong> questa funzione è <strong>deprecata</strong> a partire da PHP 5.3.0 e <strong>rimossa</strong> a partire da PHP 5.4.0. Contatti il suo hosting web per disabilitare &quot;register_globals&quot;.');

define('WARNING_DOMAIN_INVALID', '<strong>ATTENZIONE:</strong> Non è stato possibile convalidare il dominio del suo negozio (possibili cause: errore di formato del dominio o nome di dominio internazionalizzato (IDN) - dominio con umlaut).');
