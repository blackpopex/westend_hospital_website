<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Awards & Accreditations | Westend Hospital
        </title>
        <link rel="icon" type="image/x-icon" href="img/logo/favicon.ico.png"/>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"/>
        <meta name="description" content="Our hospital has achieved numerous awards and Accreditations for both the quality of treatment given and the patient experience because, as healthcare providers, we place a high premium on ensuring that our patients and the community receive the greatest medical care. "/>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"/>
        <link rel="stylesheet" href="css/demo.css"/>
        <link rel="stylesheet" href="css/slideshow.css"/>
        <link rel="stylesheet" href="css/slick.css"/>
        <link rel="stylesheet" href="css/slick-theme.css"/>
        <link rel="stylesheet" href="css/style.css"/>
         <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="http://code.jquery.com/jquery-3.1.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <script src="https://kit.fontawesome.com/12d9de5a0c.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script>
      //Search Container
      //Ajax codes
      function showSearchBox(str) {
        if (str.length == 0) {
          document.getElementById("showSearchResult").innerHTML = " ";
          document
            .getElementById("searchWrapper")
            .classList.remove("show-searchResultWrapper");
          document.getElementById("searchResult").style.display = "block";
          return;
        }

        var ajaxCall = new XMLHttpRequest();
        ajaxCall.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("showSearchResult").innerHTML =
              this.responseText;
            document
              .getElementById("searchWrapper")
              .classList.add("show-searchResultWrapper");
            document.getElementById("searchResult").style.display = "none";
          }
        };
        ajaxCall.open("GET", "searchResult.php?q=" + str, true);
        ajaxCall.send();
      }
    </script>
    </head>
    <body>
        <!--header-hero section-->
        <div class="header-hero-container">
            <header
                id="myHeaderMenu">
                <!-----------TOP NAVIGATION------------->
                            <div class="main-header-wrapper">

                <div class="topNav">
                    <div class="container flex">
                        <a href="index" id="wehLogo">
                            <img src="img/logo/Westend logo blue.png" alt="Westend Hospital Logo"/>
                        </a>
                        <nav class="flex">
                            <div id="navToggler" class="hamburgerMenu" onclick="myFunction(this)">
                                <div class="bar bar1"></div>
                                <div class="bar bar2"></div>
                                <div class="bar bar3"></div>
                            </div>

                            <div class="navbar-links" id="sideNavbar">
                                <ul
                                    class="flex navBar1">
                                    <!--Medical Test & services-->
                                    <li class="dropdown">
                                        <a href="#/" class="dropbtn">Medical Test & Services</a>
                                        <ul class="dropdown-content" id="menuDropdown">
                                            <li>
                                                <a href="medical-test-and-services/A-Z-of-all-medical-test">A-Z of all Medical Test</a>
                                            </li>
                                            <li>
                                                <a href="medical-test-and-services/A-Z-of-all-medical-services">A-Z of all Medical Services</a>
                                            </li>
                                            <li>
                                                <a href="medical-test-and-services/department-and-services">Department & Services</a>
                                            </li>
                                            <li>
                                                <a href="medical-test-and-services/patient-education">Patient Education</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <!--Patient and visitors-->
                                    <li class="dropdown">
                                        <a href="#/" class="dropbtn">Patient & Visitors</a>
                                        <ul class="dropdown-content" id="menuDropdown">
                                            <li>
                                                <a href="patient-and-visitors/vistors">Visitors</a>
                                            </li>
                                            <li>
                                                <a href="patient-and-visitors/your-hospital-stay">Your Hospital Stay</a>
                                            </li>
                                            <li>
                                                <a href="patient-and-visitors/billing-and-financial-asistance">Billing & Financial Asistance</a>
                                            </li>
                                            <li>
                                                <a href="patient-and-visitors/accepted-insurance">Accepted Insurance</a>
                                            </li>
                                            <li>
                                                <a href="patient-and-visitors/patient-rights">Patient Rights</a>
                                            </li>
                                            <li>
                                                <a href="patient-and-visitors/medical-records">Medical Records</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <!--Why choose us-->
                                    <li class="dropdown">
                                        <a href="#/" class="dropbtn">Why Choose Us</a>
                                        <ul class="dropdown-content" id="menuDropdown">
                                            <li>
                                                <a href="why-choose-us/our-mission-vision-and-values">Our Mission, Vision & Values</a>
                                            </li>
                                            <li>
                                                <a href="why-choose-us/quality-patient-care">Quality Patient Care</a>
                                            </li>
                                            <li>
                                                <a href="why-choose-us/patient-stories-testimonies">Patient's Stories/Testimonies</a>
                                            </li>
                                            <li>
                                                <a href="why-choose-us/our-team">Our Team</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="contact-li">
                                        <a href="contact-us" class="contact-us">Contact Us</a>
                                    </li>
                                </ul>
                                <!--navbar2-->
                                <ul class="flex navbar2">
                                    <li>
                                        <a href="map-and-directions">Maps & Direction</a>
                                    </li>
                                    <li>
                                        <a href="request-an-appointment">Request Appointment</a>
                                    </li>
                                    <li>
                                        <a href="refer-a-patient">Refer a Patient</a>
                                    </li>
                                    <li>
                                        <a href="find-a-doctor">Find a Doctor</a>
                                    </li>
                                    <li>
                                        <a href="#/"
                        ><i
                          class="fa fa-phone-alt"
                          style="margin-right: 0.5em; color: #e4b77d"
                        ></i>
                        +234 (0) 807 420 2835
                      </a>
                                    </li>
                                </ul>
                            </div>

                            <!--search BTN-->
                            <a id="searchBTN" class="fa fa-search"></a>
                        </nav>
                    </div>
                    <!--display dropdown when search button is clicked-->
                    <div class="search-overlay" id="search-Overlay">
                        <div class="container">
                            <div class="search-content">
                                <form action="#" method="post" autocomplete="off">
                                    <div>
                                        <input type="text" placeholder="Looking for something?" name="Search"
                                         onkeyup="showSearchBox(this.value)"
                                        id="searchQuery"
                                        />
                                        <button type="submit" id="searchBtn" class="overlaySearch">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                                    <!--set fixed height for this container-->
                  <div class="ajax-result-p-search-container">
                    <!--display Ajax result from server here-->
                    <div class="searchResultWrapper" id="searchWrapper">
                      <div
                        id="showSearchResult"
                        class="search_result_container"
                      ></div>
                    </div>
                    <div id="searchResult" class="popular-searches">
                      <h3>Popular Searches</h3>
                      <ul>
                        <li>
                          <a href="refer-a-patient">Refer a patient</a>
                        </li>
                        <li>
                          <a href="map-and-directions"
                            >Maps & Directions</a
                          >
                        </li>
                        <li><a href="#/">Treatments</a></li>
                        <li>
                          <a
                            href="medical-test-and-services/A-Z-of-all-medical-services"
                            >Services</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </header>
        </div>

        <!---------------------------MAIN PAGE CONTENT---------------------------------------------->
        <main>
            <div class="section-background-image award-recognition">
                <div class="container">
                    <h2 class="subnavbar-color">Awards & Accreditations</h2>
                    <ul class="inline-block-breadcrumb subnavbar-color">
                        <li>
                            <a href="index">Home</a>
                        </li>
                        <li>Awards & Accreditations</li>

                    </ul>
                </div>
            </div>

            <section id="awardsAndRecognition">
                <div class="container  align-start column-reverse">
                    <div class="flex">
                        <div class="aside col-30">

                            <aside>
                                <img src="img/background-image/Sidebar Image.jpg" alt="Nurse smiling" class="caring_since_Image">
                                <div class="column-left">

                                    <div class="quick-links">

                                        <h4 class="navy-blue">Quick Links</h4>
                                        <ul>

                                            <li><a href="our-history" class="sky-blue">History</a></li>
                                            <li><a href="awards-and-accreditations" class="sky-blue">Awards & Accreditations</a></li>
                                            <li><a href="our-rating" class="sky-blue">Our Ratings</a></li>
                                            <li><a href="why-choose-us/our-mission-vision-and-values" class="sky-blue">Mission, vision & Values</a></li>
                                            <li><a href="contact-us">Contact Us</a></li>
                                            <li><a href="patient-and-visitors/online-pay">Pay a Bill</a></li>
                                        </ul>
                                    </div>
                                    <div class="er-24hrs-contact-numb">
                                        <img src="img/background-image/24hours.jpg" alt="24 hours advert image">

                                        <div class="phone-icon-phone-numbers">
                                            <div class="flex-row">
                                                <i class="fa fa-phone-alt"></i>
                                                <ul>
                                                    <li class="navy-blue">+234 (0) 905 376 4762</li>
                                                    <li class="navy-blue">+234 (0) 807 704 0127</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <!--story about each awards and its picture-->
                        <div
                            class="column-right col-70">

                            <!--Awards-->
                            <div class="awards">
                                <h3 class="navy-blue">Westend Hospital has been consistently recognized.</h3>
                                 <div class="margin-bottom">
                                     <p >For two decades, Westend hospital has been consistent in taking care of each patient, as well as the health of the community as a whole. We combine exceptional healthcare alongside personalized patient service, ensuring patients get the best healthcare experience here than anywhere else. As a result, our hospital has received many awards and accreditation for patient experience as well as for the quality of care provided.</p>
                                 </div>
                                <div class="awards-main-wrapper recognition-container">
                                    <h3 class="navy-blue">Awards</h3>
                                    <div class="award-container" style="padding-top: 0">
                                        <p>Westend Hospital is delighted to receive a number of honored awards, including the following:</p>
                                        <div>
                                            <h5 class="navy-blue">Most Valuable Employer</h5>
                                            <div class="flex">
                                                <p>In July 2004, Westend Hospital was presented the Most Valuable Employer Award by The Nigeria Social Insurance Trust Fund, in recognition of its full compliance with the provisions of the NSITF Act No. 73 of 1993.   Nigeria Social Insurance Trust Fund is a proactive and employee-dedicated government institution committed to the welfare of employees in the event of work-related accidents and injuries.</p>
                                                <img src="img/awards-and-accreditation/awards/Nigeria-Social-Insurance-Trust-Fund-Award.jpg" alt="most valuable employer award">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="light-grey-border"></div>
                                    <div class="award-container">
                                        <div>
                                            <h5 class="navy-blue">Most Supportive Health Facility</h5>
                                            <div class="flex">
                                                <p>In 2019, a special recognition award was presented to Westend Hospital by Warri Fitness Festival (WAFFEST). This award was presented in recognition of Westend Hospital’s unwavering support to WAFFEST and for her invaluable contribution towards promoting health, and fitness awareness.</p>
                                                <img src="img/awards-and-accreditation/awards/waffest-award.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="light-grey-border"></div>
                                    <div class="award-container">
                                        <div>
                                            <h5 class="navy-blue">Award of Excellence</h5>
                                            <div class="flex">
                                                <p><b>Hospitrane</b>, an hospital staff training company, recently presented Westend Hospital with an Award of Excellence in July 2022. The award was presented by Mr. Afolabi Adun (Managing Direction) to Westend Hospital; on account of its commitment to professionalism in healthcare delivery.  </p>
                                                <img src="img/awards-and-accreditation/awards/hospitrane-award.jpg" alt="Hospitrane-award">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accreditations-wrapper recognition-container">
                               <h3 class="navy-blue">Accreditations</h3>
                               <p>As a hospital with high esteem and reputation, we are proud to hold several accreditations from all the relevant legal and professional bodies. Our accreditations include the following: </p>
                                    <div class="award-container">
                                                                       

                                    <div>
                                            <h5 class="navy-blue">Chevron Accredited</h5>
                                            <div class="flex">
                                                <p>Westend Hospital is an approved center for Chevron Criteria Medical Examination. Chevron Nigeria Limited is a subsidiary of Chevron Corporation and it is one of the largest oil producers in Nigeria.</p>
                                                <img src="img/awards-and-accreditation/accreditation/chevron.jpg" alt="Chevron logo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="light-grey-border"></div>
                                    <div class="award-container">
                                        <div>
                                            <h5 class="navy-blue">Shell Accredited</h5>
                                            <div class="flex">
                                                <p>Shell Petroleum Corporation, a British multinational oil, and gas company have approved Westend Hospital as one of the centers for Fitness for Duty Medical Examination, Pre-employment and Annual Medical Examination inclusive. Reflecting on the hospital’s commitment to providing safe and quality patient care, Westend Hospital has been approved to carry out this sensitive responsibility for Shell Petroleum Corporation.</p>
                                                <img src="img/awards-and-accreditation/accreditation/shell.jpg" alt="Shell Logo">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="light-grey-border"></div>
                                    <div class="award-container">
                                        <div>
                                            <h5 class="navy-blue">NIMASA Accredited</h5>
                                            <div class="flex">
                                                <p>The Nigerian Maritime Administration and Safety Agency, NIMASA, has accredited Westend Hospital for Seafarer’s Medical Examination and Certification.</p>
                                                <img src="img/awards-and-accreditation/accreditation/nimasa.jpg" alt="NIMASA Logo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="light-grey-border"></div>
                                    <div class="award-container">
                                        <div>
                                            <h5 class="navy-blue">SAIPEM Accredited</h5>
                                            <div class="flex">
                                                <p>Westend Hospital has also been approved by Saipem, a Nigerian subsidiary company of Saipem, with a huge structure covering all sorts of services to the Oil & Gas Industry to carry out Fitness for Duty Medical Examination for its personnel and affiliated organization.</p>
                                                <img src="img/awards-and-accreditation/accreditation/saipem.jpg" alt="SAIPEM Logo">
                                            </div>
                                        </div>
                                    </div>
                                      <div class="light-grey-border margin-bottom"></div>
                                      <h6 class="navy-blue">Additional Accreditations/Certifications includes:</h6>
                                                <ul class="square-list-type" id="squareList">
                                            <li>Pre-employment / Periodic / Pre-Sea Medical Certification</li>
                                            <li>Food Handler`s Medical Certification</li>
                                            <li>Comprehensive Medical Examination Certification</li>
                                            <li>Comprehensive Audiological Evaluation Certification</li>
                                               </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <!---------------------------MAIN PAGE CONTENT ENDS----------------------------------------->

            <footer>
                <!--Our Affiliations-->
                <div class="our-affiliations mini-section">
                    <div class="container flex flex-column">
                        <h3>
                            <span>Our</span>
                            Affiliations
                        </h3>
                        <div class="affiliation flex">
                            <img src="img/logo/_1511456132_462_General-Electric-mobile copy 2.png" alt="General Electric logo"/><img src="img/logo/Safari logo copy.png" alt="Safari Pharmacy logo"/><img src="img/logo/ddccopy.png" alt="DNA diagnostic Center"/><img src="img/logo/Fathers Heart copy.png" alt="Fathers Hearth Children Trust logo"/><img src="img/logo/Tymed CT Scan copy.png" alt="TYMED CT Scan Center logo"/>
                        </div>
                    </div>
                </div>

                <section id="main-footer">
                    <div class="container">
                        <!--row 1 About, For Health Professionals, Billing and Insurance & Ways to help-->
                        <!--BACK TO TOP-->
                            <button class="scrollTopBtn flex-column" id="myTopBTN" onclick="topFunction()"> <i class="fa fa-angle-up"></i>
                            <p>Top</p>
                        </button>
                        <!--BACK TO TOP BTN ENDS-->
                        <div class="flex lg-size">
                            <div class="dropdown">
                                <h4 class="dropbtn">About Us</h4>
                                <ul class="dropdown-content footer-menu" id="menuDropdown">
                                    <li>
                                        <a href="our-history">History</a>
                                    </li>
                                    <li>
                                         <a href="awards-and-accreditations"
                    >Awards & Accreditations</a
                  >
                                    </li>
                                    <li>
                                        <a href="map-and-directions">Maps & Directions</a>
                                    </li>
                                    <li>
                                        <a href="report-misconduct">Report Misconduct</a>
                                    </li>
                                    <li>
                                        <a href="contact-us">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <h4 class="dropbtn">For Health Professionals</h4>
                                <ul class="dropdown-content footer-menu" id="menuDropdown">
                                    <li>
                                        <a href="#/">Transfer a patient</a>
                                    </li>
                                    <li>
                                        <a href="refer-a-patient">Refer a patient</a>
                                    </li>
                                    <li>
                                        <a href="medical-test-and-services/patient-support-services/nursing">For nurses</a>
                                    </li>
                                    <li>
                                        <a href="#/">For physician</a>
                                    </li>
                                    <li>
                                        <a href="request-an-appointment">Enquiries & appointment</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <div class="billing-insurrance dropdown">
                                    <h4 class="dropbtn">Billing and Insurance</h4>
                                    <ul class="dropdown-content footer-menu" id="menuDropdown">
                                        <li>
                                            <a href="patient-and-visitors/accepted-insurance">Insurance Information</a>
                                        </li>
                                        <li>
                                            <a href="patient-and-visitors/online-pay">Pay a bill</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ways-to-help footer-header">
                                    <h4>Ways to Help</h4>
                                    <p>
                                        We supports Father's Heart Children's Trust, see how you can
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      make the lives of Orphans in Delta State better.
                                    </p>

                                    <a href="make-a-donation" class="make-donation btn rounded-white-btn">Make a Donation</a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="social-img flex">
                            <!--row 2 socials media-->
                            <div class="follow-us-align-left footer-header mini-section">
                                <h4>Follow us on Social media</h4>
                                <div class="flex">
                                  <a
                                    href="https://www.facebook.com/thewestendhospital"
                                    target="_blank"
                                    class="fa-brands fa-facebook-f fa"
                                    ></a>
                                    <a href="#/" class="fa-brands fa-twitter fa"></a>
                                    <a
                                    href="https://instagram.com/westendhospitalwarri"
                                    target="_blank"
                                    class="fa-brands fa-instagram fa"
                                    ></a>

                                    <a
                                    href="https://www.linkedin.com/company/westend-hospital"
                                    target="_blank"
                                    class="fa-brands fa-linkedin fa"
                                    ></a>
                                </div>
                            </div>

                            <!--row 3 Westend Hospital Logo -->
                            <div class="footer-img-container">
                                <img src="img/logo/Westend logo white.png" alt="Westend Hospital white logo" class="westendbluelogo" id="myImg"/>
                            </div>
                        </div>

                        <div class="copyright">
                            <small class="coy">&copy; <?php echo date("Y"); ?> Westend Hospital. All Right Reserved.
                            </small>
                            <small class="flex">
                                <a href="privacy-policy">Privacy Policy</a>
                                <a href="terms-of-use">Terms & Conditions</a>
                                <a href="patient-feedback">Feedback</a>
                                <a href="sitemap">Sitemap</a>
                                <a href="https://www.blackpopex.com" target="_blank"
                >Designed and Built By <span class="gold">Blackpopex</span></a
              >
                            </small>
                        </div>
                    </div>
                </section>
            </footer>
            <script src="js/main.js"></script>
            <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
            <script src="js/slick.js" type="text/javascript"></script>
            <script src="js/clearinputfield.js"></script>
        </body>
</html>
