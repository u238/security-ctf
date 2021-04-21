SECRET = "defaultsecret"
PORT=4747
EXERCISE_TYPE=binary
EXERCISE_NR=01
EXERCISE=${EXERCISE_TYPE}-${EXERCISE_NR}

all: bin image run-image
.PHONY: all

bin:
	gcc example1.c -o example1-nx-bit
	gcc -Wl,-z,execstack -fno-stack-protector -z execstack example1.c -o example1-no-nx
	gcc example2.c -o example2
image:
	docker build -t ${EXERCISE} .
run-image:
	docker run -d --name ${EXERCISE} -e "SECRET=$(SECRET)" -p $(PORT):${PORT} ${EXERCISE}
clean:
	rm -f example1-* example2
	docker rm -f ${EXERCISE}
	docker rmi ${EXERCISE}
