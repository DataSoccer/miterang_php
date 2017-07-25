class C(object):
    def __init__(self, v):
        self.__value = v #인스턴스 바깥에서 접근 불가
    # def show(self):
    #     print(self.value)
    # def getValue(self):
    #     return self.value
    # def setValue(self,v):
    #     self.value = v
    def show(self):
        print(self.__value)
c1 = C(10)
# print(c1.__value)
# c1.setValue(20)
# print(c1.getValue())
c1.show()
