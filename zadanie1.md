# Sprawozdanie1
Zadanie 3.

a) docker build -t serwer
b) docker run -d -p 8080:80 serwer
c) 
d) docker image inspect serwer | jq ".[] .RootFS"

Zadanie 4.

Aby zbydować obraz wykorzystując link do Dockerfile umieszczonego na Github należy wydać polecenie
  docker build <url>     
  
Aby dodać obraz do DockerHub, należy najpierw stworzyć repozytroium a następnie wydać polecenie 
   docker push <hub-user>/<repo-name>:<tag>
