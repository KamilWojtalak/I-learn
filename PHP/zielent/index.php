<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>siema</title>
</head>
<body>
    
<?php 

    class User {

        protected $name;
        private $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function __destruct() {
            echo "The user $this->name has been deleted <br>";
        }
        public function getName() {
            return $this->name;
        }

        public function setName($newName) {
            $this->name = $newName;
        }

        public function addFriend() {
            echo $this->name . ' added a new friend <br />';
        }
    }

    class AdminUser extends User {

        private $level;

        public function __construct($name, $age, $level) {
            $this->level = $level;
            parent::__construct($name, $age);
        }

        public function getLevel() {
            echo "The level is $this->level <br/>";
        }

        public function __clone() {
            echo "$this->name has been cloned <br>";
        }

        
    }

    $Kamil = new User('Kamil', 17);
    $Kamil->addFriend();

    $AdminUserOne = new AdminUser('Siemaszko', '32', '5');
    $AdminUserOne->addFriend();
    $AdminUserOne->getLevel();

    $AdminUserTwo = clone $AdminUserOne;

?>






</body>
</html>