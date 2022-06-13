<?php
require_once("personajes.php");
header('Content-Type:application/json'); 
// $var = $_POST["nombre"];
// switch ($_SERVER['REQUEST_METHOD']) {
//     case 'POST':
//         if (isset($_POST['id'])) {
//             if (Personaje::Filtrar("alive", intval($_POST['id'],10))) {
//                 http_response_code(200);
//             }
//             else {
//                 http_response_code(400);
//             }
//         }}
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
if (isset($_POST["status"])) {
   $obj->Filtrar($_POST["status"], $_POST["calle"]);
}else{
    $obj->Filtrar("todos",42);
}

?>
