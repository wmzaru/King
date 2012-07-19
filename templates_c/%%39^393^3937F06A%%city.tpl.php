<?php /* Smarty version 2.6.16, created on 2012-07-09 21:06:33
         compiled from city.tpl */ ?>
<?php echo '';  if (( ( $this->_tpl_vars['Item'] == '0' && $this->_tpl_vars['Location'] == 'Altara' ) || ( $this->_tpl_vars['Location'] == 'Ardulith' && ( $this->_tpl_vars['Step'] == "" || $this->_tpl_vars['Step'] == 'list' ) ) ) && $this->_tpl_vars['Step'] != 'ogloszenie'):  echo '';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo '<div class="center">';  if ($this->_tpl_vars['Location'] == 'Altara'):  echo '<a><img id="meredithpicture" src="images/locations/meredith.jpg" alt="img_';  echo @SHOW_IMAGE;  echo '" onclick="showHideImage(\'meredithpicture\',\'images/locations/meredith.jpg\')"/></a>';  endif;  echo '';  if ($this->_tpl_vars['Location'] == 'Ardulith'):  echo '<a><img id="agarakarpicture" src="images/locations/agarakar.jpg" alt="img_';  echo @SHOW_IMAGE;  echo '" onclick="showHideImage(\'agarakarpicture\',\'images/locations/agarakar.jpg\')"/></a>';  endif;  echo '</div>';  endif;  echo '<div class="justify">';  echo @CITY_INFO;  echo '</div><br /><table width="100%">';  unset($this->_sections['row1']);
$this->_sections['row1']['name'] = 'row1';
$this->_sections['row1']['loop'] = is_array($_loop=$this->_tpl_vars['Titles']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['row1']['show'] = true;
$this->_sections['row1']['max'] = $this->_sections['row1']['loop'];
$this->_sections['row1']['step'] = 1;
$this->_sections['row1']['start'] = $this->_sections['row1']['step'] > 0 ? 0 : $this->_sections['row1']['loop']-1;
if ($this->_sections['row1']['show']) {
    $this->_sections['row1']['total'] = $this->_sections['row1']['loop'];
    if ($this->_sections['row1']['total'] == 0)
        $this->_sections['row1']['show'] = false;
} else
    $this->_sections['row1']['total'] = 0;
if ($this->_sections['row1']['show']):

            for ($this->_sections['row1']['index'] = $this->_sections['row1']['start'], $this->_sections['row1']['iteration'] = 1;
                 $this->_sections['row1']['iteration'] <= $this->_sections['row1']['total'];
                 $this->_sections['row1']['index'] += $this->_sections['row1']['step'], $this->_sections['row1']['iteration']++):
$this->_sections['row1']['rownum'] = $this->_sections['row1']['iteration'];
$this->_sections['row1']['index_prev'] = $this->_sections['row1']['index'] - $this->_sections['row1']['step'];
$this->_sections['row1']['index_next'] = $this->_sections['row1']['index'] + $this->_sections['row1']['step'];
$this->_sections['row1']['first']      = ($this->_sections['row1']['iteration'] == 1);
$this->_sections['row1']['last']       = ($this->_sections['row1']['iteration'] == $this->_sections['row1']['total']);
 echo '';  if ($this->_sections['row1']['index'] == 0 || $this->_sections['row1']['index'] == 3 || $this->_sections['row1']['index'] == 6):  echo '<tr>';  endif;  echo '<td width="33%" valign="top"><div class="citytitle">';  echo $this->_tpl_vars['Titles'][$this->_sections['row1']['index']];  echo '</div><ul';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo ' class="sword"';  endif;  echo '>';  unset($this->_sections['locations']);
$this->_sections['locations']['name'] = 'locations';
$this->_sections['locations']['loop'] = is_array($_loop=$this->_tpl_vars['Files'][$this->_sections['row1']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['locations']['show'] = true;
$this->_sections['locations']['max'] = $this->_sections['locations']['loop'];
$this->_sections['locations']['step'] = 1;
$this->_sections['locations']['start'] = $this->_sections['locations']['step'] > 0 ? 0 : $this->_sections['locations']['loop']-1;
if ($this->_sections['locations']['show']) {
    $this->_sections['locations']['total'] = $this->_sections['locations']['loop'];
    if ($this->_sections['locations']['total'] == 0)
        $this->_sections['locations']['show'] = false;
} else
    $this->_sections['locations']['total'] = 0;
if ($this->_sections['locations']['show']):

            for ($this->_sections['locations']['index'] = $this->_sections['locations']['start'], $this->_sections['locations']['iteration'] = 1;
                 $this->_sections['locations']['iteration'] <= $this->_sections['locations']['total'];
                 $this->_sections['locations']['index'] += $this->_sections['locations']['step'], $this->_sections['locations']['iteration']++):
$this->_sections['locations']['rownum'] = $this->_sections['locations']['iteration'];
$this->_sections['locations']['index_prev'] = $this->_sections['locations']['index'] - $this->_sections['locations']['step'];
$this->_sections['locations']['index_next'] = $this->_sections['locations']['index'] + $this->_sections['locations']['step'];
$this->_sections['locations']['first']      = ($this->_sections['locations']['iteration'] == 1);
$this->_sections['locations']['last']       = ($this->_sections['locations']['iteration'] == $this->_sections['locations']['total']);
 echo '<li><a href="';  echo $this->_tpl_vars['Files'][$this->_sections['row1']['index']][$this->_sections['locations']['index']];  echo '">';  echo $this->_tpl_vars['Names'][$this->_sections['row1']['index']][$this->_sections['locations']['index']];  echo '</a></li>';  endfor; endif;  echo '</ul></td>';  if ($this->_sections['row1']['index'] == 2 || $this->_sections['row1']['index'] == 5 || $this->_sections['row1']['index'] == 7):  echo '</tr>';  endif;  echo '';  endfor; endif;  echo '</table><hr />';  if ($this->_tpl_vars['Step'] == ""):  echo '<div class="center"><b><u>';  echo @OGLOSZENIE;  echo '</u></b><br /><b>';  echo $this->_tpl_vars['News']['tytul'];  echo '</b>';  echo @AUTOR;  echo '<b>';  echo $this->_tpl_vars['News']['autor'];  echo '</b>';  if ($this->_tpl_vars['Rank'] == 'Admin' || $this->_tpl_vars['Rank'] == 'Staff'):  echo ' <a href="city.php?step=ogloszenie&amp;del=';  echo $this->_tpl_vars['News']['id'];  echo '" onclick="return confirm(\'';  echo @ERR_CONFIRM;  echo '\');" title="';  echo @ERR_DEL;  echo '">';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo '<img src="images/icons/delete.png" alt="_img';  echo @ERR_DEL;  echo '" />';  else:  echo '';  echo @ERR_DEL;  echo '';  endif;  echo '</a>';  endif;  echo '<br /><br />"';  echo $this->_tpl_vars['News']['tresc'];  echo '"<br /><br /><a href="city.php?step=ogloszenie">';  echo @NOWE;  echo '</a><br /><br /><a href="city.php?step=list">';  echo @LISTA;  echo '</a></div>';  elseif ($this->_tpl_vars['Step'] == 'list'):  echo '<div class="center"><b><u>';  echo @OSTATNIE;  echo '</u></b>';  unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['ArrNews']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
 echo '<br /><b>';  echo $this->_tpl_vars['ArrNews'][$this->_sections['i']['index']][2];  echo '</b>';  echo @AUTOR;  echo '<b>';  echo $this->_tpl_vars['ArrNews'][$this->_sections['i']['index']][1];  echo '</b>';  if ($this->_tpl_vars['Rank'] == 'Admin' || $this->_tpl_vars['Rank'] == 'Staff'):  echo ' <a href="city.php?step=list&amp;del=';  echo $this->_tpl_vars['ArrNews'][$this->_sections['i']['index']][0];  echo '" onclick="return confirm(\'';  echo @ERR_CONFIRM;  echo '\');" title="';  echo @ERR_DEL;  echo '">';  if ($this->_tpl_vars['Graphstyle'] == 'Y'):  echo '<img src="images/icons/delete.png" alt="_img';  echo @ERR_DEL;  echo '" />';  else:  echo '';  echo @ERR_DEL;  echo '';  endif;  echo '</a>';  endif;  echo '<br /><br />"';  echo $this->_tpl_vars['ArrNews'][$this->_sections['i']['index']][3];  echo '".<br><br>';  endfor; endif;  echo '<a href="city.php?step=ogloszenie">';  echo @NOWE;  echo '</a></div>';  endif;  echo '<br />';  elseif ($this->_tpl_vars['Step'] == 'ogloszenie'):  echo '<div id="ann">';  echo @OGLOSZENIE_INFO;  echo '<b>';  echo $this->_tpl_vars['Price'];  echo '</b><br /><br /><form method="post" action="city.php?step=dodaj"><label for="antitle">';  echo @TYTUL;  echo '</label><input id="antitle" type="text" name="tytul"><br /><label for="ancontent">';  echo @TEKST;  echo '</label><textarea rows="4" cols="40" id="ancontent" name="tresc"></textarea><br /><label for="ansubmit">';  echo @WYSLIJ;  echo ':</label><input id="ansubmit" type="submit" value="';  echo @WYSLIJ;  echo '"></form></div>';  elseif ($this->_tpl_vars['Item'] == '1'):  echo '';  if ($this->_tpl_vars['Step'] == ""):  echo '';  echo @STAFF_QUEST;  echo '<br /><a href="city.php?step=give">';  echo @SQ_BOX1;  echo '</a><br /><a href="city.php?step=take">';  echo @SQ_BOX2;  echo '</a>';  elseif ($this->_tpl_vars['Step'] != ""):  echo '';  echo $this->_tpl_vars['Staffquest'];  echo '<br /><a href="temple.php?temp=book&amp;book=2">';  echo @TEMPLE;  echo '</a>';  endif;  echo '';  elseif ($this->_tpl_vars['Location'] == 'Ardulith' && $this->_tpl_vars['Step'] == 'gory'):  echo '';  echo @GO_MOUNTAINS;  echo '';  else:  echo 'Welcome, whatever you are.';  endif;  echo ''; ?>
