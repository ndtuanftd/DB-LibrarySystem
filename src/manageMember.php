<?php
require 'C:\xampp\htdocs\firstPHP\config.php';
$query = "select ssn, full_name from account where ssn like 'M%'";
$res = mysqli_query($conn, $query);
$data = array();

while ($row = mysqli_fetch_assoc($res)) {

  $data[] = $row;
}


if(isset($_POST['details'])){
  $t = $_POST['details'][0];

 $_SESSION["ssn"] = $data[$t]['ssn'];  
  header("Location: ./memberInfo.php");

}
// $query1 = "SELECT language FROM language WHERE ISBN = '001'";
// $res1 = mysqli_query($conn, $query1);
// $ar1=[];
// while($row1 = mysqli_fetch_assoc($res1)){
//   $tmp =  implode(',',$row1); 
//   $ar1[] = $tmp;                
// } 
// var_dump($ar1);
// echo implode(',',$ar1);   

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage member</title>
  <link rel="stylesheet" href="../static/styles.css">
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.15.4/css/all.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</head>


<body>
  <div class="mngMember">
    <div class="sidebar">
      <div class="top">
        <a href="./addBook.php" style="text-decoration: none;">
          <span class="logo">LMS</span>
        </a>
      </div>
      <hr />
      <div class="center">
        <ul>
          <p class="title">MAIN</p>
          <a href="./dashboard.php">
            <li>
              <span>Dashboard</span>
            </li>
          </a>
          <p class="title">SERVICE</p>

          <!-- <a href="./addBook.php">
            <li>
              <span>Insert book</span>
            </li>
          </a> -->
          <a href="./manageBook.php">
            <li>
              <span>
                <i class="fas fa-book"></i>
                Manage book
              </span>
            </li>
          </a>
          <a href="./manageMember.php">
            <li>
              <span>
                <i class="fas fa-users"></i>
                Manage member</span>
            </li>
          </a>
          <!-- <a href="./createBill.php">
            <li>
              <span>Create bill</span>
            </li>
          </a> -->
          <a href="./manageBill.php">
            <li>
              <span>
                <i class="fas fa-clipboard-list"></i>
                Manage bill
              </span>
            </li>
          </a>
        </ul>
      </div>
    </div>
    <div class="mngMember-container">
      <center>
        <h3 style="margin-bottom: 50px">Simple library management</h3>
      </center>
      <!-- search bar -->
      <div class="search-bar">
        <div class="input-group">
          <input class="form-control border-end-0 border rounded-pill" type="text" id="example-search-input"
            placeholder="search...">
          <span class="input-group-append">
            <button class="btn btn-outline-secondary bg-white border-start-0 border rounded-pill ms-n3" type="button">
              <i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </div>

      <table class="table">
        <thead class="thead-light">        
        <tr>
            <th scope="col">#</th>          
            <th scope="col">Member's ID</th>
            <th scope="col">Name</th>           
            
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
        <?php

for ($i = 0; $i < count($data); $i++) {
  // $t1 = $data[$i]["ISBN"];
  

  echo '  <tr>
<th scope="row">' . ($i + 1) . '</th>
<td>'.$data[$i]['ssn'].'</td>
<td>'. $data[$i]['full_name'] . '</td>

<td><form method = "Post">
<button type="submit" class="btn btn-primary" name="details[]" value = "'.$i.'">View details</button>   
</form></td>
</tr>  ';  

}

?>
          
        </tbody>
      </table>
    </div>
  </div>
</body>