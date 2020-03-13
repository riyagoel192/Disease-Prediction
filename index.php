<?php

if (isset($_GET['submit'])) {
     $pemail= $_GET['email'];
     $pphone=$_GET['phone'];
     $doctor=$_GET['info_form_doc'];
     $dept=$_GET['info_form_dep'];
     //Database connection
      $conn=new mysqli('localhost','root','','test2');
      if($conn->connect_error){
         die('Connection Failed : '.$conn->connection_error);
      }
      else{
         $stmt=$conn->prepare("insert into appointment(pemail,pphone,doctor,dept)
             values(?,?,?,?)");
         $stmt->bind_param("ssss",$pemail,$pphone,$doctor,$dept);
         $stmt->execute();
        echo"Appointment Booked...";
        header('Location:index.php');
         $stmt->close();
         $conn->close();
}
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Health</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Health medical template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>

    <div class="super_container">

        <!-- Menu -->

        <div class="menu trans_500">
            <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
                <div class="menu_close_container">
                    <div class="menu_close"></div>
                </div>
                <form action="#" class="menu_search_form">
                    <input type="text" class="menu_search_input" placeholder="Search" required="required">
                    <button class="menu_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
                <ul>
                    <li class="menu_item"><a href="index.php">Home</a></li>
                    <li class="menu_item"><a href="#">About us</a></li>
                    <li class="menu_item"><a href="#">Services</a></li>
                    <li class="menu_item"><a href="news.html">News</a></li>
                    <li class="menu_item"><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="menu_social">
                <ul>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>

        <!-- Home -->

        <div class="home">
            <div class="background_image" style="background-image:url(images/backdrop.jpg)"></div>

            <!-- Header -->

            <header class="header" id="header">
                <div>
                    <div class="header_top">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                                        <!-- <div class="logo">
										<a href="#">health<span>+</span></a>	
									</div> -->
                                        <div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
                                            <div class="header_top_nav">
                                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                                    <li><a href="#">Help Desk</a></li>
                                                    <li><a href="#">Emergency Services</a></li>
                                                    <li><a href="#">Appointment</a></li>
                                                </ul>
                                            </div>
                                            <div class="header_top_phone">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <span>+34 586 778 8892</span>
                                            </div>
                                        </div>
                                        <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header_nav" id="header_nav_pin">
                        <div class="header_nav_inner">
                            <div class="header_nav_container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                                                <nav class="main_nav">
                                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                                        <li class="active"><a href="index.php">Home</a></li>
                                                        <li><a href="about.html">About Us</a></li>
                                                        <li><a href="services.html">Services</a></li>
                                                        <li><a href="news.html">News</a></li>
                                                        <li><a href="contact.html">Contact</a></li>
                                                        <div class="button home_button" style="background-color:#40E0D0;margin-top: 1px;margin-left: 200px;"><a href="register.php"><span>Register</span><span>Register</span></a></div>

                                                        <div class="button home_button" style="background-color:#40E0D0;margin-top: 1px;margin-left: 20px;float: right;"><a href="go_login.php"><span>Login</span><span>Login</span></a></div>
                                                    </ul>
                                                    <!-- <div class="button home_button"><a href="#"><span>Login</span><span>Login</span></a></div> -->
                                                    <!-- <a href="#" class="primary-btn2 mb-3 mb-sm-0" id="login_btn">Login</a>
                  								<a href="#" class="primary-btn ml-sm-3 ml-0" id="signup">Register</a> -->
                                                </nav>
                                                <!-- <div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
												<form action="#" id="search_container_form" class="search_container_form">
													<input type="text" class="search_container_input" placeholder="Search" required="required">
													<button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
												</form>
											</div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="home_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="home_title">Medical Services that you can trust</div>
                                <div class="home_text">Find best Doctors to get instant medical advice and second opinion for your health problems. Ask the doctors or consult them on face-to-face video chat or over a phone call. Get started now!</div>
                                <div class="button home_button"><a href="#"><span>Read More</span><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Info Boxes -->

        <div class="info">
            <div class="container">
                <div class="row row-eq-height">

                    <!-- Info Box -->
                    <div class="col-lg-4 info_box_col">
                        <div class="info_box">
                            <div class="info_image"><img src="images/info_1.jpg" alt=""></div>
                            <div class="info_content">
                                <div class="info_title">Free Consultations</div>
                                <div class="info_text">Ask a Doctor Online and get your medical concerns clarified with the doctor's advise. We have more than 100+ doctors spread across 80+ specialties in our medical panel. Get medical second opinion and professional advice
                                    from our doctors. Post your query and get one free online doctor consultation.</div>
                                <div class="button info_button"><a href="#"><span>Read more</span><span>Read more</span></a></div>
                            </div>
                        </div>
                    </div>

                    <!-- Info Box -->
                    <div class="col-lg-4 info_box_col">
                        <div class="info_box">
                            <div class="info_image"><img src="images/info_2.jpg" alt=""></div>
                            <div class="info_content">
                                <div class="info_title">Emergency Care</div>
                                <div class="info_text">The Emergency Department (ED) provides urgent care to patients who have traumatic injury, major illnesses or other issues that require immediate treatment. The staff includes physicians, nurses and other healthcare professionals
                                    who follow specific procedures so that you can get the care you need as quickly as possible.</div>
                                <div class="button info_button"><a href="#"><span>Read more</span><span>Read more</span></a></div>
                            </div>
                        </div>
                    </div>

                    <!-- Info Form -->
                    <div class="col-lg-4 info_box_col">
                        <div class="info_form_container">
                            <div class="info_form_title">Make an Appointment</div>
                            <form action="" class="info_form" id="info_form" method="GET">
                                <select name="info_form_dep" id="info_form_dep" class="info_form_dep info_input info_select">
								<option value="none" selected disabled hidden>Department</option> 
								<option>Orthopedics</option>
								<option>Neurology</option>
								<option>Dental</option>
							</select>
                                <select name="info_form_doc" id="info_form_doc" class="info_form_doc info_input info_select">
								<option value="none" selected disabled hidden>Doctor</option>
								<option>Dr. Avinash Aggarwal</option>
								<option>Dr. Stuti Madan </option>
								<option>Dr. Ashutosh Singh</option>
							</select>
                                <input type="text" class="info_input" name="email" placeholder="Email" required="required">
                                <input type="text" class="info_input" name="phone" placeholder="Phone No">
                                <button class="info_form_button" name="submit" id="submit">make an appointment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>
            $(document).ready(function() {

                var form = $('#info_form');
                $('#submit').click(function() {

                    $.ajax({

                        method: "POST",
                        url: form.attr("action"),
                        data: $("#info_form input").serialize(),
                        success: function(data) {
                            console.log(data);
                        }
                    });
                });
            });
        </script>


        <!-- CTA -->

        <div class="cta">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/cta_1.jpg" data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="cta_container d-flex flex-xl-row flex-column align-items-xl-start align-items-center justify-content-xl-start justify-content-center">
                            <div class="cta_content text-xl-left text-center">
                                <div class="cta_title">Check Your Heart Status</div>
                                <div class="cta_subtitle">Predict your heart conditions using Machine Learning Techniques.</div>
                            </div>
                            <div class="button cta_button ml-xl-auto"><a href="http://localhost:5000/"><span>CHECK STATUS</span><span>CHECK STATUS</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services -->

        <div class="services">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="section_title">Our Services</div>
                        <div class="section_subtitle">to choose from</div>
                    </div>
                </div>
                <div class="row icon_boxes_row">

                    <!-- Icon Box -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="icon_box">
                            <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                                <div class="icon_box_icon"><img src="images/icon_1.svg" alt=""></div>
                                <div class="icon_box_title">Cardiology</div>
                            </div>
                            <div class="icon_box_text">Cardiology is a branch of medicine that deals with the disorders of the heart as well as some parts of the circulatory system.</div>
                        </div>
                    </div>

                    <!-- Icon Box -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="icon_box">
                            <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                                <div class="icon_box_icon"><img src="images/icon_2.svg" alt=""></div>
                                <div class="icon_box_title">Gastroenterology</div>
                            </div>
                            <div class="icon_box_text">Gastroenterology is the branch of medicine focused on the digestive system and disorders relating to it.</div>
                        </div>
                    </div>

                    <!-- Icon Box -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="icon_box">
                            <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                                <div class="icon_box_icon"><img src="images/icon_3.svg" alt=""></div>
                                <div class="icon_box_title">Medical Lab</div>
                            </div>
                            <div class="icon_box_text">A medical laboratory or clinical laboratory is a laboratory where clinical pathology tests are carried out on clinical specimens.</div>
                        </div>
                    </div>

                    <!-- Icon Box -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="icon_box">
                            <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                                <div class="icon_box_icon"><img src="images/icon_4.svg" alt=""></div>
                                <div class="icon_box_title">Dental Care</div>
                            </div>
                            <div class="icon_box_text">Dental care is medical care and hygiene relating to your teeth. In this, surgery is performed on tissues of mouth.</div>
                        </div>
                    </div>

                    <!-- Icon Box -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="icon_box">
                            <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                                <div class="icon_box_icon"><img src="images/icon_5.svg" alt=""></div>
                                <div class="icon_box_title">Surgery</div>
                            </div>
                            <div class="icon_box_text">Surgery is the treatment of injuries or disorders of the body by incision or manipulation, especially with instruments.</div>
                        </div>
                    </div>

                    <!-- Icon Box -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="icon_box">
                            <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                                <div class="icon_box_icon"><img src="images/icon_6.svg" alt=""></div>
                                <div class="icon_box_title">Neurology</div>
                            </div>
                            <div class="icon_box_text">The branch of medicine or biology that deals with the anatomy, functions, and organic disorders of nerves and the nervous system.</div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <div class="button services_button ml-auto mr-auto"><a href="#"><span>read more</span><span>read more</span></a></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Departments -->

        <div class="departments">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="section_title">Our Departments</div>
                        <div class="section_subtitle">to choose from</div>
                    </div>
                </div>
                <div class="row dept_row">
                    <div class="col">
                        <div class="dept_slider_container_outer">
                            <div class="dept_slider_container">

                                <!-- Slider -->
                                <div class="owl-carousel owl-theme dept_slider">

                                    <!-- Slide -->
                                    <div class="owl-item dept_item">
                                        <div class="dept_image"><img src="https://uichildrens.org/sites/default/files/baby-foot-premie_0.jpg" alt="" style="height: 343px;"></div>
                                        <div class="dept_content">
                                            <div class="dept_title">Neonatology</div>
                                            <div class="dept_link"><a href="#">Read More</a></div>
                                        </div>
                                    </div>

                                    <!-- Slide -->
                                    <div class="owl-item dept_item">
                                        <div class="dept_image"><img src="https://www.yourdentistryguide.com/wp-content/uploads/2017/11/tooth-cleaning-925x425.jpg" alt="" style="height: 343px;"></div>
                                        <div class="dept_content">
                                            <div class="dept_title">Dentistry</div>
                                            <div class="dept_link"><a href="#">Read More</a></div>
                                        </div>
                                    </div>

                                    <!-- Slide -->
                                    <div class="owl-item dept_item">
                                        <div class="dept_image"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQtOejbUDoQ2_n4SZu_gyf9zfSKTq9OG4genb_y1IHjC-pMpZOH" alt="" style="height: 343px;"></div>
                                        <div class="dept_content">
                                            <div class="dept_title">Orthopedics</div>
                                            <div class="dept_link"><a href="#">Read More</a></div>
                                        </div>
                                    </div>

                                    <!-- Slide -->
                                    <div class="owl-item dept_item">
                                        <div class="dept_image"><img src="images/dept_4.jpg" alt=""></div>
                                        <div class="dept_content">
                                            <div class="dept_title">Laboratory</div>
                                            <div class="dept_link"><a href="#">Read More</a></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!-- Dept Slider Nav -->
                            <div class="dept_slider_nav"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ & News -->

        <!-- <div class="stuff">
		<div class="container">
			<div class="row"> -->

        <!-- FAQ -->
        <!-- <div class="col-lg-7">
					<div class="faq">
						<div class="faq_title">Faq & Stuff</div>
						<div class="faq_subtitle">read all about it</div>
						<div class="elements_accordions">
							<div class="accordions">

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center active"><div>Maecenas fermentum tortor id fringilla molestie.</div></div>
									<div class="accordion_panel">
										<div>
											<p>Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing elit. Donec malesuada lorem maximus mauris. Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing.</p>
										</div>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Duis quis lacinia elit. Etiam varius mi eget lacus ultricies elementum</div></div>
									<div class="accordion_panel">
										<div>
											<p>Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing elit. Donec malesuada lorem maximus mauris. Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing.</p>
										</div>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Maecenas fermentum tortor id fringilla molestie.</div></div>
									<div class="accordion_panel">
										<div>
											<p>Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing elit. Donec malesuada lorem maximus mauris. Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing.</p>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div> -->

        <!-- Latest News -->
        <!-- <div class="col-lg-5">
					<div class="news">
						<div class="news_title">Latest News</div>
						<div class="news_subtitle">read all about it</div>
						<div class="news_container"> -->

        <!-- Latest News Post -->
        <!-- <div class="latest d-flex flex-row align-items-start justify-content-start">
								<div><div class="latest_image"><img src="images/latest_1.jpg" alt=""></div></div>
								<div class="latest_content">
									<div class="latest_title"><a href="news.html">A simple blog post</a></div>
									<div class="latest_info">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li><a href="#">by Jane Smith</a></li>
											<li><a href="#">April 25, 2018</a></li>
										</ul>
									</div>
									<div class="latest_comments"><a href="#">2 Comments</a></div>
								</div>
							</div>
 -->
        <!-- Latest News Post -->
        <!-- <div class="latest d-flex flex-row align-items-start justify-content-start">
								<div><div class="latest_image"><img src="images/latest_2.jpg" alt=""></div></div>
								<div class="latest_content">
									<div class="latest_title"><a href="news.html">A new way to see things in medicine</a></div>
									<div class="latest_info">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li><a href="#">by Jane Smith</a></li>
											<li><a href="#">April 25, 2018</a></li>
										</ul>
									</div>
									<div class="latest_comments"><a href="#">2 Comments</a></div>
								</div>
							</div> -->

        <!-- Latest News Post -->
        <!-- <div class="latest d-flex flex-row align-items-start justify-content-start">
								<div><div class="latest_image"><img src="images/latest_3.jpg" alt=""></div></div>
								<div class="latest_content">
									<div class="latest_title"><a href="news.html">Why is Pharma industry so big?</a></div>
									<div class="latest_info">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li><a href="#">by Jane Smith</a></li>
											<li><a href="#">April 25, 2018</a></li>
										</ul>
									</div>
									<div class="latest_comments"><a href="#">2 Comments</a></div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div> -->

        <!-- Footer -->

        <footer class="footer">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer.jpg" data-speed="0.8"></div>
            <div class="footer_content">
                <div class="container">
                    <div class="row">

                        <!-- Footer About -->
                        <div class="col-lg-3 footer_col">
                            <div class="footer_about">
                                <div class="logo">
                                    <a href="#">health<span>+</span></a>
                                </div>
                                <div class="footer_about_text">Provides one of the best medical services worldwide with specialized doctors and efficient medical staff.</div>
                                <div class="footer_social">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="copyright">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved
                                    <!-- | This template is made with  --><i class="fa fa-heart-o" aria-hidden="true"></i>
                                    <a href="https://colorlib.com" target="_blank"></a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </div>
                            </div>
                        </div>

                        <!-- Footer Contact -->
                        <div class="col-lg-5 footer_col">
                            <div class="footer_contact">
                                <div class="footer_contact_title">Quick Contact</div>
                                <div class="footer_contact_form_container">
                                    <form action="#" class="footer_contact_form" id="footer_contact_form">
                                        <div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
                                            <input type="text" class="footer_contact_input" placeholder="Name" required="required">
                                            <input type="email" class="footer_contact_input" placeholder="E-mail" required="required">
                                        </div>
                                        <textarea class="footer_contact_input footer_contact_textarea" placeholder="Message" required="required"></textarea>
                                        <button class="footer_contact_button">send message</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Hours -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_hours">
                                <div class="footer_hours_title">Opening Hours</div>
                                <ul class="hours_list">
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div>Monday – Thursday</div>
                                        <div class="ml-auto">8.00 – 19.00</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div>Friday</div>
                                        <div class="ml-auto">8.00 - 18.30</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div>Saturday</div>
                                        <div class="ml-auto">9.30 – 17.00</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div>Sunday</div>
                                        <div class="ml-auto">9.30 – 15.00</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
                                <nav class="footer_nav">
                                    <ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                                        <li class="active"><a href="index.php">Home</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                                <div class="footer_links">
                                    <ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                                        <li><a href="#">Help Desk</a></li>
                                        <li><a href="#">Emergency Services</a></li>
                                        <li><a href="#">Appointment</a></li>
                                    </ul>
                                </div>
                                <div class="footer_phone ml-lg-auto">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>+34 586 778 8892</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>