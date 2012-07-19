<?php /* Smarty version 2.6.16, created on 2012-07-10 01:46:11
         compiled from farm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'farm.tpl', 57, false),)), $this); ?>
<?php if ($this->_tpl_vars['Step'] == ""): ?>
    <?php echo $this->_tpl_vars['Farminfo']; ?>
<ul>
    <li> <a href="farm.php?step=plantation"><?php echo $this->_tpl_vars['Aplantation']; ?>
</a></li>
    <li> <a href="farm.php?step=house"><?php echo $this->_tpl_vars['Ahouse']; ?>
</a></li>
    <li> <a href="farm.php?step=herbsinfo"><?php echo $this->_tpl_vars['Aencyclopedia']; ?>
</a></li>
    </ul>
<?php endif; ?>

<?php if ($this->_tpl_vars['Step'] == 'herbsinfo'): ?>
    <b><?php echo $this->_tpl_vars['Herbsinfo']; ?>
</b><br /><br />
    <ul>
        <li><?php echo $this->_tpl_vars['Ilaniinfo']; ?>
<br /><br /></li>
        <li><?php echo $this->_tpl_vars['Illaniasinfo']; ?>
<br /><br /></li>
        <li><?php echo $this->_tpl_vars['Nutariinfo']; ?>
<br /><br /></li>
        <li><?php echo $this->_tpl_vars['Dynallcainfo']; ?>
<br /><br /></li>
    </ul><br />
<?php endif; ?>

<?php if ($this->_tpl_vars['Step'] == 'house'): ?>
    <?php echo $this->_tpl_vars['Houseinfo']; ?>
<br /><br />
    <form method="post" action="farm.php?step=house&amp;action=dry">
        <input type="submit" value="<?php echo $this->_tpl_vars['Adry']; ?>
" /> <select name="herb">
            <?php unset($this->_sections['farm']);
$this->_sections['farm']['name'] = 'farm';
$this->_sections['farm']['loop'] = is_array($_loop=$this->_tpl_vars['Herbsname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['farm']['show'] = true;
$this->_sections['farm']['max'] = $this->_sections['farm']['loop'];
$this->_sections['farm']['step'] = 1;
$this->_sections['farm']['start'] = $this->_sections['farm']['step'] > 0 ? 0 : $this->_sections['farm']['loop']-1;
if ($this->_sections['farm']['show']) {
    $this->_sections['farm']['total'] = $this->_sections['farm']['loop'];
    if ($this->_sections['farm']['total'] == 0)
        $this->_sections['farm']['show'] = false;
} else
    $this->_sections['farm']['total'] = 0;
if ($this->_sections['farm']['show']):

            for ($this->_sections['farm']['index'] = $this->_sections['farm']['start'], $this->_sections['farm']['iteration'] = 1;
                 $this->_sections['farm']['iteration'] <= $this->_sections['farm']['total'];
                 $this->_sections['farm']['index'] += $this->_sections['farm']['step'], $this->_sections['farm']['iteration']++):
$this->_sections['farm']['rownum'] = $this->_sections['farm']['iteration'];
$this->_sections['farm']['index_prev'] = $this->_sections['farm']['index'] - $this->_sections['farm']['step'];
$this->_sections['farm']['index_next'] = $this->_sections['farm']['index'] + $this->_sections['farm']['step'];
$this->_sections['farm']['first']      = ($this->_sections['farm']['iteration'] == 1);
$this->_sections['farm']['last']       = ($this->_sections['farm']['iteration'] == $this->_sections['farm']['total']);
?>
                <option value="<?php echo $this->_tpl_vars['Herbsoption'][$this->_sections['farm']['index']]; ?>
"><?php echo $this->_tpl_vars['Herbsname'][$this->_sections['farm']['index']]; ?>
 <?php echo $this->_tpl_vars['Tamount']; ?>
 <?php echo $this->_tpl_vars['Herbsamount'][$this->_sections['farm']['index']]; ?>
</option>
            <?php endfor; endif; ?>
        </select> <?php echo $this->_tpl_vars['Tdry']; ?>
 <input type="text" name="amount" size="5" /> <?php echo $this->_tpl_vars['Tpack']; ?>
.
    </form>
    <?php if ($this->_tpl_vars['Action'] == 'dry'): ?>
        <br /><?php echo $this->_tpl_vars['Message']; ?>

    <?php endif;  endif; ?>

<?php if ($this->_tpl_vars['Step'] == 'plantation'): ?>
    <?php if ($this->_tpl_vars['Action'] == ""): ?>
        <?php echo $this->_tpl_vars['Farminfo']; ?>
<br /><br />
        <a href="farm.php?step=plantation&amp;action=upgrade"><?php echo $this->_tpl_vars['Aupgrade']; ?>
</a><br />
        <?php if ($this->_tpl_vars['Lands'] != ""): ?>
            <a href="farm.php?step=plantation&amp;action=sow"><?php echo $this->_tpl_vars['Asow']; ?>
</a><br />
            <a href="farm.php?step=plantation&amp;action=chop"><?php echo $this->_tpl_vars['Achop']; ?>
</a>
        <?php endif; ?>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['Action'] == 'upgrade'): ?>
    	<?php echo $this->_tpl_vars['Message']; ?>

		<fieldset><legend><?php echo $this->_tpl_vars['Upgradeinfo']; ?>
</legend>
		<?php if ($this->_tpl_vars['Lands'] == ""): ?>
			<a href="farm.php?step=plantation&amp;action=upgrade&amp;buy=L"><?php echo $this->_tpl_vars['Buyland']; ?>
 - <?php echo $this->_tpl_vars['Buylandcost']; ?>
 <?php echo $this->_tpl_vars['Tmith']; ?>
</a>
		<?php else: ?>
			<table>
				<tr>
				<?php if ($this->_tpl_vars['noMithril']): ?>
				    <td colspan="2"><?php echo $this->_tpl_vars['noMithril']; ?>
</td>
    	    	<?php else: ?>
					<td width="180px;"><?php echo $this->_tpl_vars['Buyland']; ?>
</td>
					<td>
						<form method="post" action="farm.php?step=plantation&amp;action=upgrade&amp;buy=L">
            				<input type="submit" value="<?php echo $this->_tpl_vars['Field']; ?>
"/> <?php echo smarty_function_html_options(array('name' => 'amount','options' => $this->_tpl_vars['FarmLevels']), $this);?>

            			</form>
            		</td>
            	<?php endif; ?>
            	</tr>
    	    	<tr>
    	    	<?php if ($this->_tpl_vars['noGlass']): ?>
    	    		<td colspan="2"><?php echo $this->_tpl_vars['noGlassSpace']; ?>
</td>
    	    	<?php else: ?>
    	    		<td width="180px;"><?php echo $this->_tpl_vars['Buyglass']; ?>
</td>
    	    		<td>
    	    			<form method="post" action="farm.php?step=plantation&amp;action=upgrade&amp;buy=G">
            				<input type="submit" value="<?php echo $this->_tpl_vars['Glass']; ?>
"/> <?php echo smarty_function_html_options(array('name' => 'amount','options' => $this->_tpl_vars['GlassLevels']), $this);?>

            			</form>
            		</td>
    	    	<?php endif; ?>
    	    	</tr>
    	    	<tr>
    	    	<?php if ($this->_tpl_vars['noIrrigation']): ?>
    	    		<td colspan="2"><?php echo $this->_tpl_vars['noIrrigationSpace']; ?>
</td>
    	    	<?php else: ?>
    	    		<td width="180px;"><?php echo $this->_tpl_vars['Buyirrigation']; ?>

					<td>
						<form method="post" action="farm.php?step=plantation&amp;action=upgrade&amp;buy=I">
            		 		<input type="submit" value="<?php echo $this->_tpl_vars['Irrigation']; ?>
"/> <?php echo smarty_function_html_options(array('name' => 'amount','options' => $this->_tpl_vars['IrrigationLevels']), $this);?>

            			</form>
            		</td>
    	    	<?php endif; ?>
    	    	</tr>
    	    	<tr>
    	    	<?php if ($this->_tpl_vars['noCreeper']): ?>
    	    		<td colspan="2"><?php echo $this->_tpl_vars['noCreeperSpace']; ?>
</td>
    	    	<?php else: ?>
    	    		<td width="180px;"><?php echo $this->_tpl_vars['Buycreeper']; ?>
</td>
					<td>
						<form method="post" action="farm.php?step=plantation&amp;action=upgrade&amp;buy=C">
            		 		<input type="submit" value="<?php echo $this->_tpl_vars['Creeper']; ?>
"/> <?php echo smarty_function_html_options(array('name' => 'amount','options' => $this->_tpl_vars['CreeperLevels']), $this);?>

            			</form>
            		</td>
    	    	<?php endif; ?>
    	    	</tr>
    	    
    	    </table>
		<?php endif; ?>
        </fieldset>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['Action'] == 'sow'): ?>
        <?php echo $this->_tpl_vars['Sawinfo']; ?>
<br /><br />
        <fieldset>
        	<legend><?php echo $this->_tpl_vars['FarmInfo']; ?>
</legend>
    	    <?php echo $this->_tpl_vars['Ilands']; ?>
 <b><?php echo $this->_tpl_vars['Lands']; ?>
</b><br />
	        <?php echo $this->_tpl_vars['Ifreelands']; ?>
 <b><?php echo $this->_tpl_vars['Freelands']; ?>
</b><br />
        	<?php echo $this->_tpl_vars['Iglass']; ?>
 <b><?php echo $this->_tpl_vars['Glasshouse']; ?>
</b><br />
    	    <?php echo $this->_tpl_vars['Iirrigation']; ?>
 <b><?php echo $this->_tpl_vars['Irrigation']; ?>
</b><br />
	        <?php echo $this->_tpl_vars['Icreeper']; ?>
 <b><?php echo $this->_tpl_vars['Creeper']; ?>
</b>
        </fieldset>
        <br>
        <form method="post" action="farm.php?step=plantation&amp;action=sow&amp;step2=next">
            <input type="submit" value="<?php echo $this->_tpl_vars['Asaw']; ?>
" /> <input type="text" name="amount" size="5" /> <?php echo $this->_tpl_vars['Tlands']; ?>
 <select name="seeds">
                <?php unset($this->_sections['farm2']);
$this->_sections['farm2']['name'] = 'farm2';
$this->_sections['farm2']['loop'] = is_array($_loop=$this->_tpl_vars['Seedsname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['farm2']['show'] = true;
$this->_sections['farm2']['max'] = $this->_sections['farm2']['loop'];
$this->_sections['farm2']['step'] = 1;
$this->_sections['farm2']['start'] = $this->_sections['farm2']['step'] > 0 ? 0 : $this->_sections['farm2']['loop']-1;
if ($this->_sections['farm2']['show']) {
    $this->_sections['farm2']['total'] = $this->_sections['farm2']['loop'];
    if ($this->_sections['farm2']['total'] == 0)
        $this->_sections['farm2']['show'] = false;
} else
    $this->_sections['farm2']['total'] = 0;
if ($this->_sections['farm2']['show']):

            for ($this->_sections['farm2']['index'] = $this->_sections['farm2']['start'], $this->_sections['farm2']['iteration'] = 1;
                 $this->_sections['farm2']['iteration'] <= $this->_sections['farm2']['total'];
                 $this->_sections['farm2']['index'] += $this->_sections['farm2']['step'], $this->_sections['farm2']['iteration']++):
$this->_sections['farm2']['rownum'] = $this->_sections['farm2']['iteration'];
$this->_sections['farm2']['index_prev'] = $this->_sections['farm2']['index'] - $this->_sections['farm2']['step'];
$this->_sections['farm2']['index_next'] = $this->_sections['farm2']['index'] + $this->_sections['farm2']['step'];
$this->_sections['farm2']['first']      = ($this->_sections['farm2']['iteration'] == 1);
$this->_sections['farm2']['last']       = ($this->_sections['farm2']['iteration'] == $this->_sections['farm2']['total']);
?>
                    <option value="<?php echo $this->_tpl_vars['Seedsoption'][$this->_sections['farm2']['index']]; ?>
"><?php echo $this->_tpl_vars['Seedsname'][$this->_sections['farm2']['index']]; ?>
 <?php echo $this->_tpl_vars['Tamount']; ?>
 <?php echo $this->_tpl_vars['Seedsamount'][$this->_sections['farm2']['index']]; ?>
</option>
                <?php endfor; endif; ?>
            </select>
        </form><br />
        <?php echo $this->_tpl_vars['Message']; ?>
<br>
        <a href="farm.php?step=plantation&action=sow"><?php echo $this->_tpl_vars['Refresh']; ?>
</a>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['Action'] == 'chop'): ?>
        <?php echo $this->_tpl_vars['Chopinfo']; ?>
<br /><br />
        <fieldset>
        	<legend><?php echo $this->_tpl_vars['FarmInfo']; ?>
</legend>
        	<?php unset($this->_sections['farm3']);
$this->_sections['farm3']['name'] = 'farm3';
$this->_sections['farm3']['loop'] = is_array($_loop=$this->_tpl_vars['Herbsname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['farm3']['show'] = true;
$this->_sections['farm3']['max'] = $this->_sections['farm3']['loop'];
$this->_sections['farm3']['step'] = 1;
$this->_sections['farm3']['start'] = $this->_sections['farm3']['step'] > 0 ? 0 : $this->_sections['farm3']['loop']-1;
if ($this->_sections['farm3']['show']) {
    $this->_sections['farm3']['total'] = $this->_sections['farm3']['loop'];
    if ($this->_sections['farm3']['total'] == 0)
        $this->_sections['farm3']['show'] = false;
} else
    $this->_sections['farm3']['total'] = 0;
if ($this->_sections['farm3']['show']):

            for ($this->_sections['farm3']['index'] = $this->_sections['farm3']['start'], $this->_sections['farm3']['iteration'] = 1;
                 $this->_sections['farm3']['iteration'] <= $this->_sections['farm3']['total'];
                 $this->_sections['farm3']['index'] += $this->_sections['farm3']['step'], $this->_sections['farm3']['iteration']++):
$this->_sections['farm3']['rownum'] = $this->_sections['farm3']['iteration'];
$this->_sections['farm3']['index_prev'] = $this->_sections['farm3']['index'] - $this->_sections['farm3']['step'];
$this->_sections['farm3']['index_next'] = $this->_sections['farm3']['index'] + $this->_sections['farm3']['step'];
$this->_sections['farm3']['first']      = ($this->_sections['farm3']['iteration'] == 1);
$this->_sections['farm3']['last']       = ($this->_sections['farm3']['iteration'] == $this->_sections['farm3']['total']);
?>
            	- <a href="farm.php?step=plantation&amp;action=chop&amp;id=<?php echo $this->_tpl_vars['Herbsid'][$this->_sections['farm3']['index']]; ?>
"><?php echo $this->_tpl_vars['Herbsname'][$this->_sections['farm3']['index']]; ?>
</a> <?php echo $this->_tpl_vars['Tamount']; ?>
 <?php echo $this->_tpl_vars['Herbsamount'][$this->_sections['farm3']['index']]; ?>
 <?php echo $this->_tpl_vars['Tage']; ?>
 <?php echo $this->_tpl_vars['Herbsage'][$this->_sections['farm3']['index']]; ?>
<br />
        	<?php endfor; endif; ?>
        </fieldset>
        <?php if ($this->_tpl_vars['Herbid'] != '0'): ?>
            <br /><br /><br />
            <form method="post" action="farm.php?step=plantation&amp;action=chop&amp;id=<?php echo $this->_tpl_vars['Herbid']; ?>
&amp;step2=next">
                <input type="submit" value="<?php echo $this->_tpl_vars['Agather']; ?>
" /> <?php echo $this->_tpl_vars['Herbname']; ?>
 <?php echo $this->_tpl_vars['Froma']; ?>
 <input type="text" name="amount" size="5" /> <?php echo $this->_tpl_vars['Tlands3']; ?>

            </form>
        <?php endif; ?>
        <?php echo $this->_tpl_vars['Message']; ?>

    <?php endif;  endif; ?>

<?php if ($this->_tpl_vars['Step'] != ""): ?>
    <br /><br />(<a href="farm.php"><?php echo $this->_tpl_vars['Aback']; ?>
</a>)
<?php endif; ?>