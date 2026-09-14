from flask import Flask, jsonify, request
from flask_cors import CORS

import re,os,subprocess,importlib,shlex,socket

app = Flask(__name__)

def get_machine_ip():
    if os.environ.get('RENDER') == 'true':
        return os.environ.get('RENDER_EXTERNAL_HOSTNAME', 'unknown-render-host')
    s = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)
    try:
        s.connect(("8.8.8.8", 80))
        return re.sub(r'^https?://','',s.getsockname()[0],flags=re.I)
    except Exception:
        return "127.0.0.1"
    finally:
        s.close()

CORS(app, origins=[
 "https://minhinc.github.io",
 "http://localhost:8000",
 "http://127.0.0.1:8000",
 re.sub(r'^',r'http://',get_machine_ip())+":8000"
])
#"http://10.60.127.45:8000"

try:
 #resources = app.extensions['cors']['resources']
 #print("ORIGINS: ",next(iter(resources.values()))['origins'])
 print(f'{subprocess.run(["git","clone","https://github.com/minhinc/static"],capture_output=True,text=True)=}')
 print(f'{subprocess.run(["git","clone","https://github.com/minhinc/apps"],capture_output=True,text=True)=}')
 print(f'{subprocess.run(["git","clone","https://github.com/minhinc/lib"],capture_output=True,text=True)=}')
 if not os.environ.get('RENDER'):
  print(f'{subprocess.run(["git","clone","https://github.com/minhinc/image"],cwd="static",capture_output=True,text=True)=}')
  print(f'{subprocess.run(["sudo","apt-get","install","nodejs","npm"],capture_output=True,text=True)=}')
  print(f'{subprocess.run(["npm","i","@pyscript/core"],cwd="static",capture_output=True,text=True)=}')
  print(f'{subprocess.run(["npm","i","@micropython/micropython-webassembly-pyscript"],cwd="static",capture_output=True,text=True)=}')
  print(f'{subprocess.run(["ln","-s","./node_modules/@pyscript/core/dist","./pyscript"],cwd="static",capture_output=True,text=True)=}')
  print(f'{subprocess.run(["ln","-s","./node_modules/@micropython/micropython-webassembly-pyscript","./micropython"],cwd="static",capture_output=True,text=True)=}')
 #print(f'{subprocess.run(["python3", "-m", "lib.ftp", "--get", "mchfile=.", "ftpfile=render/apps"],capture_output=True,text=True)=}')
except Exception as e:
 print(f'subprocess running command failed {e=}')

import apps.handler
handleri=apps.handler.handlerc()

@app.route("/ping")
def ping():
 if not request.args:
  return "<h1>ping</h1>"
 #elif [x for x in request.args if re.search(r'^[cs]?cmd$',x)]:
 elif 'cmd' in request.args:
  #return re.sub(r'\n','<br>',os.popen(f'{request.args["ccmd"]}').read() if 'ccmd' in request.args else subprocess.run(shlex.split(request.args['cmd' if 'cmd' in request.args else 'scmd']),capture_output=True,text=True).stdout,flags=re.DOTALL)
  return re.sub(r'\n','<br>',os.popen(request.args["cmd"]).read(),flags=re.DOTALL)
 else:
  return 'UNKNOWN ARGUMENTS'

@app.route("/reload")
def reload():
 global handleri
 try:
  if 'cmd' in request.args: importlib.reload(sys.modules[request.args["cmd"]])
  del handleri
  importlib.reload(apps.handler)
  handleri=apps.handler.handlerc()
 except Exception as e:
  return f'reload Exception {e=}'
 return "success"


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
 tdict['local']=False if re.search(r'minhinc\.onrender\.com',tdict['renderurl'],flags=re.I) else True
 tdict['staticdir']='/static' if tdict['local'] else 'https://minhinc.github.io/static'

 print(f'<=> app.py data {(handleri.staticurl,handleri.renderurl)=} {tdict=}')

 #htmls=handleri.header(**tdict)+(eval('handleri.'+re.sub(r'/.*$','',path or 'main')+'(**tdict)') if hasattr(handleri,re.sub(r'/.*$','',path or 'main')) else f'<p>FILE {path} NOT FOUND </p>')+handleri.footer(**tdict)
 htmls=(eval('handleri.'+re.sub(r'/.*$','',path or 'main')+'(**tdict)') if hasattr(handleri,re.sub(r'/.*$','',path or 'main')) else f'<p>FILE {path} NOT FOUND </p>')
 htmls=handleri.header(**tdict)+htmls+handleri.footer(**tdict) if type(htmls)==str else htmls

 if type(htmls)==str: open('test.html','w').write(htmls)
 '''
 open('testm.html','w').write(re.sub(r'/static/(?P<id>css|image|misc|micropython|pyscript)',lambda m:'../'+m.group('id'),htmls,flags=re.M|re.I))
 import os;os.system(r'/home/pi/tmp/ftp.sh put misc testm.html')
 '''

 #return jsonify({'html':htmls}) if not handleri.utili.match('POST',request.method) else htmls
 return htmls

if __name__ == '__main__':
 app.run(**(dict() if os.environ.get('RENDER') else dict(host='0.0.0.0')))    # Pi local — all interfaces
