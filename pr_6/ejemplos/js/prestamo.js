// JavaScript Document
/*---ELEMENTOS DEL DOM--*/

//Datos del alumno
var DOM_foto_alumno = document.getElementById('foto_alumno');
var DOM_nombre_alumno = document.getElementById('nombre_alumno');

//Formulario
var DOM_form_alumno = document.getElementById('formAlumno');
var DOM_code_alumno = document.getElementById('input_code');
var DOM_name_alumno = document.getElementById('input_name');
var DOM_btn_validar = document.getElementById('btn_validar');



/*---LISTENERS --*/
DOM_btn_validar.addEventListener('click',validarAlumno);

DOM_code_alumno.addEventListener('keyup',validarCode);


function init(){
	
	console.log('Iniciado');
	DOM_code_alumno.focus();
}

function validarAlumno(){
	//Validamos
	var code = DOM_code_alumno.value.trim();
	var name = DOM_name_alumno.value.trim();
	console.log(name);
	if(code != '' || name != '')
	{
		
		//Enviamos
		DOM_form_alumno.submit();
		//mostrarAlumno();
		
	}
	else
	{
		alert('Debes escribir el código o el nombre');
	}
}

function validarCode()
{
	var code = 	DOM_code_alumno.value.trim();
	var codeLength = code.length;
	console.log(codeLength);
	if(codeLength >= 10)
	{
		DOM_form_alumno.submit();
	}
}

function mostrarAlumno()
{
	DOM_foto_alumno.style.display = 'block';
	DOM_nombre_alumno.innerHTML = "Martin Prince";
}

