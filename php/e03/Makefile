SECRET = "ab"
PORT=8080
all: image run-image
.PHONY: all

image:
	docker build -t php-e03 .
run-image:
	docker run -d --name php-e03 -e "SECRET=$(SECRET)" -p $(PORT):80 php-e03
clean:
	docker rm -f php-e03
	docker rmi php-e03

