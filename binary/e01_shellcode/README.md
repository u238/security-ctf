Challenge description
=====================

## Background theory

## Challenge
Create a shellcode that brings the program to cat the flag!

## Rank criteria
Ordered by priority:
1. File size (smaller will win over bigger)
2. Submission time (first that submits result will win) 

## Commands cheatsheet

#### disassemble binary shellcode
```
$ echo -ne '\xeb\x1d' | ndisasm -b64 -
```

#### write & compile a function as shellcode
1. Write the function in a .c file
   ```
   $ cat > foo.c <<EOF                                                                                                                           ok | 08:26:41 
   int foo() {
     return 10;
   }
   EOF
   ```
2. Compile it to an object file
   ```
   gcc -c -O1 foo.c
   ```
3. Decompile it as shellcode
   ```
   objdump foo.o -d
   ```
