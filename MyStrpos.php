<?php
    class MyString
    {
        public $search;
        public $result;
        function __construct ($MyStr = 'Tower')
        {
            $this->MyStr = $MyStr;
        }
        public function findStr()
        {
            for ( $i=0; $i < strlen($this->MyStr) ; $i++) { 
                if ( $this->MyStr[$i] === $search ) {
                     $result = $i;
                }
               return $result;
            }
        }
    }
    $search = 'o';
    $MyStr = 'Tower';
    $MyStr = new MyString;
    echo $MyStr->findStr($MyStr);
