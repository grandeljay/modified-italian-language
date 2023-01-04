<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('MODULE_SHIPCLOUD_TEXT_TITLE', 'shipcloud - la nuova generazione di spedizioni di pacchi');
define('MODULE_SHIPCLOUD_TEXT_DESCRIPTION', 'Stampi comodamente le etichette delle confezioni dal negozio.');
define('MODULE_SHIPCLOUD_STATUS_TITLE', 'Stato');
define('MODULE_SHIPCLOUD_STATUS_DESC', 'Attivare il modulo');
define('MODULE_SHIPCLOUD_API_TITLE', '<hr noshade>API');
define('MODULE_SHIPCLOUD_API_DESC', 'Clave API de shipcloud');
define('MODULE_SHIPCLOUD_PARCEL_TITLE', '<hr noshade>Dimensioni dei contenitori');
define('MODULE_SHIPCLOUD_PARCEL_DESC', 'Inserisca le misure dei contenitori in cm, come indicato di seguito: Lunghezza, Larghezza, Altezza;<br/>Può separare diverse dimensioni di pacchi con un punto e virgola ( ;). Ad esempio: 20,40,30; 15,20,20,20,20;');
define('MODULE_SHIPCLOUD_COMPANY_TITLE', '<hr noshade>Dettagli del cliente<br/>');
define('MODULE_SHIPCLOUD_COMPANY_DESC', 'Firma :');
define('MODULE_SHIPCLOUD_FIRSTNAME_TITLE', '');
define('MODULE_SHIPCLOUD_FIRSTNAME_DESC', 'Numero di pila:');
define('MODULE_SHIPCLOUD_LASTNAME_TITLE', '');
define('MODULE_SHIPCLOUD_LASTNAME_DESC', 'Cognome :');
define('MODULE_SHIPCLOUD_ADDRESS_TITLE', '');
define('MODULE_SHIPCLOUD_ADDRESS_DESC', 'Indirizzo :');
define('MODULE_SHIPCLOUD_POSTCODE_TITLE', '');
define('MODULE_SHIPCLOUD_POSTCODE_DESC', 'PLZ :');
define('MODULE_SHIPCLOUD_CITY_TITLE', '');
define('MODULE_SHIPCLOUD_CITY_DESC', 'Città :');
define('MODULE_SHIPCLOUD_TELEPHONE_TITLE', '');
define('MODULE_SHIPCLOUD_TELEPHONE_DESC', 'Telefono :');
define('MODULE_SHIPCLOUD_ACCOUNT_IBAN_TITLE', '');
define('MODULE_SHIPCLOUD_ACCOUNT_IBAN_DESC', 'IBAN :');
define('MODULE_SHIPCLOUD_ACCOUNT_BIC_TITLE', '');
define('MODULE_SHIPCLOUD_ACCOUNT_BIC_DESC', 'BIC :');
define('MODULE_SHIPCLOUD_BANK_NAME_TITLE', '<hr noshade>Dettagli della banca<br/>');
define('MODULE_SHIPCLOUD_BANK_NAME_DESC', 'Banco :');
define('MODULE_SHIPCLOUD_BANK_HOLDER_TITLE', '');
define('MODULE_SHIPCLOUD_BANK_HOLDER_DESC', 'Titolare del conto :');
define('MODULE_SHIPCLOUD_LOG_TITLE', '<hr noshade>Registro');
define('MODULE_SHIPCLOUD_LOG_DESC', 'il file di registro viene memorizzato nella cartella /log.');
define('MODULE_SHIPCLOUD_EMAIL_TITLE', '<hr noshade>Notifica via e-mail');
define('MODULE_SHIPCLOUD_EMAIL_DESC', 'Il cliente deve essere informato via e-mail?');
define('MODULE_SHIPCLOUD_EMAIL_TYPE_TITLE', '<hr noshade>Notifica');
define('MODULE_SHIPCLOUD_EMAIL_TYPE_DESC', 'Il cliente deve essere informato dal negozio o da shipcloud?<br><b>&lt;Nota:</b>Per ricevere una notifica dal negozio, è necessario definire un webhook su questo URL:</br>' . ((defined('RUN_MODE_ADMIN') && function_exists('xtc_catalog_href_link')) ? xtc_catalog_href_link('callback/shipcloud/callback.php', '', 'SSL', false) : '') . ' sono stati definiti in shipcloud.');

define('SHIPMENT.TRACKING.SHIPCLOUD_LABEL_CREATED', 'Etichetta del pacchetto creata in shipcloud');
define('SHIPMENT.TRACKING.LABEL_CREATED', 'Creare un\'etichetta di pacchetto');
define('SHIPMENT.TRACKING.PICKED_UP', 'Pacco ritirato dal consegnatore');
define('SHIPMENT.TRACKING.TRANSIT', 'Il pacco è in arrivo');
define('SHIPMENT.TRACKING.OUT_FOR_DELIVERY', 'Il pacco viene consegnato');
define('SHIPMENT.TRACKING.DELIVERED', 'Pacchetto interlacciato');
define('SHIPMENT.TRACKING.AWAITS_PICKUP_BY_RECEIVER', 'In attesa del ritiro da parte dei clienti');
define('SHIPMENT.TRACKING.CANCELED', 'L\'etichetta sulla confezione era lucida');
define('SHIPMENT.TRACKING.DELAYED', 'Consegna ritardata');
define('SHIPMENT.TRACKING.EXCEPTION', 'È stato rilevato un problema');
define('SHIPMENT.TRACKING.NOT_DELIVERED', 'non emesso');
define('SHIPMENT.TRACKING.NOTIFICATION', 'Messaggio interno: gli eventi successivi all\'interno della partita richiedono informazioni più elaborate.');
define('SHIPMENT.TRACKING.UNKNOWN', 'Stato sconosciuto');
