<?php 
    require_once 'vendor/autoload.php';

    $google_client = new Google_Client();
    
    $google_client->setClientId('83445485571-mididlc73plhhk15tnnagj0rlb30j5kj.apps.googleusercontent.com');

    $google_client->setClientSecret('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');

    $google_client->setRedirectUri('http://localhost/martianbistro/index.php');
    $google_client->addScope('email');
    
    $google_client->addScope('profile');
?>