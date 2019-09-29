<?PHP
	$page_title='Login';
    session_start();
    $fields_error = ""; 
    $fields_error1 = ""; 
    $error =""; 
    
    if(isset($_POST['submit'])||true)
    {    
        if(empty($_POST['email']) || trim($_POST['email']) =='' )
        {
            $fields_error= "Username is required";
        }else {
            $username=htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
        }

        if(empty($_POST['pass'])  || trim($_POST['pass']) =='' ) 
        {
            $fields_error1 = "Password is required";
        }else {
            $password = $_POST['pass'];
        }
		$sql = "SELECT * FROM employee WHERE EmailID='$username' AND Password='$password'";
        if(empty($fields_error) && empty($fields_error1))
        {
            $db = new mysqli("localhost","root","","office") or die("cannot select DB");     
            $result = mysqli_query($db,$sql);
            $data = mysqli_num_rows($result);
            if($data)
            {
                $_SESSION["username"] = $username;
                while($row=mysqli_fetch_array($result,$data))
              	{	
              		$name=$row['Name'];
              		$ID = $row['ID'];
              		$address=$row['Address'];
              		$salary=$row['Salary'];
              		$bdate=$row['BDate'];
              		$phno=$row['Phoneno'];
              		$leaves=$row['Leaves'];
              		$bank=$row['Bank'];
              		$accno=$row['Accntno'];	
              		$dept=$row['DeptNo']	;
              		//$designation=$row['designation'];	
              		//echo "Welcome ".$row['Name'];//htmlspecialchars(strip_tags($_POST['email']), ENT_QUOTES, 'UTF-8');
              		
            	}
            }
            else {
                $error = "OOOPS..Username or Password is wrong!!!";
            }

       // mysqli_close ($connection);
        }
    }
 session_destroy();
//header("location:login.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="nagC" />
<!-- Document Title -->
<title>Profile</title>

<!-- StyleSheets -->
<link rel="stylesheet" href="css2/ionicons.css">
<link rel="stylesheet" href="css2/bootstrap.css">
<link rel="stylesheet" href="css2/font-awesome.css">
<link rel="stylesheet" href="css2/main.css">
<link rel="stylesheet" href="css2/style.css">
<link rel="stylesheet" href="css2/responsive.css">

<!-- FontsOnline -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

<!-- JavaScripts -->
<script src="/js/vendor/modernizr.js"></script>
</head>
<body>
<div id="wrap"> 
  
  <!-- Header -->
  <nav >
       <ul >
    </ul>
 
  </nav>
  
  <!-- End Header --> 
  
  <!-- Content -->
  <main class="cd-main-content">
    <div id="content">
      <div class="resume">
        <div class="container"> 
          
          <!-- TOP HEAD -->
          <div class="top-head">
            <div class="row">
              <div class="col-sm-6">
                <h4>Profile </h4>
                <a href="">Edit Profile</a> </div>   
       <div><?php if($dept==9){ echo " <form type='_POST' action='search.php'><input id='searchform1' type='text' name='name' placeholder='Search Here'> 
        <input id='searchform2' type='submit' name='submit' value='Search'> </form>";}?></div>
               <div  id="logout"> <a href="login.php"><img  width="40px !important" height="40px !important" src="images/exit.png"/></a> </div>
            </div>

          </div>
  
          <!-- Resume -->
          <div class="row"> 
            <!-- Sidebar -->
            <div class="col-md-4">
              <div class="side-bar"> 
                
                <!-- Professional Details -->
                <h5 class="tittle">Professional Details</h5>
                <img src="images/avatar.jpg" class="img-responsive" alt="">
                <ul class="personal-info">
                  <li>
                    <p> <span> Name</span> <?php echo $name; ?> </p>
                  </li>
                  <li>
                    <p> <span> DOB</span> <?php echo $bdate;?> </p>
                  </li>
                  <li>
                    <p> <span> Location</span> <?php echo $address;?></p>
                  </li>
                  <li>
                    <p> <span> Experience</span> 15 Years </p>
                  </li>
                  <li>
                    <p> <span> Degree</span> MBA </p>
                  </li>
                  <li>
                    <p> <span> Employee ID</span> <?php echo $ID; ?> </p>
                  </li>
                  <li>
                    <p> <span> Phone</span> <?php echo $phno;?></p>
                  </li>
                  <li>
                    <p> <span>E-mail</span><a href="#."><?php echo $username?></a> </p>
                  </li>
                  <li>
                    <p> <span> Website</span><a href="#."> <?php echo $name; ?>@nagctech.com </a></p>
                  </li>
                </ul>
                
                <!-- Attachments -->
                <h5 class="tittle">Attachments</h5>
                <div class="attach bor-btm padding-25">
                  <ul>
                    <li>
                      <p><img src="images/pdf-icon.jpg" alt="" > Curriculum-Vitae.pdf <a href="#."><i class="fa fa-cloud-download"></i></a> <a href="#."><i class="fa fa-eye"></i></a></p>
                    </li>
                    <li>
                      <p><img src="images/word-icon.jpg" alt="" > COE.docx <a href="#."><i class="fa fa-cloud-download"></i></a> <a href="#."><i class="fa fa-eye"></i></a></p>
                    </li>
                  </ul>
                </div>
                
                <!-- Social Profiles -->
                <h5 class="tittle">Social Profiles</h5>
                <div class="social-icon bor-btm padding-25">
                  <ul>
                    <li> <a href="#."> <i class="fa fa-facebook"></i></a> </li>
                    <li> <a href="#."> <i class="fa fa-google"></i></a> </li>
                    <li> <a href="#."> <i class="fa fa-twitter"></i></a> </li>
                    <li> <a href="#."> <i class="fa fa-linkedin"></i></a> </li>
                    <li> <a href="#."> <i class="fa fa-skype"></i></a> </li>
                  </ul>
                </div>
                
                <!-- Contact Me -->
                <h5 class="tittle">Contact Me</h5>
                <div class="contact padding-25"> 
                  <!-- Success Msg -->
                  <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>
                  
                  <!-- FORM -->
                  <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
                    <ul class="row">
                      <li class="col-sm-12">
                        <label>
                          <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                        </label>
                      </li>
                      <li class="col-sm-12">
                        <label>
                          <input type="text" class="form-control" name="company" id="company" placeholder="Subject">
                        </label>
                      </li>
                      <li class="col-sm-12">
                        <label>
                          <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message"></textarea>
                        </label>
                      </li>
                      <li class="col-sm-12">
                        <button type="submit"  value="submit" id="btn_submit" onClick="proceed();">Send Message</button>
                      </li>
                    </ul>
                  </form>
                </div>
              </div>
            </div>
            
            <!-- MAIN CONTENT -->
            <div class="col-md-8"> 
              
              <!-- NAV LINKS -->              
              <nav> 
                <!-- Brand and toggle get grouped for better mobile display -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-tabis" aria-expanded="false"> <span class="tittle">MENU</span> <span class="fa fa-navicon icon-nav"></span> </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="nav-tabis">
                  <ul class="isop-filter nav nav-pills">
                    <li role="presentation" class="active"><a href="#about-me" aria-controls="about-me" role="tab" data-toggle="tab"><i class="icon-user"></i> ABOUT ME</a></li>
                    <li role="presentation"><a href="#resume" aria-controls="resume" role="tab" data-toggle="tab"><i class="icon-book-open"></i>RESUME</a></li>
                    <li role="presentation"><a href="#portfolio" aria-controls="portfolio" role="tab" data-toggle="tab"><i class="icon-rocket"></i>PORTFOLIO</a></li>
                    <li role="presentation"><a href="#blog" aria-controls="blog" role="tab" data-toggle="tab"><i class="icon-note"></i>BLOG</a></li>
                    <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab"> <i class="icon-pencil"></i>CONTACT ME</a></li>
                  </ul>
                </div>
              </nav>   
              <div class="tab-content"> 
                
                <!-- ABOUT ME -->
                <div role="tabpanel" class="tab-pane fade in active" id="about-me">
                  <div class="inside-sec"> 
                    <!-- BIO AND SKILLS -->
                    <h5 class="tittle">About Me</h5>
                    
                    <!-- Blog -->
                    <section class="about-me padding-top-10"> 
                      
                      <!-- Personal Info -->
                      <ul class="personal-info">
                         <li>
                    <p> <span> Name</span> <?php echo $name; ?> </p>
                  </li>
                  <li>
                    <p> <span> DOB</span> <?php echo $bdate;?> </p>
                  </li>
                  <li>
                    <p> <span> Location</span> <?php echo $address;?></p>
                  </li>
                  <li>
                    <p> <span> Experience</span> 15 Years </p>
                  </li>
                  <li>
                    <p> <span> Degree</span> MBA </p>
                  </li>
                  <li>
                    <p> <span> Employee ID</span> <?php echo $ID; ?> </p>
                  </li>
                  <li>
                    <p> <span> Phone</span> <?php echo $phno;?></p>
                  </li>
                  <li>
                    <p> <span> E-mail</span> <a href="#."> <?php echo $username?> </a> </p>
                  </li>
                  <li>
                    <p> <span> Website</span><a href="#."> <?php echo rtrim($name); ?>@nagctech.com </a></p>
                  </li>
                      </ul>
                      
                      <!-- I’m a---------- -->
                      <h5 class="tittle">I’m a Home automation Engineer<!--<?php echo $designation;?>--></h5>
                      <div class="padding-20">
                        <p>Evadu kodithey dimma thirigi mind block aipoddho vaade Naag gaadu ...............
                          <br>
                          NagC Tech Is world's Best company which has not yet established ............LOL OK Please....
                        </p>
                      </div>
                      
                      <!-- Services -->
                      <h5 class="tittle">Services</h5>
                      <div class="row padding-20 margin-top-50"> 
                        
                        <!-- Icon -->
                        <div class="col-md-4 text-center">
                          <div class="icon-box i-large ib-black">
                            <div class="ib-icon"> <i class="fa fa-whatsapp"></i> </div>
                            <div class="ib-info">
                              <h4 class="h6">WEB DEVELOPMENT</h4>
                              <p>We have created the new macbook psd version with scalable vector shapes.</p>
                            </div>
                          </div>
                        </div>
                        
                        <!-- Icon -->
                        <div class="col-md-4 text-center">
                          <div class="icon-box i-large ib-black">
                            <div class="ib-icon"> <i class="fa fa-magic"></i> </div>
                            <div class="ib-info">
                              <h4 class="h6">WEB DESIGN</h4>
                              <p>We have created the new macbook psd version with scalable vector shapes.</p>
                            </div>
                          </div>
                        </div>
                        
                        <!-- Icon -->
                        <div class="col-md-4 text-center">
                          <div class="icon-box i-large ib-black">
                            <div class="ib-icon"> <i class="fa fa-smile-o"></i> </div>
                            <div class="ib-info">
                              <h4 class="h6">RESPONSIVE</h4>
                              <p>We have created the new macbook psd version with scalable vector shapes.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Icon Row -->
                      <div class="row padding-20 margin-bottom-50"> 
                        
                        <!-- Icon -->
                        <div class="col-md-4">
                          <div class="icon-box i-large ib-black">
                            <div class="ib-icon"> <i class="fa fa-diamond"></i> </div>
                            <div class="ib-info">
                              <h4 class="h6">Unique Design</h4>
                              <p>We have created the new macbook psd version with scalable vector shapes.</p>
                            </div>
                          </div>
                        </div>
                        
                        <!-- Icon -->
                        <div class="col-md-4">
                          <div class="icon-box i-large ib-black">
                            <div class="ib-icon"> <i class="fa fa-server"></i> </div>
                            <div class="ib-info">
                              <h4 class="h6">Demos Layout</h4>
                              <p>We have created the new macbook psd version with scalable vector shapes.</p>
                            </div>
                          </div>
                        </div>
                        
                        <!-- Icon -->
                        <div class="col-md-4">
                          <div class="icon-box i-large ib-black">
                            <div class="ib-icon"> <i class="fa fa-scissors"></i> </div>
                            <div class="ib-info">
                              <h4 class="h6">Clean Code</h4>
                              <p>We have created the new macbook psd version with scalable vector shapes.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Skills -->
                      <h5 class="tittle">Skills</h5>
                      
                      <!-- Sound Engineering -->
                      <div class="panel-group accordion padding-20" id="accordion">
                        <div class="panel panel-default">
                          <div class="row">
                            <div class="col-sm-4"> 
                              <!-- PANEL HEADING -->
                              <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed"> Photoshop</a> </h4>
                              </div>
                            </div>
                            
                            <!-- Skillls Bars -->
                            <div class="col-sm-8">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"> <span class="sr-only">60% Complete</span> </div>
                              </div>
                              
                              <!-- Skillls Text -->
                              <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                  <p>jsjhdjasdjsjdh.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <!-- Business Administration -->
                        
                        <div class="panel panel-default">
                          <div class="row">
                            <div class="col-sm-4"> 
                              <!-- PANEL HEADING -->
                              <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" class="collapsed"> Coding </a> </h4>
                              </div>
                            </div>
                            
                            <!-- Skillls Bars -->
                            <div class="col-sm-8">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> <span class="sr-only">80% Complete</span> </div>
                              </div>
                            
                             
                            </div>
                          </div>
                        </div>
                        
                        <!-- HTML -->
                        <div class="panel panel-default">
                          <div class="row">
                            <div class="col-sm-4"> 
                              <!-- PANEL HEADING -->
                              <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsethree" class="collapsed"> HTML5/CSS3</a> </h4>
                              </div>
                            </div>
                            
                            <!-- Skillls Bars -->
                            <div class="col-sm-8">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">60% Complete</span> </div>
                              </div>
                              
                             
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
                <div><?php if($dept==9){ echo "<button style='font-style:bold;font-size:15px;color:white;background-color:skyblue;padding:15px;margin:30px;'><a href='update/update.php'>Update Employees</a></button>";}?></div>
                
                <!-- RESUME -->
                <div role="tabpanel" class="tab-pane fade" id="resume">
                  <div class="inside-sec"> 
                    <!-- BIO AND SKILLS -->
                    <h5 class="tittle">Bio & Skills</h5>
                    <div class="bio-info padding-30">
                      <p>Exceptional leadership skills developed through work experience in [club or school government position, tutoring, student mentor/leader, personal coach/trainer, etc.]<br>
                        <br>
                       Flexible team player who prospers in a fast-paced work environment based on past experience [balancing a full course load with a part-time job, working odd hours, a busy office, etc.] <br>
                        <br>
                       Interpersonal and relationship building skills proven through work experience in [club involvement, teamwork, student leader, workshop facilitator, etc.]<br>Proficient computer literacy proven through work experience in [Front desk IT, software programming and applications, spreadsheet tabulations, social media coordination, etc.]
						</p>
                      <div class="skills"> 
                        
                        <!-- HARD SKILLS -->
                        <h5 class="margin-top-30">Hard Skills</h5>
                        <h6>Physical SCiences</h6>
                        
                        <!-- Sound Engineering -->
                        <div class="panel-group accordion" id="accordion5">
                          <div class="panel panel-default">
                            <div class="row">
                              <div class="col-sm-4"> 
                                <!-- PANEL HEADING -->
                                <div class="panel-heading">
                                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion5" href="#collapseOne5"> Sound Engineering</a> </h4>
                                </div>
                              </div>
                              
                              <!-- Skillls Bars -->
                              <div class="col-sm-8">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                                
                                <!-- Skillls Text -->
                                <div id="collapseOne5" class="panel-collapse collapse in">
                                  <div class="panel-body">
                                    <p>Wel paid and highly paid kfjkdjks</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <!-- Business Administration -->
                          <h6>Business Administration</h6>
                          <div class="panel panel-default">
                            <div class="row">
                              <div class="col-sm-4"> 
                                <!-- PANEL HEADING -->
                                <div class="panel-heading">
                                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion5" href="#collapsetwo5" class="collapsed"> Farming Economics</a> </h4>
                                </div>
                              </div>
                              
                              <!-- Skillls Bars -->
                              <div class="col-sm-8">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                                
                                <!-- Skillls Text -->
                                <div id="collapsetwo5" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <p>Well paid kjkdjasdsdhjshdjkhsfkjdfjh</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <!-- Soft Skills -->
                        <h5 class="margin-top-30">Soft Skills</h5>
                        
                        <!-- Application of knowledge -->
                        <h6>Application of knowledge</h6>
                        <div class="panel-group accordion" id="accordion1">
                          <div class="panel panel-default">
                            <div class="row">
                              <div class="col-sm-4"> 
                                <!-- PANEL HEADING -->
                                <div class="panel-heading">
                                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion1" href="#collapsethr" class="collapsed"> Farming Economics</a> </h4>
                                </div>
                              </div>
                              
                              <!-- Skillls Bars -->
                              <div class="col-sm-8">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                                
                                <!-- Skillls Text -->
                                <div id="collapsethr" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <!-- Follow ethical -->
                        <div class="ethical">
                          <h6>Follow ethical work practices</h6>
                          <a href="#.">Prioritize Learning Tasks</a> <a href="#.">Make Ethical Choices</a> <a href="#.">Social Work</a> <a href="#.">Community Work</a> </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Professional Experience -->
                  <div class="inside-sec margin-top-30"> 
                    <!-- Professional Experience -->
                    <h5 class="tittle">Professional Experience</h5>
                    <div class="padding-30 exp-history"> 
                      
                      <!-- Wordpress Developer -->
                      <div class="exp">
                        <div class="media-left"> <span class="sun">2002 - 2008</span> </div>
                        <div class="media-body"> 
                          
                          <!-- COmpany Logo -->
                          <div class="company-logo"> <img src="images/company-logo-1.jpg" alt="" > </div>
                          <h6>Wordpress Developer</h6>
                          <p>Market Network</p>
                          <p>San Francisco, California, USA</p>
                          <p class="margin-top-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam (...) <a href="#.">Read More</a> </p>
                        </div>
                      </div>
                      
                      <!-- html5 and css3 Developer -->
                      <div class="exp">
                        <div class="media-left"> <span class="sun">2009 - 2016</span> </div>
                        <div class="media-body"> 
                          
                          <!-- COmpany Logo -->
                          <div class="company-logo"> <img src="images/company-logo-2.jpg" alt="" > </div>
                          <h6>html5 and css3 Developer</h6>
                          <p>Market Network</p>
                          <p>San Francisco, California, USA</p>
                          <p class="margin-top-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam (...) <a href="#.">Read More</a> </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Academic Background -->
                  <div class="inside-sec margin-top-30"> 
                    <!-- Academic Background -->
                    <h5 class="tittle">Academic Background</h5>
                    <div class="padding-30 exp-history"> 
                      
                      <!-- Wordpress Developer -->
                      <div class="exp">
                        <div class="media-left"> <span class="sun">2002 - 2008</span> </div>
                        <div class="media-body"> 
                          <!-- COmpany Logo -->
                          <div class="company-logo"> <span class="diploma"><i class="fa fa-graduation-cap"></i> Download Diploma</span> </div>
                          <h6>Multimedia Arts</h6>
                          <p>Market Network</p>
                          <p>San Francisco, California, USA</p>
                          <p class="margin-top-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam (...) <a href="#.">Read More</a> </p>
                        </div>
                      </div>
                      
                      <!-- html5 and css3 Developer -->
                      <div class="exp">
                        <div class="media-left"> <span class="sun">2009 - 2016</span> </div>
                        <div class="media-body"> 
                          <!-- COmpany Logo -->
                          <div class="company-logo"> <span class="diploma"><i class="fa fa-graduation-cap"></i> Download Diploma</span> </div>
                          <h6>Mathematics in computer science</h6>
                          <p>Market Network</p>
                          <p>San Francisco, California, USA</p>
                          <p class="margin-top-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam (...) <a href="#.">Read More</a> </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- PORTFOLIO -->
                <div role="tabpanel" class="tab-pane fade" id="portfolio">
                  <div class="inside-sec"> 
                    <!-- BIO AND SKILLS -->
                    <h5 class="tittle">PORTFOLIO</h5>
                    
                    <!-- PORTFOLIO -->
                    <section class="portfolio padding-top-50 padding-bottom-50"> 
                      <!-- Work Filter --> 
                      <!-- PORTFOLIO ITEMS -->
                      <div id="Container" class="item-space row col-3"> 
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-web-design">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-1.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-photography pf-branding-design">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-2.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-web-design pf-branding-design">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-3.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-web-design pf-digital-art ">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-4.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-branding-design pf-digital-art">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-5.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-design pf-digital-art">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-9.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-web-design pf-branding-design">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-7.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-web-design pf-digital-art ">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-8.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-web-design pf-branding-design">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-9.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                      </div>
                    </section>
                  </div>
                </div>
                
                <!-- BLOG -->
                <div role="tabpanel" class="tab-pane fade" id="blog">
                  <div class="inside-sec"> 
                    <!-- BIO AND SKILLS -->
                    <h5 class="tittle">BLOG</h5>
                    
                    <!-- Blog -->
                    <section class="blog blog-page padding-20 padding-top-50 padding-bottom-50 "> 
                      
                      <!-- Blog Post -->
                      <article> <img class="img-responsive" src="images/blog-img-1.jpg" alt="" >
                        <div class="post-info">
                          <div class="post-in">
                            <div class="extra"> <span><i class="icon-calendar"></i>Aug 29, 2015</span> <span class="margin-left-15"><i class="icon-user"></i>Admin</span> <span class="margin-left-15"><i class="icon-bubbles"></i> Featured</span></div>
                            <a href="#." class="tittle-post"> ENJOYING THE SMALL THINGS </a>
                            <p>t's time to play the music. It's time to light the lights. It's time to meet the Muppets on the Muppet Show tonight! Boy the way Glen Miller played Songs the hit parade. Guys like us we had it made. Those were the days. These Happy Days are yours and mine Happy Days.</p>
                            <a href="#." class="btn-1">Read MOre <i class="fa fa-angle-right"></i></a> </div>
                        </div>
                      </article>
                      
                      <!-- BLOG POST -->
                      <article> <img class="img-responsive" src="images/blog-img-2.jpg" alt="" >
                        <div class="post-info">
                          <div class="post-in">
                            <div class="extra"> <span><i class="icon-calendar"></i>Aug 29, 2015</span> <span class="margin-left-15"><i class="icon-user"></i>Admin</span> <span class="margin-left-15"><i class="icon-bubbles"></i> Featured</span></div>
                            <a href="#." class="tittle-post"> ENJOYING THE SMALL THINGS </a>
                            <p>t's time to play the music. It's time to light the lights. It's time to meet the Muppets on the Muppet Show tonight! Boy the way Glen Miller played Songs the hit parade. Guys like us we had it made. Those were the days. These Happy Days are yours and mine Happy Days.</p>
                            <a href="#." class="btn-1">Read MOre <i class="fa fa-angle-right"></i></a> </div>
                        </div>
                      </article>
                      
                      <!-- BLOG POST -->
                      
                      <article> <img class="img-responsive" src="images/blog-img-3.jpg" alt="" >
                        <div class="post-info">
                          <div class="post-in">
                            <div class="extra"> <span><i class="icon-calendar"></i>Aug 29, 2015</span> <span class="margin-left-15"><i class="icon-user"></i>Admin</span> <span class="margin-left-15"><i class="icon-bubbles"></i> Featured</span></div>
                            <a href="#." class="tittle-post"> ENJOYING THE SMALL THINGS </a>
                            <p>t's time to play the music. It's time to light the lights. It's time to meet the Muppets on the Muppet Show tonight! Boy the way Glen Miller played Songs the hit parade. Guys like us we had it made. Those were the days. These Happy Days are yours and mine Happy Days.</p>
                            <a href="#." class="btn-1">Read MOre <i class="fa fa-angle-right"></i></a> </div>
                        </div>
                      </article>
                      
                      <!-- Pagination -->
                      <ul class="pagination">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next</a></li>
                      </ul>
                    </section>
                  </div>
                </div>
                
                <!-- Contact -->
                <div role="tabpanel" class="tab-pane fade" id="contact">
                  <div class="inside-sec"> 
                    <!-- BIO AND SKILLS -->
                    <h5 class="tittle">CONTACT ME</h5>
                    
                    <!-- Conatct Pages  -->
                    <section>
                      <div class="padding-left-30 padding-right-30 padding-top-50 padding-bottom-50">
                        <div class="row "> 
                          <!-- Phone Number  -->
                          <div class="col-md-4 text-center">
                            <div class="icon-box ib-style-1 ib-circle ib-bordered ib-bordered-white ib-bordered-thin ib-medium ib-text-alt i-xlarge dark-text">
                              <div class="ib-icon"> <i class="fa fa-mobile text-primary"></i> </div>
                              <div class="ib-info text-dark">
                                <p><?php echo $phno;?></p>
                               
                              </div>
                            </div>
                          </div>
                          
                          <!-- Address -->
                          <div class="col-md-4 text-center">
                            <div class="icon-box ib-style-1 ib-circle ib-bordered ib-bordered-white ib-bordered-thin ib-medium ib-text-alt i-large">
                              <div class="ib-icon"> <i class="fa fa-map-marker text-primary"></i> </div>
                              <div class="ib-info text-dark">
                                <p><?php echo $address;?></p>
                              </div>
                            </div>
                          </div>
                          
                          <!-- Email  -->
                          <div class="col-md-4 text-center">
                            <div class="icon-box ib-style-1 ib-circle ib-bordered ib-bordered-white ib-bordered-thin ib-medium ib-text-alt i-large">
                              <div class="ib-icon"> <i class="fa fa-envelope-o text-primary"></i> </div>
                              <div class="ib-info text-dark">
                                <p class="no-margin-bottom"><a href="#." class="text-white">support@nagctech.com</a></p>
                                <p class="no-margin-bottom"><a href="#." class="text-white">support@nagctech.com</a></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- MAP -->
                      <section class="map-block">
                        <div class="map-wrapper" id="map-canvas" data-lat="-37.814199" data-lng="144.961560" data-zoom="13" data-style="1"></div>
                        <div class="markers-wrapper addresses-block"> <a class="marker" data-rel="map-canvas" data-lat="-37.814199" data-lng="144.961560" data-string="Envato"></a> </div>
                      </section>
                      
                      <!-- Contact  -->
                      <h5 class="tittle">SAY HELLO</h5>
                      <div class="contact style-3 light-border padding-top-50 padding-bottom-50 padding-left-20 padding-right-20"> 
                        
                        <!-- Form  -->
                        <div class="contact-right"> 
                          <!-- Success Msg -->
                          <div id="contact_message_1" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>
                          
                          <!-- FORM -->
                          <form role="form" id="contact_form_1" class="contact-form" method="post" onSubmit="return false">
                            <ul class="row">
                              <li class="col-sm-4">
                                <label>
                                  <input type="text" class="form-control" name="name" id="name_1" placeholder="NAME">
                                </label>
                              </li>
                              <li class="col-sm-4">
                                <label>
                                  <input type="text" class="form-control" name="email" id="email_1" placeholder="EMAIL">
                                </label>
                              </li>
                              <li class="col-sm-4">
                                <label>
                                  <input type="text" class="form-control" name="company" id="company_1" placeholder="SUBJECT">
                                </label>
                              </li>
                              <li class="col-sm-12">
                                <label>
                                  <textarea class="form-control" name="message" id="message_1" rows="5" placeholder="CONTENT..."></textarea>
                                </label>
                              </li>
                              <li class="col-sm-12">
                                <button type="submit"  value="submit" id="btn_submit_1" onClick="proceed();">SEND ME</button>
                              </li>
                            </ul>
                          </form>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- End Content --> 
  
  <!-- Footer -->
  <footer class="footer">
    <div class="rights">
      <p>© Copyright 2018 NagC Tech. All right reserved.</p>
    </div>
  </footer>
  <!-- End Footer --> 
  
</div>
<!-- End Page Wrapper --> 

<!-- JavaScripts --> 
<script src="js/vendor/jquery/jquery.min.js"></script> 
<script src="js/vendor/bootstrap.min.js"></script> 
<script src="js/vendor/owl.carousel.min.js"></script> 
<script src="js/vendor/jquery.isotope.min.js"></script> 
<script src="js/main1.js"></script> 

<!-- Begin Map Script--> 
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script> 
<script src="js/vendor/map.js"></script>
</body>
</html>