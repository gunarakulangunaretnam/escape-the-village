import random
startfrom = 0

f = open("output-html.txt", "w+")
f = open("output-html.txt", 'w')

f1 = open("output-js.txt", "w+")
f1 = open("output-js.txt", 'w')

arr = [1,2]

for i in range(20):
    startfrom = startfrom + 1
    x = random.randint(2000, 38000)

    f.write(f'<img src="images/level-6-assets/Objects/{random.choice(arr)}.png" class="" style="position:absolute; left:{x}px; top:-30px; width: 40px;" id="obj{startfrom}"/> \n')


    

f.close()
f1.close()