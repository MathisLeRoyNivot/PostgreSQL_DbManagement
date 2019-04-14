function  getId(element) {
    // Obtenir la position du bouton cliqué dans le tableau (avec ses coordonées)
    let rowID = element.parentNode.parentNode.rowIndex;
    let columnID = element.parentNode.cellIndex;
    
    var myTable = document.getElementById('schemas-table');
    var test = myTable.rows.item(rowID).cells;
    var tableSelected = test.item(0).innerHTML;
    var schemaSelected = test.item(1).innerHTML;
    
    alert("Button position :\nRow : " + rowID + 
    "\nColmun : " + columnID +"\nTable selected : " + tableSelected + "\nSchema selected :" + schemaSelected);

    window.location.href = "./select-one-table.php?table=" + tableSelected + "&schema=" + schemaSelected; 

}