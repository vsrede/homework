<?php
  class Bubble
  {
    public $arr;
    public $count;
    public $unsort;
    public $temp;
    
    function __construct ( array $arr )
    {
      $this -> arr = $arr;
    }
    public function myCounter(){
      $count =count ( $this->arr ) ;
      return $count;
    }
    public function mySort() {
      $unsort=true;
      while ( $unsort ) {
        $unsort = false;
        for ( $i=0; $i < $this->myCounter()-1; $i++ ) { 
            if ( $this->arr[$i] > $this->arr[$i+1] ) {
             $temp = $this->arr[$i];
             $this->arr[$i] =  $this->arr[$i+1];
             $this->arr[$i+1] = $temp;
             $unsort = true;
            }
          }
      }
      return $this->arr;
    }
  }
  $arr = [10,9,5,6,4,7,1,2];
  $MyArray = new Bubble($arr);
  var_dump($MyArray);
  echo $MyArray->myCounter($MyArray),"<br>";
  print_r($MyArray->mySort($MyArray)) ;

 

   
    
    



  
   
