
 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}


input[type=text],input[type=password] {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  text-align: center;
  box-sizing: box;
}


button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 25%;
}



}
</style>
</head>
<body>
<center>
<h2>Login Form</h2>
<FORM ACTION=process_form.php METHOD=POST>
<tr>
  <div class="container">
    <label for="realname"><b>Username:</b></label>
    <input type="text" placeholder="Enter Username" name="realname" required>
</tr><br>
<td>
    <label for="mypassword"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="mypassword" required>
</td><br>
<tr>        
    <button type="submit">Login</button>
</tr>   
  </div>

  <div class="container" style="background-color:#f1f1f1">
   
  </div>
</FORM>
</center>
</body>
</html>
