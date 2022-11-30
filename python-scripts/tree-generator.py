import random
startfrom = 0

f = open("output-html.txt", "w+")
f = open("output-html.txt", 'w')

f1 = open("output-js.txt", "w+")
f1 = open("output-js.txt", 'w')

x = 1000

for i in range(60):
    startfrom = startfrom + 1
    randomNum = random.randint(300, 1000)

   
    f.write(f'<div class="tree1" style="left:{x}px;"></div> \n')

    x = x + randomNum;
    

f.close()
f1.close()