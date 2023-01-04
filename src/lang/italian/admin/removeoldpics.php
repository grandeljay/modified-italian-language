<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('HEADING_TITLE', 'Cancelli le immagini dei vecchi articoli');
define(
    'LINK_INFO_TEXT',
    '<p>Questa funzione può essere utilizzata per rimuovere le immagini dagli elementi superflui nelle directory :</p>
    - /images/product_images/info_images<br/>
    - /images/product_images/midi_images<br/>
    - /images/product_images/mini_images<br/>
    - /images/product_images/original_images<br/>
    - /images/product_images/popup_images<br/>
    - /images/product_images/thumbnail_images<br/>
  <p>saranno cancellate dal server web se non c\'è più un riferimento a queste immagini nel database.<br/>Se un\'immagine non è più utilizzata da alcun prodotto, può essere rimossa in modo sicuro dal server web.</p><br/>'
);
define('LINK_ORIGINAL', 'Cancellare le vecchie immagini originali');
define('LINK_POPUP', 'Cancellare le vecchie immagini pop-up');
define('LINK_INFO', 'Cancellare le vecchie foto informative');
define('LINK_MIDI', 'Cancellare le vecchie immagini Midi');
define('LINK_THUMBNAIL', 'Cancelli le vecchie miniature');
define('LINK_MINI', 'Cancelli le vecchie foto dal Mini');
define('LINK_MESSAGE', 'Le immagini non necessarie sono state rimosse dall\'articolo nella directory "/images/product_images/%s_images".');
define('LINK_MESSAGE_NO_DELETE', 'Non sono state trovate immagini di articoli superflui nella directory "/images/product_images/%s_images".');
