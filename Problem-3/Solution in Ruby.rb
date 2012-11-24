number = 600851475143
x = 2
begin
  number % x == 0 ? number = number / x : x += 1
end while number > 1
puts x