import re,json
from pyscript import when,document,fetch
def enabledisable(**kwarg_):
 if kwarg_['disable']==True:
  document.getElementById('submitid').classList.remove('enable')
  document.getElementById('submitid').classList.add('disable')
  document.getElementById('submitid').disabled=True
 else:
  document.getElementById('submitid').classList.remove('disable')
  document.getElementById('submitid').classList.add('enable')
  document.getElementById('submitid').disabled=False



async def on_event(event):
 formobj=event.target.form if hasattr(event.target,'form') else event.target.closest('form')
 print(f'>< on_event {event.type=} {event.target=} {event.target.id=}')
 if formobj.querySelector('#dateid'):
  print(f'{formobj.querySelector("#dateid").value=} {(formobj.querySelector("#dateid").value=="")=} {formobj.querySelector("#selecttechid").selectedIndex=}')

 if event.target.id=='attachmentid':
  print(f'{event.target.files.length=} {dir(event.target.files)=} {dir(event.target.files[0])=}')

 enabledisable(disable=True)
 event.target.style.removeProperty('border')

 if event.target.id=='selecttechid' and event.target.selectedIndex>0:
  print('SENDINGGGGGGGGGGGGGGGGGGGGG...........')
  response = await fetch(
        "/jsonquery",
        method="POST", 
        body=json.dumps(['training','data']),
        headers={"Content-Type": "application/json"}
    )
    
  # 2. Interpret the returned code through Python
  data = await response.json()
  print('RECEIVING...........')
#  print(f'Recieved {data=}, {event.target.selectedIndex=}')
  if formobj.querySelector('#chargeid'): formobj.querySelector('#chargeid').innerHTML=data[event.target.selectedIndex-1][7]
  if formobj.querySelector('#durationid'): formobj.querySelector('#durationid').innerHTML=data[event.target.selectedIndex-1][6]
  formobj.querySelector('#courseid').innerHTML="Click here for course content"
  formobj.querySelector('#courseid').setAttribute('href',f'https://minhinc.github.io/training/{data[event.target.selectedIndex-1][4]}')


 if event.target.id=='emailid' and not re.search(r'^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$',document.getElementById('emailid').value) or event.target.id=='messageid' and not len(document.getElementById('messageid').value)>0 or event.target.id=='submitid' and not document.getElementById('submitid').getAttribute('data-res')==document.querySelector('.quiz-control').value or event.target.id=='selecttechid' and event.target.selectedIndex<=0 or event.target.id=='attachementid' and (not len(event.target.files) or event.target.files[0].size > 2*1024*1024 or not re.search(r'[.](txt|pdf|png|doc|docx)$',event.target.files[0].name)):
  event.target.style.border='1px solid red'
 elif (not formobj.querySelector('#selecttechid') or formobj.querySelector('#selecttechid').selectedIndex>0) and (not formobj.querySelector('#emailid') or re.search(r'^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$',formobj.querySelector('#emailid').value)) and (not formobj.querySelector('#messageid') or len(formobj.querySelector('#messageid').value)>0)  and (not formobj.querySelector('.quiz-control') or document.querySelector('#submitid').getAttribute('data-res')==formobj.querySelector('.quiz-control').value) and (not formobj.querySelector('#dateid') or re.search(r'^\d\d\d\d-\d\d-\d\d$',formobj.querySelector('#dateid').value)) and (not formobj.querySelector('#attachmentid') or not 'mandatory' in list(formobj.querySelector('#attachmentid').classList) or formobj.querySelector('#attachmentid').files.length>0 and formobj.querySelector('#attachmentid').files[0].size <= 2*1024*1024 and re.search(r'[.](txt|pdf|png|doc|docs)$',formobj.querySelector('#attachmentid').files[0].name)):
  print(f'Pgrogressing ....')
  enabledisable(disable=False)
 elif formobj.querySelector('#dateid') and not re.search(r'^\d\d\d\d-\d\d-\d\d$',formobj.querySelector('#dateid').value):
  formobj.querySelector('#dateid').style.border='1px solid red'

for i in document.querySelectorAll('.mandatory'):
 if re.search(r'^(selecttechid|dateid)$',i.id):
  i.addEventListener('change',on_event)
 else:
  i.addEventListener('input',on_event)

async def on_submit(event):
 # STOP the browser from reloading the page
 event.preventDefault()
 formobj=event.target.form if hasattr(event.target,'form') else event.target.closest('form')
 formobj.querySelector('#iframeid').innerHTML='Message Sent'
 enabledisable(disable=True)
 print(f'>< on_submit')
        
    
document.querySelector('#submitid').addEventListener('click',on_submit)
