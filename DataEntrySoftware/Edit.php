<?php
error_reporting(E_ALL);

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $connact = mysqli_connect('localhost', 'root', '', 'dbinfo');
    $Retrive = mysqli_query($connact, "SELECT * FROM students_info WHERE id = '$id'");
    $row = mysqli_fetch_array($Retrive);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if (isset($_POST['Submit'])) {
        $a = $_POST['Yname'];
        $b = $_POST['DOB'];
        $c = $_POST['FAname'];
        $d = $_POST['MOname'];
        $e = $_POST['Email'];
        $f = $_POST['Phone'];
        $g = $_POST['Gender'];

        $connact = mysqli_connect('localhost', 'root', '', 'dbinfo');

        $query = mysqli_query($connact, "INSERT INTO `students_info`(`id`, `Name`, `DOB`, `FaName`, `MoName`, `Email`, `Phone`, `Gender`) VALUES ('','$a','$b','$c','$d','$e','$f','$g') ");
        if ($query) {
            echo "<Script>alert('Data Inserted!')</script>";
        } else {
            echo "<Script>alert('Insertion Fail!')</script>";

        }


    }
    if (isset($_GET['id'])) {


        ?>

        <section class="container con cotrun" id="PopUP">
            <h1 id="h1">Edit Record</h1>
            <form action="Update.php" id="form_rg" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label for="text" class="lev">
                    <p class="P_fo_FORM">Full Name:</p>
                    <input type="text" class="infeld ho" value="<?php echo $row['Name']; ?>" name="Yname">
                </label>
                <label for="text" class="lev">
                    <p class="P_fo_FORM">Date Of Barth:</p>

                    <input type="date" class="infeld ho" value="<?php echo $row['DOB']; ?>" name="DOB">

                </label>
                <label for="text" class="lev">
                    <p class="P_fo_FORM">Father's Name:</p>

                    <input type="text" class="infeld ho" value="<?php echo $row['FaName']; ?>" name="FAname">
                </label>
                <label for="text" class="lev">
                    <p class="P_fo_FORM">Mother's Name:</p>

                    <input type="text" class="infeld ho" value="<?php echo $row['MoName']; ?>" name="MOname">
                </label>
                <label for="email" class="lev">
                    <p class="P_fo_FORM">Email:</p>

                    <input type="email" class="infeld ho" value="<?php echo $row['Email']; ?>" name="Email">
                </label>
                <label for="text" class="lev">
                    <p class="P_fo_FORM">Phone:</p>

                    <input type="Number" class="infeld ho" value="<?php echo $row['Phone']; ?>" name="Phone">
                </label>
                <label class="op">
                    <p class="P_fo_FORM">Gender:</p>

                    <input type="radio" name="Gender" value="Male" <?php if ($row['Gender'] == "Male")
                        echo "checked"; ?>>
                    Male

                    <input type="radio" name="Gender" value="Female" <?php if ($row['Gender'] == "Female")
                        echo "checked"; ?>>
                    Female
                </label>




                <label for="button" class="opo">
                    <a href="viewData.php" class="btn">Back</a>
                    <input class="btn" type="submit" id="SBTN" name="Submit" value="Submit">
                </label>
            </form>
        <?php } ?>


    </section>
       <script>
        let Popup = document.getElementById('PopUP');

        function Show() {
            Popup.classList.add('view')
        };
        function Remove() {
            Popup.classList.remove('view')
        }
    </script>
</body>



</html>