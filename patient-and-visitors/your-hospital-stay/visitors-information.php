<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Visitors Information | Westend Hospital
        </title>
        <link rel="icon" type="image/x-icon" href="./img/logo/favicon.ico.png"/>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"/>
        <meta name="description" content="Our visitors information provide information such as visitation time, number of persons allows per visit at the final stage of life, when expecting a baby, etc"/>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"/>
        <link rel="stylesheet" href="../../css/demo.css"/>
        <link rel="stylesheet" href="../../css/slideshow.css"/>
        <link rel="stylesheet" href="../../css/slick.css"/>
        <link rel="stylesheet" href="../../css/slick-theme.css"/>
        <link rel="stylesheet" href="../../css/style.css"/>
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
                        <a href="../../index.html" id="wehLogo">
                            <img src="../../img/logo/Westend logo blue.png" alt="Westend Hospital Logo"/>
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
                                                <a href="../../medical-test-and-services/A-Z-of-all-medical-test.html">A-Z of all Medical Test</a>
                                            </li>
                                            <li>
                                                <a href="../../medical-test-and-services/A-Z-of-all-medical-services.html">A-Z of all Medical Services</a>
                                            </li>
                                            <li>
                                                <a href="../../medical-test-and-services/department-and-services.html">Department & Services</a>
                                            </li>
                                            <li>
                                                <a href="../../medical-test-and-services/patient-education.html">Patient Education</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <!--Patient and visitors-->
                                    <li class="dropdown">
                                        <a href="#/" class="dropbtn">Patient & Visitors</a>
                                        <ul class="dropdown-content" id="menuDropdown">
                                            <li>
                                                <a href="../../patient-and-visitors/vistors.html">Visitors</a>
                                            </li>
                                            <li>
                                                <a href="../../patient-and-visitors/your-hospital-stay.html">Your Hospital Stay</a>
                                            </li>
                                            <li>
                                                <a href="../../patient-and-visitors/billing-and-financial-asistance.html">Billing & Financial Asistance</a>
                                            </li>
                                            <li>
                                                <a href="../../patient-and-visitors/accepted-insurance.html">Accepted Insurance</a>
                                            </li>
                                            <li>
                                                <a href="../../patient-and-visitors/patient-rights.html">Patient Rights</a>
                                            </li>
                                            <li>
                                                <a href="../../patient-and-visitors/medical-records.html">Medical Records</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <!--Why choose us-->
                                    <li class="dropdown">
                                        <a href="#/" class="dropbtn">Why Choose Us</a>
                                        <ul class="dropdown-content" id="menuDropdown">
                                            <li>
                                                <a href="../../why-choose-us/our-mission-vision-and-values.html">Our Mission, Vision & Values</a>
                                            </li>
                                            <li>
                                                <a href="../../why-choose-us/quality-patient-care.html">Quality Patient Care</a>
                                            </li>
                                            <li>
                                                <a href="../../why-choose-us/patient-stories-testimonies.html">Patient's Stories/Testimonies</a>
                                            </li>
                                            <li>
                                                <a href="../../why-choose-us/our-team.html">Our Team</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="contact-li">
                                        <a href="../../contact-us.html" class="contact-us">Contact Us</a>
                                    </li>
                                </ul>
                                <!--navbar2-->
                                <ul class="flex navbar2">
                                    <li>
                                        <a href="../../map-and-directions.html">Maps & Direction</a>
                                    </li>
                                    <li>
                                        <a href="../../request-an-appointment.html">Request Appointment</a>
                                    </li>
                                    <li>
                                        <a href="../../refer-a-patient.html">Refer a Patient</a>
                                    </li>
                                    <li>
                                        <a href="../../find-a-doctor.html">Find a Doctor</a>
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
                                        <input type="text" placeholder="Looking for something?" name="Search" onkeyup="showSearchBox(this.value)"
                        id="searchQuery" />
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
                          <a href="../../refer-a-patient.html">Refer a patient</a>
                        </li>
                        <li>
                          <a href="../../map-and-directions.html"
                            >Maps & Directions</a
                          >
                        </li>
                        <li><a href="#/">Treatments</a></li>
                        <li>
                          <a
                            href="../../medical-test-and-services/A-Z-of-all-medical-services.html"
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
            <div class="section-background-image registration-and-admitting">
                <div class="container">
                    <h2 class="subnavbar-color">Visitors Information</h2>
                    <ul class="inline-block-breadcrumb subnavbar-color">
                        <li>
                            <a href="../../index.html">Home</a>
                        </li>
                        <li>
                            <a href="../your-hospital-stay.html">your-hospital-stay</a>
                        </li>
                        <li>Visitors Information</li>
                    </ul>
                </div>
            </div>

            <section id="your-room-and-unit">
                <div class="container align-start column-reverse">
                    <div class="flex">
                        <!--steps to follow-->
                        <!--steps to follow-->
                            <div class="aside col-30"> <aside>
                                <img src="../../img/background-image/Sidebar Image.jpg" alt="Nurse smiling" class="caring_since_Image">
                                <div class="column-left">

                                    <div class="quick-links">
                                        <div>
                                            <h4 class="navy-blue">Steps to follow</h4>
                                            <ul>
                                                <li><a href="registration-and-admitting-process.html">Registration and Admitting process</a></li>
                                                <li><a href="what-to-bring-with-you.html">What to bring with you</a></li>
                                                <li><a href="your-room-and-unit.html">Your room and unit</a></li>
                                                <li><a href="visitors-information.html">Visitors information</a></li>
                                                <li><a href="going-home-discharge.html">Going home/discharge</a></li>
                                            </ul>
                                        </div>


                                    </div>
                                    <div class="er-24hrs-contact-numb">
                                        <img src="../../img/background-image/24hours.jpg" alt="24 hours advert image">

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
                        <!--registration and admitting-->
                        <div
                            class="column-right col-70">
                            <div class="margin-bottom">
                                <h3 class="navy-blue">Rules for Visitors </h3>
                                <!--registration-->
                                <div class="margin-bottom">
                                    <p>What number of visitors or relatives can be with a patient?</p>
                                     <ul class="square-list-type" id="squareList">
                                        <li><b class="sky-blue">Staying in the hospital:</b> Only 2 visitors per visit are allowed, visiting time from 2 p.m. – 4 p.m. in the afternoon, and 6 p.m. - 7 p.m. in the evening. 1 overnight stay visitor is also allowed.</li>
                                
                                        <li><b class="sky-blue">Within the Emergency Room:</b> 2 people are allowed at a time.</li>
                                        <li><b class="sky-blue">At clinic appointment:</b> 2-3 people are allowed per appointment. </li>
                                    </ul>
                                </div>
                                <div class="margin-bottom">
                                     <p>At medical visits and in the hospital, visitors must:</p>
                                     <ul class="square-list-type" id="squareList">
                                        <li>Be either 12 years or older.</li>
                                        <li>Have a face mask worn. </li>
                                        <li>Not have COVID exposures or symptoms.</li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <h3 class="navy-blue">Visitor Policy Exceptions</h3>
                                <p>If you want to find out more about visitors’ policy exceptions, talk to the patient's care team. They will review your request and guide you adequately.</p>
                                <div>
                                    <h5 class="sky-blue">Final Stages</h5>
                                    <p>If facing death, we can allow <strong>2 visitors</strong>, 24/7.</p>
                                </div>
                                <div>
                                    <h5 class="sky-blue">Expecting a Baby</h5>
                                    <p>If you and your partner are expecting a baby, you can have <strong>2 visitors</strong>, 24/7.  </p>
                                </div>
                                <div>
                                    <h5 class="sky-blue">Clergy</h5>
                                    <p>Along with your permitted visitors, <strong>clergy members</strong> may visit you.</p>
                                </div>
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
                        <img src="../../img/logo/_1511456132_462_General-Electric-mobile copy 2.png" alt="General Electric logo"/><img src="../../img/logo/Safari logo copy.png" alt="Safari Pharmacy logo"/><img src="../../img/logo/ddccopy.png" alt="DNA diagnostic Center"/><img src="../../img/logo/Fathers Heart copy.png" alt="Fathers Hearth Children Trust logo"/><img src="../../img/logo/Tymed CT Scan copy.png" alt="TYMED CT Scan Center logo"/>
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
                                    <a href="../../our-history.html">History</a>
                                </li>
                                <li>
                                    <a href="../../awards-and-accreditations.html">Awards & Accreditations</a>
                                </li>
                                <li>
                                    <a href="../../map-and-directions.html">Maps & Directions</a>
                                </li>
                                <li>
                                    <a href="../../report-misconduct.html">Report Misconduct</a>
                                </li>
                                <li>
                                    <a href="../../contact-us.html">Contact</a>
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
                                    <a href="../../refer-a-patient.html">Refer a patient</a>
                                </li>
                                <li>
                                    <a href="../../medical-test-and-services/patient-support-services/nursing.html">For nurses</a>
                                </li>
                                <li>
                                    <a href="#/">For physician</a>
                                </li>
                                <li>
                                    <a href="../../request-an-appointment.html">Enquiries & appointment</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="billing-insurrance dropdown">
                                <h4 class="dropbtn">Billing and Insurance</h4>
                                <ul class="dropdown-content footer-menu" id="menuDropdown">
                                    <li>
                                        <a href="../../patient-and-visitors/accepted-insurance.html">Insurance Information</a>
                                    </li>
                                    <li>
                                        <a href="../../patient-and-visitors/online-pay.html">Pay a bill</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ways-to-help footer-header">
                                <h4>Ways to Help</h4>
                                <p>
                                    We supports Father's Heart Children's Trust, see how you can
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      make the lives of Orphans in Delta State better.
                                </p>

                                <a href="../../make-a-donation.html" class="make-donation btn rounded-white-btn">Make a Donation</a>
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
                            <img src="../../img/logo/Westend logo white.png" alt="Westend Hospital white logo" class="westendbluelogo" id="myImg"/>
                        </div>
                    </div>

                    <div class="copyright">
                        <small class="coy">&copy;2021 Westend Hospital. All Right Reserved.
                        </small>
                        <small class="flex">
                            <a href="../../privacy-policy.html">Privacy Policy</a>
                            <a href="../../terms-of-use.html">Terms & Conditions</a>
                            <a href="../../patient-feedback.html">Feedback</a>
                            <a href="../../sitemap.html">Sitemap</a>
                             <a href="https://www.blackpopex.com" target="_blank"
                >Designed and Built By <span class="gold">Blackpopex</span></a
              >
                        </small>
                    </div>
                </div>
            </section>
        </footer>
        <script src="../../js/main.js"></script>
        <script src="../../js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="../../js/slick.js" type="text/javascript"></script>
        <script src="../../js/clearinputfield.js"></script>

    </body>
</html></body></html>
