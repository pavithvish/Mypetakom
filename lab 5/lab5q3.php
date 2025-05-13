<!DOCTYPE html> <!--declaration-->
   <html>
   <head>
         <meta name="description" content="Lab 5 Question 3">
         <meta name="author" content="Jaclina">
       <title>Faculty of Computing</title>
    </head>
	<body>
	<?php
      
	  $code = "BCN";

      
	  switch ($code) 
	  {
         case "BCN":
         echo "Computer Networking";
         break;
         case "BCS":
         echo "Software Engineering";
         break;
         case "BCG":
         echo "Graphic and Multimedia";
	     case "DCS":
         echo "Diploma";
         break;
         default:
         echo "Not FK undergraduate student";
      }
    ?>
   
	</body>
</html>