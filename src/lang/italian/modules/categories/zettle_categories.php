<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_TITLE', 'Zettle de PayPal');
define(
    'MODULE_CATEGORIES_ZETTLE_CATEGORIES_DESCRIPTION',
    'Sistemi moderni di registratori di cassa come applicazione per l\'accettazione dei pagamenti e il monitoraggio delle vendite: semplifichi la sua vita quotidiana con Zettle.<br>
    <br>Attualmente sono supportate le seguenti funzioni:
    <ul style="padding-left: 20px;">
    <li>Gli articoli vengono trasferiti dal negozio a Zettle</li>
    <li>Possibilità di creare un proprio gruppo di clienti per i prezzi degli articoli.</li>
    <li>Lo stock viene sincronizzato tra il negozio e Zettle su richiesta.</li>
    </ul>'
);

define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_BULK_TITLE', 'Importazioni alla rinfusa');
define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_BULK_DESC', 'L\'importazione massiva deve essere abilitata?<br><b>Nota:</b> questo richiede che un cronjob sia impostato sull\'URL ' . HTTP_SERVER . DIR_WS_CATALOG . 'api/zettle/cronjob.php viene creato.</br>');

define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_API_KEY_TITLE', 'Clave API');
define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_API_KEY_DESC', 'Inserisca la chiave API di Zettle.');

define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_LANGUAGE_TITLE', 'Lingua');
define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_LANGUAGE_DESC', 'Selezioni la lingua in cui vengono trasmessi gli articoli.');

define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_CUSTOMERS_STATUS_TITLE', 'Gruppo di clienti');
define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_CUSTOMERS_STATUS_DESC', 'Selezioni il gruppo di clienti per il trasferimento del prezzo.');

define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_BUTTON_API', 'Clé API Zettle erstellen');
