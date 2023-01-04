<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('TOP_BAR_TITLE', 'Statistiche');
define('HEADING_TITLE', 'Cupones Rabatt');
define('HEADING_TITLE_STATUS', 'Stato : ');
define('TEXT_CUSTOMER', 'Cliente :');
define('TEXT_COUPON', 'Nome del coupon');
define('TEXT_COUPON_ALL', 'Cupones Alle');
define('TEXT_COUPON_ACTIVE', 'Cupones Actifs');
define('TEXT_COUPON_INACTIVE', 'Cuponi Inattivi');
define('TEXT_SUBJECT', 'Oggetto :');
define('TEXT_FROM', 'De :');
define('TEXT_FREE_SHIPPING', 'Spedizione gratuita');
define('TEXT_MESSAGE', 'Messaggio:');
define('TEXT_SELECT_CUSTOMER', 'Selezionare il cliente');
define('TEXT_ALL_CUSTOMERS', 'Tutti i clienti');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Tutti gli iscritti alla newsletter');
define('TEXT_CONFIRM_DELETE', 'È davvero necessario eliminare questo coupon?');

define('TEXT_TO_REDEEM', 'Può riscattare il buono al momento dell\'ordine. Per farlo, inserisca il suo codice voucher nel campo appropriato e clicchi sul pulsante "Riscatta".');
define('TEXT_IN_CASE', ' Se, contrariamente alle aspettative, dovessero sorgere problemi nel sistema contabile.');
define('TEXT_VOUCHER_IS', 'Il suo codice voucher è : ');
define('TEXT_REMEMBER', 'Conservi il codice voucher per approfittare di questa offerta.');
define('TEXT_VISIT', 'la prossima volta che ci chiamerà al numero ' . HTTP_SERVER . DIR_WS_CATALOG . ' visita.');
define('TEXT_ENTER_CODE', ' e inserire il codice ');

define('TABLE_HEADING_ACTION', 'Azione');

define('CUSTOMER_ID', 'Numero cliente');
define('CUSTOMER_NAME', 'Nome del cliente');
define('REDEEM_DATE', 'riscattato in');
define('IP_ADDRESS', 'Indirizzo IP');

define('TEXT_REDEMPTIONS', 'Riscatto');
define('TEXT_REDEMPTIONS_TOTAL', 'In generale :');
define('TEXT_REDEMPTIONS_CUSTOMER', 'Per questo cliente :');
define('TEXT_NO_FREE_SHIPPING', 'Non è esente dai costi di spedizione');

define('NOTICE_EMAIL_SENT_TO', 'Nota: e-mail inviata a : %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Errore: non è stato selezionato alcun cliente.');
define('COUPON_NAME', 'Nome del coupon');
define('COUPON_AMOUNT', 'Valore della cedola');
define('COUPON_CODE', 'Codice coupon');
define('COUPON_STARTDATE', 'valido da');
define('COUPON_FINISHDATE', 'valido fino a');
define('COUPON_FREE_SHIP', 'Spedizione gratuita');
define('COUPON_DESC', 'Descrizione del coupon');
define('COUPON_MIN_ORDER', 'Valore minimo dell\'ordine del buono');
define('COUPON_USES_COUPON', 'Numero/utilizzi per coupon');
define('COUPON_USES_USER', 'Numero/utilizzi per cliente');
define('COUPON_PRODUCTS', 'Elenco degli articoli validi');
define('COUPON_CATEGORIES', 'Elenco delle categorie valide');
define('COUPON_CUSTOMERS', 'Elenco dei gruppi di clienti validi');
define('VOUCHER_NUMBER_USED', 'Numero utilizzato');
define('DATE_CREATED', 'creato su');
define('DATE_MODIFIED', 'ha cambiato il');
define('TEXT_HEADING_NEW_COUPON', 'Creare un nuovo coupon');
define('TEXT_NEW_INTRO', 'La preghiamo di fornire le seguenti informazioni per il nuovo coupon.<br />');

define('COUPON_NAME_HELP', 'Un nome breve per il coupon');
define('COUPON_AMOUNT_HELP', 'Inserisca qui lo sconto per questo coupon. Un importo fisso o una percentuale di sconto, ad esempio il 10%.');
define('COUPON_CODE_HELP', 'Qui può inserire il suo codice personale (massimo 16 caratteri). Se lascia il campo vuoto, questo codice verrà generato automaticamente.');
define('COUPON_STARTDATE_HELP', 'La data a partire dalla quale il buono è valido.<br>');
define('COUPON_FINISHDATE_HELP', 'La data di scadenza del coupon.<br>');
define('COUPON_FREE_SHIP_HELP', 'Buono per la consegna gratuita.');
define('COUPON_DESC_HELP', 'Descrizione del buono del cliente');
define('COUPON_MIN_ORDER_HELP', 'Valore minimo dell\'ordine a partire dal quale questo coupon è valido');
define('COUPON_USES_COUPON_HELP', 'Indica qui quante volte può utilizzare questo buono. Se lascia il campo vuoto, l\'uso è illimitato.');
define('COUPON_USES_USER_HELP', 'Inserisca qui la frequenza con cui un cliente può riscattare questo coupon. Se lascia il campo vuoto, l\'uso è illimitato.');
define('COUPON_PRODUCTS_HELP', 'Un elenco separato da virgole di ID di articoli per i quali questo coupon è valido. Un campo vuoto significa che non ci sono restrizioni.');
define('COUPON_CATEGORIES_HELP', 'Un elenco separato da virgole di ID di categoria per cui questo coupon è valido. Un campo vuoto significa che non ci sono restrizioni.');
define('COUPON_CUSTOMERS_HELP', 'Selezioni i gruppi di clienti validi per questo coupon.');

define('COUPON_ID', 'cID');
define('BUTTON_DELETE_NO_CONFIRM', 'Cancellare senza consultare');
define('TEXT_NO_RESTRICTION', 'Nessuna limitazione');
define('TEXT_COUPON_DELETE', 'Esercitazioni');
define('TEXT_COUPON_STATUS', 'Stato');
define('TEXT_COUPON_DETAILS', 'Dettagli del coupon');
define('TEXT_COUPON_EMAIL', 'Invii per e-mail');
define('TEXT_COUPON_OVERVIEW', 'Panoramica');
define('TEXT_COUPON_EMAIL_PREVIEW', 'Conferma');
define('TEXT_COUPON_MINORDER', 'Valore minimo dell\'ordine');
define('TEXT_VIEW', 'Vista elenco');
define('TEXT_VIEW_SHORT', 'Mostrar');

define('COUPON_MINORDER_INFO', "\Valore minimo dell'ordine : ");
define('COUPON_RESTRICT_INFO', "\Questo coupon è valido solo per gli articoli selezionati!");
define('COUPON_INFO', "\Couponwert : ");
define('COUPON_FREE_SHIPPING', 'Consegna gratuita');
define('COUPON_LINK_TEXT', '\Dettagli');
define('COUPON_CATEGORIES_RESTRICT', '\Valido per queste categorie');
define('COUPON_PRODUCTS_RESTRICT', '\NValido per questi articoli');
define('COUPON_NO_RESTRICT', '\Valido per tutti gli articoli');

define('ERROR_NO_COUPON_NAME', 'FEHLER : Nessun couponname ');
define('ERROR_NO_COUPON_AMOUNT', 'ERRORE: Nessun valore del coupon');

define('COUPON_DATE_START_TT', 'Inizia alle 00:00:00');
define('COUPON_DATE_END_TT', 'Termina a mezzanotte (23:59:59)');
define('ERROR_COUPON_DATE', 'ERRORE: la data di fine è precedente alla data di inizio.');

define('TEXT_OT_COUPON_STATUS_INFO', 'È ancora necessario installare il modulo coupon (ot_coupon) (Moduli -&gt; <a href="' . xtc_href_link('modules.php', 'set=ordertotal') . '">Panoramica</a>).');
