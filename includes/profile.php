<?php
    ob_start();
    session_start();
    require_once 'profile-connect.php';
?>

<?php
    if(isset($_POST['btn_add_post'])) {
        $text = $_POST['text'];
        $post_name = $_SESSION['user']['name'];
        $post_login = $_SESSION['user']['login'];

        if($text != "") {
            mysqli_query($con, "INSERT INTO `posts` (`text`, `name`, `login`, `date`) VALUES ('$text', '$post_name', '$post_login', now())");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="profile">
                    <form action="logout.php" method="">
                        <img src="../img/profile-logo.png" class="profile-logo" alt="Профіль">
                        <h3 class="user"><?= $_SESSION['user']['name']; ?></h3>
                        <h4 class="login"><?= $_SESSION['user']['login']; ?></h4>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="profile">
                        <h5 class="home">Home</h5>
                    <div class="tweet-box">
                        <form action="" method="post">
                            <textarea name="text" class="textarea" placeholder="Що у Вас нового?"></textarea>
                            <button class="btn-post" type="submit" name="btn_add_post">Tweet</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="profile">
                    <form action="logout.php" method="">
                        <button href="logout.php" type="submit" class="btn-logout">Вихід</button>
                    </form>
                </div>
            </div>

        </div>
    </div> 

<?php require_once "post.php"; ?>

<?php
    if(isset($_GET['del'])) {
        $del_ID = $_GET['del'];
        $del = "DELETE FROM `posts` WHERE `posts`.`id` = '$del_ID'";
        $post_query = mysqli_query($con,$del);

        if($del) {
            header('Location: profile.php');
        }
    }
?>

</body>
</html>