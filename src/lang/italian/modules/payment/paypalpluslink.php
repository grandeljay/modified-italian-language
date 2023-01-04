<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

$lang_array = array(
    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_TITLE'                => 'PayPal PLUS',
    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_ADMIN_TITLE'          => 'Link di pagamento PayPal PLUS (solo con sede aziendale in DE<span style="background:#dd2400;color: #fff;font-weight: bold;padding: 2px 5px;border-radius: 4px;margin: 0 0 0 5px;">)ALT</span>',
    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_INFO'                 => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="' . xtc_href_link(DIR_WS_ICONS . 'paypal.png', '', 'SSL', false) . '" />' : ''),
    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_DESCRIPTION'          => 'PayPal PLUS è un link di pagamento che è disponibile per il cliente solo dopo che l\'ordine è stato completato. Lei decide dove il cliente riceve la richiesta di pagamento.<br/>PayPal PLUS: i quattro metodi di pagamento più popolari per gli acquirenti tedeschi: PayPal, addebito diretto, carta di credito e fattura.<br/>Può trovare maggiori informazioni su PayPal PLUS <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/paypal-plus">qui</a>.',
    'MODULE_PAYMENT_PAYPALPLUSLINK_ALLOWED_TITLE'             => 'Aree consentite',
    'MODULE_PAYMENT_PAYPALPLUSLINK_ALLOWED_DESC'              => 'Specifichi <b>individualmente</b> le zone che devono essere consentite per questo modulo (ad esempio, AT,DE (se vuoto, tutte le zone sono consentite)).',
    'MODULE_PAYMENT_PAYPALPLUSLINK_STATUS_TITLE'              => 'Attivi il link PayPal PLUS',
    'MODULE_PAYMENT_PAYPALPLUSLINK_STATUS_DESC'               => 'Vuole accettare i pagamenti tramite PayPal PLUS Link?',
    'MODULE_PAYMENT_PAYPALPLUSLINK_SORT_ORDER_TITLE'          => 'Ordine di visualizzazione',
    'MODULE_PAYMENT_PAYPALPLUSLINK_SORT_ORDER_DESC'           => 'Ordine di visualizzazione. Il numero più piccolo viene visualizzato per primo',
    'MODULE_PAYMENT_PAYPALPLUSLINK_ZONE_TITLE'                => 'Area di pagamento',
    'MODULE_PAYMENT_PAYPALPLUSLINK_ZONE_DESC'                 => 'Quando viene selezionata una zona, il metodo di pagamento si applica solo a quella zona.',
    'MODULE_PAYMENT_PAYPALPLUSLINK_LP'                        => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Crei un conto PayPal qui.</strong></a>',

    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENZIONE:</font></strong> Effettui le impostazioni sotto "Moduli partner" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal". <a href="' . xtc_href_link('paypal_config.php') . '"><strong>"Impostazioni PayPal".</strong></a> Fallo e basta!',

    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_ERROR_HEADING'        => 'Nota',
    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_ERROR_MESSAGE'        => 'Il pagamento PayPal è stato annullato',

    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_SUCCESS'              => 'Paghi ora con PayPal. Clicchi sul link sottostante:<br/> %s',
    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_COMPLETED'            => 'Si prega di pagare con PayPal.',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
