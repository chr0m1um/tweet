<?php

    $query = "SELECT * FROM `posts` ORDER BY id DESC";
    $data = mysqli_query($con, $query);

    while($row = mysqli_fetch_assoc($data)) {
        $text = $row['text'];
        $date = $row['date'];
        $post_name = $row['name'];
        $post_login = $row['login'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="post__box">
                    <a href="profile.php?del=<?= $row['id']; ?>"><img src="../img/cross.png" class="delete" alt="Видалити"></a></h5>
                    <h5> <span class="post__name"><?php echo $post_name.' '; ?></span> 
                    <span class="post__login"><?php echo '@'.$post_login.' '; ?></span> 
                    <span class="post__date"><?php echo $date; ?></span>
                    <textarea class="post__text" disabled><?= $text; ?></textarea> 
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>   
</body>
</html>

<?php
}
?>


