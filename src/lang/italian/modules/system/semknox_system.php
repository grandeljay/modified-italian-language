<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('MODULE_SEMKNOX_SYSTEM_TEXT_TITLE', 'Ricerca nel sito Ricerca di prodotti a 360°');
define('MODULE_SEMKNOX_SYSTEM_TEXT_DESCRIPTION', 'Generazione rivoluzionaria di ricerche di prodotti per la sua azienda, con preparazione dei dati completamente automatizzata.');
define('MODULE_SEMKNOX_SYSTEM_STATUS_TITLE', 'Stato del modulo');
define('MODULE_SEMKNOX_SYSTEM_STATUS_DESC', 'Attiva la Ricerca prodotti 360');
define('MODULE_SEMKNOX_SYSTEM_DEFAULT_CSS_TITLE', 'Standard CSS');
define('MODULE_SEMKNOX_SYSTEM_DEFAULT_CSS_DESC', 'Deve essere caricato il CSS standard di Site Search 360?');
define('MODULE_SEMKNOX_SYSTEM_COLOR_TITLE', 'Colore d\'accento');
define('MODULE_SEMKNOX_SYSTEM_COLOR_DESC', 'Specifica il colore d\'accento per i titoli e i pulsanti (l\'impostazione si applica solo se viene caricato il CSS standard).');

$languages = xtc_get_languages();

foreach ($languages as $language) {
    define('MODULE_SEMKNOX_SYSTEM_API_' . $language['id'] . '_TITLE', '[' . strtoupper($language['code']) . '] Clave API');
    define('MODULE_SEMKNOX_SYSTEM_API_' . $language['id'] . '_DESC', 'Clave API para ' . strtoupper($language['code']));

    define('MODULE_SEMKNOX_SYSTEM_PROJECT_' . $language['id'] . '_TITLE', '[' . strtoupper($language['code']) . '] Identificazione del progetto');
    define('MODULE_SEMKNOX_SYSTEM_PROJECT_' . $language['id'] . '_DESC', 'ID progetto per ' . strtoupper($language['code']));
}
