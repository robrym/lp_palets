<?php

/**
 * Obtiene todos los clientes desde la base de datos.
 *
 * @return array Lista de clientes.
 */
require 'inc/_global/database.php';

function obtenerClientes()
{
    global $conexion;
    $query = "SELECT id, nombre_cliente, email_cliente, cif,telefono, tiene_facturacion, url_instalacion FROM clientes";
    $stmt = $conexion->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Obtiene los datos de un cliente por su ID.
 *
 * @param int $cliente_id ID del cliente.
 * @return array|null Datos del cliente o null si no existe.
 */
function obtenerClientePorId($cliente_id)
{
    global $conexion;
    $query = "SELECT id, nombre_cliente,  email_cliente, cif,telefono,tiene_facturacion, url_instalacion FROM clientes WHERE id = :id LIMIT 1";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':id', $cliente_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

/**
 * Agrega un nuevo cliente a la base de datos.
 *
 * @param string $nombre_cliente Nombre del cliente.
 * @param string $email_cliente Email del cliente.
 * @param string $cif CIF del cliente.
 * @param string $telefono Teléfono del cliente.
 * @param string $url_instalacion URL o carpeta de instalación.
 * @return string Mensaje de éxito o error.
 */
function agregarCliente($nombre_cliente, $email_cliente, $cif, $telefono)
{
    global $conexion;

    try {
        $query = "INSERT INTO clientes (nombre_cliente, email_cliente, cif, telefono) 
                  VALUES (:nombre_cliente, :email_cliente, :cif, :telefono)";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':nombre_cliente', $nombre_cliente);
        $stmt->bindParam(':email_cliente', $email_cliente);
        $stmt->bindParam(':cif', $cif);
        $stmt->bindParam(':telefono', $telefono);
 
  
        $stmt->execute();
        
        return 'Cliente agregado exitosamente.';
    } catch (PDOException $e) {
        return 'Error al agregar el cliente: ' . $e->getMessage();
    }
}

/**
 * Modifica un cliente existente en la base de datos.
 *
 * @param int $cliente_id ID del cliente.
 * @param string $nombre_cliente Nombre del cliente.
 * @param string $email_cliente Email del cliente.
 * @param string $cif CIF del cliente.
 * @param string $telefono Teléfono del cliente.

 * @return string Mensaje de éxito o error.
 */
function modificarCliente($cliente_id, $nombre_cliente, $email_cliente, $cif, $telefono)
{
    global $conexion;

    try {
        $query = "UPDATE clientes 
                  SET nombre_cliente = :nombre_cliente, 
                      email_cliente = :email_cliente, 
                      cif = :cif, 
                      telefono = :telefono
                  WHERE id = :cliente_id";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':cliente_id', $cliente_id, PDO::PARAM_INT);
        $stmt->bindParam(':nombre_cliente', $nombre_cliente);
        $stmt->bindParam(':email_cliente', $email_cliente);
        $stmt->bindParam(':cif', $cif);
        $stmt->bindParam(':telefono', $telefono);
     
        $stmt->execute();
        
        return 'Cliente modificado exitosamente.';
    } catch (PDOException $e) {
        return 'Error al modificar el cliente: ' . $e->getMessage();
    }
}

/**
 * Elimina un cliente de la base de datos.
 *
 * @param int $cliente_id ID del cliente.
 * @return string Mensaje de éxito o error.
 */
function borrarCliente($cliente_id)
{
    global $conexion;

    try {
        $query = "DELETE FROM clientes WHERE id = :cliente_id";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':cliente_id', $cliente_id, PDO::PARAM_INT);
        $stmt->execute();
        
        return 'Cliente eliminado exitosamente.';
    } catch (PDOException $e) {
        return 'Error al eliminar el cliente: ' . $e->getMessage();
    }
}

/**
 * Genera una nueva instalación del sistema para un cliente.
 *
 * @param int $cliente_id ID del cliente.
 * @param string $nombre_cliente Nombre del cliente.
 * @return string Mensaje de éxito o error.
 */
function generarInstalacion($cliente_id, $nombre_cliente)
{
    global $conexion, $username, $password;

    // Limpiar el nombre del cliente para usarlo como nombre de instalación
    $nombre_instalacion = preg_replace('/[^a-zA-Z0-9]/', '_', strtolower($nombre_cliente));
    $ruta_instalacion = __DIR__ . '/../instalaciones/' . $nombre_instalacion . '/';

    // Verificar si la carpeta ya existe
    $carpeta_existente = false;
    if (file_exists($ruta_instalacion)) {
        $carpeta_existente = true;
        $mensaje = '<hr> La carpeta de instalación ya existe. Se procede a procesar la base de datos.';
    } else {
        // Crear la carpeta de instalación
        if (!mkdir($ruta_instalacion, 0755, true)) {
            return 'Error al crear la carpeta de instalación.';
        }
        $mensaje = '<hr> Carpeta creada exitosamente.';
    }

    // Descomprimir el sistema en la nueva carpeta si no existe
    if (!$carpeta_existente) {
        $zip = new ZipArchive;
        $zip_path = __DIR__ . '/sistema_base/sistema_base.zip';
        if ($zip->open($zip_path) === TRUE) {
            if (!$zip->extractTo($ruta_instalacion)) {
                return 'Error al extraer el archivo ZIP en la carpeta de instalación.';
            }
            $zip->close();
            $mensaje .= ' Sistema descomprimido correctamente.';
        } else {
            return 'Error al abrir el archivo ZIP. Verifica la ruta: ' . $zip_path;
        }
    } else {
        $mensaje .= ' <hr> Se omitió la descomposición del sistema porque la carpeta ya existía.';
    }

    // Crear una nueva base de datos para el cliente
    $nombre_base_datos = 'db_' . preg_replace('/[^a-zA-Z0-9]/', '_', strtolower($nombre_cliente));
    try {
        $conexion->exec("DROP DATABASE IF EXISTS `$nombre_base_datos`");
        $conexion->exec("CREATE DATABASE `$nombre_base_datos`");
        $mensaje .= ' Base de datos creada o reiniciada correctamente.';
    } catch (PDOException $e) {
        return 'Error al crear la base de datos: ' . $e->getMessage();
    }

    // Importar la estructura inicial de la base de datos
    $sql_path = __DIR__ . '/sistema_base/database_base.sql';
    $mysql_path = 'C:\\xampp\\mysql\\bin\\mysql.exe'; // Cambia esta ruta si es necesario
    $command = "\"$mysql_path\" -u {$username}" . ($password ? " -p{$password}" : "") . " {$nombre_base_datos} < \"{$sql_path}\"";

    exec($command . ' 2>&1', $output, $return_var);

    if ($return_var !== 0) {
        return 'Error al importar la base de datos. Salida del comando: ' . implode("\n", $output);
    }

    $mensaje .= ' <hr> Importación de la base de datos realizada correctamente.';

    // Modificar el archivo config.php con los nuevos valores
    $config_path = $ruta_instalacion . 'sistema_base/Core/View/Installer/Install.html.twig';
 
    if (file_exists($config_path)) {
        
        //return $config_path;
        $resultado = modificarArchivoTwig($config_path, $nombre_base_datos, $username, $password);

        $mensaje .= $resultado;

    } else {
        return '<hr> Archivo twig no encontrado en la ruta de instalación.';
    }

    // Generar la URL de instalación
    $url_instalacion = "/inc/instalaciones/".$nombre_instalacion."/sistema_base";

    // Actualizar la URL de instalación y el estado de facturación en la base de datos usando el cliente_id
    try {
        $query = "UPDATE clientes SET url_instalacion = :url_instalacion, tiene_facturacion = 1 WHERE id = :cliente_id";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':url_instalacion', $url_instalacion);
        $stmt->bindParam(':cliente_id', $cliente_id, PDO::PARAM_INT);
        $stmt->execute();
        $mensaje .= ' <hr>URL de instalación y estado de facturación actualizados correctamente.';
    } catch (PDOException $e) {
        return 'Error al actualizar la URL de instalación y el estado de facturación: ' . $e->getMessage();
    }

    return $mensaje;
}

function modificarArchivoTwig($nombre_instalacion, $nombre_base_datos, $db_user, $db_pass) {
    // Ajustar la ruta base de las instalaciones
    $ruta_base = realpath(__DIR__ . '/../../instalaciones'); // Ruta base de la carpeta de instalaciones
    $ruta_instalacion = $ruta_base . DIRECTORY_SEPARATOR . $nombre_instalacion . '/sistema_base';

    // Construir la ruta completa al archivo a modificar
    $ruta_archivo = $nombre_instalacion;

    // Verificar que el archivo exista antes de intentar modificarlo
    if (!file_exists($ruta_archivo)) {
        return 'El archivo install.html.twig no existe en la ruta especificada: ' . $ruta_archivo;
    }

    // Definir el nuevo contenido del archivo con los valores reemplazados
    $nuevo_contenido = <<<EOD
                        <!DOCTYPE html>
                        <html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
                        <head>
                            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
                            <title>{{ trans('installer') }}</title>
                            <meta name="description" content="{{ trans('meta-description') }}"/>
                            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                            <meta name="generator" content="FacturaScripts"/>
                            <meta name="robots" content="noindex"/>
                            <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"/>
                            <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css"/>
                            <link rel="shortcut icon" href="Core/Assets/Images/favicon.ico"/>
                            <link rel="apple-touch-icon" sizes="180x180" href="Core/Assets/Images/apple-icon-180x180.png"/>
                            <script src="node_modules/jquery/dist/jquery.min.js"></script>
                            <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
                            <script src="node_modules/@fortawesome/fontawesome-free/js/all.min.js"></script>
                            <script>
                                $(document).ready(function () {
                                    document.fs_install.fs_timezone.value = Intl.DateTimeFormat().resolvedOptions().timeZone;

                                    $('#db_type').on('change', function () {
                                        let str = '';
                                        $('#db_type option:selected').each(function () {
                                            str = $(this).val();
                                        });
                                        if (str === 'mysql') {
                                            $('#db_port').val(3306);
                                            $('#db_user').val('root');
                                            $("#mysql_socket_div").show();
                                        } else if (str === 'postgresql') {
                                            $('#db_port').val(5432);
                                            $('#db_user').val('postgres');
                                            $("#mysql_socket_div").hide();
                                        }
                                    });

                                    $('#fs_lang').on('change', function () {
                                        let lang = $("#fs_lang option:selected").val();
                                        window.location.href = location.pathname + '?fs_lang=' + lang;
                                    });
                                });
                            </script>
                        </head>
                        <body>
                        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
                            <a class="navbar-brand" href="" onclick="location.reload();">
                                <img src="Core/Assets/Images/logo.png" width="30" height="30" class="align-top" alt="FacturaScripts"/>
                                FacturaScripts {{ version }}
                            </a>
                            <ul class="nav navbar-nav mr-auto"></ul>
                            <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                                <li class="nav-item">
                                    <a class="nav-link" href="?phpinfo=TRUE">
                                        <i class="fas fa-info-circle fa-fw" aria-hidden="true"></i> phpinfo
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <br/>
                                    {% from 'Macro/Utils.html.twig' import message as show_message %}
                                    {{ show_message(log, ['error', 'critical'], 'danger') }}
                                    {{ show_message(log, ['warning'], 'warning') }}
                                    {{ show_message(log, ['notice'], 'success') }}
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="h2 mb-1">
                                        <i class="fa-solid fa-wand-magic-sparkles"></i> {{ trans('installer') }}
                                    </h1>
                                    <p>{{ trans('installer-p') }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card shadow mb-5">
                                        <div class="card-header">
                                            <ul class="nav nav-tabs card-header-tabs" role="tablist">
                                                <li role="presentation" class="nav-item">
                                                    <a class="nav-link active" href="#preferencias" aria-controls="preferencias" role="tab"
                                                    data-toggle="tab">
                                                        <i class="fas fa-cogs" aria-hidden="true"></i>&nbsp; {{ trans('preferences') }}
                                                    </a>
                                                </li>
                                                <li role="presentation" class="nav-item">
                                                    <a class="nav-link" href="#licencia" aria-controls="licencia" role="tab" data-toggle="tab">
                                                        <i class="far fa-file-alt"></i>&nbsp; {{ trans('license') }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <form name="fs_install" method="post" class="form">
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="preferencias">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    {{ trans('language') }}:
                                                                    <div class="input-group">
                                                                        <span class="input-group-prepend">
                                                                            <span class="input-group-text">
                                                                                <i class="fas fa-language"></i>
                                                                            </span>
                                                                        </span>
                                                                        <select id="fs_lang" name="fs_lang" class="form-control">
                                                                            {% for langCode, langName in i18n.getAvailableLanguages() %}
                                                                                {% if langCode == i18n.getLang() %}
                                                                                    <option value="{{ langCode }}"
                                                                                            selected>{{ langName }}</option>
                                                                                {% else %}
                                                                                    <option value="{{ langCode }}">{{ langName }}</option>
                                                                                {% endif %}
                                                                            {% endfor %}
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    {{ trans('timezone') }}:
                                                                    <div class="input-group">
                                                                        <span class="input-group-prepend">
                                                                            <span class="input-group-text">
                                                                                <i class="far fa-clock"></i>
                                                                            </span>
                                                                        </span>
                                                                        <select name="fs_timezone" class="form-control">
                                                                            {% for tz in timezones %}
                                                                                <option value="{{ tz }}">{{ tz }}</option>
                                                                            {% endfor %}
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    {{ trans('db-type') }}:
                                                                    <select id="db_type" name="fs_db_type" class="form-control">
                                                                        {% if fsc.db_type == 'mysql' %}
                                                                            <option value="mysql" selected>MySQL</option>
                                                                            <option value="postgresql">PostgreSQL</option>
                                                                        {% else %}
                                                                            <option value="mysql">MySQL</option>
                                                                            <option value="postgresql" selected>PostgreSQL</option>
                                                                        {% endif %}
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    {{ trans('db-host') }}:
                                                                    <input type="text" name="fs_db_host" value="{{ fsc.db_host }}"
                                                                        class="form-control" required/>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    {{ trans('db-port') }}:
                                                                    <input type="number" id="db_port" name="fs_db_port"
                                                                        value="{{ fsc.db_port }}" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    {{ trans('db-name') }}:
                                                                    <div class="input-group">
                                                                        <span class="input-group-prepend">
                                                                            <span class="input-group-text">
                                                                                <i class="fas fa-database"></i>
                                                                            </span>
                                                                        </span>
                                                                         <input type="text" name="fs_db_name" value="{$nombre_base_datos}" class="form-control" required/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    {{ trans('db-user') }}:
                                                                    <input type="text" id="db_user" name="fs_db_user" value="{$db_user}" class="form-control" required/>
       
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    {{ trans('db-password') }}:
                                                                    <div class="input-group">
                                                                        <span class="input-group-prepend">
                                                                            <span class="input-group-text">
                                                                                <i class="fas fa-key"></i>
                                                                            </span>
                                                                        </span>
                                                                         <input type="password" name="fs_db_pass" class="form-control" value="{$db_pass}"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="mysql_socket_div" class="col-sm-4">
                                                                <div class="form-group">
                                                                    {{ trans('mysql-socket') }}:
                                                                    <input type="text" name="mysql_socket" class="form-control"
                                                                        placeholder="{{ trans('optional') }}"/>
                                                                    <small class="form-text text-muted">{{ trans('mysql-socket-p') }}</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="licencia">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <pre>{{ license }}</pre>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-auto">
                                                        <div class="form-check mb-2 mb-sm-0">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="fs_debug" value="true"/>
                                                                {{ trans('debug-mode') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm">
                                                        <div class="form-check mb-2 mb-sm-0">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" name="fs_gtm" value="true"/>
                                                                {{ trans('send-anonymous-data') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-auto">
                                                        <button type="submit" class="btn btn-primary">
                                                            <i class="fas fa-check" aria-hidden="true"></i> {{ trans('accept') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-footer">
                                            &COPY; 2013-{{ 'now' | date('Y') }}
                                            <a href="https://facturascripts.com" rel="nofollow" target="_blank">FacturaScripts</a>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="card-deck">
                                        <div class="card shadow mb-3">
                                            <div class="card-body text-center">
                                                <i class="fa-solid fa-book fa-3x text-primary"></i>
                                            </div>
                                            <div class="card-footer">
                                                <a class="btn btn-block btn-lg btn-link" href="https://facturascripts.com/ayuda" rel="nofollow"
                                                target="_blank">{{ trans('help') }}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card shadow mb-3">
                                            <div class="card-body text-center">
                                                <i class="fa-solid fa-comment-dots fa-3x text-info"></i>
                                            </div>
                                            <div class="card-footer">
                                                <a class="btn btn-block btn-lg btn-link" href="https://facturascripts.com/contacto"
                                                rel="nofollow" target="_blank">{{ trans('support') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </body>
                        </html>
     EOD;

    // Escribir el contenido modificado de vuelta en el archivo
    if (file_put_contents($ruta_archivo, $nuevo_contenido) === false) {
        return 'Error al escribir los cambios en el archivo install.html.twig.';
    }

    return 'Archivo install.html.twig modificado correctamente.';

}




?>
