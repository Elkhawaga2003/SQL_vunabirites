
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
<?php
include("sql.php");
include("test.php");
if(isset($_GET["id"])){
$id=$_GET['id'];
}
if(is_here($id)){
    ?><div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3"> 
            <?php
        echo "you still hacker";
        ?>
        </div><?php
}else{
$sql = "SELECT * FROM catogry WHERE id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row= $result->fetch_assoc();
?>

        <div class="p-3 mb-2 bg-dark text-white">
            <h1 class="display-2" style="text-align: center;">SHOP1</h1>
        </div>
        <div class="container" style="text-align: center;">
            <br><br>
            <h3>Tiltle:<?php echo $row["title"];?> </h3>
            <br>
            <br>
            <br>
            <img src="<?php echo $row["image"];?>">
            <br>
            <br>
            <br>
            <p style="font-size:xx-large;"><?php echo $row['description'];?></p>
            <div class="p-3 text-primary-emphasis  bg-danger-subtle border border-primary-subtle rounded-3"> did you fix me problem ?</div>
        </div>
    </body>

</html>
<?php 
}
}
?>