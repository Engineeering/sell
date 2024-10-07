<?php
/* Check if form is submitted */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];  // User's name from form input
    $email = $_POST['email'];  // User's email from form input

    /* Log the purchase request (optional logging functionality) */
    $log = "Name: $name, Email: $email\n";
    file_put_contents('purchases.log', $log, FILE_APPEND);  // Appending data to log file

    /* Confirmation message */
    echo "Thank you for your purchase, $name!";
}
?>
