//Variable buleana
var encendida = false;


//----ELEMENTOS DEL DOM ----////
var DOM_resultado = document.getElementById('resultado');
var DOM_num1 = document.getElementById('num1');
var DOM_num2 = document.getElementById('num2');


//Botones
var DOM_btnSumar = document.getElementById('btn_sumar');
var DOM_btnRestar = document.getElementById('btn_restar');
var DOM_btnMultiplicar = document.getElementById('btn_multiplicar');
var DOM_btnDividir = document.getElementById('btn_dividir');
var DOM_btnCalcular = document.getElementById('btn_calcular');

//Operacion, con el valor por defecto
var operacion = 'sumar';

///---INTERACTIVIDAD---//

//Botones con función antigua (necesita variable)
DOM_btnSumar.addEventListener('click',function(){
										calcular('sumar');
										});
								
DOM_btnRestar.addEventListener('click',function(){
										calcular('restar');
										});
DOM_btnMultiplicar.addEventListener('click',function(){
										calcular('multiplicar');
										});
										
DOM_btnDividir.addEventListener('click',function(){
										calcular('dividir');
										});
																		
//Botón calcular usando la variable global de operación
DOM_btnCalcular.addEventListener('click',calcular_todo);



//Función inicial
function init(){
	DOM_num1.focus();
}

function sumar(x,y){
	
	var resultado = x + y;
	
	return resultado;
	
}
function restar(x,y){
	
	var resultado = x - y;
	
	return resultado;
	
}
function multiplicar(x,y){
	
	var resultado = x * y;
	
	return resultado;
	
}
function dividir(x,y){
	
	var resultado = x / y;
	
	return resultado;
	
}

function obtenerX(){
	var x = parseInt(DOM_num1.value);
	
	return x;
}

function obtenerY(){
	var y = parseInt(DOM_num2.value);
	
	return y;
}


function calcular(op)
{
	
	var x = obtenerX();
	var y = obtenerY();
	
	
	var resultadoFinal;
	
	if(op == "sumar"){
		resultadoFinal = sumar(x,y);
	}
	else if(op == "restar"){
		resultadoFinal = restar(x,y);
	}
	else if(op == "multiplicar"){
		resultadoFinal = multiplicar(x,y);
	}
	else if(op == "dividir"){
		resultadoFinal = dividir(x,y);
	}
	else {
		resultadoFinal = "Ni idea";
	}
	
	
	console.log(resultadoFinal);
	DOM_resultado.innerHTML = resultadoFinal;
	
}


//Función que ejecuta el cálculo usando la variable global de opèración
function calcular_todo(){
	console.log('calculando: ' + operacion );	
	
	
	if(encendida === false)
	{
		alert('Enciende la calculadora');
	}
	else
	{
		
	
		var x = obtenerX();
		var y = obtenerY();
		
		if(operacion == "sumar"){
			resultadoFinal = sumar(x,y);
		}
		else if(operacion == "restar"){
			resultadoFinal = restar(x,y);
		}
		else if(operacion == "multiplicar"){
			resultadoFinal = multiplicar(x,y);
		}
		else if(operacion == "dividir"){
			resultadoFinal = dividir(x,y);
		}
		else {
			resultadoFinal = "Ni idea";
		}
		
		DOM_resultado.innerHTML = resultadoFinal;
	}
}