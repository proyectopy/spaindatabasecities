# proyectopy/spaindatabasecities


```proyectopy/spaindatabasecities``` es un paquete para Laravel que puedes usar para añadir datos sobre provincias y ciudades de España a tus proyectos de Laravel.

Con este paquete  crearemos las migraciones, los seeders y los modelos de pais, provincias y ciudades de España a tu proyecto. 

Datos obtenidos de sitio del INE a fecha 10/4/23
> https://www.ine.es 

Esta basado en un antiguo proyecto de azishapidin. 


## Instalación rápida

Desde la linea de omandos procedemos a instalar el paquete usando el comando:
```
composer require  proyectopy/spaindatabasecities
```

## Versiones compatibles

Este paquete lo desarrollé y probé usando las ultimas versiones de Laravel, usando filamentphp 3.2

| Versión Laravel | Version plugin | Instalación desde composer|
|---- |----|----|
| 10.0.x 11.0.x | >= 1.0.0 | ```composer require  proyectopy/spaindatabasecities``` |


### Publicar archivos
Ejecuta el siguiente comando en la línea de comando:

```
php artisan spaincountry:publish

```

Al terminar el comando anterior, se habrán copiado los siguientes archivos a tu proyecto:

* Las Migraciones desde ```/vendor/proyectopy/spaindatabasecities/src/database/migrations ``` a ```/database/migrations```
* Archivos de siembra de ```/vendor/proyectopy/spaindatabasecities/src/database/seeds```      a ```/database/seeds```
* Archivos de modelo de ```/vendor/proyectopy/spaindatabasecities/src/database/models```      a ```/app/Models```

Después de eso, ejecute el siguiente comando:
```
composer dump-autoload
```

# Migrar y añadir los datos a la base de datos

Ejecute el siguiente comando para hacer las migraciones:
```
php artisan migrate

```
## Importar todos los datos 

```
php artisan db:seed --class=SpainSeeder
```
Una vez finalizado puedes usar a tu gusto los datos almacenados en la base de datos que contiene:

Las 52 provincias españolas y aunque no estan todas de momento, una amplia cantidad de ciudades que iré completando a medida que vaya disponiendo de tiempo.

Hemos actualizado la Version de dev/main a V1.0.0

# :sweat_drops: PROXIMAMENTE :sweat_drops:

~~Poco a poco iré añadiendo ciudades para completar las que faltan.~~ 

Ya completé el listado con 8116 poblaciones de las 8132 que el INE contabiliza.

Tengo previsto añadir las resources para los que usen Filamentphp.

