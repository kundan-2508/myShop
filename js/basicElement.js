

$(document).ready(function(){

	//Transform text into uppercase
	$('#serialNo').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
	$('#vechNo').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
    $('#vechType').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
    $('#charges').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
    $('#material').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
    $('#partyRef').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
    $('#payment').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
    $('#driver').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
   	$('#grossWeight').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
    $('#tareWeight').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
    $('#netWeight').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });

    // Fill net weight autometically 
    $("#grossWeight").keyup(function() {
      var gross = $(this).val();
      var tare = $("#tareWeight").val();
      var net = gross-tare;
      $("#netWeight").val(net);
   });

    $("#tareWeight").keyup(function() {
      var tare = $(this).val();
      var gross = $("#grossWeight").val();
      var net = gross-tare;
      $("#netWeight").val(net);
   });
});




