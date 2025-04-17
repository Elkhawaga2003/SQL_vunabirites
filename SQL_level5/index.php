<?php
include("sql.php");
session_start();
if(isset($_POST["user_token"])){
    $token = $_POST['user_token'];

    // التحقق أولاً إذا كان التوكن موجود في القاعدة
    $check = $conn->query("SELECT * FROM tokens WHERE token_value='$token'");

    if($check->num_rows == 0){  // لو التوكن غير موجود، نضيفه
        $sql = "INSERT INTO tokens (token_value) VALUES ('$token')";
        $result = $conn->query($sql);

        if($result){
            echo "go check catogry page and find tables";  // الرسالة اللي هتظهر للمستخدم
        }
    } else {
        echo "Token already exists";  // لو التوكن موجود بالفعل
    }
    exit;  // مهم لتوقف تنفيذ الصفحة بعد الرد
}
$sql = "SELECT * FROM catogry";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
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
                            <a class="nav-link" href="products.php">show products</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="p-3 mb-2 bg-dark text-white">
            <h1 class="display-2" style="text-align: center;">SHOP1</h1>
        </div>
    <div class="container">
        <div id="say_welcome" role="alert"></div>
    <div class="row">
        <?php while ($row = $result->fetch_assoc()) { ?>
        <div class="col-lg">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $row['image']; ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['title']; ?></h5>
                        <p class="card-text"><?php echo $row['description']; ?></p>
                        <a href="catogry.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Show Details</a>
                    </div>
                </div>
        </div>
        <?php } ?>
    </div> 
</div>
    </body>
            <script src="give_me_cookie.js"></script>
    </html>
<?php
    } else {

        echo "there are no items ";
    }
?>