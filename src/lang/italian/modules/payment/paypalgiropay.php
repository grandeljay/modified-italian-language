<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

$lang_array = array(
    'MODULE_PAYMENT_PAYPALGIROPAY_TEXT_TITLE'                => 'Giropay via PayPal',
    'MODULE_PAYMENT_PAYPALGIROPAY_TEXT_ADMIN_TITLE'          => 'Giropay via PayPal',
    'MODULE_PAYMENT_PAYPALGIROPAY_TEXT_INFO'                 => '<img src="https://www.paypalobjects.com/images/checkout/alternative_payments/paypal_giropay_color.svg" />',
    'MODULE_PAYMENT_PAYPALGIROPAY_TEXT_DESCRIPTION'          => 'Dopo aver "confermato", sarà reindirizzato a Giropay per pagare il suo ordine.<br />Tornerà quindi al negozio e riceverà la conferma dell\'ordine.<br />Paghi ora più velocemente con la protezione acquisti illimitata di PayPal - ovviamente gratis.',
    'MODULE_PAYMENT_PAYPALGIROPAY_ALLOWED_TITLE'             => 'Aree consentite',
    'MODULE_PAYMENT_PAYPALGIROPAY_ALLOWED_DESC'              => 'Specifichi <b>individualmente</b> quali campi devono essere consentiti per questo modulo. (ad esempio AT,DE (se vuoto, tutti i campi sono consentiti))',
    'MODULE_PAYMENT_PAYPALGIROPAY_STATUS_TITLE'              => 'Giropay via PayPal è attivo',
    'MODULE_PAYMENT_PAYPALGIROPAY_STATUS_DESC'               => 'Desidera accettare pagamenti tramite PayPal Giropay?',
    'MODULE_PAYMENT_PAYPALGIROPAY_SORT_ORDER_TITLE'          => 'Ordine di visualizzazione',
    'MODULE_PAYMENT_PAYPALGIROPAY_SORT_ORDER_DESC'           => 'Ordine di visualizzazione dei numeri. Il numero più piccolo viene visualizzato per primo',
    'MODULE_PAYMENT_PAYPALGIROPAY_ZONE_TITLE'                => 'Area di pagamento',
    'MODULE_PAYMENT_PAYPALGIROPAY_ZONE_DESC'                 => 'Se viene selezionata una zona, il metodo di pagamento si applica solo a quella zona.',
    'MODULE_PAYMENT_PAYPALGIROPAY_LP'                        => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Crei subito un conto PayPal qui.</strong></a>',

    'MODULE_PAYMENT_PAYPALGIROPAY_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENZIONE:</font></strong> Effettui le impostazioni in "Moduli partner" -&gt; "PayPal" -&gt;. <a href="' . xtc_href_link('paypal_config.php') . '"><strong>"Configurazione PayPal".</strong></a> Lo faccia!',

    'MODULE_PAYMENT_PAYPALGIROPAY_TEXT_ERROR_HEADING'        => 'Nota',
    'MODULE_PAYMENT_PAYPALGIROPAY_TEXT_ERROR_MESSAGE'        => 'Il pagamento Giropay tramite PayPal è stato annullato',
);


foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
