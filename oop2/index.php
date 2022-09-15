<?php
declare(strict_types=1);

require_once './Transaction.php';

// classes and object

$transaction = new Transaction(23, 'Transaction1');

$transaction->amount = 20;

var_dump($transaction->amount);


?>