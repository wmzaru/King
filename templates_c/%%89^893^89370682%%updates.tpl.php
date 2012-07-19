<?php /* Smarty version 2.6.16, created on 2012-07-09 21:01:06
         compiled from updates.tpl */ ?>
<?php echo '';  if ($this->_tpl_vars['View'] == "" && $this->_tpl_vars['Step'] == ""):  echo '';  echo $this->_tpl_vars['Newplayer'];  echo '<div class="overflow"><b>';  echo $this->_tpl_vars['Title1'];  echo '</b> ';  echo $this->_tpl_vars['Writeby'];  echo ' <b>';  echo $this->_tpl_vars['Starter'];  echo '</b>';  echo $this->_tpl_vars['Date'];  echo '... ';  echo $this->_tpl_vars['Modtext'];  echo '<br /><br />"';  echo $this->_tpl_vars['Update'];  echo '".</div><a href="updates.php?step=comments&amp;text=';  echo $this->_tpl_vars['Updid'];  echo '">';  echo $this->_tpl_vars['Acomments'];  echo '</a>: ';  echo $this->_tpl_vars['Comments'];  echo '<br /><br />(<a href="updates.php?view=all">';  echo $this->_tpl_vars['Alast10'];  echo '</a>)';  endif;  echo '';  if ($this->_tpl_vars['View'] == 'all' && $this->_tpl_vars['Step'] == ""):  echo '';  unset($this->_sections['upd']);
$this->_sections['upd']['name'] = 'upd';
$this->_sections['upd']['loop'] = is_array($_loop=$this->_tpl_vars['Title1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['upd']['show'] = true;
$this->_sections['upd']['max'] = $this->_sections['upd']['loop'];
$this->_sections['upd']['step'] = 1;
$this->_sections['upd']['start'] = $this->_sections['upd']['step'] > 0 ? 0 : $this->_sections['upd']['loop']-1;
if ($this->_sections['upd']['show']) {
    $this->_sections['upd']['total'] = $this->_sections['upd']['loop'];
    if ($this->_sections['upd']['total'] == 0)
        $this->_sections['upd']['show'] = false;
} else
    $this->_sections['upd']['total'] = 0;
if ($this->_sections['upd']['show']):

            for ($this->_sections['upd']['index'] = $this->_sections['upd']['start'], $this->_sections['upd']['iteration'] = 1;
                 $this->_sections['upd']['iteration'] <= $this->_sections['upd']['total'];
                 $this->_sections['upd']['index'] += $this->_sections['upd']['step'], $this->_sections['upd']['iteration']++):
$this->_sections['upd']['rownum'] = $this->_sections['upd']['iteration'];
$this->_sections['upd']['index_prev'] = $this->_sections['upd']['index'] - $this->_sections['upd']['step'];
$this->_sections['upd']['index_next'] = $this->_sections['upd']['index'] + $this->_sections['upd']['step'];
$this->_sections['upd']['first']      = ($this->_sections['upd']['iteration'] == 1);
$this->_sections['upd']['last']       = ($this->_sections['upd']['iteration'] == $this->_sections['upd']['total']);
 echo '<div class="overflow"><b>';  echo $this->_tpl_vars['Title1'][$this->_sections['upd']['index']];  echo '</b> ';  echo $this->_tpl_vars['Writeby'];  echo ' <b>';  echo $this->_tpl_vars['Starter'][$this->_sections['upd']['index']];  echo '</b>';  echo $this->_tpl_vars['Date'][$this->_sections['upd']['index']];  echo '... ';  echo $this->_tpl_vars['Modtext'][$this->_sections['upd']['index']];  echo '<br /><br />"';  echo $this->_tpl_vars['Update'][$this->_sections['upd']['index']];  echo '"</div><a href="updates.php?step=comments&amp;text=';  echo $this->_tpl_vars['Updid'][$this->_sections['upd']['index']];  echo '">';  echo $this->_tpl_vars['Acomments'];  echo '</a>: ';  echo $this->_tpl_vars['Comments'][$this->_sections['upd']['index']];  echo '<br /><br />';  endfor; endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Step'] == 'comments'):  echo '';  if ($this->_tpl_vars['Amount'] == '0'):  echo '<center>';  echo $this->_tpl_vars['Nocomments'];  echo '</center>';  endif;  echo '';  if ($this->_tpl_vars['Amount'] > '0'):  echo '';  unset($this->_sections['update']);
$this->_sections['update']['name'] = 'update';
$this->_sections['update']['loop'] = is_array($_loop=$this->_tpl_vars['Tauthor']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['update']['show'] = true;
$this->_sections['update']['max'] = $this->_sections['update']['loop'];
$this->_sections['update']['step'] = 1;
$this->_sections['update']['start'] = $this->_sections['update']['step'] > 0 ? 0 : $this->_sections['update']['loop']-1;
if ($this->_sections['update']['show']) {
    $this->_sections['update']['total'] = $this->_sections['update']['loop'];
    if ($this->_sections['update']['total'] == 0)
        $this->_sections['update']['show'] = false;
} else
    $this->_sections['update']['total'] = 0;
if ($this->_sections['update']['show']):

            for ($this->_sections['update']['index'] = $this->_sections['update']['start'], $this->_sections['update']['iteration'] = 1;
                 $this->_sections['update']['iteration'] <= $this->_sections['update']['total'];
                 $this->_sections['update']['index'] += $this->_sections['update']['step'], $this->_sections['update']['iteration']++):
$this->_sections['update']['rownum'] = $this->_sections['update']['iteration'];
$this->_sections['update']['index_prev'] = $this->_sections['update']['index'] - $this->_sections['update']['step'];
$this->_sections['update']['index_next'] = $this->_sections['update']['index'] + $this->_sections['update']['step'];
$this->_sections['update']['first']      = ($this->_sections['update']['iteration'] == 1);
$this->_sections['update']['last']       = ($this->_sections['update']['iteration'] == $this->_sections['update']['total']);
 echo '<div class="overflow"><fieldset style="width:90%"><legend><b>';  echo $this->_tpl_vars['Tauthor'][$this->_sections['update']['index']];  echo '</b> ';  if ($this->_tpl_vars['Tdate'][$this->_sections['update']['index']] != ""):  echo ' (';  echo $this->_tpl_vars['Tdate'][$this->_sections['update']['index']];  echo ') ';  endif;  echo '';  echo $this->_tpl_vars['Writed'];  echo ': </legend>';  if ($this->_tpl_vars['Rank'] == 'Admin' || $this->_tpl_vars['Rank'] == 'Staff'):  echo ' <center>(<a href="updates.php?step=comments&amp;action=delete&amp;cid=';  echo $this->_tpl_vars['Cid'][$this->_sections['update']['index']];  echo '">';  echo $this->_tpl_vars['Adelete'];  echo '</a>) </center> ';  endif;  echo '<br />';  echo $this->_tpl_vars['Tbody'][$this->_sections['update']['index']];  echo '</fieldset></div>';  endfor; endif;  echo '';  endif;  echo '<br /><br /><center><form method="post" action="updates.php?step=comments&amp;action=add">';  echo $this->_tpl_vars['Addcomment'];  echo ':<br /><textarea name="body" rows="15" cols="50"></textarea><br /><input type="hidden" name="tid" value="';  echo $this->_tpl_vars['Text'];  echo '" /><input type="submit" value="';  echo $this->_tpl_vars['Aadd'];  echo '" /></form><br /></center><a href="updates.php">';  echo $this->_tpl_vars['Aback'];  echo '</a>';  endif;  echo ''; ?>
