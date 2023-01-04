<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

require_once 'mcp_service.php';

define(
    'MODULE_PAYMENT_MCP_PREPAY_TEXT_DESCRIPTION',
    'Micropagamento Modulo di pagamento anticipato
    <br /><br />
    Collegamenti<br />
    <b>Strumenti</b><br />
    <a target="_new" href="../callback/micropayment/cleanup.php">
        <input type="button" value="Ordine" />
    </a>
    <br /><br />
    <b>Esterno</b><br />
    <a href="http://ecommerce.micropayment.de/download/modified/micropayment_modified-shop_2.x.pdf?version=2.1.0">
        <input type="button" value="Manuel" />
    </a>

    <a target="_new" href="https://r120.micropayment.de">
        <input type="button" value="Registrazione dei micropagamenti" />
    </a>'
);
define('MODULE_PAYMENT_MCP_PREPAY_TEXT_TITLE', 'micropago&trade; Pagamento anticipato');
define('MODULE_PAYMENT_MCP_PREPAY_TEXT_TITLE_EXTERN', 'Pagamento anticipato');
define(
    'MODULE_PAYMENT_MCP_PREPAY_TEXT_INFO',
    '<div style="margin:10px; height:140px;">
        <div style="float:right;"><img src="./images/micropayment/logo_small.png" width="150"/></div>
        <div style="float:left;font-family: Arial, Helvetica, sans-serif;">
            <b>Il voucher di pagamento precompilato le sarà inviato via e-mail.</b><br />
            Per completare il suo ordine, la reindirizzeremo al sito<br /> del nostro fornitore di servizi di pagamento micropayment&trade;.<br /><br />
            ✔ sicuro ✔ semplice ✔ senza registrazione
        </div>
    </div>'
);
define('MODULE_PAYMENT_MCP_PREPAY_STATUS_TITLE', 'Pagamento anticipato');
define('MODULE_PAYMENT_MCP_PREPAY_STATUS_DESC', 'Modulo prepagato Micropagamento');
define('MODULE_PAYMENT_MCP_PREPAY_MINIMUM_AMOUNT_TITLE', 'Valore minimo del carrello');
define('MODULE_PAYMENT_MCP_PREPAY_MINIMUM_AMOUNT_DESC', 'Valore minimo del carrello per questo metodo di pagamento');
define('MODULE_PAYMENT_MCP_PREPAY_MAXIMUM_AMOUNT_TITLE', 'Valore massimo del carrello');
define('MODULE_PAYMENT_MCP_PREPAY_MAXIMUM_AMOUNT_DESC', 'Valore massimo del carrello per questo metodo di pagamento');
define('MODULE_PAYMENT_MCP_PREPAY_SORT_ORDER_TITLE', 'Posizionamento');
define('MODULE_PAYMENT_MCP_PREPAY_SORT_ORDER_DESC', 'Posizionamento nella scelta del metodo di pagamento');
define('MODULE_PAYMENT_MCP_PREPAY_ALLOWED_TITLE', 'Selezione del Paese');
define('MODULE_PAYMENT_MCP_PREPAY_ALLOWED_DESC', 'Consenti solo ordini da Paesi (elenco separato da virgole, ad esempio DE,EN)');

define('MODULE_PAYMENT_MCP_PREPAY_COMMENT_INIT', 'init:Attendere il pagamento. Cancellazione automatica in %s');
define('MODULE_PAYMENT_MCP_PREPAY_COMMENT_PAYIN', 'Sono state pagate %s %s.');
define('MODULE_PAYMENT_MCP_PREPAY_COMMENT_EXPIRED', 'Nessun pagamento ricevuto, cancellazione automatica');

define('MODULE_PAYMENT_MCP_SERVICE_TRANSACTION_CANCELLED', 'cancellazione:L\'ordine è stato cancellato.');
