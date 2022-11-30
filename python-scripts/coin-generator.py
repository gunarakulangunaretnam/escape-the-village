import random
startfrom = 0

f = open("output-html.txt", "w+")
f = open("output-html.txt", 'w')

f1 = open("output-js.txt", "w+")
f1 = open("output-js.txt", 'w')

for i in range(150):
    startfrom = startfrom + 1
    x = random.randint(2000, 38000)
    y = random.uniform(-100, 40)

   
    f.write(f'<img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:{x}px; top:{y}px;" id="coin{startfrom}" />\n')
    
    
    f1.write(f"$('.result').text(getpointscoin($('#coin{startfrom}'), $('#div2'), '#coin{startfrom}', 'CoinType'));  \n")

     

f.close()
f1.close()