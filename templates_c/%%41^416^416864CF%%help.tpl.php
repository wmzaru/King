<?php /* Smarty version 2.6.16, created on 2012-07-09 21:02:48
         compiled from help.tpl */ ?>
<?php echo '';  if (! isset ( $this->_tpl_vars['Page'] ) || empty ( $this->_tpl_vars['Page'] )):  echo '<p>';  echo @INFO;  echo '</p>';  else:  echo '<p>';  echo @constant($this->_tpl_vars['Page']);  echo '</p>';  endif;  echo '<a href="';  echo $this->_tpl_vars['BackLocation'];  echo '">';  echo @BACK;  echo '</a>'; ?>
