<?php

$config['useragent'] = 'isalas.com.ar'; //The "user agent".
$config['protocol'] = 'mail';
$config['mailpath'] = '/usr/sbin/sendmail/';
$config['wordwrap'] = TRUE;
$config['smtp_timeout'] = '5';    //None    SMTP Timeout (in seconds).
$config['wordwrap'] = TRUE;    //TRUE or FALSE (boolean)    Enable word-wrap.
$config['wrapchars'] = '76';        //Character count to wrap at.
$config['mailtype'] = 'html';    //text or html    Type of mail. If you send HTML email you must send it as a complete web page. Make sure you don't have any relative links or relative image paths otherwise they will not work.
$config['charset'] = 'utf-8';        //Character set (utf-8, iso-8859-1, etc.).
$config['validate'] = FALSE;    //TRUE or FALSE (boolean)    Whether to validate the email address.
$config['priority'] = 2;    //1, 2, 3, 4, 5    Email Priority. 1 = highest. 5 = lowest. 3 = normal.
$config['crlf'] = "\n";     //"\r\n" or "\n" or "\r"     Newline character. (Use "\r\n" to comply with RFC 822).
$config['newline'] = "\r\n";    //"\r\n" or "\n" or "\r"    Newline character. (Use "\r\n" to comply with RFC 822).
$config['bcc_batch_mode'] = FALSE;    //TRUE or FALSE (boolean)    Enable BCC Batch Mode.
$config['bcc_batch_size'] = '200'; //    None    Number of emails in each BCC batch.




/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */