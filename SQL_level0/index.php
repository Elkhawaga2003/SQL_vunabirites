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
        <div class="p-3 mb-2 bg-black text-white" style="width: 45%;">
            <h1 class="display-1 center">How you can hack me</h1>
        </div>
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