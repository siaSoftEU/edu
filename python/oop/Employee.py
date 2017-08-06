class Employee:
    nrangajati=0
    def __init__(self,nume, prenume):
        Employee.nrangajati+=1
        self.nume=nume
        self.prenume=prenume
    def fullname(self):
        return "{} {}".format(self.nume,self.prenume)
    
emp1=Employee("test1", "test pren 1")
emp2=Employee("test2", "test pren 21")



print(emp1.fullname())
print(emp2.fullname())
print(emp2.nrangajati)