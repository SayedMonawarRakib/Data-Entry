<?php


if (isset($_POST['btn'])) {
    $x = $_GET['id'];
    $connact = mysqli_connect('localhost', 'root', '', 'dbinfo');
    $query = mysqli_query($connact, "DELETE FROM `students_info` WHERE id = $x");
    if ($query) {
        echo '<script>window.location.href = "viewData.php";</script>';
    } else {
        echo "<Script>alert('Fail!')</script>";

    }


}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .form{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: stretch;
}
.PopUpDelete {
    border: 1px solid #00000042;
    height: 150px;
    width: 20%;
    border-radius: 10px;
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    background: white;
    position: absolute;
    top: 40%;
    left: 40%;
    z-index: 40;
    box-shadow: 0px 0px 20px #060606;
    /* visibility: hidden; */
}
    </style>
</head>
<body>
        <div class="PopUpDelete" id="PUD">
        <div class="PUD1">
            <p>Do you Want to Delete this Reacord</p>

        </div>
        <div class="PUD2">
            <form action="<?php $PHP_SELF ?>" class="form" method="POST">
                <a href="viewData.php" class="Edit">No</a>
                <button name="btn" onclick="ERemove()" class="btn">Yes</button>
            </form>
        </div>

    </div>
    <?php  ?>
</body>
  <script>

        let Pup = document.getElementById('PUD');
    
        function EShow() {
            Pup.classList.add('view')
        };
        function ERemove() {
            Pup.classList.remove('view')
        };
    </script>
</html>