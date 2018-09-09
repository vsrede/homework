<?php

  
  
  class MyFirst

  {
    public $arr;
    public $sum ;
    function __construct(array $arr) {
        $this->arr = $arr;
        $this->$sum;
     }
    public function SumMyArr(){
        $sum = 0; 
        foreach ($MyArray1 as $value)
        $sum += $value; 
        return $sum ;  
    }

  }

  $sum=0;  
  $arr = [1,2,3,4,5,6,7,8];
  $MyArray1 = new MyFirst ($arr);
  echo function SumMyArr($MyArray1);


  




?>