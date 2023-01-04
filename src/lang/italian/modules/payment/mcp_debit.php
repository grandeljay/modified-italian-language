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
    'MODULE_PAYMENT_MCP_DEBIT_TEXT_DESCRIPTION',
    'Modulo micropagamento&trade; per addebito diretto
    <br /><br />
    Crediti<br />
    <b>Uscite</b><br />
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
define('MODULE_PAYMENT_MCP_DEBIT_TEXT_TITLE', 'micropago&trade; Cargo');
define('MODULE_PAYMENT_MCP_DEBIT_TEXT_TITLE_EXTERN', 'Addebito diretto');
define(
    'MODULE_PAYMENT_MCP_DEBIT_TEXT_INFO',
    '<div style="margin:10px; height:140px;">
        <div style="float: right;">
            <img src="./images/micropayment/logo_small.png" width="150"/>
        </div>
        <div style="float: left;">
            <b>La preghiamo di preparare i dati del suo conto.</b><br />
            Per completare il suo ordine, la reindirizzeremo al sito<br /> del nostro fornitore di servizi di pagamento micropayment&trade;.<br /><br />
            ✔ sicuro ✔ semplice ✔ nessuna registrazione
        </div>
    </div>'
);
define('MODULE_PAYMENT_MCP_DEBIT_STATUS_TITLE', 'Flusso diretto');
define('MODULE_PAYMENT_MCP_DEBIT_STATUS_DESC', 'Modulo di addebito diretto Micropayment&trade;.');
define('MODULE_PAYMENT_MCP_DEBIT_MINIMUM_AMOUNT_TITLE', 'Valore minimo del carrello');
define('MODULE_PAYMENT_MCP_DEBIT_MINIMUM_AMOUNT_DESC', 'Valore minimo del carrello per questo metodo di pagamento');
define('MODULE_PAYMENT_MCP_DEBIT_MAXIMUM_AMOUNT_TITLE', 'Valore massimo del carrello');
define('MODULE_PAYMENT_MCP_DEBIT_MAXIMUM_AMOUNT_DESC', 'Valore massimo del carrello per questo metodo di pagamento');
define('MODULE_PAYMENT_MCP_DEBIT_SORT_ORDER_TITLE', 'Posizionamento');
define('MODULE_PAYMENT_MCP_DEBIT_SORT_ORDER_DESC', 'Posizionamento nella scelta del metodo di pagamento');
define('MODULE_PAYMENT_MCP_DEBIT_ALLOWED_TITLE', 'Selezione del Paese');
define('MODULE_PAYMENT_MCP_DEBIT_ALLOWED_DESC', 'Consenti solo ordini da Paesi (elenco separato da virgole, ad esempio DE,EN)');
