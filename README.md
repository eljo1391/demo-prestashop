Proyecto con la libreria craftable
Pasos para ejecutar el proyecto

## Construir el contenedor
1 - Clonar el proyecto: 
    
    git clone https://github.com/eljo1391/demo-prestashop.git

2 - Moverse al directorio 'var/www/html/' y crear las imagenes de prestashop y la base de datos:

    cd var/www/html/
    docker build -t demoprestashop contenedor/imagen-prestashop/
    docker build -t demoprestashop-bd contenedor/imagen-mysql/

3 - Dentro del directorio 'var/www/html/' ejecutar el siguiente comando para construir los contenedores:
    
    docker compose up -d

4 - Acceder a la tienda :
    
    localhost:4280

5 - Acceder a la tienda como administrador :

    localhost:4280/tiendadmin
    usuario: demo@prestashop.com
    password: prestashop

6 - Acceso a la base de datos

    host: localhost
    port: 4206
    user: root
    passwrod: prestashop
    database: prestashop


Obs.: Si no se puede acceder a la tienda inicialmente, dar permisos al directorio var/www/html