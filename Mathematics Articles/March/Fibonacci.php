<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <!-- Title -->
  <title>Fibonacci Sequence</title>
  <!-- Meta -->
  
  <meta name="description" content="Fibonacci Sequence and Fibonacci number">
  <meta name="author" content="Elijah Wong">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
  <!-- Favicon -->
  <link href="favicon.html" rel="shortcut icon">
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="https://www.phymath.com/assets/css/bootstrap.css" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="https://www.phymath.com/assets/css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.phymath.com/assets/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.phymath.com/assets/css/nexus.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.phymath.com/assets/css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.phymath.com/assets/css/custom.css" rel="stylesheet">
  <!-- Google Fonts-->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,300" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
</head>
<body>
  <?php include("/home/sciwalker/public_html/header_2018.html") ;?>
    <!-- === END HEADER === -->
    <!-- === BEGIN CONTENT === -->
    <div id="content" class="container">
      <div class="row margin-vert-30">
        <!-- Side Column -->
            <?php include("/home/sciwalker/public_html/sidebar_2018.html") ;?>
          <!-- End Side Column -->
          <!-- Main Column -->
          <div class="col-md-9">
            <!-- Main Content -->
<head>
<title>Fibonacci Numbers</title>
<script type="text/x-mathjax-config">
  MathJax.Hub.Config({
    tex2jax: {
      inlineMath: [ ['$','$'], ["\\(","\\)"] ],
      processEscapes: true
    }
  });
  </script><script type="text/javascript" src="/MathJax/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script> 
  </head>


<h1 style= "text-align: center;">Introduction to Fibonacci Numbers</h1>
<p class="article">
The Fibonacci sequence is perhaps one of the world's most fascinating mathematical theories. It was first discovered in India, where the poets discovered that there is an organized pattern in the vedic poems. Elsewhere in the world, this sequence has seen a minor appearance in Chinese YanHui triangle (or Pascal triangle, as it is more commonly called). However, it was first clearly espoused as a mathematical theorem by Fibonacci, who was also among the pioneers to introduce Arabic numbers to the European world. Today, we found many interesting applications of the Fibonacci numbers, especially in the natural world.
</p>
<div style="text-align:center;" >
<img src="/Mathematics Articles/March/fibo.png" align="middle" alt="Fibonacci" style="width:118 px;height:159px;">
<p>Fibonacci</p>
</div>
<p>

Imagine that you are playing a riddle with your friend, and your friend shows you this sequence of numbers and ask you to guess the next number, can you solve it?
<script>

console.log("testing?");
</script>

The Fibonacci sequence consists of the following infinite series of numbers:
\begin{equation}
0,1,1,2,3,5,8,13,21,34,55,89,144...
\end{equation}
The current number is obtained by adding up the two numbers before it, for example:
<ul>
<li>3=2+1</li>
<li>21=13+8</li>
<li>89=55+34</li>
</ul>
</p>
<h2>Mathematical Rule of Fibonacci Number</h2>
<p>Based on the list above, we could express the Fibonacci sequence in a set of mathematical rules. First of all, let's look at the condition:<br>
The current number must be equal to the addition of the previous two numbers. 
<br>
Based on this criterion, we can write the Fibonacci sequence as the following equation:
\begin{equation}
F_n=F_{n-1}+F_{n-2}
\end{equation}
</p>
<p>
where $n$ is the n-term of the Fibonacci numbers.
</p>
<p>
Now, let's look at the following table, which shows the list of Fibonacci numbers until $n=18$.
</p>
<div  >
<table align=center style ="width:24%;font-size:24px;">
<tr>
<th>$n$</th>
<th>$F_n$</th>
</tr>

<tr>
<th>0</th>
<th>0</th>
</tr>

<tr>
<th>1</th>
<th>1</th>
</tr>

<tr>
<th>2</th>
<th>1</th>
</tr>

<tr>
<th>3</th>
<th>2</th>
</tr>

<tr>
<th>4</th>
<th>3</th>
</tr>

<tr>
<th>5</th>
<th>5</th>
</tr>

<tr>
<th>6</th>
<th>8</th>
</tr>

<tr>
<th>7</th>
<th>13</th>
</tr>

<tr>
<th>8</th>
<th>21</th>
</tr>

<tr>
<th>9</th>
<th>34</th>
</tr>

<tr>
<th>10</th>
<th>55</th>
</tr>

<tr>
<th>11</th>
<th>89</th>
</tr>

<tr>
<th>12</th>
<th>144</th>
</tr>

<tr>
<th>13</th>
<th>233</th>
</tr>

<tr>
<th>14</th>
<th>377</th>
</tr>

<tr>
<th>15</th>
<th>610</th>
</tr>

<tr>
<th>16</th>
<th>987</th>
</tr>

<tr>
<th>17</th>
<th>1597</th>
</tr>

<tr>
<th>18</th>
<th>2584</th>
</tr>
<caption align="bottom"><p>List of $F_n$</p></caption>
</table>
</div>



<h2>Fibonacci Numbers and the Spiral</h2>
<p>
Now, let’s try to make 2 square blocks of the width of 1 unit, and try to stack up another square block where its width is equal to the sum of the previous 2 blocks. We would obtain the following image:
</p>
<div style="text-align:center;" >
<img src="/Mathematics Articles/March/3 blocks.jpg" align="middle" alt="3 blocks" style="width:118 px;height:159px;">
</div>
</p>

<p>Next, we will add another square block of width 3 unit at the bottom of the 1-block and 2-block, and repeat the process until we get a square block of 8 unit. For example 5 and 8 make 13, 8 and 13 make 21, and so on.
</p>
<div style="text-align:center;" >
<img src="/Mathematics Articles/March/6 blocks.png" align="middle" alt="3 blocks" style="width:346 px;height:287px;">
</div>
<p>
Guess what? This reminded us of the Fibonacci number! Now we try to draw a quarter-circle that encompasses each of the block in the diagram. So we will eventually get to the following: 
</p>
<div style="text-align:center;" >
<img src="/Mathematics Articles/March/fullblocks.png" align="middle" alt="3 blocks" style="width:450 px;height:280px;">
</div>
<p>This beautiful pattern actually exists in our natural world, for examples:</p>
<ol>
<li><p>Nautilus</p>
<div style="text-align:center;" >
<img src="/Mathematics Articles/March/nautilus.png" align="middle" alt="3 blocks" style="width:348 px;height:509px;">

</div>
<caption>Source: https://www.goldennumber.net/wp-content/uploads/2013/08/nautilus-spiral-vs-golden-spiral.gif</caption>
</li>
<li><p>Hurricanes</p>
<div style="text-align:center;" >
<img src="/Mathematics Articles/March/hurricane.png" align="middle" alt="3 blocks" style="width:468px;height:612px;">

</div>
<caption>Source:http://cdn3-www.webecoist.momtastic.com/assets/uploads/2012/10/nature-geometry-hurricane1.jpg</caption>
</li>
</ol>

<h2>Obtaining Golden Ratio</h2>
<p>Now, here're some heavier stuff. When we take any two successive numbers from the Fibonacci numbers of higher term, the ratio of the number to the previous number is very close to the Golden Ratio "$\phi$"
\begin{equation}
\phi=\frac{1+\sqrt{5}}{2}=1.6180339...
\end{equation}
Now, let’s try to divide 3 with 2, apparently we would get 1.5, which is about 7% of percentage difference with the actual golden ratio number($\frac{1.6180339-1.5}{1.6180339}\approx 0.07$), not very impressive isn’t it?

</p>
<p>
But if we try to find the ratio for a pair of larger Fibonacci numbers, the result is indeed very close to the golden ratio number! 
</p>
<div style="text-align:center;" >
<img src="/Mathematics Articles/March/ratio.png" align="middle" alt="3 blocks" style="width:445 px;height:131px;">
<p align="center">Golden Ratio</p>
</div>
<p>
Let’s do the division of 377 and 610, we will get 1.618037, which is less than 0.0002% from the actual golden ratio. In fact, the bigger the pair of Fibonacci Numbers, the closer the approximation, as demonstrated by the table below:
</p>
<table id="autotable" align=left; style ="width:24%;font-size:24px;">
<tr align="left">
<th>$F_{n-1}$</th>
<th>$F_n$</th>
<th>$\frac{F_n}{F_{n-1}}$</th>
</tr>

<tr align="left">
<th>2</th>
<th>3</th>
<th>1.5</th>
</tr>
<!--
<tr>
<th>3</th>
<th>5</th>
<th>1.6666...</th>
</tr>

<tr>
<th>5</th>
<th>8</th>
<th>1.5</th>
</tr>
-->

<caption align="bottom"><p></p></caption>
</table>
<script>
    var table = document.getElementById("autotable");
var data= [
  [2, 3]
];
    for (var i =1;i<12;i++){
    var x=data[i-1][1];
    var y=data[i-1][0]+data[i-1][1];
    var data2=[x,y];
    data.push(data2);
    }
    var ratio = new Array();
    for (var i =0;i<12;i++){
    ratio[i]=data[i][1]/data[i][0];
    data[i].push(ratio[i])
}
    
    for (var i =1;i<12;i++){
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    cell1.innerHTML = data[i][0];
    cell2.innerHTML = data[i][1];
    cell3.innerHTML = data[i][2];
    }
</script>
<p>
We could write this expression in a more general form:
\begin{equation}
\lim_{n\rightarrow\infty}\frac{F(n+1)}{F(n)}=1.6180339..
\end{equation}
</p>
<p>Therefore, it has been shown that Fibonacci numbers and the golden ratio are closely intertwined. Now we could use a formula that was discovered by Abraham de Moivre to calculate the Fibonacci numbers based on golden ratio:

\begin{equation}
x_n=\frac{\phi^n-\psi^n}{\phi-\psi}=\frac{\phi^n-\psi^n}{\sqrt{5}}
\end{equation}
Where $\psi=\frac{1-\sqrt{5}}{2}=-0.6180339...$

For example:
\begin{equation}
x_5=\frac{\phi^5-\psi^5}{\sqrt{5}}
\end{equation}
</p>

<h2>Applications of Fibonacci Numbers in Genetics</h2>

<p>Fibonacci numbers have seen a stunning occurence in the genetic studies as well. According to the genetic studies, a man has two kinds of chromosomes, X chromosome and Y chromosome; Both woman chromosomes are of the X type. The X chromosome of a man comes from his mother whereas his Y- chromosome comes from his father. For a woman, one of her X chromosome comes from her mother and another X chromosome comes from her father.
</p>
<p>
Let's take an example of man called Peter, Peter obtained his X chromosome from his mother, therefore he received his X chromosome from a single parent. His mother, however, received an X chromosome from her mother and another X chromosome from her father. Therefore, we say two grandparents contributed to Peter's X chromosome. Moving further, Peter's maternal grandfather received his X chromosome from a single parent, whereas Peter's maternal grandmother received her X chromosomes from two parents, so three great great grandparents contributed to Peter's X chromosome. Following the same logic, there are 5 great great grandparents who contributed to the male descendant's X chromosome.</p>
<p>
Readers with sharp eyes will see that all the numbers of ancestors for a particular generation follow the Fibonacci numbers, as shown in the diagram below.
</p>
<div style="text-align:center;" >
<img src="/Mathematics Articles/March/Chromosomes.jpg" align="middle" alt="3 blocks" style="width:703px;height:313px;">

            <!-- End Main Content -->
          </div>
          <!-- End Main Column -->
        </div>
      </div>
      <!-- === END CONTENT === -->
<?php include("/home/sciwalker/public_html/footer_2018.html") ?>

  <!-- JS -->
  <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="assets/js/scripts.js"></script>
  <!-- Isotope - Portfolio Sorting -->
  <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
  <!-- Mobile Menu - Slicknav -->
  <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
  <!-- Animate on Scroll-->
  <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
  <!-- Slimbox2-->
  <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
  <!-- Modernizr -->
  <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
  <!-- End JS -->
</body>
</html>
<!-- === END FOOTER === -->







