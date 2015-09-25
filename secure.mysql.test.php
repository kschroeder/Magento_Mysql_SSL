<pre>
<?php

require_once 'app/Mage.php';
Mage::app();
$connection = Mage::getSingleton('core/resource')->getConnection('default_setup');

var_dump($connection->query('show status like \'%ssl%\';')->fetchAll());
