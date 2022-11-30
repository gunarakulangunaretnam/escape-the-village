import random
startfrom = 0

f = open("output-html.txt", "w+")
f = open("output-html.txt", 'w')

f1 = open("output-js.txt", "w+")
f1 = open("output-js.txt", 'w')

x = 1000

for i in range(15):
    startfrom = startfrom + 1
    randomNum = random.randint(2000, 40000)

   
    f.write(f'<div class="right-arrow2" style="left:{randomNum}px;"></div> \n')

    

f.close()
f1.close()