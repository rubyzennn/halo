<!DOCTYPE html> 
<html> 
<style> 
 table,th,td { 
  border : 1px solid black; border-collapse: collapse; 
 } 
 th,td { 
  padding: 5px; 
 } 
 </style> 
 <body> 
  <h1>The XMLHttpRequest Object</h1> 
  <button type="button" onclick="loadDoc()">Data Siswa</button> 
  <br><br> 
  <table id="demo1"></table> 
  <script> 
    
   function loadDoc() { 
    var xhttp = new XMLHttpRequest(); 
    xhttp.onreadystatechange = function() { 
     if (this.readyState == 4 && this.status == 200) { myFunction1(this); 
     } 
    }; 
    xhttp.open("GET", "a.xml", true); 
    xhttp.send(); 
   }
  
 function myFunction1(xml) { 
 var i; 
 var xmlDoc = xml.responseXML; 
 var table="<tr><th>NIM</th><th>NAMA</th><th>N1</th><th>N2</th><th>N3</th><th>RATA</th></tr>"; 
 var x = xmlDoc.getElementsByTagName("DATA"); 
 for (i = 0; i < x.length; i++) { 
  var nil1=parseInt(x[i].getElementsByTagName("N1")[0].childNodes[0].nodeValue);
  var nil2=parseInt(x[i].getElementsByTagName("N2")[0].childNodes[0].nodeValue);
  var nil3=parseInt(x[i].getElementsByTagName("N3")[0].childNodes[0].nodeValue);
  var total=nil1+nil2+nil3;
  var rata=total/3;
    table += "<tr><td>" + 
    x[i].getElementsByTagName("NIM")[0].childNodes[0].nodeValue+ 
    "</td><td>"+ 
    x[i].getElementsByTagName("NAMA")[0].childNodes[0].nodeValue + 
    "</td><td>"+ 
    x[i].getElementsByTagName("N1")[0].childNodes[0].nodeValue + 
    "</td><td>"+ 
    x[i].getElementsByTagName("N2")[0].childNodes[0].nodeValue + 
    "</td><td>"+ 
    x[i].getElementsByTagName("N3")[0].childNodes[0].nodeValue + 
    "</td><td>" + rata + 
    "</td></tr>";
 } 
document.getElementById("demo1").innerHTML= table; 
} 
</script> 
</body> 
</html>