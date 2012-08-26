<style>

.narro_context_info_editor {
    background: url("assets/images/bg_td1.jpg") repeat-x scroll 0 0 #FFFFFF;
    border: 1px solid #DEDEDE;
    padding: 5px;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    box-shadow: 2px 2px 1px #888;
    -moz-box-shadow: 2px 2px 1px #888;
    -webkit-box-shadow: 2px 2px 1px #888;
    margin-bottom: 10px;
}

.narro_context_info_editor_selected  {
    background: #D0FAD0 url(assets/images/bg_td3.jpg) repeat-x;
}

.narro_context_info_editor pre {
    margin: 0;
    white-space: normal;
}

.narro_context_info_editor .index {
    background: url("assets/images/bg_td1.jpg") repeat-x scroll 0 0 #FFFFFF;
    float: right;
    border: 1px solid #DEDEDE;
    padding: 1px;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    box-shadow: 2px 2px 1px #888;
    -moz-box-shadow: 2px 2px 1px #888;
    -webkit-box-shadow: 2px 2px 1px #888;
}

.narro_context_info_editor pre.originalText {
    margin-left: 3px;
    font-weight: normal;
    font-size: 1.2em;
}

.narro_context_info_editor table.datagrid {
    background-color: #ffffff;
}

.narro_context_info_editor table.datagrid td {
    padding: 0px;
    background-color: transparent;
}

.narro_context_info_editor table.datagrid td pre {
    padding: 5px;
}

.narro_context_info_editor table.datagrid td small {
    padding-left: 10px;
    font-size: 0.7em;
    font-style: italic;
    color: gray;
    border-top: 1px solid #f2f2f2;
    display: block;
}

.narro_context_info_editor table.datagrid td.actions {
    white-space: nowrap;
}

.narro_context_info_editor .warning {
    padding-left: 15px;
    font-weight: bold;
    color: black;
}

.narro_context_info_editor .warning span {
    font-weight: normal;
}

.narro_context_info_editor .warning .plugin_message {
    display: block;
}

.narro_context_info_editor .warning {
    background: none;
    padding-left: 0px;
    font-weight: normal;
}

.narro_context_info_editor .warning b {
    background-image: url("assets/images/warningIcon.png");
    background-position: 0 2px;
    background-repeat: no-repeat;
    padding-left: 20px;
    border-bottom: 1px dotted black;
}

.narro_context_info_editor .imgbutton {
    padding: 5px;
    cursor: pointer;
    vertical-align: bottom;
}

.narro_context_info_editor .help {
    vertical-align: super;
    cursor: pointer;
    font-size: 0.8em;
    color: #6c871d;
}

.narro_context_info_editor .comment {

}


.narro_context_info_editor .approved {
    font-weight: bold;
}

.narro_context_info_editor .translation_box {
    font-weight: normal;
    font-size: 1.2em;
}

</style>

<script type="text/javascript">

function ctx_editor_focus(ctl, trans, copy, help, ctxInfo, chkChanged) {
    transCtl = jQuery("#" + trans);
    transCtl.attr("rows", "4");
    transCtl.attr("cols", "100");

    jQuery(".narro_context_info_editor").each(
            function() {
                if (this.id != ctl && jQuery('#' + this.id + ' .error').length == 0) {
                    jQuery(this).removeClass("ui-state-focus");
                    jQuery('#' + this.id + ' .ctxinfo').hide();
                    //jQuery('#' + this.id + ' .help').hide();
                    jQuery('#' + this.id + ' .copy').hide();
                    jQuery('#' + this.id + ' .translation_box').attr("rows", "1");
                    jQuery('#' + this.id + ' .translation_box').attr("height", "auto");
                }
                else {
                    jQuery(this).addClass("ui-state-focus");
                    jQuery('#' + this.id + ' .ctxinfo').show();
                    //jQuery('#' + this.id + ' .help').show();
                    jQuery('#' + this.id + ' .copy').show();
                }
            }
    );
}

</script>
<p>
<?php _t("To approve translations, go through the list and click on the vote button next to the right translation.");?>
</p>
<div class="section_title"><?php _t('Options')?></div>
<div class="section">
<?php
    $_CONTROL->chkRefresh->RenderWithName();
    $_CONTROL->chkApprove->RenderWithName();
?>
</div>
<div class="section_title"><?php _t('Search')?></div>
<div class="section">
<?php
    $_CONTROL->lstSearchIn->RenderWithName();
    $_CONTROL->txtSearch->RenderWithName();
    $_CONTROL->btnSearch->Render();
?>
</div>
<div class="section_title"><?php _t('Results')?></div>
<div class="section">
<?php
    
    $_CONTROL->lstProject->RenderWithName();
    $_CONTROL->txtFile->Render();
    $_CONTROL->lstFilter->Render();
    $_CONTROL->lstSort->RenderWithName();
    $_CONTROL->lstSortDir->RenderWithName();
    $_CONTROL->btnLess->Render();
    if ($_CONTROL->lstProject->SelectedValue) $_CONTROL->dtrText->Paginator->Render();
?>
</div>
<?php
    $_CONTROL->dtrText->Render();
    $_CONTROL->objWaitIcon->Render();
    $_CONTROL->btnMore->Render();
    $_CONTROL->chkLast->Render();
    $_CONTROL->chkRequestMoreSent->Render();
     QApplication::ExecuteJavaScript(
         sprintf(
"jQuery(window).scroll(function(){
        if  (jQuery(window).scrollTop() == (jQuery(document).height() - jQuery(window).height()) && jQuery('#endReached').attr('checked') == false && jQuery('#requestMoreSent').attr('checked') == false) {
        
        	jQuery('#requestMoreSent').attr('checked', true);
            qc.pA('%s', '%s', 'QClickEvent', '', '%s');
        }
}); ",
         $_CONTROL->Form->FormId,
         $_CONTROL->btnMore->ControlId,
         $_CONTROL->objWaitIcon->ControlId
     )
     );
?>