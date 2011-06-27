<?php /* Smarty version 2.6.26, created on 2011-06-27 15:00:37
         compiled from CRM/common/TabHeader.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/common/TabHeader.tpl', 36, false),)), $this); ?>

	
<div class="crm-block crm-content-block">

<?php if ($this->_tpl_vars['tabHeader'] && count ( $this->_tpl_vars['tabHeader'] ) > 1): ?>
<div id="mainTabContainer">
<ul>
   <?php $_from = $this->_tpl_vars['tabHeader']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tabName'] => $this->_tpl_vars['tabValue']):
?>
      <li id="tab_<?php echo $this->_tpl_vars['tabName']; ?>
" class="crm-tab-button ui-corner-all <?php if (! $this->_tpl_vars['tabValue']['valid']): ?>disabled<?php endif; ?>">
      <?php if ($this->_tpl_vars['tabValue']['link'] && $this->_tpl_vars['tabValue']['active']): ?>
         <a href="<?php echo $this->_tpl_vars['tabValue']['link']; ?>
" title="<?php echo $this->_tpl_vars['tabValue']['title']; ?>
<?php if (! $this->_tpl_vars['tabValue']['valid']): ?> (<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>disabled<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)<?php endif; ?>"><?php echo $this->_tpl_vars['tabValue']['title']; ?>
</a>
      <?php else: ?>
         <span <?php if (! $this->_tpl_vars['tabValue']['valid']): ?>title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>disabled<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php endif; ?>><?php echo $this->_tpl_vars['tabValue']['title']; ?>
</span>
      <?php endif; ?>
      </li>
   <?php endforeach; endif; unset($_from); ?>
</ul>
</div>
<?php endif; ?>


<script type="text/javascript"> 
   var selectedTab = 'EventInfo';
   <?php if ($this->_tpl_vars['selectedTab']): ?>selectedTab = "<?php echo $this->_tpl_vars['selectedTab']; ?>
";<?php endif; ?>
   var spinnerImage = '<img src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
i/loading.gif" style="width:10px;height:10px"/>';    
<?php echo '
//explicitly stop spinner
function stopSpinner( ) {
 cj(\'li.crm-tab-button\').each(function(){ cj(this).find(\'span\').text(\' \');})	 
}

    cj( function() {
        var tabIndex = cj(\'#tab_\' + selectedTab).prevAll().length
        cj("#mainTabContainer").tabs( {
            selected: tabIndex,
            spinner: spinnerImage,
            select: function(event, ui) {
                // we need to change the action of parent form, so that form submits to correct page
                var url = cj.data(ui.tab, \'load.tabs\');
                '; ?>
<?php if ($this->_tpl_vars['config']->userFramework == 'Drupal'): ?><?php echo '
                    var actionUrl = url.split( \'?\' );
                    var actualUrl = actionUrl[0];
                '; ?>
<?php else: ?><?php echo '
                    var actionUrl = url.split( \'&\' );
                    var actualUrl = actionUrl[0] + \'&\' + actionUrl[1];
                '; ?>
<?php endif; ?><?php echo '

                cj(this).parents("form").attr("action", actualUrl )                
                
                if ( !global_formNavigate ) {
                    var message = \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Confirm\n\nAre you sure you want to navigate away from this tab?\n\nYou have unsaved changes.\n\nPress OK to continue, or Cancel to stay on the current tab.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\';
                    if ( !confirm( message ) ) {
                        return false;
                    } else {
                        global_formNavigate = true;
                    }
                }
                return true;
            },
            load: function(event, ui) {
            	stopSpinner();
            	if (Drupal && Drupal.attachBehaviors) {
            	 Drupal.attachBehaviors(ui.panel);
            	}
            }
        });        
    });
'; ?>

</script>

<div class="clear"></div>
</div> 