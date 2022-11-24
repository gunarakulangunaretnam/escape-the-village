import random
startfrom = 90

f = open("output-html.txt", "w+")
f = open("output-html.txt", 'w')

f1 = open("output-js.txt", "w+")
f1 = open("output-js.txt", 'w')

for i in range(100):
    startfrom = startfrom + 1
    x = random.randint(11000, 18000)
    y = random.randint(70, 130)
    f.write(f'<img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:{x}px; top:{y}px;" id="coin{startfrom}" /> \n')
    f1.write(f"$('.result').text(getpointscoin($('#coin{startfrom}'), $('#div2'), '#coin{startfrom}', 'CoinType')); \n")

    

f.close()
f1.close()