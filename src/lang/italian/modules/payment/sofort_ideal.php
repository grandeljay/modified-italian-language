<?php

/**
 * Italian language
 *
 * @author  Jay Trees <italian-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-italian-language
 * @package GrandelJayItalianLanguage
 */

$sofort_code = 'SOFORT_IDEAL';

define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_TITLE', 'iDEAL');
define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION', '<b>iDEAL</b><br />Non appena il cliente avrà selezionato questo metodo di pagamento e la sua banca, verrà reindirizzato alla sua banca da SOFORT GmbH. Qui effettua il pagamento e viene reindirizzato al sistema del negozio. Se il pagamento viene confermato con successo, SOFORT GmbH invia un promemoria al sistema del negozio, che modifica di conseguenza lo stato di pagamento dell\'ordine.<br />Fornito da SOFORT GmbH');
define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_INFO', 'iDEAL.nl - trasferimenti online per l\'e-commerce nei Paesi Bassi. Per pagare con iDEAL, deve avere un conto presso una delle banche sopra elencate. Effettui il bonifico direttamente alla sua banca. I servizi/merci vengono consegnati o spediti IMMEDIATAMENTE quando sono disponibili!');

define(
    'MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE',
    '<table border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td valign="bottom">
                <a onclick="javascript:window.open(\'http://www.ideal.nl\',\'Información\',\'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1020, height=900\');" style="float:left; width:auto;">{{image}}</a>
            </td>
        </tr>
        <tr>
            <td class="main">{{text}}</td>
        </tr>
	</table>'
);
define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT', 'iDEAL');
define(
    'MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT',
    '<ul>
        <li>Trasferimenti online per l\'e-commerce nei Paesi Bassi.</li>
        <li>Per pagare con iDEAL, deve avere un conto presso una delle banche elencate di seguito.</li>
        <li>Effettua il bonifico direttamente alla sua banca</li>
        <li>I servizi/merci vengono consegnati o spediti in SOFORT, se disponibili.</li>
    </ul>'
);

define('MODULE_PAYMENT_' . $sofort_code . '_SELECTBOX', 'Selezioni la sua banca');
define('MODULE_PAYMENT_' . $sofort_code . '_STATUS_TITLE', 'Attivare il modulo iDEAL');
define('MODULE_PAYMENT_' . $sofort_code . '_STATUS_DESC', 'Vuole accettare pagamenti tramite iDEAL?');

include DIR_FS_CATALOG . 'lang/italian/modules/payment/sofort_payment.php';
