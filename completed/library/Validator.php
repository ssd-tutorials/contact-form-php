<?php


class Validator {

    public $expected = array();

    public $required = array();

    public $validation = array();

    public $array = array();

    public $errors = array();

    public $special = array();






    private function _isArrayEmpty($array = null) {

        return (!(

            !empty($array) &&
            is_array($array)

        ));

    }



    private function _filterExpected($array = null) {


        foreach($array as $key => $value) {

            if (in_array($key, $this->expected)) {

                $this->array[$key] = $value;

            }

        }


    }



    private function _isErrorKeyValid($key = null) {

        return (
            !empty($key) &&
            !array_key_exists($key, $this->errors)
        );

    }





    public function addError($key = null) {

        if ($this->_isErrorKeyValid($key)) {

            $this->errors[$key] = $this->validation[$key];

        }

    }




    private function _isRequiredValid() {

        foreach($this->required as $key) {

            if (!array_key_exists($key, $this->array)) {

                $this->addError($key);

            }

        }

    }




    public static function isEmpty($value = null) {

        return (empty($value) && !is_numeric($value));

    }





    private function _isEmptyAndRequired($key = null, $value = null) {

        return (

            self::isEmpty($value) &&
            in_array($key, $this->required)

        );

    }




    private function _isEmailValid($key = null, $value = null) {

        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {

            $this->addError($key);

        }

    }




    private function _validateSpecial($key = null, $value = null) {

        switch($key) {

            case 'email':
                $this->_isEmailValid($key, $value);
                break;

        }

    }




    private function _isValueValid() {

        foreach($this->array as $key => $value) {

            if ($this->_isEmptyAndRequired($key, $value)) {

                $this->addError($key);

            } else if (in_array($key, $this->special)) {

                $this->_validateSpecial($key, $value);

            }

        }

    }





    public function isValid($array = null) {

        if (!$this->_isArrayEmpty($array)) {

            $this->_filterExpected($array);

            $this->_isRequiredValid();

            $this->_isValueValid();

            return empty($this->errors);

        }

        return false;

    }












}