function highlight_datagrid() {
    var arrTds = document.getElementsByTagName('td');
    for (var i=0;i<arrTds.length;i++) {
        arrTds[i].onmouseover = highlight_datagrid_row;
        arrTds[i].onmouseout = reset_datagrid_row;
    }
}

function highlight_datagrid_row() {
    if (this.parentNode.className.match(/datagrid_even|datagrid_odd/))
        this.parentNode.className = 'datagrid_even selected'
}

function reset_datagrid_row() {
    if (this.parentNode.className.match(/datagrid_even|datagrid_odd/))
        this.parentNode.className = 'datagrid_even'
}
