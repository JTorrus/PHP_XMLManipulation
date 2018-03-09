<?php

$dom = new DOMDocument();

$vehicles = $dom->createElement("vehicles");

$vehicleManufacturers = ["Tesla", "Ferrari", "Honda", "BMW", "Toyota"];
$vehicleBrands = ["Roadster", "Enzo", "Civic", "i5", "Supra"];
$vehiclePlates = ["12345A", "54321B", "231321C", "121312D", "123123E"];

for ($i = 0; $i < 5; $i++) {
    $newVehicle = $dom->createElement("vehicle");
    $newVehicle->setAttribute("id", $i+1);
    $newVehicle->appendChild($dom->createElement("manufacturer", $vehicleManufacturers[$i]));
    $newVehicle->appendChild($dom->createElement("brand", $vehicleBrands[$i]));
    $newVehicle->appendChild($dom->createElement("plate", $vehiclePlates[$i]));

    $vehicles->appendChild($newVehicle);
}

$dom->appendChild($vehicles);
$dom->save("Ejercicio3.xml");
