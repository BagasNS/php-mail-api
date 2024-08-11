<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Rakit\Validation\Validator;

require 'libs/autoload.php';

header('Content-Type: application/json; charset=utf-8');


// Accept only POST requests
if ('POST' != $_SERVER['REQUEST_METHOD']) {
    http_response_code(400);
    echo json_encode(array('success' => false, 'error' => 'invalid request'));
    exit;
}

// Validate Request
$validator = new Validator;
$validation = $validator->validate($_POST, [
    'smtp_host' => 'required',
    'smtp_username' => 'required',
    'smtp_password' => 'required',
    'smtp_name' => 'nullable',
    'send_to' => 'required|email',
    'subject' => 'required',
    'body' => 'required',
    'alt_body' => 'nullable',
    'is_html' => 'nullable|boolean',
]);

if ($validation->fails()) {
    echo json_encode(array('success' => false, 'errors' => $validation->errors()->toArray()));
    exit;
}

$validatedData = $validation->getValidatedData();

$smtp_host = $validatedData['smtp_host'];
$smtp_username = $validatedData['smtp_username'];
$smtp_password = $validatedData['smtp_password'];
$smtp_name = $validatedData['smtp_name'] ?? $validatedData['smtp_username'];

$send_to = $validatedData['send_to'];
$subject = $validatedData['subject'];
$body = $validatedData['body'];
$alt_body = $validatedData['alt_body'] ?? null;
$is_html = $validatedData['is_html'] ?? true;

$mail = new PHPMailer();

$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Host = $smtp_host;
$mail->Port = 465;
$mail->Username = $smtp_username;
$mail->Password = $smtp_password;

try {
    $mail->setFrom($smtp_username, $smtp_name);
    $mail->addAddress($send_to, $send_to);
    $mail->Subject = $subject;
    $mail->isHTML($is_html);
    $mail->Body = $body;
    $mail->AltBody = $alt_body;

    if ($mail->send()) {
        echo json_encode(array('success' => true, 'error' => null));
    } else {
        echo json_encode(array('success' => false, 'error' => $mail->ErrorInfo));
    }

} catch (Exception $e) {
    echo json_encode(array('error' => $e->getMessage()));
    exit;
}
