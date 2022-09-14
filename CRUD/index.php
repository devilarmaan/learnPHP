<?php

require_once './Transaction.php';

// classes and object

$transaction = new Transaction();

$transaction->amount = 20;

var_dump($transaction->amount);


?>