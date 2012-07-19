<?php /* Smarty version 2.6.16, created on 2012-07-09 22:58:03
         compiled from index.tpl */ ?>
<?php echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "head.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  if ($this->_tpl_vars['Step'] == ""):  echo '<div id="content"><div class="imgtitle"><img src="" alt="img_Prolog" /></div><hr/><div class="text">';  echo @PROLOG;  echo '</div><hr/><div class="imgtitle"><img src="" alt="img_Prolog" /></div><hr/><div class="text">';  echo @WHAT_IS;  echo ' ';  echo $this->_tpl_vars['Gamename'];  echo '? ';  echo @DESCRIPTION;  echo ' <a href="index.php?step=rules">';  echo @CODEX;  echo ' ';  echo $this->_tpl_vars['Gamename'];  echo '</a> ';  echo @CODEX2;  echo '';  echo $this->_tpl_vars['Codexdate'];  echo '';  echo @ADMIN;  echo ' ';  echo $this->_tpl_vars['Adminname'];  echo ' <a href="mailto:';  echo $this->_tpl_vars['Adminmail'];  echo '">';  echo $this->_tpl_vars['Adminmail1'];  echo '</a></div><br /><hr/><br /><br /><div class="newsimg"></div><br /><div class="news">';  echo $this->_tpl_vars['Update'];  echo '</div><br /><hr/></div><!-- <a href="index.php?lang=pl"><img src="" title="img_Polski" border="0" /></a><a href="index.php?lang=en"><img src="" title="img_English" border="0" /></a> -->';  endif;  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "right.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "foot.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>
