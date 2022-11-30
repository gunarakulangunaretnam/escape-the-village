import random
startfrom = 0

f = open("output-html.txt", "w+")
f = open("output-html.txt", 'w')

f1 = open("output-js.txt", "w+")
f1 = open("output-js.txt", 'w')


x = 2000


for i in range(700):
    startfrom = startfrom + 1
   
    f.write(f'<div class="stone1" style="left:{x}px;"></div> \n')

    x = x + 500

f.close()
f1.close()