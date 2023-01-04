<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

require_once DIR_FS_CATALOG . 'api/it-recht-kanzlei/classes/class.api_it_recht_kanzlei.php';

$api_it_recht_kanzlei = new api_it_recht_kanzlei();

define('MODULE_API_IT_RECHT_KANZLEI_TEXT_TITLE', 'Interfaccia T&amp;C dello studio legale IT v' . $api_it_recht_kanzlei->modulversion);
define('MODULE_API_IT_RECHT_KANZLEI_TEXT_DESCRIPTION', 'IT-Recht Kanzlei - Aggiornatore automatico per testi legali automatici<br/><br/><b>IMPORTANTE:</b> prima di utilizzare il modulo, è necessario assegnare le pagine di contenuto.<hr noshade>');
define('MODULE_API_IT_RECHT_KANZLEI_STATUS_TITLE', 'Stato');
define('MODULE_API_IT_RECHT_KANZLEI_STATUS_DESC', 'Stato del modulo');
define('MODULE_API_IT_RECHT_KANZLEI_TOKEN_TITLE', 'Token di autenticazione');
define('MODULE_API_IT_RECHT_KANZLEI_TOKEN_DESC', 'Token di autenticazione che lei fornisce a IT-Recht Kanzlei.');
define('MODULE_API_IT_RECHT_KANZLEI_VERSION_TITLE', 'Versione dell\'API');
define('MODULE_API_IT_RECHT_KANZLEI_VERSION_DESC', 'Lo modifichi solo se l\'IT-Recht Kanzlei lo richiede (valore predefinito: 1.0).');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_AGB_TITLE', '<hr noshade>Testo legale GTC');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_AGB_DESC', 'La preghiamo di indicare in quale pagina questo testo legale deve essere inserito automaticamente.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_DSE_TITLE', 'Testo giuridico sulla protezione dei dati');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_DSE_DESC', 'La preghiamo di indicare in quale pagina questo testo legale deve essere inserito automaticamente.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_WRB_TITLE', 'Abrogazione del testo legale');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_WRB_DESC', 'La preghiamo di indicare in quale pagina questo testo legale deve essere inserito automaticamente.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_IMP_TITLE', 'Stampa di testi giuridici');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_IMP_DESC', 'La preghiamo di indicare in quale pagina questo testo legale deve essere inserito automaticamente.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_AGB_TITLE', '<hr noshade>Selezione GTC PDF Testo legale');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_AGB_DESC', 'Indichi se le CGT devono essere rese disponibili in formato PDF.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_DSE_TITLE', 'Selezione della protezione dei dati PDF Testo legale');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_DSE_DESC', 'Indichi se il testo sulla protezione dei dati deve essere disponibile in formato PDF.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_WRB_TITLE', 'Revoca della selezione PDF Testo legale');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_WRB_DESC', 'Indichi se il testo della revoca deve essere disponibile in formato PDF.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_FILE_TITLE', '<hr noshade>Magazzino PDF');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_FILE_DESC', 'Indicazione della posizione dei testi legali in PDF.');
