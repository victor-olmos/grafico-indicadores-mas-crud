<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<!-- STYLES -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Bootstrap 5 CSS -->
<link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
rel="stylesheet"
integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
crossorigin="anonymous">

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style {csp-style-nonce}>
		* {
			transition: background-color 300ms ease, color 300ms ease;
		}
		*:focus {
			background-color: rgba(221, 72, 20, .2);
			outline: none;
		}
		html, body {
			color: rgba(33, 37, 41, 1);
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
			font-size: 16px;
			margin: 0;
			padding: 0;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			text-rendering: optimizeLegibility;
		}
		
		
		footer {
			background-color: rgba(221, 72, 20, .8);
			text-align: center;
		}
		footer .environment {
			color: rgba(255, 255, 255, 1);
			padding: 2rem 1.75rem;
		}
		footer .copyrights {
			background-color: rgba(62, 62, 62, 1);
			color: rgba(200, 200, 200, 1);
			padding: .25rem 1.75rem;
		}
		@media (max-width: 559px) {
			header ul {
				padding: 0;
			}
			header .menu-toggle {
				padding: 0 1rem;
			}
			header .menu-item {
				background-color: rgba(244, 245, 246, 1);
				border-top: 1px solid rgba(242, 242, 242, 1);
				margin: 0 15px;
				width: calc(100% - 30px);
			}
			header .menu-toggle {
				display: block;
			}
			header .hidden {
				display: none;
			}
			header li.menu-item a {
				background-color: rgba(221, 72, 20, .1);
			}
			header li.menu-item a:hover,
			header li.menu-item a:focus {
				background-color: rgba(221, 72, 20, .7);
				color: rgba(255, 255, 255, .8);
			}
		}
	</style>
</head>
<body>

<script>  
    $(document).ready(function() {  
        $.ajax({  
            url: 'https://mindicador.cl/api/', 
            type: 'GET',  
            dataType: 'json',
           
            success: function(data) {  
                let template = '';
                let titletemplate = '';
               // let indicadores = data;
			   delete data.version;
			   delete data.autor;
			   delete data.fecha;


               Object.keys(data).forEach(key => {

				    console.log(key, data[key]);
				      template += `
                    <tr personaId="${key}" >
                        <td >${data[key].codigo} </td>
                        <td>${data[key].valor} </td>
                    </tr>
                    `

 // console.log(key, data[key].valor);
});$('#indicadores').html(template); 
               
             
                //let indicadores = JSON.parse(data);
              //  console.log(response);  

             //  response.foreach(item => console.log(item))
                
                   },  
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error in Database');  
            }  
        });  
    });  

</script>  



<!-- HEADER: MENU + HEROE SECTION -->
<header>

	<div class="">

		<h1 class="text-center">indicadores</h1>
		<div class="row">

        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" onclick="ivpFunction()" class="btn btn-primary">ivp</button>
            <button type="button" onclick="dolarFunction()" class="btn btn-primary">dolar</button>
            <button type="button" onclick="dolarintercambioFunction()" class="btn btn-primary">dolar intercambio</button>
            <button type="button" onclick="euroFunction()" class="btn btn-primary">euro</button>
            <button type="button" onclick="ipcFunction()" class="btn btn-primary">ipc</button>
            <button type="button" onclick="utmFunction()" class="btn btn-primary">utm</button>
            <button type="button" onclick="imacecFunction()" class="btn btn-primary">imacec</button>
            <button type="button" onclick="tpmFunction()" class="btn btn-primary">tpm</button>
            <button type="button" onclick="libraCobreFunction()" class="btn btn-primary">libra cobre</button>
            <button type="button" onclick="tasaDesempleoFunction()" class="btn btn-primary">tasa desempleo</button>
            <button type="button" onclick="bitcoinFunction()" class="btn btn-primary">bitcoin</button>
            <button type="button" onclick="ufFunction()" class="btn btn-primary">uf</button>
        </div>
</div>
	</div>

</header>

<!-- CONTENT -->

<section class="row">

	 <!-- TABLE  -->
                  <div id="contenedorprin" class="col-lg-4">
                        
                        <table class="table table-bordered table-sm">
                          <thead >
                            <tr id ="nombreyvalores">
                              <td>Nombre</td>
                              <td>valor</td>
                              
                            </tr>
                          </thead>
                          <tbody id="indicadores"></tbody>
                        </table>
                  </div>
                    </div>
  </div>


	<!-- GRAFICO -->
	            <div class="col-lg-8">
          
              <!-- <div id="myfirstchart"></div>-->
              <canvas id="myChart"></canvas>



              </div>
   
    </div>

	

</section>

<div class="further">

<h1 class="text-center"> Víctor Olmos</h1>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-group">
        <label>valor uf</label> <span id="error" class="text-danger ms-3"></span>
          <input type="text" onkeypress="return isNumberKey(event);" id="valor" placeholder="Nuevo valor" class="form-control" >
          <input id="iditem" name="iditem" type="hidden">
      </div>  
      </div>
      <div class="modal-footer" id="botones">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button id="#upd" type="button" class="btn btn-primary" onclick="registro()">Registrar</button>
      </div>
    </div>
  </div>
</div>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
	<div class="environment">

		<p>Pagina renderizada {elapsed_time} segundos</p>

	</div>

	<div class="copyrights">

		<p>&copy; <?= date('Y') ?> CodeIgniter Foundation. CodeIgniter is open source project released under the MIT
			open source licence.</p>

	</div>

</footer>

<!-- SCRIPTS -->

<script>

	function ivpFunction() {
		$.ajax({  
            url: 'https://mindicador.cl/api/ivp', 
            type: 'GET',  
            dataType: 'json',
           
            success: function(data) {  
                let template = '';
                let titletemplate = '';
                console.log(data['serie']);
             
         titletemplate += `
                        <td >Fecha</td>
                        <td>valor </td>
                        `
                        $('#nombreyvalores').html(titletemplate); 
                          Object.keys(data['serie']).forEach(key => {

                            let date = new Date(data['serie'][key].fecha);
                            
                        
                        //  let fecha2 = fecha1.format('MMMM Do YYYY, h:mm:ss a');
                       //   let fecha = moment(fecha1).format('MMMM Do YYYY, h:mm:ss a');
                         // console.log(moment().format('DD/MM/YYYY  h:mm:ss a'));
                     //     let date = fecha1.format('DD/MM/YYYY  h:mm:ss a');
//console.log(date.toLocaleDateString());
                         // console.log(fecha1.toLocaleString('en-US'));
                           
					  	            template += `
                            <tr ivpId="${key}" >
                                <td >${date.toLocaleDateString()} </td>
                                <td>${data['serie'][key].valor} </td>
                            </tr>
                            ` 
});
$('#indicadores').html(template);            
                   },  
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error en la peticion');  
            }  
        });
}
//////////////////////////////////////////////////////////////////////////////////////////
function dolarFunction() {
		$.ajax({  
            url: 'https://mindicador.cl/api/dolar', 
            type: 'GET',  
            dataType: 'json',
           
            success: function(data) {  
              let template = '';
                let titletemplate = '';
               // let indicadores = data;
			  
         titletemplate += `
                    
                        <td >Fecha</td>
                        <td>valor </td>
                    
                    `

                    $('#nombreyvalores').html(titletemplate); 

               	Object.keys(data['serie']).forEach(key => {
                  let date = new Date(data['serie'][key].fecha);
                            
				   
				template += `
                    <tr personaId="${key}" >
                        <td >${date.toLocaleDateString()} </td>
                        <td>${data['serie'][key].valor} </td>
                    </tr>
                    ` 

 // console.log(key, data[key].valor);
});

$('#indicadores').html(template); 
               
                
                   },  
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error en la peticion');  
            }  
        });
}
//////////////////////////////////////////////////////////////////////////////////////////

function dolarintercambioFunction() {
		$.ajax({  
            url: 'https://mindicador.cl/api/dolar_intercambio', 
            type: 'GET',  
            dataType: 'json',
           
            success: function(data) { 
              let template = '';
                let titletemplate = '';
               // let indicadores = data;
			
         titletemplate += `
                    
                        <td >Fecha</td>
                        <td>valor </td>
                    
                    `

                    $('#nombreyvalores').html(titletemplate); 

               	Object.keys(data['serie']).forEach(key => {
                let date = new Date(data['serie'][key].fecha);
				   
				template += `
                    <tr personaId="${key}" >
                        <td >${date.toLocaleDateString()} </td>
                        <td>${data['serie'][key].valor} </td>
                    </tr>
                    ` 

 // console.log(key, data[key].valor);
});

$('#indicadores').html(template); 
               
                
                   },  
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error en la peticion');  
            }  
        });
}

//////////////////////////////////////////////////////////////////////////////////////////

function euroFunction() {
		$.ajax({  
            url: 'https://mindicador.cl/api/euro', 
            type: 'GET',  
            dataType: 'json',
           
            success: function(data) {  
              let template = '';
                let titletemplate = '';
               // let indicadores = data;
			  
         titletemplate += `
                    
                        <td >Fecha</td>
                        <td>valor </td>
                    
                    `

                    $('#nombreyvalores').html(titletemplate); 

               	Object.keys(data['serie']).forEach(key => {
                let date = new Date(data['serie'][key].fecha);
				template += `
                    <tr personaId="${key}" >
                        <td >${date.toLocaleDateString()} </td>
                        <td>${data['serie'][key].valor} </td>
                    </tr>
                    ` 

 // console.log(key, data[key].valor);
});

$('#indicadores').html(template); 
               
                
                   },  
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error en la peticion');  
            }  
        });
}

//////////////////////////////////////////////////////////////////////////////////////////

function ipcFunction() {
		$.ajax({  
            url: 'https://mindicador.cl/api/ipc', 
            type: 'GET',  
            dataType: 'json',
           
            success: function(data) {
              let template = '';
                let titletemplate = '';
               // let indicadores = data;
			   
         titletemplate += `
                    
                        <td >Fecha</td>
                        <td>valor </td>
                    
                    `

                    $('#nombreyvalores').html(titletemplate); 

               	Object.keys(data['serie']).forEach(key => {
                let date = new Date(data['serie'][key].fecha);
				   
				template += `
                    <tr personaId="${key}" >
                        <td >${date.toLocaleDateString()} </td>
                        <td>${data['serie'][key].valor} </td>
                    </tr>
                    ` 

 // console.log(key, data[key].valor);
});

$('#indicadores').html(template); 
               
                
                   },  
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error en la peticion');  
            }  
        });
}

//////////////////////////////////////////////////////////////////////////////////////////

function utmFunction() {
		$.ajax({  
            url: 'https://mindicador.cl/api/utm', 
            type: 'GET',  
            dataType: 'json',
           
            success: function(data) {
              let template = '';
                let titletemplate = '';
               // let indicadores = data;
			  
         titletemplate += `
                    
                        <td >Fecha</td>
                        <td>valor </td>
                    
                    `

                    $('#nombreyvalores').html(titletemplate); 

               	Object.keys(data['serie']).forEach(key => {
                  let date = new Date(data['serie'][key].fecha);
				template += `
                    <tr personaId="${key}" >
                        <td >${date.toLocaleDateString()} </td>
                        <td>${data['serie'][key].valor} </td>
                    </tr>
                    ` 

 // console.log(key, data[key].valor);
});

$('#indicadores').html(template); 
               
                
                   },  
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error en la peticion');  
            }  
        });
}
//////////////////////////////////////////////////////////////////////////////////////////


function imacecFunction() {
		$.ajax({  
            url: 'https://mindicador.cl/api/imacec', 
            type: 'GET',  
            dataType: 'json',
           
             success: function(data) {
              let template = '';
                let titletemplate = '';
               // let indicadores = data;
			  
         titletemplate += `
                    
                        <td >Fecha</td>
                        <td>valor </td>
                    
                    `

                    $('#nombreyvalores').html(titletemplate); 

               	Object.keys(data['serie']).forEach(key => {
                  let date = new Date(data['serie'][key].fecha);
				   
				template += `
                    <tr personaId="${key}" >
                        <td >${date.toLocaleDateString()} </td>
                        <td>${data['serie'][key].valor} </td>
                    </tr>
                    ` 

 // console.log(key, data[key].valor);
});

$('#indicadores').html(template); 
               
                
                   },  
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error en la peticion');  
            }  
        });
}

//////////////////////////////////////////////////////////////////////////////////////////


function tpmFunction() {
		$.ajax({  
            url: 'https://mindicador.cl/api/tpm', 
            type: 'GET',  
            dataType: 'json',
           
            success: function(data) {  
              let template = '';
                let titletemplate = '';
               // let indicadores = data;
			 
         titletemplate += `
                    
                        <td >Fecha</td>
                        <td>valor </td>
                    
                    `

                    $('#nombreyvalores').html(titletemplate); 

               	Object.keys(data['serie']).forEach(key => {
                  let date = new Date(data['serie'][key].fecha);
				template += `
                    <tr personaId="${key}" >
                        <td >${date.toLocaleDateString()} </td>
                        <td>${data['serie'][key].valor} </td>
                    </tr>
                    ` 

 // console.log(key, data[key].valor);
});

$('#indicadores').html(template); 
               
                
                   },  
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error en la peticion');  
            }  
        });
}

//////////////////////////////////////////////////////////////////////////////////////////

function libraCobreFunction() {
		$.ajax({  
            url: 'https://mindicador.cl/api/libra_cobre', 
            type: 'GET',  
            dataType: 'json',
           
            success: function(data) { 
              let template = '';
                let titletemplate = '';
               // let indicadores = data;
			   
         titletemplate += `
                    
                        <td >Fecha</td>
                        <td>valor </td>
                    
                    `

                    $('#nombreyvalores').html(titletemplate); 

               	Object.keys(data['serie']).forEach(key => {
                  let date = new Date(data['serie'][key].fecha);
				template += `
                    <tr personaId="${key}" >
                        <td >${date.toLocaleDateString()} </td>
                        <td>${data['serie'][key].valor} </td>
                    </tr>
                    ` 

 // console.log(key, data[key].valor);
});

$('#indicadores').html(template); 
               
                
                   },  
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error en la peticion');  
            }  
        });
}

//////////////////////////////////////////////////////////////////////////////////////////

function tasaDesempleoFunction() {
		$.ajax({  
            url: 'https://mindicador.cl/api/tasa_desempleo', 
            type: 'GET',  
            dataType: 'json',
           
            success: function(data) {  
              let template = '';
                let titletemplate = '';
               // let indicadores = data;
			  
         titletemplate += `
                    
                        <td >Fecha</td>
                        <td>valor </td>
                    
                    `

                    $('#nombreyvalores').html(titletemplate); 

               	Object.keys(data['serie']).forEach(key => {
                  let date = new Date(data['serie'][key].fecha);
				template += `
                    <tr personaId="${key}" >
                        <td >${date.toLocaleDateString()} </td>
                        <td>${data['serie'][key].valor} </td>
                    </tr>
                    ` 

 // console.log(key, data[key].valor);
});

$('#indicadores').html(template); 
               
                
                   },  
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error en la peticion');  
            }  
        });
}

//////////////////////////////////////////////////////////////////////////////////////////

function bitcoinFunction() {
		$.ajax({  
            url: 'https://mindicador.cl/api/bitcoin', 
            type: 'GET',  
            dataType: 'json',
           
            success: function(data) {  
      

              let template = '';
                let titletemplate = '';
               // let indicadores = data;
			   
         titletemplate += `
                    
                        <td >Fecha</td>
                        <td>valor </td>
                    
                    `

                    $('#nombreyvalores').html(titletemplate); 

               	Object.keys(data['serie']).forEach(key => {
                  let date = new Date(data['serie'][key].fecha);
				template += `
                    <tr personaId="${key}" >
                        <td >${date.toLocaleDateString()} </td>
                        <td>${data['serie'][key].valor} </td>
                    </tr>
                    ` 

 // console.log(key, data[key].valor);
});

$('#indicadores').html(template); 
               
                
                   },  
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error en la peticion');  
            }  
        });
}

//////////////////////////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////////////////////////////

function registro() {
  
  
  var nuevoValor =  $('#valor').val();
  const now = new Date().toLocaleDateString();

  if (nuevoValor.length == 0 ) {
    let error_name = 'Error Campo Vacío o Atributos invalidos';
    $('#error').text(error_name);
   
  }else{
    var data ={
      'valor': nuevoValor,
      'fecha': now
    };
    console.log(nuevoValor);
    console.log(now);
    $.ajax({
        method: "POST",
        url: "ufindicator/create",
        headers: {'X-Requested-With': 'XMLHttpRequest'},
        data: data,
        success: function (response){
          $('#exampleModal').modal('hide');
          $('#exampleModal').find('input').val('');
          $("#indicadores").reload();


          alertify.set('notifier','position','top-right');
          alertify.success(response.status); 

        }
    });
  }
  console.log(nuevoValor);
  ufFunction();
 // var valor =  $('#valor').val()
 // console.log( typeof nuevoValor );
}

//////////////////////////////////////////////////////////////////////////////////////////

$(document).on('click', '.persona-delete', function() {
  console.log($(this));
      const element = $(this)[0].parentElement.parentElement;
       let id = $(element).attr('ufId');
       console.log(id);
        
        $.ajax({  
        url:"ufindicator/delete",
        type: "POST",
        dataType:'json',
        data: {'uf_id': id},
        success:function(data){
        
              }  
});
        
    ufFunction();
        
    });

//////////////////////////////////////////////////////////////////////////////////////////

$(document).on('click', '.uf-edit', function() {
  let template = '';
 // $('#upd').html(titletemplate); 

 template += `<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button id="#upd" type="button" class="btn btn-primary" onclick="update()">Actualizar</button>
              ` 
              $('#botones').html(template); 
  console.log($(this));
        const element = $(this)[0].parentElement.parentElement;
       let id = $(element).attr('ufId');
       console.log(id);
       
       $.ajax({  
    url:"ufindicator/edit",
    type: "POST",
    dataType:'json',
    data: {'uf_id': id},
    success:function(data){
      
      console.log(data['uf'].id);
      $('#valor').val(data['uf'].valor);
      $('#iditem').val(data['uf'].id);

      
      
      //.innerHTML = "<button id="#upd" type="button" class="btn btn-primary" onclick="registro()">Actualizar</button>";
 
     

      
    }  
    
       })
       
      
       
});
//////////////////////////////////////////////////////////////////////////////////////////
function ufFunction() {

  

		$.ajax({  
            url: 'ufindicator/list', 
            type: 'GET',  
            dataType: 'json',
           
            success: function(data) {
            
                let template = '';
                let titletemplate = '';
               // let indicadores = data;
               
			   titletemplate += `
                    
                        <td >Fecha</td>
                        <td>valor </td>
                        <td> <button type="button" class="botonr" data-bs-toggle="modal" data-bs-target="#exampleModal">Nuevo Registro</button></td>
                    
                    `
                    $('#nombreyvalores').html(titletemplate); 

               	Object.keys(data['uf']).forEach(key => {
				 //  console.log(key,data['uf'][key].id);
				template += `
                    <tr ufId="${data['uf'][key].id}" >
                        <td >${data['uf'][key].fecha} </td>
                        <td>${data['uf'][key].valor} </td>
                        <td><button type="button" class="uf-edit" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button></td>
  
                        <td> <button type="button" class="persona-delete">eliminar</button></td>
                    </tr>
                    ` 

 // console.log(key, data[key].valor);
});

$('#indicadores').html(template); 

             
                
                   },  
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error en la peticion');  
            }  
        });
}



//////////////////////////////////////////////////////////////////////////////////////////

function update() {
  
  var valorUpdate =  $('#valor').val();
  var id = $('#iditem').val();
  const now = new Date().toLocaleDateString();

  if (valorUpdate.length == 0 ) {
    let error_name = 'Error Campo Vacío o Atributos invalidos';
    $('#error').text(error_name);
   
  }
  console.log(valorUpdate);
  console.log(id);
  console.log(now);
  var dataupdate ={
      'id': id,
      'valor': valorUpdate,
      'fecha': now
    };

    $.ajax({  
    url:"ufindicator/update",
    type: "POST",
    dataType:'json',
    data: dataupdate,
    success:function(data){
      
      $('#exampleModal').modal('hide');
          $('#exampleModal').find('input').val('');
          $("#indicadores").reload();
      
    }  
    
       });

       ufFunction();

  
 
 }

//////////////////////////////////////////////////////////////////////////////////////////
$(document).on('click', '.botonr', function() {
  
  $('#exampleModal').modal('hide');
          $('#exampleModal').find('input').val('');

          let template = '';
 // $('#upd').html(titletemplate); 

 template += `<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button id="#upd" type="button" class="btn btn-primary" onclick="registro()">Registrar</button>
              ` 
              $('#botones').html(template); 

              
});



////////////////////////////MODAL NUMEROS/////////////////////////////////////////////////////




function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    return !(charCode > 31 && (charCode < 48 || charCode > 57));
}



////////////////////////////Grafico/////////////////////////////////////////////////////






    $(document).ready(function() {
      var dolar = [];
            var nombredolar = [];
            var fechadolar = [];
            var valordolar = [];

            var nombreeuro = [];
            var fechaeuro = [];
            var valoreuro = [];

            var nombreivp = [];
            var fechaivp = [];
            var valorivp = [];

            var nombredolarcambio = [];
            var fechadolarcambio = [];
            var valordolarcambio = [];

            var nombreipc = [];
            var fechaipc = [];
            var valoripc = [];

            var nombreutm = [];
            var fechautm = [];
            var valorutm = [];

            var nombreimacec = [];
            var fechaimacec = [];
            var valorimacec = [];

            var nombretpm = [];
            var fechatpm = [];
            var valortpm = [];

            var nombrelibracobre = [];
            var fechalibracobre = [];
            var valorlibracobre = [];

            var nombretasadesempleo = [];
            var fechatasadesempleo = [];
            var valortasadesempleo = [];

            
            var nombrebitcoin = [];
            var fechabitcoin = [];
            var valorbitcoin = [];
            
            var nombreuf = [];
            var fechauf = [];
            var valoruf = [];
           // var valorivp = [];
           
    $.ajax({
      url: 'https://mindicador.cl/api/dolar', 
            type: 'GET',  
            dataType: 'json',
        success: function(response) {
          
          nombredolar.push(response.codigo);
            Object.keys(response['serie']).forEach(key => {
              let date = new Date(response['serie'][key].fecha);
            fechadolar.push(date.toLocaleDateString());
            valordolar.push(response['serie'][key].valor);

          });


          
        },
        error: function(data) {
            console.log(data);
        }
    });
    $.ajax({
      url: 'https://mindicador.cl/api/euro', 
            type: 'GET',  
            dataType: 'json',
        success: function(response) {
          
          nombreeuro.push(response.codigo);
            Object.keys(response['serie']).forEach(key => {
              let date = new Date(response['serie'][key].fecha);
            fechaeuro.push(date.toLocaleDateString());
            valoreuro.push(response['serie'][key].valor);

          });


          
        },
        error: function(data) {
            console.log(data);
        }
    });

    $.ajax({
      url: 'https://mindicador.cl/api/ivp', 
            type: 'GET',  
            dataType: 'json',
        success: function(response) {
          
          nombreivp.push(response.codigo);
            Object.keys(response['serie']).forEach(key => {
              let date = new Date(response['serie'][key].fecha);
            fechaivp.push(date.toLocaleDateString());
            valorivp.push(response['serie'][key].valor);

          });


          
        },
        error: function(data) {
            console.log(data);
        }
    });

    $.ajax({
      url: 'https://mindicador.cl/api/dolar_intercambio', 
            type: 'GET',  
            dataType: 'json',
        success: function(response) {
          
          nombredolarcambio.push(response.codigo);
            Object.keys(response['serie']).forEach(key => {
              let date = new Date(response['serie'][key].fecha);
            fechadolarcambio.push(date.toLocaleDateString());
            valordolarcambio.push(response['serie'][key].valor);

          });


          
        },
        error: function(data) {
            console.log(data);
        }
    });

    $.ajax({
      url: 'https://mindicador.cl/api/ipc', 
            type: 'GET',  
            dataType: 'json',
        success: function(response) {
          
          nombreipc.push(response.codigo);
            Object.keys(response['serie']).forEach(key => {
              let date = new Date(response['serie'][key].fecha);
            fechaipc.push(date.toLocaleDateString());
            valoripc.push(response['serie'][key].valor);

          });


          
        },
        error: function(data) {
            console.log(data);
        }
    });

    $.ajax({
      url: 'https://mindicador.cl/api/utm', 
            type: 'GET',  
            dataType: 'json',
        success: function(response) {
          
          nombreutm.push(response.codigo);
            Object.keys(response['serie']).forEach(key => {
              let date = new Date(response['serie'][key].fecha);
            fechautm.push(date.toLocaleDateString());
            valorutm.push(response['serie'][key].valor);

          });


          
        },
        error: function(data) {
            console.log(data);
        }
    });

    $.ajax({
      url: 'https://mindicador.cl/api/libra_cobre', 
            type: 'GET',  
            dataType: 'json',
        success: function(response) {
          
          nombrelibracobre.push(response.codigo);
            Object.keys(response['serie']).forEach(key => {
              let date = new Date(response['serie'][key].fecha);
            fechalibracobre.push(date.toLocaleDateString());
            valorlibracobre.push(response['serie'][key].valor);

          });


          
        },
        error: function(data) {
            console.log(data);
        }
    });


    $.ajax({
      url: 'https://mindicador.cl/api/tasa_desempleo', 
            type: 'GET',  
            dataType: 'json',
        success: function(response) {
          
          nombretasadesempleo.push(response.codigo);
            Object.keys(response['serie']).forEach(key => {
              let date = new Date(response['serie'][key].fecha);
            fechatasadesempleo.push(date.toLocaleDateString());
            valortasadesempleo.push(response['serie'][key].valor);

          });


          
        },
        error: function(data) {
            console.log(data);
        }
    });

    $.ajax({
      url: 'https://mindicador.cl/api/bitcoin', 
            type: 'GET',  
            dataType: 'json',
        success: function(response) {
          
          nombrebitcoin.push(response.codigo);
            Object.keys(response['serie']).forEach(key => {
              let date = new Date(response['serie'][key].fecha);
            fechabitcoin.push(date.toLocaleDateString());
            valorbitcoin.push(response['serie'][key].valor);

          });


          
        },
        error: function(data) {
            console.log(data);
        }
    });

    $.ajax({
      url: 'https://mindicador.cl/api/tasa_desempleo', 
            type: 'GET',  
            dataType: 'json',
        success: function(response) {
          
          nombretasadesempleo.push(response.codigo);
            Object.keys(response['serie']).forEach(key => {
              let date = new Date(response['serie'][key].fecha);
            fechatasadesempleo.push(date.toLocaleDateString());
            valortasadesempleo.push(response['serie'][key].valor);

          });


          
        },
        error: function(data) {
            console.log(data);
        }
    });

    $.ajax({
      url: 'https://mindicador.cl/api/uf', 
            type: 'GET',  
            dataType: 'json',
        success: function(response) {
          
          nombreuf.push(response.codigo);
            Object.keys(response['serie']).forEach(key => {
              let date = new Date(response['serie'][key].fecha);
            fechauf.push(date.toLocaleDateString());
            valoruf.push(response['serie'][key].valor);

          });


          
        },
        error: function(data) {
            console.log(data);
        }
    });
   

    
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: fechadolar,fechaeuro, fechaivp, fechadolarcambio, fechaipc,fechautm,fechalibracobre, fechatasadesempleo,fechabitcoin, fechauf,
        datasets: [{
            label: nombredolar,
            data: valordolar,
            backgroundColor: 'transparent',
            borderColor: '#ED7E15',
            borderWidth: 3
        },{
            label: nombreeuro,
            data: valoreuro,
            backgroundColor: 'transparent',
            borderColor: 'silver',
            borderWidth: 3
        },
        {
            label: nombreivp,
            data: valorivp,
            backgroundColor: 'transparent',
            borderColor: '#AEF114 ',
            borderWidth: 3
        },
        {
            label: nombredolarcambio,
            data: valordolarcambio,
            backgroundColor: 'transparent',
            borderColor: 'gold ',
            borderWidth: 3
        },
        {
            label: nombreipc,
            data: valoripc,
            backgroundColor: 'transparent',
            borderColor: '#566573 ',
            borderWidth: 3
        },
        {
            label: nombreutm,
            data: valorutm,
            backgroundColor: 'transparent',
            borderColor: '#0080AC ',
            borderWidth: 3
        },
        {
            label: nombrelibracobre,
            data: valorlibracobre,
            backgroundColor: 'transparent',
            borderColor: '#02A580',
            borderWidth: 3
        },
       
        {
            label: nombrebitcoin,
            data: valorbitcoin,
            backgroundColor: 'transparent',
            borderColor: '#1AD6B9',
            borderWidth: 3
        },
        {
            label: nombreuf,
            data: valoruf,
            backgroundColor: 'transparent',
            borderColor: '#E88C06 ',
            borderWidth: 3
        },
        {
            label: nombretasadesempleo,
            data: valortasadesempleo,
            backgroundColor: 'transparent',
            borderColor: '#FE007F ',
            borderWidth: 3
        },
      ]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

});

</script>


<script>






    
</script>

</body>
</html>
