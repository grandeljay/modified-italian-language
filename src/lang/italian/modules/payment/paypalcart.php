<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

$lang_array = array(
    'MODULE_PAYMENT_PAYPALCART_TEXT_TITLE'                => 'PayPal',
    'MODULE_PAYMENT_PAYPALCART_TEXT_ADMIN_TITLE'          => 'Pulsante PayPal express nel carrello e nella pagina dell\'articoloALT.',
    'MODULE_PAYMENT_PAYPALCART_TEXT_INFO'                 => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="' . xtc_href_link(DIR_WS_ICONS . 'paypal.png', '', 'SSL', false) . '" />' : ''),
    'MODULE_PAYMENT_PAYPALCART_TEXT_DESCRIPTION'          => 'PayPal Express Checkout - il pulsante PayPal nel carrello e nella pagina dell\'articolo per ottenere la massima conversione.<br/>Può trovare maggiori informazioni su PayPal Express Checkout <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/express-checkout">qui</a>.',
    'MODULE_PAYMENT_PAYPALCART_ALLOWED_TITLE'             => 'Aree consentite',
    'MODULE_PAYMENT_PAYPALCART_ALLOWED_DESC'              => 'Specifichi <b>individualmente</b> le zone che devono essere consentite per questo modulo (ad esempio, AT,DE (se vuoto, tutte le zone sono consentite)).',
    'MODULE_PAYMENT_PAYPALCART_STATUS_TITLE'              => 'Attivare PayPal exprés',
    'MODULE_PAYMENT_PAYPALCART_STATUS_DESC'               => 'Vuole accettare i pagamenti con PayPal Express?',
    'MODULE_PAYMENT_PAYPALCART_SORT_ORDER_TITLE'          => 'Ordine di visualizzazione',
    'MODULE_PAYMENT_PAYPALCART_SORT_ORDER_DESC'           => 'Ordine di visualizzazione. Il numero più piccolo appare per primo',
    'MODULE_PAYMENT_PAYPALCART_ZONE_TITLE'                => 'Area di pagamento',
    'MODULE_PAYMENT_PAYPALCART_ZONE_DESC'                 => 'Quando viene selezionata una zona, il metodo di pagamento si applica solo a quella zona.',
    'MODULE_PAYMENT_PAYPALCART_LP'                        => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Crei un conto PayPal qui.</strong></a>',

    'MODULE_PAYMENT_PAYPALCART_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENZIONE:</font></strong> Effettui le impostazioni sotto "Moduli partner" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal". <a href="' . xtc_href_link('paypal_config.php') . '"><strong>"Impostazioni PayPal".</strong></a> Fallo e basta!',

    'MODULE_PAYMENT_PAYPALCART_TEXT_ERROR_HEADING'        => 'Nota',
    'MODULE_PAYMENT_PAYPALCART_TEXT_ERROR_MESSAGE'        => 'Il pagamento PayPal è stato annullato',

    'TEXT_PAYPAL_CART_ACCOUNT_CREATED'                    => 'Abbiamo creato un conto cliente per lei con il suo indirizzo e-mail PayPal. Può richiedere la password per il suo nuovo conto cliente in un secondo momento, utilizzando la funzione "Password dimenticata".',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
