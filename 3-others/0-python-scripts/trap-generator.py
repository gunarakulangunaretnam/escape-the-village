import random
startfrom = 0

f = open("output-html.txt", "w+")
f = open("output-html.txt", 'w')

f1 = open("output-js.txt", "w+")
f1 = open("output-js.txt", 'w')

for i in range(20):
    startfrom = startfrom + 1
    x = random.randint(2000, 38000)
    types = ["cactus-1.png","cactus-2.png"]


   
    f.write(f'''<div style="position:absolute; z-index:111; left:{x}px; bottom:90px;"'>
                  <div style=" position:relative;">
                     <img style="width: 160px; height: 160px;" src="images/level-5-assets/Objects/enemy.gif"/>
                     <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;"  id="enm{startfrom}"></div>
                  </div>
               </div>
 \n''')
    
    
    f1.write(f"$('.result').text(collision($('#enm{startfrom}'), $('#div2'))) \n")

     

f.close()
f1.close()