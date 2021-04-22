var xmlhttp = new XMLHttpRequest();
var url = "../hosp.json";
var text;
var k=0;
function passvalue2(){
    document.getElementById("data").innerHTML="";
    k=0;
    text="";
    str="";
    text=document.getElementById("input-text").value;
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(text);
            var myArr = JSON.parse(this.responseText);
            //console.log(myArr);
            while(k!=myArr.length){
                if(myArr[k].district==text){
                    str="<tr>";
                    str+="<td>";
                    str+=myArr[k].district+"";
                    //console.log(myArr[k].district);
                    str+="</td>";
                    str+="<td>";
                    str+=myArr[k].hospname+"";
                    str+="</td>";
                    str+="<td>";
                    str+=myArr[k].total+"";
                    str+="</td>";
                    str+="<td>";
                    str+=myArr[k].vacant+"";
                    str+="</td>";
                    str+="</tr>"
                    document.getElementById("data").innerHTML+=str;
                }
                k++;
                
            }
            
            }
        };
        
        xmlhttp.open("GET", url, true);
        xmlhttp.send();
}
