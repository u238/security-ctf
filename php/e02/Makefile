SECRET = "ab"
PORT=8080
all: image run-image
.PHONY: all

image:
	docker build -t php-e02 .
run-image:
	docker run -d --name php-e02 -e "SECRET=$(SECRET)" -p $(PORT):80 php-e02
clean:
	docker rm -f php-e02
	docker rmi php-e02

