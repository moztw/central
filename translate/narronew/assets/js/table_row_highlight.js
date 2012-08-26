function highlight_datagrid(ctl_id) {
  var objTable = document.getElementById(ctl_id);
  if (objTable) {
      var arrTds = objTable.getElementsByTagName('td');
      for (var i=0;i<arrTds.length;i++) {
          arrTds[i].onmouseover = highlight_datagrid_row;
          arrTds[i].onmouseout = reset_datagrid_row;
      }
  }
}

function highlight_datagrid_row() {
  if (this.parentNode.className == 'datagrid_row datagrid_even')
    this.parentNode.className = 'ui-state-focus datagrid_row datagrid_even';
  else if (this.parentNode.className == 'datagrid_row datagrid_odd')
    this.parentNode.className = 'ui-state-focus datagrid_row datagrid_odd';

}

function reset_datagrid_row() {
  if (this.parentNode.className == 'ui-state-focus datagrid_row datagrid_even')
    this.parentNode.className = 'datagrid_row datagrid_even';
  else if (this.parentNode.className == 'ui-state-focus datagrid_row datagrid_odd')
    this.parentNode.className = 'datagrid_row datagrid_odd';
}

function highlight_datagrid_row_by_control(ctl) {
  if (ctl.parentNode.parentNode.parentNode.className == 'datagrid_row datagrid_even')
    ctl.parentNode.parentNode.parentNode.className = 'ui-state-focus datagrid_row datagrid_even';
  else if (ctl.parentNode.parentNode.parentNode.className == 'datagrid_row datagrid_odd')
    ctl.parentNode.parentNode.parentNode.className = 'ui-state-focus datagrid_row datagrid_odd';

}

function reset_datagrid_row_by_control(ctl) {
  if (ctl.parentNode.parentNode.parentNode.className == 'ui-state-focus datagrid_row datagrid_even')
    ctl.parentNode.parentNode.parentNode.className = 'datagrid_row datagrid_even';
  else if (ctl.parentNode.parentNode.parentNode.className == 'ui-state-focus datagrid_row datagrid_odd')
    ctl.parentNode.parentNode.parentNode.className = 'datagrid_row datagrid_odd';
}
