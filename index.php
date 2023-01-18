<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>AyishaSaeed</title>
<!--CSS LINKS-->
<link rel="stylesheet" href="Ayishatu.Css">
<link rel="stylesheet" href="./CSS/color-1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!--Style Switcher-->
<link rel="stylesheet" href="./CSS/color-1.css" class="alternate-style" title="color-1" 
disabled>
<link rel="stylesheet" href="./CSS/color-2.css" class="alternate-style" title="color-2" 
disabled>
<link rel="stylesheet" href="./CSS/color-3.css" class="alternate-style" title="color-3" 
disabled>
<link rel="stylesheet" href="./CSS/color-4.css" class="alternate-style" title="color-4" 
disabled>
<link rel="stylesheet" href="./CSS/color-5.css" class="alternate-style" title="color-5"
disabled >
<link rel="stylesheet" href="style-switcher.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<!--Main container starts here-->
<div class="main-container">
  <!--Aside starts here--> 
  <div class="aside">
   <div class="logo">
       <a href="#"><span>J</span>osiah</a>             
   </div>
   <div class="nav-toggler">
 <span></span>
   </div>
   <ul class="nav">
   <li><a href="#home" class="active"><i class="fa fa-home"></i> Home</a></li>
   <li><a href="#about"><i class="fa fa-user"></i> About</a></li>
   <li><a href="#services"><i class="fa fa-list"></i> Services</a></li>
   <li><a href="#project"><i class="fa fa-briefcase"></i> Projects</a></li>
   <li><a href="#gallery"><i class="fa fa-play"></i> Gallery</a></li>
   <li><a href="#contact"><i class="fa fa-comments"></i> Contact</a></li>
   </ul>
  </div>  
  <!--Aside starts ends-->   
  
  <!--send email start-->



  <!--Main content start-->  
     <div class="main-content">
 <!--Home section starts-->
 <section class="home section" id="home">
 <div class="container">
 <div class="row">
 <div class="home-info padd-15">
 <h3 class="hello">Hello, my name is <span class="name">Josiah Eyison</span></h3>
 <h3 class="my-profession">I'm a <span class="typing">Entrepreneur</span></h3>
 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet....</p>
 <a href="#contact" class="btn book-me">Meet Me</a>
 </div>
 <div class="home-img padd-15">
 <img src="JKE.JPG" alt="">
 </div>
 </div>
 
 <div class="row">
     <?php 

    if(isset($_POST['send'])) {

    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $subject = $_POST["subject"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $content = $_POST["content"];


    $to = 'a.saeed@alustudent.com';
  
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = "$message \r\n <br/>
                Name : $name\r\n <br/>
                Email : $email \r \n<br/>
                Subject : $subject \r \n<br/>
                Date: $date \r\n <br/>
                Time :$time \r \n <br/>
                Messge : $content\n \r<br/>
               

                ";


 
// Sending email

if(mail($to, $subject, $message, $headers)){
    // echo 'Your mail has been sent successfully.';
   echo  $message = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Hello , </strong> Your message has been sent Successfully to Josiah He will get back to you soon.Thank you
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';



} else{
    // echo 'Unable to send email. Please try again.';
    echo  $message = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hello There</strong> Failed to send your email,Please try it again Later.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}

}

    
    ?>
</div>

 
</div>



 </section>



  



  <!--About section starts-->
<section class="about section " id="about">
  <div class="container">
    <div class="row">
      <div class="section-title padd-15">
        <h2>About Me</h2>
      </div>
    </div>
    <div class="row">
      <div class="about-content padd-15">
       <div class="row">
        <div class="about-text padd-15">
          <h3>I'm Josiah Kwesi Eyison and <span>Bussiness Entrepreneur</span></h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam itaque, accusantium, perspiciatis excepturi 
            sunt debitis ducimus maiores placeat quidem, officia culpa architecto enim qui possimus. Deserunt provident expedita 
            fuga est culpa molestias nemo doloribus harum consectetur numquam? Suscipit nesciunt magnam similique mollitia quia
             repellendus voluptas alias laudantium temporibus cumque error minus, laboriosam ex quis enim!</p>
        </div>
       </div>
       <div class="row">
        <div class="personal-info padd-15">
          <div class="row">
            <div class="info-item padd-15">
              <p>Birthday : <span>17 Dec 1982</span></p>
            </div>
            <div class="info-item padd-15">
              <p>Age : <span>40</span></p>
              </div>
              <div class="info-item padd-15">
                <p>Website : <span> www.jkeyison.com</span></p>
              </div>
              <div class="info-item padd-15">
                <p>Email : <span> Info@gmail.com</span></p>
              </div>
              <div class="info-item padd-15">
                <p>Degree : <span> BA</span></p>
              </div>
              <div class="info-item padd-15">
                <p>Phone : <span>+233 667 8980</span></p>
              </div>
              <div class="info-item padd-15">
                <p>City : <span>Accra, Ghana</span></p>
              </div>
              <div class="info-item padd-15">
                <p>Mentorship : <span>Available</span></p>
              </div>
            </div>
            <div class="row">
              <div class="buttons padd-15">
                <a href="JKE Resume1 (2).docx" class="btn">Download CV</a>
                <a href="#contact" class="btn meet-me ">Meet Me</a>
              </div>
            </div>
          </div>
        <div class="skills padd-15">
          <div class="row">
            <div class="skill-item padd-15">
              <h5>Business Developed</h5>
              <div class="progress">
                <div class="progress-in" style="width:86%"></div>
                <div class="skill-percent">140</div>
              </div>
            </div>
            <div class="skill-item padd-15">
              <h5>Workshops per year</h5>
              <div class="progress">
                <div class="progress-in" style="width:66%"></div>
                <div class="skill-percent">50</div>
              </div>
            </div>
            <div class="skill-item padd-15">
              <h5>Coaching Certificates</h5>
              <div class="progress">
                <div class="progress-in" style="width:46%"></div>
                <div class="skill-percent">12</div>
              </div>
            </div>
          </div>
        </div>
       </div>
       <div class="row">
        <div class="education padd-15">
          <h3 class="title">Eduction</h3>
          <div class="row">
            <div class="timeline-box padd-15">
              <div class="timeline shadow-dark">
               <!--timeline item-->
               <div class="timeline-item">
                <div class="circle-dot"></div>
                <h3 class="timeline-date">
                  <i class="fa fa-calendar"></i>2013 - 2015
                </h3>
                <h4 class="timeline-title">Master in Business Administration</h4>
                <p class="timeline-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptate,
                   commodi ipsam animi doloribus quod, deserunt porro magnam ut necessitatibus repellat fuga 
                   temporibus natus dolorem atque.</p>
               </div>
                 <!--timeline item-->
                 <div class="timeline-item">
                  <div class="circle-dot"></div>
                  <h3 class="timeline-date">
                    <i class="fa fa-calendar"></i>2013 - 2015
                  </h3>
                  <h4 class="timeline-title">Master in Business Administration</h4>
                  <p class="timeline-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptate,
                     commodi ipsam animi doloribus quod, deserunt porro magnam ut necessitatibus repellat fuga 
                     temporibus natus dolorem atque.</p>
                 </div>
                 <!--timeline item-->
                 <div class="timeline-item">
                  <div class="circle-dot"></div>
                  <h3 class="timeline-date">
                    <i class="fa fa-calendar"></i>2013 - 2015
                  </h3>
                  <h4 class="timeline-title">Master in Business Administration</h4>
                  <p class="timeline-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptate,
                     commodi ipsam animi doloribus quod, deserunt porro magnam ut necessitatibus repellat fuga 
                     temporibus natus dolorem atque.</p>
                 </div>
              </div>
            </div>
          </div>
        </div>
        <div class="experience padd-15">
          <h3 class="title">Experience</h3>
          <div class="row">
            <div class="timeline-box padd-15">
              <div class="timeline shadow-dark">
               <!--timeline item-->
               <div class="timeline-item">
                <div class="circle-dot"></div>
                <h3 class="timeline-date">
                  <i class="fa fa-calendar"></i>2013 - 2015
                </h3>
                <h4 class="timeline-title">Master in Business Administration</h4>
                <p class="timeline-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptate,
                   commodi ipsam animi doloribus quod, deserunt porro magnam ut necessitatibus repellat fuga 
                   temporibus natus dolorem atque.</p>
               </div>
                 <!--timeline item-->
                 <div class="timeline-item">
                  <div class="circle-dot"></div>
                  <h3 class="timeline-date">
                    <i class="fa fa-calendar"></i>2013 - 2015
                  </h3>
                  <h4 class="timeline-title">Master in Business Administration</h4>
                  <p class="timeline-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptate,
                     commodi ipsam animi doloribus quod, deserunt porro magnam ut necessitatibus repellat fuga 
                     temporibus natus dolorem atque.</p>
                 </div>
                 <!--timeline item-->
                 <div class="timeline-item">
                  <div class="circle-dot"></div>
                  <h3 class="timeline-date">
                    <i class="fa fa-calendar"></i>2013 - 2015
                  </h3>
                  <h4 class="timeline-title">Master in Business Administration</h4>
                  <p class="timeline-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptate,
                     commodi ipsam animi doloribus quod, deserunt porro magnam ut necessitatibus repellat fuga 
                     temporibus natus dolorem atque.</p>
                     </div>
                    </div>
                  </div>
                </div>
               </div>
              </div>
            </div>
          </div>
        </div>
      </section>
       <!--About section endss-->
        <!--Service section starts-->
         <section class="service section " id="services">
         <div class="container">
          <div class="row">
            <div class="section-title padd-15">
              <h2>Services</h2>
            </div>
          </div>
          <div class="row">
            <!--Service item starts here-->
            <div class="service-item padd-15">
              <div class="service-item-inner">
                <div class="icon">
                  <i class="fa fa-universal-access"></i>
                </div>
                <h4>Business Development</h4>
                <p>support for the development of micro, small, and medium-sized businesses through education, consulting, marketing help, 
                  more advanced manufacturing techniques, and other related services.</p>
              </div>
            </div>
             <!--Service item end-->
             <!--Service item starts here-->
            <div class="service-item padd-15">
              <div class="service-item-inner">
                <div class="icon">
                  <i class="fa fa-user-secret"></i>
                </div>
                <h4>Investment Readiness Training</h4>
                <p>  In the areas of financial and technical support in order to grow and enhance impact.
                   The support could be in the form of grants, social investment, incubation, mentoring and business network..</p>
              </div>
            </div>
             <!--Service item end-->
              <!--Service item starts here-->
            <div class="service-item padd-15">
              <div class="service-item-inner">
                <div class="icon">
                  <i class="fa fa-desktop"></i>
                </div>
                <h4>Startup Development</h4>
                <p>advising on effective planning, developing and launching new products/services:helping business founders with 
                  product/services consulting, prototype designing and MVP development.
                </p>
              </div>
            </div>
             <!--Service item end -->
              <!--Service item starts here-->
            <div class="service-item padd-15">
              <div class="service-item-inner">
                <div class="icon">
                  <i class="fa fa-book"></i>
                </div>
                <h4>Coaching</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   Tenetur aut adipisci ab.</p>
              </div>
            </div>
             <!--Service item end -->
             <!--Service item starts here-->
            <div class="service-item padd-15">
              <div class="service-item-inner">
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <h4>Mentoring</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   Tenetur aut adipisci ab.</p>
              </div>
            </div>
             <!--Service item end -->
             <!--Service item starts here-->
            <div class="service-item padd-15">
              <div class="service-item-inner">
                <div class="icon">
                  <i class="fa fa-thumbs-up"></i>
                </div>
                <h4>Consultancy</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   Tenetur aut adipisci ab.</p>
              </div>
            </div>
             <!--Service item end -->
          </div>
         </div>
         </section>
         <!--Service section ends-->
         <!--Project section starts-->
         <section class="project section" id="project">
          <div class="container">
            <div class="row">
              <div class="section-title padd-15">
                <h2>Projects</h2>
              </div>
          </div>
          <div class="row">
            <div class="project-heading padd-15">
              <h2>My Recent Projects:</h2>
            </div>
          </div>
          <div class="row">
             <!--project item start -->
             <div class="project-item padd-15">
              <div class="project-item-inner shadow-dark">
                <div class="project-img">
                  <img src="./images/logo.png" alt="">
                </div>
              </div>
             </div>
             <!--project item end -->
             <!--project item start -->
             <div class="project-item padd-15">
              <div class="project-item-inner shadow-dark">
                <div class="project-img">
                  <img src="./images - Copy/project1.jpg" alt="">
                </div>
              </div>
             </div>
             <!--project item end -->
             <!--project item start -->
             <div class="project-item padd-15">
              <div class="project-item-inner shadow-dark">
                <div class="project-img">
                  <img src="./images - Copy/project2.jpg" alt="">
                </div>
              </div>
             </div>
             <!--project item end -->
             <!--project item start -->
             <div class="project-item padd-15">
              <div class="project-item-inner shadow-dark">
                <div class="project-img">
                  <img src="./images - Copy/project3.jpg" alt="">
                </div>
              </div>
             </div>
             <!--project item end -->
              <!--project item start -->
              <div class="project-item padd-15">
                <div class="project-item-inner shadow-dark">
                  <div class="project-img">
                    <img src="./images - Copy/person-004.jpg" alt="">
                  </div>
                </div>
               </div>
               <!--project item end -->
               <!--project item start -->
              <div class="project-item padd-15">
                <div class="project-item-inner shadow-dark">
                  <div class="project-img">
                    <img src="./images/Project 4.jpg" alt="">
                  </div>
                </div>
               </div>
               <!--project item end -->
          </div>
        </div>
         </section>
         <!--Project section ends-->
          <!--Gallery section start-->
          <section class="gallery section " id="gallery">
            <div class="container">
              <div class="row">
                <div class="section-title padd-15">
                  <h2>Gallery</h2>
                </div>
            </div>
            <div class="row">
              <div class="gallery-heading padd-15">
                <h2>Images Of Various Training And Sessions:</h2>
              </div>
            </div>
            <div class="row">
               <!--gallery item start -->
               <div class="gallery-item padd-15">
                <div class="gallery-item-inner shadow-dark">
                  <div class="gallery-img">
                    <img src="./images/Gallery5.jpg" alt="">
                  </div>
                </div>
               </div>
               <!--gallery item end -->
               <!--galleryitem start -->
               <div class="gallery-item padd-15">
                <div class="gallery-item-inner shadow-dark">
                  <div class="gallery-img">
                    <img src="./images/Gallery4.jpg" alt="">
                  </div>
                </div>
               </div>
               <!--gallery item end -->
               <!--gallery item start -->
               <div class="gallery-item padd-15">
                <div class="gallery-item-inner shadow-dark">
                  <div class="gallery-img">
                    <img src="./images/Gallery3.JPG" alt="">
                  </div>
                </div>
               </div>
               <!--gallery item end -->
               <!--gallery item start -->
               <div class="gallery-item padd-15">
                <div class="gallery-item-inner shadow-dark">
                  <div class="gallery-img">
                    <img src="./images/Gallery2.JPG" alt="">
                  </div>
                </div>
               </div>
               <!--gallery item end -->
                <!--gallery item start -->
                <div class="gallery-item padd-15">
                  <div class="gallery-item-inner shadow-dark">
                    <div class="gallery-img">
                      <img src="./images/Gallery1.JPG" alt="">
                    </div>
                  </div>
                 </div>
                 <!--gallery item end -->
                  <!--gallery item start -->
                <div class="gallery-item padd-15">
                  <div class="gallery-item-inner shadow-dark">
                    <div class="gallery-img">
                      <img src="./images/Gallery6.JPG" alt="">
                    </div>
                  </div>
                 </div>
                 <!--gallery item end -->
                  <!--gallery item start -->
                <div class="gallery-item padd-15">
                  <div class="gallery-item-inner shadow-dark">
                    <div class="gallery-img">
                      <img src="./images/Gallery7.JPG" alt="">
                    </div>
                  </div>
                 </div>
                 <!--gallery item end -->
                  <!--gallery item start -->
                <div class="gallery-item padd-15">
                  <div class="gallery-item-inner shadow-dark">
                    <div class="gallery-img">
                      <img src="./images/Gallery8.JPG" alt="">
                    </div>
                  </div>
                 </div>
                 <!--gallery item end -->
                  <!--gallery item start -->
                <div class="gallery-item padd-15">
                  <div class="gallery-item-inner shadow-dark">
                    <div class="gallery-img">
                      <img src="./images/Gallery9.JPG" alt="">
                    </div>
                  </div>
                 </div>
                 <!--gallery item end -->
            </div>
          </div>
           </section>
           <!--Gallery section ends-->
            <!--Contact section starts-->
            <section class="contact section" id="contact">
              <div class="container">
                <div class="row">
                  <div class="section-title padd-15">
                    <h2>Contact Me</h2>
                  </div>
              </div>
              <h3 class="contact-title padd-15">Do Need Have Any Business Advice?</h3>
              <h4 class="contact-sub-title padd-15">CONTACT ME AND LET DISCUSS</h4>
              <div class="row">
                <!--contact info item start-->
                <div class="contact-info-item padd-15">
                  <div class="icon"><i class="fa fa-phone"></i></div>
                  <h4>Call Me On</h4>
                  <p>+233 557 7890</p>
                </div>
                 <!--contact info item end-->
                 <!--contact info item start-->
                <div class="contact-info-item padd-15">
                  <div class="icon"><i class="fa fa-map-marker-alt"></i></div>
                  <h4>Office</h4>
                  <p>14 Otu Adzin Street</p>
                  <p>Spintex, Accra</p>
                </div>
                 <!--contact info item end-->
                 <!--contact info item start-->
                <div class="contact-info-item padd-15">
                  <div class="icon"><i class="fa fa-envelope"></i></div>
                  <h4>Email</h4>
                  <p>kwesi@ispacegh.com</p>
                </div>
                 <!--contact info item end-->
                 <!--contact info item start-->
                <div class="contact-info-item padd-15">
                  <div class="icon"><i class="fa fa-globe-europe"></i></div>
                  <h4>Website</h4>
                  <p>www.ispacegh.com</p>
                </div>
                 <!--contact info item end-->
              </div>
              <h3 class="contact-title padd-15">SEND ME AN EMAIL</h3>
              <h4 class="contact-sub-title padd-15">WILL LOVE TO HEAR FROM YOU</h4>
                <!--Contact form--> 
                <div class="row">
                  <div class="contact-form  padd-15">
                    <form  method="post" enctype="multipart/form-data"
                    onsubmit="return validateContactForm()" action="index.php">

                    <div class="row">
                      <div class="form-item col-6 padd-15">
                        <div class="form-group">
                          <input type="text"  name="userName"
                        id="userName" class="form-control" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-item col-6 padd-15">
                        <div class="form-group">
                          <input type="email"  name="userEmail"
                        id="userEmail" class="form-control" placeholder="Email">
                        </div>
                      </div>
                    </div>
                  <div class="row">
                      <div class="form-item col-12 padd-15">
                        <div class="form-group">
                          <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                        </div>
                      </div>
                    </div>
                    
                    
                    <div class="row">
                      <div class="form-item col-12 padd-15">
                        <div class="form-group">
                          <input type="date" name="date" id="date" class="form-control" placeholder="">
                        </div>
                      </div>
                    </div>
                    
                  
                  <div class="row">
                      <div class="form-item col-12 padd-15">
                        <div class="form-group">
                          <input type="time" name="time" id="time" class="form-control" placeholder="">
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="form-item col-12 padd-15">
                        <div class="form-group">
                       <textarea name="content"  class="form-control"  id="content"  placeholder="Message"></textarea>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="row">
                      <div class="form-item col-12 padd-15">
                       <button type="submit" class="btn">Send Message</button> 
                      </div>
                    </div> -->
                  </div>
                </div>

                 <!--Calendar starts-->
                
          
              </div>

                   <div class="row">
                      <div class="form-item col-12 padd-15">
                       <button type="submit" name="send" class="btn">Send Message</button> 
                      </div>
                    </div>


                   <br/><br/><br/><br/><br/>
            <!--Calender ends-->
            </section>
            <!--Contact section ends--> 
         </div>
         <!--Main content end-->          
        </div>
        <!--Main container starts End-->
        <!--Stlye Switcher starts here-->
        <div class="style-switcher">
          <div class="style-switcher-toggler s-icon">
            <i class="fas fa-cog fa-spin"></i>
          </div>
            <div class="day-night s-icon">
              <i class="fas "></i>
            </div>
            <h4>Theme Colors</h4>
            <div class="colors">
              <span class="color-1" onclick="setActiveStyle('color-1')"></span>
              <span class="color-2" onclick="setActiveStyle('color-2')"></span>
              <span class="color-3" onclick="setActiveStyle('color-3')"></span>
              <span class="color-4" onclick="setActiveStyle('color-4')"></span>
              <span class="color-5" onclick="setActiveStyle('color-5')"></span>
            </div>
          </div>
        <!--Stlye Switcher Ends here-->
        <!--JS LINK-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"
          referrerpolicy="no-referrer"></script>
        <script src="./JS/Ayishatu.js"></script>  
       <script src="./JS/style-switcher.js"></script>
       <script src="./JS/calendar.js"></script>

           <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>

<script>
   window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 10000);
  </script>
      </body>
      </html>