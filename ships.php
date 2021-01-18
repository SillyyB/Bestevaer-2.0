<?php

function GetShip($name){
    $ships = array(
        "lucky star" => array(
          "photo" => "lucky.jpg",
          "GT" => 4178,
          "M3" => 7527
        ),
        "triumph" => array(
            "photo" => "triumph.jpg",
            "GT" => 4039,
            "M3" => 8262
        ),
        "angela" => array(
            "photo" => "angela.jpg",
            "GT" => 3806,
            "M3" => 6633
        ),
        "sabrina" => array(
            "photo" => "sabrina.jpg",
            "GT" => 3687,
            "M3" => 1268
        ),
        "hermes" => array(
            "photo" => "hermes.jpg",
            "GT" => 3806,
            "M3" => 6633
        ),
        "bestevaer" => array(
            "photo" => "bestevaer.jpg",
            "GT" => 3754,
            "M3" => 4278
        )

    );
    return $ships[$name];
}