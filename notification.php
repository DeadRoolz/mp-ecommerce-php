<?php

    echo file_get_contents('mp.json');

    die();

    file_put_contents('mp.json',  file_get_contents("php://input"));

    https://deadroolz-mp-ecommerce-php.herokuapp.com/success.php?collection_id=15118887816&collection_status=approved&payment_id=15118887816&status=approved&external_reference=geanpos.dev@gmail.com&payment_type=credit_card&merchant_order_id=2740115501&preference_id=725736327-06cc71f4-67b0-4aee-bfef-b3b97f407e24&site_id=MLB&processing_mode=aggregator&merchant_account_id=null