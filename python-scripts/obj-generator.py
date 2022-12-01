import random
startfrom = 0

f = open("output-html.txt", "w+")
f = open("output-html.txt", 'w')

f1 = open("output-js.txt", "w+")
f1 = open("output-js.txt", 'w')

arr = [1,2]

for i in range(20):
    startfrom = startfrom + 1
    x = random.randint(500, 35000)

    f.write(f'<img src="images/level-6-assets/Objects/Saw.png" class="antiClockwiseSpin" style="position:absolute; left:{x}px; top:0px; width: 100px;" id="saw{startfrom}" />  \n')

    f1.write(f'$("#saw{startfrom}").text(collision($("#saw{startfrom}"), $("#div2"))) \n')
    


    

f.close()
f1.close()