<?php
session_start();

// Set cookie with relevant information about the visitor
$visitor_info = array(
    'name' => 'John Doe',
    'age' => 25,
    'gender' => 'Male'
);
$cookie_value = json_encode($visitor_info);
setcookie('visitor_info', $cookie_value, time() + (86400 * 30), '/'); // Cookie expires in 30 days

// Display cookie value after page refresh
if (isset($_COOKIE['visitor_info'])) {
    $cookie_data = json_decode($_COOKIE['visitor_info'], true);
    $cookie_data = array_map('htmlspecialchars', $cookie_data);
    echo "Cookie Value: <br>";
    echo "Name: " . $cookie_data['name'] . "<br>";
    echo "Age: " . $cookie_data['age'] . "<br>";
    echo "Gender: " . $cookie_data['gender'] . "<br>";
}

// Validate and display session data after page refresh
if (isset($_SESSION['form_data'])) {
    $session_data = $_SESSION['form_data'];
    $session_data = array_map('htmlspecialchars', $session_data);
    echo "Session Data: <br>";
    echo "Full Name: " . $session_data['fullName'] . "<br>";
    echo "Age: " . $session_data['age'] . "<br>";
    echo "Gender: " . $session_data['gender'] . "<br>";
}

// Terminate the session
session_destroy();
?>
