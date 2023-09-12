$(document).ready(function () {
    var carta1=""; var carta2="";
    var par =false;
    var total_pares=0;
    var contador = 0;
    $('img').click(function (e) {
        var estado = $(this).attr('data-estado')
        var nombre_imagen = $(this).attr('data-id')
        
        if(estado=="0"){
            if(carta1 !="" && carta2 !=""){
                console.log("Las cartas son diferentes")
                if(carta1.attr('data-id') != carta2.attr('data-id')){
                console.log("tapa cartas diferentes")
                carta1.attr('src', 'pares/tapada.jpg')
                carta2.attr('src', 'pares/tapada.jpg')
                }else{
                    console.log("las cartas son iguales")
                    carta1.attr('data-estado','1')
                    carta2.attr('data-estado','1')
                    par=false
                }
             carta1=""
             carta2=""
        }
        if(estado=="0"){
            console.log("Estado de la carta: " + estado)
        if(carta1==""){
            carta1 = $(this);
            carta1.attr('src','pares/'+nombre_imagen)
            console.log("se asigno carta #1")
        }else{
            carta2 = $(this);
            carta2.attr('src','pares/'+nombre_imagen)
            console.log("se asigno carta #2")
        }
        }
    }
        if(carta1 != ""  && carta2 != ""){
            if(carta1.attr('data-id')== carta2.attr('data-id')){
                par=true
                total_pares++
                $("#total_pares").html(total_pares)
            }
        }

        if(total_pares == 8){
            $('img').each(function(){
                $(this).attr('src','pares/tapada.jpg')
                $(this).attr('data-estado','0')
            });
            total_pares=0;
            par =false;
            carta1=""
            carta2=""
            return;
        }
    });
});