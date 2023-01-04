<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

defined('MODULE_PAYMENT_' . $sofort_code . '_TEXT_TITLE')       || define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_TITLE', 'Immediatamente.');
defined('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION') || define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION', 'Sofort. è il servizio di pagamento gratuito e certificato T&Uuml;V di SOFORT GmbH.');
defined('MODULE_PAYMENT_' . $sofort_code . '_TEXT_INFO')        || define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_INFO', 'Paghi comodamente con il sistema bancario online certificato e testato Sofort. di SOFORT GmbH.');

defined('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE') || define(
    'MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE',
    '<table border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td valign="bottom">
                <a onclick="javascript:window.open(\'https://images.sofort.com/de/su/landing.php\',\'Kundeninformationen\',\'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1020, height=900\');" style="float:left; width:auto;">{{immagine}}</a>
            </td>
        </tr>
        <tr>
            <td class="main">{{testo}}</td>
        </tr>
    </table>'
);
defined('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT') || define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT', 'Sofort.');
defined('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT')     || define(
    'MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT',
    '<ul>
        <li>Paghi in modo semplice e diretto attraverso l\'online banking.</li>
    </ul>'
);

defined('MODULE_PAYMENT_' . $sofort_code . '_STATUS_TITLE') || define('MODULE_PAYMENT_' . $sofort_code . '_STATUS_TITLE', 'Sofort. Attivare');
defined('MODULE_PAYMENT_' . $sofort_code . '_STATUS_DESC')  || define('MODULE_PAYMENT_' . $sofort_code . '_STATUS_DESC', 'Desidera accettare pagamenti tramite Sofort.');
define('MODULE_PAYMENT_' . $sofort_code . '_ALLOWED_TITLE', 'Aree consentite');
define('MODULE_PAYMENT_' . $sofort_code . '_ALLOWED_DESC', 'Specifichi <b>individualmente</b> le zone che devono essere consentite per questo modulo (ad esempio, AT,DE (se vuoto, tutte le zone sono consentite)).');
define('MODULE_PAYMENT_' . $sofort_code . '_TMP_ORDER_TITLE', 'Ordine temporale');
define('MODULE_PAYMENT_' . $sofort_code . '_TMP_ORDER_DESC', 'Vuole creare una prescrizione temporanea?');
define('MODULE_PAYMENT_' . $sofort_code . '_LOGGING_TITLE', 'Attivare la registrazione');
define('MODULE_PAYMENT_' . $sofort_code . '_LOGGING_DESC', 'Vuole abilitare la registrazione?<br/>I file di registro sono archiviati nella cartella /log.');
define('MODULE_PAYMENT_' . $sofort_code . '_KEY_TITLE', 'Pulsante di configurazione');
define('MODULE_PAYMENT_' . $sofort_code . '_KEY_DESC', 'Può trovare la chiave di configurazione nelle impostazioni di Sofort.');
define('MODULE_PAYMENT_' . $sofort_code . '_SORT_ORDER_TITLE', 'Ordine di visualizzazione');
define('MODULE_PAYMENT_' . $sofort_code . '_SORT_ORDER_DESC', 'Ordine di visualizzazione. Il numero più piccolo appare per primo');
define('MODULE_PAYMENT_' . $sofort_code . '_ZONE_TITLE', 'Area di pagamento');
define('MODULE_PAYMENT_' . $sofort_code . '_ZONE_DESC', 'Quando viene selezionata una zona, il metodo di pagamento si applica solo a quella zona.');
define('MODULE_PAYMENT_' . $sofort_code . '_CURRENCY_TITLE', 'Valuta della transazione');
define('MODULE_PAYMENT_' . $sofort_code . '_CURRENCY_DESC', 'Ricezione di valuta estera in conformità con Immediatamente. Configurazione del progetto');
define('MODULE_PAYMENT_' . $sofort_code . '_ORDER_STATUS_ID_TITLE', 'Stato dell\'ordine confermato');
define('MODULE_PAYMENT_' . $sofort_code . '_ORDER_STATUS_ID_DESC', 'Stato dell\'ordine dopo la ricezione di un ordine per il quale è stata inviata una conferma di pagamento con esito positivo.');
define('MODULE_PAYMENT_' . $sofort_code . '_TMP_STATUS_ID_TITLE', 'Stato dell\'ordine temporaneo');
define('MODULE_PAYMENT_' . $sofort_code . '_TMP_STATUS_ID_DESC', 'Stato dell\'ordine per le transazioni non ancora completate');
define('MODULE_PAYMENT_' . $sofort_code . '_UNC_STATUS_ID_TITLE', 'Stato dell\'ordine da controllare');
define('MODULE_PAYMENT_' . $sofort_code . '_UNC_STATUS_ID_DESC', 'Stato dell\'ordine dopo la ricezione di un ordine per il quale è stata inviata una conferma di pagamento errata');
define('MODULE_PAYMENT_' . $sofort_code . '_REC_STATUS_ID_TITLE', 'Stato dell\'ordine dopo la ricezione del denaro');
define('MODULE_PAYMENT_' . $sofort_code . '_REC_STATUS_ID_DESC', 'Stato dell\'ordine dopo l\'accredito del denaro sul suo conto. (Prerequisito: conto con l\'applicazione l\code(01)/sec. <u><a href="https://www.handelsbank.com/" target="_blank">Banca commerciale tedesca</a></u>)');
define('MODULE_PAYMENT_' . $sofort_code . '_REF_STATUS_ID_TITLE', 'Stato dell\'ordine dopo la restituzione');
define('MODULE_PAYMENT_' . $sofort_code . '_REF_STATUS_ID_DESC', 'Stato dell\'ordine dopo il riaddebito.');
define('MODULE_PAYMENT_' . $sofort_code . '_LOSS_STATUS_ID_TITLE', 'Stato dell\'ordine quando il denaro non è ancora arrivato');
define('MODULE_PAYMENT_' . $sofort_code . '_LOSS_STATUS_ID_DESC', 'Stato dell\'ordine se non è stato ricevuto denaro sul suo conto. (Prerequisito: account con il programma <u><a href="https://www.handelsbank.com/" target="_blank">Banca commerciale tedesca</a></u>)');
define('MODULE_PAYMENT_' . $sofort_code . '_REASON_1_TITLE', 'Uso previsto linea 1');
define('MODULE_PAYMENT_' . $sofort_code . '_REASON_1_DESC', 'Se non viene creato un ordine temporaneo, il numero d\'ordine non sarà disponibile. Pertanto, deve essere impostato su -TRANSAZIONE-.');
define('MODULE_PAYMENT_' . $sofort_code . '_REASON_2_TITLE', 'Uso pianificato linea 2');
define('MODULE_PAYMENT_' . $sofort_code . '_REASON_2_DESC', 'Ai fini dell\'utilizzo (27 caratteri al massimo), vengono sostituiti i seguenti segnaposto:<br /> {{identificazione dell\'ordine}<br />{{data dell\'ordine}<br />{identificazione del cliente}<br />{nome del cliente}<br />{azienda del cliente}<br />{email del cliente}.');
define('MODULE_PAYMENT_' . $sofort_code . '_IMAGE_TITLE', 'Selezione del pagamento grafico/testuale');
define('MODULE_PAYMENT_' . $sofort_code . '_IMAGE_DESC', 'Grafica / testo visualizzati quando si selezionano le opzioni di pagamento');
define('MODULE_PAYMENT_' . $sofort_code . '_USER_ID_TITLE', 'Numero cliente');
define('MODULE_PAYMENT_' . $sofort_code . '_USER_ID_DESC', 'Il suo numero cliente Sofort.');
define('MODULE_PAYMENT_' . $sofort_code . '_PROJECT_ID_TITLE', 'Numero del progetto');
define('MODULE_PAYMENT_' . $sofort_code . '_PROJECT_ID_DESC', 'Il numero del progetto responsabile in Sofort. a cui appartiene il pagamento.');
define('MODULE_PAYMENT_' . $sofort_code . '_PROJECT_PASS_TITLE', 'Password del progetto');
define('MODULE_PAYMENT_' . $sofort_code . '_PROJECT_PASS_DESC', 'La password del progetto (in Impostazioni avanzate / Password e funzioni hash)');
define('MODULE_PAYMENT_' . $sofort_code . '_NOTIFY_PASS_TITLE', 'Password di notifica');
define('MODULE_PAYMENT_' . $sofort_code . '_NOTIFY_PASS_DESC', 'La password di notifica (sotto Impostazioni avanzate / Password e funzioni hash)');
define('MODULE_PAYMENT_' . $sofort_code . '_HASH_ALGORITHM_TITLE', 'Algoritmo di hash :');
define('MODULE_PAYMENT_' . $sofort_code . '_HASH_ALGORITHM_DESC', 'L\'algoritmo di hash (in Impostazioni avanzate / Password e funzioni di hash)');
define('MODULE_PAYMENT_' . $sofort_code . '_DESCRIPTION_INSTALL', '<br/><br/>Vuole impostare degli stati d\'ordine appropriati?<br/>Questo sovrascriverà gli stati attualmente definiti.');

defined('TEXT_NO_STATUSUPDATE') || define('TEXT_NO_STATUSUPDATE', 'Nessun aggiornamento sullo stato');

define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_ERROR_HEADING', 'Il seguente errore è stato segnalato da Sofort durante il processo:');
define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_ERROR_MESSAGE', 'Il pagamento tramite Sofort. purtroppo non è possibile o è stato annullato su richiesta del cliente. Scelga un altro metodo di pagamento.');

defined('TEXT_SOFORT_NOT_CREDITED_YET')            || define('TEXT_SOFORT_NOT_CREDITED_YET', 'Immediatamente. Completato con successo');
defined('TEXT_SOFORT_NOT_CREDITED')                || define('TEXT_SOFORT_NOT_CREDITED', 'Denaro non ricevuto in acconto');
defined('TEXT_SOFORT_LOSS')                        || define('TEXT_SOFORT_LOSS', 'Ordine di controllo');
defined('TEXT_SOFORT_RECEIVED')                    || define('TEXT_SOFORT_RECEIVED', 'Denaro ricevuto in acconto');
defined('TEXT_SOFORT_CREDITED')                    || define('TEXT_SOFORT_CREDITED', TEXT_SOFORT_RECEIVED);
defined('TEXT_SOFORT_REFUNDED')                    || define('TEXT_SOFORT_REFUNDED', 'Il denaro è stato interamente rimborsato');
defined('TEXT_SOFORT_CANCELED')                    || define('TEXT_SOFORT_CANCELED', 'Immediatamente. Annullato');
defined('TEXT_SOFORT_WAIT_FOR_MONEY')              || define('TEXT_SOFORT_WAIT_FOR_MONEY', 'Attendere il pagamento');
defined('TEXT_SOFORT_CONFIRMATION_PERIOD_EXPIRED') || define('TEXT_SOFORT_CONFIRMATION_PERIOD_EXPIRED', 'Sofort. Tempo di attesa');
defined('TEXT_SOFORT_REJECTED')                    || define('TEXT_SOFORT_REJECTED', 'Immediatamente. Rifiutato');
defined('TEXT_SOFORT_SOFORT_BANK_ACCOUNT_NEEDED')  || define('TEXT_SOFORT_SOFORT_BANK_ACCOUNT_NEEDED', TEXT_SOFORT_NOT_CREDITED_YET);

define('MODULE_PAYMENT_' . $sofort_code . '_ERROR_TRANSACTION', "Errore nel Callback Transaction-ID: %s");
define('MODULE_PAYMENT_' . $sofort_code . '_ERROR_PAYMENT', "Il pagamento non è ancora stato ricevuto ID transazione: %s");
define('MODULE_PAYMENT_' . $sofort_code . '_ERROR_UNEXPECTED_STATUS', "Errore (SU204) : Stato inatteso Transaction-ID: %s");
define('MODULE_PAYMENT_' . $sofort_code . '_SUCCESS_TRANSACTION', "Pagamento riuscito ID transazione: %s");
define('MODULE_PAYMENT_' . $sofort_code . '_SUCCESS_PAYMENT', "Pagamento ricevuto ID transazione: %s");
define('MODULE_PAYMENT_' . $sofort_code . '_SUCCESS_REFUNDED', "Pagamento rimborsato ID transazione: %s");

$SOFORT_INST_ORDER_STATUS_TMP_NAME   = 'Temperatura';
$SOFORT_INST_ORDER_STATUS_UNC_NAME   = 'Nel frattempo';
$SOFORT_INST_ORDER_STATUS_LOSS_NAME  = 'Nel frattempo';
$SOFORT_INST_ORDER_STATUS_REC_NAME   = 'Ricezione del pagamento';
$SOFORT_INST_ORDER_STATUS_REF_NAME   = 'Pagamento rimborsato';
$SOFORT_INST_ORDER_STATUS_ORDER_NAME = 'Pagado';
