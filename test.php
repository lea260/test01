<?php

header("Content-type: application/json; charset=utf-8");
http_response_code(200);
//echo $this->json;

//echo $this->articulos;

$json  = file_get_contents('php://input');
$lista = json_decode($json);

$respuesta = [
    "ArituloId" => "hola",
];
echo json_encode($respuesta);