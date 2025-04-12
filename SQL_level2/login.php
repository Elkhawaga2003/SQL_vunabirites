<?php 
include("sql.php");
include("test.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>OS Injection</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>
    <body>
</div>
   
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">how you can hack me </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?product_id=1">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Log In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Log Out</a>
    </li>
      </ul>
    </div>
  </div>
</nav>
        <div class="p-3 mb-2 bg-dark text-white">
            <h1 class="display-2" style="text-align: center;">SHOP1</h1>
        </div>
        <br>
        <div>
            <div class="container text-center ">
    <form method="GET" >
    <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">username</span>
  <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>

    <br>
        <div class="input-group input-group-lg">
            <span class="input-group-text" id="inputGroup-sizing-lg">Password</span>
            <input type="password" name="password" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
        </div>
    <br>
    <button type="submit" class="btn btn-warning">submit</button>
</form>
<br>   
<?php
if(isset($_GET['username'])&&isset($_GET['password'])){
$username=$_GET['username'];
$password=$_GET['password']; 
if(!(here($username)||here($password))){ 
$sql="SELECT * FROM users WHERE user='$username' AND password='$password'";
$result=$conn->query($sql);
    if($result->num_rows>0){
        ?><div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3"> 
            <?php
        echo "you are welcome ";
        ?>
        </div><?php
    }else{
        ?><div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3"> 
            <?php
        echo "you are not welcome here";
        ?>
        </div><?php
  }
  }else{
    ?><div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3"> 
            <?php
        echo "you still hacker";
        ?>
        </div><?php
}
}

  ?>
    </div>
</div> 
    </body>
</html>