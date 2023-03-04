<?php 

$data= [
[
    "nombre"=> "Victor Arana Flores",
    "email"=> "victor.aranaf92@gmail.com",
    "celular"=> "326770713",
    "direccion" => [
    "pais" => "peru",
    "ciudad" => "Lima"

    ]
],
[
    "nombre"=> " Pamela Arana Flores",
    "email"=> "pamela.aranaf92@gmail.com",
    "celular"=> "3267702343"

],
[
    "nombre"=> "Joel Arana Flores",
    "email"=> "joel.aranaf92@gmail.com",
    "celular"=> "32677073223"
],

];



foreach($data as $item){
    echo $item["nombre"] ."<br>";
    echo $item["email"] . "<br>";
    echo"<hr>";
}

?>