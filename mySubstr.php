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
        
        public function mySubstrFunc (){
            for ($i=0,$a=6; $i < strlen($this->firstStr); $i++,$a++) { 
                 $lastArr[$i]=$this->firstStr[$a]; 
                 $lastStr=implode('', $lastArr);
            }
            return $lastStr;
        }
    }
    $firstStr = 'i love it';
    $firstStr = new MySubstr;
    echo $firstStr->mySubstrFunc();
