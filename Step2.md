In this part we will create multiple(2) container and install diff. service.<br>
One container implement website function the other one implement database with Ubuntu<br>
There is an extra requirement need to consider show on below:<br>
website container: 1 CPU and 2GB memory <br>
database container: 2 CPU and 4GB memory <br>

Now start implement!!<br>
```
docker run -i -t --name="website" -p 5000:80 --hostname="website" --cpus="1" -m 2g ubuntu /bin/bash
```
```
docker run -i -t --name="Database" -p 3306:3306 --hostname="website" --cpus="2" -m 4g ubuntu /bin/bash
```