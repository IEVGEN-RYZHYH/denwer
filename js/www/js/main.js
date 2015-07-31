
var snakeHolder = document.getElementById('snake');
snakeHolder.innerHTML =  render(snake(25),5);


function snake(size){
    var arr = [];
for (i = 0; i <= size; i++) {
    arr.push(i);
}
return arr;    
}

function render (array, size1) {
    var rowsQty = array.length;
    var result = [];
	var rows = [];
	for(i = 0;i<size1;i++){
		
		for(x=0;x<rowsQty;x++){
			if(x<5){
				rows[x].push("<td>"+array[i]+ "</td>")
			}
			
		}
		result.push("<tr>"+rows.join('')+ "</tr>")
		
	}
	
	return result.join('');
}


/* function render (arr1) {
    var rowsQty = arr1.length;
    var result = [];
    for (var i = 0; i < rowsQty; i++) {
        var row = ['<tr><td>', arr1[i].join('</td>'), '</tr>'].join('');
        result.push(row);
    }
    return result.join('');
}
 */