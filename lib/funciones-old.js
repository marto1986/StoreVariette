$(".formulario").on( 'change', function() {
	if($('input[type=checkbox]:checked').length > 1){
        $("#error").show(1000);
        $("input[type=checkbox]").attr('checked', false);
        $("#error").hide(5000);
    }
});

