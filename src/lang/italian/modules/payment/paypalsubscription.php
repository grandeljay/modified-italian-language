<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

$lang_array = array(
    'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_TITLE'                => 'Abbonamento PayPal',
    'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_ADMIN_TITLE'          => 'Abbonamento PayPal (per pagamenti ricorrenti)',
    'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_INFO'                 => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="' . xtc_href_link(DIR_WS_ICONS . 'paypal.png', '', 'SSL', false) . '" />' : ''),
    'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_DESCRIPTION'          => 'PayPal come link di pagamento che è disponibile per il cliente solo dopo che l\'ordine è stato completato. Decidete voi stessi dove il cliente riceve la richiesta di pagamento.',
    'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ALLOWED_TITLE'             => 'Aree consentite',
    'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ALLOWED_DESC'              => 'Specifichi <b>individualmente</b> le zone che devono essere consentite per questo modulo (ad esempio, AT,DE (se vuoto, tutte le zone sono consentite)).',
    'MODULE_PAYMENT_PAYPALSUBSCRIPTION_STATUS_TITLE'              => 'Attivare l\'abbonamento PayPal',
    'MODULE_PAYMENT_PAYPALSUBSCRIPTION_STATUS_DESC'               => 'Vuole accettare i pagamenti degli abbonamenti tramite PayPal?',
    'MODULE_PAYMENT_PAYPALSUBSCRIPTION_SORT_ORDER_TITLE'          => 'Ordine di visualizzazione',
    'MODULE_PAYMENT_PAYPALSUBSCRIPTION_SORT_ORDER_DESC'           => 'Ordine di visualizzazione. Il numero più piccolo viene visualizzato per primo',
    'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ZONE_TITLE'                => 'Area di pagamento',
    'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ZONE_DESC'                 => 'Quando viene selezionata una zona, il metodo di pagamento si applica solo a quella zona.',
    'MODULE_PAYMENT_PAYPALSUBSCRIPTION_LP'                        => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Crei un conto PayPal qui.</strong></a>',

    'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENZIONE:</font></strong> Effettui le impostazioni sotto "Moduli partner" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal". <a href="' . xtc_href_link('paypal_config.php') . '"><strong>"Impostazioni PayPal".</strong></a> Fallo e basta!',

    'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_ERROR_HEADING'        => 'Nota',
    'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_ERROR_MESSAGE'        => 'Il pagamento dell\'abbonamento PayPal è stato annullato.',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
