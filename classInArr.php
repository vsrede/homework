<?php
  class MyFirst
  {
      public $arr;
      public $a;
      function __construct(array $arr) {
        $this->arr = $arr;
      }
      public function myInArr($a=3){
        foreach ($this->arr as $value) {
          if ($a===$value) {
            return  'TRUE';
          }
        }
      }
  } 
       
  $arr = [1,2,3,4,5,6,7,8];
  $MyArray1 = new MyFirst ($arr);
  echo $MyArray1->myInArr();
?>
  
