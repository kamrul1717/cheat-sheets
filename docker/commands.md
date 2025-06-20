# Dcoker Cheat-Sheet

<table border="1">
  <tr>
    <th>Command</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>docker</td>
    <td>Checks whether docker is installed and show information about docker</td>
  </tr>
  <tr>
    <td>apt-get install docker.io</td>
    <td>Installs docker environment from CLI.</td>
  </tr>
  <tr>
    <td>docker pull image_name</td>
    <td>Pulls or downloads an image from remote like Docker Hub.</td>
  </tr>
  <tr>
    <td>docker images</td>
    <td>Lists docker images</td>
  </tr>
  <tr>
    <td>docker images ls</td>
    <td>Lists docker images</td>
  </tr>
  <tr>
    <td>docker run image_name</td>
    <td>Runs the image in a container. if the image wasn't previously pulled then docker will first pull the image and then will run it</td>
  </tr>
  <tr>
    <td>docker run -it ubuntu</td>
    <td>Pulls ubuntu image from docker hub and runs it in a new container. -it for interactive </td>
  </tr>
  <tr>
    <td>docker ps</td>
    <td>Lists all running containers </td>
  </tr>
  <tr>
    <td>docker container ls</td>
    <td>Lists all running containers </td>
  </tr>
  <tr>
    <td>docker container ls -a</td>
    <td>Lists all containers </td>
  </tr>
  <tr>
    <td>docker start container_name</td>
    <td>Starts container with the name container_name </td>
  </tr>
  <tr>
    <td>docker stop container_name</td>
    <td>Stops container with the name container_name or container ID </td>
  </tr>
  <tr>
    <td>docker exec -it container_name bash</td>
    <td>Connects the terminal to the the container bash </td>
  </tr>
  <tr>
    <td>docker run -it -p 6000:9000 image_name</td>
    <td>Maps host 6000 port to container's 9000 port. image_name can be kamrul/mycustomapp </td>
  </tr>
  <tr>
    <td>docker run -it -p 6000:9000 -e key=value -e key=value image_name</td>
    <td>pass key value to container enviroment </td>
  </tr>
  <tr>
    <td>docker build -t my_image_name .</td>
    <td>It will create an image based on the configuration in Dockerfile. Dot(.) indicates Dockerfile location which is current file now</td>
  </tr>
  <tr>
    <td>docker login</td>
    <td>It will login the user to docker hub after entering correct username and password</td>
  </tr>
  <tr>
    <td>docker push my_image_name</td>
    <td>Pushes the image to remote docker hub</td>
  </tr>
  <tr>
    <td>docker compose up</td>
    <td>Runs all the image containers defined in the docker compose file.</td>
  </tr>
  <tr>
    <td>docker compose down</td>
    <td>Stops all the running containers defined in the docker compose file.</td>
  </tr>
  <tr>
    <td>docker compose up</td>
    <td>Runs all the containers defined in the docker compose file in detach mode that means runs the conatainers in the background.</td>
  </tr>
</table>