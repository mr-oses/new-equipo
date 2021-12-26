//TODO comentarle a Kari el funcionamiento de los eventos y eliminar la función toggleDisplay().

$(document).on("click",".montoFijo",function(event){
    $('#otroMontoCant').prop('disabled', true);
});

$(document).on("click",".montoCustom",function(event){
    $("#otroMontoDiv").toggleClass('d-flex');
    $('#otroMontoCant').attr('disabled', false);
});

/* function toggleDisplay() {
    let element = document.getElementById("otroMontoDiv");
    element.classList.toggle("d-flex");
} */

