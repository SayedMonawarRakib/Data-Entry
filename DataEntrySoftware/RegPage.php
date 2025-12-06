  <?php
error_reporting(E_ALL);
    

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
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reagestation_Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #HoUNick{
            box-shadow: 0px 0px 20px #060606;
        }
    </style>
</head>

<body>
    <section id="HoUNick">
        <div class="HoUn1">
            <h1><span>D</span>ata<span>E</span>ntry</h1>
            <div id="nav">
                <a href="index.php" class="nava">Home</a>
                <a href="viewData.php" class="nava">View Data</a>
                <a href="RegPage.php" class="active nava">Insert Data</a>
            </div>
        </div>
        <section class="container">
            <h1 id="h1">Regstation Form</h1>
            <form action="<?php $PHP_SELF ?>" id="form_rg" method="POST">
                <label for="text" class="lev">
                    <p class="P_fo_FORM">Full Name:</p>
                    <input type="text" class="infeld ho" placeholder=" Full Name" name="Yname" required>
                </label>
                <label for="text" class="lev">
                    <p class="P_fo_FORM">Date Of Barth:</p>

                    <input type="date" class="infeld ho" placeholder=" Date Of Barth" name="DOB" required>

                </label>
                <label for="text" class="lev">
                    <p class="P_fo_FORM">Father's Name:</p>

                    <input type="text" class="infeld ho" placeholder=" Father's Name" name="FAname" required>
                </label>
                <label for="text" class="lev">
                    <p class="P_fo_FORM">Mother's Name:</p>

                    <input type="text" class="infeld ho" placeholder=" Mother's Name" name="MOname" required>
                </label>
                <label for="email" class="lev">
                    <p class="P_fo_FORM">Email:</p>

                    <input type="email" class="infeld ho" placeholder=" Email Address" name="Email" required>
                </label>
                <label for="text" class="lev">
                    <p class="P_fo_FORM">Phone:</p>

                    <input type="Number" class="infeld ho" placeholder=" Enter Your Phone " name="Phone" required>
                </label>
                <label for="radio" class="op">
                    <p class="P_fo_FORM">Gender:</p>
                    <input type="radio" id="radio_button" value="Male" name="Gender">
                    <option value="radio" class="p">Male</option>
                    <input type="radio" name="radio" id="radio_button" name="Gender" value="Female">
                    <option value="radio" class="p">Female</option>
                </label>



                <label for="button" class="opo">
                    <input class="btn" type="reset" value="Restart">
                    <input class="btn" type="submit" id="SBTN" name="Submit" value="Submit">
                </label>
            </form>
        </section>
    </section>
</body>

</html>













