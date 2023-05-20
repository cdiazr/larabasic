<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
    <a href="https://laravel-livewire.com" target="_blank">
        <img src="https://www.bacancytechnology.com/main/img/laravel-liwevire/xbanner-vector-logo.png.pagespeed.ic.i58FML62Ai.png" width="35%">
    </a>
</p>

# Larabasic

Larabasic es un esqueleto de proyecto combinando Laravel para el back-end y Livewire para el front-end.

La versión de Laravel con la que se  ha construido este proyecto base es la v9.52.7. El desarrollador podrá actualizar a la versión 10 a partir de la v8.1 de PHP.

## Chat OpenAI API
El chat OpenAI para este proyecto será utilizado como asistente inteligente para trabajar con la app. Se irá alimentando tanto de las peticiones del cliente como de las soluciones que hayan para esa petición hasta el punto en que el bot, por si solo, pueda dar
solución al cliente de su duda.

Su implementación está basada en fases:
- Fase 1: Habilitar/deshabilitar del chatbot con GPT
- Fase 2: Servicio de conexión, realización de "prompts" y recepción de "completions".
- Fase 3: (Aprendizage) Registro de palabras clave por cada tipo de petición y su solución correspondiente.
- Fase 4: (Test y ejecución) El bot podrá ponerse a trabajar y empezará el trabajo nuestro para depurar sus respuestas y soluciones a cada tipo de petición.

## Acerca de la plantilla utilizada

Este proyecto usa la plantilla [AdminLTE](https://adminlte.io/). Recomiendo la lectura de su [documentación](https://adminlte.io/docs) para la correcta implementación de los diferentes componentes que usa de manera rápida y eficaz sin riesgo a romper los estilos de los elementos y que sea compatible con el modo oscuro.

Esta plantilla está preparada para combinar con diferentes colores de manera rápida para poderse adaptar a los colores del cliente.

## Acerca de la encriptación de las variables de entorno
Las variables de entorno se pueden encriptar en el archivo .env.encrypted con el siguiente comando:<br>
<code>php artisan env:encrypt</code><br>

:bangbang: Pero si se borra el archivo .env original después de haber encriptado las variables de entorno, la aplicación dejará de funcionar, ya que Laravel necesita acceder al archivo .env para desencriptar las variables de entorno. :bangbang:

:warning: La encriptación de variables de entorno en Laravel no está diseñada para ocultar el contenido del archivo .env de manera absoluta, sino más bien para evitar que las variables de entorno se revelen en texto plano en caso de que el archivo .env sea comprometido. Por lo tanto, es importante que protejas el acceso al archivo .env para evitar que personas no autorizadas lo vean en caso de que se produzca una brecha de seguridad en tu aplicación.

**ACCIÓN**<br>
Lo que se puede hacer para mejorar la seguridad de tus variables de entorno es :exclamation: establecer permisos adecuados en el archivo .env, asegurándote de que solo los usuarios que necesitan acceso puedan ver su contenido.:exclamation: También puedes considerar almacenar tus variables de entorno en un proveedor de servicios de almacenamiento seguro, como [AWS Secrets Manager](https://aws.amazon.com/es/secrets-manager/) o [Google Cloud Secret Manager](https://packagist.org/packages/google/cloud-secret-manager), y luego acceder a ellas en tu aplicación utilizando el SDK proporcionado por el proveedor de servicios. Esto puede aumentar la seguridad de tus variables de entorno y reducir el riesgo de que sean comprometidas.

## Paquetes instalados

Larabasic dispone de los siguientes paquetes instalados y pre-configurados para su correcto uso.

**Roles & Permissions** by Spatie | [Documentación](https://spatie.be/docs/laravel-permission/v5/basic-usage/blade-directives)<br>
Asigna de manera sencilla un role al nuevo usuario y éste tiene ya asociados diferentes permisos para poder interactuar con ciertas partes del proyecto.
<hr>

**Activity Log** by Spatie | [Documentación](https://spatie.be/docs/laravel-activitylog/v4/introduction)<br>
Almacena en la BBDD todos los pasos que un usuario realiza. La finalidad es que si fuese necesario, el admin/desarrollador podrá auditar a cualquier usuario en caso que fuese necesario.

<span class="color: red">**NOTA**:</span> El desarrollador es el encargado de incorporar el log en las funciones que se desean ser registradas para rastrear todos los pasos que realiza el usuario en cuestión.
<hr>

**Laravel Cashier** | [Documentación](https://laravel.com/docs/9.x/billing)<br>
Este paquete pertenece al ecosistema de Laravel y permite implentar en cualquier proyecto de Laravel un sistema de pagos usando la plataforma de Stripe.
<hr>

**AWS SDK v3.0** | [Documentación](https://www.larablocks.com/package/aws/aws-sdk-php-laravel)<br>
Para poder usar las herramientas que ofrece AWS de Amazon.

## Localization i18
Este proyecto está preparado para que funcione en diversos idiomas. Cuenta con una librería de banderas y el componente de cambio de idioma. <br><br>
En las variables de entorno hay que seleccionar el idioma por defecto, "**es**" en este caso. Por defecto, el cambio de idioma está desactivado. Para activarlo y personalizarlo, hay que hacerlo desde la sección de desarrollador.

## Sección para desarrollador

- Modo mantenimiento "accesible". Es decir, al activarlo, solo el/los desarrollador/es podrá/n acceder al proyecto y usarlo para tareas de debug y tests.
- Modo "maestro". Si queremos entrar a la cuenta de un usuario como si fuese él mismo para ver lo que él ve. Útil cuando aparece un error difícil de replicar a menos que se entre en la cuenta de ese usuario.
- Opción para activar/desactivar el uso de idiomas
- Cambiar los colores de las barras de navegación y lateral al gusto del cliente.

Todas estas opciones son almacenadas en variables globales para que puedan ser usadas en cualquier parte del proyecto. Todas ellas se generan en **GlobalVariablesServiceProvider**.

<hr>
Este proyecto tiene instalado el paquete PEST que facilita la creación de tests unitarios.<br><br>


**NOTA**: Los componentes de Livewire no pueden leerlas directamente, hay que pasar las variables desde el controlador hasta el componente de livewire que necesite usarlas mediante la vista que carga el controlador. Ejemplo de esto es la vista del **Login**.

