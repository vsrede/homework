<?php
  class MyFirst
{
    public $arr;
    function __construct(array $arr) {
        $this->arr = $arr;
       }
    public function myInArr(){
        foreach ($this->arr as $value) {
         var_dump($this->arr);
         $a=100;
          if ($a===$value) {
            $result='TRUE';
            return $result;
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
      echo $MyArray1->myInArr();
?>
