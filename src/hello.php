<?php
namespace helloworld;

class helloworld {
  // Properties
  public $name;
  

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  
}

$apple = new helloworld();
$apple->set_name('Apple');

echo "Name: " . $apple->get_name();


?>



