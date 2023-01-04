<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('TABLE_HEADING_CONFIGURATION_TITLE', 'Numero');
define('TABLE_HEADING_CONFIGURATION_VALUE', 'Valore');
define('TABLE_HEADING_ACTION', 'Azione');

define('TEXT_INFO_EDIT_INTRO', 'Apporti le modifiche necessarie');
define('TEXT_INFO_DATE_ADDED', 'aggiunto su :');
define('TEXT_INFO_LAST_MODIFIED', 'Ultima modifica :');

define('STORE_NAME_TITLE', 'Nome del negozio');
define('STORE_NAME_DESC', 'Il nome di questo negozio online');
define('STORE_OWNER_TITLE', 'Proprietario');
define('STORE_OWNER_DESC', 'Il nome dell\'operatore del negozio');
define('STORE_OWNER_EMAIL_ADDRESS_TITLE', 'Indirizzo e-mail');
define('STORE_OWNER_EMAIL_ADDRESS_DESC', 'L\'indirizzo e-mail dell\'operatore del negozio');

define('EMAIL_FROM_TITLE', 'Invii un\'e-mail al');
define('EMAIL_FROM_DESC', 'Indirizzo e-mail da utilizzare per l\'invio (sendmail).');

define('STORE_COUNTRY_TITLE', 'Paese');
define('STORE_COUNTRY_DESC', 'La posizione del negozio online <br /><br /><b>Nota: si ricordi di impostare correttamente la regione</b>.');
define('STORE_ZONE_TITLE', 'Regione');
define('STORE_ZONE_DESC', 'La regione del negozio online');

define('EXPECTED_PRODUCTS_SORT_TITLE', 'Ordinare pubblicità per gli articoli');
define('EXPECTED_PRODUCTS_SORT_DESC', 'Questo è l\'ordine in cui vengono visualizzati gli articoli pubblicizzati.');
define('EXPECTED_PRODUCTS_FIELD_TITLE', 'Campo di ordinamento per gli annunci di articoli');
define('EXPECTED_PRODUCTS_FIELD_DESC', 'Questa è la colonna utilizzata per ordinare gli articoli pubblicizzati.');

define('PRODUCTS_NEW_SORT_TITLE', 'Ordinare nuovi articoli');
define('PRODUCTS_NEW_SORT_DESC', 'Questo è l\'ordine in cui vengono visualizzati i nuovi elementi.');
define('PRODUCTS_NEW_FIELD_TITLE', 'Campo di ordinamento per i nuovi articoli');
define('PRODUCTS_NEW_FIELD_DESC', 'Questa è la colonna utilizzata per ordinare i nuovi elementi.');

define('SPECIALS_SORT_TITLE', 'Richiedere offerte speciali');
define('SPECIALS_SORT_DESC', 'Questo è l\'ordine di visualizzazione delle offerte speciali.');
define('SPECIALS_FIELD_TITLE', 'Campo di ordinamento per le offerte speciali');
define('SPECIALS_FIELD_DESC', 'Questa è la colonna utilizzata per classificare le offerte speciali.');

define('USE_DEFAULT_LANGUAGE_CURRENCY_TITLE', 'Passaggio automatico alla valuta nazionale');
define('USE_DEFAULT_LANGUAGE_CURRENCY_DESC', 'Convertire automaticamente nella valuta nazionale del cliente, se disponibile.');

define('SEND_EXTRA_ORDER_EMAILS_TO_TITLE', 'Invii un\'e-mail di ordine supplementare a :');
define('SEND_EXTRA_ORDER_EMAILS_TO_DESC', 'Se deve essere inviata anche una copia dell\'e-mail dell\'ordine, la preghiamo di indicare gli indirizzi di ricezione come segue: Nome 1 &lt;email@indirizzo1&gt;, Nome 2 &lt;email@indirizzo2&gt;.');

define('SEARCH_ENGINE_FRIENDLY_URLS_TITLE', 'Utilizza URL compatibili con i motori di ricerca?');
define('SEARCH_ENGINE_FRIENDLY_URLS_DESC', 'Gli URL delle pagine possono essere ottimizzati automaticamente per i motori di ricerca.<br /><br /><strong>Attenzione:</strong> per gli URL ottimizzati per i motori di ricerca, il file _.htaccess nella directory principale del negozio deve essere attivato o rinominato in .htaccess! Inoltre, il server web deve supportare <a href="http://www.modrewrite.de/" target="_blank">mod_rewrite</a>! (Chieda al suo provider di web hosting se non può verificarlo).');

define('DISPLAY_CART_TITLE', 'Il carrello deve essere visualizzato dopo l\'inserimento?');
define('DISPLAY_CART_DESC', 'Dopo aver aggiunto un articolo al carrello, o dopo essere tornato all\'articolo?');

define('ALLOW_GUEST_TO_TELL_A_FRIEND_TITLE', 'Consentire agli ospiti di informare i loro conoscenti via e-mail?');
define('ALLOW_GUEST_TO_TELL_A_FRIEND_DESC', 'Consentire agli ospiti di informare i loro conoscenti sugli articoli via e-mail?');

define('ADVANCED_SEARCH_DEFAULT_OPERATOR_TITLE', 'Cerca i link');
define('ADVANCED_SEARCH_DEFAULT_OPERATOR_DESC', 'Operatore standard per collegare le parole di ricerca.');

define('STORE_NAME_ADDRESS_TITLE', 'Indirizzo e numero di telefono dell\'azienda, ecc.');
define('STORE_NAME_ADDRESS_DESC', 'Scriva qui l\'indirizzo della sua azienda come farebbe con la carta intestata.');

define('SHOW_COUNTS_TITLE', 'Numero di articoli dietro i nomi delle categorie ?');
define('SHOW_COUNTS_DESC', 'Conta ricorsivamente il numero di articoli diversi per gruppo di prodotti e visualizza il numero (x) dopo ogni nome di categoria.');

define('DEFAULT_CUSTOMERS_STATUS_ID_ADMIN_TITLE', 'Stato del cliente (gruppo di clienti) per gli amministratori front-end');
define('DEFAULT_CUSTOMERS_STATUS_ID_ADMIN_DESC', 'Selezioni lo stato del client (gruppo) con cui l\'amministratore vede il frontend.');
define('DEFAULT_CUSTOMERS_STATUS_ID_GUEST_TITLE', 'Stato del cliente (gruppo di clienti) per gli ospiti');
define('DEFAULT_CUSTOMERS_STATUS_ID_GUEST_DESC', 'Selezioni lo stato di cliente (gruppo) per gli ospiti in base al loro rispettivo ID!');
define('DEFAULT_CUSTOMERS_STATUS_ID_TITLE', 'Stato dei nuovi clienti');
define('DEFAULT_CUSTOMERS_STATUS_ID_DESC', 'Selezioni lo stato del cliente (gruppo) per i nuovi clienti in base al rispettivo ID!<br />SUGGERIMENTO: può creare altri gruppi nel menu Gruppi di clienti e, ad esempio, creare settimane di promozioni: questa settimana, 10% di sconto per tutti i nuovi clienti?');

define('ALLOW_ADD_TO_CART_TITLE', 'Permette di aggiungere articoli al carrello.');
define('ALLOW_ADD_TO_CART_DESC', 'Permette di aggiungere articoli al carrello anche se "Mostra prezzi" è impostato su "No" nel gruppo clienti.');
define('ALLOW_DISCOUNT_ON_PRODUCTS_ATTRIBUTES_TITLE', 'Utilizza gli sconti anche sugli attributi degli articoli?');
define('ALLOW_DISCOUNT_ON_PRODUCTS_ATTRIBUTES_DESC', 'Consente di applicare lo sconto del gruppo di clienti definito anche agli attributi dell\'articolo (solo se l\'articolo non è designato come "offerta speciale").');
define('CURRENT_TEMPLATE_TITLE', 'Set di modelli (Tema)');
define('CURRENT_TEMPLATE_DESC', 'Selezioni un set di modelli (tema). Il tema deve trovarsi nella cartella www.Ihre-Domain.com/templates/.');

define('ENTRY_FIRST_NAME_MIN_LENGTH_TITLE', 'Numero');
define('ENTRY_FIRST_NAME_MIN_LENGTH_DESC', 'Lunghezza minima del nome');
define('ENTRY_LAST_NAME_MIN_LENGTH_TITLE', 'Apellido');
define('ENTRY_LAST_NAME_MIN_LENGTH_DESC', 'Lunghezza minima del cognome');
define('ENTRY_DOB_MIN_LENGTH_TITLE', 'Data di nascita');
define('ENTRY_DOB_MIN_LENGTH_DESC', 'Durata minima della data di nascita');
define('ENTRY_EMAIL_ADDRESS_MIN_LENGTH_TITLE', 'Indirizzo e-mail');
define('ENTRY_EMAIL_ADDRESS_MIN_LENGTH_DESC', 'Lunghezza minima dell\'indirizzo e-mail');
define('ENTRY_STREET_ADDRESS_MIN_LENGTH_TITLE', 'Calle');
define('ENTRY_STREET_ADDRESS_MIN_LENGTH_DESC', 'Lunghezza minima dell\'indirizzo');
define('ENTRY_COMPANY_MIN_LENGTH_TITLE', 'Azienda');
define('ENTRY_COMPANY_MIN_LENGTH_DESC', 'Lunghezza minima del nome dell\'azienda');
define('ENTRY_POSTCODE_MIN_LENGTH_TITLE', 'Codice postale');
define('ENTRY_POSTCODE_MIN_LENGTH_DESC', 'Lunghezza minima del codice postale');
define('ENTRY_CITY_MIN_LENGTH_TITLE', 'Città');
define('ENTRY_CITY_MIN_LENGTH_DESC', 'Lunghezza minima del nome della città');
define('ENTRY_STATE_MIN_LENGTH_TITLE', 'Stato');
define('ENTRY_STATE_MIN_LENGTH_DESC', 'Lunghezza minima dello Stato');
define('ENTRY_TELEPHONE_MIN_LENGTH_TITLE', 'Numero di telefono');
define('ENTRY_TELEPHONE_MIN_LENGTH_DESC', 'Lunghezza minima del numero di telefono');
define('ENTRY_PASSWORD_MIN_LENGTH_TITLE', 'Password');
define('ENTRY_PASSWORD_MIN_LENGTH_DESC', 'Lunghezza minima della password');

define('REVIEW_TEXT_MIN_LENGTH_TITLE', 'Recensioni');
define('REVIEW_TEXT_MIN_LENGTH_DESC', 'Lunghezza minima dell\'inserimento del testo per le recensioni');

define('MIN_DISPLAY_BESTSELLERS_TITLE', 'I migliori venditori');
define('MIN_DISPLAY_BESTSELLERS_DESC', 'Numero minimo di bestseller da visualizzare.');
define('MIN_DISPLAY_ALSO_PURCHASED_TITLE', 'Ha anche acquistato');
define('MIN_DISPLAY_ALSO_PURCHASED_DESC', 'Numero minimo di articoli acquistati per apparire anche nella vista articoli.');

define('MAX_ADDRESS_BOOK_ENTRIES_TITLE', 'Voci della rubrica');
define('MAX_ADDRESS_BOOK_ENTRIES_DESC', 'Numero massimo di voci della rubrica per cliente');
define('MAX_DISPLAY_SEARCH_RESULTS_TITLE', 'Articoli in quantità');
define('MAX_DISPLAY_SEARCH_RESULTS_DESC', 'Numero massimo di articoli da visualizzare per pagina nell\'elenco dei prodotti (pagine di categoria).');
define('MAX_DISPLAY_PAGE_LINKS_TITLE', 'Girare le pagine');
define('MAX_DISPLAY_PAGE_LINKS_DESC', 'Numero di pagine individuali per le quali deve essere visualizzato un link nel menu di navigazione della pagina.');
define('MAX_DISPLAY_SPECIAL_PRODUCTS_TITLE', 'Offerte speciali');
define('MAX_DISPLAY_SPECIAL_PRODUCTS_DESC', 'Numero massimo di offerte speciali (specials.php) da visualizzare per pagina.');
define('MAX_DISPLAY_NEW_PRODUCTS_TITLE', 'Nuovo modulo di visualizzazione degli articoli');
define('MAX_DISPLAY_NEW_PRODUCTS_DESC', 'Numero massimo di nuovi articoli da visualizzare nelle categorie di prodotti e come "articoli TOP" sulla homepage.');
define('MAX_DISPLAY_UPCOMING_PRODUCTS_TITLE', 'Punti pianificati Modulo di visualizzazione');
define('MAX_DISPLAY_UPCOMING_PRODUCTS_DESC', 'Numero massimo di elementi da visualizzare nella home page.');
define('MAX_DISPLAY_MANUFACTURERS_IN_A_LIST_TITLE', 'Elenco dei produttori Valore di soglia');
define('MAX_DISPLAY_MANUFACTURERS_IN_A_LIST_DESC', 'Nel riquadro del produttore; se il numero di produttori supera questa soglia, al posto del consueto elenco di link apparirà un elenco a discesa o una casella di riepilogo (a seconda di quanto è stato inserito in "Elenco dei produttori").');
define('MAX_MANUFACTURERS_LIST_TITLE', 'Elenco dei produttori');
define('MAX_MANUFACTURERS_LIST_DESC', 'Nella Casella produttore; se il valore è impostato su "1", la Casella produttore viene visualizzata come un elenco a discesa. Altrimenti, come casella di riepilogo con il numero di righe specificato.');
define('MAX_DISPLAY_MANUFACTURER_NAME_LEN_TITLE', 'Lunghezza del nome del produttore');
define('MAX_DISPLAY_MANUFACTURER_NAME_LEN_DESC', 'Nella scatola del produttore; lunghezza massima dei nomi nella scatola del produttore.');
define('MAX_DISPLAY_NEW_REVIEWS_TITLE', 'Nuove revisioni');
define('MAX_DISPLAY_NEW_REVIEWS_DESC', 'Numero massimo di nuove recensioni da visualizzare.');
define('MAX_RANDOM_SELECT_REVIEWS_TITLE', 'Rivedere la giuria di selezione');
define('MAX_RANDOM_SELECT_REVIEWS_DESC', 'Tra quanti avvisi deve scegliere quelli che appaiono in modo casuale nella casella?');
define('MAX_RANDOM_SELECT_NEW_TITLE', 'Nuovo pool di selezione degli articoli');
define('MAX_RANDOM_SELECT_NEW_DESC', 'Tra quanti nuovi articoli deve scegliere quelli che appaiono casualmente nella scatola?');
define('MAX_RANDOM_SELECT_SPECIALS_TITLE', 'Selezione di offerte speciali per la piscina');
define('MAX_RANDOM_SELECT_SPECIALS_DESC', 'Tra quante offerte speciali deve scegliere quelle che appaiono casualmente nella casella?');
define('MAX_DISPLAY_CATEGORIES_PER_ROW_TITLE', 'Numero di categorie per riga');
define('MAX_DISPLAY_CATEGORIES_PER_ROW_DESC', 'Numero di categorie da visualizzare per riga nei sommari.');
define('MAX_DISPLAY_PRODUCTS_NEW_TITLE', 'Nuovo elenco di articoli');
define('MAX_DISPLAY_PRODUCTS_NEW_DESC', 'Numero massimo di nuovi articoli da visualizzare per la pagina "Nuovi articoli" (products_new.php)".');
define('MAX_DISPLAY_BESTSELLERS_TITLE', 'I migliori venditori');
define('MAX_DISPLAY_BESTSELLERS_DESC', 'Numero massimo di bestseller da visualizzare.');
define('MAX_DISPLAY_BESTSELLERS_DAYS_TITLE', 'Numero di giorni per i best seller');
define('MAX_DISPLAY_BESTSELLERS_DAYS_DESC', 'Numero massimo di giorni in cui gli articoli più venduti devono essere visualizzati.');
define('MAX_DISPLAY_ALSO_PURCHASED_TITLE', 'Ha anche acquistato');
define('MAX_DISPLAY_ALSO_PURCHASED_DESC', 'Numero massimo di articoli acquistati anche per essere visualizzati nella vista articoli.');
define('MAX_DISPLAY_ALSO_PURCHASED_ORDERS_TITLE', 'Numero di ordini Acquistati anche');
define('MAX_DISPLAY_ALSO_PURCHASED_ORDERS_DESC', 'Numero massimo di ordini ricercati per determinare quali articoli sono stati acquistati.');
define('MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX_TITLE', 'Tabella riassuntiva degli ordini');
define('MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX_DESC', 'Numero massimo di articoli da visualizzare nella tabella riassuntiva dell\'ordine personale del cliente.');
define('MAX_DISPLAY_ORDER_HISTORY_TITLE', 'Riepilogo degli ordini');
define('MAX_DISPLAY_ORDER_HISTORY_DESC', 'Numero massimo di ordini da visualizzare nella panoramica dell\'area clienti del negozio.');
define('MAX_PRODUCTS_QTY_TITLE', 'Numero massimo di prodotti');
define('MAX_PRODUCTS_QTY_DESC', 'Numero massimo di articoli nel carrello');
define('MAX_DISPLAY_NEW_PRODUCTS_DAYS_TITLE', 'Numero di giorni per i nuovi prodotti');
define('MAX_DISPLAY_NEW_PRODUCTS_DAYS_DESC', 'Numero massimo di giorni per la visualizzazione di nuovi articoli.');

define('PRODUCT_IMAGE_MINI_WIDTH_TITLE', 'Larghezza della miniatura dell\'articolo');
define('PRODUCT_IMAGE_MINI_WIDTH_DESC', 'Larghezza massima dell\'elemento mini in pixel (valore predefinito: 80). Per valori più grandi, potrebbe essere necessario regolare "productPreviewImage" nel file stylesheet.css del modello.');
define('PRODUCT_IMAGE_MINI_HEIGHT_TITLE', 'Altezza della miniatura dell\'articolo');
define('PRODUCT_IMAGE_MINI_HEIGHT_DESC', 'Altezza massima dell\'elemento mini in pixel (predefinito: 80)');

define('PRODUCT_IMAGE_THUMBNAIL_WIDTH_TITLE', 'Larghezza della miniatura dell\'articolo');
define('PRODUCT_IMAGE_THUMBNAIL_WIDTH_DESC', 'Larghezza massima delle miniature degli elementi in pixel (valore predefinito: 240). Per valori più grandi, potrebbe essere necessario regolare "productPreviewImage" nel file stylesheet.css del modello.');
define('PRODUCT_IMAGE_THUMBNAIL_HEIGHT_TITLE', 'Altezza della miniatura dell\'elemento');
define('PRODUCT_IMAGE_THUMBNAIL_HEIGHT_DESC', 'Altezza massima delle miniature degli articoli in pixel (predefinito: 240).');

define('PRODUCT_IMAGE_MIDI_WIDTH_TITLE', 'Larghezza delle immagini midi dell\'articolo');
define('PRODUCT_IMAGE_MIDI_WIDTH_DESC', 'Larghezza massima dell\'elemento midi in pixel (valore predefinito: 160). Per valori più grandi, potrebbe essere necessario regolare "productPreviewImage" nel file stylesheet.css del modello.');
define('PRODUCT_IMAGE_MIDI_HEIGHT_TITLE', 'Altezza delle immagini midi dell\'articolo');
define('PRODUCT_IMAGE_MIDI_HEIGHT_DESC', 'Altezza massima dell\'elemento midi in pixel (predefinito: 160)');

define('PRODUCT_IMAGE_INFO_WIDTH_TITLE', 'Larghezza delle immagini informative dell\'articolo');
define('PRODUCT_IMAGE_INFO_WIDTH_DESC', 'Larghezza massima delle immagini informative degli elementi in pixel (valore predefinito: 520).');
define('PRODUCT_IMAGE_INFO_HEIGHT_TITLE', 'Altezza delle immagini informative nell\'articolo');
define('PRODUCT_IMAGE_INFO_HEIGHT_DESC', 'Altezza massima delle immagini informative dell\'elemento in pixel (predefinito: 520)');

define('PRODUCT_IMAGE_POPUP_WIDTH_TITLE', 'Larghezza delle immagini pop-up nell\'articolo');
define('PRODUCT_IMAGE_POPUP_WIDTH_DESC', 'Larghezza massima delle immagini pop-up nell\'articolo in pixel (valore predefinito: 800).');
define('PRODUCT_IMAGE_POPUP_HEIGHT_TITLE', 'Altezza delle immagini pop-up nell\'articolo');
define('PRODUCT_IMAGE_POPUP_HEIGHT_DESC', 'Altezza massima delle immagini pop-up nell\'articolo, in pixel (valore predefinito: 800).');

define('CATEGORIES_IMAGE_WIDTH_TITLE', 'Larghezza della categoria Immagini');
define('CATEGORIES_IMAGE_WIDTH_DESC', 'Larghezza massima della categoria Immagini in pixel (valore predefinito: 985).');
define('CATEGORIES_IMAGE_HEIGHT_TITLE', 'Altezza delle tabelle di categoria');
define('CATEGORIES_IMAGE_HEIGHT_DESC', 'L\'altezza massima della categoria Immagini in pixel (predefinito: 370).');

define('CATEGORIES_IMAGE_MOBILE_WIDTH_TITLE', 'Larghezza della categoria Immagini in movimento');
define('CATEGORIES_IMAGE_MOBILE_WIDTH_DESC', 'Larghezza massima della categoria Immagini in movimento in pixel (valore predefinito: 600).');
define('CATEGORIES_IMAGE_MOBILE_HEIGHT_TITLE', 'Altezza della categoria Foto Mobile');
define('CATEGORIES_IMAGE_MOBILE_HEIGHT_DESC', 'Altezza massima della categoria Immagini in movimento in pixel (valore predefinito: 400).');

define('CATEGORIES_IMAGE_LIST_WIDTH_TITLE', 'Larghezza della categoria Elenco di immagini');
define('CATEGORIES_IMAGE_LIST_WIDTH_DESC', 'Larghezza massima della categoria Elenco immagini in pixel (valore predefinito: 225).');
define('CATEGORIES_IMAGE_LIST_HEIGHT_TITLE', 'Elenco delle immagini di altezza della categoria');
define('CATEGORIES_IMAGE_LIST_HEIGHT_DESC', 'Altezza massima della categoria di immagini elencate in pixel (predefinito: 170)');

define('MANUFACTURER_IMAGE_WIDTH_TITLE', 'Larghezza delle immagini del produttore');
define('MANUFACTURER_IMAGE_WIDTH_DESC', 'Larghezza massima delle immagini del produttore in pixel (valore predefinito: 100).');
define('MANUFACTURER_IMAGE_HEIGHT_TITLE', 'Altezza delle immagini del produttore');
define('MANUFACTURER_IMAGE_HEIGHT_DESC', 'Altezza massima delle immagini del produttore in pixel (predefinito: 60)');

define('BANNERS_IMAGE_WIDTH_TITLE', 'Larghezza dell\'immagine del banner');
define('BANNERS_IMAGE_WIDTH_DESC', 'Larghezza massima delle immagini del banner in pixel (valore predefinito: 985).');
define('BANNERS_IMAGE_HEIGHT_TITLE', 'Altezza delle immagini del banner');
define('BANNERS_IMAGE_HEIGHT_DESC', 'Altezza massima delle immagini del banner in pixel (predefinito: 400).');

define('BANNERS_IMAGE_MOBILE_WIDTH_TITLE', 'Larghezza delle immagini del banner mobile');
define('BANNERS_IMAGE_MOBILE_WIDTH_DESC', 'Larghezza massima delle immagini del banner mobile in pixel (valore predefinito: 600).');
define('BANNERS_IMAGE_MOBILE_HEIGHT_TITLE', 'Altezza delle immagini del banner mobile');
define('BANNERS_IMAGE_MOBILE_HEIGHT_DESC', 'Altezza massima delle immagini del banner mobile in pixel (valore predefinito: 400).');

define('SMALL_IMAGE_WIDTH_TITLE', 'Larghezza dell\'articolo Immagini');
define('SMALL_IMAGE_WIDTH_DESC', 'Larghezza massima delle immagini dell\'articolo in pixel.');
define('SMALL_IMAGE_HEIGHT_TITLE', 'Altezza dell\'articolo Immagini');
define('SMALL_IMAGE_HEIGHT_DESC', 'Altezza massima delle immagini dell\'articolo in pixel.');

define('SUBCATEGORY_IMAGE_WIDTH_TITLE', 'Larghezza delle immagini della sottocategoria (gruppo di prodotti)');
define('SUBCATEGORY_IMAGE_WIDTH_DESC', 'Larghezza massima delle immagini della sottocategoria (gruppo di prodotti) in pixel.');
define('SUBCATEGORY_IMAGE_HEIGHT_TITLE', 'Altezza delle immagini nella sottocategoria (gruppo di prodotti)');
define('SUBCATEGORY_IMAGE_HEIGHT_DESC', 'Altezza massima delle immagini nella sottocategoria (gruppo di prodotti) in pixel.');

define('MO_PICS_TITLE', 'Numero di immagini aggiuntive del prodotto');
define('MO_PICS_DESC', 'Numero di immagini del prodotto che devono essere disponibili oltre all\'immagine principale del prodotto.');

define('PRODUCT_IMAGE_MINI_MERGE_TITLE', 'Articolo Mini Immagini: unire<br /><img src="images/config_merge.gif">');
define('PRODUCT_IMAGE_MINI_MERGE_DESC', 'Artikel-Mini Bilder:Unisci<br /><br />Standard Wert : (overlay.gif,10,-50,60,FF0000)<br /><br />sovrapposizione immagine unione<br />Verwendung :<br />(immagine unione, inizio x [neg = da destra], inizio y [neg = dal basso], opacità, colore trasparente nell\'immagine unione)');

define('PRODUCT_IMAGE_THUMBNAIL_MERGE_TITLE', 'Miniature degli articoli:Unire');
define('PRODUCT_IMAGE_THUMBNAIL_MERGE_DESC', 'Artikel-Thumbnails:Unire<br /><br />Standard Wert : (overlay.gif,10,-50,60,FF0000)<br /><br />sovrapposizione dell\'immagine unione<br />Verwendung :<br />(immagine unione, inizio x [neg = da destra], inizio y [neg = dal basso], opacità, colore trasparente nell\'immagine unione)');

define('PRODUCT_IMAGE_MIDI_MERGE_TITLE', 'Articolo Midi Immagini: unire');
define('PRODUCT_IMAGE_MIDI_MERGE_DESC', 'Artikel-Midi Bilder:Merge<br /><br />Standard Wert : (overlay.gif,10,-50,60,FF0000)<br /><br />overlay merge image<br />Verwendung :<br />(merge image, inizio x [neg = da destra], inizio y [neg = dal basso], opacità, colore trasparente nell\'immagine merge)');

define('PRODUCT_IMAGE_INFO_MERGE_TITLE', 'Informazioni sull\'articolo Immagini:Fusione');
define('PRODUCT_IMAGE_INFO_MERGE_DESC', 'Artikel-Info Bilder:Unire<br /><br />Standard Wert : (overlay.gif,10,-50,60,FF0000)<br /><br />sovrapposizione immagine unione<br />Verwendung :<br />(immagine unione, inizio x [neg = da destra], inizio y [neg = dal basso], opacità, colore trasparente nell\'immagine unione)');

define('PRODUCT_IMAGE_POPUP_MERGE_TITLE', 'Immagini pop-up dell\'articolo: unire');
define('PRODUCT_IMAGE_POPUP_MERGE_DESC', 'Artikel-Popup Bilder:Unisci<br /><br />Standard Wert : (overlay.gif,10,-50,60,FF0000)<br /><br />sovrapposizione dell\'immagine di unione<br />Verwendung :<br />(immagine di unione, inizio x [neg = da destra], inizio y [neg = dal basso], opacità, colore trasparente nell\'immagine di unione)');

define('IMAGE_MANIPULATOR_TITLE', 'Elaborazione GDlib');
define('IMAGE_MANIPULATOR_DESC', 'Manipolatore di immagini per GD2 o GD1<br /><br /><b>HINWEIS :</b> image_manipulator_GD2_advanced.php unterst&uuml;tzt transparente PNG');

define('ACCOUNT_GENDER_TITLE', 'Saludo');
define('ACCOUNT_GENDER_DESC', 'Richieda un saluto all\'apertura/elaborazione di un conto.');
define('ACCOUNT_DOB_TITLE', 'Data di nascita');
define('ACCOUNT_DOB_DESC', 'Richieda la data di nascita all\'apertura/elaborazione di un conto.');
define('ACCOUNT_COMPANY_TITLE', 'Azienda');
define('ACCOUNT_COMPANY_DESC', 'Consulti la società al momento dell\'apertura/elaborazione del conto.');
define('ACCOUNT_SUBURB_TITLE', 'Altro indirizzo');
define('ACCOUNT_SUBURB_DESC', 'Richieda un indirizzo aggiuntivo al momento dell\'apertura/elaborazione del conto.');
define('ACCOUNT_STATE_TITLE', 'Stato');
define('ACCOUNT_STATE_DESC', 'Controllare lo stato all\'apertura/elaborazione del conto');

define('DEFAULT_CURRENCY_TITLE', 'Monnaie standard');
define('DEFAULT_CURRENCY_DESC', 'Valuta predefinita utilizzata');
define('DEFAULT_LANGUAGE_TITLE', 'Langue standard');
define('DEFAULT_LANGUAGE_DESC', 'Lingua predefinita utilizzata');
define('DEFAULT_ORDERS_STATUS_ID_TITLE', 'Stato standard dei nuovi ordini');
define('DEFAULT_ORDERS_STATUS_ID_DESC', 'Quando riceve un nuovo ordine, questo stato viene impostato come stato dell\'ordine.');

define('SHIPPING_MAX_WEIGHT_TITLE', 'Peso massimo che può essere spedito in un unico pacco');
define('SHIPPING_MAX_WEIGHT_DESC', 'I partner di spedizione (Post/UPS, ecc.) hanno un peso massimo per i pacchi. Inserisca un valore per questo.');
define('SHIPPING_BOX_WEIGHT_TITLE', 'Peso della pelle dell\'imballaggio');
define('SHIPPING_BOX_WEIGHT_DESC', 'Qual è il peso medio di un contenitore vuoto di piccole o medie dimensioni?');
define('SHIPPING_BOX_PADDING_TITLE', 'Per i contenitori vuoti più grandi - aumento di peso in %.');
define('SHIPPING_BOX_PADDING_DESC', 'Per circa il 10%, inserisca 10');
define('SHOW_SHIPPING_TITLE', 'Mostra i costi di spedizione');
define('SHOW_SHIPPING_DESC', 'Display collegato a "più spese di spedizione".');
define('SHIPPING_INFOS_TITLE', 'Costi di spedizione');
define('SHIPPING_INFOS_DESC', 'Selezioni il contenuto per visualizzare le spese di spedizione');
define('SHIPPING_DEFAULT_TAX_CLASS_METHOD_TITLE', 'Metodo di calcolo della classe fiscale standard');
define('SHIPPING_DEFAULT_TAX_CLASS_METHOD_DESC', 'none : non visualizza alcuna tassa di spedizione<br />auto proportional : visualizza la tassa di spedizione proporzionale all\'ordine<br />auto max : visualizza l\'aliquota fiscale del gruppo di vendita più grande come tassa di spedizione');

define('SHOW_SHIPPING_MODULE_TITLE_TITLE', 'Descrizione Costi di spedizione');
define('SHOW_SHIPPING_MODULE_TITLE_DESC', 'Selezioni il nome dell\'affrancatura nella panoramica');
define('CUSTOM_SHIPPING_TITLE_TITLE', 'Designazione individuale Spese di spedizione');
define('CUSTOM_SHIPPING_TITLE_DESC', 'Inserisca una designazione. Questa impostazione è efficace solo se la denominazione dell\'affrancatura è impostata su "Definito dall\'utente".');
define('CFG_TXT_SHIPPING_DEFAULT', 'Standard');
define('CFG_TXT_SHIPPING_TITLE', 'Titolo');
define('CFG_TXT_SHIPPING_CUSTOM', 'Su misura');

define('CAPITALIZE_ADDRESS_FORMAT_TITLE', 'Indirizzo in lettere maiuscole');
define('CAPITALIZE_ADDRESS_FORMAT_DESC', 'Scriva i nomi dei Paesi e dei luoghi in lettere maiuscole.');

define('PRODUCT_LIST_FILTER_TITLE', 'Apparizione di filtri di ordinamento negli elenchi di prodotti?');
define('PRODUCT_LIST_FILTER_DESC', 'Visualizzazione dei filtri di ordinamento per gruppi di prodotti/produttori, ecc. Filtro (false=inattivo; true=attivo)');

define('STOCK_CHECK_TITLE', 'Controllo dello stock di merci');
define('STOCK_CHECK_DESC', 'Verificare che le scorte siano sufficienti per consegnare gli ordini.');

define('ATTRIBUTE_STOCK_CHECK_TITLE', 'Controllo dello stock di attributi di articoli');
define('ATTRIBUTE_STOCK_CHECK_DESC', 'Controllare lo stock di merci con determinati attributi di articolo.');
define('STOCK_LIMITED_TITLE', 'Detrarre la quantità di merci');
define('STOCK_LIMITED_DESC', 'Detragga la quantità di merce in magazzino se la merce è stata ordinata.');
define('STOCK_LIMITED_DOWNLOADS_TITLE', 'Detragga lo scarico dalla quantità di merci');
define('STOCK_LIMITED_DOWNLOADS_DESC', 'Deve essere dedotta anche la quantità di merce per lo scarico degli articoli?');
define('STOCK_ALLOW_CHECKOUT_TITLE', 'Consentire l\'acquisto di prodotti che non sono in magazzino');
define('STOCK_ALLOW_CHECKOUT_DESC', 'Vuole consentire l\'invio di ordini anche se alcuni prodotti non sono disponibili in base all\'inventario?');
define('STOCK_MARK_PRODUCT_OUT_OF_STOCK_TITLE', 'Marcatura degli articoli esauriti');
define('STOCK_MARK_PRODUCT_OUT_OF_STOCK_DESC', 'Informi il cliente su quali articoli non sono più disponibili.');
define('STOCK_REORDER_LEVEL_TITLE', 'Messaggio all\'amministratore che indica che un articolo deve essere riorganizzato.');
define('STOCK_REORDER_LEVEL_DESC', 'Da quale quantità deve apparire questo messaggio (OPERAZIONE PIANIFICATA)?');
define('STORE_PAGE_PARSE_TIME_TITLE', 'Risparmia tempo nel calcolo del design della pagina del negozio');
define('STORE_PAGE_PARSE_TIME_DESC', 'Risparmia il tempo necessario per calcolare gli script fino all\'uscita della pagina.');
define('STORE_PARSE_DATE_TIME_FORMAT_TITLE', 'Formato della data nel file di registro');
define('STORE_PARSE_DATE_TIME_FORMAT_DESC', 'Il formato della data per la registrazione (predefinito: Y-m-d H:i:s)');
define('STORE_DB_SLOW_QUERY_TITLE', 'Registrazione delle richieste lente');
define('STORE_DB_SLOW_QUERY_DESC', 'Si devono salvare solo le query SQL che richiedono molto tempo?<br/><strong>Attenzione: il salvataggio delle query del database deve essere abilitato!</strong><br/><strong>Attenzione: il file può diventare molto grande se l\'esecuzione richiede molto tempo!</strong><br/><br/>Il file di registro viene salvato nella cartella /log della home directory.');
define('STORE_DB_SLOW_QUERY_TIME_TITLE', 'Registrazione delle richieste lente - Tempo');
define('STORE_DB_SLOW_QUERY_TIME_DESC', 'Inserisca l\'ora a partire dalla quale le query SQL vengono scritte nel file di registro.');

define('DISPLAY_PAGE_PARSE_TIME_TITLE', 'Visualizza i tempi di calcolo della pagina');
define('DISPLAY_PAGE_PARSE_TIME_DESC', 'Se l\'opzione di salvare i tempi di calcolo delle pagine è attivata, questi possono essere visualizzati nel piè di pagina.<br /><strong>disattivato : Disattiva</strong> completamente<strong>la</strong>visualizzazione<br /><strong>admin</strong>: Solo l\'amministratore vede i tempi di calcolo<br /><strong>tutti</strong>: Tutti vedono i tempi di calcolo');
define('STORE_DB_TRANSACTIONS_TITLE', 'Salvataggio delle query del database');
define('STORE_DB_TRANSACTIONS_DESC', 'Registri le diverse query del database nel file di registro per i tempi di calcolo<br/><strong>Attenzione: il file può diventare molto grande con tempi di esecuzione più lunghi!</strong><br/><br/>Il file di registro viene salvato nella cartella /log della directory principale.');

define('USE_CACHE_TITLE', 'Utilizzo della cache del modello');
define('USE_CACHE_DESC', 'Utilizzi le funzioni di caching dei modelli.');

define('DB_CACHE_TITLE', 'Nascosto dai fumetti');
define('DB_CACHE_DESC', 'Le query del database possono essere memorizzate nella cache dallo shop per ridurre il carico del database e aumentare la velocità.');

define('DB_CACHE_EXPIRE_TITLE', 'Durata della cache del DB');
define('DB_CACHE_EXPIRE_DESC', 'Tempo in secondi prima che i file della cache vengano automaticamente sovrascritti con i dati del database.');

define('DIR_FS_CACHE_TITLE', 'Carpeta caché');
define('DIR_FS_CACHE_DESC', 'La cartella in cui verranno memorizzati i file nella cache.');

define('ACCOUNT_OPTIONS_TITLE', 'Tipo di creazione dell\'account');
define('ACCOUNT_OPTIONS_DESC', 'Come vuole impostare la procedura di registrazione nel suo negozio?<br />Può scegliere tra i normali conti cliente e gli "ordini una tantum" senza creare un conto cliente (viene creato un conto, ma non è evidente per il cliente).');

define('EMAIL_TRANSPORT_TITLE', 'Metodo di trasporto delle e-mail');
define('EMAIL_TRANSPORT_DESC', '<b>Raccomandazione: smtp</b> - Definisce se il server utilizza una connessione locale al "programma sendmail" o richiede una connessione SMTP via TCP/IP. I server in esecuzione su Windows o Mac OS devono utilizzare SMTP.');

define('EMAIL_LINEFEED_TITLE', 'Feed di linea via e-mail');
define('EMAIL_LINEFEED_DESC', 'Definisce i caratteri da utilizzare per separare le intestazioni delle e-mail.');
define('EMAIL_USE_HTML_TITLE', 'Utilizzi il MIME HTML nell\'invio di e-mail');
define('EMAIL_USE_HTML_DESC', 'Invio di e-mail in formato HTML');
define('ENTRY_EMAIL_ADDRESS_CHECK_TITLE', 'Controllo degli indirizzi e-mail tramite DNS');
define('ENTRY_EMAIL_ADDRESS_CHECK_DESC', 'Gli indirizzi e-mail possono essere controllati tramite un server DNS.');
define('SEND_EMAILS_TITLE', 'Invio di e-mail');
define('SEND_EMAILS_DESC', 'Invio di e-mail ai clienti (per ordini, ecc.)');
define('SENDMAIL_PATH_TITLE', 'La strada verso Sendmail');
define('SENDMAIL_PATH_DESC', 'Se utilizza Sendmail, inserisca qui il percorso del programma Sendmail (di solito: /usr/bin/sendmail):');
define('USE_SENDMAIL_OPTIONS_TITLE', 'Opzioni di Sendmail');
define('USE_SENDMAIL_OPTIONS_DESC', 'Indica che sì mail() utilizza un MTA pienamente compatibile con sendmail.');
define('SMTP_MAIN_SERVER_TITLE', 'Indirizzo del server SMTP');
define('SMTP_MAIN_SERVER_DESC', 'Inserisca l\'indirizzo del suo server SMTP primario.');
define('SMTP_BACKUP_SERVER_TITLE', 'Indirizzo del server di backup SMTP');
define('SMTP_BACKUP_SERVER_DESC', 'Inserisca l\'indirizzo del suo server SMTP di backup.');
define('SMTP_USERNAME_TITLE', 'Nome utente SMTP');
define('SMTP_USERNAME_DESC', 'Inserisca qui il nome utente del suo account SMTP.');
define('SMTP_PASSWORD_TITLE', 'Password SMTP');
define('SMTP_PASSWORD_DESC', 'Inserisca qui la password del suo account SMTP.');
define('SMTP_AUTH_TITLE', 'SMTP-Auth');
define('SMTP_AUTH_DESC', 'Il server SMTP richiede un\'autenticazione sicura?');
define('SMTP_PORT_TITLE', 'Porta SMTP');
define('SMTP_PORT_DESC', 'Inserisca la porta SMTP del suo server SMTP (predefinita: 25)?');
define('SMTP_AUTO_TLS_TITLE', 'Connessione automatica TLS SMTP');
define('SMTP_AUTO_TLS_DESC', 'Connessione automatica con STARTTLS se SMTP-SECURE è disattivato?<br>In caso di problemi di invio, disattivi la connessione automatica TLS!</br>');
define('SMTP_DEBUG_TITLE', 'Livello di registro di debug SMTP');
define('SMTP_DEBUG_DESC', '<b>0</b>: nessuna uscita; <b>1</b>: solo comandi; <b>2</b>: dati e comandi; <b>3</b>: come 2 più lo stato della connessione; <b>4</b>: come 3 più le informazioni<br>Se il valore è impostato su 2, in caso di</br>problemi di<br>trasmissione, verrà creato un registro nella directory log</br>.');

define('EMAIL_SQL_ERRORS_TITLE', 'Inviare messaggi di errore SQL via e-mail');
define('EMAIL_SQL_ERRORS_DESC', 'Se "vero", un\'e-mail contenente il messaggio di errore SQL viene inviata all\'indirizzo e-mail dell\'operatore del negozio. Invece, il messaggio di errore SQL viene nascosto al cliente.<br />Se si seleziona "false", il messaggio di errore corrispondente viene inviato direttamente ed è visibile a tutti (per impostazione predefinita).');

define('CONTACT_US_EMAIL_ADDRESS_TITLE', 'Contatto - Indirizzo e-mail');
define('CONTACT_US_EMAIL_ADDRESS_DESC', 'Inserisca un indirizzo di mittente corretto per inviare e-mail tramite il modulo "Contatti".');
define('CONTACT_US_NAME_TITLE', 'Contatto - indirizzo e-mail, nome');
define('CONTACT_US_NAME_DESC', 'Inserisca il nome di un mittente per inviare e-mail tramite il modulo "Contatti".');
define('CONTACT_US_FORWARDING_STRING_TITLE', 'Contatto - Trasferimento di indirizzi e-mail');
define('CONTACT_US_FORWARDING_STRING_DESC', 'Inserisca gli indirizzi e-mail aggiuntivi a cui verranno inviati i messaggi dal modulo "Contatti" (separati da , ).');
define('CONTACT_US_REPLY_ADDRESS_TITLE', 'Contatto - Indirizzo e-mail di risposta');
define('CONTACT_US_REPLY_ADDRESS_DESC', 'Inserisca un indirizzo e-mail al quale i suoi clienti possano rispondere.');
define('CONTACT_US_REPLY_ADDRESS_NAME_TITLE', 'Contatto - indirizzo e-mail di risposta, nome');
define('CONTACT_US_REPLY_ADDRESS_NAME_DESC', 'Nome del mittente per le e-mail di risposta.');
define('CONTACT_US_EMAIL_SUBJECT_TITLE', 'Contatto - Oggetto dell\'e-mail');
define('CONTACT_US_EMAIL_SUBJECT_DESC', 'Oggetto delle e-mail nel modulo di contatto del negozio');

define('EMAIL_SUPPORT_ADDRESS_TITLE', 'Assistenza tecnica - Indirizzo e-mail');
define('EMAIL_SUPPORT_ADDRESS_DESC', 'Inserisca un indirizzo di mittente corretto per inviare e-mail tramite il <b>sistema di assistenza</b> (creazione dell\'account, password dimenticata, sistema di newsletter).');
define('EMAIL_SUPPORT_NAME_TITLE', 'Assistenza tecnica - indirizzo e-mail, nome');
define('EMAIL_SUPPORT_NAME_DESC', 'Inserisca un nome di mittente per inviare e-mail tramite il <b>sistema di assistenza</b>.');
define('EMAIL_SUPPORT_FORWARDING_STRING_TITLE', 'Assistenza tecnica - Trasferimento dell\'indirizzo e-mail');
define('EMAIL_SUPPORT_FORWARDING_STRING_DESC', 'Inserisca gli indirizzi e-mail aggiuntivi a cui verranno inviate le e-mail del <b>sistema di assistenza</b> (separati da , ).');
define('EMAIL_SUPPORT_REPLY_ADDRESS_TITLE', 'Assistenza tecnica - Indirizzo e-mail di risposta');
define('EMAIL_SUPPORT_REPLY_ADDRESS_DESC', 'Inserisca un indirizzo e-mail al quale i suoi clienti possano rispondere.');
define('EMAIL_SUPPORT_REPLY_ADDRESS_NAME_TITLE', 'Assistenza tecnica - indirizzo e-mail per la risposta, nome');
define('EMAIL_SUPPORT_REPLY_ADDRESS_NAME_DESC', 'Nome del mittente per le e-mail di risposta.');
define('EMAIL_SUPPORT_SUBJECT_TITLE', 'Assistenza tecnica - Scopo dell\'e-mail');
define('EMAIL_SUPPORT_SUBJECT_DESC', 'Scopo delle e-mail del <b>sistema di supporto</b>.');

define('EMAIL_BILLING_ADDRESS_TITLE', 'Regole - Indirizzo e-mail');
define('EMAIL_BILLING_ADDRESS_DESC', 'Inserisca un indirizzo di mittente corretto per l\'invio di e-mail tramite il <b>sistema di fatturazione</b> (conferme d\'ordine, modifiche di stato,...).');
define('EMAIL_BILLING_NAME_TITLE', 'Fatturazione - indirizzo e-mail, nome');
define('EMAIL_BILLING_NAME_DESC', 'Inserisca un nome di mittente per inviare le e-mail attraverso il <b>sistema di fatturazione</b> (conferma dell\'ordine, modifiche di stato,...).');
define('EMAIL_BILLING_FORWARDING_STRING_TITLE', 'Fatturazione - Trasferimento di indirizzi e-mail');
define('EMAIL_BILLING_FORWARDING_STRING_DESC', 'Inserisca gli indirizzi e-mail aggiuntivi a cui verranno inviate le e-mail del <b>sistema contabile</b> (separati da , ).');
define('EMAIL_BILLING_REPLY_ADDRESS_TITLE', 'Regole - Indirizzo e-mail di risposta');
define('EMAIL_BILLING_REPLY_ADDRESS_DESC', 'Inserisca un indirizzo e-mail al quale i suoi clienti possano rispondere.');
define('EMAIL_BILLING_REPLY_ADDRESS_NAME_TITLE', 'Compenso - indirizzo e-mail di risposta, nome');
define('EMAIL_BILLING_REPLY_ADDRESS_NAME_DESC', 'Nome del mittente per le e-mail di risposta.');
define('EMAIL_BILLING_SUBJECT_TITLE', 'Regolamento - modifica dello stato dell\'oggetto delle e-mail');
define('EMAIL_BILLING_SUBJECT_DESC', 'Inserisca un oggetto per le e-mail del <b>sistema di fatturazione</b> (modifiche di stato) (ad esempio, il <b>suo ordine {$nr} di {$data}</b>)<br />Sono disponibili le seguenti variabili: {$nr},{$data},{$nome},{$cognome}.');
define('EMAIL_BILLING_SUBJECT_ORDER_TITLE', 'Fatturazione - Oggetto dell\'e-mail per gli ordini');
define('EMAIL_BILLING_SUBJECT_ORDER_DESC', 'Inserisca un oggetto per le e-mail relative al suo ordine (ad esempio <b>Il suo ordine {$nr} di {$data}</b>)<br />Sono disponibili le seguenti variabili: {$nr},{$data},{$nome},{$cognome}.');
define('MODULE_ORDER_MAIL_STEP_SUBJECT_TITLE', 'Fatturazione - oggetto dell\'e-mail di conferma dell\'ordine');
define('MODULE_ORDER_MAIL_STEP_SUBJECT_DESC', 'Inserisca un oggetto per i messaggi di conferma dell\'ordine (ad esempio: <b>Il suo ordine {$nr} di {$date}</b>)<br />Sono disponibili le seguenti variabili: {$nr},{$date},{$firstName},{$lastName}.');

define('DOWNLOAD_ENABLED_TITLE', 'Consentire il download di articoli');
define('DOWNLOAD_ENABLED_DESC', 'Attiva le funzioni per il download di elementi (software, ecc.).');
define('DOWNLOAD_BY_REDIRECT_TITLE', 'Download tramite reindirizzamento');
define('DOWNLOAD_BY_REDIRECT_DESC', 'Utilizzi il reindirizzamento del browser per i download degli articoli. Arresto su sistemi non Linux/Unix.');
define('DOWNLOAD_MAX_DAYS_TITLE', 'Data di scadenza dei link di download (giorni)');
define('DOWNLOAD_MAX_DAYS_DESC', 'Numero di giorni in cui un link di download rimane attivo per il cliente. 0 significa illimitato.');
define('DOWNLOAD_MAX_COUNT_TITLE', 'Numero massimo di download di un prodotto multimediale acquistato');
define('DOWNLOAD_MAX_COUNT_DESC', 'Imposta il numero massimo di download consentiti per il cliente che ha acquistato un articolo di questo tipo. 0 significa nessun download.');
define('DOWNLOAD_MULTIPLE_ATTRIBUTES_ALLOWED_TITLE', 'Attributi multipli per i download');
define('DOWNLOAD_MULTIPLE_ATTRIBUTES_ALLOWED_DESC', 'Dovrebbero essere consentiti più attributi per gli articoli scaricabili, in modo da omettere il metodo di consegna?');

define('GZIP_COMPRESSION_TITLE', 'Attivare la compressione GZip');
define('GZIP_COMPRESSION_DESC', 'Abilita la compressione HTTP GZip per ottimizzare la velocità di caricamento delle pagine.');
define('GZIP_LEVEL_TITLE', 'Livello di compressione');
define('GZIP_LEVEL_DESC', 'Selezioni un livello di compressione tra 0 e 9 (0 = minimo, 9 = massimo).');

define('SESSION_WARNING', '<br /><br /><span class="col-red"><strong>ATTENZIONE:</strong></span> Questa funzione può eventualmente influenzare la funzionalità del negozio. Lo modifichi solo se è consapevole delle possibili conseguenze e se il server supporta davvero questa funzione!');
define('SESSION_WRITE_DIRECTORY_TITLE', 'Posizione della sessione');
define('SESSION_WRITE_DIRECTORY_DESC', 'Se le sessioni devono essere salvate come file, utilizzi la seguente cartella.');
define('SESSION_FORCE_COOKIE_USE_TITLE', 'Forzare il cookie di sessione');
define('SESSION_FORCE_COOKIE_USE_DESC', 'Effettua il login se i cookie sono consentiti dal browser (l\'impostazione predefinita è &quot;true&quot;).<br/><br/><span class="col-red"><strong>ATTENZIONE :</strong></span> Questa funzione impedisce che l\'ID di sessione sia presente nell\'URL.');
define('SESSION_CHECK_SSL_SESSION_ID_TITLE', 'Verifica dell\'ID di sessione SSL');
define('SESSION_CHECK_SSL_SESSION_ID_DESC', 'Controlla l\'SSL_SESSION_ID per ogni chiamata alla pagina HTTPS (l\'impostazione predefinita è &quot;false&quot;)' . SESSION_WARNING);
define('SESSION_CHECK_USER_AGENT_TITLE', 'Verifica dell\'agente utente');
define('SESSION_CHECK_USER_AGENT_DESC', 'Controlla l\'agente utente del browser dell\'utente ogni volta che viene visualizzata una pagina (l\'impostazione predefinita è &quot;false&quot;)' . SESSION_WARNING);
define('SESSION_CHECK_IP_ADDRESS_TITLE', 'Verifica dell\'indirizzo IP');
define('SESSION_CHECK_IP_ADDRESS_DESC', 'Controlla l\'indirizzo IP dell\'utente ogni volta che si accede alla pagina (l\'impostazione predefinita è &quot;false&quot;)' . SESSION_WARNING);
define('SESSION_RECREATE_TITLE', 'Rinnova la sessione');
define('SESSION_RECREATE_DESC', 'Aggiorna la sessione e assegna un nuovo ID di sessione ogni volta che un utente accede o si registra (è necessario PHP &gt;=4.1). (predefinito &quot;falso&quot;)' . SESSION_WARNING);
define('SESSION_DELETE_OLD_COOKIES_TITLE', 'L&ouml;schen del cookie di sessione');
define('SESSION_DELETE_OLD_COOKIES_DESC', 'I vecchi cookie di sessione devono essere cancellati? Dopo l\'aggiornamento ad una versione del negozio &lt;= 2.0.1.0, si consiglia di attivare questa opzione (l\'impostazione predefinita è &quot;false&quot;).' . SESSION_WARNING);

define('DISPLAY_CONDITIONS_ON_CHECKOUT_TITLE', 'Visualizzazione del GTC');
define('DISPLAY_CONDITIONS_ON_CHECKOUT_DESC', 'Consulti le GTC durante il processo di ordinazione.');
define('SIGN_CONDITIONS_ON_CHECKOUT_TITLE', 'Firma del GTC');
define('SIGN_CONDITIONS_ON_CHECKOUT_DESC', 'Firmi le CGC durante il processo di ordinazione.<br/><b>Nota:</b> "Visualizza GTC" deve essere attivo.');

define('META_MIN_KEYWORD_LENGTH_TITLE', 'Lunghezza minima delle meta parole chiave');
define('META_MIN_KEYWORD_LENGTH_DESC', 'Lunghezza minima delle meta parole chiave generate automaticamente (descrizione dell\'articolo)');
define('META_KEYWORDS_NUMBER_TITLE', 'Numero di meta-parole chiave');
define('META_KEYWORDS_NUMBER_DESC', 'Numero di meta-parole chiave');
define('META_AUTHOR_TITLE', 'autore');
define('META_AUTHOR_DESC', '<meta name="author">');
define('META_PUBLISHER_TITLE', 'editore');
define('META_PUBLISHER_DESC', '<meta name="publisher">');
define('META_COMPANY_TITLE', 'azienda');
define('META_COMPANY_DESC', '<meta name="company">');
define('META_TOPIC_TITLE', 'pagina tematica');
define('META_TOPIC_DESC', '<meta name="page-topic">');
define('META_REPLY_TO_TITLE', 'il risponditore ha');
define('META_REPLY_TO_DESC', '<meta name="reply-to">');
define('META_REVISIT_AFTER_TITLE', 'rivisitare-dopo');
define('META_REVISIT_AFTER_DESC', '<meta name="revisit-after">');
define('META_ROBOTS_TITLE', 'robot');
define('META_ROBOTS_DESC', '<meta name="robots">');
define('META_DESCRIPTION_TITLE', 'Descrizione');
define('META_DESCRIPTION_DESC', '<meta name="description">');
define('META_KEYWORDS_TITLE', 'Parole chiave');
define('META_KEYWORDS_DESC', '<meta name="keywords">');

define('MODULE_PAYMENT_INSTALLED_TITLE', 'Moduli di pagamento installati');
define('MODULE_PAYMENT_INSTALLED_DESC', 'Elenco dei nomi dei file del modulo di pagamento (separati da un punto e virgola ( ;)). Viene aggiornato automaticamente, quindi non è necessario modificarlo (esempio: cc.php;cod.php;paypal.php).');
define('MODULE_ORDER_TOTAL_INSTALLED_TITLE', 'Ordine installato Moduli totali');
define('MODULE_ORDER_TOTAL_INSTALLED_DESC', 'Elenco dei nomi dei file del modulo Total-Order (separati da un punto e virgola ( ;)). Viene aggiornato automaticamente, quindi non è necessario modificarlo (esempio: ot_subtotal.php;ot_tax.php;ot_shipping.php;ot_total.php).');
define('MODULE_SHIPPING_INSTALLED_TITLE', 'Moduli di spedizione installati');
define('MODULE_SHIPPING_INSTALLED_DESC', 'Elenco dei nomi dei file del modulo di spedizione (separati da un punto e virgola ( ;)). Viene aggiornato automaticamente, quindi non è necessaria alcuna modifica (esempio: ups.php;flat.php;item.php).');

define('CACHE_LIFETIME_TITLE', 'Durata della cache del modello');
define('CACHE_LIFETIME_DESC', 'Tempo in secondi prima che i file della cache dei modelli vengano sovrascritti automaticamente.');
define('CACHE_CHECK_TITLE', 'Comprobar nascosto dalla plantilla');
define('CACHE_CHECK_DESC', 'Quando è abilitata, le intestazioni If-Modified-Since vengono prese in considerazione per i contenuti in cache e vengono emesse le intestazioni HTTP corrispondenti. Ciò significa che le pagine consultate regolarmente non vengono trasmesse al cliente ogni volta.');

define('PRODUCT_REVIEWS_VIEW_TITLE', 'Commenti nei dettagli dell\'articolo');
define('PRODUCT_REVIEWS_VIEW_DESC', 'Numero di avvisi visualizzati nella vista dei dettagli dell\'articolo');

define('DELETE_GUEST_ACCOUNT_TITLE', 'Eliminare gli account degli ospiti');
define('DELETE_GUEST_ACCOUNT_DESC', 'Gli account degli ospiti devono essere cancellati dopo aver effettuato un ordine (i dati dell\'ordine rimangono)?');

define('USE_WYSIWYG_TITLE', 'Attivare l\'editor WYSIWYG');
define('USE_WYSIWYG_DESC', 'Abilita l\'editor WYSIWYG per il CMS e gli articoli?');

define('PRICE_IS_BRUTTO_TITLE', 'Admin moche');
define('PRICE_IS_BRUTTO_DESC', 'Consente di inserire i prezzi lordi in l\'Admin.');

define('PRICE_PRECISION_TITLE', 'Decimali lordi/netti');
define('PRICE_PRECISION_DESC', 'Precisione di conversione (non influenza la visualizzazione nel caricatore, 2 cifre decimali sono sempre visualizzate nel caricatore).');

define('CHECK_CLIENT_AGENT_TITLE', 'Evita le sessioni di spider?');
define('CHECK_CLIENT_AGENT_DESC', 'Consentire ai robot di indicizzazione dei motori di ricerca conosciuti di accedere al sito senza una sessione.');
define('SHOW_IP_LOG_TITLE', 'Registrazione della proprietà intellettuale nella scatola?');
define('SHOW_IP_LOG_DESC', 'Visualizzare il testo "Il suo IP sarà registrato per motivi di sicurezza" al momento del pagamento?');

define('ACTIVATE_GIFT_SYSTEM_TITLE', 'Attivare il sistema di voucher?');
define('ACTIVATE_GIFT_SYSTEM_DESC', 'Attivare il sistema di coupon?<br/><b>Nota:</b> l\'ot_coupon <a href="\' . xtc_href_link(FILENAME_MODULES, \'set=ordertotal&module=ot_coupon\') . \'"><b>qui</b></a> e ot_gv <a href="\' . xtc_href_link(FILENAME_MODULES, \'set=ordertotal&module=ot_gv\') . \'"><b>qui</b></a> deve essere attivato.');

define('SECURITY_CODE_LENGTH_TITLE', 'Lunghezza del codice del buono');
define('SECURITY_CODE_LENGTH_DESC', 'Inserisca qui la lunghezza del codice del buono (massimo 16 caratteri).');

define('NEW_SIGNUP_GIFT_VOUCHER_AMOUNT_TITLE', 'Valore del buono regalo di benvenuto');
define('NEW_SIGNUP_GIFT_VOUCHER_AMOUNT_DESC', 'Valore del buono del regalo di benvenuto: se non desidera inviare un buono nell\'e-mail di benvenuto, inserisca qui 0, altrimenti inserisca il valore del buono, ad esempio 10,00 o 50,00, ma senza i simboli di valuta. Il codice del buono verrà creato automaticamente dal negozio.<br /><b>Nota:</b> in "Impostazioni" -&gt; <a href="\' . xtc_href_link(FILENAME_CONFIGURATION, \'gID=12\') . \'"><strong>Opzioni e-mail", deve impostare "E-mail alla creazione dell\'account" su "Sì".</strong></a> deve impostare "Email alla creazione dell\'account" su "Sì".');
define('NEW_SIGNUP_DISCOUNT_COUPON_TITLE', 'Codice sconto di benvenuto');
define('NEW_SIGNUP_DISCOUNT_COUPON_DESC', 'Codice coupon di benvenuto: se non desidera inviare un coupon nell\'e-mail di benvenuto, lasci questo campo vuoto; altrimenti, inserisca il codice coupon che desidera utilizzare.<br /><b>Nota:</b> in "Impostazioni" -&gt; <a href="\' . xtc_href_link(FILENAME_CONFIGURATION, \'gID=12\') . \'"><strong>"Opzioni e-mail".</strong></a> deve impostare "Email alla creazione dell\'account" su "Sì" e il codice coupon deve essere creato prima nell\'applicazione <a href="\' . xtc_href_link(FILENAME_COUPON_ADMIN) . \'"><b>Amministrazione dei coupon</b></a> deve essere creato.');

define('ACTIVATE_SHIPPING_STATUS_TITLE', 'Abilita la visualizzazione dello stato della spedizione?');
define('ACTIVATE_SHIPPING_STATUS_DESC', 'Attivare la visualizzazione dello stato di consegna? (È possibile impostare tempi di consegna diversi per ogni articolo. Dopo l\'attivazione, viene visualizzato un nuovo <b>Stato di consegna</b> dell\'articolo nella voce dell\'articolo).');

define('IMAGE_QUALITY_TITLE', 'Qualità dell\'immagine');
define('IMAGE_QUALITY_DESC', 'Qualità dell\'immagine (0=massima compressione, 100=migliore qualità)');

define('GROUP_CHECK_TITLE', 'Controllo del gruppo di clienti');
define('GROUP_CHECK_DESC', 'Consentire solo a determinati gruppi di clienti di accedere a singole categorie, prodotti, articoli di contenuto? (Dopo l\'attivazione, le opzioni di accesso appaiono per gli articoli, le categorie e nel gestore di contenuti).');

define('ACTIVATE_NAVIGATOR_TITLE', 'Attivare il browser degli articoli?');
define('ACTIVATE_NAVIGATOR_DESC', 'Abilita/disabilita il browser degli elementi nella vista dei dettagli dell\'elemento (per motivi di prestazioni con un numero elevato di elementi).');

define('QUICKLINK_ACTIVATED_TITLE', 'Attivazione della funzione multi-link/copia');
define('QUICKLINK_ACTIVATED_DESC', 'La funzione multi-link/copia facilita la copia/collegamento di un articolo in più categorie, con la possibilità di selezionare le singole categorie tramite una casella di controllo.');

define('ACTIVATE_REVERSE_CROSS_SELLING_TITLE', 'Marketing cruzado inverso');
define('ACTIVATE_REVERSE_CROSS_SELLING_DESC', 'Attivare la funzione di reverse cross marketing?');
define('ACTIVATE_CROSS_SELLING_TITLE', 'Marketing croisé');
define('ACTIVATE_CROSS_SELLING_DESC', 'Attivare la funzione di cross marketing?');

define('DOWNLOAD_UNALLOWED_PAYMENT_TITLE', 'Moduli di pagamento per download non autorizzati');
define('DOWNLOAD_UNALLOWED_PAYMENT_DESC', 'I metodi di pagamento <strong>NON</strong> sono consentiti per i prodotti scaricabili.');
define('DOWNLOAD_MIN_ORDERS_STATUS_TITLE', 'Stato dell\'ordine');
define('DOWNLOAD_MIN_ORDERS_STATUS_DESC', 'Stato dell\'ordine di avvio dei download richiesti.');

define('STORE_OWNER_VAT_ID_TITLE', 'Numero di partita IVA del gestore del negozio');
define('STORE_OWNER_VAT_ID_DESC', 'Il numero di partita IVA della sua azienda');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_TITLE', 'Stato del cliente per il numero di IVA dei clienti verificati (all\'estero)');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_DESC', 'Selezioni lo stato del cliente (gruppo) per i clienti il cui numero di partita IVA è controllato.');
define('ACCOUNT_COMPANY_VAT_CHECK_TITLE', 'Richiedere il numero di partita IVA');
define('ACCOUNT_COMPANY_VAT_CHECK_DESC', 'I clienti devono poter inserire il numero di partita IVA. Se è sbagliato, il campo di immissione non viene più visualizzato.');
define('ACCOUNT_COMPANY_VAT_LIVE_CHECK_TITLE', 'Verificare la plausibilità del numero di partita IVA online');
define('ACCOUNT_COMPANY_VAT_LIVE_CHECK_DESC', 'La plausibilità del numero di partita IVA viene verificata online. A tale scopo viene utilizzato il servizio web del portale fiscale dell\'UE<a href="http://ec.europa.eu/taxation_customs" style="font-style:italic">(http://ec.europa.eu/taxation_customs)</a>.<br/>Richiede PHP5 con il supporto "SOAP" abilitato!<br/><br/><span class="messageStackSuccess">Il supporto SOAP per PHP5 è attualmente \' . (in_array(\'soap\', get_loaded_extensions()) ? \'\' : \'<span class="messageStackError">NOT</span>\') . \' abilitato!</span><br/><br/>');
define('ACCOUNT_COMPANY_VAT_GROUP_TITLE', 'Regolare il controllo dei gruppi di clienti in base al numero di partita IVA?');
define('ACCOUNT_COMPANY_VAT_GROUP_DESC', 'Attivando questa opzione, il gruppo di clienti viene modificato dopo un controllo positivo del numero di partita IVA.');
define('ACCOUNT_VAT_BLOCK_ERROR_TITLE', 'Bloccare la registrazione di numeri IVA errati o non verificati?');
define('ACCOUNT_VAT_BLOCK_ERROR_DESC', 'Attivando questa opzione, vengono inseriti solo i numeri IVA verificati e corretti.');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_LOCAL_TITLE', 'Stato del cliente per il numero di IVA dei clienti verificati (nazionale)');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_LOCAL_DESC', 'Selezioni lo stato del cliente (gruppo) per i clienti il cui numero di partita IVA è controllato.');

define('GOOGLE_CONVERSION_TITLE', 'Tracciamento della conversione di Google');
define('GOOGLE_CONVERSION_DESC', 'Registrazione delle parole chiave di conversione degli ordini');
define('GOOGLE_CONVERSION_ID_TITLE', 'ID di conversione');
define('GOOGLE_CONVERSION_ID_DESC', 'Il suo ID di conversione Google');
define('GOOGLE_LANG_TITLE', 'Google Language');
define('GOOGLE_LANG_DESC', 'Codice ISO della lingua utilizzata');
define('GOOGLE_CONVERSION_LABEL_TITLE', 'Tag di conversione di Google');
define('GOOGLE_CONVERSION_LABEL_DESC', 'Il suo tag di conversione di Google');

define('AFTERBUY_ACTIVATED_TITLE', 'Attività');
define('AFTERBUY_ACTIVATED_DESC', 'Attivare l\'interfaccia post-acquisto');
define('AFTERBUY_PARTNERID_TITLE', 'Socio ID');
define('AFTERBUY_PARTNERID_DESC', 'Il suo ID partner Afterbuy');
define('AFTERBUY_PARTNERPASS_TITLE', 'Password del membro');
define('AFTERBUY_PARTNERPASS_DESC', 'La password del suo partner per l\'interfaccia XML di Afterbuy');
define('AFTERBUY_USERID_TITLE', 'ID utente');
define('AFTERBUY_USERID_DESC', 'Il suo ID utente Afterbuy');
define('AFTERBUY_ORDERSTATUS_TITLE', 'Stato dell\'ordine');
define('AFTERBUY_ORDERSTATUS_DESC', 'Stato dell\'ordine dopo la trasmissione dei dati dell\'ordine');
define('AFTERBUY_URL', 'Può trovare una descrizione di Afterbuy qui: <a href="http://www.afterbuy.de" target="new"> http://www.afterbuy.de.</a>');
define('AFTERBUY_DEALERS_TITLE', 'Marcatura come commerciante');
define('AFTERBUY_DEALERS_DESC', 'Inserisca gli ID gruppo degli esercenti che devono essere inseriti come esercenti in Afterbuy.<br />Esempio: <em>6,5,8</em>. Non ci devono essere spazi!');
define('AFTERBUY_IGNORE_GROUPE_TITLE', 'Ignora il gruppo di clienti');
define('AFTERBUY_IGNORE_GROUPE_DESC', 'Quali gruppi di clienti dovrebbero essere ignorati?<br />Esempio: <em>6,5,8</em>. Non ci dovrebbero essere spazi!');

define('SEARCH_MIN_LENGTH_TITLE', 'Cerca il numero di caratteri');
define('SEARCH_MIN_LENGTH_DESC', 'Numero minimo di caratteri da ricercare');
define('SEARCH_IN_DESC_TITLE', 'Cerca le descrizioni dei prodotti');
define('SEARCH_IN_DESC_DESC', 'Abilita l\'attivazione della ricerca nelle descrizioni dei prodotti (breve + lunga).');
define('SEARCH_IN_ATTR_TITLE', 'Ricerca negli attributi del prodotto');
define('SEARCH_IN_ATTR_DESC', 'Abilita per consentire la ricerca sugli attributi del prodotto (ad esempio, colore, lunghezza).');
define('SEARCH_IN_MANU_TITLE', 'Ricerca nel produttore');
define('SEARCH_IN_MANU_DESC', 'Attivare per abilitare la ricerca del produttore.');

define('ADMIN_SEARCH_IN_DESC_TITLE', 'Cerca le descrizioni dei prodotti');
define('ADMIN_SEARCH_IN_DESC_DESC', 'Abilita l\'attivazione della ricerca nelle descrizioni dei prodotti (breve + lunga).');
define('ADMIN_SEARCH_IN_ATTR_TITLE', 'Ricerca negli attributi del prodotto');
define('ADMIN_SEARCH_IN_ATTR_DESC', 'Abilita per consentire la ricerca sugli attributi del prodotto (ad esempio, colore, lunghezza).');

define('REVOCATION_ID_TITLE', 'Diritto di recesso');
define('REVOCATION_ID_DESC', 'Selezioni il contenuto per visualizzare il diritto di recesso.');
define('DISPLAY_REVOCATION_ON_CHECKOUT_TITLE', 'Visualizzare il diritto di recesso');
define('DISPLAY_REVOCATION_ON_CHECKOUT_DESC', 'Visualizzi il diritto di recesso in checkout_confirmation.<br/><b>Nota:</b> "Mostra T&amp;C" deve essere attivo.');

define('USE_ADMIN_TOP_MENU_TITLE', 'Navigazione superiore dell\'amministratore');
define('USE_ADMIN_TOP_MENU_DESC', 'Attivare la navigazione superiore dell\'amministratore? In caso contrario, il menu appare sul bordo sinistro (classico).');
define('USE_ADMIN_LANG_TABS_TITLE', 'Fogli di lingua per categorie/articoli');
define('USE_ADMIN_LANG_TABS_DESC', 'Abilita le schede delle lingue nei campi di inserimento delle categorie e degli articoli?');
define('USE_ADMIN_THUMBS_IN_LIST_TITLE', 'Immagini dell\'elenco dei prodotti');
define('USE_ADMIN_THUMBS_IN_LIST_DESC', 'Visualizzare una colonna aggiuntiva con le immagini di categoria/articolo nell\'elenco dei prodotti dell\'amministratore?');
define('USE_ADMIN_THUMBS_IN_LIST_STYLE_TITLE', 'Elenchi di prodotti Immagini stile CSS');
define('USE_ADMIN_THUMBS_IN_LIST_STYLE_DESC', 'Qui si possono inserire semplici specifiche di stile CSS - ad esempio, per la larghezza massima: max-width:90px ;');

define('DELETE_CACHE_SUCCESSFUL', 'La cache è stata cancellata con successo.');
define('DELETE_TEMP_CACHE_SUCCESSFUL', 'La cache del modello è stata cancellata con successo.');

define('PRODUCT_IMAGE_NO_ENLARGE_UNDER_DEFAULT_TITLE', 'Ridimensionamento delle immagini a bassa risoluzione');
define('PRODUCT_IMAGE_NO_ENLARGE_UNDER_DEFAULT_DESC', 'Abiliti l\'opzione <strong>No</strong> per evitare che le immagini dei prodotti a bassa risoluzione vengano scalate ai valori di larghezza e altezza predefiniti. Se attiva l\'opzione <strong>Sì</strong>, anche le immagini a bassa risoluzione saranno ridimensionate ai valori di dimensione standard dell\'immagine impostati. In questo caso, però, queste immagini potrebbero essere molto sfocate e pixelate.');

define('SHOW_BUTTON_BUY_NOW_TITLE', 'Visualizzi il pulsante "carrello" negli elenchi di prodotti.');
define('SHOW_BUTTON_BUY_NOW_DESC', '<span class="col-red"><strong>ATTENZIONE:</strong></span> Ciò può comportare avvertimenti se tutte le caratteristiche essenziali dell\'articolo non sono presentate al cliente nelle pagine dell\'elenco dei prodotti.');

define('MAX_DISPLAY_LIST_PRODUCTS_TITLE', 'Numero di articoli per pagina');
define('MAX_DISPLAY_LIST_PRODUCTS_DESC', 'Numero massimo di voci da visualizzare nel sommario per pagina.');

define('WHOS_ONLINE_TIME_LAST_CLICK_TITLE', 'Chi è online - periodo di visualizzazione in secondi.');
define('WHOS_ONLINE_TIME_LAST_CLICK_DESC', 'Visualizza la durata degli utenti connessi nella tabella "Chi è online", dopo la quale le voci vengono eliminate (valore minimo: 900).');

define('SESSION_LIFE_ADMIN_TITLE', 'Durata della sessione amministrativa');
define('SESSION_LIFE_ADMIN_DESC', 'Tempo in secondi dopo il quale il tempo di sessione per gli amministratori scade (la sessione verrà scollegata) - default 7200<br />Il valore definito qui si applica solo se la gestione della sessione è guidata dal database. (configure.php =&gt; define(\'STORE_SESSIONS\', \'mysql\') ;)<br />Valore massimo: 14400');
define('SESSION_LIFE_CUSTOMERS_TITLE', 'Durata della sessione Clienti');
define('SESSION_LIFE_CUSTOMERS_DESC', 'Tempo in secondi dopo il quale scade il timeout della sessione per i client (la sessione verrà chiusa) - valore predefinito 1440<br />Il valore impostato qui si applica solo se la gestione della sessione è guidata dal database. (configure.php =&gt; define(\'STORE_SESSIONS\', \'mysql\') ;)<br />Valore massimo: 14400');

define('CHECKOUT_USE_PRODUCTS_SHORT_DESCRIPTION_TITLE', 'Breve descrizione nell\'ordine/conferma d\'ordine e nella pagina di conferma dell\'ordine?');
define('CHECKOUT_USE_PRODUCTS_SHORT_DESCRIPTION_DESC', 'Se si seleziona "Sì", la descrizione breve verrà visualizzata nei punti precedenti se la descrizione dell\'ordine è vuota.<br />Se anche la descrizione breve è vuota, viene utilizzata la descrizione lunga, abbreviata al numero di caratteri indicato sotto "Lunghezza della descrizione se la descrizione breve è vuota".');
define('CHECKOUT_USE_PRODUCTS_DESCRIPTION_FALLBACK_LENGTH_TITLE', 'Lunghezza della descrizione, se la descrizione breve è vuota');
define('CHECKOUT_USE_PRODUCTS_DESCRIPTION_FALLBACK_LENGTH_DESC', 'Quanto deve essere lunga la descrizione se non è disponibile una descrizione breve (il testo è completato con [...])<br />Si applica solo se<i>"Descrizione breve nella conferma d\'ordine/ordine e nella pagina di conferma dell\'ordine</i>" è impostato su "Sì" in precedenza.');
define('CHECKOUT_SHOW_PRODUCTS_IMAGES_TITLE', 'Pagina di conferma dell\'ordine: Immagini del prodotto');
define('CHECKOUT_SHOW_PRODUCTS_IMAGES_DESC', 'Le immagini degli articoli devono essere visualizzate nella pagina di conferma dell\'ordine?');
define('CHECKOUT_SHOW_PRODUCTS_MODEL_TITLE', 'Pagina di conferma dell\'ordine: Codice articolo.');
define('CHECKOUT_SHOW_PRODUCTS_MODEL_DESC', 'Il numero dell\'articolo deve apparire nella pagina di conferma dell\'ordine?');

define('EMAIL_BILLING_ATTACHMENTS_TITLE', 'Fatturazione degli ordini via e-mail ');
define('EMAIL_BILLING_ATTACHMENTS_DESC', 'Esempio per gli allegati - purché i file si trovino nella directory shop <b>/media/content/</b>. Separa gli allegati multipli con le virgole senza spazi:<br />media/content/agb.pdf,media/content/widerruf.pdf,media/content/datenschutz.pdf');

define('SHOW_IMAGES_IN_EMAIL_TITLE', 'Inserisca le immagini degli articoli nell\'e-mail dell\'ordine');
define('SHOW_IMAGES_IN_EMAIL_DESC', 'Includere le immagini degli articoli nell\'e-mail di conferma dell\'ordine in formato HTML (aumenta il rischio che l\'e-mail venga classificata come SPAM).');
define('SHOW_IMAGES_IN_EMAIL_DIR_TITLE', 'Cartella immagini e-mail ');
define('SHOW_IMAGES_IN_EMAIL_DIR_DESC', 'Selezione di cartelle di immagini');
define('SHOW_IMAGES_IN_EMAIL_STYLE_TITLE', 'Stile CSS delle immagini delle e-mail');
define('SHOW_IMAGES_IN_EMAIL_STYLE_DESC', 'Qui si possono inserire semplici specifiche di stile CSS - ad esempio, per la larghezza massima: max-width:90px ;');

define('POPUP_SHIPPING_LINK_PARAMETERS_TITLE', 'Impostazioni URL per la finestra pop-up delle spese di spedizione');
define('POPUP_SHIPPING_LINK_PARAMETERS_DESC', 'I parametri URL possono essere inseriti qui - default: &amp;KeepThis=true&amp;TB_iframe=true&amp;height=400&amp;width=600');
define('POPUP_SHIPPING_LINK_CLASS_TITLE', 'Classe CSS della finestra pop-up delle spese di spedizione');
define('POPUP_SHIPPING_LINK_CLASS_DESC', 'Le classi CSS possono essere inserite qui - predefinito: thickbox');
define('POPUP_CONTENT_LINK_PARAMETERS_TITLE', 'Pagine di contenuto Finestra pop-up Impostazioni URL');
define('POPUP_CONTENT_LINK_PARAMETERS_DESC', 'I parametri URL possono essere inseriti qui - default: &amp;KeepThis=true&amp;TB_iframe=true&amp;height=400&amp;width=600');
define('POPUP_CONTENT_LINK_CLASS_TITLE', 'Classe CSS del pop-up della pagina dei contenuti');
define('POPUP_CONTENT_LINK_CLASS_DESC', 'Le classi CSS possono essere inserite qui - predefinito: thickbox');
define('POPUP_PRODUCT_LINK_PARAMETERS_TITLE', 'Impostazioni URL per la finestra pop-up sulle pagine dei prodotti');
define('POPUP_PRODUCT_LINK_PARAMETERS_DESC', 'I parametri URL possono essere inseriti qui - default: &amp;KeepThis=true&amp;TB_iframe=true&amp;height=450&amp;width=750');
define('POPUP_PRODUCT_LINK_CLASS_TITLE', 'Classe CSS per la finestra pop-up nelle pagine dei prodotti');
define('POPUP_PRODUCT_LINK_CLASS_DESC', 'Le classi CSS possono essere inserite qui - predefinito: thickbox');
define('POPUP_COUPON_HELP_LINK_PARAMETERS_TITLE', 'Impostazioni dell\'URL per il pop-up di aiuto del coupon');
define('POPUP_COUPON_HELP_LINK_PARAMETERS_DESC', 'I parametri URL possono essere inseriti qui - default: &amp;KeepThis=true&amp;TB_iframe=true&amp;height=400&amp;width=600');
define('POPUP_COUPON_HELP_LINK_CLASS_TITLE', 'Classe CSS per la finestra pop-up del coupon');
define('POPUP_COUPON_HELP_LINK_CLASS_DESC', 'Le classi CSS possono essere inserite qui - predefinito: thickbox');
define('POPUP_PRODUCT_PRINT_SIZE_TITLE', 'Prodotto Visualizzazione stampa Dimensione finestra');
define('POPUP_PRODUCT_PRINT_SIZE_DESC', 'Qui può impostare la dimensione della finestra pop-up - default: width=640, height=600');
define('POPUP_PRINT_ORDER_SIZE_TITLE', 'Dimensione della finestra di stampa dell\'ordine');
define('POPUP_PRINT_ORDER_SIZE_DESC', 'Qui può impostare la dimensione della finestra pop-up - default: width=640, height=600');

define('TRACKING_COUNT_ADMIN_ACTIVE_TITLE', 'Conteggio delle impressioni di pagina dell\'operatore del negozio');
define('TRACKING_COUNT_ADMIN_ACTIVE_DESC', 'Se questa opzione è attivata, vengono conteggiati anche tutti gli accessi dell\'amministratore, il che (a causa della maggiore frequenza degli accessi al negozio) può distorcere le statistiche dei visitatori.');
define('TRACKING_GOOGLEANALYTICS_ACTIVE_TITLE', 'Abilita il tracciamento di Google Analytics');
define('TRACKING_GOOGLEANALYTICS_ACTIVE_DESC', 'Se questa opzione è attivata, tutte le visite al sito web vengono trasmesse a Google Analytics e possono essere valutate in seguito. Ciò richiede la creazione preliminare di un account con <a href="http://www.google.com/analytics/" target="_blank"><b>Google Analytics</b></a> è necessario.');
define('TRACKING_GOOGLEANALYTICS_ID_TITLE', 'Numero di account Google Analytics');
define('TRACKING_GOOGLEANALYTICS_ID_DESC', 'Inserisca il numero del suo account Google Analytics nel formato "UA-XXXXXXXX-X" che ha ricevuto dopo aver creato un account.');
define('TRACKING_PIWIK_ACTIVE_TITLE', 'Abilita il monitoraggio di Matomo Web Analytics');
define('TRACKING_PIWIK_ACTIVE_DESC', 'Per utilizzare Matomo, deve prima scaricarlo e installarlo sul suo spazio web, veda anche <a href="https://matomo.org/" target="_blank"><b>Matomo Web Analytics</b></a>. A differenza di Google Analytics, i dati vengono memorizzati localmente, vale a dire che lei, in quanto gestore del negozio, ha la sovranità su questi dati.');
define('TRACKING_PIWIK_LOCAL_PATH_TITLE', 'directory di installazione di Matomo (senza "http://")');
define('TRACKING_PIWIK_LOCAL_PATH_DESC', 'Inserisca qui la directory una volta che Matomo è stato installato con successo. Inserisca il nome del dominio completo senza "http://" come percorso, ad esempio "www.example.com/matomo".');
define('TRACKING_PIWIK_ID_TITLE', 'Pagina ID di Matomo');
define('TRACKING_PIWIK_ID_DESC', 'Nell\'interfaccia di amministrazione di Matomo, viene assegnato un ID a ciascun dominio creato (di solito "1").');
define('TRACKING_PIWIK_GOAL_TITLE', 'Numero di campagna Matomo (opzionale)');
define('TRACKING_PIWIK_GOAL_DESC', 'Inserisca qui un numero di campagna se desidera tracciare obiettivi predefiniti. Dettagli vedere <a href="https://matomo.org/docs/tracking-goals-web-analytics/" target="_blank"><b>Matomo: Monitoraggio mirato delle conversioni</b></a>');

define('CONFIRM_SAVE_ENTRY_TITLE', 'Avviso di conferma durante la registrazione di articoli/categorie');
define('CONFIRM_SAVE_ENTRY_DESC', 'Dovrebbe esserci una richiesta di conferma quando si registrano articoli/categorie? Valore predefinito: true');

define('WHOS_ONLINE_IP_WHOIS_SERVICE_TITLE', 'Chi è online - URL di ricerca Whois');
define('WHOS_ONLINE_IP_WHOIS_SERVICE_DESC', 'https://utrace.me/?query= o https://whois.domaintools.com/');

define('STOCK_CHECKOUT_UPDATE_PRODUCTS_STATUS_TITLE', 'Completamento dell\'ordine - Disattivazione degli articoli non disponibili a magazzino');
define('STOCK_CHECKOUT_UPDATE_PRODUCTS_STATUS_DESC', 'Un articolo esaurito (0 quantità in magazzino) deve essere disattivato automaticamente alla fine dell\'ordine? Allora l\'articolo non sarà più visibile nel negozio!<br />Per gli articoli che saranno presto di nuovo disponibili, l\'opzione deve essere impostata su "falso".');

define('SEND_EMAILS_DOUBLE_OPT_IN_TITLE', 'Doppio opt-in per la registrazione alla newsletter');
define('SEND_EMAILS_DOUBLE_OPT_IN_DESC', 'Se "vero", viene inviata al cliente un\'e-mail in cui deve confermare l\'iscrizione alla newsletter. Per farlo, deve attivare l\'invio di e-mail.');

define('USE_ADMIN_FIXED_TOP_TITLE', 'Admin Correggere l\'intestazione della pagina?');
define('USE_ADMIN_FIXED_TOP_DESC', 'L\'intestazione della pagina dovrebbe essere sempre visibile durante lo scorrimento?');
define('USE_ADMIN_FIXED_SEARCH_TITLE', 'Visualizzare la barra di ricerca dell\'amministratore?');
define('USE_ADMIN_FIXED_SEARCH_DESC', 'La barra di ricerca deve essere sempre visibile?');

define('SMTP_SECURE_TITLE', 'SMTP SICURO');
define('SMTP_SECURE_DESC', 'Il server SMTP richiede una connessione sicura? Può informarsi sulle impostazioni necessarie presso il suo provider.');

define('DISPLAY_ERROR_REPORTING_TITLE', 'Notifica di errore');
define('DISPLAY_ERROR_REPORTING_DESC', 'La segnalazione di bug deve essere visualizzata come un elenco formattato nel piè di pagina?');

define('DISPLAY_BREADCRUMB_OPTION_TITLE', 'Navigazione con percorso breadcrumb');
define('DISPLAY_BREADCRUMB_OPTION_DESC', '<strong>nome</strong><strong>:</strong> il nome completo dell\'articolo viene visualizzato nella navigazione breadcrumb.<br /><strong>modello:</strong> il numero dell\'articolo viene visualizzato nella navigazione breadcrumb, se disponibile. Altrimenti, ritorna al nome dell\'articolo.');

define('EMAIL_WORD_WRAP_TITLE', 'WordWrap per le e-mail basate sul testo');
define('EMAIL_WORD_WRAP_DESC', 'Inserisca il numero di caratteri su una riga nelle e-mail di testo prima che il testo venga avvolto (solo numeri interi).<br /><strong>Attenzione:</strong> un numero di caratteri superiore a 76 può far sì che le e-mail del negozio vengano classificate come SPAM da SpamAssassin! Maggiori informazioni <a href="http://wiki.apache.org/spamassassin/Rules/MIME_QP_LONG_LINE" target="_blank">qui</a>.');

define('ORDER_STATUSES_FOR_SALES_STATISTICS_TITLE', 'Filtro per le statistiche di rotazione');
define('ORDER_STATUSES_FOR_SALES_STATISTICS_DESC', 'Selezioni gli stati dell\'ordine da considerare per le statistiche sul fatturato nella pagina iniziale dell\'amministratore e nell\'elenco a discesa degli stati quando utilizza lo stato "Filtro statistiche sul fatturato".<br />(Per visualizzare solo la fatturazione effettiva, selezioni lo stato che viene utilizzato quando l\'ordine viene completato).<br /><b>Nota:</b> devono essere selezionati almeno due stati affinché il "Filtro statistiche di fatturazione" appaia nell\'elenco a discesa Statistiche di fatturazione. Altrimenti, lo stato desiderato può essere selezionato direttamente tramite l\'elenco a discesa.');

define('SAVE_IP_LOG_TITLE', 'Salvare l\'indirizzo IP');
define('SAVE_IP_LOG_DESC', 'L\'indirizzo IP deve essere memorizzato nel database?<br/>Con l\'opzione xxx, le ultime cifre dell\'IP vengono anonimizzate.');

define('META_MAX_KEYWORD_LENGTH_TITLE', 'Lunghezza massima delle meta parole chiave');
define('META_MAX_KEYWORD_LENGTH_DESC', 'Lunghezza massima delle meta parole chiave generate automaticamente (descrizione dell\'articolo)');
define('META_DESCRIPTION_LENGTH_TITLE', 'L&auml;nge Meta-Descrizione');
define('META_DESCRIPTION_LENGTH_DESC', 'Lunghezza massima della descrizione (in parole)');
define('META_STOP_WORDS_TITLE', 'Parole chiave');
define('META_STOP_WORDS_DESC', 'Inserisca qui le parole chiave in un elenco separato da virgole che non devono essere utilizzate.');
define('META_GO_WORDS_TITLE', 'Andare alle parole');
define('META_GO_WORDS_DESC', 'Inserisca qui le parole chiave sotto forma di elenco separato da virgole che sono esplicitamente consentite.');

define('CSV_TEXTSIGN_TITLE', 'Identificatore di testo');
define('CSV_TEXTSIGN_DESC', 'Ad esempio, " | <span style="color:#c00;">Se viene utilizzato un punto e virgola come separatore, l\'identificatore di testo deve essere "!</span>');
define('CSV_SEPERATOR_TITLE', 'Separatore');
define('CSV_SEPERATOR_DESC', 'Ad esempio: ; | <span style="color:#c00;">Se il campo di inserimento viene lasciato vuoto, la scheda verrà utilizzata di default durante l\'esportazione/importazione!</span>');
define('COMPRESS_EXPORT_TITLE', 'Kompresión');
define('COMPRESS_EXPORT_DESC', 'Compressione dei dati esportati');
define('CSV_CATEGORY_DEFAULT_TITLE', 'Categoria di importazione');
define('CSV_CATEGORY_DEFAULT_DESC', 'Tutti gli articoli che <b>non sono stati</b> assegnati ad una categoria nel file di importazione CSV e che non esistono ancora nel negozio saranno importati in questa categoria.<br/><b>Importante:</b> Se non desidera importare articoli senza categoria nel file di importazione CSV, selezioni la categoria "Top", in quanto non verranno importati articoli in questa categoria.');
define('CSV_CAT_DEPTH_TITLE', 'Categorie di prodotti');
define('CSV_CAT_DEPTH_DESC', 'Dove deve andare l\'albero delle categorie (ad esempio, configurazione standard 4: categoria principale e tre sottocategorie)<br />Questa configurazione è importante per importare correttamente le categorie create nel CSV. Lo stesso vale per l\'esportazione.<br /><span style="color:#c00;">Un numero superiore a 4 può comportare una perdita di prestazioni e potrebbe non essere adatto ai clienti.</span>');

define('MIN_GROUP_PRICE_STAFFEL_TITLE', 'Numero aggiuntivo Listino prezzi');
define('MIN_GROUP_PRICE_STAFFEL_DESC', 'Numero aggiuntivo di prezzi scalari visualizzati');

define('MODULE_CAPTCHA_ACTIVE_TITLE', 'Attivare il Captcha');
define('MODULE_CAPTCHA_ACTIVE_DESC', 'Per quali sezioni del negozio deve essere attivato il captcha?');
define('MODULE_CAPTCHA_LOGGED_IN_TITLE', 'Clienti registrati');
define('MODULE_CAPTCHA_LOGGED_IN_DESC', 'Visualizzazione del Captcha per i clienti registrati.');
define('MODULE_CAPTCHA_LOGIN_NUM_TITLE', 'Numero di tentativi di connessione');
define('MODULE_CAPTCHA_LOGIN_NUM_DESC', 'Numero di tentativi di accesso falliti prima che venga visualizzato il captcha.');
define('CAPTCHA_MOD_CLASS_TITLE', 'Modulo Captcha');
define('CAPTCHA_MOD_CLASS_DESC', 'Selezioni il modulo captcha da utilizzare. Si assicuri che anche il modulo sia installato.');
define('CFG_TXT_MODIFIED_CAPTCHA', 'Standard');
define('CFG_TXT_PHP_CAPTCHA', 'PhpCaptcha');

define('SHIPPING_STATUS_INFOS_TITLE', 'Tempi di consegna');
define('SHIPPING_STATUS_INFOS_DESC', 'Selezioni il contenuto per visualizzare le informazioni sui tempi di consegna.');

define('USE_SHORT_DATE_FORMAT_TITLE', 'Visualizzare la data in formato breve');
define('USE_SHORT_DATE_FORMAT_DESC', 'Visualizzare sempre la data nel formato breve: <b>01.03.2014</b> invece di <b>Sabato, 01 marzo 2014</b><br />Consigliato in caso di errori di visualizzazione con il formato lungo della data, come ad esempio una lingua errata o le virgole!');

define('MAX_DISPLAY_PRODUCTS_CATEGORY_TITLE', 'Numero massimo di articoli');
define('MAX_DISPLAY_PRODUCTS_CATEGORY_DESC', 'Numero massimo di articoli nella stessa categoria.');
define('MAX_DISPLAY_ADVANCED_SEARCH_RESULTS_TITLE', 'Numero di risultati della ricerca');
define('MAX_DISPLAY_ADVANCED_SEARCH_RESULTS_DESC', 'Numero massimo di elementi da visualizzare per pagina nei risultati della ricerca (advanced_search_result.php).');
define('MAX_DISPLAY_PRODUCTS_HISTORY_TITLE', 'Numero di storia');
define('MAX_DISPLAY_PRODUCTS_HISTORY_DESC', 'Visualizza il numero massimo di articoli visitati l\'ultima volta nell\'account.');

define('PRODUCT_IMAGE_SHOW_NO_IMAGE_TITLE', 'Articolo noimage.gif');
define('PRODUCT_IMAGE_SHOW_NO_IMAGE_DESC', 'Visualizzazione del file noimage.gif se non è stata specificata alcuna immagine dell\'articolo.');
define('CATEGORIES_IMAGE_SHOW_NO_IMAGE_TITLE', 'Categoria noimage.gif');
define('CATEGORIES_IMAGE_SHOW_NO_IMAGE_DESC', 'Visualizza il file noimage.gif se non è stata specificata alcuna immagine di categoria.');
define('MANUFACTURER_IMAGE_SHOW_NO_IMAGE_TITLE', 'Produttore noimage.gif');
define('MANUFACTURER_IMAGE_SHOW_NO_IMAGE_DESC', 'Visualizza l\'immagine noimage.gif se non è stata specificata alcuna immagine del produttore.');

define('MODULE_SMALL_BUSINESS_TITLE', 'Piccole imprese');
define('MODULE_SMALL_BUSINESS_DESC', 'Il negozio deve essere trasformato in una piccola impresa ai sensi del § 19 UStG?<br /><b>Importante:</b> Alla voce "Moduli" -&gt; "Panoramica", il modulo "ot_tax" deve essere <a href="\' . xtc_href_link(FILENAME_MODULES, \'set=ordertotal&module=ot_tax\') . \'"><b>aquí</b></a> deve essere disattivato o disinstallato. Inoltre, nell\'individuo <a href="\' . xtc_href_link(FILENAME_CUSTOMERS_STATUS, \'\') . \'"><b>Gruppi di clienti</b></a> "Prezzi IVA inclusa" deve essere impostato su "No".');

define('COMPRESS_HTML_OUTPUT_TITLE', 'Compressione HTML');
define('COMPRESS_HTML_OUTPUT_DESC', 'L\'output HTML del modello deve essere consegnato compresso?');
define('COMPRESS_STYLESHEET_TITLE', 'Compressione CSS');
define('COMPRESS_STYLESHEET_DESC', 'Deve essere consegnato un foglio di stile compresso?<br/><b>Attenzione:</b> funziona solo con un modello compatibile con la versione 2.0.0.0 o superiore del negozio!');
define('COMPRESS_JAVASCRIPT_TITLE', 'Compressione JavaScript');
define('COMPRESS_JAVASCRIPT_DESC', 'Deve essere consegnato un file JavaScript compresso?<br/><b>Attenzione:</b> questo funziona solo con un modello compatibile dalla versione 2.0.1.0 del negozio!');

define('USE_ATTRIBUTES_IFRAME_TITLE', 'Attributi e proprietà nell\'iframe');
define('USE_ATTRIBUTES_IFRAME_DESC', 'Apre la gestione degli attributi e delle proprietà degli articoli nella vista categoria/voce in un iframe.');

define('ADMIN_HEADER_X_FRAME_OPTIONS_TITLE', 'Admin Clickjacking Schutz');
define('ADMIN_HEADER_X_FRAME_OPTIONS_DESC', 'Protegga l\'area di amministrazione con l\'intestazione "X-Frame-Options : SAMEORIGIN<br>"Browser compatibili</br><br>: FF 3.6.9+ Chrome 4.1.249.1042+ IE 8+ Safari 4.0+ Opera 10.50+</br>.');

define('SEND_MAIL_ACCOUNT_CREATED_TITLE', 'Email di creazione dell\'account');
define('SEND_MAIL_ACCOUNT_CREATED_DESC', 'Deve essere inviata un\'e-mail al cliente quando viene creato un nuovo account cliente?');

define('STATUS_EMAIL_SENT_COPY_TO_ADMIN_TITLE', 'E-mail sul cambiamento di stato');
define('STATUS_EMAIL_SENT_COPY_TO_ADMIN_DESC', 'Deve essere inviata un\'e-mail all\'amministratore quando lo stato di un ordine viene modificato?');

define('ORDER_EMAIL_SEND_COPY_TO_ADMIN_TITLE', 'Conferma dell\'ordine via e-mail a l\'Admin');
define('ORDER_EMAIL_SEND_COPY_TO_ADMIN_DESC', 'Una copia della conferma dell\'ordine deve essere inviata all\'amministratore?');

define('STOCK_CHECK_SPECIALS_TITLE', 'Scopra le offerte speciali');
define('STOCK_CHECK_SPECIALS_DESC', 'Verifichi se ci sono ancora abbastanza offerte speciali disponibili per consegnare l\'ordine.<br/><br/><b>ATTENZIONE:</b> se le offerte speciali disponibili non sono sufficienti, l\'ordine può essere completato solo quando la quantità è stata ridotta.');

define('DOWNLOAD_SHOW_LANG_DROPDOWN_TITLE', 'Elenco a discesa dei Paesi nel carrello');
define('DOWNLOAD_SHOW_LANG_DROPDOWN_DESC', 'L\'elenco a discesa dei Paesi deve essere visualizzato nel carrello quando vengono acquistati solo articoli scaricabili?');

define('GUEST_ACCOUNT_EDIT_TITLE', 'Modifica degli account degli ospiti');
define('GUEST_ACCOUNT_EDIT_DESC', 'Gli ospiti possono visualizzare e modificare i dettagli del suo conto?');

define('EMAIL_SIGNATURE_ID_TITLE', 'Firma dell\'e-mail');
define('EMAIL_SIGNATURE_ID_DESC', 'Selezioni il contenuto da utilizzare come firma nelle e-mail dello shop.');

define('POLICY_MIN_LOWER_CHARS_TITLE', 'Password in minuscolo');
define('POLICY_MIN_LOWER_CHARS_DESC', 'Qual è il numero minimo di lettere minuscole richiesto nella password?');
define('POLICY_MIN_UPPER_CHARS_TITLE', 'Modifica della password');
define('POLICY_MIN_UPPER_CHARS_DESC', 'Qual è il numero minimo di lettere maiuscole richiesto nella password?');
define('POLICY_MIN_NUMERIC_CHARS_TITLE', 'Numeri di password');
define('POLICY_MIN_NUMERIC_CHARS_DESC', 'Qual è il numero minimo di cifre richiesto per la password?');
define('POLICY_MIN_SPECIAL_CHARS_TITLE', 'Caratteri speciali nella password');
define('POLICY_MIN_SPECIAL_CHARS_DESC', 'Quanti caratteri speciali deve contenere la password come minimo?');

define('SHOW_SHIPPING_EXCL_TITLE', 'Costi di spedizione più.');
define('SHOW_SHIPPING_EXCL_DESC', 'Visualizzazione dei costi di spedizione in più o in meno');

define('ACCOUNT_TELEPHONE_OPTIONAL_TITLE', 'Numero di telefono opzionale');
define('ACCOUNT_TELEPHONE_OPTIONAL_DESC', 'Il numero di telefono deve essere richiesto solo come opzione?');

define('TRACKING_GOOGLEANALYTICS_UNIVERSAL_TITLE', 'Google Universal Analytics');
define('TRACKING_GOOGLEANALYTICS_UNIVERSAL_DESC', 'Devo utilizzare il codice di Google Universal Analytics?<br/><b>Attenzione:</b> funziona solo con un modello compatibile con la versione 2.0.0.0 o superiore del negozio!');
define('TRACKING_GOOGLEANALYTICS_DOMAIN_TITLE', 'Domaine du cookie Google Universal Analytics');
define('TRACKING_GOOGLEANALYTICS_DOMAIN_DESC', 'Inserisca qui il dominio del suo cookie<i>(auto</i> o <i>example.com</i> o <i>www.example.com).</i> Funziona solo per Google Universal Analytics.');
define('TRACKING_GOOGLE_LINKID_TITLE', 'Google Universal Analytics/Google Analytics GTAG LinkID');
define('TRACKING_GOOGLE_LINKID_DESC', 'Può visualizzare informazioni separate per più link in una pagina che hanno tutti la stessa destinazione. Per esempio, se ci sono due link nella stessa pagina che portano entrambi alla pagina Contatti, vedrà informazioni separate sui clic per ciascun link. Funziona solo per Google Universal Analytics e Google Analytics GTAG.');
define('TRACKING_GOOGLE_DISPLAY_TITLE', 'Google Universal Analytics/Google Analytics GTAG Displayfeature');
define('TRACKING_GOOGLE_DISPLAY_DESC', 'Le sezioni demografiche e degli interessi includono una panoramica e nuovi report sulle performance per età, sesso e categorie di interessi. Funziona solo per Google Universal Analytics e Google Analytics GTAG.');
define('TRACKING_GOOGLE_ECOMMERCE_TITLE', 'Tracciamento e-commerce di Google');
define('TRACKING_GOOGLE_ECOMMERCE_DESC', 'Utilizzi il tracciamento dell\'e-commerce per vedere cosa acquistano i visitatori sul suo sito web o sulla sua app. Otterrà anche le seguenti informazioni:<br><br><strong>Prodotti:</strong> i prodotti acquistati, così come le quantità e le vendite generate da tali prodottiTransazioni<br><strong>:</strong> informazioni sulle vendite, le tasse, i costi di spedizione e le quantità per ogni transazioneTempo di<br><strong>acquisto: il</strong> numero di giorni e di visite, dalla campagna corrente alla fine della transazione</br></br>');
define('TRACKING_GOOGLEANALYTICS_GTAG_TITLE', 'Google Analytics GTAG');
define('TRACKING_GOOGLEANALYTICS_GTAG_DESC', 'Devo utilizzare il tag Google global site?');

define('NEW_ATTRIBUTES_STYLING_TITLE', 'Stilizzazione della gestione degli attributi');
define('NEW_ATTRIBUTES_STYLING_DESC', 'Abilita lo stile checkbox/uncheckbox nella gestione degli attributi? Impostare no/false se ci sono molti attributi e problemi di prestazioni.');

define('DB_CACHE_TYPE_TITLE', 'Motore di cache');
define('DB_CACHE_TYPE_DESC', 'Selezioni uno dei motori di caching disponibili.');

define('META_PRODUCTS_KEYWORDS_LENGTH_TITLE', 'Lunghezza dei termini di ricerca aggiuntivi');
define('META_PRODUCTS_KEYWORDS_LENGTH_DESC', 'Lunghezza massima dei termini di ricerca aggiuntivi (in lettere).');
define('META_KEYWORDS_LENGTH_TITLE', 'Lunghezza della meta-parola chiave');
define('META_KEYWORDS_LENGTH_DESC', 'Lunghezza massima delle parole chiave (in lettere).');
define('META_TITLE_LENGTH_TITLE', 'Lunghezza Meta-Titolo');
define('META_TITLE_LENGTH_DESC', 'Lunghezza massima del titolo (in lettere).');
define('META_CAT_SHOP_TITLE_TITLE', 'Categorie del negozio');
define('META_CAT_SHOP_TITLE_DESC', 'Aggiungere il titolo del negozio alle categorie?');
define('META_PROD_SHOP_TITLE_TITLE', 'Acquisti i prodotti del titolo');
define('META_PROD_SHOP_TITLE_DESC', 'Aggiungere il titolo del negozio ai prodotti?');
define('META_CONTENT_SHOP_TITLE_TITLE', 'Contenuto del titolo del negozio');
define('META_CONTENT_SHOP_TITLE_DESC', 'Aggiungere il titolo del negozio al contenuto?');
define('META_SPECIALS_SHOP_TITLE_TITLE', 'Offerte speciali dal titolo del negozio');
define('META_SPECIALS_SHOP_TITLE_DESC', 'Allegare il titolo del negozio alle offerte speciali?');
define('META_NEWS_SHOP_TITLE_TITLE', 'Titolo del negozio Nuovi prodotti');
define('META_NEWS_SHOP_TITLE_DESC', 'Aggiungere il titolo del negozio ai nuovi prodotti?');
define('META_SEARCH_SHOP_TITLE_TITLE', 'Cerchi i titoli nel negozio');
define('META_SEARCH_SHOP_TITLE_DESC', 'Aggiungere il titolo del negozio ai risultati della ricerca del negozio?');
define('META_OTHER_SHOP_TITLE_TITLE', 'Titolo del negozio altre pagine');
define('META_OTHER_SHOP_TITLE_DESC', 'Aggiungere il titolo del negozio a tutte le altre pagine?');
define('META_GOOGLE_VERIFICATION_KEY_TITLE', 'Chiave di verifica Google');
define('META_GOOGLE_VERIFICATION_KEY_DESC', '<meta name="google-site-verification">');
define('META_BING_VERIFICATION_KEY_TITLE', 'Chiave di verifica Bing');
define('META_BING_VERIFICATION_KEY_DESC', '<meta name="msvalidate.01">');

define('TRACKING_FACEBOOK_ACTIVE_TITLE', 'Abilitare il monitoraggio delle conversioni su Facebook');
define('TRACKING_FACEBOOK_ACTIVE_DESC', 'Se questa opzione è attivata, tutti gli acquisti vengono trasmessi a Facebook e possono essere valutati in seguito. Ciò richiede la creazione preliminare di un account con <a href="https://www.facebook.com" target="_blank"><b>Facebook</b></a> è necessario.<br/><b>Attenzione:</b> funziona solo con un modello compatibile con la versione dello shop 2.0.0.0 o superiore!');
define('TRACKING_FACEBOOK_ID_TITLE', 'ID di conversione di Facebook');
define('TRACKING_FACEBOOK_ID_DESC', 'Il suo ID di conversione di Facebook');

define('NEW_SELECT_CHECKBOX_TITLE', 'Stile dell\'area amministrativa');
define('NEW_SELECT_CHECKBOX_DESC', 'Nell\'area di amministrazione, attivi lo stile per le caselle di controllo/down?');
define('CSRF_TOKEN_SYSTEM_TITLE', 'Sistema di token di amministrazione');
define('CSRF_TOKEN_SYSTEM_DESC', 'Il sistema di token dovrebbe essere utilizzato nell\'amministrazione?<br/><b>Attenzione:</b> il sistema di token è stato introdotto per migliorare la sicurezza.');

define('DISPLAY_FILTER_INDEX_TITLE', 'Mostra i filtri per pagina - Articolo');
define('DISPLAY_FILTER_INDEX_DESC', 'Inserisca i valori possibili per la selezione, separati da virgole. Per tutti gli articoli, inserisca tutti.<br/>Es: 3,12,27,tutti');
define('DISPLAY_FILTER_SPECIALS_TITLE', 'Filtro di visualizzazione per pagina - Offerte speciali');
define('DISPLAY_FILTER_SPECIALS_DESC', 'Inserisca i valori possibili per la selezione, separati da virgole. Per tutti gli articoli, inserisca tutti.<br/>Es: 3,12,27,tutti');
define('DISPLAY_FILTER_PRODUCTS_NEW_TITLE', 'Mostra i filtri per pagina - Nuovi articoli');
define('DISPLAY_FILTER_PRODUCTS_NEW_DESC', 'Inserisca i valori possibili per la selezione, separati da virgole. Per tutti gli articoli, inserisca tutti.<br/>Es: 3,12,27,tutti');
define('DISPLAY_FILTER_ADVANCED_SEARCH_RESULT_TITLE', 'Mostra i filtri per pagina - Risultati della ricerca');
define('DISPLAY_FILTER_ADVANCED_SEARCH_RESULT_DESC', 'Inserisca i valori possibili per la selezione, separati da virgole. Per tutti gli articoli, inserisca tutti.<br/>Es: 4,12,32,tutti');

define('USE_BROWSER_LANGUAGE_TITLE', 'Passaggio automatico alla lingua del browser');
define('USE_BROWSER_LANGUAGE_DESC', 'Cambia automaticamente la lingua in base alla lingua del browser del cliente.');

define('WYSIWYG_SKIN_TITLE', 'Piel dell\'editor WYSIWYG');
define('WYSIWYG_SKIN_DESC', 'Selezioni la skin dell\'editor WYSIWYG.');

define('CHECK_CHEAPEST_SHIPPING_MODUL_TITLE', 'Preselezioni il metodo di spedizione più economico');
define('CHECK_CHEAPEST_SHIPPING_MODUL_DESC', 'Il metodo di spedizione più economico per il cliente deve essere preselezionato al momento del checkout?');

define('DISPLAY_PRIVACY_CHECK_TITLE', 'Firma di protezione dei dati');
define('DISPLAY_PRIVACY_CHECK_DESC', 'Riservatezza della firma durante la creazione dell\'account, il modulo di contatto, l\'iscrizione alla newsletter e il pagamento?');

define('SHOW_SELFPICKUP_FREE_TITLE', 'Modulo di spedizione "ritiro automatico" per "nessun costo di spedizione".');
define('SHOW_SELFPICKUP_FREE_DESC', 'Il modulo di spedizione "selfpickup" deve essere visualizzato quando viene raggiunto l\'importo definito nel modulo "spese di spedizione (ot_shiping)" per la "spedizione gratuita"?');

define('CHECK_FIRST_PAYMENT_MODUL_TITLE', 'Preselezioni la prima opzione di pagamento');
define('CHECK_FIRST_PAYMENT_MODUL_DESC', 'Il primo metodo di pagamento deve essere preselezionato per il cliente alla cassa?');

define('ATTRIBUTES_VALID_CHECK_TITLE', 'Attributi validieren');
define('ATTRIBUTES_VALID_CHECK_DESC', 'Controlla gli articoli nel carrello del cliente per verificare la presenza di attributi non più validi.<br/>(Questo può accadere se un cliente torna nel negozio dopo un lungo periodo di tempo e vuole acquistare un articolo che era stato lasciato nel carrello durante una visita precedente).<br/><b>Nota:</b> questo controllo deve essere disattivato per le estensioni che estendono successivamente gli attributi, ad esempio il campo di testo.');

define('ATTRIBUTE_MODEL_DELIMITER_TITLE', 'Codice articolo / Attributo Separatore');
define('ATTRIBUTE_MODEL_DELIMITER_DESC', 'Separatore tra il numero dell\'articolo e il numero dell\'articolo dell\'attributo.');

define('STORE_PAGE_PARSE_TIME_THRESHOLD_TITLE', 'Valore di soglia per risparmiare tempo di calcolo del layout');
define('STORE_PAGE_PARSE_TIME_THRESHOLD_DESC', 'Definisce il valore soglia in secondi oltre il quale deve essere scritta una voce per il tempo di calcolo del layout.');

define('SEARCH_IN_FILTER_TITLE', 'Cerca nelle proprietà degli articoli');
define('SEARCH_IN_FILTER_DESC', 'Abilita per attivare la ricerca nelle proprietà dell\'elemento.');
define('SEARCH_AC_STATUS_TITLE', 'Autocompletar Suche');
define('SEARCH_AC_STATUS_DESC', 'Attivare per abilitare la ricerca con completamento automatico.<br/><b>Attenzione:</b> funziona solo con un modello compatibile con la versione 2.0.0.0 o superiore dello shop!');
define('SEARCH_AC_MIN_LENGTH_TITLE', 'Numero di caratteri nella ricerca del completamento automatico');
define('SEARCH_AC_MIN_LENGTH_DESC', 'Quanti caratteri devono essere visualizzati nei primi risultati della ricerca?<br/><b>Attenzione:</b> questo funziona solo con un modello compatibile con la versione 2.0.0.0.0 del negozio!');
define('SEARCH_AC_CATEGORIES_TITLE', 'Elenco a discesa di categorie nel campo di ricerca');
define('SEARCH_AC_CATEGORIES_DESC', 'Abiliti questa opzione per visualizzare un elenco a discesa di categorie prima del campo di ricerca.');

define('DISPLAY_PRIVACY_ON_CHECKOUT_TITLE', 'Visualizzazione della protezione dei dati nella scatola');
define('DISPLAY_PRIVACY_ON_CHECKOUT_DESC', 'Dovrebbe essere inclusa nel riquadro anche una nota sulla protezione dei dati?<br/><b>Nota bene:</b> se deve essere visualizzata anche una casella di controllo, l\'opzione "Firma la riservatezza" deve essere impostata su "Sì".');
define('DISPLAY_REVOCATION_VIRTUAL_ON_CHECKOUT_TITLE', 'Visualizzare il diritto di recesso Download');
define('DISPLAY_REVOCATION_VIRTUAL_ON_CHECKOUT_DESC', 'Dovrebbe esserci una casella alla cassa che indica la scadenza del diritto di recesso?');
define('ORDER_STATUSES_DISPLAY_DEFAULT_TITLE', 'Visualizzare gli ordini');
define('ORDER_STATUSES_DISPLAY_DEFAULT_DESC', 'Quali ordini devono essere visualizzati per impostazione predefinita?');

define('INVOICE_INFOS_TITLE', 'Dettagli della fattura');
define('INVOICE_INFOS_DESC', 'Selezioni una pagina di contenuti. Il contenuto appare sulla stampa della fattura.');

define('CATEGORIES_SHOW_PRODUCTS_SUBCATS_TITLE', 'Mostra gli articoli nella sottocategoria');
define('CATEGORIES_SHOW_PRODUCTS_SUBCATS_DESC', 'Tutti gli articoli delle sottocategorie esistenti devono essere elencati?');

define('SEO_URL_MOD_CLASS_TITLE', 'Modulo URL');
define('SEO_URL_MOD_CLASS_DESC', 'Selezioni un modulo URL.');

define('MODULE_BANNER_MANAGER_STATUS_TITLE', 'Responsabile Banner');
define('MODULE_BANNER_MANAGER_STATUS_DESC', 'Manager Banner attivo?');

define('MODULE_NEWSLETTER_STATUS_TITLE', 'Newsletter');
define('MODULE_NEWSLETTER_STATUS_DESC', 'Attivare il sistema di newsletter?');

define('EMAIL_ARCHIVE_ADDRESS_TITLE', 'Archivi - Indirizzo e-mail');
define('EMAIL_ARCHIVE_ADDRESS_DESC', 'Inserisca un indirizzo e-mail per archiviare tutti i messaggi in uscita. Questo invia le e-mail a una casella di posta elettronica di archivio tramite BCC.');

define('DISPLAY_HEADQUARTER_ON_CHECKOUT_TITLE', 'Sede centrale nell\'ufficio del cassiere');
define('DISPLAY_HEADQUARTER_ON_CHECKOUT_DESC', 'La sede legale dell\'azienda deve essere indicata sul registratore di cassa?');

define('MODULE_NEWSLETTER_VOUCHER_AMOUNT_TITLE', 'Valore del coupon della newsletter');
define('MODULE_NEWSLETTER_VOUCHER_AMOUNT_DESC', 'Per un buono al momento dell\'iscrizione alla newsletter, inserisca il valore del buono, altrimenti inserisca 0 qui.');
define('MODULE_NEWSLETTER_DISCOUNT_COUPON_TITLE', 'Code promo de la newsletter');
define('MODULE_NEWSLETTER_DISCOUNT_COUPON_DESC', 'Per ottenere un buono quando si iscrive alla newsletter, inserisca il codice del buono, altrimenti lasci questo campo vuoto.');
define('MODULE_NEWSLETTER_INFOS_TITLE', 'Informazioni sulla newsletter');
define('MODULE_NEWSLETTER_INFOS_DESC', 'Selezioni il contenuto da visualizzare come informazioni sul bollettino.');

define('ADMIN_START_TAB_SELECTED_TITLE', 'Pagina iniziale delle schede');
define('ADMIN_START_TAB_SELECTED_DESC', 'Quale scheda della homepage deve essere selezionata per impostazione predefinita?');

define('CACHE_LIFETIME_NOTE', '<b>Attenzione:</b> se la cache è attivata, le modifiche saranno visibili nel negozio solo dopo la scadenza della durata della cache!');

define('REVIEWS_PURCHASED_ONLY_TITLE', 'Controlla le classifiche');
define('REVIEWS_PURCHASED_ONLY_DESC', 'Le recensioni dovrebbero essere possibili solo se un cliente ha acquistato l\'articolo?');
define('REVIEWS_PURCHASED_INFOS_TITLE', 'Informazioni');
define('REVIEWS_PURCHASED_INFOS_DESC', 'Selezioni il contenuto che desidera visualizzare come informazione di rating di autenticità.');
