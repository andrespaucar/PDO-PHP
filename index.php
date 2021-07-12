<?php

require __DIR__."/vendor/autoload.php";

require __DIR__."/config/database.php";

use App\Core\Database;

//https://github.com/Anexsoft/PHP-7-Repository-Pattern
  
var_dump(Database::connect());
var_dump(Database::connect());