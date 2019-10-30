<!doctype html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Harrison Oest" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Handle form submissions" />
    <link rel="stylesheet" type="text/css" href="../csci445.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<?php 

$pageName = "io_submit";
$currentPath = "php/";
date_default_timezone_set("America/Denver");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];

    if (!preg_match("/^[a-zA-Z \']*$/", $first_name)) {
        $message = "Please only enter letters and apostrophies for your first name!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    if (!preg_match("/^[a-zA-Z \']*$/", $last_name)) {
        $message = "Please only enter letters and apostrophies for your last name!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Please enter a valid email format!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

$keycap_name = "";
$keycap_price = 0;
$item_list = [];
$item_file = fopen("itemlist.csv", "r") or die("Unable to open file");

while (($item_info = fgetcsv($item_file, ",")) !== FALSE) {
    $item_list[] = $item_info;
    echo "<br>";
}
fclose($item_file);

// Check what type of keycap is selected
for($x = 0; $x < 3; $x++) {
    if($_POST["keycap_select"] == '../images/'.$item_list[$x][2].'.jpg'){
        $keycap_name = $item_list[$x][0];
        echo $keycap_name;
        $keycap_price = $item_list[$x][1];
    }
}

$quantity = $_POST["quantity"];
$tax_rate = 0.07;
$subtotal = $quantity * $keycap_price;
$tax = $tax_rate * $subtotal;
$submit_time = date("m/d/y g:i:s", $_POST["submit_time"]);

if ($_POST["donation"] == "yes") {
    $grand_total = ceil($subtotal + $tax);
    $donation = $grand_total - ($subtotal + $tax);
} else {
    $grand_total = $subtotal + $tax;
}

$order_file = fopen("orders.csv", "a");
$order_info = $first_name." ".$last_name.",".$submit_time.",".$keycap_name.",".$quantity.",".$grand_total."\n";
fwrite($order_file, $order_info);
fclose($order_file);

?>

<body>
    <?php include "../templateHeader.php"; ?>
    <h2>The Keyboard Store</h2>
    <h3>Your Receipt</h3>
    <div id="receipt">
        <h3>The Keyboard Store</h3>
            <p class="information">
                <?php 
                echo "Name on Order: ".$first_name." ".$last_name;
                echo "<br>";
                echo "Email: ".$email;
                echo "<br>";
                echo "Time submitted: ".$submit_time;
                echo "<br>";
                echo "<br>"; 
                echo "<br>";
                echo "Keycap Purchased: ".$keycap_name;
                echo "<br>";
                echo "Price per keycap: $".number_format($keycap_price, 2);
                echo "<br>";
                echo "Quantity purchased: ".$quantity;
                echo "<br>";
                echo "Subtotal: $".number_format($subtotal, 2);
                echo "<br>";
                echo "Tax: $".number_format($tax, 2);
                echo "<br>";
                echo "Grand Total: $".number_format($grand_total, 2);
                ?>
            </p>
    </div>
    <?php include "./templateFooter.php"; ?>
</body>