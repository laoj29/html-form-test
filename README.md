HTML Form Test
==============
This is the first programming project for the CreativeWorx internship.

### Files Included
* form_input.html
* email_sending.php
* bootstrap library
* jquery library
* SMTP server (sendmail)

### Environment
* Windows 7
* WampServer 2.4
* Chrome

### Configuration
* First, copy the folder "sendmail" under the path of the wamp server, for example, C:\wamp\sendmail. Since Windows 7 doesn't come with a mail server, have to use a 3rd-party software served as a mail server.

* Second, need to modify the file "php.ini" of the wamp server as following.
> [mail function]<br />
> ; For Win32 only.<br />
> ; http://php.net/smtp<br />
> ; SMTP = localhost<br />
> ; http://php.net/smtp-port<br />
> ; smtp_port = 25<br />
> 
> ; For Win32 only.<br />
> ; http://php.net/sendmail-from<br />
> ; sendmail_from = you@yourdomain<br />
> 
> ; For Unix only.  You may supply arguments as well (default: "sendmail -t -i").<br />
> ; http://php.net/sendmail-path<br />
> sendmail_path = "C:\wamp\sendmail\sendmail.exe -t"

These changes above are to enable the 3rd-party mail server.

* Second, need to modify the file "php.ini" of the wamp server as following.
> [mail function]<br />
> ; For Win32 only.<br />
> ; http://php.net/smtp<br />
> ; SMTP = localhost<br />
> ; http://php.net/smtp-port<br />
> ; smtp_port = 25<br />
> 

### Implementation
* Input a gmail address, then click "Submit". If it is not a valid email address, an alert window will pop out.
* If the email has been sent successfully, "Successfully sent!" will be shown on the page. Otherwise, "Failed!" will be shown.
* Then the submitted mailbox will receive an email from the sender (set in the file "sendmail.ini") with the required subject and body.
