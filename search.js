

	
	

function getBookName(){
var request = new XMLHttpRequest();
var url = "search_book.php";
var inName=document.getElementById("search").value;
console.log(inName);
request.onload = function() {
    if (this.status == 200) {
         document.getElementById("demo").innerHTML=this.responseText;
		 
		 
		 
		 
    }
  };
 request.open("POST", url, true);
request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

request.send("search="+inName);
}



