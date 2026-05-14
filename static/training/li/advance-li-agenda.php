<? $level='.';foreach(split("\/",split("public_html\/?",ereg_replace("\/*$","",getcwd()))[1]) as $item){ if(!empty($item)){ $level=$level."/.."; }};require_once($level.'/php/Utilm.php');$util=new Utilc; ?>
<div class="pg" style="margin-top:40px;height:1375px">
 <pre class=title>Linux Internals Training</pre>
 <pre class=subtitle>5-day session</pre>
 <pre class=company></pre>
 <div style="height:215px;">
  <div class="headerleft"> <pre>Overview</pre></div>
  <div class="headerright"> <pre>Understanding Virtual memory, Process concepts, IPC, File Systems EXT2
Understanding Shell programming
Understanding Boot process
Understanding cross compilation and installing Linux installation on
embedded hardware
Understanding developing application for embedded systems</pre></div>
 </div>
 <div style="height:127px;">
  <div class="headerleft"> <pre>Duration</pre></div>
  <div class="headerright"> <pre>Five days - 40 hours (8hours a day)
50% of lecture, 50% of practical labs.</pre></div>
 </div>
 <hr>
 <div style="height:105px;">
  <div class="headerleft"> <pre>Trainer</pre></div>
  <div class="headerright"> <pre><a href="https://www.linkedin.com/in/pravinkumarsinha">http://www.linkedin.com/in/pravinkumarsinha</a></pre></div>
 </div>
 <div style="height:127px;">
  <div class="headerleft"> <pre>Audience</pre></div>
  <div class="headerright"> <pre>Professional Software developers
People supporting embedded and medium scale products.</pre></div>
 </div>
 <hr>
 <div style="height:127px;">
  <div class="headerleft"> <pre>Setup</pre></div>
  <div class="headerright"> <pre>Ubuntu 16.0x LTS
Raspberry Pi3</pre></div>
 </div>
<pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p1</pre>
</div>

<div class="pg" style="margin-top:20px;height:1395px">
 <div class="header2" style="margin-top:0px;">
  <pre class="header" style="line-height:40px">Lecture</pre>
  <pre class="content" style="height:91px">Lecture session will be course content presentation through the trainer.
Any source code example related to the topic will be demonstrated, it would
include executing the binaries. Complete lecture material can be downloaded from
<a href="http://www.minhinc.com/training/advance­li­slides.pdf">http://www.minhinc.com/training/advance­li­slides.pdf</a></pre>
 </div>
 <div class="header2" style="margin-top:125px;">
  <pre class="header" style="line-height:40px">Labs</pre>
  <pre class="content" style="height:69px">Lecture session will be course content presentation through the trainer.
Any source code example related to the topic will be demonstrated, it would
include executing the binaries.</pre>
 </div>
 <div class="dayheader" style="margin-top:234.0px;height:50px"><pre>Day 1 Morning</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:194px">
  <a name="main1" href="#chap1" class="dayheader" style="line-height:40px">  Lecture - Introduction to Linux</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap1_0">GNU Project/GPL Licensing<br></a></li>
   <li><a href="#chap1_1">Evolution of Linux & Development Model<br></a></li>
   <li><a href="#chap1_2">Device Identities in Linux - Partitioning<br></a></li>
   <li><a href="#chap1_3">Scheme<br> /dev/</a></li>
   <li><a href="#chap1_4"> files<br> Major Minor device number<br> mknod system call</a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:128px">
  <a name="main2" href="#chap2" class="dayheader" style="line-height:40px">  Lecture - Introduction to Kernel</a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chap2_0">History of Linux<br></a></li>
   <li><a href="#chap2_1">Types of Kernel<br></a></li>
   <li><a href="#chap2_2">The Linux kernel<br></a></li>
   <li><a href="#chap2_3">Kernel Architecture</a></li>

  </ul>
 </div>
 <div class=dayheaderleft style="margin-top:80.0px;height:348px">
  <a name="main3" href="#chap3" class="dayheader" style="line-height:40px">  Lecture - Shell commands & Shell</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap3_0">Basic Shell commands<br></a></li>
   <li><a href="#chap3_1">Bash Shell Essentials<br> - Introduction<br> - Process<br> - Redirection<br> - Shell Programming<br> - Programming Commands<br> - Advance Shell Programming<br>   - Function<br>   - Array<br>   - I/O Redirection and file descriptor<br>   - Local and Global variables<br>   - Conditional Execution<br></a></li>
   <li><a href="#chap3_2">Creating Makefiles</a></li>

  </ul>
 </div>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p2</pre>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <div class="dayheader" style="margin-top:0px;height:50px"><pre>Day 1 Afternoon</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:172px">
  <pre class="dayheader" style="line-height:40px">     Lab</pre>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><pre>mknod
</pre></li>
   <li><pre>Write a Makefile to compile file
</pre></li>
   <li><pre>Create a static library using Makefile
</pre></li>
   <li><pre>Create a dynamic library using Makefile
</pre></li>
   <li><pre>Write application using static library and
dynamic library generated</pre></li>

  </ul>
 </div>
 <div class="dayheader" style="margin-top:147.0px;height:50px"><pre>Day 2 Morning</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:128px">
  <a name="main4" href="#chap4" class="dayheader" style="line-height:40px">  Lecture - Creating Libraries</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap4_0">Creating Static Library<br> - Using Static Library<br></a></li>
   <li><a href="#chap4_1">Creating Shared Library<br> - Using Shared Library</a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:128px">
  <a name="main5" href="#chap5" class="dayheader" style="line-height:40px">  Lecture - The Boot Process</a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chap5_0">BIOS Level <br>- Boot Loader - Setup<br>- startup_32 functions<br></a></li>
   <li><a href="#chap5_1">The start_kernel() function</a></li>

  </ul>
 </div>
 <div class="dayheader" style="margin-top:147.0px;height:50px"><pre>Day 2 Afternoon</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:62px">
  <pre class="dayheader" style="line-height:40px">     Lab</pre>
  <ul class="daycontent" style="padding-top:10px;float:left">

  </ul>
 </div>
 <div class="dayheader" style="margin-top:147.0px;height:50px"><pre>Day 3 Morning</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:128px">
  <a name="main6" href="#chap6" class="dayheader" style="line-height:40px">  Lecture - The File System</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap6_0">Virtual File system & its role<br></a></li>
   <li><a href="#chap6_1">Files associated with a process<br></a></li>
   <li><a href="#chap6_2">proc file system<br></a></li>
   <li><a href="#chap6_3">System Calls</a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:172px">
  <a name="main7" href="#chap7" class="dayheader" style="line-height:40px">  Lecture - Process Management</a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chap7_0">Process Defined<br></a></li>
   <li><a href="#chap7_1">Process Descriptor Structures in the kernel<br></a></li>
   <li><a href="#chap7_2">Process States <br></a></li>
   <li><a href="#chap7_3">Process Scheduling<br></a></li>
   <li><a href="#chap7_4">Process Creation<br></a></li>
   <li><a href="#chap7_5">System calls related to process management</a></li>

  </ul>
 </div>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p3</pre>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <div class=dayheaderleft style="margin-top:0px;height:172px">
  <a name="main8" href="#chap8" class="dayheader" style="line-height:40px">  Lecture - Memory Management</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap8_0">Defining and Creating secondary memory areas<br></a></li>
   <li><a href="#chap8_1">Memory allocation & deallocation system calls malloc,calloc, alloca, free<br></a></li>
   <li><a href="#chap8_2">Demand Paging defined<br></a></li>
   <li><a href="#chap8_3">Process Organization in Memory<br></a></li>
   <li><a href="#chap8_4">Address Translation and page fault handling<br></a></li>
   <li><a href="#chap8_5">Virtual Memory Management</a></li>

  </ul>
 </div>
 <div class="dayheader" style="margin-top:182.5px;height:50px"><pre>Day 3 Afternoon</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:260px">
  <pre class="dayheader" style="line-height:40px">     Lab</pre>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><pre>Implement late binding
</pre></li>
   <li><pre>Create hard link
</pre></li>
   <li><pre>Create soft link
</pre></li>
   <li><pre>Write a program to enumerate stat structure
for both hard link and soft link. Illustrate which
field is different
</pre></li>
   <li><pre>Create a child process and validates if all
open descriptors are copied to child process also.
 - Use file seek from parent and see child's
  descriptor also got seeked.</pre></li>

  </ul>
 </div>
 <div class="dayheader" style="margin-top:182.5px;height:50px"><pre>Day 4 Morning</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:84px">
  <a name="main9" href="#chap9" class="dayheader" style="line-height:40px">  Lecture - Multi Thread Programming</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap9_0">Creating multiple threads<br></a></li>
   <li><a href="#chap9_1">Parent synchronization with other Thread</a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:194px">
  <a name="main10" href="#chap10" class="dayheader" style="line-height:40px">  Lecture - Inter process communication</a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chap10_0">Pipes<br></a></li>
   <li><a href="#chap10_1">Fifo's<br></a></li>
   <li><a href="#chap10_2">signals <br></a></li>
   <li><a href="#chap10_3">System-V IPC's<br> -Message queues <br> - Shared memory <br> - Semaphores</a></li>

  </ul>
 </div>
 <div class=dayheaderleft style="margin-top:80.0px;height:84px">
  <a name="main11" href="#chap11" class="dayheader" style="line-height:40px">  Lecture - Sockets</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap11_0">An Overview<br></a></li>
   <li><a href="#chap11_1">System calls related to TCP and UDP socket</a></li>

  </ul>
 </div>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p4</pre>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <div class="dayheader" style="margin-top:0px;height:50px"><pre>Day 4 Afternoon</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:106px">
  <pre class="dayheader" style="line-height:40px">     Lab</pre>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><pre>Write a multi threaded application and check if
global variables are shared.
 - Protect them using semaphores</pre></li>

  </ul>
 </div>
 <div class="dayheader" style="margin-top:247.5px;height:50px"><pre>Day 5 Morning</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:106px">
  <a name="main12" href="#chap12" class="dayheader" style="line-height:40px">  Lecture - Network Programming</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap12_0">TCP Server Client Programming<br></a></li>
   <li><a href="#chap12_1">UDP Server Client Programming<br></a></li>
   <li><a href="#chap12_2">Netlink socket interface</a></li>

  </ul>
 </div>
 <div class=dayheaderright style="margin-top:40px;height:172px">
  <a name="main13" href="#chap13" class="dayheader" style="line-height:40px">  Lecture - Programming and Debugging tools</a>
  <ul class="daycontent" style="padding-top:10px;float:right">
   <li><a href="#chap13_0">strace - Tracing System calls<br></a></li>
   <li><a href="#chap13_1">ltrace : Tracing Library calls<br></a></li>
   <li><a href="#chap13_2">Tools used to detect memory access error<br> and Memory leakage in Linux : mtrace<br></a></li>
   <li><a href="#chap13_3">Using gdb and ddd utilities<br></a></li>
   <li><a href="#chap13_4">Core dump Analysis etc.</a></li>

  </ul>
 </div>
 <div class=dayheaderleft style="margin-top:80px;height:150px">
  <a name="main14" href="#chap14" class="dayheader" style="line-height:40px">  Lecture - Device Driver Introduction</a>
  <ul class="daycontent" style="padding-top:10px;float:left">
   <li><a href="#chap14_0">Introduction<br></a></li>
   <li><a href="#chap14_1">Kernel modules<br></a></li>
   <li><a href="#chap14_2">Character device drivers<br></a></li>
   <li><a href="#chap14_3">Block device drivers<br></a></li>
   <li><a href="#chap14_4">Hardware and Interrupt Handling</a></li>

  </ul>
 </div>
 <div class="dayheader" style="margin-top:247.5px;height:50px"><pre>Day 5 Afternoon</pre><hr></div>
 <div class=dayheaderleft style="margin-top:40px;height:62px">
  <pre class="dayheader" style="line-height:40px">     Lab</pre>
  <ul class="daycontent" style="padding-top:10px;float:left">

  </ul>
 </div>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p5</pre>
</div>

<div class="pg" style="margin-top:20px;height:1395px">
 <pre class="slidetitle" style="margin-top:465.0px">Li Essentials</pre>
 <pre class="slidesubtitle style="margin-top:20px">Li Essenstials- Training Course</pre>
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
Pdf version of this document is available at <a href="http://www.minhinc.com/training/advance-li-slides.pdf">http://www.minhinc.com/training/advance-li-slides.pdf</a>
For suggestion(s) or complaint(s) write to us at <a href="mailto:training@minhinc.com">training@minhinc.com</a>

Document modified on 07/2018

Document contains 102 pages.</pre>
 <pre class="ftr">&copy www.MinhInc.com</pre><pre class="pn">p7</pre>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap1">&nbsp;<div class="slideheader" style="height:115px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  1. Introduction to Linux</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap1_0">GNU Project/GPL Licensing</a></li>   <li class="sml"><pre>Evolution of Linux & Development Model
Device Identities in Linux-Partitioning Schema</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

a) You must cause the modified files to carry prominent notices stating that you
changed the files and the date of any changes.  
b) You must cause any work that you distribute or publish, that in whole or in part
contains or is derived from the Program or any part thereof, to be licensed as a whole
at no charge to all third parties under the terms of this License.  
c) If the modified program normally reads commands interactively when run, you must
cause it, when started running for such interactive use in the most ordinary way, to
print or display an announcement including an appropriate copyright notice and a
notice that there is no warranty (or else, saying that you provide a warranty) and
that users may redistribute the program under these conditions, and telling the user
how to view a copy of this License. (Exception: if the Program itself is interactive
but does not normally print such an announcement, your work based on the Program is
not required to print an announcement.) 

</pre> &nbsp;<div class="slideheader" style="height:115px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  1. Introduction to Linux</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>GNU Project/GPL Licensing
</pre></li>   <li class="big"><a name="chap1_1">Evolution of Linux & Development Model</a></li>   <li class="sml"><pre>Device Identities in Linux-Partitioning Schema</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

<pre class="codec">* 1991: The Linux kernel is publicly announced on 25 August by the 21-year-old Finnish
student Linus Benedict Torvalds.^[13]
* 1992: The Linux kernel is relicensed under the GNU GPL. The first Linux
distributions are created.
* 1993: Over 100 developers work on the Linux kernel. With their assistance the kernel
is adapted to the GNU environment, which creates a large spectrum of application types
for Linux. The oldest currently (as of 2015) existing Linux distribution, Slackware,
is released for the first time. Later in the same year, the Debian project is
established. Today it is the largest community distribution.
* 1994: Torvalds judges all components of the kernel to be fully matured: he releases
version 1.0 of Linux. The XFree86 project contributes a graphical user interface
(GUI). Commercial Linux distribution makers Red Hat and SUSE publish version 1.0 of
their Linux distributions.
* 1995: Linux is ported to the DEC Alpha and to the Sun SPARC.Over the following years
it is ported to an ever greater number of platforms.
* 1996: Version 2.0 of the Linux kernel is released. The kernel can now serve several
processors at the same time using symmetric multiprocessing (SMP), and thereby becomes
a serious alternative for many companies.
* 1998: Many major companies such as IBM, Compaq and Oracle announce their support for
Linux. The Cathedral and the Bazaar is first published as an essay (later as a book),
resulting in Netscape publicly releasing the source code to its Netscape Communicator
web browser suite. Netscape's actions and crediting of the essay^[50] brings Linux's
open source development model to the attention of the popular  technical press. In
addition a group of programmers begins developing the graphical user interface KDE.
* 1999: A group of developers begin work on the graphical environment GNOME, destined
to become a free replacement for KDE, which at the time, depends on the, then
proprietary, Qt toolkit. During the year IBM announces an extensive project for the
support of Linux.
* 2000: Dell announces that it is now the No. 2 provider of Linux-based systems
worldwide and the first major  manufacturer to offer Linux across its full product
* 2002: The media reports that "Microsoft killed Dell Linux"^[52] 
* 2004: The XFree86 team splits up and joins with the existing X standards body to
form the X.Org Foundation, which results in a substantially faster development of the
X server for Linux.
* 2005: The project openSUSE begins a free distribution from Novell's community. Also
the project OpenOffice.org introduces version 2.0 that then started supporting OASIS
OpenDocument standards.
* 2006: Oracle releases its own distribution of Red Hat Enterprise Linux.  Novell and
Microsoft announce cooperation for a better interoperability and mutual patent
protection.
* 2007: Dell starts distributing laptops with Ubuntu pre-installed on them.
* 2009: RedHat's market capitalization equals Sun's, interpreted as a symbolic moment
for the "Linux-based  economy".^[53]
* 2011: Version 3.0 of the Linux kernel is released.
* 2012: The aggregate Linux server market revenue exceeds that of the rest of the Unix
market.^[54]
* 2013: Google's Linux-based Android claims 75% of the smartphone market share, in
terms of the number of phones  shipped.^[55]
* 2014: Ubuntu claims 22,000,000 users.^[56]
* 2015: Version 4.0 of the Linux kernel is released.
</pre>
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main1" class="pn">p8</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<img class="img" src="http://www.minhinc.com/image/li-slide-linuxhistory.png" />

</pre> &nbsp;<div class="slideheader" style="height:115px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  1. Introduction to Linux</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>GNU Project/GPL Licensing
</pre></li>   <li class="sml"><pre>Evolution of Linux & Development Model
</pre></li>   <li class="big"><a name="chap1_2">Device Identities in Linux-Partitioning Schema</a></li>
  </ul>
 </div>
<pre class="slidecontent">

Device comes in two flavours:
- A character device represents a hardware device that reads or writes a serial stream
of data bytes. Serial and parallel ports, tape drives, terminal devices, and sound
cards.

-A block device represents a hardware device that reads or write data in fixed size
blocks.unlike a character device, a block device provides random access to data stored
on the device.a disk drive is an example of a block device.

Linux identifies devices using two numbers:the major device number and the minor
device number.

Major device number generally identifies a driver where as minor number identifies
devices controlled by the driver.so actual device is identified as major:minor
combination. A device can be master and slave. master are identified with 1,2,3... and
slaves as 65,66,67...

For each device there is a device file or device entry in the file system.cp rm mv
commands works on device file as regular file.data transfer happens from actual device
through device driver. use mknod to create file entry for the device.

$mknod ./lp0 c 6 0
<pre class="code">lp0 - path to the device file
c - character device, b for block device
6 - major device number, driver id
0 - minor master device number
</pre>
$ls -l lp0
<pre class="code">crw-r----- 1 root root 6, 0 Mar 7 17:03 lp0
#include &lt;stdio.h&gt;
int main(int argc, char *argv[]){
stat("lp0")
printf("file type \n");
printf("major file number \n");
printf("minor file number \n");
return 0;
}
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main1" class="pn">p9</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap2">&nbsp;<div class="slideheader" style="height:125px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  2. Introduction to Kernel</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap2_0">History of Linux</a></li>   <li class="sml"><pre>Types of kernel
</pre></li>   <li class="sml"><pre>The Linux Kernel
</pre></li>   <li class="sml"><pre>Kernel Architecture</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

<pre class="blue">History</pre>
<pre class="code">- UNIX: 1969 Thompson &amp; Ritchie AT&amp;T Bell Labs.
- BSD: 1978 Berkeley Software Distribution.
- Commercial Vendors: Sun, HP, IBM, SGI, DEC.
- GNU: 1984 Richard Stallman, FSF.
- POSIX: 1986 IEEE Portable Operating System unIX.
- Minix: 1987 Andy Tannenbaum.
- SVR4: 1989 AT&amp;T and Sun.
- Linux: 1991 Linus Torvalds Intel 386 (i386).
- Open Source: GPL.
</pre>
<pre class="blue">Linux Features</pre>
- UNIX-like operating system
- Features:
   - Preemptive multitasking.
   - Virtual memory (protected memory, paging).
   - Shared libraries.
   - Demand loading, dynamic kernel modules.
   - Shared copy-on-write executables.
   - TCP/IP networking.
   - SMP support.
   - Open source.

<pre class="blue">What's a Kernel?</pre>
- AKA: executive, system monitor.
- Controls and mediates access to hardware.
- Implements and supports fundamental abstractions:
  - Processes, files, devices etc.
- Schedules / allocates system resources:
  - Memory, CPU, disk, descriptors, etc.
- Enforces security and protection.
- Responds to user requests for service (system calls).
- Etc...

<pre class="blue">Kernel Design Goals</pre>
- Performance: efficiency, speed.
   - Utilize resources to capacity with low overhead.
- Stability: robustness, resilience.
   - Uptime, graceful degradation.
- Capability: features, flexibility, compatibility.
- Security, protection.
   - Protect users from each other &amp; system from bad
    users.
- Portability.
- Extensibility.

<pre class="blue">Kernel Modules</pre>
<img class="img" src="http://www.minhinc.com/image/li-slide-kerneldesigngoal.png" />

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main2" class="pn">p10</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:125px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  2. Introduction to Kernel</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>History of Linux
</pre></li>   <li class="big"><a name="chap2_1">Types of kernel</a></li>   <li class="sml"><pre>The Linux Kernel
</pre></li>   <li class="sml"><pre>Kernel Architecture</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Types of Kernel
- Monolithic.
- Layered.
- Modularized.
- Micro-kernel.
- Virtual machine.

<a href="http://www.minhinc.com/image/li-slide-kerneltype.png"><img class="img" src="http://www.minhinc.com/image/li-slide-kerneltype_s.png" /></a>

A monolithic kernel is a kernel where all services (file system, VFS, device drivers,
etc) as well as core functionality (scheduling, memory allocation, etc.) are a tight
knit group sharing the same space. This directly opposes a microkernel.

A monolithic kernel is a kernel architecture where the entire operating system is
working in the kernel space and alone as supervisor mode. In difference with other
architectures,1 the monolithic kernel defines alone a high-level virtual interface
over computer hardware, with a set of primitives or system calls to implement all
operating system services such as process management, concurrency, and memory
management itself and one or more device drivers as modules.

A microkernel prefers an approach where core functionality is isolated from system
services and device drivers (which are basically just system services). For instance,
VFS (virtual file system) and block device file systems (i.e. minixfs) are separate
processes that run outside of the kernel's space, using IPC to communicate with the
kernel, other services and user processes. In short, if it's a module in Linux, it's a
service in a microkernel, indicating an isolated process.

Recent versions of Windows on the other hand use a Hybrid kernel.

A hybrid kernel is a kernel architecture based on combining aspects of microkernel and
monolithic kernel architectures used in computer operating systems. The category is
controversial due to the similarity to monolithic kernel; the term has been dismissed
by some as simple marketing. The traditional kernel categories are monolithic kernels
and microkernels (with nanokernels and exokernels seen as more extreme versions of
microkernels).

</pre> &nbsp;<div class="slideheader" style="height:125px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  2. Introduction to Kernel</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>History of Linux
</pre></li>   <li class="sml"><pre>Types of kernel
</pre></li>   <li class="big"><a name="chap2_2">The Linux Kernel</a></li>   <li class="sml"><pre>Kernel Architecture</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

<pre class="blue">The Linux Kernel</pre>
-Monolithic

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main2" class="pn">p11</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:125px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  2. Introduction to Kernel</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>History of Linux
</pre></li>   <li class="sml"><pre>Types of kernel
</pre></li>   <li class="sml"><pre>The Linux Kernel
</pre></li>   <li class="big"><a name="chap2_3">Kernel Architecture</a></li>
  </ul>
 </div>
<pre class="slidecontent">

<pre class="blue">Linux Source Tree</pre>
<img class="img" src="http://www.minhinc.com/image/li-slide-linuxtreelayout.png" />

<pre class="blue">linux/arch</pre>
- Subdirectories for each current port.
- Each contains kernel, lib, mm, boot and other directories whose contents override
code stubs in architecture independent code.
- lib directory contains highly-optimized common utility routines
  such as memcpy, checksums, etc.
- arch directory as of 2.4:
   - alpha, arm, i386, ia64, m68k, mips, mips64.
   - ppc, s390, sh, sparc, sparc64.

<pre class="blue">linux/drivers</pre>
- Largest amount of code in the kernel tree (~1.5M).
- device, bus, platform and general directories.
- drivers/char - n_tty.c is the default line discipline.
- drivers/block - elevator.c, genhd.c, linear.c, ll_rw_blk.c, raidN.c.
- drivers/net - specific drivers and general routines Space.c and net_init.c.
- drivers/scsi - scsi_*.c files are generic; sd.c (disk), sr.c (CD- ROM), st.c (tape),
sg.c (generic).
- General:
   - cdrom, ide, isdn, parport, pcmcia, pnp, sound, telephony, video.
- Buses - fc4, i2c, nubus, pci, sbus, tc, usb.
- Platforms - acorn, macintosh, s390, sgi.

<pre class="blue">linux/fs</pre>
- Contains:
   - virtual filesystem (VFS) framework.
   - subdirectories for actual filesystems.
- vfs-related files:
   - exec.c, binfmt_*.c - files for mapping new process images.
   - devices.c, blk_dev.c - device registration, block device support.
   - super.c, filesystems.c.
   - inode.c, dcache.c, namei.c, buffer.c, file_table.c.
   - open.c, read_write.c, select.c, pipe.c, fifo.c.
   - fcntl.c, ioctl.c, locks.c, dquot.c, stat.c.

<pre class="blue">linux/include</pre>
- include/asm-*:
   - Architecture-dependent include subdirectories.
- include/linux:
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main2" class="pn">p12</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
   - Header info needed both by the kernel and user apps.
   - Usually linked to /usr/include/linux.
   - Kernel-only portions guarded by #ifdefs
       - #ifdef __KERNEL__
       -      /* kernel stuff */
       - #endif
- Other directories:
   - math-emu, net, pcmcia, scsi, video.

<pre class="blue">linux/init</pre>
- Just two files: version.c, main.c.
- version.c - contains the version banner that prints at
  boot.
- main.c - architecture-independent boot code.
- start_kernel is the primary entry point.

<pre class="blue">linux/ipc</pre>
- System V IPC facilities.
- If disabled at compile-time, util.c exports stubs that
  simply return -ENOSYS.
- One file for each facility:
   - sem.c - semaphores.
   - shm.c - shared memory.
   - msg.c - message queues.

<pre class="blue">linux/kernel</pre>
- The core kernel code.
- sched.c - "the main kernel file":
   - scheduler, wait queues, timers, alarms, task queues.
- Process control:
   - fork.c, exec.c, signal.c, exit.c etc...
- Kernel module support:
   - kmod.c, ksyms.c, module.c.
- Other operations:
   - time.c, resource.c, dma.c, softirq.c, itimer.c.
   - printk.c, info.c, panic.c, sysctl.c, sys.c.

<pre class="blue">linux/lib</pre>
- kernel code cannot call standard C library routines.
- Files:
   - brlock.c - "Big Reader" spinlocks.
   - cmdline.c - kernel command line parsing routines.
   - errno.c - global definition of errno.
   - inflate.c - "gunzip" part of gzip.c used during boot.
   - string.c - portable string code.
       - Usually replaced by optimized, architecture-
         dependent routines.
   - vsprintf.c - libc replacement.

<pre class="blue">linux/mm</pre>
- Paging and swapping:
   - swap.c, swapfile.c (paging devices), swap_state.c (cache).
   - vmscan.c - paging policies, kswapd.
   - page_io.c - low-level page transfer.
- Allocation and deallocation:
   - slab.c - slab allocator.
   - page_alloc.c - page-based allocator.
   - vmalloc.c - kernel virtual-memory allocator.
- Memory mapping:
   - memory.c - paging, fault-handling, page table code.
   - filemap.c - file mapping.
   - mmap.c, mremap.c, mlock.c, mprotect.c.

<pre class="blue">linux/scripts</pre>
- Scripts for:
  - Menu-based kernel configuration.
  - Kernel patching.
  - Generating kernel documentation.
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main2" class="pn">p13</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main2" class="pn">p14</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap3">&nbsp;<div class="slideheader" style="height:247px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  3. Shell commands & Shell</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap3_0">Basic Shell commands<br></a></li>   <li class="big"><a name="chap3_0">Bash Shell Essentials<br>- Introduction</a></li>   <li class="sml"><pre> - Process
</pre></li>   <li class="sml"><pre>-Shell Programming
</pre></li>   <li class="sml"><pre> - Shell Programming
</pre></li>   <li class="sml"><pre>-Programming commands
</pre></li>   <li class="sml"><pre>- Advance Shell Programming
   - Function
   - Array
   - I/O Redirection and file descriptor
   - Local and Global variables
   - Conditional Execution
</pre></li>   <li class="sml"><pre>Creating Makefiles</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

<pre class="blue">Shell structure</pre>
Shell scripting has four components
1) Kernel
2) Shell Process
3) Command Process
4) Redirectors, Pipes, Filters etc.

Kernel does
- I/O management
- Process management
- File management
- Memory management



<pre class="code">-----------          -----------------            -------------
|  User   | ------&gt;  |   Linux Shell | ---------&gt; |  Kernel   |
-----------          -----------------            -------------
                             |
                             V
                    -------------------
                    | command process |
                    -------------------
</pre>
<img class="img" src="http://www.minhinc.com/image/li-slide-shellstructure.png" />

<pre class="blue">Shells</pre>

<img class="img" src="http://www.minhinc.com/image/li-slide-shellstructure1.png" />

NOTE: To find your shell type following command
$ echo $SHELL

<pre class="blue">Linux Common Commands</pre>
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main3" class="pn">p15</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
$ date --help

$ ls --help | more
<pre class="code">Syntax: command-name --help
Syntax: man command-name
Syntax: info command-name
</pre>
$ man ls
$ info bash
<pre class="code">NOTE: In MS-DOS, you get help by using /? clue or by typing help command as
C:\&gt; dir /?
C:\&gt; date /?
C:\&gt; help time
C:\&gt; help date
C:\&gt; help
</pre>
<pre class="black">Linux Command</pre>
$ date
$ who
$ pwd
$ ls
$ cat &gt; myfile
$ more    myfile
$ mv sales


$ ln  Page1  Book1
$ rm    myfile
$ rm -rf  oldfiles
$ chmod u+x,g+wx,o+x   myscript
$ mail
$ who am i
$ logout
$ mail ashish
$ wc    myfile
$ grep  fox
$ sort  myfile
$ tail +5   myfile
$ cmp myfile
$ pr  myfile

</pre> &nbsp;<div class="slideheader" style="height:225px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  3. Shell commands & Shell</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Basic Shell commands
</pre></li>   <li class="sml"><pre>Bash Shell Essentials
- Introduction
</pre></li>   <li class="big"><a name="chap3_1"> - Process</a></li>   <li class="sml"><pre>-Shell Programming
</pre></li>   <li class="sml"><pre> - Shell Programming
</pre></li>   <li class="sml"><pre>-Programming commands
</pre></li>   <li class="sml"><pre>- Advance Shell Programming
   - Function
   - Array
   - I/O Redirection and file descriptor
   - Local and Global variables
   - Conditional Execution
</pre></li>   <li class="sml"><pre>Creating Makefiles</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

<pre class="blue">Process</pre>
A process is program (command given by user) to perform some Job. In Linux when you
start process, it gives a number (called PID or process-id), PID starts from 0 to
65535.
$ ls -lR , is command or a request to list files in a directory and all sub directory
in your current directory.

<pre class="black">Why Process required</pre>
Linux is multi-user, multitasking o/s. It means you can run more than two process
simultaneously if you wish. For e.g.. To find how many files do you have on your
system you may give command like
$ ls / -R | wc -l
This command will take lot of time to search all files on your system. So you can run
such command in Background or simultaneously by giving command like
$ ls / -R | wc -l &amp;
The ampersand (&amp;) at the end of command tells shells start command (ls / -R | wc -l)
and run it in background takes next command immediately. An instance of
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main3" class="pn">p16</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
running command is called process and the number printed by shell is called process-id
(PID), this PID can be use to refer specific running process.

</pre> &nbsp;<div class="slideheader" style="height:225px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  3. Shell commands & Shell</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Basic Shell commands
</pre></li>   <li class="sml"><pre>Bash Shell Essentials
- Introduction
</pre></li>   <li class="sml"><pre> - Process
</pre></li>   <li class="big"><a name="chap3_2">-Shell Programming</a></li>   <li class="sml"><pre> - Shell Programming
</pre></li>   <li class="sml"><pre>-Programming commands
</pre></li>   <li class="sml"><pre>- Advance Shell Programming
   - Function
   - Array
   - I/O Redirection and file descriptor
   - Local and Global variables
   - Conditional Execution
</pre></li>   <li class="sml"><pre>Creating Makefiles</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

<pre class="blue">Redirection of Standard output/input or Input - Output
redirection</pre>
(1) &gt; Redirector Symbol (Truncate to zero and write)
<pre class="code">Syntax: Linux-command &gt; filename
</pre>$ ls &gt; myfiles
<pre class="code">(2) &gt;&gt; Redirector Symbol  (Append)
Syntax: Linux-command &gt;&gt; filename
</pre>$ date &gt;&gt; myfiles
(3) &lt; Redirector Symbol
<pre class="code">Syntax: Linux-command &lt; filename
To take input to Linux-command from file instead of key-board. For e.g. To take input
for cat command give
</pre>$ cat &lt; myfiles

<pre class="black">Pipes</pre>
A pipe is a way to connect the output of one program to the input of another program
without any temporary file.


<img class="img" src="http://www.minhinc.com/image/li-slide-shellpipe.png" />

A pipe is nothing but a temporary storage place where the output of one command is
stored and then passed as the input for second command. Pipes are used to run more
than two commands ( Multiple commands) from same command line.
<pre class="code">Syntax: command1 | command2
</pre>
Filter
A filter command takes input from a pipe and constricts the output of the previous
program.
$ tail +20 &lt; hotel.txt | head -n30 &gt;hlist
Here head is filter which takes its input from tail command (tail command start
selecting from line number 20 of given file i.e. hotel.txt) and passes this lines to
input to head, whose output is redirected to 'hlist' file.

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main3" class="pn">p17</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:225px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  3. Shell commands & Shell</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Basic Shell commands
</pre></li>   <li class="sml"><pre>Bash Shell Essentials
- Introduction
</pre></li>   <li class="sml"><pre> - Process
</pre></li>   <li class="sml"><pre>-Shell Programming
</pre></li>   <li class="big"><a name="chap3_3"> - Shell Programming</a></li>   <li class="sml"><pre>-Programming commands
</pre></li>   <li class="sml"><pre>- Advance Shell Programming
   - Function
   - Array
   - I/O Redirection and file descriptor
   - Local and Global variables
   - Conditional Execution
</pre></li>   <li class="sml"><pre>Creating Makefiles</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

<pre class="blue">Introduction to Shell Programming</pre>
Shell program is series of Linux commands.

Variables in Linux
Sometimes to process our data/information,  variables are remembered by shell Process.

1) System variables - Created and maintained by Linux itself. This type of variable
defined in CAPITAL LETTERS.
2) User defined variables (UDV) - Created and maintained by user. This type of
variable defined in lower LETTERS.

<img class="img" src="http://www.minhinc.com/image/li-slide-shellsystemvariable.png" />

$ echo $USERNAME
$ echo $HOME
<pre class="code">Caution: Do not modify System variable this can some time create problems.

<pre class="black">User Defined Variable</pre>
Syntax: variablename=value
NOTE: Here 'value' is assigned to given 'variablename' and Value must be on right side
= sign For
e.g.
</pre>$ no=10           # this is ok
$ 10=no           # Error, NOT Ok, Value must be on right side of = sign.
To define variable called 'vech' having value Bus
  
$ vech=Bus
To define variable called n having value 10
$ n=10

You can define NULL variable as follows (NULL variable is variable which has no value
at the time of definition) For e.g.
$ vech=
$ vech=""
Try to print it's value $ echo $vech , Here nothing will be shown because variable has
no value i.e. NULL variable.

To print or access variables use following syntax
<pre class="code">Syntax: $variablename
For eg. To print contains of variable 'vech'
</pre>$ echo $vech

<pre class="black">How to Run Shell Scripts</pre>
(1) Use chmod command as follows to give execution permission to our script
<pre class="code">Syntax: chmod +x shell-script-name
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main3" class="pn">p18</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">OR Syntax: chmod 777 shell-script-name
(2) Run our script as
Syntax: ./your-shell-program-name
For e.g.
</pre>$ ./first

OR /bin/sh your-shell-program-name
For e.g.
$ bash first
$ /bin/sh first

Script file name complete path is required OR  PATH variable needs to be set.
To run the script, file name complete path is required 

<img class="img" src="http://www.minhinc.com/image/li-slide-filepath.png" />

OR  PATH variable needs to be set.

<pre class="blue">Commands Related with Shell Programming</pre>
(1)echo [options] [string, variables...]
Displays text or variables value on screen.
Options
<pre class="code">-n Do not output the trailing new line.
-e Enable interpretation of the following backslash escaped characters in the strings:
\a alert (bell)
\b backspace
\c suppress trailing new line
\n new line
\r carriage return
\t horizontal tab
\\ backslash
</pre>For eg. $ echo -e "An apple a day keeps away \a\t\tdoctor\n"

(2)More about Quotes
There are three types of quotes
<pre class="code">" i.e. Double Quotes
' i.e. Single quotes
` i.e. Back quote
1."Double Quotes" - Anything enclose in double quotes removed meaning of that
characters (except \ and $).
2. 'Single quotes' - Enclosed in single quotes remains unchanged.
3. `Back quote` - To execute command.
</pre>For eg.
$ echo "Today is date"
<pre class="code">Can't print message with today's date.
$ echo "Today is `date`".
Now it will print today's date as, Today is Tue Jan ....,See the `date` statement uses
back quote,
(See also Shell Arithmetic NOTE).
</pre>
3) Shell Arithmetic
<pre class="code">Use to perform arithmetic operations For e.g.
$ expr 1 + 3
$ expr 2 - 1
$ expr 10 / 2
$ expr 20 % 3 # remainder read as 20 mod 3 and remainder is 2)
$ expr 10 \* 3 # Multiplication use \* not * since its wild card)
$ echo `expr 6 + 3`
For the last statement note the following points
1) First, before expr keyword we used ` (back quote) sign not the (single quote i.e.
') sign. Back
quote is generally found on the key under tilde (~) on PC keyboards OR To the above of
TAB key.
2) Second, expr is also end with ` i.e. back quote.
3) Here expr 6 + 3 is evaluated to 9, then echo command prints 9 as sum
4) Here if you use double quote or single quote, it will NOT work, For eg.
$ echo "expr 6 + 3" # It will print expr 6 + 3
$ echo 'expr 6 + 3'
</pre>
<pre class="black">Command Line arguments
$ myshell foo bar</pre>

</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main3" class="pn">p19</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<img class="img" src="http://www.minhinc.com/image/li-slide-shellcommandlineargument.png" />
<img class="img" src="http://www.minhinc.com/image/li-slide-shellcommandlineargument1.png" />

<pre class="black">Command line arguments or Function arguments</pre>

<img class="img" src="http://www.minhinc.com/image/li-slide-shellcommandlineargument2.png" />

<pre class="black">Exit Status</pre>
By default in Linux if particular command is executed, it return two type of values, 
if return value is zero (0), command is successful
If return value is nonzero (&gt;0), command is not successful or some sort of error
executing command/shell script. 
This value is know as Exit Status of that command. 
To determine this exit Status we use $? variable of shell. For eg.
$ rm unknow1file
rm: cannot remove 'unkowm1file': No such file or directory
and after that if you give command $ echo $?
it will print nonzero value(&gt;0) to indicate error. Now give command
$ ls
$ echo $?
It will print 0 to indicate command is successful.

<img class="img" src="http://www.minhinc.com/image/li-slide-shellreturn.png" />

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main3" class="pn">p20</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:225px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  3. Shell commands & Shell</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Basic Shell commands
</pre></li>   <li class="sml"><pre>Bash Shell Essentials
- Introduction
</pre></li>   <li class="sml"><pre> - Process
</pre></li>   <li class="sml"><pre>-Shell Programming
</pre></li>   <li class="sml"><pre> - Shell Programming
</pre></li>   <li class="big"><a name="chap3_4">-Programming commands</a></li>   <li class="sml"><pre>- Advance Shell Programming
   - Function
   - Array
   - I/O Redirection and file descriptor
   - Local and Global variables
   - Conditional Execution
</pre></li>   <li class="sml"><pre>Creating Makefiles</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

<pre class="blue">If-then-fi for decision making is shell script</pre>
$ bc
<pre class="code">follows type 5 + 2 as
5+2
7
7 is response of bc i.e. addition of 5 + 2 you can even try
5-2
5/2
Now what happened if you type 5 &gt; 2 as follows
5&gt;2
0
</pre>
<img class="img" src="http://www.minhinc.com/image/li-slide-shellprogrammingcommand.png" />

<pre class="code">Syntax:
if condition
 then
    command1 if condition is true or if exit status
    of condition is 0 (zero)
     ...
     ...
fi
</pre>
<pre class="black">$ cat > showfile</pre>
<pre class="code">#!/bin/sh
#
#Script to print file
#
if cat $1
then
    echo -e "\n\nFile $1, found and successfully echoed"
fi
</pre>
<pre class="blue">test command or [ expr ]</pre>
test command or [ expr ] is used to see if an expression is true, and if it is true it
return zero(0),
otherwise returns nonzero(&gt;0) for false. Syntax: test expression OR [ expression ]
Now will write script that determine whether given argument number is positive. Write
script as follows
$ cat &gt; ispostive
<pre class="code">#!/bin/sh
#
# Script to see whether argument is positive
#
if test $1 -gt 0
then
    echo "$1 number is positive"
fi

Or
</pre>
$ cat &gt; ispostive
<pre class="code">#!/bin/sh
#
# Script to see whether argument is positive
#
If [ test $1 -gt 0 ]
then
    echo "$1 number is positive"
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main3" class="pn">p21</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">fi
</pre>
test or [ expr] works with
1.Integer ( Number without decimal point)
2.File types
3.Character strings
For Mathematics use following operator in Shell Script

<img class="img" src="http://www.minhinc.com/image/li-slide-shellprogrammingcommand1.png" />

NOTE: == is equal, != is not equal.
For string Comparisons use

<img class="img" src="http://www.minhinc.com/image/li-slide-shellprogrammingcommand2.png" />

Shell also test for file and directory types

<img class="img" src="http://www.minhinc.com/image/li-slide-shellprogrammingcommand3.png" />

<pre class="blue">if...else...fi</pre>
If given condition is true then command1 is executed otherwise command2 is executed.
Syntax:
<pre class="code">if condition
then
  command1 if condition is true or if exit status
  of condition is 0(zero)
  ...
  ...
else
 command2 if condition is false or if exit status
 of condition is &gt;0 (nonzero)
 ...
 ...
fi
</pre>$ cat &gt; isnump_n
<pre class="code">#!/bin/sh
# Script to see whether argument is positive or negative
#
if [ $# -eq 0 ]
then
      echo "$0 : You must give/supply one integers"
      exit 1
fi
if test $1 -gt 0
then
      echo "$1 number is positive"
else
      echo "$1 number is negative"
fi
</pre><pre class="blue">Multilevel if-then-else</pre>
Syntax:
<pre class="code"></pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main3" class="pn">p22</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">if condition
then
 condition is zero (true - 0)
 execute all commands up to elif statement
elif condition1
 condition1 is zero (true - 0)
 execute all commands up to elif statement
elif condition2
 condition2 is zero (true - 0)
 execute all commands up to elif statement
else
 None of the above condtion,condtion1,condtion2 are true (i.e.
 all of the above nonzero or false)
 execute all commands up to fi
fi

<pre class="blue">for loop Syntax:</pre>
 for { variable name } in { list }
 do
   execute one for each item in the list until the list is
   not finished (And repeat all statement between do and done)
 done
</pre>
Suppose,
$ cat &gt; testfor
<pre class="code">for i in 1 2 3 4 5
do
    echo "Welcome $i times"
done
</pre>Run it as,
$ chmod +x testfor
$ ./testfor

<pre class="blue">while loop</pre>
Syntax:
<pre class="code">while [ condition ]
do
 command1
 command2
 command3
 ..
 ....
done
</pre>
$cat &gt; nt1
#!/bin/sh
#Script to test while statement
<pre class="code">if [ $# -eq 0 ]
then
     echo "Error - Number missing form command line argument"
     echo "Syntax : $0 number"
     echo " Use to print multiplication table for given number"
     exit 1
fi
n=$1
i=1
while [ $i -le 10 ]
do
   echo "$n * $i = `expr $i \* $n`"
   i=`expr $i + 1`
done
</pre>
<pre class="blue">The case Statement</pre>
The case statement is good alternative to Multilevel if-then-else-fi statement. It
enable you to match several values against one variable. Its easier to read and write.
Syntax:
<pre class="code">case     $variable-name in
pattern1)             command
 ..
 command;;
pattern2)             command
 ..
 command;;
patternN) command
 ..
 command;;
 *)           command
 ..
 command;;
esac
</pre>
The $variable-name is compared against the patterns until a match is found. The shell
then executes all the statements up to the two semicolons that are next to each other.
The default is *) and its executed if no match is found. For eg. Create script as
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main3" class="pn">p23</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
follows
$ cat &gt; car
<pre class="code">#
# if no vehicle name is given
# i.e. -z $1 is defined and it is NULL
#
# if no command line arg
if [ -z $1 ]
then
      rental="*** Unknown vehicle ***"
elif [ -n $1 ]
then
# otherwise make first arg as rental
      rental=$1
fi
case $rental in
   "car") echo "For $rental Rs.20 per k/m";;
   "van") echo "For $rental Rs.10 per k/m";;
   "jeep") echo "For $rental Rs.5 per k/m";;
   "bicycle") echo "For $rental 20 paisa per k/m";;
   *) echo "Sorry, I can not gat a $rental for you";;
esac
</pre>
Save it by pressing CTRL+D
$ chmod +x car
$ car van
$ car car
$ car Maruti-800

<pre class="blue">The read Statement</pre>
Use to get input from keyboard and store them to variable.
<pre class="code">Syntax: read varible1, varible2,...varibleN
</pre>Create script as
$ cat &gt; sayH
#
#Script to read your name from key-board
#
<pre class="code">echo "Your first name please:"
read fname
echo "Hello $fname, Lets be friend!"
Run it as follows
</pre>$ chmod +x sayH
$ ./sayH
<pre class="code">
<pre class="blue">Filename Shorthand or meta Characters (i.e. wild cards)</pre>
* or ? or [...] is one of such shorthand character.
* Matches any string or group of characters.
For e.g. $ ls * , will show all files, $ ls a* - will show all files whose first name
is starting with letter
'a', $ ls *.c ,will show all files having extension .c $ ls ut*.c, will show all files
having extension .c but first two letters of file name must be 'ut'.
? Matches any single character.
For e.g. $ ls ? , will show one single letter file name, $ ls fo? , will show all
files whose names are 3 character long and file name begin with fo
[...] Matches any one of the enclosed characters.
For e.g. $ ls [abc]* - will show all files beginning with letters a,b,c
[..-..] A pair of characters separated by a minus sign denotes a range;
For eg. $ ls /bin/[a-c]* - will show all files name beginning with letter a,b or c
like
/bin/arch        /bin/awk       /bin/bsh    /bin/chmod         /bin/cp
/bin/ash         /bin/basename  /bin/cat    /bin/chown         /bin/cpio
/bin/ash.static  /bin/bash      /bin/chgrp  /bin/consolechars  /bin/csh
</pre>
But

$ ls /bin/[!a-o]
$ ls /bin/[^a-o]

<pre class="blue">command1;command2</pre>
To run two command with one command line.For eg. $ date;who ,Will print today's date
followed
 http://www.freeos.com/guides/lsst/shellprog.htm (18 of 19) [17/08/2001 17.42.21]
 Linux Shell Script Tutorial
by users who are currently login. 

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main3" class="pn">p24</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:280px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  3. Shell commands & Shell</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Basic Shell commands
</pre></li>   <li class="sml"><pre>Bash Shell Essentials
- Introduction
</pre></li>   <li class="sml"><pre> - Process
</pre></li>   <li class="sml"><pre>-Shell Programming
</pre></li>   <li class="sml"><pre> - Shell Programming
</pre></li>   <li class="sml"><pre>-Programming commands
</pre></li>   <li class="big"><a name="chap3_5">- Advance Shell Programming<br>   - Function<br>   - Array<br>   - I/O Redirection and file descriptor<br>   - Local and Global variables<br>   - Conditional Execution</a></li>   <li class="sml"><pre>Creating Makefiles</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

<pre class="blue">/dev/null - Use to send unwanted output of program</pre>
Syntax: command &gt; /dev/null
For e.g. $ ls &gt; /dev/null , output of this command is not shown on screen its send to
this special file. The /dev directory contains other device files. The files in this
directory mostly represent peripheral devices such disks liks floppy disk, sound card,
line printers etc.
<pre class="blue">local and Global Shell variable (export command)</pre>
Normally all our variables are local. Local variable can be used in same shell, if you
load another copy of shell (by typing the /bin/bash at the $ prompt) then new shell
ignored all old shell's variable. For e.g.
Consider following example
$ vech=Bus
$ echo $vech
Bus
$ /bin/bash
$ echo $vech
NOTE:-Empty line printed
$ vech=Car
$ echo $vech
Car
$ exit
$ echo $vech

<pre class="blue">Syntax: export variable1, variable2,.....variableN</pre>
For e.g.
$ vech=Bus
$ echo $vech
Bus
$ export vech
$ /bin/bash
$ echo $vech
Bus
$ exit
$ echo $vech

<pre class="blue">Conditional execution i.e. && and ||</pre>
The control operators are &amp;&amp; (read as AND) and || (read as OR). An AND list has the
Syntax: command1 &amp;&amp; command2
Here command2 is executed if, and only if, command1 returns an exit status of zero. An
OR list has the
Syntax: command1 || command2
Here command2 is executed if and only if command1 returns a non-zero exit status. You
can use both as follows
command1 &amp;&amp; comamnd2 if exist status is zero || command3 if exit status is non-zero
Here if command1 is executed successfully then shell will run command2 and if command1
is not successful then command3 is executed. For e.g.
$ rm myf &amp;&amp; echo File is removed successfully || echo File is not removed
If file (myf) is removed successful (exist status is zero) then "echo File is removed
successfully" statement is executed, otherwise "echo File is not removed" statement is
executed (since exist status is non-zero)

<pre class="blue">Functions</pre>
Function is series of instruction/commands. Function performs particular activity in
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main3" class="pn">p25</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
shell. To define function use following
Syntax:
<pre class="code">function-name ( )
{
 command1
 command2
 .....
 ...
 commandN
 return
}
</pre>
Where function-name is name of you function, that executes these commands. A return
statement will terminate the function. For e.g. Type SayHello() at $ prompt as follows
<pre class="code">$ SayHello()
{
echo "Hello $LOGNAME, Have nice computing"
return
}
</pre>$ SayHello
Hello 102x, Have nice computing
Edit /etc/bashrc (as root) or ~/.bashrc for executing function at login time. 

<pre class="blue">I/O Redirection and file descriptors</pre>
$ cat &gt; myf
<pre class="code">      This is my file
      ^D
</pre>Above command send output of cat command to myf file. Redirection can be used to send
output to stderr, stdout and can be used to read input for stdin files

<img class="img" src="http://www.minhinc.com/image/li-slide-standarddescriptor.png" />

<pre class="code">[sc@localhost ~]$ rm &gt; tmp1
<b>rm: missing operand
Try 'rm --help' for more information.
[sc@localhost ~]$ cat tmp1
[sc@localhost ~]$ rm &gt; tmp1 2&gt;&amp;1
[sc@localhost ~]$ cat tmp1
rm: missing operand
Try 'rm --help' for more information.</b>
[sc@localhost ~]$
</pre>

<pre class="blue">Array</pre>
Arrays are define as 
ar=(one two three)

for i in 2 4 5 6; do
done

for i in {1..6}; do
done

${ar[1]} ${ar[2]} ...

$ar[*] or $ar[@]  # for list

${#ar[*]}  # for number of elements

for i in ${ar[@]}; do
done

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main3" class="pn">p26</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:225px">
  <pre class="day">Day 1 Morning</pre>
  <pre class="topic">  3. Shell commands & Shell</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Basic Shell commands
</pre></li>   <li class="sml"><pre>Bash Shell Essentials
- Introduction
</pre></li>   <li class="sml"><pre> - Process
</pre></li>   <li class="sml"><pre>-Shell Programming
</pre></li>   <li class="sml"><pre> - Shell Programming
</pre></li>   <li class="sml"><pre>-Programming commands
</pre></li>   <li class="sml"><pre>- Advance Shell Programming
   - Function
   - Array
   - I/O Redirection and file descriptor
   - Local and Global variables
   - Conditional Execution
</pre></li>   <li class="big"><a name="chap3_6">Creating Makefiles</a></li>
  </ul>
 </div>
<pre class="slidecontent">

Constituents of a make file
* Rules
* Variables
* Directives
  - Inclusion of another make
  - Conditional directives
* Comments
  - Text that follows # symbol is treated as comment
  - To include # literally, prefix with \

Rules
Syntax
<pre class="code">target1 [target2] : [prerequisite1] [prerequisite2]
&lt;TAB&gt;command-1
&lt;TAB&gt;command-2
</pre>
<img class="img" src="http://www.minhinc.com/image/li-slide-makefile.png" />

* Explicit rule
  - explicitly specify the prerequisites for a specific target
* Implicit rules
  - Take advantage of the knowledge make has about known patterns of files (e.g., .c,
.cpp .o, .s)
  - Further classified into pattern rules &amp; suffix rules

 Variables
Predefined
o Some commonly used variables predefined by GNU make CC , FLAGS , CFLAGS, LDFLAGS,
$@, $^, $&lt;

$@ name of the target
               foo1.o: foo1.c foo1.h
$&lt;    name of the first prerequisite
               gcc -c $&lt;
$^       names of all prerequisites

foo: foo1.o foo2.o
	gcc -o $@ $^

foo: foo1.o foo2.o
	gcc -o foo foo1.o foo2.o

foo2.o: foo2.c foo2.h
	gcc -c $&lt;
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main3" class="pn">p27</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
foo2.o: foo2.c foo2.h foo1.h
 gcc -c foo2.c

User defined
ABC:=10  # const assigment
ABC=10 # non const assignment

Command line  variables
Variables can be defined or redefined from command line
$ make
$ make VAR1=abc VAR2=xyz

Use <b>override</b> directive to let undesirable command line redefines for a variable be
ignored
ex.
VAR1=dummy
VAR2=
All:
	echo  VAR1 =  $(VAR1)
	echo VAR2 = override    $(VAR2)
	VAR1=dummy

Conditional assingment
ARCH ?= x86
Append
SRC += x.c

Implicit rules

Wildcard
foo: *.o
gcc -o $@ $^X

Functions
General syntax
  $(function-name arg1[,argn])
       SRC := x.c y.c z.c
* String functions
- $(subst search-str,replace-str,text)
           OBJS := $(subst .c,.o,$(SRC))
- $(patsubst search-pat,replace-pat,text)
           OBJS := $(patsubst %.c, obj/%.o, x.c y.c z.c)

* Warning function
   - Very useful for debugging
   - Can be placed anywhere in a makefile
             $(warning TARGET not defined)
     outputs in the format
     &lt;filename&gt;:&lt;linenum&gt;:TARGET not defined
* Shell function
   - Can be used to invoke any external program
             today := $(shell date)

Wildcard function
SRCS := $(wildcard *.c)
OBJS := $(subst .c,.o,$(SRCS))

foo: $(OBJS)
	gcc -c $&lt; cc -o $@ $^
foo2.o: foo2.c foo2.h foo1.h
  gcc -c $&lt;
foo1.o: foo1.c foo1.h
 gcc -c $&lt;


Pattern rule
foo : foo1.o foo2.o
	g++ -o $@ $^
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main3" class="pn">p28</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
foo2.o: foo2.h  foo1.h
foo1.o: foo1.h

# pattern rule for .cpp to .o
 %.o : %.cpp
	g++ -c $&lt;

More advanced
  %.o:%.c
       $(COMPILE.c) $(OUTPUT_OPTION) $&lt;
where
   COMPILE.c =$(CC) $(CFLAGS) $(CPPFLAGS ) $(TARGET_ARCH) -c
   CC =cc
   OUTPUT_OPTION =-o $@


conditionals
conditional-directive
    text-if-true
endif

conditional-directive
    text-if-true
else
    text-if-false
endif
     
Conditional directives
 - ifeq
 - ifneq
 - ifdef variable-name
 - ifndef variable-name

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main3" class="pn">p29</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre style="text-align:center;line-height:1395px;font-size:24pt">Left Blank</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#mainL" class="pn">p30</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap4">&nbsp;<div class="slideheader" style="height:147px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  4. Creating Libraries</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap4_0">Creating Static Library<br> - Using Static Library<br></a></li>   <li class="big"><a name="chap4_0">Creating Shared Library</a></li>   <li class="sml"><pre> -Using Shared Library</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">
Refer
<a href="http://www.minhinc.com/training/cpp/advance-cpp-agenda.php#chap1_7">http://www.minhinc.com/training/cpp/advance-cpp-agenda.php#chap1_7</a>
</pre> &nbsp;<div class="slideheader" style="height:125px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  4. Creating Libraries</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Creating Static Library
 - Using Static Library
</pre></li>   <li class="sml"><pre>Creating Shared Library
</pre></li>   <li class="big"><a name="chap4_1"> -Using Shared Library</a></li>
  </ul>
 </div>
<pre class="slidecontent">

<b>Dynamic Loading and Unloading</b>
This functionality is available under Linux by using the dlopen function.
 dlopen ("libtest.so", RTLD_LAZY)

The second parameter is a flag that indicates how to bind symbols in the shared
Library.
Include the &lt;dlfcn.h&gt; header file and link with the -ldl option to pick up the
libdl library.

<pre class="code">void* handle = dlopen ("libtest.so", RTLD_LAZY);
void (*test)() = dlsym (handle, "my_function");
(*test)();
dlclose (handle);
</pre>
Both dlopen and dlsym return NULL if they do not succeed. In that event, you can call
dlerror (with no parameters) to obtain a human-readable error message describing the
problem.

<b>C++ file linking to C shared library</b>
If you're writing the code in your shared library in C++, you will probably want to
declare those functions and variables that you plan to access elsewhere with the 
<pre class="code">extern "C" linkage specifier. 
   extern "C" void foo ();
</pre>This prevents the C++ compiler from mangling the function name, which would change the
function's name from foo to a different, funny-looking name that encodes extra
information about the function. A C compiler will not mangle names; it will use
whichever name you give to your function or variable.

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main4" class="pn">p31</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap5">&nbsp;<div class="slideheader" style="height:135px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  5. The Boot Process</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap5_0">The Boot Process</a></li>   <li class="sml"><pre>BIOS Level
</pre></li>   <li class="sml"><pre> - Boot Loader - Setup
  - startup_32 functions
</pre></li>   <li class="sml"><pre>The start_kernel() function</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

Linux Boot flow

<img class="img" src="http://www.minhinc.com/image/li-slide-bootflow.png" />

Booting Sequence

1. Tern on
2. CPU jump to address of BIOS (0xFFFF0)
3. BIOS runs POST (Power-On Self Test)
4. Find bootale devices
5. Loads and execute boot sector form MBR
6. Load OS

</pre> &nbsp;<div class="slideheader" style="height:135px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  5. The Boot Process</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>The Boot Process
</pre></li>   <li class="big"><a name="chap5_1">BIOS Level</a></li>   <li class="sml"><pre> - Boot Loader - Setup
  - startup_32 functions
</pre></li>   <li class="sml"><pre>The start_kernel() function</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

BIOS refers to the software code run by a computer when first powered on
The primary function of BIOS is code program embedded on a chip that recognizes and
controls various devices that make up the computer.

<img class="img" src="http://www.minhinc.com/image/li-slide-bios.bmp" />

MBR Master Boot Record
- OS is booted from a hard disk, where the Master Boot Record (MBR) contains the
primary boot loader
- The MBR is a 512-byte sector, located in the first sector on the disk (sector 1 of
cylinder 0, head 0)
- After the MBR is loaded into RAM, the BIOS yields control to it.
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main5" class="pn">p32</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">

<img class="img" src="http://www.minhinc.com/image/li-slide-MBR.png" />

MBR, Master Boot Record

 - The first 446 bytes are the primary boot loader, which contains both executable
code and error message text
 - The next sixty-four bytes are the partition table, which contains a record for each
of four partitions
 - The MBR ends with two bytes that are defined as the magic number (0xAA55). The
magic number serves as a validation check of the MBR

Extract MBR, Master Boot Record
<pre class="code"># dd if=/dev/hda of=mbr.bin bs=512 count=1
# od -xa mbr.bin
</pre>
</pre> &nbsp;<div class="slideheader" style="height:157px">
  <pre class="day">Day 2 Morning</pre>
  <pre class="topic">  5. The Boot Process</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>The Boot Process
</pre></li>   <li class="sml"><pre>BIOS Level
</pre></li>   <li class="big"><a name="chap5_2"> - Boot Loader - Setup<br>  - startup_32 functions<br></a></li>   <li class="big"><a name="chap5_2">The start_kernel() function</a></li>
  </ul>
 </div>
<pre class="slidecontent">

Boot Loader
 - Boot loader or kernel loader first decompress kernel zImage file then calls kernel
start_kernel() function passing the arguments.
 - Optional, initial RAM disk
 - GRUB and LILO are the most popular Linux boot loader.

List of Boot loaders
bootman, GRUB, LILO, NTLDR, XOSL, BootX, loadlin, Gujin, Boot Camp, Syslinux, GAG

<img class="img" src="http://www.minhinc.com/image/li-slide-bootloader.png" />

</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main5" class="pn">p33</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
GRUB Boot Loader
 - GRUB is an operating system independent boot loader
 - A multi-boot software packet from GNU
 - Flexible command line interface
 - File system access
 - Support multiple executable format
 - Support disk less system
 - Download OS from network

GRUB Boot Process
1. The BIOS finds a bootable device (hard disk) and transfers control to the master
boot record
2. The MBR contains GRUB stage 1. Given the small size of the MBR, Stage 1 just load
the next stage of GRUB
3. GRUB Stage 1.5 is located in the first 30 kilobytes of hard disk immediately
following the MBR. Stage 1.5 loads Stage 2.
4. GRUB Stage 2 receives control, and displays to the user the GRUB boot menu (where
the user can manually specify the boot parameters).
5. GRUB loads the user-selected (or default) kernel into memory and passes control on
to the kernel.

GRUB Config File

<img class="img" src="http://www.minhinc.com/image/li-slide-grub.png" />

LILO: LInux LOader
 - A versatile boot manager that supports:
    - Choice of Linux kernels.
    - Boot time kernel parameters.
    - Booting non-Linux kernels.
    - A variety of configurations.
 - Characteristics:
    - Lives in MBR or partition boot sector.
    - Has no knowledge of filesystem structure so...
    - Builds a sector "map file" (block map) to find kernel.
 - /sbin/lilo - "map installer".
    - /etc/lilo.conf is lilo configuration file.LILO Boot Loader

lilo.conf
<img class="img" src="http://www.minhinc.com/image/li-slide-lilo.png" />
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main5" class="pn">p34</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<img class="img" src="http://www.minhinc.com/image/li-slide-lilo2.png" />

Kernel Booting, Init process
Kernel execute init(pid 1) program,  getting init process.
 - Init is the root/parent of all processes executing on Linux
 - The first processes that init starts is a script /etc/rc.d/rc.sysinit
 - Based on the appropriate run-level, scripts are executed to start various processes
to run the system and make it functional
 - Init is responsible for starting system processes as defined in the /etc/inittab
file
 - Init typically will start multiple instances of "getty" which waits for console
logins which spawn one's user shell process
 - Upon shutdown, init controls the sequence and processes for shutdown

<b>Process ID</b>    <b>Description</b>
0             The Scheduler
1             The init process
2               kflushd
3               kupdate
4               kpiod
5               kswapd
6               mdrecoveryd

Linux files structure
<a href="http://www.minhinc.com/image/li-slide-linuxfilestructure.png"><img class="img" src="http://www.minhinc.com/image/li-slide-linuxfilestructure_s.png" /></a>

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main5" class="pn">p35</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre style="text-align:center;line-height:1395px;font-size:24pt">Left Blank</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#mainL" class="pn">p36</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap6">&nbsp;<div class="slideheader" style="height:135px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  6. The File System</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap6_0">The File System</a></li>   <li class="sml"><pre>Virtual File system & its role
</pre></li>   <li class="sml"><pre>Files associated with a process
</pre></li>   <li class="sml"><pre>proc file system
</pre></li>   <li class="sml"><pre>System calls</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

The File System

Filesystems are containers of files, that are stored, probably in a directory tree,
together with attributes, like size, owner, creation date and the like. A filesystem
has a type. It defines how things are arranged on the disk. For example, one has the
types minix, ext2, reiserfs, iso9660, vfat, hfs.

Linux File System Layout
<img class="img" src="http://www.minhinc.com/image/li-slide-filesystemlayout.png" />

Inode and direntry

<img class="img" src="http://www.minhinc.com/image/li-slide-filesysteminode.png" />

$mkdir testdir

</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p37</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<img class="img" src="http://www.minhinc.com/image/li-slide-filesysteminode1.png" />

Inode
An (in-core) inode contains the metadata of a file: its serial number, its protection
(mode), its owner, its size, the dates of last access, creation and last modification,
etc. It also points to the superblock of the filesystem the file is in, the methods
for this file, and the dentries (names) for this file.

<pre class="codec">struct inode {
unsigned long i_ino;
umode_t i_mode;
uid_t i_uid;
gid_t i_gid;
kdev_t i_rdev;
loff_t i_size;
struct timespec i_atime;
struct timespec i_ctime;
struct timespec i_mtime;
struct super_block *i_sb;
struct inode_operations *i_op;
struct address_space *i_mapping;
struct list_head i_dentry;
...
}
</pre>
User space stat structure provides similar interface

<pre class="codec">#include &lt;sys/types.h&gt;
#include &lt;sys/stat.h&gt;
#include &lt;unistd.h&gt;
int stat (const char *path, struct stat *buf);
int fstat (int fd, struct stat *buf);
int lstat (const char *path, struct stat *buf);

truct stat {
dev_t st_dev; /*ID of device containing file */
ino_t st_ino; /*inode number *
mode_t st_mode;  /*permissions */
nlink_t st_nlink; /*number of hard links */
uid_t st_uid; /*user ID of owner */
gid_t st_gid; /*group ID of owner */
dev_t st_rdev; /*device ID (if special file) */
off_t st_size; /*total size in bytes */
blksize_t st_blksize; /*blocksize for filesystem I/O */
blkcnt_t st_blocks; /* number of blocks allocated */
time_t st_atime; /*last access time */
time_t st_mtime; /*last modification time */
time_t st_ctime; /*last status change time */
};
</pre>
lstat()  is  identical to stat(), except that if pathname is a symbolic link, then it
returns information about the link itself, not  the  file that it refers to.

fstat() is identical to stat(), except that the file about which information is to be
retrieved is specified by the file descriptor fd.

<pre class="codec">#include
#include
#include
#include
&lt;sys/types.h&gt;
&lt;sys/stat.h&gt;
&lt;unistd.h&gt;
&lt;stdio.h&gt;
int main (int argc, char *argv[])
{
struct stat sb;
int ret;
if (argc &lt; 2) {
fprintf (stderr,
"usage: %s &lt;file&gt;\n", argv[0]);
return 1;
}
ret = stat (argv[1], &amp;sb);
if (ret) {
perror ("stat");
return 1;
}
printf ("%s is %ld bytes\n",
argv[1], sb.st_size);
return 0;
}
</pre>
The following mask values are defined for the file type of the st_mode field:
<pre class="code">S_IFMT     0170000   bit mask for the file type bit field
S_IFSOCK   0140000   socket
S_IFLNK    0120000   symbolic link
S_IFREG    0100000   regular file
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p38</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">S_IFBLK    0060000   block device
S_IFDIR    0040000   directory
S_IFCHR    0020000   character device
S_IFIFO    0010000   FIFO
</pre>
Thus, to test for a regular file (for example), one could write:
<pre class="code">stat(pathname, &amp;sb);
if ((sb.st_mode &amp; S_IFMT) == S_IFREG) {
/* Handle regular file */
}
</pre>
<pre class="codec">#include "apue.h"
int
main(int argc, char *argv[])
{
int          i;
struct stat buf;
char         *ptr;
for (i = 1; i &lt; argc; i++) {
 printf("%s: ", argv[i]);
 if (lstat(argv[i], &amp;buf) &lt; 0) {
  err_ret("lstat error");
   continue;
 }

 if (S_ISREG(buf.st_mode))
  ptr = "regular";
 else if (S_ISDIR(buf.st_mode))
  ptr = "directory";
 else if (S_ISCHR(buf.st_mode))
  ptr = "character special";
 else if (S_ISBLK(buf.st_mode))
  ptr = "block special";
 else if (S_ISFIFO(buf.st_mode))
  ptr = "fifo";
 else if (S_ISLNK(buf.st_mode))
  ptr = "symbolic link";
 else if (S_ISSOCK(buf.st_mode))
  ptr = "socket";
 else
 ptr = "** unknown mode **";
 printf("%s\n", ptr);
}
 exit(0);
}
</pre>
Printing all fields

<pre class="codec"># include &lt;fcntl.h&gt;
# include &lt;stdio.h&gt;
# include &lt;time.h&gt;
# include &lt;sys/types.h&gt;
# include&lt;sys/stat.h&gt;

main()
{
struct stat fst;
struct tm  *Time;
int fd;
fd = open("testfile",O_RDONLY);
fstat(fd,&amp;fst);
printf("Listing the detailsd of the file\n");
printf(" The inode no of the file is %d\n",fst.st_ino);
printf(" The device ID  of the file is %d\n",fst.st_dev);
printf(" The block size of the file system is %d\n",fst.st_blksize);
printf("The user ID is %d\n",fst.st_uid);
printf("The group ID is %d\n",fst.st_gid);
printf("Access time is %d\n",fst.st_atime);
printf("creation time is %d\n",fst.st_ctime);
printf("modification time is %d\n",fst.st_mtime);
Time = localtime(&amp;fst.st_atime);

printf("day : %d\n  ",Time-&gt;tm_mday);
printf("month: %d \n ",Time -&gt;tm_mon);
printf("year : %d \n ",Time-&gt;tm_year);
printf("hour : %d \n ",Time-&gt;tm_hour);
printf("min : %d \n ",Time -&gt;tm_min);
}
</pre>
Permissions
While the stat calls can be used to obtain the permission values for a given file, two
other system calls set those values:
<pre class="code">#include &lt;sys/types.h&gt;
#include &lt;sys/stat.h&gt;
int chmod (const char *path, mode_t mode);
int fchmod (int fd, mode_t mode);
</pre>Example chmod

<pre class="code">int ret;
/*
* Set 'map.png' in the current directory to
* owner-readable and -writable. This is the
* same as 'chmod 600 ./map.png'.
*/
ret = chmod ("./map.png", S_IRUSR | S_IWUSR);
if (ret)
perror ("chmod");
</pre>
Ownership
In the stat structure, the st_uid and st_gid fields provide the file's owner and
group, respectively. Three system calls allow a user to change those two values:
<pre class="code">#include &lt;sys/types.h&gt;
#include &lt;unistd.h&gt;
int chown (const char *path, uid_t owner, gid_t group);
int lchown (const char *path, uid_t owner, gid_t group);
int fchown (int fd, uid_t owner, gid_t group);

struct group *gr;
int ret;
/*
* getgrnam() returns information on a group
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p39</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">* given its name.
*/
gr = getgrnam ("officers");
if (!gr) {
/* likely an invalid group */
perror ("getgrnam");
return 1;
}
/* set manifest.txt's group to 'officers' */
ret = chown("manifest.txt", -1, gr-&gt;gr_gid);
if (ret)
perror ("chown");
</pre>
Reading a Directory's Contents
A directory is represented by DIR object

<pre class="code">#include &lt;sys/types.h&gt;
#include &lt;dirent.h&gt;
DIR * opendir (const char *name);
</pre>To obtain the file descriptor behind a given directory stream:
<pre class="code">#define _BSD_SOURCE /* or _SVID_SOURCE */
#include &lt;sys/types.h&gt;
#include &lt;dirent.h&gt;
int dirfd (DIR *dir);
</pre>
Reading from a directory stream
Once you have created a directory stream with opendir() , your program can begin
reading entries from the directory. To do this, use readdir() , which returns entries
one by one from a given DIR object:

<pre class="code">#include &lt;sys/types.h&gt;
#include &lt;dirent.h&gt;
struct dirent * readdir (DIR *dir);
</pre>
A successful call to readdir() returns the next entry in the directory represented by
dir . The dirent structure represents a directory entry. Defined in &lt;dirent.h&gt; , on
Linux, its definition is:
Applications successively invoke readdir() , obtaining each file in the directory,
until they find the file they are searching for or until the entire directory is read,
at which time readdir() returns NULL .

<pre class="code">struct dirent {
ino_t d_ino; /* inode number */
off_t d_off; /* offset to the next dirent */
unsigned short d_reclen; /* length of this record */
unsigned char d_type; /* type of file */
char d_name[256]; /* filename */
};
</pre>
To close the DIR*
<pre class="code">int closedir (DIR *dir);

/*
* find_file_in_dir - searches the directory 'path' for a
* file named 'file'.
*
* Returns 0 if 'file' exists in 'path' and a nonzero
* value otherwise.
*/
int find_file_in_dir (const char *path, const char *file)
{
 struct dirent *entry;
 int ret = 1;
 DIR *dir;
 dir = opendir (path);
 errno = 0;
 while ((entry = readdir (dir)) != NULL) {
  if (strcmp(entry-&gt;d_name, file) == 0) {
  ret = 0;
  break;
  }
 }
if (errno &amp;&amp; !entry)
 perror ("readdir");

closedir (dir);
return ret;
}
</pre>
System calls for reading directory contents
The previously discussed functions for reading the contents of directories are
standar- dized by POSIX and provided by the C library. Internally, these functions use
one of two system calls, readdir() and getdents() , which are provided here for
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p40</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
completeness:

<pre class="code">#include &lt;unistd.h&gt;
#include &lt;linux/types.h&gt;
#include &lt;linux/dirent.h&gt;

#include &lt;errno.h&gt;
/*
* Not defined for user space: need to
* use the _syscall3() macro to access.
*/
int readdir (unsigned int fd,
struct dirent *dirp,
unsigned int count);
int getdents (unsigned int fd,
struct dirent *dirp,
unsigned int count);
</pre>
Links
A link is essentially just a name in a list (a directory) that points at an
inode-there would appear to be no reason why multiple links to the same inode could
not exist. That is, a single inode (and thus a single file) could be referenced from,
say, both /etc/customs and /var/run/ledger.

Hard Link
Files can have 0, 1, or many links. Most files have a link count of 1-that is, they
are pointed at by a single directory entry-but some files have 2 or even more links.
These are called hard link.

The link() system call, one of the original Unix system calls, and now standardized by
POSIX, creates a new link for an existing file:

<pre class="code">#include &lt;unistd.h&gt;
int link (const char *oldpath, const char *newpath);

int ret;
/*
* create a new directory entry,
* '/home/kidd/privateer', that points at
* the same inode as '/home/kidd/pirate'
*/
ret = link ("/home/kidd/privateer", /home/kidd/pirate");
if (ret)
perror ("link");
</pre>
Symbolic Links
Symbolic links, also known as symlinks or soft links, are similar to hard links in
that both point at files in the filesystem. The symbolic link differs, however, in
that it is not merely an additional directory entry, but a special type of file
altogether. This special file contains the pathname for a different file, called the
symbolic link's target. At runtime, on the fly, the kernel substitutes this pathname
for the symbolic link's pathname (unless using the various l versions of system calls,
such as lstat() , which operate on the link itself, and not the target).
Soft links, unlike hard links, can span filesystems also called dangling softlink.

<pre class="code">#include &lt;unistd.h&gt;
int symlink (const char *oldpath, const char *newpath);

int ret;
/*
* create a symbolic link,
* '/home/kidd/privateer', that
* points at '/home/kidd/pirate'
*/
ret = symlink ("/home/kidd/privateer", "/home/kidd/pirate");
if (ret)
perror ("symlink");
</pre>
Unlinking
The converse to linking is unlinking, the removal of pathnames from the filesystem. A
single system call, unlink(), handles this task:

<pre class="code">#include &lt;unistd.h&gt;
int unlink (const char *pathname);
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p41</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:135px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  6. The File System</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>The File System
</pre></li>   <li class="big"><a name="chap6_1">Virtual File system & its role</a></li>   <li class="sml"><pre>Files associated with a process
</pre></li>   <li class="sml"><pre>proc file system
</pre></li>   <li class="sml"><pre>System calls</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

VFS, Virtual File Systems

- The Linux kernel implements the concept of Virtual File System (VFS, originally
Virtual Filesystem Switch), so that it is (to a large degree) possible to separate
actual "low-level" filesystem code from the rest of the kernel.
- The VFS is more of an Interface rather than an actual complete file system.
- An important role of the VFS is to perform what is called "Standard Actions". For
example, the function lseek() is not actually implemented by any file system, as the
function of lseek() is provided by a "standard action" of VFS.
- Two important native filesystems in the Linux environment are ext2 and the proc file
system.

<img class="img" src="http://www.minhinc.com/image/li-slide-virtualfilesystem.png" />

Four main objects in VFS API: superblock, dentries, inodes, files
- The kernel keeps track of files using in-core inodes ("index nodes"), usually
derived by the low-level filesystem from on-disk inodes.
 - A file may have several names, and there is a layer of dentries ("directory
entries") that represent pathnames, speeding up the lookup operation.
 - Several processes may have the same file open for reading or writing, and file
structures contain the required information such as the current file position.
 - Access to a filesystem starts by mounting it. This operation takes a filesystem
type (like ext2, vfat, iso9660, nfs) and a device and produces the in-core superblock
that contains the information required for operations on the filesystem; a third
ingredient, the mount point, specifies what pathname refers to the root of the
filesystem.

Auxiliary objects
 We have filesystem types, used to connect the name of the filesystem to the routines
for setting it up (at mount time) or tearing it down (at umount time).
 - A struct vfsmount represents a subtree in the big file hierarchy - basically a pair
(device, mountpoint).
 - A struct nameidata represents the result of a lookup.
 - A struct address_space gives the mapping between the blocks in a file and blocks on
disk. It is needed for I/O.

<pre class="black">Filesystem type registration</pre>
The struct is of type struct file_system_type . Here the 2.2.17 version:
<pre class="code">struct file_system_type {
const char *name;
int fs_flags;
struct super_block *(*read_super) (struct super_block *, void *, int);
struct file_system_type *next;
};
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p42</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">

The call register_filesystem() hangs this struct in the chain with head file_systems ,
and unregister_filesystem() removes it again.
Accesses to this chain are protected by the spinlock file_systems_lock . There are no
other writers. The main reader is of course the mount() system call (via get_fs_type()
). Other readers are get_filesystem_list() used for /proc/filesystems , andthe sysfs
system call.
The code is in fs/filesystems.c .

<pre class="code">static struct file_system_type tue_fs_type = {
.owner= THIS_MODULE,
.name= "tue",
.get_sb= tue_get_sb,
.kill_sb= kill_block_super,
.fs_flags= FS_REQUIRES_DEV,
}

static int __init init_tue_fs(void) {
return register_filesystem(&amp;tue_fs_type);
}
static void __exit exit_tue_fs(void)
{
unregister_filesystem(&amp;tue_fs_type);
}
</pre>
<pre class="black">Struct file_system_type</pre>

<pre class="code">struct file_system_type {
const char *name;
int fs_flags;
struct super_block *(*get_sb)(struct file_system_type *,
int, char *, void *, struct vfsmount *);
void (*kill_sb) (struct super_block *);
struct module *owner;
struct file_system_type *next;
struct list_head fs_supers;
struct lock_class_key s_lock_key;
struct lock_class_key s_umount_key;
};
</pre>
<pre class="codec">(In 2.4 there was no kill_sb() , and the role of get_sb() was taken by read_super() .
The final parameter of get_sb() and the lock_class_key fields are present since
2.6.18.)
</pre>
<b>name</b>
Here the filesystem type gives its name ("tue"), so that the kernel can find it when
someone does mount -t tue /dev/foo /dir 

<b>get_sb</b>
At mount time the kernel calls the fstype-&gt;get_sb() routine that initializes things
and sets up a superblock. Typically this is a 1-line routine that calls one of
get_sb_bdev , get_sb_single , get_sb_nodev , get_sb_pseudo

<b>kill_sb</b>
At umount time the kernel calls the fstype-&gt;kill_sb() routine to clean up.  Typically
one of kill_block_super , kill_anon_super , kill_litter_super .

Example of the use of owner - sysfs
There exists a strange SYSV system call sysfs that will return (i) a sequence number
given a filesystem type, and (ii) a filesystem type given a sequence number, and (iii)
the total number of filesystem types registered now. This call is not supported by
libc or glibc.
These sequence numbers are rather meaningless since they may change any moment. But
this means that one can get a snapshot of the list of filesystem types without looking
at /proc/filesystems . For example, the program

<pre class="code">#include &lt;stdio.h&gt;
#include &lt;linux/unistd.h&gt;
/* define the 3-arg version of sysfs() */
static _syscall3(int,sysfs,int,option,unsigned int,fsindex,char *,buf);
/* define the 1-arg version of sysfs() */
static int sysfs1(int i) {
return sysfs(i,0,NULL);
}

main(){
int i, tot;
char buf[100];
/* how long is a filesystem type name?? */
tot = sysfs1(3);
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p43</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">if (tot == -1) {
perror("sysfs(3)");

exit(1);
for (i=0; i&lt;tot; i++) {
if (sysfs(2, i, buf)) {
perror("sysfs(2)");
exit(1);
}
printf("%2d: %s\n", i, buf);
}
Return 0;
</pre>
might give output like
<pre class="code">0:ext2
1:minix
2:romfs
3:msdos
4:vfat
5:proc
6:nfs
7:smbfs
8:iso9660
</pre>
<pre class="black">Mounting</pre>
The mount system call attaches a filesystem to the big file hierarchy at some
indicated point. Ingredients needed:
(i) a device that carries the filesystem (disk, partition, floppy, CDROM, SmartMedia
card, ...), (ii) a directory where the filesystem on that device must be attached,
(iii) a filesystem type.

The code for sys_mount() is found in fs/namespace.c and fs/super.c . The connection
with the filesystem type name is made in do_kern_mount() :

<pre class="code"><b>struct file_system_type *type = get_fs_type(fstype);</b>
struct super_block *sb;
if (!type)
return ERR_PTR(-ENODEV);
sb = type-&gt;get_sb(type, flags, name, data);
</pre>and this is the only call of the get_sb() routine.

The code for sys_umount() is found in fs/namespace.c and fs/super.c . The counterpart
of the just quoted code is the cleanup in deactivate_super() :
<pre class="code">fs-&gt;kill_sb(s);
</pre>and this is the only call of the kill_sb() routine.

<pre class="black">The superblock</pre>
The superblock gives global information on a filesystem: the device on which it lives,
its block size, its type, the dentry of the root of the filesystem, the methods it
has, etc., etc.
<pre class="codec">struct super_block {
dev_t s_dev;
unsigned long s_blocksize;
struct file_system_type *s_type;
struct super_operations *s_op;
struct dentry *s_root;
...
}
struct super_operations {
struct inode *(*alloc_inode)(struct super_block *sb);
void (*destroy_inode)(struct inode *);
void (*read_inode) (struct inode *);
void (*dirty_inode) (struct inode *);
void (*write_inode) (struct inode *, int);
void (*put_inode) (struct inode *);
void (*drop_inode) (struct inode *);
void (*delete_inode) (struct inode *);
void (*put_super) (struct super_block *);
void (*write_super) (struct super_block *);
int (*sync_fs)(struct super_block *sb, int wait);
void (*write_super_lockfs) (struct super_block *);
void (*unlockfs) (struct super_block *);
int (*statfs) (struct super_block *, struct statfs *);
int (*remount_fs) (struct super_block *, int *, char *);
void (*clear_inode) (struct inode *);
void (*umount_begin) (struct super_block *);
int (*show_options)(struct seq_file *, struct vfsmount *);
};
</pre>This is enough to get started: the dentry of the root directory tells us the inode of
this root directory (and in particular its i_ino ), and sb-&gt;s_op-&gt;read_inode(inode)
will read this inode from disk. Now inode-&gt;i_op-&gt;lookup() allows us to find names in
the root directory, etc.
Each superblock is on six lists, with links through the fields s_list , s_dirty , s_io
, s_anon , s_files , s_instances , respectively.

<b>The super_blocks list</b>
All superblocks are collected in a list super_blocks with links in the fields s_list .
This list is protected by the spinlock sb_lock . The main use is in
super.c:get_super() or user_get_super() to find the superblock for a given block
device. (Bothroutines are identical, except that one takes a bdev , the other a dev_t
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p44</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
.) This list is also used various places where all superblocks must be sync'ed or all
dirty inodes must be written out.

<b.The fs_supers list</b>
All superblocks of a given type are collected in a list headed by the fs_supers field
of the struct filesystem_type, with links in the fields s_instances . Also this list
is protected by the spinlock sb_lock .

<b>The file list</b>
All open files belonging to a given superblock are chained in a list headed by the
s_files field of the superblock, with links in the fields f_list of the files. These
lists are protected by the spinlock files_lock . This list is used for example in
fs_may_remount_ro() to check that there are no files currently open for writing. 

<b>The list of anonymous dentries</b>
Normally, all dentries are connected to root. However, when NFS filehandles are used
this need not be the case. Dentries that are roots of subtrees potentially unconnected
to root are chained in a list headed by the s_anon field
of the superblock, with links in the fields d_hash . These lists are protected by the
spinlock dcache_lock . They are grown in dcache.c:d_alloc_anon() and shrunk in
super.c:generic_shutdown_super() .

<b>The inode lists s_dirty, s_io</b>
Lists of inodes to be written out. These lists are headed at the s_dirty (resp. s_io )
field of the superblock, with links in the fields i_list . These lists are protected
by the spinlock inode_lock . See fs/fs-writeback.c .


<pre class="black">Inodes</pre>
An (in-core) inode contains the metadata of a file: its serial number, its protection
(mode), its owner, its size, the dates of last access, creation and last modification,
etc. It also points to the superblock of the filesystem the file is in, the methods
for this file, and the dentries (names) for this file.
<pre class="codec">struct inode {
unsigned long i_ino;
umode_t i_mode;
uid_t i_uid;
gid_t i_gid;
kdev_t i_rdev;
loff_t i_size;
struct timespec i_atime;
struct timespec i_ctime;
struct timespec i_mtime;
struct super_block *i_sb;

struct inode_operations *i_op;
struct address_space *i_mapping;
struct list_head i_dentry;
...
}

struct inode_operations {
int (*create) (struct inode *, struct dentry *, int);
struct dentry * (*lookup) (struct inode *, struct dentry *);
int (*link) (struct dentry *, struct inode *, struct dentry *);
int (*unlink) (struct inode *, struct dentry *);
int (*symlink) (struct inode *, struct dentry *, const char *);};
int (*mkdir) (struct inode *, struct dentry *, int);
int (*rmdir) (struct inode *, struct dentry *);
int (*mknod) (struct inode *, struct dentry *, int, dev_t);
int (*rename) (struct inode *, struct dentry *, struct inode *, struct dentry *);
int (*readlink) (struct dentry *, char *,int);
int (*follow_link) (struct dentry *, struct nameidata *);
void (*truncate) (struct inode *);
int (*permission) (struct inode *, int);
int (*setattr) (struct dentry *, struct iattr *);
int (*getattr) (struct vfsmount *mnt, struct dentry *, struct kstat *);
int (*setxattr) (struct dentry *, const char *, const void *, size_t, int);
ssize_t (*getxattr) (struct dentry *, const char *, void *, size_t);
ssize_t (*listxattr) (struct dentry *, char *, size_t);
int (*removexattr) (struct dentry *, const char *);
</pre>
Each inode is on four lists, with links through the fields i_hash , i_list , i_dentry
, i_devices .

<pre class="black">Dentries</pre>
The dentries encode the filesystem tree structure, the names of the files. Thus, the
main parts of a dentry are the inode (if any) that belongs to it, the name (the final
part of the pathname), and the parent (the name of the containing directory). There
are also the superblocks, the methods, a list of subdirectories, etc.
<pre class="codec">struct dentry {
struct inode *d_inode;
struct dentry *d_parent;
struct qstr d_name;
struct super_block *d_sb;
struct dentry_operations *d_op;
struct list_head d_subdirs;
...
}
struct dentry_operations {
int (*d_revalidate)(struct dentry *, int);
int (*d_hash) (struct dentry *, struct qstr *);
int (*d_compare) (struct dentry *, struct qstr *, struct qstr *);
int (*d_delete)(struct dentry *);
void (*d_release)(struct dentry *);
void (*d_iput)(struct dentry *, struct inode *);
};
</pre>

</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p45</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
Each dentry is on five lists, with links through the fields d_hash , d_lru , d_child ,
d_subdirs , d_alias .

<pre class="black">Files</pre>
File structures represent open files, that is, an inode together with a current
(reading/writing) offset. The offset can be set by the lseek() system call. Note that
instead of a pointer to the inode we have a pointer to the dentry -that means that the
name used to open a file is known. In particular system calls like getcwd() are
possible.

<pre class="codec">struct file {
struct dentry *f_dentry;
struct vfsmount *f_vfsmnt;
struct file_operations *f_op;
mode_t f_mode;
loff_t f_pos;
struct fown_struct f_owner;
unsigned int f_uid, f_gid;
unsigned long f_version;
...
}
</pre>Here the f_owner field gives the owner to use for async I/O signals.

<pre class="codec">struct file_operations {
struct module *owner;
loff_t (*llseek) (struct file *, loff_t, int);
ssize_t (*read) (struct file *, char *, size_t, loff_t *);
ssize_t (*aio_read) (struct kiocb *, char *, size_t, loff_t);
ssize_t (*write) (struct file *, const char *, size_t, loff_t *);
ssize_t (*aio_write) (struct kiocb *, const char *, size_t, loff_t);
int (*readdir) (struct file *, void *, filldir_t);
unsigned int (*poll) (struct file *, struct poll_table_struct *);
int (*ioctl) (struct inode *, struct file *, unsigned int, unsigned long);
int (*mmap) (struct file *, struct vm_area_struct *);
int (*open) (struct inode *, struct file *);
int (*flush) (struct file *);
int (*release) (struct inode *, struct file *);
int (*fsync) (struct file *, struct dentry *, int datasync);
int (*aio_fsync) (struct kiocb *, int datasync);
int (*fasync) (int, struct file *, int);
int (*lock) (struct file *, int, struct file_lock *);
ssize_t (*readv) (struct file *, const struct iovec *, unsigned long, loff_t *);
ssize_t (*writev) (struct file *, const struct iovec *, unsigned long, loff_t *);
ssize_t (*sendfile) (struct file *, loff_t *, size_t, read_actor_t, void *);
ssize_t (*sendpage) (struct file *, struct page *, int, size_t, loff_t *, int);
unsigned long (*get_unmapped_area)(struct file *, unsigned long, unsigned long,
unsigned long, unsigned long);
</pre>
Each file is in two lists, with links through the fields f_list , f_ep_links .

<b>f_list</b>
The list with links through f_list was discussed above. It is the list of all files
belonging to a given superblock. There is a second use: the tty driver collects all
files that are opened instances of a tty in a list headed by tty-&gt;tty_files with links
through the file field f_list . Conversely, these files point back at the tty via
their field private_data .
(This field private_data is also used elsewhere. For example, the proc code uses it to
attach a struct seq_file to a file.)

The event poll list
All event poll items belonging to a given file are collected in a list with head
f_ep_links , protected by the file field
f_ep_lock . (For event poll stuff, see epoll_ctl(2).)


<pre class="black">struct vfsmount</pre>
A struct vfsmount describes a mount. The definition lives in mount.h :

<pre class="codec">struct vfsmount {
struct list_head mnt_hash;
struct vfsmount *mnt_parent; /* fs we are mounted on */
struct dentry *mnt_mountpoint; /* dentry of mountpoint */
struct dentry *mnt_root;
/* root of the mounted tree */
struct super_block *mnt_sb;
/* pointer to superblock */
struct list_head mnt_mounts; /* list of children, anchored here */
struct list_head mnt_child;
/* and going through their mnt_child */
atomic_t mnt_count;
int mnt_flags;
char *mnt_devname;
/* Name of device e.g. /dev/dsk/hda1 */
struct list_head mnt_list;
};
</pre>
<b>fs_struct</b>
A struct fs_struct determines the interpretation of pathnames referred to by a process
(and also, somewhat illogically, contains the umask). The typical reference is
current-&gt;fs . The definition 

lives in fs_struct.h :
<pre class="codec">struct fs_struct {
atomic_t count;
rwlock_t lock;
int umask;
struct dentry * root, * pwd, * altroot;
struct vfsmount * rootmnt, * pwdmnt, * altrootmnt;
};
</pre>
Semantics of root and pwd are clear. Remains to discuss altroot .
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p46</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">

</pre> &nbsp;<div class="slideheader" style="height:135px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  6. The File System</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>The File System
</pre></li>   <li class="sml"><pre>Virtual File system & its role
</pre></li>   <li class="big"><a name="chap6_2">Files associated with a process</a></li>   <li class="sml"><pre>proc file system
</pre></li>   <li class="sml"><pre>System calls</pre></li>
  </ul>
 </div>
<pre class="slidecontent">
<img class="img" src="http://www.minhinc.com/image/li-slide-filesystemvtable.png" />

There are two normal cases for handling the descriptors after a fork.
1. The parent waits for the child to complete. In this case, the parent does not need
to do anything with its descriptors. When the child terminates, any of the shared
descriptors that the child read from or wrote to will have their file offsets updated
accordingly.
2. Both the parent and the child go their own ways. Here, after the fork, the parent
closes the descriptors that it doesn't need, and the child does the same thing. This
way, neither interferes with the other's open descriptors. This scenario is often
found with network servers.

Besides the open files, numerous other properties of the parent are inherited by the
child:
*  Real user ID, real group ID, effective user ID, and effective group ID
*  Supplementary group IDs
*  Process group ID
*  Session ID
*  Controlling terminal
*  The set-user-ID and set-group-ID flags
*  Current working directory
*  Root directory
*  File mode creation mask
*  Signal mask and dispositions
*  The close-on-exec flag for any open file descriptors
*  Environment
*  Attached shared memory segments
*  Memory mappings
*  Resource limits
The differences between the parent and child are
* The return values from fork are different.
* The process IDs are different.
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p47</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
* The two processes have different parent process IDs: the parent process ID of the
    child is the parent; the parent process ID of the parent doesn't change.
* The child's tms_utime, tms_stime, tms_cutime, and tms_cstime values are set to 0
* File locks set by the parent are not inherited by the child.
* Pending alarms are cleared for the child.
* The set of pending signals for the child is set to the empty set.

</pre> &nbsp;<div class="slideheader" style="height:135px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  6. The File System</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>The File System
</pre></li>   <li class="sml"><pre>Virtual File system & its role
</pre></li>   <li class="sml"><pre>Files associated with a process
</pre></li>   <li class="big"><a name="chap6_3">proc file system</a></li>   <li class="sml"><pre>System calls</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

/proc is a window into the running Linux kernel. Files in the /proc file system don't
corre-spond to actual files on a physical device. Instead, they are magic objects that
behave like files but provide access to parameters, data structures, and statistics in
the kernel. The "contents" of these files are not always fixed blocks of data, as
ordinary file contents are. Instead, they are generated on the fly by the Linux kernel
when you read
from the file.You can also change the configuration of the running kernel by writing
to certain files in the /proc file system.
Let's look at an example:
<pre class="code">    % ls -l /proc/version
    -r--r--r--      1 root     root            0 Jan 17 18:09 /proc/version
Size is 0 as this generated by kernel
</pre>
$mount
none on /proc type proc (rw)

none reveals that is not a file systemon disk.

Extracting Information from /proc
<pre class="code">#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
/* Returns the clock speed of the system's CPU in MHz, as reported by
   /proc/cpuinfo. On a multiprocessor machine, returns the speed of
   the first CPU. On error returns zero. */
float get_cpu_clock_speed ()
{
  FILE* fp;
  char buffer[1024];
  size_t bytes_read;
  char* match;
  float clock_speed;
  /* Read the entire contents of /proc/cpuinfo into the buffer. */
  fp = fopen ("/proc/cpuinfo", "r");
  bytes_read = fread (buffer, 1, sizeof (buffer), fp);
  fclose (fp);
  /* Bail if read failed or if buffer isn't big enough. */
  if (bytes_read == 0 || bytes_read == sizeof (buffer))
    return 0;
  /* NUL-terminate the text. */
  buffer[bytes_read] = '\0';
  /* Locate the line that starts with "cpu MHz". */

  match = strstr (buffer, "cpu MHz");
  if (match == NULL)
    return 0;
  /* Parse the line to extract the clock speed. */
  sscanf (match, "cpu MHz : %f", &amp;clock_speed);
  return clock_speed;
}
int main ()
{
  printf ("CPU clock speed: %4.0f MHz\n", get_cpu_clock_speed ());
  return 0;
}
</pre>
Various directories and files in /proc
<pre class="codec">1)/proc/&lt;number&gt;  # for processes running
2)/proc/self    #for current process
3)/proc/cpuinfo
4)/proc/devices
5)/proc/pci #summary of devices connected to pci bus
6)/proc/tty/driver/serail #serial ports
7)/proc/sys/kernel #kernel information
8)/proc/meminfo #system's memory usage
9)/proc/filesystem #filesystems mounted in kernel
10) /proc/mount #all mounted filesytems
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p48</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:135px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  6. The File System</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>The File System
</pre></li>   <li class="sml"><pre>Virtual File system & its role
</pre></li>   <li class="sml"><pre>Files associated with a process
</pre></li>   <li class="sml"><pre>proc file system
</pre></li>   <li class="big"><a name="chap6_4">System calls</a></li>
  </ul>
 </div>
<pre class="slidecontent">

<b>1. fcntl Record Locking</b>

<pre class="codes">#include &lt;fcntl.h&gt;
int fcntl(int fd, int cmd);
int fcntl(int fd, int cmd, long arg);
int fcntl(int fd, int cmd, struct flock *lock);
    Returns: depends on cmd if OK (see following), -1 on error
     
<pre class="code" style="display:inline">For record locking cmd is F_GETLK, </pre>
<pre class="code" style="display:inline">F_SETLK or F_SETLKW</pre>

struct flock { 
 short l_type;  /* F_RDLCK, F_WRLCK, or F_UNLCK */
 short l_whence; /* SEEK_SET, SEEK_CUR, or SEEK_END */
 off_t l_start; /* offset in bytes, relative to l_whence */
 off_t l_len; /* length, in bytes; 0 means lock to EOF */
 pid_t l_pid; /* returned with F_GETLK */
};

# include &lt;stdio.h&gt;
# include&lt;fcntl.h&gt;
Main() {
int fd, pid, retval;
struct flock lockc, lockp;
fd = open("testlock",O_WRONLY);
lockp.l_type = F_WRLCK;
lockp.l_whence = 0;
lockp.l_start = 10;
lockp.l_len = 15;
if((retval = fcntl(fd, F_SETLK,&amp;lockp)) == -1) // Parent is locking the file
 perror("parent write lock\n");
printf("retval is %d\n",retval);
if((pid = fork()) == 0){
 lockc.l_type = F_WRLCK;
 lockc.l_whence = 0;
 lockc.l_start = 40;
 lockc.l_len = 55;
 //Child is locking the file
 if((retval = fcntl(fd, F_SETLK,&amp;lockc)) == -1)perror("Child write lock\n");
  printf("retval is %d\n",retval);
  printf("Child Process over\n");
 }
 else {
  sleep(3);
  lockp.l_type = F_UNLCK;
  lockp.l_whence = 0;
  lockp.l_start = 10;
  lockp.l_len = 15;
  // Parent is unlocking the file
  if((retval = fcntl(fd, F_SETLK,&amp;lockp)) == -1)perror("parent write lock\n");
    printf("Parent Process over\n");
 }
}

</pre><pre class=codes><pre class="code" style="display:inline">Both are trying to make READ LOCK,</pre>
<pre class="code" style="display:inline">Successfull can try at WRITE LOCK</pre>
# include &lt;stdio.h&gt;
# include&lt;fcntl.h&gt;

main()
{
int fd, pid, retval;
struct flock lockc, lockp;

fd = open("testlock",O_RDONLY);

lockp.l_type = F_RDLCK;
lockp.l_whence = 0;	//SEEK_SET
lockp.l_start = 10;
lockp.l_len = 15;
if((retval = fcntl(fd, F_SETLK,&amp;lockp)) == -1) // Parent is locking the file
 perror("parent read lock\n");
printf("Parent retval is %d\n",retval);

//Child starts here
if((pid = fork()) == 0){
 if((retval = fcntl(fd, F_GETLK,&amp;lockc)) == -1)
  perror("child write lock\n");

printf("retval is %d\n",retval);
printf("process %d has locked this section\n",lockc.l_pid);
printf("lock type   %d\n",lockc.l_type);
printf("whence 		%d\n",lockc.l_whence);
printf("start 		%d\n",lockc.l_start);
printf("lenth is 	%d\n",lockc.l_len);

lockc.l_type = F_RDLCK;
lockc.l_whence = 0;
lockc.l_start = 10;
lockc.l_len = 15;
//Child is locking the file
if((retval = fcntl(fd, F_SETLK,&amp;lockc)) == -1)
 perror("Child read lock\n");

 printf("Child retval is %d\n",retval);
 printf("Child Process over\n");
}
else {
sleep(3);
printf("Parent Process over\n");
}
}
</pre><pre style="clear:both"></pre>
<b>2. lockf</b>

SYNOPSIS
<pre class="code">#include &lt;unistd.h&gt;
int lockf(int fd, int cmd, off_t len);
</pre>- apply, test or remove a POSIX lock on an open file

DEADLOCK,  avoid deadlock with F_TLOCK in child lockf() call

<pre class="code"># include &lt;fcntl.h&gt;
# include &lt;unistd.h&gt;
main()
{
int fd, retvelue;
pid_t pid;

char   buff[100];

if((fd = open("locktest",O_RDWR|O_CREAT, 0666)) == -1)
 perror("open file locktest\n");

if(lockf(fd,F_LOCK,10) == -1)
 perror("lockf failed");

if((pid = fork()) == 0){
 if(lockf(fd,F_LOCK,10) == -1)	//child blocked dead lock....!
  perror("lockf failed");
  puts("The child process over");
 }
 else{
  wait(0);
  printf("Process %d is over\n",getpid());
}
}
</pre>
<b>3. access</b>
<pre class="code">#include &lt;unistd.h&gt;
int access(const char *pathname, int mode);
</pre>
access() checks whether the process would be allowed to read, write or test for
existence of the file (or other file system object) whose name is pathname.  If
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p49</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
pathname  is  a  symbolic link permissions of the file referred to by this symbolic
link are tested.
mode is a mask consisting of one or more of R_OK, W_OK, X_OK and F_OK.
R_OK, W_OK and X_OK request checking whether the file exists and has read, write and
execute permissions, respectively.  F_OK just requests checking for the existence of
the file.
<pre class="code">#include&lt;errno.h&gt;
#include&lt;stdio.h&gt;
#include&lt;unistd.h&gt;
int main(int argc, char* argv[]) {
char* path = argv[1];
int ret;
ret = access(path,F_OK); // check for file exists
if(ret == 0)
printf(" %s file exists\n",path);
}
</pre>
<b>4. create</b>
<pre class="code">#include &lt;sys/types.h&gt;
#include &lt;sys/stat.h&gt;
#include &lt;fcntl.h&gt;

int open(const char *pathname, int flags);
int open(const char *pathname, int flags, mode_t mode);
int creat(const char *pathname, mode_t mode);
</pre>

<b>5. dup, dup2</b>
<pre class="code">#include &lt;unistd.h&gt;

int dup(int oldfd);
int dup2(int oldfd, int newfd);
</pre>
dup() and dup2() create a copy of the file descriptor oldfd.

After a successful return from dup() or dup2(), the old and new file descriptors may
be used interchangeably. They refer to the same open file descriptor thus share file
offset and file status flags; for example, if the file offset is modified by using
lseek(2) on one of the descriptors, the offset is also changed for the other.

The two descriptors do not share file descriptor flags (the close-on-exec flag).  The
close- on-exec flag (FD_CLOEXEC; 
       
dup() uses the lowest-numbered unused descriptor for the new descriptor.

dup2() makes newfd be the copy of oldfd, closing newfd first if necessary.

<pre class="code"># include &lt;stdio.h&gt;
# include &lt;stdlib.h&gt;
# include &lt;fcntl.h&gt;
# include &lt;sys/stat.h&gt;
main(){
int fd, newfd;
if((fd = creat("testfile",0666)) == -1){
 perror("Creat failed\n");
 exit(0);
}
printf("Descriptor is %d",fd);
newfd= dup2(fd,5);//try with stdout
printf("\nNew Descriptor is %d\n",newfd);
printf("The PID is %d\n",getpid());
for(;;);
close(fd);
close(newfd);
}

Using fcntl to create a copy
# include &lt;stdio.h&gt;
# include &lt;fcntl.h&gt;
main()
{
int fd,fd1, newfd;
fd = open("temp",O_RDWR | O_CREAT ,0666);
printf("The file discriptor is %d\n",fd);

fd1 = open("temp1",O_RDWR | O_CREAT ,0666);
newfd=fcntl(fd,F_DUPFD,NULL);
printf("The file discriptor is %d\n",newfd);
				
}
</pre>
<b>6. mmap</b>
<pre class="code"></pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p50</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">#include &lt;sys/mman.h&gt;

void *mmap(void *start, size_t length, int prot, int flags, int fd, off_t offset);
int munmap(void *start, size_t length);
</pre>
The mmap() function asks to map length bytes starting at offset offset from the file
(or  other object) specified by the file descriptor fd into memory, preferably at
address start.
This latter address is a hint only, and is usually specified as 0. The actual place
where the object is mapped is returned by mmap().

The prot argument describes the desired memory protection (and must not conflict with
the open mode of the file).It is either PROT_NONE or is the bitwise OR of one or more
of the  other PROT_* flags.
<pre class="code">PROT_EXEC  Pages may be executed.
PROT_READ  Pages may be read.
PROT_WRITE Pages may be written.
PROT_NONE  Pages may not be accessed.
</pre>
The flags parameter specifies the type of the mapped object,  mapping  options  and 
whether modifications  made  to  the mapped copy of the page are private to the
process or are to be shared with other references.  It has bits

<pre class="code" style="display:inline">MAP_FIXED</pre> Do not select a different address than the one specified. If the
memory region specified by start.
<pre class="code" style="display:inline">MAP_SHARED</pre> Share this mapping with all other processes that map this object.
Storing to the region is equivalent to writing to the file.
<pre class="code" style="display:inline">MAP_PRIVATE</pre> Create a private copy-on-write mapping. Stores to the region do not
affect the original file. It is unspecified whether changes made to the file after the
mmap() call are visible in the mapped region.

<img class="img" src="http://www.minhinc.com/image/li-slide-memorymap.png" />

<pre class="codes">#include&lt;unistd.h&gt;
#include&lt;stdlib.h&gt;
#include&lt;sys/mman.h&gt;
#include&lt;sys/types.h&gt;
#include&lt;sys/stat.h&gt;
#include&lt;fcntl.h&gt;
#include&lt;stdio.h&gt;
#include&lt;syscall.h&gt;

main(int argc,char *argv[])
{
int fd;
void *addr;

if( (fd=open(argv[1],O_RDWR|O_CREAT,0777)) &lt; 0) {
 perror("open");
 exit(1);
}

lseek(fd,5,SEEK_SET); 
write(fd,"",1);
//lseek(fd,0,SEEK_SET);
addr=mmap(0,5,PROT_WRITE,MAP_SHARED,fd,0); /* Mapping the file to memory*/
close(fd); 
sprintf(addr,"%s\n","hello"); 
munmap(addr,5); 
}
//#define BCM2708_PERI_BASE  0x20000000
#define BCM2708_PERI_BASE    0x3F000000
#define GPIO_BASE  (BCM2708_PERI_BASE + 0x200000) /* GPIO controller */


#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;fcntl.h&gt;
#include &lt;sys/mman.h&gt;
#include &lt;unistd.h&gt;

</pre><pre class=codes>#define PAGE_SIZE (4*1024)
#define BLOCK_SIZE (4*1024)

int  mem_fd;
void *gpio_map;

// I/O access
volatile unsigned *gpio;


// GPIO setup macros. Always use INP_GPIO(x) before using OUT_GPIO(x) or
SET_GPIO_ALT(x,y)
#define INP_GPIO(g) *(gpio+((g)/10)) &amp;= ~(7&lt;&lt;(((g)%10)*3))
#define OUT_GPIO(g) *(gpio+((g)/10)) |=  (1&lt;&lt;(((g)%10)*3))
#define SET_GPIO_ALT(g,a) *(gpio+(((g)/10))) |=
(((a)&lt;=3?(a)+4:(a)==4?3:2)&lt;&lt;(((g)%10)*3))

//#define GPIO_SET *(gpio+7)  // sets   bits which are 1 ignores bits which are 0
//#define GPIO_CLR *(gpio+10) // clears bits which are 1 ignores bits which are 0
//temporarily introduced for pint 4
#define GPIO_SET *(volatile unsigned int*)(gpio+7) |= 0x10  // sets   bits which are 1
ignores bits which are 0
#define GPIO_CLR *(volatile unsigned int*)(gpio+10)|= 0x10 // clears bits which are 1
ignores bits which are 0
#define GPIO_READ(g) *(gpio + 13) &amp;= (1&lt;&lt;(g))

void setup_io();

int main(int argc, char **argv)
{
int g,rep;

// Set up gpi pointer for direct register access
setup_io();
// set GPIO pin 7 as output
//    INP_GPIO(7); // must use INP_GPIO before we can use OUT_GPIO
    INP_GPIO(4); // must use INP_GPIO before we can use OUT_GPIO
//    OUT_GPIO(7);
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main" class="pn">p51</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="codes">    OUT_GPIO(4);

// flash LED on and off 10 times
 for (rep = 0; rep &lt; 10; rep++) {
//        GPIO_SET = (1 &lt;&lt; 7);
        printf("setting\n");
        GPIO_SET;
        sleep(1);
//        GPIO_CLR = (1 &lt;&lt; 7);

        printf("resetting\n");
        GPIO_CLR;
        sleep(1);
 }
  return 0;
} // main
// Set up a memory regions to access GPIO
void setup_io()
{
/* open /dev/mem */
if ((mem_fd = open("/dev/mem", O_RDWR|O_SYNC) ) &lt; 0) {
 printf("can't open /dev/mem \n");
 exit(-1);
</pre><pre class=codes>}
/* mmap GPIO */
gpio_map = mmap(
 NULL,                 //Any adddress in our space will do
 BLOCK_SIZE,           //Map length
 PROT_READ|PROT_WRITE, // Enable reading &amp; writting to mapped memory
 MAP_SHARED,           //Shared with other processes
 mem_fd,               //File to map
 GPIO_BASE             //Offset to GPIO peripheral
 );
 close(mem_fd); //No need to keep mem_fd open after mmap
 if (gpio_map == MAP_FAILED) {
  printf("mmap error %d\n", (int)gpio_map); //errno also set!
  exit(-1);
 }
 // Always use volatile pointer!
 gpio = (volatile unsigned *)gpio_map;
} // setup_io()
</pre><pre style="clear:both"></pre>
<img class="img" src="http://www.minhinc.com/image/li-slide-raspberrypigpio.png" />

<img class="img" src="http://www.minhinc.com/image/li-slide-raspberrypigpio2.png" />


<b>7. mount</b>
<pre class="code">mount [-lhV]

mount -a [-fFnrsvw] [-t vfstype] [-O optlist]
mount [-fnrsvw] [-o options [,...]] device | dir
mount [-fnrsvw] [-t vfstype] [-o options] device dir
</pre>
Mount a file system

All files accessible in a Unix system are arranged in one big tree, the file
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p52</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
hierarchy, rooted at /. These files can be spread out over several devices. The mount
command serves to attach the file system found on some device to the big file tree.
Conversely, the umount(8) command will detach it again.

The standard form of the mount command, is mount -t type device dir
<pre class="code">#include&lt;sys/mount.h&gt;
#include&lt;stdio.h&gt;
main(){
int fd;
fd = mount("/dev/fd0","/mnt/floppy","ext2",MS_NOSUID,NULL);
if(fd != -1)
printf(" Floppy mounted successfully\n");
printf(" Changing Directory to floppy\n");
chdir("/mnt/floppy");
printf(" Creating a file test_file in floppy\n");
fd = creat("test_file",0644);
if (fd != -1)
printf(" File Creation successful\n");
} 
</pre>
<b>8. readv, writev</b>
<pre class="code">#include &lt;sys/uio.h&gt;

ssize_t readv(int fd, const struct iovec *vector, int count);
ssize_t writev(int fd, const struct iovec *vector, int count);
readv, writev - read or write data into multiple buffers
</pre>
The readv() function reads count blocks from the file associated with the file
descriptor fd into the multiple buffers described by vector.

The writev() function writes at most count blocks described by vector to the file
associated with the file descriptor fd.

The pointer vector points to a struct iovec defined in &lt;sys/uio.h&gt; as

<pre class="code">struct iovec {
 void *iov_base;   /* Starting address */
 size_t iov_len;   /* Number of bytes */
};

# include&lt;stdio.h&gt;
# include &lt;fcntl.h&gt;
# include &lt;sys/uio.h&gt;

struct emp{
char name[25];
int age;
float  sal;
}obj[2], Emp [2]={{"Hello",10,123.345},{"World",20,234.567}};

main()
{
struct iovec  readiovobj,ioobj;
int fd;
int retval;
ioobj.iov_base = Emp;
ioobj.iov_len =sizeof(Emp);

printf("%d",ioobj.iov_len );

fd = open("temp",O_CREAT|O_RDWR,0666);
retval=writev(fd,&amp;ioobj,1);
printf("%d",retval);

lseek(fd,0,SEEK_SET);
readiovobj.iov_base = obj;
readiovobj.iov_len =sizeof(Emp);
retval=readv(fd,&amp;readiovobj,1);
printf("%d",retval);
}
</pre>
<b>9. pread, pwrite </b>
<pre class="code">#define _XOPEN_SOURCE 500

#include &lt;unistd.h&gt;

ssize_t pread(int fd, void *buf, size_t count, off_t offset);

ssize_t pwrite(int fd, const void *buf, size_t count, off_t offset);
 pread, pwrite - read from or write to a file descriptor at a given offset
</pre>
pread() reads up to count bytes from file descriptor fd at offset offset (from the
start of the file) into the buffer starting at buf. The file offset is not changed.
pwrite() writes up to count bytes from the buffer starting at buf to the file
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p53</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
descriptor  fd at offset offset.  The file offset is not changed.
The file referenced by fd must be capable of seeking.

<pre class="code">#include&lt;stdio.h&gt;
#include&lt;sys/stat.h&gt;
#include&lt;sys/types.h&gt;
#include&lt;fcntl.h&gt;
#include&lt;unistd.h&gt;
 
main()
{
int fd1, fd2,n;
char ch[1024];
if((fd1 = open("/etc/passwd",O_RDONLY)) == -1)
 perror("Un able to open source");

n = pread(fd1,ch,100,100);
printf(ch);
close(fd1);

if((fd2 = open("newfile",O_WRONLY,0666)) == -1){
 perror("Un able to open target");
 exit(1);
}
pwrite(fd2,"XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX",40,500); 
 pwrite(fd2,"YYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY",40,500); 

close(fd2);
} 
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main6" class="pn">p54</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap7">&nbsp;<div class="slideheader" style="height:145px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  7. Process Management</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap7_0">Process Defined</a></li>   <li class="sml"><pre>Process Descriptor Structures in the kernel
</pre></li>   <li class="sml"><pre>Process States
</pre></li>   <li class="sml"><pre>Process Scheduling
</pre></li>   <li class="sml"><pre>Process Creation
</pre></li>   <li class="sml"><pre>System calls related to process management</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

- A Process is a file in file system. 
- A Process is  object code in execution-active, alive, running programs
- Processes are more than just assembly language; they consist of data, resources,
state,
and a virtualized computer.
- A process uses many resources like memory space, CPU, files, etc., during its
lifetime.
- A Process contains threads, contained in a process group and has parent Process.
  A process group contained in Session. Session has tty, terminal attached to it where
at most one process group (Foreground process group) attached to the terminal. 
 Rest detached process groups are background process group.

 - A Process is sub program that is scheduled, by kernel, to the process for
execution.
 Main thread in a process is actual entity that get scheduled to the CPU. Kernel
maintains separate copy of registers and various other data structure for a process.
 - In multi processing environment register values in context of process gets loaded
to actual register when execution resumes.

 - A process is an entry in task vector, and is an instance of task_struct.

<img class="img" src="http://www.minhinc.com/image/li-slide-processaddressspace.png" />

</pre> &nbsp;<div class="slideheader" style="height:145px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  7. Process Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Process Defined
</pre></li>   <li class="big"><a name="chap7_1">Process Descriptor Structures in the kernel</a></li>   <li class="sml"><pre>Process States
</pre></li>   <li class="sml"><pre>Process Scheduling
</pre></li>   <li class="sml"><pre>Process Creation
</pre></li>   <li class="sml"><pre>System calls related to process management</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Process Structure
* Every process is represented by a task_struct data structure.
* This structure is quite large and complex.
* When ever a new process is created a new task_struct structure is created by the
kernel and the complete process information is maintained by the structure.
* When a process is terminated, the corresponding structure is removed.
* Uses doubly linked list data structure.
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main7" class="pn">p55</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
* Solaris uses proc structure to manage processes.

<pre class="codec">task_struct task[256];

struct task_struct {
volatile long state;    /* -1 unrunnable, 0 runnable, &gt;0 stopped */
void *stack;
atomic_t usage;
unsigned int flags;     /* per process flags, defined below */
unsigned int ptrace;

#ifdef CONFIG_SMP
struct llist_node wake_entry;
int on_cpu;
struct task_struct *last_wakee;
unsigned long wakee_flips;
unsigned long wakee_flip_decay_ts;

int wake_cpu;
#endif
int on_rq; 

int prio, static_prio, normal_prio;
unsigned int rt_priority;
const struct sched_class *sched_class;
struct sched_entity se;
struct sched_rt_entity rt;

#ifdef CONFIG_CGROUP_SCHED
struct task_group *sched_task_group;
#endif

#ifdef CONFIG_PREEMPT_NOTIFIERS
/* list of struct preempt_notifier: */
struct hlist_head preempt_notifiers;
#endif
/*
* fpu_counter contains the number of consecutive context switches
* that the FPU is used. If this is over a threshold, the lazy fpu
* saving becomes unlazy to save the trap. This is an unsigned char
* so that after 256 times the counter wraps and the behavior turns
* lazy again; this to deal with bursty apps that only use FPU for
* a short time
*/
unsigned char fpu_counter;
#ifdef CONFIG_BLK_DEV_IO_TRACE
 unsigned int btrace_seq;
#endif
unsigned int policy;
int nr_cpus_allowed;
cpumask_t cpus_allowed;

#ifdef CONFIG_PREEMPT_RCU
 int rcu_read_lock_nesting;
 char rcu_read_unlock_special;
 struct list_head rcu_node_entry;
#endif /* #ifdef CONFIG_PREEMPT_RCU */
#ifdef CONFIG_TREE_PREEMPT_RCU
 struct rcu_node *rcu_blocked_node;
#endif /* #ifdef CONFIG_TREE_PREEMPT_RCU */
#ifdef CONFIG_RCU_BOOST
 struct rt_mutex *rcu_boost_mutex;
#endif /* #ifdef CONFIG_RCU_BOOST */

#if defined(CONFIG_SCHEDSTATS) || defined(CONFIG_TASK_DELAY_ACCT)
 struct sched_info sched_info;
#endif

        struct list_head tasks;
#ifdef CONFIG_SMP
 struct plist_node pushable_tasks;
#endif

 struct mm_struct *mm, *active_mm;
#ifdef CONFIG_COMPAT_BRK
 unsigned brk_randomized:1;
#endif
#if defined(SPLIT_RSS_COUNTING)
 struct task_rss_stat    rss_stat;
#endif
/* task state */
int exit_state;
int exit_code, exit_signal;
int pdeath_signal;  /*  The signal sent when the parent dies  */
unsigned int jobctl;    /* JOBCTL_*, siglock protected */
..
..
</pre>
In order to run unix, the computer hardware must provide two modes of execution:
- kernel mode
- user mode

Some computers have more than two execution modes.
- eg: Intel processor. It has four modes of execution.

Each process has virtual address space; references to virtual memory are translated to
physical memory locations using set of address translation maps.

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main7" class="pn">p56</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:145px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  7. Process Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Process Defined
</pre></li>   <li class="sml"><pre>Process Descriptor Structures in the kernel
</pre></li>   <li class="big"><a name="chap7_2">Process States</a></li>   <li class="sml"><pre>Process Scheduling
</pre></li>   <li class="sml"><pre>Process Creation
</pre></li>   <li class="sml"><pre>System calls related to process management</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Process States

<img class="img" src="http://www.minhinc.com/image/li-slide-processstate.png" />

</pre> &nbsp;<div class="slideheader" style="height:145px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  7. Process Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Process Defined
</pre></li>   <li class="sml"><pre>Process Descriptor Structures in the kernel
</pre></li>   <li class="sml"><pre>Process States
</pre></li>   <li class="big"><a name="chap7_3">Process Scheduling</a></li>   <li class="sml"><pre>Process Creation
</pre></li>   <li class="sml"><pre>System calls related to process management</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Scheduling (Kernel perspective)
* The kernel keeps track of a processes creation time as well as the CPU time that it
consumes during its lifetime.
* This clock is the combination of software and hardware setup.
* It is independent of CPU frequency.
* A clock tick unit is Jiffy. System's interactive response depends on the clock
frequency.
- For example: the jiffy value may be 10ms (100Hz) or 1ms (1000Hz) depending on
implementation

Each clock tick, the kernel updates the amount of time that the current process has
spent in system and in user mode.
* Linux also supports process specific interval timers, processes can use system calls
to set up timers to send signals to themselves when the timers expire. These timers
can be single-shot or periodic timers.

Process Scheduling
* The job of a scheduler is to select the most deserving process to run out of all of
the runnable processes in the run queue.
* Implement fair scheduling to avoid starvation
* Implement suitable scheduling policy
* Updates state of the processes in every clock tick (jiffy)

Policy - FIFO, Round Robin, Shortest Job First,
FILO, Priority based etc.
* Priority - higher priority process will be allowed to run.
* Pre-emptive and Non-preemptive scheduling.
* rt_priority - many UNIX variants support real time scheduling priority range.

Priority Range
Scheduling priorities (in a typical UNIX system)
have integer values
between 0 and 127, with smaller numbers
meaning higher priorities.
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main7" class="pn">p57</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
* For Solaris: 0 to 169
* For Linux: 0 to 139

Process Scheduling: Linux
* The Linux kernel implements two separate priority ranges.
* The first is the nice value, a number from -20 to 19 with a default of zero. Larger
nice values correspond to a lower priority.
* A process with a nice value of -20 receives the maximum time slice, whereas a
process with a nice value of 19 receives the minimum time slice.
* Time slice: minimum -10ms, default -150ms and maximum
- 300ms

* The second range is the real-time priority
* By default, it ranges from zero to 99.
* All real time processes are at a higher priority than normal processes.
* Linux implements real-time priorities in accordance with POSIX.

* Linux provides two real-time scheduling policies, <pre class="code" style="display:inline">SCHED_FIFO</pre> and
<pre class="code" style="display:inline">SCHED_RR</pre>
* The normal non real-time scheduling policy is <pre class="code" style="display:inline">SCHED_OTHER</pre>
* <pre class="code" style="display:inline">SCHED_FIFO</pre> implements without time slices- so it can run until it blocks or
explicitly yields the processor.
* <pre class="code" style="display:inline">SCHED_RR</pre> is identical to <pre class="code" style="display:inline">SCHED_FIFO</pre> except that each process can only
run until it exhausts a predetermined time Slice.

Scheduler System Calls
<pre class="codec"> nice() Set a process's nice value
 sched_setscheduler() Set a process's scheduling policy
 sched_getscheduler() Get a process's scheduling policy
 sched_setparam() Set a process's real-time priority
 sched_getparam() Get a process's real-time priority
 sched_get_priority_max() Get the maximum real-time priority
 sched_get_priority_min() Get the minimum real-time priority
 sched_rr_get_interval() Get a process's timeslice value
</pre>
</pre> &nbsp;<div class="slideheader" style="height:145px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  7. Process Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Process Defined
</pre></li>   <li class="sml"><pre>Process Descriptor Structures in the kernel
</pre></li>   <li class="sml"><pre>Process States
</pre></li>   <li class="sml"><pre>Process Scheduling
</pre></li>   <li class="big"><a name="chap7_4">Process Creation</a></li>   <li class="sml"><pre>System calls related to process management</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

<img class="img" src="http://www.minhinc.com/image/li-slide-unixprocess.png" />

Process Creation
Parent process creates children processes, which, in turn create other
   processes, forming a tree of processes.
Resource sharing
   Parent and children share all resources.
   Children share subset of parent's resources.
   Parent and child share no resources.
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main7" class="pn">p58</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
Execution
   Parent and children execute concurrently.
   Parent waits until children terminate.
Address space
   Child duplicate of parent.
   Child has a program loaded into it.

fork()
* pid_t fork (void); creates a new process.
* All statements after the fork() system call in a program are executed by two
processes - the original process that used fork(), plus the new process that is
created by fork( ).
<pre class="code">main ( ) {
printf (" Hello fork %d\n, fork ( ) ");
}
- Hello fork: 0
- Hello fork: x ( &gt; 0);
- Hello fork: -1
</pre>

Parent and Child
<pre class="code">if (!fork( )) {
/* Child Code */
}
else {
/* parent code */
wait (0); /* or */
waitpid(pid, ....);
}
</pre>
Zombie State and Orphan Process
* When a child process exits, it has to give the exit status to the parent process.
* If the parent process is busy or suspended then the child process will not be able
to terminate.
* Such state is called Zombie.
* If parent exits before child, the child will become an orphan process and the init
process (grand parent) will take care of the child process.


Copy on Write (COW)
* Instead of copying the address space of the parent, UNIX uses the COW technique for
economical use of the memory page.
* The parent space is not copied, it can be shared by both the parent and the child
process but the memory pages are marked as write protected.
* If parent or child wants to modify the pages, then kernel copies the parent pages to
the child process.
* Advantage: Kernel can defer or prevent copying of a parent process address space.

execl
To run a new program in a process, you use one of
the "exec" family of
calls (such as "execl") and specify following:
* the pathname of the program to run
* the name of the program
* each parameter to the program
* (char *)0 or NULL as the last parameter to specify end of parameter list

exec Family
<pre class="code">int execl (const char *path, const char *arg, .....);
int execlp (const char *file, const char *arg);
int execle (const char *path, const char *arg, ......., char *const envp[ ]);
int execv (const char *path, char *const argv[ ]);
int execvp (const char *file, char *const argv[ ]);
  All the above library functions call internally execve system call.
int execve (const char *filename, char *const argv [ ] , char *const evnp [ ]);
</pre>
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main7" class="pn">p59</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<img class="img" src="http://www.minhinc.com/image/li-slide-executableimage.png" />

Text Portion
* User Context consists portions accessible to the process while running in user mode.
* The text portion of a process contains the actual machine instructions that are
executed by the hardware.
* When a program is executed by the OS, the text portion is read into memory from its
disk file, unless the OS supports shared text and a copy of program is already being
executed.  
Data Portion
* The data portion contains the program's data. It is possible for this to be divided
into 3 pieces.
* Initialized read only data contains elements that are initialized by the program and
are read only while the process is executing.
* Initialized read write data contains data elements that are initialized by the
program and may have their values modified during execution of the process.

Stack Portion
* Un-initialized data contains data elements that are not initialized by the program
but are set to zero before execution starts .
* The heap is used while a process is running to allocate more data space dynamically
to the process.
* The stack is used dynamically while the process is running to contain the stack
frames that are used by many programming languages.

Kernel Context
* The stack frames contain the return address linkage for each function call and also
the data elements required by a function.
* A gap is shown between heap and stack to indicate that many OS leave some room
between these 2 portions, so
that both can grow dynamically.
* The kernel context of a process is maintained and accessible only to the kernel.
This area contains info that the kernel needs to keep track of the process and to stop
and restart the process while other processes are allowed to execute.

Daemon Process
Introduction
* Daemon process starts during system startup.
* They frequently spawn other process to handle services requests.
- Mostly started by initialization script /etc/rc
* Waits for an event to occur.
* perform some specified task on periodic basis (cron job)
* perform the requested service and wait
- Example print server

Characteristics
* executed at the background process
* Orphan process
* No controlling terminal
* run with super user privileges
* process group leaders
* session leaders

</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main7" class="pn">p60</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
How to daemonize
1. Call umask to set the file mode creation mask to a known value, usually 0. 
2. Call fork and have the parent exit. Child inherits the process group ID of the
parent but gets a new process ID, so we're guaranteed  that the child is not a process
group leader. This is a prerequisite for the call to  setsid that is done next.
3. Call setsid to create a new session. The three steps listed in Section 9.5 occur. 
The process (a) becomes the leader of a new session, (b) becomes the leader of a new
process group, and (c) is disassociated from its controlling terminal.
4. Change the current working directory to the root directory. The current working
directory inherited from the parent could be on a mounted file system.
5. Unneeded file descriptors should be closed. This prevents the daemon from holding
open any descriptors that it may have inherited from its parent (which could be a
shell or some other process). 
6. Some daemons open file descriptors 0, 1, and 2 to /dev/null so that any library
routines that try to read from standard input or write to standard output or standard
error will have no effect. 

$ ps -axj   #to get all daemon process, does not have terminal

<pre class="codec">#include  "apue.h"
#include  &lt;syslog.h&gt;
#include  &lt;fcntl.h&gt;
#include  &lt;sys/resource.h&gt;
void
daemonize(const char *cmd)
{
int                 i, fd0, fd1, fd2;
pid_t               pid;
struct rlimit       rl;
struct sigaction    sa;
/*
* Clear file creation mask.
*/
umask(0);
/*
* Get maximum number of file descriptors.
*/
if (getrlimit(RLIMIT_NOFILE, &amp;rl) &lt; 0)
 err_quit("%s: can't get file limit", cmd);
/*
* Become a session leader to lose controlling TTY.
*/
if ((pid = fork()) &lt; 0)
 err_quit("%s: can't fork", cmd);
else if (pid != 0) /* parent */
 exit(0);
setsid();
/*
* Ensure future opens won't allocate controlling TTYs.
*/
 sa.sa_handler = SIG_IGN;
 sigemptyset(&amp;sa.sa_mask);
  sa.sa_flags = 0;
  if (sigaction(SIGHUP, &amp;sa, NULL) &lt; 0)
       err_quit("%s: can't ignore SIGHUP", cmd);
  if ((pid = fork()) &lt; 0)
       err_quit("%s: can't fork", cmd);
  else if (pid != 0) /* parent */
       exit(0);
  /*
    * Change the current working directory to the root so
    * we won't prevent file systems from being unmounted.
    */
  if (chdir("/") &lt; 0)
       err_quit("%s: can't change directory to /", cmd);
  /*
    * Close all open file descriptors.
    */
  if (rl.rlim_max == RLIM_INFINITY)
       rl.rlim_max = 1024;
  for (i = 0; i &lt; rl.rlim_max; i++)
       close(i);
  /*
    * Attach file descriptors 0, 1, and 2 to /dev/null.
    */
  fd0 = open("/dev/null", O_RDWR);
  fd1 = dup(0);
  fd2 = dup(0);
  /*
    * Initialize the log file.
    */
  openlog(cmd, LOG_CONS, LOG_DAEMON);
  if (fd0 != 0 || fd1 != 1 || fd2 != 2) {
       syslog(LOG_ERR, "unexpected file descriptors %d %d %d",
         fd0, fd1, fd2);
       exit(1);
  }
}
</pre>
</pre> &nbsp;<div class="slideheader" style="height:145px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  7. Process Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Process Defined
</pre></li>   <li class="sml"><pre>Process Descriptor Structures in the kernel
</pre></li>   <li class="sml"><pre>Process States
</pre></li>   <li class="sml"><pre>Process Scheduling
</pre></li>   <li class="sml"><pre>Process Creation
</pre></li>   <li class="big"><a name="chap7_5">System calls related to process management</a></li>
  </ul>
 </div>
<pre class="slidecontent">

<b>1. wait, waitpid</b>
<pre class="code">#include &lt;sys/types.h&gt;
#include &lt;sys/wait.h&gt;

pid_t wait(int *status);
pid_t waitpid(pid_t pid, int *status, int options);
int waitid(idtype_t idtype, id_t id, siginfo_t *infop, int options);
    wait, waitpid - wait for process to change state
</pre>A state change is considered  to be: the child terminated; the child was stopped by a
signal; or the child was resumed by a1. wait, waitpid signal.  In the case of a
terminated child, performing a wait allows the system to  release the resources
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main7" class="pn">p61</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
associated with the child; if a wait is not performed, then termi nated the child
remains in a "zombie" state.

If a child has already changed state, then these calls return immediately. Otherwise
they block until either a child changes state or a signal handler interrupts the call
(assuming that system calls are not automatically restarted using the
<pre class="code" style="display:inline">SA_RESTART</pre> flag of sigaction(2)).   

<pre class="code">waitpid(-1, &amp;status, 0);
</pre>
The value of pid can be:
&lt; -1 meaning wait for any child process whose process group ID is equal to the
absolute value of pid.
-1 meaning wait for any child process.
0 meaning wait for any child process whose process group ID is equal to that of the
calling process.
&gt; 0 meaning wait for the child whose process ID is equal to the value of pid.

<pre class="code">#include &lt;stdio.h&gt;
int main ()	{
int i=0,pid;
printf ("Ready to fork\n");
pid = fork();
if (pid == 0)
{
printf ("Child starts\n");
for(i=0;i&lt;1000;i++) printf ("%d\t",i);
printf ("Child ends\n");
sleep(30);  uncomment this to get child orphaned process
}else {
Wait(0); //comment and sleep to get child as zombie process
printf ("Parent process\n");
}
}
</pre>
<b>2. exec</b>
<pre class="code">#include &lt;unistd.h&gt;

extern char **environ;

int execl(const char *path, const char *arg, ...);
int execlp(const char *file, const char *arg, ...);
int execle(const char *path, const char *arg,
                  ..., char * const envp[]);
int execv(const char *path, char *const argv[]);
int execvp(const char *file, char *const argv[]);
       execl, execlp, execle, execv, execvp - execute a file
</pre>execl
<pre class="code">#include &lt;stdio.h&gt;
int main ()
{
int pid;
pid = fork();
if (pid == 0)
{
 printf ("Exec starts\n");
 execl("/bin/ls","ls","-l",(char *)0);
 printf ("Execl did not work\n");
}
else
{
 wait(0);
 printf ("Parent:Is completed in child\n");
 }
}
</pre>execv
<pre class="code">#include &lt;stdio.h&gt;
int main ()
{
char *temp[4];
temp[0] = "ls";
temp[1] = "-l";
temp[2] = (char *)0;
execv("/bin/ls",temp);
printf ("This will not print\n");
}
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main7" class="pn">p62</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap8">&nbsp;<div class="slideheader" style="height:186px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  8. Memory Management</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap8_0">Defining and Creating secondary memory<br>areas</a></li>   <li class="sml"><pre>Memory allocation & deallocation system
calls malloc, calloc, alloca, free
</pre></li>   <li class="sml"><pre>Virtual Memory Management
</pre></li>   <li class="sml"><pre>Address Translation and page fault
handling
</pre></li>   <li class="sml"><pre>Demand Paging defined
</pre></li>   <li class="sml"><pre>Process Organization in Memory</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

Factors to be considered while designing secondary memory

Latency, Throughput and Bandwidth
Latency - : Amount of time for a single operation to execute.
Throughput - Rate at which operations get executed. 
              Normally expressed as Operations/second. 
              In sequential processing throughput = 1 /latency
Bandwidth - : Total rate at which data moves between processor and memory. 
              Product of throughput and datawidth

Pipelining, Parallelism and Pre-charging
Memory systems can be pipelined similar to the processors are pipelined, allowing
operations to overlap execution to improve throughput.
Many memory technologies require a certain delay (idle time ) between operations to
pre-charge circuitry for the next access.
Attaching multiple memories to the processor's memory bus allows parallelism. This
increases the rate at which memory is accessed without increasing the pin count of the
processor.

Two kinds of systems that support parallelism - Replicated &amp; Banked.
Replicated provides multiple copies of entire memory. Store needs to write into all
copies( more expensive than loads ).
Banked memory - Data is divided or interleaved across memories.

<img class="img" src="http://www.minhinc.com/image/li-slide-processormemory.png" />

Example:
What is the bandwidth of a memory system with a latency of 40 ns that transfers 1 byte
per operation and is pipelined to allow 4 operations to overlap execution (
assume no pipelining overhead ) ?

Dividing latency 40 ns by number of overlapped operations ( 4 ) gives a rate of 1
operation per 10 ns as the throughput of the memory system. At 1 byte of data per
operation, this gives a bandwidth of 100 Mbyte/sec.

<img class="img" src="http://www.minhinc.com/image/li-slide-memoryhierarchy.png" />
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main8" class="pn">p63</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">

<img class="img" src="http://www.minhinc.com/image/li-slide-memoryhierarchy1.png" />

Levels in the Memory Hierarchy
Cache :
1. Generally implemented using SRAM.
2. Use hardware to keep track of addresses stored in them.
3. Tend to be small ( capacity ).
4. Small Block Sizes ( 32 to 128 bytes ).

Main Memory:
1. Generally implemented using DRAM.
2. Use software to keep track of addresses.
3. Larger capacity ( Few MB to several Gigabytes ).
4. Larger Block Sizes ( several kilobytes ).

Virtual Memory:
1. Implemented using disks.
2. Contains all of the data in the memory system.

Some terminology...
Hit : When an address is found at a given hierarchy.
Miss: When an address is NOT found at a given hierarchy. 
Hit Rate: % of references that reach a given level &amp; result in hits.
Miss Rate: % of references that reach a given level &amp; result in misses.
Note: Hit Rate + Miss Rate = 100% ALWAYS.

When a miss occurs, a BLOCK of data is brought in from a lower level into the current
level of the hierarchy. As time progresses, the current level may fill up, and run out
of free space. A block must be removed to accommodate the new block. This is called
eviction or replacement. The method to decide on what block to remove is called
replacement policy.
To simplify evicting data blocks, many memory systems maintain a property called
inclusion. The presence of an address at a given level of a memory hierarchy
GUARANTEES that the address is present in ALL LOWER LEVELS of the memory system.

Computing average access times in a memory hierarchy...

If we know the hit-rate and access-time ( time to complete a request that hits ) for
each level in the hierarchy, we can compute average access time of the memory
hierarchy. For each level in the hierarchy, the average access time is
( T hit x P hit ) + ( T miss x P miss )
Where T hit = Time to resolve requests that hit in the level
P hit = Hi-rate of the level, expressed as a probability.
T miss = Average access time of the level below this one. rate of the level.
P miss = Miss
Note that Hit-rate of the lowest level is 100%, we start at the bottom and compute the
average access time of each level upwards in the hierarchy.
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main8" class="pn">p64</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">

Example:
A memory system contains a cache, a DRAM and a Virtual Store. The access time of the
cache is 5 ns with a hit-rate of 80%, whereas the access time of the DRAM is 100 ns
with a 99.5 % hit-rate. The access time of the virtual store is 10 ms. What is the
average access time of the hierarchy ?
We start at the bottom and work upwards:
The hit-rate of Virtual store is always 100%.
Average access time for requests that reach DRAM
= ( 100 ns x 0.995 ) + ( 10 ms x 0.005 ) = 50,099.5 ns
The average access time for requests that reach the cache
( which is ALL REQUESTS !!)
= ( 5 ns x 0.80 ) + ( 50,099.5 ns x 0.20 ) = 10,024 ns


SRAM and DRAM Chips
These have the same basic structure ( shown in next slide )
Data is stored in rectangular array of bit cells, each holding 1 bit. To read data
from the array, half of the address to be read ( generally high order bits) is fed
into a decoder. The decoder asserts (drives high) the word line corresponding to the
value of its input bits, which causes all of the bit cells in the corresponding row to
drive their values onto bit lines that they are connected to.

The other half of the address is then used as an input to a multiplexer that selects
the
appropriate bit line and drives its output onto the output pins of the chip.

To store data on the chip, the same process is used, except the value to be written is
driven on appropriate bit line and written into the selected bit cell.

<img class="img" src="http://www.minhinc.com/image/li-slide-memoryorgnization.png" />
<a href="http://www.minhinc.com/image/li-slide-memorysramdram.png"><img class="img" src="http://www.minhinc.com/image/li-slide-memorysramdram_s.png" /></a>

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main8" class="pn">p65</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:186px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  8. Memory Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Defining and Creating secondary memory
areas
</pre></li>   <li class="big"><a name="chap8_1">Memory allocation & deallocation system<br>calls malloc, calloc, alloca, free</a></li>   <li class="sml"><pre>Virtual Memory Management
</pre></li>   <li class="sml"><pre>Address Translation and page fault
handling
</pre></li>   <li class="sml"><pre>Demand Paging defined
</pre></li>   <li class="sml"><pre>Process Organization in Memory</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

<pre class="code">#include &lt;stdlib.h&gt;

void *malloc(size_t size);
void free(void *ptr);
void *calloc(size_t nmemb, size_t size);
void *realloc(void *ptr, size_t size);
</pre>
The malloc() function allocates size bytes and returns a pointer to the allocated
memory. The memory is not initialized. If size is 0, then malloc() returns either
NULL, or a unique pointer value that can later be successfully passed to free().

The free() function frees the memory space pointed to by ptr, which must have been
returned by a previous call to malloc(), calloc(), or realloc(). 

The calloc() function allocates memory for an array of nmemb elements of size bytes
each and returns a pointer to the allocated memory. The memory is set to zero. If
nmemb or size is 0, then calloc() returns either NULL, or a unique pointer value that
can later be successfully passed to free().

The  realloc() function changes the size of the memory block pointed to by ptr to size
bytes. The contents will be unchanged in the range from the start of the region up to
the minimum of the old and new sizes. 

<pre class="code">#include &lt;alloca.h&gt;
void *alloca(size_t size);
</pre>
DESCRIPTION
The  alloca() function allocates size bytes of space in the stack frame of the caller.
 This temporary space is automatically  freed  when  the function that called alloca()
returns to its caller.

</pre> &nbsp;<div class="slideheader" style="height:175px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  8. Memory Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Defining and Creating secondary memory
areas
</pre></li>   <li class="sml"><pre>Memory allocation & deallocation system
calls malloc, calloc, alloca, free
</pre></li>   <li class="big"><a name="chap8_2">Virtual Memory Management</a></li>   <li class="sml"><pre>Address Translation and page fault
handling
</pre></li>   <li class="sml"><pre>Demand Paging defined
</pre></li>   <li class="sml"><pre>Process Organization in Memory</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Virtual Memory
Each program has a virtual address space which is the set of addresses that programs
use for load and store operations.

The physical address space is the set of addresses used to reference locations in main
memory.

The virtual address space is divided into pages some of which reside inside a page
frame ( slots in main memory ) while others reside on the disk. Pages are always
aligned on a multiple of the page size so that the addresses never overlap.

The terms virtual page and physical page are used to describe a page of data in the
virtual and physical address spaces respectively.

Pages that have been loaded into main memory are said to have been mapped.

Virtual memory allows a computer to act as if its main memory were much larger than it
actually is.

</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main8" class="pn">p66</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
When a program references a virtual address, it cannot tell, except by timing the
latency of the operation, whether the virtual address was resident in the main memory
or whether it had to be fetched from disk.

This makes it possible for the computer to shuffle pages in and out of the main memory
exactly like data is brought in and out of the cache.

<a href="http://www.minhinc.com/image/li-slide-memoryvirtualconcept.png"><img class="img" src="http://www.minhinc.com/image/li-slide-memoryvirtualconcept_s.png" /></a>

</pre> &nbsp;<div class="slideheader" style="height:186px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  8. Memory Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Defining and Creating secondary memory
areas
</pre></li>   <li class="sml"><pre>Memory allocation & deallocation system
calls malloc, calloc, alloca, free
</pre></li>   <li class="sml"><pre>Virtual Memory Management
</pre></li>   <li class="big"><a name="chap8_3">Address Translation and page fault<br>handling</a></li>   <li class="sml"><pre>Demand Paging defined
</pre></li>   <li class="sml"><pre>Process Organization in Memory</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Address Translation
Programs running on systems with Virtual Memory use Virtual Addresses as the arguments
to load and store instructions.

The main memory uses Physical Addresses to record locations where data is actually
stored.

Whenever a program uses a Virtual Address, this must be converted into a Physical
Address and this process is known as Address Translation.

When a program accesses a memory location, the O.S accesses a Page Table, which is a
data structure that contains the mapping of the virtual address to the physical
address.

If the virtual page is mapped ( present in memory ) then the physical address is
retrieved and the operation proceeds.

If the virtual page is NOT mapped, then a page fault occurs and the O.S fetches the
page from the hard disk, loading it into a page frame, and updating the page table
with the new translation. Once the page has been read into memory from disk, and the
page table updated, the physical address of the page can be determined and the memory
reference completed.

If all the page frames already contain data, one of them must be evicted to the disk
to make room for the incoming data. The replacement policies used to select the page
that is evicted are similar to the ones for set-associative caches.

Because both virtual and physical pages are always aligned on a multiple of their
size, the page table does not need to keep track of the full virtual or physical
address of a page that is mapped. Instead virtual addresses are divided into a Virtual
Page Number or VPN and a set of bits that describe an offset from the start of the
virtual page to the virtual address. Similarly, the physical pages are divided into
Physical Page Numbers or PPN and an offset

Because both virtual and physical pages are always aligned on a multiple of their
size, the page table does not need to keep track of the full virtual or physical
address of a page that is mapped. Instead virtual addresses are divided into a Virtual
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main8" class="pn">p67</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
Page Number or VPN and a set of bits that describe an offset from the start of the
virtual page to the virtual address. Similarly, the physical pages are divided into
Physical Page Numbers or PPN and an offset from the start of the physical page to the
physical address.

The virtual and physical pages in a given system are generally the same size, so the
number of bits
(log 2 of the page size) for the offset of the virtual and physical addresses are the
same.

The VPN and PPN may be of different lengths. For example, on 64-bit systems, the
virtual addresses are generally much longer than physical addresses.

<a href="http://www.minhinc.com/image/li-slide-addresstranslationtable.png"><img class="img" src="http://www.minhinc.com/image/li-slide-addresstranslationtable_s.png" /></a>

<a href="http://www.minhinc.com/image/li-slide-virtualtable.png"><img class="img" src="http://www.minhinc.com/image/li-slide-virtualtable_s.png" /></a>

The page table is accessed using the virtual page frame number as an offset. 

Virtual page frame 5 would be the 6th element of the table (0 is the first element).

To translate a virtual address into a physical one, the processor must first work out
the virtual addresses page frame number and the offset within that virtual page. By
making the page size a power of 2 this can be easily done by masking and shifting.
Assuming a page size of 0x2000 bytes (which is decimal 8192) and an address of 0x2194
in process Y's virtual address space then the processor would translate that address
into offset 0x194 into virtual page frame number 1.

<img class="img" src="http://www.minhinc.com/image/li-slide-pageentry.png" />

<b>V</b> Valid, if set this PTE is valid,
<b>FOE</b> "Fault on Execute", Whenever an attempt to execute instructions in this page
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main8" class="pn">p68</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
occurs, the processor reports a page fault and passes control to the operating system,

<b>FOW</b> "Fault on Write", as above but page fault on an attempt to write to this page,
<b>FOR</b> "Fault on Read", as above but page fault on an attempt to read from this page,
<b>ASM</b> Address Space Match. This is used when the operating system wishes to clear only
some of the entries from the Translation Buffer,
<b>KRE</b> Code running in kernel mode can read this page,
<b>URE</b> Code running in user mode can read this page,
<b>GH</b> Granularity hint used when mapping an entire block with a single Translation.
Buffer entry rather than many,
<b>KWE</b> Code running in kernel mode can write to this page,
<b>UWE</b> Code running in user mode can write to this page,

<b>page frame number</b> For PTEs with the V bit set, this field contains the physical Page
Frame Number (page frame number) for this PTE. For invalid PTEs, if this field is not
zero, it contains information about where the page is in the swap file.
The following two bits are defined and used by Linux:
<b>PAGE DIRTY</b> if set, the page needs to be written out to the swap file,
<b>PAGE ACCESSED</b> Used by Linux to mark a page as having been accessed.

TLB, Translation Lookaside Buffers
A major disadvantage of using page tables is that a page table must be accessed for
every memory reference. On a system with a single-level page table, this doubles the
number of memory accesses, since each load or store operation requires one memory
reference to access the appropriate page table and one to perform the actual
load/store. This greatly increases the latency of a memory reference.

The problem is even greater on multi-level page tables, because multiple references
are required to traverse the page table. To reduce penalty, CPUs that incorporate
virtual memory use Translation Looaside Buffers ( TLBs) that act as caches for the
page table. Whenever a program performs a memory reference the virtual address is sent
to the TLB to determine if it contains a translation for that address. If so, the TLB
returns the physical address and the memory reference continues.

If not, a TLB miss occurs and the system searches the page table for a translation.
Some systems provide hardwaresupport for a TLB miss while others require the OS to
access the page table thru software.

<a href="http://www.minhinc.com/image/li-slide-tlb.png"><img class="img" src="http://www.minhinc.com/image/li-slide-tlb_s.png" /></a>

TLB misses versus Page Faults
In a system that supports TLBs, 3 possible cases exist:
1. Hit in the TLB : The TLB contains the physical address and it is returned
immediately. 
2. TLB miss, but page mapped : In this case the system accesses the page table from
memory to find the translation for the virtual address, copies that translation into
TLB returns the memory reference
3. TLB miss and page not mapped: The system accesses the page table and finds that its
is not mapped. This results in a page fault. The O.S loads the page's data from disk
in the same manner as a virtual memory system that does not contain TLB.

TLB misses and page faults are handled very differently by the O.S because of the
difference in the amount of time it takes to resolve each event.

TLB misses generally take a short time to resolve if the page is mapped and normally
takes a few hundred cycles so user programs can just wait for its completion.

TLB misses that result in a page fault can take a few milliseconds which is the amount
of time slice generally given to a process. Therefore, a page fault can trigger a
context switch through invoking the scheduler while the page fault is being resolved.

</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main8" class="pn">p69</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<img class="img" src="http://www.minhinc.com/image/li-slide-tlborgnization.png" />

TLB Entry
TLBs are organized similar to caches having an associativity and number of sets. While
cache sizes are typically described in bytes, TLBs are in number of entres or
translations contained in them, since the amount of space taken up by each entry is
mostly irrelevant to the performance of the system.

This a 128-entry, 4-way set-associative TLB would have 32 sets each containing 4
entries.

The TLB entry contains the VPN of the page that it is a translation for, which is
compared to the VPN of the address of a memory reference to determine if a hit has
occurred.

Like a cache's tag array entry, bits of the VPN used to select an entry in the TLB are
omitted to save space. All the bits of the PPN are stored however, since they may
differ from the corresponding bits in the VPN.

</pre> &nbsp;<div class="slideheader" style="height:175px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  8. Memory Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Defining and Creating secondary memory
areas
</pre></li>   <li class="sml"><pre>Memory allocation & deallocation system
calls malloc, calloc, alloca, free
</pre></li>   <li class="sml"><pre>Virtual Memory Management
</pre></li>   <li class="sml"><pre>Address Translation and page fault
handling
</pre></li>   <li class="big"><a name="chap8_4">Demand Paging defined</a></li>   <li class="sml"><pre>Process Organization in Memory</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Demand Paging
As there is much less physical memory than virtual memory the operating system must be
careful that it does not use the physical memory inefficiently. One way to save
physical memory is to only load virtual pages that are currently being used by the
executing program. 

This technique of only loading virtual pages into memoryas they are accessed is known
as demand paging.

When a process attempts to access a virtual address that is not currently in memory
the processor cannot find a page table entry for the virtual page referenced. For
Example in previous figure there is no entry in process X's page table for virtual
page frame number 2 and so if process X attempts to read from an address within
virtual page frame number 2 the processor cannot translate the address into a physical
one. At this point the processor notifies the operating system that a page fault has
Occurred.

If the faulting virtual address is invalid this means that the process has attempted
to access a virtual address that it should not have. Maybe the application has gone
wrong in some way, for example writing to random addresses in memory. In this case the
operating system will terminate it, protecting the other processes in the system from
this rogue process.

If the faulting virtual address was valid but the page that it refers to is not
currently in memory, the operating system must bring the appropriate page into memory
from the image on disk. 

The fetched page is written into a free physical page frame and an entry for the
virtual page frame number is added to the processes page table. The process is then
restarted at the machine instruction where the memory fault occurred. This time the
virtual memory access is made, the processor can make the virtual to physical address
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main8" class="pn">p70</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
translation and so the process continues to run.

Linux uses demand paging to load executable images into a processes virtual memory. 
Whenever a command is executed, the file containing it is opened and its contents are
mapped into the processes virtual memory. This is done by modifying the data
structures describing this processes memory map and is known as memory mapping.

However, only the first part of the image is actually brought into physical memory. 
The rest of the image is left on disk. As the image executes, it generates page faults
and Linux uses the processes memory map in order to determine which parts of the image
to bring into memory for execution.

<img class="img" src="http://www.minhinc.com/image/li-slide-demandpaging.png" />

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main8" class="pn">p71</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:175px">
  <pre class="day">Day 3 Morning</pre>
  <pre class="topic">  8. Memory Management</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Defining and Creating secondary memory
areas
</pre></li>   <li class="sml"><pre>Memory allocation & deallocation system
calls malloc, calloc, alloca, free
</pre></li>   <li class="sml"><pre>Virtual Memory Management
</pre></li>   <li class="sml"><pre>Address Translation and page fault
handling
</pre></li>   <li class="sml"><pre>Demand Paging defined
</pre></li>   <li class="big"><a name="chap8_5">Process Organization in Memory</a></li>
  </ul>
 </div>
<pre class="slidecontent">

Process Address Space

<img class="img" src="http://www.minhinc.com/image/li-slide-processorganization.png" />

</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main8" class="pn">p72</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap9">&nbsp;<div class="slideheader" style="height:115px">
  <pre class="day">Day 4 Morning</pre>
  <pre class="topic">  9. Multi Thread Programming</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap9_0">Creating multiple threads</a></li>   <li class="sml"><pre>Parent synchronization with other Thread
</pre></li>   <li class="sml"><pre>System calls</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

Introduction
* Thread is a sequential flow of control through a program.
* If a process is defined as a program in execution then a thread is defined as a
function in execution.
* If a thread is created, it will execute a specified function.
* Two type of threading:
- Single Threading
- Multi threading


POSIX Thread
The created threads within a process share
instructions of a process 
process address space and data 
open file descriptors
pwd, uid and gid

The created threads maintain its own:
thread identification number (tid)
pc, sp, set of registers
stack
Signal Handlers priority of the threads scheduling policy

Advantages of Threads:
Takes less time for:
* Creation of a new thread
* Termination of a thread
* Communication between threads are easier.


There are two broad categories of thread
implementation:
1. User level Threads (ULT)
2. Kernel level threads (or kernel-supported threads or Light weight processes)

Thread management
Thread management is done by the application and the kernel is not aware of the
existence of threads.
* Thread library contains code for creating and destroying threads, passing messages
and data between threads, for scheduling thread execution and for saving and restoring
thread contexts.
* This thread application are allocated to a single process managed by the kernel.
* All the activity takes place in user space and within a single process. The kernel
continues to schedule the process as a unit and assigns a single execution state to
that process.


ULT
Advantages:
* Thread switching does not require kernel mode.
* Scheduling can be application specific.
* Can run on any OS.
Disadvantages:
* When it executes a system call, not only is that thread is
blocked, but all the threads within the process are blocked.

KLT
Kernel Level Threads:
* Thread management is done by the kernel
- Advantage: If one thread in a process is blocked, kernel can schedule another thread
of the same process.
- Disadvantage: Transfer of control from one thread to another within the same process
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main9" class="pn">p73</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
requires a mode switch to the kernel


Advantages of Multi Threading
Improve application responsiveness
Use multiprocessors more efficiently
Improve program structure
use fewer system resources
Specific applications in uniprocessor machines
Applications
 A file server on a LAN
 Graphical User Interfaces (GUIs)
  web applications

</pre> &nbsp;<div class="slideheader" style="height:115px">
  <pre class="day">Day 4 Morning</pre>
  <pre class="topic">  9. Multi Thread Programming</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Creating multiple threads
</pre></li>   <li class="big"><a name="chap9_1">Parent synchronization with other Thread</a></li>   <li class="sml"><pre>System calls</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Parent wait on join() system call to let children join them
Hello Thread Example
<pre class="code">#include &lt;pthread.h&gt;
void thread_function (void) {
printf (" Hello POSIX Thread\n");
printf ("Thread id: %d\n", pthread_self());
}
main ( ) {
pthread_t mythread;
pthread_create ( &amp;mythread, NULL, thread_function, NULL);
pthread_join (mythread, NULL);
}
</pre>$cc thread.c -lpthread

</pre> &nbsp;<div class="slideheader" style="height:115px">
  <pre class="day">Day 4 Morning</pre>
  <pre class="topic">  9. Multi Thread Programming</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Creating multiple threads
</pre></li>   <li class="sml"><pre>Parent synchronization with other Thread
</pre></li>   <li class="big"><a name="chap9_2">System calls</a></li>
  </ul>
 </div>
<pre class="slidecontent">

<b>1. pthread_create</b>

<pre class="code">#include &lt;pthread.h&gt;
</pre>
int pthread_create(pthread_t *restrict thread,  const pthread_attr_t *restrict attr,
void *(*start_routine)(void*), void *restrict arg);

The pthread_create() function shall create a new thread, with attributes specified by
attr, within a process. If attr is NULL, the default attributes shall be used. If the
attributes specified by attr are modified later, the thread's attributes shall not be
affected. Upon  successful completion, pthread_create() shall store the ID of the
created thread in the location referenced by thread.

<pre class="codec">#include&lt;stdio.h&gt;
#include&lt;unistd.h&gt;
#include&lt;stdlib.h&gt;
#include&lt;pthread.h&gt;
#include&lt;string.h&gt;

void *thread_fun(void *arg);

char message[]="hello world";

int main()
{
int res;
pthread_t a_thread;
void *thread_result;

res=pthread_create(&amp;a_thread,NULL,thread_fun,(void *)message);
if(res !=0){
 perror("unable to create thread\n");
 exit(1);
}
printf("waiting for thread to finish\n");
//Thread joining, catch exit value from the thread	
res=pthread_join(a_thread,&amp;thread_result);

if(res !=0){
 perror("unable to join thread\n");
 exit(1);
}

printf("thread joined , it returned %s\n",(char *)thread_result);
printf("Message is now %s\n",message);
exit(0);
}

void *thread_fun(void *arg)
{
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main9" class="pn">p74</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="codec">printf("thread fun ,arg is %s\n",(char *)arg);
sleep(3);
strcpy(message,"bye");
//exit with return value
pthread_exit("thank you");
}
</pre>
<b>2. pthread_key_create</b>
<pre class="code">#include &lt;pthread.h&gt;

int pthread_key_create(pthread_key_t *key, void (*destructor)(void*));
 pthread_key_create - thread-specific data key creation
</pre>
The pthread_key_create() function shall create a thread-specific data key visible to
all threads in the process. Key values provided by pthread_key_create() are opaque
objects used to locate thread-specific data. Although the same key value may be used
by different threads, the values bound to the key by pthread_setspecific() are
maintained on a per-thread basis and persist for the life of the calling thread. 

Upon key creation, the value NULL shall be associated with the new key in all active
threads. Upon thread creation, the value NULL shall be associated with all defined
keys in the new thread.

<pre class="codec">#include &lt;malloc.h&gt;
#include &lt;pthread.h&gt;
#include &lt;stdio.h&gt;
#include&lt;stdlib.h&gt; 
#include&lt;unistd.h&gt; 

/* The key used to associate a log file pointer with each thread. */
static pthread_key_t thread_log_key;

/* Write MESSAGE to the log file for the current thread. */

void write_to_thread_log (const char* message)
{
FILE* thread_log = (FILE*) pthread_getspecific (thread_log_key);
fprintf (thread_log, "%s\n", message);
}

/* Close the log file pointer THREAD_LOG. */
void close_thread_log (void* thread_log)
{
fclose ((FILE*) thread_log);
}


void* thread_function (void* args)
{
char thread_log_filename[20];
FILE* thread_log;
/* Generate the filename for this thread's log file. */
sprintf (thread_log_filename, "thread%d.log", (int) pthread_self ());
/* Open the log file. */
thread_log = fopen (thread_log_filename, "w");
/* Store the file pointer in thread-specific data under thread_log_key. */
pthread_setspecific (thread_log_key, thread_log);
write_to_thread_log ("Thread starting.");
/* Do work here... */
return NULL;
}
main ()
{
int i;
pthread_t threads[5];

/* Create a key to associate thread log file pointers in
thread-specific data. Use close_thread_log to clean up the file
pointers. */

pthread_key_create (&amp;thread_log_key, close_thread_log);

/* Create threads to do the work. */
for (i = 0; i &lt; 5; ++i)
pthread_create (&amp;(threads[i]), NULL, thread_function, NULL);

/* Wait for all threads to finish. */

for (i = 0; i &lt; 5; ++i)
pthread_join (threads[i], NULL);
return 0;
}
</pre>
<b>3. pthread_mutex_init</b>
<pre class="code">#include &lt;pthread.h&gt;

int pthread_mutex_destroy(pthread_mutex_t *mutex);
int pthread_mutex_init(pthread_mutex_t *restrict mutex, const pthread_mutexattr_t
*restrict attr);
pthread_mutex_t mutex = PTHREAD_MUTEX_INITIALIZER;
</pre>
The pthread_mutex_destroy() function shall destroy the mutex object referenced by
mutex; the mutex object becomes, in effect, uninitialized. An implementation may cause
pthread_mutex_destroy() to set the object referenced by mutex to an invalid value. A
destroyed mutex object can be reinitialized using pthread_mutex_init(); the results of
oth erwise referencing the object after it has been destroyed are undefined.
It shall be safe to destroy an initialized mutex that is unlocked. Attempting to
destroy a locked mutex results in undefined behavior.

The pthread_mutex_init() function shall initialize the mutex referenced by mutex with
attributes specified by attr. If attr is NULL, the default mutex attributes are used;
the effect shall be the same as passing the address of a default mutex attributes
object. Upon successful initialization, the state of the mutex becomes initialized and
unlocked.

<pre class="codec">#include&lt;stdio.h&gt;
#include&lt;unistd.h&gt;
#include&lt;stdlib.h&gt;
#include&lt;string.h&gt;
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main9" class="pn">p75</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="codec">#include&lt;pthread.h&gt;
#include&lt;semaphore.h&gt;

void *thread_fun(void *arg);

pthread_mutex_t work_mutex;

char work_area[1024];
int time_to_exit=0;
int main()
{
int res;
pthread_t a_thread;
void *thread_result;
	
res=pthread_mutex_init(&amp;work_mutex,NULL);//initialize mutex  default attr
res=pthread_create(&amp;a_thread,NULL,thread_fun,NULL);
pthread_mutex_lock(&amp;work_mutex); //put a lock to the main thread, then enjoy
	
printf("input some text enter end to finish\n");
while(!time_to_exit)	{
 fgets(work_area,1024,stdin);

 //unlock the main thread,your subordinate is waiting 
 pthread_mutex_unlock(&amp;work_mutex); 
 while(1){
  pthread_mutex_lock(&amp;work_mutex);//lock it is your turn
  if(work_area[0] != '\0') {
   pthread_mutex_unlock(&amp;work_mutex);
   sleep(1);
  }
  else
  break;

 }
}

pthread_mutex_unlock(&amp;work_mutex);
printf("waiting for thread to finish\n");
res=pthread_join(a_thread,&amp;thread_result);
printf("thread joined , it returned %s\n",(char *)thread_result);
pthread_mutex_destroy(&amp;work_mutex);
exit(0);
}


void *thread_fun(void *arg)
{
sleep(1);//Sleep well Let main thread send some data
pthread_mutex_lock(&amp;work_mutex);//lock the curr thread
while(strncmp("end",work_area,3) !=0)
{
 printf("you entered %d characters \n",strlen(work_area) -1);	
 work_area[0]='\0';
 pthread_mutex_unlock(&amp;work_mutex);//unlock the current thread
 sleep(1);//Sleep well , Let main thread do it's job
 pthread_mutex_lock(&amp;work_mutex);
 while(work_area[0] == '\0')
 {
  pthread_mutex_unlock(&amp;work_mutex);
  sleep(1);
  pthread_mutex_lock(&amp;work_mutex);
 }
}
time_to_exit=1;
work_area[0]='\0';	
pthread_mutex_unlock(&amp;work_mutex);

pthread_exit("thank you");

}//End of the function
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main9" class="pn">p76</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap10">&nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 4 Morning</pre>
  <pre class="topic">  10. Inter process communication</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap10_0">Pipes</a></li>   <li class="sml"><pre>Fifo's
</pre></li>   <li class="sml"><pre>Signals
</pre></li>   <li class="sml"><pre>System-V IPC's
 - Message queues
</pre></li>   <li class="sml"><pre> - Shared memory
</pre></li>   <li class="sml"><pre> - Semaphore</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

Persistence of various ipcs
<img class="img" src="http://www.minhinc.com/image/li-slide-ipc.png" />

Unnamed Pipe or Pipe

On command line pipe is represented as "|"
* It can be used in the shell to link two or more commands
- For example ls <pre class="code" style="display:inline">-Rl | wc</pre>
* Two ends of a pipe is represented as a set of two descriptors.
* A pipe is used to communicate between related Processes (common ancestor). Normally,
a pipe is created by a process, that process calls fork, and the pipe is used between
the parent and the child.

* Half duplex
* Data is passed in order.
* Pipe uses circular buffer and it has zero buffering capacity
* The read and write system calls are blocking calls.

<pre class="code">#include &lt;unistd.h&gt;
int fd[2];
</pre>
<img class="img" src="http://www.minhinc.com/image/li-slide-pipesimplex.png" />

<pre class="code">int pipe(int fd[2]);
</pre>
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main10" class="pn">p77</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<img class="img" src="http://www.minhinc.com/image/li-slide-pipekernelsimplex.png" />

One Way Communication between parent and child

Create a pipe.
* Call fork.
* Parent can send data and child can read the data or vice versa.
* Unused ends (descriptors) should be closed.

<img class="img" src="http://www.minhinc.com/image/li-slide-pipefork.png" />

parent closes the read end of the pipe (fd[0]), and the child closes the write end
(fd[1]). 

<img class="img" src="http://www.minhinc.com/image/li-slide-pipeforksimplex.png" />

</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main10" class="pn">p78</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
Two way Communication
* Create two pipes say fd1, fd2.
* Four descriptors for each process (<pre class="code" style="display:inline">fd1[0],fd1[1],fd2[0],fd2[1]</pre>)
* Parent closes read end of fd1 and write end of fd2
<pre class="code">- close(fd1[0], fd2[1]);
</pre>* child closes read end of fd2 and write end of fd1
<pre class="code">- close(fd2[0], fd1[1]);
</pre>
<img class="img" src="http://www.minhinc.com/image/li-slide-pipetwowaycommunication.png" />

Pipe : Advantages &amp; Disadvantages
Advantages:
* Simplest form of IPC
* Persistence in process level
* Can be used in shell

Disadvantages:
* Cannot be used to communicate between unrelated processes

<b>popen</b> and <b>pclose</b> Functions

The function popen does a fork and exec to execute the cmdstring and returns a
standard I/O file pointer. If type is "r", the file pointer is connected to the
standard output of cmdstring.
If type is "w", the file pointer is connected to the standard input of cmdstring.

<pre class="code">#include &lt;stdio.h&gt;
FILE *popen(const char *cmdstring, const char *type);
          Returns: file pointer if OK, NULL on error
int pclose(FILE *fp);
          Returns: termination status of cmdstring, or -1 on error
</pre>
<img class="img" src="http://www.minhinc.com/image/li-slide-pipepopen.png" />

Result of <pre class="code" style="display:inline">fp = popen(cmdstring, "r")</pre>
<img class="img" src="http://www.minhinc.com/image/li-slide-pipepopenresult.png" />

SIMPLEX PIPE

<pre class="code"></pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main10" class="pn">p79</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">#include&lt;stdio.h&gt;
#include&lt;stdlib.h&gt; 
#include&lt;unistd.h&gt; 
main() {
int pipefd[2],n;
char buff[100];

if(pipe(pipefd) &lt; 0) //create a pipe with two descriptors
 perror("filed in openning pipe\n");
printf("read fd = %d, write fd = %d\n",pipefd[0],pipefd[1]);

//write into the pipe's write decriptor
if(write(pipefd[1],"hello world.....!",18)!= 18)
 perror("filed in writing pipe\n");

//read from the pipe's read decriptor
if((n = read(pipefd[0],buff,sizeof(buff))) &lt; 0)
 perror("filed in writing pipe\n");

write(1 , buff, n);     //write to the stdout
exit(0);
}
</pre>
DUPLEX PIPE

<pre class="codec">#include &lt;stdio.h&gt;
#include&lt;stdlib.h&gt; 
#include&lt;unistd.h&gt; 
#include &lt;string.h&gt;
# define MAXBUF 1024
void client(int  readfd,  int writefd) {
char buff[MAXBUF];
int n;
puts("Enter file name\n");
scanf("%s",buff);
n = strlen(buff);
if(buff[n-1] == '\n') n--;
if(write(writefd,buff, n) !=n) perror("client: write error\n");
while((n = read(readfd,buff,MAXBUF)) &gt; 0){
 if(write(1,buff,n)!= n)
  perror("client: error\n");
}
if(n &lt; 0)
 perror("Client: write error\n");
}

void server(int readfd,int  writefd) {
char    buff[MAXBUF];
int     n, fd;
if((n = read(readfd, buff, MAXBUF)) &lt;= 0) perror("server: read error\n");
buff[n] = '\0';
if((fd = open(buff,0)) &lt; 0) perror("server:open error\n");
while((n = read(fd,buff,MAXBUF)) &gt; 0) if(write(writefd,buff,n)!= n) perror("server:
write error\n");
 if(n &lt; 0) perror("server : read error\n");
}

main() {
int     pipefd1[2], pipefd2[2], childfd, n;
char    buff[100];
if(pipe(pipefd1) &lt; 0 || pipe(pipefd2) &lt; 0) perror("filed in openning pipes\n");
if((childfd = fork()) &lt; 0){
perror("can't fork");
close(pipefd1[0]);
close(pipefd1[1]);
close(pipefd2[0]);
close(pipefd2[1]);
}
else if(childfd &gt; 0){           //Parent process
close(pipefd1[0]);      //read1
close(pipefd2[1]);      //write2
client(pipefd2[0],pipefd1[1]);
while(wait(( int *) 0)!= childfd);
close(pipefd1[1]);
close(pipefd2[0]);
} else {                        // child process
close(pipefd1[1]);      // write1
close(pipefd2[0]);      // read2
server(pipefd1[0],pipefd2[1]);
close(pipefd1[0]);
close(pipefd2[1]);
}       
exit(0);
}
</pre>
</pre> &nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 4 Morning</pre>
  <pre class="topic">  10. Inter process communication</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Pipes
</pre></li>   <li class="big"><a name="chap10_1">Fifo's</a></li>   <li class="sml"><pre>Signals
</pre></li>   <li class="sml"><pre>System-V IPC's
 - Message queues
</pre></li>   <li class="sml"><pre> - Shared memory
</pre></li>   <li class="sml"><pre> - Semaphore</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

FIFO: Introduction
* FIFO works much like a pipe
 -Half duplex, data passed in FIFO order, circular buffer
and zero buffering capacity.
* FIFO is created on a file system as a device
special file
* It can be used to communicate between unrelated
processes
* It can be reused.
* Persist till the file is deleted.


</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main10" class="pn">p80</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
FIFO Creation
* FIFO can be created in a shell by using mknod or
mkfifo command.
 - mknod myfifo p
 - mkfifo a=rw myfifo
* In a C program mknod system call or mkfifo library function can be used.
 - int mkfifo ( char *file_name, mode_t mode);
 - int mknod (char *file_name, mode_t mode, dev_t dev);
* mknod("./MYFIFO", S_IFIFO|0666, 0);

Using FIFO
* Once a FIFO is created either from a shell or through a program, file's related
system calls (open, read, write, select, close etc., ) are used to access the FIFO.
* For example: Process 1 may open a FIFO in write only mode and write some data.
* Process 2 may open the FIFO in read only mode, read the data and display on the
monitor.

FIFO: Disadvantages
* Data cannot be broadcast to multiple receivers.
* If there are multiple receivers, there is no way to direct to a specific reader or
vice versa.
* Cannot be used across network
* Less secure than a pipe, since any process with valid access permission can access
data.
* Cannot store data
* No message boundaries. Data is treated as a stream of Bytes.

<pre class="codec">#include &lt;stdio.h&gt;
#include&lt;stdio.h&gt;
#include&lt;stdlib.h&gt; 
#include &lt;string.h&gt;

# define FIFO1  "/tmp/fifo1" //fifos can be created in users home
# define FIFO2  "/tmp/fifo2" //directory also.

# define MAXBUF 1024

void client(int  readfd,  int writefd) {
char buff[MAXBUF];
int n;
puts("Enter file name\n");
scanf("%s",buff);       //reading file name
n = strlen(buff);
if(buff[n-1] == '\n') n--;
if(write(writefd,buff, n) !=n) //writing file name into fifo
perror("client: write error\n");
while((n = read(readfd,buff,MAXBUF)) &gt; 0) if(write(1,buff,n)!= n) perror("client:
error\n");
if(n &lt; 0) perror("Client: write error\n");
}

void server(int readfd,int  writefd) {
char buff[MAXBUF];
int n, fd;
if((n = read(readfd, buff, MAXBUF)) &lt;= 0) perror("server: read error\n");
buff[n] = '\0';
if((fd = open(buff,0)) &lt; 0) perror("server:open error\n");
while((n = read(fd,buff,MAXBUF)) &gt; 0) if(write(writefd,buff,n)!= n) perror("server:
write error\n");
if(n &lt; 0) perror("server : read error\n");
}

main() {
int     readfd, writefd ,pid;
//fifo is created with user read and write //permission.
if((mkfifo(FIFO1, 0666)) &lt; 0){
perror("Fifo1 failed\n");
exit(1);
}
if((mkfifo(FIFO2, 0666)) &lt; 0){
perror("Fifo1 failed\n");
exit(2);
}
if((pid = fork()) == 0){
readfd = open(FIFO1, 0, 0);//child opens fifo1 for read
writefd = open(FIFO2, 1, 0);//child opens fifo2 for write
//child process calls server function 
server(readfd, writefd);
exit(3);
}
writefd = open(FIFO1, 1, 0);
readfd = open(FIFO2, 0, 0);
//Parent becomes client process
client(readfd, writefd);

//parent wait till exit status returned is equal to pid(current child)  
waitpid(pid,NULL,0);    
close(readfd);
close(writefd);

unlink(FIFO1);  //removing fifo from /tmp
unlink(FIFO2);
exit(0);
}
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main10" class="pn">p81</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 4 Morning</pre>
  <pre class="topic">  10. Inter process communication</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Pipes
</pre></li>   <li class="sml"><pre>Fifo's
</pre></li>   <li class="big"><a name="chap10_2">Signals</a></li>   <li class="sml"><pre>System-V IPC's
 - Message queues
</pre></li>   <li class="sml"><pre> - Shared memory
</pre></li>   <li class="sml"><pre> - Semaphore</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

The common communication channel between user space program and kernel is given by the
system calls.
But there is a different channel, that of the signals, used both between user
processes and from kernel to user process.

Sending Signals
A program can signal a different program using the kill() system call with prototype
<pre class="code">int kill(pid_t pid, int sig);
</pre>This will send the signal with number sig to the process with process ID pid . Signal
numbers are small positive integers.

Receiving signals
<pre class="code">typedef void (*sighandler_t)(int);
sighandler_t signal(int sig, sighandler_t handler);

Signal     Value     Action   Comment
-------------------------------------------------
SIGHUP        1       Term    Hangup detected on controlling terminal or death of
controlling process
SIGINT        2       Term    Interrupt from keyboard
SIGQUIT       3       Core    Quit from keyboard
SIGILL        4       Core    Illegal Instruction
SIGABRT       6       Core    Abort signal from abort(3)
SIGFPE        8       Core    Floating point exception
SIGKILL       9       Term    Kill signal
SIGSEGV      11       Core    Invalid memory reference
SIGPIPE      13       Term    Broken pipe: write to pipe with no
readers
SIGALRM      14       Term    Timer signal from alarm(2)
SIGTERM      15       Term    Termination signal
SIGUSR1   30,10,16    Term    User-defined signal 1
SIGUSR2   31,12,17    Term    User-defined signal 2
SIGCHLD   20,17,18    Ign     Child stopped or terminated
SIGCONT   19,18,25    Cont    Continue if stopped
SIGSTOP   17,19,23    Stop    Stop process
SIGTSTP   18,20,24    Stop    Stop typed at terminal
SIGTTIN   21,21,26    Stop    Terminal input for background process
SIGTTOU   22,22,27    Stop    Terminal output for background process
</pre>
The signals SIGKILL and SIGSTOP cannot be caught, blocked, or ignored.

Signals not in the POSIX.1-1990 standard but described in SUSv2 and POSIX.1-2001.
<pre class="code">Signal       Value     Action   Comment
--------------------------------------------------------------
SIGBUS      10,7,10     Core    Bus error (bad memory access)
SIGPOLL                 Term    Pollable event (Sys V).
Synonym for SIGIO
SIGPROF     27,27,29    Term    Profiling timer expired
SIGSYS      12,31,12    Core    Bad argument to routine (SVr4)
SIGTRAP        5        Core    Trace/breakpoint trap
SIGURG      16,23,21    Ign     Urgent condition on socket (4.2BSD)
SIGVTALRM   26,26,28    Term    Virtual alarm clock (4.2BSD)
SIGXCPU     24,24,30    Core    CPU time limit exceeded (4.2BSD)
SIGXFSZ     25,25,31    Core    File size limit exceeded (4.2BSD)
</pre>
various other signals.
<pre class="code">Signal       Value     Action   Comment
-------------------------------------------------
SIGIOT         6        Core    IOT trap. A synonym for SIGABRT
SIGEMT       7,-,7      Term
SIGSTKFLT    -,16,-     Term    Stack fault on coprocessor (unused)
SIGIO       23,29,22    Term    I/O now possible (4.2BSD)
SIGCLD       -,-,18     Ign     A synonym for SIGCHLD
SIGPWR      29,30,19    Term    Power failure (System V)
SIGINFO      29,-,-             A synonym for SIGPWR
SIGLOST      -,-,-      Term    File lock lost (unused)
SIGWINCH    28,28,20    Ign     Window resize signal (4.3BSD, Sun)
SIGUNUSED    -,31,-     Core    Synonymous with SIGSYS
</pre>
Blocking signals
Each process has a list (bitmask) of currently blocked signals. When a signal is
blocked, it is not delivered (that is, no signal handling routine is called), but
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main10" class="pn">p82</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
remains pending.
<pre class="code">The sigprocmask() system call serves to change the list of blocked signals. See
sigprocmask(2).
The sigpending() system call reveals what signals are (blocked and) pending.
The sigsuspend() system call suspends the calling process until a specified signal is
received.
</pre>When a signal is blocked, it remains pending, even when otherwise the process would
ignore it.

wait and SIGCHLD
Whenever the child (it exits, crashes, traps, stops, continues), and in particular
when it dies, the parent is sent a SIGCHLD signal. If parent handles it then

The parent can use the system call wait() or waitpid() or so, there are a few
variations, to learn about the status of its stopped or deceased children. In the case
of a deceased child, as soon as a status has been reported, the zombie vanishes.

If the parent is not interested it can say so explicitly (before the fork) using

<pre class="code">signal(SIGCHLD, SIG_IGN);
or
struct sigaction act;
act.sa_handler = something;
act.sa_flags = SA_NOCLDWAIT;
sigaction (SIGCHLD, &amp;act, NULL);
</pre>
and as a result it will not hear about deceased children, and children will not be
transformed into zombies. Default action for SIGCHLD is to ignore the signal but it
would create zombie child process.

Returning from a signal handler
When the program was interrupted by a signal, its status (including all integer and
floating point registers) was saved, to be restored just before execution continues at
the point of interruption.
This means that the return from the signal handler is more complicated than an
arbitrary procedure return - the saved state must be restored.
To this end, the kernel arranges that the return from the signal handler causes a jump


<pre class="code"># include &lt;stdio.h&gt;
# include &lt;signal.h&gt;
# include &lt;unistd.h&gt;
void    sig_fun(int);
main() {
struct sigaction  signalact;
signalact.sa_handler = sig_fun;
sigemptyset(&amp;signalact.sa_mask);
signalact.sa_flags =0;
sigaction(SIGINT, &amp;signalact, 0);
while(1){
 printf("hello world\n");
 sleep(1);
}
}
void    sig_fun(int signal) {
 printf("Hi, I got signal: %d\n",signal);
}
</pre>
SIGCHLD
<pre class="code"># include &lt;signal.h&gt;
void sig_init(void);
main() {
 unsigned int pid, i;
 if((pid = fork()) == 0) sleep(1);
 else {
  signal(SIGCHLD,sig_init);
  for(i=0;i &lt; 1000000000;i++) ;
  printf("parent exiting\n");
 }
}
void sig_init(void)
{
 printf("child terminated\n");
}
</pre>
SIGUSER

<pre class="codec">#include&lt;stdio.h&gt;
#include&lt;signal.h&gt;
static void sighandler(int);
int main(void) {
int i,parentpid,childpid,status;
/*prepare the sighandler routine to catch SIGUSR1 and SIGUSR2 */
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main10" class="pn">p83</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="codec">if(signal(SIGUSR1,sighandler)==SIG_ERR) printf("Parent:Unable to create handler for
SIGUSR1\n");
parentpid=getpid();
if((childpid=fork())==0) {
 kill(parentpid,SIGUSR1);/* raise the SIGUSR1 signal*/
 printf("\nHi,child, I am here .............!\n\n");
 if(signal(SIGUSR2,sighandler)==SIG_ERR) printf("Child:Unable to create handler for
SIGUSR2\n");
 /*Child Process begins busy-wait for a signal*/
 printf("child,waiting for singnal\n");
 pause();
 //sleep(4);
 printf("child done %d\n",getpid());
}
else {
 kill(childpid,SIGUSR2);/* raise the SIGUSR2 signal*/
 printf("Parent:waiting for child to terminate.....\n");
 //sleep(1);
 wait(&amp;status);/*Parent waiting for the child termination*/
 //kill(parentpid,SIGTERM);/*Parent  raising the SIGTERM signal*/
 printf("parent done %d\n",getpid());
}
}
static void sighandler(int signo) {
switch(signo)
{
 case SIGUSR1:/* Incoming SIGUSR1 signal*/
  printf("Parent:Recieved SIGUSR1 \n");
  break;
 case SIGUSR2:/*Incoming SIGUSR2 signal*/
  printf("Recieved SIGUSR2\n");
  break;
 default:
  printf("This should not be printed\n");
}
 return;
}
</pre>
</pre> &nbsp;<div class="slideheader" style="height:166px">
  <pre class="day">Day 4 Morning</pre>
  <pre class="topic">  10. Inter process communication</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Pipes
</pre></li>   <li class="sml"><pre>Fifo's
</pre></li>   <li class="sml"><pre>Signals
</pre></li>   <li class="big"><a name="chap10_3">System-V IPC's<br> - Message queues</a></li>   <li class="sml"><pre> - Shared memory
</pre></li>   <li class="sml"><pre> - Semaphore</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Introduction
* Sys V IPC is implemented as a single unit.
* System V IPC Provides three mechanisms namely:
 - Message Queues
 - Shared Memory
 - Semaphores
* Persist till explicitly delete or reboot the system.

Common Attributes
Each IPC objects has the following attributes.
 key
 id
 Owner
 Permission
 Size
    - Message queue - used-bytes, number of messages
    - Shared memory - size, number of attach, status
    - Semaphore - number of semaphores in a set
    - The ipc_perm structure holds the common attributes of the resources.

System Limitations
$ ipcs -l
<pre class="code">------ Shared Memory Limits --------
max number of segments = 4096
max seg size (kbytes) = 32768
max total shared memory (kbytes) = 8388608
min seg size (bytes) = 1
------ Semaphore Limits --------
max number of arrays = 128
max semaphores per array = 250
max semaphores system wide = 32000
max ops per semop call = 32
semaphore max value = 32767
------ Messages: Limits --------
max queues system wide = 16
max size of message (bytes) = 8192
default max size of queue (bytes) = 16384
</pre>
Get a Key
* If we wish to communicate between different processes using an IPC resource, the
first step is to create a shared unique identifier.
* The simplest form of the identifier is a number - the system generates this number
dynamically for a given mechanism by using the ftok library function.
* But apart from the creator, other processes that want to communicate with the
creator process should agree to the key value.
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main10" class="pn">p84</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
* Syntax: key_t ftok (const char *filename, int id);


Get an id
The syntax for a get function is:
<pre class="code">  int xxxget (key_t key, int xxxflg);
</pre>  (xxx may be msg or shm or sem)
If successful, returns to an identifier; otherwise -1 for error.
The key can be generated in three different ways
  - from the ftok library function
  - by choosing some static positive integer value 
  - by using the IPC_PRIVATE macro
flags commonly used with this function are IPC_CREAT and IPC_EXCL.


Control an Object
The syntax for the control function is:
<pre class="code">   int xxxctl (int xxxid, int cmd, struct xxxid_ds *buffer); 
</pre>   (xxx may be msg or shm or sem);
If successful, the xxxctl function returns zero, otherwise it returns -1.
The command argument may be
 <pre class="code" style="display:inline">IPC_STAT</pre>
 <pre class="code" style="display:inline">IPC_SET</pre>
 <pre class="code" style="display:inline">IPC_RMID</pre>

Message Queues
* Message queue overcomes FIFO limitation like storing data and setting message
boundaries.
* Create a message queue
* Send message (s) to the queue
* Any process who has permission to access the queue can retrieve message (s).
* Remove the message queue.

Each queue has the following msqid_ds structure associated with it:

<pre class="code">struct msqid_ds {
struct ipc_perm msg_perm;
msgqnum_t msg_qnum; /*# of messages on queue */
msglen_t msg_qbytes; /*max # of bytes on queue */
pid_t msg_lspid; /*pid of last msgsnd() */
pid_t msg_lrpid; /*pid of last msgrcv() */
time_t msg_stime; /*last-msgsnd() time */
time_t msg_rtime; /*last-msgrcv() time */
ime_t msg_ctime; /*last-change time */
..
..
};
</pre>
msgget
<pre class="code">* int msgget (key_t key, int msgflg);
* The first argument key can be passed from the return value of the ftok function or
made IPC_PRIVATE.
* To create a message queue, IPC_CREAT ORed with access permission is set for the
msgflg argument.
* Ex: msgid = msgget (key, IPC_CREAT | 0744);
msgid = msgget (key, 0);
</pre>
msgsnd
<pre class="code">* The syntax of the function is:
* int msgsnd (int msqid, structu msgbuf *msgp, size_t msgsz, int msgflg);
* Arguments:
- message queue ID
- address of the structure.
- size of the message text
- message flag
* 0 or IPC_NOWAIT
struct mymesg {
long mtype;
/* positive message type */
char mtext[512]; /* message data, of length nbytes */
};
</pre>
msgrcv
 Syntax of the function is:
<pre class="code">ssize_t msgrcv (int msqid, struct msgbuf *msgp, size_t msgsz, long msgtype, int
msgflg);
</pre>
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main10" class="pn">p85</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
msgtype argument is used to retrieve a particular
message.
 0 -retrieve in FIFO order
 +ve - retrieve the the exact value of the message type
 -ve - first message or &lt;= to the absolute value. on success, msgrcv returns with the
number of bytes actually copied into the message text

Destroying a Message Queue
There are many ways:
* From command line, using one of the ways
- $ ipcrm msg msqid
- $ ipcrm -q msqid
- $ ipcrm -Q msgkey
* Using system call
- msgctl (msgid, IPC_RMID, 0);


Message Queue: Pseudo Code
<pre class="code">key = ftok (".", 'a');
msqid = msgget (key, IPC_CREAT|0666);
msgsnd (msqid, &amp;struct, sizeof (struct), 0);
msgrcv (msqid, &amp;struct, sizeof (struct), mtype, 0);
msgctl (msqid, IPC_RMID, NULL);
</pre>$ipcrm msg msqid

Limitations
* Message queues are effective if a small amount of data is transferred.
* Very expensive for large transfers.
* During message sending and receiving, the message is copied from user buffer into
kernel buffer and vice versa
* So each message transfer involves two data copy operations, which results in poor
performance of a system.
* A message in a queue can not be reused
Message send tests.c
<pre class="codes">#include&lt;sys/ipc.h&gt;
#include&lt;sys/types.h&gt;
#include&lt;sys/msg.h&gt;
#include&lt;unistd.h&gt;
#include&lt;stdlib.h&gt;
#include&lt;stdio.h&gt;
struct message
{
long mtype;
char mtext[50];
};
main()
{
struct message m1;
int msgid;
if((msgid=msgget(1,0666|IPC_CREAT))==-1) {
 perror("msgget");
 exit(1);
}
m1.mtype=getpid();
printf("Process id of the current process is:%ld\n",getpid());
printf("Enter the message you want to send to the queue\n");
fgets(m1.mtext,50,stdin);
if((n=msgsnd(msgid,&amp;m1,50,0))==-1) {
 perror("msgsnd");
 exit(1);
}
printf("Message successfully sent\n");
}

<pre class="code" style="display:inline">Message receive testr.c</pre>

#include&lt;sys/ipc.h&gt;
#include&lt;sys/types.h&gt;
#include&lt;sys/msg.h&gt;
#include&lt;unistd.h&gt;
#include&lt;stdlib.h&gt;
#include&lt;stdio.h&gt;
struct message {
 long mtype;
</pre><pre class=codes> char mtext[50];
};

main() {
struct message m1;
int msgid;
if((msgid=msgget(1,0666|IPC_CREAT))==-1) {
 perror("msgget");
 exit(1);
}
if(msgrcv(msgid,&amp;m1,10,0,MSG_NOERROR)==-1) {
 perror("msgsnd");
 exit(1);
}
printf("Message received from the process whose pid is:%ld\n",m1.mtype);
printf("And the message is:%s\n",m1.mtext);
}

<pre class="code" style="display:inline">Message control testc.c</pre>

#include&lt;sys/ipc.h&gt;
#include&lt;sys/types.h&gt;
#include&lt;sys/msg.h&gt;
#include&lt;unistd.h&gt;
#include&lt;stdlib.h&gt;
#include&lt;stdio.h&gt;
main(){
int msgid;
if((msgid=msgget(1,0))==-1) {
 perror("msgget");
 exit(1);
}
if(msgctl(msgid,IPC_RMID,0)==-1) {
 perror("msgctl");
 exit(1);
}
printf("Message queue successfully deleted\n");
}
</pre><pre style="clear:both"></pre>
</pre> &nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 4 Morning</pre>
  <pre class="topic">  10. Inter process communication</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Pipes
</pre></li>   <li class="sml"><pre>Fifo's
</pre></li>   <li class="sml"><pre>Signals
</pre></li>   <li class="sml"><pre>System-V IPC's
 - Message queues
</pre></li>   <li class="big"><a name="chap10_4"> - Shared memory</a></li>   <li class="sml"><pre> - Semaphore</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

Shared Memory
* Very flexible and ease of use.
* Fastest IPC mechanisms
* shared memory is used to provide access to
  Global variable
  Shared libraries
  Word processors
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main10" class="pn">p86</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
  Multi-player gaming environment
  Http daemons
  Other programs written in languages like Perl, C etc.,

<img class="img" src="http://www.minhinc.com/image/li-slide-sharedmemory.png" />

Shared Memory: Data Structures
The data structures used in shared memory are
  * shmid_ds
  * ipc_perm
  * Shminfo
  * shm_info
  * shmid_kernel

ipc_perm Structure
<pre class="codec">struct ipc_perm {
__key_t __key;  - Key
__uid_t uid     - Owner's user ID
__gid_t gid;    - Owner's group ID
__uid_t cuid;   - Creator's user ID
__gid_t cgid;   - Creator's group ID
unsigned short int mode; - r/w permission unsigned short int
__seq;                  - Sequence number
};
</pre>

shmid_ds
<pre class="codec">struct shmid_ds
{
struct ipc_perm shm_perm;
size_t shm_segsz;
__time_t shm_atime;
__time_t shm_dtime;
__time_t shm_ctime;
__pid_t shm_cpid;
__pid_t shm_lpid;
shmatt_t shm_nattch;
};
</pre>
Steps to Access Shared Memory
The steps involved are:
* Creating shared memory
* Connecting to the memory &amp; obtaining a pointer to the memory
* Reading/Writing &amp; changing access mode to the memory
* Detaching from memory
* Deleting the shared segment
shmat
* Used to attach the created shared memory segment onto a process address space.
* void *shmat(int shmid,void *shmaddr,int shmflg)
* Example: data=shmat(shmid,(void *)0,0);
* A pointer is returned on the successful execution of the system call and the process
can read or write to the segment using the pointer.


Reading / Writing to Shared Memory
* Reading or writing to a shared memory is the easiest
part.
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main10" class="pn">p87</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
* The data is written on to the shared memory as we do it
with normal memory using the pointers
* Eg. Read:
printf("SHM contents : %s \n", data);
* Eg. Write:
prinf("Enter a String : ");
scanf(" %[^\n]",data);


shmdt and shmctl
* The detachment of an attached shared memory segment is done by shmdt to pass the
address of the pointer as an argument.
* Syntax: int shmdt(void *shmaddr);
* To remove shared memory call:
int shmctl(shmid,IPC_RMID,NULL);
* These functions return -1 on error and 0 on successful execution.

Shared Memory: Pseudo Code
* shmid = shmget (key, 1024, IPC_CREAT|0744);
* void *shmat (int shmid, void *shmaddr, int shmflg);
      if the shm is read only pass SHM_RDONLY else 0
* (void *)data = shmat (shmid, (void *)0, 0);
* int shmdt (void *shmaddr);
* int shmctl (shmid, IPC_RMID, NULL);

Limitations
* Data can either be read or written only. Append is not allowed.
* Race condition
- Since many processes can access the shared memory, any modification done by one
process in the address space is visible to all other processes. Since the address
space is a shared resource, the developer should implement a proper locking mechanism
to prevent the race condition in the shared memory.  

Shared memory create
<pre class="codes">#include&lt;sys/ipc.h&gt;
#include&lt;sys/shm.h&gt;
#include&lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;string.h&gt;
main()
{
int shmid,pos;
char *msg;

if((shmid=shmget(110,1024,IPC_CREAT|0666))==-1) {
 perror("shmget");
 exit(1);
}

msg=shmat(shmid,0,0);

printf("Enter the data you want to write into shared memory\n");
fgets(msg,1024,stdin);
pos = strlen(msg);
strcpy(msg+pos-1,"World");
printf("Data successfully written\n");

shmdt(msg);
}

<pre class="code" style="display:inline">Shared memory read</pre>
#include&lt;sys/ipc.h&gt;
#include&lt;sys/shm.h&gt;
#include&lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;string.h&gt;
main()
{
int shmid;
char *msg;
</pre><pre class=codes>
if((shmid=shmget(110,1024,0666|IPC_CREAT))==-1) {
 perror("shmget"); //get shrdmry id
 exit(1);
}

msg=shmat(shmid,0,0);
printf("Data written in the shared memory is:%s\n",msg);

shmdt(msg); //to detach the memory location for further use
}

<pre class="code" style="display:inline">Shared memory control</pre>
#include&lt;sys/ipc.h&gt;
#include&lt;sys/shm.h&gt;
#include&lt;stdio.h&gt;
#include &lt;stdlib.h&gt;

main()
{
int shmid;

if((shmid=shmget(110,0,0))==-1)  //110 is key
{
 perror("shmid");
 exit(1);
}

if(shmctl(shmid,IPC_RMID,0)==-1) {
 perror("shmctl");
 exit(1);
}
printf("Shared memory successfully removed\n");
}
</pre><pre style="clear:both"></pre>
</pre> &nbsp;<div class="slideheader" style="height:155px">
  <pre class="day">Day 4 Morning</pre>
  <pre class="topic">  10. Inter process communication</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>Pipes
</pre></li>   <li class="sml"><pre>Fifo's
</pre></li>   <li class="sml"><pre>Signals
</pre></li>   <li class="sml"><pre>System-V IPC's
 - Message queues
</pre></li>   <li class="sml"><pre> - Shared memory
</pre></li>   <li class="big"><a name="chap10_5"> - Semaphore</a></li>
  </ul>
 </div>
<pre class="slidecontent">

Semaphores
* If a process wants to use the shared object, it will "lock" it by asking the
semaphore to decrement the counter
* Depending upon the current value of the counter, the semaphore will either be able
to carry out this operation, or will have to wait until the operation becomes possible
* The current value of counter is &gt;0, the decrement operation will be possible.
Otherwise, the process will have to wait

</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main10" class="pn">p88</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
System V IPC: Semaphores
* System V semaphore provides a semaphore set
- that can include a number of semaphores. It is up to user to decide the number of
semaphores in the set.
* Each semaphore in the set can be a binary or a counting semaphore. Each semaphore
can be used to control access to one resource - by changing the value of semaphore
count.  

Semaphore: Initialization
<pre class="codec">union semun {
int val;
// value for SETVAL
struct semid_ds *buf; // buffer for IPC_STAT, IPC_SET
unsigned short int *array; // array for GETALL, SETALL
};
union semun arg;
semid = semget (key, 1, IPC_CREAT | 0644);
arg.val = 1; /* 1 for binary else &gt; 1 for Counting Semaphore */
semctl (semid, 0, SETVAL, arg);
</pre>
Semaphore: Implementation
<pre class="codec">struct sembuf {
short sem_num; /* semaphore number: 0 means first */
short sem_op; /* semaphore operation: lock or unlock */
short sem_flg; /* operation flags : 0, SEM_UNDO, IPC_NOWAIT */
};
struct sembuf buf = {0, -1, 0}; /* (-1 + previous value) */
semid = semget (key, 1, 0);
semop (semid, &amp;buf, 1); /* locked */
-----Critical section--------
buf.sem_op = 1;
semop (semid, &amp;buf, 1); /* unlocked */

# include &lt;sys/types.h&gt;
# include &lt;sys/sem.h&gt;
# include &lt;sys/ipc.h&gt;
# include &lt;stdio.h&gt;
# include&lt;pthread.h&gt;
# include&lt;unistd.h&gt;
union semun{
	int val;
	struct semid_ds   *buf;
	unsigned short  array;

	struct seminfo    *__buff;
};

void * th_fun(void *);

union semun  u;
int    sid;
key_t  key;
int    pid,   sid;
struct sembuf su, sl;


main()
{
pthread_t	t1, t2, t3, t4;

unsigned short int  key;
key = ftok("semaphore.c",100);
sid = semget(key,1,IPC_CREAT | 0666);
printf("semaphore created by %d\n",getpid());
u.val = 2;
semctl(sid,0,SETVAL,u);
printf("Semaphore initialized to %d\n",u.val);

pid = getpid();

sl.sem_num = 0;
sl.sem_op = -1;
sl.sem_flg = SEM_UNDO ;
su = sl;
su.sem_op = 1;

pthread_create(&amp;t1, NULL, th_fun,"Thread One");
pthread_create(&amp;t2, NULL, th_fun,"Thread two");
pthread_create(&amp;t3, NULL, th_fun,"Thread three");
pthread_create(&amp;t4, NULL, th_fun,"Thread four");

pthread_join(t1,NULL);
pthread_join(t2,NULL);
pthread_join(t3,NULL);
pthread_join(t4,NULL);

//semctl(sid,0,IPC_RMID);
printf("Semaphore removed\n");
}
void * th_fun(void *p)
{
char   *str;
int i = 0;

str = (char * )p;
printf("%s is Trying to lock semaphore  %d\n\n",str, pid);
if(semop(sid,&amp;sl,1) == 0)
 printf("%s   Succedd in LOck   %d\n\n",str,pid);

while(++i &lt; 3)	{
 printf("%s   Resourec use here %d\n\n",str,pid);
 sleep(6);
}
semop(sid,&amp;su,1);
printf("%s  Unlock and Bye   %d\n\n",str,pid);
}
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main10" class="pn">p89</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap11">&nbsp;<div class="slideheader" style="height:125px">
  <pre class="day">Day 4 Morning</pre>
  <pre class="topic">  11. Sockets</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap11_0">An Overview</a></li>   <li class="sml"><pre>System calls related to
 - TCP
</pre></li>   <li class="sml"><pre>-UDP</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

A socket is an abstraction of a communication endpoint. Just as they would use file
descriptors to access files, applications use socket descriptors to access sockets.
Socket descriptors are implemented as file descriptors in the UNIX System. Indeed,
many of the functions that deal with file descriptors, such as read and write, will
work with a socket descriptor.

To create a socket, we call the socket function.

<pre class="code">#include &lt;sys/socket.h&gt;
int socket(int domain, int type, int protocol);
</pre>
Returns: file (socket) descriptor if OK, -1 on error

Domain

<img class="img" src="http://www.minhinc.com/image/li-slide-socketdomain.png" />

Type

<img class="img" src="http://www.minhinc.com/image/li-slide-sockettype.png" />

Protocol

<img class="img" src="http://www.minhinc.com/image/li-slide-socketprotocol.png" />
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main11" class="pn">p90</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<img class="img" src="http://www.minhinc.com/image/li-slide-socketprotocol1.png" />

<pre class="codec">socket() call is similar to open() system call.
slose - deallocates the socket
dup, dup2 - duplicates the file descriptor as normal
fchdir - fails with errno set to ENOTDIR
fchmod - unspecified
fchown - implementation defined
fcntl  -some commands supported, including F_DUPFD, F_DUPFD_CLOEXEC,          F_GETFD,
F_GETFL, F_GETOWN, F_SETFD, F_SETFL, and F_SETOWN
fdatasync, fsync  - implementation defined
fstat - some stat structure members supported, but how left up to the implementation
ftruncate - unspecified
ioctl - some commands work, depending on underlying device driver
lseek - implementation defined (usually fails with errno set to ESPIPE)
mmap - unspecified
poll  - works as expected
pread and pwrite  - fails with errno set to ESPIPE
read and readv - equivalent to recv without any flags
select  - works as expected
write  and writev - equivalent to send without any flags
</pre>
<pre class="code">#include &lt;sys/socket.h&gt;
int shutdown(int sockfd, int how);
</pre>
If how is SHUT_RD, then reading from the socket is disabled. If how is SHUT_WR, then
we can't use the socket for transmitting data. We can use SHUT_RDWR to disable both
data transmission and reception.

Given that we can close a socket, why is shutdown needed? There are several reasons.
First, close will deallocate the network endpoint only when the last active reference
is closed. If we duplicate the socket (with dup, for example), the socket won't be
deallocated until we close the last file descriptor referring to it. The shutdown
function allows us to deactivate a socket independently of the number of active file
descriptors referencing it. Second, it is sometimes convenient to shut a socket down
in one direction only. For example, we can shut a socket down for writing if we want
the process we are communicating with to be able to tell when we are done transmitting
data, while still allowing us to use the socket to receive data sent to us by the
process.

Byte Ordering
The TCP/IP protocol suite uses big-endian byte order.

<img class="img" src="http://www.minhinc.com/image/li-slide-endian.png" />

<pre class="code">#include &lt;arpa/inet.h&gt;
uint32_t htonl(uint32_t hostint32);
                     Returns: 32-bit integer in network byte order
uint16_t htons(uint16_t hostint16);
                     Returns: 16-bit integer in network byte order
uint32_t ntohl(uint32_t netint32);
                     Returns: 32-bit integer in host byte order
uint16_t ntohs(uint16_t netint16);
                     Returns: 16-bit integer in host byte order

struct sockaddr_in {
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main11" class="pn">p91</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="code">sa_family_t sin_family;  /* address family */
in_port_t sin_port; /* port number */
struct in_addr sin_addr;  /* IPv4 address */
};
</pre>
inet_ntop - network to presentation

<pre class="code">#include &lt;arpa/inet.h&gt;
const char *inet_ntop(int domain, const void *restrict addr,
char *restrict str, socklen_t size);
Returns: pointer to address string on success, NULL on error
int inet_pton(int domain, const char *restrict str,
void *restrict addr);
Returns: 1 on success, 0 if the format is invalid, or -1 on error
</pre>
Address Look Up
To iterate or set the network configuration on the machine

<pre class="code">#include &lt;netdb.h&gt;
struct hostent *gethostent(void);
                Returns: pointer if OK, NULL on error
void sethostent(int stayopen);
void endhostent(void);

struct hostent {
char *h_name;
char **h_aliases;
int  h_addrtype;
int h_length;
char **h_addr_list;
.
};
</pre>
DNS
gethostbyname and gethostbyaddr() are obselete against following api

<pre class="code">#include &lt;netdb.h&gt;
struct netent *getnetbyaddr(uint32_t net, int type);
struct netent *getnetbyname(const char *name);
struct netent *getnetent(void);
</pre>
All return: pointer if OK, NULL on error

<pre class="code">void setnetent(int stayopen);
void endnetent(void);
</pre>
The netent structure contains at least the following fields:

<pre class="code">struct netent {
char n_name; /*network name */
char **n_aliases; /*alternate network name array pointer */
int n_addrtype; /*address type */
uint32_t n_net; /*network number */
..
};
</pre>
We can map between protocol names and numbers with the following functions.

<pre class="code">#include &lt;netdb.h&gt;
struct protoent *getprotobyname(const char *name);
struct protoent *getprotobynumber(int proto);
struct protoent *getprotoent(void);
</pre>
All return: pointer if OK, NULL on error

<pre class="code">void setprotoent(int stayopen);
void endprotoent(void);
</pre>
The protoent structure as defined by POSIX.1 has at least the following members:

<pre class="code">struct protoent {
char *p_name; /* protocol name */
char **p_aliases; /* pointer to alternate protocol name array */
int p_proto;/* protocol number */
..
};
</pre>
Services are represented by the port number portion of the address. Each service is
offered on a unique, well-known port number. We can map a service name to a port
number with getservbyname, map a port number to a service name with getservbyport, or
scan the services database sequentially with getservent.
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main11" class="pn">p92</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">

<pre class="code">#include &lt;netdb.h&gt;
struct servent *getservbyname(const char *name, const char *proto);
struct servent *getservbyport(int port, const char *proto);
struct servent *getservent(void);
</pre>
All return: pointer if OK, NULL on error

<pre class="code">void setservent(int stayopen);
void endservent(void);
</pre>
The servent structure is defined to have at least the following members:

<pre class="code">struct servent {
char *s_name;
char **s_aliases;
int s_port;
char *s_proto;
..
};
</pre>
</pre> &nbsp;<div class="slideheader" style="height:136px">
  <pre class="day">Day 4 Morning</pre>
  <pre class="topic">  11. Sockets</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>An Overview
</pre></li>   <li class="big"><a name="chap11_1">System calls related to<br> - TCP</a></li>   <li class="sml"><pre>-UDP</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

<img class="img" src="http://www.minhinc.com/image/li-slide-tcpcommunication.png" />
<pre class="code">#include &lt;sys/socket.h&gt;
int bind(int sockfd, const struct sockaddr *addr, socklen_t len);

Returns: 0 if OK, -1 on error
</pre>
* sockfd - the socket file descriptor returned by socket().
* addr - a pointer to a struct sockaddr that contains information about IP address and
port number.
* len - set to sizeof (struct sockaddr)

<pre class="code">int connect (int sockfd, struct sockaddr *serv_addr, int addrlen);
</pre>* sockfd - the socket file descriptor returned by socket().
* serv_addr - is a struct sockaddr containing the destination port and IP address.
* addrlen - set to sizeof (struct sockaddr).

<pre class="code">int listen (int sockfd,int backlog); 
</pre>* sockfd - the socket file descriptor returned by socket().
* backlog - the number of connections allowed on the incoming queue.
* Backlog should never be zero as servers always expect connection from client.
* The listen function converts an unconnected socket into a passive socket.
* On successful execution of listen is indicating that the kernel should accept
incoming connection requests directed to this socket.

<pre class="code">int accept (int sockfd, void *addr, int *addrlen);
</pre>
sockfd -  the socket file descriptor returned by socket().
addr -  a pointer to a struct sockaddr_in. The information about the incoming
connection like IP address and port number are stored.
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main11" class="pn">p93</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
addrlen - a local integer variable that should be set to sizeof (struct
sockaddr_in) before its address is passed to accept().

<pre class="code">close (sockfd);
</pre>* Close system call prevents any more reads and writes to the socket. For attempting
to read or write the socket on the remote end will receive an error.


<pre class="code">int shutdown (int sockfd, int how);
</pre>sockfd - socket file descriptor of the socket to be shutdown.
how - if it is
 0 - Further receives are disallowed
 1 - Further sends are disallowed
 2 - Further sends and receives are disallowed.
The shutdown system call gives more control (than close (sockfd) over how the socket
descriptor can be closed.

Typical server code

<pre class="code">struct sockaddr_in serv, cli;
sd = socket (AF_INET, SOCK_STREAM, 0);
serv.sin_family = AF_INET;
serv.sin_addr.s_addr = INADDR_ANY;
serv.sin_port = htons (portno);
bind (sd, &amp;serv, sizeof (serv));
listen (sd, 5);
nsd = accept (sd, &amp;cli, &amp;sizeof (cli));
read / write (nsd, ....);
</pre>
Typical Client code
<pre class="code">struct sockaddr_in serv;
sd =socket(AF_INET,SOCK_STREM, 0);
serv.sin_family = AF_INET;
serv.sin_addr.s_addr = inet_addr("ser ip");
serv.sin_port = htons (portno);
connect (sd, &amp;server, sizeof (server));
read / write (sd, ....);
</pre>
Iterative Server
One client request at a time.
<pre class="code">nsd = accept (sd, &amp;cli,...);
while (1) {
read/write(nsd, ...);
}
</pre>
Concurrent Server
Many clients requests can be serviced concurrently
<pre class="code">while (1) {
nsd =(accept (sd, &amp;cli, ....);
if (!fork( )) {
close(sd);
read/write(nsd, .....);
exit();
} else
close(nsd);
}
</pre>
/* This is a program which illustrates the concurrent server by creating a child
process */
<pre class="codes">#include&lt;stdio.h&gt;
#include&lt;sys/types.h&gt;
#include&lt;sys/socket.h&gt;
#include&lt;netinet/in.h&gt;
#include&lt;arpa/inet.h&gt;
#define MYPORT 1034
main()
{
int pid,sd,nsd,dat,yes=1;
char message[40];
socklen_t length;
struct sockaddr_in server,client;

if((sd=socket(PF_INET,SOCK_STREAM,0))==-1) {
 perror("socket");
 exit(1);
}
server.sin_port=htons(MYPORT);
server.sin_family=PF_INET;
server.sin_addr.s_addr=inet_addr("192.168.2.20");
	 
if(bind(sd,(struct sockaddr  *)&amp;server,sizeof(server))==-1) {
 perror("bind");
 exit(1);
}
if(listen(sd,1)==-1) {
 perror("listen");
 exit(1);
} 
</pre><pre class=codes>
/*A child process is created for accepting connections*/
printf("Waiting for connection.............\n");      
pid=fork();
while(1)
{
 if(pid==0)
 {
  if((nsd=accept(sd,(struct sockaddr *)&amp;client,&amp;length))==-1) {
   perror("accept");
   exit(1);
  }
  printf("Got connection from client:%s\n",inet_ntoa(client.sin_addr));
  /*else fragment is the parent process taking care of send and receive to clients*/
  if((dat=recv(nsd,message,40,0))==-1) {
   perror("recv");
   exit(1);
  }
  message[dat]='\0';
  printf("Data received is : %s\n",message);
  printf("Enter the data you want to send to client\n");
  fgets(message,40,stdin); 
  send(nsd,message,40,0);
 }	
}
//close(sd);
}
</pre><pre style="clear:both"></pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main11" class="pn">p94</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:125px">
  <pre class="day">Day 4 Morning</pre>
  <pre class="topic">  11. Sockets</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>An Overview
</pre></li>   <li class="sml"><pre>System calls related to
 - TCP
</pre></li>   <li class="big"><a name="chap11_2">-UDP</a></li>
  </ul>
 </div>
<pre class="slidecontent">

Client and Server both has to use
<pre class="code">include &lt;sys/socket.h&gt;
ssize_t sendto(int sockfd, const void *buf, size_t nbytes, int flags, const struct
sockaddr *destaddr, socklen_t destlen);
Returns: number of bytes sent if OK, -1 on error

#include &lt;sys/socket.h&gt;
ssize_t recvfrom(int sockfd, void *restrict buf, size_t len, int flags, struct
sockaddr *restrict addr, socklen_t *restrict addrlen);

Returns: length of message in bytes, 0 if no messages are available and peer has done
an orderly shutdown, or -1 on error
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main11" class="pn">p95</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre style="text-align:center;line-height:1395px;font-size:24pt">Left Blank</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#mainL" class="pn">p96</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap12">&nbsp;<div class="slideheader" style="height:115px">
  <pre class="day">Day 5 Morning</pre>
  <pre class="topic">  12. Network Programming</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap12_0">TCP Server Client Programming</a></li>   <li class="sml"><pre>UDP Server Client Programming
</pre></li>   <li class="sml"><pre>UDP Server Cient Programming</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

Tcpclient

<pre class="codec">#include&lt;sys/socket.h&gt;
#include&lt;sys/types.h&gt;
#include&lt;netinet/in.h&gt;
#include&lt;arpa/inet.h&gt;
#include&lt;stdio.h&gt;

#define PORT 1034

struct sockaddr_in server;
main()
{
int n,sd,length;
char msg[40];
//length=sizeof(client);
if((sd=socket(PF_INET,SOCK_STREAM,0))==-1) {
 perror("socket");
 exit(1);
}
server.sin_family=PF_INET;
server.sin_port=htons(PORT);
//server.sin_addr.s_addr=inet_addr("192.168.1.2");
server.sin_addr.s_addr=inet_addr("127.0.0.1");
if(connect(sd,(struct sockaddr *)&amp;server,sizeof(server))==-1) {
 perror("connect");
 exit(1);
}

printf("Enter the message you want to send to server\n");
fgets(msg,40,stdin);
send(sd,msg,40,0);
printf("Waiting for message from server..............\n");
n=recv(sd,msg,40,0);
msg[n]='\0';

printf("Message received from server is:%s\n",msg);
close(sd);	
}
</pre>			
Tcpserver

<pre class="codec">#include&lt;stdio.h&gt;
#include&lt;sys/types.h&gt;
#include&lt;sys/socket.h&gt;
#include&lt;netinet/in.h&gt;
#include&lt;arpa/inet.h&gt;
#define MYPORT 1034
main()
{
int sd,pid,nsd,dat,yes=1;
char message[40];
struct sockaddr_in server,client;
socklen_t length;
if((sd=socket(PF_INET,SOCK_STREAM,0))==-1) {
 perror("socket");
 exit(1);
}
server.sin_port=htons(MYPORT);
server.sin_family=PF_INET;
//server.sin_addr.s_addr=inet_addr("192.168.1.2");
server.sin_addr.s_addr=inet_addr("127.0.0.1");
     
/*if(setsockopt(sd,SOL_SOCKET,SO_REUSEADDR,&amp;yes,sizeof(int))==-1) {
 perror("setsockopt");
 exit(1);
}*/
	 
if(bind(sd,(struct sockaddr  *)&amp;server,sizeof(server))==-1) {
 perror("bind");
 exit(1);
}
      
if(listen(sd,5)==-1) {
 perror("listen");
 exit(1);
} 
printf("Waiting for connection.............\n");      
if((nsd=accept(sd,(struct sockaddr *)&amp;client,&amp;length))==-1) {
 perror("accept");
 exit(1);
}
printf("Got connection from client:%s\n",inet_ntoa(client.sin_addr));

if((dat=recv(nsd,message,40,0))==-1) {
 perror("recv");
 exit(1);
}
message[dat]='\0';
printf("Data received is : %s\n",message);
printf("Enter the data you want to send to client\n");
fgets(message,40,stdin); 
send(nsd,message,40,0);
		
close(sd); 
}
</pre>    
    
</pre> &nbsp;<div class="slideheader" style="height:115px">
  <pre class="day">Day 5 Morning</pre>
  <pre class="topic">  12. Network Programming</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>TCP Server Client Programming
</pre></li>   <li class="big"><a name="chap12_1">UDP Server Client Programming</a></li>   <li class="sml"><pre>UDP Server Cient Programming</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

udpclient
<pre class="codec">#include&lt;sys/socket.h&gt;
#include&lt;sys/types.h&gt;
#include&lt;netinet/in.h&gt;
#include&lt;arpa/inet.h&gt;
#include&lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#define PORT 1034

main()
{
int n,sd,length;
char msg[40];
struct sockaddr_in server,client;
if((sd=socket(PF_INET,SOCK_DGRAM,0))==-1) {
</pre></pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main12" class="pn">p97</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
<pre class="codec"> perror("socket");
 exit(1);
}

client.sin_family=PF_INET;
client.sin_port=htons(PORT);
//client.sin_addr.s_addr=inet_addr("192.168.1.2");
client.sin_addr.s_addr=inet_addr("127.0.0.1");

printf("Enter the message you want to send to server\n");
fgets(msg,40,stdin);
if(sendto(sd,msg,40,0,(struct sockaddr *)&amp;client,sizeof(server))==-1) {
 perror("sendto");
 exit(1);
}
printf("Waiting for message from server..............\n");
length=sizeof(client);
n=recvfrom(sd,msg,40,0,(struct sockaddr *)&amp;server,&amp;length);
msg[n]='\0';

printf("Message received from server is:%s\n",msg);
}
</pre>			
udpserver
<pre class="codec">#include&lt;stdio.h&gt;
#include&lt;sys/types.h&gt;
#include&lt;sys/socket.h&gt;
#include&lt;netinet/in.h&gt;
#include&lt;arpa/inet.h&gt;
#include&lt;stdlib.h&gt;
#define MYPORT 1034


main()
{
int sd,nsd,dat,length,yes=1;
char message[40];
struct sockaddr_in server,client;

if((sd=socket(PF_INET,SOCK_DGRAM,0))==-1) {
 perror("socket");
 exit(1);
}
server.sin_port=htons(MYPORT);
server.sin_family=PF_INET;
//server.sin_addr.s_addr=inet_addr("192.168.1.2");
server.sin_addr.s_addr=inet_addr("127.0.0.1");

/*if(setsockopt(sd,SOL_SOCKET,SO_REUSEADDR,&amp;yes,sizeof(int))==-1) {
 perror("setsockopt");
 exit(1);
}*/
 
if(bind(sd,(struct sockaddr  *)&amp;server,sizeof(server))==-1) {
 perror("bind");
 exit(1);
}

length=sizeof(client);
if((dat=recvfrom(sd,message,40,0,(struct sockaddr *)&amp;client,&amp;length))==-1) {
 perror("recvfrom");
 exit(1);
}

printf("Got connection from client:%s\n",inet_ntoa(client.sin_addr));
        
message[dat]='\0';

printf("Data received is : %s\n",message);
printf("Enter the data you want to send to client\n");
fgets(message,40,stdin); 
sendto(sd,message,40,0,(struct sockaddr *)&amp;client,length);
}  
</pre>    
     
</pre> &nbsp;<div class="slideheader" style="height:115px">
  <pre class="day">Day 5 Morning</pre>
  <pre class="topic">  12. Network Programming</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>TCP Server Client Programming
</pre></li>   <li class="sml"><pre>UDP Server Client Programming
</pre></li>   <li class="big"><a name="chap12_2">UDP Server Cient Programming</a></li>
  </ul>
 </div>
<pre class="slidecontent">

netlink - Communication between kernel and userspace (PF_NETLINK)

<pre class="code">#include &lt;asm/types.h&gt;
#include &lt;sys/socket.h&gt;
#include &lt;linux/netlink.h&gt;

netlink_socket = socket(PF_NETLINK, socket_type, netlink_family);
</pre>
Netlink is used to transfer information between kernel and userspace processes. It
consists of a standard sockets-based interface for userspace processes and an internal
kernel API for kernel modules. 

Netlink is a datagram-oriented service. Both SOCK_RAW and SOCK_DGRAM are valid values
for socket_type. However, the netlink protocol does not distinguish between datagram
and raw sockets.

netlink_family selects the kernel module or netlink group to communicate with. The
currently assigned netlink families are:

<pre class="code" style="display:inline">NETLINK_ROUTE</pre>
 Receives routing and link updates and may be used to modify the routing tables (both
IPv4 and IPv6), IP addresses, link parameters, neighbour setups, queueing disciplines,
traffic classes and packet classifiers

<pre class="code" style="display:inline">NETLINK_W1</pre>
 Messages from 1-wire subsystem.

</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main12" class="pn">p98</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
Example creates a NETLINK_ROUTE netlink socket which will listen to the RTM-GRP_LINK
(network interface create/delete/up/down events) and RTMGRP_IPV4_IFADDR (IPv4
addresses add/delete events) multicast groups.

<pre class="code">struct sockaddr_nl sa;

memset (&amp;sa, 0, sizeof(sa));
snl.nl_family = AF_NETLINK;
snl.nl_groups = RTMGRP_LINK | RTMGRP_IPV4_IFADDR;

fd = socket(AF_NETLINK, SOCK_RAW, NETLINK_ROUTE);
bind(fd, (struct sockaddr*)&amp;sa, sizeof(sa));
</pre>
Example demonstrates how to send a netlink message to the kernel (pid 0). Note
that application must take care of message sequence numbers in order to reliably track
acknowledgements.

<pre class="code">struct nlmsghdr *nh;    /* The nlmsghdr with payload to send. */
struct sockaddr_nl sa;
struct iovec iov = { (void *) nh, nh-&gt;nlmsg_len };
struct msghdr msg;

msg = { (void *)&amp;sa, sizeof(sa), &amp;iov, 1, NULL, 0, 0 };
memset (&amp;sa, 0, sizeof(sa));
sa.nl_family = AF_NETLINK;
nh-&gt;nlmsg_pid = 0;
nh-&gt;nlmsg_seq = ++sequence_number;
/* Request an ack from kernel by setting NLM_F_ACK. */
nh-&gt;nlmsg_flags |= NLM_F_ACK;

sendmsg (fd, &amp;msg, 0);
</pre>
And the last example is about reading netlink message.

<pre class="code">int len;
char buf[4096];
struct iovec iov = { buf, sizeof(buf) };
struct sockaddr_nl sa;
struct msghdr msg;
struct nlmsghdr *nh;

msg = { (void *)&amp;sa, sizeof(sa), &amp;iov, 1, NULL, 0, 0 };
len = recvmsg (fd, &amp;msg, 0);

for (nh = (struct nlmsghdr *) buf; NLMSG_OK (nh, len);
nh = NLMSG_NEXT (nh, len)) {
/* The end of multipart message. */
if (nh-&gt;nlmsg_type == NLMSG_DONE)
 return;

if (nh-&gt;nlmsg_type == NLMSG_ERROR)
/* Do some error handling. */
...

/* Continue with parsing payload. */
...
}
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main12" class="pn">p99</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
 <a name="chap13">&nbsp;<div class="slideheader" style="height:135px">
  <pre class="day">Day 5 Morning</pre>
  <pre class="topic">  13. Programming and Debugging tools</pre>
  <ul class="slidecontent">
   <li class="big"><a name="chap13_0">strace - Tracing system calls</a></li>   <li class="sml"><pre>ltrace - Tracing library calls
</pre></li>   <li class="sml"><pre>Tools used to detect memory access
error; and memory leakage in linux
mtrace</pre></li>
  </ul>
 </div></a>
<pre class="slidecontent">

Tracing Processes
* strace command
 - trace system calls and signals
 - strace runs until the given command exits
 - It is a useful tool for diagnostic, instructional and debugging
* ptrace system call
 - Process trace

Strace

#strace -c -e trace=file mkfifo -m 0744 myfifo
<pre class="code">execve("/usr/bin/mkfifo", ["mkfifo", "-m", "0744", "myfifo"]) = 0


% time seconds us/call calls syscall
------ ----------- ----------- --------- --------- ----------------
 47.62 0.000020               20        1         mknod
 33.33 0.000014                4        4         open
 11.90 0.000005                5        1         chmod
  7.14 0.000003                1        3         fstat
------ ----------- ----------- --------- --------- ----------------
100.00 0.000042                          9
</pre>
1. Trace the Execution of an Executable
$  strace ls
<pre class="code">execve("/bin/ls", ["ls"], [/* 21 vars */]) = 0
brk(0)       
access("/etc/ld.so.nohwcap", F_OK)      = -1 ENOENT (No such file or directory)
mmap2(NULL, 8192, PROT_READ, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = 0xb78c7000
access("/etc/ld.so.preload", R_OK)      = -1 ENOENT (No such file or directory)
open("/etc/ld.so.cache", O_RDONLY)      = 3
fstat64(3, {st_mode=S_IFREG|0644, st_size=65354, ...}) = 0
...
...
</pre>2. Trace a Specific System Calls in an Executable Using Option -e
$ strace -e open ls
<pre class="code">open("/etc/ld.so.cache", O_RDONLY)      = 3
open("/lib/libselinux.so.1", O_RDONLY)  = 3
open("/lib/librt.so.1", O_RDONLY)       = 3


open("/lib/libacl.so.1", O_RDONLY)      = 3
open("/lib/libc.so.6", O_RDONLY)        = 3
open("/lib/libdl.so.2", O_RDONLY)       = 3
open("/lib/libpthread.so.0", O_RDONLY)  = 3
open("/lib/libattr.so.1", O_RDONLY)     = 3
open("/proc/filesystems", O_RDONLY|O_LARGEFILE) = 3
open("/usr/lib/locale/locale-archive", O_RDONLY|O_LARGEFILE) = 3
open(".", O_RDONLY|O_NONBLOCK|O_LARGEFILE|O_DIRECTORY|O_CLOEXEC) = 3
</pre>
3. Execute Strace on a Running Linux Process Using Option -p
$  strace -p 1725 -o output.txt
<pre class="code">attach: ptrace(PTRACE_ATTACH, ...): Operation not permitted
Could not attach to process.  If your uid matches the uid of the target
process, check the setting of /proc/sys/kernel/yama/ptrace_scope, or try
again as the root user.  For more details, see /etc/sysctl.d/10-ptrace.conf
</pre>
4. Print Relative Time for System Calls Using Option -r

Strace also has the option to print the execution time for each system calls as shown
below.

$ strace -r ls 
<pre class="codec">0.000000 execve("/bin/ls", ["ls"], [/* 37 vars */]) = 0
0.000846 brk(0)                    = 0x8418000
0.000143 access("/etc/ld.so.nohwcap", F_OK) = -1 ENOENT (No such file or directory)
0.000163 mmap2(NULL, 8192, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) =
0xb787b000
0.000119 access("/etc/ld.so.preload", R_OK) = -1 ENOENT (No such file or directory)
0.000123 open("/etc/ld.so.cache", O_RDONLY) = 3
0.000099 fstat64(3, {st_mode=S_IFREG|0644, st_size=67188, ...}) = 0
0.000155 mmap2(NULL, 67188, PROT_READ, MAP_PRIVATE, 3, 0) = 0xb786a000
...
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main13" class="pn">p100</a>
</div> <div class="pg" style="margin-top:20px;height:1395px">
 &nbsp;<div class="slideheader" style="height:135px">
  <pre class="day">Day 5 Morning</pre>
  <pre class="topic">  13. Programming and Debugging tools</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>strace - Tracing system calls
</pre></li>   <li class="big"><a name="chap13_1">ltrace - Tracing library calls</a></li>   <li class="sml"><pre>Tools used to detect memory access
error; and memory leakage in linux
mtrace</pre></li>
  </ul>
 </div>
<pre class="slidecontent">

ltrace' is another Linux Utility similar to 'strace'. However, ltrace lists all the
library calls being called in an executable or a running process.

This tool is very useful for debugging user-space applications to determine which
library call is failing. 

It is also capable of receiving signals for segmentation faults, etc.

Assume the code
<pre class="code">1. #include &lt;stdio.h&gt;
2.  #include &lt;unistd.h&gt;
3.. 
4.  int main()
5.  {
6.     FILE *fp = fopen("rfile.txt", "w+");
7.     fprintf(fp+1, "Invalid Write\n");
8.     fclose(fp);
9.     return 0;
10. }
</pre>
Lets compile and run it.
Code:

x@ubuntu:~/source$ gcc file.c -Wall -o file
x@ubuntu:~/source$./file
<pre class="code">Segmentation fault (core dumped)

That is a segmentation fault. Lets use ltrace to debug and see what is happening.
Code:

x@ubuntu:~/source$ltrace ./file
 __libc_start_main(0x8048454, 1, 0xbfc19db4, 0x80484c0, 0x8048530 &lt;unfinished ...&gt;
 fopen("rfile.txt", "w+")                          = 0x9160008
 fwrite("Invalid Write\n", 1, 14, 0x916009c &lt;unfinished ...&gt;
 --- SIGSEGV (Segmentation fault) ---
 +++ killed by SIGSEGV +++
</pre>
</pre> &nbsp;<div class="slideheader" style="height:157px">
  <pre class="day">Day 5 Morning</pre>
  <pre class="topic">  13. Programming and Debugging tools</pre>
  <ul class="slidecontent">
   <li class="sml"><pre>strace - Tracing system calls
</pre></li>   <li class="sml"><pre>ltrace - Tracing library calls
</pre></li>   <li class="big"><a name="chap13_2">Tools used to detect memory access<br>error; and memory leakage in linux<br>mtrace</a></li>
  </ul>
 </div>
<pre class="slidecontent">

Mtrace, memory trace. Follow the steps to use it

1. Call mtrace() When Your Program Starts
<pre class="code">#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;mcheck.h&gt;
int main() {
 char *string;
 mtrace();
 string = malloc(100 * sizeof(char));
 return 0;
}
</pre>
2. Compile Program with Debugging Options
$gcc -g -o mtrace_test mtrace_test.c

3. Set MALLOC_TRACE
For bash
<pre class="code">export MALLOC_TRACE="mtrace.out"
</pre>
For C shell, it would be:
<pre class="code">setenv MALLOC_TRACE mtrace.out
</pre>4. Run The Program Once
</pre>
<pre class="ftr">&copy www.minhinc.com</pre><a href="#main13" class="pn">p101</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">
<pre class="slidecontent">
5. View The Data
mtrace &lt;prog name&gt; &lt;output log file name&gt;
mtrace mtrace_test mtrace.out
Assuming the C code at the beginning was the code in mtrace_test.c, the following
output would be produced:

<pre class="code">Memory not freed:
-----------------
   Address     Size     Caller
0x0000000000501460     0x64  at /array/home/dcurrie/test/mtrace/mtrace_test.c:11
</pre>
Valgrind
Finding Memory Leaks With Valgrind

eample.c
<pre class="code">include &lt;stdlib.h&gt;
int main()
{
    char *x = malloc(100); /* or, in C++, "char *x = new char[100] */
    x[10] = 'a';
    return 0;
}
</pre>$gcc example.c -o example

<pre class="code">$valgrind --tool=memcheck --leak-check=yes example
==2116== 100 bytes in 1 blocks are definitely lost in loss record 1 of 1
==2116==    at 0x1B900DD0: malloc (vg_replace_malloc.c:131)
==2116==    by 0x804840F: main (in /home/cprogram/example1)
</pre>
Finding Invalid Pointer Use With Valgrind
valgrind --tool=memcheck --leak-check=yes example

results in the following warning

<pre class="code">==9814==  Invalid write of size 1
==9814==    at 0x804841E: main (example2.c:6)
==9814==  Address 0x1BA3607A is 0 bytes after a block of size 10 alloc'd
==9814==    at 0x1B900DD0: malloc (vg_replace_malloc.c:131)
==9814==    by 0x804840F: main (example2.c:5)
</pre>
</pre><pre class="ftr">&copy www.minhinc.com</pre><a href="#main13" class="pn">p102</a>
</div>
<div class="pg" style="margin-top:20px;height:1395px">

<? $util->drawfooter(__FILE__) ?>