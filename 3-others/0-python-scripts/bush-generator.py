import random
startfrom = 0

f = open("output-html.txt", "w+")
f = open("output-html.txt", 'w')

f1 = open("output-js.txt", "w+")
f1 = open("output-js.txt", 'w')


x = 2000

arr = [1,2]

for i in range(100):
    startfrom = startfrom + 1

    x = random.randint(200, 36000)

    doortype = random.randint(1, 4)
   
    f.write(f'<div class="skeleton" style="left:{x}px;"></div> \n' )


f.close()
f1.close()