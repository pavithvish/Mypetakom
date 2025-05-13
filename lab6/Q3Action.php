<!DOCTYPE html> <!--declaration-->
<html>
<head>
    <title>Lab 6 Question 3</title>
    <meta name="author" content="Jaclina">
	<title>Form Output</title>
</head>
<body>
    <h2>User input is listed below:</h2>
    <?php
    echo "Name: " . $_POST["nama"] . "<br>";
    echo "Age: " . $_POST["umur"] . "<br>";
    echo "Gender: " . $_POST["jantina"] . "<br>";

    echo "Title: ";
    if (!empty($_POST["title"])) {
        echo implode(", ", $_POST["title"]);
    } else {
        echo "-";
    }
    echo "<br>";

    echo "Hobby: ";
    if (!empty($_POST["hobi"])) {
        echo implode(", ", $_POST["hobi"]);
    } else {
        echo "-";
    }
    echo "<br>";

    echo "Comments: " . nl2br($_POST["komen"]);
    ?>
</body>
</html>
