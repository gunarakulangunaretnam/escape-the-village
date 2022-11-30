import random
startfrom = 0

f = open("output-html.txt", "w+")
f = open("output-html.txt", 'w')

f1 = open("output-js.txt", "w+")
f1 = open("output-js.txt", 'w')

for i in range(200):
    startfrom = startfrom + 1
    x = random.randint(2000, 38000)
    y = random.uniform(-100, 40)

   
    f.write(f'<img src="images/coin/dim.png" class="" style="position:absolute; left:{x}px; top:{y}px;" id="diamond{startfrom}" /> \n')
    
    
    f1.write(f"$('.result').text(getpointscoin($('#diamond{startfrom}'), $('#div2'), '#diamond{startfrom}', 'DiamondType')); \n")

     

f.close()
f1.close()