<h1>VueJS y PHP</h1>

Ejemplo sencillo de VueJS y PHP aplicando principios SOLID y de Arquitectura Hexagonal ejecutandose en Docker

## Índice

* [Environment setup](#environment-setup)
* [Project explanation](#project-explanation)
* [TODO List](#todo-list)

## Environment setup

Hay dos formas de ejecutar la demo:

* Dockerfile<br>
  Clonar este projecto y ejecutar:<br>
  `docker build -t vuejsphp .`<br>
  `docker run -d -p 8080:80 vuejsphp`  
##
* Docker Hub <br>
`docker pull navizenitram/vuejsphp:v0.1`<br>
`docker run -d -p 8080:80 navizenitram/vuejsphp:v0.1`

## Explicación del proyecto

<p>Pequeño ejemplo personal en el que iré desarrollando el frontend en VueJs e iré aplicando en el backend principios SOLID y de Arquitectura Hexagonal</p>

<p>La idea es en próximas versiones es llegar a tener una Progressive Web APP y generar los ID con UUID con el objetivo de que esto se convierta en un ejemplo de CQRS</p>
<p>En el directorio /app se encuentra la representación de la arquitectura: </p>
### TODO List
<ul>
<li>Rehacer los TEST que han quedado rotos después del último refactor.</li>
</ul>


