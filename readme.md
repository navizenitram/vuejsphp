<h1>VueJS y PHP</h1>

Example of a VueJS & PHP application following Domain-Driven Design (DDD) and SOLID principles keeping the code as simple as possible.

## Table of Contents

* [Environment setup](#environment-setup)
* [Project explanation](#project-explanation)
* [TODO List](#todo-list)

## Environment setup

There are two ways to execute the project:

* Dockerfile<br>
  Clone this project and run:<br>
  `docker build -t vuejsphp .`<br>
  `docker run -d -p 8080:80 vuejsphp`  
##
* Docker Hub <br>
`docker pull navizenitram/vuejsphp:v0`<br>
`docker run -d -p 8080:80 navizenitram/vuejsphp:v0`
## Project explanation

### Introduction
<p>Bootstrap 4 has been used for this demonstration with the aim of focusing only on the design of the application architecture and trying to avoid cross-browsing problems.</p>

### Frontend
<p>In order to be ready for migrate to Progressive Web App, the app has been implemented under VueJs framework. With the aim of write reusable code some components have been created: forms, table rows, pagination ... All this components work together orchested by de main widget of the app. </p>
<p>With the CQRS pattern in mind, if the app was fully functional, the new employees (or any other resource) will have an Uuid created in frontend and (for security reasons) validated in backend. In this way it is possible to be completely decoupled from the database system.  </p>
### Backend
<p>In the development of the backend it has been implemented following SOLID principles such as SRP (Single Responsibility Principle) or DIP (Dependency Inversion Principle). The code has also been organized following some principles of DDD (ValueObjects) and hexagonal architecture.</p>

### TODO List
<p>If I had more time I would have liked:</p>
* Develop all functionalities <br>
* Really use MongoDB (or another database) and not the "fake" class with hardcoded data. <br>
* Mocking DB class in test classes <br>
* Save the images in a cloud service (For example S3)

