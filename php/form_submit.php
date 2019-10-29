<!doctype php>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Harrison Oest" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Handle form submissions" />
    <link rel="stylesheet" type="text/css" href="../csci445.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<?php 

$pageName = "form_submit";
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

// Check what type of keycap is selected
if ($_POST["keycap_select"] == "zen_pond") {
    $keycap_name = "Zen Pond II";
    $keycap_price = 45;
    $image = "../images/zenpond.jpg";
} else if ($_POST["keycap_select"] == "sneaker") {
    $keycap_name = "Summer Sneaker";
    $keycap_price = 50;
    $image = "../images/summersneaker.jpg";
} else if ($_POST["keycap_select"] == "cosmos") {
    $keycap_name = "Cosmos Series";
    $keycap_price = 60;
    $image = "../images/cosmos.jpg";
} else if ($_POST["keycap_select"] == "corral") {
    $keycap_name = "Atlantis Corral";
    $keycap_price = 50;
    $image = "../images/atlantis.jpg";
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
    <footer id="foot">
		<?php include "../templateFooter.php"; ?>
	</footer>
</body>