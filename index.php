<?php

declare(strict_types = 1);

// Singleton
//require __DIR__ . '/Singleton.php';
//
//use public_html\Singleton;
// -- -- --

// Factory Method
require __DIR__ . '/FabricMethod/Programmer.php';
require __DIR__ . '/FabricMethod/FrontEnd.php';
require __DIR__ . '/FabricMethod/BackEnd.php';
require __DIR__ . '/FabricMethod/ProgrammerEast.php';

use public_html\FabricMethod\Programmer;
use public_html\FabricMethod\FrontEnd;
use public_html\FabricMethod\BackEnd;
use public_html\FabricMethod\ProgrammerEast;
// -- -- --

// Adapter
//require __DIR__ . '/Adapter/Interface/CatInterface.php';
//require __DIR__ . '/Adapter/AnimalsLive.php';
//require __DIR__ . '/Adapter/Interface/DogInterface.php';
//require __DIR__ . '/Adapter/DogLive.php';
//require __DIR__ . '/Adapter/DogInterfaceAdapter.php';
//
//use public_html\Adapter\DogInterfaceAdapter;
//use public_html\Adapter\AnimalsLive;
//use public_html\Adapter\DogLive;
// -- -- --

echo "<pre />";

// Singleton
//$instance1 = Singleton::getInstance();
//$instance1->field = '10000';
//$instance2 = Singleton::getInstance();
//
//var_dump($instance1);
//var_dump($instance2);
// -- -- --

// Factory Method

// -- -- --

// Adapter
//$animalLive = new AnimalsLive();
//echo $animalLive->speak(true);
//echo "\n" . $animalLive->sleep() . "\n";
//
//echo "\n Адаптируемый интерфейс \n";
//
//$dog = new DogLive();
//$animalLive = new DogInterfaceAdapter($dog, 4);
//echo $animalLive->speak(true);
//echo "\n" . $animalLive->sleep();
// -- -- --
