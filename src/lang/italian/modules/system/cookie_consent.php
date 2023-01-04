<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('MODULE_COOKIE_CONSENT_STATUS_TITLE', 'Modulo di stato');
define('MODULE_COOKIE_CONSENT_STATUS_DESC', 'Attivare il modulo?');
define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_TITLE', 'Impostazione di un cookie leggibile');
define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_DESC', '');

define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_DETAIL', 'Se utilizza Google Tag Manager o un altro software, potrà inserire script e impostare cookie solo se il visitatore lo consente. È possibile impostare un cookie leggibile aggiuntivo, in modo che il tag manager possa leggere la richiesta del cliente.<br /><br />Configurazione in Google Tag Manager:<br />Vada al menu &quot;Variabili&quot; e crei una nuova variabile in &quot;Variabili personalizzate&quot;. Per esempio, lo chiami &quot;Cookieconsent&quot;.<br />Poi clicchi su &quot;Definisci una variabile&quot; e selezioni il tipo &quot;First-Party-Cookie&quot;. Inserisca il nome del cookie &quot;MODOilTrack&quot;.<br /><br />Può quindi modificare il suo &quot;Trigger&quot;.<br />Impostate il tipo di attivazione su &quot;Chiamata di pagina&quot; e selezionate l\'opzione &quot;Alcune chiamate di pagina&quot;.<br />Come condizione, specifichi: &quot; <em>Cookieconsent&quot;</em> (nome della variabile) contiene <em>[&quot;1&quot;:true]</em>. Può trovare il valore contenuto nel cookie nella configurazione cookieconsent.<br /><br />Può trovare le istruzioni illustrate qui: <a href="https://www.dair-media.net/blog/dsgvo-cookie-einwilligung-im-google-tag-manager-beruecksichtigen/" target="_blank"> https://www.dair-media.net/blog/dsgvo-cookie-einwilligung-im-google-tag-manager-beruecksichtigen/.</a>');

define('MODULE_COOKIE_CONSENT_EXTENDED_DESCRIPTION', '<strong><font color="red">ATTENZIONE:</font></strong> Continui ad effettuare le impostazioni in "Impostazioni" -&gt;. <a href="' . ((defined('FILENAME_COOKIE_CONSENT') && function_exists('xtc_href_link')) ? xtc_href_link(FILENAME_COOKIE_CONSENT) : '#') . '"><strong>"Consenso ai cookie".</strong></a> La prego di farlo!');
define('MODULE_COOKIE_CONSENT_MORE_INFO', 'Maggiori informazioni :');
