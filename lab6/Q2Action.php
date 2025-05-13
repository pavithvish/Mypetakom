<!DOCTYPE html> <!--declaration-->
   <html>
   <head>
         <title>Lab 6 Question 1</title>
         <meta name="author" content="Jaclina">
       
    </head>
    <body>
	 <?php
	   $sID = $_POST["stuID"];
	   $sCode = substr($sID,0,2);
	   
	   echo "Your ID is start with ".$_POST["stuID"]."<br>";
	   echo "Two ID characters ".$sCode."<br>";
	   
	  if ($sCode =="CA") 
	  {
		  echo "You are Computer Networking student";
	  }
	  else if ($sCode =="CB") 
	  {
		  echo "You are Software Engineering student";
	  }
	  else if ($sCode =="CD") 
	  {
		  echo "You are Graphic Multimedia student";
	  }
	  else 
	  {
		  echo "Not FK bachelor degree student";
	  }
	  
     		  
	   
	 ?>
	</body>
	</html>