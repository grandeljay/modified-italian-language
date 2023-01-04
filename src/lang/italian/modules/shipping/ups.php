<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('MODULE_SHIPPING_UPS_TEXT_TITLE', 'United Parcel Service Standard');
define('MODULE_SHIPPING_UPS_TEXT_DESCRIPTION', 'United Parcel Service Standard - Versandmodul');
define('MODULE_SHIPPING_UPS_TEXT_WAY', 'Spedizione a');
define('MODULE_SHIPPING_UPS_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_UPS_TEXT_FREE', 'Ab EUR ' . ((defined('MODULE_SHIPPING_UPS_FREEAMOUNT')) ? MODULE_SHIPPING_UPS_FREEAMOUNT : '') . ', spediremo il suo ordine gratuitamente!');
define('MODULE_SHIPPING_UPS_TEXT_LOW', 'Ab EUR ' . ((defined('MODULE_SHIPPING_UPS_FREEAMOUNT')) ? MODULE_SHIPPING_UPS_FREEAMOUNT : '') . ', spediremo il suo ordine con costi di spedizione ridotti!');
define('MODULE_SHIPPING_UPS_INVALID_ZONE', 'Purtroppo, la consegna in questo Paese non è possibile.');
define('MODULE_SHIPPING_UPS_UNDEFINED_RATE', 'Le spese di spedizione non possono essere calcolate in questo momento.');

define('MODULE_SHIPPING_UPS_STATUS_TITLE', 'UPS standard');
define('MODULE_SHIPPING_UPS_STATUS_DESC', 'Vuole offrire la spedizione UPS Standard?');
define('MODULE_SHIPPING_UPS_HANDLING_TITLE', 'Supplemento');
define('MODULE_SHIPPING_UPS_HANDLING_DESC', 'Spese di gestione per questo metodo di spedizione in euro');
define('MODULE_SHIPPING_UPS_TAX_CLASS_TITLE', 'Tipo di imposta');
define('MODULE_SHIPPING_UPS_TAX_CLASS_DESC', 'Selezioni l\'aliquota IVA per questo metodo di spedizione.');
define('MODULE_SHIPPING_UPS_ZONE_TITLE', 'Area di distribuzione');
define('MODULE_SHIPPING_UPS_ZONE_DESC', 'Se seleziona una zona, questo metodo di spedizione è offerto solo in quella zona.');
define('MODULE_SHIPPING_UPS_SORT_ORDER_TITLE', 'Ordine di visualizzazione');
define('MODULE_SHIPPING_UPS_SORT_ORDER_DESC', 'Il più basso viene visualizzato per primo.');
define('MODULE_SHIPPING_UPS_ALLOWED_TITLE', 'Zone di spedizione individuali');
define('MODULE_SHIPPING_UPS_ALLOWED_DESC', 'Specifichi <b>individualmente</b> le aree in cui la spedizione deve essere possibile, ad esempio AT,DE.');
define('MODULE_SHIPPING_UPS_FREEAMOUNT_TITLE', 'Spedizione nazionale gratuita');
define('MODULE_SHIPPING_UPS_FREEAMOUNT_DESC', 'Valore minimo dell\'ordine per la consegna nazionale gratuita e la consegna all\'estero scontata.');

define('MODULE_SHIPPING_UPS_COUNTRIES_1_TITLE', 'Stati per UPS Standard Zona 1');
define('MODULE_SHIPPING_UPS_COUNTRIES_1_DESC', 'Abbreviazioni ISO separate da virgole per gli Stati della Zona 1 (inserisca WORLD per il resto del mondo):');
define('MODULE_SHIPPING_UPS_COST_1_TITLE', 'Tariffe per UPS Standard Zona 1');
define('MODULE_SHIPPING_UPS_COST_1_DESC', 'I costi di spedizione si basano sul peso nella zona 1. Esempio: una spedizione tra 0 e 4 kg costa 5,15 euro = 4:5,15,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_2_TITLE', 'Stato per UPS Zona standard 3');
define('MODULE_SHIPPING_UPS_COUNTRIES_2_DESC', 'Abbreviazioni ISO separate da virgole per gli Stati della Zona 3 (inserisca WORLD per il resto del mondo):');
define('MODULE_SHIPPING_UPS_COST_2_TITLE', 'Tariffa per UPS Standard Zona 3');
define('MODULE_SHIPPING_UPS_COST_2_DESC', 'I costi di spedizione si basano sul peso nella zona 3. Esempio: una spedizione tra 0 e 4 kg costa 13,75 euro = 4:13,75,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_3_TITLE', 'Stati per UPS Zona Standard 31');
define('MODULE_SHIPPING_UPS_COUNTRIES_3_DESC', 'Le abbreviazioni ISO, separate da virgole, degli Stati della zona 31 (inserisca WORLD per il resto del mondo) :');
define('MODULE_SHIPPING_UPS_COST_3_TITLE', 'Tariffe per UPS Standard Zona 31');
define('MODULE_SHIPPING_UPS_COST_3_DESC', 'I costi di spedizione si basano sul peso nella zona 31. Esempio: una spedizione da 0 a 4 kg costa 23,50 euro = 4:23,50,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_4_TITLE', 'Stato per UPS Standard Zona 4');
define('MODULE_SHIPPING_UPS_COUNTRIES_4_DESC', 'Abbreviazioni ISO separate da virgole per gli Stati della Zona 4 (inserisca WORLD per il resto del mondo):');
define('MODULE_SHIPPING_UPS_COST_4_TITLE', 'Tariffa per UPS Standard Zona 4');
define('MODULE_SHIPPING_UPS_COST_4_DESC', 'I costi di spedizione si basano sul peso nella zona 4. Esempio: una spedizione da 0 a 4 kg costa 25,40 euro = 4:25,40,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_5_TITLE', 'Stati per UPS Zona Standard 41');
define('MODULE_SHIPPING_UPS_COUNTRIES_5_DESC', 'Le abbreviazioni ISO, separate da virgole, degli Stati della zona 41 (inserisca WORLD per il resto del mondo) :');
define('MODULE_SHIPPING_UPS_COST_5_TITLE', 'Tariffe per UPS Standard Zona 41');
define('MODULE_SHIPPING_UPS_COST_5_DESC', 'I costi di spedizione si basano sul peso nella zona 41. Esempio: una spedizione tra 0 e 4 kg costa 30,00 euro = 4:30,00,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_6_TITLE', 'Stato per UPS Zona standard 5');
define('MODULE_SHIPPING_UPS_COUNTRIES_6_DESC', 'Abbreviazioni ISO separate da virgole per gli Stati della Zona 5 (inserisca WORLD per il resto del mondo):');
define('MODULE_SHIPPING_UPS_COST_6_TITLE', 'Tariffa per UPS Standard Zona 5');
define('MODULE_SHIPPING_UPS_COST_6_DESC', 'I costi di spedizione si basano sul peso nella zona 5. Esempio: una spedizione da 0 a 4 kg costa 34,35 euro = 4:34,35,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_7_TITLE', 'Stato per UPS Zona standard 6');
define('MODULE_SHIPPING_UPS_COUNTRIES_7_DESC', 'Abbreviazioni ISO separate da virgole per gli Stati della Zona 6 (inserisca WORLD per il resto del mondo):');
define('MODULE_SHIPPING_UPS_COST_7_TITLE', 'Tariffa per UPS Standard Zona 6');
define('MODULE_SHIPPING_UPS_COST_7_DESC', 'I costi di spedizione si basano sul peso nella zona 6. Esempio: una spedizione da 0 a 4 kg costa 37,10 euro = 4:37,10,...');
