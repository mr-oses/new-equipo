$(document).on("click", ".montoFijo", function (event) {
    $('#otroMontoCant').prop('disabled', true);
    $("#otroMontoDiv").removeClass('d-flex');
    $("#otroMontoDiv").addClass('d-none');
});

$(document).on("click", ".montoCustom", function (event) {
    $("#otroMontoDiv").toggleClass('d-flex');
    $('#otroMontoCant').attr('disabled', false);
});
