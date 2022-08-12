<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <title>Citaciones</title>

</head>

<body>


    <div style="width:100%;display:flex;justify-content:center;padding:5px">
        <div class="card col-12" style="padding:10px;">
            <div class="banner">
                <h1 style="color:white">Agenda tu Asesoria ya!</span>
            </div>
            <div class="col-12 d-flex justify-content-center mt-4">
                <div class="col-4">
                    <table class="table" style="width:100%;text-align:center;">
                        <thead>
                            <tr>
                                <th scope="col">Horarios</th>
                            </tr>
                        </thead>
                        <tbody id="horarios-tabla">



                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered " style="max-width: 35%;">
                <div class="modal-content ">
                    <div class="modal-header ">
                        <h5 class="modal-title text-center" id="exampleModalLabel">Agendar Asesoria</h5>
                        <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3  justify-content-center">
                            <div class="col-5 ">
                                <input type="text" class="form-control" placeholder="Documento" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <div class="col-5 ms-2">
                                <input type="text" class="form-control" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1">
                            </div>



                        </div>

                        <div class="input-group  justify-content-center ">
                            <div class="col-5 ">
                                <input type="text" class="form-control" placeholder="Empresa" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            
                            <div class="col-5 ms-2">
                                <input type="text" class="form-control" placeholder="Telefono" aria-label="Username" aria-describedby="basic-addon1">
                            </div>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Agendar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Modal -->


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="js/index.js"></script>

</html>