function generateevents(selectedage,selectedtype) {
   var selage=selectedage;
   var seltype=selectedtype;
   var text = JSON.stringify({"myid1":selage, "myid2":seltype});
   var httpc = new XMLHttpRequest(); // simplified for clarity
   var url = "getevents.php";
   httpc.open("POST", url, true); // sending as POST

   httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
   httpc.setRequestHeader("Content-Length", text.length); // POST request MUST have a Content-Length header (as per HTTP/1.1)

    httpc.onreadystatechange = function() { //Call a function when the state changes.
     if(httpc.readyState == 4 && httpc.status == 200) { // complete and no errors
       alert(httpc.responseText); // some processing here, or whatever you want to do with the response
       var myArr = JSON.parse(httpc.responseText);
    //myFunction2(myArr);
       //myFunction2(httpc.responseText);
      }
    }
    httpc.send(text);   
}

function myFunction2(arr) {
var pinzips = arr.mypinzips;
var my_pinzips = pinzips.split("|");
my_pinzips.sort();
var i;
var select2;
var option;

select2 = document.getElementById( 'chosenevents' );
select2.length=0;
option = document.createElement( 'option' );  
select2.options[0]=new Option('Select event','');
       
    for(i = 0; i < my_pinzips.length; i++) {
       select2.options[chosenevents.options.length] = new Option(my_pinzips[i], my_pinzips[i]);
       select2.add( option );
    }
}
