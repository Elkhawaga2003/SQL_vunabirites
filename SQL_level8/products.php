<?php 
    include("sql.php");
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
                            <a class="nav-link" href="#">show products</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="p-3 mb-2 bg-dark text-white">
            <h1 class="display-2" style="text-align: center;">SHOP1</h1>
        </div>
        <div class="container" style="text-align: center;">
            <form method="GET" action="products.php" id="categoryForm">
                <div class="form-floating">
            <select class="form-select" name="catogary" id="floatingSelect" onchange="document.getElementById('categoryForm').submit()" aria-label="Floating label select example">
            <option value="1">drama</option>
            <option value="2">sad</option>
            <option value="3">fittiness</option>
            <option value="4">All</option>
        </select>
  <label for="floatingSelect">Can you hack me here</label>
    </div>
    </form>
<table class="table">
    <thead>
        <tr>
            <th scope="col">title</th>
            <th scope="col">Show details</th>
        </tr>
    </thead>
    <tbody>
      <?php
      if(isset($_GET["catogary"]))
      $id=$_GET['catogary'];
     
      if($id==4)
       $sql="select * from search";
    else 
    $sql= "select *from search where id='$id'";

       $result=$conn->query($sql);
      while($row=$result->fetch_assoc()){?>
    <tr>
        <td><?php echo $row['title'];?></td>
        <td><a href="catogry.php?id=<?php echo $row['id'];?>" class="btn btn-primary"><?php echo $row['catogry'];?></a></td>
    </tr>
    <?php };?>
  </tbody>
</table>
        </div>
   </body>

</html>