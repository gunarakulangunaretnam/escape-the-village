import random
startfrom = 0

f = open("output-html.txt", "w+")
f = open("output-html.txt", 'w')

f1 = open("output-js.txt", "w+")
f1 = open("output-js.txt", 'w')
arr = ["bird-1.gif","bird-2.gif","bird-3.gif","bird-4.gif","bird-5.gif"]

for i in range(100):
    startfrom = startfrom + 1
    x = random.randint(2000, 38000)
    y = random.randint(250, 300)
   
    f.write(f'<img src="images/enm_stage1/{random.choice(arr)}" class="MovingObjects" style="position:absolute; left:{x}px; bottom:{y}px;" id="skybirds-enm{startfrom}"/> \n')
    

f.close()
f1.close()