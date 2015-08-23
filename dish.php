<!DOCTYPE HTML> 
<html>
<body>
<?php
$con = mysql_connect("localhost","root" ,"00544abc" );
mysql_select_db (restaurant);

 $yes_no = $_GET['yes_no'];

 mysql_select_db("restaurant", $con); 
 
 if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  /* $sql1 = "UPDATE recipe SET myorder ='1' WHERE name='carbhotpot'";
   mysql_query($sql1,$con);*/
  
  if(($yes_no == "1"))
  {
   $sql1 = "UPDATE recipe SET myorder ='1' WHERE name='carbhotpot'";
   mysql_query($sql1,$con);
  }
  
  if(($yes_no == "0"))
  {
    $sql2 = "UPDATE recipe SET myorder ='0' WHERE name='carbhotpot'";
   mysql_query($sql2,$con);
  }

  if(($yes_no == "2"))
  {
   $sql1 = "UPDATE recipe SET myorder ='1' WHERE name='chickenhotpot'";
   mysql_query($sql1,$con);
  }
  
  if(($yes_no == "3"))
  {
    $sql2 = "UPDATE recipe SET myorder ='0' WHERE name='chickenhotpot'";
   mysql_query($sql2,$con);
  }

  if(($yes_no == "4"))
  {
   $sql1 = "UPDATE recipe SET myorder ='1' WHERE name='beefhotpot'";
   mysql_query($sql1,$con);
  }
  
  if(($yes_no == "5"))
  {
    $sql2 = "UPDATE recipe SET myorder ='0' WHERE name='beefhotpot'";
   mysql_query($sql2,$con);
  }

  if(($yes_no == "6"))
  {
   $sql1 = "UPDATE recipe SET myorder ='1' WHERE name='spicyshrimphotpot'";
   mysql_query($sql1,$con);
  }
  
  if(($yes_no == "7"))
  {
    $sql2 = "UPDATE recipe SET myorder ='0' WHERE name='spicyshrimphotpot'";
   mysql_query($sql2,$con);
  }

  if(($yes_no == "8"))
  {
   $sql1 = "UPDATE recipe SET myorder ='1' WHERE name='muttonhotpot'";
   mysql_query($sql1,$con);
  }
  
  if(($yes_no == "9"))
  {
    $sql2 = "UPDATE recipe SET myorder ='0' WHERE name='muttonhotpot'";
   mysql_query($sql2,$con);
  }

  if(($yes_no == "10"))
  {
   $sql1 = "UPDATE recipe SET myorder ='1' WHERE name='fishheadhotpot'";
   mysql_query($sql1,$con);
  }
  
  if(($yes_no == "11"))
  {
    $sql2 = "UPDATE recipe SET myorder ='0' WHERE name='fishheadhotpot'";
   mysql_query($sql2,$con);
  }

  if(($yes_no == "12"))
  {
   $sql1 = "UPDATE recipe SET myorder ='1' WHERE name='friedpork'";
   mysql_query($sql1,$con);
  }
  
  if(($yes_no == "13"))
  {
    $sql2 = "UPDATE recipe SET myorder ='0' WHERE name='friedpork'";
   mysql_query($sql2,$con);
  }

  if(($yes_no == "14"))
  {
   $sql1 = "UPDATE recipe SET myorder ='1' WHERE name='tofu'";
   mysql_query($sql1,$con);
  }
  
  if(($yes_no == "15"))
  {
    $sql2 = "UPDATE recipe SET myorder ='0' WHERE name='tofu'";
   mysql_query($sql2,$con);
  }

  if(($yes_no == "16"))
  {
   $sql1 = "UPDATE recipe SET myorder ='1' WHERE name='friedfish'";
   mysql_query($sql1,$con);
  }
  
  if(($yes_no == "17"))
  {
    $sql2 = "UPDATE recipe SET myorder ='0' WHERE name='friedfish'";
   mysql_query($sql2,$con);
  }

  if(($yes_no == "18"))
  {
   $sql1 = "UPDATE recipe SET myorder ='1' WHERE name='friedbeef'";
   mysql_query($sql1,$con);
  }
  
  if(($yes_no == "19"))
  {
    $sql2 = "UPDATE recipe SET myorder ='0' WHERE name='friedbeef'";
   mysql_query($sql2,$con);
  }

  if(($yes_no == "20"))
  {
   $sql1 = "UPDATE recipe SET myorder ='1' WHERE name='chickensoup'";
   mysql_query($sql1,$con);
  }
  
  if(($yes_no == "21"))
  {
    $sql2 = "UPDATE recipe SET myorder ='0' WHERE name='chickensoup'";
   mysql_query($sql2,$con);
  }

  if(($yes_no == "22"))
  {
   $sql1 = "UPDATE recipe SET myorder ='1' WHERE name='carbhotpot'";
   mysql_query($sql1,$con);
  }
  
  if(($yes_no == "23"))
  {
    $sql2 = "UPDATE recipe SET myorder ='0' WHERE name='carbhotpot'";
   mysql_query($sql2,$con);
  }


 
  mysql_close($con);
?>
</body>
</html> 