---
title: 'Carpetas de Grav CMS'
date: '30-05-2019 16:00'
metadata:
    'Graficación y Animación': gya
    Blog: blog
    Grav: grav
taxonomy:
    tag:
        - blog
        - gya
        - cms
        - grav
        - folders
layout: post
description: 'Anális de las carpetas de Grav CMS'
markdown_extra: true
---

Grav es un CMS basado en archivos planos, lo que significa que ninguna base de datos lo sustenta por lo que la estructura de carpetas de su sitio es muy importante. En el nivel superior de su instalación Grav, la estructura de la carpeta se ve así:

- /assets <br>
- /backup <br>
- /bin <br>
- /cache <br>
- /images <br>
- /logs <br>
- /system <br>
- /user <br>
- /vendor <br>

## ¿Para qué sirve cada carpeta?##
<br>
- ### /assets###
La carpeta assets es utilizada por el nuevo sistema de gestión de activos dentro de Grav para almacenar archivos .js y .css previamente procesados.<br>
Esta carpeta no se debe utilizar para almacenar datos de usuarios, ya que se vacía de forma rutinaria de todos los datos.

- ### /bin###
La carpeta bin contiene la aplicación Grav CLI que se puede usar para realizar algunas tareas prácticas desde la línea de comandos. Esta es una característica relativamente avanzada destinada principalmente a los desarrolladores.

- ### /backup###
La carpeta backup es la ubicación predeterminada para copias de seguridad Grav.

- ### /cache###
La carpeta cache se usa para almacenar archivos en caché temporales que Grav genera automáticamente para mejorar el rendimiento. De forma predeterminada, Grav maneja el almacenamiento en caché automáticamente, seleccionando la mejor opción disponible para su entorno de alojamiento para garantizar que su sitio se ejecute lo más rápido posible. Esta carpeta tampoco se debe utilizar para almacenar datos de usuarios, ya que se vacía de forma rutinaria.

- ### /images###
Grav trae incorporada una biblioteca de manipulación de imágenes potente pero muy fácil de usar . Esto significa que puede cambiar fácilmente el tamaño de una imagen sobre la marcha desde su contenido o incluso desde un complemento. Estas imágenes se almacenan en la carpeta images para que puedan reutilizarse si se solicita nuevamente la misma imagen con el mismo tamaño.<br>Esta carpeta actúa como un caché de imágenes y está destinada a archivos generados automáticamente. Los medios proporcionados por el usuario deben almacenarse en la carpeta **user/pages/**, **user/themes/** o incluso en una **user/images/carpeta_personalizada**.

- ### /logs###
Cuando Grav detecta un error, o si tiene activado el registro o la creación de perfiles adicionales, almacena los archivos de registro relevantes en la carpeta logs.

- ### /system###
La carpeta system es donde estan los archivos de configuración de Grav. No se debe editar nada en esta carpeta porque una actualización de Grav podría sobrescribir sus cambios.

- ### /vendor###
La carpeta vendor contiene bibliotecas importantes en las que se basa Grav. Esta carpeta es similar a la carperta system en que su contenido no debe editarse a menos que esté absolutamente seguro de lo que está haciendo.

- ### /user###
Esta es la carpeta más importante para la mayoría de los usuarios de Grav. Esta carpeta es donde pasará su tiempo creando contenido, utilizando complementos y editando sus temas. Esta carpeta tiene varias subcarpetas como:
 - /user/accounts
 - /user/blueprints
 - /user/config
 - /user/data
 - /user/images
 - /user/languages
 - /user/pages
 - /user/plugins
 - /user/themes

