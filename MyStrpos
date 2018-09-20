<?php
	class MyString
	{
		public $pos;
		function __construct ($str)
		{
			$this->str = $str;
		}
		public function findStr()
		{
			for ( $i=0; $i < strlen($this->str) ; $i++) { 
				if ( $pos==$this->str[$i] ) {
					return $i;	
				}
			}
		}
	}
	$str = "Kakao";
	$pos ='b';
	$MyStr = new MyString($str);
	echo $MyStr->findStr();
