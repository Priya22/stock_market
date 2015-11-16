
<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>


<?php
include_once('function.php');
$query="SELECT * FROM homepage WHERE 1 ";
$query1="SELECT * FROM coach_login WHERE 1";
	$result=queryMysql($query);
	$result1=queryMysql($query1);
	$num1=mysql_num_rows($result1);
	$num=mysql_num_rows($result);
	for($i=0;$i<$num;$i++)
	{
		
		$row=mysql_fetch_row($result);
			if($i==0)
		$cricket=$row[1];

			if($i==1)
		$football=$row[1];
          if($i==2)
		$tennis=$row[1];
if($i==3)
		$swimming=$row[1];
if($i==4)
		$basket=$row[1];
if($i==5)
		$hockey=$row[1];
if($i==6)
		$f1=$row[1];
if($i==7)
		$f2=$row[1];
if($i==8)
		$f3=$row[1];


	
						
                       
		}
	$cc=$fc=$hc=$bc=$sc=$tc=0;
	$cco[0]=$sco[0]=$tco[0]=$bco[0]=$fco[0]=$hco[0]="";
$c_c=$f_c=$h_c=$b_c=$s_c=$t_c="";
	
	for($i=0;$i<$num1;$i++)
	{
		
		$row=mysql_fetch_row($result1);
			
			if($row[2]=="Cricket")
			{
				$cco[$cc]=$row[0];
				$cco[$cc+1]=$row[3];
				$cco[$cc+2]=$row[4];
		        $cc+=3;
				
			}
			if($row[2]=="Basketball")
			{
				$bco[$bc]=$row[0];
				$bco[$bc+1]=$row[3];
				$bco[$bc+2]=$row[4];
		        $bc+=3;
			}
			
if($row[2]=="Football")
			{
				$fco[$fc]=$row[0];
				$fco[$fc+1]=$row[3];
				$fco[$fc+2]=$row[4];
		        $fc+=3;
			}
			
if($row[2]=="Swimming")
			{
				$sco[$sc]=$row[0];
				$sco[$sc+1]=$row[3];
				$sco[$sc+2]=$row[4];
		        $sc+=3;
			}
			
if($row[2]=="Hockey")
			{
				$hco[$hc]=$row[0];
				$hco[$hc+1]=$row[3];
				$hco[$hc+2]=$row[4];
		        $hc+=3;
			}
			
if($row[2]=="Tennis")
			{
				$tco[$tc]=$row[0];
				$tco[$tc+1]=$row[3];
				$tco[$tc+2]=$row[4];
		        $tc+=3;
			}
			

			
	}
	$b_c="dfff";
	/*$sports=array("Cricket"=>$c_c,"Football"=>$f_c,"Tennis"=>$t_c,"Swimming"=>$s_c,"Basket"=>$b_c,"Hockey"=>$h_c);
	foreach ($sports as $a=>$b)
	{
	queryMysql("UPDATE homepage SET coach = '$b' WHERE sport= '$a' ");
	}*/
$def=" 
    <thead>
      <tr>
        <th>Name</th>
        <th>Qulification</th>
		<th>Experience</th>
  
      </tr>
    </thead>
	
   <tbody>
";
$c_c=$f_c=$h_c=$b_c=$s_c=$t_c=$def;

            for($j=0;$j<$cc;$j+=3)
			{
				$j1=$j+1;
				$j2=$j+2;
				$c_c=$c_c."<tr>
        <td>$cco[$j]</td>
        <td>$cco[$j1]</td>
        <td>$cco[$j2]</td>
		
        
      </tr> ";
			}
		
			
						
           for($j=0;$j<$fc;$j+=3)
			{
				$j1=$j+1;
				$j2=$j+2;
				$f_c=$f_c."<tr>
        <td>$fco[$j]</td>
        <td>$fco[$j1]</td>
        <td>$fco[$j2]</td>
		
        
      </tr> ";
			}
		
						
            for($j=0;$j<$tc;$j+=3)
			{
				$j1=$j+1;
				$j2=$j+2;
				$t_c=$t_c."<tr>
        <td>$tco[$j]</td>
        <td>$tco[$j1]</td>
        <td>$tco[$j2]</td>
		
        
      </tr> ";
			}
		
			
						
            for($j=0;$j<$bc;$j+=3)
			{
				$j1=$j+1;
				$j2=$j+2;
				$b_c=$b_c."<tr>
        <td>$bco[$j]</td>
        <td>$bco[$j1]</td>
        <td>$bco[$j2]</td>
		
        
      </tr> ";
			}
		
			
						
            for($j=0;$j<$sc;$j+=3)
			{
				$j1=$j+1;
				$j2=$j+2;
				$s_c=$s_c."<tr>
        <td>$sco[$j]</td>
        <td>$sco[$j1]</td>
        <td>$sco[$j2]</td>
		
        
      </tr> ";
			}
		
			
						
            for($j=0;$j<$hc;$j+=3)
			{
				$j1=$j+1;
				$j2=$j+2;
				$h_c=$h_c."<tr>
        <td>$hco[$j]</td>
        <td>$hco[$j1]</td>
        <td>$hco[$j2]</td>
		
        
      </tr> ";
			}
		
							
                       
		
	
echo <<<_END
<!DOCTYPE html>
<html lang="en">

<head>
<!--, Google Map Specifics Eevnts View Profile Manage and Update Profile Select Practice Session-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sports Academy </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Sports Academy</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../php/loginhome_investor.php">Coach Login</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../php/loginhome_stu.php">Student Login</a>
                    </li>
                   <li>
                        <a class="page-scroll" href="../php/loginhome_admin.php">Admin Login</a>
                    </li>
                    <!--<li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li> !--->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our Academy!</div>
                <div class="intro-heading">Sparta</div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Salient Features</h2>
                    <h3 class="section-subheading text-muted">Benefits of Sparta</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Flexible Timings</h4>
                    <p class="text-muted">$f1.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Well qualified coaches</h4>
                    <p class="text-muted">$f2.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-money fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Affordable fees</h4>
                    <p class="text-muted">$f3</p>
                </div>
            </div>
        </div>
    </section>
-->
    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Sports</h2>
                    <h3 class="section-subheading text-muted">Sports offered by the academy.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cricket.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Cricket</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
					
                        <img src="img/portfolio/foot.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Football</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/tennis.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Tennis</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/swim.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Swimming</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/basket.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Basketball</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/hockey.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Hockey</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section 
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2011</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2012</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section 
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Coaches</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src=" img/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Cricket</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src=" img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Football</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src=" img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Tennis</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
        <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src=" img/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Swimming</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src=" img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Basketball</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src=" img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Hockey</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
</div>
    </section>
-->
    <!-- Clients Aside 
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>
-->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted " style="color:white">Phone no: 5645314151<br><br>E-mail:admin@academy.com</br><br><p><b>Location:</b>Spartan Academy<br>New Avenew Road Bangalore -15<br>All classes are conducted here</br> </p></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="../Php/message.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *"name="name" >
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" name="email" >
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" name="phone" >
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" name="message" ></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<!--    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2014</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
-->
    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Cricket</h2>
							
                            
                            <p>$cricket</p>
                             <h3>Timing</h3>
                            <p>Weekdays</p>
							<h3>Batch Size</h3>
							<p> 40</p>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Footbal</h2>
                            
                            <p>$football</p>
                            <h3>Timing</h3>
                            <p>Weekends</p>
							<h3>Batch Size</h3>
							<p> 60</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Tennis</h2>
                            <p>$tennis.</p>
                            <<h3>Timing</h3>
                            <p>Monday-Wednesday</p>
							<h3>Batch Size</h3>
							<p> 100</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Swimming</h2>
                            
                            <p>$swimming.</p>
                            <h3>Timing</h3>
                            <p>Thursday-Saturday</p>
							<h3>Batch Size</h3>
							<p>12</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2> Basketball</h2>
                            
                            
                            <p>$basket</p>
                            <h3>Timing</h3>
                            <p>Weekdays</p>
							<h3>Batch Size</h3>
							<p> 50</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Hockey</h2>
                            
                            
                            <p>$hockey.$c_c</p>
                            <h3>Timing</h3>
                            <p>Weekends</p>
							<h3>Batch Size</h3>
							<p> 35</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->

</body>

</html>
_END;
$sports=array("Cricket"=>$c_c,"Football"=>$f_c,"Tennis"=>$t_c,"Swimming"=>$s_c,"Basket"=>$b_c,"Hockey"=>$h_c);
	foreach ($sports as $a=>$b)
	{
queryMysql("UPDATE homepage SET coach='$b' WHERE sport='$a' AND sport='$a'");	
}
?>
    <!-- jQuery -->

    