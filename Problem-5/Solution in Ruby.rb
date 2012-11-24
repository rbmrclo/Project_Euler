class Problem5
   
   def initialize(dividersmax, startpoint = 0)
      @dividersmax = dividersmax
      @dividers = (1..@dividersmax).to_a
      @startpoint = @dividersmax
      if(startpoint !=  0) then
         @startpoint = startpoint
      end
   end

   def find()
      found = false
      i = @startpoint
      
      while (found != true)
         @dividers.each do |divider|
            if(i % divider == 0) then
               if (divider == @dividersmax) then
                  found = true
                  puts "Found #{i}"
               end
               next
            else
               puts "Int #{i}, was not divisable by #{divider}"
               break
            end
         end
         i += 2520
      end
   end
end


n = Problem5.new(20, 2520)
n.find()