# ci3_google_auth
Ejemplo para integrar Login con Google en una Aplicación CodeIgniter 3.x

<p align="center">
    <img src="https://i.ibb.co/p1yhgnt/logueado.png">
</p>

## Instalación
- 1.- **Clone el proyecto en el Path de su Servidor Web**

`git clone git@github.com:Bleutecmedia/ci3_google_auth.git`


- 2.- **Dentro de `ci3_google_auth` instale `google/apiclient` vía composer:**

`composer require google/apiclient:"^2.7"`


- 3.- **Puede tener configurado en `application/config/config.php` la carga automática de Composer con:**

`$config['composer_autoload'] = TRUE;`


- 4.- **Crear las credenciales en nuetro Proyecto en la Consola Google para la Autenticación**
Ir a [https://console.developers.google.com/](https://console.developers.google.com/)
Seguir las instrucciones de las capturas de la carpeta `images`. 

Agregar en `application/config/app.php` el ID del Cliente y la Clave secreta obtenidas. El siguiente es un ejemplo
```php
$config['google']['client_id']        = 'asdasdasd.apps.googleusercontent.com';
$config['google']['client_secret']    = 'asdasd2wd';
$config['google']['redirect_uri']     = 'http://ci3-google-auth.net/ci3_google_auth/login/ingreso';
$config['google']['application_name'] = 'ci3_google_auth';
$config['google']['api_key']          = '';
$config['google']['scopes']           = array('email','profile');
```

- 7.- Si está usando servidor local, para el caso de Windows agregar en `C:\Windows\System32\drivers\etc\hosts`
`127.0.0.1 	 http://ci3-google-auth.net` para poder probar el login, ya que la Aplicación de Google no permite
agregar URL locales para probar el Auth.

- 6.- Probar y adecuar a cualquier proyecto.
