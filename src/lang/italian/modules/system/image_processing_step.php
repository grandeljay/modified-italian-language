<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define(
    'MODULE_STEP_IMAGE_PROCESS_TEXT_DESCRIPTION',
    'Tutte le immagini nelle directory<br /><br />
        /images/product_images/popup_images/<br />
        /images/product_images/info_images/<br />
        /images/product_images/midi_images/<br />
        /images/product_images/thumbnail_images/<br />
        /images/product_images/mini_images/<br />
        /images/categories/<br />
        /images/manufacturers/<br />
        /images/banner/<br />

    viene ricreato.<br /> <br />
    A tal fine, lo script elabora solo un numero limitato di immagini %s e poi se ne ricorda.<br /><br />'
);
define('MODULE_STEP_IMAGE_PROCESS_TEXT_TITLE', 'Elaborazione delle immagini');
define('MODULE_STEP_IMAGE_PROCESS_STATUS_DESC', 'Stato del modulo');
define('MODULE_STEP_IMAGE_PROCESS_STATUS_TITLE', 'Stato del modulo');
define('IMAGE_EXPORT', 'Fare clic su Avvia per avviare l\'elaborazione batch. Questo processo può richiedere un po\' di tempo: non interrompete!');
define('IMAGE_EXPORT_TYPE', '<hr noshade><strong>Elaborazione in lotti :</strong>');

define('IMAGE_STEP_INFO', 'Immagini create :');
define('IMAGE_STEP_INFO_READY', ' - Pronti!');
define('TEXT_MAX_IMAGES', '<b>Immagini per ricarica della pagina :</b>');
define('TEXT_PROCESS_TYPE', '<b>Elaborazione delle immagini :</b>');
define('TEXT_SETTINGS', '<b>Regolazioni :</b>');
define('TEXT_LOGGING', '<b>Si prega di registrarsi:</b>');
define('TEXT_ONLY_MISSING_IMAGES', 'Creare solo le immagini mancanti');
define('MODULE_STEP_READY_STYLE_TEXT', '<div class="ready_info">%s</div>');
define('MODULE_STEP_READY_STYLE_BACK', MODULE_STEP_READY_STYLE_TEXT);
define('TEXT_LOWER_FILE_EXT', 'Convertire l\'estensione del file in minuscolo, ad esempio :<b> JPG -&gt; jpg</b>');
define('IMAGE_COUNT_INFO', 'Numero di immagini in %s: %s pz.');

define('TEXT_PRODUCTS_MINI_IMAGES', 'Mini-box');
define('TEXT_PRODUCTS_THUMBNAIL_IMAGES', 'Miniature');
define('TEXT_PRODUCTS_MIDI_IMAGES', 'Immagini Midi');
define('TEXT_PRODUCTS_INFO_IMAGES', 'Foto informative');
define('TEXT_PRODUCTS_POPUP_IMAGES', 'Bilance a comparsa');

define('TEXT_CATEGORIES_IMAGES', 'Categoria Immagini');
define('TEXT_CATEGORIES_LIST_IMAGES', 'Elenco delle immagini della categoria');
define('TEXT_CATEGORIES_MOBILE_IMAGES', 'Categoria Foto mobili');

define('TEXT_BANNERS_IMAGES', 'Immagini del banner');
define('TEXT_BANNERS_MOBILE_IMAGES', 'Immagini banner per dispositivi mobili');

define('TEXT_MANUFACTURERS_IMAGES', 'Immagini del produttore');

define('TEXT_PRODUCTS', 'Articolo');
define('TEXT_CATEGORIES', 'Categorie');
define('TEXT_MANUFACTURERS', 'Fabricant');
define('TEXT_BANNERS', 'Bannière');

define('TEXT_LOGFILE', 'Abilita la registrazione, utile per la risoluzione dei problemi. Il file di log viene salvato nella cartella /log della home directory.');
