var letter='';

while(!letter){
	letter=prompt();
}
var limit=10;

for(var i=0;i<limit -1; i++){
	
if(i<(limit/2)){
	var j =-1;
	while(j < i){
		
document.write(letter);
j++
	}
}
else {
	var k=((limit-1)-i);
	while(k){
		document.write(letter);
		k--;
	}
}

document.write('<br>');
			

}