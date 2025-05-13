<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sample hardcoded users – replace with database in production
    $users = [
        ['email' => 'jaclinajacob03@gmail.com', 'password' => '1234', 'position' => 'Student'],
        ['email' => 'maneessa@gmail.com', 'password' => '1234', 'position' => 'Event Advisor'],
        ['email' => 'pavithra@gmail.com', 'password' => '1234', 'position' => 'Admin']
    ];

    $email = $_POST['email'];
    $password = $_POST['password'];
    $position = $_POST['position'];

    $authenticated = false;

    foreach ($users as $user) {
        if ($user['email'] == $email && $user['password'] == $password && $user['position'] == $position) {
            $authenticated = true;
            $_SESSION['email'] = $email;
            $_SESSION['position'] = $position;

            // Redirect to respective dashboard
            if ($position == "Student") {
                header("Location: dashboardstudent.html");
                exit();
            } elseif ($position == "Event Advisor") {
                header("Location: dashboardeventadvisor.html");
                exit();
            } elseif ($position == "Admin") {
                header("Location: dashboardadmin.html");
                exit();
            }
        }
    }

    if (!$authenticated) {
        echo "<script>alert('Invalid credentials!'); window.location.href = 'login.php';</script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MyPETAKOM Login</title>
  <link rel="stylesheet" href="style/logindashboard.css"/>
</head>
<body>

  <div class="container">
    <h1 class="title">MyPETAKOM</h1>
    <div class="logo"></div>
  </div>

  <div class="form-wrapper">
    <div class="form-box">
      <form method="POST" action="">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <label for="position">Position</label>
        <select id="position" name="position" required>
          <option value="" disabled selected>Select your position</option>
          <option value="Student">Student</option>
          <option value="Event Advisor">Event Advisor</option>
          <option value="Admin">Admin</option>
        </select>

        <div class="button-container">
          <button type="submit">Login</button>
        </div>

    
      </form>
    </div>
  </div>

</body>
</html>
