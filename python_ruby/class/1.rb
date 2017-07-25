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
end

c1 = Cal.new(10,10)
p c1.add()
p c1.subtract()

c2 = Cal.new(30,20)
p c2.add()
p c2.subtract()
