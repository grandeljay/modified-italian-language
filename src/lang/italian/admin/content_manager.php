<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

defined('HEADING_TITLE') || define('HEADING_TITLE', 'Sistema di gestione dei contenuti');
define('HEADING_CONTENT', 'Pagine di contenuto');
define('HEADING_PRODUCTS_CONTENT', 'Allegati all\'articolo');
define('HEADING_CONTENT_MANAGER_CONTENT', 'Contenuti Anh&auml;nge');
define('HEADING_EMAIL_CONTENT', 'Allegati alle e-mail');
define('TABLE_HEADING_CONTENT_ID', 'ID');
define('TABLE_HEADING_CONTENT_TITLE', 'Titolo');
define('TABLE_HEADING_CONTENT_FILE', 'Archivi');
define('TABLE_HEADING_CONTENT_STATUS', 'Visibile sulla scatola');
define('TABLE_HEADING_CONTENT_BOX', 'Scatola');
define('TABLE_HEADING_PRODUCTS_ID', 'ID');
define('TABLE_HEADING_PRODUCTS', 'Articolo');
define('TABLE_HEADING_MODEL', 'Numero dell\'articolo');
defined('TABLE_HEADING_IMAGE') || define('TABLE_HEADING_IMAGE', 'Imagen');
define('TABLE_HEADING_PRODUCTS_CONTENT_ID', 'ID');
define('TABLE_HEADING_CONTENT_MANAGER_ID', 'ID');
define('TABLE_HEADING_CONTENT_MANAGER', 'Pagine');
define('TABLE_HEADING_CONTENT_MANAGER_CONTENT_ID', 'ID');
define('TABLE_HEADING_EMAIL_ID', 'ID');
define('TABLE_HEADING_EMAIL', 'Indirizzo e-mail');
define('TABLE_HEADING_LANGUAGE', 'Lingua');
define('TABLE_HEADING_CONTENT_NAME', 'Numero');
define('TABLE_HEADING_CONTENT_LINK', 'Lien');
define('TABLE_HEADING_CONTENT_HITS', 'Colpi');
define('TABLE_HEADING_CONTENT_GROUP', 'coID');
define('TABLE_HEADING_CONTENT_SORT', 'Pida');
defined('TEXT_YES') || define('TEXT_YES', 'Oui');
defined('TEXT_NO') || define('TEXT_NO', 'Non');
define('TABLE_HEADING_CONTENT_ACTION', 'Azione');
defined('TEXT_DELETE') || define('TEXT_DELETE', 'Esercitazioni');
define('TEXT_EDIT', 'Edite');
define('TEXT_PREVIEW', 'Vista frontale');
define('CONFIRM_DELETE', 'Vuole davvero eliminare il contenuto?');
define('CONTENT_NOTE', 'Il contenuto contrassegnato con un <span class="col-red">*</span> appartiene al sistema e non può essere cancellato!');

defined('TEXT_DATE_ADDED') || define('TEXT_DATE_ADDED', 'Aggiunto su');
defined('TEXT_LAST_MODIFIED') || define('TEXT_LAST_MODIFIED', 'Pubblicato su');
defined('HEADING_TITLE_GOTO') || define('HEADING_TITLE_GOTO', 'Vai a :');
define('TEXT_DISPLAY_NUMBER_OF_CONTENT_MANAGER', 'Mostrato da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> contenuti)');
define('TEXT_INFO_HEADING_DELETE_CONTENT_MANAGER', 'Cancellare il contenuto');
defined('TEXT_INFO_DELETE_INTRO') || define('TEXT_INFO_DELETE_INTRO', 'È sicuro di voler eliminare questo contenuto?');
define('TEXT_SEARCH', 'Busk:');

define('TEXT_LANGUAGE', 'Lingua :');
define('TEXT_STATUS', 'Visibile :');
define('TEXT_STATUS_DESCRIPTION', 'Mostra il link nella casella informativa?');
define('TEXT_TITLE', 'Titolo :');
define('TEXT_TITLE_FILE', 'Titolo/cartella :');
define('TEXT_HEADING', 'Titolo :');
define('TEXT_CONTENT', 'Testi :');
define('TEXT_UPLOAD_FILE', 'Scarichi il file :');
define('TEXT_UPLOAD_FILE_LOCAL', '(dal suo sistema locale)');
define('TEXT_CHOOSE_FILE', 'Seleziona il file :');
define('TEXT_CHOOSE_FILE_DESC', 'Può anche selezionare un file già utilizzato dall\'elenco.');
defined('TEXT_NO_FILE') || define('TEXT_NO_FILE', 'Cancellare la selezione');
define('TEXT_CHOOSE_FILE_SERVER', '(Se ha salvato lei stesso i file tramite FTP sul suo server <i>(media/contenuti)</i>, può selezionare il file qui.');
define('TEXT_CURRENT_FILE', 'Archivi correnti :');
define('TEXT_FILE_DESCRIPTION', '<b>Informazioni:</b><br />Ha anche la possibilità di includere un file <b>.html</b> o <b>.htm</b> come contenuto.<br />Se seleziona o carica un file, ha la possibilità di creare del testo aggiuntivo nel campo di testo.<br />Questo testo apparirà davanti al testo del file caricato.<br />Se non desidera alcun testo aggiuntivo, lasci il campo di testo vuoto.');
define('ERROR_FILE', 'Formato di file errato (solo .html o .htm)');
define('ERROR_TITLE', 'Inserisca un titolo');
define('ERROR_COMMENT', 'Inserisca una descrizione del file');
define('TEXT_FILE_FLAG', 'Box :');
define('TEXT_PARENT', 'Documento principale :');
define('TEXT_PARENT_DESCRIPTION', 'Assegna questo documento come sottocontenuto');
define('TEXT_PRODUCT', 'Articolo :');
define('TEXT_LINK', 'Link :');
defined('TEXT_SORT_ORDER') || define('TEXT_SORT_ORDER', 'Classificazione :');
define('TEXT_GROUP', 'coID :');
define('TEXT_GROUP_DESC', 'Con questo identificatore, si collegano tra loro gli stessi soggetti di lingue diverse.');

define('TEXT_CONTENT_DESCRIPTION', 'Con questo gestore di contenuti, ha la possibilità di aggiungere qualsiasi tipo di file ad un articolo.<br />Ad esempio, descrizioni di articoli, manuali, schede tecniche, campioni audio, ecc. ......<br />Questi elementi vengono visualizzati nella vista dettagliata dell\'articolo.<br /><br />');
define('TEXT_CONTENT_MANAGER_CONTENT', 'Contenuti :');
define('TEXT_CONTENT_MANAGER_DESCRIPTION', 'Con questo gestore di contenuti, ha la possibilità di aggiungere qualsiasi tipo di file a un contenuto.<br />Ad esempio, PDF per i testi legali, ecc. .....<br />Questi elementi vengono visualizzati nella vista del contenuto.<br /><br />');
define('TEXT_EMAIL_CONTENT', 'Contenuto dell\'e-mail :');
define('TEXT_EMAIL_DESCRIPTION', 'Con questo gestore di contenuti, può aggiungere qualsiasi tipo di file a un\'e-mail come allegato.<br />Ad esempio, PDF per i testi legali, ecc. ....<br /><br />');

define('TEXT_FILENAME', 'Utilizzi il :');
define('TEXT_FILE_DESC', 'Descrizione:');
define('USED_SPACE', 'Spazio di archiviazione utilizzato :');
define('TABLE_HEADING_CONTENT_FILESIZE', 'Dimensione del file');
define('TEXT_CONTENT_NOINDEX', 'noindex (il motore di ricerca non deve includere il sito web nell\'indice).');
define('TEXT_CONTENT_NOFOLLOW', 'nofollow (il motore di ricerca può includere la pagina web, ma non deve seguire i collegamenti ipertestuali della pagina).');
define('TEXT_CONTENT_NOODP', 'noodp (Il motore di ricerca non deve utilizzare i testi di descrizione DMOZ (ODP) nella pagina dei risultati).');
define('TEXT_CONTENT_META_ROBOTS', 'Meta Robot');

define('TABLE_HEADING_STATUS_ACTIVE', 'Stato');
define('TEXT_STATUS_ACTIVE', 'Stato attivo :');
define('TEXT_STATUS_ACTIVE_DESCRIPTION', 'Attivare i contenuti?');

define('TEXT_CONTENT_DOUBLE_GROUP_INDEX', 'Indice del gruppo di contenuti duplicati! Si registri di nuovo. Questo risolverà automaticamente il problema.');
defined('TEXT_CHARACTERS') || define('TEXT_CHARACTERS', 'Personaggi');
define('TEXT_KEEP_FILENAME', 'Mantenga il nome del file :');
defined('TEXT_IMAGE_NONEXISTENT') || define('TEXT_IMAGE_NONEXISTENT', 'Nessuna foto disponibile');
define('TEXT_CONTENT_HELP', 'Per creare un nuovo allegato, utilizzi la ricerca');
