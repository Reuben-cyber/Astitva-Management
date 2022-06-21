<!DOCTYPE html>
<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("dis").innerHTML = "nothing to show!";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("dis").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getresults.php?q="+str,true);
    xmlhttp.send();
  }
}

function showUsers(str) {
  if (str == "") {
    document.getElementById("txthint").innerHTML = "nothing to show!";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txthint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getresult.php?q="+str,true);
    xmlhttp.send();
  }
}

function showfont(str) {
  if (str == "") {
    document.getElementById("txthint").innerHTML = "nothing to show!";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txthint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getresults1.php?qf="+str,true);
    xmlhttp.send();
  }
}


function ajax_color(){
var hr = new XMLHttpRequest();
var url = "getresults2.php";
var bg = document.getElementById("bgcolor").value;

var vars = "bgc="+bg;
hr.open("POST", url, true);
hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
hr.onreadystatechange = function() {
if(hr.readyState == 4 && hr.status == 200) {
var return_data = hr.responseText;
document.getElementById("status").innerHTML = return_data;
//alert('Color Is About To Change!');
}
}
hr.send(vars); // After Check Steps are done execute the request
document.getElementById("status").innerHTML = "color change in progress...";
}
</script>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column1 {
  float: left;
  width: 10%;
  padding: 10px;
   overflow: none;
   height:47vw;
}
.column2 {
  float: left;
  width:20%;
  padding: 10px;
 
 height:47vw;
}
.column3 {
  float: left;
  width: 70%;
  padding: 10px;
  overflow: none;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.[type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
[type=radio] + img {
  cursor: pointer;
}

/* CHECKED STYLES */
[type=radio]:checked + img {
  outline: 2px solid #f00;
}
</style>
</head>
<body>

<h2 style="background:black; color:white;">Three Columns</h2>

<div class="row">
  <div class="column1" style="background:grey;">
    <h2>Dashboard</h2>
     <label>
      <input type="radio" name="test" value="1" onclick = "showUser(this.value)">
      <img src="certificateborder/border.png" style="width:5vw;"></br></br>
     </label>
     <label>
       <input type="radio" name="test" value="2" onclick = "showUser(this.value)">
       <img src="certificateborder/font.png" style="width:5vw;"></br></br>
     </label>
	 <label>
       <input type="radio" name="test" value="3" onclick = "showUser(this.value)">
       <img src="certificateborder/color.png" style="width:5vw;"></br></br>
     </label>
	 <label>
       <input type="radio" name="test" value="4" onclick = "showUser(this.value)">
       <img src="certificateborder/text.png" style="width:5vw;"></br></br>
     </label>
     <label>
       <input type="radio" name="test" value="5" onclick = "showUser(this.value)">
       <img src="certificateborder/image.png" style="width:5vw;"></br></br>
     </label>
  </div>
  <div class="column2" style=";" id="dis">
    <h2>Column 2</h2>
  </div>
  <div class="column3" style="" id="txthint">
  <h2>Preview</h2>
  </div>
</div>

</body>
</html>
