<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('HEADING_TITLE', 'Gruppi di clienti');

define('ENTRY_CUSTOMERS_FSK18', 'Bloccare l\'acquisto di articoli FSK18?');
define('ENTRY_CUSTOMERS_FSK18_DISPLAY', 'Distribuzione di articoli FSK18?');
define('ENTRY_CUSTOMERS_STATUS_ADD_TAX', 'Visualizzare l\'IVA sulla fattura');
define('ENTRY_CUSTOMERS_STATUS_MIN_ORDER', 'Valore minimo dell\'ordine :');
define('ENTRY_CUSTOMERS_STATUS_MAX_ORDER', 'Valore massimo dell\'ordine :');
define('ENTRY_CUSTOMERS_STATUS_BT_PERMISSION', 'Con addebito diretto');
define('ENTRY_CUSTOMERS_STATUS_CC_PERMISSION', 'Con carta di credito');
define('ENTRY_CUSTOMERS_STATUS_COD_PERMISSION', 'Contanti alla consegna');
define('ENTRY_CUSTOMERS_STATUS_DISCOUNT_ATTRIBUTES', 'Rabatt');
define('ENTRY_CUSTOMERS_STATUS_PAYMENT_UNALLOWED', 'Introduzione di metodi di pagamento non autorizzati');
define('ENTRY_CUSTOMERS_STATUS_PUBLIC', 'Pubblico');
define('ENTRY_CUSTOMERS_STATUS_SHIPPING_UNALLOWED', 'Introduzione di metodi di spedizione non autorizzati');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE', 'Premi');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE_TAX', 'I prezzi sono comprensivi di IVA.');
define('ENTRY_CUSTOMERS_STATUS_WRITE_REVIEWS', 'Un gruppo di clienti può scrivere recensioni sui prodotti?');
define('ENTRY_CUSTOMERS_STATUS_READ_REVIEWS', 'Il gruppo di clienti può leggere le recensioni dei prodotti?');
define('ENTRY_CUSTOMERS_STATUS_REVIEWS_STATUS', 'Attiva automaticamente le recensioni dei prodotti?');
define('ENTRY_GRADUATED_PRICES', 'Prezzi differenziati');
define('ENTRY_NO', 'Non');
define('ENTRY_OT_XMEMBER', 'Sconto cliente sul valore totale dell\'ordine? :');
define('ENTRY_YES', 'Ja');

define('ERROR_REMOVE_DEFAULT_CUSTOMERS_STATUS', 'Errore: il gruppo di clienti predefinito non può essere eliminato. La preghiamo di impostare prima un altro gruppo di clienti predefinito e di riprovare.');
define('ERROR_STATUS_USED_IN_CUSTOMERS', 'Errore: questo gruppo di clienti è attualmente utilizzato dai clienti.');
define('ERROR_STATUS_USED_IN_HISTORY', 'Errore: questo gruppo di clienti è attualmente utilizzato nella panoramica degli ordini.');

define('TABLE_HEADING_ACTION', 'Azione');
define('TABLE_HEADING_CUSTOMERS_GRADUATED', 'Prezzi differenziati');
define('TABLE_HEADING_CUSTOMERS_STATUS', 'Gruppo di clienti');
define('TABLE_HEADING_CUSTOMERS_UNALLOW', 'Metodi di pagamento non autorizzati');
define('TABLE_HEADING_CUSTOMERS_UNALLOW_SHIPPING', 'Metodi di spedizione non autorizzati');
define('TABLE_HEADING_DISCOUNT', 'Rabatt');
define('TABLE_HEADING_TAX_PRICE', 'Prezzo/IVA');

define('TAX_NO', 'escluse.');
define('TAX_YES', 'incl.');

define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS_STATUS', 'Gruppi di clienti esistenti :');

define('TEXT_INFO_CUSTOMERS_FSK18_DISPLAY_INTRO', '<strong>Articolo FSK18</strong>');
define('TEXT_INFO_CUSTOMERS_FSK18_INTRO', '<strong>Blocco FSK18</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_ADD_TAX_INTRO', '<strong>Se "Prezzo IVA inclusa" = "Sì", lo imposti su "No".</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_MIN_ORDER_INTRO', '<strong>Inserisca un valore minimo dell\'ordine o lasci questo campo vuoto.</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_MAX_ORDER_INTRO', '<strong>Inserisca un valore massimo dell\'ordine o lasci questo campo vuoto.</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_BT_PERMISSION_INTRO', '<strong>Vuole consentire a questo gruppo di clienti di pagare con addebito diretto?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_CC_PERMISSION_INTRO', '<strong>Vuole consentire a questo gruppo di clienti di pagare con carta di credito?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_COD_PERMISSION_INTRO', '<strong>Vuole consentire a questo gruppo di clienti di pagare alla consegna?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_ATTRIBUTES_INTRO', '<strong>Sconto sull\'attributo</strong> dell\'articolo<br />(Applica una percentuale massima di sconto ad un articolo)');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_OT_XMEMBER_INTRO', '<strong>Sconto sull\'\intero ordine</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_PRICE', 'Sconto (da 0 a 100%) :');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_PRICE_INTRO', '<strong>Sconto massimo sui prodotti (a seconda dello sconto definito sul prodotto).</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_GRADUATED_PRICES_INTRO', '<strong>Prezzi differenziati</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_IMAGE', '<strong>Immagine del gruppo di clienti:</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_NAME', '<strong>Nome del gruppo</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_PAYMENT_UNALLOWED_INTRO', '<strong>Metodi di pagamento non autorizzati</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_PUBLIC_INTRO', '<strong>Gruppo pubblico?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHIPPING_UNALLOWED_INTRO', '<strong>Metodi di spedizione non autorizzati</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_INTRO', '<strong>Esposizione dei prezzi nel negozio</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_TAX_INTRO', '<strong>Vuole visualizzare i prezzi con o senza IVA?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_WRITE_REVIEWS_INTRO', '<strong>Scrivere recensioni di prodotti</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_READ_REVIEWS_INTRO', '<strong>Legga le recensioni dei prodotti</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_REVIEWS_STATUS_INTRO', '<strong>Sbloccare le recensioni dei prodotti</strong>');

define('TEXT_INFO_DELETE_INTRO', 'È sicuro di voler eliminare questo gruppo di clienti?');
define('TEXT_INFO_EDIT_INTRO', 'Effettuare le regolazioni necessarie');
define('TEXT_INFO_INSERT_INTRO', 'Crei un nuovo gruppo di clienti con le impostazioni desiderate.');

define('TEXT_INFO_HEADING_DELETE_CUSTOMERS_STATUS', 'Cancellare il gruppo di clienti');
define('TEXT_INFO_HEADING_EDIT_CUSTOMERS_STATUS', 'Modificare i dati del gruppo');
define('TEXT_INFO_HEADING_NEW_CUSTOMERS_STATUS', 'Nuovo gruppo di clienti');

define('TEXT_INFO_CUSTOMERS_STATUS_BASE', '<strong>Gruppo di clienti di base per i prezzi degli articoli</strong>');
define('ENTRY_CUSTOMERS_STATUS_BASE', 'Si ipotizzano i prezzi del seguente gruppo di clienti. Se la selezione è = "Admin", non vengono adottati prezzi per il nuovo gruppo di clienti.');
define('ENTRY_CUSTOMERS_STATUS_BASE_EDIT', 'Ipotizziamo i prezzi per il seguente gruppo di clienti. Se la selezione è = "Admin", non viene assunto alcun prezzo per il gruppo di clienti.<br /><span class="col-red"><strong>ATTENZIONE :</strong></span> Questo sovrascrive tutti i prezzi esistenti del gruppo di clienti!');

define('TEXT_INFO_CUSTOMERS_GROUP_ADOPT_PERMISSION', '<strong>Assuma i diritti di visibilità di un altro gruppo di clienti.</strong>');
define('ENTRY_CUSTOMERS_GROUP_ADOPT_PERMISSION', 'Assuma i diritti di visibilità per le categorie, gli articoli e i contenuti per il seguente gruppo di clienti:');
define('CUSTOMERS_GROUP_ADOPT_PERMISSIONS', 'Non si arroghi dei diritti');

define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_TAX_TOTAL', '<b>Visualizzare l\'IVA dell\'importo dell\'acquisto</b>');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE_TAX_TOTAL', 'Acquisto minimo di importazione');

define('TABLE_HEADING_CUSTOMERS_SPECIALS', 'Offerte speciali');
define('TEXT_INFO_CUSTOMERS_STATUS_SPECIALS_INTRO', '<strong>Offerte speciali</strong>');
define('ENTRY_CUSTOMERS_STATUS_SPECIALS', 'Il gruppo di clienti può visualizzare le offerte speciali?');

define('CUSTOMERS_GROUP_PUBLIC', 'pubblico');
