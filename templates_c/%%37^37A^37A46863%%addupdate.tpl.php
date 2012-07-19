<?php /* Smarty version 2.6.16, created on 2012-07-09 21:04:07
         compiled from addupdate.tpl */ ?>
<?php echo '<form method="post" action="';  echo $this->_tpl_vars['Link'];  echo '"><table>';  if ($this->_tpl_vars['Link'] == "addupdate.php?action=add"):  echo '<tr><td>';  echo $this->_tpl_vars['Ulangsel'];  echo ':</td><td><select name="addlang">';  unset($this->_sections['addupdate']);
$this->_sections['addupdate']['name'] = 'addupdate';
$this->_sections['addupdate']['loop'] = is_array($_loop=$this->_tpl_vars['Ulang']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['addupdate']['show'] = true;
$this->_sections['addupdate']['max'] = $this->_sections['addupdate']['loop'];
$this->_sections['addupdate']['step'] = 1;
$this->_sections['addupdate']['start'] = $this->_sections['addupdate']['step'] > 0 ? 0 : $this->_sections['addupdate']['loop']-1;
if ($this->_sections['addupdate']['show']) {
    $this->_sections['addupdate']['total'] = $this->_sections['addupdate']['loop'];
    if ($this->_sections['addupdate']['total'] == 0)
        $this->_sections['addupdate']['show'] = false;
} else
    $this->_sections['addupdate']['total'] = 0;
if ($this->_sections['addupdate']['show']):

            for ($this->_sections['addupdate']['index'] = $this->_sections['addupdate']['start'], $this->_sections['addupdate']['iteration'] = 1;
                 $this->_sections['addupdate']['iteration'] <= $this->_sections['addupdate']['total'];
                 $this->_sections['addupdate']['index'] += $this->_sections['addupdate']['step'], $this->_sections['addupdate']['iteration']++):
$this->_sections['addupdate']['rownum'] = $this->_sections['addupdate']['iteration'];
$this->_sections['addupdate']['index_prev'] = $this->_sections['addupdate']['index'] - $this->_sections['addupdate']['step'];
$this->_sections['addupdate']['index_next'] = $this->_sections['addupdate']['index'] + $this->_sections['addupdate']['step'];
$this->_sections['addupdate']['first']      = ($this->_sections['addupdate']['iteration'] == 1);
$this->_sections['addupdate']['last']       = ($this->_sections['addupdate']['iteration'] == $this->_sections['addupdate']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Ulang'][$this->_sections['addupdate']['index']];  echo '">';  echo $this->_tpl_vars['Ulang'][$this->_sections['addupdate']['index']];  echo '</option>';  endfor; endif;  echo '</select></td></tr>';  endif;  echo '<tr><td>';  echo $this->_tpl_vars['Utitle'];  echo ':</td><td><input type="text" name="addtitle" value="';  echo $this->_tpl_vars['Title1'];  echo '" /></td></tr><tr><td valign="top">';  echo $this->_tpl_vars['Utext'];  echo ':</td><td><textarea name="addupdate" rows="25" cols="70">';  echo $this->_tpl_vars['Text'];  echo '</textarea></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Button'];  echo '" /></td></tr></table></form>'; ?>