# ADA3
Frameworks del lado del servidor. LARAVEL.

## Instalación y configuración

- Instalación de FW

Para programar en Laravel en Windows, se instalo una herramienta llamada Laragon. Que se encarga no solo de instalar todos los 
componentes que necesitamos sino también deconfigurar todo de tal manera que solo es necesario que nos enfoquemos en el 
desarollo web con Laravel.

Una vez terminada la instalación, se abre la ventana de la interfaz de Laragon y se inician todos los servicios. Posteriormente
se admiten todos los permisos que se soliciten, para luego mostrar en pantalla el puerto donde se aloja. Luego se entra en la
opción "Web" para entrar al index de Laragon. Se necesita de esta interfaz para poder correr el proyecto, para ejecutar
acciones en la linea de comandos, etc.

En la terminal de Laragon se ejecuta el comando para crear un proyecto y se le da un nombre, esto servirá poder acceder a este
desde el editor de texto. Cada complemento o archivo que se quiera añadir al ejecutar los comandos, deberan ser dentro
de la carpeta donde se aloja el proyecto.


- Configuración del editor de texto
En este caso el editor de texto utilizado fue Sublime Text, que ya estaba previamente instalado por lo que solo se tuvo
que hacer el enlace. 
Se abre el editor y se procede a buscar el proyecto creado anteriormente, en mi caso en el disco local en la carpeta de
Laragon.
Una vez abierto el proyecto, se procede a realizar la programación correspondiente a lo que se pide en el ADA3.


## Instrucciones
- Iniciar laravel
- Ejecutar en el navegador: ada3.test
- Visualizar y explorar las opciones
- En Formulario: Escribir un nombre (No se aceptan campos vacios).
- Enviar y se dara la Bienvenida

## Nota:
En la linea 29 del archivo RouteServiceProvider.php, quitar la doble barra para evitar errores de funcionamineto.
Esta es la línea 29     =>     //protected $namespace = 'App\\Http\\Controllers';
Este archivo se encuentra en la carpeta "app", en la subcarpeta "Providers".
