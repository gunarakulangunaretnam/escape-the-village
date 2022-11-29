import random
startfrom = 0

f = open("output-html.txt", "w+")
f = open("output-html.txt", 'w')

f1 = open("output-js.txt", "w+")
f1 = open("output-js.txt", 'w')

for i in range(100):
    startfrom = startfrom + 1
    x = random.randint(2000, 38000)
    y = random.randint(60, 300)
   
    f.write(f'<img src="images/level-2-assets/Objects/crow-gif.gif" class="MovingObjects" style="position:absolute; left:{x}px; bottom:{y}px;" id="skybirds-enm{startfrom}"/> \n')
    

f.close()
f1.close()