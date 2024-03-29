<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create bill</title>
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

  <div class="createBill">
    <div class="sidebar">
      <div class="top">
        <a href="./addBill.php" style="text-decoration: none;">
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

          <!-- <a href="./addBill.php">
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


    <div class="createBill-container">
      <center>
        <h3 style="margin-bottom: 50px">Simple library management</h3>
      </center>
      <!-- <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./manageBill.php">Bill management</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Create new bill</a>
        </li>
      </ul>
      <form class="addBill-form card-body" method="POST">
        <div class="form-group row">
          <label for="inputISBN" class="col-sm-2 col-form-label">Enter Member's id</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputISBN" name="ssn">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputISBN" class="col-sm-2 col-form-label">Enter books's ISNB</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputISBN" name="isbn" placeholder="1929,1909,1919">
          </div>
        </div>
        <center>
          <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
          <input class="btn btn-primary" type="reset" value="Reset">
        </center>
      </form> -->
      <?php
      require 'config.php';
      echo $_COOKIE['id'];
      ?>
    </div>
  </div>
</body>
</html>