/*comienza la pregunta 1*/

function DeshabilitarCPreguntaA(){
    if($(".pregA").is(':checked')){
         $(".pregC").prop("disabled",true);
          $(".btn").attr("disabled",false);
         $('.pregAH').val("1");
         $('.pregBH').val("0");
         $('.pregCH').val("0");
        }else{
           $(".pregC").prop("disabled", false);
          $(".btn").attr("disabled",true);
        } 

}

function DeshabilitarCPreguntaB(){
    if($(".pregB").is(':checked')){
          $(".pregC").prop("disabled",true);
          $(".btn").attr("disabled",false);  
          $('.pregAH').val("0");
          $('.pregBH').val("1");
          $('.pregCH').val("0");
     }else{
         $(".pregC").prop("disabled", false); 
          $(".btn").attr("disabled",true);
         }
    } 


function DeshabilitarAb(){
  if($(".pregC").is(':checked')){
       $(".pregA").prop("disabled",true);
       $(".pregB").prop("disabled",true);
       $('.pregAH').val("0");
       $('.pregBH').val("0");
       $('.pregCH').val("0"); 
       $('.btn').attr("disabled",false); 
     }else{
       $(".pregA").prop("disabled",false);
       $(".pregB").prop("disabled",false);
        $(".btn").attr("disabled",true);
}
}

function deshabilitarboton(){
  if($(".pregA").prop('checked')===false && $(".pregB").prop('checked')===false && $(".pregC").prop('checked')===false){
     $('.btn').attr("disabled", true);
  }
}

/* termina la pregunta 1*/

/*comienza la preg 2*/


// function DeshabilitarCPreguntaA2(){
//    if($("#pregA2").is(':checked')){
//       $("#pregC2").prop("disabled",true);
//            $("#btn2").attr("disabled",false);   
//            $('#pregAH2').val("1");
//            $('#pregBH2').val("0");
//            $('#pregCH2').val("0");   
//    }else{
//      $("#pregC2").prop("disabled", false);
//      $("#btn2").attr("disabled",true);   
//    }
// }
// function DeshabilitarCPreguntaB2(){
//   if($("#pregB2").is(':checked')){
//            $("#pregC2").prop("disabled",true);
//            $("#btn2").attr("disabled",false); 
//            $('#pregAH2').val("0");
//            $('#pregBH2').val("1");
//            $('#pregCH2').val("0");
//   }else{
//           $("#pregC2").prop("disabled", false); 
//           $("#btn2").attr("disabled",true); 
//   }
// }


// function DeshabilitarAb2(){
// if($("#pregC2").is(':checked')){
//        $("#pregA2").prop("disabled",true);
//        $("#pregB2").prop("disabled",true);
//          $('#pregAH2').val("0");
//        $('#pregBH2').val("0");
//        $('#pregCH2').val("0");
//        $('#btn2').attr("disabled",false);  
// }else{
//      $("#pregA2").prop("disabled",false);
//        $("#pregB2").prop("disabled",false);
//         $("#btn2").attr("disabled",true);  
// }

// }

// function deshabilitarboton2(){
//   if($("#pregA2").prop('checked')===false && $("#pregB2").prop('checked')===false && $("#pregC2").prop('checked')===false){
//      $('#btn2').attr("disabled", true);
//   }
// }


/*termina la pregunta 2*/

function quitarChekbox(){
  $(".pregA").prop('checked',false);
  $(".pregB").prop('checked',false);
  $(".pregC").prop('checked',false);
}



$(document).ready(function() {
 deshabilitarboton();
});




$('#form').submit(function(event){
 event.preventDefault(); 
   $.post('enviar.php',$('#form').serialize(), function(data) {
    if(data){
      sweetAlert("Excelente!...","Enviado existosamente", "success");
      $('#Preg1').css("display","none"); 
      $('#Preg2').css("display","block");
      quitarChekbox();
      
           }else{
       sweetAlert("Oops...","No enviado "+data, "error"); 
   }
});
});
   
$('#form2').submit(function(event){
 event.preventDefault(); 
   $.post('enviar.php',$('#form2').serialize(), function(data) {
    if(data){
      sweetAlert("Excelente!...","Enviado existosamente", "success");
    //  $('#Preg1').css("display","none"); 
     // $('#Preg2').css("display","block");
     // deshabilitarboton2();
           
      }else{
       sweetAlert("Oops...","No enviado "+data, "error"); 
   }
});
});