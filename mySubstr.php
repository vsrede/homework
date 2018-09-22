<?php
    
    class MySubstr
    {
        public $firstArr;
        public $lastArr;
        public $lastStr;
        function __construct($firstStr = 'i love it')
        {
           $this->firstStr = $firstStr;
        }
        public function myFirstArr () {
            $firstArr = str_split ($this->firstStr) ;
            return $firstArr;
        }
        public function mySubstrFunc (){
            for ($i=0,$a=6; $i < count($this->firstStr); $i++,$a++) { 
                 $lastArr[$a]=myFirstArr(); //как передать значение функции myFirstArr
                 $lastStr=implode('', $lastArr);
            }
            return $lastStr;
        }
    }
    $firstStr = 'i love it';
    $firstStr = new MySubstr;
    echo "fff";
    echo $firstStr->mySubstrFunc($firstArr);
