<?php
    class Calc {
        public $num1;
        public $num2;
        public $op;

        public function __construct($first, $second, $operator)
        {
            $this->num1 = $first;
            $this->num2 = $second;
            $this->op = $operator;
        }

        public function calculator(){

            switch($this->op){
                case 'addition' :
                    $result = $this->num1 + $this->num2;
                    break;
                case 'soustraction' :
                    $result = $this->num1 - $this->num2;
                    break;
                case 'multiplication' :
                    $result = $this->num1 * $this->num2;
                    break;
                case 'division' :
                    if($this->num2 != 0) $result = $this->num1 / $this->num2;
                    break;
                case 'puissance' :
                    $result = pow($this->num1, $this->num2);
                    break;
                default :
                    $result ='0';
            }

            return $result;
        }
    }
