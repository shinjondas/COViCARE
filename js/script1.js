const data = null;
var state="";
var k;
const xhr = new XMLHttpRequest();
xhr.withCredentials =false;
function passvalue(){
	
	state=document.getElementById("input-text").value;
	console.log(state);
	xhr.addEventListener("readystatechange", function () {
		if (this.readyState === this.DONE) {
			var obj=JSON.parse(this.responseText);
			console.log(obj.statewise);
			
			for(i in obj.statewise){
				if(obj.statewise[i].state==state){
					k=i;
				}
			}
			document.getElementById("conf").innerHTML=obj.statewise[k].confirmed;
			document.getElementById("rec").innerHTML=obj.statewise[k].recovered;
			document.getElementById("death").innerHTML=obj.statewise[k].deaths;
		}
	});
	
	xhr.open("GET", "https://api.covid19india.org/data.json");
	xhr.send(data);
}


