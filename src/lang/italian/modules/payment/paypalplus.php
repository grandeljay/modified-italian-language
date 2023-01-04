<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

$lang_array = array(
    'MODULE_PAYMENT_PAYPALPLUS_TEXT_TITLE'                => 'PayPal PLUS',
    'MODULE_PAYMENT_PAYPALPLUS_TEXT_ADMIN_TITLE'          => 'PayPal PLUS (solo con sede aziendale in DE<span style="background:#dd2400;color: #fff;font-weight: bold;padding: 2px 5px;border-radius: 4px;margin: 0 0 0 5px;">)ALT</span>',
    'MODULE_PAYMENT_PAYPALPLUS_TEXT_INFO'                 => 'Selezioni uno dei metodi di pagamento elencati qui, cliccando su di esso.',
    'MODULE_PAYMENT_PAYPALPLUS_TEXT_DESCRIPTION'          => 'PayPal PLUS: i quattro metodi di pagamento più popolari tra gli acquirenti tedeschi: PayPal, addebito diretto, carta di credito e fattura.<br/>Può trovare maggiori informazioni su PayPal PLUS <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/paypal-plus">qui</a>.',
    'MODULE_PAYMENT_PAYPALPLUS_ALLOWED_TITLE'             => 'Aree consentite',
    'MODULE_PAYMENT_PAYPALPLUS_ALLOWED_DESC'              => 'Specifichi <b>individualmente</b> le zone che devono essere consentite per questo modulo (ad esempio, AT,DE (se vuoto, tutte le zone sono consentite)).',
    'MODULE_PAYMENT_PAYPALPLUS_STATUS_TITLE'              => 'Activer PayPal PLUS',
    'MODULE_PAYMENT_PAYPALPLUS_STATUS_DESC'               => 'Desidera accettare pagamenti con PayPal, carta di credito, addebito diretto e acquisto di un conto?',
    'MODULE_PAYMENT_PAYPALPLUS_SORT_ORDER_TITLE'          => 'Ordine di visualizzazione',
    'MODULE_PAYMENT_PAYPALPLUS_SORT_ORDER_DESC'           => 'Ordine di visualizzazione. Il numero più piccolo appare per primo',
    'MODULE_PAYMENT_PAYPALPLUS_ZONE_TITLE'                => 'Area di pagamento',
    'MODULE_PAYMENT_PAYPALPLUS_ZONE_DESC'                 => 'Quando viene selezionata una zona, il metodo di pagamento si applica solo a quella zona.',
    'MODULE_PAYMENT_PAYPALPLUS_LP'                        => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Crei un conto PayPal qui.</strong></a>',

    'MODULE_PAYMENT_PAYPALPLUS_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENZIONE:</font></strong> Effettui le impostazioni sotto "Moduli partner" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal". <a href="' . xtc_href_link('paypal_config.php') . '"><strong>"Impostazioni PayPal".</strong></a> Fallo e basta!',

    'MODULE_PAYMENT_PAYPALPLUS_TEXT_ERROR_HEADING'        => 'Nota',
    'MODULE_PAYMENT_PAYPALPLUS_TEXT_ERROR_MESSAGE'        => 'Il pagamento PayPal è stato annullato',

    'MODULE_PAYMENT_PAYPALPLUS_INVOICE'                   => 'Acquisto su fattura',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
