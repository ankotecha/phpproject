<?php
?>
<html>
    <head>
        <title>events</title>
    </head>
    <style>
        body {
  background-image: url("1.jpg");
  background-repeat: no-repeat;
 background-size: cover;
}
h1
{
    color:darkblue
}
.flip-box {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #bbb;
  color: black;
}

.flip-box-back {
  background-color: white;
  color: white;
  transform: rotateY(180deg);
}
 </style>
    <body>
        <div class="color">
    <center>
        <form action="" method="post">
        <table width="60%" height="75%" border="0" cellpadding="10">
            <h1><div style="color:darkgoldenrod"><b>NONTECHNICAL EVENTS<b/></div></h1>
            <tr>

                <td width="134px"><div class="flip-box">
  <div class="flip-box-inner">
      <div class="flip-box-front"><img src="hs.jpg" alt="" width="300px" height="200px"/></div> <div class="flip-box-back">
      <h2>Paris</h2>
      <p><a href="">Registration</a></p>
    </div>
</div></div></td>
<td align="center"><a href="" ><h1>Huntronics</h1></a></td>
                </div>
            
            </tr>
             <tr>

                <td width="134px"><div class="flip-box">
  <div class="flip-box-inner">
      <div class="flip-box-front"><img src="bc.jpg" alt=""  width="300px" height="200px"/></div> <div class="flip-box-back">
      <h2>Paris</h2>
      <p><a href="">Registration</a></p>
    </div>
</div></div></td>
<td align="center"><a href="" ><h1>Box cricket</h1></a></td>
                </div>
            
            </tr>
            <tr><td></td></tr>
             <tr>

                <td width="134px"><div class="flip-box">
  <div class="flip-box-inner">
      <div class="flip-box-front"><img src="arc.png" alt=""  width="300px" height="200px"/></div> <div class="flip-box-back">
      <h2>Paris</h2>
      <p><a href="">Registration</a></p>
    </div>
</div></div></td>
<td align="center"><a href="" ><h1>Arcade run</h1></a></td>
                </div>
            
            </tr>
             <tr>

                <td width="134px"><div class="flip-box">
  <div class="flip-box-inner">
      <div class="flip-box-front"><img src="pb.jpg" alt=""  width="300px" height="200px"/></div> <div class="flip-box-back">
      <h2>Paris</h2>
      <p><a href="">Registration</a></p>
    </div>
</div></div></td>
<td align="center"><a href="" ><h1>Paint ball</h1></a></td>
                </div>
            
            </tr>
            
            <!--
            <tr>
                <td><img src="mp.jpg" alt=""/></td>
                <td align="center"><h1>Mock Placements<h1></td>
                
                            </tr>
            <tr>
                <td><img src="rr.jpg" alt=""/></td>
                <td align="center"><h1>Robo Race<h1></td>
               
            </tr>
            <tr>
                <td><img src="bz1..png" alt=""/></td>
                <td align="center"><h1>Bizz Brainz</td>
               
            </tr>-->
        </table>
        </form>
    </center>
    </div>
    </body>

