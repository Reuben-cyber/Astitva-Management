function hideshowkeyboard(divIDno) {

var iddiv = divIDno;
var mykeyboard = "keyboard"+iddiv;

if(document.getElementById(mykeyboard).style.display == "none") {
    document.getElementById(mykeyboard).style.display = "block";
} else {
    document.getElementById(mykeyboard).style.display = "none";
}

}

function getmytxtid(num) {

var mynum = num;
myid = "txt"+mynum;
return myid;

}

function input(e) {

var txt = document.getElementById(myid);
txt.value = txt.value + e.value;

}

function del() {

   var txt = document.getElementById(myid);
   txt.value = txt.value.substr(0, txt.value.length - 1);

}
