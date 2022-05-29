<?

// Autoload
// A trick to load all your classes


// Namespaces
// Vurtual Directory
namespace Human;
class Name{
    public function __construct($name){
        $this->name=$name;
        echo "human done";
    }
}


namespace Alien;
class Name{
    public function __construct($name){
        $this->name=$name;
        echo "Alien done";
    }
}

use Human\Name as hum_name;
$n = new hum_name("Non");

use Alien\Name as al_name;
$n2 = new al_name("Nik");