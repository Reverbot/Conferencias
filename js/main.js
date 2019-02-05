(function() {
	'use strict';
	let regalo = document.getElementById('regalo');
	document.addEventListener('DOMContentLoaded', function(){

		
		
		//campos datos usuarios
		const nombre = document.getElementById('nombre');
		const apellido = document.getElementById('apellido');
		const email = document.getElementById('email');
		
		//campos pases
		const pase_dia = document.getElementById('pase_dia');
		const pase_completo = document.getElementById('pase_completo');
		const pase_dosdias = document.getElementById('pase_dosdias');
		
		//botones y divs
		const errorDiv = document.getElementById('error');
		const calcular = document.getElementById('calcular');
		const botonRegistro = document.getElementById('btnRegistro');
		let resultado = document.getElementById('lista-productos');
		let sumaTotal = document.getElementById('suma-total');

		//extras

		const camisas = document.getElementById('camisa_evento');
		const etiquetas = document.getElementById('etiquetas');
		
		
		
		
		//addEvent Listener
		
		calcular.addEventListener('click', calcularMontos);
		pase_dia.addEventListener('blur', mostrarDias);
		pase_dosdias.addEventListener('blur', mostrarDias);
		pase_completo.addEventListener('blur', mostrarDias);
		//validaciones
		nombre.addEventListener('blur', validar);
		apellido.addEventListener('blur', validar);
		email.addEventListener('blur', validar);
		
		
		function calcularMontos (e) {
			e.preventDefault();
			console.log(regalo.value)

			if(regalo.value === ""){
				console.log('debes enviar un regalo');
			}else{
				let boletoDia = pase_dia.value,
					boleto2dias = pase_dosdias.value,
					boletoCompleto = pase_completo.value,
					cantidadCamiasas = camisas.value,
					cantidadEtiquetas = etiquetas.value;

					let totalPagar = (boletoDia * 30) + (boleto2dias * 45) + (boletoCompleto * 50) + ((cantidadCamiasas * 10) * .93) + (cantidadEtiquetas * 2);
					
					
					var listadoProducto = [];

					if(boletoDia >= 1){
						listadoProducto.push(boletoDia + ' Boletos por dia');
					}
					if(boleto2dias >= 1){
						listadoProducto.push(boleto2dias + ' Boletos por 2 dias');
					}
					if(boletoCompleto >= 1){
						listadoProducto.push(boletoCompleto + ' Boletos Completos');
					}
					if(cantidadCamiasas >= 1){
						listadoProducto.push(cantidadCamiasas + ' Camisas');
					}
					if(cantidadEtiquetas >= 1){
						listadoProducto.push(cantidadEtiquetas + ' Etiquetas');
					}
					resultado.style.display = 'block';
					resultado.innerHTML = "";
					listadoProducto.forEach( (elemento) => {
						resultado.innerHTML += `${elemento} </br>`;
					})

					sumaTotal.innerHTML = `$ ${totalPagar.toFixed(2)}`;
			}

			
		}

		function mostrarDias(){
			let 	boletoDia = pase_dia.value,
					boleto2dias = pase_dosdias.value,
					boletoCompleto = pase_completo.value;

			let diasElegidos = [];

			if(boletoDia >= 1){
				diasElegidos.push('viernes');
			}
			if(boleto2dias >= 1){
				diasElegidos.push('viernes', 'sabado');
			}
			if(boletoCompleto >= 1){
				diasElegidos.push('viernes', 'sabado', 'domingo');
			}

			diasElegidos.forEach( (elemento) => {
				document.getElementById(elemento).style.display = 'block';
			})
		}
		
		function validar() {
			if(this.value === ""){
				errorDiv.style.display = 'block';
				errorDiv.innerHTML = "No pueden estar vacios"
				
			}else{
				errorDiv.style.display = 'none';
			}

			if(this.type === 'email'){
				if(email.value.indexOf('@') > -1){
					if(email.value.indexOf('.') > -1){
						console.log('Correo valido');
					}else{
						errorDiv.style.display = 'block';
				errorDiv.innerHTML = "Correo no valido";
					}

						
					
				}else{
					errorDiv.style.display = 'block';
				errorDiv.innerHTML = "Correo no valido";
				} 
					
				
			}
		}
		
	});
})();

$(function(){
	$('.programa-evento .info-curso:first').show();
	$('.menu-programa a:first').addClass('activo');
	$('.menu-programa a').on('click', function(){
		$('.menu-programa a').removeClass('activo');
		$(this).addClass('activo');
		$('.ocultar').hide();
		const enlace = $(this).attr('href');
		
		$(enlace).fadeIn(1000);

		return false;
	});

	//animaciones para los numeros
	$('.resumen-evento li:nth-child(1) p').animateNumber({number: 6}, 1200);
	$('.resumen-evento li:nth-child(2) p').animateNumber({number: 15}, 1200);
	$('.resumen-evento li:nth-child(3) p').animateNumber({number: 3}, 1500);
	$('.resumen-evento li:nth-child(4) p').animateNumber({number: 9}, 1500);

	//cuenta regresiva
	$('.cuenta-regresiva').countdown('2019/01/31 09:00:00', function(event){
		$('#dias').html(event.strftime('%D'));
		$('#horas').html(event.strftime('%H'));
		$('#minutos').html(event.strftime('%M'));
		$('#segundos').html(event.strftime('%S'));
	})

	let windowHeight = $(window).height()
	let varraAltura = $('.barra').innerHeight();

	$(window).scroll(function() {
		let scroll = $(window).scrollTop();
		
		if(scroll > windowHeight) {
			$('.barra').addClass('fixed');
			$('body').css({'margin-top': varraAltura + 'px'})
		}else{
			$('.barra').removeClass('fixed');
			$('body').css({'margin-top': '0px'})
		}
	})

	//menu movil

	$('.menu-movil').on('click', function(){
		$('.navegacion-principal').slideToggle();
	})

	//colorbox

	$('.invitado-info').colorbox({inline:true, width:'50%'});
});