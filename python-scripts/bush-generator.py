import random
startfrom = 0

f = open("output-html.txt", "w+")
f = open("output-html.txt", 'w')

f1 = open("output-js.txt", "w+")
f1 = open("output-js.txt", 'w')


x = 2000

arr = [1,2,3,4]

for i in range(700):
    startfrom = startfrom + 1

    doortype = random.randint(1, 4)
   
    f.write(f'<div class="bush{random.choice(arr)}" style="left:{x}px;"></div> \n' )


    x = x + 50

f.close()
f1.close()