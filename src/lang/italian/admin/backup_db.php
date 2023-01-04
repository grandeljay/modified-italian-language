<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('HEADING_TITLE', 'Gestore del backup del database');

define('TEXT_INFO_DO_BACKUP', 'Il database è salvato!');
define('TEXT_INFO_DO_BACKUP_OK', 'Il backup del database è andato a buon fine.');
define('TEXT_INFO_DO_GZIP', 'Il file di backup è stato confezionato!');
define('TEXT_INFO_WAIT', 'Per favore, aspetti!');

define('TEXT_INFO_DO_RESTORE', 'Il database è stato ripristinato!');
define('TEXT_INFO_DO_RESTORE_OK', 'Il database è stato ripristinato con successo!');
define('TEXT_INFO_DO_GUNZIP', 'Il file di backup è decompresso!');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Errore: la directory per il backup non esiste. Corregga l\'errore nel suo configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Errore: Impossibile scrivere nella directory di backup.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Errore: il link per il download non è accettabile.');
define('ERROR_DECOMPRESSOR_NOT_AVAILABLE', 'Errore: non è disponibile un decompressore adatto.');
define('ERROR_UNKNOWN_FILE_TYPE', 'Errore: Tipo di file sconosciuto.');
define('ERROR_RESTORE_FAILES', 'Errore: il ripristino non è riuscito.');
define('ERROR_DATABASE_SAVED', 'Errore: non è stato possibile salvare il database.');
define('ERROR_TEXT_PATH', 'Errore: Il percorso di mysqldump non è stato trovato o specificato!');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Corretto: la data dell\'ultimo restauro è stata rimossa.');
define('SUCCESS_DATABASE_SAVED', 'Corretto: il database è stato sottoposto a backup.');
define('SUCCESS_DATABASE_RESTORED', 'Successo: il database è stato ripristinato.');
define('SUCCESS_BACKUP_DELETED', 'Successo: il backup è stato eliminato.');

define('TEXT_BACKUP_UNCOMPRESSED', 'Il file di backup è stato decompresso: ');

define('TEXT_SIMULATION', '<br>(Simulazione con file di log)');
