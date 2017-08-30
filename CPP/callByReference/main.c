#include <stdio.h>
#include <stdlib.h>
void Increment(int *x){
    printf("Address of variabile a in Increment =%d\n",x);
    *x=*x+1;
}

int main()
{
    int a;
    a=10;
    Increment(&a);
    printf("Address of variabile a in main=%d\n",&a);
    printf("variabile a in main=%d\n",a);

    return 0;
}
