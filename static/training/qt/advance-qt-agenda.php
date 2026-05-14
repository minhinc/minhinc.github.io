<? $level='.';foreach(split("\/",split("public_html\/?",ereg_replace("\/*$","",getcwd()))[1]) as $item){ if(!empty($item)){ $level=$level."/.."; }};require_once($level.'/php/Utilm.php');$util=new Utilc; ?>
<div class="pg" style="margin-top:40px;height:1375px">
 <pre class=title>Qt/Qml Essentials Training</pre>
 <pre class=subtitle>5-day session</pre>
 <pre class=company></pre>
 <div style="height:164px;">
  <div class="headerleft"> <pre>Overview</pre></div>
  <div class="headerright"> <pre>Understanding fundamental and advance topics in Qt Programming
Understanding signals and slots concept
Understanding Widget
Understanding QPainter and 2D painting
Understanding QML/QtQuick</pre></div>
 </div>
 <div style="height:98px;">
  <div class="headerleft"> <pre>Duration</pre></div>
  <div class="headerright"> <pre>Five days - 40 hours (8hours a day)
50% of lecture, 50% of practical labs</pre></div>
 </div>
 <div style="height:76px;">
  <div class="headerleft"> <pre>Trainer</pre></div>
  <div class="headerright"> <pre><a href="https://www.linkedin.com/in/pravinkumarsinha">http://www.linkedin.com/in/pravinkumarsinha</a></pre></div>
 </div>
 <hr>
 <div style="height:98px;">
  <div class="headerleft"> <pre>Audience</pre></div>
  <div class="headerright"> <pre>Professional embedded Software developers
Professional GUI developers</pre></div>
 </div>
 <div style="height:274px;">
  <div class="headerleft"> <pre>Prerequisite</pre></div>
  <div class="headerright"> <pre><b>Knowledge of C++ programming</b>
Qt uses Template level advance C++ as language. Prior knowledge to C++
is required.
Advance Cpp training agenda is available at
<a href=http://www.minhinc.com/training/advance-cpp-agenda.pdf>http://www.minhinc.com/training/advance-cpp-agenda.pdf</a>

<b>Knowledge of GUI and other concepts</b>
Qt is used for GUI development and many other technologies including Networks,
operating systems, Database, scripting. Basic knowledge of these domains are
required as per the Qt is developed for the particular domain.</pre></div>
 </div>
 <hr>
 <div style="height:76px;">
  <div class="headerleft"> <pre>Setup</pre></div>
  <div class="headerright"> <pre>Ubuntu 16/17.* LTS with Qt 5.10/5.11</pre></div>
 </div>
<pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p1</pre>
</div>

<div class="pg" style="margin-top:20px;height:1395px">
 <div class="header2" style="margin-top:0px;">
  <pre class="header" style="line-height:40px">Lecture</pre>
  <pre class="content" style="height:113px">Lecture session will be course content presentation through the trainer.
Any source code example related to the topic will be demonstrated, it would
include executing the binaries.
Complete lecture material can be downloaded from
<a href="http://www.minhinc.com/training/advance-qt-slides.pdf">http://www.minhinc.com/training/advance-qt-slides.pdf</a></pre>
 </div>
 <div class="header2" style="margin-top:125px;">
  <pre class="header" style="line-height:40px">Labs</pre>
  <pre class="content" style="height:69px">Labs session would be completely hands on session where each example (with
example data and execution instruction) would be provided to the students. Students
can verify their results with the results provided in the material.</pre>
 </div>
 <div class="dayheader" style="margin-top:584.0px;height:50px"><pre>Day 1 Morning</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:260px">
  <a name="main1" href="#chap1"><pre class="dayheader" style="line-height:40px">  Lecture - Introduction</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap1_0"><pre>GUI Programming Fundamentals
 - Window registration and creation
 - Message loop.
 - Event callback handler</pre></a></li>
   <li><a href="#chap1_1"><pre>Qt Overview and Status
 - Qt history and its presence
 - Licensing (GPL, LGP, Commercial)</pre></a></li>
   <li><a href="#chap1_2"><pre>Meta Object and Qobject</pre></a></li>
   <li><a href="#chap1_3"><pre>MOC compiler and MOC file generation</pre></a></li>
   <li><a href="#chap1_4"><pre>Hello World using Qt creator</pre></a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:150px">
  <a name="main2" href="#chap2"><pre class="dayheader" style="line-height:40px">  Lecture - Qt Core</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chap2_0"><pre>String Handling</pre></a></li>
   <li><a href="#chap2_1"><pre>Container Classes</pre></a></li>
   <li><a href="#chap2_2"><pre>Advanced Container Classes</pre></a></li>
   <li><a href="#chap2_3"><pre>File I/O</pre></a></li>
   <li><a href="#chap2_4"><pre>Memory mapped files</pre></a></li>

  </ul>
 </div>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p2</pre>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <div class=dayheaderleft style="margin-top:0px;height:348px">
  <a name="main3" href="#chap3"><pre class="dayheader" style="line-height:40px">  Lecture - Memory Management</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap3_0"><pre>Qt Object Model</pre></a></li>
   <li><a href="#chap3_1"><pre>Object Life cycle
 - Stack allocation
 - Heap allocation
 - QPointer
 - QScopePointer
 - QWeakPointer</pre></a></li>
   <li><a href="#chap3_2"><pre>Qt class relationships
 - Association
 - Containment(Aggregation and Composition)
 - Parent/Child relationships
 - Inheritance
 - Polymorphism</pre></a></li>
   <li><a href="#chap3_3"><pre>Garbage Collection</pre></a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:0px;height:436px">
  <a name="main4" href="#chap4"><pre class="dayheader" style="line-height:40px">  Lecture - Event Management</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chap4_0"><pre>Event flow and Handling
 - Event handling through callback and</pre></a></li>
   <li><a href="#chap4_1"><pre>Polymorphism
 - Event handling through message map</pre></a></li>
   <li><a href="#chap4_2"><pre>Synthetic and hardware events
 - Custom events
 - Sending and receiving custom events
 - Posting events</pre></a></li>
   <li><a href="#chap4_3"><pre>Event loops
 - QCoreApplication
 - QEventDispatcher
 - exec()</pre></a></li>
   <li><a href="#chap4_4"><pre>Event filters
 - Registering event filter
 - Installing event filter</pre></a></li>
   <li><a href="#chap4_5"><pre>Timer events</pre></a></li>
   <li><a href="#chap4_6"><pre>Signal & Slots communication & delivery</pre></a></li>
   <li><a href="#chap4_7"><pre>Data passing and Signal mapper</pre></a></li>

  </ul>
 </div>
 <div class="dayheader" style="margin-top:425.6666666666667px;height:50px"><pre>Day 1 Afternoon</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:238px">
  <a name="mainL" href="#chapL"><pre class="dayheader" style="line-height:40px">     Lab</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chapL_0"><pre>Qt Creator,Qt Designer,Qt Debugging</pre></a></li>
   <li><a href="#chapL_1"><pre>qmake</pre></a></li>
   <li><a href="#chapL_2"><pre>Writing Hello World using Qt Creator</pre></a></li>
   <li><a href="#chapL_3"><pre>QString, QList</pre></a></li>
   <li><a href="#chapL_4"><pre>QFile, QTextStream and QDataStream</pre></a></li>
   <li><a href="#chapL_5"><pre>QPointer, QScopePointer and QSharedPointer</pre></a></li>
   <li><a href="#chapL_6"><pre>Custom event</pre></a></li>
   <li><a href="#chapL_7"><pre>Event filtering</pre></a></li>
   <li><a href="#chapL_8"><pre>Signal & Slot, Signal Mapper</pre></a></li>

  </ul>
 </div>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p3</pre>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <div class="dayheader" style="margin-top:0px;height:50px"><pre>Day 2 Morning</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:304px">
  <a name="main5" href="#chap5"><pre class="dayheader" style="line-height:40px">  Lecture - Widgets</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap5_0"><pre>Introduction to Widgets</pre></a></li>
   <li><a href="#chap5_1"><pre>Writing custom Widgets</pre></a></li>
   <li><a href="#chap5_2"><pre>QPainter and capabilites</pre></a></li>
   <li><a href="#chap5_3"><pre>Drawing curves</pre></a></li>
   <li><a href="#chap5_4"><pre>Drawing Pixmap</pre></a></li>
   <li><a href="#chap5_5"><pre>Drawing Fonts</pre></a></li>
   <li><a href="#chap5_6"><pre>Event Processing and Paint Engine</pre></a></li>
   <li><a href="#chap5_7"><pre>MainWindow Widget</pre></a></li>
   <li><a href="#chap5_8"><pre>Dialog Widget</pre></a></li>
   <li><a href="#chap5_9"><pre>Tabify dock widget</pre></a></li>
   <li><a href="#chap5_10"><pre>Drag and Drop</pre></a></li>
   <li><a href="#chap5_11"><pre>Applying Qt style sheet on Widget</pre></a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:260px">
  <a name="main6" href="#chap6"><pre class="dayheader" style="line-height:40px">  Lecture - QPainter and Image management</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chap6_0"><pre>QPainter and capabilites</pre></a></li>
   <li><a href="#chap6_1"><pre>Using Qpainter with OpenGL functions</pre></a></li>
   <li><a href="#chap6_2"><pre>Image handling Qt</pre></a></li>
   <li><a href="#chap6_3"><pre>Classes for Image Handling (Qimage,</pre></a></li>
   <li><a href="#chap6_4"><pre>Qpixmap, QbitMap etc)</pre></a></li>
   <li><a href="#chap6_5"><pre>I/O with Image Files</pre></a></li>
   <li><a href="#chap6_6"><pre>Pixel Handling</pre></a></li>
   <li><a href="#chap6_7"><pre>Image Transformation</pre></a></li>
   <li><a href="#chap6_8"><pre>OpenGL 3D painting</pre></a></li>
   <li><a href="#chap6_9"><pre>Qpainter, Coordinate transformation</pre></a></li>

  </ul>
 </div>
 <div class=dayheaderleft style="margin-top:80px;height:194px">
  <a name="main7" href="#chap7"><pre class="dayheader" style="line-height:40px">  Lecture - Layout Management</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap7_0"><pre>Layout concepts</pre></a></li>
   <li><a href="#chap7_1"><pre>Laying Rows & Columns</pre></a></li>
   <li><a href="#chap7_2"><pre>Vertical and Horizontal Layout</pre></a></li>
   <li><a href="#chap7_3"><pre>Grid Layout</pre></a></li>
   <li><a href="#chap7_4"><pre>Form Layout</pre></a></li>
   <li><a href="#chap7_5"><pre>Stacked Layout</pre></a></li>
   <li><a href="#chap7_6"><pre>Anchor Layout</pre></a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:80px;height:260px">
  <a name="main8" href="#chap8"><pre class="dayheader" style="line-height:40px">  Lecture - Model View Controller(MVC)</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chap8_0"><pre>Qt model view architecture
 - QTableWidget and QTableView
 - QAbstractItemModel and</pre></a></li>
   <li><a href="#chap8_1"><pre>QAbstractItemView</pre></a></li>
   <li><a href="#chap8_2"><pre>Predefined Models</pre></a></li>
   <li><a href="#chap8_3"><pre>Predefined Views</pre></a></li>
   <li><a href="#chap8_4"><pre>Proxy Models</pre></a></li>
   <li><a href="#chap8_5"><pre>Selection</pre></a></li>
   <li><a href="#chap8_6"><pre>Implementing custom model</pre></a></li>
   <li><a href="#chap8_7"><pre>Implementing custom delegates</pre></a></li>

  </ul>
 </div>
 <div class="dayheader" style="margin-top:261.0px;height:50px"><pre>Day 2 Afternoon</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:260px">
  <a name="mainL" href="#chapL"><pre class="dayheader" style="line-height:40px">     Lab</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chapL_0"><pre>QMainWindow QMenu, QMenuBar, QToolBar,
QStatusBar</pre></a></li>
   <li><a href="#chapL_1"><pre>Parent and Child Window</pre></a></li>
   <li><a href="#chapL_2"><pre>QPainter</pre></a></li>
   <li><a href="#chapL_3"><pre>Transformation Matrix</pre></a></li>
   <li><a href="#chapL_4"><pre>Box Layout</pre></a></li>
   <li><a href="#chapL_5"><pre>Grid Layout</pre></a></li>
   <li><a href="#chapL_6"><pre>Stack Layout</pre></a></li>
   <li><a href="#chapL_7"><pre>Custom Model</pre></a></li>
   <li><a href="#chapL_8"><pre>Custom Delegate</pre></a></li>

  </ul>
 </div>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p4</pre>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <div class="dayheader" style="margin-top:0px;height:50px"><pre>Day 3 Morning</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:150px">
  <a name="main9" href="#chap9"><pre class="dayheader" style="line-height:40px">  Lecture - Plugin Architecture</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap9_0"><pre>Plugin concepts</pre></a></li>
   <li><a href="#chap9_1"><pre>Extending Qt with existing plugins</pre></a></li>
   <li><a href="#chap9_2"><pre>Creating plugin from scratch</pre></a></li>
   <li><a href="#chap9_3"><pre>Plugin Macros</pre></a></li>
   <li><a href="#chap9_4"><pre>Making application plugin-aware</pre></a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:172px">
  <a name="main10" href="#chap10"><pre class="dayheader" style="line-height:40px">  Lecture - Graphics View</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chap10_0"><pre>Graphics Views concept
 - Graphics scene
 - Graphics View
 - Graphics Items</pre></a></li>
   <li><a href="#chap10_1"><pre>Opengl scene project model/view architecture</pre></a></li>
   <li><a href="#chap10_2"><pre>Image based rendering with graphics views</pre></a></li>

  </ul>
 </div>
 <div class=dayheaderleft style="margin-top:80px;height:150px">
  <a name="main11" href="#chap11"><pre class="dayheader" style="line-height:40px">  Lecture - XML and JSON Parsing</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap11_0"><pre>Basic XML APIs, QXmlStreamReader,
  QXmlStreamWriter</pre></a></li>
   <li><a href="#chap11_1"><pre>XML Patterns : XPath, XQuery,
  QtXmlPatterns and XML Schema</pre></a></li>
   <li><a href="#chap11_2"><pre>JSON</pre></a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:80px;height:172px">
  <a name="main12" href="#chap12"><pre class="dayheader" style="line-height:40px">  Lecture - Inter process Communication(IPC)</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chap12_0"><pre>Running processes
 - Parent/Child relationships
 - Message passing
 - popen</pre></a></li>
   <li><a href="#chap12_1"><pre>Shared Memory with Qt</pre></a></li>
   <li><a href="#chap12_2"><pre>QtDBus - Qt Bindings to D-Bus(Linux only)</pre></a></li>

  </ul>
 </div>
 <div class="dayheader" style="margin-top:381.6666666666667px;height:50px"><pre>Day 3 Afternoon</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:216px">
  <a name="mainL" href="#chapL"><pre class="dayheader" style="line-height:40px">     Lab</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chapL_0"><pre>Extending existing plugin
Writing Plugin from scratch</pre></a></li>
   <li><a href="#chapL_1"><pre>Add custom item</pre></a></li>
   <li><a href="#chapL_2"><pre>Implement drag & drop on the item</pre></a></li>
   <li><a href="#chapL_3"><pre>Implement writing and reading
 through xml file</pre></a></li>
   <li><a href="#chapL_4"><pre>Create and read data from subprocess</pre></a></li>
   <li><a href="#chapL_5"><pre>Use QSharedMemory to make singleton process</pre></a></li>

  </ul>
 </div>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p5</pre>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <div class="dayheader" style="margin-top:0px;height:50px"><pre>Day 4 Morning</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:326px">
  <a name="main13" href="#chap13"><pre class="dayheader" style="line-height:40px">  Lecture - Multithreading</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap13_0"><pre>Mutlithreading primitives</pre></a></li>
   <li><a href="#chap13_1"><pre>Creating thread</pre></a></li>
   <li><a href="#chap13_2"><pre>Synchronizing threads
 - QMutex
 - QWaitCondition
 - QSemaphore
 - QReadWriteLock
 - Producer/Consumer scenario</pre></a></li>
   <li><a href="#chap13_3"><pre>Thread Local storage</pre></a></li>
   <li><a href="#chap13_4"><pre>Communication with main thread</pre></a></li>
   <li><a href="#chap13_5"><pre>Qt classes ownership in threads</pre></a></li>
   <li><a href="#chap13_6"><pre>Thread event loop</pre></a></li>
   <li><a href="#chap13_7"><pre>Qt concurrent</pre></a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:128px">
  <a name="main14" href="#chap14"><pre class="dayheader" style="line-height:40px">  Lecture - Web Kit</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chap14_0"><pre>Qt Web-Kit Architecture</pre></a></li>
   <li><a href="#chap14_1"><pre>Views, Frame and Page</pre></a></li>
   <li><a href="#chap14_2"><pre>Qt graphics view framework in web-kit</pre></a></li>
   <li><a href="#chap14_3"><pre>Qml webkit objects</pre></a></li>

  </ul>
 </div>
 <div class=dayheaderleft style="margin-top:80px;height:128px">
  <a name="main15" href="#chap15"><pre class="dayheader" style="line-height:40px">  Lecture - Databases</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap15_0"><pre>Connecting to DB</pre></a></li>
   <li><a href="#chap15_1"><pre>Query, Viewing</pre></a></li>
   <li><a href="#chap15_2"><pre>Editing records</pre></a></li>
   <li><a href="#chap15_3"><pre>Tabular Data Presentation</pre></a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:80px;height:128px">
  <a name="main16" href="#chap16"><pre class="dayheader" style="line-height:40px">  Lecture - Internationalization & Localization(I18N L10N)</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chap16_0"><pre>I18N and L10N</pre></a></li>
   <li><a href="#chap16_1"><pre>Multi language Support</pre></a></li>
   <li><a href="#chap16_2"><pre>Translation aware Applications</pre></a></li>
   <li><a href="#chap16_3"><pre>Dynamic Language Switching</pre></a></li>

  </ul>
 </div>
 <div class="dayheader" style="margin-top:371.0px;height:50px"><pre>Day 4 Afternoon</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:172px">
  <a name="main17" href="#chap17"><pre class="dayheader" style="line-height:40px">  Lecture - Networking</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap17_0"><pre>Socket programming
 - TCP/UDP sockets
 - SSL sockets</pre></a></li>
   <li><a href="#chap17_1"><pre>http ftp protocol</pre></a></li>
   <li><a href="#chap17_2"><pre>QNetworkAccessManager, QNetworkReply, 
QNetworkRequest</pre></a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:260px">
  <a name="mainL" href="#chapL"><pre class="dayheader" style="line-height:40px">     Lab</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chapL_0"><pre>Producer/Consumer with QWaitCondition,
QSemaphore, QMutex</pre></a></li>
   <li><a href="#chapL_1"><pre>Passing object ownership among threads</pre></a></li>
   <li><a href="#chapL_2"><pre>Execute javascript through QWebView</pre></a></li>
   <li><a href="#chapL_3"><pre>Create mysql database to add row</pre></a></li>
   <li><a href="#chapL_4"><pre>Use languate tool to create
locale</pre></a></li>
   <li><a href="#chapL_5"><pre>Use I18N api to read user input
locale language</pre></a></li>
   <li><a href="#chapL_6"><pre>Write ftp client using QNetworkAccessManager</pre></a></li>

  </ul>
 </div>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p6</pre>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <div class="dayheader" style="margin-top:0px;height:50px"><pre>Day 5 Morning</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:458px">
  <a name="main21" href="#chap21"><pre class="dayheader" style="line-height:40px">  Lecture - Qml/QtQuick Basics</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap21_0"><pre>Introduction QtQuick and QML</pre></a></li>
   <li><a href="#chap21_1"><pre>Qml Architecture</pre></a></li>
   <li><a href="#chap21_2"><pre>Qt Properties</pre></a></li>
   <li><a href="#chap21_3"><pre>Building Blocks of QML</pre></a></li>
   <li><a href="#chap21_4"><pre>Composing UIs</pre></a></li>
   <li><a href="#chap21_5"><pre>User Input</pre></a></li>
   <li><a href="#chap21_6"><pre>Structures
 - Components
 - Modules</pre></a></li>
   <li><a href="#chap21_7"><pre>Modules
 - Importing javascript code in QML</pre></a></li>
   <li><a href="#chap21_8"><pre>Dynamic creation of items</pre></a></li>
   <li><a href="#chap21_9"><pre>C++ Integration
 - Using custom type plugins
 - Building an applcation as a Library</pre></a></li>
   <li><a href="#chap21_10"><pre>Qt Quick Control</pre></a></li>
   <li><a href="#chap21_11"><pre>Presenting Data
 - Data Models
 - Using Views, Using Delegates</pre></a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:106px">
  <a name="main18" href="#chap18"><pre class="dayheader" style="line-height:40px">  Lecture - Drag & Drop</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chap18_0"><pre>Enabling Drag and Drop</pre></a></li>
   <li><a href="#chap18_1"><pre>Supporting Custom Drag Types</pre></a></li>
   <li><a href="#chap18_2"><pre>Clipboard Handling</pre></a></li>

  </ul>
 </div>
 <div class=dayheaderleft style="margin-top:80px;height:194px">
  <a name="main19" href="#chap19"><pre class="dayheader" style="line-height:40px">  Lecture - Deployment and Testing</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap19_0"><pre>Deployment</pre></a></li>
   <li><a href="#chap19_1"><pre>Development Tools of Linux</pre></a></li>
   <li><a href="#chap19_2"><pre>QMake</pre></a></li>
   <li><a href="#chap19_3"><pre>Qt Debugging Aids</pre></a></li>
   <li><a href="#chap19_4"><pre>QTestLib</pre></a></li>
   <li><a href="#chap19_5"><pre>QTestLib (QML)</pre></a></li>
   <li><a href="#chap19_6"><pre>Testing with squish</pre></a></li>

  </ul>
 </div>
 <div class="dayheader" style="margin-top:195.0px;height:50px"><pre>Day 5 Afternoon</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:238px">
  <a name="main20" href="#chap20"><pre class="dayheader" style="line-height:40px">  Lecture - Embedded setup(Embedded Linux)</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap20_0"><pre> Preparing cross compilation envrironment</pre></a></li>
   <li><a href="#chap20_1"><pre> Building Qt source code inorder to have libs
in cross compliation envrionment</pre></a></li>
   <li><a href="#chap20_2"><pre> Building Qt application based on newly built
 Qt libraries</pre></a></li>
   <li><a href="#chap20_3"><pre> Font handling</pre></a></li>
   <li><a href="#chap20_4"><pre> Wayland, QtComposite integration</pre></a></li>
   <li><a href="#chap20_5"><pre> Setting up IDE for cross compilation</pre></a></li>
   <li><a href="#chap20_6"><pre> Testing the application on hardware</pre></a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:216px">
  <a name="mainL" href="#chapL"><pre class="dayheader" style="line-height:40px">     Lab</pre></a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chapL_0"><pre>Write a QML document</pre></a></li>
   <li><a href="#chapL_1"><pre>Import javascript code in QML</pre></a></li>
   <li><a href="#chapL_2"><pre>Define componet dynamically</pre></a></li>
   <li><a href="#chapL_3"><pre>Implement Ecllipse as Qml class type
 - do same and export in a Library</pre></a></li>
   <li><a href="#chapL_4"><pre>Implement List data model view through delegate</pre></a></li>
   <li><a href="#chapL_5"><pre>Implement drag and drop between 
QListWidgets</pre></a></li>

  </ul>
 </div>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p7</pre>
</div>

<div class="pg" style="margin-top:20px;height:1395px">
 <pre class="slidetitle" style="margin-top:30%">Qt Essentials</pre>
 <pre class="slidesubtitle">Qt Essenstials- Training Course</pre>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p8</pre>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <pre class="slidedisclaimer" style="margin-top:30%">DISCLAIMER

This document is edited on Cent OS 5 using Open Office 3.1.1 Draw Package.

CentOS is freely download from centos.org/download
Open Office 3.1.1 can be obtained through yum or through openoffice.org

Text of this document is written in Bembo Std Otf(13 pt) font.

Code parts are written in Consolas (10 pts) font.

This training material is provided through <a style="font-family:mytwcenmt,Tw Cen MT;font-size:14pt;color:#004000;font-weight:bold" href="http://www.minhinc.com">Minh, Inc.</a>, B'lore, India
Pdf version of this document is available at <a href="http://www.minhinc.com/training/advance-qt-slides.pdf">http://www.minhinc.com/training/advance-qt-slides.pdf</a>
For suggestion(s) or complaint(s) write to us at <a href="mailto:training@minhinc.com">training@minhinc.com</a>

Document modified on 07/2018

Document contains 73 pages.</pre>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p9</pre>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap1">&nbsp;<div class="slideheader" style="height:228px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  1. Introduction</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap1_0">GUI Programming Fundamentals<br> - Window registration and creation<br> - Message loop<br> - Event callback handler</a></li>   <li class="sml"><pre>Qt Overview and Status
 - Qt history and its presence
 - Licensing (GPL, LGP, Commercial)
</pre></li>   <li class="sml"><pre>Meta Object and QObject
</pre></li>   <li class="sml"><pre>MOC compiler and MOC file generation
</pre></li>   <li class="sml"><pre>Hello World using Qt creator
</pre></li>   <li class="sml"><pre>QMake</pre></li>
  </ul>
 </div></a>
<pre class="slideabstract">
<b>Abstract</b>:It describes X11 gui fundamentals, as how a basic window is created in
client server model of X11. This section also describes the flow of hardware event
generation to event dispatching to app event queue. It mentions role of X11 server and
Window manager entities on Server side. On client side how a event callback function
is registered (against a window) with the X11 server and Window manager then how
events generated on window are routed to registered callback function of application.
Events are further processed through event loop processing manner quite different from
sequential processing of non gui application. This section also lists the various Qt
classes against each section in GUI programming.
</pre><pre class="slidecontent">

<b>Window registration and creation.</b>
<img class="img" src="http://www.minhinc.com/image/qt-slide-winregcreation.gif" />

<pre class="code">Display *dis;
int screen;
Window win;
GC gc;
void init_x() {
/* get the colors black and white (see section for details) */
 unsigned long black,white;
/* use the information from the environment variable DISPLAY to create the X
connection:*/
 dis=XOpenDisplay((char *)0);
 screen=DefaultScreen(dis);
 black=BlackPixel(dis,screen),/* get color black */
 white=WhitePixel(dis, screen);  /* get color white */
/* once the display is initialized, create the window. This window will be have be 200
pixels across and 300 down. It will have the foreground white and background black */
 win=XCreateSimpleWindow(dis,DefaultRootWindow(dis),0,0,200, 300, 5, white, black);
/* here is where some properties of the window can be set. The third and fourth items
indicate the name which appears at the top of the window and the name of the minimized
window respectively. */
 XSetStandardProperties(dis,win,"My Window","HI!",None,NULL,0,NULL);
/* this routine determines which types of input are allowed in the input.  see the
appropriate section for details... */
 XSelectInput(dis, win, ExposureMask|ButtonPressMask|KeyPressMask);
/* create the Graphics Context */
 gc=XCreateGC(dis, win, 0,0);        
/* here is another routine to set the foreground and background colors _currently_ in
use in the window. */
 XSetBackground(dis,gc,white);
 XSetForeground(dis,gc,black);
/* clear the window and bring it on top of the other windows */
 XClearWindow(dis, win);
 XMapRaised(dis, win);
}
void close_x() {
/* it is good programming practice to return system resources to the system... */
 XFreeGC(dis, gc);
 XDestroyWindow(dis,win);
 XCloseDisplay(dis);
 exit(1);
}
</pre>
<b>Event Callback</b>
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main1" class="pn">p10</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<img class="img" src="http://www.minhinc.com/image/qt-slide-x11eventflow.png" />

<b>Message Loop</b>
<img class="img" src="http://www.minhinc.com/image/qt-slide-messageloop.png" />

- Message loop
  1. setting up the input masks
  2. creating an instance of the XEvent
  3. checking for events
  4. handling events. 

<pre class="code">XEvent event;/* the XEvent declaration !!! */
KeySym key;/* a dealie-bob to handle KeyPress Events */
char text[255];/* a char buffer for KeyPress Events */
/* look for events forever... */
while(1) {
 /* get the next event and stuff it into our event variable.  Note:  only events we
set the mask for are detected! */
 XNextEvent(dis, &amp;event);
 if (event.type==Expose &amp;&amp; event.xexpose.count==0) {
 /* the window was exposed redraw it! */
  redraw();
 }
 if (event.type==KeyPress &amp;&amp; XLookupString(&amp;event.xkey,text,255,&amp;key,0)==1) {
 /* use the XLookupString routine to convert the invent KeyPress data into regular
text.  Weird but necessary...  */
  if (text[0]=='q') {
   close_x();
  }
  printf("You pressed the %c key!",text[0]);
 }
 if (event.type==ButtonPress) {
  /* tell where the mouse Button was Pressed */
  printf("You pressed a button at (%i,%i)", event.xbutton.x,event.xbutton.y);
 }
}
</pre>
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main1" class="pn">p11</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
- Event callback handler.
 i- Registering window callback function with the Window Manager.
   Qt Class - QWidget
 ii- Initializing Thread Event loop.
   Qt class - QCoreApplication
 iii- Creating window.
   Qt class - QWidget
 iv-  Generate the event, Hardware event, synthetic events
   Qt class - QEvent
 v- Handling events specific to the window in event callback funciton.
   Qt class - QWidget

<img class="img" src="http://www.minhinc.com/image/qt-slide-x11architecture.png" />
<img class="img" src="http://www.minhinc.com/image/qt-slide-eventcallback.png" />

<pre class="code">QObject  - Event mechanism, signal-slot, timer, Thread

  / \
   -
   |
QCoreApplication - Event loop for console Qt application
                   Network event, Timer event, Non GUI etc.
                   exec() - starts queue
                   quit() - ends queue, returns
  / \
   -
   |
QGuiApplication - Event loop, communicates with Window Manager
                                          Provides session
  / \
   -
   |
QApplication - Event loop for GUI events
</pre>
Single Instance of Q[Core|Gui]Application
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main1" class="pn">p12</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">

</pre> &nbsp;<div class="slideheader" style="height:217px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  1. Introduction</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>GUI Programming Fundamentals
 - Window registration and creation
 - Message loop
 - Event callback handler
</pre></li>   <li class="big"><a name="chap1_1">Qt Overview and Status<br> - Qt history and its presence<br> - Licensing (GPL, LGP, Commercial)</a></li>   <li class="sml"><pre>Meta Object and QObject
</pre></li>   <li class="sml"><pre>MOC compiler and MOC file generation
</pre></li>   <li class="sml"><pre>Hello World using Qt creator
</pre></li>   <li class="sml"><pre>QMake</pre></li>
  </ul>
 </div>
<pre class="slideabstract">
<b>Abstract</b>:This section lists various licensing policies supported by Qt. GPL is
completely free where as LGPL is less free to Commeriacial which is completely
charged.
</pre><pre class="slidecontent">

Meet Qt
Qt Development Frameworks founded in 1994
Trolltech acquired by Nokia in 2008
Digia tool control of Qt in 2012
Qt Company formed in 2013
80 employees worldwide
Trusted by over 6,500 companies worldwide
8 companies out of 10 top companies uses Qt
Qt: a coss-platform application and UI framework
For desktop, mobile and embedded development
Used by more than 350,000 commercial and open source developers
Backed by Qt consulting, support and training

<img class="img" src="http://www.minhinc.com/image/qt-slide-meetqt.png" />

<pre class="code">                  Licensing Options
License     Cost     Runtime Support  Prop.Apps. Changes
Commercial  Charged  Yes     Included Yes        Closed
LGPL        Free     No      Add-On   Yes        Contribute
GPL         Free     No      Add-On   No         Contribute
</pre>
* Cost: License fee charged (Charged | Free)
* Runtime: Charge for Runtimes (Yes | No)
* Support: (Included | Add-On)
* Prop.Apps: Can create proprietary applications
* Yes: In accordance with the license terms
* No: Source code must be made available
* Changes: Must provide source code changes to Qt
* Closed - No source code must be disclosed
* Contribute: Source code must be provided

<b>GPL</b>
a) You must cause the modified files to carry prominent notices stating that you
changed the files and the date of any change.
b) You must cause any work that you distribute or publish, that in whole or in part
contains or is derived from the Program or any part thereof, to be licensed as a whole
at no charge to all third parties under the terms of this License.
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main1" class="pn">p13</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
c) If the modified program normally reads commands interactively when run, you must
cause it, when started running for such interactive use in the most ordinary way, to
print or display an announcement including an appropriate copyright notice and a
notice that there is no warranty (or else, saying that you provide a warranty) and
that users may redistribute the program under these conditions, and telling the user
how to view a copy of this License. (Exception: if the Program itself is interactive
but does not normally print such an announcement, your work based on the Program is
not required to print an announcement.)

<b>LGPL</b>
a)If a program uses LGPL libraries then source code is not required to be given to
user when used commercially.
b)If LGPL library is integrated (statically) or program is derived from then LGPL or
LGPL library is modified then user source code must be provided when requested through
the end user.

<b>Qt Modules</b>
<a href="http://www.minhinc.com/image/qt-slide-module2.png"><img class="img" src="http://www.minhinc.com/image/qt-slide-module2_s.png" /></a>

</pre> &nbsp;<div class="slideheader" style="height:206px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  1. Introduction</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>GUI Programming Fundamentals
 - Window registration and creation
 - Message loop
 - Event callback handler
</pre></li>   <li class="sml"><pre>Qt Overview and Status
 - Qt history and its presence
 - Licensing (GPL, LGP, Commercial)
</pre></li>   <li class="big"><a name="chap1_2">Meta Object and QObject<br></a></li>   <li class="big"><a name="chap1_2">MOC compiler and MOC file generation</a></li>   <li class="sml"><pre>Hello World using Qt creator
</pre></li>   <li class="sml"><pre>QMake</pre></li>
  </ul>
 </div>
<pre class="slideabstract">
<b>Abstract</b>: Qt has meta object system which creates extra information for the classes
dervied from QObject and has Q_OBJECT MACRO in class private area. Extra information
is stored in spearate moc_&lt;classname&gt; file  which extends Q_OBJECT class to have meta
information in it.
</pre><pre class="slidecontent">

* QObject is the heart of Qt's object model
* It is base class of all qt classes
* Based on parent-child relationship
* Adds features to C++, like ...
  - Signals and slots
  - Properties
  - Event handling
  - Memory Management
  - ...
* Some features are standard C++
* Some use Qt's meta-object system
* QObject has no visual representation

</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main1" class="pn">p14</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<img class="img" src="http://www.minhinc.com/image/qt-slide-qobjecttree.png" />

Qt's meta-object system provides the signals and slots mechanism for inter-object
communication, run-time type information, and the dynamic property system.
The meta-object system is based on three things:
 1. The QObject class
 2. The Q_OBJECT macro inside the private section of the class
 3. The Meta-Object Compiler (moc) extends class with meta object information

Extra information pushed by moc compiler are
 * QObject::metaObject()
 * QMetaObject::className()
 * QObject::inherits()
 * QObject::tr() and QObject::trUtf8() translate strings for internationalization.
 * QObject::setProperty() and QObject::property() dynamically set and get properties
by name.
 * QMetaObject::newInstance() constructs a new instance of the class.

<b>MOC compiler</b>
C++ code in Qt contains few QT specific tags and these tags are first parsed through
MOC (Meta object compiler) generating final C++ code for g++ compiler.
<pre class="code">struct myobject:QObject{
private:
Q_OBJECT  // for moc compiler, required for signal/slot support
public slots:        // moc term
void myslot();
signals:            // moc term
void mysignal();
};
</pre>
Sending signal
<pre class="code">emit mysignal(); // emit is moc keyword
</pre>
moc creates meta-object information
<pre class="code">moc -o moc_myclass.cpp myclass.h
c++ -c myclass.cpp; c++ -c moc_myclass.cpp
c++ -o myapp moc_myclass.o myclass.o
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main1" class="pn">p15</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:195px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  1. Introduction</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>GUI Programming Fundamentals
 - Window registration and creation
 - Message loop
 - Event callback handler
</pre></li>   <li class="sml"><pre>Qt Overview and Status
 - Qt history and its presence
 - Licensing (GPL, LGP, Commercial)
</pre></li>   <li class="sml"><pre>Meta Object and QObject
</pre></li>   <li class="sml"><pre>MOC compiler and MOC file generation
</pre></li>   <li class="big"><a name="chap1_3">Hello World using Qt creator</a></li>   <li class="sml"><pre>QMake</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

<b>Creator</b>
<a href="http://www.minhinc.com/image/qt-slide-creator.png"><img class="img" src="http://www.minhinc.com/image/qt-slide-creator_s.png" /></a>

<b>Debugger</b>
<a href="http://www.minhinc.com/image/qt-slide-debugger.png"><img class="img" src="http://www.minhinc.com/image/qt-slide-debugger_s.png" /></a>

<pre class="code">&lt;&lt;main.cpp&gt;&gt;
#include &lt;QApplication&gt;
#include &lt;QPushButton&gt;
int main(int argc, char *argv[]){
QApplication app(argc,argv);
QPushButton *button=new QPushButton("Hello World");
button-&gt;show();
return app.exec();
}
</pre>
</pre> &nbsp;<div class="slideheader" style="height:195px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  1. Introduction</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>GUI Programming Fundamentals
 - Window registration and creation
 - Message loop
 - Event callback handler
</pre></li>   <li class="sml"><pre>Qt Overview and Status
 - Qt history and its presence
 - Licensing (GPL, LGP, Commercial)
</pre></li>   <li class="sml"><pre>Meta Object and QObject
</pre></li>   <li class="sml"><pre>MOC compiler and MOC file generation
</pre></li>   <li class="sml"><pre>Hello World using Qt creator
</pre></li>   <li class="big"><a name="chap1_4">QMake</a></li>
  </ul>
 </div>
<pre class="slideabstract">
<b>Abstract</b>: qmake application keeps information about all qt library and other
dependent library an application would need. qmake typically reads .pro file in the
current directry and generate Makefile.
</pre><pre class="slidecontent">

Qt Build system has project file. Project file contains all build related information.
qmake is an application which converts project file to unix Makefile. 
Supports MOC, UI and QRC file.
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main1" class="pn">p16</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
qmake typically contains various keyword (in capital alphabets) which is required to
get assigned for a particular result
QT - Qt modules/libraries required
CONFIG - config parameters i.e console for console output
win32 for win32 specific settings
SOURCES, HEADERS for source and header files
RESOURCES for qrc file
LIBS for linking to external library specially non Qt

To create a project file
$qmake -project QT+=core widgets // to create .pro file
$qmake // creates Makefile

To build
$make

<pre class="code">&lt;&lt;helloworld.pro&gt;&gt;
QT += core widgets
TARGET = helloworld
TEMPLATE = app
SOURCES + = main.cpp
HEADERS +=
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main1" class="pn">p17</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap2">&nbsp;<div class="slideheader" style="height:135px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  2. Qt Core</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap2_0">String Handling</a></li>   <li class="sml"><pre>Container Classes
</pre></li>   <li class="sml"><pre>Advanced Container Classes
</pre></li>   <li class="sml"><pre>File I/O
</pre></li>   <li class="sml"><pre>Memory Mapped Files</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

- String handling classes:
 * Unicode-aware string and character classes.
 * Regular expression engine for pattern matching.

- Strings can be created in a number of ways:
 * From a number using a static function:
   QString n = QString::number(1234);
 * From a char pointer using the static functions:
   QString text = QString::fromLatin1("Hello Qt");
   QString text = QString::fromUtf8(inputText);
   QString text = QString::fromLocal8Bit(cmdLineInput);

- Other properties
 * simplified() // removes duplicate whitespace
 * left(), mid(), right() // part of a string
 * leftJustified(), rightJustified() // padded version
   QString s = "apple";
   QString t = s.leftJustified(8, '.'); // t == "apple..."

- Data can be extracted from strings.
   * Numbers:
   int value = QString::toInt();
   float value = QString::toFloat();
   * Strings:
   QString text = ...;
   QByteArray bytes = text.toLatin1();
   QByteArray bytes = text.toUtf8();
   QByteArray bytes = text.toLocal8Bit();

- Obtaining raw character data from a QByteArray:
  char *str = bytes.data();
  const char *str = bytes.constData();

</pre> &nbsp;<div class="slideheader" style="height:135px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  2. Qt Core</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>String Handling
</pre></li>   <li class="big"><a name="chap2_1">Container Classes</a></li>   <li class="sml"><pre>Advanced Container Classes
</pre></li>   <li class="sml"><pre>File I/O
</pre></li>   <li class="sml"><pre>Memory Mapped Files</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Item Container Classes
  -Template-based classes can be used to store items of a specified type. i.e. for
resizable array of QStrings, it is QVector&lt;QString&gt;.

General purpose template-based container classes
  - Sequential containers
  - Associative containers

<b>Sequential container</b>
QList&lt;QString&gt; Sequence Container. QList is implemented using an array ensuring that
index-based access is very fast.
QLinkedList&lt;T&gt; Unlike QList it uses iterator rather then index to access items.
Inserting items in middle is easier.
QVector&lt;T&gt; Last in, first out (LIFO).
Qstack&lt;T&gt; Adaptar class and subclass of QVector. push(), pop() and top().
QQueue&lt;T&gt; Adapter class and subclass of QList. First in First out. enqueue(),
dequeue() and head().

<b>Associative containers</b>
QMap&lt;Key, T&gt; maps keys of type Key to values of type T. Stores data in key order.
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main2" class="pn">p18</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
QMultiMap&lt;Key, T&gt; QMap where key can be associated with multiple maps.
QHash&lt;Key, T&gt; Similar to QMap but stores its data in a arbitrary order. Significantly
faster lookup.
QMultiHash&lt;Key, T&gt; Subclass of QHash provides interface for multi-valued hashes.

Qt's Item Containers compared to STL
 - Lighter, safer, and easier to use than STL containers
 - If you prefer STL, feel free to continue using it.
 - Methods exist that convert between Qt and STL e.g. you need to pass std::list to a
Qt method

<b>Sequential Container...</b>
QList
<pre class="code">QList&lt;QString&gt; list;
list &lt;&lt; "one" &lt;&lt; "two" &lt;&lt; "three";
QString item1 = list[1]; // "two"
for(int i=0; i&lt;list.count(); i++) {
const QString &amp;item2 = list.at(i);
}
int index = list.indexOf("two"); // returns 1
</pre>
<b>Associative Container...</b>
QMap
<pre class="code">QMap&lt;QString, int&gt; map;
map["Norway"] = 5; map["Italy"] = 48;
int value = map["France"]; // inserts key if not exists
if(map.contains("Norway")) {
int value2 = map.value("Norway"); // recommended lookup
}
</pre>
- Constraints
 - Values types in containers must be assignable types. Constructor,  Copy constructor
and assignment operator must defined. Missing this compiler any way generates
synthesised in order to have shallow copy.
 - In QMap&lt;Key, T&gt;, Key must support operator&lt;.
 - All value type must also supoort operator&lt;&lt; and operator&gt;&gt; inroder to be read or
written using QDataStream.

<pre class="code">class Movie{
public:
Movie(){}
Movie(const Movie&amp; other);
operaotr=(const Movie&amp; other);
private:
int id;
QString title;
QDate releaseDate;
};
QDataStream &amp;operator&lt;&lt;(QDataStream &amp;out, const Movie&amp; movie){
out &lt;&lt; (qint32)movie.id &lt;&lt; movie.title &lt;&lt; movie.releaseDate;
return out;
}
QDataStream &amp;operator&gt;&gt;(QDataStream &amp;in, Movie &amp;movie){
qint32 id;
QDate date;
 in&gt;&gt;id&gt;&gt;movie.title &gt;&gt; date;
movie.id=(int)id;
movie.releaseDate = date;
return in;
}
</pre>
Iterators
 * Java-style iterators simple and easy to use.
 * QListIterator&lt;...&gt; for read
 * QMutableListIterator&lt;...&gt; for read-write

 * STL-style iterators slightly more efficient
 * QList::const_iterator for read
 * QList::iterator for read-write
 * Same works for QSet, QMap, QHash, ...

Java-style
Modifying During Iteration
  * Use mutable versions of the iterators
  * e.g. QMutableListIterator.

<pre class="code">QList&lt;int&gt; list;
list &lt;&lt; 1 &lt;&lt; 2 &lt;&lt; 3 &lt;&lt; 4;
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main2" class="pn">p19</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">QMutableListIterator&lt;int&gt; i(list);
while (i.hasNext()) {
if (i.next() % 2 != 0)
i.remove();
}
</pre>
STL-style Iterators
<pre class="code">QList&lt;QString&gt; list;
list &lt;&lt; "A" &lt;&lt; "B" &lt;&lt; "C";
QList&lt;QString&gt;::iterator i;
Forward mutable iteration
for (i = list.begin(); i != list.end(); ++i) {
*i = (*i).toLower();
}
</pre>
* Backward mutable iteration
i = list.end();
while (i != list.begin()) {
--i;
*i = (*i).toLower();
}

* QList&lt;QString&gt;::const_iterator for read-only The foreach Keyword
 - Modifying the container while iterating
 - results in container being copied
 - iteration continues in unmodified version
 - Not possible to modify item
 - iterator variable is a const reference.
 - It is a macro, feels like a keyword
<pre class="code">foreach ( variable, container ) statement
foreach (QString str, list) {
if (str.isEmpty())
break;
qDebug() &lt;&lt; str;
}
</pre>
Algorithms
 * STL-style iterators are compatible with the STL algorithms
 * Defined in the STL &lt;algorithm&gt; header
 * Qt has own algorithms
 * Defined in &lt;QtAlgorithms&gt; header
 * If STL is available on all your supported platforms you can choose to use the STL
algorithms
 * The collection is much larger than the one in Qt.

 * qSort(begin, end) sort items in range
 * qFind(begin, end, value) find value
 * qEqual(begin1, end1, begin2) checks two ranges
 * qCopy(begin1, end1, begin2) from one range to another
 * qCount(begin, end, value, n) occurrences of value in range Counting 1's in list
<pre class="code">QList&lt;int&gt; list;
list &lt;&lt; 1 &lt;&lt; 2 &lt;&lt; 3 &lt;&lt; 1;
int count = 0;
qCount(list, 1, count); // count the 1's
qDebug() &lt;&lt; count; // 2 (means 2 times 1)
</pre> * For parallel (ie. multi-threaded) algorithms
Implicitly Sharing and Containers
Implicit Sharing
If an object is copied, then its data is copied only when the data of one of the
objects is changed
 * Shared class has a pointer to shared data block
 * Shared data block = reference counter and actual data
 * Assignment is a shallow copy
 * Changing results into deep copy (detach)
<pre class="code">QList&lt;int&gt; l1, l2; l1 &lt;&lt; 1 &lt;&lt; 2;
l2 = l1; // shallow-copy: l2 shares date with l1
l2 &lt;&lt; 3; // deep-copy: change triggers detach from l1
</pre>Important to remember when inserting items into a container, or when returning a
container.

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main2" class="pn">p20</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:135px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  2. Qt Core</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>String Handling
</pre></li>   <li class="sml"><pre>Container Classes
</pre></li>   <li class="big"><a name="chap2_2">Advanced Container Classes</a></li>   <li class="sml"><pre>File I/O
</pre></li>   <li class="sml"><pre>Memory Mapped Files</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

* QVarLengthArray&lt;T, Prealloc&gt; provides a low-level variable-length array.
  Used instead of QVector in places where speed is particularly important.
* QCache&lt;Key, T&gt; provides a cache to store objects of a certain type T
  associated with keys of type Key.
* QContiguousCache&lt;T&gt; provides an efficient way of caching data that is
  typically accessed in a contiguous way.
* QPair&lt;T1, T2&gt; stores a pair of elements.

* QVarLengthArray&lt;T, Prealloc&gt; provides a low-level variable-length array.
  Used instead of QVector in places where speed is particularly important.
* QCache&lt;Key, T&gt; provides a cache to store objects of a certain type T
  associated with keys of type Key.
* QContiguousCache&lt;T&gt; provides an efficient way of caching data that is
  typically accessed in a contiguous way.
* QPair&lt;T1, T2&gt; stores a pair of elements.

Non-template types are QBitArray, QByteArray, QString, and QStringList.

</pre> &nbsp;<div class="slideheader" style="height:135px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  2. Qt Core</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>String Handling
</pre></li>   <li class="sml"><pre>Container Classes
</pre></li>   <li class="sml"><pre>Advanced Container Classes
</pre></li>   <li class="big"><a name="chap2_3">File I/O</a></li>   <li class="sml"><pre>Memory Mapped Files</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

- Working With Files
 - For portable file access do not use the native functions like open() or
CreateFile(), but Qt classes instead.

 -File Handling
  * QFile
  * Interface for reading from and writing to files
  * Inherits QIODevice (base interface class of all I/O devices)

 - QTextStream
  * Interface for reading and writing text

 - QDataStream
  * Serialization of binary data

- Additional
  * QFileInfo - System-independent file information
  * QDir - Access to directory structures and their contents

File Convenient Methods
  * Media methods: load(fileName), save(fileName)
  * for QPixmap, QImage, QPicture, QIcon
  * QFileDialog
  * QFileDialog::getExistingDirectory()
  * QFileDialog::getOpenFileName()
  * QFileDialog::getSaveFileName()
  * QDesktopServices::storageLocation(type)
  * returns default system directory where files of type belong

File operations
  * QFile::exists(fileName)
  * QFile::rename(oldName, newName)
  * QFile::copy(oldName, newName)
  * QFile::remove(fileName)
  * Directory Information
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main2" class="pn">p21</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
  * QDir::tempPath()
  * QDir::home()
  * Qdir::drives()

Variants
  * QVariant
  * Acts like a union for the most common Qt data types
  * Resides in QtCore (can't know outside types)
  * For QtCore types
<pre class="code">QVariant variant(42);
int value = variant.toInt(); // read back
qDebug() &lt;&lt; variant.typeName(); // int
</pre>
  * For none QtCore types
<pre class="code">variant.setValue(QColor(Qt::red));
QColor color = variant.value&lt;QColor&gt;(); // read back
qDebug() &lt;&lt; variant.typeName(); // QColor
</pre>
QVariant and Custom Types
 - Custom Type
<pre class="code">class Contact {
public:
void setName(const QString &amp;name);
QString name() const;
  ...
};
// make Contact known to meta-type system
Q_DECLARE_METATYPE(Contact);
</pre>
 - Usage with QVariant
<pre class="code">Contact c; c.setName("Peter");
QVariant variant = QVariant::fromValue(c);
qDebug() &lt;&lt; variant.typeName(); // Contact
Contact c2 = variant.value&lt;Contact&gt;();
qDebug() &lt;&lt; c2.name(); // "Peter
</pre>
EXAMPLE:
<pre class="codes">&lt;QT += core TARGET = coreclass TEMPLATE = app SOURCES += coreclass.cpp&gt;
<pre class="code" style="display:inline">&lt;coreclass.cpp&gt;</pre>
#include &lt;QCoreApplication&gt;
#include &lt;QtAlgorithms&gt;
#include &lt;QFile&gt;
#include &lt;QList&gt;
#include &lt;QVector&gt;
#include &lt;QTextStream&gt;
#include &lt;QDataStream&gt;
#include &lt;QColor&gt;
#include &lt;QString&gt;
#include &lt;QDebug&gt;
class Contact {
QString _name;
public:
void setName(const QString &amp;name){_name = name;}
QString name() const{return _name;}
};
Q_DECLARE_METATYPE(Contact);
int main(int argc, char *argv[]) {
QCoreApplication a(argc,argv);
QFile tfile("textfile.txt");
QFile dfile("mydatafile.data");
QTextStream tstream;
QDataStream dstream;
if(tfile.open(QIODevice::WriteOnly)) {
 tstream.setDevice(&amp;tfile);
}
</pre><pre class=codes>if(dfile.open(QIODevice::WriteOnly)) {
 dstream.setDevice(&amp;dfile);
}
QList&lt;QString&gt; slist;
slist&lt;&lt;"one"&lt;&lt;"two"&lt;&lt;"three";
QVector&lt;QString&gt; svec(3);
qCopy(slist.begin(),slist.end(),svec.begin());
for(QVector&lt;QString&gt;::iterator it=svec.begin();it!=svec.end();++it)
tstream&lt;&lt;*it;
dstream&lt;&lt;(QList&lt;QString&gt;)slist;
tfile.close();
dfile.close();
QVariant variant("42");
int value = variant.toInt(); // read back
qDebug() &lt;&lt; value &lt;&lt; variant.typeName(); // int
variant.setValue(QColor(Qt::red));
QColor color = variant.value&lt;QColor&gt;(); // read back
qDebug() &lt;&lt; color.name()&lt;&lt; variant.typeName(); // QColor
// make Contact known to meta-type system
Contact c; c.setName("Peter");
QVariant variant1 = QVariant::fromValue(c);
qDebug() &lt;&lt; variant1.typeName(); // Contact
Contact c2 = variant1.value&lt;Contact&gt;();
qDebug() &lt;&lt; c2.name(); // "Peter"
return a.exec();
}
</pre><pre style="clear:both"></pre>OUTPUT
<pre class="code">$./coreclass 
42 QString
"#ff0000" QColor
Contact
"Peter"
</pre>
</pre> &nbsp;<div class="slideheader" style="height:135px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  2. Qt Core</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>String Handling
</pre></li>   <li class="sml"><pre>Container Classes
</pre></li>   <li class="sml"><pre>Advanced Container Classes
</pre></li>   <li class="sml"><pre>File I/O
</pre></li>   <li class="big"><a name="chap2_4">Memory Mapped Files</a></li>
  </ul>
 </div>
<pre class="slidecontent">

* To map a file into memory on Unix mmap system function is used.
 - On Windows with CreateFileMapping.
 - Qt QFileDevice provides map() and unmap() that provide the ability to map files
into memory.

<pre class="code">QFile file("foo");
file.open(QFile::ReadOnly);
uchar *memory = file.map(0, file.size());
if (memory) {
   // have some fun with the data
file.unmap();
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main2" class="pn">p22</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">}
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main2" class="pn">p23</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap3">&nbsp;<div class="slideheader" style="height:225px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  3. Memory Management</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap3_0">Qt Object Model</a></li>   <li class="sml"><pre>Object Life cycle
 - Stack allocation
 - Heap allocation
 - QPointer
 - QScopePointer
 - QWeakPointer
</pre></li>   <li class="sml"><pre>Qt class relationships
 - Association
 - Containment(Aggregation and Composition)
 - Parent/Child relationships
 - Inheritance
 - Polymorphism
</pre></li>   <li class="sml"><pre>Garbage Collection</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

QObject is base class of all Qt classes which supports 
 - Signals and slots
 - Dynamic Properties
 - Event handling
 - Memory Management
 - Timer
 - Thread
 - Qt meta-object system

QObject has no visual representation

Object Tree
 - QObjects organize themselves in object trees
 - Based on parent-child relationship

QObject(QObject *parent=0)
 - Parent adds object to set of children
 - Parent owns children
 - Construction/Destruction
 - Tree be constructured in any order
 - Tree be destroyed in any order
 - if object has parent: object first removed from parent
 - if object has children: deletes each child first
 - No object is deleted twice
Note: Parent-child relationship is NOT inheritance

</pre> &nbsp;<div class="slideheader" style="height:280px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  3. Memory Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Qt Object Model
</pre></li>   <li class="big"><a name="chap3_1">Object Life cycle<br> - Stack allocation<br> - Heap allocation<br> - QPointer<br> - QScopePointer<br> - QWeakPointer</a></li>   <li class="sml"><pre>Qt class relationships
 - Association
 - Containment(Aggregation and Composition)
 - Parent/Child relationships
 - Inheritance
 - Polymorphism
</pre></li>   <li class="sml"><pre>Garbage Collection</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

* QObject follows heap and stack life cycle. 
* Children destroyed by Parents at the time of their destruction.

On Heap - Classes inheriting from QObject
QLabel *label = new QLabel("Some Text", parent);
 - Parent takes ownership
 - Copy is disabled

On stack - All other classes
QStringList list;
QColor color;
 - Cheap to copy
 - Exceptions:

 QFile, QApplication (inheriting QObject)
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main3" class="pn">p24</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
 Usually allocated on the stack
 Modal dialogs are often allocated on stack

-QPointer (Smart Pointer in Qt)
 The QPointer class is a template class that provides guarded pointers to Qobject. A
guarded pointer, QPointer&lt;T&gt;, behaves like a normal C++ pointer T * except that it is
automatically set to 0 when the referenced object is destroyed (unlike normal C++
pointers, which become "dangling pointers" in such cases).
<pre class="code">QPointer&lt;QLabel&gt; label = new QLabel;
label-&gt;setText("&amp;Status:");
  ...
  if (label)
    label-&gt;show();
</pre>
-QScopePointer (Auto Pointer in Qt)
<pre class="code">void myFunction(bool useSubClass)
{
MyClass *p = useSubClass ? new MyClass() : new MySubClass;
QIODevice *device = handsOverOwnership();

if (m_value &gt; 3) {
delete p;
delete device;
return;
}
try {
process(device);
}
catch (...) {
delete p;
delete device;
throw;
}
delete p;
delete device;
}
</pre>
QSharedPointer
The QSharedPointer class holds a strong reference to a shared pointer. The
QSharedPointer is an automatic, shared pointer in C++. It behaves exactly like a
normal pointer for normal purposes, including respect  for constness.
QSharedPointer will delete the pointer it is holding when it goes out of scope,
provided no other QSharedPointer objects are referencing it.
A QSharedPointer object can be created from a normal pointer, another SharedPointer
object or by promoting a QWeakPointer object to a strong reference.

QWeakPointer
 - The QWeakPointer class holds a weak reference to a shared pointer. The QWeakPointer
is an automatic weak reference to a pointer in C++. 
 - It cannot be used to dereference the pointer directly, but it can be used to verify

   if the pointer has been deleted or not in another context.
 QWeakPointer objects can only be created by assignment from a QSharedPointer.

</pre> &nbsp;<div class="slideheader" style="height:280px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  3. Memory Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Qt Object Model
</pre></li>   <li class="sml"><pre>Object Life cycle
 - Stack allocation
 - Heap allocation
 - QPointer
 - QScopePointer
 - QWeakPointer
</pre></li>   <li class="big"><a name="chap3_2">Qt class relationships<br> - Association<br> - Containment(Aggregation and Composition)<br> - Parent/Child relationships<br> - Inheritance<br> - Polymorphism</a></li>   <li class="sml"><pre>Garbage Collection</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

 - Association
 When a class keeps pointers to other class, class is said to be associated. QWidget
keeps pointers to QObject its parent class then QWidget is associated to its parent.

 - Containment
  When one Qt class contains other as member property.
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main3" class="pn">p25</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">

 -Aggregation
 Other class object is instantiated externally and its life cycle is not dependent
upon container.
   
  -Composition
  Other class object is instantiated internally and its life cycle is dependent upon
container. QWindow has QMenuBar, QMenu, QToolBar created internally.

  -Inheritance
  When a Qt class inherit other class. Parent class properties and methods becomes
visible to derived class depends upon parent class access controls and derivation type
(public, protected, private). Class public is visible to external world.

  - Polymorphism
  Its a type of inheritance where compile time method invocation on base class pointer
can be replaced to method invocation on derived class objects. This is possible with
non static methods declared with virtual keyword.
<pre class="code">class B{
public:
virtual func(){cout&lt;&lt;"B::func"&lt;&lt;endl;}
};
class D:class B {
public:
virtual func(){count&lt;&lt;"D::func"&lt;&lt;endl;}
}
void draw(B* b){
b-&gt;func();
}
B* b=new D;
draw(b);
</pre>
</pre> &nbsp;<div class="slideheader" style="height:225px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  3. Memory Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Qt Object Model
</pre></li>   <li class="sml"><pre>Object Life cycle
 - Stack allocation
 - Heap allocation
 - QPointer
 - QScopePointer
 - QWeakPointer
</pre></li>   <li class="sml"><pre>Qt class relationships
 - Association
 - Containment(Aggregation and Composition)
 - Parent/Child relationships
 - Inheritance
 - Polymorphism
</pre></li>   <li class="big"><a name="chap3_3">Garbage Collection</a></li>
  </ul>
 </div>
<pre class="slidecontent">

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main3" class="pn">p26</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap4">&nbsp;<div class="slideheader" style="height:277px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  4. Event Management</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap4_0">Event flow and Handling<br>- Event handling through callback and polymorphism<br>- Event handling through message map</a></li>   <li class="sml"><pre>Synthetic and hardware events
- Custom events
- Sending and receiving custom events
- Posting events
</pre></li>   <li class="sml"><pre>Event loops
- QCoreApplication
- QEventDispatcher
- exec()
</pre></li>   <li class="sml"><pre>Event filters
- Registering event filter
- Installing event filter
</pre></li>   <li class="sml"><pre>Timer event
</pre></li>   <li class="sml"><pre>Signal & Slots communication & delivery
</pre></li>   <li class="sml"><pre>Data passing and Signal mapper</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

Event Processing
 - Qt is an event driven UI toolkit
 - QApplication::exec() runs the event loop

1. Generate Events
 - By input devices: keyboard, mouse, etc.
 - By Qt itself (e.g. timers)
2 Queue Events
 - By event loop
3 Dispatch Events
 - By QApplication to receiver: QObject
 - Key events sent to widget with focus
 - Mouse events sent to widget under cursor
4 Handle Events
 - By QObject event handler methods

<pre class="code">------------------        ------------       ---------------------------------
|hardware signals| -----&gt; | X Server | ----&gt; | Application thread            |
------------------        ------------       | Event queue with display open |
                                             ---------------------------------
                                                            |
                                                            | exec()
                                                            v           
                                              ------------------------------
                                              | Window handling the event  |
                                              ------------------------------
                                                            |
                                                            V
                                                           ---  
                                  ---------    Yes      /       \
                                  |process|    &lt;-----  /  Pass   \
                                  ---------            \ through /
                                                        \event  /
                                                         \filter/               
                                                           ---
                                                            | NO
                                                            v
                                                      ------------
                                                      | reject   |
                                                      ------------
</pre>
- Event Handling through callback and polymorphism
<pre class="code" style="display:inline"> QObject::event(QEvent *event)</pre>
 - Handles all event for this object

Qt's Widget Model - QWidget
<img class="img" src="http://minhinc.com/image/qt-slide-qwidgethierarchy.png" />
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main4" class="pn">p27</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">

Derived from QObject
 - Adds visual representation
 
Base of user interface objects
 - Receives events e.g. mouse, keyboard events

Paints itself on screen
 - Using styles

* Specialized event handlers
<pre class="codes">QWidget::mousePressEvent(QMouseEvent*) for mouse click
QWidget::keyPressEvent(QKeyEvent)* for key presses
QWidget::actionEvent(QActionEvent * event)
QWidget::changeEvent(QEvent * event)
QWidget::closeEvent(QCloseEvent * event)
QWidget::contextMenuEvent(QContextMenuEvent * event)
QWidget::dragEnterEvent(QDragEnterEvent * event)
QWidget::dragLeaveEvent(QDragLeaveEvent * event)
QWidget::dragMoveEvent(QDragMoveEvent * event)
QWidget::dropEvent(QDropEvent * event)
QWidget::enterEvent(QEvent * event)
QWidget::focusInEvent(QFocusEvent * event)
QWidget::focusOutEvent(QFocusEvent * event)
QWidget::hideEvent(QHideEvent * event)
QWidget::inputMethodEvent(QInputMethodEvent * event)
QWidget::keyReleaseEvent(QKeyEvent * event)
QWidget::leaveEvent(QEvent * event)
QWidget::mouseDoubleClickEvent(QMouseEvent * event)
QWidget::mouseMoveEvent(QMouseEvent * event)
QWidget::mouseReleaseEvent(QMouseEvent * event)
QWidget::moveEvent(QMoveEvent * event)
QWidget::paintEvent(QPaintEvent * event)
QWidget::resizeEvent(QResizeEvent * event)
</pre><pre class=codes>QWidget::showEvent(QShowEvent * event)
QWidget::tabletEvent(QTabletEvent * event)
QWidget::wheelEvent(QWheelEvent * event)
</pre><pre style="clear:both"></pre>
For all events
<pre class="code" style="display:inline">virtual bool event(QEvent * event)</pre>

Accepting an Event
<pre class="code" style="display:inline"> - event-&gt;accept() / event-&gt;ignore()</pre>
 - Accepts or ignores the event
 - Accepted is the default.

Event propagation
 - Happens if event is ignored
 - Might be propagated to parent widget

Example of Event Handling
* QCloseEvent delivered to top level widgets (windows)
* Accepting event allows window to close
* Ignoring event keeps window open

<pre class="code">void MyWidget::closeEvent(QCloseEvent *event) {
if (maybeSave()) {
writeSettings();
event-&gt;accept(); // close window
} else {
event-&gt;ignore(); // keep window
}
}
</pre>
- Event handling through message map
Events and Signals
Signals and slots are used instead of events:
* To communicate between components.
* In cases where there is a well-defined sender and receiver.
* For example: a button and a slot to handle clicks.
* For some events, there is no sender in Qt.
* For example: redraw, keyboard and mouse events.
* To describe high level logic and control flow. Developers can create custom events
if they need to.

</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main4" class="pn">p28</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<img class="img" src="http://minhinc.com/image/qt-slide-signalslot.png" />

Variations of Signal&amp;Slot Connections                
<pre class="code">Signal(s)                      Slot(s)
one                            many
Many                           one
one                            another signal
</pre>
Signal to Signal connection
<pre class="code" style="display:inline">connect(bt, SIGNAL(clicked()), this, SIGNAL(oksignal()));</pre>

Making the Connection
Rule for Signal &amp; Slot Connection
Can ignore arguments, but not create values from nothing
<pre class="code">Signal                                          Slot
rangeChanged(int,int)                           setValue(int)
                                                setRange(int,int)
                                                updateUi()

valueChanged(int)                               setValue(int)
                                                UpdateUi()
                                x               setRange(int,int)      
                                x               setValue(float)

textChanged(QString)            x               setValue(int)

Clicked()                                       updateUi()
                                x               setValue(int)
</pre>
</pre> &nbsp;<div class="slideheader" style="height:288px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  4. Event Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Event flow and Handling
- Event handling through callback and polymorphism
- Event handling through message map
</pre></li>   <li class="big"><a name="chap4_1">Synthetic and hardware events<br>- Custom events<br>- Sending and receiving custom events<br>- Posting events</a></li>   <li class="sml"><pre>Event loops
- QCoreApplication
- QEventDispatcher
- exec()
</pre></li>   <li class="sml"><pre>Event filters
- Registering event filter
- Installing event filter
</pre></li>   <li class="sml"><pre>Timer event
</pre></li>   <li class="sml"><pre>Signal & Slots communication & delivery
</pre></li>   <li class="sml"><pre>Data passing and Signal mapper</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Events have mainly two types
a) User interface, ex, Keyboard, Mouse, Timer etc.. Processed through call backs, ex.
paintEvent, processEvent etc.
b) Synthetic events

Synthetic Events
* When calling postEvent(), the event must be allocated using new, and must not be
deallocated (Qt takes ownership).
* When calling sendEvent(), you must take care of deleting the instance afterwards (or
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main4" class="pn">p29</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
allocate it on the stack).

* You can create your own events by inheriting QEvent, and using an integer between
QEvent::User (1000) and QEvent::MaxUser (65535).
* The integer to use is best generated using the static method int
QEvent::registerEventType(int hint = -1)
* Naturally, Qt does not understand user events. You must therefore handle user events
in inherited classes implementing QObject::customEvent() to deal with your custom
events.
* Alternatively, event filters can be used.

Delayed Invocation
* Sometimes, it is desirable to have some code invoked when the application is idle.
* One way to do this is to post custom QEvent and put your code in the
QObject::customEvent() handler of the receiving object.
* Another way that is often easier and works when the code you want to invoke is
available as a slot,

<pre class="code">QMetaObject::invokeMethod() with the connection type
QueuedConnection can be used instead:
QMetaObject::invokeMethod(myobject, "doDelayedStuff", Qt::QueuedConnection);
</pre>
Invokes doDelayedStuff() subroutine

Delayed Invocation
* A typical use of this is to make a delayed call from a constructor.
* This can be used to emit signals after the object has been created and connected.
* Another use is idle processing.

PingPong
<pre class="codes"><pre class="code" style="display:inline">&lt;*.pro&gt;</pre>
QT+=core TEMPLATE = app TARGET = pingpong SOURCES += pingpong.cpp
<pre class="code" style="display:inline">&lt;main.cpp&gt;</pre>
#include &lt;QtCore&gt;
#include &lt;QDebug&gt;
class PingEvent : public QEvent {
public:
PingEvent() : QEvent(QEvent::Type(QEvent::User)){}
};
class PongEvent : public QEvent{
public:
PongEvent() : QEvent(QEvent::Type(QEvent::User+1)){}
};
class Pinger : public QState{
public:
Pinger(QState *parent=0):QState(parent) {}
protected:
virtual void onEntry(QEvent *){
qDebug()&lt;&lt;"Pinger::onEntry";
machine()-&gt;postDelayedEvent(new PingEvent(),30000);
}
};
class Ponger : public QState{
public:
Ponger(QState *parent=0):QState(parent) {}
protected:
virtual void onEntry(QEvent *){
qDebug()&lt;&lt;"Ponger::onEntry";
machine()-&gt;postDelayedEvent(new PongEvent(),30000);
}
};
class PingTransition : public QAbstractTransition {
public:
PingTransition() {}
protected:
virtual bool eventTest(QEvent *e) {
qDebug()&lt;&lt;"PingTranstion::eventTest eventType :"&lt;&lt;e-&gt;type();
return (e-&gt;type() == QEvent::User);
}
virtual void onTransition(QEvent *) {
</pre><pre class=codes>qDebug()&lt;&lt;"PingTransition::onTransition";
}
};
class PongTransition : public QAbstractTransition{
public:
PongTransition() {}
protected:
virtual bool eventTest(QEvent *e) {
qDebug()&lt;&lt;"PingTranstion::eventTest eventType :"&lt;&lt;e-&gt;type();
return (e-&gt;type() == QEvent::User+1);
}
virtual void onTransition(QEvent *){
qDebug()&lt;&lt;"PongTransition::onTransition";
}
};
int main(int argc, char **argv)
{
QCoreApplication app(argc, argv);
QStateMachine machine;
Pinger *pinger = new Pinger();
pinger-&gt;setObjectName("pinger");
Ponger *ponger = new Ponger();
ponger-&gt;setObjectName("ponger");
QAbstractTransition *pingertranstion=new PingTransition();
pingertranstion-&gt;setTargetState(ponger);
pinger-&gt;addTransition(pingertranstion);

QAbstractTransition *pongertransition=new PongTransition();
pongertransition-&gt;setTargetState(pinger);
ponger-&gt;addTransition(pongertransition);

machine.addState(pinger);
machine.addState(ponger);
machine.setInitialState(pinger);
machine.start();
return app.exec();
}
</pre><pre style="clear:both"></pre>OUTPUT
<pre class="codes">./pingpong
Pinger::onEntry
PingTranstion::eventTest eventType : QEvent::Type(None)
PingTranstion::eventTest eventType : QEvent::Type(None)
PingTranstion::eventTest eventType : QEvent::Type(User)
PingTransition::onTransition
Ponger::onEntry
PingTranstion::eventTest eventType : QEvent::Type(None)
PingTranstion::eventTest eventType : QEvent::Type(None)
PingTranstion::eventTest eventType : QEvent::Type(1001)
PongTransition::onTransition
Pinger::onEntry
PingTranstion::eventTest eventType : QEvent::Type(None)
PingTranstion::eventTest eventType : QEvent::Type(None)
PingTranstion::eventTest eventType : QEvent::Type(User)
PingTransition::onTransition
Ponger::onEntry
PingTranstion::eventTest eventType : QEvent::Type(None)
^C
</pre><pre style="clear:both"></pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main4" class="pn">p30</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:288px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  4. Event Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Event flow and Handling
- Event handling through callback and polymorphism
- Event handling through message map
</pre></li>   <li class="sml"><pre>Synthetic and hardware events
- Custom events
- Sending and receiving custom events
- Posting events
</pre></li>   <li class="big"><a name="chap4_2">Event loops<br>- QCoreApplication<br>- QEventDispatcher<br>- exec()</a></li>   <li class="sml"><pre>Event filters
- Registering event filter
- Installing event filter
</pre></li>   <li class="sml"><pre>Timer event
</pre></li>   <li class="sml"><pre>Signal & Slots communication & delivery
</pre></li>   <li class="sml"><pre>Data passing and Signal mapper</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

*QEventLoop - The QEventLoop class provides a means of entering and leaving an event
loop.
*At any time, you can create a QEventLoop object and call exec() on it to start a
local event loop. From within the event loop, calling exit() will force exec() to
return.
*QEventDispatcher - The QAbstractEventDispatcher class provides an interface to manage
Qt's event queue.
*An event dispatcher receives events from the window system and other sources. It then
sends them to the QCoreApplication or QApplication instance for processing and
delivery. QAbstractEventDispatcher provides fine-grained control over event delivery.

<pre class="code">          |                |                                     QWidgets
          |                |                                   -------------
          |                |                        hardware   |::event() |
          |                |                        events +--&gt;|::mousePressEvent()|
          |                |                               |   | .....             |
|event    |                |                               |   ---------------------
|arrival / \   checks for / \   send out                   |
|       /   \   priority /   \  event to  ------------     |
|      /event\ -------&gt; /event\ --------&gt; |checks for|     |
---&gt;   \queue/          \queue/ target    |installed |-----+
        \   /            \   /  window    |filters   |  syn|ev   QObject
         \ /              \ /             ------------  the|ents-----------------
          |                |                            tic|---&gt;|::customEvent()|
          |                |                               |    -----------------
          |                |                               |
          |                |                           sign|     QObject
          |                |                           als |     ----------
                                                           |----&gt;| slots  |
                                                                 ----------
</pre>
</pre> &nbsp;<div class="slideheader" style="height:277px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  4. Event Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Event flow and Handling
- Event handling through callback and polymorphism
- Event handling through message map
</pre></li>   <li class="sml"><pre>Synthetic and hardware events
- Custom events
- Sending and receiving custom events
- Posting events
</pre></li>   <li class="sml"><pre>Event loops
- QCoreApplication
- QEventDispatcher
- exec()
</pre></li>   <li class="big"><a name="chap4_3">Event filters<br>- Registering event filter<br>- Installing event filter</a></li>   <li class="sml"><pre>Timer event
</pre></li>   <li class="sml"><pre>Signal & Slots communication & delivery
</pre></li>   <li class="sml"><pre>Data passing and Signal mapper</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Event Filters
 - The usual way to do this is to subclass each widget and implement the event. 
 - The alternative is to install an event filter for each instance.

Event Filters
* Subclass from QObject (or any subclass of QObject), and reimplement the method:
<pre class="code">bool QObject::eventFilter(QObject* receiver, QEvent* event);
                 --------------
                 |  Qobject   | virutal eventfilter(QObject *receiver, Qevent *e)
                 --------------
                       / \
                        -
                        |
               ---------------------
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main4" class="pn">p31</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">               | EventFilterObject|virutal eventfilter(QObject *receiver, Qevent *e)
               ---------------------
</pre>* The first parameter is the object for whom the event was intended, and the second
argument is the event itself.
* If this method returns true, then the event is considered "handled", otherwise it
will be sent on to the next event filter, or the object itself, if no more event
filters are installed.
* Install the event filter for an object by invoking the method installEventFilter().
As the argument, pass an instance of the class you have created in the previous step.

Event Filters
* Installing an event filter on the QApplication instance will install a global event
filter.
* Event filters can be removed again by using the method
<pre class="code">removeEventFilter(const QObject*)
</pre>* When multiple event filters are installed, the order they are called in is the
reverse of the order in which they are installed, i.e., the most recent installed
filter is the first one invoked.

<pre class="codes"><pre class="code" style="display:inline">&lt;*.pro&gt;</pre>
QT += core

<pre class="code" style="display:inline">&lt;entity.h&gt;</pre>
#ifndef ENTITY_H
#define ENTITY_H
#include &lt;QEvent&gt;
#include &lt;QDebug&gt;
class entity2;
class event1:public QEvent {
public:
event1():QEvent(QEvent::Type(QEvent::User)){}
};
class event2:public QEvent {
public:
event2():QEvent(QEvent::Type(QEvent::User+1)){}
};
class entity1:public QObject {
Q_OBJECT
public:
entity1(QObject *p=0);
protected:
void customEvent(QEvent *);
public:
void start();
void setpartner(entity2*);
private:
entity2 *ent;
};
class entity2:public QObject {
Q_OBJECT
public:
entity2(QObject *p=0);
void setpartner(entity1* e);
protected:
void customEvent(QEvent *);
private:
entity1 *ent;
};
class event1filter:public QObject {
Q_OBJECT
protected:
bool eventFilter(QObject *obj, QEvent *event);
};
class event2filter:public QObject {
Q_OBJECT
protected:
bool eventFilter(QObject *obj, QEvent *event);
};
#endif
<pre class="code" style="display:inline">&lt;entity.cpp&gt;</pre>
#include &lt;QCoreApplication&gt;
#include "entity.h"
entity1::entity1(QObject *p):QObject(p) {
}
</pre><pre class=codes>void entity1::start() {
qDebug()&lt;&lt;"entity1::start()";
QCoreApplication::instance()-&gt;postEvent(ent, new event1());
}
void entity1::customEvent(QEvent *e) {
qDebug()&lt;&lt;"entity1::customevent(), received event type-&gt;"&lt;&lt;e-&gt;type();
QCoreApplication::instance()-&gt;postEvent(ent, new event1());
QCoreApplication::instance()-&gt;postEvent(ent, new event2());
}
void entity1::setpartner(entity2 *part) {
ent=part;
}
entity2::entity2(QObject *p):QObject(p) {}
void entity2::customEvent(QEvent *e) {
qDebug()&lt;&lt;"entity2::customevent, received custom event id"&lt;&lt;e-&gt;type();
QCoreApplication::instance()-&gt;postEvent(ent, new event1());
QCoreApplication::instance()-&gt;postEvent(ent, new event2());
}
void entity2::setpartner(entity1 *part) {
ent=part;
}
bool event1filter::eventFilter(QObject *obj, QEvent *event) {
if(event-&gt;type() == QEvent::User)
return true;
else
return QObject::eventFilter(obj,event);
}
bool event2filter::eventFilter(QObject *obj, QEvent *event) {
if(event-&gt;type() == QEvent::User+1)
return true;
else
return QObject::eventFilter(obj, event);
}
<pre class="code" style="display:inline">&lt;main.cpp&gt;</pre>
#include &lt;QCoreApplication&gt;
#include "entity.h"
int main(int argc, char *argv[]) {
QCoreApplication a(argc,argv);
int r;
entity1 *ent1=new entity1;
entity2 *ent2=new entity2;
event1filter *ent1filter=new event1filter;
event2filter *ent2filter=new event2filter;
ent1-&gt;setpartner(ent2);
ent2-&gt;setpartner(ent1);
ent1-&gt;installEventFilter(ent1filter);
ent2-&gt;installEventFilter(ent2filter);
ent1-&gt;start();
r=a.exec();
return r;
}
</pre><pre style="clear:both"></pre>OUTPUT
<pre class="codes">./entity12 
entity1::start()
entity2::customevent, received custom event id QEvent::Type(User)
entity1::customevent(), received event type-&gt; QEvent::Type(1001)
entity2::customevent, received custom event id QEvent::Type(User)
entity1::customevent(), received event type-&gt; QEvent::Type(1001)
entity2::customevent, received custom event id QEvent::Type(User)
entity1::customevent(), received event type-&gt; QEvent::Type(1001)
entity2::customevent, received custom event id QEvent::Type(User)
entity1::customevent(), received event type-&gt; QEvent::Type(1001)
entity2::customevent, received custom event id QEvent::Type(User)
entity1::customevent(), received event type-&gt; QEvent::Type(1001)
entity2::customevent, received custom event id QEvent::Type(User)
entity1::customevent(), received event type-&gt; QEvent::Type(1001)
entity2::customevent, received custom event id QEvent::Type(User)
entity1::customevent(), received event type-&gt; QEvent::Type(1001)
entity2::customevent, received custom event id QEvent::Type(User)
entity1::customevent(), received event type-&gt; QEvent::Type(1001)
entity2::customevent, received custom event id QEvent::Type(User)
entity1::customevent(), received event type-&gt; QEvent::Type(1001)
entity2::customevent, received custom event id QEvent::Type(User)
</pre><pre style="clear:both"></pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main4" class="pn">p32</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:255px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  4. Event Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Event flow and Handling
- Event handling through callback and polymorphism
- Event handling through message map
</pre></li>   <li class="sml"><pre>Synthetic and hardware events
- Custom events
- Sending and receiving custom events
- Posting events
</pre></li>   <li class="sml"><pre>Event loops
- QCoreApplication
- QEventDispatcher
- exec()
</pre></li>   <li class="sml"><pre>Event filters
- Registering event filter
- Installing event filter
</pre></li>   <li class="big"><a name="chap4_4">Timer event</a></li>   <li class="sml"><pre>Signal & Slots communication & delivery
</pre></li>   <li class="sml"><pre>Data passing and Signal mapper</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

There are mainly two types of timers.
QTimer  based
 Single Shot
 Periodic
Event based
 QObject::startTimer()
callback
 QOjbect::timerEvent()

signal-slottimer
<pre class="code">QTimer *timer = new QTimer(this);
connect(timer, SIGNAL(timeout()), this, SLOT(update()));
timer-&gt;start(1000);

QTimer::singleShot(200, this, SLOT(updateCaption()));

&lt;&lt;eventtimer.cpp&gt;&gt;
class MyObject : public QObject{
Q_OBJECT
public:
MyObject(QObject *parent = 0);
protected:
void timerEvent(QTimerEvent *event);
};

MyObject::MyObject(QObject *parent):QObject(parent){
startTimer(50);     // 50-millisecond timer
startTimer(1000);   // 1-second timer
startTimer(60000);  // 1-minute timer
}
void MyObject::timerEvent(QTimerEvent *event){
    qDebug() &lt;&lt; "Timer ID:" &lt;&lt; event-&gt;timerId();
}
</pre>
</pre> &nbsp;<div class="slideheader" style="height:255px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  4. Event Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Event flow and Handling
- Event handling through callback and polymorphism
- Event handling through message map
</pre></li>   <li class="sml"><pre>Synthetic and hardware events
- Custom events
- Sending and receiving custom events
- Posting events
</pre></li>   <li class="sml"><pre>Event loops
- QCoreApplication
- QEventDispatcher
- exec()
</pre></li>   <li class="sml"><pre>Event filters
- Registering event filter
- Installing event filter
</pre></li>   <li class="sml"><pre>Timer event
</pre></li>   <li class="big"><a name="chap4_5">Signal & Slots communication & delivery</a></li>   <li class="sml"><pre>Data passing and Signal mapper</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Signals &amp; Slots
 - Object Communication
 - Signal - emitted to notify other objects
 - Slot - method called in response to signal
 - Provides type-safe callbacks
 - After getting used to it, they are
 - easier to use than message maps,
 - more secure than callbacks,
 - more flexible than virtual methods
 - Fosters component-based programming
<pre class="code">QMetaObject::Connection QObject::connect(const QObject * sender, const char * signal,
const QObject * receiver, const char * method, Qt::ConnectionType type =
Qt::AutoConnection) [static]
QObject::disconnect(...);
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main4" class="pn">p33</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">

<pre class="codes"><pre class="code" style="display:inline">&lt;*.pro&gt;</pre>
QT += widgets

<pre class="code" style="display:inline">&lt;lwidget.h&gt;</pre>
#include &lt;QWidget&gt;
#include &lt;QPushButton&gt;
#include &lt;QLabel&gt;
#include &lt;QColorDialog&gt;
#include &lt;QColor&gt;

class lwidget:public QWidget {
Q_OBJECT;
public:
lwidget(QWidget* parent=0);
private slots:
void on_buttonclicked();
void on_colorselected(QColor);
private:
QPushButton button;
QLabel label1;
QLabel label2;
QColorDialog colord;
};

<pre class="code" style="display:inline">&lt;lwidget.cpp&gt;</pre>
#include "lwidget.h"
</pre><pre class=codes>lwidget::lwidget(QWidget* parent):QWidget(parent), button("Select Color", this),
label1("color is :", this),label2("", this) {
label1.setGeometry(40,40,70,15);
label2.setGeometry(140,40,100,15);
button.setGeometry(40,100,100,35);
connect(&amp;button,SIGNAL(clicked()),this,SLOT(on_buttonclicked()));
}
void lwidget::on_buttonclicked() {
colord.open(this,SLOT(on_colorselected(QColor)));
}
void lwidget::on_colorselected(QColor color) {
label2.setText(color.name());
}

<pre class="code" style="display:inline">&lt;sigslot.cpp&gt;</pre>
#include &lt;QApplication&gt;
#include "lwidget.h"
int main(int argc, char *argv[]) {
QApplication a(argc,argv);
lwidget container;
container.show();
return a.exec();
}
</pre><pre style="clear:both"></pre>OUTPUT
<img class="img" src="http://minhinc.com/image/qt-slide-signalslotcd.png" />

</pre> &nbsp;<div class="slideheader" style="height:255px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  4. Event Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Event flow and Handling
- Event handling through callback and polymorphism
- Event handling through message map
</pre></li>   <li class="sml"><pre>Synthetic and hardware events
- Custom events
- Sending and receiving custom events
- Posting events
</pre></li>   <li class="sml"><pre>Event loops
- QCoreApplication
- QEventDispatcher
- exec()
</pre></li>   <li class="sml"><pre>Event filters
- Registering event filter
- Installing event filter
</pre></li>   <li class="sml"><pre>Timer event
</pre></li>   <li class="sml"><pre>Signal & Slots communication & delivery
</pre></li>   <li class="big"><a name="chap4_6">Data passing and Signal mapper</a></li>
  </ul>
 </div>
<pre class="slidecontent">

* The QSignalMapper class bundles signals from identifiable senders.
* This class collects a set of parameterless signals, and re-emits them with integer,
string or widget parameters corresponding to the object  that sent the signal.
* The class supports the mapping of particular strings or integers with  particular
objects using setMapping(). The objects' signals can then be connected to the map()
slot which will emit the mapped() signal with the string or integer associated with
the original signalling object. Mappings can be removed later using removeMappings().
<pre class="code">signalMapper = new QSignalMapper(this);
signalMapper-&gt;setMapping(taxFileButton, QString("taxfile.txt"));
signalMapper-&gt;setMapping(accountFileButton, QString("accountsfile.txt"));
signalMapper-&gt;setMapping(reportFileButton, QString("reportfile.txt"));

connect(taxFileButton, &amp;QPushButton::clicked, signalMapper, &amp;QSignalMapper::map);
connect(accountFileButton, &amp;QPushButton::clicked, signalMapper, &amp;QSignalMapper::map);
connect(reportFileButton, &amp;QPushButton::clicked, signalMapper, &amp;QSignalMapper::map);
</pre>Connect the mapped() signal to readFile() where a different file will be opened,
depending on which push button is pressed.
<pre class="code">connect(signalMapper, SIGNAL(mapped(QString)), this, SLOT(readFile(QString)));
signalmapper
class ButtonWidget : public QWidget
{
Q_OBJECT
public:
ButtonWidget(QStringList texts, QWidget *parent = 0);
signals:
void clicked(const QString &amp;text);
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main4" class="pn">p34</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">private:
QSignalMapper *signalMapper;
};
ButtonWidget::ButtonWidget(QStringList texts, QWidget *parent) : QWidget(parent){
signalMapper = new QSignalMapper(this);
QGridLayout *gridLayout = new QGridLayout;
for (int i = 0; i &lt; texts.size(); ++i) {
QPushButton *button = new QPushButton(texts[i]);
connect(button, SIGNAL(clicked()), signalMapper, SLOT(map()));
signalMapper-&gt;setMapping(button, texts[i]); gridLayout-&gt;addWidget(button, i / 3, i %
3);
}
connect(signalMapper, SIGNAL(mapped(QString)), this, SIGNAL(clicked(QString)));
setLayout(gridLayout);
}
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main4" class="pn">p35</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre style="text-align:center;line-height:1395px;font-size:24pt">Left Blank</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#mainL" class="pn">p36</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap5">&nbsp;<div class="slideheader" style="height:205px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  5. Widgets</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap5_0">Introduction to Widgets</a></li>   <li class="sml"><pre>Writing custom widget
</pre></li>   <li class="sml"><pre>QPainter and capabilites
- Drawing curves
- Drawing Pixmap
- Drawing Fonts
</pre></li>   <li class="sml"><pre>Event Processing and Paint Engine
</pre></li>   <li class="sml"><pre>MainWindow Widget
</pre></li>   <li class="sml"><pre>Dialog widget
</pre></li>   <li class="sml"><pre>Tabify dock widget
</pre></li>   <li class="sml"><pre>Drag and drop
</pre></li>   <li class="sml"><pre>Applying Qt style sheet on Widgets</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

<img class="img" src="http://minhinc.com/image/qt-slide-qwidgethierarchy.png" />

* Derived from QObject
 - Adds visual representation
* Base of user interface objects
* Receives events
 - e.g. mouse, keyboard events
* Paints itself on screen
 - Using styles

Object Tree and QWidget
new QWidget(0)
 - Widget with no parent is window
QWidgets children
 - Displayed in parent coordinate system
 - Clipped by parents boundaries
QWidget parent
 - Propagates state changes
 - hides/shows them when it is hidden/shown itself
 - enables/disables them when it is enabled/disabled itself
Tristate mechanism
 - For hide/show and enable/disable, ensures that e.g. an explicitly hidden child is
not shown when the parent is shown.

Widgets that contain other widgets
* Container Widgets
* Aggregates other child-widgets
* Use layouts for aggregation
* In this example: QHBoxLayout and
QVBoxLayout
* Note: Layouts are not widgets
* Layout Process
* Add widgets to layout
* Layouts may be nested
* Set layout on container widget

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main5" class="pn">p37</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:205px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  5. Widgets</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Introduction to Widgets
</pre></li>   <li class="big"><a name="chap5_1">Writing custom widget</a></li>   <li class="sml"><pre>QPainter and capabilites
- Drawing curves
- Drawing Pixmap
- Drawing Fonts
</pre></li>   <li class="sml"><pre>Event Processing and Paint Engine
</pre></li>   <li class="sml"><pre>MainWindow Widget
</pre></li>   <li class="sml"><pre>Dialog widget
</pre></li>   <li class="sml"><pre>Tabify dock widget
</pre></li>   <li class="sml"><pre>Drag and drop
</pre></li>   <li class="sml"><pre>Applying Qt style sheet on Widgets</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

* Drivation
 * Drive from QWidget or children
 * Override QPaintEvent
<pre class="code">-----------
| QWidget |
---------------------
|virtual QPaintEvent|
---------------------
        / \
         -
         |
---------------
|customwidget|
---------------
|QpaintEvent()|
----------------
</pre>
* Containment
 * QWidget object contains other QWidgets
<pre class="code">-----------               *  ---------
| QWidget |&lt;&gt;---------------&gt;|QWidget|
---------------------        ---------
|virtual QPaintEvent|
---------------------
</pre>
</pre> &nbsp;<div class="slideheader" style="height:238px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  5. Widgets</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Introduction to Widgets
</pre></li>   <li class="sml"><pre>Writing custom widget
</pre></li>   <li class="big"><a name="chap5_2">QPainter and capabilites<br>- Drawing curves<br>- Drawing Pixmap<br>- Drawing Fonts</a></li>   <li class="sml"><pre>Event Processing and Paint Engine
</pre></li>   <li class="sml"><pre>MainWindow Widget
</pre></li>   <li class="sml"><pre>Dialog widget
</pre></li>   <li class="sml"><pre>Tabify dock widget
</pre></li>   <li class="sml"><pre>Drag and drop
</pre></li>   <li class="sml"><pre>Applying Qt style sheet on Widgets</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

The QPainter class performs low-level painting on widgets and other paint devices.
QPainter provides highly optimized functions to do most of the drawing GUI 
programs require. It has three drawing capabilities.
a) Pen
b) Brush
c) Font

QPainter can operate on any object that inherits the QPaintDevice class.
QPainter generaly operates on virtual function paintEvent(...)  update() funciton in 
QWidget calls repainting, calling paintEvent()

Pixmap being QPaintDevice, QPainter works on that.

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main5" class="pn">p38</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:205px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  5. Widgets</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Introduction to Widgets
</pre></li>   <li class="sml"><pre>Writing custom widget
</pre></li>   <li class="sml"><pre>QPainter and capabilites
- Drawing curves
- Drawing Pixmap
- Drawing Fonts
</pre></li>   <li class="big"><a name="chap5_3">Event Processing and Paint Engine</a></li>   <li class="sml"><pre>MainWindow Widget
</pre></li>   <li class="sml"><pre>Dialog widget
</pre></li>   <li class="sml"><pre>Tabify dock widget
</pre></li>   <li class="sml"><pre>Drag and drop
</pre></li>   <li class="sml"><pre>Applying Qt style sheet on Widgets</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

<img class="img" src="http://minhinc.com/image/qt-slide-paintengine.png" />
The QPaintEngine class provides an abstract definition of how QPainter draws to a
given device on a given platform.
QPaintEngine is created and owned by the QPaintDevice that created it.
QPainter provides abstract function for drawing to the user, internally it uses
specific QPaintEngine, tied to a target PaintDevice, algorithms.
<pre class="code">enum QPaintEngine::Type
Constant                     Value           Description
QPaintEngine::X11             0
QPaintEngine::Windows         1
QPaintEngine::MacPrinter      4
QPaintEngine::CoreGraphics    3    Mac OS X's Quartz2D (CoreGraphics)
QPaintEngine::QuickDraw       2    Mac OS X's QuickDraw
QPaintEngine::QWindowSystem   5    Qt for Embedded Linux
QPaintEngine::PostScript      6    (No longer supported)
QPaintEngine::OpenGL          7
QPaintEngine::Picture         8    QPicture format
QPaintEngine::SVG             9   Scalable Vector Graphics XML format
QPaintEngine::Raster          10
QPaintEngine::Direct3D        11  Windows only, Direct3D based engine
QPaintEngine::Pdf             12  Portable Document Format
QPaintEngine::OpenVG          13
QPaintEngine::User            50  First user type ID
QPaintEngine::MaxUser         100 Last user type ID
QPaintEngine::OpenGL2         14
QPaintEngine::PaintBuffer     15
QPaintEngine::Blitter         16
</pre>
GUI events are placed to eventQueue and finally processed by paintEvent Functions.
<pre class="codes">QT += core

<pre class="code" style="display:inline">&lt;main.cpp&gt;</pre>
#include &lt;QApplication&gt;
#include "widget.h"

int main(int argc, char *argv[]) {
QApplication a(argc, argv);
int r;
widget *w=new widget;
w-&gt;show();
r=a.exec();
return r;
}

<pre class="code" style="display:inline">&lt;widget.h&gt;</pre>
#include &lt;QPainter&gt;
#include &lt;QPaintEvent&gt;
#include &lt;QRadialGradient&gt;
#include &lt;QTimer&gt;
#include &lt;QTransform&gt;
#include "widget.h"
widget::widget(QWidget *parent):QWidget(parent){
QTimer *sunroundtimer=new QTimer(this);
connect(sunroundtimer,SIGNAL(timeout()),this,SLOT(sunround()));
sunroundangle=0;
earthownaxisangle=0;
earthroundangle=0;
sunroundmarsangle=0;
marsround1angle=0;
marsround2angle=0;
update();
sunroundtimer-&gt;start(500);
}
void widget::paintEvent(QPaintEvent *pe) {
int side=qMin(width(),height());
QWidget::paintEvent(pe);
QPainter *p=new QPainter(this);
p-&gt;setViewport((width()-side)/2,(height()-side)/2,side,side);
p-&gt;setWindow(-50,-50,100,100);

QTransform transformearth;
QTransform transformmoon;
transformearth.rotate(sunroundangle);
transformearth.translate(30,0);
transformmoon.rotate(earthroundangle);
transformmoon.translate(7.5,0);
QRadialGradient rg(0,0,SUN,0,0);
rg.setColorAt(0.0,Qt::white);
rg.setColorAt(0.5,Qt::yellow);
rg.setColorAt(1,Qt::red);
p-&gt;setPen(Qt::NoPen);
p-&gt;setBrush(rg);
p-&gt;drawEllipse(-SUN,-SUN,SUN*2,SUN*2);
p-&gt;save();

QRadialGradient erg(0,0,EARTH,-EARTH+1,0);
erg.setColorAt(0.0,Qt::white);
erg.setColorAt(0.7,Qt::blue);
erg.setColorAt(1.0,Qt::black);
p-&gt;setPen(Qt::NoPen);
p-&gt;setBrush(erg);
//p-&gt;rotate(sunroundangle);
//p-&gt;translate(+30,0);
p-&gt;setWorldTransform(transformearth,true);
p-&gt;save();
p-&gt;rotate(earthownaxisangle);
p-&gt;drawEllipse(-EARTH,-EARTH,EARTH*2,EARTH*2);
</pre><pre class=codes>p-&gt;restore();
p-&gt;setBrush(Qt::black);
//p-&gt;rotate(earthroundangle);
//p-&gt;translate(7.5,0);
p-&gt;setWorldTransform(transformmoon,true);
p-&gt;drawEllipse(-MOON,-MOON,MOON*2,MOON*2);
p-&gt;restore();


p-&gt;save();
QRadialGradient mrg(0,0,MARS,-MARS+1,0);
mrg.setColorAt(0.0,Qt::white);
mrg.setColorAt(1,Qt::red);
p-&gt;setPen(Qt::NoPen);
p-&gt;setBrush(mrg);
p-&gt;rotate(sunroundmarsangle);
p-&gt;translate(+40,-40);
p-&gt;drawEllipse(-MARS,-MARS,MARS*2,MARS*2);

p-&gt;save();
p-&gt;setBrush(Qt::green);
p-&gt;rotate(marsround1angle);
p-&gt;translate(4.5,0);
p-&gt;drawEllipse(-MARSMOON1,-MARSMOON1,MARSMOON1*2,MARSMOON1*2);
p-&gt;restore();

p-&gt;save();
p-&gt;setBrush(Qt::blue);
p-&gt;rotate(marsround2angle);
p-&gt;translate(5.5,0);
p-&gt;drawEllipse(-MARSMOON2,-MARSMOON2,MARSMOON2*2,MARSMOON2*2);
p-&gt;restore();
p-&gt;restore();
}

void widget::sunround() {
if((sunroundangle+=1)==360) sunroundangle=0;
if((earthownaxisangle+=90)==360) earthownaxisangle=0;
if((earthroundangle+=18)==360) earthroundangle=0;
if((sunroundmarsangle+=0.5)==360) sunroundmarsangle=0;
if((marsround1angle+=18)==360) marsround1angle=0;
if((marsround2angle+=36)==360) marsround2angle=0;
update();
}

<pre class="code" style="display:inline">&lt;widget.h&gt;</pre>
#ifndef WIDGET_H
#define WIDGET_H
class QPainter;
class QPaintEvent;
class QTimer;
#include &lt;QWidget&gt;
class widget: public QWidget {
Q_OBJECT
public:
widget(QWidget *parent=0);
protected:
void paintEvent(QPaintEvent *);
private slots:
void sunround();
private:
QTimer *sunroundtimer;
QTimer *earthownaxistimer;
QTimer *earthroundtimer;
float sunroundangle;
float earthownaxisangle;
float earthroundangle;
float sunroundmarsangle;
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main" class="pn">p39</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="codes">float marsround1angle;
float marsround2angle;
QPainter *p;
static const float SUN=8.0;
static const float EARTH=5.0;
static const float MARS=3.0;
static const float MOON=1.5;
static const float MARSMOON1=1;
static const float MARSMOON2=1.5;
};
#endif
</pre><pre style="clear:both"></pre>OUTPUT
<img class="img" src="http://www.minhinc.com/image/qt-slide-widget_solar.png" />

</pre> &nbsp;<div class="slideheader" style="height:205px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  5. Widgets</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Introduction to Widgets
</pre></li>   <li class="sml"><pre>Writing custom widget
</pre></li>   <li class="sml"><pre>QPainter and capabilites
- Drawing curves
- Drawing Pixmap
- Drawing Fonts
</pre></li>   <li class="sml"><pre>Event Processing and Paint Engine
</pre></li>   <li class="big"><a name="chap5_4">MainWindow Widget</a></li>   <li class="sml"><pre>Dialog widget
</pre></li>   <li class="sml"><pre>Tabify dock widget
</pre></li>   <li class="sml"><pre>Drag and drop
</pre></li>   <li class="sml"><pre>Applying Qt style sheet on Widgets</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

<img class="img" src="http://www.minhinc.com/image/qt-slide-qmainwindow.png" />

<pre class="code">                                         Qwidget
                                           / \
                                            -
                                            |
                                       QMainWindow
</pre>-It provides a framework for building an application's user interface.
-It has its own layout to which QToolBars, QDockWidgets, QMenuBar and QStatusBar 
can be added.
-It's layout has a center area that can be occupied by any kind of widget,i.e
QTextEdit or QGraphicsView

<pre class="code">QMainWindow::setCentralWidget( widget )
</pre>
<pre class="code">* QAction: menu items added to QMenu
void MainWindow::setupMenuBar() {
QMenuBar* bar = menuBar();
QMenu* menu = bar-&gt;addMenu(tr("&amp;File"));
menu-&gt;addAction(action);
menu-&gt;addSeparator();
menu-&gt;addMenu("Sub Menu");
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main5" class="pn">p40</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">  ...

QMainWindow::addToolbar( toolbar )
</pre>
* Adds toolbar to main window
* QMainWindow::addToolBarBreak()

* Adds section splitter
* QToolBar::addAction( action )

* Adds action to toolbar
* QToolBar::addWidget(widget)

* Adds widget to toolbar
<pre class="code">void MainWindow::setupToolBar() {
QToolBar* bar = addToolBar(tr("File"));
bar-&gt;addAction(action);
bar-&gt;addSeparator();
bar-&gt;addWidget(new QLineEdit("Find ..."));
...

QToolButton: Quick-access button to commands or options
QToolButton* button = new QToolButton(this);
button-&gt;setAction(action);
// Can have a menu
button-&gt;setMenu(menu);
// Shows menu indicator on button
button-&gt;setPopupMode(QToolButton::MenuButtonPopup);
// Control over text + icon placements
button-&gt;setToolButtonStyle(Qt::ToolButtonTextUnderIcon);
...

void MainWindow::createStatusBar() {
QStatusBar* bar = statusBar();
bar-&gt;showMessage(tr("Ready"));
bar-&gt;addWidget(new QLabel("Label on StatusBar"));
...

QmainWindow::setDockOptions(options)
</pre>
Specifies docking behavior (animated, nested, tabbed, ...)
<pre class="code">void MainWindow::createDockWidget() {
QDockWidget *dock = new QDockWidget(tr("Title"), this);
dock-&gt;setAllowedAreas(Qt::LeftDockWidgetArea);
QListWidget *widget = new QListWidget(dock);
dock-&gt;setWidget(widget);
addDockWidget(Qt::LeftDockWidgetArea, dock);
  ...
</pre>
<b>MDIAREA EXAMPLE</b>
<pre class="codes"><pre class="code" style="display:inline">&lt;*.pro&gt;</pre>
QT+=widgets
<pre class="code" style="display:inline">&lt;widget.h&gt;</pre>
#ifndef WIDGET_H
#define WIDGET_H
#include &lt;QWidget&gt;
#include &lt;QPainter&gt;
#include &lt;QString&gt;
class QPaintEvent;

class widget:public QWidget {
Q_OBJECT
public:
widget(QWidget *p=0,const QString&amp; textp=""):QWidget(p),text(textp){}
void settext(const QString tp) {
text=tp;
}
private:
QString text;
protected:
void paintEvent(QPaintEvent *e) {
QWidget::paintEvent(e);
QPainter p(this);
p.drawText(rect().width()/2,rect().height()/2,text);
}
};
#endif
<pre class="code" style="display:inline">&lt;mainwindow.h&gt;</pre>
#ifndef MAINWINDOW_H
#define MAINWINDOW_H
#include &lt;QMainWindow&gt;
class QMdiArea;
class QListWidget;

class mainwindow:public QMainWindow {
Q_OBJECT
public:
mainwindow(QMainWindow *p=0);
private slots:
void itemclck();
private:
QMdiArea *ma;
QListWidget *lw;
};
#endif
<pre class="code" style="display:inline">&lt;mainwindow.c&gt;</pre>
#include &lt;QWidget&gt;
</pre><pre class=codes>#include &lt;QListWidget&gt;
#include &lt;QDockWidget&gt;
#include &lt;QMdiArea&gt;
#include &lt;QDebug&gt;
#include "mainwindow.h"
#include "widget.h"

mainwindow::mainwindow(QMainWindow *p):QMainWindow(p){
ma=new QMdiArea;
lw=new QListWidget(this);
QDockWidget *dw=new QDockWidget;
dw-&gt;setAllowedAreas(Qt::LeftDockWidgetArea|Qt::RightDockWidgetArea);
dw-&gt;setWidget(lw);
addDockWidget(Qt::LeftDockWidgetArea,dw);

lw-&gt;addItem(new QListWidgetItem(tr("one")));
lw-&gt;addItem(new QListWidgetItem(tr("two")));
lw-&gt;addItem(new QListWidgetItem(tr("three")));

ma-&gt;addSubWindow(new widget(ma,"first"));
ma-&gt;addSubWindow(new widget(ma,"second"));
ma-&gt;addSubWindow(new widget(ma,"third"));

ma-&gt;tileSubWindows();
//ma-&gt;cascadeSubWindows();
setCentralWidget(ma);
setFixedSize(width(),height());
connect(lw,SIGNAL(itemClicked(QListWidgetItem*)),this,SLOT(itemclck()));
}
void mainwindow::itemclck() {
qDebug()&lt;&lt;lw-&gt;currentRow();
ma-&gt;setActiveSubWindow(ma-&gt;subWindowList().at(lw-&gt;currentRow()));
}
<pre class="code" style="display:inline">&lt;main.cpp&gt;</pre>
#include &lt;QApplication&gt;
#include "mainwindow.h"

int main(int argc, char *argv[]) {
QApplication a(argc, argv);
mainwindow m;
m.show();
return a.exec();
}
</pre><pre style="clear:both"></pre>OUTPUT
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main5" class="pn">p41</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<img class="img" src="http://minhinc.com/image/qt-slide-qmainwindow_mdi.png" />

<b>STACKED EXAMPLE</b>
<pre class="codes"><pre class="code" style="display:inline">&lt;*.pro&gt;</pre>
QT += widgets

&lt;main.cpp&gt;
#include &lt;QApplication&gt;
#include "mainwindow.h"

int main(int argc, char *argv[]) {
QApplication a(argc, argv);
mainwindow m;
m.show();
return a.exec();
}

<pre class="code" style="display:inline">&lt;mainwindow.cpp&gt;</pre>
#include &lt;QWidget&gt;
#include &lt;QListWidget&gt;
#include &lt;QDockWidget&gt;
#include &lt;QStackedLayout&gt;
#include &lt;QDebug&gt;
#include "mainwindow.h"
#include "widget.h"

mainwindow::mainwindow(QMainWindow *p):QMainWindow(p){
QDockWidget *dw=new QDockWidget;
lw=new QListWidget(dw);
dw-&gt;setAllowedAreas(Qt::LeftDockWidgetArea|Qt::RightDockWidgetArea);
dw-&gt;setWidget(lw);
addDockWidget(Qt::LeftDockWidgetArea,dw);

lw-&gt;addItem(new QListWidgetItem(tr("one")));
lw-&gt;addItem(new QListWidgetItem(tr("two")));
lw-&gt;addItem(new QListWidgetItem(tr("three")));

sl= new QStackedLayout;
sl-&gt;addWidget(new widget(this,"first"));
sl-&gt;addWidget(new widget(this,"second"));
sl-&gt;addWidget(new widget(this,"third"));

QWidget *w=new QWidget;
w-&gt;setLayout(sl);
setCentralWidget(w);
connect(lw,SIGNAL(itemClicked(QListWidgetItem*)),this,SLOT(itemclck()));
}
void mainwindow::itemclck() {
qDebug()&lt;&lt;lw-&gt;currentRow();
</pre><pre class=codes>sl-&gt;setCurrentIndex(lw-&gt;currentRow());
}

<pre class="code" style="display:inline">&lt;mainwindow.h&gt;</pre>
#ifndef MAINWINDOW_H
#define MAINWINDOW_H
#include &lt;QMainWindow&gt;
class QListWidget;
class QStackedLayout;

class mainwindow:public QMainWindow {
Q_OBJECT
public:
mainwindow(QMainWindow *p=0);
private slots:
void itemclck();
private:
QListWidget *lw;
QStackedLayout *sl;
};
#endif
<pre class="code" style="display:inline">&lt;widget.h&gt;</pre>
#ifndef WIDGET_H
#define WIDGET_H
#include &lt;QWidget&gt;
#include &lt;QPainter&gt;
#include &lt;QString&gt;
class QPaintEvent;
class widget:public QWidget {
Q_OBJECT
public:
widget(QWidget *p=0,const QString&amp; textp=""):QWidget(p),text(textp){}
private:
QString text;
protected:
void paintEvent(QPaintEvent *e) {
QWidget::paintEvent(e);
QPainter p(this);
p.drawText(rect().width()/2,rect().height()/2,text);
}
};
#endif
</pre><pre style="clear:both"></pre>OUTPUT
<img class="img" src="http://minhinc.com/image/qt-slide-qmainwindow_stacklyt.png" />

</pre> &nbsp;<div class="slideheader" style="height:205px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  5. Widgets</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Introduction to Widgets
</pre></li>   <li class="sml"><pre>Writing custom widget
</pre></li>   <li class="sml"><pre>QPainter and capabilites
- Drawing curves
- Drawing Pixmap
- Drawing Fonts
</pre></li>   <li class="sml"><pre>Event Processing and Paint Engine
</pre></li>   <li class="sml"><pre>MainWindow Widget
</pre></li>   <li class="big"><a name="chap5_5">Dialog widget</a></li>   <li class="sml"><pre>Tabify dock widget
</pre></li>   <li class="sml"><pre>Drag and drop
</pre></li>   <li class="sml"><pre>Applying Qt style sheet on Widgets</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

The QDialog class is the base class of dialog windows.

A dialog window is a top-level window mostly used for short-term tasks and brief 
communications with the user. QDialogs may be modal or modeless. QDialogs can 
provide a return value, and they can have default buttons. QDialogs can also have a 
QSizeGrip in their lower-right corner, using setSizeGripEnabled().
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main5" class="pn">p42</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">


</pre> &nbsp;<div class="slideheader" style="height:205px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  5. Widgets</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Introduction to Widgets
</pre></li>   <li class="sml"><pre>Writing custom widget
</pre></li>   <li class="sml"><pre>QPainter and capabilites
- Drawing curves
- Drawing Pixmap
- Drawing Fonts
</pre></li>   <li class="sml"><pre>Event Processing and Paint Engine
</pre></li>   <li class="sml"><pre>MainWindow Widget
</pre></li>   <li class="sml"><pre>Dialog widget
</pre></li>   <li class="big"><a name="chap5_6">Tabify dock widget</a></li>   <li class="sml"><pre>Drag and drop
</pre></li>   <li class="sml"><pre>Applying Qt style sheet on Widgets</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

A dock widget can be tabified on other dock widget with tabifyDockWidget function in
QMainWindow.

</pre> &nbsp;<div class="slideheader" style="height:205px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  5. Widgets</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Introduction to Widgets
</pre></li>   <li class="sml"><pre>Writing custom widget
</pre></li>   <li class="sml"><pre>QPainter and capabilites
- Drawing curves
- Drawing Pixmap
- Drawing Fonts
</pre></li>   <li class="sml"><pre>Event Processing and Paint Engine
</pre></li>   <li class="sml"><pre>MainWindow Widget
</pre></li>   <li class="sml"><pre>Dialog widget
</pre></li>   <li class="sml"><pre>Tabify dock widget
</pre></li>   <li class="big"><a name="chap5_7">Drag and drop</a></li>   <li class="sml"><pre>Applying Qt style sheet on Widgets</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

  - Drag and Drop is done through a drag and a drop site.
  - Drop site has to implement dragEnterEvent, dragMoveEvent and dropEvent
  - Dtag site has to implement mousePressEvent and MoseMoveEvent
  - Dragable data is encapsulated in QMideData and finaly in QDrag widget
<pre class="code"> ------------------
  |                |
  |                |------() mousePressEvent
  |                |------() mouseMoveEvent
  |                |------() dragEnterEvent
  |   &lt;DragDrop    |------() dragMoveEvent
  |    widge&gt;      |------() dropEvent
  |                |
  |                |
  ------------------
</pre>  &lt;&lt;listwidget.h&gt;&gt;
<pre class="codes"><pre class="code" style="display:inline">&lt;*.pro&gt;</pre>
QT+=widgets
RESOURCES = resource.qrc
<pre class="code" style="display:inline">&lt;resource.qrc&gt;</pre>
&lt;!DOCTYPE RCC&gt;&lt;RCC version="1.0"&gt;
&lt;qresource&gt;
&lt;file&gt;qt-slide-widget_drgdrpicon.png&lt;/file&gt;
&lt;/qresource&gt;
&lt;/RCC&gt;
<pre class="code" style="display:inline">&lt;listwidget.h&gt;</pre>
#ifndef LISTWIDGET_H
#define LISTWIDGET_H
#include &lt;QListWidget&gt;
struct QDragEnterEvent;
struct QDropEvent;
struct QMouseEvent;
struct QDragMoveEvent;

class listwidget:public QListWidget{
Q_OBJECT
public:
listwidget(QListWidget *p=0);
protected:
void mousePressEvent(QMouseEvent *e);
void mouseMoveEvent(QMouseEvent *e);
void dragEnterEvent(QDragEnterEvent *e);
void dragMoveEvent(QDragMoveEvent *e);
void dropEvent(QDropEvent *e);
private:
QPoint spos;
};
#endif
<pre class="code" style="display:inline">&lt;listwidget.cpp&gt;</pre>
#include &lt;QPixmap&gt;
#include &lt;QListWidgetItem&gt;
#include &lt;QPoint&gt;
#include &lt;QDragEnterEvent&gt;
#include &lt;QDragMoveEvent&gt;
#include &lt;QDropEvent&gt;
#include &lt;QMouseEvent&gt;
#include &lt;QDrag&gt;
#include &lt;QMimeData&gt;
#include &lt;QApplication&gt;
#include "listwidget.h"

listwidget::listwidget(QListWidget *p):QListWidget(p){
addItems(QStringList()&lt;&lt;"one"&lt;&lt;"two"&lt;&lt;"three");
setAcceptDrops(true);
}
void listwidget::mousePressEvent(QMouseEvent *e) {
if(e-&gt;button() == Qt::LeftButton) spos=e-&gt;pos();
QListWidget::mousePressEvent(e);
}

void listwidget::mouseMoveEvent(QMouseEvent *e){
QMimeData *mimedata;
QDrag *drag;
</pre><pre class=codes>QListWidgetItem *item;
if(e-&gt;buttons() &amp; Qt::LeftButton)
if((e-&gt;pos()-spos).manhattanLength() &gt;= QApplication::startDragDistance()){
item=currentItem();
if(item) {
mimedata=new QMimeData;
mimedata-&gt;setText(item-&gt;text());
drag=new QDrag(this);
drag-&gt;setMimeData(mimedata);
drag-&gt;setPixmap(QPixmap(":/qt-slide-widget_drgdrpicon.png"));
if(drag-&gt;exec(Qt::MoveAction) == Qt::MoveAction) delete item;
}
}
QListWidget::mouseMoveEvent(e);
}

void listwidget::dragEnterEvent(QDragEnterEvent* e){
listwidget* source=qobject_cast&lt;listwidget*&gt;(e-&gt;source());
if(source &amp;&amp; source != this){
e-&gt;setDropAction(Qt::MoveAction);
e-&gt;accept();
}
}

void listwidget::dragMoveEvent(QDragMoveEvent* e){
listwidget* source=qobject_cast&lt;listwidget*&gt;(e-&gt;source());
if(source &amp;&amp; source != this) {
e-&gt;setDropAction(Qt::MoveAction);
e-&gt;accept();
}
}

void listwidget::dropEvent(QDropEvent *e){
listwidget* source=qobject_cast&lt;listwidget*&gt;(e-&gt;source());
if(source &amp;&amp; source!= this){
addItem(e-&gt;mimeData()-&gt;text());
e-&gt;setDropAction(Qt::MoveAction);
e-&gt;accept();
}
}
<pre class="code" style="display:inline">&lt;main.cpp&gt;</pre>
#include &lt;QApplication&gt;
#include "listwidget.h"

int main(int argc, char *argv[]){
QApplication a(argc,argv);
listwidget l1;
listwidget l2;
l1.show();
l2.show();
return a.exec();
}
</pre><pre style="clear:both"></pre>OUTPUT
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main5" class="pn">p43</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<img class="img" src="http://minhinc.com/image/qt-slide-widget_drgdrpicon.png" />
<img class="img" src="http://minhinc.com/image/qt-slide-widget_drgdrp.png" />

</pre> &nbsp;<div class="slideheader" style="height:205px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  5. Widgets</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Introduction to Widgets
</pre></li>   <li class="sml"><pre>Writing custom widget
</pre></li>   <li class="sml"><pre>QPainter and capabilites
- Drawing curves
- Drawing Pixmap
- Drawing Fonts
</pre></li>   <li class="sml"><pre>Event Processing and Paint Engine
</pre></li>   <li class="sml"><pre>MainWindow Widget
</pre></li>   <li class="sml"><pre>Dialog widget
</pre></li>   <li class="sml"><pre>Tabify dock widget
</pre></li>   <li class="sml"><pre>Drag and drop
</pre></li>   <li class="big"><a name="chap5_8">Applying Qt style sheet on Widgets</a></li>
  </ul>
 </div>
<pre class="slidecontent">

Styles sheets are textual specifications that can be set on the whole application
using 
QApplication::setStyleSheet() or on a specific widget (and its children) using 
QWidget::setStyleSheet(). If several style sheets are set at different levels, Qt
derives the 
effective style sheet from all of those that are set. This is called cascading.

Ex.

QLineEdit { background: yellow }
QCheckBox { color: red }

<pre class="codes"><pre class="code" style="display:inline">&lt;.pro&gt;</pre>
QT+=widgets
# Input
RESOURCES += resource.qrc

<pre class="code" style="display:inline">&lt;main.cpp&gt;</pre>
#include &lt;QApplication&gt;
#include "mainwindow.h"

int main(int argc, char* argv[]){
QApplication a(argc, argv);
mainwindow mw;
mw.show();
return a.exec();
}

<pre class="code" style="display:inline">&lt;mainwindow.h&gt;</pre>
#ifndef MAINWINDOW_H
#define MAINWINDOW_H
#include &lt;QMainWindow&gt;
struct QDockWidget;
struct stylewidget;

struct mainwindow:QMainWindow{
mainwindow();
stylewidget* sw;
QDockWidget *ldw,*rdw;
private:
Q_OBJECT
};
#endif

<pre class="code" style="display:inline">&lt;stylewidget.h&gt;</pre>
fndef STYLEWIDGET_H
#define STYLEWIDGET_H
#include &lt;QWidget&gt;
#include &lt;QString&gt;
struct QLineEdit;
struct QComboBox;
struct QPushButton;
struct QListWidget;

struct stylewidget:QWidget{
stylewidget();
QComboBox* scb;
QComboBox* sscb;
QLineEdit* le;
QPushButton* pb;
QListWidget* lw;
private slots:
void slotscbactivated(const QString&amp;);
void slotsscbactivated(const QString&amp;);
private:
Q_OBJECT
};
#endif

<pre class="code" style="display:inline">&lt;mainwindow.cpp&gt;</pre>
#include &lt;QDockWidget&gt;
#include "mainwindow.h"
#include "stylewidget.h"

mainwindow::mainwindow(){
setCentralWidget(sw=new stylewidget);
addDockWidget(Qt::LeftDockWidgetArea,ldw=new QDockWidget);
addDockWidget(Qt::RightDockWidgetArea,rdw=new QDockWidget);
ldw-&gt;setAllowedAreas(Qt::LeftDockWidgetArea|Qt::RightDockWidgetArea);
rdw-&gt;setAllowedAreas(Qt::RightDockWidgetArea|Qt::LeftDockWidgetArea);
ldw-&gt;setWindowTitle("Left");
</pre><pre class=codes>rdw-&gt;setWindowTitle("Right");
}
<pre class="code" style="display:inline">&lt;stylewidget.cpp&gt;</pre>
#include &lt;QLineEdit&gt;
#include &lt;QPushButton&gt;
#include &lt;QListWidget&gt;
#include &lt;QLabel&gt;
#include &lt;QComboBox&gt;
#include &lt;QFile&gt;
#include &lt;QVBoxLayout&gt;
#include &lt;QHBoxLayout&gt;
#include &lt;QApplication&gt;
#include &lt;QStyleFactory&gt;
#include &lt;QDebug&gt;
#include "stylewidget.h"

stylewidget::stylewidget(){
QVBoxLayout* vlt=new QVBoxLayout;
QHBoxLayout* chlt=new QHBoxLayout;
chlt-&gt;addWidget(scb=new QComboBox);
chlt-&gt;addWidget(sscb=new QComboBox);
vlt-&gt;addLayout(chlt);
QHBoxLayout* hlt=new QHBoxLayout;
hlt-&gt;addWidget(le=new QLineEdit);
hlt-&gt;addWidget(pb=new QPushButton("click"));
vlt-&gt;addLayout(hlt);
vlt-&gt;addWidget(lw=new QListWidget);
lw-&gt;addItem("one");
lw-&gt;addItem("two");
lw-&gt;addItem("three");
setLayout(vlt);
lw-&gt;setCurrentRow(0);
QRegExp regex(".(.*)\+?Style");
QString defaultstyle=QApplication::style()-&gt;metaObject()-&gt;className();
qDebug()&lt;&lt;defaultstyle;
if(regex.exactMatch(defaultstyle))
defaultstyle=regex.cap(1);
qDebug()&lt;&lt;defaultstyle;

scb-&gt;addItems(QStyleFactory::keys());
scb-&gt;setCurrentIndex(scb-&gt;findText(defaultstyle, Qt::MatchContains));

sscb-&gt;addItems(QStringList()&lt;&lt;"Default"&lt;&lt;"Style");

sscb-&gt;setCurrentIndex(sscb-&gt;findText("Default"));
connect(scb,SIGNAL(activated(QString)),this,SLOT(slotscbactivated(QString)));
connect(sscb,SIGNAL(activated(QString)),this,SLOT(slotsscbactivated(QString)));
}
void stylewidget::slotscbactivated(const QString&amp; stylename){
qApp-&gt;setStyle(stylename);
}
void stylewidget::slotsscbactivated(const QString&amp; stylesheetname){
QFile file(":/"+stylesheetname.toLower() + ".qss");
file.open(QIODevice::ReadOnly);
qApp-&gt;setStyleSheet(file.readAll());
}
<pre class="code" style="display:inline">&lt;default.css&gt;</pre>
/* empty stylesheet */


<pre class="code" style="display:inline">style.qss</pre>
QLineEdit {
background-color : palegoldenrod;
}
QLabel {
font:'Tw Cen Mt';
}
QPushButton {
background-color : wheat;
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main" class="pn">p44</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="codes">}
QListWidget {
background-color : wheat;
}
<pre class="code" style="display:inline">resource.qrc</pre>
&lt;!DOCTYPE RCC&gt;&lt;RCC version="1.0"&gt;
 &lt;qresource&gt;
  &lt;file&gt;style.qss&lt;/file&gt;
  &lt;file&gt;default.qss&lt;/file&gt;
 &lt;/qresource&gt;
&lt;/RCC&gt;
</pre><pre style="clear:both"></pre>OUTPUT
<img class="img" src="http://minhinc.com/image/qt-slide-widget_style.png" />
<img class="img" src="http://minhinc.com/image/qt-slide-widget_stylesheet.png" />
<img class="img" src="http://minhinc.com/image/qt-slide-widget_stylesheet2.png" />

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main5" class="pn">p45</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap6">&nbsp;<div class="slideheader" style="height:175px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  6. QPainter and Image management</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap6_0">QPainter and capabilities</a></li>   <li class="sml"><pre>Using QPainter with OpenGL functions
</pre></li>   <li class="sml"><pre>Image handling Qt
</pre></li>   <li class="sml"><pre>Classes for Image Handling (QImage, QPixmap, 
QBitMap etc)
</pre></li>   <li class="sml"><pre>I/O with Image Files
</pre></li>   <li class="sml"><pre>Pixel Handling
</pre></li>   <li class="sml"><pre>Image Transformation
</pre></li>   <li class="sml"><pre>OpenGL 3D Painting</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

QPainter provides highly optimized functions to do most of the drawing GUI programs
require. It has three drawing capabilities.
a) Pen
   QPen(const QBrush &amp; brush, qreal width, Qt::PenStyle style = Qt::SolidLine,
   Qt::PenCapStyle cap = Qt::SquareCap, Qt::PenJoinStyle join = Qt::BevelJoin)
b) Brush
   QBrush(const QColor &amp; color, Qt::BrushStyle style = Qt::SolidPattern)
c) Font
   QFont(const QString &amp; family, int pointSize=-1, int weight = -1, bool italic=false)

</pre> &nbsp;<div class="slideheader" style="height:175px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  6. QPainter and Image management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>QPainter and capabilities
</pre></li>   <li class="big"><a name="chap6_1">Using QPainter with OpenGL functions</a></li>   <li class="sml"><pre>Image handling Qt
</pre></li>   <li class="sml"><pre>Classes for Image Handling (QImage, QPixmap, 
QBitMap etc)
</pre></li>   <li class="sml"><pre>I/O with Image Files
</pre></li>   <li class="sml"><pre>Pixel Handling
</pre></li>   <li class="sml"><pre>Image Transformation
</pre></li>   <li class="sml"><pre>OpenGL 3D Painting</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

- OpenGL gl library functions can be called along with 2D QPainter painting. Derive
from QGLWidget or QOpenGLWidget which inturn creates OpenGL Context.
- Use paintGL() function for QPainter to draw its primitive within begin() and end()
function.
- Call opengl function in paintGL() within beginNativePainting() and
endNativePainting().
- Other than initilizeGL(), resizeGL() and paintGL() opengGL context has to be
mentioned explicitly by calling makeCurrent() and doneCurrent().

<pre class="codes"><pre class="code" style="display:inline">&lt;.pro&gt;</pre>
QT+= widgets opengl

<pre class="code" style="display:inline">&lt;main.cpp&gt;</pre>
#include &lt;QApplication&gt;
#include "cube.h"

int main(int argc, char *argv[]){
QApplication a(argc, argv);

cube vc;
vc.show();
return a.exec();
}

<pre class="code" style="display:inline">&lt;cube.h&gt;</pre>
#ifndef CUBE_H
#define CUBE_H

#include &lt;QRadialGradient&gt;
class QMouseEvent;
class QWheelEvent;
class QPainter;

#include &lt;QGLWidget&gt;
class cube : public QGLWidget
{
 Q_OBJECT
public:
 cube(QWidget *parent = 0);
 ~cube();
protected:
 void paintEvent(QPaintEvent *event);
 void mousePressEvent(QMouseEvent *event);
private:
 void createGradient();
 void createGLObject();
 void drawBackground(QPainter *painter);
 void drawCube();
 void drawLegend(QPainter *painter);
 GLuint glObject;
 QRadialGradient gradient;
 GLfloat rotationX;
 GLfloat rotationY;
 GLfloat rotationZ;
 GLfloat scaling;
 QPoint lastPos;
};
#endif
<pre class="code" style="display:inline">&lt;cube.cpp&gt;</pre>
#include &lt;qmath.h&gt;
#include &lt;QTextDocument&gt;
#include &lt;QPainter&gt;
#include &lt;QWheelEvent&gt;
#include &lt;QMouseEvent&gt;
#include "cube.h"

cube::cube(QWidget *parent)
: QGLWidget(parent) {
setFormat(QGLFormat(QGL::SampleBuffers));
rotationX = -38.0;
rotationY = -58.0;
rotationZ = 0.0;
scaling = 1.0;
createGradient();
createGLObject();
</pre><pre class=codes>}

cube::~cube() {
makeCurrent();
glDeleteLists(glObject, 1);
}

void cube::paintEvent(QPaintEvent * /* event */) {
QPainter painter(this);
drawBackground(&amp;painter);
painter.beginNativePainting();
drawCube();
painter.endNativePainting();
drawLegend(&amp;painter);
}

void cube::drawBackground(QPainter *painter)
{
painter-&gt;setPen(Qt::NoPen);
painter-&gt;setBrush(gradient);
painter-&gt;drawRect(rect());
}

void cube::drawCube() {
glPushAttrib(GL_ALL_ATTRIB_BITS);
glMatrixMode(GL_PROJECTION);
glPushMatrix();
glLoadIdentity();
GLfloat x = 3.0 * GLfloat(width()) / height();
glOrtho(-x, +x, -3.0, +3.0, 4.0, 15.0);
glMatrixMode(GL_MODELVIEW);
glPushMatrix();
glLoadIdentity();
glTranslatef(0.0, 0.0, -10.0);
glScalef(scaling, scaling, scaling);
glRotatef(rotationX, 1.0, 0.0, 0.0);
glRotatef(rotationY, 0.0, 1.0, 0.0);
glRotatef(rotationZ, 0.0, 0.0, 1.0);
glEnable(GL_MULTISAMPLE);
setFont(QFont("Times", 24));
qglColor(QColor(255, 223, 127));
glCallList(glObject);

glMatrixMode(GL_MODELVIEW);
glPopMatrix();
glMatrixMode(GL_PROJECTION);
glPopMatrix();
glPopAttrib();
}

void cube::createGradient() {
gradient.setCoordinateMode(QGradient::ObjectBoundingMode);
gradient.setCenter(0.45, 0.50);
gradient.setFocalPoint(0.40, 0.45);
gradient.setColorAt(0.0, QColor(105, 146, 182));
gradient.setColorAt(0.4, QColor(81, 113, 150));
gradient.setColorAt(0.8, QColor(16, 56, 121));
}

void cube::createGLObject() {
makeCurrent();
glShadeModel(GL_FLAT);
glObject = glGenLists(1);
glNewList(glObject, GL_COMPILE);
qglColor(QColor(255, 239, 191));
glLineWidth(1.0);
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main" class="pn">p46</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="codes">glBegin(GL_LINES);
glVertex3f(1.0,1.0,-1.0);
glVertex3f(-1.0,1.0,-1.0);
glVertex3f(-1.0,1.0,-1.0);
glVertex3f(-1.0,-1.0,-1.0);
glVertex3f(-1.0,-1.0,-1.0);
glVertex3f(1.0,-1.0,-1.0);
glVertex3f(1.0,-1.0,-1.0);
glVertex3f(1.0,1.0,-1.0);

glVertex3f(-1.0,1.0,-1.0);
glVertex3f(-1.0,1.0,1.0);
glVertex3f(-1.0,1.0,1.0);
glVertex3f(-1.0,-1.0,1.0);
glVertex3f(-1.0,-1.0,1.0);
glVertex3f(-1.0,-1.0,-1.0);
glVertex3f(-1.0,-1.0,-1.0);
glVertex3f(-1.0,1.0,-1.0);

glVertex3f(-1.0,1.0,1.0);
glVertex3f(-1.0,-1.0,1.0);
glVertex3f(-1.0,-1.0,1.0);
glVertex3f(1.0,-1.0,1.0);
glVertex3f(1.0,-1.0,1.0);
glVertex3f(1.0,1.0,1.0);
glVertex3f(1.0,1.0,1.0);
glVertex3f(-1.0,1.0,1.0); 
glVertex3f(1.0,1.0,1.0);
glVertex3f(1.0,-1.0,1.0);
glVertex3f(1.0,-1.0,1.0);
glVertex3f(1.0,-1.0,-1.0);
glVertex3f(1.0,-1.0,-1.0);
glVertex3f(1.0,1.0,-1.0);
glVertex3f(1.0,1.0,-1.0);
</pre><pre class=codes>glVertex3f(1.0,1.0,1.0);

glEnd();
glEndList();
doneCurrent();
}

void cube::drawLegend(QPainter *painter) {
const int Margin = 11;
const int Padding = 6;
QTextDocument textDocument;
textDocument.setDefaultStyleSheet("* { color: #FFEFEF }");
textDocument.setHtml("&lt;h4 align="center"&gt;OpenGL + QPainter&lt;/h4&gt;"
"&lt;p align="center"&gt;This example issustrates OpenGL and QPainter drawing
together&lt;/p&gt;");
textDocument.setTextWidth(textDocument.size().width());
QRect rect(QPoint(0, 0), textDocument.size().toSize()
+ QSize(2 * Padding, 2 * Padding));
painter-&gt;translate(width() - rect.width() - Margin,0);
//height() - rect.height() - Margin);
painter-&gt;setPen(QColor(255, 239, 239));
painter-&gt;setBrush(QColor(255, 0, 0, 31));
painter-&gt;drawRect(rect);
painter-&gt;translate(Padding, Padding);
textDocument.drawContents(painter);
}
void cube::mousePressEvent(QMouseEvent* e){
    QGLWidget::mousePressEvent(e);
    rotationX+=10;
    rotationY+=10;
    rotationZ+=10;
    update();
}
</pre><pre style="clear:both"></pre>OUTPUT
<img class="img" src="http://www.minhinc.com/image/qt-slide-qpainteropengl.gif" />

</pre> &nbsp;<div class="slideheader" style="height:197px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  6. QPainter and Image management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>QPainter and capabilities
</pre></li>   <li class="sml"><pre>Using QPainter with OpenGL functions
</pre></li>   <li class="big"><a name="chap6_2">Image handling Qt<br></a></li>   <li class="big"><a name="chap6_2">Classes for Image Handling (QImage, QPixmap, <br>QBitMap etc)</a></li>   <li class="sml"><pre>I/O with Image Files
</pre></li>   <li class="sml"><pre>Pixel Handling
</pre></li>   <li class="sml"><pre>Image Transformation
</pre></li>   <li class="sml"><pre>OpenGL 3D Painting</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

- The QImage class provides a hardware-independent image representation which is
designed and optimized for I/O, and for direct pixel access and manipulation.
- The QPixmap class is an off-screen image representation which is designed and
optimized for showing images on screen. Unlike QImage, the pixel data in a pixmap is
internal and is managed by the underlying window system.
- The QBitmap is only a convenience class that inherits QPixmap, ensuring a depth of
1. 
- The QPicture class is a paint device that records and replays QPainter commands.

<pre class="code"> // Specfiy semi-transparent red
      painter.setBrush(QColor(255, 0, 0, 127));
      painter.drawRect(0, 0, width()/2, height());
      // Specify semi-transparent blue
      painter.setBrush(QColor(0, 0, 255, 127));
      painter.drawRect(0, 0, width(), height()/2);
</pre>
<img class="img" src="http://minhinc.com/image/qt-slide-qtblending.png" />

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p47</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:175px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  6. QPainter and Image management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>QPainter and capabilities
</pre></li>   <li class="sml"><pre>Using QPainter with OpenGL functions
</pre></li>   <li class="sml"><pre>Image handling Qt
</pre></li>   <li class="sml"><pre>Classes for Image Handling (QImage, QPixmap, 
QBitMap etc)
</pre></li>   <li class="big"><a name="chap6_3">I/O with Image Files</a></li>   <li class="sml"><pre>Pixel Handling
</pre></li>   <li class="sml"><pre>Image Transformation
</pre></li>   <li class="sml"><pre>OpenGL 3D Painting</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

QImage provides several ways of loading an image file: 
The file can be loaded when constructing the QImage object, 
or by using the load() or loadFromData() functions later on.

QImage also provides the static fromData() function, 
constructing a QImage from the given data. 

Call the save() function to save a QImage object.

</pre> &nbsp;<div class="slideheader" style="height:175px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  6. QPainter and Image management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>QPainter and capabilities
</pre></li>   <li class="sml"><pre>Using QPainter with OpenGL functions
</pre></li>   <li class="sml"><pre>Image handling Qt
</pre></li>   <li class="sml"><pre>Classes for Image Handling (QImage, QPixmap, 
QBitMap etc)
</pre></li>   <li class="sml"><pre>I/O with Image Files
</pre></li>   <li class="big"><a name="chap6_4">Pixel Handling</a></li>   <li class="sml"><pre>Image Transformation
</pre></li>   <li class="sml"><pre>OpenGL 3D Painting</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

<pre class="codes">QImage::QImage(int width, int height, Format format)

Constant	Value	Description
QImage::Format_Invalid	0	The image is invalid.
QImage::Format_Mono	1	The image is stored using 1-bit per pixel. Bytes are packed with
the 
                                  most significant bit (MSB) first.
QImage::Format_MonoLSB	2	The image is stored using 1-bit per pixel. Bytes are packed
with the 
                                  less significant bit (LSB) first.
QImage::Format_Indexed8	3	The image is stored using 8-bit indexes into a colormap.
QImage::Format_RGB32	4	The image is stored using a 32-bit RGB format (0xffRRGGBB).
QImage::Format_ARGB32	5	The image is stored using a 32-bit ARGB format (0xAARRGGBB).
QImage::Format_ARGB32_Premultiplied	6	The image is stored using a premultiplied 32-bit

                                  ARGB format (0xAARRGGBB), i.e. the red, green, and
blue channels are 
                                  multiplied by the alpha component divided by 255.
(If RR, GG, or BB has a 
                                  higher value than the alpha channel, the results are
undefined.) Certain 
                                  operations (such as image composition using alpha
blending) are faster 
                                  using premultiplied ARGB32 than with plain ARGB32.
QImage::Format_RGB16	7	The image is stored using a 16-bit RGB format (5-6-5).
QImage::Format_ARGB8565_Premultiplied	8	The image is stored using a premultiplied
24-bit ARGB format (8-5-6-5).
QImage::Format_RGB666	9	The image is stored using a 24-bit RGB format (6-6-6). The
unused most significant 
                                  bits is always zero.
</pre><pre class=codes>QImage::Format_ARGB6666_Premultiplied	10	The image is stored using a premultiplied
24-bit ARGB format (6-6-6-6).
QImage::Format_RGB555	11	The image is stored using a 16-bit RGB format (5-5-5). The
unused most 
                                  significant bit is always zero.
QImage::Format_ARGB8555_Premultiplied	12	The image is stored using a premultiplied
24-bit ARGB format (8-5-5-5).
QImage::Format_RGB888	13	The image is stored using a 24-bit RGB format (8-8-8).
QImage::Format_RGB444	14	The image is stored using a 16-bit RGB format (4-4-4). The
unused bits are always zero.
QImage::Format_ARGB4444_Premultiplied	15	The image is stored using a premultiplied
16-bit ARGB format (4-4-4-4).
QImage::Format_RGBX8888	16	The image is stored using a 32-bit byte-ordered RGB(x)
format (8-8-8-8). This is 
                                  the same as the Format_RGBA8888 except alpha must
always be 255.
QImage::Format_RGBA8888	17	The image is stored using a 32-bit byte-ordered RGBA format
(8-8-8-8). Unlike ARGB32 
                                  this is a byte-ordered format, which means the 32bit
encoding differs between big 
                                  endian and little endian architectures, being
respectively (0xRRGGBBAA) and 
                                  (0xAABBGGRR). The order of the colors is the same on
any architecture if read as 
                                  bytes 0xRR,0xGG,0xBB,0xAA.
QImage::Format_RGBA8888_Premultiplied	18	The image is stored using a premultiplied
32-bit byte-ordered 
                                   RGBA format (8-8-8-8).
</pre><pre style="clear:both"></pre>
Value Based
<pre class="code">QImage image(3, 3, QImage::Format_RGB32);
QRgb value;

value = qRgb(189, 149, 39); // 0xffbd9527
image.setPixel(1, 1, value);

value = qRgb(122, 163, 39); // 0xff7aa327
image.setPixel(0, 1, value);
image.setPixel(1, 0, value);

value = qRgb(237, 187, 51); // 0xffedba31
image.setPixel(2, 1, value);
</pre>
<img class="img" src="http://minhinc.com/image/qt-slide-qimage.png" />

<pre class="code">Index Based
QImage image(3, 3, QImage::Format_Indexed8);
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p48</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">QRgb value;

value = qRgb(122, 163, 39); // 0xff7aa327
image.setColor(0, value);

value = qRgb(237, 187, 51); // 0xffedba31
image.setColor(1, value);

value = qRgb(189, 149, 39); // 0xffbd9527
image.setColor(2, value);

image.setPixel(0, 1, 0);
image.setPixel(1, 0, 0);
image.setPixel(1, 1, 2);
image.setPixel(2, 1, 1);
</pre>
<img class="img" src="http://minhinc.com/image/qt-slide-qpixmap.png" />

</pre> &nbsp;<div class="slideheader" style="height:175px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  6. QPainter and Image management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>QPainter and capabilities
</pre></li>   <li class="sml"><pre>Using QPainter with OpenGL functions
</pre></li>   <li class="sml"><pre>Image handling Qt
</pre></li>   <li class="sml"><pre>Classes for Image Handling (QImage, QPixmap, 
QBitMap etc)
</pre></li>   <li class="sml"><pre>I/O with Image Files
</pre></li>   <li class="sml"><pre>Pixel Handling
</pre></li>   <li class="big"><a name="chap6_5">Image Transformation</a></li>   <li class="sml"><pre>OpenGL 3D Painting</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Transforming the original image
createAlphaMask() function builds and returns a 1-bpp mask from the alpha buffer in
this image

createHeuristicMask() function creates and returns a 1-bpp heuristic mask for this
image. 

mirrored() function returns a mirror of the image in the desired direction
scaled() returns a copy of the image scaled to a rectangle of the desired measures
rgbSwapped() function constructs a BGR image from a RGB image.

scaledToWidth() and scaledToHeight() functions return scaled copies of the image.

transformed() function returns a copy of the image that is transformed with the given 

  transformation matrix and transformation mode

trueMatrix() function returns the actual matrix used for transforming the image.

There are also functions for changing attributes of an image in-place:
<pre class="code">Function                                       Description
setDotsPerMeterX() Defines the aspect ratio by setting the number of pixels that fit
horizontally in a physical meter.
setDotsPerMeterY() Defines the aspect ratio by setting the number of pixels that fit
vertically in a physical meter.
fill()                      Fills the entire image with the given pixel value.
invertPixels()     Inverts all pixel values in the image using the given InvertMode
value.
setColorTable()    Sets the color table used to translate color indexes. Only
monochrome and 8-bit formats.
setColorCount()    Resizes the color table. Only monochrome and 8-bit formats.
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p49</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:175px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  6. QPainter and Image management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>QPainter and capabilities
</pre></li>   <li class="sml"><pre>Using QPainter with OpenGL functions
</pre></li>   <li class="sml"><pre>Image handling Qt
</pre></li>   <li class="sml"><pre>Classes for Image Handling (QImage, QPixmap, 
QBitMap etc)
</pre></li>   <li class="sml"><pre>I/O with Image Files
</pre></li>   <li class="sml"><pre>Pixel Handling
</pre></li>   <li class="sml"><pre>Image Transformation
</pre></li>   <li class="big"><a name="chap6_6">OpenGL 3D Painting</a></li>
  </ul>
 </div>
<pre class="slidecontent">

OpenGL in Qt
It used for 3D drawing, developed and maintained by silicon graphics.
In Qt provided through libOpenGL.
It can be implemented through QGLWidget, deriving from QWindow and 
QOpenGLFunction and through QGraphics views architecture.

QGLContext creates context and contains all buffers details. Many gl context 
can be created and only one can be active at a time with context-&gt;makeCurrent() 
funciton call.

QOpenGL returns its context with context().
QOpenGL provides three functions for initializing, resizing and drawing.
       initializeGL(), resizeGL(), paintGL()
      
Procedures
          - Position the camera, fix the scene
          - Place the model (object)
          - Set the projection
          - Viewport
<pre class="codes"><pre class="code" style="display:inline">&lt;*.pro&gt;</pre>
QT += opengl

<pre class="code" style="display:inline">&lt;main.cpp&gt;</pre>
#include &lt;QApplication&gt;
#include "myglwidget.h"
int main(int argc, char *argv[])
{
QApplication a(argc, argv);
MyGLWidget w;
w.resize(800,600);
w.show();
return a.exec();
}

<pre class="code" style="display:inline">&lt;myglwidget.h&gt;</pre>
#ifndef MYGLWIDGET_H
#define MYGLWIDGET_H
#include &lt;QGLWidget&gt;
class MyGLWidget : public QGLWidget{
//signal slot
Q_OBJECT
public:
MyGLWidget(QWidget *parent = NULL)
: QGLWidget(parent) {}
protected:
// Set up the rendering context, define display lists etc.:
void initializeGL();
// draw the scene:
void paintGL();
// setup viewport, projection etc.:
void resizeGL (int width, int height);
};
#endif
<pre class="code" style="display:inline">&lt;myglwidget.cpp&gt;</pre>
#include "myglwidget.h"
//first funciton to be called
void MyGLWidget::initializeGL(){
glClearColor(0.0,1.0,0.0,0.0);
glShadeModel(GL_FLAT);
glEnable(GL_DEPTH_TEST);
}
// setup viewport and projection
void MyGLWidget::resizeGL (int width, int height){
glViewport( 0, 0, (GLint)width, (GLint)height );
glMatrixMode(GL_PROJECTION);
glLoadIdentity();
glFrustum( -1.0, 1.0, -1.0, 1.0, 5.0, 30.0);
//glOrtho( -2.0, 2.0, -2.0, 2.0, 5.0, 30.0);
glMatrixMode( GL_MODELVIEW );
}

</pre><pre class=codes>void MyGLWidget::paintGL(){
glClear(GL_COLOR_BUFFER_BIT|GL_DEPTH_BUFFER_BIT);
glMatrixMode(GL_MODELVIEW);
glLoadIdentity();
glTranslatef(0.0f,0.0f,-20.0f);
glRotatef(30.0,0.0,1.0,0.0);
glRotatef(15.0,1.0,0.0,0.0);
glBegin(GL_QUADS);
glColor3f(0.0,1.0,0.0);
glVertex3f(1.0,1.0,-1.0);
glVertex3f(-1.0,1.0,-1.0);
glVertex3f(-1.0,-1.0,-1.0);
glVertex3f(1.0,-1.0,-1.0);

glColor3f(1.0,1.0,0.0);
glVertex3f(-1.0,1.0,1.0);
glVertex3f(-1.0,-1.0,1.0);
glVertex3f(-1.0,-1.0,-1.0);
glVertex3f(-1.0,1.0,-1.0);


glColor3f(1.0,0.0,0.0);
glVertex3f(1.0,1.0,1.0);
glVertex3f(-1.0,1.0,1.0);
glVertex3f(-1.0,-1.0,1.0);
glVertex3f(1.0,-1.0,1.0);

glColor3f(1.0,0.0,1.0);
glVertex3f(1.0,1.0,1.0);
glVertex3f(1.0,-1.0,1.0);
glVertex3f(1.0,-1.0,-1.0);
glVertex3f(1.0,1.0,-1.0);

glColor3f(0.0,0.0,1.0);
glVertex3f(-1.0,1.0,1.0);
glVertex3f(1.0,1.0,1.0);
glVertex3f(1.0,1.0,-1.0);
glVertex3f(-1.0,1.0,-1.0);

glColor3f(0.0,1.0,1.0);
glVertex3f(1.0,-1.0,1.0);
glVertex3f(1.0,-1.0,-1.0);
glVertex3f(-1.0,-1.0,-1.0);
glVertex3f(-1.0,-1.0,1.0);

glEnd();
}
</pre><pre style="clear:both"></pre>OUTPUT
<img class="img" src="http://www.minhinc.com/image/qt-slide-3daliased.gif" />

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p50</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap7">&nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  7. Layout Management</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap7_0">Layout Concepts</a></li>   <li class="sml"><pre>Laying Rows and Columns
</pre></li>   <li class="sml"><pre>Vertical and Horizontal Layout
</pre></li>   <li class="sml"><pre>Grid Layout
</pre></li>   <li class="sml"><pre>Form Layout
</pre></li>   <li class="sml"><pre>Stacked Layout
</pre></li>   <li class="sml"><pre>Anchor Layout</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

Goal of Layout:
 - Positioning of child widgets.
 - Sensible default sizes for windows.
 - Sensible minimum sizes for windows.
 - Resize handling.
 - Automatic updates when contents change:
   Font size, text or other contents of child widgets.
    Hiding or showing a child widget.
   Removal of child widgets.

Various Layout related classes
QWidget layouts
- QLayout The base class of geometry managers
 -+ QBoxLayout Lines up child widgets horizontally or vertically
    +QHBoxLayout Lines up widgets horizontally
    +QVBoxLayout Lines up widgets vertically
  +QStackedLayout Stack of widgets where only one widget is visible at a time
  +QFormLayout Manages forms of input widgets and their associated labels
  +QGridLayout Lays out widgets in a grid
QLayoutItem Abstract item that a QLayout manipulates
QSpacerItem Blank space in a layout
QWidgetItem Layout item that represents a widget

QGraphicsViews Layouts
QGraphicsAnchorLayout Layout where one can anchor widgets together in Graphics View
QGraphicsAnchor Represents an anchor between two items in a QGraphicsAnchorLayout
QLinearLayout

QSizePolicy Layout attribute describing horizontal and vertical resizing policy
QButtonGroup Container to organize groups of button widgets
QGroupBox Group box frame with a title
QStackedWidget Stack of widgets where only one widget is visible at a time

</pre> &nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  7. Layout Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Layout Concepts
</pre></li>   <li class="big"><a name="chap7_1">Laying Rows and Columns</a></li>   <li class="sml"><pre>Vertical and Horizontal Layout
</pre></li>   <li class="sml"><pre>Grid Layout
</pre></li>   <li class="sml"><pre>Form Layout
</pre></li>   <li class="sml"><pre>Stacked Layout
</pre></li>   <li class="sml"><pre>Anchor Layout</pre></li>
  </ul>
 </div>
<pre class="slidecontent">


QBoxLayout takes the space it gets (from its parent layout or from the 
parent Widget()), divides it up into a row of boxes, and makes each managed widget
fill 
one box.

If the QBoxLayout's orientation is Qt::Horizontal the boxes are placed in a row.

If the QBoxLayout's orientation is Qt::Vertical, the boxes are placed in a column.

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main7" class="pn">p51</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  7. Layout Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Layout Concepts
</pre></li>   <li class="sml"><pre>Laying Rows and Columns
</pre></li>   <li class="big"><a name="chap7_2">Vertical and Horizontal Layout</a></li>   <li class="sml"><pre>Grid Layout
</pre></li>   <li class="sml"><pre>Form Layout
</pre></li>   <li class="sml"><pre>Stacked Layout
</pre></li>   <li class="sml"><pre>Anchor Layout</pre></li>
  </ul>
 </div>
<pre class="slidecontent">


A QHBoxLayout lays out widgets in a horizontal row, from left to right (or right to
left for 
right-to-left languages).

<img class="img" src="http://minhinc.com/image/qt-slide-qhboxlayout.png" />
A QVBoxLayout lays out widgets in a vertical column, from top to bottom.
<img class="img" src="http://minhinc.com/image/qt-slide-qvboxlayout.png" />
<pre class="codes">// QT(+core gui widgets) TARGET(container) TEMPLATE(app) SOURCES(+container.cpp)/*
       +-------------------------------+
       |  ---------------------------  |
       |  | &lt;LABEL&gt;                 |  |
       |  | ....................... |  |
       |  | .&lt;Text&gt;               . |  |
       |  | .                     . |  |
       |  | .                     . |  |
       |  | .                     . |  |
       |  | .                     . |  |
       |  | .                     . |  |
       |  | ....................... |  |
       |  |                         |  |
       |  | ----------------------- |  |
       |  | | &lt;BUTTON&gt;  &lt;BUTTON&gt;  | |  |
       |  | ----------------------- |  |
       |  ---------------------------  |
       +-------------------------------+
*/

#include &lt;QApplication&gt;
#include &lt;QWidget&gt;
#include &lt;QHBoxLayout&gt;
#include &lt;QVBoxLayout&gt;
#include &lt;QLabel&gt;
</pre><pre class=codes>#include &lt;QTextEdit&gt;
#include &lt;QPushButton&gt;

int main(int argc, char *argv[]) {
QApplication a(argc, argv);
//container object is a container widget containing other widgets.
QWidget* container=new QWidget;
QLabel* label=new QLabel("Note",container);
QTextEdit* text=new QTextEdit(container);
QPushButton* clear=new QPushButton("clear",container);
QPushButton* save=new QPushButton("save",container);
//QVBoxLayout and QHBoxLayout are non widget layouts
QVBoxLayout* outer=new QVBoxLayout;
outer-&gt;addWidget(label);
outer-&gt;addWidget(text);
QHBoxLayout* inner=new QHBoxLayout;
inner-&gt;addWidget(clear);
inner-&gt;addWidget(save);
//push QHBoxLayout in QVBoxLayout as another entity in vertical order
outer-&gt;addLayout(inner);
container-&gt;setLayout(outer);
container-&gt;show();
return a.exec();
}
</pre><pre style="clear:both"></pre>OUTPUT
<img class="img" src="http://www.minhinc.com/image/qt-slide-layout.gif" />

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main7" class="pn">p52</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  7. Layout Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Layout Concepts
</pre></li>   <li class="sml"><pre>Laying Rows and Columns
</pre></li>   <li class="sml"><pre>Vertical and Horizontal Layout
</pre></li>   <li class="big"><a name="chap7_3">Grid Layout</a></li>   <li class="sml"><pre>Form Layout
</pre></li>   <li class="sml"><pre>Stacked Layout
</pre></li>   <li class="sml"><pre>Anchor Layout</pre></li>
  </ul>
 </div>
<pre class="slidecontent">


The QGridLayout class lays out widgets in a grid.
QGridLayout takes the space made available to it (by its parent layout or by the 
parentWidget()), divides it up into rows and columns, and puts each widget it 
manages into the correct cell.

Columns and rows behave identically; we will discuss columns, but there are equivalent

functions for rows.

Each column has a minimum width and a stretch factor. The minimum width is the 
greatest of that set using setColumnMinimumWidth() and the minimum width of 
each widget in that column. The stretch factor is set using setColumnStretch() and 
determines how much of the available space the column will get over and above its 
necessary minimum.

<img class="img" src="http://minhinc.com/image/qt-slide-qformlayout.png" />
<pre class="code">QFormLayout *formLayout = new QFormLayout;
formLayout-&gt;addRow(tr("&amp;Name:"), nameLineEdit);
formLayout-&gt;addRow(tr("&amp;Email:"), emailLineEdit);
formLayout-&gt;addRow(tr("&amp;Age:"), ageSpinBox);
setLayout(formLayout);
</pre>Same in Grid Layout
<pre class="code">nameLabel = new QLabel(tr("&amp;Name:"));
nameLabel-&gt;setBuddy(nameLineEdit);
emailLabel = new QLabel(tr("&amp;Name:"));
emailLabel-&gt;setBuddy(emailLineEdit);
ageLabel = new QLabel(tr("&amp;Name:"));
ageLabel-&gt;setBuddy(ageSpinBox);
QGridLayout *gridLayout = new QGridLayout;
gridLayout-&gt;addWidget(nameLabel, 0, 0);
gridLayout-&gt;addWidget(nameLineEdit, 0, 1);
gridLayout-&gt;addWidget(emailLabel, 1, 0);
gridLayout-&gt;addWidget(emailLineEdit, 1, 1);
gridLayout-&gt;addWidget(ageLabel, 2, 0);
gridLayout-&gt;addWidget(ageSpinBox, 2, 1);
setLayout(gridLayout);
</pre>
</pre> &nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  7. Layout Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Layout Concepts
</pre></li>   <li class="sml"><pre>Laying Rows and Columns
</pre></li>   <li class="sml"><pre>Vertical and Horizontal Layout
</pre></li>   <li class="sml"><pre>Grid Layout
</pre></li>   <li class="big"><a name="chap7_4">Form Layout</a></li>   <li class="sml"><pre>Stacked Layout
</pre></li>   <li class="sml"><pre>Anchor Layout</pre></li>
  </ul>
 </div>
<pre class="slidecontent">


</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main7" class="pn">p53</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  7. Layout Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Layout Concepts
</pre></li>   <li class="sml"><pre>Laying Rows and Columns
</pre></li>   <li class="sml"><pre>Vertical and Horizontal Layout
</pre></li>   <li class="sml"><pre>Grid Layout
</pre></li>   <li class="sml"><pre>Form Layout
</pre></li>   <li class="big"><a name="chap7_5">Stacked Layout</a></li>   <li class="sml"><pre>Anchor Layout</pre></li>
  </ul>
 </div>
<pre class="slidecontent">


The QStackedLayout class provides a stack of widgets where only one widget is 
visible at a time.
QStackedLayout can be used to create a user interface similar to the one provided by 
QTabWidget. There is also a convenience QStackedWidget class built on top of 
QStackedLayout.

A QStackedLayout can be populated with a number of child widgets ("pages"). 
For example:
<pre class="code">QWidget *firstPageWidget = new QWidget;
QWidget *secondPageWidget = new QWidget;
QWidget *thirdPageWidget = new QWidget;

QStackedLayout *stackedLayout = new QStackedLayout;
stackedLayout-&gt;addWidget(firstPageWidget);
stackedLayout-&gt;addWidget(secondPageWidget);
stackedLayout-&gt;addWidget(thirdPageWidget);

QVBoxLayout *mainLayout = new QVBoxLayout;
mainLayout-&gt;addLayout(stackedLayout);
setLayout(mainLayout);
</pre>
</pre> &nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  7. Layout Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Layout Concepts
</pre></li>   <li class="sml"><pre>Laying Rows and Columns
</pre></li>   <li class="sml"><pre>Vertical and Horizontal Layout
</pre></li>   <li class="sml"><pre>Grid Layout
</pre></li>   <li class="sml"><pre>Form Layout
</pre></li>   <li class="sml"><pre>Stacked Layout
</pre></li>   <li class="big"><a name="chap7_6">Anchor Layout</a></li>
  </ul>
 </div>
<pre class="slidecontent">


The QGraphicsAnchorLayout class provides a layout where one can anchor widgets 
together in Graphics View.

The anchor layout allows developers to specify how widgets should be placed relative 
to each other, and to the layout itself. The specification is made by adding anchors
to 
the layout by calling addAnchor(), addAnchors() or addCornerAnchors().

Existing anchors in the layout can be accessed with the anchor() function. Items 
that are anchored are automatically added to the layout, and if items are removed, all

their anchors will be automatically removed.
<img class="img" src="http://minhinc.com/image/qt-slide-qanchorlayout.png" />
Anchors are always set up between edges of an item, where the "center" 
is also considered to be an edge. Consider the following example:

<pre class="code">layout-&gt;addAnchor(b, Qt::AnchorLeft, a, Qt::AnchorRight);
layout-&gt;addAnchor(b, Qt::AnchorTop, a, Qt::AnchorBottom);
</pre>
Here, the right edge of item a is anchored to the left edge of item 
b and the bottom edge of item a is anchored to the top edge of item b, 
with the result that item b will be placed diagonally to the right and 
below item b.

</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main7" class="pn">p54</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
The addCornerAnchors() function provides a simpler way of anchoring 
the corners of two widgets than the two individual calls to addAnchor() 
shown in the code above. Here, we see how a widget can be anchored 
to the top-left corner of the enclosing layout:

layout-&gt;addCornerAnchors(a, Qt::TopLeftCorner, layout, Qt::TopLeftCorner);

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main7" class="pn">p55</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap8">&nbsp;<div class="slideheader" style="height:177px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  8. Model View Controller(MVC)</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap8_0">Qt model view architecture<br>- QTableWidget and QTableView<br>- QAbstractItemModel QAbstractItemView</a></li>   <li class="sml"><pre>Predefined Model
</pre></li>   <li class="sml"><pre>Predefined Views
</pre></li>   <li class="sml"><pre>Proxy Model
</pre></li>   <li class="sml"><pre>Implementing custom delegates</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

The difference between standard and model/view widgets
The standard widgets involves widgets which include internal containers for storing
data.

<img class="img" src="http://minhinc.com/image/qt-slide-qwithoutmodelview.png" />
  Model/view widgets do not maintain internal data containers. They access
  external data through a standardized interface and therefore avoid data duplication.

<img class="img" src="http://minhinc.com/image/qt-slide-qmodelview.png" />
- View has to implement QAbstractItemView
- View has to aggregate QAbstractItemModel interface.
- Any instance of a class that implements QAbstractItemModel is said to be a model
- A delegate do the index ways rendering of the view and editing to the model.
  Delegate has to implement QAbstractItemDelegate

<img class="img" src="http://minhinc.com/image/qt-slide-qmodelviewdelegate.png" />
QTableWidget - Ready Made widget view that has a default internal Model. It can not
take extern model.

<pre class="code">tableWidget = new QTableWidget(12, 3, this);
or
tableWidget = new QTableWidget(this);
tableWidget-&gt;setRowCount(10);
tableWidget-&gt;setColumnCount(5);


QTableWidgetItem *newItem = new QTableWidgetItem(tr("%1").arg(
(row+1)*(column+1))); tableWidget-&gt;setItem(row, column, newItem);

QTableWidgetItem *cubesHeaderItem = new QTableWidgetItem(tr("Cubes"));
cubesHeaderItem-&gt;setIcon(QIcon(QPixmap(":/Images/cubed.png")));
cubesHeaderItem-&gt;setTextAlignment(Qt::AlignVCenter);
</pre>

QTableView - An QAbstractItemView class where delegatee and model can be set
externally.
<pre class="code">QStandardItemModel model(4, 2);
QTableView tableView;
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main8" class="pn">p56</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">tableView.setModel(&amp;model);

for (int row = 0; row &lt; 4; ++row) {
        for (int column = 0; column &lt; 2; ++column) {
            QModelIndex index = model.index(row, column, QModelIndex());
            model.setData(index, QVariant((row + 1) * (column + 1)));
        }
}
</pre>
- QAbstractItemModel, QAbstractItemView, QAbstractItemDelegate
<pre class="code">-----------------------
|                     |
|                     |--------() rowCount
|                     |--------() columnCount
|                     |--------() data()
| QAbstractTableModel |--------() setData()
|                     |--------() flags
|                     |
|                     |
|                     |
-----------------------


-----------------------
|                     |
|                     |----() createEditor() // Editor, index widget for view
|                     |----() setEditorData()//set view editor data,view rendering
|                     |----() setModelData() // set Model data, model editring
|QAbstractItemDelegate|----() updateEditorGeometry() // Change editor geometry
|                     |
|                     |
|                     |
-----------------------
</pre>
</pre> &nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  8. Model View Controller(MVC)</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Qt model view architecture
- QTableWidget and QTableView
- QAbstractItemModel QAbstractItemView
</pre></li>   <li class="big"><a name="chap8_1">Predefined Model</a></li>   <li class="sml"><pre>Predefined Views
</pre></li>   <li class="sml"><pre>Proxy Model
</pre></li>   <li class="sml"><pre>Implementing custom delegates</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

<img class="img" src="http://minhinc.com/image/qt-slide-qlisttabletree.png" />
List Models, QAbstractListModel
-Table Models are subclassed from QAbstractListModel.
- Various Tree Model available are QFileSystemModel.
   QFileSystemModel *model=new QFileSuystemModel;
   model-&gt;&lt;setRootPath(QDir::currentPath());
   QListView *list=new QTableView(splitter);
   list-&gt;setModel(model);
   
Table Models, QAbstractTableModel
-Table Models are subclassed from QAbstractTableModel.
- Various Tree Model available are QFileSystemModel.
   QFileSystemModel *model=new QFileSuystemModel;
   model-&gt;&lt;setRootPath(QDir::currentPath());
   QTableView *table=new QTableView(splitter);
   table-&gt;setModel(model);

Tree Models
-Tree Models are subclassed from QAbstractItemModel.
- Various Tree Model available are QFileSystemModel.
   QFileSystemModel *model=new QFileSuystemModel;
   model-&gt;&lt;setRootPath(QDir::currentPath());
   QTreeView *tree=new QTreeView(splitter);
   tree-&gt;setModel(model);

Other predefined Models
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main8" class="pn">p57</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
- QStringListModel

</pre> &nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  8. Model View Controller(MVC)</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Qt model view architecture
- QTableWidget and QTableView
- QAbstractItemModel QAbstractItemView
</pre></li>   <li class="sml"><pre>Predefined Model
</pre></li>   <li class="big"><a name="chap8_2">Predefined Views</a></li>   <li class="sml"><pre>Proxy Model
</pre></li>   <li class="sml"><pre>Implementing custom delegates</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

- Predefined Views
  - QColumnView
  - QHeaderView
  - QListView
  - QTableView
  - QTreeView

</pre> &nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  8. Model View Controller(MVC)</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Qt model view architecture
- QTableWidget and QTableView
- QAbstractItemModel QAbstractItemView
</pre></li>   <li class="sml"><pre>Predefined Model
</pre></li>   <li class="sml"><pre>Predefined Views
</pre></li>   <li class="big"><a name="chap8_3">Proxy Model</a></li>   <li class="sml"><pre>Implementing custom delegates</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Custom Models
- Custom models need to be subclassed from QAbstractItemModel.
- For QListView or QTableView QAbstractListModel or QAbstractTableModel needs to be
subclassed.
- QAbstractItemModel is basic has a table with rows and coloumns. Each entity in table
is idenfiied as item and has itemIndex assisciated.
- Hierarchy of tables is possible and each itemIndex can have siblings, parent and
children.
- Each item has number of data elemeents associated with it and they can be retrieved
by specifying a role to the model's data() function.
- Model has row count and column count for eacy level of hierarchy.
- When subclassing QAbstractItemModel, index(), parent(), rowCount(), columnCount()
and data() must be implemented.
- For Model/View architecture perspective where modifcation in model reflects at all
views requires

<pre class="code">&gt; insertRows()      beginInsertRows()        endInsertTows()
&gt; insertColumn()    beginInsertColumns()     endInsertColumns()
&gt; removeRows()      beginRemoveRows()        endRemoveRows()
&gt; removeColumns()   beginRemoveColumns()     endRemoveColumns()


-----------------------
|                     |
|                     |--------() rowCount
|                     |--------() columnCount
|                     |--------() data()
| QAbstractTableModel |--------() setData()
|                     |--------() flags
|                     |
|                     |
|                     |
-----------------------
</pre>
<pre class="codes"><pre class="code" style="display:inline">&lt;.pro&gt;</pre>
QT+=core widgets
TARGET=mv
TEMPLATES=app
SOURCES+=main.cpp model.cpp
HEADERS+=model.h

<pre class="code" style="display:inline">&lt;main.cpp&gt;</pre>
#include &lt;QApplication&gt;
#include &lt;QTableView&gt;
#include "model.h"

int main(int argc, char *argv[]) {
QApplication a(argc, argv);
QTableView tv;
QTableView tv1;
QTableView tv2;
model mdl;
tv.setModel(&amp;mdl);
tv1.setModel(&amp;mdl);
tv2.setModel(&amp;mdl);
tv.show();
tv1.show();
tv2.show();
return a.exec();
}

</pre><pre class=codes><pre class="code" style="display:inline">&lt;model.h&gt;</pre>
#ifndef MODEL_H
#define MODEL_H
#include &lt;QAbstractTableModel&gt;
#include &lt;QString&gt;
class model: public QAbstractTableModel{
Q_OBJECT
public:
model(QObject *parent=0);
int rowCount(const QModelIndex &amp;parent=QModelIndex()) const;
int columnCount(const QModelIndex &amp;parent = QModelIndex()) const;
QVariant data(const QModelIndex &amp;index, int role=Qt::DisplayRole) const;
bool setData(const QModelIndex &amp; index, const QVariant &amp; value, int role =
Qt::EditRole);
Qt::ItemFlags flags(const QModelIndex&amp; index) const;
static const int ROWS=2;
static const int COLS=3;
QString dt[ROWS][COLS];
};
#endif

<pre class="code" style="display:inline">&lt;model.cpp&gt;</pre>
#include &lt;QString&gt;
#include &lt;QVariant&gt;
#include "model.h"
model::model(QObject *parent):QAbstractTableModel(parent){}
int model::rowCount(const QModelIndex &amp;)const{
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main" class="pn">p58</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="codes">return ROWS;
}
int model::columnCount(const QModelIndex &amp;) const{
return COLS;
}
QVariant model::data(const QModelIndex &amp;index, int role)const {
if (role == Qt::DisplayRole)
return dt[index.row()][index.column()];
return QVariant();
}
bool model::setData(const QModelIndex &amp; index, const QVariant &amp; value, int role){
if(role==Qt::EditRole)
  dt[index.row()][index.column()]=value.toString();
  emit dataChanged(index,index);
  return true;
}
Qt::ItemFlags model::flags(const QModelIndex&amp; index) const{
 return Qt::ItemIsEditable | QAbstractTableModel::flags(index);
}
</pre><pre style="clear:both"></pre>OUTPUT
<img class="img" src="http://www.minhinc.com/image/qt-slide-mvc.gif" />

</pre> &nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  8. Model View Controller(MVC)</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Qt model view architecture
- QTableWidget and QTableView
- QAbstractItemModel QAbstractItemView
</pre></li>   <li class="sml"><pre>Predefined Model
</pre></li>   <li class="sml"><pre>Predefined Views
</pre></li>   <li class="sml"><pre>Proxy Model
</pre></li>   <li class="big"><a name="chap8_4">Implementing custom delegates</a></li>
  </ul>
 </div>
<pre class="slidecontent">

<pre class="code">-----------------------
|                     |
|                     |----() createEditor() // Editor, index widget for view
|                     |----() setEditorData()//set view editor data, view rendering
|                     |----() setModelData() // set Model data, model editring
|QAbstractItemDelegate|----() updateEditorGeometry() // Change editor geometry
|                     |
|                     |
|                     |
-----------------------
</pre>
<pre class="codes"><pre class="code" style="display:inline">&lt;*.pro&gt;</pre>
QT+=widgets
<pre class="code" style="display:inline">&lt;delegate.h&gt;</pre>
#ifndef DELEGATE_H
#define DELEGATE_H
#include &lt;QStyledItemDelegate&gt;
class spinboxdelegate : public QStyledItemDelegate{
Q_OBJECT
public:
spinboxdelegate(QObject *parent = 0);
QWidget *createEditor(QWidget *parent, const QStyleOptionViewItem &amp;option, const
QModelIndex &amp;index) const;
void setEditorData(QWidget *editor, const QModelIndex &amp;index) const;
void setModelData(QWidget *editor, QAbstractItemModel *model, const QModelIndex
&amp;index) const;
void updateEditorGeometry(QWidget *editor, const QStyleOptionViewItem &amp;option, const
QModelIndex &amp;index) const;
};
#endif
<pre class="code" style="display:inline">&lt;delegate.cpp&gt;</pre>
#include &lt;QSpinBox&gt;
#include &lt;QDebug&gt;
#include "delegate.h"
spinboxdelegate::spinboxdelegate(QObject *parent)
    : QStyledItemDelegate(parent) {
}
QWidget *spinboxdelegate::createEditor(QWidget *parent, const QStyleOptionViewItem &amp;,
const QModelIndex &amp;) const {
QSpinBox *editor = new QSpinBox(parent);
editor-&gt;setFrame(false);
editor-&gt;setMinimum(0);
editor-&gt;setMaximum(100);
return editor;
}
void spinboxdelegate::setEditorData(QWidget *editor, const QModelIndex &amp;index) const{
(static_cast&lt;QSpinBox*&gt;(editor))-&gt;setValue(index.model()-&gt;data(index,
Qt::EditRole).toInt());
}
void spinboxdelegate::setModelData(QWidget *editor, QAbstractItemModel *model, const
QModelIndex &amp;index) const {
QSpinBox *spinBox = static_cast&lt;QSpinBox*&gt;(editor);
spinBox-&gt;interpretText();
model-&gt;setData(index, spinBox-&gt;value(), Qt::EditRole);
}
void spinboxdelegate::updateEditorGeometry(QWidget *editor, const QStyleOptionViewItem
&amp;option, const QModelIndex &amp;) const {
editor-&gt;setGeometry(option.rect);
}
<pre class="code" style="display:inline">&lt;model.h&gt;</pre>
#ifndef MODEL_H
#define MODEL_H
#include &lt;QAbstractTableModel&gt;
#include &lt;QString&gt;
class model: public QAbstractTableModel{
Q_OBJECT
public:
model(QObject *parent=0);
int rowCount(const QModelIndex &amp;parent=QModelIndex()) const;
int columnCount(const QModelIndex &amp;parent = QModelIndex()) const;
QVariant data(const QModelIndex &amp;index, int role=Qt::DisplayRole) const;
bool setData(const QModelIndex &amp; index, const QVariant &amp; value, int role
=Qt::EditRole);
</pre><pre class=codes>Qt::ItemFlags flags(const QModelIndex&amp; index) const;
static const int ROWS=2;
static const int COLS=3;
QString dt[ROWS][COLS];
};
#endif
<pre class="code" style="display:inline">&lt;model.cpp&gt;</pre>
#include &lt;QString&gt;
#include &lt;QVariant&gt;
#include &lt;QDebug&gt;
#include "model.h"

model::model(QObject *parent):QAbstractTableModel(parent){
int i=0,j=0;
for (i=0;i&lt;ROWS;i++)
 for (j=0;j&lt;COLS;j++)
  dt[i][j]=QString("%1").arg(0);
}
int model::rowCount(const QModelIndex &amp;)const{
 return ROWS;
}
int model::columnCount(const QModelIndex &amp;) const{
 return COLS;
}
QVariant model::data(const QModelIndex &amp;index, int role)const {
if (role == Qt::DisplayRole || role== Qt::EditRole)
 return dt[index.row()][index.column()];
return QVariant();
}
bool model::setData(const QModelIndex &amp; index, const QVariant &amp; value, int role){
if(role==Qt::EditRole)
 dt[index.row()][index.column()]=value.toString();
emit dataChanged(index,index);
return true;
}

Qt::ItemFlags model::flags(const QModelIndex&amp; index) const{
 return Qt::ItemIsEditable | QAbstractTableModel::flags(index);
}
<pre class="code" style="display:inline">&lt;main.cpp&gt;</pre>
#include &lt;QApplication&gt;
#include &lt;QTableView&gt;
#include "model.h"
#include "delegate.h"

int main(int argc, char *argv[]) {
QApplication a(argc, argv);
QTableView tv,tv1;
spinboxdelegate dlg,dlg1;
model mdl;
tv.setModel(&amp;mdl);
tv.setItemDelegate(&amp;dlg);
tv1.setModel(&amp;mdl);
tv1.setItemDelegate(&amp;dlg1);
tv.show();
tv1.show();
return a.exec();
}
</pre><pre style="clear:both"></pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main8" class="pn">p59</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
OUTPUT
<img class="img" src="http://www.minhinc.com/image/qt-slide-delegate.gif" />

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main8" class="pn">p60</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap9">&nbsp;<div class="slideheader" style="height:238px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  9. Plugin Architecture</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap9_0">Library concepts<br>- Static linking<br>- Dynamic linking (late binding)<br>- Runtime linking (late late binding)</a></li>   <li class="sml"><pre>Extending qt with existing plugin
 - Plugin macros
 - Style sheets
</pre></li>   <li class="sml"><pre>Creating plugin from scratch
</pre></li>   <li class="sml"><pre>Linking to a plugin statically
- creating static plugin
- linking static plugin to application
</pre></li>   <li class="sml"><pre>Making application plugin-aware</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

- Static linking, liking to library is achieved at  compile-link time.  Executable
binary contans the library code. Following ompiler directive used to create the
library

&lt;&lt;calc_mean.c&gt;&gt;
<pre class="code">//#include &lt;stdio.h&gt;
double mean(double a, double b){
return (a+b)/2;
}
</pre>
&lt;&lt;calc_mean.h&gt;&gt;
<pre class="code">double mean(double, double);

&lt;&lt;calc.c&gt;&gt;
#include &lt;stdio.h&gt;
#include "calc_mean.h"
int main(){
printf("mean of 3, 6 is %f 
", mean(3,6));
return 0;
}

$gcc -c calc_mean.c -o calc-mean.o
$ar rcs libmean.a calc_mean.o // create archive file 
                              // (static library) *.a file
$gcc -c calc.c -o calc.o //  create binary file
$gcc  -o calc calc.o -L.  -lmean


$ nm libmean.a 
  calc_mean.o:
  0000000000000000 T mean

 +--------------+
 |              | &lt;-------
 |  libmean.a   |        |  libmean.a is inside the binary file   
 ----------------        |
 |  code &amp; data | o-------
 +--------------+
 calc binary file
</pre>
- Dynamic linking (late binding), linking to library is achieved at run time.

<pre class="code">$gcc -c -fPIC calc_mean.c -o calc_mean.o
$gcc -c calc.c -o calc.o
$gcc -shared -fPIC -o libmean.so calc_mean.o
$ldd libmean.so
 linux-vdso.so.1 =&gt;  (0x00007fffadffe000)
 libc.so.6 =&gt; /lib64/libc.so.6 (0x00007f546f7ed000)
 /lib64/ld-linux-x86-64.so.2 (0x00007f546fdc4000)

$gcc -o calc calc.o -L. -lmean
$ldd calc
 linux-vdso.so.1 =&gt;  (0x00007fffa58de000)
 libmean.so =&gt; not found
 libc.so.6 =&gt; /lib64/libc.so.6 (0x00007f4e10d70000)
 /lib64/ld-linux-x86-64.so.2 (0x00007f4e11146000)


  +--------------+            +--------------+
  |              |   ------&gt;  |  libmean.a   |
  |  code &amp; data |   |        +--------------+
  +--------------+   |
     calc binary     |         libmean library
                     |
                     |
     Libmean.so is external to calc binary



  +--------------+                            |               |
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main9" class="pn">p61</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">  |              | &lt;---libmean.so mapped --&gt;  |               |
  |  libmean.so  |     from shared memory     | libmean.so    |   
  ----------------                            |               |
  |  code &amp; data |                            |               |
  +--------------+                          
    calc process                                shared memory
 
$export LD_LIBRARY_PATH=.
$./calc 
mean of 3, 6 is 4.500000 
In order to avoid LD_LIBRARY_PATH programmer can add 
-Wl,rpath,&lt;lib path&gt; to the command link line
</pre>
- Runtime linking (late late binding)
 Library is not loaded when binary executes, rather than it is loaded on demand at run
time. C function libraries are loaded through Qlibrary class method load() or
resolve().


QLibrary myLib("mylib");
typedef void (*MyPrototype)();
MyPrototype myFunction = (MyPrototype) myLib.resolve("mysymbol");
if (myFunction)
myFunction();

</pre> &nbsp;<div class="slideheader" style="height:227px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  9. Plugin Architecture</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Library concepts
- Static linking
- Dynamic linking (late binding)
- Runtime linking (late late binding)
</pre></li>   <li class="big"><a name="chap9_1">Extending qt with existing plugin<br> - Plugin macros<br> - Style sheets</a></li>   <li class="sml"><pre>Creating plugin from scratch
</pre></li>   <li class="sml"><pre>Linking to a plugin statically
- creating static plugin
- linking static plugin to application
</pre></li>   <li class="sml"><pre>Making application plugin-aware</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Plugins are class based shared libraries which are loaded through QPluginLoader class
rather than Qlibrary.

Qt provides two APIs for creating plugins.
  - A higher-level API for writing extensions to Qt itself: custom database drivers,
image formats, text codecs, custom styles, etc.
  - Lower level API where plgin is written from scratch. Base classes of higher level
API plugins are written through low level API plugins.


Higher-level plugins are achieved through deriving achieved through deriving existing
plugin interfaces, example

<pre class="code">Base Class                         Directory Name             Key Case Sensitivity
QAccessibleBridgePlugin accessiblebridge      Case Sensitive
QAccessiblePlugin       accessible            Case Sensitive
QDecorationPlugin       decorations           Case Insensitive
QFontEnginePlugin       fontengines           Case Insensitive
QIconEnginePlugin       iconengines           Case Insensitive
QImageIOPlugin          imageformats          Case Sensitive
QInputContextPlugin     inputmethods          Case Sensitive
QKbdDriverPlugin        kbddrivers            Case Insensitive
QMouseDriverPlugin      mousedrivers          Case Insensitive
QScreenDriverPlugin     gfxdrivers            Case Insensitive
QScriptExtensionPlugin  script                Case Sensitive
QSqlDriverPlugin        sqldrivers            Case Sensitive
QStylePlugin            styles                Case Insensitive
QTextCodecPlugin        codecs                Case Sensitive
</pre>
Plugin macros are declared in QstylePlugin dervice class as
<pre class="code"> Q_PLUGIN_METADATA(IID "org.qt-project.Qt.QStyleFactoryInterface" FILE
"simplestyle.json")
</pre>Json file contains the key. QStylePlugin create function is called against the key.
<pre class="code">                        -------------
                        |  QObject  |
                        -------------
                             / \
                              -
                              |
        --------------- -------------  --------------------
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main9" class="pn">p62</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">        | QStylePlugin| |  QObject  |  | QSqlDriverPlugin | . . .
        --------------- -------------  --------------------
                             / \
                              -
                              |
                     ---------------------
                     | simplestyleplugin |
                     ---------------------
                     | o create():QStyle*|
                     ---------------------
                       Plugin interface



                     ----------------       --------        ---------
                     |  QCommonStyle| ---|&gt; |QStyle| ---|&gt;  |QObject|
                     ----------------       --------        ---------
                            / \
                             -
                             |
                     ---------------
                     | QProxyStyle |
                     ---------------
                            / \
                             -
                             |
                    ---------------------
                    | simplestyleplugin |
                    ---------------------
                    | o polish(QPalette)|
                    ---------------------
                    Plugin implementation
</pre>&lt;&lt;styleplugin.pro&gt;&gt;
<pre class="code">TEMPLATE = subdirs
SUBDIRS = app plugin
</pre>
&lt;&lt;app/app.pro&gt;&gt;
<pre class="code">QT += widgets
SOURCES += main.cpp
TARGET = styleplugin
win32 {
debug:DESTDIR = ../debug/
release:DESTDIR = ../release/
} else {
    DESTDIR    = ../
}
</pre>
&lt;&lt;app/main.cpp&gt;&gt;
<pre class="code">#include &lt;QtWidgets&gt;
int main(int argv, char *args[]) {
QApplication app(argv, args);
QApplication::setStyle(QStyleFactory::create("simplestyle"));
QPushButton pb("clickme");
pb.show();
return app.exec();
}
</pre>
&lt;&lt;plugin/plugin.pro&gt;&gt;
<pre class="code">TEMPLATE    = lib
CONFIG     += plugin
QT         += widgets
HEADERS     = simplestyle.h 
              simplestyleplugin.h
SOURCES     = simplestyle.cpp 
              simplestyleplugin.cpp
TARGET      = simplestyleplugin
win32 {
    CONFIG(debug, release|debug):DESTDIR = ../debug/styles/
    CONFIG(release, release|debug):DESTDIR = ../release/styles/
} else {
    DESTDIR = ../styles/
}
EXAMPLE_FILES += simplestyle.json

&lt;&lt;plugin/simplestyle.json&gt;&gt;
{
    "Keys": [ "simplestyle" ]
}
</pre>
&lt;&lt;plugin/simplestyle.h&gt;&gt;
<pre class="code">#ifndef SIMPLESTYLE_H
#define SIMPLESTYLE_H
#include &lt;QProxyStyle&gt;
QT_BEGIN_NAMESPACE
class QPalette;
QT_END_NAMESPACE
class SimpleStyle : public QProxyStyle{
Q_OBJECT
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main9" class="pn">p63</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">public:
SimpleStyle() {};
void polish(QPalette &amp;palette);// Q_DECL_OVERRIDE;
};
#endif


&lt;&lt;plugin/simplestyle.cpp&gt;&gt;
#include &lt;QtWidgets&gt;
#include "simplestyle.h"
void SimpleStyle::polish(QPalette &amp;palette) {
    palette.setBrush(QPalette::Button, Qt::red);
}
</pre>
&lt;&lt;plugin/simplestyleplugin.h&gt;&gt;
<pre class="code">#ifndef SIMPLESTYLEPLUGIN_H
#define SIMPLESTYLEPLUGIN_H
#include &lt;QStylePlugin&gt;
QT_BEGIN_NAMESPACE
class QStringList;
class QStyle;
QT_END_NAMESPACE
class SimpleStylePlugin : public QStylePlugin{
 Q_OBJECT
 Q_PLUGIN_METADATA(IID "org.qt-project.Qt.QStyleFactoryInterface" FILE
"simplestyle.json")
public:
 SimpleStylePlugin() {}
// QStringList keys() const;
 QStyle *create(const QString &amp;key) Q_DECL_OVERRIDE;
};
#endif
</pre>
&lt;&lt;plugin/simplestyleplugin.cpp&gt;&gt;
<pre class="code">#include &lt;QtWidgets&gt;
#include "simplestyleplugin.h"
#include "simplestyle.h"
//QStringList SimpleStylePlugin::keys() const{
//    return QStringList() &lt;&lt; "SimpleStyle";
//}
QStyle *SimpleStylePlugin::create(const QString &amp;key){
    if (key.toLower() == "simplestyle")
        return new SimpleStyle;
    return 0;
}
</pre>
<img class="img" src="http://minhinc.com/image/qt-slide-qpluginextended.png" />


<pre class="code">  ------+  Application
  |                 +----- All QStylePlugin must be in dirctory named styles
  |                 |
  ------+  styles   |    
        |           V
        |
        +------ libstyleplugin.so
        |
        +------ lib73.so
        |
        +------ libyyyy.so
</pre>
Plugin .so libraries can be located with funciton QcoreApplication::addLibraryPath().
It is similar to adding path to LD_LIBRARY_PATH environment variable. Styles plugin
must be in the directory "styles" in the path provided through
QcoreApplication::addLibraryPath()

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main9" class="pn">p64</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:205px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  9. Plugin Architecture</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Library concepts
- Static linking
- Dynamic linking (late binding)
- Runtime linking (late late binding)
</pre></li>   <li class="sml"><pre>Extending qt with existing plugin
 - Plugin macros
 - Style sheets
</pre></li>   <li class="big"><a name="chap9_2">Creating plugin from scratch</a></li>   <li class="sml"><pre>Linking to a plugin statically
- creating static plugin
- linking static plugin to application
</pre></li>   <li class="sml"><pre>Making application plugin-aware</pre></li>
  </ul>
 </div>
<pre class="slidecontent">


Lower level plugin has three parts.
a) Interface classes.
b) Plugin interfaces extending the intefaces.
c) Application instantiating the plugin and accessing it through inteface (plugin
extending the interface).

a) Interface class
Making an application extensible through plugins involves the following steps:
  -  Define a set of interfaces (classes with only pure virtual functions) used to
talk to the plugins.
  -  Use the Q_DECLARE_INTERFACE() macro to tell Qt's meta-object system about the
interface.
 
 b) Plugin interface
  - Declare a plugin class that inherits from QObject and from the interfaces that the
plugin wants to provide.
  - Use the Q_INTERFACES() macro to tell Qt's meta-object system About the interfaces.
  - Export the plugin using the Q_PLUGIN_METADATA() macro.
  - Build the plugin using a suitable .pro file.

c) Application instantiating the plugin and using it through interfaces.
  -  Use QPluginLoader in the application to load the plugins.
  -  Use qobject_cast() to test whether a plugin implements a given interface.

A plugin is loaded through QLoadPlugin::load() api which retruns the base class
pointer and respective pointer is achieved through qObject_cast macro.

a) Interface class
&lt;&lt;plugin/textart.pro&gt;&gt;
<pre class="code">TEMPLATE = lib
CONFIG += plugin
TARGET = textart
HEADERS += basiceffectsplugin.h textartinterface.h
SOURCES += basiceffectsplugin.cpp
DESTDIR = .
</pre>
&lt;&lt;plugin/textartinterface.h&gt;&gt;
<pre class="code">#ifndef TEXTARTINTERFACE_H
#define TEXTARTINTERFACE_H
#include &lt;QPixmap&gt;
#include &lt;QString&gt;
#include &lt;QStringList&gt;
#include &lt;QFont&gt;
#include &lt;QPen&gt;
#include &lt;QBrush&gt;
class TextArtInterface {
public:
 virtual ~TextArtInterface(){}
 virtual QStringList effects() const=0;
 virtual QPixmap applyEffect(const QString &amp;effect,const QString&amp; text, const QFont
&amp;font, 
         const QSize &amp;size, const QPen&amp; pen, const QBrush&amp; brush)=0;
};
Q_DECLARE_INTERFACE(TextArtInterface,"com.software-inc.TextArt.TextArtInterface/1.0")
#endif
</pre>
b)Plugin interfae
&lt;&lt;plugin/basiceffectsplugin.h&gt;&gt;
<pre class="code">#ifndef BASICEFFECTSPLUGIN_H
#define BASICEFFECTSPLUGIN_H
#include &lt;QObject&gt;
#include "textartinterface.h"
class BasicEffectsPlugin : public QObject, public TextArtInterface{
Q_OBJECT
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main9" class="pn">p65</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">Q_INTERFACES(TextArtInterface)
/*Q_PLUGIN_METADATA(IID "com.software-inc.TextArt.TextArtInterface/1.0"
            FILE "mymetadata.json") */
Q_PLUGIN_METADATA(IID "com.software-inc.TextArt.TextArtInterface/1.0")
public:
 QStringList effects() const;
 QPixmap applyEffect(const QString &amp;effect, const QString &amp;text, 
                          const QFont &amp;font, const QSize &amp;size, 
                          const QPen &amp;pen, const QBrush &amp;brush);
};
#endif
</pre>
&lt;&lt;plugin/basiceffectsplugin.cpp&gt;&gt;
<pre class="code">#include &lt;QStringList&gt;
#include &lt;QFontMetrics&gt;
#include &lt;QPainter&gt;
#include &lt;QPainterPath&gt;
#include "basiceffectsplugin.h"
QStringList BasicEffectsPlugin::effects() const{
 return QStringList()&lt;&lt; "Plain" &lt;&lt; "Outline" &lt;&lt; "Shadow";
}
QPixmap BasicEffectsPlugin::applyEffect(const QString &amp;effect,
 const QString &amp;text, const QFont &amp;font, const QSize &amp;size,
 const QPen &amp;pen, const QBrush &amp;brush){
 QFont myFont = font;
 QFontMetrics metrics(myFont);
 while ((metrics.width(text) &gt; size.width() || metrics.height() &gt; size.height()) 
                      &amp;&amp; myFont.pointSize() &gt; 9) {
  myFont.setPointSize(myFont.pointSize() - 1);
  metrics = QFontMetrics(myFont);
 }
 QPixmap pixmap(size);
 QPainter painter(&amp;pixmap);
 painter.setFont(myFont);
 painter.setPen(pen);
 painter.setBrush(brush);
 painter.setRenderHint(QPainter::Antialiasing, true);
 painter.setRenderHint(QPainter::TextAntialiasing, true);
 painter.setRenderHint(QPainter::SmoothPixmapTransform, true);
 painter.eraseRect(pixmap.rect());
 if (effect == "Plain")
  painter.setPen(Qt::NoPen);
 else if (effect == "Outline") {
  QPen pen(Qt::black);
  pen.setWidthF(2.5);
  painter.setPen(pen);
 } else if (effect == "Shadow") {
  QPainterPath path;
  painter.setBrush(Qt::darkGray);
  path.addText(((size.width() - metrics.width(text)) / 2) + 3, (size.height() - 
                           metrics.descent()) + 3, myFont, text);
  painter.drawPath(path);
  painter.setBrush(brush);
 }
 QPainterPath path;
 path.addText((size.width() - metrics.width(text)) / 2, size.height() - 
                           metrics.descent(), myFont, text);
 painter.drawPath(path);
 return pixmap;
}
</pre>c) Application instantiating the plugin
&lt;&lt;app.pro&gt;&gt;
<pre class="code">QT += widgets
TEMPLATE = app
TARGET = textartdialog
INCLUDEPATH += . plugin
HEADERS += tdialog.h
SOURCES += main.cpp tdialog.cpp
</pre>
&lt;&lt;tdialog.h&gt;&gt;
<pre class="code">#ifndef TDIALOG_H
#define TDIALOG_H
#include &lt;QDialog&gt;
struct TextArtInterface;
class tdialog:public QDialog {
Q_OBJECT
public:
 tdialog(QDialog *p=0);
private:
 QList&lt;TextArtInterface*&gt; interfaces;
};
#endif
</pre>
&lt;&lt;tdialog.cpp&gt;&gt;
<pre class="code">#include &lt;QApplication&gt;
#include &lt;QVBoxLayout&gt;
#include &lt;QListWidget&gt;
#include &lt;QDir&gt;
#include &lt;QPluginLoader&gt;
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main9" class="pn">p66</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">#include &lt;QFont&gt;
#include &lt;QListWidgetItem&gt;
#include &lt;QPixmap&gt;
#include &lt;QLinearGradient&gt;
#include "tdialog.h"

#include "textartinterface.h"
tdialog::tdialog(QDialog *p):QDialog(p){
 QString text="Qt Everywhere";
 QListWidget *listwidget;
 QDir plugindir;
 QVBoxLayout *vlt=new QVBoxLayout;
 vlt-&gt;addWidget(listwidget=new QListWidget);
 setLayout(vlt);
 listwidget-&gt;setViewMode(QListWidget::IconMode);
 listwidget-&gt;setMovement(QListWidget::Static);
 listwidget-&gt;setIconSize(QSize(200,60));
 (plugindir=QApplication::applicationDirPath()).cd("./plugin");
 foreach(QString filename, plugindir.entryList(QDir::Files)) {
  QPluginLoader loader(plugindir.absoluteFilePath(filename));
  if( TextArtInterface *interface=qobject_cast&lt;TextArtInterface*&gt;(loader.instance()))
  interfaces.append(interface);
 }
 QLinearGradient gradient(0,0, listwidget-&gt;iconSize().width()/2,
       listwidget-&gt;iconSize().height()/2);
 gradient.setColorAt(0.0, QColor("darkolivegreen"));
 gradient.setColorAt(1.0, QColor("lightgreen"));

 foreach(TextArtInterface *interface, interfaces) {
  foreach (QString effect, interface-&gt;effects()) {
   QListWidgetItem *item=new QListWidgetItem(effect, listwidget);
   item-&gt;setData(Qt::DecorationRole, interface-&gt;applyEffect(effect,"Qt Everywhere",
     QFont("Tw Cen Mt",listwidget-&gt;iconSize().height(),Qfont::Bold),
      listwidget-&gt;iconSize(),QColor("darkseagreen"),gradient));
  }
 }
 listwidget-&gt;setCurrentRow(0);
}

&lt;&lt;main.cpp&gt;&gt;
#include &lt;QApplication&gt;

#include "tdialog.h"

int main(int argc, char* argv[]){
 QApplication a(argc, argv);
 tdialog td;
 td.show();
 return a.exec();
}
</pre>
<img class="img" src="http://minhinc.com/image/qt-slide-qpluginscratch.png" />

</pre> &nbsp;<div class="slideheader" style="height:238px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  9. Plugin Architecture</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Library concepts
- Static linking
- Dynamic linking (late binding)
- Runtime linking (late late binding)
</pre></li>   <li class="sml"><pre>Extending qt with existing plugin
 - Plugin macros
 - Style sheets
</pre></li>   <li class="sml"><pre>Creating plugin from scratch
</pre></li>   <li class="big"><a name="chap9_3">Linking to a plugin statically<br>- creating static plugin<br>- linking static plugin to application<br></a></li>   <li class="big"><a name="chap9_3">Making application plugin-aware</a></li>
  </ul>
 </div>
<pre class="slidecontent">

- Creating static plugin 
Static plugin can be created with CONFIG+=static entry in .pro file of the plugin.
&lt;&lt;plugin/plugin.pro&gt;&gt;
<pre class="code"></pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main9" class="pn">p67</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">TEMPLATE = lib
CONFIG += plugin static
DESTDIR = .
TARGET = textart
HEADERS += basiceffectsplugin.h textartinterface.h
SOURCES += basiceffectsplugin.cpp
</pre>
This will generate libtextart.a library file.

-linking static plugin to application
Application linking to the user static plugin library has to provide the library path
and library name against LIBS config variable.

&lt;&lt;app.pro&gt;&gt;
<pre class="code">QT += widgets
TEMPLATE = app
TARGET = textartdialog
LIBS += -Lplugin -ltextart
INCLUDEPATH += . plugin
HEADERS += tdialog.h
SOURCES += main.cpp tdialog.cpp
</pre>
If library is Qt specific (i.e qjpeg) then it can be added through QTPLUGIN config
variable.
<pre class="code">QTPLUGIN += qjpeg 
            qgif  
            qkrcodecs
</pre>
Application has to include Q_IMPORT_PLUGIN in global space taking parameter of plugin
class name

&lt;&lt;main.cpp &gt;&gt;
<pre class="code">#include &lt;QtPlugin&gt;
#include &lt;QApplication&gt;
#include "tdialog.h"

Q_IMPORT_PLUGIN(BasicEffectsPlugin)
int main(int argc, char* argv[]){
 QApplication a(argc, argv);
 tdialog td;
 td.show();
 return a.exec();
}
</pre>
For Qt secific plugins (i.e qjpeg), Q_IMPORT_PLUGIN is implicitly added to the source
file when QTPLUGIN is added to the .pro file

Source code has to list the plugin through QPluginLoader::staticInstances() funciton
&lt;&lt;tdialog.cpp&gt;&gt;
<pre class="code">#include &lt;QApplication&gt;
#include &lt;QVBoxLayout&gt;
#include &lt;QListWidget&gt;
#include &lt;QDir&gt;
#include &lt;QPluginLoader&gt;
#include &lt;QFont&gt;
#include &lt;QListWidgetItem&gt;
#include &lt;QPixmap&gt;
#include &lt;QLinearGradient&gt;
#include "tdialog.h"

#include "textartinterface.h"
tdialog::tdialog(QDialog *p):QDialog(p){
 QString text="Qt Everywhere";
 QListWidget *listwidget;
 QDir plugindir;
 QVBoxLayout *vlt=new QVBoxLayout;
 vlt-&gt;addWidget(listwidget=new QListWidget);
 setLayout(vlt);
 listwidget-&gt;setViewMode(QListWidget::IconMode);
 listwidget-&gt;setMovement(QListWidget::Static);
 listwidget-&gt;setIconSize(QSize(200,60));
  foreach(QObject *plugin, QPluginLoader::staticInstances()){
  if( TextArtInterface *interface=qobject_cast&lt;TextArtInterface*&gt;(plugin))
  interfaces.append(interface);
 }
 QLinearGradient gradient(0,0, listwidget-&gt;iconSize().width()/2,
listwidget-&gt;iconSize().height()/2);
 gradient.setColorAt(0.0, QColor("darkolivegreen"));
 gradient.setColorAt(1.0, QColor("lightgreen"));
 foreach(TextArtInterface *interface, interfaces) {
  foreach (QString effect, interface-&gt;effects()) {
   QListWidgetItem *item=new QListWidgetItem(effect, listwidget);
   item-&gt;setData(Qt::DecorationRole, interface-&gt;applyEffect(effect,"Qt
Everywhere",QFont("Tw Cen
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main9" class="pn">p68</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">Mt",listwidget-&gt;iconSize().height(),QFont::Bold),listwidget-&gt;iconSize(),QColor("darkseagreen"),gradient));
  }
 }
 listwidget-&gt;setCurrentRow(0);
}
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main9" class="pn">p69</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap10">&nbsp;<div class="slideheader" style="height:178px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  10. Graphics View</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap10_0">Graphics Views concept<br>- Graphics scene<br>- Graphics View<br>- Graphics Items</a></li>   <li class="sml"><pre>OpenGL scene project model/view architecture
</pre></li>   <li class="sml"><pre>Image based rendering with graphics views</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

Graphics View provides an item-based approach to model-view programming Several views
can observe a single scene, and the scene contains items of varying geometric shapes.

QGraphicsScene provides the Graphics View scene. The scene has the following
responsibilities:
 - Providing a fast interface for managing a large number of items
 - Propagating events to each item
 - Managing item state, such as selection and focus handling
 - Providing untransformed rendering functionality; mainly for printing
<pre class="code">QGraphicsScene scene;
QGraphicsRectItem *rect = scene.addRect(QRectF(0, 0, 100, 100));

QGraphicsItem *item = scene.itemAt(50, 50);
// item == rect
</pre>
Scene Coordinate
QGraphicsView provides the view widget, which visualizes the contents of a scene. You
can attach several views to the same scene, to provide several viewports into the same
data set.
<pre class="code">QGraphicsScene scene;
myPopulateScene(&amp;scene);

QGraphicsView view(&amp;scene);
view.show();
</pre>
QGraphicsItem is the base class for graphical items in a scene. Graphics View provides
several standard items for typical shapes, such as rectangles (QGraphicsRectItem),
ellipses (QGraphicsEllipseItem) and text items (QGraphicsTextItem),

View Coordinate

QGraphicsItem supports the following features:
 - Mouse press, move, release and double click events, as well as mouse hover events,
wheel events, and context menu events.
 - Keyboard input focus, and key events
 - Drag and drop
 - Grouping, both through parent-child relationships, and with QGraphicsItemGroup
 - Collision detection

<pre class="code">QGraphicsItem
          
     / \
      -
      |


virtual void paint(QPainter* painter,const QStyleOptionGraphicsItem* option,QWidget*
widget=0)=0
</pre>
Item coordinate

QGraphicsWidget
The QGraphicsWidget class is the base class for all widget items in a  QGraphicsScene.

QGraphicsWidget is an extended base item that provides extra functionality over
QGraphicsItem. It is similar to QWidget in many ways:

 - Provides a palette, a font and a style().
  - Has a defined geometry().
  - Supports layouts with setLayout() and layout().
  - Supports shortcuts and actions with grabShortcut() and insertAction()

QGraphicsLayout
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main10" class="pn">p70</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
Coordinate Mapping
 - Inorder to find item in view cordinate
 QGraphicsView::mapToScene(),followed by GraphicsScene::itemAt()
 -In order to know where in the viewport an item is located, 
QGraphicsItem::mapToScene() on the item, then QGraphicsView::mapFromScene() on the
view
 -In order to find what items are inside a view ellipse, pass a QPainterPath to
mapToScene(), and then pass the mapped path to QGraphicsScene::items()

</pre> &nbsp;<div class="slideheader" style="height:145px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  10. Graphics View</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Graphics Views concept
- Graphics scene
- Graphics View
- Graphics Items
</pre></li>   <li class="big"><a name="chap10_1">OpenGL scene project model/view architecture</a></li>   <li class="sml"><pre>Image based rendering with graphics views</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

1. set up your tripod and point the camera at the scene (viewing transformation).
2. Arrange the scene to be photographed into the desired component (modeling
transformation).
3. choose the camera lens or adjust the zoom (projection transformation).
4. Determine how large you want the final photograph to be - for example, you might
want it enlarged (viewport transformation).

<pre class="code">                                                       ( )
                                                   . .
                                                 .  .
                                          .   .   .
     Viewing                        .   .  .    .   Positioning the
                             .      .   .     .     viewing volume in
                      .         .    .      .       the world
               .             .   .        .
              -------------------       .
              |       .         |     .
              |    .            |   .
              | .               | .
              -------------------


                                                       ( )
                                                   . .
                                               . .  .
                                          .   .   .
                                    .   .  .    .
    Modeling                 .      .   .     . Positiioning the
                      .         .    .      .   models in the world
               .             .    .       .
              -------------------       .
              |        /xx     |     .
              |    .  73/    |   .
              | .      xx/     | .
              -------------------

                                                       ( )
                                                   . .
                                                 .  .
                                          .   .   .
                                   ----------   .
    Projection               -      |   -   | .
                      -         -   |-      |
               -             -   -  ---------
              -------------------       -      Determining the
              |       -         |     -        shape of the
              |    -            |   -          viewing volume
              | -               | -
              -------------------




    Viewport
              ----------------------------
              |              .           |
              |          . 73x .       |
              |       . 7373xxx .    |
              |     . 737373xxx .  |
              |       . 7373xxx .    |
              |          . 73x .       |
              |              .           |
              ----------------------------
</pre></pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main10" class="pn">p71</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:145px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  10. Graphics View</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Graphics Views concept
- Graphics scene
- Graphics View
- Graphics Items
</pre></li>   <li class="sml"><pre>OpenGL scene project model/view architecture
</pre></li>   <li class="big"><a name="chap10_2">Image based rendering with graphics views</a></li>
  </ul>
 </div>
<pre class="slidecontent">

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main10" class="pn">p72</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<div class="pg" style="margin-top:20px;height:1395px">
<div class="pg" style="margin-top:20px;height:1395px">
<div class="pg" style="margin-top:20px;height:1395px">
<div class="pg" style="margin-top:20px;height:1395px">
<div class="pg" style="margin-top:20px;height:1395px">
<div class="pg" style="margin-top:20px;height:1395px">
<div class="pg" style="margin-top:20px;height:1395px">
<div class="pg" style="margin-top:20px;height:1395px">
<div class="pg" style="margin-top:20px;height:1395px">
<div class="pg" style="margin-top:20px;height:1395px">
<div class="pg" style="margin-top:20px;height:1395px">
<pre style="font-family:mytwcenmt;text-align:center;margin-top:45%;font-size:34pt;color:#004000;fontweight:bold">Minh, Inc.</pre>
<pre style="text-align:center;font-size:11pt;color:#444444;font-family:mytwcenmt">A SOFTWARE RESEARCH FIRM</pre>
</div>

<? $util->drawfooter(__FILE__) ?>