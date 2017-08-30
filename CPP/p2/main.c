#include <stdio.h>
#include <stdlib.h>

int main()
{
   int a;
   int *p;
   p=&a;
   printf("%d\n",p);
   printf("%d\n",*p);
   printf("%d\n", &a);
    return 0;
}
