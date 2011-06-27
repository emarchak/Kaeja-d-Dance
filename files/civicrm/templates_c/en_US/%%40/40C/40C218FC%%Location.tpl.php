<?php /* Smarty version 2.6.26, created on 2011-06-27 15:00:39
         compiled from CRM/Event/Form/ManageEvent/Location.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Event/Form/ManageEvent/Location.tpl', 29, false),array('modifier', 'is_numeric', 'CRM/Event/Form/ManageEvent/Location.tpl', 46, false),array('modifier', 'crmReplace', 'CRM/Event/Form/ManageEvent/Location.tpl', 56, false),array('function', 'crmURL', 'CRM/Event/Form/ManageEvent/Location.tpl', 101, false),)), $this); ?>
<?php if (! $this->_tpl_vars['addBlock']): ?>
   <div id="help">
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use this form to configure the location and optional contact information for the event. This information will be displayed on the Event Information page. It will also be included in online registration pages and confirmation emails if these features are enabled.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
<?php endif; ?>
<div class="crm-block crm-form-block crm-event-manage-location-form-block">
<?php if ($this->_tpl_vars['addBlock']): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/".($this->_tpl_vars['blockName']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
<div class="crm-submit-buttons">
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
    <?php if ($this->_tpl_vars['locEvents']): ?>
    	<table class="form-layout-compressed">
			<tr id="optionType" class="crm-event-manage-location-form-block-location_option">
				<td class="labels">
					<?php echo $this->_tpl_vars['form']['location_option']['label']; ?>

				</td>
				<?php $_from = $this->_tpl_vars['form']['location_option']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('is_numeric', true, $_tmp) : is_numeric($_tmp))): ?>
						<td class="value"><strong><?php echo $this->_tpl_vars['item']['html']; ?>
</strong></td>
				    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?> 
			 </tr>
			<tr id="existingLoc" class="crm-event-manage-location-form-block-loc_event_id">
				<td class="labels">
					<?php echo $this->_tpl_vars['form']['loc_event_id']['label']; ?>

				</td>
				<td class="value" colspan="2">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['loc_event_id']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'huge') : smarty_modifier_crmReplace($_tmp, 'class', 'huge')); ?>

				</td>
			</tr>
			<tr>
				<td id="locUsedMsg" colspan="3">
				<?php $this->assign('locUsedMsgTxt', "<strong>Note:</strong> This location is used by multiple events. Modifying location information will change values for all events."); ?>
				</td>
			</tr>
			
		</table>
    <?php endif; ?>	

    

    <div id="newLocation">
      <h3>Address</h3>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/Address.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
	<table class="form-layout-compressed">
      
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/Email.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/Phone.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
    </table>
	 <table class="form-layout-compressed">
	 <tr class="crm-event-is_show_location">
		<td colspan="2"><?php echo $this->_tpl_vars['form']['is_show_location']['label']; ?>
</td>
		<td colspan="2">
			<?php echo $this->_tpl_vars['form']['is_show_location']['html']; ?>
<br />
			<span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Uncheck this box if you want to HIDE the event Address on Event Information and Registration pages as well as on email confirmations.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</td>
	</tr>
	</table>
<div class="crm-submit-buttons">
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
</div>
    
 
<?php if ($this->_tpl_vars['locEvents']): ?>
<script type="text/javascript">    
<?php echo '
var locUsedMsgTxt = '; ?>
"<?php echo $this->_tpl_vars['locUsedMsgTxt']; ?>
"<?php echo ';
var locBlockURL   = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/locBlock','q' => 'reset=1','h' => 0), $this);?>
"<?php echo ';
var locBlockId    = '; ?>
"<?php echo $this->_tpl_vars['form']['loc_event_id']['value']['0']; ?>
"<?php echo ';

if ( '; ?>
"<?php echo $this->_tpl_vars['locUsed']; ?>
"<?php echo ' ) {
   displayMessage( true );
}

cj(document).ready(function() {
  cj(\'#loc_event_id\').change(function() {
    cj.ajax({
      url: locBlockURL, 
      type: \'POST\',
      data: {\'lbid\': cj(this).val()},
      dataType: \'json\',
      success: function(data) {
        var selectLocBlockId = cj(\'#loc_event_id\').val();
        for(i in data) {
          if ( i == \'count_loc_used\' ) {
            if ( ((selectLocBlockId == locBlockId) && data[\'count_loc_used\'] > 1) || 
                 ((selectLocBlockId != locBlockId) && data[\'count_loc_used\'] > 0) ) {
              displayMessage( true );
            } else {
              displayMessage( false );
            }
          } else {
            cj(\'#\'+i).val(data[i]);
          }
        }
      }
    });
    return false;
  });
});

function displayMessage( set ) {
   cj(document).ready(function() {
     if ( set ) {
       cj(\'#locUsedMsg\').html( locUsedMsgTxt ).addClass(\'status\');
     } else {
       cj(\'#locUsedMsg\').html( \' \' ).removeClass(\'status\');
     }
   });
}

function showLocFields( ) {
   var createNew = document.getElementsByName("location_option")[0].checked;
   var useExisting = document.getElementsByName("location_option")[1].checked;
   if ( createNew ) {
     cj(\'#existingLoc\').hide();
     displayMessage(false);
   } else if ( useExisting ) {
     cj(\'#existingLoc\').show();
   }
}

showLocFields( );
'; ?>

</script>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/additionalBlocks.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formNavigate.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php endif; ?> 