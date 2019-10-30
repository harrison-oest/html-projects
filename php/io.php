<!doctype html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="Harrison Oest" />
	<meta name="description" content="Order prodcuts with a file." />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
    <link rel="stylesheet" type="text/css" href="../csci445.css"/>
</head>

<?php
    date_default_timezone_set("America/Denver");
    $pageName = "io";
    $currentPath = "php/";
    $item_list = [];
    $item_file = fopen("itemlist.csv", "r") or die("Unable to open file");

    while (($item_info = fgetcsv($item_file, ",")) !== FALSE) {
        $item_list[] = $item_info;
    }
    fclose($item_file);
?>

<body>
    <?php include "../templateHeader.php"; ?>
    <h2>The Keyboard Store</h2>
    <h3>Artisan Keycaps</h3>
    <div id="store_form">
        <form action="io_submit.php" name="order_form" method="post">
            <ul id="cap_list">
                <fieldset>
                    <legend>Choose Your Keycap(s)</legend>
                    <li>
                        <select onchange="document.getElementById('current_img').src=this.options[this.selectedIndex].value;" id="keycap_select" name="keycap_select" required>
                            <option value='../images/<?php echo $item_list[0][2]; ?>.jpg'><?php echo $item_list[0][0], " --- $", $item_list[0][1]?></option>
                            <option value='../images/<?php echo $item_list[1][2]; ?>.jpg'><?php echo $item_list[1][0], " --- $", $item_list[1][1]?> </option>
                            <option value='../images/<?php echo $item_list[2][2]; ?>.jpg'><?php echo $item_list[2][0], " --- $", $item_list[2][1]?></option>
                            <option value='../images/<?php echo $item_list[3][2]; ?>.jpg'><?php echo $item_list[3][0], " --- $", $item_list[3][1]?></option>
                        </select>
                        Quantity*: <input name="quantity" type="number" required>
                    </li>
                    <br>
                    <img id="current_img" name="current_img" src="../images/zenpond.jpg" alt="zen pond" style="width:300px; height:200px">
                    <br>
                    <li>
                        Donation?
                        <input type="radio" name="donation" value="yes" required>Yes 
                        <input type="radio" name="donation" value="no" required>No
                    </li>
                    <input type="hidden" name="submit_time" value="<?php echo time() ?>">
                </fieldset>
                <fieldset>
                    <legend>Your Information</legend>
                    <li>
                        First Name*:
                        <input type="text" name="first_name" required><br>
                        Last Name*:
                        <input type="text" name="last_name" required><br>
                        Email Address*:
                        <input type="text" name="email" required>
                    </li>   
                </fieldset>
                <input id="rst_btn" type="reset"></button>
                <input id="submit_btn" type="submit"></button>
            </ul>
        </form>
    </div>
    <?php include "../templateFooter.php"; ?>
</body>