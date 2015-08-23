<!DOCTYPE html>
<html>
     <head>
     <title>RECIPE</title>
    
       <meta charset="utf-8" />
	   
	   
	   
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="test_themes/test.min.css" />
  <link rel="stylesheet" href="test_themes/jquery.mobile.icons.min.css" />
 
  <!--<link rel="stylesheet" href="themes/Chinese_red.min.css" />
  <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />-->
  
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  
</head>
<body>
	<!--begin of home page-->
     <div data-role="page" id="recipe" data-theme="a">
         <div data-tole="header">
          <h1 style="text-align:center">RECIPE</h1>
      <a href="#" data-rel="back" data-role="button" data-icon="grid" data-mini="true" data-inline="true">HOME</a>
              
     </div>
        <center>
            <form>
               
     <?php
        

            $con = mysql_connect("localhost","root" ,"00544abc" );
            
            if (!$con)
              {
              die('Could not connect: ' . mysql_error());
              }

            mysql_select_db("restaurant", $con);
         
           
             $nane = array();
             $myorder = array();
	        $sql = "SELECT name,myorder FROM recipe";

	        $result = mysql_query($sql,$con);
            $var = array();
            $i=0;
            echo "<table border=1>"; 
            echo "<tr><td>name</td><td>your order</td></tr>";
            while($row = mysql_fetch_object($result)) {
                echo "<tr>";
                echo "<td>".$row->name."</td>"; 
                echo "<td>".$row->myorder." </td>"; 
                echo "</tr>";
               
            }
            echo "</table>";

             ?>

            

             

	       
             
            </form>
    
              </center>
         <div data-role="footer">
          <h2>Fresh and Tasty</h2>
     </div>    
         </div>
    </body>
</html>