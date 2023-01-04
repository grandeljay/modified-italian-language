<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('HEADING_TITLE', 'Eseguire il backup del database');

define('TABLE_HEADING_TITLE', 'Titolo');
define('TABLE_HEADING_FILE_DATE', 'Data');
define('TABLE_HEADING_FILE_SIZE', 'Gr&ouml;sse');
define('TABLE_HEADING_ACTION', 'Azione');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nuovo fusibile');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Ripristino locale');
define('TEXT_INFO_NEW_BACKUP', 'Non interrompa il processo di backup. Questa operazione potrebbe richiedere alcuni minuti.');
define('TEXT_INFO_UNPACK', '<br /><br />(dopo aver estratto i file dall\'archivio)');
define('TEXT_INFO_RESTORE', 'NON interrompa il processo di ripristino.<br /><br />Più grande è il file di backup, più lungo sarà il processo di ripristino.<br /><br />Utilizzi il client mysql, se possibile.<br /><br />Esempio:<br /><br /><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' &lt; %s %s </b> ');
define('TEXT_INFO_RESTORE_LOCAL', 'NON interrompa il processo di ripristino.<br /><br />Più grande è il file di backup, più tempo ci vorrà per il ripristino!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'Il file da caricare deve essere un file denominato raw sql (solo testo).');
define('TEXT_INFO_DATE', 'Data :');
define('TEXT_INFO_SIZE', 'Talla :');
define('TEXT_INFO_COMPRESSION', 'Comprima :');
define('TEXT_INFO_USE_GZIP', 'Con GZIP');
define('TEXT_INFO_USE_ZIP', 'Con ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Non compresso (SQL grezzo)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Solo download (non salvare sul server)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Utilizzi una connessione sicura HTTPS');
define('TEXT_NO_EXTENSION', 'No');
define('TEXT_BACKUP_DIRECTORY', 'Directory di backup :');
define('TEXT_LAST_RESTORATION', 'Ultimo restauro :');
define('TEXT_FORGET', '<u>(omis</u>)');
define('TEXT_DELETE_INTRO', 'È sicuro di voler eliminare questo backup?');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Errore: la directory di backup non esiste.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Errore: la directory di backup è protetta dalla scrittura.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Errore: il link per il download non è accettabile.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Successo: la data dell\'ultimo ripristino è stata cancellata.');
define('SUCCESS_DATABASE_SAVED', 'Successo: il database è stato sottoposto a backup.');
define('SUCCESS_DATABASE_RESTORED', 'Successo: il database è stato ripristinato.');
define('SUCCESS_BACKUP_DELETED', 'Successo: il file di backup è stato eliminato.');
define('SUCCESS_BACKUP_UPLOAD', 'Corretto: il file di backup è stato scaricato con successo.');

define('TEXT_COMPLETE_INSERTS', "<b>Completi 'INSERT</b><br> - I nomi dei campi sono inseriti in ogni riga INSERT (estende il salvataggio).");
define('TEXT_INFO_TABLES_IN_BACKUP', '<br />' . "\n" . '<b>tabelle in questo backup:</b>' . "\n");
define('TEXT_INFO_NO_INFORMATION', 'Nessuna informazione disponibile');
define('TEXT_CONVERT_TO_UTF', 'Convertire il database in UTF-8');
define('TEXT_IMPORT_UTF', 'Ripristina il database UTF-8');
define('TEXT_REMOVE_COLLATE', "<b>Nessuna codifica di caratteri 'COLLATE' e 'DEFAULT CHARSET'.</b><br> - Le informazioni sulla codifica dei caratteri non vengono inserite. Utile quando si migra a un'altra codifica di caratteri nel DB.");
define('TEXT_REMOVE_ENGINE', "<b>Nessun motore di stoccaggio MOTOR</b><br> - I dettagli del motore di archiviazione (MyISAM, InnoDB) non vengono inseriti.");

define('TEXT_IMPORT_UTF8_NOTICE', '<b>Attenzione:</b> il database sarà convertito in UTF-8.');
define('TEXT_INFO_CHARSET', 'Set di caratteri :');

define('TEXT_TABLES_BACKUP_TYPE', '<b>Copia di backup</b><br> - Quali tabelle devono essere sottoposte a backup?');
define('TEXT_BACKUP_ALL', 'Tutti i tavoli');
define('TEXT_BACKUP_CUSTOM', 'Vernici selezionate');
define('TEXT_TABLES_TO_BACKUP', '<b>È necessario conservare le seguenti tabelle:</b>');
define('TEXT_CHECK_ALL_TABLES', 'Seleziona tutte le tabelle');
