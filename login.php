<?php 

//Redirigir en caso de que exista
if (isset($_SESSION['user_id'])) {
  header('Location: index.php');
  exit;
}

require 'inc/_global/config.php';


?>

<?php 



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $username = $_POST['login-username'];
    $password = $_POST['login-password'];

    // Validar que los campos no estén vacíos
    if (!empty($username) && !empty($password)) {
        try {
            // Preparar la consulta para evitar inyecciones SQL
            $stmt = $conexion->prepare("SELECT id, nombre, email, password, perfil FROM usuarios WHERE email = :email LIMIT 1");
            $stmt->bindParam(':email', $username);
            $stmt->execute();

            // Verificar si se encontró un usuario
            if ($stmt->rowCount() == 1) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                // Verificar la contraseña (asegúrate de usar `password_hash()` al crear usuarios)
                if (password_verify($password, $user['password'])) {
                    // Establecer las variables de sesión
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_name'] = $user['nombre'];
                    $_SESSION['user_profile'] = $user['perfil'];

                    // Redirigir al usuario a la página principal o dashboard
                    header('Location: index.php');
                    exit;
                } else {
                    $error = "Credenciales incorrectas. Intente nuevamente.";
                }
            } else {
                $error = "No se encontró un usuario con ese email.";
            }
        } catch (PDOException $e) {
            $error = "Error en la conexión: " . $e->getMessage();
        }
    } else {
        $error = "Por favor, complete todos los campos.";
    }
}


?>


<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>



<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo34@2x.jpg');">
  <div class="row mx-0 bg-black-50">
    <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
      <div class="p-4">
        <p class="fs-3 fw-semibold text-white">
          Un mundo de posibilidades
        </p>
        <p class="text-white-75 fw-medium">
          Copyright &copy; <span data-toggle="year-copy"></span>
        </p>
      </div>
    </div>
    <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-body-extra-light">
      <div class="content content-full">
        <!-- Header -->
        <div class="px-4 py-2 mb-4">
          <a class="link-fx fw-bold" href="index.php">
            <i class="fa fa-fire"></i>
            <span class="fs-4 text-body-color">Palop</span><span class="fs-4 text-body-color"> Asesores</span>
          </a>
          <h1 class="h3 fw-bold mt-4 mb-2">Bienvenido al Sistema</h1>
          <h2 class="h5 fw-medium text-muted mb-0">Porfavor ingrese sus datos</h2>
        </div>
        <!-- END Header -->

        <!-- Sign In Form -->
        <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js -->
        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
        <form class="js-validation-signin px-4" action="login.php" method="POST">

        <!-- Mostrar mensaje de error si existe -->
          <?php if (isset($error)): ?>
              <div class="alert alert-danger" role="alert">
                  <?php echo $error; ?>
              </div>
          <?php endif; ?>

          <div class="form-floating mb-4">
            <input type="text" class="form-control" id="login-username" name="login-username" placeholder="Enter your username">
            <label class="form-label" for="login-username">Usuario</label>
          </div>
          <div class="form-floating mb-4">
            <input type="password" class="form-control" id="login-password" name="login-password" placeholder="Enter your password">
            <label class="form-label" for="login-password">Contraseña</label>
          </div>
          <div class="mb-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="login-remember-me" name="login-remember-me" checked>
              <label class="form-check-label" for="login-remember-me">Recuerdame</label>
            </div>
          </div>
          <div class="mb-4">
            <button type="submit" class="btn btn-lg btn-alt-primary fw-semibold">
              Ingresar
            </button>
            <div class="mt-4">
              <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="registro.php">
                Crear Cuenta
              </a>
              <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="recordar.php">
                Olvide mi Contraseña
              </a>
            </div>
          </div>
        </form>
        <!-- END Sign In Form -->
      </div>
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for jQuery Validation plugins) -->
<?php $cb->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>



<?php require 'inc/_global/views/footer_end.php'; ?>