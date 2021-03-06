<?php

// Sacado de aqui --> http://php.net/manual/es/book.geoip.php

require_once("geoip2.phar");
use GeoIp2\Database\Reader;
// City DB
$reader = new Reader('GeoLite2-City.mmdb');
$record = $reader->city($ip);
// or for Country DB
// $reader = new Reader('/path/to/GeoLite2-Country.mmdb');
// $record = $reader->country($_SERVER['REMOTE_ADDR']);
print($record->country->isoCode . "<br>");
print($record->country->name . "\n");
print($record->country->names['es'] . "\n");
print($record->mostSpecificSubdivision->name . "\n");
print($record->mostSpecificSubdivision->isoCode . "\n");
print($record->city->name . "\n");
print($record->postal->code . "\n");
print($record->location->latitude . "\n");
print($record->location->longitude . "\n");
