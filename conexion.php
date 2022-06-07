<?php
class Conexiones{
   static public function contactar($urle){
        $url = "https://rickandmortyapi.com/api/character";
        $url = $urle;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_close($ch);
        return $resultado = curl_exec($ch);

    }

}

?> 