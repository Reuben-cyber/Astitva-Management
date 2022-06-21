function showtable() {

var iddiv = document.getElementById('myselection').value;
var sdid = document.getElementById('spdonid').value;

var newsdid = sdid.split("-")[0];

//if(iddiv == "Donation for Educational Support") {                // this line is my original line. following if statement is a new one to test the presence of Educational Support Donation
//if( /^Donation for Educational Support/.test(iddiv)) {
if( iddiv.match("Donation for Educational Support")) {

   if(document.getElementById('sponsorship').style.display == "none") {
      document.getElementById('sponsorship').style.display = "block";
   } 

} else {

    if(document.getElementById('sponsorship').style.display == "block") {
      document.getElementById('sponsorship').style.display = "none";
   } 
    document.getElementById('noc').value = 0;
    document.getElementById('noy').value = 0;
    document.getElementById('styr').value = "0000";

}

}