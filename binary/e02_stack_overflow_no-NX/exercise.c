#include <stdio.h>
#include <sys/mman.h>
#include <stdlib.h>
#include <unistd.h>


int askName(char * &name) {
    printf("Insert your name (and press ENTER):\n");
    int result = scanf("%s", name);
    return result;
}

int main(int argc, char **argv) {

    unsigned char name[256];

    askName(&name);

    printf("Wake up, %s ...\n");
    sleep(1);
    printf("The Matrix has you ...\n");
}
