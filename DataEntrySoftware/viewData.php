<?php
include_once('Edit.php');
// require_once('delete.php');


$connact = mysqli_connect('localhost', 'root', '', 'dbinfo');
$Retrive = mysqli_query($connact, "SELECT * FROM students_info ");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $row = mysqli_fetch_array($Retrive);
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA VIEW</title>
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <section id="HoUNick">
        <div class="HoUn1">
            <h1><span>D</span>ata<span>E</span>ntry</h1>
            <div id="nav">
                <a href="index.php" class=" nava">Home</a>
                <a href="viewData.php" class="active nava">View Data</a>
                <a href="RegPage.php" class="nava">Insert Data</a>
            </div>
        </div>

        <section class="DataV">
            <table>
                <tr id="TrTH">
                    
                    <th>Name</th>
                    <th>Date FO Barth</th>
                    <th>Father Name</th>
                    <th>Mother Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Status</th>
                </tr>

                <?php
                if (mysqli_num_rows($Retrive) > 0) {
                    while ($row = mysqli_fetch_array($Retrive)) {
                        ?>

                        <tr>
                            
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['DOB']; ?></td>
                            <td><?php echo $row['FaName']; ?></td>
                            <td><?php echo $row['MoName']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Phone']; ?></td>
                            <td><?php echo $row['Gender']; ?></td>
                            <td id="ived">
                                <a href="viewData.php?id=<?php echo $row['id']; ?>" onclick="Show()" class="Edit">
                                    Edit
                                </a>
                                <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="EShow()" class="btn">
                                    Delete
                                </a>
                                
                            </td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td class="">No Data Found</td>
                    </tr>
                <?php }; ?>
            </table>
        </section>
    </section>
    <script>

        let Pup = document.getElementById('PUD');
        let Popup = document.getElementById('PopUP');
        function EShow() {
            Pup.classList.add('view')
        };
        function ERemove() {
            Pup.classList.remove('view')
        };
        function Show() {
            Popup.classList.add('view')
        };
        function Remove() {
            Popup.classList.remove('view')
        };
       
    </script>



</body>

</html>