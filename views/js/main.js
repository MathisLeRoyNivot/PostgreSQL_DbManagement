function  getId(element) {
    let rowID = element.parentNode.parentNode.rowIndex;
    let columnID = element.parentNode.cellIndex;
    
    var myTable = document.getElementById('schemas-table');
    var test = myTable.rows.item(rowID).cells;
    var tableSelected = test.item(0).innerHTML;
    
    alert("Button position :\nRow : " + rowID + 
    "\nColmun : " + columnID +"\nTable selected : " + tableSelected);

}