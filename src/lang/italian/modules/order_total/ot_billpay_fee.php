<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

$prefix = 'MODULE_ORDER_TOTAL_BILLPAY_';

define($prefix . 'FEE_TITLE', 'Supplemento per il metodo di pagamento della fattura (BillPay)');
define($prefix . 'FEE_DESCRIPTION', 'Calcolo degli addebiti per gli ordini con metodo di pagamento a fattura (BillPay)');

define($prefix . 'FEE_STATUS_TITLE', 'Sovrapprezzo per il metodo di pagamento acquistato sul conto');
define($prefix . 'FEE_STATUS_DESC', 'Calcolo del tasso di turnover');

define($prefix . 'FEE_SORT_ORDER_TITLE', 'Ordine di classifica');
define($prefix . 'FEE_SORT_ORDER_DESC', 'Ordine di visualizzazione');

define($prefix . 'FEE_TYPE_TITLE', 'Tipo di tariffa');
define($prefix . 'FEE_TYPE_DESC', 'Selezionare il tipo di carica. Il compenso può essere un importo fisso, una percentuale del totale della fattura o un importo progressivo.');

define($prefix . 'FEE_PERCENT_TITLE', 'Percentuale');
define($prefix . 'FEE_PERCENT_DESC', 'Inserisca il valore percentuale come numero intero con il Paese a cui sta inviando (esempio: DE:5;CH:7). Questo valore percentuale sarà aggiunto al totale della fattura se il tipo di tariffa "percentuale" è attivato.');

define($prefix . 'FEE_VALUE_TITLE', 'valore fisso');
define($prefix . 'FEE_VALUE_DESC', 'Inserisca il valore fisso (netto) con il Paese a cui sta inviando (esempio: DE:5;CH:7). Questo valore viene aggiunto al totale della fattura se viene attivato il tipo di tariffa "fissa".');

define($prefix . 'FEE_GRADUATE_TITLE', 'Incredibile');
define($prefix . 'FEE_GRADUATE_DESC', 'Inserisca il tariffario qui, nella forma {Totale fattura}={Fattura netta};{Totale fattura}={Fattura netta};. Questa scala si applica al totale della fattura se il tipo di tariffa "Scala" è abilitato.');

define($prefix . 'FEE_TAX_CLASS_TITLE', 'Classe fiscale');
define($prefix . 'FEE_TAX_CLASS_DESC', 'Scelga una classe fiscale.');

defined($prefix . 'FEE_FROM_TOTAL') || define($prefix . 'FEE_FROM_TOTAL', 'dell\'importo della fattura');
