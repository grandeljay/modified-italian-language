<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

$lang_array = array(
    'TEXT_PAYPAL_PROFILE_HEADING_TITLE' => 'Profilo PayPal',

    'TEXT_PAYPAL_PROFILE_STATUS'        => 'Standard :',
    'TEXT_PAYPAL_PROFILE_STATUS_INFO'   => 'Questo profilo dovrebbe essere utilizzato per impostazione predefinita?<br/><br/><b>Nota:</b> ad ogni modulo può essere assegnato un profilo diverso a seconda della lingua.',

    'TEXT_PAYPAL_PROFILE_NAME'          => 'Nome interno:',
    'TEXT_PAYPAL_PROFILE_NAME_INFO'     => '',

    'TEXT_PAYPAL_PROFILE_BRAND'         => 'Nome visualizzato :',
    'TEXT_PAYPAL_PROFILE_BRAND_INFO'    => 'Questo nome verrà visualizzato dal cliente su PayPal (massimo 127 caratteri).',

    'TEXT_PAYPAL_PROFILE_LOGO'          => 'URL del logo :',
    'TEXT_PAYPAL_PROFILE_LOGO_INFO'     => 'URL completo (massimo 127 caratteri)<br/><br/><b>Nota:</b> affinché il logo venga visualizzato, l\'URL deve essere inserito con https://.',

    'TEXT_PAYPAL_PROFILE_LOCALE'        => 'Lingua :',
    'TEXT_PAYPAL_PROFILE_LOCALE_INFO'   => '',

    'TEXT_PAYPAL_PROFILE_PAGE'          => 'Pagina :',
    'TEXT_PAYPAL_PROFILE_PAGE_INFO'     => '<b>Valore predefinito:</b> Connessione<br/><br/>Il pagamento senza conto cliente è preselezionato per la fatturazione.',

    'TEXT_PAYPAL_PROFILE_ADDRESS'       => 'Sovrascrivere l\'indirizzo :',
    'TEXT_PAYPAL_PROFILE_ADDRESS_INFO'  => 'Devo utilizzare l\'indirizzo di consegna di PayPal?',

    'TEXT_PAYPAL_PROFILE_INFO'          => 'Non è disponibile un profilo PayPal.<br/><br/>Con un profilo PayPal, può :<ul><li>cambiare il nome visualizzato su PayPal</li><li>aggiungere un logo alla pagina PayPal</li><li>impostare la pagina di destinazione su PayPal</li></ul>',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
