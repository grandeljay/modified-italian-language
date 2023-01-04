<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('HEADING_TITLE', 'Responsabile Banner');

define('TABLE_HEADING_BANNERS', 'Striscione');
define('TABLE_HEADING_GROUPS', 'Gruppo');
define('TABLE_HEADING_STATISTICS', 'Annunci / Clic');
define('TABLE_HEADING_STATUS', 'Stato');
define('TABLE_HEADING_ACTION', 'Azione');
define('TABLE_HEADING_LANGUAGE', 'Lingua');
define('TABLE_HEADING_SORT', 'Pida');
define('TABLE_HEADING_IMAGE', 'Imagen');

define('TEXT_BANNERS_TITLE', 'Titolo del banner :');
define('TEXT_BANNERS_URL', 'URL del banner :');
define('TEXT_BANNERS_URL_NOTE', 'URL di destinazione quando il banner viene cliccato.');
define('TEXT_BANNERS_REDIRECT', 'Pegno diretto :');
define('TEXT_BANNERS_REDIRECT_NOTE', 'Il banner è collegato direttamente all\'URL del banner specificato e non utilizzando "redirect.php?action=banner&amp;goto=xxx".<br /><strong>ATTENZIONE:</strong> gli "annunci/click" non possono più essere conteggiati se il "link diretto" è attivato!');
define('TEXT_BANNERS_GROUP', 'Gruppo Banner :');
define('TEXT_BANNERS_NEW_GROUP', 'Selezioni il gruppo banner desiderato dall\'elenco a discesa (se disponibile) o inserisca un nuovo gruppo banner qui sotto.');
define('TEXT_BANNERS_NEW_GROUP_NOTE', 'Affinché un banner appaia nel modello, il modello deve essere espanso.<br/>Esempio: il gruppo Banner è un banner, quindi può essere visualizzato nel template nell\'index.html con {$BANNER}.');
define('TEXT_BANNERS_IMAGE', 'Immagine (archivio) :');
define('TEXT_BANNERS_IMAGE_MOBILE', 'Immagine in movimento (archivio) :');
define('TEXT_BANNERS_IMAGE_LOCAL', 'Selezioni l\'immagine desiderata cliccando su "Sfoglia" o selezioni un banner esistente.<br /><strong>Tipi di file ammessi:</strong> jpg, jpeg, jpeg, gif, png, bmp, tiff, tif, bmp, swf, cab');
define('TEXT_BANNERS_IMAGE_TARGET', 'Destinazione immagine (Salva in) :');
define('TEXT_BANNERS_HTML_TEXT', 'Testi HTML :');
define('TEXT_BANNERS_HTML_TEXT_NOTE', 'Qui può inserire direttamente il codice HTML di un servizio di affiliazione per la visualizzazione del banner.');
define('TEXT_BANNERS_EXPIRES_ON', 'Valido fino a :');
define('TEXT_BANNERS_OR_AT', 'truffa');
define('TEXT_BANNERS_IMPRESSIONS', 'Materiale stampato/pubblicità.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Valido da :');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Commento del banner:</b><ul><li>Può utilizzare banner di immagini o banner di testo HTML, ma non è possibile utilizzare entrambi contemporaneamente.</li><li>Se utilizza entrambi i tipi di banner contemporaneamente, verrà visualizzato solo il banner di testo HTML.</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Nota:</b><ul><li>Deve avere accesso in scrittura alla directory delle immagini.</li><li>Non compili il campo "Destinazione immagine (salva su)" se non desidera copiare un\'immagine sul suo server (ad esempio, se l\'immagine è già presente sul server).</li><li>Il campo "Destinazione immagine (salva in)" deve essere una directory esistente con "/" alla fine (ad esempio, banner/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Commento sulla validità :</b><ul><li>Compili solo un campo.</li><li>Se il banner deve essere visualizzato a tempo indeterminato, lasci questi campi vuoti.</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Valido dal commento :</b><ul><li>Quando utilizza questa funzione, il banner verrà visualizzato solo a partire dalla data specificata.</li><li>Tutti i banner con questa funzione vengono visualizzati come disabilitati finché non vengono abilitati.</li></ul>');

define('TEXT_BANNERS_DATE_ADDED', 'aggiunto su :');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Valido da : <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Valido fino a : <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Valido fino a : <b>%s</b> impressioni/pubblicità');
define('TEXT_BANNERS_STATUS_CHANGE', 'Stato modificato : %s');

define('TEXT_BANNERS_DATA', 'D<br />A<br />T<br />E<br />N');
define('TEXT_BANNERS_LAST_3_DAYS', 'Ultimi 3 giorni');
define('TEXT_BANNERS_BANNER_VIEWS', 'Annunci');
define('TEXT_BANNERS_BANNER_CLICKS', 'Clicchi sul banner');
define('TEXT_BANNERS_SORT', 'Sequenza :');
define('TEXT_BANNERS_SORT_NOTE', 'Questo comando ha effetto solo sui cursori dinamici, non sui banner statici.');

define('TEXT_INFO_DELETE_INTRO', 'È sicuro di voler rimuovere questo banner?');
define('TEXT_INFO_DELETE_IMAGE', 'Borrar l\'immagine del banner');

define('SUCCESS_BANNER_INSERTED', 'Successo: il banner è stato inserito.');
define('SUCCESS_BANNER_UPDATED', 'Successo: il banner è stato aggiornato.');
define('SUCCESS_BANNER_REMOVED', 'Successo: il banner è stato rimosso.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Successo: lo stato del banner è stato aggiornato.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Errore: è necessario un titolo del banner.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Errore: è necessario un gruppo di banner.');
define('ERROR_BANNER_IMAGE_HTML_REQUIRED', 'Errore: è richiesta un\'immagine del banner o un testo HTML.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Errore: la directory di destinazione %s non esiste.');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Errore: la directory di destinazione %s non è scrivibile.');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Errore: l\'immagine non esiste.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Errore: impossibile eliminare l\'immagine.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Errore: flag di stato sconosciuto.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Errore : La directory \'grafici\' non esiste! Crei una directory \'grafici\' nella directory \'immagini\'.');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Errore: la directory \'grafici\' è protetta dalla scrittura!');

define('TEXT_BANNERS_DATE_FORMAT', 'AAAA-MM-DD');
define('TEXT_BANNERS_LANGUAGE', 'Lingua :');
define('TEXT_BANNERS_LANGUAGE_NOTE', 'In quale lingua deve apparire il banner?');
define('TEXT_NO_FILE', '-- nessun file --');
define('TEXT_BANNERS_LATEST_STATISTICS', 'giorni Statistiche');
