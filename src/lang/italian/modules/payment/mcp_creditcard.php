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
    'MODULE_PAYMENT_MCP_CREDITCARD_TEXT_DESCRIPTION',
    'micropagamento&trade; Modulo carta di credito
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
define('MODULE_PAYMENT_MCP_CREDITCARD_TEXT_TITLE', 'carta di credito micropago&trade;');
define('MODULE_PAYMENT_MCP_CREDITCARD_TEXT_TITLE_EXTERN', 'Carta di credito');
define(
    'MODULE_PAYMENT_MCP_CREDITCARD_TEXT_INFO',
    '<div style="margin:10px; height:140px;">
        <div style="float:right;"><img src="./images/micropayment/logo_small.png" width="150"/></div>
        <div style="float:left;">
            <b>Tenga pronti i dati della carta di credito.</b></br />
            Per completare il suo ordine, la reindirizzeremo al sito<br /> del nostro fornitore di servizi di pagamento micropayment&trade;.<br /><br />
            ✔ sicuro ✔ semplice ✔ senza registrazione
        </div>
    </div>'
);
define('MODULE_PAYMENT_MCP_CREDITCARD_STATUS_TITLE', 'Carta di credito');
define('MODULE_PAYMENT_MCP_CREDITCARD_STATUS_DESC', 'Modulo carta di credito Micropayment&trade;.');
define('MODULE_PAYMENT_MCP_CREDITCARD_MINIMUM_AMOUNT_TITLE', 'Valore minimo dell\'ordine');
define('MODULE_PAYMENT_MCP_CREDITCARD_MINIMUM_AMOUNT_DESC', 'Valore minimo dell\'ordine');
define('MODULE_PAYMENT_MCP_CREDITCARD_MAXIMUM_AMOUNT_TITLE', 'Valore massimo dell\'ordine');
define('MODULE_PAYMENT_MCP_CREDITCARD_MAXIMUM_AMOUNT_DESC', 'Valore massimo dell\'ordine');
define('MODULE_PAYMENT_MCP_CREDITCARD_SORT_ORDER_TITLE', 'Posizionamento');
define('MODULE_PAYMENT_MCP_CREDITCARD_SORT_ORDER_DESC', 'Posizione nell\'elenco dei metodi di pagamento');
define('MODULE_PAYMENT_MCP_CREDITCARD_ALLOWED_TITLE', 'Selezione del Paese');
define('MODULE_PAYMENT_MCP_CREDITCARD_ALLOWED_DESC', 'Consenti solo ordini da Paesi (elenco separato da virgole, ad esempio DE,EN)');
