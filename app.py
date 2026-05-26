from flask import Flask, jsonify, request
from flask_cors import CORS

import re,json, os
import apps.handler

app = Flask(__name__)
CORS(app, origins=[
 "https://minhinc.github.io",
 "http://localhost:8000",
 "http://127.0.0.1:8000",
 "http://192.168.43.45:8000"
])

handleri=apps.handler.handlerc()

@app.route("/ping")
def ping():
 return "<p>ping</p>"

@app.route("/", defaults={"path": ""})
@app.route("/<path:path>", methods=["GET", "POST"])
def data(path):
 print(f'>< app.py data {path=}, {request.path=}, {handleri.cwd=}, {request.args=}  ')
 htmls=''
 tdict=dict()
 path=re.sub(r'(^/|/$)','',path).lower()

 handleri.staticurl=request.headers.get("Origin") if not hasattr(handleri,'staticurl') or handleri.staticurl==handleri.renderurl else handleri.staticurl
 handleri.renderurl=request.url_root
 if not handleri.staticurl: handleri.staticurl=handleri.renderurl
 tdict['staticurl'],tdict['renderurl']=[re.sub(r'/$','',eval('handleri.'+x)) for x in ('staticurl','renderurl')]
 tdict['imageurl']='https://minhinc.github.io' if re.search('minhinc',tdict['renderurl'],flags=re.I) else '/static'
 tdict['mobile']=True if "Mobile" in request.headers.get("User-Agent") else False
 tdict['request']=request
 tdict['path']=path

 print(f'<=> app.py data {(handleri.staticurl,handleri.renderurl)=} {tdict=}')

 htmls=handleri.header(**tdict)+(eval('handleri.'+re.sub(r'/.*$','',path or 'main')+'(**tdict)') if hasattr(handleri,re.sub(r'/.*$','',path or 'main')) else f'<p>FILE {path} NOT FOUND </p>')+handleri.footer(**tdict)

 open('test.html','w').write(htmls)
 '''
 open('testm.html','w').write(re.sub(r'/static/(?P<id>css|image|misc|micropython|pyscript)',lambda m:'../'+m.group('id'),htmls,flags=re.M|re.I))
 import os;os.system(r'/home/pi/tmp/ftp.sh put misc testm.html')
 '''

 #return jsonify({'html':htmls}) if not handleri.utili.match('POST',request.method) else htmls
 return htmls

if __name__ == '__main__':
 app.run(**(dict() if os.environ.get('RENDER') else dict(host='0.0.0.0')))    # Pi local — all interfaces
