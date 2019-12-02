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

        private $name;
        private $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }


        public function getName() {
            return $this->name;
        }

        public function setName($newName) {
            $this->name = $newName;
        }

        public function addFriend() {
            echo $this->name . ' added a new friend';
        }


    }
    $Kamil = new User('Kamil', 17);
    $Kamil->addFriend();

?>






</body>
</html>