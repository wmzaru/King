<?php /* Smarty version 2.6.16, created on 2012-07-09 21:01:06
         compiled from footer.tpl */ ?>
<?php echo '</div>';  if ($this->_tpl_vars['Stephead'] != 'new'):  echo '<div id="rightbar"><div class="topmenu"></div><div class="submenu">';  if ($this->_tpl_vars['Graphstyle'] == 'Y' && $this->_tpl_vars['Graphic'] == 'default'):  echo '<div class="imghead"><img src="" alt="img_Statystyki Królestwa" width="95" height="37" /></div>';  else:  echo '<div class="txtheader">';  echo @STATISTICS;  echo '</div>';  endif;  echo '<div class="menuleft">';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo '<img src="" alt="img_clock" class="vmiddle" width="16" height="16" />';  endif;  echo '<b>';  echo $this->_tpl_vars['Time'];  echo '</b></div><div class="menuleft">';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo '<img src="" alt="img_calendar" class="vmiddle" width="16" height="16" />';  endif;  echo '<b>';  echo $this->_tpl_vars['Tday'];  echo '</b> ';  echo @SDAY;  echo ' <b>';  echo $this->_tpl_vars['Tage'];  echo '</b> ';  echo @SAGE;  echo '.</div><div class="menuleft">';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo '<img src="" alt="img_toreset" class="vmiddle" width="16" height="16" />';  endif;  echo '';  echo @RTIME;  echo ': <b>';  echo $this->_tpl_vars['Thours'];  echo ' ';  echo $this->_tpl_vars['Tminutes'];  echo '</b>.</div><div class="menuleft">';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo '<img src="" alt="img_players" class="vmiddle" width="16" height="16" />';  endif;  echo '';  echo @REGISTERED_PLAYERS;  echo ': <b>';  echo $this->_tpl_vars['Players'];  echo '</b></div><div class="menuleft">';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo '<img src="" alt="img_online" class="vmiddle" width="16" height="16" />';  endif;  echo '';  echo @PLAYERS_ONLINE;  echo ': <span id="online" style="font-weight:bold;"></span> (';  echo @RECORD;  echo ': ';  echo $this->_tpl_vars['numRecord'];  echo ')</div></div><div class="bottommenu"></div><div class="topmenu"></div><div class="submenu">';  if ($this->_tpl_vars['Graphstyle'] == 'Y' && $this->_tpl_vars['Graphic'] == 'default'):  echo '<div class="imghead"><img src="" alt="img_Statystyki gry" width="125" height="24" /></div>';  else:  echo '<div class="txtheader">';  echo @F_STATISTICS;  echo '</div>';  endif;  echo '';  echo @PLAYERS_LIST;  echo ':<br /><br /><div id="memberlist" class="memberlist"></div><div id="listpanel"><table width="100%"><tr><td width="50%" align="center"><a class="list" href="" onclick="prevpage();">&lt;&lt;</a></td><td width="50%" align="center"><a class="list" href="" onclick="nextpage();">&gt;&gt;</a></td></tr><tr><th colspan="2" align="center"><a class="list" href="" onclick="show();">';  echo @SHOW_OPIS;  echo '</a></th></tr></table></div><br />';  if ($this->_tpl_vars['LastPollMenu'] != ''):  echo ' ';  echo @LAST_POLL_MENU;  echo '<br /><a href="polls.php">';  echo $this->_tpl_vars['LastPollMenu'];  echo '</a> <br /><br />';  endif;  echo '';  echo @LAST_REGISTERED_PRE;  echo ' <a href="view.php?view=';  echo $this->_tpl_vars['LastID'];  echo '">';  echo $this->_tpl_vars['LastName'];  echo '</a> (';  echo $this->_tpl_vars['LastID'];  echo ').</div><div class="bottommenu"></div></div>';  endif;  echo '</div><div class="foot">';  echo @LOADING_TIME;  echo ': ';  echo $this->_tpl_vars['Duration'];  echo ' | ';  echo @GZIP_COMP;  echo ': ';  echo $this->_tpl_vars['Compress'];  echo ' | ';  echo @PM_TIME;  echo ' PHP/MySQL: ';  echo $this->_tpl_vars['Duration']-$this->_tpl_vars['Sqltime'];  echo '/';  echo $this->_tpl_vars['Sqltime'];  echo ' | ';  echo @QUERIES;  echo ': ';  echo $this->_tpl_vars['Numquery'];  echo '<br /><a href="http://orodlin.pl">Orodlin</a> Engine, &copy; 2007-2009 <a href="install/authors.txt">';  echo @TEAM;  echo '</a> based on <a href="http://vallheru.sourceforge.net/">Vallheru</a>.<!--          (C) 2007 Orodlin Team                                         --><!--           game based on Vallheru Engine                                -->'; ?>
<br /><br />
<script type="text/javascript">
var overlibIsSet = <?php echo $this->_tpl_vars['Overlib']; ?>
;
var page = <?php echo $this->_tpl_vars['Page']; ?>
;
var opisinlist = <?php echo $this->_tpl_vars['OpisInList']; ?>
;
var mailinfo = <?php echo $this->_tpl_vars['Mailinfo']; ?>
;
var loginfo = <?php echo $this->_tpl_vars['Loginfo']; ?>
;
var logcount = <?php echo $this->_tpl_vars['Unreadlog']; ?>
;
var mailcount = <?php echo $this->_tpl_vars['Unreadmail']; ?>
;
<?php echo '
var playersonline = 0;

if (logcount > 0)
{
	document.getElementById("logcount").style.textDecoration = "blink";
}
if (mailcount > 0)
{
	document.getElementById("mailcount").style.textDecoration = "blink";
}
document.getElementById("logcount").innerHTML = logcount;
document.getElementById("mailcount").innerHTML = mailcount;

racetext = \'';  echo @OVERLIB_RACE;  echo '\';
gendertext = \'';  echo @OVERLIB_GENDER;  echo '\';
opistext = \'';  echo @OVERLIB_OPIS;  echo '\';
reputationtext = \'';  echo @OVERLIB_REPUTATION;  echo '\';
ranktext = \'';  echo @OVERLIB_RANK;  echo '\';
statustext = \'';  echo @OVERLIB_STATUS;  echo '\';
lastseentext = \'';  echo @OVERLIB_LASTSEEN;  echo '\';

if (opisinlist == 0)
{
	limit = 30;
}
else
{
	limit = 15;
}

function nextpage()
{
	if ((page + 1) * limit < playersonline)
	{
		page = page + 1;
		getListData();
	}
}

function prevpage()
{
	if (page > 0)
	{
		page = page - 1;
		getListData();
	}
}

function show()
{
	if (opisinlist == 0)
	{
		opisinlist = 1;
		limit = 15;
		page = page * 2;
	}
	else
	{
		opisinlist = 0;
		limit = 30;
		page = page / 2;
	}
	getListData();
}

$(\'#listpanel\').find(\'.list\').click(function(){
	return false;
});

function getListData()
{
	$.getJSON(\'onlinelist.php?page=\'+page+\'&opis=\'+opisinlist, {}, function(json){
		setListResponse(json);
	});
}

function autoRefresh()
{
	setTimeout(\'autoRefresh()\', 60000);
	getListData();
}
autoRefresh();

function setListResponse(json)
{
	document.getElementById("logcount").innerHTML = json.logc;
	document.getElementById("logcount").style.textDecoration = (json.logc > 0) ? "blink" : "none";
	if (json.logc > logcount && loginfo == 1)
	{
		newmsg = json.logc - logcount;
		logcount = json.logc;
		alert(newmsg+\' ';  echo @NEWLOG;  echo '\');
	}

	document.getElementById("mailcount").innerHTML = json.mailc;
	document.getElementById("mailcount").style.textDecoration = (json.mailc > 0) ? "blink" : "none";
	if (json.mailc > mailcount && mailinfo == 1)
	{
		newmsg = json.mailc - mailcount;
		mailcount = json.mailc;
		alert(newmsg+\' ';  echo @NEWMAIL;  echo '\');
	}

	results = 0;
	$(\'#online\').empty();

	$(json.max).appendTo(\'#online\');
	playersonline = json.max;
	if (page * limit > playersonline) prevpage();

	$(\'#memberlist\').empty();

	for(xuser in json.players)
	{
		results = 1;
		if (overlibIsSet == 1)
		{
			opis = json.players[xuser].opis.replace(/&/gi,"&amp;");
			opis = opis.replace(/</gi,"&lt;");
			opis = opis.replace(/>/gi,"&gt;");
			opis = opis.replace(/"/gi,"&quot;");
			if (json.players[xuser].avatar != "")
            {
                json.players[xuser].avatar = \'<img src=&quot;avatars/\'+json.players[xuser].avatar+\'&quot; style=&quot;max-width:190px; max-height:150px;&quot; />\';
            }
			json.players[xuser].name = json.players[xuser].name.replace(/\'/gi,"&#39;");
			gender = (json.players[xuser].gender == \'M\') ? "';  echo @OVERLIB_GENDER_M;  echo '" : "';  echo @OVERLIB_GENDER_F;  echo '" ;
			hpstatus = (json.players[xuser].hp > 0) ? "';  echo @OVERLIB_STATUS_A;  echo '" : "';  echo @OVERLIB_STATUS_D;  echo '" ;
			$(\'#memberlist\').append(json.players[xuser].rankIcon+\'<a onmouseover="overlib(&#39;<center>\'+json.players[xuser].avatar+\'</center><p style=&quot;text-align:left;&quot;><br/>\'+racetext+\': \'+json.players[xuser].rasa+\'<br/> \'+gendertext+\': \'+gender+\'<br/> \'+statustext+\': \'+hpstatus+\'<br/> \'+ranktext+\': \'+json.players[xuser].rankName+\'<br /> \'+reputationtext+\': \'+json.players[xuser].reputation+\'<br /> \'+opistext+\': \'+ opis+\'<br /> \'+lastseentext+\': \'+json.players[xuser].place+\'</p>&#39;, CAPTION, &#39;<b>\'+json.players[xuser].name.replace(/&#39;/gi,"&amp;#39;")+\'</b>&#39; , FGCOLOR, &#39;black&#39;, BGCOLOR, &#39;#0C1115&#39;, TEXTCOLOR, &#39;#FFFFFF&#39;, LEFT, 1, CAPTIONSIZE, 1, BORDER, 1, TEXTSIZE, 1, STATUS, &#39;\'+json.players[xuser].rankName+\'\\&#39;)" onmouseout="nd();" href="view.php?view=\'+json.players[xuser].id+\'">\'+json.players[xuser].name+\'</a> <span style="color: #8C8C8C;">\'+json.players[xuser].id+\'</span><br/>\');
			if (opisinlist == 1)
			{
				$(\'#memberlist\').append(\'<span style="color: #8C8C8C;">\'+json.players[xuser].opis+\'</span><br/>\');
			}
		}
		else
		{
			opis = json.players[xuser].opis.replace(/&#39;/,"&amp;#39;")
			opis = opis.replace(/"/,"&quot;")
			$(\'#memberlist\').append(json.players[xuser].rankIcon+\'<a href="view.php?view=\'+json.players[xuser].id+\'">\'+json.players[xuser].name+\'</a> <span style="color: #8C8C8C;">\'+json.players[xuser].id+\'</span><br/>\');
			if (opisinlist == 1)
			{
				$(\'#memberlist\').append(\'<span style="color: #8C8C8C;">\'+json.players[xuser].opis+\'</span><br/>\');
			}
		}
	}
	if (results == 0)
	{
		prevpage();
	}
}
'; ?>

</script>
<table style="margin:auto"><tr><td><div>
<script type="text/javascript"><!--
google_ad_client = "pub-6335658040478102";
google_alternate_color = "000000";
google_ad_width = 468;
google_ad_height = 60;
google_ad_format = "468x60_as";
google_ad_type = "text_image";
google_ad_channel = "";
google_color_border = "000000";
google_color_bg = "000000";
google_color_link = "80FF00";
google_color_text = "78B749";
google_color_url = "CAF99B";
google_ui_features = "rc:0";
//-->
</script>
<script type="text/javascript"
 src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
    <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
    </script>
    <script type="text/javascript">
    _uacct = "UA-632755-6";
    urchinTracker();
    </script>
</div></td></tr></table>
</div>
<?php if ($this->_tpl_vars['Overlib'] == 1): ?>
	<script src="includes/js/overlib.js" type="text/javascript"></script>
<?php endif; ?>
</body>
</html>