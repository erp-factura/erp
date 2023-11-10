<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Iniciar Sesión</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
	<div class="wrapper">	
			<div class="content">
				<div class="page-inner">
					<div class="row">
						<div class="col-md-4 ml-auto mr-auto">
							<div class="card">
								<div class="card-body">
                                    <h4 class="text-center">Iniciar Sesión</h4>
									<form action="functions/users/login.php" method="POST" onsubmit="return validateForm()">
										<div class="row">
											<div class="col-12 col-lg-12">
												<div class="form-group">
													<label>Usuario</label>
													<input name="username" type="text" class="form-control" placeholder="Escribir Aquí" autocomplete="off">
												</div>
												<div class="form-group">
													<label>Contraseña</label>
													<input name="password" type="password" class="form-control" placeholder="Escribir Aquí">
												</div>
											</div>
										
											<div class="col-md-4 ml-auto mr-auto">
												<button type="submit" class="btn btn-primary">Ingresar</button>
											</div>
										
										</div>
									</form>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>
	<script>
    function validateForm() {
        const username = document.getElementsByName('username')[0].value;
        const password = document.getElementsByName('password')[0].value;

        if (username.trim() === '' || password.trim() === '') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Por favor, completa ambos campos.'
            });
            return false;
        }

        return true;
    }
</script>
</body>
</html>