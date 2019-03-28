<!doctype html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $this->pagetitle; ?></title>

<meta name="description" content="<?php echo $this->short_desc?$this->short_desc:$this->desc; ?>" />

<meta name="keywords" content="<?php echo $this->keys; ?>" />

<meta property="og:site_name" content="<?php echo $this->alphasettings['SITE_NAME']; ?>" />

<meta property="og:type" content="website" />

<meta property="og:title" content="<?php echo $this->pagetitle; ?>" />

<meta property="og:description" content="<?php echo $this->short_desc?$this->short_desc:$this->desc; ?>" />

<meta property="og:url" content="<?php echo current_url();?>" />

<link rel="canonical" href="<?php echo current_url();?>"/>

<link rel="stylesheet" href="<?php echo base_url('public/frontend/css/bootstrap.css'); ?>"/>

<link rel="stylesheet" href="<?php echo base_url('public/frontend/css/jquery.selectBoxIt.css'); ?>"/>

<link rel="stylesheet" href="<?php echo base_url('public/frontend/css/bootstrap-theme.css'); ?>"/>

<link rel="stylesheet" href="<?php echo base_url('public/frontend/css/main.css'); ?>"/>

<script src="<?php echo base_url('public/frontend/js/vendor/jquery-1.11.2.min.js'); ?>"></script>

<script src="<?php echo base_url('public/frontend/js/vendor/jquery-ui.js'); ?>"></script>

<script src="<?php echo base_url('public/frontend/js/vendor/bootstrap.js'); ?>"></script>

<script src="<?php echo base_url('public/frontend/js/vendor/jquery.selectBoxIt.js'); ?>"></script>



<script>$(function() {$("select").selectBoxIt();$("#contactform").on("click","#butSub",function(e){$(this).hide(); $('.processing').show();});});</script>

<style>.fancybox-skin{padding: 0px;}.error{ border:1px dashed #e93b49 !important;}.captcha-wrap.error{ width:304px; float:left}

</style>

</head>

<body>

<div class="content-contact inginusform ">
<h3>Customer Support</h3>
  <div class="form enquiry-form ">

  <?php echo form_open('contactus/enquiry2/',array("id"=>"enquiryform","class"=>"ajaxform")); ?>

<div class="row">

  <?php $services = array(convert_lang('Authorization',$this->alphalocalization),convert_lang('Issuing Processing',$this->alphalocalization),convert_lang('Acquiring',$this->alphalocalization),convert_lang('Operations',$this->alphalocalization),convert_lang('Others',$this->alphalocalization));foreach($services as $key => $item) { ?>

  <div class="col-sm-<?php echo in_array($key,array(1,2))?3:2?> <?php $err=''; if(form_error('service')){ ?> error <?php  } ?>">

    <div class="radio-holder <?php echo $this->input->post('service') ==$item ?'checked':'' ?>"> <span class="select"></span>

      <label class="word-wrap" for="service<?php echo $key; ?>">

        <input id="service<?php echo $key ?>" class="radioservice <?php $err=''; if(form_error('service')){ ?> error <?php  } ?> required" <?php echo $this->input->post('service') ==$item ?'checked="checked"':'' ?>  type="radio" value="<?php echo $item; ?>" name="service"/>

        <?php echo $item; ?></label>

    </div>

  </div>

  <?php  }  ?>

  <div class="clearfix clear">&nbsp;</div>

  <div class="col-sm-4 input-holder mandatory">

    <label><?php echo convert_lang("Full Name",$this->alphalocalization); ?></label>

    <input class="required form-control <?php $err=''; if(form_error('fullname')){ ?> error <?php  } ?>" name="fullname" type="text"  value="<?php echo set_value('fullname'); ?>" placeholder="<?php echo convert_lang('Full Name',$this->alphalocalization); ?>" />

  </div>

  <div class="col-sm-4 input-holder mandatory">

    <label><?php echo convert_lang("Email",$this->alphalocalization); ?></label>

    <input class="required email form-control <?php $err=''; if(form_error('email')){ ?> error <?php  } ?>" name="email" type="email" value="<?php echo set_value('email'); ?>" placeholder="<?php echo convert_lang('Email',$this->alphalocalization); ?>"  />

  </div>

  <div class="col-sm-4 input-holder mandatory">

    <label><?php echo convert_lang("Contact Number",$this->alphalocalization); ?></label>

    <input class="required number form-control <?php $err=''; if(form_error('mobile')){ ?> error <?php  } ?>" name="mobile" type="tel" value="<?php echo set_value('mobile'); ?>" placeholder="<?php echo convert_lang('Mobile',$this->alphalocalization); ?>" />

  </div>

  <div class="col-sm-4 input-holder">

    <label><?php echo convert_lang("Country",$this->alphalocalization); ?></label>

    <select class="required form-control <?php $err=''; if(form_error('country')){ $err=' err'; echo 'error'; } ?>" name="country">

      <option value=""><?php echo convert_lang('Select your country',$this->alphalocalization); ?></option>

      <?php foreach($countries as $country) { ?>

      <option value="<?php echo $country['name'] ?>" <?php echo ($country['name'] == $this->input->post('country'))?'selected="selected"':'' ?>><?php echo $country['name'] ?></option>

      <?php } ?>

    </select>

  </div>

  <div class="col-sm-4 input-holder mandatory">

    <label><?php echo convert_lang("Company",$this->alphalocalization); ?></label>

    <input class="required <?php $err=''; if(form_error('company')){ $err=' err'; echo 'error'; } ?>" name="company" type="text" value="<?php echo set_value('company'); ?>" placeholder="<?php echo convert_lang('Company',$this->alphalocalization); ?>" />

  </div>

  <div class="col-sm-4 input-holder mandatory hide subject">

    <label><?php echo convert_lang("Subject",$this->alphalocalization); ?></label>

    <input class="<?php $err=''; if(form_error('subject')){ ?> error <?php  } ?>" name="subject" type="text" id="subject" value="<?php echo set_value('subject'); ?>" placeholder="<?php echo convert_lang('Subject',$this->alphalocalization); ?>" />

  </div>

</div>

<div class="row">

  <div class="col-sm-12">

    <div class="input-holder">

      <label><?php echo convert_lang("Message",$this->alphalocalization); ?></label>

      <textarea name="message" rows="6" class="required form-control <?php $err=''; if(form_error('message')){ ?> error <?php  } ?>" placeholder="<?php echo convert_lang('Message',$this->alphalocalization); ?>" ><?php echo set_value('message'); ?></textarea>

    </div>

  </div>

</div>

<div class="row">

  <div class="col-sm-8 col-sm-8 <?php  if(form_error('captcha')){ $err=' err'; echo 'error'; } ?>">

    <div id="recaptchasupport"><?php echo $this->recaptcha->render(); ?></div>

  </div>

  <div class="col-sm-4 col-sm-4 ">

    <button class="btn red btn-send contact-send" name="butSub" type="submit" value="Submit" id="butSub"><?php echo convert_lang('SUBMIT NOW',$this->alphalocalization); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></button>

  </div>

</div>

<?php echo form_close(); ?> 

<script> 

var recaptcha; var recaptcha1;

var recaptchasupport = function() {  

recaptcha1 = grecaptcha.render("recaptchasupport", {  "sitekey" : "6Lc-Wx0UAAAAAHuC_o2Z3WaJBtJULCrFU5X1WPsY" }); }; 

//recaptchasupport();

$("select").selectBoxIt();

//$("#enquiryform").submit(function(e){ 	e.preventDefault();});	

$(".number").keypress(function (e) { if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) { return false; } });

$(".radioservice").click(function(e){

	if($(this).val() == 'Others'){   $('.subject').removeClass('hide').addClass("show");   $('#subject').addClass("required");}

	else { $('.subject').removeClass('show').addClass("hide"); $('#subject').removeClass("required");}

});

 </script>

  </div>

</div>

</body>

</html>