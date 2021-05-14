#include <stdio.h>
#include <stdlib.h>

int askNumber() {
    unsigned char number[64];
    printf("Enter Number: ");
    scanf("%s", &number);

    return atoi(number);
}

int numbersAreValid(int n1, int n2) {

    return 0;
}

int main(int argc, char **argv) {
    setvbuf(stdout,NULL, _IONBF, 0);
    int n1 = 0;
    int n2 = 0;

    // ask for number 1
    n1 = askNumber();
    n2 = askNumber();

    if (!numbersAreValid(n1, n2)) {
        printf("Numbers are not valid!\n");
        return 1;
    }

    system("/bin/cat /flag");
    return 0;
}