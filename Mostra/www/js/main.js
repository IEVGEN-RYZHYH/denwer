var multiplicationTableHolder = document.getElementById('multiplication-table');
var matrixHolder = document.getElementById('matrix');
var pascalTriangleHolder = document.getElementById('pascal-triangle');

matrixHolder.innerHTML =  render(matrix(10));
multiplicationTableHolder.innerHTML = createTable(multiplicationTable(10));
pascalTriangleHolder.innerHTML = render(pascal(10));

function multiplicationTable(size) {
  var tableArr = [];

    // @todo
    var arr  = [];
    for (var i = 1; i<=size; i++) {
        tableArr= [];
        for (var x= 1; x<=size; x++) {
            tableArr.push(i*x);
        }
        arr.push(tableArr);
    }

    return arr;

	
}
function createTable(tableData) {
  var table = document.createElement('table'),
  tableBody = document.createElement('tbody');

  tableData.forEach(function(rowData) {
    var row = document.createElement('tr');

    rowData.forEach(function(cellData) {
      var cell = document.createElement('td');
      cell.appendChild(document.createTextNode(cellData));
      row.appendChild(cell);
    });

    tableBody.appendChild(row);
  });

  table.appendChild(tableBody);
  document.body.appendChild(table);
}


