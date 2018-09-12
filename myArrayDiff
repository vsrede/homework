<?php
  class MyArrClass {
    public $arr1;
    function __construct ( $arr1 ) {
      $this->arr1 = $arr1;
    }
    public function myCount() {
      $count = count($this->arr1); 
      return $count;
    }
    public function myArrayDiff($arr2=['монахиня','php',6667,3]){
      foreach ($this->arr1 as $value) {
        if (!in_array($value,$arr2 )) {
          return $value;
        }
      }
    }
  }
  $arr1=['монахиня','php',666,3];
  $MyArray1 = new MyArrClass($arr1);
  echo $MyArray1->myCount($MyArray1) ;
  var_dump($MyArray1);
  echo $MyArray1->myArrayDiff();
?> 
