<?php
  class MyFirst
  {
      public $arr;
      function __construct(array $arr) {
        $this->arr = $arr;
      }
      public function myInArr ($a) {
        foreach ($this->arr as $value) {
          if ($a===$value) {
            return 'TRUE';
          }
        }
      }
  } 
  $arr = [1,2,3,4,5,6,7,8];
  $a = 3;
  $MyArray1 = new MyFirst ($arr);
  echo $MyArray1->myInArr($a);
?>
  
