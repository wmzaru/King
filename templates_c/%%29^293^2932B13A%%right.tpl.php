<?php /* Smarty version 2.6.16, created on 2012-07-09 22:58:04
         compiled from right.tpl */ ?>
<div id="right"><div class="topmenu"></div><div class="submenu">
            <div class="imghead"><img src="" alt="img_Lista graczy w grze" width="103" height="30" /></div>
            <div>
<?php unset($this->_sections['players']);
$this->_sections['players']['name'] = 'players';
$this->_sections['players']['loop'] = is_array($_loop=$this->_tpl_vars['List']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['players']['show'] = true;
$this->_sections['players']['max'] = $this->_sections['players']['loop'];
$this->_sections['players']['step'] = 1;
$this->_sections['players']['start'] = $this->_sections['players']['step'] > 0 ? 0 : $this->_sections['players']['loop']-1;
if ($this->_sections['players']['show']) {
    $this->_sections['players']['total'] = $this->_sections['players']['loop'];
    if ($this->_sections['players']['total'] == 0)
        $this->_sections['players']['show'] = false;
} else
    $this->_sections['players']['total'] = 0;
if ($this->_sections['players']['show']):

            for ($this->_sections['players']['index'] = $this->_sections['players']['start'], $this->_sections['players']['iteration'] = 1;
                 $this->_sections['players']['iteration'] <= $this->_sections['players']['total'];
                 $this->_sections['players']['index'] += $this->_sections['players']['step'], $this->_sections['players']['iteration']++):
$this->_sections['players']['rownum'] = $this->_sections['players']['iteration'];
$this->_sections['players']['index_prev'] = $this->_sections['players']['index'] - $this->_sections['players']['step'];
$this->_sections['players']['index_next'] = $this->_sections['players']['index'] + $this->_sections['players']['step'];
$this->_sections['players']['first']      = ($this->_sections['players']['iteration'] == 1);
$this->_sections['players']['last']       = ($this->_sections['players']['iteration'] == $this->_sections['players']['total']);
 echo $this->_tpl_vars['List'][$this->_sections['players']['index']]; ?>

<?php endfor; endif;  if ($this->_tpl_vars['Online'] == 0):  echo @NOPLAYERS;  endif; ?></div></div><div class="bottommenu"></div></div>