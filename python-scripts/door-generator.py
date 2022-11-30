import random
startfrom = 0

f = open("output-html.txt", "w+")
f = open("output-html.txt", 'w')

f1 = open("output-js.txt", "w+")
f1 = open("output-js.txt", 'w')


x = 2000

for i in range(18):
    startfrom = startfrom + 1

    doortype = random.randint(1, 4)
   
    f.write(f'<img src="images/doors/1.png" style="position:absolute; left:{x}px; top:-175px; height: 480px;" id="door{startfrom}"/> \n' )
    
    f1.write(f'''if( $("#door{startfrom}").length)  DoorLogic($("#door{startfrom}"), $("#div2"), "door-open-box-{doortype}", 0); \n''')

    x = x + 2000

f.close()
f1.close()