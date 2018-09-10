<?php

  
  
  class MyFirst

  {
    public $arr;
    public $sum ;
    
    
    function __construct(array $arr) {
        $this->arr = $arr;
       
     }
   /* public function sumMyArr(){
        $sum = 0; 
        foreach ($this->arr as $value)
        $sum += $value; 
        return $sum ;  
    }*/
    public function myInArr(){
        foreach ($this->arr as $value) {
          $a=4;
          $result;
          
          if ($a===$value) {
            $result='TRUE';
          }
          else {
            $result='FALSE';
          }
          return $result;
        }


    }

  }

  $arr = [1,2,3,4,5,6,7,8];
  $MyArray1 = new MyFirst ($arr);
  //echo $MyArray1->sumMyArr(),"<br>";
  echo $MyArray1->myInArr();


?>


  




