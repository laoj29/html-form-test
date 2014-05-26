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
> ; For Win32 only.
> ; http://php.net/sendmail-from
> ; sendmail_from = you@yourdomain
> 
> ; For Unix only.  You may supply arguments as well (default: "sendmail -t -i").
> ; http://php.net/sendmail-path
> sendmail_path = "C:\wamp\sendmail\sendmail.exe -t"
These changes above are to enable the 3rd-party mail server.

* Third, modify the file "sendmail.ini" under the folder "sendmail" as following.
> smtp_server=smtp.gmail.com
> smtp_port=465
> smtp_ssl=ssl
> auth_username=xxxxxx@gmail.com
> auth_password=xxxxxxxxx
> hostname=localhost

Explanation:
* Choose the corresponding smtp server name and port number to the mailbox. For example, the smtp server name for Gmail is smtp.gmail.com, and the port number is 465 or 587.
* Set an email address as the sender, and its corresponding password.
