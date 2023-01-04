<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

$lang_array = array(
    'MODULE_PAYMENT_PAYPALACDC_TEXT_TITLE'                  => 'Carta di credito',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_ADMIN_TITLE'            => 'Carta di credito (senza riferimento a PayPal)',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_INFO'                   => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="' . xtc_href_link(DIR_WS_ICONS . 'paypal_creditcard.png', '', 'SSL', false) . '" />' : ''),
    'MODULE_PAYMENT_PAYPALACDC_TEXT_DESCRIPTION'            => 'Nell\'ultima fase del processo d\'ordine, le verrà chiesto di inserire i dati della sua carta di credito per pagare l\'ordine.',
    'MODULE_PAYMENT_PAYPALACDC_ALLOWED_TITLE'               => 'Aree consentite',
    'MODULE_PAYMENT_PAYPALACDC_ALLOWED_DESC'                => 'Specifichi <b>individualmente</b> le zone che devono essere consentite per questo modulo (ad esempio, AT,DE (se vuoto, tutte le zone sono consentite)).',
    'MODULE_PAYMENT_PAYPALACDC_STATUS_TITLE'                => 'Attivare la carta di credito',
    'MODULE_PAYMENT_PAYPALACDC_STATUS_DESC'                 => 'Desidera accettare pagamenti con PayPal?',
    'MODULE_PAYMENT_PAYPALACDC_SORT_ORDER_TITLE'            => 'Ordine di visualizzazione',
    'MODULE_PAYMENT_PAYPALACDC_SORT_ORDER_DESC'             => 'Ordine di visualizzazione. Il numero più piccolo viene visualizzato per primo',
    'MODULE_PAYMENT_PAYPALACDC_ZONE_TITLE'                  => 'Area di pagamento',
    'MODULE_PAYMENT_PAYPALACDC_ZONE_DESC'                   => 'Quando viene selezionata una zona, il metodo di pagamento si applica solo a quella zona.',
    'MODULE_PAYMENT_PAYPALACDC_LP'                          => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Crei un conto PayPal qui.</strong></a>',

    'MODULE_PAYMENT_PAYPALACDC_TEXT_EXTENDED_DESCRIPTION'   => '<strong><font color="red">ATTENZIONE:</font></strong> Effettui le impostazioni sotto "Moduli partner" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal". <a href="' . xtc_href_link('paypal_config.php') . '"><strong>"Impostazioni PayPal".</strong></a> Fallo e basta!',

    'MODULE_PAYMENT_PAYPALACDC_TEXT_ERROR_HEADING'          => 'Nota',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_ERROR_MESSAGE'          => 'Pagamento con carta di credito annullato',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_ERROR_MSG'              => 'Purtroppo, il pagamento non può essere effettuato.',

    'MODULE_PAYMENT_PAYPALACDC_TEXT_CARDNUMBER'             => 'Numero di carta',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_CARDHOLDER'             => 'Titolare della carta',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_EXPIRATION'             => 'Valido fino a',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_CVV'                    => 'Controllare la cifra',

    'MODULE_PAYMENT_PAYPALACDC_TEXT_CARDNUMBER_PLACEHOLDER' => 'Numero di carta',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_EXPIRATION_PLACEHOLDER' => 'MM/JJ',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_CVV_PLACEHOLDER'        => 'Controllare la cifra',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
