<?php
require 'vendor/autoload.php';

$transport = new Swift_SmtpTransport();
$mailer = new Swift_Mailer();