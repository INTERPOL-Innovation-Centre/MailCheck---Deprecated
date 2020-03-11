# MailCheck

This is a simple php script to test the status of a mailbox from a server under your control.
Just copy the two .php files to a subfolder of your webserver and browse to that folder.

In other words, if you want to knwo if elon.ksum@alset.com currently accepts incoming emails, use our scrit to find out.
The only trace left will be a telnet exchange on alset.com mail server saying that your server inititated a transaction to send a mail from "no_reply[@]interpol.int" but dropped the connection.

You might therefore want to modify the source code in index.php to change "no_reply[@]interpol.int" to whatever you like.
