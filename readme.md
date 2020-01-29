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
<ul>
    <li>/Domain: Interfaces y ValueObjects que modelan el dominio de la aplicación </li>
    <li>/AppServices: Casos de uso que interactuan con los objetos de la capa de dominio haciendo uso de Dependency Inversion Principle</li>
    <li>/Structure: Implementación de las interficies. TODO: Mover el directorio /vendor aqui.</li>
</ul>
<p>Fuera del directorio /app tenemos el directorio /vendor generado por composer y el directorio /api, que de momento son simples scripts php que simulan ser "controladores". Estos controladores implementan los casos de uso. Se puede ver como es desde aqui de donde se instancian las implementaciones de los contratos. Estas instancias se inyectan a los casos de uso. Todo esto en el mundo real esto estaría gestionado por el framework de turno. Otro ejemplo de como el framework quedaría en la capa más exterior de nuestra arquitectura y que si se implementa bien, un cambio o acutalización del framework no afetaría al resto de capas. Así se ve claramente el desacoplamiento y la libertad que nos ofrece la aquitectura hexagonal y la aplicación de los principios SOLID</p>
### TODO List
<ul>
<li>Rehacer los TEST que han quedado rotos después del último refactor.</li>
</ul>


