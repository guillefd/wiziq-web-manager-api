<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title><?php echo $row->titulo ?></title>
<style type="text/css">
iframe
{
position:fixed;
left:0px;
top:0px;
z-index:-1;
}
</style>

</head>
<body>
<iframe src="<?php echo $row->presenter_url ?>" allowtransparency="yes" wmode="transparent" width="100%" height="620px" frameborder="0" scrolling="no">
  <p>Your browser does not support iframes.</p>
</iframe>
<div align="center" style="position:fixed;top:620px;left:0px;z-index:10000;width:100%;height:100px;background-color:#CCC">
    <img src="<?php echo base_url() ?>template/foundation/images/logoclass.png" style="margin-top:5px" /><span style="position:absolute;top:5px; padding:4px;font-family:Tahoma, Geneva, sans-serif;color:#666; font-size:0.8em;"> iSalas :: Powered by EyT :: 2013 </span>
</div>
</body>

</html>

<?php

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
