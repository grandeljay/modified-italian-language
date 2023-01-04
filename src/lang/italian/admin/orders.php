<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('TEXT_BANK', 'Flusso diretto');
define('TEXT_BANK_OWNER', 'Titolare del conto :');
define('TEXT_BANK_NUMBER', 'Numero di conto :');
define('TEXT_BANK_BLZ', 'BLZ :');
define('TEXT_BANK_NAME', 'Banco :');
define('TEXT_BANK_BIC', 'BIC :');
define('TEXT_BANK_IBAN', 'IBAN :');
define('TEXT_BANK_FAX', 'L\'autorizzazione all\'addebito diretto viene confermata via fax.');
define('TEXT_BANK_STATUS', 'Stato delle prove :');
define('TEXT_BANK_PRZ', 'Metodo di prova :');
define('TEXT_BANK_OWNER_EMAIL', 'Indirizzo e-mail del titolare del conto:');

define('TEXT_BANK_ERROR_1', 'Il numero di conto non corrisponde al codice di ordinamento');
define('TEXT_BANK_ERROR_2', 'Non è stata definita alcuna procedura di verifica per questo numero di conto.');
define('TEXT_BANK_ERROR_3', 'Numero di conto non verificabile Procedura di verifica non applicata');
define('TEXT_BANK_ERROR_4', 'Numero di conto tecnicamente non verificabile');
define('TEXT_BANK_ERROR_5', 'Codice bancario non trovato!');
define('TEXT_BANK_ERROR_8', 'Non viene fornito alcun codice bancario');
define('TEXT_BANK_ERROR_9', 'Non viene fornito alcun numero di conto');
define('TEXT_BANK_ERRORCODE', 'Codice di errore :');

define('HEADING_TITLE', 'Applicazioni');
define('HEADING_TITLE_SEARCH', 'Numero d\'ordine');
define('HEADING_TITLE_STATUS', 'Stato:');

define('TABLE_HEADING_COMMENTS', 'Comentario');
define('TABLE_HEADING_CUSTOMERS', 'Clienti');
define('TABLE_HEADING_ORDER_TOTAL', 'Valore totale');
define('TABLE_HEADING_DATE_PURCHASED', 'Data dell\'ordine');
define('TABLE_HEADING_ACTION', 'Azione');
define('TABLE_HEADING_QUANTITY', 'Numero');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Articolo n.');
define('TABLE_HEADING_PRODUCTS', 'Articolo');
define('TABLE_HEADING_TAX', 'IVA');
define('TABLE_HEADING_TOTAL', 'Totale');
define('TABLE_HEADING_STATUS', 'Stato');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Prezzo (tasse escluse)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Precio (incl.)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Totale (escl.)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Totale');
define('TABLE_HEADING_AFTERBUY', 'Dopo l\'acquisto');
define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Cliente avvisato');
define('TABLE_HEADING_DATE_ADDED', 'aggiunto su :');

define('ENTRY_CUSTOMER', 'Cliente :');
define('ENTRY_SOLD_TO', 'Indirizzo di fatturazione :');
define('ENTRY_TELEPHONE', 'Telefono :');
define('ENTRY_DELIVERY_TO', 'Indirizzo di consegna :');
define('ENTRY_SHIP_TO', 'Indirizzo di consegna :');
define('ENTRY_SHIPPING_ADDRESS', 'Versandadresse :');
define('ENTRY_PICKUP_ADDRESS', 'Abholadresse :');
define('ENTRY_BILLING_ADDRESS', 'Indirizzo di fatturazione :');
define('ENTRY_PAYMENT_METHOD', 'Metodo di pagamento :');
define('ENTRY_SHIPPING_METHOD', 'Metodo di spedizione :');
define('ENTRY_SUB_TOTAL', 'Subtotale :');
define('ENTRY_TAX', 'TVA :');
define('ENTRY_SHIPPING', 'Spese di spedizione :');
define('ENTRY_TOTAL', 'Importazione totale :');
define('ENTRY_DATE_PURCHASED', 'Data dell\'ordine :');
define('ENTRY_STATUS', 'Stato:');
define('ENTRY_DATE_LAST_UPDATED', 'Ultimo aggiornamento il :');
define('ENTRY_NOTIFY_CUSTOMER', 'Notifica al cliente :');
define('ENTRY_NOTIFY_COMMENTS', 'Invii i suoi commenti :');
define('ENTRY_PRINTABLE', 'Imprimere la realtà');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Sfrutta le parole');
define('TEXT_INFO_DELETE_INTRO', 'È sicuro di voler eliminare questo comando?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Accrediti il numero di articoli in magazzino');
define('TEXT_DATE_ORDER_CREATED', 'creato su :');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Ultima modifica :');
define('TEXT_INFO_PAYMENT_METHOD', 'Metodo di pagamento :');
define('TEXT_INFO_SHIPPING_METHOD', 'Metodo di spedizione :');

define('TEXT_ALL_ORDERS', 'Tutti gli ordini');
define('TEXT_NO_ORDER_HISTORY', 'Non è disponibile la cronologia degli ordini');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Modificare lo stato del suo ordine');
define('EMAIL_TEXT_ORDER_NUMBER', 'Numero d\'ordine');
define('EMAIL_TEXT_INVOICE_URL', 'Può controllare il suo ordine al seguente indirizzo:');
define('EMAIL_TEXT_DATE_ORDERED', 'Data dell\'ordine :');
define('EMAIL_TEXT_STATUS_UPDATE', 'Lo stato del suo ordine è stato aggiornato' . '\n' . 'Nuovo stato: %s' . '\n' . 'Se ha domande sul suo ordine, risponda a questa e-mail' . "\nCordialmente" . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Note e commenti sul suo ordine:' . "\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Errore: il comando non esiste!');
define('SUCCESS_ORDER_UPDATED', 'Successo: l\'ordine è stato aggiornato con successo.');
define('WARNING_ORDER_NOT_UPDATED', 'Nota: non è stato modificato nulla. Pertanto, questo ordine non è stato aggiornato.');

define('TABLE_HEADING_DISCOUNT', 'Rabatt');
define('ENTRY_CUSTOMERS_GROUP', 'Gruppo di clienti :');
define('TEXT_VALIDATING', 'Non confermato');

define('TEXT_PRODUCTS', 'Articolo');

define('COMMENT_SEND_ORDER_BY_ADMIN', 'Invio della conferma d\'ordine');
define('BUTTON_ORDER_CONFIRMATION', 'Inviare la conferma dell\'ordine');
define('SUCCESS_ORDER_SEND', 'La conferma dell\'ordine è stata inviata con successo');

define('ENTRY_CUSTOMERS_ADDRESS', 'Indirizzo del cliente :');
define('TEXT_ORDER', 'Ordine :');
define('TEXT_ORDER_HISTORY', 'Cronologia degli ordini :');
define('TEXT_ORDER_STATUS', 'Stato dell\'ordine :');

define('TABLE_HEADING_ORDERS_ID', 'Best.Nr.');
define('TEXT_SHIPPING_TO', 'Spedizione a');

define('TABLE_HEADING_COMMENTS_SENT', 'Commento inviato');

define('TABLE_HEADING_TRACK_TRACE', 'Monitoraggio e monitoraggio :');
define('TABLE_HEADING_CARRIER', 'Metodo di spedizione');
define('TABLE_HEADING_PARCEL_LINK', 'Numero di spedizione / numero dell\'etichetta del pacco / numero dell\'ordine / ID di spedizione / numero di tracking');

define('TEXT_INFO_HEADING_REVERSE_ORDER', 'Annullare l\'ordine');
define('TEXT_INFO_REVERSE_INTRO', 'È sicuro di voler cancellare questo ordine?');

define('TABLE_HEADING_SHIPCLOUD', 'Shipcloud :');
define('TABLE_HEADING_PARCEL_ID', 'Numero dell\'etichetta della confezione');
define('TEXT_SHIPCLOUD_STANDARD', 'Standard');
define('TEXT_SHIPCLOUD_ONE_DAY', 'Espresso');
define('TEXT_SHIPCLOUD_ONE_DAY_EARLY', 'Espressi 10:00');
define('TEXT_SHIPCLOUD_RETURNS', 'Volver');
define('TEXT_SHIPCLOUD_LETTER', 'Riassunto della posizione');
define('TEXT_SHIPCLOUD_BOOKS', 'Spedizione successiva del libro');
define('TEXT_SHIPCLOUD_PARCEL_LETTER', 'Consegna postale');
define('TEXT_WEIGHT_PLACEHOLDER', 'Poids / Kg');
define('TEXT_SHIPCLOUD_INSURANCE_NO', 'Assicurazione più alta No');
define('TEXT_SHIPCLOUD_INSURANCE_YES', 'Assicurazione più alta SI');
define('TEXT_SHIPCLOUD_BULK', 'Merci ingombranti');
define('TEXT_SHIPCLOUD_PARCEL', 'Envase');
define('TEXT_SHIPCLOUD_DPAG_WARENPOST', 'Posta merci');
define('TEXT_SHIPCLOUD_DPAG_WARENPOST_UNTRACKED', 'Warenpost (senza seguito)');
define('TEXT_SHIPCLOUD_DPAG_WARENPOST_SIGNATURE', 'Posta merci (firma)');

define('DOWNLOAD_LABEL', 'Scarichi l\'etichetta della confezione');
define('CREATE_LABEL', 'Creare un\'etichetta per il pacchetto');
define('TEXT_DELETE_SHIPMENT_SUCCESS', 'L\'etichetta sul pacchetto shipcloud è stata rimossa.');
define('TEXT_LABEL_CREATED', 'L\'etichetta della confezione è stata creata con successo.');
define('TEXT_CARRIER_ERROR', 'Il fornitore del servizio pacchi non è attivato nel suo account shipcloud o la chiave API non è valida.');
define('TEXT_CARRIER_PLACEHOLDER_1', 'Descrizione del pacchetto');
define('TEXT_CARRIER_PLACEHOLDER_2', 'Descrizione della spedizione');

define('TEXT_DOWNLOADS', 'Download');
define('TABLE_HEADING_FILENAME', 'Nome del file');
define('TABLE_HEADING_EXPIRES', 'Data di scadenza');
define('TABLE_HEADING_DOWNLOADS', 'Numero di download');
define('TABLE_HEADING_DAYS', 'Numero di giorni');

define('ENTRY_SEND_TRACKING_INFO', 'Informazioni sulla spedizione :');

define('TEXT_ORDERS_STATUS_FILTER', 'Filtro sullo stato dell\'ordine');

define('TABLE_HEADING_DATE', 'Data');

define('BUTTON_ORDER_MAIL_STEP', 'Inviare la conferma dell\'ordine');
define('COMMENT_SEND_ORDER_MAIL_STEP', 'Invio della conferma d\'ordine');
define('SUCCESS_ORDER_MAIL_STEP_SEND', 'La conferma dell\'ordine è stata inviata con successo');

define('BILLPAY_ORDER_UPDATE_HIGH', 'Errore: per un ordine di pagamento con fattura, il valore del nuovo ordine non deve superare il valore dell\'ordine precedente.');

define('TABLE_HEADING_INVOICE_NUMBER', 'Numero di Rg.');
define('BUTTON_BILL', 'Creare un numero di fattura');
define('NOT_ASSIGNED', 'non ancora assegnato!');
