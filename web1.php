<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" .type="text/css".href="style.css">
    <title>Register Form</title>
    </head>
	
    <body>
	<form action="insert.php" method="POST">
	 <table>
	  <tr>
	   <td>first name :</td>
	   <td><input type="text" name="first name"></td>
	   <td>middle name :</td>
	   <td><input type="text" name="middle name"></td>
	   <td>surname :</td>
	   <td><input type="text" name="surname"></td>
      </tr>
	  <tr>
        <td>Password :</td>
        <td><input type="password" name="password" required></td>
	  </tr>
      <tr>
       <td>Gender :</td>
       <td>
        <input type="radio" name="gender" value="m" required>Male
        <input type="radio" name="gender" value="f" required>Female
        </td>
       </tr>
       <tr>
        <td>Email :</td>
        <td><input type="email" name="email"></td>
       </tr>
       <tr>
        <td>Phone number :</td>
	    <td><input type="phone number" name="phone number"></td>
	   <tr>
	   </tr>
	    <td>nationality :</td>
		<td><input type="text"  name="nationality"></td>
	   <tr>
	   </tr>
	    <td>married :</td>
		<td>
		 <input type="radio" name="married" value="y" required>Y
		 <input type="radio" name="married" value="n" required>No
        </td>
	   <tr>
	   </tr>
	    <td>place of birth :</td>
		<td><input type="text" name="place of birth"</td>
	   <tr>
	   </tr>
	     <td>city of residence :</td>
		 <td><input type="text" name="city of residence"></td>
	   <tr>
	   </tr>
	     <td>next of kin :</td>
		 <td><input type="text" name="next of kin"></td>
	   <tr>
	   </tr>
	     <td>course :</td>
		 <td><input type="text" name="course"></td>
	   <tr>
	   </tr>
	     <td>religion :</td>
		 <td><input type="text" name="religion"></td>
	   <tr>
	   </tr>
	     <td>post adress :</td>
		 <td><input type="text" name="post adress"></td>
	   <tr>
	   </tr>
	     <td>alternative phone no :</td>
		 <td><input type="alternative phone no" name="alternative phone no"></td>
	   <tr>
	    <td><input type="submit" value=Submit"></td>
	   </tr>
	   
	   
	  

    </body> 
</html>	