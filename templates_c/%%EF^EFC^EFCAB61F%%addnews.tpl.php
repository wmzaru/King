<?php /* Smarty version 2.6.16, created on 2012-07-09 21:25:37
         compiled from addnews.tpl */ ?>
<?php echo '<form method="post" action="addnews.php?action=add"><table><tr><td>';  echo $this->_tpl_vars['Nlangsel'];  echo ':</td><td><select name="addlang">';  unset($this->_sections['addnews']);
$this->_sections['addnews']['name'] = 'addnews';
$this->_sections['addnews']['loop'] = is_array($_loop=$this->_tpl_vars['Nlang']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['addnews']['show'] = true;
$this->_sections['addnews']['max'] = $this->_sections['addnews']['loop'];
$this->_sections['addnews']['step'] = 1;
$this->_sections['addnews']['start'] = $this->_sections['addnews']['step'] > 0 ? 0 : $this->_sections['addnews']['loop']-1;
if ($this->_sections['addnews']['show']) {
    $this->_sections['addnews']['total'] = $this->_sections['addnews']['loop'];
    if ($this->_sections['addnews']['total'] == 0)
        $this->_sections['addnews']['show'] = false;
} else
    $this->_sections['addnews']['total'] = 0;
if ($this->_sections['addnews']['show']):

            for ($this->_sections['addnews']['index'] = $this->_sections['addnews']['start'], $this->_sections['addnews']['iteration'] = 1;
                 $this->_sections['addnews']['iteration'] <= $this->_sections['addnews']['total'];
                 $this->_sections['addnews']['index'] += $this->_sections['addnews']['step'], $this->_sections['addnews']['iteration']++):
$this->_sections['addnews']['rownum'] = $this->_sections['addnews']['iteration'];
$this->_sections['addnews']['index_prev'] = $this->_sections['addnews']['index'] - $this->_sections['addnews']['step'];
$this->_sections['addnews']['index_next'] = $this->_sections['addnews']['index'] + $this->_sections['addnews']['step'];
$this->_sections['addnews']['first']      = ($this->_sections['addnews']['iteration'] == 1);
$this->_sections['addnews']['last']       = ($this->_sections['addnews']['iteration'] == $this->_sections['addnews']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Nlang'][$this->_sections['addnews']['index']];  echo '">';  echo $this->_tpl_vars['Nlang'][$this->_sections['addnews']['index']];  echo '</option>';  endfor; endif;  echo '</select></td></tr><tr><td>';  echo $this->_tpl_vars['Ntitle'];  echo ':</td><td><input type="text" name="addtitle" /></td></tr><tr><td valign="top">';  echo $this->_tpl_vars['Ntext'];  echo ':</td><td><textarea name="addnews" rows="15" cols="40"></textarea></td></tr><tr><td colspan="2" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Nadd'];  echo '" /></td></tr></table></form>'; ?>