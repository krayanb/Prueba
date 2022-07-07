
var tableUf;
document.addEventListener('DOMContentLoaded', function(){

	tableUf = $('#tableUf').dataTable( {
		"aProcessing":true,
		"aServerSide":true,
        "language": {
        	"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Uf/get_Uf",
            "dataSrc":""
        },
        "columns":[
            {"data":"id"},
            {"data":"fecha"},
            {"data":"valor"},
            {"data":"options"}
            
        ],
        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order":[[0,"desc"]]  
    });

    //NUEVO Valor
    var formRol = document.querySelector("#formUf");
    formRol.onsubmit = function(e) {
        e.preventDefault();

        var intId = document.querySelector('#id').value;
        var strFecha = document.querySelector('#txtFecha').value;
        var strValor = document.querySelector('#txtValor').value; 
        if(strFecha == '' || strValor == '')
        {
            swal("Atención", "Todos los campos son obligatorios." , "error");
            return false;
        }
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = base_url+'/Uf/setUf'; 
        var formData = new FormData(formRol);
        request.open("POST",ajaxUrl,true);
        request.send(formData);
        request.onreadystatechange = function(){
           if(request.readyState == 4 && request.status == 200){
                
                var objData = JSON.parse(request.responseText);
                if(objData.status)
                {
                    $('#modalFormUf').modal("hide");
                    formRol.reset();
                    swal("Valor de UF", objData.msg ,"success");
                    tableUf.api().ajax.reload(function(){ 
                        fntEdit();
                        fntDel();
                   
                    });
                }else{
                    swal("Error", objData.msg , "error");
                }              
            } 
        }

        
    }

});

$('#tableUf').DataTable();

function openModal(){

    document.querySelector('#id').value ="";
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnText').innerHTML ="Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo Rol";
    document.querySelector("#formUf").reset();
	$('#modalFormUf').modal('show');
}

window.addEventListener('load', function() {
    fntEdit();
    fntDel();
}, false);

function fntEdit(){
    var btnEdit = document.querySelectorAll(".btnEdit");
    btnEdit.forEach(function(btnEdit) {
        btnEdit.addEventListener('click', function(){

            document.querySelector('#titleModal').innerHTML ="Actualizar Valor UF";
            document.querySelector('.modal-header').classList.replace("headerRegister", "headerUpdate");
            document.querySelector('#btnActionForm').classList.replace("btn-primary", "btn-info");
            document.querySelector('#btnText').innerHTML ="Actualizar";

            var id = this.getAttribute("rl");
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl  = base_url+'/Uf/getUf/'+id;
            request.open("GET",ajaxUrl ,true);
            request.send();

            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){
                    
                    var objData = JSON.parse(request.responseText);
                    if(objData.status)
                    {
                        document.querySelector("#id").value = objData.data.id;
                        document.querySelector("#txtFecha").value = objData.data.fecha;
                        document.querySelector("#txtValor").value = objData.data.valor;
                        $('#modalFormUf').modal('show');
                    }else{
                        swal("Error", objData.msg , "error");
                    }
                }
            }
            
        });
    });
}

function fntDel(){
    var btnDel = document.querySelectorAll(".btnDel");
    btnDel.forEach(function(btnDel) {
        btnDel.addEventListener('click', function(){
            var id = this.getAttribute("rl");
            swal({
                title: "Eliminar valor",
                text: "¿Realmente quiere eliminar el valor?",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Si, eliminar!",
                cancelButtonText: "No, cancelar!",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function(isConfirm) {
                
                if (isConfirm) 
                {
                    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                    var ajaxUrl = base_url+'/Uf/delUf/';
                    var strData = "id="+id;
                    request.open("POST",ajaxUrl,true);
                    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    request.send(strData);
                    request.onreadystatechange = function(){
                        if(request.readyState == 4 && request.status == 200){
                            var objData = JSON.parse(request.responseText);
                            if(objData.status)
                            {
                                swal("Eliminar!", objData.msg , "success");
                                tableUf.api().ajax.reload(function(){
                                    fntEdit();
                                    fntDel();
                                    
                                });
                            }else{
                                swal("Atención!", objData.msg , "error");
                            }
                        }
                    }
                }

            });

        });
    });
}

/***********************************************************************/
