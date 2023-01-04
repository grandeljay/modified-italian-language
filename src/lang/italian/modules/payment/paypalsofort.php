<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

$lang_array = array(
    'MODULE_PAYMENT_PAYPALSOFORT_TEXT_TITLE'                => 'Immediatamente tramite PayPal',
    'MODULE_PAYMENT_PAYPALSOFORT_TEXT_ADMIN_TITLE'          => 'Immediatamente tramite PayPal',
    'MODULE_PAYMENT_PAYPALSOFORT_TEXT_INFO'                 => '<img src="https://www.paypalobjects.com/images/checkout/alternative_payments/paypal_sofort_black.svg" />',
    'MODULE_PAYMENT_PAYPALSOFORT_TEXT_DESCRIPTION'          => 'Dopo aver "confermato", verrà indirizzato a Sofort per pagare l\'ordine.<br />Tornerà quindi al negozio e riceverà la conferma dell\'ordine.<br />Paghi più velocemente con la protezione acquirenti illimitata di PayPal, ovviamente gratuita.',
    'MODULE_PAYMENT_PAYPALSOFORT_ALLOWED_TITLE'             => 'Aree consentite',
    'MODULE_PAYMENT_PAYPALSOFORT_ALLOWED_DESC'              => 'Specifichi <b>individualmente</b> le zone che devono essere consentite per questo modulo (ad esempio, AT,DE (se vuoto, tutte le zone sono consentite)).',
    'MODULE_PAYMENT_PAYPALSOFORT_STATUS_TITLE'              => 'Attiva il sistema Sofort via PayPal',
    'MODULE_PAYMENT_PAYPALSOFORT_STATUS_DESC'               => 'Vuole accettare i pagamenti con PayPal Sofort?',
    'MODULE_PAYMENT_PAYPALSOFORT_SORT_ORDER_TITLE'          => 'Ordine di visualizzazione',
    'MODULE_PAYMENT_PAYPALSOFORT_SORT_ORDER_DESC'           => 'Ordine di visualizzazione. Il numero più piccolo appare per primo',
    'MODULE_PAYMENT_PAYPALSOFORT_ZONE_TITLE'                => 'Area di pagamento',
    'MODULE_PAYMENT_PAYPALSOFORT_ZONE_DESC'                 => 'Quando viene selezionata una zona, il metodo di pagamento si applica solo a quella zona.',
    'MODULE_PAYMENT_PAYPALSOFORT_LP'                        => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Crei un conto PayPal qui.</strong></a>',

    'MODULE_PAYMENT_PAYPALSOFORT_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENZIONE:</font></strong> Effettui le impostazioni sotto "Moduli partner" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal". <a href="' . xtc_href_link('paypal_config.php') . '"><strong>"Impostazioni PayPal".</strong></a> Fallo e basta!',

    'MODULE_PAYMENT_PAYPALSOFORT_TEXT_ERROR_HEADING'        => 'Nota',
    'MODULE_PAYMENT_PAYPALSOFORT_TEXT_ERROR_MESSAGE'        => 'Il pagamento con Sofort tramite PayPal è stato annullato.',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
