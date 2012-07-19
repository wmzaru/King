<?php /* Smarty version 2.6.16, created on 2012-07-09 21:04:41
         compiled from bugtrack.tpl */ ?>
<?php echo '';  echo $this->_tpl_vars['Buginfo'];  echo '<form method="post" action="bugtrack.php?action=delete"><table width="100%"><tr><td>';  echo $this->_tpl_vars['Adelete'];  echo '</td><td>';  echo $this->_tpl_vars['Bid2'];  echo '</td><td>';  echo $this->_tpl_vars['Btype2'];  echo '</td><td>';  echo $this->_tpl_vars['Bfile2'];  echo '</td><td>';  echo $this->_tpl_vars['Bref'];  echo '</td><td>';  echo $this->_tpl_vars['Bline2'];  echo '</td><td>';  echo $this->_tpl_vars['Binfo2'];  echo '</td><td>';  echo $this->_tpl_vars['Bamount2'];  echo '</td></tr>';  unset($this->_sections['bugtrack']);
$this->_sections['bugtrack']['name'] = 'bugtrack';
$this->_sections['bugtrack']['loop'] = is_array($_loop=$this->_tpl_vars['Bamount']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 echo '<tr><td><input type="checkbox" name="';  echo $this->_tpl_vars['Bid'][$this->_sections['bugtrack']['index']];  echo '" /></td><td>';  echo $this->_tpl_vars['Bid'][$this->_sections['bugtrack']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Btype'][$this->_sections['bugtrack']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Bfile'][$this->_sections['bugtrack']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Brefer'][$this->_sections['bugtrack']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Bline'][$this->_sections['bugtrack']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Binfo'][$this->_sections['bugtrack']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Bamount'][$this->_sections['bugtrack']['index']];  echo '</td></tr>';  endfor; endif;  echo '<tr><td colspan="7" align="center"><input type="submit" value="';  echo $this->_tpl_vars['Adelete'];  echo '" /></td></tr></table></form>';  echo $this->_tpl_vars['Message'];  echo '<br/><form method="post" action="bugtrack.php?action=clear"><input type="submit" value="';  echo $this->_tpl_vars['Aclear'];  echo '" /></form>'; ?>