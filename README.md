# Punto de venta Laravel

## Introducción

### Descripción
Mi objetivo principal con este proyecto es aplicar los conocimientos 
aprendidos referentes a Laravel y las herramientas que ofrece para armar un proyecto entero.

Las tecnologías utilizadas son:

* Docker
* Nginx
* Php - Laravel
  * Livewire
  * AlpineJs
  * TailwindCss
* MySql
* Node
* Bash

Se trata de un punto de venta con autenticación, multi-usuario, 
multi-roles, modular, reactivo y facil de levantar.

Cuenta con Modelos con responsabilidades separadas por medio de traits, 
de modo que al requerir agregar más relaciones o mutadores, 
será posible hacerlo en su respectivo archivo: 

```
class Category extends Model
{
    use CategoryAttributes;
    use CategoryRelations;
}
```

```
trait CategoryAttributes
{
    protected function name() : Attribute
    {
        return ToLowerCaseAttribute::lowerCase();
    }

    protected function description() : Attribute
    {
        return ToLowerCaseAttribute::lowerCase();
    }
}

```

Hace uso de Middleware para separar las responsabilidades de 
un Administrador y un Cajero, así como se separan sus respectivas vistas.

Utiliza componentes Livewire para validaciones, filtrado por barra de busqueda, 
ejecutar funciones que permitan realizar modificaciones sin recargar la pagina, 
así como separar responsabilidades entre componentes padre e hijos.
Debido a que los componentes de Livewire tienden a guardar muchas 
responsabilidades, decidí que se encargarían mayoritariamente de orquestar 
ordenes en lugar de tomar decisiones, cosa por la cual en la carpeta de **App** existe una llamada **Classes**, 
donde se separan funcionalidades acorde sean requeridas, 
por ejemplo, una Categoría tiene sus respectivas reglas, se debe 
conseguir información de un elemento en particular, así como registrarlo, 
modificarlo o borrarlo, pues estas funciones están separadas por carpetas:

* **Category**
	* CategoryRules.php
	* DeleteCategory.php
	* GetCategory.php
	* PatchCategory.php
	* RegisterCategory.php

En el caso de los Mutadores, dentro de Classes he preparado una carpeta para los Modelos,
para que cualquier elemento que requiera ser formateado para su almacenamiento o consulta
pueda llamar a la clase que requiera, y en caso de requerir modificación, se pueda
hacer el cambio solamente en el archivo principal.

```
class ToLowerCaseAttribute
{
    public static function lowerCase(): Attribute
    {
        return new Attribute(
            get: fn ($value) => mb_strtolower($value),
            set: fn ($value) => mb_strtolower($value),
        );
    }
}
```

El proyecto seguirá en desarrollo para continuar agregando funcionalidades conforme se requieran.

---

Este proyecto incluye un script de automatización llamado `autosetup.sh` que permite preparar completamente el entorno de desarrollo con un único comando.

El script se encarga de:

* Levantar los contenedores Docker.
* Crear las carpetas requeridas por Laravel.
* Instalar las dependencias de PHP mediante Composer.
* Configurar permisos de escritura.
* Crear el archivo de entorno `.env`.
* Generar la clave de la aplicación.
* Ejecutar migraciones y seeders.
* Instalar las dependencias de Node.js.
* Compilar los assets del frontend.

---

## Prerrequisitos

Antes de comenzar, asegúrate de tener instalado:

* Docker
* Docker Compose
* Bash (Linux, WSL o macOS)

---

## Instalación automática

### 1. Clonar el repositorio

```
git clone https://github.com/HernanOrtaS/LaravelSimplePOS.git
cd LaravelSimplePOS/
```

---

### 2. Ejecutar el script de instalación

Desde la raíz del proyecto:

```
bash autosetup.sh
```

O bien:

```
chmod +x autosetup.sh
./autosetup.sh
```

---

## Proceso realizado automáticamente

Durante la ejecución del script se realizan las siguientes tareas:

### Levantar los contenedores Docker

```
docker compose up -d
```

### Crear directorios requeridos por Laravel

```
storage/framework/cache
storage/framework/sessions
storage/framework/views
storage/framework/testing
bootstrap/cache
```

### Instalar dependencias PHP

```
composer install
```

### Configurar permisos necesarios

Se asignan permisos de escritura a los directorios utilizados por Laravel:

```
storage
bootstrap/cache
```

### Crear archivo de entorno

```
cp .env.example .env
```

### Generar clave de aplicación

```
php artisan key:generate
```

### Ejecutar migraciones y seeders

```
php artisan migrate --seed
```

### Instalar dependencias de Node.js

```
npm install
```

### Compilar assets

```
npm run build
```

---

# Acceso a la aplicación

Una vez finalizada la instalación, la aplicación estará lista para utilizarse.

Si dejaste la configuración por defecto, deberías poder acceder desde:

```
http://127.0.0.1:8000/
```

o la dirección definida en tu configuración Docker.

El usuario administrador y contraseña definido por defecto es, para fines de desarrollo y testeo:

```
admin@gmail.com

12345678
```

---

# Comandos útiles

## Iniciar contenedores

```
docker compose up -d
```

## Detener contenedores

```
docker compose down -v
```

## Acceder al contenedor de la aplicación

```
docker compose run --rm app bash
```

## Ejecutar Artisan

```
docker compose run --rm app php artisan
```

## Ejecutar migraciones

```
docker compose run --rm app php artisan migrate --seed
```

## Reinstalar dependencias PHP

```
docker compose run --rm app composer install
```

## Reinstalar dependencias Node.js

```
docker compose run --rm node npm install
```

## Compilar assets

```
docker compose run --rm node npm run build
```
