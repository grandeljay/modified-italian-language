<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('MODULE_PAYMENT_MCP_SERVICE_TEXT_TITLE', 'micropaiements - Pasarela');
define('MODULE_PAYMENT_MCP_SERVICE_TEXT_DESCRIPTION', 'Bla Blub ding dong');
define('MODULE_PAYMENT_MCP_SERVICE_TEXT_INFO', 'INFOTEXT di MCP_SERVICE');
define('MODULE_PAYMENT_MCP_SERVICE_STATUS_TITLE', ' Stato');
define('MODULE_PAYMENT_MCP_SERVICE_STATUS_DESC', 'Messa in funzione dei moduli di micropagamento&trade;.');
define('MODULE_PAYMENT_MCP_SERVICE_SORT_ORDER_TITLE', ' Posizionamento');
define('MODULE_PAYMENT_MCP_SERVICE_SORT_ORDER_DESC', 'Posizione nella lista');
define('MODULE_PAYMENT_MCP_SERVICE_ACCOUNT_ID_TITLE', '<div style="color:#850000;font-style: italic;">I seguenti parametri sono validi per tutti i moduli micropagamento&trade; e devono essere inseriti una sola volta.</div><br /> ID conto');
define('MODULE_PAYMENT_MCP_SERVICE_ACCOUNT_ID_DESC', 'Cuenta-ID von micropayment&trade;');
define('MODULE_PAYMENT_MCP_SERVICE_ACCESS_KEY_TITLE', ' Chiave di accesso');
define('MODULE_PAYMENT_MCP_SERVICE_ACCESS_KEY_DESC', 'Chiave d\'accesso per il micropagamento');
define('MODULE_PAYMENT_MCP_SERVICE_PROJECT_CODE_TITLE', ' Codice del progetto');
define('MODULE_PAYMENT_MCP_SERVICE_PROJECT_CODE_DESC', 'Codice del progetto Micropayment&trade;.');
define('MODULE_PAYMENT_MCP_SERVICE_PAYTEXT_TITLE', ' Testo del pagamento');
define('MODULE_PAYMENT_MCP_SERVICE_PAYTEXT_DESC', 'Appare sulla fattura o come titolo nella finestra di pagamento. Con il carattere jolly #ORDER#, può inserire l\'OrderID dell\'ordine. Ad esempio, "Ordine #Ordine#" mostrerebbe "Ordine 0000023".');
define('MODULE_PAYMENT_MCP_SERVICE_THEME_TITLE', ' Figlio');
define('MODULE_PAYMENT_MCP_SERVICE_THEME_DESC', 'Tema per la finestra di pagamento, il valore predefinito è x1');

define('MODULE_PAYMENT_MCP_SERVICE_GFX_TITLE', ' Codice del logo');
define('MODULE_PAYMENT_MCP_SERVICE_GFX_DESC', 'Inserisca qui il codice del suo logo.');

define('MODULE_PAYMENT_MCP_SERVICE_BGGFX_TITLE', ' Codice grafico di sfondo');
define('MODULE_PAYMENT_MCP_SERVICE_BGGFX_DESC', 'Inserisca qui il codice della grafica di sfondo.');

define('MODULE_PAYMENT_MCP_SERVICE_BGCOLOR_TITLE', ' Colore di sfondo');
define('MODULE_PAYMENT_MCP_SERVICE_BGCOLOR_DESC', 'Inserisca qui il colore di sfondo.');

define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_TITLE', ' Nome del campo di sicurezza');
define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_DESC', 'Per una comunicazione più sicura tra i server, inserisca un nome noto solo a lei.');

define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_VALUE_TITLE', ' Valore del campo sicurezza');
define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_VALUE_DESC', 'Inserisca qui un valore che il server micropagamento&trade; dovrebbe dare al suo negozio per migliorare la sicurezza.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ID_TITLE', ' Stato dell\'ordine: in fase di pagamento');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ID_DESC', 'Il cliente paga l\'ordine');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ID_TITLE', ' Stato dell\'ordine: pagato');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ID_DESC', 'Il cliente ha pagato correttamente.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ID_TITLE', ' Stato dell\'ordine: Annullato');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ID_DESC', 'Quando un ordine viene annullato, viene impostato il seguente stato');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_REFUNDED_ID_TITLE', ' Stato dell\'ordine: Rimborsato');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_REFUNDED_ID_DESC', 'Quando si attiva un rimborso, questo stato viene impostato');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ID_TITLE', ' Stato dell\'ordine: Pagamento con assegno');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ID_DESC', 'Se ci sono problemi, questo stato è impostato in modo da poterlo controllare.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ID_TITLE', ' Stato dell\'ordine: Conflitto');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ID_DESC', 'Se c\'è un flusso di eventi deviati, questo stato viene impostato.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ID_TITLE', ' Stato dell\'ordine: Pagamento anticipato - Pagamento parziale');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ID_DESC', 'Se viene notificata una ricevuta di pagamento anticipato, ma l\'ordine non è stato completamente pagato, questo stato viene impostato.');

define('MODULE_PAYMENT_MCP_SERVICE_REFUND_COMMENT', 'È stato attivato un rimborso.');
define('MODULE_PAYMENT_MCP_SERVICE_SUCCESS_TRANSACTION', 'L\'ordine è stato pagato. Il codice di autenticazione è: %s');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_TERMINATED', 'La domanda non è valida.');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_UNKNOWN_ORDER_ID', 'L\'ordine non esiste');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_SECRET_FIELD_MISSMATCH', 'Il campo di sicurezza non corrisponde');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_AMOUNT_MISSMATCH', 'Il totale non corrisponde al valore pagato! Effettivo: %s Obiettivo: %s');
define('MODULE_PAYMENT_MCP_SERVICE_UNKNOWN_FUNCTION', 'La sua funzione è sconosciuta.');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_INVALID_AUTH_CODE', 'Il codice di autenticazione non è corretto');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_INVALID_AMOUNT_VALUE', 'L\'importo non è corretto');

define('MODULE_PAYMENT_MCP_SERVICE_EXPIRE_DAYS_TITLE', 'Cancellare i debiti non pagati');
define('MODULE_PAYMENT_MCP_SERVICE_EXPIRE_DAYS_DESC', 'Per quanto tempo un ordine può rimanere nello stato "In attesa di pagamento" prima di essere rimosso dal pulsante "Elimina ordine"? La preghiamo di impostare il numero di giorni. IMPORTANTE: questa operazione non rimuoverà gli ordini prepagati.');

define('MODULE_PAYMENT_MCP_SERVICE_NEW_VERSION', 'È<div class="mcp_notice_register">ora</div> disponibile una nuova<div class="mcp_notice_register">versione del modulo micropagamento&trade; con nuove funzioni e caratteristiche per il suo sistema di negozio</div>.<div class="mcp_notice_register"> <a href="http://ecommerce.micropayment.de/modifiedshop/" target="_new">Alla nuova versione del modulo.</a></div>');

define('MODULE_PAYMENT_MCP_SERVICE_NO_ACCOUNT', 'Per far<div class="mcp_notice_register">funzionare</div> i moduli<div class="mcp_notice_register">di pagamento Micropayment&trade;, deve creare un account Micropayment&trade; e creare un progetto. <a href="https://%s.micropayment.de" target="blank">Clicchi qui per registrarsi.</a></div>');
define(
    'MODULE_PAYMENT_MCP_SERVICE_CSS',
    '<style type="text/css">
        .mcp_notice_register {
            margin-bottom: 5px;
            background-image: url("../images/micropayment/logo_small.png");
            background-position: 10px 10px;
            background-color: #ffdede;
            background-repeat: no-repeat;
            background-size: 100px;
            height: 40px;
            padding-left:130px;
            padding-top: 24px;
            border: 1px #cdcdcd solid;
            font-family: verdana, tahoma, sans-serif;
            font-size: 12px;
        }
        .mcp_notice_register a {
            font-family: verdana, tahoma, sans-serif;
            font-size: 12px;
            font-weight: bold;
            color: #8d005d;
        }
    </style>'
);
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ITALIAN_TITLE', 'Pagamento in sospeso');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ITALIAN_TITLE', 'Mi abbono, pagamento parziale');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ITALIAN_TITLE', 'in corso');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ITALIAN_TITLE', 'Annullato');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ITALIAN_TITLE', 'Ordine di controllo');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ITALIAN_TITLE', 'Problema dell\'evento!');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ENGLISH_TITLE', 'in attesa di pagamento');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ENGLISH_TITLE', 'pagare in anticipo, pagare in parte');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ENGLISH_TITLE', 'trattamento');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ENGLISH_TITLE', 'annullato');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ENGLISH_TITLE', 'revisione dei pagamenti');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ENGLISH_TITLE', 'evento-conflitto!');
