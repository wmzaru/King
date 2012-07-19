<?php /* Smarty version 2.6.16, created on 2012-07-10 01:45:51
         compiled from core.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'core.tpl', 423, false),)), $this); ?>
<?php echo '';  if ($this->_tpl_vars['Corepass'] != 'Y'):  echo '';  echo @COREPASS_INFO;  echo '';  if ($this->_tpl_vars['Gold'] >= '500'):  echo '<br/><br/>';  echo @HAVE_MONEY;  echo '<ul><li><a href="core.php?answer=yes">';  echo @A_YES;  echo '</a></li><li><a href="city.php">';  echo @A_NO;  echo '</a></li></ul>';  else:  echo '<br/><br/>';  echo @NO_MONEY;  echo '';  endif;  echo '';  else:  echo '';  if ($this->_tpl_vars['view'] == 'none'):  echo '';  echo @CORE_MAIN;  echo '<ul><li><a href="core.php?view=my">';  echo @A_MY_CORE;  echo '</a></li><li><a href="core.php?view=arena">';  echo @A_ARENA;  echo '</a></li><li><a href="core.php?view=train">';  echo @A_TRAIN;  echo '</a></li><li><a href="core.php?view=market">';  echo @A_MARKET;  echo '</a></li><li><a href="core.php?view=search">';  echo @A_SEARCH;  echo '</a></li><li><a href="core.php?view=breed">';  echo @A_BREED;  echo '</a></li><li><a href="core.php?view=monuments">';  echo @A_MONUMENTS;  echo '</a></li></ul><br/><a href="city.php">';  echo $this->_tpl_vars['Back'];  echo '</a>';  elseif ($this->_tpl_vars['view'] == 'my'):  echo '';  echo @MY_CORES_INFO;  echo '<table width="90%"><tr><td width="50%" valign="top"><fieldset style="overflow:auto;"><legend><b>';  echo @NORMAL_ARENA;  echo '</b></legend><ul>';  unset($this->_sections['foo']);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['loop'] = is_array($_loop=$this->_tpl_vars['Normalnamelist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['show'] = true;
$this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
$this->_sections['foo']['step'] = 1;
$this->_sections['foo']['start'] = $this->_sections['foo']['step'] > 0 ? 0 : $this->_sections['foo']['loop']-1;
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = $this->_sections['foo']['loop'];
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
 echo '<li><a href="core.php?view=my&amp;id=';  echo $this->_tpl_vars['Normalidlist'][$this->_sections['foo']['index']];  echo '">';  echo $this->_tpl_vars['Normalnamelist'][$this->_sections['foo']['index']];  echo '</a> [';  echo $this->_tpl_vars['Normalstatuslist'][$this->_sections['foo']['index']];  echo ']</li>';  endfor; endif;  echo '</ul></fieldset></td><td width="50%" valign="top"><fieldset style="overflow:auto;"><legend><b>';  echo @MAGIC_ARENA;  echo '</b></legend><ul>';  unset($this->_sections['foo']);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['loop'] = is_array($_loop=$this->_tpl_vars['Magicnamelist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['show'] = true;
$this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
$this->_sections['foo']['step'] = 1;
$this->_sections['foo']['start'] = $this->_sections['foo']['step'] > 0 ? 0 : $this->_sections['foo']['loop']-1;
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = $this->_sections['foo']['loop'];
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
 echo '<li><a href="core.php?view=my&amp;id=';  echo $this->_tpl_vars['Magicidlist'][$this->_sections['foo']['index']];  echo '">';  echo $this->_tpl_vars['Magicnamelist'][$this->_sections['foo']['index']];  echo '</a> [';  echo $this->_tpl_vars['Magicstatuslist'][$this->_sections['foo']['index']];  echo ']</li>';  endfor; endif;  echo '</ul></fieldset></td></tr></table><br/><br/><a href="core.php">';  echo @BACK;  echo '</a>';  elseif ($this->_tpl_vars['view'] == 'display'):  echo '<center><span style="font-size:14px; font-weight:bold">';  echo $this->_tpl_vars['Ctitle'];  echo '</span> <br/><img src="images/pets/';  echo $this->_tpl_vars['Image'];  echo '" alt="';  echo $this->_tpl_vars['Ctitle'];  echo '"/></center>';  if ($this->_tpl_vars['action'] == 'changename'):  echo '<br/><form method="post" action="core.php?view=my&amp;id=';  echo $this->_tpl_vars['Coreid'];  echo '&amp;action=changename"><input type="text" name="corename" size="20"/><input type="submit" value="';  echo @CHANGE_NAME;  echo '"/></form>';  elseif ($this->_tpl_vars['action'] == 'heal' && $this->_tpl_vars['Healinfo'] != ""):  echo '<br/>';  echo $this->_tpl_vars['Healinfo'];  echo ' <br/>';  if ($this->_tpl_vars['Nomoney'] == ""):  echo '<form method="post" action="core.php?view=my&amp;id=';  echo $this->_tpl_vars['Coreid'];  echo '&amp;action=heal"><input type="hidden" name="heal" value="Y"/><input type="submit" value="';  echo @A_HEAL;  echo '"/></form>';  else:  echo '';  echo $this->_tpl_vars['Nomoney'];  echo '<br/>';  endif;  echo '<br/>';  elseif ($this->_tpl_vars['action'] == 'resurrect' && $this->_tpl_vars['Resinfo'] != ""):  echo '<br/>';  echo $this->_tpl_vars['Resinfo'];  echo ' <br/>';  if ($this->_tpl_vars['Nomoney'] == ""):  echo '<form method="post" action="core.php?view=my&amp;id=';  echo $this->_tpl_vars['Coreid'];  echo '&amp;action=resurrect"><input type="hidden" name="resurrect" value="Y"/><input type="submit" value="';  echo @A_RESURRECT;  echo '"/></form>';  else:  echo '';  echo $this->_tpl_vars['Nomoney'];  echo '<br/>';  endif;  echo '<br/>';  elseif ($this->_tpl_vars['action'] == 'free'):  echo '<br/>';  echo @FREE_INFO;  echo '<form method="post" action="core.php?view=my&amp;id=';  echo $this->_tpl_vars['Coreid'];  echo '&amp;action=free"><input type="hidden" name="free" value="Y"/><input type="submit" value="';  echo @A_FREE;  echo '"/></form><br/>';  elseif ($this->_tpl_vars['action'] == 'pass'):  echo '<br />';  echo @PASS_INFO;  echo '<br /><form method="post" action="core.php?view=my&amp;id=';  echo $this->_tpl_vars['Coreid'];  echo '&amp;action=pass"><input type="text" name="pid" size="5" /><input type="submit" value="';  echo @A_PASS;  echo '"/></form><br />';  elseif ($this->_tpl_vars['action'] == 'sell' && $this->_tpl_vars['Sellinfo'] != ""):  echo '<br/>';  echo $this->_tpl_vars['Sellinfo'];  echo '<br/><form method="post" action="core.php?view=my&amp;id=';  echo $this->_tpl_vars['Coreid'];  echo '&amp;action=sell"><input type="text" name="prize" size="5"/><input type="submit" value="';  echo @A_SELL;  echo '"/></form><br/>';  elseif ($this->_tpl_vars['action'] == 'activate' && $this->_tpl_vars['Activateinfo'] != ""):  echo '<br/>';  echo $this->_tpl_vars['Activateinfo'];  echo '<br/>';  echo $this->_tpl_vars['Cost'];  echo '<br/>';  if ($this->_tpl_vars['Nomoney'] == ""):  echo '<form method="post" action="core.php?view=my&amp;id=';  echo $this->_tpl_vars['Coreid'];  echo '&amp;action=activate"><input type="hidden" name="activate" value="Y"/><input type="submit" value="';  echo @A_ACTIVATE;  echo '"/></form>';  else:  echo '';  echo $this->_tpl_vars['Nomoney'];  echo '<br/>';  endif;  echo '<br/>';  elseif ($this->_tpl_vars['action'] == 'deactivate' && $this->_tpl_vars['Deactivateinfo'] != ""):  echo '<br/>';  echo $this->_tpl_vars['Deactivateinfo'];  echo '<br/>';  echo $this->_tpl_vars['Cost'];  echo '<br/>';  if ($this->_tpl_vars['Nomoney'] == ""):  echo '<form method="post" action="core.php?view=my&amp;id=';  echo $this->_tpl_vars['Coreid'];  echo '&amp;action=deactivate"><input type="hidden" name="deactivate" value="Y"/><input type="submit" value="';  echo @A_DEACTIVATE;  echo '"/></form>';  else:  echo '';  echo $this->_tpl_vars['Nomoney'];  echo '<br/>';  endif;  echo '<br/>';  endif;  echo '<table width="80%"><tr><td width="30%">';  echo @C_NAME;  echo ':</td><td width="70%">';  echo $this->_tpl_vars['Name'];  echo ' (<a href="core.php?view=my&amp;id=';  echo $this->_tpl_vars['Coreid'];  echo '&amp;action=changename">';  echo @CHANGE_NAME;  echo '</a>)</td></tr><tr><td>';  echo @C_SPECIES;  echo ':</td><td>';  echo $this->_tpl_vars['Species'];  echo '</td></tr><tr><td>';  echo @C_GENDER;  echo ':</td><td>';  echo $this->_tpl_vars['Gender'];  echo '</td></tr><tr><td>';  echo @C_STATUS;  echo ':</td><td>';  echo $this->_tpl_vars['Status'];  echo '</td></tr><tr><td>';  echo @C_HP;  echo ':</td><td>';  echo $this->_tpl_vars['Hp'];  echo ' / ';  echo $this->_tpl_vars['Maxhp'];  echo '';  if ($this->_tpl_vars['Hp'] > 0 && $this->_tpl_vars['Maxhp'] > $this->_tpl_vars['Hp']):  echo '&nbsp;(<a href="core.php?view=my&amp;id=';  echo $this->_tpl_vars['Coreid'];  echo '&amp;action=heal">';  echo @A_HEAL;  echo '</a>)';  elseif ($this->_tpl_vars['Hp'] <= 0):  echo '&nbsp;(<a href="core.php?view=my&amp;id=';  echo $this->_tpl_vars['Coreid'];  echo '&amp;action=resurrect">';  echo @A_RESURRECT;  echo '</a>)';  endif;  echo '</td></tr><tr><td>';  echo @C_ATTACK;  echo ':</td><td>';  echo $this->_tpl_vars['Attack'];  echo '</td></tr><tr><td>';  echo @C_DEFENCE;  echo ':</td><td>';  echo $this->_tpl_vars['Defence'];  echo '</td></tr><tr><td>';  echo @C_SPEED;  echo ':</td><td>';  echo $this->_tpl_vars['Speed'];  echo '</td></tr><tr><td>';  echo @C_ARENA;  echo ':</td><td>';  echo $this->_tpl_vars['Arena'];  echo '</td></tr><tr><td>';  echo @C_ATUT;  echo ':</td><td>';  echo $this->_tpl_vars['Atut'];  echo '</td></tr><tr><td>';  echo @C_AGE;  echo ':</td><td>';  echo $this->_tpl_vars['Age'];  echo '';  if ($this->_tpl_vars['Rest'] > 0):  echo '&nbsp;(';  echo $this->_tpl_vars['Rest'];  echo ' ';  echo @DAYS_TO_BREED;  echo ')';  endif;  echo '</td></tr><tr><td>';  echo @C_WINS;  echo ':</td><td>';  echo $this->_tpl_vars['Wins'];  echo '</td></tr><tr><td>';  echo @C_LOSES;  echo ':</td><td>';  echo $this->_tpl_vars['Loses'];  echo '</td></tr><tr><td>(<a href="core.php?view=my&amp;id=';  echo $this->_tpl_vars['Coreid'];  echo '&amp;action=free">';  echo @A_FREE;  echo '</a>)</td><td>';  if ($this->_tpl_vars['Statuscode'] == 'N'):  echo '(<a href="core.php?view=my&amp;id=';  echo $this->_tpl_vars['Coreid'];  echo '&amp;action=pass">';  echo @A_PASS;  echo '</a>)';  endif;  echo '</td></tr><tr><td>';  if ($this->_tpl_vars['Statuscode'] == 'N' && $this->_tpl_vars['Hp'] > 0):  echo '(<a href="core.php?view=my&amp;id=';  echo $this->_tpl_vars['Coreid'];  echo '&amp;action=sell">';  echo @A_SELL;  echo '</a>)';  endif;  echo '</td><td>';  if ($this->_tpl_vars['Statuscode'] == 'S'):  echo '(<a href="core.php?view=my&amp;id=';  echo $this->_tpl_vars['Coreid'];  echo '&amp;action=unsell">';  echo @A_UNSELL;  echo '</a>)';  endif;  echo '</td></tr><tr><td>';  if ($this->_tpl_vars['Statuscode'] == 'N' && $this->_tpl_vars['Hp'] > 0):  echo '(<a href="core.php?view=my&amp;id=';  echo $this->_tpl_vars['Coreid'];  echo '&amp;action=activate">';  echo @A_ACTIVATE;  echo '</a>)';  endif;  echo '</td><td>';  if ($this->_tpl_vars['Statuscode'] == 'A'):  echo '(<a href="core.php?view=my&amp;id=';  echo $this->_tpl_vars['Coreid'];  echo '&amp;action=deactivate">';  echo @A_DEACTIVATE;  echo '</a>)';  endif;  echo '</td></tr></table><br/>';  echo @C_TEXT;  echo ':<p class="artbody">';  echo $this->_tpl_vars['Text'];  echo '</p><br/><a href="core.php">';  echo @BACK;  echo '</a>';  elseif ($this->_tpl_vars['view'] == 'search'):  echo '';  if ($this->_tpl_vars['Searchinfo'] != ""):  echo '';  echo $this->_tpl_vars['Searchinfo'];  echo '<br/><br/>';  echo @YOU_CAN;  echo ' ';  echo $this->_tpl_vars['Maxtries'];  echo ' ';  echo @TIMES;  echo '';  if ($this->_tpl_vars['Maxtries'] > 0):  echo '<br/><br/><form method="post" action="core.php?view=search"><input type="text" name="times" size="5"/><input type="submit" value="';  echo @SUMMON;  echo '"/></form>';  endif;  echo '';  elseif ($this->_tpl_vars['Nocores'] != ""):  echo '';  echo $this->_tpl_vars['Nocores'];  echo '';  else:  echo '';  echo @YOU_SUMMON;  echo ':<ul>';  echo $this->_tpl_vars['List'];  echo '</ul>';  if ($this->_tpl_vars['Gainexp'] > 0):  echo '';  echo @YOU_GAINED;  echo ' <b>';  echo $this->_tpl_vars['Gainexp'];  echo '</b> ';  echo @EXPERIENCE;  echo '';  endif;  echo '';  endif;  echo '<br/><br/><a href="core.php">';  echo @BACK;  echo '</a>';  elseif ($this->_tpl_vars['view'] == 'market'):  echo '';  echo @MARKET_INFO;  echo '<br/>';  if ($this->_tpl_vars['SellNamelist'] != ""):  echo '<br/>';  echo @SELL_TEXT;  echo '<form method="post" action="core.php?view=my&amp;action=sell"><select name="id">';  unset($this->_sections['foo']);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['loop'] = is_array($_loop=$this->_tpl_vars['SellNamelist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['show'] = true;
$this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
$this->_sections['foo']['step'] = 1;
$this->_sections['foo']['start'] = $this->_sections['foo']['step'] > 0 ? 0 : $this->_sections['foo']['loop']-1;
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = $this->_sections['foo']['loop'];
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
 echo '<option value="';  echo $this->_tpl_vars['SellIdlist'][$this->_sections['foo']['index']];  echo '">';  echo $this->_tpl_vars['SellNamelist'][$this->_sections['foo']['index']];  echo ' :: ';  echo $this->_tpl_vars['SellAttacklist'][$this->_sections['foo']['index']];  echo ', ';  echo $this->_tpl_vars['SellDefencelist'][$this->_sections['foo']['index']];  echo ', ';  echo $this->_tpl_vars['SellSpeedlist'][$this->_sections['foo']['index']];  echo ' :: ';  echo $this->_tpl_vars['SellHplist'][$this->_sections['foo']['index']];  echo ' :: ';  echo $this->_tpl_vars['SellGenderlist'][$this->_sections['foo']['index']];  echo '</option>';  endfor; endif;  echo '</select><br/><input type="text" name="prize" size="5" /><input type="submit" value="';  echo @A_SELL;  echo '" /></form>';  endif;  echo '';  if ($this->_tpl_vars['Namelist'] != ""):  echo '<ul>';  unset($this->_sections['foo']);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['loop'] = is_array($_loop=$this->_tpl_vars['Namelist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['show'] = true;
$this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
$this->_sections['foo']['step'] = 1;
$this->_sections['foo']['start'] = $this->_sections['foo']['step'] > 0 ? 0 : $this->_sections['foo']['loop']-1;
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = $this->_sections['foo']['loop'];
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
 echo '<li><a href="core.php?view=market&amp;buy=';  echo $this->_tpl_vars['Idlist'][$this->_sections['foo']['index']];  echo '">';  echo @A_BUY;  echo ' - ';  echo $this->_tpl_vars['Prizelist'][$this->_sections['foo']['index']];  echo ' ';  echo @GOLD_PIECES;  echo '</a>&nbsp; <b> ';  echo $this->_tpl_vars['Namelist'][$this->_sections['foo']['index']];  echo ' </b> - <a href="view.php?view=';  echo $this->_tpl_vars['Owneridlist'][$this->_sections['foo']['index']];  echo '">';  echo $this->_tpl_vars['Ownerlist'][$this->_sections['foo']['index']];  echo '</a><br/>';  echo @C_ATTACK;  echo ': <b>';  echo $this->_tpl_vars['Attacklist'][$this->_sections['foo']['index']];  echo '</b>, ';  echo @C_DEFENCE;  echo ': <b>';  echo $this->_tpl_vars['Defencelist'][$this->_sections['foo']['index']];  echo '</b>, ';  echo @C_SPEED;  echo ': <b>';  echo $this->_tpl_vars['Speedlist'][$this->_sections['foo']['index']];  echo '</b>, ';  echo @C_HP;  echo ': <b>';  echo $this->_tpl_vars['Hplist'][$this->_sections['foo']['index']];  echo '</b>, ';  echo @C_GENDER;  echo ': <b>';  echo $this->_tpl_vars['Genderlist'][$this->_sections['foo']['index']];  echo '</b>.</li>';  endfor; endif;  echo '</ul>';  endif;  echo '<br/><br/><a href="core.php">';  echo @BACK;  echo '</a>';  elseif ($this->_tpl_vars['view'] == 'arena'):  echo '';  if ($this->_tpl_vars['Arena'] == ""):  echo '';  if ($this->_tpl_vars['Fight'] == ""):  echo '';  echo @ARENA_INFO;  echo '<br/><br/><ul><li><a href="core.php?view=arena&amp;arena=Z">';  echo @ARENA_Z;  echo '</a></li><li><a href="core.php?view=arena&amp;arena=M">';  echo @ARENA_M;  echo '</a></li></ul>';  else:  echo '<b>';  echo $this->_tpl_vars['Fight'];  echo '</b><br/><br/>';  echo $this->_tpl_vars['Log'];  echo '<br/><br/>';  echo $this->_tpl_vars['Result'];  echo '<br/>';  echo $this->_tpl_vars['Reward'];  echo '';  endif;  echo '';  else:  echo '';  if ($this->_tpl_vars['Arena'] == 'Z'):  echo '';  echo @ARENA_Z_INFO;  echo '';  else:  echo '';  echo @ARENA_M_INFO;  echo '';  endif;  echo '<br/><br/><form method="post" action="core.php?view=arena&amp;action=fight">';  echo @CHOOSE_YOUR;  echo '<br/><select name="my">';  unset($this->_sections['foo']);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['loop'] = is_array($_loop=$this->_tpl_vars['Namelist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['show'] = true;
$this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
$this->_sections['foo']['step'] = 1;
$this->_sections['foo']['start'] = $this->_sections['foo']['step'] > 0 ? 0 : $this->_sections['foo']['loop']-1;
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = $this->_sections['foo']['loop'];
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Idlist'][$this->_sections['foo']['index']];  echo '">';  echo $this->_tpl_vars['Namelist'][$this->_sections['foo']['index']];  echo ' :: ';  echo $this->_tpl_vars['Attacklist'][$this->_sections['foo']['index']];  echo ', ';  echo $this->_tpl_vars['Defencelist'][$this->_sections['foo']['index']];  echo ', ';  echo $this->_tpl_vars['Speedlist'][$this->_sections['foo']['index']];  echo ' :: ';  echo $this->_tpl_vars['Hplist'][$this->_sections['foo']['index']];  echo '</option>';  endfor; endif;  echo '</select><br/><br/>';  echo @CHOOSE_OPPONENT;  echo '<br/><select name="opponent">';  unset($this->_sections['foo']);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['loop'] = is_array($_loop=$this->_tpl_vars['ONamelist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['show'] = true;
$this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
$this->_sections['foo']['step'] = 1;
$this->_sections['foo']['start'] = $this->_sections['foo']['step'] > 0 ? 0 : $this->_sections['foo']['loop']-1;
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = $this->_sections['foo']['loop'];
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
 echo '<option value="';  echo $this->_tpl_vars['OIdlist'][$this->_sections['foo']['index']];  echo '">';  echo $this->_tpl_vars['ONamelist'][$this->_sections['foo']['index']];  echo ' :: ';  echo $this->_tpl_vars['OOwnerlist'][$this->_sections['foo']['index']];  echo ' (';  echo $this->_tpl_vars['OOwneridlist'][$this->_sections['foo']['index']];  echo ')</option>';  endfor; endif;  echo '</select><br/><br/><input type="submit" value="';  echo @DO_FIGHT;  echo '"/></form>';  endif;  echo '<br/><br/><a href="core.php">';  echo @BACK;  echo '</a>';  elseif ($this->_tpl_vars['view'] == 'train'):  echo '';  echo @TRAIN_INFO;  echo '<br/>';  if ($this->_tpl_vars['Namelist'] != ""):  echo '<br/>';  echo @TRAIN_TEXT;  echo '<form method="post" action="core.php?view=train"><select name="id">';  unset($this->_sections['foo']);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['loop'] = is_array($_loop=$this->_tpl_vars['Namelist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['show'] = true;
$this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
$this->_sections['foo']['step'] = 1;
$this->_sections['foo']['start'] = $this->_sections['foo']['step'] > 0 ? 0 : $this->_sections['foo']['loop']-1;
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = $this->_sections['foo']['loop'];
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
 echo '<option value="';  echo $this->_tpl_vars['Idlist'][$this->_sections['foo']['index']];  echo '">';  echo $this->_tpl_vars['Namelist'][$this->_sections['foo']['index']];  echo ' :: ';  echo $this->_tpl_vars['Attacklist'][$this->_sections['foo']['index']];  echo ', ';  echo $this->_tpl_vars['Defencelist'][$this->_sections['foo']['index']];  echo ', ';  echo $this->_tpl_vars['Speedlist'][$this->_sections['foo']['index']];  echo ' :: ';  echo $this->_tpl_vars['Hplist'][$this->_sections['foo']['index']];  echo '</option>';  endfor; endif;  echo '</select><br/><input type="submit" value="';  echo @A_TRAIN;  echo '" /></form>';  elseif ($this->_tpl_vars['Cost'] != ""):  echo '<br/>';  echo $this->_tpl_vars['Cost'];  echo '<br/>';  echo @YOU_CAN_TRAIN;  echo ' ';  echo $this->_tpl_vars['Corename'];  echo ' <b>';  echo $this->_tpl_vars['Maxtries'];  echo '</b> ';  echo @TIMES;  echo '<br/><form method="POST" action="core.php?view=train"><input type="hidden" name="id" value="';  echo $this->_tpl_vars['Coreid'];  echo '"/><input type="submit" value="';  echo @A_TRAIN;  echo '"/><select name="stat"><option value="A">';  echo @C_ATTACK;  echo '</option><option value="D">';  echo @C_DEFENCE;  echo '</option><option value="S">';  echo @C_SPEED;  echo '</option></select><input time="text" name="times"/> ';  echo @TIMES;  echo '</form>';  elseif ($this->_tpl_vars['Trained'] == 'Y'):  echo '<br/>';  echo @YOU_TRAINED;  echo ' <b>';  echo $this->_tpl_vars['Gainstat'];  echo '</b> ';  echo $this->_tpl_vars['Stat'];  echo ' <br/>';  if ($this->_tpl_vars['Gainbreed'] > 0):  echo '';  echo @YOU_GOT;  echo ' <b>';  echo $this->_tpl_vars['Gainbreed'];  echo '</b> ';  echo @BREEDING;  echo '';  if ($this->_tpl_vars['GainExp'] > 0):  echo ', <b>';  echo $this->_tpl_vars['GainExp'];  echo '</b> ';  echo @EXPERIENCE;  echo '';  endif;  echo '';  endif;  echo '<br/><br/>';  echo @YOU_PAID;  echo '';  if ($this->_tpl_vars['Adamantium'] > 0):  echo '&nbsp;<b>';  echo $this->_tpl_vars['Adamantium'];  echo '</b> ';  echo @ADAMANTIUM;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Crystal'] > 0):  echo '&nbsp;<b>';  echo $this->_tpl_vars['Crystal'];  echo '</b> ';  echo @CRYSTAL;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Platinum'] > 0):  echo '&nbsp;<b>';  echo $this->_tpl_vars['Platinum'];  echo '</b> ';  echo @PLATINUM;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Energy'] > 0):  echo '&nbsp;<b>';  echo $this->_tpl_vars['Energy'];  echo '</b> ';  echo @ENERGY;  echo '';  endif;  echo '';  endif;  echo '<br/><br/><a href="core.php">';  echo @BACK;  echo '</a>';  elseif ($this->_tpl_vars['view'] == 'breed'):  echo '';  echo @BREED_INFO;  echo '<br/><br/>';  if ($this->_tpl_vars['Result'] == "" && $this->_tpl_vars['Choosen'] == ""):  echo '<form method="post" action="core.php?view=breed">';  echo @CROSS_CORE;  echo '<br/><select name="maleid">';  unset($this->_sections['foo']);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['loop'] = is_array($_loop=$this->_tpl_vars['MaleNamelist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['show'] = true;
$this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
$this->_sections['foo']['step'] = 1;
$this->_sections['foo']['start'] = $this->_sections['foo']['step'] > 0 ? 0 : $this->_sections['foo']['loop']-1;
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = $this->_sections['foo']['loop'];
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
 echo '<option value="';  echo $this->_tpl_vars['MaleIdlist'][$this->_sections['foo']['index']];  echo '">';  echo $this->_tpl_vars['MaleNamelist'][$this->_sections['foo']['index']];  echo ' :: ';  echo $this->_tpl_vars['MaleAttacklist'][$this->_sections['foo']['index']];  echo ', ';  echo $this->_tpl_vars['MaleDefencelist'][$this->_sections['foo']['index']];  echo ', ';  echo $this->_tpl_vars['MaleSpeedlist'][$this->_sections['foo']['index']];  echo ' :: ';  echo $this->_tpl_vars['MaleHplist'][$this->_sections['foo']['index']];  echo '</option>';  endfor; endif;  echo '</select><br/>';  echo @WITH_CORE;  echo '<br/><select name="femaleid">';  unset($this->_sections['foo']);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['loop'] = is_array($_loop=$this->_tpl_vars['FemaleNamelist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['show'] = true;
$this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
$this->_sections['foo']['step'] = 1;
$this->_sections['foo']['start'] = $this->_sections['foo']['step'] > 0 ? 0 : $this->_sections['foo']['loop']-1;
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = $this->_sections['foo']['loop'];
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
 echo '<option value="';  echo $this->_tpl_vars['FemaleIdlist'][$this->_sections['foo']['index']];  echo '">';  echo $this->_tpl_vars['FemaleNamelist'][$this->_sections['foo']['index']];  echo ' :: ';  echo $this->_tpl_vars['FemaleAttacklist'][$this->_sections['foo']['index']];  echo ', ';  echo $this->_tpl_vars['FemaleDefencelist'][$this->_sections['foo']['index']];  echo ', ';  echo $this->_tpl_vars['FemaleSpeedlist'][$this->_sections['foo']['index']];  echo ' :: ';  echo $this->_tpl_vars['FemaleHplist'][$this->_sections['foo']['index']];  echo '</option>';  endfor; endif;  echo '</select><br/><input type="submit" value="';  echo @A_CROSS;  echo '"/></form>';  elseif ($this->_tpl_vars['Result'] == ""):  echo '';  echo @CROSS_CORE;  echo '<br/><b>';  echo $this->_tpl_vars['Malename'];  echo '</b> <br/> ';  echo @C_ATTACK;  echo ' <b>';  echo $this->_tpl_vars['Maleattack'];  echo '</b>, ';  echo @C_DEFENCE;  echo ' <b>';  echo $this->_tpl_vars['Maledefence'];  echo '</b>, ';  echo @C_SPEED;  echo ' <b>';  echo $this->_tpl_vars['Malespeed'];  echo '</b> <br/> ';  echo @C_HP;  echo ' <b>';  echo $this->_tpl_vars['Malehp'];  echo '</b> <br/><br/>';  echo @WITH_CORE;  echo '<br/><b>';  echo $this->_tpl_vars['Femalename'];  echo '</b> <br/> ';  echo @C_ATTACK;  echo ' <b>';  echo $this->_tpl_vars['Femaleattack'];  echo '</b>, ';  echo @C_DEFENCE;  echo ' <b>';  echo $this->_tpl_vars['Femaledefence'];  echo '</b>, ';  echo @C_SPEED;  echo ' <b>';  echo $this->_tpl_vars['Femalespeed'];  echo '</b> <br/> ';  echo @C_HP;  echo ' <b>';  echo $this->_tpl_vars['Femalehp'];  echo '</b> <br/><br/>';  echo @YOU_PAY;  echo ' <b>';  echo $this->_tpl_vars['Platinumcost'];  echo '</b> ';  echo @PLATINUM;  echo ' <b>';  echo $this->_tpl_vars['Adamantiumcost'];  echo '</b> ';  echo @ADAMANTIUM;  echo ' <b>';  echo $this->_tpl_vars['Crystalcost'];  echo '</b> ';  echo @CRYSTAL;  echo '';  if ($this->_tpl_vars['Meteorcost'] > 0):  echo '&nbsp;<b>';  echo $this->_tpl_vars['Meteorcost'];  echo '</b> ';  echo @METEOR;  echo '';  endif;  echo '<br/>';  echo @YOU_NEED;  echo ' <b>';  echo $this->_tpl_vars['Energycost'];  echo '</b> ';  echo @ENERGY;  echo '<br/>';  if ($this->_tpl_vars['Nominerals'] == ""):  echo '';  if ($this->_tpl_vars['Noenergy'] == ""):  echo '<form method="post" action="core.php?view=breed"><input type="hidden" name="maleid" value="';  echo $this->_tpl_vars['Maleid'];  echo '"/><input type="hidden" name="femaleid" value="';  echo $this->_tpl_vars['Femaleid'];  echo '"/><input type="hidden" name="cross" value="Y"/><input type="submit" value="';  echo @A_CROSS;  echo '"/></form>';  else:  echo '<br/>';  echo $this->_tpl_vars['Noenergy'];  echo '';  endif;  echo '';  else:  echo '<br/>';  echo $this->_tpl_vars['Nominerals'];  echo '';  endif;  echo '';  else:  echo '';  echo $this->_tpl_vars['Result'];  echo '<br/><br/>';  echo @YOU_GOT;  echo ' <b>';  echo $this->_tpl_vars['Gainbreed'];  echo '</b> ';  echo @BREEDING;  echo '';  if ($this->_tpl_vars['GainExp'] > 0):  echo ', <b>';  echo $this->_tpl_vars['GainExp'];  echo '</b> ';  echo @EXPERIENCE;  echo '';  endif;  echo '';  endif;  echo '<br/><br/><br/><a href="core.php">';  echo @BACK;  echo '</a>';  elseif ($this->_tpl_vars['view'] == 'monuments'):  echo '';  if ($this->_tpl_vars['Normalcores'] != ""):  echo '<fieldset style="width: 70%; margin:auto;"><legend align="center" class="monlegend">';  echo @NORMAL_TITLE;  echo '</legend><table width="100%"><tr><th width="50%" class="montitle">';  echo @NAME;  echo '</th><th width="30%" class="montitle">';  echo @USER;  echo '</th><th width="20%" class="montitle">';  echo @WINS;  echo '</th></tr>';  unset($this->_sections['foo']);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['loop'] = is_array($_loop=$this->_tpl_vars['Normalname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['show'] = true;
$this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
$this->_sections['foo']['step'] = 1;
$this->_sections['foo']['start'] = $this->_sections['foo']['step'] > 0 ? 0 : $this->_sections['foo']['loop']-1;
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = $this->_sections['foo']['loop'];
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
 echo '<tr class="';  echo smarty_function_cycle(array('values' => "mon1,mon2"), $this); echo '"><td>';  echo $this->_tpl_vars['Normalname'][$this->_sections['foo']['index']];  echo '</td><td><a href="view.php?view=';  echo $this->_tpl_vars['Normalid'][$this->_sections['foo']['index']];  echo '">';  echo $this->_tpl_vars['Normaluser'][$this->_sections['foo']['index']];  echo '</a></td><td align="right">';  echo $this->_tpl_vars['Normalwins'][$this->_sections['foo']['index']];  echo '</td></tr>';  endfor; endif;  echo '</table></fieldset>';  endif;  echo '<br/>';  if ($this->_tpl_vars['Magiccores'] != ""):  echo '<fieldset style="width: 70%; margin:auto;"><legend align="center" class="monlegend">';  echo @MAGIC_TITLE;  echo '</legend><table width="100%"><tr><th width="50%" class="montitle">';  echo @NAME;  echo '</th><th width="30%" class="montitle">';  echo @USER;  echo '</th><th width="20%" class="montitle">';  echo @WINS;  echo '</th></tr>';  unset($this->_sections['foo']);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['loop'] = is_array($_loop=$this->_tpl_vars['Magicname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['show'] = true;
$this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
$this->_sections['foo']['step'] = 1;
$this->_sections['foo']['start'] = $this->_sections['foo']['step'] > 0 ? 0 : $this->_sections['foo']['loop']-1;
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = $this->_sections['foo']['loop'];
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
 echo '<tr class="';  echo smarty_function_cycle(array('values' => "mon1,mon2"), $this); echo '"><td>';  echo $this->_tpl_vars['Magicname'][$this->_sections['foo']['index']];  echo '</td><td><a href="view.php?view=';  echo $this->_tpl_vars['Normalid'][$this->_sections['foo']['index']];  echo '">';  echo $this->_tpl_vars['Magicuser'][$this->_sections['foo']['index']];  echo '</a></td><td align="right">';  echo $this->_tpl_vars['Magicwins'][$this->_sections['foo']['index']];  echo '</td></tr>';  endfor; endif;  echo '</table></fieldset>';  endif;  echo '<br/><br/><a href="core.php">';  echo @BACK;  echo '</a>';  endif;  echo '';  endif;  echo ''; ?>
