<?php
    require_once 'config/config.inc.php';

    $client = new SoapClient( MAGENTO_API_URL );

    // If somestuff requires api authentification,
    // then get a session token
    $session = $client->login( MAGENTO_API_NAME, MAGENTO_API_KEY );

    $result = $client->salesOrderInvoiceList( $session );
    print_r($result);








    // If you don't need the session anymore
    $client->endSession($session);
