<?php require_once "pdo.php";

        $customer_sql = "INSERT INTO customer_info (first_name, last_name, email, phone) VALUES (:first_name, :last_name, :email, :phone)";
        $customer_stmt = $conn->prepare($customer_sql);

        $customer_succss = $customer_stmt->execute(array(
            ':first_name' => $_POST['firstname'],
            ':last_name' => $_POST['lastname'],
            ':email' => $_POST['email'],
            ':phone' => $_POST['phonenumber']
        ));

        $sql_cust_id = $conn->lastInsertId();

         $order_sql = "INSERT INTO order_info (product_id, product_type_id, customer_id, product_name, quantity, shipping_method, street_address, city, state, zipcode, country, credit_card_number, cvc_number, card_exp_date, total_cost)
                   VALUES (:product_id, :product_type_id, :customer_id, :product_name, :quantity, :shipping_method, :street_address, :city, :state, :zipcode, :country, :credit_card_number, :cvc_number, :card_exp_date, :total_cost)";

         $order_stmt = $conn->prepare($order_sql);
         $order_success = $order_stmt->execute(array(
             ':product_id' => $_POST['id'],
             ':product_type_id' => $_POST['type'],
             ':customer_id' => $sql_cust_id,
             ':product_name' => $_POST['product'],
             ':quantity' => $_POST['quantity'],
             ':shipping_method' => $_POST['shippingMethod'],
             ':street_address' => $_POST['address'],
             ':city' => $_POST['city'],
             ':state' => $_POST['state'],
             ':zipcode' => $_POST['zipcode'],
             ':country' => $_POST['country'],
             ':credit_card_number' => $_POST['cardnumber'],
             ':cvc_number' => $_POST['cvc'],
             ':card_exp_date' => $_POST['expdate'],
             ':total_cost' => $_POST['totalCostInput']
         ));

         if($customer_succss && $order_success){
            header('Location:http://andromeda-3.ics.uci.edu:5103/assignment2/confirmation.php?id='.$conn->lastInsertId());
            exit;
         }
         $conn=null;
?>
