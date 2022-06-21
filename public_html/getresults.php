<!DOCTYPE html>
<script>

</script>
<html>
<head>
<style>
[type=radio] { 
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
input[type=text],select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 2vw;
  box-sizing: border-box;
  margin-top:5vw;
}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
//for assigning categories as below, switch case is a better option!!
if($q == '1'){?>
<label>
  <input type="radio" name="test" value="1" onclick = "showUsers(this.value)">
  <img src="certificateborder/border1.png" style="width:12vw;">
</label>
<label>
  <input type="radio" name="test" value="2" onclick = "showUsers(this.value)">
  <img src="certificateborder/border2.png" style="width:12vw;">
</label>
<label>
  <input type="radio" name="test" value="3" onclick = "showUsers(this.value)">
  <img src="certificateborder/border3.png" style="width:12vw;">
</label>
<label>
  <input type="radio" name="test" value="4" onclick = "showUsers(this.value)">
  <img src="certificateborder/border4.png" style="width:12vw;">
</label>
<label>
  <input type="file" name="test" >
  </label>
<?php
}

elseif($q=='2') {?>
<p style="color:black;">Choose Font Style</p>
<label>
<select name="users" onchange="showfont(this.value)">
  <option value="">Select a font:</option>
  <option value="11"style="font-family:arial;">Arial</option>
  <option value="22" style="font-family:Allura-Regular;">Allura</option>
  <option value="33" style="font-family:times;">Times</option>
  <option value="44" style="font-family:comic;">Comic</option>

  </select>
  </label>
  <?php
}elseif($q=='3') {?>
<p>Pick a Background Color</p>
<input type="color" id="bgcolor" value="#000000"> 

<button type="button" id="sub" onclick="ajax_color();">Change Color</button>
<br/>
<div id="status"></div>
<?php
}elseif($q=='4') {?>
<input type="text" id="fname" name="firstname" placeholder="Your Content..">
<?php
}elseif($q=='5') {?>
<label>Logo1
  <input type="file" name="test" >
  </label></br></br>
  <label>Logo2
  <input type="file" name="test" >
  </label></br></br>
  <label>Logo3
  <input type="file" name="test" >
  </label></br></br>
  <label>Logo4
  <input type="file" name="test" >
  </label></br>
<?php
}
?>
</body>
</html>