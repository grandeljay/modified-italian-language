<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

$lang_array = array(
    'TEXT_PAYPAL_CONFIG_HEADING_TITLE'            => 'Impostazioni di PayPal',

    'TEXT_PAYPAL_CONFIG_SECRET_LIVE'              => 'Segreto e diretto :',
    'TEXT_PAYPAL_CONFIG_CLIENT_LIVE'              => 'Cliente ID Live:',
    'TEXT_PAYPAL_CONFIG_CLIENT_LIVE_INFO'         => 'Inserisca i dati della sua APP PayPal o richieda nuovi dati.',

    'TEXT_PAYPAL_CONFIG_SECRET_SANDBOX'           => 'Una sandbox segreta:',
    'TEXT_PAYPAL_CONFIG_CLIENT_SANDBOX'           => 'Sandbox di identificazione del cliente:',
    'TEXT_PAYPAL_CONFIG_CLIENT_SANDBOX_INFO'      => 'Inserisca i dati della sua APP PayPal o richieda nuovi dati.',

    'TEXT_PAYPAL_APPINATOR_LIVE'                  => 'Richiesta di dati online',
    'TEXT_PAYPAL_APPINATOR_SANDBOX'               => 'Richiesta di dati sandbox',

    'TEXT_PAYPAL_CONFIG_MODE'                     => 'Modalità :',
    'TEXT_PAYPAL_CONFIG_MODE_INFO'                => '',

    'TEXT_PAYPAL_CONFIG_MERCHANT_ID_LIVE'         => 'ID Live Trader :',
    'TEXT_PAYPAL_CONFIG_MERCHANT_ID_SANDBOX'      => 'La sandbox dell\'identificazione dei trader:',
    'TEXT_PAYPAL_CONFIG_MERCHANT_ID_INFO'         => 'ID commerciante del suo conto commerciale. Se non li ha a portata di mano, la preghiamo di richiedere nuovamente l\'ID cliente e i dati segreti. Questo determinerà automaticamente l\'ID commerciante.',

    'TEXT_PAYPAL_CONFIG_STATUS_ACDC_LIVE'         => 'Stato della carta di credito online :',
    'TEXT_PAYPAL_CONFIG_STATUS_ACDC_SANDBOX'      => 'Stato della sandbox delle carte di credito :',
    'TEXT_PAYPAL_CONFIG_STATUS_ACDC_INFO'         => 'Se lo stato è giallo, contatti l\'assistenza PayPal. Se lo stato è rosso, il servizio per il suo conto non è disponibile in questo momento.',

    'TEXT_PAYPAL_CONFIG_STATUS_PUI_LIVE'          => 'Stato degli acquisti sul conto Live :',
    'TEXT_PAYPAL_CONFIG_STATUS_PUI_SANDBOX'       => 'Stato dell\'acquisto nel conto Sandbox :',
    'TEXT_PAYPAL_CONFIG_STATUS_PUI_INFO'          => 'Se lo stato è giallo, contatti l\'assistenza PayPal. Se lo stato è rosso, il servizio per il suo conto non è disponibile in questo momento.',

    'TEXT_PAYPAL_CONFIG_INVOICE_PREFIX'           => 'Prefisso del numero d\'ordine :',
    'TEXT_PAYPAL_CONFIG_INVOICE_PREFIX_INFO'      => 'Una stringa di caratteri (prefisso) liberamente selezionabile che precede il numero d\'ordine e viene utilizzata per generare il numero di fattura PayPal.<br />Questo permette a più negozi di lavorare con un\'unica applicazione PayPal. Si evitano i conflitti con numeri d\'ordine identici. Ogni ordine riceve il proprio numero di fattura nel conto PayPal.',

    'TEXT_PAYPAL_CONFIG_TRANSACTION'              => 'Transazione :',
    'TEXT_PAYPAL_CONFIG_TRANSACTION_INFO'         => 'Selezioni il tipo di transazione.<br/><br/><b>Nota:</b> con PayPal Plus e i pagamenti rateali con PayPal, viene sempre effettuata una vendita.',

    'TEXT_PAYPAL_CONFIG_CAPTURE'                  => 'Cattura manualmente :',
    'TEXT_PAYPAL_CONFIG_CAPTURE_INFO'             => 'Vuole acquisire i pagamenti manualmente in PayPal?<br/><br/><b>Nota:</b> questo richiede che la transazione sia impostata su Consenti.',

    'TEXT_PAYPAL_CONFIG_CART'                     => 'Carrello della spesa :',
    'TEXT_PAYPAL_CONFIG_CART_INFO'                => 'Il carrello della spesa deve essere trasferito a PayPal?<br/><br/><b>Nota:</b> questa impostazione può causare problemi quando utilizza i moduli ot in "Moduli" -&gt; "Panoramica" che concedono uno sconto o un sovrapprezzo ("Sconto [ot_discount]", "Buoni sconto [ot_coupon]", "Coupon [ot_gv]", "Sconto e sovrapprezzo sui tipi di pagamento [ot_payment]", ecc.)<br/>Impostazione consigliata: "No',

    'TEXT_PAYPAL_INSTALLMENT_BANNER_DISPLAY'      => 'Pagamento a rate Banner :',
    'TEXT_PAYPAL_INSTALLMENT_BANNER_DISPLAY_INFO' => 'Dovrebbe apparire il cartello di rateizzazione?<br/><br/><b>Nota:</b> i pagamenti rateali con PayPal sono disponibili solo se il suo conto PayPal è attivato.',

    'TEXT_PAYPAL_INSTALLMENT_BANNER_COLOR'        => 'Colore del banner :',
    'TEXT_PAYPAL_INSTALLMENT_BANNER_COLOR_INFO'   => 'Selezioni il colore del banner.',

    'TEXT_PAYPAL_CONFIG_STATE_SUCCESS'            => 'Stato di successo :',
    'TEXT_PAYPAL_CONFIG_STATE_SUCCESS_INFO'       => 'Stato dell\'ordine riuscito',

    'TEXT_PAYPAL_CONFIG_STATE_REJECTED'           => 'Stato Rifiutato :',
    'TEXT_PAYPAL_CONFIG_STATE_REJECTED_INFO'      => 'Stato in caso di ordine rifiutato',

    'TEXT_PAYPAL_CONFIG_STATE_PENDING'            => 'Stato di standby :',
    'TEXT_PAYPAL_CONFIG_STATE_PENDING_INFO'       => 'Stato se l\'ordine è andato a buon fine ma non ancora confermato da PayPal',

    'TEXT_PAYPAL_CONFIG_STATE_CAPTURED'           => 'Stato registrato :',
    'TEXT_PAYPAL_CONFIG_STATE_CAPTURED_INFO'      => 'Stato innescato da una cattura',

    'TEXT_PAYPAL_CONFIG_STATE_REFUNDED'           => 'Stato del rimborso :',
    'TEXT_PAYPAL_CONFIG_STATE_REFUNDED_INFO'      => 'Condizione causata da un ritorno',

    'TEXT_PAYPAL_CONFIG_STATE_TEMP'               => 'Stato Temp:',
    'TEXT_PAYPAL_CONFIG_STATE_TEMP_INFO'          => 'Stato di un ordine non confermato',

    'TEXT_PAYPAL_CONFIG_LOG'                      => 'Si prega di registrarsi:',
    'TEXT_PAYPAL_CONFIG_LOG_INFO'                 => 'Deve essere scritto un registro?',

    'TEXT_PAYPAL_CONFIG_LOG_LEVEL'                => 'Livello di registrazione :',
    'TEXT_PAYPAL_CONFIG_LOG_LEVEL_INFO'           => '<b>Nota:</b> in modalità diretta, la registrazione avviene solo fino al livello INFO.',

    'BUTTON_PAYPAL_STATUS_INSTALL'                => 'Stato dell\'ordine di installazione',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}

$PAYPAL_INST_ORDER_STATUS_TMP_NAME      = 'PayPal annullato';
$PAYPAL_INST_ORDER_STATUS_SUCCESS_NAME  = 'Pagato con PayPal';
$PAYPAL_INST_ORDER_STATUS_PENDING_NAME  = 'PayPal wartend';
$PAYPAL_INST_ORDER_STATUS_CAPTURED_NAME = 'Registrazione con PayPal';
$PAYPAL_INST_ORDER_STATUS_REFUNDED_NAME = 'Rimborsi PayPal';
$PAYPAL_INST_ORDER_STATUS_REJECTED_NAME = 'PayPal rejeté';
$PAYPAL_INST_ORDER_STATUS_ACCEPTED_NAME = 'PayPal accettato';
