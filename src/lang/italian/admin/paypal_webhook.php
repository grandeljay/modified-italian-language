<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

$lang_array = array(
    'TEXT_PAYPAL_WEBHOOK_HEADING_TITLE'      => 'Webhooks di PayPal',

    'TEXT_PAYPAL_WEBHOOK_STATUS_NOT_DEFINED' => 'Non configurato',
    'TEXT_PAYPAL_WEBHOOK_INFO'               => '<ul><li>Non ci sono webhook disponibili</li><li>Con i webhook, riceverà aggiornamenti sullo stato degli ordini e dei pagamenti.</li><li>Per utilizzare i webhook, deve disporre di un certificato SSL valido.</li></ul>',
    'TEXT_PAYPAL_WEBHOOK_CREDENTIAL_INFO'    => 'Impossibile ricevere i webhook disponibili da PayPal. Controlli le sue impostazioni.',

    'TABLE_HEADING_URL'                      => 'URL',
    'TABLE_HEADING_WEBHOOK'                  => 'Gancho web',
    'TABLE_HEADING_STATUS'                   => 'Stato',
    'TABLE_HEADING_DESCRIPTION'              => 'Descrizione',

);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
