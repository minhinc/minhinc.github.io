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
 {chr(10).join(["<a href='"+kwarg_['staticurl']+"/"+kwarg_['path']+"/"+self.utili.gjf(self.jsoni[kwarg_['path']]['data'][ii],'abbreviation')+"'><li class='"+['light','dark'][ii%2]+"'><p>"+self.utili.gjf(self.jsoni[kwarg_['path']]['data'][ii],'title')+"</p></li></a>" for ii in range(len(self.jsoni[kwarg_['path']]['data']))])}
 </ul>
</div>''' if not kwarg_['mobile'] else f''' ''') + f'''\n<div class='serviceright'>
 <ul class='{"desservice" if not kwarg_['mobile'] else "five"}'>
  <li class="header"><p>{self.jsoni[kwarg_['path']]['subtitle']}</p></li>
  <li class="dark"><p>{self.jsoni[kwarg_['path']]['description']}</p></li>
{chr(10).join([(("  <li class='"+['light','dark'][ii%2]+"'>" if not ii%2 else "")+"<div class='"+['l','r'][ii%2]+"'><img src='"+kwarg_['imageurl']+"/image/"+self.utili.gjf(self.jsoni[kwarg_['path']]['data'][ii],'abbreviation')+".png'/><div><p>"+self.utili.gjf(self.jsoni[kwarg_['path']]['data'][ii],'title')+" - "+self.utili.gjf(self.jsoni[kwarg_['path']]['data'][ii],'description')+"</p><a class='red italic' href='"+kwarg_['staticurl']+"/service/"+self.utili.gjf(self.jsoni[kwarg_['path']]['data'][ii],'abbreviation')+"'>...read more</a></div></div>" if not kwarg_['mobile'] else ("  <li class='"+['light','dark'][ii%2]+"'>" if not ii%2 else "")+"<div class='"+['l','right'][ii%2]+"'><img class='ll' src='"+kwarg_['imageurl']+"/image/"+self.utili.gjf(self.jsoni[kwarg_['path']]['data'][ii],'abbreviation')+".png'/><div class='rr'><pre>"+self.utili.gjf(self.jsoni[kwarg_['path']]['data'][ii],'title')+" - "+self.utili.gjf(self.jsoni[kwarg_['path']]['data'][ii],'description')+"</pre><a class='red italic' href='"+kwarg_['staticurl']+"/service/"+self.utili.gjf(self.jsoni[kwarg_['path']]['data'][ii],'abbreviation')+"'>...read more</a></div></div>")+("</li>" if ii%2 or ii==(len(self.jsoni[kwarg_['path']]['data'])-1) else "") for ii in range(len(self.jsoni[kwarg_['path']]['data']))])}
 </ul>
{"</div>" if not kwarg_['mobile'] else "<div style='clear:both;'></div>"}
'''
 elif kwarg_['path'].count(r'/')==1:
  subtopic,topic=re.sub(r'^.*?/(.*)',r'\1',kwarg_['path']),re.sub(r'^(.*)/.*$',r'\1',kwarg_['path'])
  index=[ii for ii in range(len(self.jsoni[topic]['data'])) if subtopic==self.utili.gjf(self.jsoni[topic]['data'][ii],'abbreviation')][0]
  print(f'<=> service {(topic,index)=}')
  return f'''<div class='downloadleft'>
<ul class='tablist'>
<a href='{kwarg_['staticurl']}/{topic}/'><li class='header'><p>{topic}</p></li></a>
{chr(10).join(["<li class='current'><p class='padtop'>"+self.jsoni[topic]['data'][ii][0]+"</p></li>" if self.utili.gjf(self.jsoni[topic]['data'][ii],'abbreviation')==subtopic else "<a href='"+kwarg_['staticurl']+"/"+topic+"/"+self.utili.gjf(self.jsoni[topic]['data'][ii],'abbreviation')+"'><li class='"+['light','dark'][ii%2]+"'><p>"+self.utili.gjf(self.jsoni[topic]['data'][ii],'title')+"</p></li></a>" for ii in range(len(self.jsoni[topic]['data']))])}
 </ul>
</div>
<div class='serviceright'>
<ul class='desservice'>
<li class='header'><p>{subtopic.title()}</p></li>
<li class='dark'><p>Company has following products in {self.utili.gjf(self.jsoni[topic]['data'][index],'title')}</p></li>
{chr(10).join([("<li class='"+['light','dark'][switch()]+"'>" if switch(True) else "")+"<div class="+['l','r'][switch()]+"'><img src='"+kwarg_['imageurl']+'/image/'+self.utili.gjf(self.jsoni['product']['data'][jj],'abbreviation')+".png'/><div><p>"+self.utili.gjf(self.jsoni['product']['data'][jj],'title')+" - "+self.utili.gjf(self.jsoni['product']['data'][jj],'description')+"</p><a class='btnBlueGloss' href='"+kwarg_['staticurl']+"/product/"+self.utili.gjf(self.jsoni['product']['data'][jj],'abbreviation')+"'>... more</a></div></div>"+("</li>" if not switch() or jj==(len(self.jsoni['product']['data'])-1) else "") for jj in range(len(self.jsoni['product']['data'])) if self.utili.percentmatch(sourcel_=self.utili.gjf(self.jsoni[topic]['data'][index],'title'),targets_=self.utili.gjf(self.jsoni['product']['data'][jj],'description'))])}
 </ul>
</div>
'''
