<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

$lang_array = array(
    'MODULE_PAYMENT_PAYPALPUI_TEXT_TITLE'                             => 'Factura',
    'MODULE_PAYMENT_PAYPALPUI_TEXT_ADMIN_TITLE'                       => 'Fattura tramite PayPal',
    'MODULE_PAYMENT_PAYPALPUI_TEXT_INFO'                              => 'Cliccando sul pulsante, lei accetta i <a target="_blank" href="https://www.ratepay.com/legal-payment-terms">termini</a> <a target="_blank" href="https://www.ratepay.com/legal-payment-terms">e le condizioni</a> <a target="_blank" href="https://www.ratepay.com/legal-payment-terms">di pagamento</a> di Ratepay <a target="_blank" href="https://www.ratepay.com/legal-payment-terms">e</a> accetta un <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">controllo del rischio</a> da parte di <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">Ratepay</a>, il nostro partner. Lei accetta anche l\'<a target="_blank" href="https://www.paypal.com/de/webapps/mpp/ua/rechnungskauf-mit-ratepay?locale.x=en_DE&_ga=1.121064910.716429872.1643889674">informativa sulla privacy</a> di PayPal. Se la transazione può essere elaborata con successo tramite l\'acquisto del conto, il prezzo di acquisto viene attribuito a Ratepay e lei potrà trasferire denaro solo a Ratepay, non all\'esercente.',
    'MODULE_PAYMENT_PAYPALPUI_TEXT_DESCRIPTION'                       => '<strong><font color="red">ATTENZIONE :</font></strong> Affinché l\'acquisto del conto funzioni correttamente, i seguenti webhook devono essere impostati nelle impostazioni di PayPal affinché lo stato cambi correttamente:<ul><li>PAGAMENTO.COMPLETATO</li><li>PAGAMENTO.ACQUISIZIONE.RIFIUTATO</li></ul>',
    'MODULE_PAYMENT_PAYPALPUI_ALLOWED_TITLE'                          => 'Aree consentite',
    'MODULE_PAYMENT_PAYPALPUI_ALLOWED_DESC'                           => 'Specifichi <b>individualmente</b> le zone che devono essere consentite per questo modulo (ad esempio, AT,DE (se vuoto, tutte le zone sono consentite)).',
    'MODULE_PAYMENT_PAYPALPUI_STATUS_TITLE'                           => 'Attivare la fattura PayPal',
    'MODULE_PAYMENT_PAYPALPUI_STATUS_DESC'                            => 'Desidera accettare il pagamento tramite fattura?',
    'MODULE_PAYMENT_PAYPALPUI_SORT_ORDER_TITLE'                       => 'Ordine di visualizzazione',
    'MODULE_PAYMENT_PAYPALPUI_SORT_ORDER_DESC'                        => 'Ordine di visualizzazione. Il numero più piccolo appare per primo',
    'MODULE_PAYMENT_PAYPALPUI_ZONE_TITLE'                             => 'Area di pagamento',
    'MODULE_PAYMENT_PAYPALPUI_ZONE_DESC'                              => 'Quando viene selezionata una zona, il metodo di pagamento si applica solo a quella zona.',
    'MODULE_PAYMENT_PAYPALPUI_LP'                                     => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Crei un conto PayPal qui.</strong></a>',

    'MODULE_PAYMENT_PAYPALPUI_TEXT_EXTENDED_DESCRIPTION'              => '<strong><font color="red">ATTENZIONE:</font></strong> Effettui le impostazioni sotto "Moduli partner" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal". <a href="' . xtc_href_link('paypal_config.php') . '"><strong>"Impostazioni PayPal".</strong></a> Fallo e basta!',

    'MODULE_PAYMENT_PAYPALPUI_TEXT_ERROR_HEADING'                     => 'Nota',
    'MODULE_PAYMENT_PAYPALPUI_TEXT_ERROR_MESSAGE'                     => 'Purtroppo, l\'acquisto su conto corrente non è disponibile al momento, la preghiamo di scegliere un altro metodo di pagamento.',

    'MODULE_PAYMENT_PAYPALPUI_PAYMENT_SOURCE_INFO_CANNOT_BE_VERIFIED' => 'La combinazione di nome e indirizzo non è stata convalidata. Corregga i suoi dati e riprovi. Per ulteriori informazioni, consulti l\'<a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">informativa sulla privacy</a> di Ratepay o contatti Ratepay tramite questo <a target="_blank" href="https://www.ratepay.com/kontakt">modulo di contatto</a>.',
    'MODULE_PAYMENT_PAYPALPUI_PAYMENT_SOURCE_DECLINED_BY_PROCESSOR'   => 'Il metodo di pagamento selezionato non può essere utilizzato. Questa decisione si basa su una procedura di elaborazione automatizzata dei dati. Per ulteriori informazioni, consulti l\'<a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">informativa sulla privacy</a> di Ratepay o contatti Ratepay tramite questo <a target="_blank" href="https://www.ratepay.com/kontakt">modulo di contatto</a>.',
    'MODULE_PAYMENT_PAYPALPUI_PAYMENT_SOURCE_CANNOT_BE_USED'          => 'Il metodo di pagamento selezionato non può essere utilizzato. Questa decisione si basa su una procedura di elaborazione automatizzata dei dati. Per ulteriori informazioni, consulti l\'<a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">informativa sulla privacy</a> di Ratepay o contatti Ratepay tramite questo <a target="_blank" href="https://www.ratepay.com/kontakt">modulo di contatto</a>.',
    'MODULE_PAYMENT_PAYPALPUI_BILLING_ADDRESS_INVALID'                => 'Non è stato possibile convalidare il suo indirizzo di fatturazione.',
    'MODULE_PAYMENT_PAYPALPUI_SHIPPING_ADDRESS_INVALID'               => 'Non è stato possibile convalidare il suo indirizzo di consegna.',

    'MALFORMED_REQUEST_JSON'                                          => 'La combinazione di nome e indirizzo non è stata convalidata. Corregga i suoi dati e riprovi. Per ulteriori informazioni, consulti l\'<a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">informativa sulla privacy</a> di Ratepay o contatti Ratepay tramite questo <a target="_blank" href="https://www.ratepay.com/kontakt">modulo di contatto</a>.',

    'MODULE_PAYMENT_PAYPALPUI_TEXT_DOB'                               => 'Data di nascita (ad esempio, 21.05.1970) :',
    'MODULE_PAYMENT_PAYPALPUI_TEXT_TELEPHONE'                         => 'Numero di telefono :',
    'MODULE_PAYMENT_PAYPALPUI_TEXT_SERVICE'                           => 'Servizio clienti: %s',

    'JS_DOB_ERROR'                                                    => 'Votre date dLa nascita deve essere inserita nel formato GG.MM.AAAA (ad esempio, 21.05.1970).',
    'JS_TELEPHONE_ERROR'                                              => 'Per questo metodo di pagamento abbiamo bisogno del suo numero di telefono.',

    'MODULE_PAYMENT_PAYPALPUI_TEXT_LEGAL'                             => 'Cliccando sul pulsante, lei accetta i <a target="_blank" href="https://www.ratepay.com/legal-payment-terms">termini</a> <a target="_blank" href="https://www.ratepay.com/legal-payment-terms">e le condizioni</a> <a target="_blank" href="https://www.ratepay.com/legal-payment-terms">di pagamento</a> di Ratepay <a target="_blank" href="https://www.ratepay.com/legal-payment-terms">e</a> accetta un <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">controllo del rischio</a> da parte di <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">Ratepay</a>, il nostro partner. Lei accetta anche l\'<a target="_blank" href="https://www.paypal.com/de/webapps/mpp/ua/rechnungskauf-mit-ratepay?locale.x=en_DE&_ga=1.121064910.716429872.1643889674">informativa sulla privacy</a> di PayPal. Se la transazione può essere elaborata con successo tramite l\'acquisto del conto, il prezzo di acquisto viene attribuito a Ratepay e lei potrà trasferire denaro solo a Ratepay, non all\'esercente.',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
