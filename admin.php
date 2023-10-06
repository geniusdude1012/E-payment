<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" type="text/css" href="view.css">
</head>

<body>
    <center><h1>Records of Users</h1></center>
    
        <?php
        include('connect.php');
        $qry = "SELECT * FROM REGISTER";
        $data = mysqli_query($conn, $qry);
        $rows = mysqli_num_rows($data);

        if ($rows != 0) {
        ?>
            <center><table border="3">
                <tr>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>AMOUNT</th>
                    <th>OPERATIONS</th>
                </tr>

            <?php
            while ($value = mysqli_fetch_assoc($data)) {
                echo "
            <tr>
                <td>$value[USERNAME]</td>
                <td>$value[EMAIL]</td>
                <td>$value[PASSWORD]</td>
                <td>$value[AMOUNT]</td>
                <td><a href='update.php?USERNAME=$value[USERNAME]'>Update</a>
                <a href='delete.php?USERNAME=$value[USERNAME]' onclick='checkcon()'>Delete</a></td>
            </tr> ";
            }
        } else {
            echo "<font color='red'>There is no user registered yet!!!!";
        }
            ?>
            </table></center>
            <script>
        function checkcon() {
            var test=confirm('Are you sure you want to delete ?');
            if(test==false)
            {
                event.preventDefault();
            }
        }
    </script>
</body>

</html>

