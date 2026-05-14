import datetime
import re


def research(self,**kwarg_):
 print(f'>< research {kwarg_=}')
 if not re.search(r'/',kwarg_['path']):
  return (f'''<ul class='common'>
 <li class='header'><p>{kwarg_['path'].upper()}</p></li>
 <li class="main"><img src='{self.imageurl}/image/{kwarg_['path']}.png'/><div><p class='b'>{self.jsoni[kwarg_['path']]['subtitle']}</p><p class="n">{self.jsoni[kwarg_['path']]['description']}</p></div></li>
{chr(10).join(["<li class='entry'><a href='"+re.sub(r'^(?P<id>static|render)',lambda m,self=self:eval('self.'+m.group('id')+'url'),self.jsoni[kwarg_['path']]['data'][ii][2])+"'><div class='dl'><img src='"+self.imageurl+"/image/"+self.jsoni[kwarg_['path']]['data'][ii][4]+".png'><div><p class='b'>"+self.jsoni[kwarg_['path']]['data'][ii][0]+"</p><p>"+self.jsoni[kwarg_['path']]['data'][ii][5]+"</p><a class='space'></a><p class='space'>"+self.jsoni[kwarg_['path']]['data'][ii][1]+"</p></div></div></a>"+("</li>" if ii == (len(self.jsoni[kwarg_['path']]['data'])-1) else "") if not ii%2 else "<a href='"+re.sub(r'^(?P<id>static|render)',lambda m,self=self:eval('self.'+m.group('id')+'url'),self.jsoni[kwarg_['path']]['data'][ii][2])+"'><div class='dr'><img src='"+self.imageurl+"/image/"+self.jsoni[kwarg_['path']]['data'][ii][4]+".png'></a><div><p class='b'>"+self.jsoni[kwarg_['path']]['data'][ii][0]+"</p><p>"+self.jsoni[kwarg_['path']]['data'][ii][5]+"</p><a class='space'></a><p class='space'>"+self.jsoni[kwarg_['path']]['data'][ii][1]+"</p></div></div></a></li>" for ii in range(len(self.jsoni[kwarg_['path']]['data']))])}
  </ul>
''' if not kwarg_['mobile'] else f''' <ul class='two'>
<li class='header'><pre class='header'>{kwarg_['path'].upper()}</pre></li>
<li><div class='l'><img src='{self.imageurl}/image/{kwarg_['path']}.png'/></div><div class='right'><pre class='bold'>{self.jsoni[kwarg_['path']]['subtitle']}</pre><pre>{self.jsoni[kwarg_['path']]['description']}</pre></div></li>
{chr(10).join(["<li><div class='l'><div class='ll'><img src='"+self.imageurl+"/image/"+self.jsoni[kwarg_['path']]['data'][ii][4]+".png'/></div><div class='rr'><a href='"+re.sub(r'^(?P<id>static|render)',lambda m,self=self:eval('self.'+m.group('id')+'url'),self.jsoni[kwarg_['path']]['data'][ii][2])+"'><pre class='bold gold'>"+self.jsoni[kwarg_['path']]['data'][ii][0]+"</pre><pre>"+self.jsoni[kwarg_['path']]['data'][ii][5]+"</pre></a><a class='space'></a><pre class='space'>"+self.jsoni[kwarg_['path']]['data'][ii][1]+"</pre></div></div>"+("</li>" if ii == (len(self.jsoni[kwarg_['path']]['data'])-1) else "")  if not ii%2 else "<div class='right'><div class='ll'><img src='"+self.imageurl+"/image/"+self.jsoni[kwarg_['path']]['data'][ii][4]+".png'/></div><div class='rr'><a href='"+re.sub(r'^(?P<id>static|render)',lambda m,self=self:eval('self.'+m.group('id')+'url'),self.jsoni[kwarg_['path']]['data'][ii][2])+"'><pre class='bold gold'>"+self.jsoni[kwarg_['path']]['data'][ii][0]+"</pre><pre>"+self.jsoni[kwarg_['path']]['data'][ii][5]+"</pre></a><a class='space'></a><pre class='space'>"+self.jsoni[kwarg_['path']]['data'][ii][1]+"</pre></div></div></li>" for ii in range(len(self.jsoni[kwarg_['path']]['data']))])}
  </ul>
<div style='clear:both'></div>
''')
 elif re.search(r'^research\/pyscriptoffline.html$',kwarg_['path'],flags=re.I):
  return open(self.cwd+'/static/pyscriptoffline.html').read()
 elif kwarg_['path'].count(r'/')==1:
  subtopic,topic=re.sub(r'^.*?/(.*)',r'\1',kwarg_['path']),re.sub(r'^(.*)/.*$',r'\1',kwarg_['path'])
  index=[ii for ii in range(len(self.jsoni[topic]['data'])) if subtopic==self.jsoni[topic]['data'][ii][4]][0]
  return (f'''<div class='downloadleft'>
<ul class='tablist'>
<a href='{kwarg_['staticurl']}/{topic}/'><li class='header'><p>{topic}</p></li></a>
{chr(10).join(["<li class='current'><p class='padtop'>"+self.jsoni[topic]['data'][ii][0]+"</p></li>" if self.jsoni[topic]['data'][ii][4]==subtopic else "<a href='"+kwarg_['staticurl']+"/"+topic+"/"+self.jsoni[topic]['data'][ii][4]+"'><li class='"+['light','dark'][ii%2]+"'><p>"+self.jsoni[topic]['data'][ii][0]+"</p></li></a>" for ii in range(len(self.jsoni[topic]['data']))])}
 </ul>
</div>
<div class='downloadright'>
 <ul class='agenda'>
  <li class='header'><p>{self.jsoni[topic]['data'][index][0]} Essentials</p></li>
  <li><h1>{self.jsoni[topic]['data'][index][0]} Essentials</h1>
  <p class='m'>Get familiar with {self.jsoni[topic]['data'][index][0]} Concepts</p>
  <h3>Course details</h3></li>
  <li><p class='l'>Duration:</p> <p class='r'>{self.jsoni[topic]['data'][index][6]} days</p></li>
  <li><p class='l'>Agenda</p>:<a class='r' href='{kwarg_['staticurl']}/{topic}/{subtopic}/advance-{subtopic}-slides'><pre style='font-size:15pt;font-weight:bold;color:#400000;display:inline;padding:0'>Slides</pre></a></li>
  <li><p class='l'>Training materials</p>:<a class='r' href='{kwarg_['staticurl']}/{topic}/{subtopic}/advance-{subtopic}-slides'><pre style='font-size:15pt;font-weight:bold;color:#400000;display:inline;padding:0'>Slides</pre></a><p class='r'> Labs/Results</p></li>
  <li><p class='l'>Written language</p>: <p class='r'>English</p></li>
  <li><p class='l'>Available oral languages:</p> <p class='r'>English</p></li>
  <li><p class='l'>Register For Online Training: </p><p class='r'><a href='{kwarg_['staticurl']}/online' class='bold' style='font-size:16pt;color:#ff4444;'>Click here</a></p></li>
 </ul>
{chr(10).join([" <ul class='publication' style='clear:both;'><li class='header'><p>"+ii+"</p></li>"+chr(10).join(["<li><a href='"+self.jsoni[ii]['data'][jj][2]+"'> - "+self.jsoni[ii]['data'][jj][0]+"</a><p class='italic inline'>"+self.jsoni[ii]['data'][jj][3]+","+self.jsoni[ii]['data'][jj][1]+"</p><p class='i'>"+self.jsoni[ii]['data'][jj][5]+"</p></li>" for jj in range(len(self.jsoni[ii]['data'])) if self.utili.percentmatch(sourcel_=self.jsoni[topic]['data'][index][0],targets_=self.jsoni[ii]['data'][jj][5])])+chr(10)+" </ul>" for ii in ['research','product']])}
</div>
''' if not kwarg_['mobile'] else f''' <ul class='three'>
<li class='header'><pre class='header'>{self.jsoni[topic]['data'][index][0]} Essentials</pre></li>
<li class='table'><h3>{self.jsoni[topic]['data'][index][0]} Essentials</h3>
<pre class='f10'>Get familiar with {self.jsoni[topic]['data'][index][0]} Concepts</pre>
<h4>Course details</h4>
<pre class='f10'><span class='bold'>Duration: </span>{self.jsoni[topic]['data'][index][6]} days</pre>
<pre class='f10'><span class='bold'>Agenda: </span><a href='{kwarg_['staticurl']}/{topic}/{subtopic}/advance-{subtopic}-slides'<span class='bold gold f14'>Slides</span></pre></a>
<pre class='f10'><span class='bold'>Training materials: </span><a href='{kwarg_['staticurl']}/{topic}/{subtopic}/advance-{subtopic}-slides'><span class='bold gold f14'>Slides</span></a> <span class='f8'>Labs/Results</span></pre>
<pre class='f10'><span class='bold'>Written language: </span><span class='f8'>English</span></pre>
<pre class='f10'><span class='bold'>Available oral languages: </span><span class='f8'>English</span></pre>
<pre class='f10' style='margin-top:5px'><span class='bold'>Register For Online Training: </span><a href='{kwarg_['staticurl']}/online' class='bold' style='font-size:16pt;color:#ff4444;'>Click here</a></pre></li><div class='clr'></div>
{chr(10).join(["<li class='ht' style='margin-top:5px;'><pre>"+ii+"</pre></li>"+chr(10).join(["<li class='htl'><a class='link' href='"+self.jsoni[ii]['data'][jj][2]+"'>"+self.jsoni[ii]['data'][jj][0]+"</a><pre class='italic inline'>"+self.jsoni[ii]['data'][jj][3]+","+self.jsoni[ii]['data'][jj][1]+"</pre><pre class='italic'>"+self.jsoni[ii]['data'][jj][5]+"</pre></li><div class='clr'></div>" for jj in range(len(self.jsoni[ii]['data'])) if self.utili.percentmatch(sourcel_=self.jsoni[topic]['data'][index][0],targets_=self.jsoni[ii]['data'][jj][5])]) for ii in ['research','product']])}
 </ul>
 <div class='clr'>
</div>
''')
 elif kwarg_['path'].count(r'/')==2:
  return re.sub(r'http:\/\/minhinc.42web.io\/image',self.imageurl+'/image',open(self.cwd+'/static/'+re.sub(r'[.]php$','',kwarg_['path'])+('-chap'+kwarg_['request'].args['chap'] if 'chap' in kwarg_['request'].args else '')+('_m' if kwarg_['mobile'] else '')+'.txt').read(),flags=re.I|re.DOTALL)
