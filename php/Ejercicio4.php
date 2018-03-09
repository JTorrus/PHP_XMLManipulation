<?php

$dom = new DOMDocument();

$smartphones = $dom->createElement("smartphones");

$smartphoneBrands = ["Samsung", "iPhone", "Xiaomi", "OnePlus", "Huawei"];
$smartphoneModels = ["Galaxy S9+", "X", "Mi Mix 2", "5T", "Mate 10 Lite"];
$smartphoneScreenSizes = ["6.2''", "5.8''", "5.5''", "5.5''", "5.8''"];
$smartphoneStorages = ["64GB", "64GB", "32GB", "32GB", "64GB"];
$smartphoneResolutions = ["2960x1440", "2436x1125", "1080x2160", "2034x1080", "1080x2160"];
$smartphonePrices = ["900$", "1200$", "600$", "450$", "720$"];

for ($i = 0; $i < 5; $i++) {
    $newSmartphone = $dom->createElement("smartphone");
    $newSmartphone->setAttribute("code", $i+1);
    $newBrand = $dom->createElement("brand", $smartphoneBrands[$i]);

    $newSmartphone->appendChild($newBrand);
    $newBrand->appendChild($dom->createElement("model", $smartphoneModels[$i]));
    $newSmartphone->appendChild($dom->createElement("screen-size", $smartphoneScreenSizes[$i]));
    $newSmartphone->appendChild($dom->createElement("storage", $smartphoneStorages[$i]));
    $newSmartphone->appendChild($dom->createElement("resolution", $smartphoneResolutions[$i]));
    $newSmartphone->appendChild($dom->createElement("price", $smartphonePrices[$i]));

    $smartphones->appendChild($newSmartphone);
}

$dom->appendChild($smartphones);
$dom->save("Ejercicio4.xml");