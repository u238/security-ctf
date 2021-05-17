SECRET = "defaultsecret"
PORT=4701
EXERCISE_TYPE=binary
EXERCISE_NR=01_gdb
EXERCISE=${EXERCISE_TYPE}-${EXERCISE_NR}

all: image run-image
.PHONY: all

bin:
	gcc -Wl,-z,execstack -fno-stack-protector -z execstack exercise.c -o exercise
image:
	docker build -t ${EXERCISE} --build-arg "PORT=$(PORT)" --build-arg "SECRET=$(SECRET)" .
run-image:
	docker run -it -d --name ${EXERCISE} -e "SECRET=$(SECRET)" -p $(PORT):${PORT} ${EXERCISE}
clean:
	docker rm -f ${EXERCISE}
	docker rmi ${EXERCISE}
	rm -f exercise
