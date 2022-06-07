<?php
require_once("personajes.php");
header('Content-Type:application/json'); 
// $var = $_POST["nombre"];
// switch ($_SERVER['REQUEST_METHOD']) {
//     case 'GET':
//         if (isset($_GET['id'])) {
//             if (Personaje::Setear($_GET['id'])) {
//                 http_response_code(200);
//             }
//             else {
//                 http_response_code(400);
//             }
//         }
//         else {
//             http_response_code(405);
//         }
//         break;
//     case 'POST':
//         if (isset($_POST['nombre'])) {
//             if (Personaje::Setear($_POST['nombre'])) {
//                 http_response_code(200);
//             }
//             else {
//                 http_response_code(400);
//             }
//         }
//         else {
//             http_response_code(405);
//         }
//         break;
//     }
    
// 
$obj = new Personaje();
// $obj->Traer($_POST["nombre"]);
// $obj->Filtrar($_POST["status"], $_POST["calle"]);

while ($_POST["status"] && $_POST["calle"]) {
    $obj->Filtrar($_POST["status"], $_POST["calle"]);
    break;
}
?>
