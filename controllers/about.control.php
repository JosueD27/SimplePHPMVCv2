<?php

function run(){
    $viewData = array(
        "cuenta"=>"0801199601862",
        "nombre"=>"Josué Díaz",
        "correo"=>"josueamador2711@gmail.com"
    );
    $proyectos = array(
        array("id"=>"1", "name"=>"Negocios CMS"),
        array("id"=>"2", "name"=>"Negocios ERP"),
        array("id"=>"3", "name"=>"Negocios RRHH"),
        array("id"=>"4", "name"=>"Bachiller en ciencias y letras"),
        array("id"=>"5", "name"=>"Ultimo año Ingenieria en Ciencias de la Computación")
    );
    $viewData["proyectos"] = $proyectos;
    renderizar("about", $viewData);
}

run();

?>