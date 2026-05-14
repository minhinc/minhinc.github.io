<? $level='.';foreach(split("\/",split("public_html\/?",ereg_replace("\/*$","",getcwd()))[1]) as $item){ if(!empty($item)){ $level=$level."/.."; }};require_once($level.'/php/Utilm.php');$util=new Utilc; ?>
<div class="pg" style="margin-top:40px;height:1375px">
 <pre class=title>OpenGL Essentials Training</pre>
 <pre class=subtitle>3-day session</pre>
 <pre class=company></pre>
 <div style="height:186px;">
  <div class="headerleft"> <pre>Overview</pre></div>
  <div class="headerright"> <pre>Understanding principles of 3D programming
Understanding drawing Primitives
Understanding transformation matrix and Coloring
Understanding Blending and Texture mapping
Understanding Shaders programming and Display List.
Understanding OpenGL integration with Qt</pre></div>
 </div>
 <div style="height:98px;">
  <div class="headerleft"> <pre>Duration</pre></div>
  <div class="headerright"> <pre>Three days - 24 hours (8 hours a day)
50% of lecture, 50% of practical labs.</pre></div>
 </div>
 <div style="height:76px;">
  <div class="headerleft"> <pre>Trainer</pre></div>
  <div class="headerright"> <pre><a href="https://www.linkedin.com/in/pravinkumarsinha">http://www.linkedin.com/in/pravinkumarsinha</a></pre></div>
 </div>
 <hr>
 <div style="height:76px;">
  <div class="headerleft"> <pre>Audience</pre></div>
  <div class="headerright"> <pre>Professional 3D Software developers</pre></div>
 </div>
 <div style="height:274px;">
  <div class="headerleft"> <pre>Prerequisite</pre></div>
  <div class="headerright"> <pre><b>Knowledge of C programming</b>
In particular, participants must be familiar with creating and dealing with
complex data types and structures, with pointers to such symbols, as well as
with function pointers.
Advance C training agenda is available at
<a href="http://www.minhinc.com/training/advance-c-agenda.pdf">http://www.minhinc.com/training/advance-c-agenda.pdf</a>

<b>Knowledge of Object Oriented Concepts</b>
Qt integration requires Oops concept like Abstraction, Inheritance,
Polymorphism knowledge.</pre></div>
 </div>
 <hr>
 <div style="height:76px;">
  <div class="headerleft"> <pre>Setup</pre></div>
  <div class="headerright"> <pre>Linux machine with GNU C++ compiler with Qt OpenGL version installed.</pre></div>
 </div>
<pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p1</pre>
</div>

<div class="pg" style="margin-top:20px;height:1395px">
 <div class="header2" style="margin-top:0px;">
  <pre class="header" style="line-height:40px">Lecture</pre>
  <pre class="content" style="height:91px">Lecture session will be course content presentation through the trainer.
Any source code example related to the topic will be demonstrated, it would
include executing the binaries. Complete lecture material can be downloaded from
<a href="http://www.minhinc.com/training/advance-gl-slides.pdf"/>http://www.minhinc.com/training/advance-gl-slides.pdf</a></pre>
 </div>
 <div class="header2" style="margin-top:125px;">
  <pre class="header" style="line-height:40px">Labs</pre>
  <pre class="content" style="height:91px">Labs session would be completely hands on session where each example
(with example data and execution instruction) would be provided to the
students. Students can verify their results with the results provided in
the material.</pre>
 </div>
 <div class="dayheader" style="margin-top:124.0px;height:50px"><pre>Day 1 Morning</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:370px">
  <a name="main1" href="#chap1" class="dayheader" style="line-height:40px">  Lecture - Introduction</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap1_0">GPUs<br>Shaders<br>Hardware acceleration<br></a></li>
   <li><a href="#chap1_1">OpenGL History and evolution<br></a></li>
   <li><a href="#chap1_2">Graphics terminologies, i.e. Display list,<br> Resolution, Modeling, Geometry<br> Representation, Evaluators, Primitives,<br> Pixel Operations, Rasterization, Fragment<br> Operation)<br></a></li>
   <li><a href="#chap1_3">Command Syntax<br></a></li>
   <li><a href="#chap1_4">State machine<br></a></li>
   <li><a href="#chap1_5">Rendering Pipeline<br></a></li>
   <li><a href="#chap1_6">OpenGL, OpenGLES, GLX and WebGL<br></a></li>
   <li><a href="#chap1_7">GLU and GLEW<br></a></li>
   <li><a href="#chap1_8">GLUT, GLFW and OpenGL utility Toolkit</a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:260px">
  <a name="main2" href="#chap2" class="dayheader" style="line-height:40px">  Lecture - Drawing Primitives</a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chap2_0">Describing points, lines and polygon<br></a></li>
   <li><a href="#chap2_1">State management<br></a></li>
   <li><a href="#chap2_2">Normal vector<br></a></li>
   <li><a href="#chap2_3">Vertex array<br></a></li>
   <li><a href="#chap2_4">Attribute groups<br></a></li>
   <li><a href="#chap2_5">Inline functions<br></a></li>
   <li><a href="#chap2_6">glu library function<br></a></li>
   <li><a href="#chap2_7">Buffer Objects<br></a></li>
   <li><a href="#chap2_8">Example, building sphere, cylinder,<br> cone</a></li>

  </ul>
 </div>
 <div class=dayheaderleft style="margin-top:80.0px;height:260px">
  <a name="main3" href="#chap3" class="dayheader" style="line-height:40px">  Lecture - Viewing</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap3_0">Transformations<br></a></li>
   <li><a href="#chap3_1">Viewing and Modeling transformations<br></a></li>
   <li><a href="#chap3_2">Projection and Viewport transformations<br></a></li>
   <li><a href="#chap3_3">Grand coordinate systems<br></a></li>
   <li><a href="#chap3_4">Fix coordinate systems<br></a></li>
   <li><a href="#chap3_5">Managing Local coordinate systems<br></a></li>
   <li><a href="#chap3_6">Manipulating Matrix Stacks.<br> - ModelView matrix<br> - Project matrix<br></a></li>
   <li><a href="#chap3_7">Example, Building a solar system </a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:80.0px;height:150px">
  <a name="main4" href="#chap4" class="dayheader" style="line-height:40px">  Lecture - Color & Lighting</a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chap4_0">RGBA and Color index mode<br></a></li>
   <li><a href="#chap4_1">Color and Shading mode<br></a></li>
   <li><a href="#chap4_2">Creating Light source<br></a></li>
   <li><a href="#chap4_3">Selecting lighting model<br></a></li>
   <li><a href="#chap4_4">Defining material properties</a></li>

  </ul>
 </div>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p2</pre>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <div class="dayheader" style="margin-top:0px;height:50px"><pre>Day 1 Afternoon</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:216px">
  <pre class="dayheader" style="line-height:40px">     Lab</pre>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><pre>Draw a cylinder using normal glVertex
</pre></li>
   <li><pre>Draw a cylinder using vertex array
</pre></li>
   <li><pre>Validate if transformations are not associative.
 i.e translation+roation not same to rotation+translaton
</pre></li>
   <li><pre>Add a moon to mars in solar system
</pre></li>
   <li><pre>Draw sphere using glu library. Add and move
light source near and far.
</pre></li>
   <li><pre>Let add lighting support in solar system through sun.</pre></li>

  </ul>
 </div>
 <div class="dayheader" style="margin-top:283.0px;height:50px"><pre>Day 2 Morning</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:150px">
  <a name="main5" href="#chap5" class="dayheader" style="line-height:40px">  Lecture - Blending, Antialiasing, Fog and Polygon Offset</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap5_0">The source and destination factors in blending<br></a></li>
   <li><a href="#chap5_1">Three dimensional blending with the Depth Buffer<br></a></li>
   <li><a href="#chap5_2">Antialiasing Geometric Primitives with Multisampling<br></a></li>
   <li><a href="#chap5_3">Fog equations<br></a></li>
   <li><a href="#chap5_4">Polygon Offset</a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:304px">
  <a name="main6" href="#chap6" class="dayheader" style="line-height:40px">  Lecture - Display List & Pixel Operation</a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chap6_0">Creating and executing a display list<br></a></li>
   <li><a href="#chap6_1">Executing multiple display lists<br></a></li>
   <li><a href="#chap6_2">Managing state variable with display lists<br></a></li>
   <li><a href="#chap6_3">Bitmaps and Fonts<br></a></li>
   <li><a href="#chap6_4">Images<br></a></li>
   <li><a href="#chap6_5">Imaging pipeline <br>- Pixel Packing and Unpacking, 32 and 64 bit<br>- Controlling Pixel-Storage Modes, 32-64 bit<br>- Pixel-Transfer Operations<br>- Pixel Mapping<br></a></li>
   <li><a href="#chap6_6">Using Buffer Objects with Pixel Rectangle Data<br>- Using Buffer Objects in Transfer and Retrieve Pixel Data</a></li>

  </ul>
 </div>
 <div class=dayheaderleft style="margin-top:80.0px;height:282px">
  <a name="main7" href="#chap7" class="dayheader" style="line-height:40px">  Lecture - Texture Mapping</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap7_0">Steps in texture mapping<br></a></li>
   <li><a href="#chap7_1">Specifying the texture<br>- Texture Proxy, Texture Array<br>- Mipmaps:Multiple Level<br></a></li>
   <li><a href="#chap7_2">Filtering<br></a></li>
   <li><a href="#chap7_3">Texture Object<br></a></li>
   <li><a href="#chap7_4">Texture Functions<br>- Texture combiner function<br></a></li>
   <li><a href="#chap7_5">Multitexturing<br></a></li>
   <li><a href="#chap7_6">The texture matrix stack<br></a></li>
   <li><a href="#chap7_7">Depth texture </a></li>

  </ul>
 </div>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p3</pre>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <div class="dayheader" style="margin-top:0px;height:50px"><pre>Day 2 Afternoon</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:172px">
  <a name="main8" href="#chap8" class="dayheader" style="line-height:40px">  Lecture - Framebuffer, Tessallators & Quadrics</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap8_0">Color Buffer<br></a></li>
   <li><a href="#chap8_1">Depth Buffer<br></a></li>
   <li><a href="#chap8_2">Stencil Buffer<br></a></li>
   <li><a href="#chap8_3">Accumulation Buffer<br></a></li>
   <li><a href="#chap8_4">Polygon tessallation<br></a></li>
   <li><a href="#chap8_5">Quadrics:Rendering Spheres, Cylinders and disks</a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:84px">
  <a name="main9" href="#chap9" class="dayheader" style="line-height:40px">  Lecture - Evaluators and NURBS</a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chap9_0">Evaluators<br></a></li>
   <li><a href="#chap9_1">The GLU NURBS Interfaces</a></li>

  </ul>
 </div>
 <div class=dayheaderleft style="margin-top:80px;height:84px">
  <pre class="dayheader" style="line-height:40px">     Lab</pre>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><pre>Draw alphabet using DisplayList and Bitmap
</pre></li>
   <li><pre>Apply texture on earth in Solar System</pre></li>

  </ul>
 </div>
 <div class="dayheader" style="margin-top:591.0px;height:50px"><pre>Day 3 Morning</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:238px">
  <a name="main10" href="#chap10" class="dayheader" style="line-height:40px">  Lecture - GLSL Shader Programming</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap10_0">GLSL versions<br></a></li>
   <li><a href="#chap10_1">Syntax (Data types, statements, Functions<br> and Sub routines)<br></a></li>
   <li><a href="#chap10_2">Various Shaders (vertex, fragment,<br> geometry) and relations to Graphics<br> Pipeline<br></a></li>
   <li><a href="#chap10_3">Creating Shader<br></a></li>
   <li><a href="#chap10_4">Inter Shader Communication <br></a></li>
   <li><a href="#chap10_5">Accessing Texture maps in shaders</a></li>

  </ul>
 </div>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p4</pre>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <div class="dayheader" style="margin-top:0px;height:50px"><pre>Day 3 Afternoon</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:392px">
  <a name="main101" href="#chap101" class="dayheader" style="line-height:40px">  Lecture - OpenGL integration with Qt</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap101_0">gl functions through Qt<br>-QOpenGLFunctions<br></a></li>
   <li><a href="#chap101_1">Framebuffer operations<br></a></li>
   <li><a href="#chap101_2">Vertex<br>-QOpenGLVertexArrayObject<br>-QSurfaceFormat<br>-QOpenGLContext<br>-QOpenGLFramebufferObject<br>-QOpenGLFramebufferObjectFormat<br></a></li>
   <li><a href="#chap101_3">Window<br>-QOpenGLWidget<br>-initialzeGL,resizeGL,paintGL functions<br>-painting 2D and 3D together<br></a></li>
   <li><a href="#chap101_4">Shader programming<br>-QOpenGLShader<br>-QOpenGLShaderProgram</a></li>

  </ul>
 </div>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p5</pre>
</div>

<div class="pg" style="margin-top:20px;height:1395px">
 <pre class="slidetitle" style="margin-top:465.0px">Gl Essentials</pre>
 <pre class="slidesubtitle style="margin-top:20px">Gl Essenstials- Training Course</pre>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p6</pre>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <pre class="slidedisclaimer" style="margin-top:465.0px">DISCLAIMER

This document is edited on Cent OS 5 using Open Office 3.1.1 Draw Package.

CentOS is freely download from centos.org/download
Open Office 3.1.1 can be obtained through yum or through openoffice.org

Text of this document is written in Bembo Std Otf(13 pt) font.

Code parts are written in Consolas (10 pts) font.

This training material is provided through <a style="font-family:mytwcenmt,Tw Cen MT;font-size:18pt;color:#004000;font-weight:bold" href="http://www.minhinc.com">Minh, Inc.</a>, B'lore, India
Pdf version of this document is available at <a href="http://www.minhinc.com/training/advance-gl-slides.pdf">http://www.minhinc.com/training/advance-gl-slides.pdf</a>
For suggestion(s) or complaint(s) write to us at <a href="mailto:training@minhinc.com">training@minhinc.com</a>

Document modified on 07/2018

Document contains 12 pages.</pre>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p7</pre>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap1">&nbsp;<div class="slideheader" style="height:115px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  1. Introduction</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap1_0">OpenGL - Introduction</a></li>   <li class="sml"><pre>GPUs, Shaders, Hadrdware Acceleration
</pre></li>   <li class="sml"><pre>OpenGL History and evolution</pre></li>
  </ul>
 </div></a>
<pre class="slideabstract">
<b>Abstract</b> : OpengGL library is a software interface to graphics hardware. It does
not provides any windowing system.
</pre><pre class="slidecontent">

- OpenGL provide 'C' programming interface to control graphics hardware.
- OpenGL does not provide any windowing system or way to control user input.
- OpenGL doesn't provide readymade 3D high level model, like automobile models. It
instead provide basic point,line and polygon drawing primitives. GLU library uses glu
basic primitives and provides high level mesh, Nurbs surface drawing algorthims.
- OpenGL is just an alogorithms which takes input from
 a) Vertex primitives
 b) Textures
in order to generate the framebuffer and then finally display buffer.
<pre class="code">        ---------------              ------------
        | texture     |              | vertex   |
        | (pixel data)|              | primitives|
        ---------------              -------------
              |                              | 
              |                              | 
              +------------------------------+
                              |
                              .
                              .
                              |
                        ---------------
                        | Per Fragment|
                        | Operation   |
                        ---------------
                              |
                        ---------------
                        | Framebuffer |
                        | Operation   |
                        ---------------
                               |
                               v
                          Output data
</pre>OpenGL basic architecture is to initialize the various drawing states then draw the
primtives
<pre class="code">                       |
                       |
                       v
                ---------------
                |  Set the    |
                |   States    |
                |for Primitives|
                ---------------
                       |
                       |
                       v
                --------------
                |  Draw the   | 
                | Primitives  |
                --------------
                       |
                       |
                       v
</pre>
</pre> &nbsp;<div class="slideheader" style="height:115px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  1. Introduction</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>OpenGL - Introduction
</pre></li>   <li class="big"><a name="chap1_1">GPUs, Shaders, Hadrdware Acceleration</a></li>   <li class="sml"><pre>OpenGL History and evolution</pre></li>
  </ul>
 </div>
<pre class="slideabstract">
<b>Abstract</b>:Graphics process unit (GPU) is a special hardware that does faster
mathematical computations for matrixes.
</pre><pre class="slidecontent">

GPU is a processing unit with its own physical memory. Vertex transformations and
Fragment computations are done on GPU.

GPU processes code written in shaders language. Shaders are fed to GPU to make the
computation. Most used shaders are
- Vertex shaders
- Fragment shaders

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main1" class="pn">p8</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:115px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  1. Introduction</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>OpenGL - Introduction
</pre></li>   <li class="sml"><pre>GPUs, Shaders, Hadrdware Acceleration
</pre></li>   <li class="big"><a name="chap1_2">OpenGL History and evolution</a></li>
  </ul>
 </div>
<pre class="slidecontent">

OpenGL is a 3D drawing c APIs developed by Silicon Graphics Inc. (SGI) in 1991. Where
it inspired by available Iris 3D GL programming. First version 1.0 was released in
1992 without texture support.

1991-2006 - Silicon Graphics
2006 - Khronos Group

Various OpenGL major releases
OpenGL 1.0 (1992)
OpenGL 1.1 (1997)
 - Vertex arrays
 - Polygon offsets
 - Texture
  - Texture proxy
  - Texture objects
OpenGL 1.2(1998)
 - 3D textures
 - pixel formats
 - vertex array draw element range
OpengL 1.3 (2001)
 - Multisample
 - Multitexture
 - Transpose matrix
OpengGL 1.4 (2002)
 - Blend squaring
 - Depth textures and shadows
 - Fog coordinates
 - Multiple draw arrays
 - Stencil wrap
OpenGL 1.5 (2003)
 - Buffer objects
OpenGL 2.0 (2004)<pre class="code" style="display:inline">--+---</pre> Shader Programming Language introduced
 - GLSL 1.1<pre class="code" style="display:inline">          |</pre>
 - Shader programs<pre class="code" style="display:inline">  +----</pre> Fixed line functions implemetented through GLSL
internally
 - Shader objects
 - Seprate stencil
OpenGL 2.1 (2006)
 - GLSL 1.2
 - Pixel buffer objects
 - sRGB textures
OpenGL 3.0 (2008)
 - GLSL 1.3
 - Framebuffer objects
 - Multisample renderbuffer objects
 - conditional rendering
 - array textures
 Deprecated features
 - color index mode
 - Begin/End primitve
 - Fixed function vertex processing
 - Bitmaps
 - Pixel drawing
 - Polygon stripple
 - Display Lists
 - Texture borders
 - Alpha test
 - Accumuation buffers
 - Evaluators
 - Fixed function fragment processing
 - Shading language 1.10 and 1.20     
OpenGL 3.1 (2009)
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main1" class="pn">p9</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
 - GLSL 1.40 with Instancing
 - Deprecated features removed except wide lines
 - Buffer textures
 - Rectangle textures<pre class="code" style="display:inline">      /----&gt;</pre> core (only programming line functions)
OpenGL 3.2 (2009)<pre class="code" style="display:inline">-------</pre>
 - GLSL 1.5<pre class="code" style="display:inline">               \----&gt;</pre> compatibility (retaining fixed line functions)
 - Core(no deprecated function) and compatibility profiles(with deprecated functions)
OpenGL 3.3 (2010)
 - GLSL 3.3
 - Dual - source blending
 - Sample Objects
 - Texture swizzle
 - Instanced arrays
 - Vertex attributes 2.10.10.10
OpenGL 4.0 (2010)
 - GLSL 4.0 with tessalation on GPU, shaders with 64-bit precision
 - Buffer texture
 - Indirect drawing without multidraw
OpenGL 4.1 (2010)
 - GLSL 4.1 developer-friendly debug output
 - compatibility with OpenGL ES 2.0
 - Query and load binary blob for program objects
OpenGL 4.2 (2011)
 - GLSL 4.20 Shaders with atomic counters
 - Allowing shaders to read and write images
 - Allowing incrementing/decrementing ad fetching of buffer object memory locations
from shaders
OpenGL 4.3 (2012)
 - GLSL 4.30 Compute shaders leveraging GPU parallelism 
 - shader storage buffer objects
OpenGL 4.4 (2013)
 - GLSL 4.40 Buffer Placement Control
 - Shader Variable Layout
 - Bindless Texture Extension
 - Sparse Texture Extension
OpenGL 4.5 (2014) 
 - GLSL 4.50 Direct State Access (DSA)
 - Flush Control
 - DX11 emulation features
OpenGL 4.6 (2017)
 - GLSL 4.60 More efficient geometry processing and shader execution
 - polygon offset clamp
 - SPIR-V
 - anisotropic filtering


Any functions introduced by venders gets vendor name, i.e NVI introduced constants are
GL_NV_half_float, GL_HALF_FLOAT_NV and the function glVertex2hNV(). If these functions
become ubiquitous then it is introduced as EXT or ARB (Archtecture review board)
extension. Khronos group is new name for ARB group.
<b>OpenGL stack on Linux</b>
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main1" class="pn">p10</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<a href="http://www.minhinc.com/image/gl-slide-openglstack.gif"><img class="img" src="http://www.minhinc.com/image/gl-slide-openglstack_s.gif" /></a>

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main1" class="pn">p11</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<div class="pg" style="margin-top:20px;height:1395px">
<div class="pg" style="margin-top:20px;height:1395px">
<div class="pg" style="margin-top:20px;height:1395px">
<pre style="text-align:center;line-height:1395px;font-size:24pt">Left Blank</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#mainL" class="pn">p12</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<div class="pg" style="margin-top:20px;height:1395px">
<div class="pg" style="margin-top:20px;height:1395px">
<div class="pg" style="margin-top:20px;height:1395px">
<div class="pg" style="margin-top:20px;height:1395px">
<div class="pg" style="margin-top:20px;height:1395px">
<div class="pg" style="margin-top:20px;height:1395px">

<? $util->drawfooter(__FILE__) ?>