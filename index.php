<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>mean value theorem</title>

  <link rel="stylesheet" href="style.css" media="screen" type="text/css" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <script src="XCalc.js" type="text/javascript"></script>

  <script src="index.js" type="text/javascript"></script>

  
  <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css " rel="stylesheet"></link>



<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">




<style>
*{

margin:0;
padding:0;

}

 .para123 img{
  width:30vh;
  
  }
  .para123{
  
    padding-left:10px;
    padding-right:10px;
  }

  
 .paraa .card{
  
  background-color:#ecf0f3 ;
  margin:30px 39px;
   height:450px;
  }
  
  
  .card img{
  
  width:18rem;
    border-radius:19px;
  }
  
  .soc{
    height:200px;
    background-color: #e3edf7;
display: flex;
justify-content: center;
    align-items:center;
}
.soc a{
display: flex;
background: #e3edf7;
height: 75px;
width: 75px;
margin: 0 9px;
border-radius:50px;

align-items : center;
justify-content : center;
text-decoration : none;
box-shadow: 6px 6px 10px -1px rgba(0,0,0,0.15),
-6px -6px 10px -1px rgba(255, 255, 255, 0.7);

   border:1px solid rgba(0,0,0,0.0);
  transition:transform 0.5s;
  
}

.soc a i{

font-size:39px;
color: #777;
}



.soc a:hover{
box-shadow: inset 4px 4px 6px -1px rgba(0,0,0,0.2),

inset -4px -4px 6px -1px rgba(255, 255,255,0.7),
-0.5px -0.5px 0px rgba(255, 255, 255, 1),
0.5px 0.5px 0px rgba(0,0,0,0.15) ,
  
  
  0px 12px 10px -10px rgba(0,0,0,0.05) ;
 border:1px solid rgba(0,0,0,0.01);
transform: translateY(2px);




}
.soc a:hover i{
  font-size:57px;
  transition:0.3s ease;
transform: scale(o.90);

}

  
.soc a:hover .fa-facebook{
color: #3b5998;
}
.soc a:hover .fa-twitter{
color: #1ca1f3;
}

.soc a:hover .fa-instagram{
color:#d62c82 ;
}


.soc a:hover .fa-google{
color:  #fcbe00  ;
}
  

header{

background-image:linear-gradient(rgba(0,0,0,0.4),
rgba(0,0,0,0.4)),url(   https://1.bp.blogspot.com/-FfdMw4bS8kQ/X3LTzqqlJCI/AAAAAAAAADI/CCZcVSlqpPsOZw-OpOJ4h_TbKrNFXnLegCLcBGAsYHQ/s320/fractal-1746830_1920.jpg  );


background-size:cover;
background-position:center;
height:auto;
overflow:hidden;
}

  
.head{

background-image:linear-gradient(rgba(0,0,0,0.4),
rgba(0,0,0,0.4)),url(   https://1.bp.blogspot.com/-FfdMw4bS8kQ/X3LTzqqlJCI/AAAAAAAAADI/CCZcVSlqpPsOZw-OpOJ4h_TbKrNFXnLegCLcBGAsYHQ/s320/fractal-1746830_1920.jpg  );


background-size:cover;
background-position:center;
height:auto;
overflow:hidden;
}
  
  
  
.mud img{


width:260px;
border: 0px solid #000;


}












.mud img{
width:300px;
border-radius:700px;
color: 
padding:8px 3px;
 border: 2px solid #000;
margin:1px;
box-shadow: 6px 6px 10px -1px rgba(0,0,0,0.15),
-6px -6px 10px -1px rgba(255, 255, 255, 0.7);
  
}




#para{

display:flex;
flex-direction:column;

align-items:center;   
 justify-content:center;
padding:10px 5px;




}

.para1{
margin-top:10px;


padding-left:25px;
padding-right:25px;


}



.para1i img{
width:100px;
border-radius:100px;
color: 
padding:20px 3px;
 border: 2px solid #000;
margin:1px;
box-shadow: 6px 6px 10px -1px rgba(0,0,0,0.15),
-6px -6px 10px -1px rgba(255, 255, 255, 0.7);

  
}

.para2i img{
width:100px;
border-radius:800px;
color: 
padding:20px 3px;
 border: 2px solid #000;
margin:1px;
box-shadow: 6px 6px 10px -1px rgba(0,0,0,0.15),
-6px -6px 10px -1px rgba(255, 255, 255, 0.7);

  
}

.para3i img{
width:210px;
border-radius:10px;
color: 
padding:20px 3px;
 border: 2px solid #000;
margin:1px;
box-shadow: 6px 6px 10px -1px rgba(0,0,0,0.15),
-6px -6px 10px -1px rgba(255, 255, 255, 0.7);

  
}
















.cardo{

background-image:linear-gradient(rgba(0,0,0,0),
rgba(0,0,0,0)),url(cardwall.jpg);


background-size:cover;
background-position:center;

}







nav ul li a:hover,
nav ul li a.active
{



}

.you{
background-color:white;
border:
height:2vh;
}
.you img{
margin:
border-radius:
padding:2px;
border:1px solid #fff;
width:100px;
}

.you a{

padding:3px 10px;
margin-left:
margin-right:
height:100px;
transition: 0.6s ease;

}
.you a:hover
{color:
padding:2px 3px;
background:#ffffff;
border-radius:
transition: 0.6s ease;
margin:10px;
}
.next ul li {


list-style-type:none;
}

.next{
width:100%;
height:80px;
background:rgba(0,0,0,0.7);

}

@media(max-width:760px) {
  .paraa{
  
  display:flex;
    flex-direction:column;
  
  
  
  }
  
.soc a i{

font-size:32px;
color: #777;
}
  
  .soc a{
display: flex;
background: #e3edf7;
height: 50px;
width: 50px;}
  
  
  .soc a:hover i{
  font-size:37px;}
  

    .h11 img{
display:none; 
}

.h11 h1{
display:none;
}

.home ul li a{
font-size:14px;
}

.para1{
height:300px;
display:flex;
flex-direction:column;

}
.para1i{
padding-right:85px;
padding:20px 6px;
}

.para2{
display:flex;
flex-direction:column;

}
.para2i{
padding-right:65px;
padding:2px 20px;

}

.para3{
display:flex;
flex-direction:column;

}
.para3i{
padding-right:85px;
}

.you{
height:80px;

}
.you img{

width:65px;

}
.video video{

width:320px;

}
}








</style>






  
  
  
  
  
  
  
</head>

<body>
  
  <?php


       ?>
  <header>



<br><br>





<section id="para"   
style="display:flex;align-items:center;  justify-content:center ;"
>

<h1>
<font color="white">
Mean value theorem 

 <br></h1>


<p1>
<font color="white">

<br>
<br>
The Mean Value Theorem states that if a function f is continuous on the closed interval [a,b] and differentiable on the open interval (a,b), then there exists a point c in the interval (a,b) such that f'(c) is equal to the function's average rate of change over [a,b].


<br>

  </p1>

<p1>
<font color="white">



        </p1>
   
</section>
  
  
  
  
</header>
  
  
  

  <div class="para123"   style=" background: #ecf0f3 ;justify-content:center;align-item:center;
">
  <br><br>
<div class="muda" style="display:flex;align-items:center;  justify-content:center ;"
  >
<img alt="mean value theorem mean value theorem calculator mean value theorem for integrals mean value theorem formula what is the mean value theorem the mean value theorem mean value theorem examples mean value theorem example" src="https://1.bp.blogspot.com/--YyKHMMcWgY/X3LqEobQtcI/AAAAAAAAADo/8ERjiyFIYxwlDA0SrsoyJd-RxOt524QVgCLcBGAsYHQ/w320-h284/20200929_121744.png" title="mean value theorem proof mean value theorem problems mean value theorem pdf mean value theorem integrals mean value theorem examples mean value theorem calculator intermediate value theorem mean value theorem khan academy"  />
  
  </div>
  
  

<br><br>
  <h3><font color="black">
  This theorem is used to prove statements about a function on an interval starting from local hypotheses about derivatives at points of the interval.

  
  <br><br>
  
    </h3>
    <p1>
More precisely, if  f is a continuous functionon the closed interval [a,b] and differentiableon the open interval  (a,b), then there exists a point  c in  (a,b) such that the tangent at c is parallel to the secant line through the endpoints  (a,f(a)) and (b,f(b)), that is,

</p1>

<br><br>


<h2>Formula </h2>
<br>
<img alt="mean value theorem proof mean value theorem problems mean value theorem pdf mean value theorem integrals mean value theorem examples mean value theorem calculator intermediate value theorem mean value theorem khan academy" src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b4e68eccc69d29a2a10d669fdd0a7f038417277b" title="mean value theorem mean value theorem calculator mean value theorem for integrals mean value theorem formula what is the mean value theorem the mean value theorem mean value theorem examples mean value theorem example" />



  <br><br><br><br><br>
    
    <p1>
      <font color="red">
        <h6>Example1</h6>
      <font color="black">
Find a value of c such that the conclusion of the mean value theorem is satisfied for<br><br>
f(x) = -2x 3 + 6x - 2<br><br>
on the interval [-2 , 2]<br><br>
<br><font color="green">
Solution to Problem 1<br><br>
<font color="black">
f(x) is a polynomial function and is continuous and differentiable for all real numbers. Let us evalute f(x) at x = -2 and x = 2<br><br>
f(-2) = -2(-2) 3 + 6(-2) - 2 = 2<br><br>
f(2) = -2(2) 3 + 6(2) - 2 = - 6<br><br>

Evaluate [f(b) - f(a)] / (b - a)<br><br>
[f(b) - f(a)] / (b - a) = [ -6 - 2 ] / (2 - -2) = -2
<br><br>
Let us now find f '(x).<br><br>
f '(x) = - 6x 2 + 6
<br><br>
We now construct an equation based on f '(c) = [f(b) - f(a)] / (b - a)<br><br>
-6c 2 + 6 = -2
<br><br>
Solve for c to obtain 2 solutions<br><br>
c = 2 √(1/3) and c = - 2 √(1/3)<br><br>

</p1><br><br>
        <br><br>
        <div class="head" style="align-items:center;  justify-content:center ;background-color:black;"
  > 
<h3>
  <font color="white"><br>
  Rolle’s Theorem</h3>
        <p1>
<font color="white">
Suppose that a function f(x) is continuous on the closed interval [a,b] and differentiable on the open interval (a,b). Then if f(a)=f(b), then there exists at least one point c in the open interval (a,b) for which f′(c)=0.<br>
<br>
  </div>
<h3><font color="black">
  <br><br>
  Geometric interpretation</h3>
<br><br>
There is a point c on the interval (a,b) where the tangent to the graph of the function is horizontal.
          <br><br>
          
          <div class="muda" style="display:flex;align-items:center;  justify-content:center ;"
  >
<img src="https://www.math24.net/wp-content/uploads/2019/04/rolles-theorem-illustration2.svg" />
</div>
<br><br><br>  <font color="red">
Example 1
<br><br>  <font color="black">
Let f(x)=x2+2x. Find all values of c in the interval [−2,0]such that f′(c)=0.
<br><br><br>  <font color="green">
Solution.  <font color="black">
<br><br>
First of all, we need to check that the function f(x) satisfies all the conditions of Rolle’s theorem.
<br><br>
1. f(x) is continuous in [−2,0] as a quadratic function;
<br><br>
2. It is differentiable everywhere over the open interval (−2,0);
<br><br>
3. Finally,
<br><br>
f(−2)=(−2)2+2⋅(−2)=0,
<br><br>
f(0)=02+2⋅0=0,
<br><br>
⇒f(−2)=f(0).
<br><br>
So we can use Rolle’s theorem.
<br><br>
To find the point c we calculate the derivative
<br><br>
f′(x)=(x2+2x)′=2x+2
<br><br>
and solve the equation f′(c)=0:
<br><br>
f′(c)=2c+2=0,⇒c=−1.
<br><br>
Thus, f′(c)=0 for c=−1.<br><br>
</p1>

  </div>
  
  
  







 <script type='text/javascript'>
//<![CDATA[
var uri = window.location.toString();
if (uri.indexOf("%3D","%3D") > 0) {
var clean_uri = uri.substring(0, uri.indexOf("%3D"));
window.history.replaceState({}, document.title, clean_uri);
}
var uri = window.location.toString();
if (uri.indexOf("%3D%3D","%3D%3D") > 0) {
var clean_uri = uri.substring(0, uri.indexOf("%3D%3D"));
window.history.replaceState({}, document.title, clean_uri);
}
var uri = window.location.toString();
if (uri.indexOf("&m=1","&m=1") > 0) {
var clean_uri = uri.substring(0, uri.indexOf("&m=1"));
window.history.replaceState({}, document.title, clean_uri);
}
var uri = window.location.toString();
if (uri.indexOf("?m=1","?m=1") > 0) {
var clean_uri = uri.substring(0, uri.indexOf("?m=1"));
window.history.replaceState({}, document.title, clean_uri);
}
//]]>
</script>
    
    

  


  
  
  
  
  <div id="top"><h1>mean value theorem</h1>
  	<div id="function">
  		<label>y = 
</label>
<input type="text" value="d/dx (x+4)^2*(x-6)+60sinx" id="input" />
  	</div>
  	<div id="range">
  		<div class="rangeSection">From <input type="text" value="" placeholder="-10" id="x1" /> &lt; x &lt; 

<input type="text" value="" placeholder="10" id="x2" />
</div>
      <div class="rangeSection">and <input type="text" placeholder="auto" value="" id="y1" /> &lt; y &lt; <input type="text" placeholder="auto" value="" id="y2" /></div>
  	</div>
  	<input type="button" value="Graph" id="graph" />
  </div>
  <div id="wrapper">
    <div id="result"></div>
  </div>
  
<section class="soc">

<a ><i href="https://www.google.com" class="fab fa-facebook"></i></a>

<a ><i href="https://www.google.com" class="fab fa-instagram"></i></a>

<a ><i href="https://www.google.com" class="fab fa-google"></i></a>
<a ><i href="https://www.google.com" class="fab fa-twitter"></i></a>

</section>
</body>

</html>
