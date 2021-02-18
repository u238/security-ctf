SECRET = "ab"
PORT=8080
all: image run-image
.PHONY: all

image:
	docker build -t php-e05 .
run-image:
	docker run -d --name php-e05 -e "SECRET=$(SECRET)" -p $(PORT):80 php-e05
clean:
	docker rm -f php-e05
	docker rmi php-e05

