<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

$lang_array = array(
    'TEXT_PAYPAL_MODULE_HEADING_TITLE'              => 'Prodotti PayPal',

    'TABLE_HEADING_MODULES'                         => 'Modulo',
    'TABLE_HEADING_FILENAME'                        => 'Nome del modulo (per uso interno)',
    'TABLE_HEADING_SORT_ORDER'                      => 'Classifica',
    'TABLE_HEADING_STATUS'                          => 'Stato',
    'TABLE_HEADING_ACTION'                          => 'Azione',

    'TABLE_HEADING_WALL_STATUS'                     => 'Visualizzazione sulla parete dei pagamenti',
    'TABLE_HEADING_WALL_DESCRIPTION'                => 'Descrizione',

    'TEXT_PAYPAL_MODULE_PROFILE'                    => 'Profilo',
    'TEXT_PAYPAL_NO_PROFILE'                        => 'Pas de profil web',
    'TEXT_PAYPAL_STANDARD_PROFILE'                  => 'Profil Web standard',

    'TEXT_PAYPAL_MODULE_LINK_SUCCESS'               => 'Link nella casella',
    'TEXT_PAYPAL_MODULE_LINK_SUCCESS_INFO'          => 'Il link per il pagamento deve apparire alla cassa?',

    'TEXT_PAYPAL_MODULE_LINK_ACCOUNT'               => 'Link al conto im',
    'TEXT_PAYPAL_MODULE_LINK_ACCOUNT_INFO'          => 'Il link per il pagamento deve apparire sul conto?',

    'TEXT_PAYPAL_MODULE_PRODUCT'                    => 'Articolo Bouton Express',
    'TEXT_PAYPAL_MODULE_PRODUCT_INFO'               => 'Il pulsante PayPal Express deve apparire nelle informazioni sull \'articolo?',

    'TEXT_PAYPAL_MODULE_CART_BNPL'                  => 'Paga più tardi" nel carrello',
    'TEXT_PAYPAL_MODULE_CART_BNPL_INFO'             => 'Il pulsante PayPal Pay Later deve apparire nel carrello?',

    'TEXT_PAYPAL_MODULE_PRODUCT_BNPL'               => 'Pulsante di pagamento successivo per articolo',
    'TEXT_PAYPAL_MODULE_PRODUCT_BNPL_INFO'          => 'Il pulsante PayPal Paga più tardi deve apparire nelle informazioni sull\'articolo?',

    'TEXT_PAYPAL_MODULE_CHECKOUT_BNPL'              => 'Paga più tardi" alla cassa',
    'TEXT_PAYPAL_MODULE_CHECKOUT_BNPL_INFO'         => 'Il pulsante PayPal Pay Later deve apparire alla cassa?',

    'TEXT_PAYPAL_MODULE_USE_TABS'                   => 'Fisarmonica / Schede',
    'TEXT_PAYPAL_MODULE_USE_TABS_INFO'              => 'Il modello utilizza una fisarmonica o delle schede nella scatola?',

    'TEXT_PAYPAL_MODULE_SHIPPING_COST'              => 'Costi di spedizione provvisori',
    'TEXT_PAYPAL_MODULE_SHIPPING_COST_INFO'         => 'Inserisca l\'importo delle spese di spedizione provvisorie.',

    'TEXT_PAYPAL_MODULE_ORDER_STATUS_ACCEPTED'      => 'Stato dell\'ordine',
    'TEXT_PAYPAL_MODULE_ORDER_STATUS_ACCEPTED_INFO' => 'Selezionare lo stato dell\'ordine.<br/><b>Importante:</b> il nome non deve contenere alcun carattere.a palabra "pagado".',

    'TEXT_PAYPAL_MODULE_UPSTREAM_PRODUCT'           => 'Scatola di raccolta per articolo',
    'TEXT_PAYPAL_MODULE_UPSTREAM_PRODUCT_INFO'      => 'I dettagli del pagamento rateale devono essere esposti insieme all\'articolo?',

    'TEXT_PAYPAL_MODULE_UPSTREAM_CART'              => 'Cestino della spesa Cassetta di finanziamento',
    'TEXT_PAYPAL_MODULE_UPSTREAM_CART_INFO'         => 'I dettagli del pagamento rateale devono apparire nel carrello?',

    'TEXT_PAYPAL_MODULE_UPSTREAM_PAYMENT'           => 'Cassetta di finanziamento nell\'ufficio del cassiere',
    'TEXT_PAYPAL_MODULE_UPSTREAM_PAYMENT_INFO'      => 'I dettagli del pagamento rateale devono essere visualizzati alla cassa?',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
