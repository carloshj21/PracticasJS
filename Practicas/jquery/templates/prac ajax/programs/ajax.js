var json ;
$("#boton").on("click",function(){
 $.ajax({
    url:"../programs/ajax.php",
    type:"GET",
	dataType: "json",
    success: function (resp){
      json=resp;
      var lon1=resp.length;
      var lon2=resp[0].length;
      console.log(lon1)
      console.log(lon2);
      $("#status").html("<table border='1' id='tabla'><tr style='background-color:green; color:white;''><td>Nombres</td><td>Apellidos</td></tr></table>");
      for(y=0;y<lon2;y++)
      {
        $("#tabla").append("<tr><td>"+resp[0][y]+"</td><td>"+resp[1][y]+"</td></tr>");
      }
    }
  });
});
