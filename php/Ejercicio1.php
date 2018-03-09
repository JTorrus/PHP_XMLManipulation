<?php

header('Content-Type:text/xml');
$xmlFile = simplexml_load_file("../xml/bookstore.xml");

if (!empty($xmlFile)) {
    echo $xmlFile->asXML();
} else {
    echo "There was an error loading the XML file";
}