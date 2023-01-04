<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

$lang_array = array(
    'MODULE_PAYMENT_' . $klarna_code . '_TEXT_TITLE'            => '',
    'MODULE_PAYMENT_' . $klarna_code . '_TEXT_DESCRIPTION'      => 'Prima di poter impostare i metodi di pagamento di Klarna Payments, deve aprire un conto commerciale con Klarna. Riceverà quindi le informazioni e i dati di accesso necessari per creare il suo account. Se ha già un numero cliente Klarna, ma non è Kxxxxxx, la preghiamo di inviare un\'e-mail a <a href="mailto:vertrieb@klarna.com">vertrieb@klarna.com.</a><br /><br />
    <img src="../lang/italian/admin/images/icon.gif" border="0" />
    <a href="https://www.klarna.com/de/verkaeufer/" target="_blank" style="text-decoration: underline; font-weight: bold;">Crei un conto Klarna qui.</a>
    <img src="images/icon_popup.gif" border="0" />',
    'MODULE_PAYMENT_' . $klarna_code . '_TEXT_INFO'             => '',
    'MODULE_PAYMENT_' . $klarna_code . '_ALLOWED_TITLE'         => 'Aree consentite',
    'MODULE_PAYMENT_' . $klarna_code . '_ALLOWED_DESC'          => 'Specifichi <b>individualmente</b> le zone che devono essere consentite per questo modulo (ad esempio, AT,DE (se vuoto, tutte le zone sono consentite)).',
    'MODULE_PAYMENT_' . $klarna_code . '_STATUS_TITLE'          => 'Attivare il modulo',
    'MODULE_PAYMENT_' . $klarna_code . '_STATUS_DESC'           => 'Vuole accettare pagamenti con questo modulo?',
    'MODULE_PAYMENT_' . $klarna_code . '_SORT_ORDER_TITLE'      => 'Ordine di visualizzazione',
    'MODULE_PAYMENT_' . $klarna_code . '_SORT_ORDER_DESC'       => 'Ordine di visualizzazione. Il numero più piccolo appare per primo',
    'MODULE_PAYMENT_' . $klarna_code . '_ZONE_TITLE'            => 'Area di pagamento',
    'MODULE_PAYMENT_' . $klarna_code . '_ZONE_DESC'             => 'Quando viene selezionata una zona, il metodo di pagamento si applica solo a quella zona.',
    'MODULE_PAYMENT_' . $klarna_code . '_ORDER_STATUS_ID_TITLE' => 'Definire lo stato dell\'ordine',
    'MODULE_PAYMENT_' . $klarna_code . '_ORDER_STATUS_ID_DESC'  => 'Imposta gli ordini effettuati con questo modulo in questo stato.',
    'MODULE_PAYMENT_' . $klarna_code . '_CAPTURE_TITLE'         => 'Attività',
    'MODULE_PAYMENT_' . $klarna_code . '_CAPTURE_DESC'          => 'L\'ordine deve essere attivato automaticamente?',

    'MODULE_PAYMENT_' . $klarna_code . '_TEXT_ERROR_HEADING'    => 'Klarna',
    'MODULE_PAYMENT_' . $klarna_code . '_TEXT_ERROR_MESSAGE'    => 'Il pagamento è stato annullato.',

    'MODULE_PAYMENT_' . $klarna_code . '_TEXT_VERSION'          => '<b>Versione del modulo</b><br/>',

    'MODULE_PAYMENT_KLARNA_MERCHANT_ID_TITLE'                   => 'Nome utente',
    'MODULE_PAYMENT_KLARNA_MERCHANT_ID_DESC'                    => 'Nome utente API di Klarna',
    'MODULE_PAYMENT_KLARNA_SHARED_SECRET_TITLE'                 => 'Password',
    'MODULE_PAYMENT_KLARNA_SHARED_SECRET_DESC'                  => 'Passaporto API di Klarna',
    'MODULE_PAYMENT_KLARNA_MODE_TITLE'                          => 'Modalità',
    'MODULE_PAYMENT_KLARNA_MODE_DESC'                           => 'Moda Klarna',
    'MODULE_PAYMENT_KLARNA_TEXT'                                => 'Klarna',
);
