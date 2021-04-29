#include <stdio.h>
#include <sys/mman.h>

int main(int argc, char **argv) {
  int foo_value = 0;

  unsigned char code[] = "\xb8\x0a\x00\x00\x00\xc3";

  int (*foo)() = (int(*)())code;
  foo_value = foo();

  printf("result: %d\n", foo_value);
}
