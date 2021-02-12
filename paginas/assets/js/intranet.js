/** BEGIN: Inicializar contador de caracteres */
$(document).ready(function()
{
  $('textarea#inp_descripcion').characterCounter();
  $('.modal').modal();

  //$('#modal1').modal('open');
});
/** END: Inicializar contador de caracteres */

/** BEGIN: Validar los archivos adjuntados */
$(document).on('change', 'input[type="file"]', function()
{
  var form_data = document.getElementById("archivo");
	var archivo = form_data.files;
  var validar = true;

  for(i = 0; i < archivo.length; i++)
  {
    var archivoNombre = archivo[i].name;
    var archivoTamano = archivo[i].size;

    var extension = archivoNombre.split('.').pop();
    extension = extension.toLowerCase();
    
    if (extension != 'pdf')
    {
      validar = false;
      break;
    }
    else if(archivoTamano >= 2000000)
    {
      validar = false;
      break;
    }
	}

  var inp_archivo = document.getElementById('inp_archivo');

  if (validar)
  {
    alert('Todo bien');

    inp_archivo.style.borderBottom = '1px solid #00bfa5';
    inp_archivo.style.boxShadow = '0 1px 0 0 #00bfa5';

  }
  else
  {
    alert('No cumple');
    this.value = '';
    //this.files[0].name = '';

    inp_archivo.style.borderBottom = '1px solid #ff5252';
    inp_archivo.style.boxShadow = '0 1px 0 0 #ff5252';
  }
});
/** END: Validar los archivos adjuntados */

/** BEGIN: Acciones al enviar el formulario */
function enviarFormulario()
{
  var inp_remitente = $("#inp_remitente").val();
  var inp_tipoDocumento = $("#inp_tipoDocumento").val();
  var inp_numeroDocumento = $("#inp_numeroDocumento").val();
  var inp_numeroCelular = $("#inp_numeroCelular").val();
  var inp_correoElectronico = $("#inp_correoElectronico").val();
  var inp_tipoTramite = $("#inp_tipoTramite").val();
  var inp_descripcion = $("#inp_descripcion").val();
  var inp_archivo = $("#inp_archivo").val();
  var token = $("#token").val();
  var action = $("#action").val();

  if (validarCampos(inp_remitente, inp_tipoDocumento, inp_numeroDocumento, inp_numeroCelular, inp_correoElectronico, inp_tipoTramite, inp_descripcion, inp_archivo))
  {
    console.log(token);

    var form_data = document.getElementById("archivo");
    var archivo = form_data.files;
    var form_data = new FormData();

    for (i = 0; i < archivo.length; i++)
    {
      form_data.append('file' + i, archivo[i]);
    }

    form_data.append('inp_remitente', inp_remitente);
    form_data.append('inp_tipoDocumento', inp_tipoDocumento);
    form_data.append('inp_numeroDocumento', inp_numeroDocumento);
    form_data.append('inp_numeroCelular', inp_numeroCelular);
    form_data.append('inp_correoElectronico', inp_correoElectronico);
    form_data.append('inp_tipoTramite', inp_tipoTramite);
    form_data.append('inp_descripcion', inp_descripcion);
    form_data.append('inp_archivo', inp_archivo);
    form_data.append('token', token);
    form_data.append('action', action);

    $.ajax({
      url: "./ajax/mesaPartesAjax.php?op=enviar",
      //dataType: 'text',
      cache: false,
      contentType: false,
      processData: false,
      data: form_data,                         
      type: 'post',
      success: function(data)
      {
        console.log(data);
        $prueba = JSON.parse(data).success;
        document.getElementById('out_mensaje').innerHTML='' + $prueba;
        $('#modal1').modal('open');
      },
      error: function()
      {
      }
    });

      

      //document.getElementById('out_mensaje').innerHTML='Se a enviado la información de manera correcta, recibirá un correo confirmandole la recepción de su solicitud.';
      //$('#modal1').modal('open');
  }
  else
  {
    document.getElementById('out_mensaje').innerHTML='Ingrese todos los campos correctamente.';
    $('#modal1').modal('open');
  }
};
/** END: Acciones al enviar el formulario */

/** BEGIN: Funcion para validar los campos */
function validarCampos(inp_remitente, inp_tipoDocumento, inp_numeroDocumento, inp_numeroCelular, inp_correoElectronico, inp_tipoTramite, inp_descripcion, inp_archivo)
{
  /*var inp_remitente = document.getElementById("inp_remitente").value;
  var inp_tipoDocumento = document.getElementById("inp_tipoDocumento").value;
  var inp_numeroDocumento = document.getElementById("inp_numeroDocumento").value;
  var inp_numeroCelular = document.getElementById("inp_numeroCelular").value;
  var inp_correoElectronico = document.getElementById("inp_correoElectronico").value;
  var inp_tipoTramite = document.getElementById("inp_tipoTramite").value;
  var inp_descripcion = document.getElementById("inp_descripcion").value;
  var inp_archivo = document.getElementById("inp_archivo").value;*/

  var expresion = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if((inp_remitente.trim() == "") || (inp_tipoDocumento.trim() == "") || (inp_numeroDocumento.trim() == "") || (inp_numeroCelular.trim() == "") || (inp_correoElectronico.trim() == "") || (inp_tipoTramite.trim() == "") || (inp_descripcion.trim() == "") || (inp_archivo.trim() == ""))
  {
    return false;
  }

  if (!expresion.test(inp_correoElectronico.trim()))
  {
    return false;
  }

  return true;
};
/** END: Funcion para validar los campos */

/** BEGIN: Función para enviar el formulario del captcha */

$('#btnEnviar').click(function(e)
{
  grecaptcha.ready(function()
  {
    grecaptcha.execute('6LcuNVMaAAAAAMEhrq5ulwsaWxQjZPx6dabgXSk1', 
    {
      // Defino el valor del action o la acción, este valor también lo coloqué en el input oculto 'action'
      action: 'procesar'
    }).then(function(token)
    {
      // Antes de procesar el formulario, le asigno el token al input oculto 'token'
      document.getElementById('token').value = token;
      enviarFormulario();

      // Procesamos el formulario
      //document.getElementById("formulario").submit();
    });
  });
});
/** END: Función para enviar el formulario del captcha */