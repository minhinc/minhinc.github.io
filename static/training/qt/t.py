import sys
from databasem import databasec
import re
class A:
 def __init__(self):
  self.db=databasec(False)
  self.idrect=None
  print(sys.argv)
  self.getrectcoordinate(820,830,float(sys.argv[1]) if len(sys.argv)>1 else 0.0)
 def getrectcoordinate(self,width,height,scalingfactor=0.0):
  if not self.idrect:
   row=self.db.get('adsense','*','','')
   self.idrect=[i for i in zip(list(zip(*row))[0],list(zip(*row))[3],list(zip(*row))[4]) if i[1]!=0]
  print("width,height,scalingfactor",width,height,scalingfactor)
  rect=list(zip(list(zip(*self.idrect))[1],list(zip(*self.idrect))[2]))
  print("self.idrect,rect",self.idrect,rect)
  def getrect(x,y,width,height,scalingfactor=0.0):
   nonlocal rect
   ixyarealist=None
   ilist=[i for i in range(0,len(rect)) if rect[i][0]<=width and rect[i][1]<=height]
  # print(delim,"getrect",x,y,width,height,ilist)
   if len(ilist):
    for i in ilist:
     tixyarealist=[[[i,x,y]],0]
     area=getrect(x+rect[i][0],y,width-rect[i][0],rect[i][1],scalingfactor)
  #   print(delim,"area1,i,width,height",area,i,width,height)
     if not area:
      tixyarealist[1]+=(width-rect[i][0])*rect[i][1]
     else:
      tixyarealist[0].extend(area[0])
      tixyarealist[1]+=area[1]
     area=getrect(x,y+rect[i][1],width,height-rect[i][1],scalingfactor)
  #   print(delim,"tixyarealist,area2,i,width,height",tixyarealist,area,i,width,height)
     if not area:
      tixyarealist[1]+=width*(height-rect[i][1])
     else:
      tixyarealist[0].extend(area[0])
      tixyarealist[1]+=area[1]
     if not ixyarealist:
      ixyarealist=tixyarealist
#     elif tixyarealist[1]<ixyarealist[1]:
     elif (tixyarealist[1]+int(scalingfactor*width*height*len(tixyarealist[0])))<(ixyarealist[1]+int(scalingfactor*width*height*len(ixyarealist[0]))):
      ixyarealist=tixyarealist
  #   # print("new ixyarealist",ixyarealist)
   else:
     return False
  # print(delim,"returning i,ixyarealist",i,ixyarealist)
   return ixyarealist
  rectposition=getrect(0,0,width,height,scalingfactor)
  print(rectposition)

  def endx(i):
   nonlocal rectposition,rect
   for j in [j for j in range(0,len(rectposition[0])) if rectposition[0][j][2]==rectposition[0][i][2]]:
    if (rectposition[0][i][1]+rect[rectposition[0][i][0]][0]<rectposition[0][j][1]+rect[rectposition[0][j][0]][0]):
     return False
   return True
  for i in range(0,len(rectposition[0])):
   if endx(i):
    xendoffset=width-rectposition[0][i][1]-rect[rectposition[0][i][0]][0]
    xcountlist=[j for j in range(0,len(rectposition[0])) if not (rectposition[0][j][2]+rect[rectposition[0][j][0]][1]<=rectposition[0][i][2] or rectposition[0][j][2]>=rectposition[0][i][2]+rect[rectposition[0][i][0]][1])]
    print('xendoffset,xcountlist',xendoffset,xcountlist)
    for count,j in enumerate(xcountlist):
     if rectposition[0][j][1]:
      print("i,j,count,xendoffset,xcountlist",i,j,count,xendoffset,xcountlist)
      rectposition[0][j][1]+=int(count*xendoffset/(len(xcountlist)-1))

  yendoffset=height
  ylayercount=1
  for j in range(0,len(rectposition[0])):
   if height-rectposition[0][j][2]-rect[rectposition[0][j][0]][1]<yendoffset:
    yendoffset=height-rectposition[0][j][2]-rect[rectposition[0][j][0]][1]
   if j and rectposition[0][j-1][2]!=rectposition[0][j][2]:
    ylayercount+=1
  print('yendoffset,ylayercount',yendoffset,ylayercount)
  def getlayer(i):
   nonlocal rectposition
   return [j for j in range(0,len(rectposition[0])) if rectposition[0][j][2]==rectposition[0][i][2]]
  ylayercurrentcount=0
  i=0
  while(i<len(rectposition[0])):
   layerlist=getlayer(i)
   if i:
    for j in layerlist:
     rectposition[0][j][2]+=int(ylayercurrentcount*yendoffset/(ylayercount-1))
   i+=len(layerlist)
   ylayercurrentcount+=1

  print('<div style="position:relative;float:right;width:{}px;height:{}px">'.format(width,height))
  for i in rectposition[0]:
   print('<div style="position:absolute;left:{};top:{}">\n'.format(i[1],i[2]),self.db.get('adsense','value','id',self.idrect[i[0]][0])[0][0],'</div>')
  print('</div>')
  print(rectposition)
a=A()
