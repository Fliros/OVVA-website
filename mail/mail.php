<?php

 /*----------------------------------------------------------------------------*\
|*  Email settings for sending all emails from your website forms.              *|
 \*============================================================================*/

// Choose here whether to use php mail() function or your SMTP server (recommended) to send the email.
// Use 'smtp' for better reliability, or use 'phpmail' for quick + easy setup with lower reliability.
$emailMethod                = 'smtp'; // REQUIRED value. Options: 'smtp' , 'phpmail'

// Outgoing Server Settings - replace values on the right of the = sign with your own.
// These 3 settings are only required if you choose 'smtp' for emailMethod above.
$outgoingServerAddress      = 'smtp.zoho.com';      // Consult your hosting provider.
$outgoingServerPort         = '465';                // Options: '587' , '25' - Consult your hosting provider.
$outgoingServerSecurity     = 'ssl';                // Options: 'ssl' , 'tls' , null - Consult your hosting provider.

// Sending Account Settings - replace these details with an email account held on the SMTP server entered above.
// These 2 settings are only required if you choose 'smtp' for emailMethod above.
$sendingAccountUsername     = 'webmaster@ovva.sk';
$sendingAccountPassword     = 'Fliros28!';

// Recipient (To:) Details  - Change this to the email details of who will receive all the emails from the website.
$recipientEmail             = 'webmaster@ovva.sk'; // REQUIRED value.
$recipientName              = 'WebMaster OVVA.sk'; // REQUIRED value.

// Email details            - Change these to suit your website needs
$emailSubject               = 'A message from OVVA.sk Website'; // REQUIRED value. Subject of the email that the recipient will see
$websiteName                = 'OVVA - Websolutions for business';                // REQUIRED value. This is used when a name or email is not collected from the website form

$timeZone                   = 'Slovakia/Bratislava';         // OPTIONAL, but some servers require this to be set. 
                                                             // See a list of all supported timezones at: http://php.net/manual/en/timezones.php

// Google reCAPTCHA
$recaptchaSecretKey         = '18cb38cwucb73vo708r6vgshjcbwbfbcvueucbwg';
$recaptchaErrorMessage      = 'There was a problem verifying the Google reCaptcha.  Please try again.';

 /*----------------------------------------------------------------------------*\
|*  You do not need to edit anything below this line, the rest is automatic.    *|
 \*============================================================================*/
include('lib/mail_sender.php');

?>