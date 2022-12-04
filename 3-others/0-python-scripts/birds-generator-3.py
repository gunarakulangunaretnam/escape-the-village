import random
startfrom = 0

f = open("output-html.txt", "w+")
f = open("output-html.txt", 'w')

f1 = open("output-js.txt", "w+")
f1 = open("output-js.txt", 'w')

arr = [1,2,3,4,5]

for i in range(300):
    startfrom = startfrom + 1
    x = random.randint(2000, 38000)
    y = random.randint(280, 320)
   
    f.write(f'<img src="images/enm_stage1/bird-{random.choice(arr)}.gif" class="MovingObjects" style="position:absolute; left:{x}px; bottom:{y}px;" id="skybirds-enm{startfrom}"/> \n')
    

f.close()
f1.close()