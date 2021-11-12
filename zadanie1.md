# Sprawozdanie1
Zadanie 3.<br>
<br>
a) docker build -t serwer <br>
b) docker run -d -p 8080:80 serwer <br>
c)  <br> 
d) docker image inspect serwer | jq ".[] .RootFS" <br>

Zadanie 4.<br>

Aby zbydować obraz wykorzystując link do Dockerfile umieszczonego na Github należy wydać polecenie<br>
  docker build \<url>     <br>
  
Aby dodać obraz do DockerHub, należy najpierw stworzyć repozytorium a następnie wydać polecenie <br>
   docker push \<hub-user>\/\<repo-name>:\<tag>    <br>
