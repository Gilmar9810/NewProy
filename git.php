 
// comandos

<!-- Quedarme en disco local c-->

cd C://

<!--Ubicacion actual del directorio-->

 pwd

 <!-- Borrar Repo-->

 rm -rf .git
 
<!--Borrar una carpeta-->

rm -rf

<!--Borrar un archivo-->

rm hola.txt

<!--Mostrar archivos -->

ls y ls -la

<!-- Crear carpeta-->

mkdir git

<!-- Crear archivo-->

touch hola.txt

<!--Inicializar el repositorio-->

git init

<!--Configurar el repo-->

git config --global

<!--Asignar un nombre-->

git config --global user.name "NombreReal"
git config --global user.email "micorreo@hotmail.com"
git config --global color.ui true

<!-- Ver el estado del repo-->

git status	

<!-- Pasar al staggin area (Estado de preparacion)-->

git add .
git add -A

<!--Solo agregar este-->

git add h1.php

<!-- Versionar, git repository-->

git commit -m "first repository"

<!-- Ver los commits-->

git log

<!-- Forma resumida-->

git log --oneline

<!-- Ver detalles de las ramas -->

git log  --oneline --graph --all

<!-- Borrar una rama-->

git branch -d rama3

<!-- Crear un archivo para ignorar demas archivos que desee-->

touch .gitignore

<!-- volver al archivo que quiero -->

git checkout NombreArch (--numeros)

<!--Cambiar de rama-->

git checkout master

<!-- ver las ramas -->

git branch

<!-- Crear Rama -->

git branch NombreRama

<!-- Cambiar nombre a una rama-->

git branch -m rama3 rama3reload

<!-- hacer git commit y add al mismo tiempo-->

git commit -a -m "insert"



<!-- -->

git commit -a -m "change background color"

<!-- crear rama y cambiar a esa rama-->

git checkout -b rama3

<!-- Fusionar ramas-->

git merge rama2 

<!-- Ver que archivos se modificaron-->

git status

<!-- Si esta modificado se procede a versionar-->

git add. 
git commit -b "Version 1.0"

<!-- alias del log-->

git config --global alias.minilog "log --oneline --graph --all"
git minilog

<!-- Volver en el tiempo-->

git reset --hard dda6c08
git reset --soft dda6c08
git reset --mixed dda6c08

<!-- clonar repositorio-->

<!--primero se borra-->

rm -rf example 

git clone https://github.com/misterernest/example.git

cd example/

<!-- Traer repositorio-->

git pull origin master

<!-- Enviar repo -->

git push origin master
