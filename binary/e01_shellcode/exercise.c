#include <stdio.h>
#include <sys/mman.h>
#include <stdlib.h>


int main(int argc, char **argv) {
  int foo_value = 0;

  unsigned char code[256]; // = "\xb8\x0a\x00\x00\x00\xc3";


  scanf("%s", &code);

  int (*foo)(int) = (int(*)())code;
  foo_value = foo(1);
  if (foo(10) == 16 && foo(32) == 64) {
    system("/bin/cat /flag");
  }

  printf("result: %d\n", foo_value);
}
