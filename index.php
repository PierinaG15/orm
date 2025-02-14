
<?php
require 'vendor/autoload.php';
require 'database.php';

use app\models\Actor;

// Obtener todos los registros
$actors = Actor::all();

foreach ($actors as $actor) {
    echo $actor->first_name . "<br>";
}
