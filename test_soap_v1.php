<?php
    require_once 'config.inc.php';

    $client = new SoapClient( MAGENTO_API_URL );

    // If somestuff requires api authentification,
    // then get a session token
    $session = $client->login( MAGENTO_API_NAME, MAGENTO_API_KEY );

    //
    $params = array(array(
        'status'            => array('eq'=>'pending'),
        'customer_is_guest' => array('eq'=>'1'),
    ));
    $result = $client->call( $session, 'sales_order.list', $params );
    
    print_r($result);








    // If you don't need the session anymore
    $client->endSession($session);
