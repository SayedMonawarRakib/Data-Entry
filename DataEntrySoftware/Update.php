<?php
error_reporting(E_ALL);


if (isset($_POST['Submit'])) {
    $id = $_POST['id'];
    $a = $_POST['Yname'];
    $b = $_POST['DOB'];
    $c = $_POST['FAname'];
    $d = $_POST['MOname'];
    $e = $_POST['Email'];
    $f = $_POST['Phone'];
    $g = $_POST['Gender'];
    $connact = mysqli_connect('localhost', 'root', '', 'dbinfo');
    $query = mysqli_query($connact, "UPDATE `students_info` SET `id`='$id',`Name`='$a',`DOB`='$b',`FaName`='$c',`MoName`='$d',`Email`='$e',`Phone`='$f',`Gender`='$g' WHERE id = $id");
    if ($query) {
        echo '<script>window.location.href = "viewData.php";</script>';
    } else {
        echo "<Script>alert('Fail!')</script>";

    }


}


?>