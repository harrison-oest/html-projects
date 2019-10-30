<!doctype html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="Harrison Oest" />
	<meta name="description" content="View all orders placed." />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Orders</title>
    <link rel="stylesheet" type="text/css" href="../csci445.css"/>
</head>

<?php
    date_default_timezone_set("America/Denver");
    $pageName = "vieworders";
    $currentPath = "php/";
    $total_orders = [];
    $name = array();
    $map = array();

    if (!empty("orders.csv")) {
        $orders = fopen("orders.csv", "r") or die("Unable to open file");

        while (($single_order = fgetcsv($orders, ",")) !== FALSE) {
            $total_orders[] = $single_order;
        }
        fclose($orders);

        for ($x = 0; $x < sizeof($total_orders); $x++) {
            $current_line = $total_orders[$x];
            $current_name = $current_line[0];

            if (in_array($current_name, $map) == FALSE) {
                $map[$current_name] = array();
            }
        }

        for ($w = 0; $w < sizeof($total_orders); $w++) {
            $current_line = $total_orders[$w];
            $current_name = $current_line[0];

            array_push($map[$current_name], $current_line);
        }
    } else {
        echo "No orders have been placed yet!";
        exit();
    }
?>

<body>
    <?php include "../templateHeader.php"; ?>
    <h2>The Keyboard Store</h2>
    <h3>KeyCap Orders</h3>
    <div>
        <?php
        $store_total = 0;
        foreach ($map as $key => $val) {
            $customer_total = 0;
            echo "<hr width='100%' align=center>";
            echo "<b>Customer Name: </b>".$key."<br><br>";
            $customer_purchases = $map[$key];
            for ($s = 0; $s < sizeof($customer_purchases); $s++) {
                $current_line = $customer_purchases[$s];
                $customer_total += $current_line[4];
                echo "Order #".$s." was placed at ".$current_line[1]." and ".$key." ordered ".$current_line[3]." units. The total was $".number_format($current_line[4], 2)."<br><br>";

            }
            echo "<p>The total amount this customer has ordered is $".number_format($customer_total, 2)."</p><br><br>";
            $store_total += $customer_total;
        }
        echo "<hr width='100%' align=center>";
        echo "<p>The store total is $".number_format($store_total, 2)."</p><br><br>";
        ?>
    </div>
    <?php include "../templateFooter.php"; ?>
</body>