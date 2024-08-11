# PHP Mail API
[![License](http://img.shields.io/:license-mit-blue.svg?style=flat-square)](http://doge.mit-license.org)

A standalone PHP application for sending emails using a REST API. No composer or external dependencies required—simply download and start sending emails right away.
perfect for deployment under shared web hosting

## Installation

1. Clone/Download this repository
2. Upload the files to your web server

## Usage
HTTP POST request to `https://your-domain.com/send-mail/index.php`

```json
{
    "smtp_host": "smtp.gmail.com",
    "smtp_username": "your-email@gmail.com",
    "smtp_password": "your-password",
    "smtp_name": "Your Name",
    "send_to": "recipient@example.com",
    "subject": "Test Email",
    "body": "This is a test email",
    "alt_body": "This is an alternate body",
    "is_html": true
}
```