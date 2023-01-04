# End-of-life - April 2022
We no longer maintain this php tool.  
For alternatives, consider:
- [github.com/reacherhq](https://github.com/reacherhq/check-if-email-exists),
- [sneakersinc-emailverify](https://github.com/catalyst256/sneakersinc-emailverify).


## MailCheck

This is a simple php script to test the status of a mailbox from a server under your control.
Just copy the two .php files to a subfolder of your webserver and browse to that folder.

In other words, if you want to know if electron@alset.com currently accepts incoming emails, use our script to find out.

The only trace left will be a telnet connection on alset.com mail server saying that your server inititated a transaction to send a mail from "no_reply[@]interpol.int" but dropped the connection.

You might therefore want to modify the source code in index.php to change "no_reply[@]interpol.int" to whatever you like.


## Disclaimer
*Prior to working on this repository and its contents, please make sure your agree to our [disclaimer](https://github.com/INTERPOL-Innovation-Centre/DISCLAIMER)*.  
