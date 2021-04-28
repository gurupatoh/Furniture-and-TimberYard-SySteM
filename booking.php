<?php
include("header.php");

require("conn.php");

if(isset($_POST['save'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $delivery = $_POST['delivery'];
    $address = $_POST['address'];
    $region = $_POST['region'];
    $height = $_POST['height'];
    $width = $_POST['width'];

    $depth = $_POST['depth'];
    $quantity = $_POST['quantity'];
    $woodtype = $_POST['woodtype'];

    // Attempt insert query execution
    $sql = "INSERT INTO timberorders (username, email, phone,delivery,address,region,height,width,depth,quantity,woodtype)
         VALUES ('$username', '$email', '$phone','$delivery ','$address','$region','$height','$width','$depth','$quantity','$woodtype')";
    if (mysqli_query($conn, $sql)) {
        header("location:index.php");

    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="booking.php">
        <ul class="form-style-1">
            <label>username: <span class="required">*</span></label>

            <input type="=text" name="username"  class="field-long" required placeholder="username"/>
            <label>email:<span class="required">*</span></label>

            <input type="text" name="email" class="field-long" placeholder="email" required />
            <label>phone:<span class="required">*</span></label>

            <input type="text" name="phone" class="field-long" placeholder="phone" required />
            <label>address:<span class="required">*</span></label>

            <input type="text" name="address" class="field-long" placeholder="address" required />

            <label>deliveryadddress:<span class="required">*</span></label>

            <input type="text" name="delivery" class="field-long" placeholder="delivery_adddress"  required/>
            <label>region:<span class="required">*</span></label>

            <input type="text" name="region" class="field-long" placeholder="region" required />

            <li><label>TimberDimensions: <span class="required">*</span></label>
                <input type="text" name="height" class="field-divided" placeholder="height" required />
                <input type="text" name="width" class="field-divided" placeholder="width" required />
                <input type="text" name="depth" class="field-divided" placeholder="depth" required />
            </li>
            <li>
                <label>quantity <span class="required">*</span></label>
                <input type="quantity" name="quantity" class="field-long" required />
            </li>
            <li>
                <label>WoodType:</label>
                <select name="woodtype" class="field-select">
                <option value="Mahogany">Mahogany</option>
                <option value="cyprus">cyprus</option>
                <option value="Pinewood">Pinewood</option>
                </select>
            </li>

            <li>
                <input type="submit"  name="save" value="book" />
            </li>
        </ul>
        </form>
</body>
</html>
<style type="text/css">
    .form-style-1 {
    margin:10px auto;
        max-width: 400px;
        padding: 20px 12px 10px 20px;
        font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    }
    .form-style-1 li {
    padding: 0;
    display: block;
    list-style: none;
        margin: 10px 0 0 0;
    }
    .form-style-1 label{
    margin:0 0 3px 0;
        padding:0px;
        display:block;
        font-weight: bold;
    }
    .form-style-1 input[type=text],
    .form-style-1 input[type=date],
    .form-style-1 input[type=datetime],
    .form-style-1 input[type=number],
    .form-style-1 input[type=search],
    .form-style-1 input[type=time],
    .form-style-1 input[type=url],
    .form-style-1 input[type=email],
    textarea,
    select{
    box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        border:1px solid #BEBEBE;
        padding: 7px;
        margin:0px;
        -webkit-transition: all 0.30s ease-in-out;
        -moz-transition: all 0.30s ease-in-out;
        -ms-transition: all 0.30s ease-in-out;
        -o-transition: all 0.30s ease-in-out;
        outline: none;
    }
    .form-style-1 input[type=text]:focus,
    .form-style-1 input[type=date]:focus,
    .form-style-1 input[type=datetime]:focus,
    .form-style-1 input[type=number]:focus,
    .form-style-1 input[type=search]:focus,
    .form-style-1 input[type=time]:focus,
    .form-style-1 input[type=url]:focus,
    .form-style-1 input[type=email]:focus,
    .form-style-1 textarea:focus,
    .form-style-1 select:focus{
    -moz-box-shadow: 0 0 8px #88D5E9;
    -webkit-box-shadow: 0 0 8px #88D5E9;
        box-shadow: 0 0 8px #88D5E9;
        border: 1px solid #88D5E9;
    }
    .form-style-1 .field-divided{
    width: 49%;
}

    .form-style-1 .field-long{
    width: 100%;
}
    .form-style-1 .field-select{
    width: 100%;
}
    .form-style-1 .field-textarea{
    height: 100px;
    }
    .form-style-1 input[type=submit], .form-style-1 input[type=button]{
    background: #4B99AD;
    padding: 8px 15px 8px 15px;
        border: none;
        color: #fff;
    }
    .form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
    background: #4691A4;
    box-shadow:none;
        -moz-box-shadow:none;
        -webkit-box-shadow:none;
    }
    .form-style-1 .required{
    color:red;
}
    </style>
<?php
include("footer.php");

