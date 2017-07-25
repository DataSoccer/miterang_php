class C
  def initialize(v)
    @value = v
  end
  def show()
    p @value
  end
end

c1 = C.new(10)
# p c1.value
c1.show()
