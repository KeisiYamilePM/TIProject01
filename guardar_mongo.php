<?php

try {
    $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
    $bulk = new MongoDB\Driver\BulkWrite;

    $name = $_POST['nombre'];
    $country = $_POST['pais'];
    $city = $_POST['ciudad'];

    $document = ['name' => $name, 'country' => $country, 'city' => $city,];

    $_id1 = $bulk->insert($document);

    $result = $manager->executeBulkWrite('mydb.movies', $bulk);

    echo "Datos Guardados Correctamente<br> <a href='index.html'>Volver</a>";

} catch (MongoDB\Driver\Exception\Exception $e) {

    $filename = basename(__FILE__);

    echo "The $filename script has experienced an error.\n";
    echo "It failed with the following exception:\n";

    echo "Exception:", $e->getMessage(), "\n";
    echo "In file:", $e->getFile(), "\n";
    echo "On line:", $e->getLine(), "\n";
}

?>
