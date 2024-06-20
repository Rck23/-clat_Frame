<?php 

// Define una constante para verificar si el script se está ejecutando localmente.
// Comprueba si la dirección IP remota es 127.0.0.1 (IPv4) o ::1 (IPv6), indicativos de un entorno local.
define('IS_LOCAL', in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']));

// Establece la zona horaria predeterminada del sistema a "America/Mexico_City".
// Esto afecta a funciones como date() y strftime().
date_default_timezone_set('America/Mexico_City');

// Define una constante para especificar el idioma del proyecto, en este caso, español ('es').
define('LANG', 'es');

// Define una constante para establecer la ruta base del proyecto.
// Si se está ejecutando en un entorno local, utiliza '/proyectos/MASTERPHP/', de lo contrario, deja un marcador de posición.
define('BASEPATH', IS_LOCAL ? '/proyectos/eclatFramework/' : '___EL BASEPATH EN PRODUCCION___');

// Define una constante para almacenar una sal de autenticación.
// Esta sal se puede utilizar para añadir seguridad a las contraseñas almacenadas o generadas.
define('AUTH_SALT', 'ÉclatFramework:)<3');

// Define una constante para el puerto en el que se ejecuta el servidor web.
// En este caso, se utiliza el puerto 8848.
define('PORT', '8848');

// Define una constante para la URL base del sitio.
// Dependiendo del entorno, apunta a una dirección local o deja un marcador de posición.
define('URL', IS_LOCAL ? 'http://127.0.0.1:'.PORT.'/proyectos/eclatFramework/' : '___URL PRODUCCION___');

// Define constantes para separadores de directorio y la ruta raíz del proyecto.
// DS es el separador de directorios utilizado por el sistema operativo actual.
// ROOT contiene la ruta absoluta del directorio actual.
define('DS', DIRECTORY_SEPARATOR); 
define('ROOT', getcwd().DS);

// Define rutas relativas dentro de la aplicación.
// Estas constantes ayudan a mantener la estructura del proyecto organizada y facilitan la navegación entre directorios.
define('APP', ROOT.'app'.DS);
define('CONTROLLERS', APP.'controllers'.DS);
define('CLASSES', APP.'classes'.DS);
define('CONFIG', APP.'config'.DS);
define('FUNCTIONS', APP.'functions'.DS);
define('MODELS', APP.'models'.DS);

// Define rutas para los templates, incluyendo includes, modules y views.
define('TEMPLATES', ROOT.'templates'.DS);
define('INCLUDES', TEMPLATES.'includes'.DS);
define('MODULES', TEMPLATES.'modules'.DS);
define('VIEWS', TEMPLATES.'views'.DS);

// Define rutas para los archivos o assets con base URL.
// Estas constantes permiten referenciar recursos estáticos como CSS, imágenes, JavaScript, etc., desde cualquier parte del proyecto.
define('ASSETS', URL.'assets/');
define('CSS', ASSETS.'css/');
define('FAVICON', ASSETS.'favicon/');
define('FONTS', ASSETS.'fonts/');
define('IMGS', ASSETS.'imgs/');
define('JS', ASSETS.'js/');
define('PLUGINS', ASSETS.'plugins/');
define('UPLOADS', ASSETS.'uploads/');

// Configuración de conexión a la base de datos local
// Especifica el motor de la base de datos a utilizar, en este caso MySQL.
define('LDB_ENGINE', 'mysql'); 
// Especifica el host donde se encuentra la base de datos local.
// Para conexiones locales, generalmente es 'localhost'.
define('LDB_HOST', 'localhost'); 
// Nombre de la base de datos local a la cual se conectará el sistema.
define('LDB_NAME', 'eclatFramework'); 
// Usuario con el cual se autentica para acceder a la base de datos local.
define('LDB_USER', 'root'); 
// Contraseña utilizada para autenticarse en la base de datos local.
define('LDB_PASS', ''); 
// Caracter set o codificación de caracteres utilizada por la base de datos local.
define('LDB_CHARSET', 'utf8'); 

// Configuración de conexión a la base de datos remota
// Deja un marcador de posición para indicar que se utilizará MySQL como motor de la base de datos.
define('DB_ENGINE', '___REMOTE mysql___'); 
// Host donde se encuentra alojada la base de datos remota.
// Debe ser reemplazado por la dirección IP o nombre de dominio del servidor remoto.
define('DB_HOST', '___REMOTE HOST___'); 
// Nombre de la base de datos remota a la cual se conectará el sistema.
define('DB_NAME', '__REMOTE DB__'); 
// Usuario con el cual se autentica para acceder a la base de datos remota.
define('DB_USER', '__REMOTE DB__'); 
// Contraseña utilizada para autenticarse en la base de datos remota.
define('DB_PASS', '__REMOTE DB__'); 
// Caracter set o codificación de caracteres utilizada por la base de datos remota.
define('DB_CHARSET', '__REMOTE CHARSET__'); 




