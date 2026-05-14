from flask import Flask, jsonify, request
from flask_cors import CORS

import re,json, os
import apps.misc.util,apps.headerfooter,apps.main,apps.research,apps.about,apps.submit,apps.service

app = Flask(__name__)
CORS(app, origins=[
 "https://minhinc.github.io",
 "http://localhost:8000",
 "http://127.0.0.1:8000",
 "http://192.168.43.45:8000"
])

class handlerc:
 def __init__(self, *arg, **kwarg):
  print(f'>< handler.init {arg=} {kwarg=}')
  self.staticurl=self.renderurl=self.imageurl=None
  self.jsoni=json.loads(open("./static/site.json").read(),object_pairs_hook=lambda m,re=re:{(int(k) if re.search(r'^\d+$',k) else k):v for k,v in m})
  self.utili=apps.misc.util.utilc(jsoni=self.jsoni)

 main=apps.main.main
 research = apps.research.research
 about = apps.about.about
 service = apps.service.service
 submit = apps.submit.submit
 header = apps.headerfooter.header
 footer = apps.headerfooter.footer

handleri=handlerc()
handleri.cwd=os.getcwd()

@app.route("/", defaults={"path": ""})
@app.route("/<path:path>", methods=["GET", "POST"])
def data(path):
 print(f'>< data {path=}, {request.path=}, {handleri.cwd=}, {request.args=}  ')
 htmls=''
 path=re.sub(r'(^/|/$)','',path)

 staticurl=request.headers.get("Origin")
 renderurl=request.url_root
 if not staticurl: staticurl=renderurl
 handleri.imageurl='https://minhinc.github.io' if re.search('minhinc',renderurl,flags=re.I) else '/static'
 mobile=True if "Mobile" in request.headers.get("User-Agent") else False

 print(f'Modified {path=}, {staticurl=} {mobile=} {renderurl=} {request.method=} {dict(request.args)=}')

 if path=='jsonquery' and 'POST'==request.method:
  return jsonify(handleri.about(path=path, request=request))

 htmls+=handleri.header(path=path,mobile=mobile,staticurl=staticurl,renderurl=renderurl)
 htmls+=handleri.main(path=path,mobile=mobile,staticurl=staticurl,renderurl=renderurl) if re.search(r'^\s*$',path,flags=re.I) else handleri.research(path=path,request=request,mobile=mobile,staticurl=staticurl,renderurl=renderurl) if re.search(r'^(research|training|product)',path,flags=re.I) else handleri.about(path=path,mobile=mobile,staticurl=staticurl,renderurl=renderurl) if re.search(r'^(about|online|career)',path,flags=re.I) else handleri.service(path=path,mobile=mobile,staticurl=staticurl,renderurl=renderurl) if re.search(r'^service($|/)',path,flags=re.I) else "<p>HTML request 404 Not found</p>"
 htmls+=handleri.footer(path=path,mobile=mobile,staticurl=staticurl,renderurl=renderurl)

 open('test.html','w').write(htmls)
 '''
 open('testm.html','w').write(re.sub(r'/static/(?P<id>css|image|misc|micropython|pyscript)',lambda m:'../'+m.group('id'),htmls,flags=re.M|re.I))
 import os;os.system(r'/home/pi/tmp/ftp.sh put misc testm.html')
 '''

 #return jsonify({'html':htmls}) if not handleri.utili.match('POST',request.method) else htmls
 return htmls

if __name__ == '__main__':
 app.run(**(dict() if os.environ.get('RENDER') else dict(host='0.0.0.0')))    # Pi local — all interfaces
