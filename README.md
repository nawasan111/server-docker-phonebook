# setup Server for deployment

## Get started

### Install Docker

for ubuntu run command below

install Docker and Docker compose

```
sudo apt install docker.io docker-compose-v2
```

add user to docker group

```
sudo usermod -aG docker <username>
```

I recommend you reboot your machine
```
reboot
```

### Run the Docker compose

```
make up
```
> if make command not found run command below to install make
> `sudo apt install make`