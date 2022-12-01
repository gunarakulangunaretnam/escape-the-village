import random
startfrom = 0

f = open("output-html.txt", "w+")
f = open("output-html.txt", 'w')

f1 = open("output-js.txt", "w+")
f1 = open("output-js.txt", 'w')

x = 500

for i in range(30):
    startfrom = startfrom + 1

    f.write(f'<img src="images/level-6-assets/Objects/drone.gif" class="droneAnimation" style="position:absolute; left:{x}px; top:-550px; width: 300px;" id="drone{startfrom}" /> \n')

    x = x + 1200

    

f.close()
f1.close()