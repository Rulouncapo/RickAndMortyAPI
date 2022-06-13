<?php

require_once("conexion.php");
    class Personaje extends Conexiones{
        private $id;
        private $name;
        private $status;
        static public function Filtrar($especia, $ruta){
            if ($especia == "alive"){
                $numero = 23;
                for($i= $ruta-1; $i <  $ruta ;$i++) {    
                    switch ($i) {
                                 case '21':
                                     $irl = "https://rickandmortyapi.com/api/character?page=".$ruta."&status=".$especia;
                                     $con = parent::contactar($irl);     
                                     $json = json_decode($con, true);   
                                     if ($json["results"]) {
                                     }                                    
                                         for ($e=0; $e < 19; $e++) {  
                                             $id = $json["results"][$e]["id"];
                                             $name = $json["results"][$e]["name"];
                                             $status = $json["results"][$e]["status"];
                                             $species = $json["results"][$e]["species"];
                                             $gender = $json["results"][$e]["gender"];
                                             $origen = $json["results"][$e]["origin"]["name"];
                                             $locacion = $json["results"][$e]["location"]["name"];
                                             $imagen = $json["results"][$e]["image"];
                                             $datos[0]=$id;
                                             $datos[1]=$name;
                                             $datos[2]=$status;
                                             $datos[3]=$species;
                                             $datos[4]=$gender;
                                             $datos[5]=$origen;
                                             $datos[6]=$locacion;
                                             $datos[7]=$imagen;
                                             $personaje[$e]=$datos;                               
                                         }
                                         $personajes[0]=$personaje;                
                                     break;
                                 default:
                                 $irl = "https://rickandmortyapi.com/api/character?page=".$ruta."&status=".$especia;
                                     $con = parent::contactar($irl);
                                     $json = json_decode($con, true);            
                                     if ($json["results"]) {
                                         for ($e=0; $e < 20; $e++) { 
                                             $id = $json["results"][$e]["id"];
                                             $name = $json["results"][$e]["name"];
                                             $status = $json["results"][$e]["status"];
                                             $species = $json["results"][$e]["species"];
                                             $gender = $json["results"][$e]["gender"];
                                             $origen = $json["results"][$e]["origin"]["name"];
                                             $locacion = $json["results"][$e]["location"]["name"];
                                             $imagen = $json["results"][$e]["image"];
             
                                             $datos[0]=$id;
                                             $datos[1]=$name;
                                             $datos[2]=$status;
                                             $datos[3]=$species;
                                             $datos[4]=$gender;
                                             $datos[5]=$origen;
                                             $datos[6]=$locacion;
                                             $datos[7]=$imagen;
                                             $personaje[$e]=$datos;               
                                         }
                                     }                                     
                                 }  
                                 $personajes[0]=$personaje;     
                                 
             }    echo json_encode($personajes);
            }
            if ($especia == "dead") {
                $numero = 16;
                for($i=$ruta-1; $i < $ruta ;$i++) {  
                switch ($i) {
                    case '14':
                        $irl = "https://rickandmortyapi.com/api/character?page=".$ruta."&status=".$especia;
                        $con = parent::contactar($irl);
                        $json = json_decode($con, true);  
                        if ($json) {
                             for ($e=0; $e < 7; $e++) {  
                                $id = $json["results"][$e]["id"];
                                $name = $json["results"][$e]["name"];
                                $status = $json["results"][$e]["status"];
                                $species = $json["results"][$e]["species"];
                                $gender = $json["results"][$e]["gender"];
                                $origen = $json["results"][$e]["origin"]["name"];
                                $locacion = $json["results"][$e]["location"]["name"];
                                $imagen = $json["results"][$e]["image"];
                                $datos[0]=$id;
                                $datos[1]=$name;
                                $datos[2]=$status;
                                $datos[3]=$species;
                                $datos[4]=$gender;
                                $datos[5]=$origen;
                                $datos[6]=$locacion;
                                $datos[7]=$imagen;
                                $personaje[$e]=$datos;                               
                            }
                        }     
                           
                            $personajes[0]=$personaje;                
                        break;
                    default:
                        $irl = "https://rickandmortyapi.com/api/character?page=".$ruta."&status=".$especia;
                        $con = parent::contactar($irl);
                        $json = json_decode($con, true);       
                        if ($json["results"]) {
                            for ($e=0; $e < 20; $e++) { 
                                $id = $json["results"][$e]["id"];
                                $name = $json["results"][$e]["name"];
                                $status = $json["results"][$e]["status"];
                                $species = $json["results"][$e]["species"];
                                $gender = $json["results"][$e]["gender"];
                                $origen = $json["results"][$e]["origin"]["name"];
                                $locacion = $json["results"][$e]["location"]["name"];
                                $imagen = $json["results"][$e]["image"];

                                $datos[0]=$id;
                                $datos[1]=$name;
                                $datos[2]=$status;
                                $datos[3]=$species;
                                $datos[4]=$gender;
                                $datos[5]=$origen;
                                $datos[6]=$locacion;
                                $datos[7]=$imagen;
                                $personaje[$e]=$datos;               
                            }
                        }                                     
                    }$personajes[0]=$personaje; 
                        continue;
                    }
                    echo json_encode($personajes);
                }
            if ($especia == "unknown") {
                $numero = 5;
                for($i=$ruta-1; $i < $ruta ;$i++) {  
            
                    switch ($especia =="unknown") {
                                 
                                 default:
                                 $irl = "https://rickandmortyapi.com/api/character?page=".$ruta."&status=".$especia;
                                     $con = parent::contactar($irl);
                                     $json = json_decode($con, true);            
                                     if ($json["results"]) {
                                         for ($e=0; $e < 20; $e++) { 
                                             $id = $json["results"][$e]["id"];
                                             $name = $json["results"][$e]["name"];
                                             $status = $json["results"][$e]["status"];
                                             $species = $json["results"][$e]["species"];
                                             $gender = $json["results"][$e]["gender"];
                                             $origen = $json["results"][$e]["origin"]["name"];
                                             $locacion = $json["results"][$e]["location"]["name"];
                                             $imagen = $json["results"][$e]["image"];
             
                                             $datos[0]=$id;
                                             $datos[1]=$name;
                                             $datos[2]=$status;
                                             $datos[3]=$species;
                                             $datos[4]=$gender;
                                             $datos[5]=$origen;
                                             $datos[6]=$locacion;
                                             $datos[7]=$imagen;
                                             $personaje[$e]=$datos;               
                                         }
                                     }                                     
                                 }       
                    $personajes[0]=$personaje; 
             } 
             echo json_encode($personajes);
            }    
            if ($especia == "todos") {
                switch ($ruta) {
                    case '42':           
                            if ($ruta) {
                                $irl = "https://rickandmortyapi.com/api/character?page=".$ruta;
                            }
                            $con = parent::contactar($irl);
                            $json = json_decode($con, true);       
                            if ($json["results"]) {
                                for ($e=0; $e < 6; $e++) { 
                                    $id = $json["results"][$e]["id"];
                                    $name = $json["results"][$e]["name"];
                                    $status = $json["results"][$e]["status"];
                                    $species = $json["results"][$e]["species"];
                                    $gender = $json["results"][$e]["gender"];
                                    $origen = $json["results"][$e]["origin"]["name"];
                                    $location = $json["results"][$e]["location"]["name"];
                                    $imagen = $json["results"][$e]["image"];
                                    $datos[0]=$id;
                                    $datos[1]=$name;
                                    $datos[2]=$status;
                                    $datos[3]=$species;
                                    $datos[4]=$gender;
                                    $datos[5]=$origen;
                                    $datos[6]=$location;
                                    $datos[7]=$imagen;                                
                                    $personaje[$e]=$datos;
                                
                                }
                            $personajes[0]=$personaje;
                            }                                   
                            // echo json_encode($personajes[4]) ;
                        break;
                    
                    default:   
                        if ($ruta) {
                            $irl = "https://rickandmortyapi.com/api/character?page=".$ruta;
                        }
                        $con = parent::contactar($irl);
                        $json = json_decode($con, true);       
                        if ($json["results"]) {
                            for ($e=0; $e < 20; $e++) { 
                                $id = $json["results"][$e]["id"];
                                $name = $json["results"][$e]["name"];
                                $status = $json["results"][$e]["status"];
                                $species = $json["results"][$e]["species"];
                                $gender = $json["results"][$e]["gender"];
                                $origen = $json["results"][$e]["origin"]["name"];
                                $location = $json["results"][$e]["location"]["name"];
                                $imagen = $json["results"][$e]["image"];
                                $datos[0]=$id;
                                $datos[1]=$name;
                                $datos[2]=$status;
                                $datos[3]=$species;
                                $datos[4]=$gender;
                                $datos[5]=$origen;
                                $datos[6]=$location;
                                $datos[7]=$imagen;
                                $personaje[$e]=$datos;                      
                            }                   
                        }
                       
                        break;
                    }
                        $personajes[0]=$personaje;
                        echo json_encode($personajes) ;
                        
            }
        }

        static public function Setear($id){
            if ($id) {
                $con = parent::contactar("https://rickandmortyapi.com/api/character/".$id);
                $json = json_decode($con,true);        
                $name = $json["results"][$id]["name"];
                $status = $json["results"][$id]["status"];
                $species = $json["results"][$id]["species"];
                $gender = $json["results"][$id]["gender"];
                $origen = $json["results"][$id]["origin"]["name"];
                $imagen = $json["results"][$id]["image"];
                $datos[0]=$name;
                $datos[0]=$status;
                $datos[0]=$species;
                $datos[0]=$gender;
                $datos[0]=$origen;
                $datos[0]=$imagen;
                var_dump($datos);
                return json_encode($datos);
            }
            
        }
        // static public function Traer($pagina = false){
        
        //     }
        }  
?>