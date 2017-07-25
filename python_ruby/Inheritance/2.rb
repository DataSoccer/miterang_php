class Cal
# //생성자, constructor
  def initialize(v1,v2)
    # p v1, v2
    # //instance 변수, 모든 메소드 내에서 사용가능
    @v1 = v1
    @v2 = v2

  end

  def add()
    return @v1 + @v2
  end

  def subtract()
    return @v1 - @v2
  end

  def setV1(v)
    if v.is_a?(Integer)
      @v1 = v
    end
  end
  def setV2(v)
    if v.is_a?(Integer)
      @v2 = v
    end
  end
  def getV1()
    return @v1
  end
  def getV2()
    return @v2
  end
end

class CalMultiply < Cal
  def multiply()
    return @v1 * @v2
  end
end

class CalDivide < CalMultiply
  def devide()
    return @v1 / @v2
  end
end
c1 = CalMultiply.new(10,10)
p c1.add()
p c1.multiply()

c2 = CalDivide(20,10)
p c2.add()
p c2.multiply()
p c2.devide()
