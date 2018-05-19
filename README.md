# BeenVerifiedExam

Para iniciar con la explicación se debe tener las siguientes herramientas instaladas, estaran descritas por orden.

1-DB Browser for SQLITE (Tener en cuenta que sqlite es portable no es como las otras que necesitan motores de bases de datos)

Pasos de instalación
*Ir a http://sqlitebrowser.org/ y la parte derecha de la pantalla podras descargar la version que necesites en mi caso windows.exe
*Una vez descargado e instalado abrir el programa
*En el menu superior , hacer click en 'open database', para abrir la base de datos y tener todo el control desde ahi.

2-WampServer 3.0.6

Herramienta para manejar el servidor, php , mysql , entre otros
Pasos de instalación
* Ir a http://www.wampserver.com/en/ y descargar la version que necesites segun los bits de tu maquina
* Seguir los pasos de instalacion, por favor instalar todo , en caso de que necesites mas cosas para otro proyecto, es muy util
* ya una vez instalado, ir al escritorio o al menu de inicio y buscar Wampserver y hacer click ahi.
* Despues tienes que al icono de wampserver se encuentra ubicado por donde esta el de la bateria, sino sale das click en una flecha
que se dirije hacia arriba ahi tiene que estar.
*Lo primero es hacer click derecho sobre el icono tienes que ir a wamp setting y clickear menu item:online/offline;
esto es muy util para testear con otros dispositivos que esten conectados en la red de WIFI (ejemplo)
*Ahora click izquierdo sobre el mismo icono de wampserver y dar click en Start all services, despues ir APACHE y ir 
a cambiar una linea en httpd-vhosts.conf y dar click, debes quitar reemplazar la siguiente linea 'require local' por 'require all granted'
*Ya tu server estara funcionando.
NOTA: Tus archivos php o el api debe estar en la carpeta WAMP/WWW/.....

3-Php Storm
Pasos de instalacion
*Ir a https://www.jetbrains.com/phpstorm/
*Puedes dar click en la version de 30 dias, y seguir los pasos de instalacion(en el menu de testing vienen los pasos para hacer el testeo de la API)