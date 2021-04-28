/*
 * gcc -c -O0 solution.c
 * objdump solution.o -d
 *
 * Man says scanf with %s format terminates copying chars after whitespace char.
 * scanf ends copying input after (at least) following chars:
 * 0x09, 0x0A, 0x0B, 0x0C, 0x0D, 0x20, 0xA0 ...
 *    9,   10,   11,   12,   13,   32,  160, ...
 *
 * */

int fun(int i) {
	// we cant write 10 nor 9 here (scanf will end copy)
	// so initialize to 8 and add 1 two times
	int c = 8;
	c++;
	c++;
	if (i == c)
		return 16;
	// same here; we can't initialize to 32 because scanf will
	// end the copy.
	// initialize to 31 and add 1 afterwards.
	c = 31;
	c++;
	if (i == c)
		return 64;
	return 0;
}
