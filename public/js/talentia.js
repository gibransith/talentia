
$(document).ready(function(){
	jQuery.support.cors = true;

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		timeout:600000
	});

	appJQStyle('body');

	/*$('.form-prevent-multiple-submits').on('submit', function(){
		$('.button-prevent-multiple-submits').attr('disabled', 'true');
		$('.spinner').show();
	})*/

});

function appJQStyle(elem){

	$(elem).find(".custom-file-input").change(function(){
		var nameFile = this.value.split("\\").pop();
		$(this).parent().find('.custom-file-label').html(nameFile);
	})

	$(elem).find('.default-date').datepicker({
		language: 'en',
		dateFormat: 'dd/mm/yyyy',
		autoClose: true
	});

	/* Select2  */
	$(elem).find(".select2").select2();

}

function cargando(sel){
	$(sel).html('<div class="load"><i class="icofont-spinner icofont-spin"></i></div>')
}

function cargaSelect(select,ruta,idModficar){
	var selected = $(select).val();
	var datos = {sel:selected};
	cargando("#"+idModficar);
	$.post(ruta,datos,function(data) {
		$("#"+idModficar).html(data);
		//$("#"+idModficar+" .select2").select2();
		appJQStyle("#"+idModficar);
	}).fail(function (result){

	});
}

function notificacion(titulo,mensaje,tipo){
	new swal({   title: titulo,   html:mensaje,   type: tipo, });
}

function accion(btn,ruta,datos){
	var btnHtml;

	btnHtml = $(btn).html();
	cargando(btn);
	$(btn).prop('disabled', true);

	$.post(ruta,datos,function(result) {
		notificacion(result.tituloMsg,result.mensaje,result.tipoMsg);  
		$(btn).html(btnHtml);
		$(btn).prop('disabled', false);
		if(result.pageReload == true){
			window.location.reload();
		}
	}).fail(function (jqXHR,textStatus){

	});
	return false;
}

function accionConfirm(btn,ruta,mensaje,datos){
	 new swal(
		{
			title: "Atención",
			html: mensaje,
			icon: "warning",
			showCancelButton: true,			
			confirmButtonText: "Sí",
			cancelButtonText: "No",
			showLoaderOnConfirm: true,
			preConfirm: function() {
				return new Promise(function(resolve) {
					accion(btn,ruta,datos);
				})
			}          
		}).then((result) => {
			if (result.value) {     
				//accion(btn,ruta,datos);
			} else {
				
			} 
		});
}

function switchFunction(check,ruta,variable,valueChecked,valueUnchecked) {

	if(check.is(':checked')){
		value = valueChecked;
	}else{
		value = valueUnchecked;
	}

	$.post(ruta,{variable:variable,value:value},function(result) {
		notificacion(result.tituloMsg,result.mensaje,result.tipoMsg);
		if(result.pageReload == true){
			window.location.reload();
		}
	});
}

function cargaDlg(title,rutaDlg,sizeDlg){
	$('#dlgGeneral #dlgTitle').html(title);
	$('#dlgGeneral #dlgSize').removeClass();
	$('#dlgGeneral #dlgSize').addClass('modal-dialog modal-dialog-centered '+sizeDlg);
	//$('#dlgGeneral #dlgTitle').html(tituloDlg);

	cargando('#dlgBody');
	$('#dlgGeneral #dlgBody').load(rutaDlg,function(){

		appJQStyle("#dlgGeneral");

	});
	//$('#dlgGeneral').modal();
	$('#dlgGeneral').modal('hide')
	var myModal = new bootstrap.Modal(document.getElementById('dlgGeneral'), {
		keyboard: false
	});
	myModal.show()
}

function notificacion(titulo,mensaje,tipo){
	new swal({   title: titulo,   html:mensaje,   icon: tipo, });
}

function accionForm(form,btnSave,ruta){
	var datos= $(form).serialize();
	var btnHtml;
	btnHtml = $(btnSave).html();
	cargando(btnSave);
	$(btnSave).prop('disabled', true);
	$.post(ruta,datos,function(result) {
		// $("#prueba").html(result);
		// return;
		notificacion(result.tituloMsg,result.mensaje,result.tipoMsg);
		$(btnSave).html(btnHtml);
		$(btnSave).prop('disabled', false);
		if(result.dlgClose == true){
			$('#dlgGeneral').modal('toggle');
		}
		if(result.pageReload == true){
			if(typeof result.link !== 'undefined'){
				window.location.href = result.link;
			}else{
				window.location.reload();
			}
		}
		if(typeof result.idModficar !== 'undefined'){
			$("#"+result.idModficar).html(result.htmlContenido);
		}
	}).fail(function (jqXHR){
		if(jqXHR.status == 422){
			erroresCampos(form,jqXHR.responseJSON);
			notificacion("Error","Verifique los campos","error");
		}
		$(btnSave).html(btnHtml);
		$(btnSave).prop('disabled', false);
	});
	return false;
}

/**
* Metodo encargado de meter los errores en los inputs correspondientes
* cambiano la clase y marcando el error
* @param {type} errores, arreglo con los errores
* @returns {undefined}
*/
function erroresCampos(form,errores){
	errores = errores.errors;
	//quito la clase de error de los inputs
	$(form).find(":input").removeClass("form-control-danger is-invalid");
	//elimino los feedback que pudieron haber existido
	$(form).find(".feedbackInput").remove();

	$.each(errores, function (key, value) {
		var input = $(form).find("input[name="+key+"]");
		var div = input.parent();
		if(input.length == 0){
			input = $(form).find("select[name="+key+"]");
			div = input.closest(".form-group");
		}
		input.addClass("form-control-danger is-invalid");
		$html = '<div class="form-control-feedback invalid-feedback feedbackInput">'+value+'</div>';
		div.append($html);
		//alert(key+":"+value);
	});
}