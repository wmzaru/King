<?php /* Smarty version 2.6.16, created on 2012-07-09 21:03:41
         compiled from account.tpl */ ?>
<?php echo '';  echo $this->_tpl_vars['Welcome'];  echo '<ul ';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo 'class="sword"';  endif;  echo '>';  unset($this->_sections['menu']);
$this->_sections['menu']['name'] = 'menu';
$this->_sections['menu']['loop'] = is_array($_loop=$this->_tpl_vars['Steps']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['menu']['show'] = true;
$this->_sections['menu']['max'] = $this->_sections['menu']['loop'];
$this->_sections['menu']['step'] = 1;
$this->_sections['menu']['start'] = $this->_sections['menu']['step'] > 0 ? 0 : $this->_sections['menu']['loop']-1;
if ($this->_sections['menu']['show']) {
    $this->_sections['menu']['total'] = $this->_sections['menu']['loop'];
    if ($this->_sections['menu']['total'] == 0)
        $this->_sections['menu']['show'] = false;
} else
    $this->_sections['menu']['total'] = 0;
if ($this->_sections['menu']['show']):

            for ($this->_sections['menu']['index'] = $this->_sections['menu']['start'], $this->_sections['menu']['iteration'] = 1;
                 $this->_sections['menu']['iteration'] <= $this->_sections['menu']['total'];
                 $this->_sections['menu']['index'] += $this->_sections['menu']['step'], $this->_sections['menu']['iteration']++):
$this->_sections['menu']['rownum'] = $this->_sections['menu']['iteration'];
$this->_sections['menu']['index_prev'] = $this->_sections['menu']['index'] - $this->_sections['menu']['step'];
$this->_sections['menu']['index_next'] = $this->_sections['menu']['index'] + $this->_sections['menu']['step'];
$this->_sections['menu']['first']      = ($this->_sections['menu']['iteration'] == 1);
$this->_sections['menu']['last']       = ($this->_sections['menu']['iteration'] == $this->_sections['menu']['total']);
 echo '<li><a href="account.php?view=';  echo $this->_tpl_vars['Steps'][$this->_sections['menu']['index']];  echo '">';  echo $this->_tpl_vars['Links'][$this->_sections['menu']['index']];  echo '</a></li>';  endfor; endif;  echo '</ul>';  if ($this->_tpl_vars['View'] == 'links'):  echo '';  echo $this->_tpl_vars['Linksinfo'];  echo '<br />';  if ($this->_tpl_vars['Linksid'][0] != ""):  echo '<table align="center"><tr><td align="center"><b>';  echo $this->_tpl_vars['Tfile'];  echo '</b></td><td align="center"><b>';  echo $this->_tpl_vars['Tname'];  echo '</b></td><td><b>';  echo $this->_tpl_vars['Tactions'];  echo '</b><td></tr>';  unset($this->_sections['links']);
$this->_sections['links']['name'] = 'links';
$this->_sections['links']['loop'] = is_array($_loop=$this->_tpl_vars['Linksid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['links']['show'] = true;
$this->_sections['links']['max'] = $this->_sections['links']['loop'];
$this->_sections['links']['step'] = 1;
$this->_sections['links']['start'] = $this->_sections['links']['step'] > 0 ? 0 : $this->_sections['links']['loop']-1;
if ($this->_sections['links']['show']) {
    $this->_sections['links']['total'] = $this->_sections['links']['loop'];
    if ($this->_sections['links']['total'] == 0)
        $this->_sections['links']['show'] = false;
} else
    $this->_sections['links']['total'] = 0;
if ($this->_sections['links']['show']):

            for ($this->_sections['links']['index'] = $this->_sections['links']['start'], $this->_sections['links']['iteration'] = 1;
                 $this->_sections['links']['iteration'] <= $this->_sections['links']['total'];
                 $this->_sections['links']['index'] += $this->_sections['links']['step'], $this->_sections['links']['iteration']++):
$this->_sections['links']['rownum'] = $this->_sections['links']['iteration'];
$this->_sections['links']['index_prev'] = $this->_sections['links']['index'] - $this->_sections['links']['step'];
$this->_sections['links']['index_next'] = $this->_sections['links']['index'] + $this->_sections['links']['step'];
$this->_sections['links']['first']      = ($this->_sections['links']['iteration'] == 1);
$this->_sections['links']['last']       = ($this->_sections['links']['iteration'] == $this->_sections['links']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Linksfile'][$this->_sections['links']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Linkstext'][$this->_sections['links']['index']];  echo '</td><td><a href="account.php?view=links&amp;step=edit&amp;lid=';  echo $this->_tpl_vars['Linksid'][$this->_sections['links']['index']];  echo '">';  echo $this->_tpl_vars['Aedit'];  echo '</a><br /><a href="account.php?view=links&amp;step=delete&amp;lid=';  echo $this->_tpl_vars['Linksid'][$this->_sections['links']['index']];  echo '">';  echo $this->_tpl_vars['Adelete'];  echo '</a></td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '<br /><br /><form method="post" action="account.php?view=links&amp;step=edit&amp;lid=';  echo $this->_tpl_vars['Linkid'];  echo '&amp;action=change">';  echo $this->_tpl_vars['Tfile'];  echo ': <input type="text" name="linkadress" size="20" value="';  echo $this->_tpl_vars['Linkfile'];  echo '" /><br />';  echo $this->_tpl_vars['Tname'];  echo ': <input type="text" name="linkname" size="20" value="';  echo $this->_tpl_vars['Linkname'];  echo '" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Aform'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'bugtrack'):  echo '';  echo $this->_tpl_vars['Bugtrackinfo'];  echo '<br /><br /><table align="center"><tr><td><b>';  echo $this->_tpl_vars['Bugid'];  echo '</b></td><td><b>';  echo $this->_tpl_vars['Bugtype'];  echo '</b></td><td><b>';  echo $this->_tpl_vars['Bugloc'];  echo '</b></td><td><b>';  echo $this->_tpl_vars['Bugname'];  echo '</b></td></tr>';  unset($this->_sections['bugtrack']);
$this->_sections['bugtrack']['name'] = 'bugtrack';
$this->_sections['bugtrack']['loop'] = is_array($_loop=$this->_tpl_vars['Bugsid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bugtrack']['show'] = true;
$this->_sections['bugtrack']['max'] = $this->_sections['bugtrack']['loop'];
$this->_sections['bugtrack']['step'] = 1;
$this->_sections['bugtrack']['start'] = $this->_sections['bugtrack']['step'] > 0 ? 0 : $this->_sections['bugtrack']['loop']-1;
if ($this->_sections['bugtrack']['show']) {
    $this->_sections['bugtrack']['total'] = $this->_sections['bugtrack']['loop'];
    if ($this->_sections['bugtrack']['total'] == 0)
        $this->_sections['bugtrack']['show'] = false;
} else
    $this->_sections['bugtrack']['total'] = 0;
if ($this->_sections['bugtrack']['show']):

            for ($this->_sections['bugtrack']['index'] = $this->_sections['bugtrack']['start'], $this->_sections['bugtrack']['iteration'] = 1;
                 $this->_sections['bugtrack']['iteration'] <= $this->_sections['bugtrack']['total'];
                 $this->_sections['bugtrack']['index'] += $this->_sections['bugtrack']['step'], $this->_sections['bugtrack']['iteration']++):
$this->_sections['bugtrack']['rownum'] = $this->_sections['bugtrack']['iteration'];
$this->_sections['bugtrack']['index_prev'] = $this->_sections['bugtrack']['index'] - $this->_sections['bugtrack']['step'];
$this->_sections['bugtrack']['index_next'] = $this->_sections['bugtrack']['index'] + $this->_sections['bugtrack']['step'];
$this->_sections['bugtrack']['first']      = ($this->_sections['bugtrack']['iteration'] == 1);
$this->_sections['bugtrack']['last']       = ($this->_sections['bugtrack']['iteration'] == $this->_sections['bugtrack']['total']);
 echo '<tr><td align="center">';  echo $this->_tpl_vars['Bugsid'][$this->_sections['bugtrack']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Bugstype'][$this->_sections['bugtrack']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Bugsloc'][$this->_sections['bugtrack']['index']];  echo '</td><td align="center">';  echo $this->_tpl_vars['Bugsname'][$this->_sections['bugtrack']['index']];  echo '</td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'bugreport'):  echo '';  echo $this->_tpl_vars['Buginfo'];  echo '<br /><br /><form method="post" action="account.php?view=bugreport&amp;step=report">';  echo $this->_tpl_vars['Bugname'];  echo ': <input type="text" name="bugtitle" size="40" /><br /><br />';  echo $this->_tpl_vars['Bugtype'];  echo ': <select name="type"><option value="text">';  echo $this->_tpl_vars['Bugtext'];  echo '</option><option value="code">';  echo $this->_tpl_vars['Bugcode'];  echo '</option></select><br /><br />';  echo $this->_tpl_vars['Bugloc'];  echo ': <input type="text" name="location" size="40" /><br /><br />';  echo $this->_tpl_vars['Bugdesc'];  echo ': <textarea name="desc" rows="13" cols="50"></textarea><br /><br /><input type="submit" value="';  echo $this->_tpl_vars['Areport'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'changes'):  echo '';  echo $this->_tpl_vars['Changesinfo'];  echo '<br /><ul';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo ' class="sword"';  endif;  echo '>';  unset($this->_sections['changes']);
$this->_sections['changes']['name'] = 'changes';
$this->_sections['changes']['loop'] = is_array($_loop=$this->_tpl_vars['Changedate']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['changes']['show'] = true;
$this->_sections['changes']['max'] = $this->_sections['changes']['loop'];
$this->_sections['changes']['step'] = 1;
$this->_sections['changes']['start'] = $this->_sections['changes']['step'] > 0 ? 0 : $this->_sections['changes']['loop']-1;
if ($this->_sections['changes']['show']) {
    $this->_sections['changes']['total'] = $this->_sections['changes']['loop'];
    if ($this->_sections['changes']['total'] == 0)
        $this->_sections['changes']['show'] = false;
} else
    $this->_sections['changes']['total'] = 0;
if ($this->_sections['changes']['show']):

            for ($this->_sections['changes']['index'] = $this->_sections['changes']['start'], $this->_sections['changes']['iteration'] = 1;
                 $this->_sections['changes']['iteration'] <= $this->_sections['changes']['total'];
                 $this->_sections['changes']['index'] += $this->_sections['changes']['step'], $this->_sections['changes']['iteration']++):
$this->_sections['changes']['rownum'] = $this->_sections['changes']['iteration'];
$this->_sections['changes']['index_prev'] = $this->_sections['changes']['index'] - $this->_sections['changes']['step'];
$this->_sections['changes']['index_next'] = $this->_sections['changes']['index'] + $this->_sections['changes']['step'];
$this->_sections['changes']['first']      = ($this->_sections['changes']['iteration'] == 1);
$this->_sections['changes']['last']       = ($this->_sections['changes']['iteration'] == $this->_sections['changes']['total']);
 echo '<li>';  echo $this->_tpl_vars['Changedate'][$this->_sections['changes']['index']];  echo ' ';  echo $this->_tpl_vars['Changeauthor'][$this->_sections['changes']['index']];  echo '<br />';  echo $this->_tpl_vars['Changeloc'];  echo ': ';  echo $this->_tpl_vars['Changelocation'][$this->_sections['changes']['index']];  echo '<br />';  echo $this->_tpl_vars['Changetext'][$this->_sections['changes']['index']];  echo '<br /><br /></li>';  endfor; endif;  echo '</ul>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'options'):  echo '';  echo $this->_tpl_vars['Toptions'];  echo '<br /><br /><form method="post" action="account.php?view=options&amp;step=options"><input type="checkbox" name="battleloga" ';  echo $this->_tpl_vars['Checked'];  echo ' /> ';  echo @T_BATTLELOGA;  echo '<br /><input type="checkbox" name="battlelogd" ';  echo $this->_tpl_vars['Checked2'];  echo ' /> ';  echo @T_BATTLELOGD;  echo '<br /><br /><input type="checkbox" name="graphbar" ';  echo $this->_tpl_vars['Checked3'];  echo ' /> ';  echo @T_GRAPHBAR;  echo '<br /><input type="checkbox" name="overlib" ';  echo $this->_tpl_vars['Checked4'];  echo ' /> ';  echo @T_OVERLIB;  echo '<br /><br /><input type="checkbox" name="loginfo" ';  echo $this->_tpl_vars['Checked5'];  echo ' /> ';  echo @T_LOGINFO;  echo '<br /><input type="checkbox" name="mailinfo" ';  echo $this->_tpl_vars['Checked6'];  echo ' /> ';  echo @T_MAILINFO;  echo '<br /><br /><input type="submit" value="';  echo $this->_tpl_vars['Anext'];  echo '" /></form>';  if ($this->_tpl_vars['Step'] == 'options'):  echo '';  echo $this->_tpl_vars['Message'];  echo '';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'freeze'):  echo '';  echo $this->_tpl_vars['Freezeinfo'];  echo '<br /><br /><form method="post" action="account.php?view=freeze&amp;step=freeze">';  echo $this->_tpl_vars['Howmany'];  echo ': <input type="tezt" name="amount" size="5" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Afreeze2'];  echo '" /></form>';  if ($this->_tpl_vars['Step'] == 'freeze'):  echo '';  echo $this->_tpl_vars['Message'];  echo '';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'lang'):  echo '';  echo $this->_tpl_vars['Langinfo'];  echo '<br /><br /><form method="post" action="account.php?view=lang&amp;step=lang">';  echo $this->_tpl_vars['Flang'];  echo ' <select name="mainlang">';  unset($this->_sections['account2']);
$this->_sections['account2']['name'] = 'account2';
$this->_sections['account2']['loop'] = is_array($_loop=$this->_tpl_vars['Lang']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['account2']['show'] = true;
$this->_sections['account2']['max'] = $this->_sections['account2']['loop'];
$this->_sections['account2']['step'] = 1;
$this->_sections['account2']['start'] = $this->_sections['account2']['step'] > 0 ? 0 : $this->_sections['account2']['loop']-1;
if ($this->_sections['account2']['show']) {
    $this->_sections['account2']['total'] = $this->_sections['account2']['loop'];
    if ($this->_sections['account2']['total'] == 0)
        $this->_sections['account2']['show'] = false;
} else
    $this->_sections['account2']['total'] = 0;
if ($this->_sections['account2']['show']):

            for ($this->_sections['account2']['index'] = $this->_sections['account2']['start'], $this->_sections['account2']['iteration'] = 1;
                 $this->_sections['account2']['iteration'] <= $this->_sections['account2']['total'];
                 $this->_sections['account2']['index'] += $this->_sections['account2']['step'], $this->_sections['account2']['iteration']++):
$this->_sections['account2']['rownum'] = $this->_sections['account2']['iteration'];
$this->_sections['account2']['index_prev'] = $this->_sections['account2']['index'] - $this->_sections['account2']['step'];
$this->_sections['account2']['index_next'] = $this->_sections['account2']['index'] + $this->_sections['account2']['step'];
$this->_sections['account2']['first']      = ($this->_sections['account2']['iteration'] == 1);
$this->_sections['account2']['last']       = ($this->_sections['account2']['iteration'] == $this->_sections['account2']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Lang'][$this->_sections['account2']['index']];  echo '">';  echo $this->_tpl_vars['Lang'][$this->_sections['account2']['index']];  echo '</option>';  endfor; endif;  echo '</select><br />';  echo $this->_tpl_vars['Slang'];  echo ' <select name="seclang">';  unset($this->_sections['account3']);
$this->_sections['account3']['name'] = 'account3';
$this->_sections['account3']['loop'] = is_array($_loop=$this->_tpl_vars['Lang']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['account3']['show'] = true;
$this->_sections['account3']['max'] = $this->_sections['account3']['loop'];
$this->_sections['account3']['step'] = 1;
$this->_sections['account3']['start'] = $this->_sections['account3']['step'] > 0 ? 0 : $this->_sections['account3']['loop']-1;
if ($this->_sections['account3']['show']) {
    $this->_sections['account3']['total'] = $this->_sections['account3']['loop'];
    if ($this->_sections['account3']['total'] == 0)
        $this->_sections['account3']['show'] = false;
} else
    $this->_sections['account3']['total'] = 0;
if ($this->_sections['account3']['show']):

            for ($this->_sections['account3']['index'] = $this->_sections['account3']['start'], $this->_sections['account3']['iteration'] = 1;
                 $this->_sections['account3']['iteration'] <= $this->_sections['account3']['total'];
                 $this->_sections['account3']['index'] += $this->_sections['account3']['step'], $this->_sections['account3']['iteration']++):
$this->_sections['account3']['rownum'] = $this->_sections['account3']['iteration'];
$this->_sections['account3']['index_prev'] = $this->_sections['account3']['index'] - $this->_sections['account3']['step'];
$this->_sections['account3']['index_next'] = $this->_sections['account3']['index'] + $this->_sections['account3']['step'];
$this->_sections['account3']['first']      = ($this->_sections['account3']['iteration'] == 1);
$this->_sections['account3']['last']       = ($this->_sections['account3']['iteration'] == $this->_sections['account3']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Lang'][$this->_sections['account3']['index']];  echo '">';  echo $this->_tpl_vars['Lang'][$this->_sections['account3']['index']];  echo '</option>';  endfor; endif;  echo '</select><br /><input type="submit" value="';  echo $this->_tpl_vars['Aselect'];  echo '" /></form>';  if ($this->_tpl_vars['Step'] == 'lang'):  echo '';  echo $this->_tpl_vars['Message'];  echo '';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'immu'):  echo '';  echo $this->_tpl_vars['Immuinfo'];  echo '';  if ($this->_tpl_vars['Showoption'] == 'Y'):  echo '';  if ($this->_tpl_vars['Immunity'] == 'N'):  echo '';  echo @QUESTION1;  echo '<br /><form method="post" action="account.php?view=immu&amp;step=take"><input type="submit" value="';  echo @YES;  echo '" /> </form><form method="post" action="account.php"><input type="submit" value="';  echo @NO;  echo '" /> </form>';  endif;  echo '';  if ($this->_tpl_vars['Immunity'] == 'Y'):  echo '';  echo @DISCARD_INFO;  echo ' ';  echo @QUESTION2;  echo '<br /><form method="post" action="account.php?view=immu&amp;step=discard"><input type="submit" value="';  echo @YES;  echo '" /> </form><form method="post" action="account.php"><input type="submit" value="';  echo @NO;  echo '" /> </form>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'take'):  echo '<br />';  echo @IMMU_SELECT;  echo ' ';  echo @CLICK1;  echo ' <a href="account.php">';  echo @HERE;  echo '</a>';  echo @CLICK2;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'discard'):  echo '<br />';  echo @DISCARDED;  echo ' ';  echo @CLICK1;  echo ' <a href="account.php">';  echo @HERE;  echo '</a>';  echo @CLICK2;  echo '';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'reset'):  echo '';  echo $this->_tpl_vars['Resetinfo'];  echo '?<ul';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo ' class="sword"';  endif;  echo '><li><a href="account.php?view=reset&amp;step=make">';  echo $this->_tpl_vars['Yes'];  echo '</a></li><li><a href="account.php">';  echo $this->_tpl_vars['No'];  echo '</a></li></ul>';  if ($this->_tpl_vars['Step'] == 'make'):  echo '';  echo $this->_tpl_vars['Resetselect'];  echo '<br />';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'avatar'):  echo '';  echo $this->_tpl_vars['Avatarinfo'];  echo '<br /><br />';  if ($this->_tpl_vars['Avatar'] != ""):  echo '<center><br /><br /><img alt="img_avatar" src="';  echo $this->_tpl_vars['Avatar'];  echo '"><form action="account.php?view=avatar&amp;step=usun" method="post"><input type="hidden" name="av" value="';  echo $this->_tpl_vars['Value'];  echo '" /><input type="submit" value="';  echo $this->_tpl_vars['Delete'];  echo '" /></form></center>';  endif;  echo '<form enctype="multipart/form-data" action="account.php?view=avatar&amp;step=dodaj" method="post"><input type="hidden" name="MAX_FILE_SIZE" value="10240" />';  echo $this->_tpl_vars['Afilename'];  echo ': <input name="plik" type="file" /><br /><input type="submit" value="';  echo $this->_tpl_vars['Aselect'];  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'name'):  echo '<form method="post" action="account.php?view=name&amp;step=name"><input type="submit" value="';  echo $this->_tpl_vars['Change'];  echo '" /> ';  echo $this->_tpl_vars['Myname'];  echo ' <input type="text" name="name" value="';  echo $this->_tpl_vars['OldNick'];  echo '"/></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'pass'):  echo '';  echo @PASS_INFO;  echo '<br /><form method="post" action="account.php?view=pass&amp;step=cp"><table><tr><td>';  echo @OLD_PASS;  echo ':</td><td><input type="password" name="cp" /></td></tr><tr><td>';  echo @NEW_PASS;  echo ':</td><td><input type="password" name="np" /></td></tr><tr><td colspan=2 align=center><input type="submit" value="';  echo @CHANGE;  echo '" /></td></tr></table></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'profile'):  echo '';  if ($this->_tpl_vars['Step'] == ""):  echo '';  echo $this->_tpl_vars['Profileinfo'];  echo '<br /><br /><form method="post" action="account.php?view=profile&amp;step=profile"><table align="center"><tr><td align="center">';  echo $this->_tpl_vars['Newprofile'];  echo ':<br /> <textarea name="newprofile" id="profile" rows="20" cols="65">';  echo $this->_tpl_vars['Editable'];  echo '</textarea></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Change'];  echo '" /></td></tr></table></form>';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'profile'):  echo '<table align="center"><tr><td>';  echo $this->_tpl_vars['Newprofile2'];  echo ':</td><td></td></tr><tr><td><div class="overflow">';  echo $this->_tpl_vars['Profile'];  echo '</div></td><tr></table>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'eci'):  echo '<form method="post" action="account.php?view=eci&amp;step=ce"><table><tr><td>';  echo $this->_tpl_vars['Oldemail'];  echo ':</td><td><input type="text" name="ce" /></td></tr><tr><td>';  echo $this->_tpl_vars['Newemail'];  echo ':</td><td><input type="text" name="ne" /></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Change'];  echo '" /></td></tr></table></form><form method="post" action="account.php?view=eci&amp;step=gg"><table><tr><td>';  echo $this->_tpl_vars['Tcommunicator'];  echo ':</td><td><select name="communicator">';  unset($this->_sections['acccom']);
$this->_sections['acccom']['name'] = 'acccom';
$this->_sections['acccom']['loop'] = is_array($_loop=$this->_tpl_vars['Tcom']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['acccom']['show'] = true;
$this->_sections['acccom']['max'] = $this->_sections['acccom']['loop'];
$this->_sections['acccom']['step'] = 1;
$this->_sections['acccom']['start'] = $this->_sections['acccom']['step'] > 0 ? 0 : $this->_sections['acccom']['loop']-1;
if ($this->_sections['acccom']['show']) {
    $this->_sections['acccom']['total'] = $this->_sections['acccom']['loop'];
    if ($this->_sections['acccom']['total'] == 0)
        $this->_sections['acccom']['show'] = false;
} else
    $this->_sections['acccom']['total'] = 0;
if ($this->_sections['acccom']['show']):

            for ($this->_sections['acccom']['index'] = $this->_sections['acccom']['start'], $this->_sections['acccom']['iteration'] = 1;
                 $this->_sections['acccom']['iteration'] <= $this->_sections['acccom']['total'];
                 $this->_sections['acccom']['index'] += $this->_sections['acccom']['step'], $this->_sections['acccom']['iteration']++):
$this->_sections['acccom']['rownum'] = $this->_sections['acccom']['iteration'];
$this->_sections['acccom']['index_prev'] = $this->_sections['acccom']['index'] - $this->_sections['acccom']['step'];
$this->_sections['acccom']['index_next'] = $this->_sections['acccom']['index'] + $this->_sections['acccom']['step'];
$this->_sections['acccom']['first']      = ($this->_sections['acccom']['iteration'] == 1);
$this->_sections['acccom']['last']       = ($this->_sections['acccom']['iteration'] == $this->_sections['acccom']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Comm'][$this->_sections['acccom']['index']];  echo '">';  echo $this->_tpl_vars['Tcom'][$this->_sections['acccom']['index']];  echo '</option>';  endfor; endif;  echo '</select></td></tr><tr><td>';  echo $this->_tpl_vars['Newgg'];  echo ':</td><td><input type="text" name="gg" /></td></tr><tr><td colspan="2" align="center"><input type="submit" name="Change" value="';  echo $this->_tpl_vars['Change'];  echo '" /><input type="submit" name="Delete" value="';  echo $this->_tpl_vars['Delete'];  echo '" /></td></tr></table></form>';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'style'):  echo '';  if ($this->_tpl_vars['Stylename'] != ''):  echo '<form method="post" action="account.php?view=style&amp;step=style"><table><tr><td><input type="submit" value="';  echo $this->_tpl_vars['Sselect'];  echo '" /> ';  echo $this->_tpl_vars['Textstyle'];  echo ':</td></tr><tr><td><select name="newstyle">';  unset($this->_sections['account']);
$this->_sections['account']['name'] = 'account';
$this->_sections['account']['loop'] = is_array($_loop=$this->_tpl_vars['Stylename']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['account']['show'] = true;
$this->_sections['account']['max'] = $this->_sections['account']['loop'];
$this->_sections['account']['step'] = 1;
$this->_sections['account']['start'] = $this->_sections['account']['step'] > 0 ? 0 : $this->_sections['account']['loop']-1;
if ($this->_sections['account']['show']) {
    $this->_sections['account']['total'] = $this->_sections['account']['loop'];
    if ($this->_sections['account']['total'] == 0)
        $this->_sections['account']['show'] = false;
} else
    $this->_sections['account']['total'] = 0;
if ($this->_sections['account']['show']):

            for ($this->_sections['account']['index'] = $this->_sections['account']['start'], $this->_sections['account']['iteration'] = 1;
                 $this->_sections['account']['iteration'] <= $this->_sections['account']['total'];
                 $this->_sections['account']['index'] += $this->_sections['account']['step'], $this->_sections['account']['iteration']++):
$this->_sections['account']['rownum'] = $this->_sections['account']['iteration'];
$this->_sections['account']['index_prev'] = $this->_sections['account']['index'] - $this->_sections['account']['step'];
$this->_sections['account']['index_next'] = $this->_sections['account']['index'] + $this->_sections['account']['step'];
$this->_sections['account']['first']      = ($this->_sections['account']['iteration'] == 1);
$this->_sections['account']['last']       = ($this->_sections['account']['iteration'] == $this->_sections['account']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Stylename'][$this->_sections['account']['index']];  echo '">';  echo $this->_tpl_vars['Stylename'][$this->_sections['account']['index']];  echo '</option>';  endfor; endif;  echo '</select></table></form><br /><br />';  endif;  echo '';  if ($this->_tpl_vars['Layoutname'] != ''):  echo '<form method="post" action="account.php?view=style&amp;step=graph"><table><tr><td><input type="submit" value="';  echo $this->_tpl_vars['Sselect'];  echo '" /> ';  echo $this->_tpl_vars['Graph_text'];  echo ':</td></tr><tr><td><select name="graphserver">';  unset($this->_sections['account1']);
$this->_sections['account1']['name'] = 'account1';
$this->_sections['account1']['loop'] = is_array($_loop=$this->_tpl_vars['Layoutname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['account1']['show'] = true;
$this->_sections['account1']['max'] = $this->_sections['account1']['loop'];
$this->_sections['account1']['step'] = 1;
$this->_sections['account1']['start'] = $this->_sections['account1']['step'] > 0 ? 0 : $this->_sections['account1']['loop']-1;
if ($this->_sections['account1']['show']) {
    $this->_sections['account1']['total'] = $this->_sections['account1']['loop'];
    if ($this->_sections['account1']['total'] == 0)
        $this->_sections['account1']['show'] = false;
} else
    $this->_sections['account1']['total'] = 0;
if ($this->_sections['account1']['show']):

            for ($this->_sections['account1']['index'] = $this->_sections['account1']['start'], $this->_sections['account1']['iteration'] = 1;
                 $this->_sections['account1']['iteration'] <= $this->_sections['account1']['total'];
                 $this->_sections['account1']['index'] += $this->_sections['account1']['step'], $this->_sections['account1']['iteration']++):
$this->_sections['account1']['rownum'] = $this->_sections['account1']['iteration'];
$this->_sections['account1']['index_prev'] = $this->_sections['account1']['index'] - $this->_sections['account1']['step'];
$this->_sections['account1']['index_next'] = $this->_sections['account1']['index'] + $this->_sections['account1']['step'];
$this->_sections['account1']['first']      = ($this->_sections['account1']['iteration'] == 1);
$this->_sections['account1']['last']       = ($this->_sections['account1']['iteration'] == $this->_sections['account1']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Layoutname'][$this->_sections['account1']['index']];  echo '">';  echo $this->_tpl_vars['Layoutname'][$this->_sections['account1']['index']];  echo '</option>';  endfor; endif;  echo '</select></table></form>';  endif;  echo '<br /><br /><form method="post" action="account.php?view=style&amp;step=graphstyle"><table><tr><td><input type="checkbox" name="graphstyle" id="graphfree" ';  echo $this->_tpl_vars['Checked'];  echo ' /><label for="graphfree"> ';  echo $this->_tpl_vars['Graphless'];  echo '</label></td></tr><tr><td><input type="submit" value="';  echo $this->_tpl_vars['Sselect'];  echo '" /></td></tr></table></form>';  if ($this->_tpl_vars['Step'] == 'style' || $this->_tpl_vars['Step'] == 'graph' || $this->_tpl_vars['Step'] == 'graphstyle'):  echo '';  echo $this->_tpl_vars['Youchange'];  echo '. (<a href="account.php">';  echo $this->_tpl_vars['Refresh'];  echo '</a>)';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'description'):  echo '<form method="post" action="account.php?view=description&amp;step=change"><table><tr><td>';  echo $this->_tpl_vars['opistext'];  echo '</td></tr><tr><td align="center">';  echo $this->_tpl_vars['Newpodpis'];  echo '<br /> <textarea name="opis" id="opis" rows="2" cols="38">';  echo $this->_tpl_vars['Opis'];  echo '</textarea></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Change'];  echo '" /></td></tr></table></form>';  if ($this->_tpl_vars['Step'] == 'change'):  echo '<table><tr><td>';  echo $this->_tpl_vars['Newopis2'];  echo ':</td><td></td></tr><tr><td><b>';  echo $this->_tpl_vars['opis'];  echo '</b></td><tr></table>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'signatures'):  echo '';  echo $this->_tpl_vars['head_text'];  echo '<div id="signatures">';  unset($this->_sections['type']);
$this->_sections['type']['name'] = 'type';
$this->_sections['type']['loop'] = is_array($_loop=$this->_tpl_vars['Types']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['type']['show'] = true;
$this->_sections['type']['max'] = $this->_sections['type']['loop'];
$this->_sections['type']['step'] = 1;
$this->_sections['type']['start'] = $this->_sections['type']['step'] > 0 ? 0 : $this->_sections['type']['loop']-1;
if ($this->_sections['type']['show']) {
    $this->_sections['type']['total'] = $this->_sections['type']['loop'];
    if ($this->_sections['type']['total'] == 0)
        $this->_sections['type']['show'] = false;
} else
    $this->_sections['type']['total'] = 0;
if ($this->_sections['type']['show']):

            for ($this->_sections['type']['index'] = $this->_sections['type']['start'], $this->_sections['type']['iteration'] = 1;
                 $this->_sections['type']['iteration'] <= $this->_sections['type']['total'];
                 $this->_sections['type']['index'] += $this->_sections['type']['step'], $this->_sections['type']['iteration']++):
$this->_sections['type']['rownum'] = $this->_sections['type']['iteration'];
$this->_sections['type']['index_prev'] = $this->_sections['type']['index'] - $this->_sections['type']['step'];
$this->_sections['type']['index_next'] = $this->_sections['type']['index'] + $this->_sections['type']['step'];
$this->_sections['type']['first']      = ($this->_sections['type']['iteration'] == 1);
$this->_sections['type']['last']       = ($this->_sections['type']['iteration'] == $this->_sections['type']['total']);
 echo '<div class="center"><a href="';  echo $this->_tpl_vars['GameAddress'];  echo '"><img class="sigs" src="http://';  echo $this->_tpl_vars['GameAddress'];  echo '/sign.php?type=';  echo $this->_tpl_vars['Types'][$this->_sections['type']['index']];  echo '&amp;id=';  echo $this->_tpl_vars['pid'];  echo '" alt="" /></a></div><br /><input id="';  echo $this->_tpl_vars['Types'][$this->_sections['type']['index']];  echo '-1" readonly="readonly" size="55" value="[URL=';  echo $this->_tpl_vars['GameAddress'];  echo '][IMG]';  echo $this->_tpl_vars['GameAddress'];  echo '/sign.php?type=';  echo $this->_tpl_vars['Types'][$this->_sections['type']['index']];  echo '&amp;id=';  echo $this->_tpl_vars['pid'];  echo '[/IMG][/URL]" /><label for="';  echo $this->_tpl_vars['Types'][$this->_sections['type']['index']];  echo '-1">BBCode(1)</label><br /><input id="';  echo $this->_tpl_vars['Types'][$this->_sections['type']['index']];  echo '-2" readonly="readonly" size="55" value="[url=';  echo $this->_tpl_vars['GameAddress'];  echo '][img=';  echo $this->_tpl_vars['GameAddress'];  echo '/sign.php?type=';  echo $this->_tpl_vars['Types'][$this->_sections['type']['index']];  echo '&amp;id=';  echo $this->_tpl_vars['pid'];  echo '][/url]" /><label for="';  echo $this->_tpl_vars['Types'][$this->_sections['type']['index']];  echo '-2">BBCode(2)</label><br /><input id="';  echo $this->_tpl_vars['Types'][$this->_sections['type']['index']];  echo '-3" readonly="readonly" size="55" value="<a href=&quot;';  echo $this->_tpl_vars['GameAddress'];  echo '&quot;><img src=&quot;';  echo $this->_tpl_vars['GameAddress'];  echo '/sign.php?type=';  echo $this->_tpl_vars['Types'][$this->_sections['type']['index']];  echo '&amp;id=';  echo $this->_tpl_vars['pid'];  echo '&quot; border=&quot;0&quot; alt=&quot;&quot; /></a>" /><label for="';  echo $this->_tpl_vars['Types'][$this->_sections['type']['index']];  echo '-3">HTML</label><br /><input id="';  echo $this->_tpl_vars['Types'][$this->_sections['type']['index']];  echo '-4" readonly="readonly" size="55" value="';  echo $this->_tpl_vars['GameAddress'];  echo '/sign.php?type=';  echo $this->_tpl_vars['Types'][$this->_sections['type']['index']];  echo '&amp;id=';  echo $this->_tpl_vars['pid'];  echo '" /><label for="';  echo $this->_tpl_vars['Types'][$this->_sections['type']['index']];  echo '-4"></label for="';  echo $this->_tpl_vars['Types'][$this->_sections['type']['index']];  echo '-3">URL</label><br /><br />';  endfor; endif;  echo '</div>';  endif;  echo ''; ?>
