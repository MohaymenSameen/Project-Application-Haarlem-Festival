<?php 

class User {
    private $id;
    private $first_name;
    private $last_name;
    private $age;


    public function __construct($_id, $_first_name, $_last_name, $_age) {
        $this->id = $_id;
        $this->first_name = $_first_name;
        $this->last_name = $_last_name;
        $this->age = $_age;
    }

    public function getUserName() {
        return $this->first_name . " " . $this->last_name;
    }

    public function getAge() {
        return $this->age;
    }
}
?>    