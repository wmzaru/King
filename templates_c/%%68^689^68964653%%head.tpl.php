<?php /* Smarty version 2.6.16, created on 2012-07-09 22:58:04
         compiled from head.tpl */ ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="<?php echo @CHARSET; ?>
"<?php echo '?>'; ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->_tpl_vars['Gamename']; ?>
 :: <?php echo $this->_tpl_vars['Pagetitle']; ?>
</title>
<link type="text/css" rel="Stylesheet" href="main.css" />
<link type="image/png" rel="shortcut icon" href="images/misc/favicon.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo @CHARSET; ?>
" />
<link rel="alternate" type="application/xml" title="RSS" href="<?php echo $this->_tpl_vars['Gameadress']; ?>
/rss.php" />
<?php echo $this->_tpl_vars['Meta']; ?>

<meta http-equiv="Content-Language" content="pl" />
<?php if ($this->_tpl_vars['Metakeywords'] != ""): ?>
    <meta name="keywords" content="<?php echo $this->_tpl_vars['Metakeywords']; ?>
" />
<?php endif;  if ($this->_tpl_vars['Metadescription'] != ""): ?>
    <meta name="description" content="<?php echo $this->_tpl_vars['Metadescription']; ?>
" />
<?php endif; ?>
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="javascript/pngfix.js"></script>
<![endif]-->
</head>
<body>
<div id="ads"><script type="text/javascript"><!--
google_ad_client = "pub-6335658040478102";
google_alternate_color = "000000";
google_ad_width = 120;
google_ad_height = 240;
google_ad_format = "120x240_as";
google_ad_type = "text_image";
google_ad_channel = "";
google_color_border = "000000";
google_color_bg = "000000";
google_color_link = "E5C39A";
google_color_text = "E4C49B";
google_color_url = "DAAB71";
google_ui_features = "rc:0";
//-->
</script>
<script type="text/javascript"
 src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<?php echo '<div id="container"><div id="logo"><a href="index.php" title="Orodlin"><img src="" alt="img_logo" /></a></div><div id="left"><div class="topmenu"></div><div class="submenu"><div class="imghead"><img src="" alt="img_Menu" width="58" height="18" /></div><ul id="menu"><li><a href="index.php">';  echo @WELCOME;  echo '</a></li><li><a href="register.php">';  echo @REGISTER;  echo '</a></li><li><a href="index.php?step=rules">';  echo @RULES;  echo '</a></li><li><a href="faq.php">';  echo @FAQ;  echo '</a></li><li><a href="team.php">';  echo @TEAM;  echo '</a></li><li><a class="forum" href="http://orodlin.webhost.pl/forum/">';  echo @FORUMS;  echo '</a></li><li><a href="promo.php">';  echo @PROMO;  echo '</a></li><li><a href="donate.php">';  echo @DONATE;  echo '</a></li></ul></div><div class="bottommenu"></div><div class="topmenu"></div><div class="submenu"><div class="imghead"><img src="" alt="img_Wejdź" width="58" height="17" /></div><div class="center"><form method="post" action="updates.php"><img src="" class="img_logicon" alt="" width="11" height="11" />';  echo @EMAIL;  echo ': <input type="text" name="email" size="17" /><br /><img src="" class="img_logicon" alt="" width="11" height="11" />';  echo @PASSWORD;  echo ': <input type="password" name="pass" size="17" /><br /><br /><input type="submit" value="';  echo @LOGIN;  echo '" /><br /><br /></form><div class="lostpasswd"><a href="index.php?step=lostpasswd">';  echo @LOST_PASSWORD;  echo '</a></div></div></div><div class="bottommenu"></div><div class="topmenu"></div><div class="submenu"><div class="imghead"><img src="" alt="img_Statystyki" width="91" height="19" /></div>';  echo @CURRENT_TIME;  echo ': <b>';  echo $this->_tpl_vars['Time'];  echo '</b><br /><br />';  echo @VISIT;  echo ': ';  echo $this->_tpl_vars['Logcount'];  echo '<br />';  echo @DAILY;  echo ': ';  echo $this->_tpl_vars['Logcountday'];  echo '<br /><br />';  echo @IN_GAME;  echo ': <b>';  echo $this->_tpl_vars['Online'];  echo '</b><br />';  echo @ACTIVE;  echo ': <b>';  echo $this->_tpl_vars['Players'];  echo '</b><br />';  echo @PLAYERS_EVER;  echo ': <b>';  echo $this->_tpl_vars['Usersever'];  echo '</b><br /><br/>';  echo @LAST_REGISTERED_PRE;  echo ' <b>';  echo $this->_tpl_vars['LastName'];  echo '</b> (';  echo $this->_tpl_vars['LastID'];  echo ').<br/><br />';  echo @RECORD;  echo ': <strong>';  echo $this->_tpl_vars['numRecord'];  echo '</strong> ';  echo @DAY;  echo ' ';  echo $this->_tpl_vars['When1'];  echo ' ';  echo @HOUR;  echo ' ';  echo $this->_tpl_vars['When2'];  echo '.</div><div class="bottommenu"></div><div class="button"><a href="rss.php" title="RSS 2.0"><img src="" alt="RSS 2.0" /></a></div></div>'; ?>
