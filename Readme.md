## START
```php
namespace App\Core;
use Pdo;

class Database{

    private static $_db;

    public static function connect(){
        if(!self::$_db) {
            $pdo = new Pdo(
                __DB_CONFIG__['db']['host'],
                __DB_CONFIG__['db']['user'],
                __DB_CONFIG__['db']['password']
            );
    
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            self::$_db = $pdo;
        }

        return self::$_db;
    }
}
```
Creditos a Anexsoft [repo. link](https://github.com/Anexsoft/PHP-7-Repository-Pattern) 
```php
require __DIR__."/vendor/autoload.php";

require __DIR__."/config/database.php";

use App\Core\Database;

var_dump(Database::connect());
var_dump(Database::connect());
  
```