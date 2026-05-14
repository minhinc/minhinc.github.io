import re,datetime
def main(self,**kwarg_):
 print(f'>< {kwarg_}')
 return (f'''<div class='leftpan'>
 <a href='https://www.youtube.com/c/minhinc'><img src='{self.imageurl}/image/main_front.png'/></a>
 <div class='research'>
  <ul class='research'>
   <a href='{kwarg_['staticurl']}/research/'><li class='header'><p>Research</p></li></a>
   {chr(10).join(["<a href='"+self.jsoni['research']['data'][ii][2]+"'><li class='"+['light','dark'][ii%2]+"'><p class='t'>"+self.jsoni['research']['data'][ii][0]+"</p><p class='b'>"+self.jsoni['research']['data'][ii][3]+","+self.jsoni['research']['data'][ii][1]+"</p><img src='"+self.imageurl+"/image/"+self.jsoni['research']['data'][ii][4]+".png'/></li></a>" for ii in range(len(self.jsoni['research']['data']))])}
  </ul>
 </div>
 <div class='product'>
  <ul class='research'>
   <a href='{kwarg_['staticurl']}/product/'><li class='header'><p>Product</p></li></a>
   {chr(10).join(["<a href='"+self.jsoni['product']['data'][ii][2]+"'><li class='"+['light','dark'][ii%2]+"'><p class='t'>"+self.jsoni['product']['data'][ii][0]+"</p><p class='bp'>"+self.jsoni['product']['data'][ii][1]+"</p><img src='"+self.imageurl+"/image/"+self.jsoni['product']['data'][ii][4]+".png'/></li></a>" for ii in range(len(self.jsoni['product']['data']))])}
  </ul>
 </div>
</div>
<div class='rightpan'>
 <ul class='events'>
  <li class='header'><p>Upcoming Events</p></li>
   {chr(10).join(["<a href='"+self.jsoni['training']['data'][ii][2]+"'><li class='"+['light','dark'][ii%2]+"'><p class='t'>"+self.jsoni['training']['data'][ii][0]+" Training </p><p class='b'>"+(datetime.datetime.now()+datetime.timedelta(days=(0 if datetime.datetime.now().day<=15 else 15))).strftime("%B")+" "+str(datetime.datetime.now().year)+"</p></li></a>" for ii in range(len(self.jsoni['training']['data'])) if re.search('(machine|artificial|python)',self.jsoni['training']['data'][ii][0],flags=re.I)])}
 </ul>
 <ul class='next'>
  <a href='{kwarg_['staticurl']}/training/'><li class='header'><p>Training</p></li></a>
   {chr(10).join(["<li class='"+['light','dark'][ii%2]+"'><a class='ls' href='"+kwarg_['staticurl']+"/training/'>Slides</a><a href='"+kwarg_['staticurl']+"/training/"+self.jsoni['training']['data'][ii][4]+"'><img class='l' src='"+self.imageurl+"/image/"+self.jsoni['training']['data'][ii][4]+".png'/></a>"+("</li" if ii == (len(self.jsoni['training']['data'])-1) else "") if not ii%2 else "<a class='rs' href='"+kwarg_['staticurl']+"/training/"+self.jsoni['training']['data'][ii][4]+"'>Slides</a><a href='"+kwarg_['staticurl']+"/training/"+self.jsoni['training']['data'][ii][4]+"'><img class='r' src='"+self.imageurl+"/image/"+self.jsoni['training']['data'][ii][4]+".png'/></a></li>" for ii in range(len(self.jsoni['training']['data']))])}
 </ul>
</div>
''' if not kwarg_['mobile'] else f''' <a href='https://www.youtube.com/c/minhinc'><img class='traininglogo' src='{self.imageurl}/image/main_front.png'/></img></a>
 <div class='one'> <ul class='events'>
  <li class="header"><p>Upcoming Events</p></li>
   {chr(10).join(["<a href='"+self.jsoni['training']['data'][ii][2]+"'><li class='"+['light','dark'][ii%2]+"'><p class='t'>"+self.jsoni['training']['data'][ii][0]+" Training </p><p class='b'>"+(datetime.datetime.now()+datetime.timedelta(days=(0 if datetime.datetime.now().day<=15 else 15))).strftime("%B")+" "+str(datetime.datetime.now().year)+"</p></li></a>" for ii in range(len(self.jsoni['training']['data']))])}
  </ul>
 </div>

{chr(10).join(["<div class='one'><a href='"+kwarg_['staticurl']+"/"+ii+"'><pre class='title'>"+ii+"</pre></a><pre class='subtitle'>"+self.jsoni[ii]['description']+"</pre></div>"+chr(10)+"  <ul class='one'>" + chr(10).join(["  <li class='"+['light','dark'][jj%2]+"'><a href='"+kwarg_['staticurl']+"/"+self.jsoni[ii]['data'][jj][4]+"'><img src='"+self.imageurl+"/image/"+self.jsoni[ii]['data'][jj][4]+".png'/><pre>"+self.jsoni[ii]['data'][jj][0]+"</pre></a></li>" for jj in range(len(self.jsoni[ii]['data']))])+ chr(10)+" </ul>"+chr(10)+"  <div style='clear:both'>"+chr(10)+" </div>" for ii in self.jsoni if ii in ['research','product','training']])}
''')
