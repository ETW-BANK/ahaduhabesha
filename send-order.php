<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $productName = $_POST['productName'] ?? '';
    $productPrice = $_POST['productPrice'] ?? '';
    $fullName = $_POST['fullName'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';
    $message = $_POST['message'] ?? '';
    
    // Email configuration
    $to = "girmatensae18@gmail.com";
    $subject = "New Order from Ahadu Habesha Website";
    
    // Create email body
    $email_body = "
    <html>
    <head>
        <title>New Order Received</title>
    </head>
    <body>
        <h2>New Order Details</h2>
        <hr>
        <p><strong>Product Information:</strong></p>
        <ul>
            <li><strong>Product Name:</strong> {$productName}</li>
            <li><strong>Product Price:</strong> {$productPrice}</li>
        </ul>
        
        <p><strong>Customer Information:</strong></p>
        <ul>
            <li><strong>Full Name:</strong> {$fullName}</li>
            <li><strong>Phone Number:</strong> {$phone}</li>
            <li><strong>Address:</strong> {$address}</li>
        </ul>
        
        <p><strong>Additional Message:</strong></p>
        <p>{$message}</p>
        
        <hr>
        <p><em>This order was submitted on " . date('Y-m-d H:i:s') . "</em></p>
    </body>
    </html>
    ";
    
    // Email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: orders@ahaduhabesha.com" . "\r\n";
    $headers .= "Reply-To: {$fullName} <noreply@ahaduhabesha.com>" . "\r\n";
    
    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        // Success response
        echo json_encode([
            'status' => 'success',
            'message' => 'Order sent successfully! We will contact you soon.'
        ]);
    } else {
        // Error response
        echo json_encode([
            'status' => 'error',
            'message' => 'Failed to send order. Please try again or contact us directly.'
        ]);
    }
} else {
    // Invalid request method
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method.'
    ]);
}
?>