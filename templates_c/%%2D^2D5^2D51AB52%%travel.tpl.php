<?php /* Smarty version 2.6.16, created on 2012-07-09 21:03:01
         compiled from travel.tpl */ ?>
<?php echo '';  if ($this->_tpl_vars['Action'] == '' && $this->_tpl_vars['Action2'] == ''):  echo '';  echo '';  if ($this->_tpl_vars['Location'] == $this->_tpl_vars['LCapitol'] || $this->_tpl_vars['Location'] == $this->_tpl_vars['LElvenCity']):  echo '<p>';  echo $this->_tpl_vars['Stablesinfo'];  echo '</p>';  else:  echo '<p>';  echo $this->_tpl_vars['Outside'];  echo '</p>';  endif;  echo '';  echo '';  if ($this->_tpl_vars['Location'] == $this->_tpl_vars['LCapitol']):  echo '<ul><li><a href="travel.php?action=gory">';  echo $this->_tpl_vars['Amountains'];  echo '</a></li><li><a href="travel.php?action=las">';  echo $this->_tpl_vars['Aforest'];  echo '</a></li><li><a href="travel.php?action=city2">';  echo $this->_tpl_vars['Aelfcity'];  echo '</a></li></ul>';  if ($this->_tpl_vars['Maps'] == 1):  echo '<p>';  echo $this->_tpl_vars['Portal1'];  echo '</p><ul><li><a href="travel.php?akcja=tak">';  echo $this->_tpl_vars['Ayes'];  echo '</a></li><li><a href="travel.php?akcja=nie">';  echo $this->_tpl_vars['Ano'];  echo '</a></li></ul>';  endif;  echo '';  if ($this->_tpl_vars['Tportals'][0] != ''):  echo '<p>';  echo $this->_tpl_vars['Tporinfo'];  echo '</p><ul>';  unset($this->_sections['portals']);
$this->_sections['portals']['name'] = 'portals';
$this->_sections['portals']['loop'] = is_array($_loop=$this->_tpl_vars['Tportals']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['portals']['show'] = true;
$this->_sections['portals']['max'] = $this->_sections['portals']['loop'];
$this->_sections['portals']['step'] = 1;
$this->_sections['portals']['start'] = $this->_sections['portals']['step'] > 0 ? 0 : $this->_sections['portals']['loop']-1;
if ($this->_sections['portals']['show']) {
    $this->_sections['portals']['total'] = $this->_sections['portals']['loop'];
    if ($this->_sections['portals']['total'] == 0)
        $this->_sections['portals']['show'] = false;
} else
    $this->_sections['portals']['total'] = 0;
if ($this->_sections['portals']['show']):

            for ($this->_sections['portals']['index'] = $this->_sections['portals']['start'], $this->_sections['portals']['iteration'] = 1;
                 $this->_sections['portals']['iteration'] <= $this->_sections['portals']['total'];
                 $this->_sections['portals']['index'] += $this->_sections['portals']['step'], $this->_sections['portals']['iteration']++):
$this->_sections['portals']['rownum'] = $this->_sections['portals']['iteration'];
$this->_sections['portals']['index_prev'] = $this->_sections['portals']['index'] - $this->_sections['portals']['step'];
$this->_sections['portals']['index_next'] = $this->_sections['portals']['index'] + $this->_sections['portals']['step'];
$this->_sections['portals']['first']      = ($this->_sections['portals']['iteration'] == 1);
$this->_sections['portals']['last']       = ($this->_sections['portals']['iteration'] == $this->_sections['portals']['total']);
 echo '<li><a href="portals.php?step=';  echo $this->_tpl_vars['Tporlink'][$this->_sections['portals']['index']];  echo '">';  echo $this->_tpl_vars['Tportals'][$this->_sections['portals']['index']];  echo '</a></li>';  endfor; endif;  echo '</ul>';  endif;  echo '';  else:  echo '';  echo '<ul>';  if ($this->_tpl_vars['Location'] == $this->_tpl_vars['LMountains'] || $this->_tpl_vars['Location'] == $this->_tpl_vars['LElvenCity']):  echo '<li><a href="travel.php?action=las">';  echo $this->_tpl_vars['Aforest'];  echo '</a></li>';  else:  echo '<li><a href="travel.php?action=city2">';  echo $this->_tpl_vars['Aelfcity'];  echo '</a></li><li><a href="travel.php?action=gory">';  echo $this->_tpl_vars['Amountains'];  echo '</a></li>';  endif;  echo '<li><a href="travel.php?action=powrot">';  echo $this->_tpl_vars['ACapitol'];  echo '</a></li></ul>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Action2'] != ''):  echo '<ul><li><a href="travel.php?akcja=';  echo $this->_tpl_vars['Action2'];  echo '&amp;step=caravan">';  echo $this->_tpl_vars['Acaravan'];  echo '</a></li><li><a href="travel.php?akcja=';  echo $this->_tpl_vars['Action2'];  echo '&amp;step=walk">';  echo $this->_tpl_vars['Awalk'];  echo '</a></li><li><a href="travel.php?akcja=';  echo $this->_tpl_vars['Action2'];  echo '&amp;step=teleport">';  echo $this->_tpl_vars['Ateleport'];  echo '</a></li><li><a href="travel.php">';  echo $this->_tpl_vars['Aback'];  echo '</a></li></ul>';  else:  echo '';  if ($this->_tpl_vars['Portal'] == 'Y'):  echo '';  echo $this->_tpl_vars['Portal2'];  echo '';  elseif ($this->_tpl_vars['Portal'] == 'N'):  echo '';  echo $this->_tpl_vars['Portal3'];  echo '';  endif;  echo '';  endif;  echo ''; ?>