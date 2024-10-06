<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <!-- Title -->
  <title>Hopf Fibration - Single Qubit</title>
  <!-- Meta -->
  
  <meta name="description" content="Hopf Fibration and its relation to the quantum states">
  <meta name="author" content="Elijah Wong">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
  <!-- Favicon -->
  <link href="favicon.html" rel="shortcut icon">
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="../../assets/css/bootstrap.css" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="../../assets/css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/nexus.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/custom.css" rel="stylesheet">
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
<header><script type="text/x-mathjax-config">
  MathJax.Hub.Config({
    tex2jax: {
      inlineMath: [ ['$','$'], ["\\(","\\)"] ],
      processEscapes: true
    }
  });
  </script><script type="text/javascript" src="/MathJax/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</header>

<h1>Hopf Fibration and Its Relation to Quantum State</h1>

This article is a continuation of the <a class="link" href ="https://www.phymath.com/Mathematics%20Articles/2019/Hopf%20Fibration%20-%20stereographic%20projection.php">previous article</a> , now we will explore more about the geometry of single qubit using the tool of Hopf fibration.
The space of a single qubit is a two-dimensional complex Hilbert space, which renders the visualization of the space a non-trivial task. However, by reducing the Hilbert space into Hopf bundle and study its constituent vectors in base space and total space, it is possible to describe the geometrical structure and even visualize it.
In particular, Urbantke [1] has done a detailed analysis on the geometric construction of the Hopf fibration of a single qubit, he analyzed the geometry of pure states and the visualization of the phases of the corresponding normalized state vectors in S3 and S2 picture.
A single qubit quantum state can be written as the following equation:
\begin{equation}
|\psi\rangle = Z_0 |0\rangle +Z_1 |1\rangle
\end{equation}
for those perplexed by this expression, $Z_0$ and $Z_1$ are just arbitrary complex numbers that fulfill the normalization condition of $|Z_0|^2+|Z_1|^2=1$. Now, if you are trying to represent a coordinate system of two complex numbers, you need a 4-dimensional space in order to do that, since each complex number has exactly two degree of freedoms. However, the normalization condition has reduced the degree of freedom by one, and therefore the overall equation can be represented using 3-dimensional space. One of the most obvious results for this representation is the Bloch sphere, where the “North Pole” represents $|0\rangle$ and “South Pole” represents $|1\rangle$ respectively. A more thorough introduction of the Bloch sphere can be read at this article: <a href = "https://medium.com/@quantum_wa/quantum-computation-a-journey-on-the-bloch-sphere-50cc9d73530">Quantum Computation: A journey on the Bloch Sphere</a>.
Now we got to turn our attention again to the Hopf fibration. Just like the Bloch sphere, A complex plane Hopf fibration can be used to represent the 1 qubit quantum state in 3 dimensions. Recall that 
\begin{equation}
|\psi\rangle = Z_0 |0\rangle +Z_1 |1\rangle
\end{equation}
where $(Z_0,Z_1)=( n_0e^{\mathbf{i}\nu_0},n_1e^{\mathbf{i}\nu_1} )\in \mathbb{C}$ and $|Z_0|^2+|Z_1|^2=1$. Recall that there is an equivalence relation $ e^{\mathbf{i}\theta} (Z_0,Z_1 )\sim ( Z_0,Z_1 )$ which defines the homogeneous coordinates in $\mathbb{C}P^1$ for single qubit state. Due to the normalization condition, the real parts of $Z_\alpha$ can be parametrized as $( n_0,n_1 )=( \sin \delta, \cos \delta ), \ 0\leq \delta \leq 2\pi$, it is now obvious that at point $\delta=0$ and $2\pi$ the coordinates degenerate to a circle, whereas for $\delta$ between 0 and $2\pi$, degrees of freedom $\nu_0$ and $\nu_1$ parametrize a 3-sphere. 
Now we are ready to define the Hopf fibration for a single qubit, it is projection $S^3 \rightarrow S^2$ such that points of the 3-sphere $(Z_0,Z_1)$ are mapped to the points $(x_0,x_1,x_2)$ on the 2-sphere. The Hopf map $\epsilon$ is composed out of two maps $h_1\circ h_0$:
\begin{equation}\label{firsthopf}
\begin{split}
h_0&: \begin{array}{rl}S^3&\rightarrow R^2+{\infty}\\ (Z_0,Z_1)&\rightarrow C=\overline{Z_0 Z_1^{-1}} \end{array} \\
h_1 &: \begin{array}{rl}
R^1+\{ \infty \} &\rightarrow S^2\\
C \ \ &\rightarrow M(x_0,x_1,x_2)
\end{array}
\ \ x_0^2 +x_1^2 +x_2^2=1
\end{split}
\end{equation}
from \eqref{firsthopf}, we obtain
$$
C=\frac{n_0}{n_1}e^{\mathbf{i}(\nu_0-\nu_1)}=X_0+X_1 \mathbf{i}
$$
where $\mathbf{i}$ is the imaginary number, and
$$
X_0=\frac{n_0}{n_1} \cos (\nu_0-\nu_1), \ X_1=\frac{n_0}{n_1} \sin (\nu_0-\nu_1).
$$

            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8733815049329161"
                 crossorigin="anonymous"></script>
            <ins class="adsbygoogle"
                 style="display:block; text-align:center;"
                 data-ad-layout="in-article"
                 data-ad-format="fluid"
                 data-ad-client="ca-pub-8733815049329161"
                 data-ad-slot="2979287711"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>

An important implication of $h_0$ is that all points differed by a phase factor $U(1)$ in $S^3$ are mapped onto the same point in $S^2$, which indicates that every point on $S^2$ corresponds to a circle $S^1$ on $S^3$. The subsequent map $h_1$ describes an inverse stereographic projection from $S^2$ to a three-dimensional space, which is given in the following forms:
$$
x_0=\frac{2X_0}{1+X^2_0+X^2_1},x_1=\frac{2X_1}{1+X^2_0+X^2_1},x_2=\frac{X_0^2+X_1^2-1}{1+X^2_0+X^2_1}.
$$
After the inverse stereographic projection, the set of states $e^{\mathbf{i}\theta }|\Psi\rangle$ is mapped onto the coordinates $(x_0,x_1,x_2)$.
\begin{equation}
\begin{split}
x_0 =& 2 Re(Z_0Z_1 \cos(\nu_1-\nu_0)),\\
x_1 =& 2 Re(Z_0Z_1 \sin(\nu_1-\nu_0)),\\
x_2 =& Z_0^2-Z_1^2.
\end{split}
\end{equation}
The coordinates $(x_0,x_1,x_2)$ are known as Bloch sphere coordinates, they can also be computed using the Pauli matrices:
\begin{equation}
\begin{split}
x_0&=\langle \sigma_x\rangle=\begin{pmatrix}
\bar{Z_0} & \bar{Z_1}
\end{pmatrix}
\begin{pmatrix}
0 & 1\\
1 & 0
\end{pmatrix}
\begin{pmatrix}
Z_0 \\ Z_1
\end{pmatrix},\\
x_1&=\langle \sigma_y\rangle=\begin{pmatrix}
\bar{Z_0} & \bar{Z_1}
\end{pmatrix}
\begin{pmatrix}
0 & -\mathbf{i}\\
\mathbf{i} & 0
\end{pmatrix}
\begin{pmatrix}
Z_0 \\ Z_1
\end{pmatrix},\\
x_2&=\langle \sigma_z\rangle =\begin{pmatrix}
\bar{Z_0} & \bar{Z_1}
\end{pmatrix}
\begin{pmatrix}
1 & 0\\
0 & -1
\end{pmatrix}
\begin{pmatrix}
Z_0 \\ Z_1
\end{pmatrix}.\\
\end{split}
\end{equation}
which can be related to the pure state density matrix $\rho$ of which $|\Psi\rangle$ from \eqref{psi} are used:
\begin{equation}
\begin{split}
\rho &=|\Psi\rangle \langle \Psi | \\
&=\frac{1}{2}\left( \begin{array}{cc}
Z_0^2 & 2(Z_0Z_1\cos \theta -\mathbf{i}Z_0Z_1\sin\theta \\
2(Z_0Z_1\cos \theta +\mathbf{i}Z_0Z_1\sin\theta) &Z_1^2
\end{array}\right)\\
&=\frac{1}{2}\left( \begin{array}{cc}
1+x_2 & x_0-\mathbf{i}x_1 \\
x_0+\mathbf{i}x_1 &1-x_2
\end{array}\right).
\end{split}
\end{equation}
For pure states, the density matrices can be bijectively mapped to the surface of Bloch sphere, while the density matrices of mixed states are bijectively mapped to the interior of the Bloch ball. The projective Hilbert space for pure states thus correspond to the Bloch sphere, with all pure states differing by a $U(1)$ phase are identified.





            <!-- End Main Content -->
          </div>
          <!-- End Main Column -->
        </div>
      </div>
      <!-- === END CONTENT === -->
<?php include("/home/sciwalker/public_html/footer_2018.html") ?>

  <!-- JS -->
  <script type="text/javascript" src="../../assets/js/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="../../assets/js/scripts.js"></script>
  <!-- Isotope - Portfolio Sorting -->
  <script type="text/javascript" src="../../assets/js/jquery.isotope.js" type="text/javascript"></script>
  <!-- Mobile Menu - Slicknav -->
  <script type="text/javascript" src="../../assets/js/jquery.slicknav.js" type="text/javascript"></script>
  <!-- Animate on Scroll-->
  <script type="text/javascript" src="../../assets/js/jquery.visible.js" charset="utf-8"></script>
  <!-- Slimbox2-->
  <script type="text/javascript" src="../../assets/js/slimbox2.js" charset="utf-8"></script>
  <!-- Modernizr -->
  <script src="../../assets/js/modernizr.custom.js" type="text/javascript"></script>
  <!-- End JS -->
</body>
</html>
<!-- === END FOOTER === -->