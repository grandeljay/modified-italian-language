<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('MODULE_ORDER_TOTAL_PAYMENT_HELP_LINK', ' <a onclick="window.open(\'popup_help.php?type=order_total&modul=ot_payment&lng=french\', \'Hilfe\', \'scrollbars=yes,resizable=yes,menubar=yes,width=800,height=600\'); return false" target="_blank" href="popup_help.php?type=order_total&modul=ot_payment&lng=french"><b>[AIUTO]</b></a>');
define(
    'MODULE_ORDER_TOTAL_PAYMENT_HELP_TEXT',
    '<h2>Sconto e sovrapprezzo sui tipi di pagamento</h2>
    Se si desiderano più scale di sconto (l\'impostazione predefinita è <b>3</b>), il valore della variabile $num (file di lingua) o $this-&gt;num (file di modulo) deve essere modificato al valore desiderato in tutti i file prima dell\'installazione.
    <hr>
    <h3>Campi della scala di sconto</h3>
    <p class="red">Nota: l\'indirizzo di consegna è rilevante per i codici paese. Se uno sconto/sovrapprezzo deve essere applicato a tutti i Paesi, utilizzi 00 come codice o ometta del tutto la specifica del codice Paese (compreso il &quot;|&quot;!).</p>
    <h4>Utilizzi la seguente notazione per gli sconti:</h4>
    <pre> <span class="blue">DE|100</span>:<span class="red">4</span>,<span class="green">200</span>:<span class="red">5</span></pre>
    <p>Significato:</p>
    <p>Per i clienti provenienti dalla<span class="blue">Germania</span>, è previsto uno sconto del <span class="red">4%</span> a partire da <span class="green">100 euro</span>, e uno sconto del <span class="red">5%</span> a partire da <span class="green">200 euro</span>.</p>
    <pre> <span class="green">100</span>:<span class="red">2</span>,<span class="green">200</span>:<span class="red">3</span></pre>
    <p>Significato:</p>
    <p>Per i clienti di tutti i Paesi, a partire da <span class="green">100 euro</span> viene applicato uno sconto <span class="red">del 2%</span> <span class="green">,</span> a partire da <span class="green">200 euro</span> uno sconto del <span class="red">3%</span>.</p>
    <h4>Utilizzi la seguente notazione per i supplementi:</h4>
    <pre> <span class="blue">DE|100</span>:<span class="red">-3</span></pre>
    <p>Significato:</p>
    <p>Per i clienti provenienti dalla<span class="blue">Germania</span>, verrà addebitato un supplemento del <span class="red">3%</span> a partire da <span class="green">100 euro</span>.</p>
    <h4>Esempio per Paypal</h4>
    1. Scala di sconto
    <pre> <span class="blue">DE|0</span>:<span class="red">-1.9&amp;</span><span class="lila">-0.35</span></pre>
    2a scala di sconti
    <pre> <span class="blue">00|0</span>:<span class="red">-3.4&amp;</span><span class="lila">-0.35</span></pre>
    <p>Significato:</p>
    <p>Per i clienti provenienti dalla<span class="blue">Germania</span>, si applica un supplemento dell\'<span class="red">1,9%</span> più 0 <span class="lila">,35</span> euro a partire da <span class="lila">0 euro</span> (cioè sempre).</p>
    <p>Per i clienti di <span class="blue">tutti gli altri Paesi (00=tutti</span> ), verrà addebitato un supplemento del <span class="red">3,4%</span> più 0 <span class="lila">,35</span> euro da <span class="green">0 euro</span>.</p>
    <p>È importante che le voci siano inserite nell\'ordine corretto (gli altri Paesi sempre per ultimi) e che &quot;Calcolo multiplo&quot; sia impostato su &quot;falso&quot;, altrimenti verranno calcolati entrambi i supplementi.</p>
    <h4>Esempio per gli importi fissi</h4>
    <pre> <span class="green">0</span>:<span class="red">0&amp;</span><span class="lila">-2</span></pre>
    <p>Significato:</p>
    <p>Per i clienti di tutti i Paesi, viene calcolato un supplemento dello <span class="red">0%</span> (cioè nessun supplemento percentuale) più <span class="lila">2,00 EUR</span> (il supplemento fisso) a partire da <span class="lila">0 EUR</span> (cioè sempre).</p>
    <hr>
    <h3>Campi del tipo di pagamento</h3>
    <p>Inserisca il <b>codice interno</b> del metodo di pagamento nei campi, ad esempio il <b>vaglia postale</b> per il pagamento anticipato o il <b>codice</b> per il contrassegno.</p> <p>Separa i diversi tipi di pagamento con delle virgoleVedi Moduli</p>-&gt; Opzioni di pagamento -&gt; <p>colonna</p>&quot;Nome del modulo (per uso interno)&quot;.<br/><br/>
    <hr>
    <h3>Visualizzazione del tipo di pagamento nel processo d\'ordine</h3>
    Se desidera che lo sconto corrispondente venga visualizzato nel processo dell\'ordine quando seleziona il metodo di pagamento, imposti l\'opzione &quot;Visualizza nei metodi di pagamento&quot; su &quot;vero&quot;. <br/><br/>
    Inoltre, può impostare il tipo di visualizzazione con l\'opzione &quot;Tipo di visualizzazione nel processo di checkout quando si seleziona il pagamento&quot;:
    <p> -- Predefinito: percentuale o importo, a seconda delle voci del piano di sconti.</p>
    <p> -- Prezzo: l\'importo effettivo viene sempre visualizzato.</p></hr></hr></hr>'
);

define('MODULE_ORDER_TOTAL_PAYMENT_TITLE', 'Sconto e sovrapprezzo sui metodi di pagamento');
define('MODULE_ORDER_TOTAL_PAYMENT_DESCRIPTION', 'Sconto e sovrapprezzo sui metodi di pagamento' . MODULE_ORDER_TOTAL_PAYMENT_HELP_LINK);

define('MODULE_ORDER_TOTAL_PAYMENT_STATUS_TITLE', 'Mostra lo sconto');
define('MODULE_ORDER_TOTAL_PAYMENT_STATUS_DESC', 'Desidera attivare lo sconto sul pagamento?');

define('MODULE_ORDER_TOTAL_PAYMENT_SORT_ORDER_TITLE', '<hr>Ordine di classifica');
define('MODULE_ORDER_TOTAL_PAYMENT_SORT_ORDER_DESC', 'Ordine di visualizzazione');

if (defined('MODULE_ORDER_TOTAL_PAYMENT_NUMBER')) {
    for ($j = 1; $j <= MODULE_ORDER_TOTAL_PAYMENT_NUMBER; $j++) {
        define('MODULE_ORDER_TOTAL_PAYMENT_PERCENTAGE' . $j . '_TITLE', '<hr>' . $j . '. Tabella degli sconti');
        define('MODULE_ORDER_TOTAL_PAYMENT_PERCENTAGE' . $j . '_DESC', 'Sconto (valore minimo: percentuale)');
        define('MODULE_ORDER_TOTAL_PAYMENT_TYPE' . $j . '_TITLE', $j . '. Metodo di pagamento');
        define('MODULE_ORDER_TOTAL_PAYMENT_TYPE' . $j . '_DESC', 'Forme di pagamento sulle quali sarà applicato lo sconto');
    }
}

define('MODULE_ORDER_TOTAL_PAYMENT_INC_SHIPPING_TITLE', '<hr>I costi di spedizione sono inclusi');
define('MODULE_ORDER_TOTAL_PAYMENT_INC_SHIPPING_DESC', 'Le spese di spedizione vengono detratte');

define('MODULE_ORDER_TOTAL_PAYMENT_INC_TAX_TITLE', '<hr>TVA include');
define('MODULE_ORDER_TOTAL_PAYMENT_INC_TAX_DESC', 'L\'IVA viene detratta con');

define('MODULE_ORDER_TOTAL_PAYMENT_CALC_TAX_TITLE', '<hr>Calcolo dell\'IVA');
define('MODULE_ORDER_TOTAL_PAYMENT_CALC_TAX_DESC', 'Ricalcolare il totale dell\'IVA');

define('MODULE_ORDER_TOTAL_PAYMENT_ALLOWED_TITLE', '<hr>Aree consentite');
define('MODULE_ORDER_TOTAL_PAYMENT_ALLOWED_DESC', 'Specifichi <b>individualmente</b> le zone che devono essere consentite per questo modulo (ad esempio, AT,DE (se vuoto, tutte le zone sono consentite)).');

define('MODULE_ORDER_TOTAL_PAYMENT_DISCOUNT', 'Rabatt');
define('MODULE_ORDER_TOTAL_PAYMENT_FEE', 'Supplemento');

define('MODULE_ORDER_TOTAL_PAYMENT_TAX_CLASS_TITLE', '<hr>Classe fiscale');
define('MODULE_ORDER_TOTAL_PAYMENT_TAX_CLASS_DESC', 'Il tipo di imposta non è rilevante e viene utilizzato solo per evitare un messaggio di errore.');

define('MODULE_ORDER_TOTAL_PAYMENT_BREAK_TITLE', '<hr>Calcola i multipli');
define('MODULE_ORDER_TOTAL_PAYMENT_BREAK_DESC', 'Dovrebbero essere possibili più calcoli? In caso contrario, verrà annullato dopo il primo sconto corrispondente.');

define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_IN_CHECKOUT_PAYMENT_TITLE', '<hr>Visualizzazione con i metodi di pagamento');
define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_IN_CHECKOUT_PAYMENT_DESC', 'Visualizzazione nel processo d\'ordine durante la selezione del pagamento');

define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_TYPE_TITLE', '<hr>Visualizzazione del tipo di metodo di pagamento');
define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_TYPE_DESC', 'Tipo di visualizzazione nel processo d\'ordine quando seleziona il pagamento <br />-- predefinito: percentuale o importo, a seconda delle voci del piano sconti<br />-- prezzo: l\'importo effettivo viene sempre visualizzato');

define('MODULE_ORDER_TOTAL_PAYMENT_NUMBER_TITLE', 'Numero di metodi di pagamento');
define('MODULE_ORDER_TOTAL_PAYMENT_NUMBER_DESC', 'Numero di sconti e supplementi sulle modalità di pagamento');
