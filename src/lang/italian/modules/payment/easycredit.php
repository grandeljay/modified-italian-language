<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

$lang_array = array(
    'MODULE_PAYMENT_EASYCREDIT_TEXT_TITLE'                    => 'Acquisto a rate con easyCredit',
    'MODULE_PAYMENT_EASYCREDIT_TEXT_INFO'                     => '',
    'MODULE_PAYMENT_EASYCREDIT_TEXT_DESCRIPTION'              => '',
    'MODULE_PAYMENT_EASYCREDIT_ALLOWED_TITLE'                 => 'Aree consentite',
    'MODULE_PAYMENT_EASYCREDIT_ALLOWED_DESC'                  => 'Specifichi <b>individualmente</b> le zone che devono essere consentite per questo modulo (ad esempio, AT,DE (se vuoto, tutte le zone sono consentite)).',
    'MODULE_PAYMENT_EASYCREDIT_STATUS_TITLE'                  => 'Attivare il modulo',
    'MODULE_PAYMENT_EASYCREDIT_STATUS_DESC'                   => 'Vuole accettare pagamenti con ratenkauf attraverso easyCredit?',
    'MODULE_PAYMENT_EASYCREDIT_SORT_ORDER_TITLE'              => 'Ordine di visualizzazione',
    'MODULE_PAYMENT_EASYCREDIT_SORT_ORDER_DESC'               => 'Ordine di visualizzazione. Il numero più piccolo viene visualizzato per primo.',
    'MODULE_PAYMENT_EASYCREDIT_ZONE_TITLE'                    => 'Area di pagamento',
    'MODULE_PAYMENT_EASYCREDIT_ZONE_DESC'                     => 'Quando viene selezionata una zona, il metodo di pagamento si applica solo a quella zona.',
    'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_ID_TITLE'         => 'Stato dell\'ordine temporaneo',
    'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_ID_DESC'          => 'Indica lo stato dell\'ordine per gli ordini non confermati.',
    'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_SUCCESS_ID_TITLE' => 'Stato dell\'ordine soddisfacente',
    'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_SUCCESS_ID_DESC'  => 'Indica lo stato dell\'ordine per gli ordini andati a buon fine.',
    'MODULE_PAYMENT_EASYCREDIT_SHOP_ID_TITLE'                 => 'ID negozio',
    'MODULE_PAYMENT_EASYCREDIT_SHOP_ID_DESC'                  => 'Può trovare l\'ID del suo negozio online nell\'interfaccia commerciante di easyCredit, alla voce Amministrazione del negozio.',
    'MODULE_PAYMENT_EASYCREDIT_SHOP_TOKEN_TITLE'              => 'Password API',
    'MODULE_PAYMENT_EASYCREDIT_SHOP_TOKEN_DESC'               => 'Può impostare la sua password API nell\'interfaccia commerciante di easyCredit, nella sottosezione Amministrazione del negozio.',
    'MODULE_PAYMENT_EASYCREDIT_LOG_LEVEL_TITLE'               => 'Livello di registrazione',
    'MODULE_PAYMENT_EASYCREDIT_LOG_LEVEL_DESC'                => 'Specifica il livello di registro. Valore predefinito: "errore',

    'MODULE_PAYMENT_EASYCREDIT_TEXT_ERROR_HEADING'            => 'Nota',
    'MODULE_PAYMENT_EASYCREDIT_TEXT_ERROR_MESSAGE'            => 'Il pagamento con ratenkauf by easyCredit è stato annullato.',
    'MODULE_PAYMENT_EASYCREDIT_TEXT_ERROR_CHECKBOX'           => 'La preghiamo di accettare gli accordi aggiuntivi necessari per il ratenkauf by easyCredit',
    'MODULE_PAYMENT_EASYCREDIT_TEXT_LEGAL'                    => 'Informazioni precontrattuali sull\'acquisto a rate sono disponibili qui',

    'TEXT_EASYCREDIT_TBAID'                                   => 'Identificatore di processo',
    'TEXT_EASYCREDIT_RATING_PLAN'                             => 'Finanziamento da %s in %s rate con acquisto a rate da easyCredit',
    'TEXT_EASYCREDIT_RATING_PLAN_SHORT'                       => 'Finanziamento da %s al mese',
    'TEXT_EASYCREDIT_RATING_PLAN_CALC'                        => 'Maggiori informazioni sull\'acquisto a rate',
    'TEXT_EASYCREDIT_LEGAL'                                   => 'Esempio rappresentativo secondo il &sect; 6a PAngV',
    'TEXT_EASYCREDIT_NOMINAL_RATE'                            => 'Tasso del prestito p.a. fisso per l\'intera durata del prestito',
    'TEXT_EASYCREDIT_EFFECTIVE_RATE'                          => 'tasso percentuale annuo',
    'TEXT_EASYCREDIT_TOTAL_COST'                              => 'Importazione totale',
    'TEXT_EASYCREDIT_TOTAL_NETTO'                             => 'Importo netto del prestito',
    'TEXT_EASYCREDIT_TOTAL_INTEREST'                          => 'Importo degli interessi',
    'TEXT_EASYCREDIT_MONTHLY_PAYMENT'                         => 'Pagamenti mensili pari a',
    'TEXT_EASYCREDIT_LAST_PAYMENT'                            => 'ultimo pagamento',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
