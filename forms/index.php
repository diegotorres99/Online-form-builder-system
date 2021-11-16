<?php

if (isset($_POST["enviar"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
  //  $msj = $_POST["msj"];

function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
$to_email = 'pabebe8451@990ys.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail ';
$headers = 'From: diegotorrz3@gmail.com';
//check if the email address is invalid $secure_check
$secure_check = sanitize_my_email($to_email);
if ($secure_check == false) {
    echo "Invalid input";
} else { //send email 
    mail($to_email, $subject, $message, $headers);
    echo "This email is sent using PHP Mail";
}
}


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F210765874527869" title="oEmbed Form">
<link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F210765874527869" title="oEmbed Form">
<meta property="og:title" content="FORMULARIO DE CONTACTO" >
<meta property="og:url" content="https://form.jotform.com/210765874527869" >
<meta property="og:description" content="Please click the link to complete this form." >
<meta name="slack-app-id" content="AHNMASS8M">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
<link rel="canonical" href="https://form.jotform.com/210765874527869" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>FORMULARIO DE CONTACTO</title>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.24041" rel="stylesheet" type="text/css" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.24041" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.24041" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=5f6c4c83346ec05354558fe8"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.24041" />
<style type="text/css">
    .form-label-left{
        width:150px;
    }
    .form-line{
        padding-top:10px;
        padding-bottom:10px;
    }
    .form-label-right{
        width:150px;
    }
    body, html{
        margin:0;
        padding:0;
        background:#ffffff;
    }

    .form-all{
        margin:0px auto;
        padding-top:20px;
        width:690px;
        color:#000000 !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: #FFFFFF;
    }

</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
/*PREFERENCES STYLE*/
    .form-all {
      font-family: Verdana, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Verdana, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Verdana, sans-serif;
    }
    .form-header-group {
      font-family: Verdana, sans-serif;
    }
    .form-label {
      font-family: Verdana, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 10px;
      margin-bottom: 10px;
    }
  
    .form-all {
      max-width: 460px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 150px;
    }
  
    .form-all {
      font-size: 12px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 12px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 12px
    }
  
    .supernova {
      background-color: #ffffff;
    }
    .supernova body {
      background: transparent;
    }
  
    .supernova .form-all, .form-all {
      background-color: #ffffff;
    }
  
    .form-all {
      color: #000000;
    }
    .form-header-group .form-header {
      color: #000000;
    }
    .form-header-group .form-subHeader {
      color: #000000;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #000000;
    }
    .form-sub-label {
      color: #1a1a1a;
    }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #ffffff;
    }
  
    .form-line-error {
      overflow: hidden;
      transition: none;
      background-color: #FF3200;
    }

    .form-line-error .form-error-message {
      background-color: #FF3200;
      clear: both;
      float: none;
    }

    .form-line-error .form-error-arrow {
      border-bottom-color: #FF3200;
    }

    .form-line-error input:not(#coupon-input),
    .form-line-error textarea,
    .form-line-error .form-validation-error {
      border: 1px solid #FF3200;
      .box-shadow(0 0 3px #FF3200);
    }
   
    .supernova {
      background-image: none;
    }
    #stage {
      background-image: none;
    }
  
    .form-all {
      background-image: none;
    }
  
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*//*--label top styles--*/
.form-label-top, .form-label-left{
color:#ffffff !important;
}

/*--remove focus border--*/
.form-textbox:focus, .form-textarea:focus{
outline: none;
}

/*--form header style--*/
.form-all h3{
margin:0;
background:#57a700 url(//cms.interlogy.com/uploads/image_upload/image_upload/global/6138_form_heading.gif) repeat-x;
color:#fff;
font-size:20px;
border:1px solid #57a700;
border-bottom:none;
margin-left: 1px;
}

/*--mail icon--*/
.form-all h3 span{
display:block;
padding:10px 20px;
background:url(//cms.interlogy.com/uploads/image_upload/image_upload/global/6139_form_ico.gif) no-repeat 93% 50%;
}

/*--form section style--*/
.form-section{
border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;
padding-left: 4px;
margin:0;
border:1px;
border-top:3px solid #000;
background:#000 url(//cms.interlogy.com/uploads/image_upload/image_upload/global/6142_form_top.gif) repeat-x;
}

/*--textbox, textarea style--*/
.form-textbox, .form-textarea{
font-family:verdana;
width:272px;
border:1px solid #111;
background:#282828 url(//cms.interlogy.com/uploads/image_upload/image_upload/global/6140_form_input.gif) repeat-x;
padding:5px 3px;
color:#fff;
}

/*--form submit button style--*/
.form-submit-button{
padding:0 20px;
height:32px;
line-height:32px;
border:1px solid #70ad2e;
background:#5aae00 url(//cms.interlogy.com/uploads/image_upload/image_upload/global/6141_form_button.gif) repeat-x;
color:#fff;
cursor:pointer;
text-align:center;
}

/*--reduce form line--*/
.form-line{
padding:5px !important;
}

/*--remove form top padding--*/
.form-all{
padding-top:0px !important;
}

/*--for html texts--*/
.form-html {
padding: 0px !important;
padding-right: 7px !important;
}

/*--remove error message--*/
.form-error-message {
display: none !important;
}
.form-line-error {
background:none repeat scroll 0 0;
}

/*--reduce error font size--*/
.form-button-error {
font-size: 11px !important;
}

/*--fix captcha--*/
.form-captcha, .form-captcha:hover {
border:none;
background:none;
padding:0px !important;
}
.form-captcha-image {
border:0px;
background:none;
-moz-border-radius:0px !important;
-webkit-border-radius:0px !important;
border-radius:0px !important;
}

/*--fix captcha box--*/
#input_7{
width:142px !important;
max-width:142px !important;
}

/*--add red border on error--*/
.form-validation-error {
border: 1px solid red !important;
}
    /* Injected CSS Code */
</style>

<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.24041" type="text/javascript"></script>
<script type="text/javascript">
	JotForm.init(function(){
if (window.JotForm && JotForm.accessible) $('input_1').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_2').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_4').setAttribute('tabindex',0);
	JotForm.newDefaultTheme = false;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
      JotForm.highlightInputs = false;
      JotForm.alterTexts({"alphabetic":"This field can only contain letters","alphanumeric":"This field can only contain letters and numbers.","confirmClearForm":"Are you sure you want to clear the form","confirmEmail":"E-mail does not match","email":"Enter a valid e-mail address","incompleteFields":"Please complete required (*) fields.","lessThan":"Your score should be less than","numeric":"This field can only contain numeric values","pleaseWait":"Please wait...","required":"This field is required.","uploadExtensions":"You can only upload following files:","uploadFilesize":"File size cannot be bigger than:"});
    /*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"nombresY","qid":"1","text":"Nombres y Apellidos:","type":"control_textbox"},{"name":"email","qid":"2","text":"Email:","type":"control_textbox"},null,{"name":"mensaje","qid":"4","text":"Mensaje:","type":"control_textarea"},{"name":"name5","qid":"5","text":"Enviar","type":"control_button"},{"name":"clickTo","qid":"6","text":"CONTACTOS","type":"control_text"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"nombresY","qid":"1","text":"Nombres y Apellidos:","type":"control_textbox"},{"name":"email","qid":"2","text":"Email:","type":"control_textbox"},null,{"name":"mensaje","qid":"4","text":"Mensaje:","type":"control_textarea"},{"name":"name5","qid":"5","text":"Enviar","type":"control_button"},{"name":"clickTo","qid":"6","text":"CONTACTOS","type":"control_text"}]);}, 20); 
</script>
</head>
<body>
<form class="jotform-form" action="" method="post" >
  <input type="hidden" name="formID" value="210765874527869" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li class="form-line" data-type="control_text" id="id_6">
        <div id="cid_6" class="form-input-wide">
          <div id="text_6" class="form-html" data-component="text">
            <h3>
              <span style="color:#000000;">
                CONTACTOS
              </span>
            </h3>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_1">
        <label class="form-label form-label-top form-label-auto" id="label_1" for="input_1"> Nombres y Apellidos: </label>
        <div id="cid_1" class="form-input-wide">
          <input type="text" id="name" name="name" data-type="input-textbox" class="form-textbox" size="30" value="" placeholder=" " data-component="textbox" aria-labelledby="label_1" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_2">
        <label class="form-label form-label-top form-label-auto" id="label_2" for="input_2">
          Email:
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_2" class="form-input-wide jf-required">
          <input type="text" id="email" name="email" data-type="input-textbox" class="form-textbox validate[required]" size="30" value="" placeholder=" " data-component="textbox" aria-labelledby="label_2" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textarea" id="id_4">
        <label class="form-label form-label-top form-label-auto" id="label_4" for="input_4">
          Mensaje:
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_4" class="form-input-wide jf-required">
          <textarea id="msj" class="form-textarea validate[required]" name="msj" cols="30" rows="10" data-component="textarea" required="" aria-labelledby="label_4"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_5">
        <div id="cid_5" class="form-input-wide">
          <div style="text-align:left" data-align="left" class="form-buttons-wrapper form-buttons-left   jsTest-button-wrapperField">
            <button id="enviar" name="enviar" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" >
              Enviar
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by JotForm";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="210765874527869" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='210765874527869'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "210765874527869-210765874527869";
}
  </script>
  <div class="formFooter-heightMask">
  </div>
  <div class="formFooter f6">


  </div>
</form></body>
</html>
<script type="text/javascript">JotForm.ownerView=true;</script>