<? $level='.';foreach(split("\/",split("public_html\/?",ereg_replace("\/*$","",getcwd()))[1]) as $item){ if(!empty($item)){ $level=$level."/.."; }};require_once($level.'/php/Utilm.php');$util=new Utilc('training'); ?>
<div class="pg" style="margin-top:40px;height:1335px">
 <pre class=title>Qml QtQuick Essentials Training</pre>
 <pre class=subtitle>3-day session</pre>
 <pre class=company></pre>
 <div style="height:169px;">
  <div class="headerleft"> <pre>Overview</pre></div>
  <div class="headerright"> <pre>Understanding Qml Component/Document Architecute
Understanding QtQuick classes
Exporting C++ class to Qml as object and class type
Qt Quick scene graph concept
Dynamic Properties</pre></div>
 </div>
 <div style="height:103px;">
  <div class="headerleft"> <pre>Duration</pre></div>
  <div class="headerright"> <pre>Three days - 24 hours
50% of lecture, 50% of practical labs.</pre></div>
 </div>
 <div style="height:81px;">
  <div class="headerleft"> <pre>Trainer</pre></div>
  <div class="headerright"> <pre><a href="https://www.linkedin.com/in/pravinkumarsinha">http://www.linkedin.com/in/pravinkumarsinha</a></pre></div>
 </div>
 <hr>
 <div style="height:279px;">
  <div class="headerleft"> <pre>Prerequisite</pre></div>
  <div class="headerright"> <pre><b>Knowledge of Qt programming</b>
Knowledge of Qt programming is important. Technically Qml is javascript
counter part of C++ Qt. Knowing Qt will help fast understanding of Qml.
Qt agenda can be downloaded from
<a href=http://www.minhinc.com/training/advance-cpp-agenda.pdf>http://www.minhinc.com/training/advance-cpp-agenda.pdf</a>

<b>Knowledge of GUI and other concepts</b>
Qt/Qml is used for GUI development and many other technologies including 
Networks, operating systems, Database, scripting. Basic knowledge of these domains 
are required as per the Qt/Qml is developed for the particular domain.</pre></div>
 </div>
 <hr>
 <div style="height:81px;">
  <div class="headerleft"> <pre>Setup</pre></div>
  <div class="headerright"> <pre>Ubuntu LTS 16.04, Qt 5.[>6]</pre></div>
 </div>
<pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">1</pre>
</div>

<div class="pg" style="margin-top:20px;height:1355px">
 <div class="header2" style="margin-top:0px;">
  <pre class="header" style="line-height:40px">Lecture</pre>
  <pre class="content" style="height:69px">Lecture session will be course content presentation through the trainer.
Any source code example related to the topic will be demonstrated, it would
include executing the binaries</pre>
 </div>
 <div class="header2" style="margin-top:125px;">
  <pre class="header" style="line-height:40px">Labs</pre>
  <pre class="content" style="height:69px">Labs session would be completely hands on session where each example (with
example data and execution instruction) would be provided to the students. Students
can verify their results with the results provided in the material.</pre>
 </div>
 <div class="dayheader" style="margin-top:392.0px;height:50px"><pre>Day 1 Morning</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:172px">
  <pre class="dayheader" style="line-height:40px">  Lecture - Introduction to Qt Quick and QML</pre>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><pre>Defining Qml Component</pre></li>
   <li><pre>Tree of QML Objects</pre></li>
   <li><pre>Qml Types
 - Visual
 - Non Visual</pre></li>
   <li><pre>Qt Quick classes</pre></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:172px">
  <pre class="dayheader" style="line-height:40px">  Lecture - Qt Properties</pre>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><pre>Combination of Get/Set/Notify</pre></li>
   <li><pre>Declaration of a Qt Property</pre></li>
   <li><pre>Qt Property with Enum</pre></li>
   <li><pre>Getting & Setting Qt Properties</pre></li>
   <li><pre>Dynamic Properties</pre></li>
   <li><pre>Signal and Slots</pre></li>

  </ul>
 </div>
 <div class=dayheaderleft style="margin-top:80.0px;height:194px">
  <pre class="dayheader" style="line-height:40px">  Lecture - Building Blocks of QML</pre>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><pre>QuickItem</pre></li>
   <li><pre>Variant
 - QVariant and QML</pre></li>
   <li><pre>Variant Containers
 - QVariantList
 - QList
 - QqmlListProperty</pre></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:80.0px;height:128px">
  <pre class="dayheader" style="line-height:40px">  Lecture - Composing UIs</pre>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><pre>Nested Items</pre></li>
   <li><pre>Graphical QML Types</pre></li>
   <li><pre>Text Type</pre></li>
   <li><pre>Anchor Layout</pre></li>

  </ul>
 </div>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">2</pre>
</div>
<div class="pg" style="margin-top:20px;height:1355px">
 <div class="dayheader" style="margin-top:0px;height:50px"><pre>Day 1 Afternoon</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:172px">
  <pre class="dayheader" style="line-height:40px">     Lab</pre>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><pre>Write a QML document</pre></li>
   <li><pre>Import QML document in another QML
document as a package</pre></li>
   <li><pre>Use anchor layout to place current window
with imported window in some layout fashion.</pre></li>

  </ul>
 </div>
 <div class="dayheader" style="margin-top:221.0px;height:50px"><pre>Day 2 Morning</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:436px">
  <pre class="dayheader" style="line-height:40px">  Lecture - User Input</pre>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><pre>Keyboard Navigation and Focus</pre></li>
   <li><pre>Input Focus
 - Focus Order
 - Focus property
 - Active Focus
 - FocusScope</pre></li>
   <li><pre>Handling Keyboard Input
 - Key-Specific Handlers
 - All Keys Handler
 - Key Event Propagation
 - Event Propagation is Convenient</pre></li>
   <li><pre>Multi-Touch
 - Common Multi-Touch Gestures
 - Handling Overlapping Touch Areas</pre></li>
   <li><pre>Mouse/Single-Touch
 - Tap
 - Double-Tap
 - Tap and Hold</pre></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:150px">
  <pre class="dayheader" style="line-height:40px">  Lecture - Structures</pre>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><pre>Components</pre></li>
   <li><pre>Dividing code into Components
 - Creating new Items through new .qml file
 - Creating Component dynamically</pre></li>
   <li><pre>Modules</pre></li>

  </ul>
 </div>
 <div class=dayheaderleft style="margin-top:80.0px;height:106px">
  <pre class="dayheader" style="line-height:40px">  Lecture - State and Transitions</pre>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><pre>States</pre></li>
   <li><pre>State Conditions</pre></li>
   <li><pre>Transitions</pre></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:80.0px;height:216px">
  <pre class="dayheader" style="line-height:40px">  Lecture - Dynamic Creation of Items</pre>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><pre>Creating Items Dynamically
 - Procedural Method
 - Declarative Method</pre></li>
   <li><pre>Procedural Creation</pre></li>
   <li><pre>Procedural/Declarative Creation</pre></li>
   <li><pre>Declarative Creation</pre></li>
   <li><pre>Creating Multiple Items</pre></li>
   <li><pre>Repeaters</pre></li>

  </ul>
 </div>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">3</pre>
</div>
<div class="pg" style="margin-top:20px;height:1355px">
 <div class="dayheader" style="margin-top:0px;height:50px"><pre>Day 2 Afternoon</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:216px">
  <pre class="dayheader" style="line-height:40px">  Lecture - C++ Integration</pre>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><pre>Declartive Envrionment</pre></li>
   <li><pre>Exporting C++ Objects to QML</pre></li>
   <li><pre>Exporting Classes to QML</pre></li>
   <li><pre>ExportingNon-GUI Classes</pre></li>
   <li><pre>Exporting Qpainter based GUI Classes</pre></li>
   <li><pre>Exporting Scene Graph based GUI Classes</pre></li>
   <li><pre>Using Custom Types Plugins</pre></li>
   <li><pre>Building an application as a Library</pre></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:172px">
  <pre class="dayheader" style="line-height:40px">     Lab</pre>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><pre>Emit signal when mouse moves over an area</pre></li>
   <li><pre>Write qml component as a separate .qml file</pre></li>
   <li><pre>Define component dynamically</pre></li>
   <li><pre>Implement Ecllipse as Qml Class type</pre></li>
   <li><pre>Place the Ecllipse class type as Library</pre></li>

  </ul>
 </div>
 <div class="dayheader" style="margin-top:172.5px;height:50px"><pre>Day 3 Morning</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:106px">
  <pre class="dayheader" style="line-height:40px">  Lecture - Graphical Effects</pre>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><pre>Canvas</pre></li>
   <li><pre>Particles</pre></li>
   <li><pre>Shaders</pre></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:106px">
  <pre class="dayheader" style="line-height:40px">  Lecture - Animations</pre>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><pre>Animations</pre></li>
   <li><pre>Easing Curves</pre></li>
   <li><pre>Animation Groups</pre></li>

  </ul>
 </div>
 <div class=dayheaderleft style="margin-top:80px;height:172px">
  <pre class="dayheader" style="line-height:40px">  Lecture - Qt Quick Controls</pre>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><pre>Qt Quick Designer</pre></li>
   <li><pre>Qt Quick Controls</pre></li>
   <li><pre>Application Window</pre></li>
   <li><pre>Contorls and Views</pre></li>
   <li><pre>Layouts</pre></li>
   <li><pre>Styling</pre></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:80px;height:150px">
  <pre class="dayheader" style="line-height:40px">  Lecture - Presenting Data</pre>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><pre>Arranging Items</pre></li>
   <li><pre>Data Models</pre></li>
   <li><pre>Using Views</pre></li>
   <li><pre>Using Delegate</pre></li>
   <li><pre>XML Models</pre></li>

  </ul>
 </div>
 <div class="dayheader" style="margin-top:172.5px;height:50px"><pre>Day 3 Afternoon</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:106px">
  <pre class="dayheader" style="line-height:40px">     Lab</pre>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><pre>Place Anchor layout inside Vertical layout</pre></li>
   <li><pre>Implement List data model view through
delegate</pre></li>

  </ul>
 </div>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">4</pre>
</div>

<? $util->drawfooter('training','qt'); ?>
