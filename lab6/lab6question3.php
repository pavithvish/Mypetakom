<!DOCTYPE html>
<html>
<head>
    <title>Lab 6 Question 3</title>
    <meta name="author" content="Jaclina">
	<title>Form Page</title>
</head>
<body>
    <h2>Student Information Form</h2>
    <form action="Q3Action.php" method="post">
        <label>Name:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Age:</label><br>
        <input type="age" name="umur" required><br><br>

        <label>Gender:</label><br>
        <input type="radio" name="jantina" value="Male" required> Male
        <input type="radio" name="jantina" value="Female"> Female<br><br>

        <label>Title:</label><br>
        <input type="checkbox" name="title[]" value="Prof"> Prof
        <input type="checkbox" name="title[]" value="Dr"> Dr<br><br>

        <label>Hobby:</label><br>
        <select name="hobi[]" multiple size="4">
            <option value="reading">reading</option>
            <option value="swimming">swimming</option>
            <option value="basketball">basketball</option>
            <option value="football">football</option>
        </select><br><br>

        <label>Comments:</label><br>
        <textarea name="komen" rows="4" cols="30"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
