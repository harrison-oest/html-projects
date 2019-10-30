<!doctype html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Harrison Oest" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Here's the form to buy stuff" />
    <link rel="stylesheet" type="text/css" href="../csci445.css"/>
    <title>Order Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<?php $pageName = "form"; ?>
<?php $currentPath = "php/"; ?>
<?php date_default_timezone_set("America/Denver"); ?>

<body>
    <?php include "../templateHeader.php"; ?>
    <h2>The Keyboard Store</h2>
    <h3>Artisan Keycaps</h3>
    <div id="store_form">
        <form action="form_submit.php" name="order_form" method="post">

                <fieldset>
                    <legend>Choose Your Keycap(s)</legend>
                    <li>
                        <select id="keycap_select" onchange="document.getElementById('current_img').src=this.options[this.selectedIndex].value;" required>
                            <option value="../images/zenpond.jpg">Zen Pond II --- $45</option>
                            <option value="../images/summersneaker.jpg">Summer Sneaker --- $50</option>
                            <option value="../images/cosmos.jpg">Cosmos Series --- $60</option>
                            <option value="../images/atlantis.jpg">Atlantis Coral --- $50</option>
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
                    <input type="hidden" name="submit_time" value="<?php echo time(); ?>">
                </fieldset>
                <br>
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
                <input id="rst_btn" type="reset">
                <input id="submit_btn" type="submit">

        </form>
    </div>
    <?php include "../templateFooter.php"; ?>
</body>
</html>