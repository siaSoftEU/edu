#include <iostream>

using namespace std;



int main()
{
    int a;
    int *p;
    p=&a;
    a=5;
    cout << "p "  << p << endl;
    cout << "&a " << &a<< endl;
    cout << "&p " << &p << endl;
    cout << "*p " << *p << endl;

    return 0;
}
