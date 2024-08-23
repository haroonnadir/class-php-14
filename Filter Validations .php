<?php
$intValue = "42";
if (filter_var($intValue, FILTER_VALIDATE_INT) !== false) {
    echo "$intValue is a valid integer.\n";
} else {
    echo "$intValue is not a valid integer.\n";
}
?>


<?php
$floatValue = "3.14";
if (filter_var($floatValue, FILTER_VALIDATE_FLOAT) !== false) {
    echo "$floatValue is a valid float.\n";
} else {
    echo "$floatValue is not a valid float.\n";
}
?>



<?php
$boolValue = "true";
if (filter_var($boolValue, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) !== null) {
    echo "$boolValue is a valid boolean.\n";
} else {
    echo "$boolValue is not a valid boolean.\n";
}
?>


<?php
$email = "example@example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
    echo "$email is a valid email address.\n";
} else {
    echo "$email is not a valid email address.\n";
}
?>



<?php
$url = "https://www.example.com";
if (filter_var($url, FILTER_VALIDATE_URL) !== false) {
    echo "$url is a valid URL.\n";
} else {
    echo "$url is not a valid URL.\n";
}
?>


<?php
$ip = "192.168.1.1";
if (filter_var($ip, FILTER_VALIDATE_IP) !== false) {
    echo "$ip is a valid IP address.\n";
} else {
    echo "$ip is not a valid IP address.\n";
}
?>


<?php
$mac = "00:1A:2B:3C:4D:5E";
if (filter_var($mac, FILTER_VALIDATE_MAC) !== false) {
    echo "$mac is a valid MAC address.\n";
} else {
    echo "$mac is not a valid MAC address.\n";
}
?>



<?php
$regexpValue = "12345";
$pattern = "/^\d{5}$/"; // Pattern for exactly 5 digits
if (filter_var($regexpValue, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => $pattern]]) !== false) {
    echo "$regexpValue matches the regular expression.\n";
} else {
    echo "$regexpValue does not match the regular expression.\n";
}
?>

<?php
$email = "   example@ex!ample.com  ";
$sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
echo "Original Email: '$email'\n";
echo "Sanitized Email: '$sanitizedEmail'\n";
?>


<?php
$url = "https://www.example.com/<script>alert('xss')</script>";
$sanitizedUrl = filter_var($url, FILTER_SANITIZE_URL);
echo "Original URL: '$url'\n";
echo "Sanitized URL: '$sanitizedUrl'\n";
?>


<?php
$number = "123abc456";
$sanitizedNumber = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
echo "Original Number: '$number'\n";
echo "Sanitized Number: '$sanitizedNumber'\n";
?>




<?php
$number = "123abc456";
$sanitizedNumber = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
echo "Original Number: '$number'\n";
echo "Sanitized Number: '$sanitizedNumber'\n";
?>.



<?php


<?php
$floatNumber = "123.45abc678";
$sanitizedFloatNumber = filter_var($floatNumber, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
echo "Original Float Number: '$floatNumber'\n";
echo "Sanitized Float Number: '$sanitizedFloatNumber'\n";
?>



<?php
$string = "O'Reilly";
$sanitizedString = filter_var($string, FILTER_SANITIZE_MAGIC_QUOTES);
echo "Original String: '$string'\n";
echo "Sanitized String: '$sanitizedString'\n";
?>


<?php
$string = "<p>This is <a href='#'>a link</a>.</p>";
$sanitizedString = filter_var($string, FILTER_SANITIZE_STRING);
echo "Original String: '$string'\n";
echo "Sanitized String: '$sanitizedString'\n";
?>








<?php
$string = "<p>This is a test.</p>";
$sanitizedEncodedString = filter_var($string, FILTER_SANITIZE_ENCODED);
echo "Original String: '$string'\n";
echo "Sanitized Encoded String: '$sanitizedEncodedString'\n";
?>


<?php
$string = "<p>This is a test.</p>";
$sanitizedSpecialCharsString = filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS);
echo "Original String: '$string'\n";
echo "Sanitized Special Chars String: '$sanitizedSpecialCharsString'\n";
?>



<?php
// Sample input data
$data = [
    'email' => 'example@example.com',
    'url' => 'https://www.example.com',
    'age' => '25',
    'price' => '99.99',
    'ip' => '192.168.1.1',
    'comments' => '<script>alert("xss")</script> This is a comment.'
];
// Define the filters
$filters = [
    'email' => FILTER_VALIDATE_EMAIL,
    'url' => FILTER_VALIDATE_URL,
    'age' => [
        'filter' => FILTER_VALIDATE_INT,
        'options' => ['min_range' => 0]
    ],
    'price' => [
        'filter' => FILTER_VALIDATE_FLOAT,
        'options' => ['decimal' => '.']
    ],
    'ip' => FILTER_VALIDATE_IP,
    'comments' => FILTER_SANITIZE_STRING
];
// Apply the filters
$filteredData = filter_var_array($data, $filters);
echo "Filtered Data:\n";
print_r($filteredData);
?>







<?php
// Simulate a GET request with a parameter
$_GET['email'] = 'example@example.com';
// Fetch and validate the email using filter_input()
$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
if ($email) {
    echo "Valid email: $email\n";
} else {
    echo "Invalid email.\n";
}
?>

<?php
// Simulate a POST request with a parameter
$_POST['comment'] = '<script>alert("xss")</script> This is a comment.';
// Fetch and sanitize the comment using filter_input()
$comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);
echo "Sanitized comment: $comment\n";
?>


<?php
// Simulate a COOKIE with a parameter
$_COOKIE['age'] = '25';
// Fetch and validate the integer using filter_input()
$age = filter_input(INPUT_COOKIE, 'age', FILTER_VALIDATE_INT, ['options' => ['min_range' => 0]]);
if ($age !== false) {
    echo "Valid age: $age\n";
} else {
    echo "Invalid age.\n";
}
?>


<?php
// Simulate a SERVER variable
$_SERVER['REQUEST_URI'] = 'https://example.com/?param=<script>alert("xss")</script>';
// Fetch and sanitize the URL using filter_input()
$requestUri = filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_URL);
echo "Sanitized URL: $requestUri\n";
?>





<?php
// Simulate an environment variable
$_ENV['APP_ENV'] = 'development';
// Fetch the environment variable using filter_input()
$appEnv = filter_input(INPUT_ENV, 'APP_ENV', FILTER_SANITIZE_STRING);
echo "Environment: $appEnv\n";
?>


