SECRET = "defaultsecret"
PORT=8080
all: image run-image
.PHONY: all

image:
	docker build -t php-e01 .
run-image:
	docker run -d --name php-e01 -e "SECRET=$(SECRET)" -p $(PORT):80 php-e01
clean:
	docker rm -f php-e01
	docker rmi php-e01

