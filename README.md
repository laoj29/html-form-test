HTML Form Test
==============
This is a programming test for CreativeWorx internship, which does the following:
- Present a HTML form which contains a single text field that will accept a valid email address and a submit button.
- Upon clicking the submit button, process the form and send an email to the submitted email address containing the following text:
Subject: "HTML Form Test". Body: "Sent via HTML form using PHP to {submitted email address}"

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

* Second, need to modify the file "php.ini" of the wamp server as following. These changes are to enable the 3rd-party mail server.
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

* Third, modify the file "sendmail.ini" under the folder "sendmail" as following.
> smtp_server=smtp.gmail.com<br />
> smtp_port=465<br />
> smtp_ssl=ssl<br />
> auth_username=xxxxxx@gmail.com<br />
> auth_password=xxxxxxxxx<br />
> hostname=localhost<br />

Explanation:
* Choose the corresponding smtp server name and port number to the mailbox. For example, the smtp server name for Gmail is smtp.gmail.com, and the port number is 465 or 587.
* Set an email address as the sender, and its corresponding password.

### Implementation
* Input a Gmail address, then click "Submit". If it is not a valid email address, an alert window will pop out.
* If the email has been sent successfully, "Successfully sent!" will be shown on the page. Otherwise, "Failed!" will be shown.
* Then the submitted mailbox will receive an email from the sender (set in the file "sendmail.ini") with the required subject and body.
