import re
def switch(reset=False,_cache={}):
 if not 'flag' in _cache: _cache['flag']=False
 if reset: _cache['flag']=not _cache['flag']
 return _cache['flag']

def service(self, **kwarg_):
 print(f'>< service {kwarg_=}')
 if re.search(r'^service$',kwarg_['path'],flags=re.I):
  return (f'''<div class='downloadleft'>
 <ul class='tablist'>
 <a href='{kwarg_['staticurl']}/{kwarg_['path']}/'><li class='header'><p>{kwarg_['path']}</p></li></a>
 {chr(10).join(["<a href='"+kwarg_['staticurl']+"/"+kwarg_['path']+"/"+self.jsoni[kwarg_['path']]['data'][ii][4]+"'><li class='"+['light','dark'][ii%2]+"'><p>"+self.jsoni[kwarg_['path']]['data'][ii][0]+"</p></li></a>" for ii in range(len(self.jsoni[kwarg_['path']]['data']))])}
 </ul>
</div>''' if not kwarg_['mobile'] else f''' ''') + f'''\n<div class='serviceright'>
 <ul class='{"desservice" if not kwarg_['mobile'] else "five"}'>
  <li class="header"><p>{self.jsoni[kwarg_['path']]['subtitle']}</p></li>
  <li class="dark"><p>{self.jsoni[kwarg_['path']]['description']}</p></li>
{chr(10).join([(("  <li class='"+['light','dark'][ii%2]+"'>" if not ii%2 else "")+"<div class='"+['l','r'][ii%2]+"'><img src='http://minhinc.42web.io/image/"+self.jsoni[kwarg_['path']]['data'][ii][4]+".png'/><div><p>"+self.jsoni[kwarg_['path']]['data'][ii][0]+" - "+self.jsoni[kwarg_['path']]['data'][ii][5]+"</p><a class='red italic' href='"+kwarg_['staticurl']+"/service/"+self.jsoni[kwarg_['path']]['data'][ii][4]+"'>...read more</a></div></div>" if not kwarg_['mobile'] else ("  <li class='"+['light','dark'][ii%2]+"'>" if not ii%2 else "")+"<div class='"+['l','right'][ii%2]+"'><img class='ll' src='http://minhinc.42web.io/image/"+self.jsoni[kwarg_['path']]['data'][ii][4]+".png'/><div class='rr'><pre>"+self.jsoni[kwarg_['path']]['data'][ii][0]+" - "+self.jsoni[kwarg_['path']]['data'][ii][5]+"</pre><a class='red italic' href='"+kwarg_['staticurl']+"/service/"+self.jsoni[kwarg_['path']]['data'][ii][4]+"'>...read more</a></div></div>")+("</li>" if ii%2 or ii==(len(self.jsoni[kwarg_['path']]['data'])-1) else "") for ii in range(len(self.jsoni[kwarg_['path']]['data']))])}
 </ul>
{"</div>" if not kwarg_['mobile'] else "<div style='clear:both;'></div>"}
'''
 elif kwarg_['path'].count(r'/')==1:
  subtopic,topic=re.sub(r'^.*?/(.*)',r'\1',kwarg_['path']),re.sub(r'^(.*)/.*$',r'\1',kwarg_['path'])
  index=[ii for ii in range(len(self.jsoni[topic]['data'])) if subtopic==self.jsoni[topic]['data'][ii][4]][0]
  print(f'<=> service {(topic,index)=}')
  return f'''<div class='downloadleft'>
<ul class='tablist'>
<a href='{kwarg_['staticurl']}/{topic}/'><li class='header'><p>{topic}</p></li></a>
{chr(10).join(["<li class='current'><p class='padtop'>"+self.jsoni[topic]['data'][ii][0]+"</p></li>" if self.jsoni[topic]['data'][ii][4]==subtopic else "<a href='"+kwarg_['staticurl']+"/"+topic+"/"+self.jsoni[topic]['data'][ii][4]+"'><li class='"+['light','dark'][ii%2]+"'><p>"+self.jsoni[topic]['data'][ii][0]+"</p></li></a>" for ii in range(len(self.jsoni[topic]['data']))])}
 </ul>
</div>
<div class='serviceright'>
<ul class='desservice'>
<li class='header'><p>{subtopic.title()}</p></li>
<li class='dark'><p>Company has following products in {self.jsoni[topic]['data'][index][0]}</p></li>

{chr(10).join([("<li class='"+['light','dark'][switch()]+"'>" if switch(True) else "")+"<div class="+['l','r'][switch()]+"'><img src='http://minhinc.42web.io/image/"+self.jsoni['product']['data'][jj][4]+".png'/><div><p>"+self.jsoni['product']['data'][jj][0]+" - "+self.jsoni['product']['data'][jj][5]+"</p><a class='btnBlueGloss' href='"+kwarg_['staticurl']+"/product/"+self.jsoni['product']['data'][jj][4]+"'>... more</a></div></div>"+("</li>" if not switch() or jj==(len(self.jsoni['product']['data'])-1) else "") for jj in range(len(self.jsoni['product']['data'])) if self.utili.percentmatch(sourcel_=self.jsoni[topic]['data'][index][0],targets_=self.jsoni['product']['data'][jj][5])])}
 </ul>
</div>
'''
