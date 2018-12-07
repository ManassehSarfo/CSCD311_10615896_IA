
<!DOCTYPE Html>
<html>
<HEader>
<tiTle>Sample Data.com</title>
  <script> 
  </script>
</header>
<body>
<h1>Manas Sample Data</h1>
<table cellspacing="5" border="2">
  <form method="post" action="SampData.php">
    <tr>
      <td><label for="name">Name</label></td>
      <td><input type="text" placeholder="Enter name" name='name' required/></td>
      <td><label for="gender">Gender : </label></td>
      <td>
        <label>Male</label>
        <input type="radio" name="gender" value="Male" />
        <label>Female</label>
        <input type="radio" name="gender" value='Female'/>
      </td>
      <td><label for="dob">Date of Birth</label></td>
      <td><input type="date" name='dob' required/></td>
      <td><label for="email">Email</label></td>
      <td><input type=text placeholder="Please enter email" name='email' required/></td>
      <td><button name='submit'>Done</button></td>
    </tr>
  </form>
</table>
<br />
<table>
  <tr><form method="post">
    <td><label for="search">Search : </label></td>
    <td><input name='search' type="text" placeholder="Please enter username ..."/></td>
    <td><button name='check'>Search</button></td>
    <td></td>
    <td><button name='view'>View Records</button></td>
  </tr></form>
</table>

<?php
include 'my_websitesConnection.php';

$theUser = null;

function inputValues($name,$gender,$dob,$email){

  $conn = OpenCon();
  mysqli_query($conn,"INSERT INTO sample_data VALUES('$name','$gender','$dob','$email');");
  return "echo Successfully updated";
  CloseCon($conn);
}


if(isset($_POST['check'])){
  $usrname = $_POST['search'];

  $conn = OpenCon();
  $query = "SELECT * FROM sample_data WHERE name='$usrname';";
  $fetch = mysqli_query($conn,$query);
  $array = mysqli_fetch_assoc($fetch);

  ?>

<?php if($array != null){ ?>
  <table>
      <thead>
          <tr>
            <td><h1>Name</h1></td>
            <td><h1>Gender</h1></td>
            <td><h1>Date of Birth</h1></td>
            <td><h1>Email</h1></td>
          </tr>
      </thead>
          <tbody>
<?php // while($array = mysqli_fetch_array($fetch)){
      $GLOBALS['theUser'] = $array['name'];
  ?>
              <tr>
                <td><?php echo $array['name']; ?></td>
                <td><?php echo $array['gender']; ?></td>
                <td><?php echo $array['dob']; ?></td>
                <td><?php echo $array['email']; ?></td>
              <!--  <td><button name='delete'>Delete</button></td> -->

            </tr>
          <?php// } ?>
        </tbody>
    </table>
            <br />
            <form method="post">
           <button name='delete'>Delete</button>
          </form>

<?php
      }elseif ($usrname == "") {
  echo "";
}
else {
  echo "<br />".$usrname." does not exist in the database";
}
 ?>
  <?php
  CloseCon($conn);

}

if(isset($_POST['delete'])){
  $usernm = $GLOBALS['theUser'];

  echo $usernm." done";
  //delete($theUsername);
  $conn = OpenCon();

  $query = "DELETE FROM sample_data WHERE name='$usernm';";
  $fetch = mysqli_query($conn,$query) or die("Connection error : ".$fetch -> error);
  CloseCon($conn);

}


function delete($nom){
  $username = $nom;
  $conn = OpenCon();

  $query = "DELETE FROM sample_data WHERE name='$username';";
  $fetch = mysqli_query($conn,$query);
//if($fetch){
//  echo "Deleted Successfully";
//}
  CloseCon($conn);
  return $nom." Deleted successfully ";
}

if(isset($_POST['submit'])){
  //inputValues($name,$gender,$dob,$email);
  $conn = OpenCon();
  inputValues($_POST['name'],$_POST['gender'],$_POST['dob'],$_POST['email']);
  //echo($_POST['name'].$_POST['gender'].$_POST['dob'].$_POST['email']);

  $query = "SELECT * FROM sample_data;";
  $fetch = mysqli_query($conn,$query);
  $array = mysqli_fetch_array($fetch);
  ?>

  <table>
      <thead>
          <tr>
            <td><h1>Name</h1></td>
            <td><h1>Gender</h1></td>
            <td><h1>Date of Birth</h1></td>
            <td><h1>Email</h1></td>
          </tr>
      </thead>

          <tbody>
<?php while($array = mysqli_fetch_array($fetch)){ ?>
              <tr>
                <td><?php echo $array['name']; ?></td>
                <td><?php echo $array['gender']; ?></td>
                <td><?php echo $array['dob']; ?></td>
                <td><?php echo $array['email']; ?></td>
              <!--  <td><button name='delete'>Delete</button></td> -->

              </tr>
            <?php } ?>
          </tbody>
      </table>
  <?php
  CloseCon($conn);
}

if(isset($_POST['view'])){

  $conn = OpenCon();

  $query = "SELECT * FROM sample_data;";
  $fetch = mysqli_query($conn,$query);
  $array = mysqli_fetch_array($fetch);
  ?>

  <table>
      <thead>
          <tr>
            <td><h1>Name</h1></td>
            <td><h1>Gender</h1></td>
            <td><h1>Date of Birth</h1></td>
            <td><h1>Email</h1></td>
          </tr>
      </thead>

          <tbody>
<?php while($array = mysqli_fetch_array($fetch)){ ?>
              <tr>
                <td><?php echo $array['name']; ?></td>
                <td><?php echo $array['gender']; ?></td>
                <td><?php echo $array['dob']; ?></td>
                <td><?php echo $array['email']; ?></td>
              <!--  <td><button name='delete'>Delete</button></td> -->

              </tr>
            <?php } ?>
          </tbody>
      </table>
  <?php
  CloseCon($conn);

}


?>
</body>
</html>
