<?php /* Smarty version 2.6.16, created on 2012-07-09 21:02:37
         compiled from forums.tpl */ ?>
<?php echo '';  if ($this->_tpl_vars['View'] == 'categories'):  echo '';  if (isset ( $this->_tpl_vars['Sweep'] ) && $this->_tpl_vars['Sweep'] > 0):  echo '';  echo $this->_tpl_vars['Fquestion'];  echo '<br /><a href="forums.php?view=categories&amp;sweep=';  echo $this->_tpl_vars['Sweep'];  echo '&amp;step=Y">';  echo $this->_tpl_vars['Ayes'];  echo '</a><br />';  else:  echo '<table><tr><td><b><u>';  echo $this->_tpl_vars['Tcategory'];  echo '</u></b></td><td><b><u>';  echo $this->_tpl_vars['Ttopics'];  echo '</u></b></td></tr>';  unset($this->_sections['number']);
$this->_sections['number']['name'] = 'number';
$this->_sections['number']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['number']['show'] = true;
$this->_sections['number']['max'] = $this->_sections['number']['loop'];
$this->_sections['number']['step'] = 1;
$this->_sections['number']['start'] = $this->_sections['number']['step'] > 0 ? 0 : $this->_sections['number']['loop']-1;
if ($this->_sections['number']['show']) {
    $this->_sections['number']['total'] = $this->_sections['number']['loop'];
    if ($this->_sections['number']['total'] == 0)
        $this->_sections['number']['show'] = false;
} else
    $this->_sections['number']['total'] = 0;
if ($this->_sections['number']['show']):

            for ($this->_sections['number']['index'] = $this->_sections['number']['start'], $this->_sections['number']['iteration'] = 1;
                 $this->_sections['number']['iteration'] <= $this->_sections['number']['total'];
                 $this->_sections['number']['index'] += $this->_sections['number']['step'], $this->_sections['number']['iteration']++):
$this->_sections['number']['rownum'] = $this->_sections['number']['iteration'];
$this->_sections['number']['index_prev'] = $this->_sections['number']['index'] - $this->_sections['number']['step'];
$this->_sections['number']['index_next'] = $this->_sections['number']['index'] + $this->_sections['number']['step'];
$this->_sections['number']['first']      = ($this->_sections['number']['iteration'] == 1);
$this->_sections['number']['last']       = ($this->_sections['number']['iteration'] == $this->_sections['number']['total']);
 echo '<tr><td><a href="forums.php?topics=';  echo $this->_tpl_vars['Id'][$this->_sections['number']['index']];  echo '"><u><span class="forum"><b>';  echo $this->_tpl_vars['Name'][$this->_sections['number']['index']];  echo '</b></span></u></a></td><td><a href="forums.php?topics=';  echo $this->_tpl_vars['Id'][$this->_sections['number']['index']];  echo '"><span class="forum">';  echo $this->_tpl_vars['Topics1'][$this->_sections['number']['index']];  echo '</span></a></td></tr><tr><td><a href="forums.php?topics=';  echo $this->_tpl_vars['Id'][$this->_sections['number']['index']];  echo '"><i><span class="forum">';  echo $this->_tpl_vars['Description'][$this->_sections['number']['index']];  echo '</span></i></a></td></tr>';  if ($this->_tpl_vars['Rank'] == 'Admin' || $this->_tpl_vars['Rank'] == 'Staff'):  echo '<tr><td><a href="forums.php?view=categories&amp;sweep=';  echo $this->_tpl_vars['Id'][$this->_sections['number']['index']];  echo '">';  echo $this->_tpl_vars['ASweep'];  echo '</a></td></tr>';  endif;  echo '<tr><td colspan="2"><hr /></td></tr>';  endfor; endif;  echo '</table>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Topics'] != ""):  echo '<h2>';  echo $this->_tpl_vars['Tcategory'];  echo ': ';  echo $this->_tpl_vars['CategoryName'];  echo '</h2><a href="forums.php?view=categories">';  echo $this->_tpl_vars['Aback'];  echo '</a> ';  echo $this->_tpl_vars['Tocategories'];  echo '.<br /><br /><form method="post" action="forums.php?action=search"><input type="submit" value="';  echo $this->_tpl_vars['Asearch'];  echo '" /> ';  echo $this->_tpl_vars['Tword'];  echo ': <input type="text" name="search" /><input type="hidden" name="catid" value="';  echo $this->_tpl_vars['Category'];  echo '" /></form><table width="100%"><tr><td width="65%"><u><b>';  echo $this->_tpl_vars['Ttopic'];  echo '</b></u></td><td width="25%"><u><b>';  echo $this->_tpl_vars['Tauthor'];  echo '</b></u></td><td width="10%"><b><u>';  echo $this->_tpl_vars['Treplies'];  echo '</u></b></td></tr>';  unset($this->_sections['number1']);
$this->_sections['number1']['name'] = 'number1';
$this->_sections['number1']['loop'] = is_array($_loop=$this->_tpl_vars['Topic1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['number1']['show'] = true;
$this->_sections['number1']['max'] = $this->_sections['number1']['loop'];
$this->_sections['number1']['step'] = 1;
$this->_sections['number1']['start'] = $this->_sections['number1']['step'] > 0 ? 0 : $this->_sections['number1']['loop']-1;
if ($this->_sections['number1']['show']) {
    $this->_sections['number1']['total'] = $this->_sections['number1']['loop'];
    if ($this->_sections['number1']['total'] == 0)
        $this->_sections['number1']['show'] = false;
} else
    $this->_sections['number1']['total'] = 0;
if ($this->_sections['number1']['show']):

            for ($this->_sections['number1']['index'] = $this->_sections['number1']['start'], $this->_sections['number1']['iteration'] = 1;
                 $this->_sections['number1']['iteration'] <= $this->_sections['number1']['total'];
                 $this->_sections['number1']['index'] += $this->_sections['number1']['step'], $this->_sections['number1']['iteration']++):
$this->_sections['number1']['rownum'] = $this->_sections['number1']['iteration'];
$this->_sections['number1']['index_prev'] = $this->_sections['number1']['index'] - $this->_sections['number1']['step'];
$this->_sections['number1']['index_next'] = $this->_sections['number1']['index'] + $this->_sections['number1']['step'];
$this->_sections['number1']['first']      = ($this->_sections['number1']['iteration'] == 1);
$this->_sections['number1']['last']       = ($this->_sections['number1']['iteration'] == $this->_sections['number1']['total']);
 echo '<tr><td><div class="overflow">';  if ($this->_tpl_vars['Newtopic'][$this->_sections['number1']['index']] == 'Y'):  echo '<blink><a href="forums.php?topic=';  echo $this->_tpl_vars['Id'][$this->_sections['number1']['index']];  echo '#last">N</a></blink> ';  endif;  echo '<a href="forums.php?topic=';  echo $this->_tpl_vars['Id'][$this->_sections['number1']['index']];  echo '"><span class="forum">';  echo $this->_tpl_vars['Dates'][$this->_sections['number1']['index']];  echo ' ';  echo $this->_tpl_vars['Topic1'][$this->_sections['number1']['index']];  echo '</span></a></div></td><td valign="top"><a href="view.php?view=';  echo $this->_tpl_vars['StarterID'][$this->_sections['number1']['index']];  echo '">';  echo $this->_tpl_vars['Starter1'][$this->_sections['number1']['index']];  echo '</a></td><td valign="top">';  echo $this->_tpl_vars['Replies1'][$this->_sections['number1']['index']];  echo '</td></tr>';  endfor; endif;  echo '</table><form method="post" action="forums.php?action=addtopic">';  echo $this->_tpl_vars['Addtopic'];  echo ':<br /><input type="text" name="title2" value="Temat" size="60%" /><br /><textarea name="body" cols="60%" rows="15">';  echo $this->_tpl_vars['Ttext'];  echo '</textarea><br /><input type="hidden" name="catid" value="';  echo $this->_tpl_vars['Category'];  echo '" />';  if ($this->_tpl_vars['Rank'] == 'Admin' || $this->_tpl_vars['Rank'] == 'Staff'):  echo '<input type="checkbox" name="sticky" />';  echo $this->_tpl_vars['Tsticky'];  echo '<br />';  endif;  echo '<input type="submit" value="';  echo $this->_tpl_vars['Addtopic'];  echo '" /></form><br /><br /><a href="forums.php?view=categories">';  echo $this->_tpl_vars['Aback'];  echo '</a> ';  echo $this->_tpl_vars['Tocategories'];  echo '.';  endif;  echo '';  if ($this->_tpl_vars['Topic'] != ""):  echo '<h2>';  echo $this->_tpl_vars['Tcategory'];  echo ': ';  echo $this->_tpl_vars['CategoryName'];  echo '</h2>';  echo $this->_tpl_vars['Aback'];  echo ' <a href="forums.php?topics=';  echo $this->_tpl_vars['Category'];  echo '">';  echo $this->_tpl_vars['Totopics'];  echo '</a> ';  echo $this->_tpl_vars['or'];  echo ' <a href="forums.php?view=categories">';  echo $this->_tpl_vars['Tocategories'];  echo '</a>.<br /><br /><br /><center><div class="overflow"><a name="top"><b>';  echo $this->_tpl_vars['TopicDate'];  echo ' ';  echo $this->_tpl_vars['Topic2'];  echo '</b></a></div><div class="overflow"><fieldset style="width:90%"><legend> ';  echo $this->_tpl_vars['Writeby'];  echo ' <a href="view.php?view=';  echo $this->_tpl_vars['Playerid'];  echo '">';  echo $this->_tpl_vars['Starter'];  echo '</a> ';  echo $this->_tpl_vars['Wid'];  echo ' ';  echo $this->_tpl_vars['Playerid'];  echo ':</legend>(<a href="forums.php?topics=';  echo $this->_tpl_vars['Category'];  echo '">';  echo $this->_tpl_vars['Aback'];  echo '</a>) (<a href="forums.php?topic=';  echo $this->_tpl_vars['Topic'];  echo '&amp;quotet=Y#last">';  echo $this->_tpl_vars['Aquote'];  echo '</a>) ';  echo $this->_tpl_vars['Action'];  echo '<br/><br/><div style="text-align:left">';  echo $this->_tpl_vars['Ttext'];  echo '</div></fieldset></div>';  unset($this->_sections['number2']);
$this->_sections['number2']['name'] = 'number2';
$this->_sections['number2']['loop'] = is_array($_loop=$this->_tpl_vars['Rtext']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['number2']['show'] = true;
$this->_sections['number2']['max'] = $this->_sections['number2']['loop'];
$this->_sections['number2']['step'] = 1;
$this->_sections['number2']['start'] = $this->_sections['number2']['step'] > 0 ? 0 : $this->_sections['number2']['loop']-1;
if ($this->_sections['number2']['show']) {
    $this->_sections['number2']['total'] = $this->_sections['number2']['loop'];
    if ($this->_sections['number2']['total'] == 0)
        $this->_sections['number2']['show'] = false;
} else
    $this->_sections['number2']['total'] = 0;
if ($this->_sections['number2']['show']):

            for ($this->_sections['number2']['index'] = $this->_sections['number2']['start'], $this->_sections['number2']['iteration'] = 1;
                 $this->_sections['number2']['iteration'] <= $this->_sections['number2']['total'];
                 $this->_sections['number2']['index'] += $this->_sections['number2']['step'], $this->_sections['number2']['iteration']++):
$this->_sections['number2']['rownum'] = $this->_sections['number2']['iteration'];
$this->_sections['number2']['index_prev'] = $this->_sections['number2']['index'] - $this->_sections['number2']['step'];
$this->_sections['number2']['index_next'] = $this->_sections['number2']['index'] + $this->_sections['number2']['step'];
$this->_sections['number2']['first']      = ($this->_sections['number2']['iteration'] == 1);
$this->_sections['number2']['last']       = ($this->_sections['number2']['iteration'] == $this->_sections['number2']['total']);
 echo '<div class="overflow"><fieldset style="width:90%"><legend><a name="p';  echo $this->_sections['number2']['index']+1;  echo '" href="#p';  echo $this->_sections['number2']['index']+1;  echo '">(';  echo $this->_sections['number2']['index']+1;  echo ')</a> <b> ';  echo $this->_tpl_vars['Dates'][$this->_sections['number2']['index']];  echo ' <a href="view.php?view=';  echo $this->_tpl_vars['Rplayerid'][$this->_sections['number2']['index']];  echo '">';  echo $this->_tpl_vars['Rstarter'][$this->_sections['number2']['index']];  echo '</a></b> ';  echo $this->_tpl_vars['Wid'];  echo ' ';  echo $this->_tpl_vars['Rplayerid'][$this->_sections['number2']['index']];  echo ' ';  echo $this->_tpl_vars['Write'];  echo ': </legend>';  if ($this->_sections['number2']['last']):  echo '<a name="last"/ >';  endif;  echo '(<a href="forums.php?topics=';  echo $this->_tpl_vars['Category'];  echo '">';  echo $this->_tpl_vars['Aback'];  echo '</a>) (<a href="forums.php?topic=';  echo $this->_tpl_vars['Topic'];  echo '&amp;quote=';  echo $this->_tpl_vars['Rid'][$this->_sections['number2']['index']];  echo '#last">';  echo $this->_tpl_vars['Aquote'];  echo '</a>) ';  echo $this->_tpl_vars['Action2'][$this->_sections['number2']['index']];  echo '<a href="#top"><img src="" alt="img_Na górę" /></a><div style="text-align:left">';  echo $this->_tpl_vars['Rtext'][$this->_sections['number2']['index']];  echo '</div></fieldset></div>';  endfor; endif;  echo '<form method="post" action="forums.php?reply=';  echo $this->_tpl_vars['Id'];  echo '">';  echo $this->_tpl_vars['Areply'];  echo ':<br /><textarea name="rep" cols="75" rows="15">';  echo $this->_tpl_vars['Rtext2'];  echo '</textarea><br /><input type="submit" value="';  echo $this->_tpl_vars['Areply'];  echo '" /></form></center>';  endif;  echo '';  if ($this->_tpl_vars['Action3'] == 'search'):  echo '';  if ($this->_tpl_vars['Amount'] == '0'):  echo '<br /><br /><center>';  echo $this->_tpl_vars['Nosearch'];  echo '</center><br />';  endif;  echo '';  if ($this->_tpl_vars['Amount'] > '0'):  echo '';  echo $this->_tpl_vars['Youfind'];  echo ':<br /><br />';  unset($this->_sections['number3']);
$this->_sections['number3']['name'] = 'number3';
$this->_sections['number3']['loop'] = is_array($_loop=$this->_tpl_vars['Ttopic']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['number3']['show'] = true;
$this->_sections['number3']['max'] = $this->_sections['number3']['loop'];
$this->_sections['number3']['step'] = 1;
$this->_sections['number3']['start'] = $this->_sections['number3']['step'] > 0 ? 0 : $this->_sections['number3']['loop']-1;
if ($this->_sections['number3']['show']) {
    $this->_sections['number3']['total'] = $this->_sections['number3']['loop'];
    if ($this->_sections['number3']['total'] == 0)
        $this->_sections['number3']['show'] = false;
} else
    $this->_sections['number3']['total'] = 0;
if ($this->_sections['number3']['show']):

            for ($this->_sections['number3']['index'] = $this->_sections['number3']['start'], $this->_sections['number3']['iteration'] = 1;
                 $this->_sections['number3']['iteration'] <= $this->_sections['number3']['total'];
                 $this->_sections['number3']['index'] += $this->_sections['number3']['step'], $this->_sections['number3']['iteration']++):
$this->_sections['number3']['rownum'] = $this->_sections['number3']['iteration'];
$this->_sections['number3']['index_prev'] = $this->_sections['number3']['index'] - $this->_sections['number3']['step'];
$this->_sections['number3']['index_next'] = $this->_sections['number3']['index'] + $this->_sections['number3']['step'];
$this->_sections['number3']['first']      = ($this->_sections['number3']['iteration'] == 1);
$this->_sections['number3']['last']       = ($this->_sections['number3']['iteration'] == $this->_sections['number3']['total']);
 echo '<a href="forums.php?topic=';  echo $this->_tpl_vars['Tid'][$this->_sections['number3']['index']];  echo '">';  echo $this->_tpl_vars['Ttopic'][$this->_sections['number3']['index']];  echo '</a><br />';  endfor; endif;  echo '';  endif;  echo '<br /><br /><a href="forums.php?topics=';  echo $this->_tpl_vars['Category'];  echo '">';  echo $this->_tpl_vars['Aback'];  echo '</a>';  endif;  echo ''; ?>
