class Cs:
    @staticmethod
    def static_method():
        print("static method")
    @classmethod
    def class_method(cls):
        print("Class method")
    def instance_method(self):
        print("instance method")

i = Cs()

Cs.static_method()
Cs.class_method()
i.instance_method()
