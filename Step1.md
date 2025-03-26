First prepare docker environment(Linux or windows docker desktop ), in this test we use windows desktop.<br>
![windows docker GUI](./image/windows_docker_GUI.png)<br>

Before create container should be pull some images like:Ubuntu, nginx or centos,etc. <br>
```
docker pull ubuntu
``` 

This command will download the last version ubuntu, if you will use diff. version ubuntu command show on below<br>

```
docker pull ubuntu:22.04
```
After pull you can use  `docker image list` to check out images in your local storage(local PC).
![docker image list](./image/docker_image_list.png)

Now, we can use `docker run` to implement container with special image, the command show on below:
```
docker run -i -t --name container1 -p 5000:80 ubuntu /bin/bash
```
The docker run usually use parameter shown on below:<br>
`-i` Keep STDIN open even if not attached <br> 
`-t` Allocate a pseudo-TTY <br>
`--name` Assign a name to the container <br>
`-p` Publish a containers port(s) to the host <br>
`/bin/bash` After container run will exec bash shell let user can turn command in terminal <br>
`-d,--detach` Run container in background and print container  <br>
`--restart` Restart policy to apply when a containers exits <br>
`--rm` Automatically remove the container and its associated anonymous volumes when it exits<br>
`--privileged` Give extended privileges to this container<br>
`--expose` Expose a port or a range of ports<br>
`-e` Set environment variables<br>
`--env-file` Read in a file of environment variables<br>
`-h, --hostname` Container host name<br>
`--add-host` Add a custom host-to-IP mapping (host:ip) <br>
`--device` Add a host device to the container<br>
`--dns` Set custom DNS servers <br>
`--gpus` GPU devices to add to the container <br>

After `docker run `, you can use `docker ps ` to check out container status which container is running and use `docker ps -a` can list all container whether started or not.<br>
docker ps <br>
![docker_ps](./image/docker_ps.png)
docker ps -a <br>
![docker_ps_a](./image/docker_ps_a.png)

You can use `docker exec -t -i {container ID or name} bash` to access container which is running.
![docker exec -i -t bash](./image/docker_exec_it_bash.png)

Now~~~ the container has started, You can do some operation like use Linux system in container.<br>

In example we implement nginx website:
```
apt update -y
```
```
apt install nginx 
```
```
service nginx start
```
In local(not container) you can open broswer(chrome, edge, firefox) to checkout nginx.
![single node example](./image/single_node_example.png)
