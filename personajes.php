<?php

require_once("conexion.php");
    class Personaje extends Conexiones{
        private $id;
        private $name;
        private $status;
        public function __construct(){
        }
        public function getId(){
            return $this->id;
        }
        static public function Setear($id){
            if ($id) {
                $con = parent::contactar();
                $json = json_decode($con,true);        
                $name = $json["results"][$id]["name"];
                $status = $json["results"][$id]["status"];
                $species = $json["results"][$id]["species"];
                $gender = $json["results"][$id]["gender"];
                $origen = $json["results"][$id]["origin"]["name"];
                $imagen = $json["results"][$id]["image"];

                $datos[]=$name;
                $datos[]=$status;
                $datos[]=$species;
                $datos[]=$gender;
                $datos[]=$origen;
                $datos[]=$imagen;
                var_dump($datos);
                return json_encode($datos);
            }
            
        }
        static public function Traer(){
            for ($i=1; $i <3; $i++) { 
                $irl = "https://rickandmortyapi.com/api/character?page=".$i;
                // echo $irl;
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
                        $imagen = $json["results"][$e]["image"];
                        $datos[0]=$id;
                        $datos[1]=$name;
                        $datos[2]=$status;
                        $datos[3]=$species;
                        $datos[4]=$gender;
                        $datos[5]=$origen;
                        $datos[6]=$imagen;
                        $personaje[$e]=$datos;
                    
                    }
                $personajes[$i]=$personaje;
                }
                
            }
                // var_dump($personajes);
                echo json_encode($personajes) ;
        }
    }
?>