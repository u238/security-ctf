SECRET = "ab"
PORT=8080
all: image run-image
.PHONY: all

image:
	docker build -t php-e04 .
run-image:
	docker run -d --name php-e04 -e "SECRET=$(SECRET)" -p $(PORT):80 php-e04
clean:
	docker rm -f php-e04
	docker rmi php-e04

