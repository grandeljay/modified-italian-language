<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

define('TEXT_SETTINGS', 'Brocche');

define('HEADING_TITLE', 'Negozi di fiducia');
define('HEADING_FEATURES', 'Funzioni');

define('TABLE_HEADING_TRUSTEDSHOPS_ID', 'TS-ID');
define('TABLE_HEADING_LANGUAGE', 'Lingua');
define('TABLE_HEADING_STATUS', 'Stato');
define('TABLE_HEADING_ACTION', 'Azione');

define('HEADING_TRUSTBADGE', 'Marchio di fiducia');
define('HEADING_ADVANCED', 'Espansione del sito');

define('TEXT_DATE_ADDED', 'Aggiunto il :');
define('TEXT_LAST_MODIFIED', 'Aggiornato il :');
define('TEXT_TRUSTEDSHOPS_STATUS', 'Stato:');
define('TEXT_TRUSTEDSHOPS_ID', 'ID TS :');
define('TEXT_TRUSTEDSHOPS_LANGUAGES', 'Lingua :');
define('TEXT_TRUSTBADGE_INFO', 'Il badge di fiducia visualizza la sua cache e le recensioni dei clienti nel suo negozio e può essere personalizzato in termini di aspetto e posizionamento. Nella variante "Standard", viene visualizzata solo la cache, mentre nella variante "Valutazioni" vengono visualizzate anche le valutazioni dei suoi clienti. Ulteriori impostazioni possono essere personalizzate selezionando "Personalizzato" (questo richiede conoscenze di programmazione).');

define('TEXT_TRUSTEDSHOPS_BADGE', 'Variante :');
define('TEXT_TRUSTEDSHOPS_POSITION', 'Poste :');
define('TEXT_BADGE_DEFAULT', 'Standard');
define('TEXT_BADGE_SMALL', 'Standard (petit)');
define('TEXT_BADGE_REVIEWS', 'Recensioni');
define('TEXT_BADGE_CUSTOM', 'Su misura');
define('TEXT_BADGE_CUSTOM_REVIEWS', 'Su misura (Recensioni)');
define('TEXT_BADGE_OFFSET', 'Posizione dell\'asse Y:');
define('TEXT_BADGE_INSTRUCTION', 'Nel nostro Centro di Integrazione troverà <a href="https://help.etrusted.com/hc/de/articles/360045842852-Trusted-Shops-nutzen-mit-modified" target="_blank" style="text-decoration:underline">istruzioni passo-passo</a> per la configurazione e l\'integrazione individuale.');
define('TEXT_BADGE_CUSTOM_CODE', 'Inserisca qui il codice del marchio di fiducia:');

define('TEXT_PRODUCT_STICKER_API', 'Valutazione dei prodotti API :');
define('TEXT_PRODUCT_STICKER_API_INFO', 'Con l\'API delle recensioni dei prodotti, le recensioni vengono importate nel negozio. Per farlo, deve impostare un cronjob sull\'URL ' . HTTPS_SERVER . DIR_WS_CATALOG . 'api/trustedshops/cronjob.php viene creato.');
define('TEXT_PRODUCT_STICKER_API_CLIENT', 'Valutazione del prodotto Client API :');
define('TEXT_PRODUCT_STICKER_API_SECRET', 'Recensione del prodotto API Secret :');
define('TEXT_PRODUCT_STICKER_STATUS', 'Stato del widget di valutazione del prodotto :');
define('TEXT_PRODUCT_STICKER', 'Modifichi il codice del widget di valutazione del prodotto:');
define('TEXT_PRODUCT_STICKER_INFO', 'Il widget delle recensioni dei prodotti visualizza le recensioni attuali dei prodotti del suo negozio.<br/>Con le nostre <a target="_blank" href="https://help.etrusted.com/hc/de/articles/360045842852-Trusted-Shops-nutzen-mit-modified" style="text-decoration:underline">istruzioni, può configurare</a> il suo widget di recensioni di prodotti.');
define('TEXT_PRODUCT_STICKER_INTRO', 'Feedback dei clienti');

define('TEXT_REVIEW_STICKER_STATUS', 'Controlla lo stato del widget:');
define('TEXT_REVIEW_STICKER', 'Recensione Widget Code editieren :');
define('TEXT_REVIEW_STICKER_INFO', 'Il widget delle recensioni visualizza le recensioni attuali sul suo negozio.<br/>Segua queste <a target="_blank" href="https://help.etrusted.com/hc/de/articles/360045842852-Trusted-Shops-nutzen-mit-modified" style="text-decoration:underline">istruzioni per impostare</a> il suo widget di recensioni.');
define('TEXT_REVIEW_STICKER_INTRO', 'Feedback dei clienti');

define('TEXT_HEADING_DELETE_TRUSTEDSHOPS', 'ID TS foraggio');
define('TEXT_DELETE_INTRO', 'È sicuro di voler eliminare questo TS-ID?');

define('TEXT_DISABLED', 'disabilitato');
define('TEXT_ENABLED', 'activa');

define('TEXT_LEFT', 'collegamenti');
define('TEXT_RIGHT', 'derecha');
define('TEXT_CENTER', 'centrato');

define('TEXT_DISPLAY_NUMBER_OF_TRUSTEDSHOPS', 'Mostrato da <b>%d</b> a <b>%d</b> (su un totale di <b>%d</b> TS-ID)');

define(
    'TEXT_TS_MAIN_INFO',
    '<img src="images/trustedshops/illustration-ts-products-profile-page.png" style="width:160px;float:right;margin-top:30px;padding-left:30px;"/>
    <h2>Negozi di fiducia</h2>
    Oltre 30.000 aziende in tutta Europa utilizzano il marchio di approvazione Trusted Shops, la protezione degli acquirenti e le recensioni autentiche per ottenere più traffico, maggiori vendite e migliori tassi di conversione. Con il Trustbadge di Trusted Shops, può integrare in modo rapido e semplice le soluzioni di fiducia nel suo software di negozio online modificato.<br/>
    <br/>
    <b>Costruire la fiducia - in soli 5 minuti!</b><br/>
    <br/>
    Il marchio di qualità Trusted Shops, la protezione degli acquirenti e le recensioni autentiche sono sinonimo di fiducia da oltre 20 anni e sono la leva per oltre 30.000 negozi online in Europa per ottenere più traffico, maggiori vendite e migliori tassi di conversione.
    <br/>
    Il modulo Trusted Shops rende facile e veloce convincere i visitatori dell\'affidabilità del suo negozio online. Grazie alla sua semplice installazione, il prodotto può essere utilizzato in soli 5 minuti e generalmente non richiede alcuna conoscenza tecnica preliminare. Con il nostro modulo, lei è sempre tecnicamente aggiornato e non deve fare ulteriori sforzi di manutenzione.<br/>
    <br/>
    <b>Il suo vantaggio:</b> con pochi clic, i visitatori del suo negozio online possono vedere elementi di fiducia come il badge di fiducia o altri widget sul sito, possono beneficiare della protezione degli acquirenti e sono automaticamente invitati a dare un feedback dopo aver effettuato un ordine.'
);
define(
    'TEXT_TS_FEATURES_INFO',
    '<img src="images/trustedshops/illustration-ts-badge.png" style="width:160px;float:right;margin-top:30px;padding-left:30px;"/>
    <h2>Caratteristiche</h2>
    <b>Le caratteristiche in sintesi:</b><br/>
    <br/>
    <ul>
        <li>Mostri il badge di fiducia, integri la protezione degli acquirenti e raccolga le recensioni dei clienti.</li>
        <li>Raccogliere e visualizzare le recensioni dei prodotti</li>
        <li>Configuri più negozi (ad esempio, negozi in più lingue) con diversi ID di negozio di fiducia.</li>
    </ul>
    <br/>
    Nota: per utilizzare il modulo Trusted Shops, deve avere un abbonamento Trusted Shops esistente. Può scoprire di più sui prodotti e sui vantaggi dei Trusted Shops sul nostro sito web o chiamandoci al numero +49 221 7753658.<br/>
    <br/>
    Ha bisogno di aiuto per l\'integrazione? Può trovare istruzioni dettagliate sull\'integrazione nel nostro Centro assistenza.<br/>
    <br/>
    Collegamento: <a href="https://help.etrusted.com/hc/de/articles/360045842852-Trusted-Shops-nutzen-mit-modified" target="_blank" style="text-decoration:underline"> https://help.etrusted.com/hc/de/articles/360045842852-Trusted-Shops-nutzen-mit-modified</a>'
);
define(
    'TEXT_TS_SPECIAL_INFO',
    '<b>Il nostro speciale per lei:<br/>decisamente più conveniente per gli utenti modificati!</b><br/>
    <a class="btnSmall btnCuracao fitting" target="_blank" href="https://checkout.trustedshops.com/?a_aid=modified-shop">Diventi membro ora</a>'
);
