import random
startfrom = 0

f = open("output-html.txt", "w+")
f = open("output-html.txt", 'w')

f1 = open("output-js.txt", "w+")
f1 = open("output-js.txt", 'w')


x = 1000

arr = [1,2]

for i in range(370):
    startfrom = startfrom + 1

    doortype = random.randint(1, 4)
   
    f.write(f'<div class="mush{random.choice(arr)}" style="left:{x}px;"></div> \n' )


    x = x + 100

f.close()
f1.close()