<!DOCTYPE html>
<html>
    <head>
        <title>OS Injection</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>
    <body>
    <?php
include("sql.php");
include("test.php");
if(isset($_GET["product_id"])){
    $id=$_GET['product_id'];
    if(is_here($id)){?>
        <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
  <?php echo "you are hacker";?>
</div>
    <?php
    }else{
    $sql="SELECT * from products where id=$id";
    $result=$conn->query($sql);
    if($result->num_rows>0){
?>
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
          <a class="nav-link" href="login.php">Log In</a>
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

        <div class="position-absolute top-50 start-50">
            <img src="images.jpeg" class="product">
            <div class="d-grid gap-2 col-6 mx-auto">
                <form method="GET">
                    <select name="product_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option value="1">Egypt</option>
                    <option value="3">moroco</option>
                    <option value="4">Palestine</option>
                </select>
                <button class="btn btn-primary d-grid gap-2 col-6 mx-auto mt-3" type="submit">Check</button>
                </form>
                <div id="output" style="text-align: center; margin-top: 20px;">
                    <?php
                       while($row=$result->fetch_assoc()){ 
                    echo $row['salary'];
                   ?> <br><?php
                     }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
    }
}
}else{
    ?>
    <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
  <?php echo "please select country to show the salary";?>
</div>
  <?php
}
?>