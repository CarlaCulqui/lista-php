<?php 

  $nmenor = $_GET['n1'];
  $nmeio = $_GET['n2'];
  $nmaior = $_GET['n3'];

  if($nmeio < $nmenor){
   $temp=$nmenor;
   $nmenor=$nmeio;
   $nmeio=$temp;
	  if($nmaior < $nmenor){
	   $temp=$nmenor;
	   $nmenor=$nmaior;
	   $nmeio=$temp;
	  }
	  
	  if($nmeio < $nmeio){
	   $temp=$nmeio;
	   $nmeio=$nmeio;
	   $nmeio=$temp;
	  }  
  }
  
  echo "$nmenor < $nmeio < $nmaior";
 
 ?>