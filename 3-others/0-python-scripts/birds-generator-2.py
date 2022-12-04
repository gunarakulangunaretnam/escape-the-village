import random
startfrom = 0

f = open("output-html.txt", "w+")
f = open("output-html.txt", 'w')

f1 = open("output-js.txt", "w+")
f1 = open("output-js.txt", 'w')
arr = ["d1.gif","d2.gif","d3.gif"]

for i in range(120):
    startfrom = startfrom + 1
    x = random.randint(2000, 38000)
    y = random.randint(250, 300)
   
    f.write(f'<img src="images/level-5-assets/Objects/{random.choice(arr)}" class="MovingObjects" style="position:absolute; left:{x}px; bottom:{y}px;" id="skybirds-enm{startfrom}"/> \n')
    

f.close()
f1.close()