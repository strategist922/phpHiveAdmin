﻿<?php

include_once 'config.inc.php';

$transport->open();

$client->execute('add jar '.$env['hive_jar']);

$status = $client->getQueryPlan();
var_dump($status);

//echo 'Field Schemas: '.$status->fieldSchemas.'<br />';
//echo 'Properties: '.$status->properties.'<br />';

$transport->close();

?>