<?php require "../config/config.php"; ?>
<?php require "../libs/App.php"; ?>
<?php require "../includes/header.php"; ?>

<?php
if(isset($_GET['id'])) {
$id= $_GET['id'];

    $query = "DELETE FROM cart WHERE id='$id'";
    $app = new App;
    $path = 'cart.php';
    $app->delete($query, $path);
}  else {
    echo "<script>window.location.href='".APPURL."/404.php'</script>";
}
