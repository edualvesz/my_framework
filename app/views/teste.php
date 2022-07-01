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
        function salvaEmail(){
            var email = $("#email").val()

            if(email == ""){
                Swal.fire({
                    icon: 'error',
                    title: 'EITA!!',
                    text: 'Não foi possível salvar a informação!',
                    // footer: '<a href="">Por quê estou vendo isso?</a>'
                })
            } else {
                var info = new FormData()

                info.append("email", email)
                
                $.ajax({
                    type: 'POST',
                    url: '/index/salvaemail',
                    data: info,
                    contentType: false,
                    processData: false,
                    beforeSend: function(html){
                    }
                })
            }
        }
    </script>
    <title>Document</title>
</head>
<body>
    <form id="form" method="POST">
        <input type="text" id="email">
        <button type="button" class="btn btn-success" onclick="salvaEmail()">Salvar</button>
    </form>
</body>
</html>