/**
 * Projet Name : Dynamic Form Processing with PHP
 * URL: http://techstream.org/Web-Development/PHP/Dynamic-Form-Processing-with-PHP
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Tech Stream
 * http://techstream.org
 */

function addRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	if(rowCount < 15){							// limit the user from creating fields more than your limits
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i<colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
                                                
                                                var oldid = newcell.getElementsByTagName("BUTTON")[0].getAttribute("id");
                                                var newid = oldid.substr(3,1);
                                                var newid1 = newid+rowCount;
                                                var finalid = oldid.replace(newid,newid1);
                                                newcell.getElementsByTagName("BUTTON")[0].setAttribute("id",finalid);
                                                var oldonclick = newcell.getElementsByTagName("BUTTON")[0].getAttribute("onclick");
                                                var newonclick = oldonclick.substr(17,1);
                                                var newonclick1 = newonclick+rowCount;
                                                var finalonclick = oldonclick.replace(newonclick,newonclick1);
                                                newcell.getElementsByTagName("BUTTON")[0].setAttribute("onclick",finalonclick);
                                                
                                                var oldinpid = newcell.getElementsByTagName("INPUT")[4].getAttribute("id");
                                                var newinpid = oldinpid.substr(3,1);
                                                var newinpid1 = newinpid+rowCount;
                                                var finalinpid = oldinpid.replace(newinpid,newinpid1);
                                                newcell.getElementsByTagName("INPUT")[4].setAttribute("id",finalinpid);
                                                var oldinponclick = newcell.getElementsByTagName("INPUT")[4].getAttribute("onclick");
                                                var newinponclick = oldinponclick.substr(11,1);
                                                var newinponclick1 = newinponclick+rowCount;
                                                var finalinponclick = oldinponclick.replace(newinponclick,newinponclick1);
                                                newcell.getElementsByTagName("INPUT")[4].setAttribute("onclick",finalinponclick);

                                                var oldkbid = document.getElementById("keyboard2").id;
                                                var newkbid = oldkbid.substr(8,1);
                                                var newkbid1 = newkbid+rowCount;
                                                var finalkbid = oldkbid.replace(newkbid,newkbid1);
                                                document.getElementById("keyboard2").id = finalkbid;

                                                var oldid1 = newcell.getElementsByTagName("BUTTON")[1].getAttribute("id");
                                                var newid1 = oldid1.substr(3,1);
                                                var newid11 = newid1+rowCount;
                                                var finalid1 = oldid1.replace(newid1,newid11);
                                                newcell.getElementsByTagName("BUTTON")[1].setAttribute("id",finalid1);
                                                var oldonclick1 = newcell.getElementsByTagName("BUTTON")[1].getAttribute("onclick");
                                                var newonclick1= oldonclick1.substr(17,1);
                                                var newonclick11 = newonclick1+rowCount;
                                                var finalonclick1 = oldonclick1.replace(newonclick1,newonclick11);
                                                newcell.getElementsByTagName("BUTTON")[1].setAttribute("onclick",finalonclick1);
                                                
                                                var oldinpid1 = newcell.getElementsByTagName("INPUT")[5].getAttribute("id");
                                                var newinpid1 = oldinpid1.substr(3,1);
                                                var newinpid11 = newinpid1+rowCount;
                                                var finalinpid1 = oldinpid1.replace(newinpid1,newinpid11);
                                                newcell.getElementsByTagName("INPUT")[5].setAttribute("id",finalinpid1);
                                                var oldinponclick1 = newcell.getElementsByTagName("INPUT")[5].getAttribute("onclick");
                                                var newinponclick1 = oldinponclick1.substr(11,1);
                                                var newinponclick11 = newinponclick1+rowCount;
                                                var finalinponclick1 = oldinponclick1.replace(newinponclick1,newinponclick11);
                                                newcell.getElementsByTagName("INPUT")[5].setAttribute("onclick",finalinponclick1);

                                                var oldkbid1 = document.getElementById("keyboard3").id;
                                                var newkbid1 = oldkbid1.substr(8,1);
                                                var newkbid11 = newkbid1+rowCount;
                                                var finalkbid1 = oldkbid1.replace(newkbid1,newkbid11);
                                                document.getElementById("keyboard3").id = finalkbid1;
		}
	} else {
		 alert("Maximum allowed family memebers are 15.");
			   
	}
}
