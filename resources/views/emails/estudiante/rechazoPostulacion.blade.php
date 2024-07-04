<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Correo de Ejemplo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <div class="card mt-4 w-75">
                <div class="card-header bg-white border-0">
                    <img src="{{ asset('assets/images/logo/logo_UMx.png') }}" alt="Imagen 1" class="img-fluid float-left" style="width: 200px; height: 80px; padding-top: 10px">

                    <img src="{{ asset('assets/images/logo/LogoTalentia.png') }}" alt="Imagen 2" class="img-fluid float-right" style="width: 100px; height: 90px; padding-top: 10px">
                </div>
                <div class="card-body border-0">
                    <h5 class="card-title">Estimado/a [Nombre del Usuario],</h5>
                    <p>Estimado/a [Nombre del Postulante],
                        Lamentamos informarte que tu postulación para la vacante de [nombre de la
                        vacante] en la Bolsa de Empleo UMx no ha sido seleccionada en esta ocasión.
                        Agradecemos tu interés y te deseamos éxito en tus futuras búsquedas laborales.
                        Atentamente,
                        [Nombre de la empresa]</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>