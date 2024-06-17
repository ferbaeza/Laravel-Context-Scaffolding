## Laravel Create Scaffold Context Laravel 10.x

## Features

Paquete de [Packagist](https://packagist.org/packages/baezeta/scaffold) para crear la estructura de carpetas *Domain Drive Desing* en tu proyecto Laravel.

# Requerimientos
Tener instalado Laravel  minimo version ```"laravel/framework": "^10.0"```.


# Instalacion

```bash
composer require baezeta/laravel-10-scaffold
```


Una vez instalado buscara una carpeta principal **src/** que tomara como raiz del proyecto, en caso de no tenerla, la crea automaticamente la primera vez:


![alt text](./documentacion/img/skeleton.png)

# Formas de Uso

Una vez configurado podemos hacer uso de el con el comando 
```bash
php artisan zeta:crear-contexto 
```
#
## Crear estructura de forma Manual con *Parametro*
El comando acepta un *parametro* como **contexto** para que puedas crear directamente la estructura de carpetas segun tu entrada.

**A tener en cuenta es que los separadores de carpetas tendran que ser el mismo en el comando lanzado**

El comando acepta los siguientes separadores en la entrada del **parametro**
```php
protected array $separadores = ["\\", "/", ".", " ", "_", "-"];
```

```bash
php artisan zeta:crear-contexto Zeta.admnistracion.usuarios.escritura.datos

Carpeta creada correctamente: Zeta
Carpeta creada correctamente: Admnistracion
Carpeta creada correctamente: Usuarios
Carpeta creada correctamente: Escritura
Carpeta creada correctamente: Datos
Zeta/Admnistracion/Usuarios/Escritura/Datos creado correctamente!
```
![alt text](/documentacion/img/image.png)


Tambien podras usarlo sin pasarle **parametro** en el comando y la consola te guiara en la eleccion de las carpetas disponibles.

#
## Crear estructura de forma Interactiva a traves de la *Consola*

```bash
php artisan zeta:crear-contexto 
```
![alt text](documentacion/img/image-1.png)

![alt text](documentacion/img/image-2.png)

![alt text](documentacion/img/image-4.png)


![alt text](documentacion/img/image-5.png)



Espero que te sea de utlidad esta primera version del paquete, link 
[repositorio](https://github.com/ferbaeza/Laravel-Context-Scaffolding).

<div align="center">
    <a href="https://github.com/ferbaeza/Laravel-Context-Scaffolding">
    <img style="max-height:150px" src="https://encrypted-tbn0.gstatic.com/documentacion/img/images?q=tbn:ANd9GcQP4jFB-CRdUfIHz_otJrxBY-sBc3k9wOqzxkJFzatnZlCtlGCWePgmaGyHYWomad1RMes&usqp=CAU">
    </a>
</div>


<p align="center">
    <a href="https://packagist.org/packages/baezeta/scaffold"><img src="https://img.shields.io/packagist/dt/baezeta/scaffold" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/baezeta/scaffold"><img src="https://img.shields.io/packagist/v/baezeta/scaffold" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/baezeta/scaffold"><img src="https://img.shields.io/packagist/l/baezeta/scaffold" alt="License"></a>
</p>


**Fernando Baeza**
*fbaezahurtado@gmail.com* o 
*baezacode@gmail.com*