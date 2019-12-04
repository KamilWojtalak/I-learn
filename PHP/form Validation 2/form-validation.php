<?php

class Validator {
    
    public $data;
    public $errors = ['empty' => 'siema'];
    public function __construct($data) {
        $this->data = $data;
    }

    public function validate() {
        $this->isEmpty();

    }

    private function isEmpty() {
        if (empty(trim($this->data['username']))) {
            $this->addError('empty', 'siemaaa');
        }
    }

    private function addError($key, $value) {
        $this->errors[$key] = $value;
    }
}


// przyjmuje $_POST
// sprawdza czy inputy są puste
// errory
//

?>