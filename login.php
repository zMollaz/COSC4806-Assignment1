<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  </head>

  <body>
    <h1>Login</h1>
    <form action="/login.php" method="post">
      <label for="username">Username:</label>
      <br>
      <input type="text" id="username" name="username"                           placeholder="Enter your username">
      <br>
      <br>
      <label for="password">Password:</label>
      <br>
      <input type="password" id="password"   name="password"                     placeholder="Enter your password">
      <br>
      <br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>