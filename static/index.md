---
title: "Offline Support for PyScript"
toc-title: "Summary of Sections"
header-includes: |
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
   @media screen and (min-width: 800px) {
    body {
      font-family: "Roboto", -apple-system, BlinkMacSystemFont, Helvetica, Arial, sans-serif;
      line-height: 1.6;
      color: #3c3c3c;
      background-color: #f8f9fb;
      max-width: 900px;
      margin: 40px auto;
      padding: 0 20px;
    }
   }

   @media screen and (min-width: 601px) and (max-width: 799px) {
     body {
       padding: 15px 20px;
       box-sizing: border-box;
       font-family: sans-serif;
       line-height: 1.5;
       color: #3c3c3c;
       background-color: #f8f9fb;
     }
   }
   
   @media screen and (max-width: 600px) {
    /* 1. The Mobile "Shield" - Prevents horizontal scrolling */
    html, body {
      max-width: 100%;
      overflow-x: hidden; /* Stops the horizontal wiggle */
      margin: 0;
      padding: 0;
    }

    body {
      padding: 15px; /* Gives text some breathing room on mobile */
      box-sizing: border-box;
      word-wrap: break-word; /* Forces long URLs/words to wrap */
      overflow-wrap: break-word;
      font-family: sans-serif;
      line-height: 1.5;

      color: #3c3c3c;
      background-color: #f8f9fb;
    }

    /* 2. Ensure all elements respect the width */
    * {
      box-sizing: border-box;
    }
   }

   h1, h2, h3 { color: #3f51b5; font-weight: 700; }

   pre:has(code) {
    background-color: #f0f0f0 !important;
    color: #333 !important;
  
    /* Shrink to content width */
    width: -webkit-fit-content;
    width: fit-content;
  
    /* Cap at viewport — no page-level overflow */
    max-width: 100% !important;
    box-sizing: border-box;
  
    /* Scroll inside the block when wider than screen */
    overflow-x: auto !important;
    -webkit-overflow-scrolling: touch;
  
    padding: 0.8em 1.2em;
    border-radius: 4px;
    margin: 1em 0;
    font-family: 'Courier New', Courier, monospace;
    font-size: 0.9em;
    line-height: 1.5;
  
    /* Keep lines intact — CRITICAL for ascii/text blocks */
    white-space: pre !important;
  
    /* ↓ These two lines are the fix.
       They cancel out the overflow-wrap: break-word and
       word-wrap: break-word inherited from body on mobile,
       which was causing ascii/text lines to wrap instead of scroll. */
    overflow-wrap: normal !important;
    word-break: normal !important;
  }
  pre code {
    white-space: inherit !important;
    overflow-wrap: normal !important;
    word-break: normal !important;
  }

   
   /* When pandoc uses --highlight-style it wraps pre in div.sourceCode.
      Give the wrapper the same shrink-to-content behaviour so the
      background doesn't stretch across the full page either. */
   div.sourceCode {
     width: -webkit-fit-content;
     width: fit-content;
     max-width: 100%;
     margin: 1em 0;
   }
   
   div.sourceCode pre {
     margin: 0;      /* outer div.sourceCode owns the margin */
   }
   
   /* Prevent the page itself from gaining a horizontal scrollbar
      when a wide code block is present — scrolling stays local. */
   body {
     overflow-x: hidden;
   }
   /* pre sytling */
    
    /* Table of Contents Styling */
    #TOC {
      background: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      margin-bottom: 40px;
      line-height:1.4em;
    }
    #TOC ul { list-style: none; padding-left: 15px; }
    #TOC a { font-size:12pt;text-decoration: none; color: #3f51b5; }
    #TOC a:hover { text-decoration: underline; }

    /* Custom Indented Subsection Class */
    .indented-section {
     /* margin-left: 40px;
      border-left: 3px solid #e0e0e0;
      padding-left: 20px; */
      margin-left: 5px;
      padding-left: 2px;
     /* background: #fdfdfd;*/
    }
    
    /* Indent images and tables globally */
    /* img, table { margin-left: 40px; border-radius: 4px; } */
    img, table { margin-left: 10px; border-radius: 2px; }
    table { border-collapse: collapse; background: white; }
    th, td { border: 1px solid #ddd; padding: 8px 12px; }
    th { background-color: #f5f5f5; }
  </style>
  <style>
    img { max-width: 300px; cursor: pointer; transition: 0.3s; display: block; margin: 10px 0; }
    img.expanded { max-width: 100%; cursor: zoom-out; }
    p {font-size:12pt;line-height:1.5em;color:#222222;}
    figcaption {margin-left:10%;font-size:8pt;font-weight:bold}
    #backToTop {
     /* position: fixed; bottom: 20px; right: 20px; display: none; */
      position: fixed; bottom: 5%; right: 5%; display: none; 
      background: #333; color: #fff; border: none; padding: 10px 15px;
      border-radius: 5px; cursor: pointer; z-index: 1000;
    }
  </style>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      document.querySelectorAll("img").forEach(img => {
        img.onclick = function() { this.classList.toggle("expanded"); };
      });
      const btn = document.createElement("button");
      btn.innerHTML = "↑ Top"; btn.id = "backToTop";
      document.body.appendChild(btn);
      window.onscroll = function() {
        btn.style.display = (window.scrollY > 100) ? "block" : "none";
      };
      btn.onclick = function() { window.scrollTo({ top: 0, behavior: 'smooth' }); };
    });
  </script>
---

# 1. Introduction
 PyScript introduce a concept of running Python programming language scripts on html webpages in order to facilitate creation of the dynamic webpages (at runtime). This is similar to JavaScript which runs only on client side web browser rather than server side Web Servers (running on server machine). PyScript runs along with JavaScript code on client machine web browser making Python as an alternative option in developing dynamic webpages which may involve user interaction. PHP, Django, Flask frameworks runs on server side (i.e. Web Servers) rather than client side web browser. Python script code can be written directly in .html file or in a separate .py file to be stored on WebServer (remote machine hosting the .html website). .html file, accessed through client machine web browser, when stored on remote Web Server machine is called Online mode where as when rather stored on local machine is known as Offline mode. No working documenation avaialble as how to make PyScript running in Offline mode. This article focus on offlne mode of running PyScript on web browser where Python script files .py and .html files are stored on local client machine.

# 2. Problem
To execute PyScript python code on client web browser (i.e. Chrome) in offline mode where client machine is disconnected from the internet.

# 3. Abbriviation and Naming convention
<div class='indented-section'>
```ascii
 .wasm - web assembly
 .html - hyper text markup language, used as programming language for web browser
 .py - Python programming language. PyScript feed python code to wasm based CPython interpreter.
 .js - javascript
 .css - cascaded style sheet
 <py-script>/<script type="py"> - html tag used by Pyscript to use Pyodide CPython interpreter
 <mpy-script>/<script type="mpy"> - html tag used by Pyscript to use MicroPython CPython interpreter
 web browser - Client side web browser GUI application used to access webpages from remote web server
 web server - Remote machine keeping the web pages which is generally accessed through client side web browsers
 pyscript.js - PyScript javascript file, PyScript and pyscript.js words are used interchangeably in the article
 online mode - .html file and python files stored on web server
 offline mode - .html file and python files stored on local machine where web browser is running
 GUI version (click to enlarge) - Graphics User Interface representing previous text based image
```

**Online Mode:**

```text

                         +----- PyScript/Javascript              +---- Flask, Php,
                        /       runs here                       / Django runs here
                       /                                       /
                       |                                       |
                       v                                       v
                 ---------------+                        --------------+
                /              /|   <<access files      /            / |
               ---------------- |  ---------------->   --------------- |
               | Local client | |    on remote         |             | |
               |Machine Running +    web server >>     |Remote Web   | /
      +------> |Web Browser   | /                      | Server      |/
      |        |              |/                       ---------------
      |        ---------------+                                        
      |            |  |                                                 
      |           ------                                   
      |       _
      -----  { }
              | <<user typing .html webpage of remote URL
             / \  on client machine web browser>>
```
**GUI version (click to enlarge)**

![3.OnlineMode](/static/image/3_onlinemode.png)

<br/>
**Offline Mode:**
```text

                          -------- Local machine running
                         /         Web Server
                        /          (i.e. python3 -m http.server)
                       |
                       |
                 ------|--------+
                /      v       /|   <<access files
               ---------------- |  ----------------+
               | Local client | |    on local      |
               |Machine Running +    machine >>    |
      +------> |Web Browser   | /                  |
      |        |              |/  <----------------+
      |        ---------------+                                        
      |            |  |                                                 
      |           ------                                   
      |       _
      -----  { }
              | <<user typing .html webpage of local URL
             / \  on client machine web browser>>
```
**GUI version (click to enlarge)**

![3.OfflineMode](/static/image/3_offlinemode.png)
</div>

# 4. Scenario
## 4.1 Organization of html file (with or without PyScript)
<div class='indented-section'>
### 4.1.1 Basic .html file structure (with PyScript)
```html
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PyScript Online</title>
    </head>
    <body>
      <h1>Online Console MicroPython and Pandas/Matplotlib with Pyodide</h1>
      <p>Loading Python environment...</p>
      <div id="output_m">Hello from PyScript Micropython</div>
      <div id="output_p">Hello from PyScript Pyodide</div>
    </body>
    </html>
```

### 4.1.2 PyScript enabled html file structure
```html
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PyScript Offline</title>
    <link rel="stylesheet" href="https://pyscript.net/releases/2025.11.2/core.css">
    <script type="module" src="https://pyscript.net/releases/2025.11.2/core.js"></script>
  </head>
  <body>
    <h1>Offline Console MicroPython and Pandas/Matplotlib with Pyodide</h1>
    <p>Loading Python environment...</p>
    <div id="output_m"></div>
    <div id="output_p"></div>
    <script type="mpy">
     from pyscript import document
     document.getElementById('output_m').innerHTML="Hello from PyScript Micropython"
    </script>
    <script type="py">
     from pyscript import document
     document.getElementById('output_m').innerHTML="Hello from PyScript Pyodide"
    </script>
  </body>
  </html>
```
</div>

## 4.2 Online working scenario 
PyScript as a package bundle containing pyscript.js and pyscript.css files available through URL https://pyscript.net . pyscript.js javascript package enables PyScript related tags and tag attributes to be embedded into .html webpages. PyScript package does not provide CPython interpreter on its own. Pyodide and MicroPython packages rather contain CPython interpreter related files. PyScript javascript module parses .html file for PyScript related html tags and tag attributes. PyScript (javascript module) further downloads Pyodide and MicroPython packages when it encounters \<script type="py"\>/\<py-script\> or \<script type="mpy"\>/\<mpy-script\> tags in the html file. Links for Pyodide and MicroPython packages are available through PyScript javascript module file pyscript.js, i.e. https://cdn.jsdeliver.net . CPython interpreter from Pyodide and MicroPython packages are available through Pyodide.asm.wasm and micropython.wasm files respectively, compiled into .wasm (Web Assembly) format understood by the web browser. 

<div class='indented-section'>
```text
                           --------------
                           |   pyscript |
                           |javascript module|
                           -------------------
                                    |
                                    | <<downloads>>
                         ----------------------------
                         |                          |
                         v                          v
                  ------------------          ---------------------
                  |Pyodide package |          |Micropython package|
                  |containing CPython|        |containing CPython|
                  |.wasm compiler|            |.wasm compiler|
                  ----------------            ----------------
```
</div>

In both Online and Offline mode cases, a .html webpage file add URL paths, to PyScript package files pyscript.js pyscript.css, in <head> section of the (.html) file. Python code can be embedded directly under \<py-script\>/\<script type="py"\> tag into the (.html) file. Python code can also be made available through .py file in filesystem on webserver (online) or in filesystem on local machine(offline), where python filename is refrenced in .html file through "src" attribute of \<py-script\>/\<script type="py"\> tag.

<div class='indented-section'>
### 4.2.1 Work Flow
In website hosted on webserver scenario (Online mode), when user types url of a website .html webpage on web browser (running at local client machine), the activities that takes place are as follows

 a\. Client web browser first download the pyscript.js and pyscript.css files as mentioned in <head> section of the .html file.

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PyScript Offline</title>
  <link rel="stylesheet" href="https://pyscript.net/releases/2025.11.2/core.css">
  <script type="module" src="https://pyscript.net/releases/2025.11.2/core.js"></script>
</head>
```

 B\. Pyscript (javascript module) then parses the .html webpage. For tags \<script type="py"\> or \<py-script\> client Web Browser downloads Pyodide CPython interpreter (pyodide.wasm.asm file), Pyodide Javascript file (pyodide.js) which contains the bootstrap code and the JS/WASM interop APIs and a zip (python_stdlib.zip) file of the Python's standard library, to be run by the web browser running at client machine. In case of tag \<script type="mpy"\> or \<mpy-script\> MicroPython CPython compiler and javascript files micropython.wasm and micropython.js are downloaded into the client web browser. These CPython interpreters are typically stored at https://cdn.jsdelivr.net server. Link for the CPython interpreters are embedded in pyscript.js file.

 c\. Finally client Web Browser download/maps Python code file (saved in .py file on web server) and data files (referenced through \<py-script\>/\<script\> html tag), into web browser's internal file system. Python code from these .py files or Python code directly embedded into .html files are then fed to downloaded CPython .wasm interpreter running in client Web Browser. So client Web Browser downloads everyting within it.
    
```text
                                         +--------------------------------+
                        (1)              |User types url address containing|
              +------------------------- |PyScript html page.             |
              |                          |i.e pyscript.com/.../abc.html   |
              |                          |It has link for pyscript.js     |
              |                          |and pyscript.css in head section|
              |                          +--------------------------------+
              |
              |
     -----------------------    (2)            ---------------------
     | client web browser |  ------------->    | fetch pyscript.js,|
     -----------------------                   | pyscript.css      |
         +    +    +                           ---------------------
         |    |    |
         |    |    |      (3)                  ---------------------------------
         |    |    +---------------------->    | fetch pyodide.asm.wasm,       |
         |    |                                |pyodide.js,python_stdlib.zip,  |
         |    |                                |micropython.wasm,micropython.js|
         |    |                                |from link mentioned in pyscript.js|
         |    |                                | i.e https://cdn.jsdelivr.net  |
         |    |                                ---------------------------------
         |    |
         |    |        (4)                     ---------------------------------
         |    +--------------------------->    |map *.py and *.html(/*.php)    |
         |                                     |files from hosting web server  |
         |                                     |on to the client web browser's |
         |                                     |local file system              |
         v (5)                                 ---------------------------------
       ----------------------------->
       ^ Feed python code to        |
       | pyodide or/and             |
       | micropython interpreter    |       
       | pyodide.asm.wasm/          |
       | micropython.wasm           |
       <-----------------------------
```

**GUI version (click to enlarge)**

![4.2.1.WorkFlow](/static/image/4.2.1_pyscriptschematiconline.png)
</div>

## 4.3 Internal filesystem of web browser
When python code is available through .py file, python file on web server machine is mapped to the file system of client side web browser. Same holds true for mapping of data files also. Root directory of the web browser filesystem maps to directory on web server where .html file is stored. So if user is fetching https://minhinc.42web.io/misc/pyscript/index.html then client web browser would map files in https://minhinc.42web.io/misc/pyscript to its root directory '/' of the web browser.

For example \<script\> tag in .html file has main.py, abc.txt and text/abc2.txt files to be mapped into internal filesystem of web browser. These files available at web server https://minhinc.42web.io/misc/pyscript/

\<script type="py" src="main.py" config='{"files":{"abc.txt":"","text/abc2.txt":"./data/abc2.txt"}}'\>

main.py and abc.txt from https://minhinc.42web.io/misc/pyscript/ maps to /main.py and /abc.txt of web browser internal filesystem where as abc2.txt in https://minhinc.42web.io/misc/pyscript/text directory would be mapped to /data/abc2.txt of the web browser internal file system.

<div class='indented-section'>
```text
  +---------------------------+
  | Remote web server         |         
  |                           | Dir containing
  | https://minhinc.42web.io/ | index.html maps
  |  misc/pyscript/index.html | to root            -----------------------
  |                           |  ------            | Local webbrowser    |
  ----------------------------+        \           | internal filesystem |
                                        \          |                     |
                                         ------>   |    /index.html      |
                                                   -----------------------
```
</div>



# 5. Solution
## 5.1 Design
<div class='indented-section'>
### 5.1.1 Offline Mode work flow
In order to work with PyScript in offline mode, PyScript package needs to be downloaded locally on the client machine. Since Python code in .html file (or in .py file referenced through .html file) may use other Python packages, those python packages (in .wasm format) needs to be downloaded also. \<py-script\>/\<script src="py"\> tag or \<mpy-script\>/\<script type="mpy"\> tag in .html file gives hint to PyScript javascript module to use either Pyodide or MicroPython based CPython interpreters respectively. So PyScript, Pyodide, MicroPython packages, .html and .py files from the web server and the dependent Python packages (i.e. PyPI packages in .wasm format) has to be downloaded on machine running local web browser.

```text
   =====  Modified action from Diagram 4.2.1

                                     +--------------------------------+
                    (1)              |User types url address containing|
          +------------------------- |PyScript html page.             |
          |                          |i.e pyscript.com/.../abc.html   |
          |                          |It has link for pyscript.js     |
          |                          |and pyscript.css in head section|
          |                          +--------------------------------+
          |
          |
 -----------------------    (2)            ---------------------
 | client web browser |  ------------->    | fetch pyscript.js,|
 -----------------------                   | pyscript.css      |
     +    +    +                          ---------------------
     |    |    |
     |    |    |      (3)                 ===================================
     |    |    +---------------------->   || fetch pyodide.asm.wasm,       ||
     |    |                               ||pyodide.js,python_stdlib.zip,  ||
     |    |                               ||micropython.wasm,micropython.js||
     |    |                               ||from local machine.            ||
     |    |                               ===================================
     |    |
     |    |        (4)                     ---------------------------------
     |    +--------------------------->    |map *.py and *.html(/*.php)    |
     |                                     |files from hosting web server  |
     |                                     |on to the client web browser's |
     |                                     |local file system              |
     v (5)                                 ---------------------------------
   -------------------------->
   ^ Feed python code to     |
   | pyodide or/and          |
   | micropython interpreter V       
   <--------------------------
```

**GUI version (click to enlarge)**

![5.1.1.OfflineModeWorkFlow](/static/image/5.1.1_pyscriptschematicoffline.png)

### 5.1.2 Other view of looking the workflow for common in offline and online mode.
```text

                  --------------   <<contains>>   ------------------------
                  |User website| <>---------->    | .py file/python code |-----+
                  | .html file | ----             ------------------------     |
                  --------------    |                                          |
                                    | <<calls pyscript                         v
                                    | as javascript module>>            -------------------
                                    v                                   | calls external  |
                             ----------                                 | python packages |
                             |PyScript|                                 -------------------
                       ----- |        | -----                              ^
                       |     ----------     |                             /
                       |                    |<<uses                      /
        <<uses CPython |                    |CPython interpreter        /
    interpreter from>> |                    |from>>                    /<<loads external
                       v                    v                         /packages through
                    ---------         -------------                  / micropip module>>
                    |Pyodide|         |MicroPython|                 /
                    ---------         -------------                /
                       |                                          /
                       |                                         /
                       +-----------------------------------------
```
**GUI version (click to enlarge)**

![5.1.2.GeneralWorkFlow](/static/image/5.1.2_generalworkflow.png)

### 5.1.3 List of packages need to be downloaded locally in Offline mode.
 a\) PyScript </br>
 b\) Pyodide  </br>
 c\) MicroPython </br>
 d\) html, .py file available on user website web server which include (PyScript javascript modules) files. </br>
 e\) Other Python packages (ie. PyPI packages) on which PyScript python code depenedent upon. </br>
     Note: CPython interpreter of pyodide is configured to use micropip package to search and load PYPI packages. Typically pyodide package contains micropip and all PyPI packages compiled in .wasm format (.whl wheel files)

### 5.1.4 Running web server locally
Inorder to run the .html url in offline mode (disconnected from internet i.e. file:///home/pi/index.html), all the files including interpreter and website .py files, needs to be present offline on client local machine. User cannot run these .html website file locally without a local webserver as webbrowser have security restriction (CORS and the same origin policy) that prevent PyScript from loading the necessary Python files in the webbrowser. Python3 provides module "http" which facilitate running a html web server on local machine.Executing "python3 -m http.server" shell command starts the local web server on client machine running the web browser.

### 5.1.5 Accessing index.html file through the web browser
Local url on webbrowser is placed after starting the local web server (i.e. python3 -m http.server). Once .html file is loaded, webbrowser loads pyscript.js javascript module. PyScript javascript module searches for 

 a\) \<py-script\> tag or \<script\> tag with tag attribute "type=py" to load Pyodide CPython interpreter. \<mpy-script\> or \<script\> tag with tag attribute "type=mpy" to load MicroPython interpreter </br>
 b\) Other tag attribute that is of interest is "src" and "config" under either \<script\> or \<py-script\>/\<mpy-script\> tag </br>
  i.e. </br>
  \<script type="py" src="/main.py" config='{"interpreter":"/pyodide/pyodide.mjs","files":{"one.txt":"./one.txt"},"packages":["pandas","matplotlib"]}'\>

 "src" is python file need to be fed to CPython interpreter is main.py under root directory of browser file system. "config" tag attribute is json dict with "interpreter" key points to local interpreter, "files" are data file to be copied to browser filesystem and "packages" list down packages needs to loaded into the interpreter. Python source code can be directly placed in main.py and/or between \<script type="py"\>/\<script type="mpy"\> and \</script\> tags. Note \<py-script\>/\<mpy-script\> is analogous to \<script type="py"\>/\<script type="mpy"\> where later one is preferred.
</div>

## 5.2 Implementation
<div class='indented-section'>
## 5.2.1 Make environment.
Install npm and nodejs packages. Installing nodejs package install both npm and nodejs packages. Create a offline folder and execute following code to download packages and setting up the working local environment.

```bash
  >>pwd
   /home/pi/pyscript
  >>sudo apt-get install nodejs
  >>mkdir offline
  >>cd offline
  >>pwd
   /home/pi/pyscript/offline
```

### 5.2.2 Download PyScript, Pyodide and MicroPython packages
   Execute following steps inorder to download various packages and to setting up the working local environment.

**5.2.2.1** Download PyScript
```bash
   >>npm i @pyscript/core
   >>ln -s ./node_modules/@pyscript/core/dist pyscript
```

**5.2.2.2** Download Pyodide tar.bz2 file pyodide-0.26.2.tar.bz2 from https://github.com/pyodide/pyodide/releases/tag/0.26.2 . Any other version can also be downloaded in this fashion. Note pyodide-0.26.2.tar.bz2 contains many of PyPI packages (compiled in .wasm format >150 MB)
```bash
  >>7z x pyodide-0.26.2.tar.bz2
  >>tar xvf pyodide-0.26.2.tar
  >>rm pyodide-0.2*
  >>pwd
   /home/pi/pyscript/offline
```

**5.2.2.3** Download MicroPython
```bash
  >>npm i @micropython/micropython-webassembly-pyscript
  >>ln -s ./node_modules/@micropython/micropython-webassembly-pyscript micropython
```

**5.2.2.4** Download html .py website files from webserver. index.html and main.py. Copy index.html and main.py into offline (current) folder. Or create new index.html and main.py files as per need.
```bash
  >>ls
   index.html  main.py  micropython  node_modules  pyodide  pyscript
  >>ls -la
    total 64
    drwxr-xr-x  4 pi pi  4096 Feb  6 07:19 .
    drwxr-xr-x 15 pi pi  4096 Feb  6 07:07 ..
    -rw-r--r--  1 pi pi  1964 Feb  6 07:14 index.html
    -rw-r--r--  1 pi pi    98 Feb  6 07:14 main.py
    lrwxrwxrwx  1 pi pi    88 Feb  6 07:13 micropython -> /home/pi/tmp/pyscript/offline/node_modules/@micropython/micropython-webassembly-pyscript
    drwxr-xr-x 22 pi pi  4096 Dec 19 07:39 node_modules
    drwxr-xr-x  3 pi pi 36864 Jul 26  2024 pyodide
    lrwxrwxrwx  1 pi pi    62 Feb  6 07:13 pyscript -> /home/pi/tmp/pyscript/offline/node_modules/@pyscript/core/dist
  >>ls pyscript
     codemirror-BYspKCDy.js                  py-BZSSqcx3.js
     codemirror-BYspKCDy.js.map              py-BZSSqcx3.js.map
     codemirror_commands-BLDaEdQ6.js         py-editor-DZ0Dxzzk.js
     codemirror_commands-BLDaEdQ6.js.map     py-editor-DZ0Dxzzk.js.map
     ...
  >>ls pyodide
     aiohttp-3.9.5-cp312-cp312-pyodide_2024_0_wasm32.whl
     aiohttp-3.9.5-cp312-cp312-pyodide_2024_0_wasm32.whl.metadata
     aiohttp-tests.tar
     aiosignal-1.3.1-py3-none-any.whl
     aiosignal-1.3.1-py3-none-any.whl.metadata
     altair-5.3.0-py3-none-any.whl
     altair-5.3.0-py3-none-any.whl.metadata
     annotated_types-0.6.0-py3-none-any.whl
     annotated_types-0.6.0-py3-none-any.whl.metadata
     annotated-types-tests.tar
     asciitree-0.3.3-py3-none-any.whl
     asciitree-0.3.3-py3-none-any.whl.metadata
     astropy-6.0.1-cp312-cp312-pyodide_2024_0_wasm32.whl
     astropy-6.0.1-cp312-cp312-pyodide_2024_0_wasm32.whl.metadata
     astropy_iers_data-0.2024.4.22.0.29.50-py3-none-any.whl
     astropy_iers_data-0.2024.4.22.0.29.50-py3-none-any.whl.metadata
     astropy_iers_data-tests.tar
     ...
  >>ls micropython
     micropython.mjs  micropython.wasm  package.json  README.md
  #Empty index.html and main.py has been taken that has to be edited.
  >>cat index.html
  >>cat main.py
  >>pwd
   /home/pi/pyscript/offline
```
</div>

# 6. Available solution
PyScript documentation provides steps for running pyscript rich html files offline. https://docs.pyscript.net/2025.11.2/ .Though this may not work on many platforms as it is.

# 7. Experimental result
```bash
  >>pwd
   /home/pi/pyscirpt/offline
```

## 7.1 Starting local web server
  In all examples pyscript.js pyscript.css files will be taken from local directory. Local web server has to be run through command
```bash
  >>python3 -m http.server &
   Serving HTTP on 0.0.0.0 port 8000 (http://0.0.0.0:8000/) ...
```
 
## 7.2 Execution of test scenario 
Following test scenario would be tried

<div class='indented-section'>
### 7.2.1 MicroPython CPython interpreter
```bash
  >> cat index.html
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PyScript Offline</title>
      <script type="module" src="/pyscript/core.js"></script>
      <link rel="stylesheet" href="/pyscript/core.css">
    </head>
    <body>
    <h1>Offline MicroPython</h1>
        <p>Loading Python environment...</p>
        <div id="output_m"></div>
    
      <script type="mpy" config='{"interpreter":"/micropython/micropython.mjs"}'>
        from pyscript import document
        document.getElementById('output_m').innerHTML="Hello from PyScript Micropython"
      </script>
    </body>
    </html>
```


   Bring up web browser, preferred Chromium-browser, and Typing http://0.0.0.0:8000/ or http://0.0.0.0:8000/index.html in the URL field.</br>
   Following output is seen on terminal (running web server i.e. python3 -m http.server)
```bash
     127.0.0.1 - - [06/Feb/2026 08:10:57] "GET / HTTP/1.1" 200 -
     127.0.0.1 - - [06/Feb/2026 08:10:59] "GET /pyscript/core.js HTTP/1.1" 200 -
     127.0.0.1 - - [06/Feb/2026 08:10:59] "GET /pyscript/core.css HTTP/1.1" 200 -
     127.0.0.1 - - [06/Feb/2026 08:10:59] "GET /pyscript/core-PTfg6inS.js HTTP/1.1" 200 -
     127.0.0.1 - - [06/Feb/2026 08:10:59] "GET / HTTP/1.1" 200 -
     127.0.0.1 - - [06/Feb/2026 08:11:00] "GET /pyscript/core.js HTTP/1.1" 200 -
     127.0.0.1 - - [06/Feb/2026 08:11:00] "GET /pyscript/deprecations-manager-DIDxhyRq.js HTTP/1.1" 200 -
     127.0.0.1 - - [06/Feb/2026 08:11:00] "GET /pyscript/core.css HTTP/1.1" 200 -
     127.0.0.1 - - [06/Feb/2026 08:11:00] "GET /pyscript/error-uzvvriog.js HTTP/1.1" 200 -
     127.0.0.1 - - [06/Feb/2026 08:11:00] "GET /pyscript/py-editor-DZ0Dxzzk.js HTTP/1.1" 200 -
     127.0.0.1 - - [06/Feb/2026 08:11:00] "GET /pyscript/donkey-CLhmQOjG.js HTTP/1.1" 200 -
     127.0.0.1 - - [06/Feb/2026 08:11:00] "GET /pyscript/py-game-bqieV522.js HTTP/1.1" 200 -
     127.0.0.1 - - [06/Feb/2026 08:11:00] "GET /pyscript/core-PTfg6inS.js HTTP/1.1" 200 -
     127.0.0.1 - - [06/Feb/2026 08:11:00] "GET /pyscript/deprecations-manager-DIDxhyRq.js HTTP/1.1" 200 -
     127.0.0.1 - - [06/Feb/2026 08:11:00] "GET /pyscript/donkey-CLhmQOjG.js HTTP/1.1" 200 -
     127.0.0.1 - - [06/Feb/2026 08:11:00] "GET /pyscript/error-uzvvriog.js HTTP/1.1" 200 -
     127.0.0.1 - - [06/Feb/2026 08:11:00] "GET /pyscript/py-editor-DZ0Dxzzk.js HTTP/1.1" 200 -
     127.0.0.1 - - [06/Feb/2026 08:11:00] "GET /pyscript/py-game-bqieV522.js HTTP/1.1" 200 -
     127.0.0.1 - - [06/Feb/2026 08:11:00] "GET /pyscript/py-terminal-DYY4WN57.js HTTP/1.1" 200 -
     127.0.0.1 - - [06/Feb/2026 08:11:00] code 404, message File not found
     127.0.0.1 - - [06/Feb/2026 08:11:00] "GET /favicon.ico HTTP/1.1" 404 -
     127.0.0.1 - - [06/Feb/2026 08:11:01] "GET /micropython/micropython.mjs HTTP/1.1" 200 -
     127.0.0.1 - - [06/Feb/2026 08:11:01] "GET /micropython/micropython.wasm HTTP/1.1" 200 -
```
  
**Screenshot of the webbrowser, click to enlarge** (Taken on Raspberry Pi Zero 2W)

![7.2.1.MicroPython](/static/image/7.2.1_micropython.png)
  
  Note: Rest of the example only \<body\> section of index.html file would be shown. For completeness user has to take fixed \<head\> part from test scenario a)\. That is


```html
  <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PyScript Offline</title>
   <script type="module" src="/pyscript/core.js"></script>
   <link rel="stylesheet" href="/pyscript/core.css">
  </head>
```

### 7.2.2 MicroPython CPython interpreter through main.py
```bash
  >> cat main.py
   from pyscript import document
   document.getElementById('output_m').innerHTML="Hello from PyScript Micropython"
   
  >> cat index.html 
   <!DOCTYPE html>
   <html lang="en">
   <head>
     ...
   </head>
   <body>
    <h1>Offline MicroPython(main.py)</h1>
    <p>Loading Python environment...</p>
    <div id="output_m"></div>
    <script type="mpy" src="/main.py" config='{"interpreter":"/micropython/micropython.mjs"}'></script>
   </body>
   </html>
```

**Screenshot of the webbrowser, click to enlarge** (Taken on Raspberry Pi Zero 2W)

![7.2.2.MicroPython](/static/image/7.2.2_micropython.png)


### 7.2.3 MicroPython CPython interpreter through config={"files":{"/main.py":""}, and inline python code between \<script\> and \</script\> tags.
```bash
  >> cat index.html 
   <!DOCTYPE html>
   <html lang="en">
   <head>
     ...
   </head>
   <body>
   <h1>Offline MicroPython(files main.py)</h1>
    <p>Loading Python environment...</p>
    <div id="output_m"></div>
    <script type="mpy" config='{"files":{"/main.py":""},"interpreter":"/micropython/micropython.mjs"}'>
     from main import main
     main("hello pyscript from micropython")
    </script>
   </body>
   </html>

  >> cat main.py 
   from pyscript import document
   def main(msg_):
    document.getElementById('output_m').innerHTML=msg_
```

**Screenshot of the webbrowser, click to enlarge** (Taken on Raspberry Pi Zero 2W)

**GUI Version**

![7.2.3.MicroPython](/static/image/7.2.3_micropython.png)

  
### 7.2.4 MicroPython CPython interpreter through config={"files":{"main.py":"./main.py","main2.py":"./main2.py"}, and inline python code between \<script\> and \</script\> tags.
```bash 
  >> cat index.html
    <!DOCTYPE html>
    <html lang="en">
    <head>
     ....
    </head>
    <body>
    <h1>Offline MicroPython(files main.py main2.py)</h1>
        <p>Loading Python environment...</p>
        <div id="output_m"></div>
        <div id="plot-area"></div>
        <div id="dataframe-output"></div>
    
    <script type="mpy" config='{"interpreter":"/micropython/micropython.mjs","files":{"main2.py":"./main2.py","main.py":"./main.py"}}'>
     from main import main
     main("Hello From PyScript MicroPython")
    </script>
    </head>
    </html>
  >> cat main.py
    from main2 import document
    def main(msg_):
     document.getElementById('output_m').innerHTML=msg_
  >> cat main2.py
    from pyscript import document
```

**Screenshot of the webbrowser, click to enlarge** (Taken on Raspberry Pi Zero 2W)

![7.2.4.MicroPython](/static/image/7.2.4_micropython.png)

### 7.2.5 Pyodide CPython interpreter with pandas and matplot lib as packages. Python code embedded in \<script type="py"\> and \</script\> tag. "config" `<script>` tag attribute is modified to add "packages" key value pair.
```bash
  >> cat index.html 
    <!DOCTYPE html>
    <html lang="en">
    <head>
      ...
    </head>
    <body>
    <h1>Offline Console MicroPython and Pandas/Matplotlib with Pyodide</h1>
    <p>Loading Python environment...</p>
    <div id="output_m"></div>
    <div id="plot-area"></div>
    <div id="dataframe-output"></div>
   
    <script type="mpy" config='{"interpreter":"/micropython/micropython.mjs","files":{"main2.py":"./main2.py","main.py":"./main.py"}}'>
     from main import main
     main("Hello From PyScript MicroPython")
    </script>
   
    <script type="py" config='{"interpreter":"/pyodide/pyodide.mjs","packages":["pandas","matplotlib"]}'>
     import pandas as pd
     import matplotlib.pyplot as plt
     import io
     from pyscript import document, display
  
     # 1. Create a simple Pandas DataFrame
     data = {'City': ['Tokyo', 'Delhi', 'Shanghai', 'Sao Paulo'],
             'Population_Millions': [37.3, 32.0, 28.5, 22.4]}
     df = pd.DataFrame(data)
  
     # Display the DataFrame in the 'dataframe-output' div
     display(df, target="dataframe-output")
  
     # 2. Generate a Matplotlib plot
     fig, ax = plt.subplots(figsize=(8, 4))
     df.plot(kind='bar', x='City', y='Population_Millions', ax=ax, legend=False)
     ax.set_title("Population of Major Cities (Millions)")
     ax.set_xlabel("City")
     ax.set_ylabel("Population (Millions)")
  
     # Display the plot in the 'plot-area' div
     # PyScript handles rendering the Matplotlib figure into the target HTML element
     display(fig, target="plot-area")
    </script>
   </body>
   </html>
  >> cat main.py
    from main2 import document
    def main(msg_):
     document.getElementById('output_m').innerHTML=msg_
  >> cat main2.py
    from pyscript import document
```

**Screenshot of the webbrowser, click to enlarge** (Taken on Raspberry Pi Zero 2W)

![7.2.5.PiodideOffline](/static/image/7.2.5_pyodideoffline.png)

</div>

# 8. How it works?
## 8.1 Online mode view
First we will see if last use case in "Experimental Result, 7.2.5" also works in online webserver mode. Following files index.html, main.py and main2.py has been placed on webserver, i.e https://minhinc.42web.io/misc/pyscript

```bash
  >>cat index.html
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PyScript Online</title>
      <link rel="stylesheet" href="https://pyscript.net/releases/2025.11.2/core.css">
      <script type="module" src="https://pyscript.net/releases/2025.11.2/core.js"></script>
    </head>
    <body>
     <h1>Online Console MicroPython and Pandas/Matplotlib with Pyodide</h1>
     <p>Loading Python environment...</p>
     <div id="output_m"></div>
     <div id="plot-area"></div>
     <div id="dataframe-output"></div>
    
     <script type="mpy" config='{"files":{"main2.py":"./main2.py","main.py":"./main.py"}}'>
      from main import main
      main("Hello From PyScript MicroPYThon")
     </script>

     <script type="py" config='{"packages":["pandas","matplotlib"]}'>
      import pandas as pd
      import matplotlib.pyplot as plt
      import io
      from pyscript import document, display
    
      # 1. Create a simple Pandas DataFrame
      data = {'City': ['Tokyo', 'Delhi', 'Shanghai', 'Sao Paulo'],
              'Population_Millions': [37.3, 32.0, 28.5, 22.4]}
      df = pd.DataFrame(data)
    
      # Display the DataFrame in the 'dataframe-output' div
      display(df, target="dataframe-output")
    
      # 2. Generate a Matplotlib plot
      fig, ax = plt.subplots(figsize=(8, 4))
      df.plot(kind='bar', x='City', y='Population_Millions', ax=ax, legend=False)
      ax.set_title("Population of Major Cities (Millions)")
      ax.set_xlabel("City")
      ax.set_ylabel("Population (Millions)")
    
      # Display the plot in the 'plot-area' div
      # PyScript handles rendering the Matplotlib figure into the target HTML element
      display(fig, target="plot-area")
     </script>
    </body>
    </html>
  >> cat main.py
    from main2 import document
    def main(msg_):
     document.getElementById('output_m').innerHTML=msg_
  >> cat main2.py
    from pyscript import document
```

**Screenshot of the webbrowser, click to enlarge** (Taken on Raspberry Pi Zero 2W)

![8.1.PyodideOnline](/static/image/8.1_pyodideonline.png)

## 8.2 Difference in index.html (named as index.html_online) files on remote webserver and index.html (index.html_offline) file on local machine is as follows.
```bash
  >>diff index.html_online index.html_offline
6,8c6,8
<   <title>PyScript Online</title>
<   <link rel="stylesheet" href="https://pyscript.net/releases/2025.11.2/core.css">
<   <script type="module" src="https://pyscript.net/releases/2025.11.2/core.js"></script>
---
>   <title>PyScript Offline</title>
>   <script type="module" src="/pyscript/core.js"></script>
>   <link rel="stylesheet" href="/pyscript/core.css">
11c11
< <h1>Online Console MicroPython and Pandas/Matplotlib with Pyodide</h1>
---
> <h1>Offline Console MicroPython and Pandas/Matplotlib with Pyodide</h1>
17c17
<   <script type="mpy" config='{"files":{"main2.py":"./main2.py","main.py":"./main.py"}}'>
---
>   <script type="mpy" config='{"interpreter":"/micropython/micropython.mjs","files":{"main2.py":"./main2.py","main.py":"./main.py"}}'>
22c22
<   <script type="py" config='{"packages":["pandas","matplotlib"]}'>
---
>   <script type="py" config='{"interpreter":"/pyodide/pyodide.mjs","packages":["pandas","matplotlib"]}'>
```

## 8.3 Overriding Pyodide and MicroPython interpreter path
 Once user types URL of .html page kept on web server, pyscript.js javascript file which is mentioned in <head>/</head> section comes into effect. \<py-script\>/\<script type="py"\> html tag gives hints to PyScript inorder to download Pyodide CPython and use it for python code embedded under the html tag. Similar behaviour is seen with \<mpy-script\>/\<script type="mpy"\> html tag when PyScript downloads and use MicroPython interpreter. Download URL path for CPython interpreters for Pyodide and Micropython is mentioned in pyscript.js javascript file.

 URL path in pyscript.js for Pyodide and MicroPython packages can be overridden by introducing config-\>interpreter tag attribute in \<py-script\>/\<mpy-script\> or \<script\> html tag.

i.e.  
 \<script type="py" config='{"interpreter":"/pyodide/pyodide.mjs"}'\></br>
 \<script type="mpy" config='{"interpreter":"/micropython/micropython.mjs"}'\>

<div class='indented-section'>

### 8.3.1 Online mode operation
```text
    
                +----- User types URL of
              .
            .
          .
          v
     --------------------
     |*.html kept on    |---------+
     |website webbrowser|         |
     --------------------         |
                              |<<links to pyscript.js/css
                              | files at https://pyscript.net in <head> section of .html file>>
                              |
                              v
                      -----------------
    ----------------->| pyscript.js   | <<parses <script type="py/mpy">
    |                 ----------------- or <py-script>/<mpy-script> tags>>
    |                        |
    |                        | <<Downloads Pyodide MicroPython CPython interpreter>>
    |                        | <<Paths for CPython interpreter embedded in pyscript.js
    |                        | i.e.
    |                        |   micropython -> cdn.jsdelivr.net/npm/@micropython/micropython-webassembly-pyscript@${e}/micropython.mjs
    |                        |   pyodide -> cdn.jsdelivr.net/pyodide/v${e}/full/pyodide.mjs >>
    |                        |
    |                        |
    |                        | <<pass python code under tag
    |                        |  <script type="py/mpy">/<py-script>/<mpy-script>
    |                        |  or in main.py file defined as src="/main.py" attribute of
    |                        |  <script>/<py-script> tag to pyodide/micropython
    |                        |  CPython interpreter>>
    |                        |
    |  +---------------------+-----------------+
    |  |                                       | 
    |  |                                       |
    |  v                                       v
    | -------------------          -----------------
    | |   MicroPython   |          |    Pyodide    |
    | |  CPython interpreter|   ---| CPython interpreter |
    | ----------------------+   |  ----------------------+
    |           |               |    ^           |
    |           |<<returns>>    |    |           | <<calls micropip package to locate and load
    |           |               |    |           | packages listed in config attribute of <script type="py"> >>
    |           |    <<returns>>|    |           | i.e. <script type="py" config='{"packages":["pandas","matplotlib"]}'>
    +-----------+---------------+    |           |
                                 +---+           |
                                 |               v
                                 |  ---------------
                                 |  |  micropip   |
                                 |  ---------------
                                 |         |
                                 |         |<<returns to pyodide>>
                                 +----------
```
**Screenshot of the webbrowser, click to enlarge** (Taken on Raspberry Pi Zero 2W)

![8.3.1.OnlineOperation](/static/image/8.3.1_onlineoperation.png)

### 8.3.2 Offline mode operation
```text
    ===== double vertical line used for modification from diagram in section 8.3.1
    
                +----- User types URL of
              .
            .
          .
          v
     --------------------
     |*.html kept on    |---------+
     |website webbrowser|         |
     --------------------         |
                              |<<links to pyscript.js/css
                              | files at https://pyscript.net in <head> section of .html file>>
                              |
                              v
                      -----------------
    ----------------->| pyscript.js   | <<parses <script type="py/mpy">
    |                 ----------------- or <py-script>/<mpy-script> tags>>
    |                       || 
    |                       || If something like this found in .html file
    |                       || <script type="py" config='{"interpreter":"/pyodide/pyodide.mjs"}'>
    |                       ||        or
    |                       || <script type="mpy" config='{"interpreter":"/micropython/micropython.mjs"}'>
    |                       || <<Downloads Pyodide MicroPython CPython interpreter from local machine>>
    |                       ||
    |                        | <<pass python code under tag
    |                        |  <script type="py/mpy">/<py-script>/<mpy-script>
    |                        |  or in main.py file defined as src="/main.py" attribute of
    |                        |  <script>/<py-script> tag to pyodide/micropython
    |                        |  CPython interpreter>>
    |                        |
    |  +---------------------+-----------------+
    |  |                                       | 
    |  |                                       |
    |  v                                       v
    | -------------------          -----------------
    | |   MicroPython   |          |    Pyodide    |
    | |  CPython interpreter|   ---| CPython interpreter |
    | ----------------------+   |  ----------------------+
    |           |               |    ^           |
    |           |<<returns>>    |    |           | <<calls micropip package to locate and load
    |           |               |    |           | packages listed in config attribute of <script type="py"> >>
    |           |    <<returns>>|    |           | i.e. <script type="py" config='{"packages":["pandas","matplotlib"]}'>
    +-----------+---------------+    |           |
                                 +---+           |
                                 |               v
                                 |  ---------------
                                 |  |  micropip   |
                                 |  ---------------
                                 |         |
                                 |         |<<returns to pyodide>>
                                 +----------
```
**Screenshot of the webbrowser, click to enlarge** (Taken on Raspberry Pi Zero 2W)

![8.3.2.OfflineOperation](/static/image/8.3.2_offlineoperation.png)
</div>

# 9. Further to it
 PyScript javascript module parses the .html file for the \<script type="py"\>/\<py-script\> or \<script type="mpy"\>/\<mpy-script\> tags. Once these tags are encountered it downloads Pyodide and MicroPython packages from URL mentioned in pyscript.js file, ie. cdn.jsdelivr.net/pyodide/v${e}/full/pyodide.mjs for Pyodide and cdn.jsdelivr.net/npm/@micropython/micropython-webassembly-pyscript@${e}/micropython.mjs for MicroPython. Once we provide config='{"interpreter":"/pyodide/pyodide.mjs"}' or config='{"interpreter":"/micropython/micropython.mjs"}' as tag attribute to \<script\> tag in .html file, PyScript is guided to look for Pyodide and MicroPython packages on local machine rather than looking at URL mentioned in pyscript.js.
We are free the modify pyscript.js to alter the location of pyodide and micropython packages and try again. In this case \<script\> tag would not contain config->interpreter tag. So following modification would happen in pyscript.js

 cdn.jsdelivr.net/pyodide/v${e}/full/pyodide.mjs would changed to http://0.0.0.0:8000/pyodide/pyodide.mjs </br>
 cdn.jsdelivr.net/npm/@micropython/micropython-webassembly-pyscript@${e}/micropython.mjs  would change to http://0.0.0.0:8000/micropython/micropython.mjs </br>

```text
            +----- User types URL of
          .
        .
      .
      v
 --------------------
 |*.html kept on    |---------+
 |website webbrowser|         |
 --------------------         |
                              |<<links to pyscript.js/css
                              | files at https://pyscript.net in <head> section of .html file>>
                              |
                              v
                      -----------------
    ----------------->| pyscript.js   | <<parses <script type="py/mpy">
    |                 ----------------- or <py-script>/<mpy-script> tags>>
    |                        |
    |                        | <<Downloads Pyodide MicroPython CPython interpreter>>
    |                        | <<Paths for CPython interpreter embedded in pyscript.js
    |                        | i.e.
    |                        |   micropython -> http://0.0.0.0:8000/micropython/micropython.mjs
    |                        |   pyodide -> http://0.0.0.0:8000/pyodide/pyodide.mjs>>
    |                        |
    |                        |
    |                        | <<pass python code under tag
    |                        |  <script type="py/mpy">/<py-script>/<mpy-script>
    |                        |  or in main.py file defined as src="/main.py" attribute of
    |                        |  <script>/<py-script> tag to pyodide/micropython
    |                        |  CPython interpreter>>
    |                        |
    |  +---------------------+-----------------+
    |  |                                       | 
    |  |                                       |
    |  v                                       v
    | -------------------          -----------------
    | |   MicroPython   |          |    Pyodide    |
    | |  CPython interpreter|   ---| CPython interpreter |
    | ----------------------+   |  ----------------------+
    |           |               |    ^           |
    |           |<<returns>>    |    |           | <<calls micropip package to locate and load
    |           |               |    |           | packages listed in config attribute of <script type="py"> >>
    |           |    <<returns>>|    |           | i.e. <script type="py" config='{"packages":["pandas","matplotlib"]}'>
    +-----------+---------------+    |           |
                                 +---+           |
                                 |               v
                                 |  ---------------
                                 |  |  micropip   |
                                 |  ---------------
                                 |         |
                                 |         |<<returns to pyodide>>
                                 +----------
```
**Screenshot of the webbrowser, click to enlarge** (Taken on Raspberry Pi Zero 2W)

![9.Modifypyscript.js](/static/image/9_modifypyscript.js.png)

# 10. Other examples
## 10.1 Bar Chart
```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PyScript Offline</title>
  <script type="module" src="/pyscript/core.js"></script>
  <link rel="stylesheet" href="/pyscript/core.css">
</head>
<body>
  <h1>Offline Console MicroPython and BarChart/Matplotlib with Pyodide</h1>
  <p>Loading Python environment...</p>
  <div id="plot-area"></div>

  <script type="py" config='{"interpreter":"/pyodide/pyodide.mjs","packages":["matplotlib"]}'>
   import matplotlib.pyplot as plt
   from pyscript import display

   categories = ['Python', 'JS', 'C++', 'Rust']
   values = [85, 70, 45, 60]
   
   fig, ax = plt.subplots()
   bars = ax.bar(categories, values, color=['#3776ab', '#f7df1e', '#004482', '#dea584'])
   
   ax.set_ylabel('Popularity Score')
   ax.set_title('Language Interest Overview')
   
   # Optional: Adding value labels on top of bars
   ax.bar_label(bars, padding=3)
   display(fig, target="plot-area")
  </script>
</body>
</html>
```

**Screenshot of the webbrowser, click to enlarge** (Taken on Raspberry Pi Zero 2W)

![10.1.BarChart](/static/image/10.1_barchart.png)

## 10.2 Maths Chart
```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PyScript Offline</title>
  <script type="module" src="/pyscript/core.js"></script>
  <link rel="stylesheet" href="/pyscript/core.css">
</head>
<body>
  <h1>Offline Console MicroPython and Maths/Matplotlib with Pyodide</h1>
  <p>Loading Python environment...</p>
  <div id="plot-area"></div>

  <script type="py" config='{"interpreter":"/pyodide/pyodide.mjs","packages":["numpy","matplotlib"]}'>
   import numpy as np
   import matplotlib.pyplot as plt
   from pyscript import display

   # Data generation
   x = np.linspace(0, 10, 100)
   y = np.sin(x)
   fig, ax = plt.subplots()
   ax.plot(x, y, color='royalblue', linewidth=2)
   ax.set_title("Sine Wave Evolution")
   ax.grid(True, linestyle='--', alpha=0.6)
   display(fig, target="plot-area")
  </script>
</body>
</html>
```

**Screenshot of the webbrowser, click to enlarge** (Taken on Raspberry Pi Zero 2W)

![10.2.MathsChart](/static/image/10.2_mathschart.png)

## 10.3 Scatter Plotting
```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PyScript Offline</title>
  <script type="module" src="/pyscript/core.js"></script>
  <link rel="stylesheet" href="/pyscript/core.css">
</head>
<body>
  <h1>Offline Console MicroPython and ScatterPlotting/Matplotlib with Pyodide</h1>
  <p>Loading Python environment...</p>
  <div id="plot-area"></div>

  <script type="py" config='{"interpreter":"/pyodide/pyodide.mjs","packages":["numpy","matplotlib"]}'>
   import numpy as np
   import matplotlib.pyplot as plt
   from pyscript import display

   # Random distribution
   n = 50
   x = np.random.rand(n)
   y = np.random.rand(n)
   colors = np.random.rand(n)
   area = (30 * np.random.rand(n))**2  # Varying sizes
   
   fig, ax = plt.subplots()
   scatter = ax.scatter(x, y, s=area, c=colors, alpha=0.5, cmap='viridis')
   
   ax.set_title("Random Distribution Map")
   fig.colorbar(scatter) # Adds the legend scale

   display(fig, target="plot-area")
  </script>
</body>
</html>
```

**Screenshot of the webbrowser, click to enlarge** (Taken on Raspberry Pi Zero 2W)

![10.3.ScatterPlotting](/static/image/10.3_scatterplot.png)


# 11. Testing platform
 Following operating systems has been tested upon

## 11.1 Raspibian buster image on Raspberry Pi Zero 2W
  All tests has been done on Raspberry Pi Zero 2W with 512 MB of ram. GPU split is maintained at 16 MB.
  \<img\>

## 11.2 Ubuntu
  Test has been conducted on Ubuntu version <> on Intel processor machine with 4GB of ram.

## 11.3 Android Mobile phone with 4 GB ram
   Redmi Note 7 Pro with 4 GB of ram have been used for the test setup.

# 12. Summary
 This article provides a realistic way to actually develop and test PyScript code on local machine (Offline mode), disconnected from the internet. Primarily two different ways has been discussed, one to modify the .html file for tag attribute config='{"interpreter":"/pyodide/pyodide.mjs"}' in \<script\> tag and other is modifying pyscript.js file to repoint pyodide and micropython package URL to local machine running web server. Online and Offline mode both testing has been done on Raspberry Pi Zero 2W and Ubuntu. Online mode testing has been done on Android Mobile phone also.
