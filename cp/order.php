<?php
require("../conn.php");
include("header2.php");

$result = mysqli_query($conn,"SELECT * FROM timberorders");
?>
<!DOCTYPE html>
<html>
<head>
    <title> Timber order</title>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
    ?>
    <div>
        <div>
            <space>
                <h3>Timber Order Details:</h3>

            </space>
        </div>
    </div>
    <table id="customers">

        <tr>
            <td>User Name</td>
            <td>email</td>
            <td>phone</td>
            <td> address</td>
            <td> delivery_address</td>
            <td> region</td>
            <td> woodtype</td>

            <td> height</td>
            <td> weight</td>
            <td> depth</td>
            <td> quantity</td>






        </tr>

        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row["username"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["phone"]; ?></td>
                <td><?php echo $row["address"]; ?></td>
                <td><?php echo $row["delivery"]; ?></td>
                <td><?php echo $row["region"]; ?></td>
                <td><?php echo $row["woodtype"]; ?></td>
                <td><?php echo $row["height"]; ?></td>
                <td><?php echo $row["width"]; ?></td>
                <td><?php echo $row["depth"]; ?></td>
                <td><?php echo $row["quantity"]; ?></td>







            </tr>
            <?php
            $i++;
        }
        ?>
    </table>
    <?php
}
else{
    echo "No result found";
}
?>
</body>
</html>


