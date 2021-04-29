#include <stdio.h>
#include <sys/mman.h>

unsigned char code[] = "\xb8\x0a\x00\x00\x00\xc3";

int main(int argc, char **argv) {
  int foo_value = 0;

  // make the code executable
  int r =  mprotect((void *)((int)code & ~4095),  4096, PROT_READ | PROT_WRITE|PROT_EXEC);

  printf("mprotect: %d\n",r);

  int (*foo)() = (int(*)())code;
  foo_value = foo();

  printf("result: %d\n", foo_value);
}
