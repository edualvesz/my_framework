<?php 


use app\controllers\testeController;
use app\models\testeModel;

error_reporting(E_ALL ^ E_NOTICE);

require_once '../../vendor/autoload.php';
require_once '../controllers/indexController.php';
require_once '../models/indexModel.php';
require_once '../system/model.php';

$indexController = new testeController();
$indexController->salvaBanco();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        //abre o modal
        function chamaModal(){
        $('#chamaModal').modal('show')
        document.getElementById('cupom')
        document.getElementById('email')
        }

        //vai impedir que a pagina seja recarregada
        $('#form').submit(function(e){
        e.preventDefault()
        // //captura o valor dos inputs
            var cupom = $('#cupom').val()
            var email = $('#email').val()
        })

        //limpa os campos ao clicar no 'x' e no botao 'fechar' do modal
        function limpaCampos(){
            document.getElementById('cupom').value=''
            document.getElementById('email').value=''
        }

        function salvaNoBanco(){
            var cupom = $("#cupom").val()
            var email = $("#email").val()
            
            if(cupom == ""){
                Swal.fire({
                    icon: 'warning',
                    title: 'Vish...',
                    text: 'Você esqueceu de informar o cupom!',
                    })
            } else if (email == ""){
                Swal.fire({
                    icon: 'warning',
                    title: 'Vish...',
                    text: 'Você esqueceu de informar o email!',
                    })
            } else {
            var dados = new FormData()

                dados.append("cupom", cupom)
                dados.append("email", email)

                $.ajax({
                    url: '../controllers/indexController.php',
                    data: dados,
                    processData: false,
                    contentType: false,
                    complete: function (response){
                        //alert(response.responseText);
                        Swal.fire({
                            icon: 'success',
                            title: 'Boa!...',
                            text: 'As informações foram salvas com sucesso!',
                            })
                    },
                    error:function(){
                        alert("Erro");
                    }
                })
                //fecha o modal apos 0,4 segundos
                setTimeout(function() {
                    $('#chamaModal').modal('hide');
                }, 400);
            //limpa os campos
            document.getElementById('cupom').value=''
            document.getElementById('email').value=''
            } 
        }
    </script>
    <title>Document</title>
</head>
<body>
    <h4>Chamar modal</h4><br>
    <button type="button" class="btn btn-light" onclick="chamaModal()">Abrir modal</button>
</body>
</html>

<!-- ===============modal================= -->


<div class="modal fade" id="chamaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="limpaCampos()"></button>
      </div>
      <div class="modal-body">
      <form action="testeIndex.php" id="form" method="POST">
            <input class="form-control" type="hidden" id="id">		
            <div class="form-group row">
                <div class="col-sm-60">
                    <input type="text" class="form-control" id="cupom" placeholder="cupom" maxlength="50"  required="required" value="">
                </div>
            </div><br>
            <div class="form-group row">
                <div class="col-sm-60">
                    <input type="text" class="form-control" id="email" placeholder="email" maxlength="50"  required="required" value="">
                </div>
            </div><br>
            <div id="mensagens"></div> 
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="limpaCampos()">Fechar</button>
                <button type="button" id="salvar" class="btn btn-primary" onclick="salvaNoBanco()">Enviar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>