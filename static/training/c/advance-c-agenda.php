<? $level='.';foreach(split("\/",split("public_html\/?",ereg_replace("\/*$","",getcwd()))[1]) as $item){ if(!empty($item)){ $level=$level."/.."; }};require_once($level.'/php/Utilm.php');$util=new Utilc; ?>
<div class="pg" style="margin-top:40px;height:1375px">
 <pre class=title>C Essentials Training</pre>
 <pre class=subtitle>3-day session</pre>
 <pre class=company></pre>
 <div style="height:179px;">
  <div class="headerleft"> <pre>Overview</pre></div>
  <div class="headerright"> <pre>Understanding structural programming
Understanding advance pointer and arrays
Practical labs with GNU gcc compiler, gdb debugger</pre></div>
 </div>
 <div style="height:157px;">
  <div class="headerleft"> <pre>Duration</pre></div>
  <div class="headerright"> <pre>Three days - 24 hours (8 hours a day)
50% of lecture, 50% of practical labs.</pre></div>
 </div>
 <hr>
 <div style="height:135px;">
  <div class="headerleft"> <pre>Trainer</pre></div>
  <div class="headerright"> <pre><a href="https://www.linkedin.com/in/pravinkumarsinha">http://www.linkedin.com/in/pravinkumarsinha</a></pre></div>
 </div>
 <div style="height:157px;">
  <div class="headerleft"> <pre>Audience</pre></div>
  <div class="headerright"> <pre>Professional Software developers
People supporting embedded and medium scale products.</pre></div>
 </div>
 <hr>
 <div style="height:135px;">
  <div class="headerleft"> <pre>Setup</pre></div>
  <div class="headerright"> <pre>Linux machine with GNU gcc compiler installed.</pre></div>
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
<a href="http://www.minhinc.com/training/advance-c-slides.pdf">http://www.minhinc.com/training/advance-c-slides.pdf</a></pre>
 </div>
 <div class="header2" style="margin-top:125px;">
  <pre class="header" style="line-height:40px">Labs</pre>
  <pre class="content" style="height:91px">Labs session would be completely hands on session where each example
(with example data and execution instruction) would be provided to the
students. Students can verify their results with the results provided in
the material.</pre>
 </div>
 <div class="dayheader" style="margin-top:102.0px;height:50px"><pre>Day 1 Morning</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:282px">
  <a name="main1" href="#chap1" class="dayheader" style="line-height:40px">  Lecture - Introduction</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap1_0">Source File<br></a></li>
   <li><a href="#chap1_1">Header File<br></a></li>
   <li><a href="#chap1_2">Object File<br></a></li>
   <li><a href="#chap1_3">Declaration and Definition<br></a></li>
   <li><a href="#chap1_4">Preprocessing, Compiling, Linking,<br> Loading and Running<br></a></li>
   <li><a href="#chap1_5">Executable file format<br></a></li>
   <li><a href="#chap1_6">Segments (.bss, .code, .data etc)<br></a></li>
   <li><a href="#chap1_7">Creating static library<br></a></li>
   <li><a href="#chap1_8">Creating dynamic library<br></a></li>
   <li><a href="#chap1_9">Discussion on where c fits</a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:392px">
  <a name="main2" href="#chap2" class="dayheader" style="line-height:40px">  Lecture - Data type, Operator and expression</a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chap2_0">Data types and sizes<br> -Integer<br> -Floating point type<br> -Pointer<br> -Array<br> -Enum<br></a></li>
   <li><a href="#chap2_1">Constant<br></a></li>
   <li><a href="#chap2_2">Variable Declaration and Definition<br></a></li>
   <li><a href="#chap2_3">Operator<br> -Assignment operator and expression<br> -Arithmetic operator<br> -Relational operator<br> -Conditional operator<br></a></li>
   <li><a href="#chap2_4">Bitwise operator<br></a></li>
   <li><a href="#chap2_5">Type conversion<br></a></li>
   <li><a href="#chap2_6">Conditional expression</a></li>

  </ul>
 </div>
 <div class=dayheaderleft style="margin-top:80.0px;height:238px">
  <a name="main3" href="#chap3" class="dayheader" style="line-height:40px">  Lecture - Array Pointers References</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap3_0">Defining and initializing Array.<br></a></li>
   <li><a href="#chap3_1">Defining and initializing Pointers.<br></a></li>
   <li><a href="#chap3_2">Using pointers to access array elements.<br></a></li>
   <li><a href="#chap3_3">Pointers and const qualifiers.<br></a></li>
   <li><a href="#chap3_4">Dynamically allocated arrays.<br></a></li>
   <li><a href="#chap3_5">References.<br></a></li>
   <li><a href="#chap3_6">Independent references and restrictions.<br></a></li>
   <li><a href="#chap3_7">Multidimensional array argument to<br> function</a></li>

  </ul>
 </div>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p2</pre>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <div class="dayheader" style="margin-top:0px;height:50px"><pre>Day 1 Afternoon</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:238px">
  <pre class="dayheader" style="line-height:40px">     Lab</pre>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><pre>Write a c file and make static and
 shared library. Call library in main.
</pre></li>
   <li><pre>Write a funtion to accept multidimensional array
 as an argument.
</pre></li>
   <li><pre>Modify function argument to accept
 pointer to array.
</pre></li>
   <li><pre>Implement a function to accept pointer to
 int and check were boundary overflow is
 not checked by the compiler.</pre></li>

  </ul>
 </div>
 <div class="dayheader" style="margin-top:305.0px;height:50px"><pre>Day 2 Morning</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:238px">
  <a name="main4" href="#chap4" class="dayheader" style="line-height:40px">  Lecture - Control structures</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap4_0">Statement and Block<br></a></li>
   <li><a href="#chap4_1">Statements<br> -If<br> -Switch<br> -While<br> -For<br> -do while<br></a></li>
   <li><a href="#chap4_2">Break and Continue<br></a></li>
   <li><a href="#chap4_3">Goto and Labels</a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:282px">
  <a name="main5" href="#chap5" class="dayheader" style="line-height:40px">  Lecture - Function</a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chap5_0">Scope rule<br></a></li>
   <li><a href="#chap5_1">Header rule<br></a></li>
   <li><a href="#chap5_2">Block structure<br></a></li>
   <li><a href="#chap5_3">Function declaration and Definition<br></a></li>
   <li><a href="#chap5_4">Value and reference Parameters<br></a></li>
   <li><a href="#chap5_5">Recursion<br></a></li>
   <li><a href="#chap5_6">Inline function<br></a></li>
   <li><a href="#chap5_7">Preprocessor<br> -File inclusion<br> -Macro<br> -Conditional inclusion</a></li>

  </ul>
 </div>
 <div class=dayheaderleft style="margin-top:80.0px;height:260px">
  <a name="main6" href="#chap6" class="dayheader" style="line-height:40px">  Lecture - Complex Data Types</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap6_0">Struct<br> -Structures and functions<br> -Array of structure<br> -Self referential structure<br> -typedef<br> -union<br> -bit fields<br></a></li>
   <li><a href="#chap6_1">Array<br></a></li>
   <li><a href="#chap6_2">Pointers<br></a></li>
   <li><a href="#chap6_3">Ampersand operator(&)</a></li>

  </ul>
 </div>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p3</pre>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <div class="dayheader" style="margin-top:0px;height:50px"><pre>Day 2 Afternoon</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:150px">
  <pre class="dayheader" style="line-height:40px">     Lab</pre>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><pre>Modify for loop to while loop
</pre></li>
   <li><pre>Recursion
 - Implement fibonacci series
 -Implement factorial
</pre></li>
   <li><pre>Check machine is little endian or big endian using union</pre></li>

  </ul>
 </div>
 <div class="dayheader" style="margin-top:192.5px;height:50px"><pre>Day 3 Morning</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:172px">
  <a name="main7" href="#chap7" class="dayheader" style="line-height:40px">  Lecture - Input and Output</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap7_0">Standard Input and Output<br></a></li>
   <li><a href="#chap7_1">Buffered i/o<br></a></li>
   <li><a href="#chap7_2">Variable length argument list<br></a></li>
   <li><a href="#chap7_3">File access<br></a></li>
   <li><a href="#chap7_4">Line input and output<br></a></li>
   <li><a href="#chap7_5">Error handling - stderr and exit</a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:194px">
  <a name="main8" href="#chap8" class="dayheader" style="line-height:40px">  Lecture - Storage class Specifier</a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chap8_0">Automatic<br></a></li>
   <li><a href="#chap8_1">Const<br></a></li>
   <li><a href="#chap8_2">Global<br></a></li>
   <li><a href="#chap8_3">Extern<br></a></li>
   <li><a href="#chap8_4">Register<br></a></li>
   <li><a href="#chap8_5">Static<br></a></li>
   <li><a href="#chap8_6">Volatile</a></li>

  </ul>
 </div>
 <div class=dayheaderleft style="margin-top:80px;height:84px">
  <a name="main9" href="#chap9" class="dayheader" style="line-height:40px">  Lecture - Misc</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap9_0">Debugging with gdb<br></a></li>
   <li><a href="#chap9_1">64 bit data i/o</a></li>

  </ul>
 </div>
 <div class="dayheader" style="margin-top:192.5px;height:50px"><pre>Day 3 Afternoon</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:172px">
  <pre class="dayheader" style="line-height:40px">     Lab</pre>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><pre>Try various buffering, character, line and file
 buffering. Check out speed differences.
</pre></li>
   <li><pre>Modify global variable defined in one in other c file
Build binary with -g option
 set break point on a function enter
 inside function print pointer to struct fields</pre></li>

  </ul>
 </div>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p4</pre>
</div>

<div class="pg" style="margin-top:20px;height:1395px">
 <pre class="slidetitle" style="margin-top:465.0px">C Essentials</pre>
 <pre class="slidesubtitle style="margin-top:20px">C Essenstials- Training Course</pre>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p5</pre>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <pre class="slidedisclaimer" style="margin-top:465.0px">DISCLAIMER

This document is edited on Cent OS 5 using Open Office 3.1.1 Draw Package.

CentOS is freely download from centos.org/download
Open Office 3.1.1 can be obtained through yum or through openoffice.org

Text of this document is written in Bembo Std Otf(13 pt) font.

Code parts are written in Consolas (10 pts) font.

This training material is provided through <a style="font-family:mytwcenmt,Tw Cen MT;font-size:18pt;color:#004000;font-weight:bold" href="http://www.minhinc.com">Minh, Inc.</a>, B'lore, India
Pdf version of this document is available at <a href="http://www.minhinc.com/training/advance-c-slides.pdf">http://www.minhinc.com/training/advance-c-slides.pdf</a>
For suggestion(s) or complaint(s) write to us at <a href="mailto:training@minhinc.com">training@minhinc.com</a>

Document modified on 07/2018

Document contains 42 pages.</pre>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p6</pre>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap1">&nbsp;<div class="slideheader" style="height:185px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  1. Introduction</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap1_0">Source File</a></li>   <li class="sml"><pre>Header file
</pre></li>   <li class="sml"><pre>Object File
</pre></li>   <li class="sml"><pre>Declaration and Definition
</pre></li>   <li class="sml"><pre>Pre-processing, Compiling, Linking, Loading and Running
</pre></li>   <li class="sml"><pre>Executable File Format
</pre></li>   <li class="sml"><pre> Segments (.bss, .code, .data etc)
</pre></li>   <li class="sml"><pre>Creating static library
</pre></li>   <li class="sml"><pre>Creating dynamic library
</pre></li>   <li class="sml"><pre>Discussion on where c fits</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">


Refer:
<a href="http://www.minhinc.com/training/cpp/advance-cpp-agenda.php#chap1_0">http://www.minhinc.com/training/cpp/advance-cpp-agenda.php#chap1_0</a>

</pre> &nbsp;<div class="slideheader" style="height:185px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  1. Introduction</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Source File
</pre></li>   <li class="big"><a name="chap1_1">Header file</a></li>   <li class="sml"><pre>Object File
</pre></li>   <li class="sml"><pre>Declaration and Definition
</pre></li>   <li class="sml"><pre>Pre-processing, Compiling, Linking, Loading and Running
</pre></li>   <li class="sml"><pre>Executable File Format
</pre></li>   <li class="sml"><pre> Segments (.bss, .code, .data etc)
</pre></li>   <li class="sml"><pre>Creating static library
</pre></li>   <li class="sml"><pre>Creating dynamic library
</pre></li>   <li class="sml"><pre>Discussion on where c fits</pre></li>
  </ul>
 </div>
<pre class="slidecontent">


Refer:
<a href="http://www.minhinc.com/training/cpp/advance-cpp-agenda.php#chap1_1">http://www.minhinc.com/training/cpp/advance-cpp-agenda.php#chap1_1</a>

</pre> &nbsp;<div class="slideheader" style="height:185px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  1. Introduction</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Source File
</pre></li>   <li class="sml"><pre>Header file
</pre></li>   <li class="big"><a name="chap1_2">Object File</a></li>   <li class="sml"><pre>Declaration and Definition
</pre></li>   <li class="sml"><pre>Pre-processing, Compiling, Linking, Loading and Running
</pre></li>   <li class="sml"><pre>Executable File Format
</pre></li>   <li class="sml"><pre> Segments (.bss, .code, .data etc)
</pre></li>   <li class="sml"><pre>Creating static library
</pre></li>   <li class="sml"><pre>Creating dynamic library
</pre></li>   <li class="sml"><pre>Discussion on where c fits</pre></li>
  </ul>
 </div>
<pre class="slidecontent">


Refer:
<a href="http://www.minhinc.com/training/cpp/advance-cpp-agenda.php#chap1_2">http://www.minhinc.com/training/cpp/advance-cpp-agenda.php#chap1_2</a>

</pre> &nbsp;<div class="slideheader" style="height:185px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  1. Introduction</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Source File
</pre></li>   <li class="sml"><pre>Header file
</pre></li>   <li class="sml"><pre>Object File
</pre></li>   <li class="big"><a name="chap1_3">Declaration and Definition</a></li>   <li class="sml"><pre>Pre-processing, Compiling, Linking, Loading and Running
</pre></li>   <li class="sml"><pre>Executable File Format
</pre></li>   <li class="sml"><pre> Segments (.bss, .code, .data etc)
</pre></li>   <li class="sml"><pre>Creating static library
</pre></li>   <li class="sml"><pre>Creating dynamic library
</pre></li>   <li class="sml"><pre>Discussion on where c fits</pre></li>
  </ul>
 </div>
<pre class="slidecontent">


Refer:
<a href="http://www.minhinc.com/training/cpp/advance-cpp-agenda.php#chap1_3">http://www.minhinc.com/training/cpp/advance-cpp-agenda.php#chap1_3</a>

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main1" class="pn">p7</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:185px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  1. Introduction</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Source File
</pre></li>   <li class="sml"><pre>Header file
</pre></li>   <li class="sml"><pre>Object File
</pre></li>   <li class="sml"><pre>Declaration and Definition
</pre></li>   <li class="big"><a name="chap1_4">Pre-processing, Compiling, Linking, Loading and Running</a></li>   <li class="sml"><pre>Executable File Format
</pre></li>   <li class="sml"><pre> Segments (.bss, .code, .data etc)
</pre></li>   <li class="sml"><pre>Creating static library
</pre></li>   <li class="sml"><pre>Creating dynamic library
</pre></li>   <li class="sml"><pre>Discussion on where c fits</pre></li>
  </ul>
 </div>
<pre class="slidecontent">


Refer:
<a href="http://www.minhinc.com/training/cpp/advance-cpp-agenda.php#chap1_4">http://www.minhinc.com/training/cpp/advance-cpp-agenda.php#chap1_4</a>

</pre> &nbsp;<div class="slideheader" style="height:185px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  1. Introduction</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Source File
</pre></li>   <li class="sml"><pre>Header file
</pre></li>   <li class="sml"><pre>Object File
</pre></li>   <li class="sml"><pre>Declaration and Definition
</pre></li>   <li class="sml"><pre>Pre-processing, Compiling, Linking, Loading and Running
</pre></li>   <li class="big"><a name="chap1_5">Executable File Format</a></li>   <li class="sml"><pre> Segments (.bss, .code, .data etc)
</pre></li>   <li class="sml"><pre>Creating static library
</pre></li>   <li class="sml"><pre>Creating dynamic library
</pre></li>   <li class="sml"><pre>Discussion on where c fits</pre></li>
  </ul>
 </div>
<pre class="slidecontent">


Refer:
<a href="http://www.minhinc.com/training/cpp/advance-cpp-agenda.php#chap1_5">http://www.minhinc.com/training/cpp/advance-cpp-agenda.php#chap1_5</a>

</pre> &nbsp;<div class="slideheader" style="height:185px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  1. Introduction</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Source File
</pre></li>   <li class="sml"><pre>Header file
</pre></li>   <li class="sml"><pre>Object File
</pre></li>   <li class="sml"><pre>Declaration and Definition
</pre></li>   <li class="sml"><pre>Pre-processing, Compiling, Linking, Loading and Running
</pre></li>   <li class="sml"><pre>Executable File Format
</pre></li>   <li class="big"><a name="chap1_6"> Segments (.bss, .code, .data etc)</a></li>   <li class="sml"><pre>Creating static library
</pre></li>   <li class="sml"><pre>Creating dynamic library
</pre></li>   <li class="sml"><pre>Discussion on where c fits</pre></li>
  </ul>
 </div>
<pre class="slidecontent">


Refer:
<a href="http://www.minhinc.com/training/cpp/advance-cpp-agenda.php#chap1_6">http://www.minhinc.com/training/cpp/advance-cpp-agenda.php#chap1_6</a>

</pre> &nbsp;<div class="slideheader" style="height:185px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  1. Introduction</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Source File
</pre></li>   <li class="sml"><pre>Header file
</pre></li>   <li class="sml"><pre>Object File
</pre></li>   <li class="sml"><pre>Declaration and Definition
</pre></li>   <li class="sml"><pre>Pre-processing, Compiling, Linking, Loading and Running
</pre></li>   <li class="sml"><pre>Executable File Format
</pre></li>   <li class="sml"><pre> Segments (.bss, .code, .data etc)
</pre></li>   <li class="big"><a name="chap1_7">Creating static library</a></li>   <li class="sml"><pre>Creating dynamic library
</pre></li>   <li class="sml"><pre>Discussion on where c fits</pre></li>
  </ul>
 </div>
<pre class="slidecontent">


Refer:
<a href="http://www.minhinc.com/training/cpp/advance-cpp-agenda.php#chap1_7">http://www.minhinc.com/training/cpp/advance-cpp-agenda.php#chap1_7</a>

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main1" class="pn">p8</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:185px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  1. Introduction</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Source File
</pre></li>   <li class="sml"><pre>Header file
</pre></li>   <li class="sml"><pre>Object File
</pre></li>   <li class="sml"><pre>Declaration and Definition
</pre></li>   <li class="sml"><pre>Pre-processing, Compiling, Linking, Loading and Running
</pre></li>   <li class="sml"><pre>Executable File Format
</pre></li>   <li class="sml"><pre> Segments (.bss, .code, .data etc)
</pre></li>   <li class="sml"><pre>Creating static library
</pre></li>   <li class="big"><a name="chap1_8">Creating dynamic library</a></li>   <li class="sml"><pre>Discussion on where c fits</pre></li>
  </ul>
 </div>
<pre class="slidecontent">


Refer:
<a href="http://www.minhinc.com/training/cpp/advance-cpp-agenda.php#chap1_8">http://www.minhinc.com/training/cpp/advance-cpp-agenda.php#chap1_8</a>

</pre> &nbsp;<div class="slideheader" style="height:185px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  1. Introduction</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Source File
</pre></li>   <li class="sml"><pre>Header file
</pre></li>   <li class="sml"><pre>Object File
</pre></li>   <li class="sml"><pre>Declaration and Definition
</pre></li>   <li class="sml"><pre>Pre-processing, Compiling, Linking, Loading and Running
</pre></li>   <li class="sml"><pre>Executable File Format
</pre></li>   <li class="sml"><pre> Segments (.bss, .code, .data etc)
</pre></li>   <li class="sml"><pre>Creating static library
</pre></li>   <li class="sml"><pre>Creating dynamic library
</pre></li>   <li class="big"><a name="chap1_9">Discussion on where c fits</a></li>
  </ul>
 </div>
<pre class="slidecontent">

C's type system and error checks exist only at compile-time. The compiled code runs in
a stripped down run-time model with no safety checks for bad type casts,bad array
indices, or bad pointers. There is no garbage collector to manage memory. Instead the
programmer manages heap memory manually. All this makes C fast but fragile.

Perl and Java are more "portable" than C (you can run them on different computers
without a recompile). Java and C++ are more structured than C.  Structure is useful
for large projects. C works best for small projects where performance is important and
the programmers have the time and skill to make it work in C. In any case, C is a very
popular and influential language. This is mainly because of C's clean (if minimal)
style, it's lack of annoying or regrettable constructs, and the relative ease of
writing a C compiler.

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main1" class="pn">p9</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap2">&nbsp;<div class="slideheader" style="height:300px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  2. Data type, Operator and expression</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap2_0">Data types and sizes<br>  - Integer<br>  - Floating point type         <br>  - Pointer<br> - Array<br> - Enum</a></li>   <li class="sml"><pre>Constant
</pre></li>   <li class="sml"><pre>Variable Declaration and Definition
</pre></li>   <li class="sml"><pre> Operator
 - Assignment operator and expression
 - Arithmetic operator
 - Relational operator
 - Conditional operator
</pre></li>   <li class="sml"><pre>Bitwise operator
</pre></li>   <li class="sml"><pre>Type conversion
</pre></li>   <li class="sml"><pre>Conditional expression</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

C provides a standard, minimal set of basic data types. Sometimes these are called
"primitive" types. 
More complex data structures can be built up from these basic types.

Integer Types
The "integral" types in C form a family of integer types.

- char ASCII character -- at least 8 bits.  8 bits provides a signed range of
-128..127  or an unsigned range is 0..255. char is also required to be the "smallest
addressable unit" 

- short Small integer -- at least 16 bits which provides a signed range of 
-32768..32767. Typical size is 16 bits.

- int Default integer -- at least 16 bits, with 32 bits being typical. Defined
to be  the "most comfortable" size for the computer. 

- long Large integer -- at least 32 bits. Typical size is 32 bits which gives a signed
range of about -2 billion ..+2 billion. Some compilers support "long long" for 64 bit 
ints.
 
The integer types can be preceded by the qualifier unsigned which disallows
representing negative numbers, but doubles the largest positive number representable.

Extra: Portability Problems
It is a good idea to use typedefs to set up types like Int32 for 32 bit int and Int16
for 16 bit int. It makes it processor architecture independent.  Various typedef are
available in stdint.h

&lt;&lt;stdint.h&gt;
<pre class="codec">#ifndef __int8_t_defined
# define __int8_t_defined
typedef signed char             int8_t;
typedef short int               int16_t;
typedef int                     int32_t;
# if __WORDSIZE == 64
typedef long int                int64_t;
# else
__extension__
typedef long long int           int64_t;
# endif
#endif

/* Unsigned.  */
typedef unsigned char           uint8_t;
typedef unsigned short int      uint16_t;
#ifndef __uint32_t_defined
typedef unsigned int            uint32_t;
# define __uint32_t_defined
#endif
#if __WORDSIZE == 64
typedef unsigned long int       uint64_t;
#else
__extension__
typedef unsigned long long int  uint64_t;
#endif
.
.
.
</pre>
char Constants
<pre class="code">'A' uppercase 'A' character
'
' newline character
'	' tab character
' ' the "null" character -- integer value 0 (different from the char digit '0')
'\012' the character with value 12 in octal, which is decimal 10
</pre>

Integer constants
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main2" class="pn">p10</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
Numbers in the source code such as 234 default to type int. They may be followed by 
an 'L' (upper or lower case) to designate that the constant should be a long such as
42L.  An integer constant can be written with a leading 0x to indicate that it is
expressed in hexadecimal -- 0x10 is way of expressing the number 16. Similarly, a
constant may be written in octal by preceding it with "0" - 012 is a way of expressing
the number 10.

Type Combination and Promotion
The integral types may be mixed together in arithmetic expressions since they are all
basically just integers with variation in their width. For example, char and int can
be combined in arithmetic expressions such as ('b' + 5), int and long like (5+10L).

Pitfall -- int Overflow
(k*1024) may not work when k is int in low address bit memory. Way to fix the code is
to   rewrite it as (k * 1024L) -- the long constant forced the promotion of the int. 

Floating point Types
float Single precision floating point number typical size: 32 bits double precision
floating point number typical size: 64 bits long double possibly even bigger floating
point number (somewhat obscure)

Constants in the source code such as 3.14 default to type double unless the are
suffixed with an 'f' (float) or 'l' (long double). Single precision equates to about 6
digits of precision and double is about 15 digits of precision. 

floating point numbers is that they are inexact (1.0/3.0 + 1.0/3.0 + 1.0/3.0) // is
this equal to 1.0 exactly?
- Do not Use  equality (==) -- use inequality (&lt;) comparisons instead. 


Array
An array is a data structure which can store a fixed-size sequential collection of
elements of the same type.
 
<pre class="code">score
 |
 v                                                                                    
                          
0       1       2        3                   99     100
---------------------------------           -----------
|      |       |       |          . . . .   |      |   x &lt;-do not use
---------------------------------           -----------

int score[100];

Array declaration

- type arrayname[arraysize]
float a[5];
int x,y,b[5];

Array Initialization
int a[5]=(1,3,5,};//rest initialized with 0
int a[]={1,3,5,7,9};
int age[2][3]={{4,8,12},{19,6,-1}}


           0th col     1st col        2nd col
         ---------------------------------------
0th row  |           |            |
         ---------------------------------------
1st row  |           |            | 
         ---------------------------------------


0th row                                     1st row
0th col     1st col     2nd col             0th col         1st col       2nd col
---------------------------------------     ---------------------------------------
|          |           |            |       |           |           |           |
---------------------------------------     ---------------------------------------
</pre>
Passing array argument
<pre class="code">int func(int score[2][3])
int func(int score[][3]){}
int func(int (*score)[3]){}
func(a);//pass by address, value changed in func
</pre>

</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main2" class="pn">p11</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
Pointer
A pointer is a value which represents a reference to another value sometimes known as
the pointer's "pointee".

Pointer operators
<pre class="code"> * (Deference operator)   - means "the value of"
 &amp; (address-of operator)   - means "address of"

 int a=5;

        5000|               |
    a-&gt; 5004|     5         |&lt;----+
                                  |
 int *pa=&amp;a;                |     |
        6000|               |     |
   pa-&gt; 6004|   5004        |&lt;----+

                                                                                struct
fraction {
int numerator;
int denominator;
};


struct fraction *f1, *f2;


                                                -------------
      -------------                             |     7     | denominator
 f1 |             |  -------------+             +-----------+
      -------------               |             |     22    | numerator
               ^                  +----------&gt;  -------------
               |                                  /                     
    struct fraction*                           struct fraction 
                                              (the whole block
                                              of memory)
</pre>
expression                  Type
<pre class="code">f1                          struct fraction*
*f1                         struct fraction
(*f1).numerator             int
</pre>
complex declarations
<pre class="code">struct fraction** fp; a pointer to a pointer to a struct fraction
struct fraction fract_array[20]; array of 20 struct fraction
struct fraction *fract_ptr_array[20]; an array of 20 pointers to struct fraction
struct fraction (*pfa)[100];
struct fraction (*(*pf)())();

f(int daytab[2][13]) { ... }

It could also be
f(int daytab[][13]) { ... }

Since the number of rows is irrelevant, or it could be
f(int (*daytab)[13]) { ... }

Which says that the parameter is a pointer to an array of 13 integers. 
The parentheses are necessary since brackets [] have higher precedence 
than *. Without parentheses, the declaration would be

int *daytab[13] // array of pointer to ints
</pre>
There is an important difference between these definitions:
<pre class="code">char amessage[] = "now is the time"; /* an array */
char *pmessage = "now is the time"; /* a pointer */
char (*(*x())[])()
x: function returning pointer to array[] of pointer to function returning char
char (*(*x[3])())[5]
x: array[3] of pointer to function returning pointer to array[5] of char
</pre>
Dynamic allocation
<pre class="code">malloc : memory allocation
free      : memory deallocation

int *intptr;
char *charpt;
intptr=(int*)malloc(sizeof(int));
charptr=(char*)malloc(sizeof(char)*6);
free(intptr);
free(charptr);
</pre>
Memory leak - Memory allocated is not de-allocated.
Dangling pointer - A pointer that points to a variable that has been de-allocated.

</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main2" class="pn">p12</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
Pointer arithmetic
<pre class="code">int *pi;
char *pc;
++pi;//jumps 4 bytes in 32 bit processor
++pc;//jumps 1 byte
</pre>
Array &amp; Pointers
<pre class="code">int a[10];
int *b=&amp;a[0];

const char *pc="string";
char ac[]="string";

           -------------------------------------
pc -------&gt;|
           -------------------------------------
</pre>Pointer to a block of memeory
<pre class="code">
ac
-----------------------------------
|
------------------------------------
Array of memory fragments. No address
</pre>
Enum
An enumeration is a list of constant integer values.
<pre class="code">enum boolean { NO, YES };
enum months { JAN = 1, FEB, MAR, APR, MAY, JUN,
JUL, AUG, SEP, OCT, NOV, DEC };
/* FEB = 2, MAR = 3, etc. */
eum {No,YES}; // global

boolean value=NO;

$cat main.c
#include &lt;stdio.h&gt;
struct SomeItem{
enum {MOVIE,MUSIC} itemType;
union{
int movieid;
char moviename[255];
};
};


int main(int argc, char *argv[]){
struct SomeItem someitem;
someitem.itemType=MUSIC;
someitem.movieid=10;
return 0;
}
</pre>
</pre> &nbsp;<div class="slideheader" style="height:245px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  2. Data type, Operator and expression</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Data types and sizes
  - Integer
  - Floating point type         
  - Pointer
 - Array
 - Enum
</pre></li>   <li class="big"><a name="chap2_1">Constant</a></li>   <li class="sml"><pre>Variable Declaration and Definition
</pre></li>   <li class="sml"><pre> Operator
 - Assignment operator and expression
 - Arithmetic operator
 - Relational operator
 - Conditional operator
</pre></li>   <li class="sml"><pre>Bitwise operator
</pre></li>   <li class="sml"><pre>Type conversion
</pre></li>   <li class="sml"><pre>Conditional expression</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Const
The qualifier const can be added to the left of a variable or parameter type to
declare that the code using the variable will not change the variable.

<pre class="code">void foo(const struct fraction* fract);
int i, *pi, *const cpi = &amp;i;
const int j=func();
char amessage[] = "now is the time"; /* an array */
char *pmessage = "now is the time"; /* a pointer */
const int *p; // pointer to constant
int * const p;//const pointer to integer
const int * const p;//const pointer to integer const
</pre>
Const must be defined or initialized at the time of declaration.

Const has internal linkage similar to static.
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main2" class="pn">p13</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">

</pre> &nbsp;<div class="slideheader" style="height:245px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  2. Data type, Operator and expression</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Data types and sizes
  - Integer
  - Floating point type         
  - Pointer
 - Array
 - Enum
</pre></li>   <li class="sml"><pre>Constant
</pre></li>   <li class="big"><a name="chap2_2">Variable Declaration and Definition</a></li>   <li class="sml"><pre> Operator
 - Assignment operator and expression
 - Arithmetic operator
 - Relational operator
 - Conditional operator
</pre></li>   <li class="sml"><pre>Bitwise operator
</pre></li>   <li class="sml"><pre>Type conversion
</pre></li>   <li class="sml"><pre>Conditional expression</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Declaration - Asserts the existence of a variable, function or type defined elsewhere
in the program. A variable may be declared by preceding its type with the keyword
extern.

const declaration are file scope and must be initialized or defined at the time of
declaration.

static variable and functions are file scoped and they can not be defined in other
files like extern.

$ cat a.c
<pre class="code">extern int a;
extern const int b=10;
</pre>
$ cat b.c
<pre class="code">#include &lt;stdio.h&gt;
int a=10;//defined here
const  int b=20; // error while linking
int main(){
return 0;
}
</pre>
$ gcc -c a.c -o a.o
<pre class="code">a.c:2: warning: 'b' initialized and declared 'extern'
</pre>$ gcc -c b.c -o b.o
$ gcc -o aa a.o b.o
<pre class="code">b.o:(.rodata+0x0): multiple definition of 'b'
a.o:(.rodata+0x0): first defined here
collect2: ld returned 1 exit status

int a; // just declaration
void func();//just declaration
 
c++
int a // declaration and definition
extern a // declaration
</pre> 
Declaration can be made multiple times.

Definition - Allocates storage for a variable of a specified type and
optionally initializes the variable

<pre class="code">int a=10; //declaration and definition
void func(){// declaration and definition
</pre>}

- Definition must be only once.

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main2" class="pn">p14</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:289px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  2. Data type, Operator and expression</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Data types and sizes
  - Integer
  - Floating point type         
  - Pointer
 - Array
 - Enum
</pre></li>   <li class="sml"><pre>Constant
</pre></li>   <li class="sml"><pre>Variable Declaration and Definition
</pre></li>   <li class="big"><a name="chap2_3"> Operator<br> - Assignment operator and expression<br> - Arithmetic operator<br> - Relational operator<br> - Conditional operator</a></li>   <li class="sml"><pre>Bitwise operator
</pre></li>   <li class="sml"><pre>Type conversion
</pre></li>   <li class="sml"><pre>Conditional expression</pre></li>
  </ul>
 </div>
<pre class="slidecontent">


An operator is a symbol that tells the compiler to perform specific mathematical or
logical manipulations.

- Assignment operator and expression
Here's the list of assignment shorthand operators...

<pre class="code">+=, -= Increment or decrement by RHS
*=, /= Multiply or divide by RHS
%= Mod by RHS
&gt;&gt;= Bitwise right shift by RHS (divide by power of 2)
&lt;&lt;= Bitwise left shift RHS (multiply by power of 2)
&amp;=, |=, ^= Bitwise and, or, xor by RHS

- Arithmetic Operators
+ Addition
- Subtraction
/ Division
* Multiplication
% Remainder (mod)

- Unary Increment Operators: ++ --
</pre>
The unary ++ and -- operators increment or decrement the value in a variable.
<pre class="code">var++ //post variant
++var //pre variant
</pre>
- Relational Operators
These operate on integer or floating point values and return a 0 or 1 boolean value.

<pre class="code">== Equal
!= Not Equal
&gt; Greater Than
&lt; Less Than
&gt;= Greater or Equal
&lt;= Less or Equal
</pre>
Problem.
<pre class="code">while(x=3);//legal
while(x==3);//legal
</pre>
- Logical Operators
The value 0 is false, anything else is true.
<pre class="code">! Boolean not (unary)
&amp;&amp; Boolean and
|| Boolean or
</pre>
- Conditional Operators ?:
<pre class="code">Exp1 ? Exp2 : Exp3; 
</pre>Where Exp1, Exp2, and Exp3 are expressions. 

- Misc Operators
<pre class="code">sizeof() Returns the size of an variable
&amp; Returns the address of an variable
* Pointer to a variable
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main2" class="pn">p15</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:245px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  2. Data type, Operator and expression</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Data types and sizes
  - Integer
  - Floating point type         
  - Pointer
 - Array
 - Enum
</pre></li>   <li class="sml"><pre>Constant
</pre></li>   <li class="sml"><pre>Variable Declaration and Definition
</pre></li>   <li class="sml"><pre> Operator
 - Assignment operator and expression
 - Arithmetic operator
 - Relational operator
 - Conditional operator
</pre></li>   <li class="big"><a name="chap2_4">Bitwise operator</a></li>   <li class="sml"><pre>Type conversion
</pre></li>   <li class="sml"><pre>Conditional expression</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Bitwise Operators
C includes operators to manipulate memory at the bit level.

<pre class="code">~ Bitwise Negation (unary)  flip 0 to 1 and 1 to 0 throughout
&amp; Bitwise And
| Bitwise Or
^ Bitwise Exclusive Or
&gt;&gt; Right Shift by right hand side (RHS) (divide by power of 2)
&lt;&lt; Left Shift by RHS (multiply by power of 2)
</pre>
- Note &amp; and &amp;&amp; are different
<pre class="code">unsigned int a = 60; /* 60 = 0011 1100 */ 
unsigned int b = 13; /* 13 = 0000 1101 */ 
int c = 0;                                                                            
                  
c = a &amp; b; /* 12 = 0000 1100 */ 
printf("Line 1 - Value of c is %d\n", c ); 
c = a | b; /* 61 = 0011 1101 */ 
printf("Line 2 - Value of c is %d\n", c ); 
c = a ^ b; /* 49 = 0011 0001 */ 
printf("Line 3 - Value of c is %d\n", c ); 
c = ~a; /*-61 = 1100 0011 */ 
printf("Line 4 - Value of c is %d\n", c ); 
c = a &lt;&lt; 2; /* 240 = 1111 0000 */ 
printf("Line 5 - Value of c is %d\n", c ); 
c = a &gt;&gt; 2; /* 15 = 0000 1111 */ 
</pre>
</pre> &nbsp;<div class="slideheader" style="height:245px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  2. Data type, Operator and expression</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Data types and sizes
  - Integer
  - Floating point type         
  - Pointer
 - Array
 - Enum
</pre></li>   <li class="sml"><pre>Constant
</pre></li>   <li class="sml"><pre>Variable Declaration and Definition
</pre></li>   <li class="sml"><pre> Operator
 - Assignment operator and expression
 - Arithmetic operator
 - Relational operator
 - Conditional operator
</pre></li>   <li class="sml"><pre>Bitwise operator
</pre></li>   <li class="big"><a name="chap2_5">Type conversion</a></li>   <li class="sml"><pre>Conditional expression</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

When an operator has operands of different types, they are converted to a common type
according to a small number of rules. In  general, the only automatic conversions are
those that convert a promotion "narrower" operand into "wider" one without losing
information, such as converting an integer into floating point in an expression like f
+ i. 

Truncation
Expressions that might lose information, like assigning a longer integer type to a
shorter, or a floating-point type to an integer, may draw a warning, but they are not
illegal.                                                                      
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main2" class="pn">p16</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:245px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  2. Data type, Operator and expression</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Data types and sizes
  - Integer
  - Floating point type         
  - Pointer
 - Array
 - Enum
</pre></li>   <li class="sml"><pre>Constant
</pre></li>   <li class="sml"><pre>Variable Declaration and Definition
</pre></li>   <li class="sml"><pre> Operator
 - Assignment operator and expression
 - Arithmetic operator
 - Relational operator
 - Conditional operator
</pre></li>   <li class="sml"><pre>Bitwise operator
</pre></li>   <li class="sml"><pre>Type conversion
</pre></li>   <li class="big"><a name="chap2_6">Conditional expression</a></li>
  </ul>
 </div>
<pre class="slidecontent">

Conditional Expression ?:
Exp1 ? Exp2 : Exp3; 
Where Exp1, Exp2, and Exp3 are expressions. 

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main2" class="pn">p17</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap3">&nbsp;<div class="slideheader" style="height:145px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  3. Array Pointers References</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap3_0">Defnining and Initialzing Array</a></li>   <li class="sml"><pre>Defining and initializing Pointers
</pre></li>   <li class="sml"><pre>Using Pointers to access array elements
</pre></li>   <li class="sml"><pre>Pointers and const qualifiers
</pre></li>   <li class="sml"><pre>Dynamic allocated arrays
</pre></li>   <li class="sml"><pre>Multidimensional array arugment to function</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

- Define and initialize static array
- Array has to be initialized with constant variable that is qualified at compile time

<pre class="code">int ia[get_size()]  // get_size() is function and resolved at run time
const int size=get_size(); // size resolved at run time
int ia[size]; // error
int ia[10*2-10]; // resolved at compile time
</pre>
- Local copy are uninitialized where as global copy is initialized to 0.
- Uninitialized stati c or global array goes to .bss section in the binary.
- Array is initialized in {} block

<pre class="code">int arr[]={1,2,3} // array size 3
</pre>or
<pre class="code">Int arr[3]={1,2,3}
Int arr[5]={1,2,3} // rest initialized with 0
</pre>
Uninitialized const array takes garbage value
<pre class="code">const int arr[3];// garbage value

C++ const uninitialized array is an error
const int arr[3]={1}; // rest initialized with 0
const int *arr=new arr[3]() // c++ value initialized
</pre>
Breaking array boundary is not an exception and it memory over writing
<pre class="code">int ary[1];
ary[2]=0;
</pre>
Function array arguments are actually pointer to array.
<pre class="code">void func(int ap[4]);
Void func(int ap[]);
void func(int *ap); //all are same
func (arr);
</pre>
-Pointer to array and multidimensional array
<pre class="code">void func(int (*arr)[10]);
void func(int arr[][10]);
void func(int arr[4][10]);// all same
</pre>
- Array can not be copied or assigned
<pre class="code">int ia2[](ia); // error
ia2 = ia1; //error
</pre>
- Array size can not be known.
<pre class="code">sizeof(arr)/sizeof(&amp;arr[0])
</pre>
- Array memory management is in users hand. Chance of memory overwriting.

<pre class="code">void func(int pa[6]){
pa[6]=8;
}
int pa[4];
func(pa);
</pre>
- Character array can be initialized with string null terminated.
<pre class="code">char ca[] = "C++";
</pre>
- Character array can be initialized character wise, many not be null 
terminated
<pre class="code">char cal[] = {'C', '+', '+', '\0' };
</pre>
- In case of character strings use strn string function for manipulation, si.e 
<pre class="code">strncpy, strncat.
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main3" class="pn">p18</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:145px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  3. Array Pointers References</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Defnining and Initialzing Array
</pre></li>   <li class="big"><a name="chap3_1">Defining and initializing Pointers</a></li>   <li class="sml"><pre>Using Pointers to access array elements
</pre></li>   <li class="sml"><pre>Pointers and const qualifiers
</pre></li>   <li class="sml"><pre>Dynamic allocated arrays
</pre></li>   <li class="sml"><pre>Multidimensional array arugment to function</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

<pre class="code">type * pointer_name[,*pointer,name2,..];
char * terry = "hello"; //character string
const char *terry;//pointer to constant char
char *const terry;//const pointer to char
const char *const terry;//const pointer to char const
</pre>
Various library function involving char pointer manipulation
<pre class="code">str[n]cpy,str[n]cat,str[n]cmp,strdup,bcopy,memccopy,
memcpy,memmove,string,wcscpy,wcsncpy,index, rindex, 
strcasecmp,strchr,strcmp, strcoll, strcspn,  strfry,  
strlen,strncasecmp, strpbrk, strrchr,strsep, strspn, 
strstr, strtok, strxfrm                                                               
     
</pre>
- Dynamically allocating array, allocating on heap
<pre class="code">- void *realloc(void *ptr, size_t size);// buffer remain uninitialized
int pia = malloc(sizeof(int)*10); // uninitialized

- void *realloc(void *ptr, size_t size);// initialized buffer with char 0;
int pia=calloc(sizeof(int)*10);

- void *realloc(void *ptr, size_t size);// re-allocate uninitialized buffer of new
size if continuous memory is available for new size.
int pia=malloc(sizeof(int)*10);
pia=realloc(sizeof(int)*20);
</pre>
If run on empty buffer malloc is called. 0 size free the memory

<pre class="code">- void *realloc(void *ptr, size_t size);, frees the allocated memory
free(pia); 
</pre>

- Its legal to dynamically allocate empty array unless dereferenced
<pre class="code">char arr[0]; // error
char arr = new char[0];// ok
char arr = new char[get_size()];//get_size() can return 0;
</pre>

</pre> &nbsp;<div class="slideheader" style="height:145px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  3. Array Pointers References</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Defnining and Initialzing Array
</pre></li>   <li class="sml"><pre>Defining and initializing Pointers
</pre></li>   <li class="big"><a name="chap3_2">Using Pointers to access array elements</a></li>   <li class="sml"><pre>Pointers and const qualifiers
</pre></li>   <li class="sml"><pre>Dynamic allocated arrays
</pre></li>   <li class="sml"><pre>Multidimensional array arugment to function</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

- Pointer works in dynamic allocation

- Array of pointers
<pre class="code">classA *arrp=new classA[10];
</pre>
- Pointer to array of size 10
<pre class="code">classA (*ptoarr)=new classA[10];
classA arryofarry[3][10;
ptoarr=&amp;arryofarry[2];

int (*pa)[10];
int *pi[10];

int arr[4][10]
pa=arr;
pa++


int (*pa)[10];
int arr[4][10];
pa=arr;
i=0;
for(j=0;j&lt;4;j++){
for(k=0;k&lt;10;k++)
arr[j][k]=i;
++i;
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main3" class="pn">p19</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">}
++pa;
for(j=0;j&lt;10;j++)
cout&lt;&lt;pa[0][j];
</pre>
</pre> &nbsp;<div class="slideheader" style="height:145px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  3. Array Pointers References</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Defnining and Initialzing Array
</pre></li>   <li class="sml"><pre>Defining and initializing Pointers
</pre></li>   <li class="sml"><pre>Using Pointers to access array elements
</pre></li>   <li class="big"><a name="chap3_3">Pointers and const qualifiers</a></li>   <li class="sml"><pre>Dynamic allocated arrays
</pre></li>   <li class="sml"><pre>Multidimensional array arugment to function</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

read from the right to left.
<pre class="code">const char *terry;//pointer to constant char
char *const terry;//const pointer to char
const char *const terry;//const pointer to char const
</pre>
</pre> &nbsp;<div class="slideheader" style="height:145px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  3. Array Pointers References</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Defnining and Initialzing Array
</pre></li>   <li class="sml"><pre>Defining and initializing Pointers
</pre></li>   <li class="sml"><pre>Using Pointers to access array elements
</pre></li>   <li class="sml"><pre>Pointers and const qualifiers
</pre></li>   <li class="big"><a name="chap3_4">Dynamic allocated arrays</a></li>   <li class="sml"><pre>Multidimensional array arugment to function</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

- malloc, calloc, realloc and free  are used for dynamic allocation
<pre class="code">#include &lt;stdlib.h&gt;

void *calloc(size_t nmemb, size_t size);
void *malloc(size_t size);
void free(void *ptr);
void *realloc(void *ptr, size_t size);
</pre>
</pre> &nbsp;<div class="slideheader" style="height:145px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  3. Array Pointers References</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Defnining and Initialzing Array
</pre></li>   <li class="sml"><pre>Defining and initializing Pointers
</pre></li>   <li class="sml"><pre>Using Pointers to access array elements
</pre></li>   <li class="sml"><pre>Pointers and const qualifiers
</pre></li>   <li class="sml"><pre>Dynamic allocated arrays
</pre></li>   <li class="big"><a name="chap3_5">Multidimensional array arugment to function</a></li>
  </ul>
 </div>
<pre class="slidecontent">

$ cat main.c
<pre class="code">#include &lt;stdio.h&gt;

void printarray(int (*arr)[4]){
int i=0,j=0;
for (i=0;i&lt;4;i++){
for (j=0;j&lt;4;j++)
printf("%d ",arr[i][j]);
printf("
");
}
}
void preparearray(int (*arr)[4]){
int i=0,j=0;
for (i=0;i&lt;4;i++)
for (j=0;j&lt;4;j++)
arr[i][j]=i;
}

int main(int argc,char *argv[]){
int arr[4][4];
preparearray(arr);
printarray(arr);
return 0;
}

$ ./a.out 
0 0 0 0 
1 1 1 1 
2 2 2 2 
3 3 3 3 
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main3" class="pn">p20</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap4">&nbsp;<div class="slideheader" style="height:175px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  4. Control structures</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap4_0">Statement and Block</a></li>   <li class="sml"><pre>Statements
 - If
 - Switch
 - While
 - For
 - do while
</pre></li>   <li class="sml"><pre>Break and Continue
</pre></li>   <li class="sml"><pre>Goto and Labels</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

A single statement is any valid string in C which ends with a semi colon.
e.g.
<pre class="code">a = 6;
; // empty statement
printf ("I love C because...");
</pre>
A compound statement is any number of single statements grouped together in curly
braces. The curly braces do not end with a semi colon and stand in place of a single
statement. Any pair of curly braces may contain local declarations after the opening
brace. e.g.
Block statement
<pre class="code">{
int i;
a = 6;
}

{ 
int a; // second definition but in different statement block
a = 6;
printf ("I love C because...");
}
</pre>
</pre> &nbsp;<div class="slideheader" style="height:230px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  4. Control structures</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Statement and Block
</pre></li>   <li class="big"><a name="chap4_1">Statements<br> - If<br> - Switch<br> - While<br> - For<br> - do while</a></li>   <li class="sml"><pre>Break and Continue
</pre></li>   <li class="sml"><pre>Goto and Labels</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

If
<pre class="code"> if (&lt;expression&gt;) &lt;statement&gt; // simple form with no {}'s or else clause
 if (&lt;expression&gt;) { // simple form with {}'s to group statements
 &lt;statement&gt;
 &lt;statement&gt;
 }
                                                                                      
                           
if (&lt;expression&gt;) { // full then/else form
&lt;statement&gt;
}
else {
&lt;statement&gt;
} 
</pre>
Switch
The switch statement is a sort of specialized form of if used to efficiently separate
different blocks of code based on the value of an integer.

<pre class="code">switch (&lt;expression&gt;) {
case &lt;const-expression-1&gt;:
&lt;statement&gt;
break;
case &lt;const-expression-2&gt;:
&lt;statement&gt;
break;
case &lt;const-expression-3&gt;: // here we combine case 3 and 4
case &lt;const-expression-4&gt;:
&lt;statement&gt;
break;
default: // optional
&lt;statement&gt;
}
</pre>
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main4" class="pn">p21</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
While Loop
The while loop evaluates the test expression before every loop, so it can execute zero
times if the condition is initially false. It requires the parenthesis like the if.

<pre class="code">while (&lt;expression&gt;) {
&lt;statement&gt;
}
</pre>
Do-While Loop
Like a while, but with the test condition at the bottom of the loop.  The loop body
will always execute at least once. The do-while is an unpopular area of the language,
most everyone tries to use the straight while if at all possible.

<pre class="code">do {
&lt;statement&gt;
} while (&lt;expression&gt;)
</pre>
</pre> &nbsp;<div class="slideheader" style="height:175px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  4. Control structures</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Statement and Block
</pre></li>   <li class="sml"><pre>Statements
 - If
 - Switch
 - While
 - For
 - do while
</pre></li>   <li class="big"><a name="chap4_2">Break and Continue</a></li>   <li class="sml"><pre>Goto and Labels</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Break
The break statement will move control outside a loop or switch statement.
<pre class="code">while (&lt;expression&gt;) {
&lt;statement&gt;
&lt;statement&gt;
if (&lt;condition which can only be evaluated here&gt;)
break;
&lt;statement&gt;
&lt;statement&gt;
}
</pre>
// control jumps down here on the break
Continue
The continue statement causes control to jump to the bottom of the loop, effectively
skipping over any code below the continue.
<pre class="code">while (&lt;expression&gt;) {
...
if (&lt;condition&gt;)
continue;
...
...
// control jumps here on the continue
}
</pre>
</pre> &nbsp;<div class="slideheader" style="height:175px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  4. Control structures</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Statement and Block
</pre></li>   <li class="sml"><pre>Statements
 - If
 - Switch
 - While
 - For
 - do while
</pre></li>   <li class="sml"><pre>Break and Continue
</pre></li>   <li class="big"><a name="chap4_3">Goto and Labels</a></li>
  </ul>
 </div>
<pre class="slidecontent">

A goto statement in C programming language provides an unconditional jump from the
goto to a labeled statement in the same function.
NOTE: Use of goto statement is highly discouraged in any programming language because
it makes difficult to trace the control flow of a program, making the program hard to
understand and hard to modify. Any program that uses a goto can be rewritten so that
it doesn't need the goto.

Syntax 
The syntax for a goto statement in C is as follows: 

<pre class="code">goto label; 
.. 
. 
label: statement; 
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main4" class="pn">p22</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main4" class="pn">p23</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap5">&nbsp;<div class="slideheader" style="height:221px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  5. Function</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap5_0">struct<br> - Structures and functions<br> - Array of structure<br> - Self referential structure<br> - Typedef<br> - Unions<br> - Bit-fields</a></li>
  </ul>
 </div></a>
<pre class="slidecontent">

A structure is a collection of one or more variables, possibly of different types,
grouped together under a single name for convenient handling.
A structure is user defined type.
All members are public.

<pre class="code">struct fraction{
int numerator;
int denominator;
};
</pre>
A struct declaration defines a type. The right brace that terminates the list of
members may be followed by a list of variables, just as for any basic type.  That is,

<pre class="code">struct { ... } x, y, z;
</pre>
is syntactically analogous to
<pre class="code">int x, y, z;
</pre>
struct initialization
A structure can be initialized by following its definition with a list of
initializers, each a constant expression, for the members:

<pre class="code">struct maxpt = { 320, 200 };
</pre>
Structure as member

<pre class="code">struct point{
int x;
int y;
};

                                                                                      
                             
struct rect{
struct point p1;
struct point p2;
};

struct {
int len;
char *str;
} *p;  //instantiation
</pre>
then
<pre class="code">++p-&gt;len
</pre>Increments len, not p, because the implied parenthesization is ++(p-&gt;len).

Structure and Function
 - pass by value
 - pass by address

<pre class="code">struct addpoints(const struct point p1, const stuct point p2){
stuct point result;
...
return result;
}

struct addpoints(const struct point *p1,const struct point *p20){
...
return result;
}
</pre>
Recursively defined structures
- when two structures refer to each other, one must be declared in
 incomplete(prototype) fashion
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main5" class="pn">p24</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">

<pre class="code">struct HUMAN;
struct PEN{
char name[NAME_LIMIT];
char species[NAME_LIMIT];
struct HUMAN *owner;
}fido={"Fido","Canis lupus familiaries"};
struct HUMAN{
char name[NAME_LIMIT];
struct PEN pets[PET_LIMIT];
}sam={"Sam",{fido}};
</pre>
Array of Structures
Consider writing a program to count the occurrences of each C keyword.

<pre class="code">struct key {
char *word;
int count;
} keytab[NKEYS];                                                                      
                   
</pre>                                                                                      
                             
Initialize

<pre class="code">struct key {
char *word;
int count;
} keytab[] = {
"auto", 0,
"break", 0,
"case", 0,
"char", 0,
"const", 0,
"continue", 0,
"default", 0,
/* ... */
"unsigned", 0,
"void", 0,
"volatile", 0,
"while", 0
};
</pre>
Typedefs

<pre class="code">typedef struct{
} pstruct; //typedef
pstruct p;
</pre>
- Self referential structure
Consider simple tree structure where each node has value and it pointer to left and
right node of the tree.

<pre class="code">struct tnode { /* the tree node: */
int data; /* number of occurrences */
struct tnode *left; /* left child */
struct tnode *right; /* right child */
};
</pre>

Union
A union is a variable that may hold (at different times) objects of different types
and sizes, with the  compiler keeping track of size and alignment requirements

union-name.member
or
union-pointer-&gt;member

<pre class="code">union u_tag {
int ival;
float fval;
char *sval;
} u;
</pre>
The variable u will be large enough to hold the largest of the three types;    

<pre class="code">struct {
char *name;
int flags;
int utype;
union {
int ival;
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main5" class="pn">p25</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">float fval;
char *sval;
} u;
} symtab[NSYM];
</pre>
the member ival is referred to as
<pre class="code">symtab[i].u.ival
</pre>
and the first character of the string sval by either of
<pre class="code">*symtab[i].u.sval
symtab[i].u.sval[0]
</pre>

- union can be used to find polarity of machine
<pre class="code">union{
unsigned Int i;
char *c[4];
}un;
un.i=1
if(un.c[0])
printf("little endian
")
Else
printf("big endian");
</pre>
Bit fields
If space is a serious concern, select the number of bits used for each member
A bit-field, or field for short, is a set of adjacent bits within a single
implementation-defined storage unit that we will call a "word."

<pre class="code">struct  {
unsigned int is_keyword:1;
unsigned is_extern: 1;
unsigned is_static: 1;
}flags;

flags.is_extern = flags.is_static = 1; //turn on
flags.is_extern = flags.is_static = 0; // turn off
</pre>if (flags.is_extern == 0 &amp;&amp; flags.is_static == 0) // to test them

Files are not arrays and they do not have addresses, so the &amp;
operator cannot be applied on them.

Almost everything about fields is implementation-dependent. Whether a field may
overlap a word boundary is implementation-defined.  Fields need not be names; unnamed
fields (a colon and width only) are used for padding. The special width 0 may be used
to force alignment at the next word boundary.

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main5" class="pn">p26</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap6">&nbsp;<div class="slideheader" style="height:205px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  6. Complex Data Types</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap6_0">Function Introduction</a></li>   <li class="sml"><pre>Scope rule
</pre></li>   <li class="sml"><pre>Header rule
</pre></li>   <li class="sml"><pre>Block structure
</pre></li>   <li class="sml"><pre>Function declaration and Definition
</pre></li>   <li class="sml"><pre>Value and reference parameters
</pre></li>   <li class="sml"><pre>Inline function
</pre></li>   <li class="sml"><pre>Recursion
</pre></li>   <li class="sml"><pre>Preprocessor
 - File inclusion
  - Macro
  - Conditional inclusion</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

Function
A small program(subroutine) that performs a particular task
- Input : parameter / argument
- Perform what ? : function body
- Output :  return value

Modular programming design
- Large and complex task can be divided into smaller and simple task which is more
easily solved (implemented).
- Also called
 - structured design
 - Top-down design
 - Divide-and-Conquer

/*
Computes double of a number.
Works by tripling the number, and then subtracting to get back to double.
*/
<pre class="code">static int Twice(int num) {
int result = num * 3;
result = result - num;
return(result);
}
</pre>
</pre> &nbsp;<div class="slideheader" style="height:205px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  6. Complex Data Types</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Function Introduction
</pre></li>   <li class="big"><a name="chap6_1">Scope rule</a></li>   <li class="sml"><pre>Header rule
</pre></li>   <li class="sml"><pre>Block structure
</pre></li>   <li class="sml"><pre>Function declaration and Definition
</pre></li>   <li class="sml"><pre>Value and reference parameters
</pre></li>   <li class="sml"><pre>Inline function
</pre></li>   <li class="sml"><pre>Recursion
</pre></li>   <li class="sml"><pre>Preprocessor
 - File inclusion
  - Macro
  - Conditional inclusion</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

The scope of a name is the part of the program within which the name can be used. 
Global variable
- Declared, outside function block
- Accessible everywhere

- Global variable is destroyed only when a program is terminated
- Global variable is initialized before main function enters

Local variable ( automatic variable?)
- Declared inside function body
- Accessible only in the function
- Local variable is created when a function is called and is destroyed when a function
returns
- Storage allocation on stack.

Static variable ( declared in a function)
- (Usually) accessible in the function
- Initialized to 0
- Goes to initialized or uninitialized section and not on stack
- Static variable persists until the program is terminated  

<pre class="code">main() { ... }
int sp = 0; // global variable, extern is allowed in other file
static sps=0; // extern is not allowed in other file
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p27</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">double val[MAXVAL];
void push(double f) { ... }
double pop(void) { ... }
</pre>
$ cat test1.c
<pre class="code">int sp=20;
</pre>$ cat main.c
<pre class="code">#include &lt;stdio.h&gt;
extern int sp;
int main(){
printf("sp %d\n",sp);
return 0;
}
</pre>                                                                                      
                             
</pre> &nbsp;<div class="slideheader" style="height:205px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  6. Complex Data Types</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Function Introduction
</pre></li>   <li class="sml"><pre>Scope rule
</pre></li>   <li class="big"><a name="chap6_2">Header rule</a></li>   <li class="sml"><pre>Block structure
</pre></li>   <li class="sml"><pre>Function declaration and Definition
</pre></li>   <li class="sml"><pre>Value and reference parameters
</pre></li>   <li class="sml"><pre>Inline function
</pre></li>   <li class="sml"><pre>Recursion
</pre></li>   <li class="sml"><pre>Preprocessor
 - File inclusion
  - Macro
  - Conditional inclusion</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

A header file is a file with extension .h which contains C function declarations and
macro definitions and to be shared between several source files.

</pre> &nbsp;<div class="slideheader" style="height:205px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  6. Complex Data Types</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Function Introduction
</pre></li>   <li class="sml"><pre>Scope rule
</pre></li>   <li class="sml"><pre>Header rule
</pre></li>   <li class="big"><a name="chap6_3">Block structure</a></li>   <li class="sml"><pre>Function declaration and Definition
</pre></li>   <li class="sml"><pre>Value and reference parameters
</pre></li>   <li class="sml"><pre>Inline function
</pre></li>   <li class="sml"><pre>Recursion
</pre></li>   <li class="sml"><pre>Preprocessor
 - File inclusion
  - Macro
  - Conditional inclusion</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Variables can be defined in a block-structured fashion within a function. 
Declarations of variables (including initializations) may follow the left brace that
introduces any compound statement, not just the one that begins a function. Variables
declared in this way hide any identically named variables in outer blocks, and remain
in existence until the matching right brace. 

For example, in

<pre class="code">if (n &gt; 0) {
int i; /* declare a new i */
for (i = 0; i &lt; n; i++)
...
}
</pre>
or
simple block {
<pre class="code">using namespace abc;
var=10;//var in abv
}
{
using namespace def;
var=20;//var in def
}
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p28</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:205px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  6. Complex Data Types</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Function Introduction
</pre></li>   <li class="sml"><pre>Scope rule
</pre></li>   <li class="sml"><pre>Header rule
</pre></li>   <li class="sml"><pre>Block structure
</pre></li>   <li class="big"><a name="chap6_4">Function declaration and Definition</a></li>   <li class="sml"><pre>Value and reference parameters
</pre></li>   <li class="sml"><pre>Inline function
</pre></li>   <li class="sml"><pre>Recursion
</pre></li>   <li class="sml"><pre>Preprocessor
 - File inclusion
  - Macro
  - Conditional inclusion</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Function declaration does not have block.
<pre class="code">void func();
extern funct();
</pre>
Function declaration goes to header file.

Function definition has {} block.
Function when called callee function data is allocated on stack.
<pre class="code">void func(){
}
</pre>Function definition goes to source file.

Function call stack
Supports the function call/return mechanism
- Each time a function calls another function, a stack frame (also known as an
activation record)  is pushed onto the stack
- Maintains the return address that the called function needs to return to the calling
function
- Contains automatic variables - parameters and any local variables the function
declares
- When the callee functions returns
 - Stack frame for the function call is popped
 - Control transfers to the return address in the popped stack frame
Stack overflow
- Due memory limitation new stack allocation is not possible

</pre> &nbsp;<div class="slideheader" style="height:205px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  6. Complex Data Types</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Function Introduction
</pre></li>   <li class="sml"><pre>Scope rule
</pre></li>   <li class="sml"><pre>Header rule
</pre></li>   <li class="sml"><pre>Block structure
</pre></li>   <li class="sml"><pre>Function declaration and Definition
</pre></li>   <li class="big"><a name="chap6_5">Value and reference parameters</a></li>   <li class="sml"><pre>Inline function
</pre></li>   <li class="sml"><pre>Recursion
</pre></li>   <li class="sml"><pre>Preprocessor
 - File inclusion
  - Macro
  - Conditional inclusion</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Function caller passes argument to function callee as value. There is no reference in
c.

<pre class="code">int i=0;
int *pa=&amp;i;
char *ps;
void func(int);
void func(int*);
void func(char **);

func(i);
func(pa);
func(&amp;ps,10);

void func(char **pps,int isize){
*pps=malloc(isize*sizeof(char));
}
</pre>                                                    
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p29</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:205px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  6. Complex Data Types</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Function Introduction
</pre></li>   <li class="sml"><pre>Scope rule
</pre></li>   <li class="sml"><pre>Header rule
</pre></li>   <li class="sml"><pre>Block structure
</pre></li>   <li class="sml"><pre>Function declaration and Definition
</pre></li>   <li class="sml"><pre>Value and reference parameters
</pre></li>   <li class="big"><a name="chap6_6">Inline function</a></li>   <li class="sml"><pre>Recursion
</pre></li>   <li class="sml"><pre>Preprocessor
 - File inclusion
  - Macro
  - Conditional inclusion</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

 The compiler will insert the complete body of the inline function in every place in
the code where that function is used.
- Reduce overhead for function call &amp; return
- Effective when a function is short and simple

<pre class="code">inline int cube(int n){
return n*n*n;
}
</pre>
</pre> &nbsp;<div class="slideheader" style="height:205px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  6. Complex Data Types</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Function Introduction
</pre></li>   <li class="sml"><pre>Scope rule
</pre></li>   <li class="sml"><pre>Header rule
</pre></li>   <li class="sml"><pre>Block structure
</pre></li>   <li class="sml"><pre>Function declaration and Definition
</pre></li>   <li class="sml"><pre>Value and reference parameters
</pre></li>   <li class="sml"><pre>Inline function
</pre></li>   <li class="big"><a name="chap6_7">Recursion</a></li>   <li class="sml"><pre>Preprocessor
 - File inclusion
  - Macro
  - Conditional inclusion</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

C functions may be used recursively; that is, a function may call itself either
directly or indirectly.

<pre class="code">#include &lt;stdio.h&gt;
/* printd: print n in decimal */
void printd(int n)
{
if (n &lt; 0) {
putchar('-');
n = -n;
}
if (n / 10)
printd(n / 10);
putchar(n % 10 +'0');
}

--------------
void printd(int 12)
{
if (n &lt; 0) {
putchar('-');
n = -n;
}
if (n / 10)
printd(n / 10);      -----------------
putchar(n % 10 +'0');                 |
}                                     |
-------------                         |
-------------                         |
void printd(int 1) &lt;----------------
{
if (n &lt; 0) {
putchar('-');
n = -n;
}
if (n / 10)
printd(n / 10);
putchar(n % 10 +'0');
}
-------------
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p30</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:238px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  6. Complex Data Types</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Function Introduction
</pre></li>   <li class="sml"><pre>Scope rule
</pre></li>   <li class="sml"><pre>Header rule
</pre></li>   <li class="sml"><pre>Block structure
</pre></li>   <li class="sml"><pre>Function declaration and Definition
</pre></li>   <li class="sml"><pre>Value and reference parameters
</pre></li>   <li class="sml"><pre>Inline function
</pre></li>   <li class="sml"><pre>Recursion
</pre></li>   <li class="big"><a name="chap6_8">Preprocessor<br> - File inclusion<br>  - Macro<br>  - Conditional inclusion</a></li>
  </ul>
 </div>
<pre class="slidecontent">

File inclusion
File inclusion makes it easy to handle collections of #defines and declarations (among
other things). Any source line of the form

<pre class="code">#include "filename"
</pre>or
<pre class="code">#include &lt;filename&gt;
</pre>
Macro
A definition has the form

<pre class="code">#define name replacement text
#define paste(front, back) front ## back
</pre>Conditional Inclusion
Conditional inclusion provides a way to include code selectively, depending 
on the value of conditions evaluated during compilation.

<pre class="code">#if SYSTEM == SYSV
#define HDR "sysv.h"
#elif SYSTEM == BSD
#define HDR "bsd.h"
#elif SYSTEM == MSDOS
#define HDR "msdos.h"
#else
#define HDR "default.h"
#endif
#include HDR
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p31</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre style="text-align:center;line-height:1395px;font-size:24pt">Left Blank</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#mainL" class="pn">p32</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap7">&nbsp;<div class="slideheader" style="height:145px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  7. Input and Output</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap7_0">Standard Input and Output</a></li>   <li class="sml"><pre>Buffered i/o
</pre></li>   <li class="sml"><pre>Variable length argument list
</pre></li>   <li class="sml"><pre>File access
</pre></li>   <li class="sml"><pre>Line input and output
</pre></li>   <li class="sml"><pre>Error handling - stderr and exit</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

Standard Input
Input from system console

<pre class="code">int getchar(void)
prog &lt;infile   //prog is user program with getchar
anotherprog | prog
</pre>
Output to system console
<pre class="code">int putchar(int)
prog &gt;outfile
prog | anotherprog
</pre>
Various unbuffered APIs
<pre class="code">int open(const char *pathname, int flags, mode_t mode);
ssize_t read(int fd, void *buf, size_t count);
ssize_t write(int fd, const void *buf, size_t count);
off_t lseek(int fd, off_t offset, int whence);
int close(int fd);
</pre>
</pre> &nbsp;<div class="slideheader" style="height:145px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  7. Input and Output</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Standard Input and Output
</pre></li>   <li class="big"><a name="chap7_1">Buffered i/o</a></li>   <li class="sml"><pre>Variable length argument list
</pre></li>   <li class="sml"><pre>File access
</pre></li>   <li class="sml"><pre>Line input and output
</pre></li>   <li class="sml"><pre>Error handling - stderr and exit</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

<pre class="code">          --------------         -------- 
          | User Space | &lt;-----&gt; |Buffer|
          --------------         --------
                ^
                |
                v
--------------------------------------
              Kernel
                                                                  

 FILE *fopen(const char *path, const char *mode);
 FILE *fdopen(int fd, const char *mode);
 int fprintf(FILE *stream, const char *format, ...);
 int fgetc(FILE *stream);
 int fputc(int c, FILE *stream);
 int fclose(FILE *fp);
</pre>
</pre> &nbsp;<div class="slideheader" style="height:145px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  7. Input and Output</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Standard Input and Output
</pre></li>   <li class="sml"><pre>Buffered i/o
</pre></li>   <li class="big"><a name="chap7_2">Variable length argument list</a></li>   <li class="sml"><pre>File access
</pre></li>   <li class="sml"><pre>Line input and output
</pre></li>   <li class="sml"><pre>Error handling - stderr and exit</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

<pre class="code">#include &lt;stdarg.h&gt; 
double average(int num,...) 
{ 
va_list valist; 
double sum = 0.0; 
int i; 
/* initialize valist for num number of arguments */ 
va_start(valist, num); 
/* access all the arguments assigned to valist */ 
for (i = 0; i &lt; num; i++) 
{ 
sum += va_arg(valist, int); 
} 
/* clean memory reserved for valist */ 
va_end(valist); 
return sum/num; 
}
</pre>
Define a function with last parameter as ellipses and the one just before the ellipses
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main7" class="pn">p33</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
is always an int which will represent number of arguments. 

Create a va_list type variable in the function definition. This type is defined in
stdarg.h header file. 

Use int parameter and va_start macro to initialize the  va_list variable to an
argument list. The macro va_start is defined in stdarg.h header file. 

Use va_arg macro and va_list variable to access each item in argument list. 

Use a macro va_end to clean up the memory assigned to va_list variable. 
                                                                                      
                            
</pre> &nbsp;<div class="slideheader" style="height:145px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  7. Input and Output</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Standard Input and Output
</pre></li>   <li class="sml"><pre>Buffered i/o
</pre></li>   <li class="sml"><pre>Variable length argument list
</pre></li>   <li class="big"><a name="chap7_3">File access</a></li>   <li class="sml"><pre>Line input and output
</pre></li>   <li class="sml"><pre>Error handling - stderr and exit</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

<pre class="code">FILE *fp;
FILE *fopen(char *name, char *mode);
int getc(FILE *fp)
</pre>
getc returns the next character from the stream referred to by fp;
it returns EOF for end of file or error.
<pre class="code">int putc(int c, FILE *fp)
</pre>
putc writes the character c to the file fp and returns the character written, or EOF
if an error occurs. Like getchar and putchar, getc and putc may be macros instead of
functions.

getchar and putchar can be defined in terms of getc, putc, stdin, and stdout as
follows:

<pre class="code">#define getchar() getc(stdin)
#define putchar(c) putc((c), stdout)
</pre>
For formatted input or output of files, the functions fscanf and fprintf may be used.
These are identical to scanf and printf, except that the first argument is a file
pointer that specifies the file to be read or written; the format string is the second
argument.

<pre class="code">int fscanf(FILE *fp, char *format, ...)
int fprintf(FILE *fp, char *format, ...)

#include &lt;stdio.h&gt;
/* cat: concatenate files, version 1 */
main(int argc, char *argv[])
{
FILE *fp;
void filecopy(FILE *, FILE *);
if (argc == 1) /* no args; copy standard input */
filecopy(stdin, stdout);
else
while(--argc &gt; 0)
if ((fp = fopen(*++argv, "r")) == NULL) {
printf("cat: can't open %s\n, *argv);
return 1;
} else {
filecopy(fp, stdout);
fclose(fp);
}
return 0;
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main7" class="pn">p34</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:145px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  7. Input and Output</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Standard Input and Output
</pre></li>   <li class="sml"><pre>Buffered i/o
</pre></li>   <li class="sml"><pre>Variable length argument list
</pre></li>   <li class="sml"><pre>File access
</pre></li>   <li class="big"><a name="chap7_4">Line input and output</a></li>   <li class="sml"><pre>Error handling - stderr and exit</pre></li>
  </ul>
 </div>
<pre class="slidecontent">
                                                                                      
                            
The standard library provides an input and output routine fgets that is similar to the
getline function that we have used in earlier chapters: char *fgets(char *line, int
maxline, FILE *fp)

fgets reads the next input line (including the newline) from file fp into the
character array line; at most maxline-1 characters will be read. The resulting line is
terminated with '\0'. Normally fgets returns line; on end of file or error it returns
NULL. (Our getline returns the line length, which is a more useful value; zero means
end of file.) For output, the function fputs writes a string (which need not contain a
newline) to a file:
<pre class="code">int fputs(char *line, FILE *fp)
</pre>
It returns EOF if an error occurs, and non-negative otherwise.
The library functions gets and puts are similar to fgets and fputs, but operate on
stdin and stdout. Confusingly, gets deletes the terminating '\n', and puts adds it.

To show that there is nothing special about functions like fgets and fputs, here they
are, copied from the standard library on our system:

<pre class="code">/* fgets: get at most n chars from iop */
char *fgets(char *s, int n, FILE *iop)
{
register int c;
register char *cs;
cs = s;
while (--n &gt; 0 &amp;&amp; (c = getc(iop)) != EOF)
if ((*cs++ = c) == '\n')
break;
*cs = '\0';
return (c == EOF &amp;&amp; cs == s) ? NULL : s;
}
/* fputs: put string s on file iop */
int fputs(char *s, FILE *iop)
{
int c;
while (c = *s++)
putc(c, iop);
return ferror(iop) ? EOF : 0;
}
</pre>
For no obvious reason, the standard specifies different return values for ferror and
fputs. It is easy to implement our getline from fgets:

<pre class="code">/* getline: read a line, return length */
int getline(char *line, int max)
{
if (fgets(line, max, stdin) == NULL)
return 0;
else
return strlen(line);
}
</pre>
</pre> &nbsp;<div class="slideheader" style="height:145px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  7. Input and Output</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Standard Input and Output
</pre></li>   <li class="sml"><pre>Buffered i/o
</pre></li>   <li class="sml"><pre>Variable length argument list
</pre></li>   <li class="sml"><pre>File access
</pre></li>   <li class="sml"><pre>Line input and output
</pre></li>   <li class="big"><a name="chap7_5">Error handling - stderr and exit</a></li>
  </ul>
 </div>
<pre class="slidecontent">

a)Program exit
A program can exit with exit(int) system call. program return status can be checked
later. If program crashes because of signal then system fills the return status.
Generally 0 is success and nonzero is failure. $? shell command prints the exit status
of last run program

<pre class="code"></pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main7" class="pn">p35</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">$ ls /
bin coda etc lib misc nfs proc sbin usr
boot dev home lost+found mnt opt root tmp var

$ echo $?
0
</pre>
<pre class="code">$ ls bogusfile
ls: bogusfile: No such file or directory
</pre>
$ echo $?
<pre class="code">1
</pre>
b) System call failure
Global variable errno carries the last error encountered in any system call. 
Various constants i.e EINTR, EROFS etc are defined with particular error 
number and errno variable need to be checked against these constants rather 
then integer. stderror(int) function prints the error description with errno 
passed as an argument.

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main7" class="pn">p36</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap8">&nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  8. Storage class Specifier</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap8_0">Automatic</a></li>   <li class="sml"><pre>Const
</pre></li>   <li class="sml"><pre>Global
</pre></li>   <li class="sml"><pre>Extern
</pre></li>   <li class="sml"><pre>Register
</pre></li>   <li class="sml"><pre>Static
</pre></li>   <li class="sml"><pre>Volatile</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

The auto storage class is the default storage class for all local variables. 
<pre class="code">{ 
int mount; 
auto int month; 
} 
</pre>
The example above defines two variables with the same storage class, auto can only be
used within functions, i.e., local variables. 
 
</pre> &nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  8. Storage class Specifier</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Automatic
</pre></li>   <li class="big"><a name="chap8_1">Const</a></li>   <li class="sml"><pre>Global
</pre></li>   <li class="sml"><pre>Extern
</pre></li>   <li class="sml"><pre>Register
</pre></li>   <li class="sml"><pre>Static
</pre></li>   <li class="sml"><pre>Volatile</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

The purpose of const is to announce objects that may be placed in read-only memory,
and perhaps to increase opportunities for optimization. 

</pre> &nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  8. Storage class Specifier</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Automatic
</pre></li>   <li class="sml"><pre>Const
</pre></li>   <li class="big"><a name="chap8_2">Global</a></li>   <li class="sml"><pre>Extern
</pre></li>   <li class="sml"><pre>Register
</pre></li>   <li class="sml"><pre>Static
</pre></li>   <li class="sml"><pre>Volatile</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Variable defined in global scope of the file.
Global variables are visible across the program.
File using the global variable need to declare it as extern in order to that file
compiled.

</pre> &nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  8. Storage class Specifier</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Automatic
</pre></li>   <li class="sml"><pre>Const
</pre></li>   <li class="sml"><pre>Global
</pre></li>   <li class="big"><a name="chap8_3">Extern</a></li>   <li class="sml"><pre>Register
</pre></li>   <li class="sml"><pre>Static
</pre></li>   <li class="sml"><pre>Volatile</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

The extern storage class is used to give a reference of a global variable that is
visible to  ALL the program files. 

<pre class="code">#include &lt;stdio.h&gt; 
int count ; //definition
extern void write_extern();  //defined somewhere else

main() 
{ 
write_extern(); 
} 
Second File: write.c 
#include &lt;stdio.h&gt; 
extern int count; //only declaration, defined somewhere else
void write_extern(void) 
{ 
count = 5; 
printf("count is %d\n", count); 
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main8" class="pn">p37</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  8. Storage class Specifier</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Automatic
</pre></li>   <li class="sml"><pre>Const
</pre></li>   <li class="sml"><pre>Global
</pre></li>   <li class="sml"><pre>Extern
</pre></li>   <li class="big"><a name="chap8_4">Register</a></li>   <li class="sml"><pre>Static
</pre></li>   <li class="sml"><pre>Volatile</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Register declared are opted to be put in registers.

<pre class="code">register int x;
register char c;
</pre>
The register declaration can only be applied to automatic variables and to the formal
parameters of a function. 

<pre class="code">f(register unsigned m, register long n)
{
register int i;
...
}
</pre>
It is not possible to take the address of a register variable.
 
</pre> &nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  8. Storage class Specifier</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Automatic
</pre></li>   <li class="sml"><pre>Const
</pre></li>   <li class="sml"><pre>Global
</pre></li>   <li class="sml"><pre>Extern
</pre></li>   <li class="sml"><pre>Register
</pre></li>   <li class="big"><a name="chap8_5">Static</a></li>   <li class="sml"><pre>Volatile</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

The static declaration, applied to an external variable or function, limits the scope
of that object to the rest of the source file being compiled.

&lt;&lt;a.c&gt;&gt;
<pre class="code">static int a; // file scoped
void function(){
static int a; // function scoped
}
</pre>

</pre> &nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  8. Storage class Specifier</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Automatic
</pre></li>   <li class="sml"><pre>Const
</pre></li>   <li class="sml"><pre>Global
</pre></li>   <li class="sml"><pre>Extern
</pre></li>   <li class="sml"><pre>Register
</pre></li>   <li class="sml"><pre>Static
</pre></li>   <li class="big"><a name="chap8_6">Volatile</a></li>
  </ul>
 </div>
<pre class="slidecontent">

The purpose of volatile is to force an implementation to suppress optimization that
could otherwise occur. For example, for a machine with memory-mapped input/output,  a
pointer to a device register might be declared as a pointer to volatile, in order to
prevent the compiler from removing apparently redundant references through the
pointer. 

Except that it should diagnose explicit attempts to change const objects, a compiler 
may ignore these qualifiers.

<pre class="code">Port
---------------------------------------------
| control register |     |  data register   |
---------------------------------------------


typedef short int control;
typedef short int data;
#define ENABLE 0x40
#define READY 0x80
typedef struct port port;
struct port
{
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main8" class="pn">p38</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">control c;
data d;
};
typedef struct ioport ioport;
struct ioport
{
port in, out;
};

//Using the declarations above, assign one memory mapped address to it
ioport *const pio = (ioport *)0xFF70;

// check if control register ready bit is ready for data to be written
while (pio-&gt;out.c &amp; READY == 0)
;

//write carriage return
pio-&gt;out.d = '\r';
while (pio-&gt;out.c &amp; READY == 0)
;
pio-&gt;out.d = '\n';

//.Compiler start doing the optimization in following ways.
//Optimization

if (pio-&gt;out.c &amp; READY == 0)
for (;;)
;
pio-&gt;out.d = '\r';
if (pio-&gt;out.c &amp; READY == 0)
for (;;)
;
pio-&gt;out.d = '\n';
Optimization
if (pio-&gt;out.c &amp; READY == 0)
for (;;)
;
pio-&gt;out.d = '\r';
pio-&gt;out.d = '\n';

//Further Optimization where '\r' is removed as redundant
if (pio-&gt;out.c &amp; READY == 0)
for (;;)
;
pio-&gt;out.d = '\n';


Solution
ioport volatile *const pio
= (ioport *)0xFFA0;

</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main8" class="pn">p39</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap9">&nbsp;<div class="slideheader" style="height:105px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  9. Misc</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap9_0">Debugging with gdb</a></li>   <li class="sml"><pre>64 bit data i/o</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

The GNU Debugger (GDB) is used to stop through code, set breakpoints and examine the
value of local variables.

Makefile for simple main.c in order to have a binary.
$ cat Makefile 
<pre class="code">CFLAGS=-g
all: main.o
        gcc $(CFLAGS) -o main main.o
main.o: main.c
        gcc $(CFLAGS) -c main.c -o main.o
clean:
        rm -f main.o main
</pre>
[sc@localhost ~]$ gdb main
<pre class="code">GNU gdb Red Hat Linux (6.5-16.el5rh)
Copyright (C) 2006 Free Software Foundation, Inc.
GDB is free software, covered by the GNU General Public License, and you are
welcome to change it and/or distribute copies of it under certain conditions.
Type "show copying" to see the conditions.
There is absolutely no warranty for GDB.  Type "show warranty" for details.
This GDB was configured as "x86_64-redhat-linux-gnu"...Using host libthread_db library
"/lib64/libthread_db.so.1".
(gdb) break func
Breakpoint 1 at 0x400484: file main.c, line 6.
(gdb) run
Starting program: /home/sc/main 
Breakpoint 1, func (si=0x7fff2dfdb6c0) at main.c:6
6       si-&gt;i=10;
(gdb) x /4xb 0x7fff2dfdb6c0
0x7fff2dfdb6c0: 0x14    0x00    0x00    0x00
(gdb) bt
#0  func (si=0x7fff2dfdb6c0) at main.c:6
#1  0x00000000004004c4 in main (argc=1, argv=0x7fff2dfdb7b8) at main.c:12
(gdb) l
1       #include &lt;stdio.h&gt;
2       struct samples{
3       int i;
4       };
5       void func(struct samples *si){
6       si-&gt;i=10;
7       printf("%d\n",si-&gt;i);
8       }
9       int main(int argc,char *argv[]){
10      struct samples ss;

(gdb) n
7       printf("%d\n",si-&gt;i);
(gdb) x /4xb 0x7fff2dfdb6c0
0x7fff2dfdb6c0: 0x0a    0x00    0x00    0x00
(gdb) p si-&gt;i
$1 = 10
</pre>
</pre> &nbsp;<div class="slideheader" style="height:105px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  9. Misc</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Debugging with gdb
</pre></li>   <li class="big"><a name="chap9_1">64 bit data i/o</a></li>
  </ul>
 </div>
<pre class="slidecontent">

<pre class="code">d - input of signed decimal integer
i - input of a signed integer value
u - input of an unsigned decimal
o - unsigned octal integer
x - input of an unsigned hexadecimal

#include &lt;stdio.h&gt;
#include &lt;inttypes.h&gt;
int main(){
uint64_t uval=0x1234567890abcdef;
int64_t n=0xff;
printf("%"PRIu64"\n", uval);
printf("%"PRId64"\n",n);
return 0;
}

$ ./a.out 
1311768467294899695
255

</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main9" class="pn">p40</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main9" class="pn">p41</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre style="text-align:center;line-height:1395px;font-size:24pt">Left Blank</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#mainL" class="pn">p42</a>
</div>

<? $util->drawfooter(__FILE__) ?>