<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="650" border="0" cellspacing="1" cellpadding="6" bgcolor="#ffffff" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
  <tr>
    <td colspan="2" align="left" bgcolor="#FFFFFF" style="padding-bottom:10px; padding-top:10px;"><a href="<?php echo site_url('/')?>"><img  style=" width: 250px;" src="<?php echo base_url('public/frontend/images/page-logo.png')?>" alt=""></a></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF" style="color:#002D5C;"><strong>A new enquiry has been submitted from <?php echo $this->alphasettings['SITE_NAME']; ?> website:</strong></td>
  </tr>
  <tr>
    <td width="96" bgcolor="#002D5C" style="color:#ffffff;"><strong>Full Name</strong></td>
    <td width="527" bgcolor="#FFFFFF" style="color:#002D5C;"><?php echo $fname; ?> <?php echo $mname; ?> <?php echo $lname; ?></td>
  </tr>
<!--  <tr>
    <td bgcolor="#E6E6E6"><strong>Email</strong></td>
    <td bgcolor="#FFFFFF">azim@webchanel.ae</td>
  </tr>
-->  <!--<tr>
    <td nowrap="nowrap" bgcolor="#E6E6E6"><strong>Company Name</strong></td>
    <td bgcolor="#FFFFFF">Web Channel</td>
  </tr>
  <tr>
    <td bgcolor="#E6E6E6"><strong>Country</strong></td>
    <td bgcolor="#FFFFFF">India</td>
  </tr>
  <tr>
    <td bgcolor="#E6E6E6"><strong>City</strong></td>
    <td bgcolor="#FFFFFF">Kerala</td>
  </tr>-->
  <tr>
    <td bgcolor="#002D5C" style="color:#ffffff;"><strong>Email (as Username)</strong></td>
    <td bgcolor="#FFFFFF" style="color:#002D5C;"><?php echo $email; ?></td>
  </tr>
  <tr>
    <td bgcolor="#002D5C" style="color:#ffffff;"><strong>Mobile</strong></td>
    <td bgcolor="#FFFFFF" style="color:#002D5C;"><?php echo $phone2; ?></td>
  </tr>
  <?php /*?><tr>
    <td bgcolor="#E6E6E6"><strong>City</strong></td>
    <td bgcolor="#FFFFFF"><?php echo $city; ?></td>
  </tr><?php */?>
  <tr>
    <td valign="top" bgcolor="#002D5C" style="color:#ffffff;"><strong>Password</strong></td>
    <td bgcolor="#FFFFFF" style="color:#002D5C;"><?php echo $passwordcopy; ?> </td>
  </tr>
  <tr>
    <td valign="top"bgcolor="#002D5C" style="color:#ffffff;"><strong>Activation Link</strong></td>
    <td bgcolor="#FFFFFF" style="color:#002D5C;"><a style="color:#002D5C; text-decoration:none;" href="<?php echo site_url('login/activation/'.$key); ?>">Activate</a> </td>
  </tr>
  <?php /*?><tr>
    <td valign="top" bgcolor="#002D5C" style="color:#ffffff;"><strong>IP</strong></td>
    <td bgcolor="#FFFFFF" style="color:#002D5C;"><a style="color:#002D5C;" href="http://www.ip-tracker.org/locator/ip-lookup.php?ip=<?php echo $this->input->ip_address(); ?>" target="_new"><?php echo $this->input->ip_address(); ?></a></td>
  </tr><?php */?>
  <tr>
    <td colspan="2" align="left" bgcolor="#002D5C" style="color:#fff;"><strong>&copy; <?php echo convert_lang($this->config->item('copy_right'),$this->alphalocalization); ?></strong></td>
  </tr>
</table>
</body>
</html>