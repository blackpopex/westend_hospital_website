<!DOCTYPE html>
<html lang="en">

    <head>
        <title>
            Nursing - Patient Support Services | Westend Hospital </title>
        <link rel="icon" type="image/x-icon" href="../../img/logo/favicon.ico.png" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
        <meta name="description" content="Our nursing department is a specialist division focused on patients with specific needs that is typically seen in a hospital setting.
        Each nurse in a nursing unit has received training on how to care for various patient types. " />
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        <link rel="stylesheet" href="../../css/demo.css" />
        <link rel="stylesheet" href="../../css/slideshow.css" />
        <link rel="stylesheet" href="../../css/slick.css" />
        <link rel="stylesheet" href="../../css/slick-theme.css" />
        <link rel="stylesheet" href="../../css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
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
            ajaxCall.onreadystatechange = function() {
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
            <header id="myHeaderMenu">
                <!-----------TOP NAVIGATION------------->
                <div class="main-header-wrapper">
                    <div class="topNav">
                        <div class="container flex">
                            <a href="../../index" id="wehLogo">
                                <img src="../../img/logo/Westend logo blue.png" alt="Westend Hospital Logo" />
                            </a>
                            <nav class="flex">
                                <div id="navToggler" class="hamburgerMenu" onclick="myFunction(this)">
                                    <div class="bar bar1"></div>
                                    <div class="bar bar2"></div>
                                    <div class="bar bar3"></div>
                                </div>

                                <div class="navbar-links" id="sideNavbar">
                                    <ul class="flex navBar1">
                                        <!--Medical Test & services-->
                                        <li class="dropdown">
                                            <a href="#/" class="dropbtn">Medical Test & Services</a>
                                            <ul class="dropdown-content" id="menuDropdown">
                                                <li>
                                                    <a href="../../medical-test-and-services/A-Z-of-all-medical-test">A-Z
                                                        of all Medical Test</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="../../medical-test-and-services/A-Z-of-all-medical-services">A-Z
                                                        of all Medical Services</a>
                                                </li>
                                                <li>
                                                    <a href="../../medical-test-and-services/department-and-services">Department
                                                        & Services</a>
                                                </li>
                                                <li>
                                                    <a href="../../medical-test-and-services/patient-education">Patient
                                                        Education</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <!--Patient and visitors-->
                                        <li class="dropdown">
                                            <a href="#/" class="dropbtn">Patient & Visitors</a>
                                            <ul class="dropdown-content" id="menuDropdown">
                                                <li>
                                                    <a href="../../patient-and-visitors/vistors">Visitors</a>
                                                </li>
                                                <li>
                                                    <a href="../../patient-and-visitors/your-hospital-stay">Your
                                                        Hospital Stay</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="../../patient-and-visitors/billing-and-financial-asistance">Billing
                                                        & Financial Asistance</a>
                                                </li>
                                                <li>
                                                    <a href="../../patient-and-visitors/accepted-insurance">Accepted
                                                        Insurance</a>
                                                </li>
                                                <li>
                                                    <a href="../../patient-and-visitors/patient-rights">Patient
                                                        Rights</a>
                                                </li>
                                                <li>
                                                    <a href="../../patient-and-visitors/medical-records">Medical
                                                        Records</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <!--Why choose us-->
                                        <li class="dropdown">
                                            <a href="#/" class="dropbtn">Why Choose Us</a>
                                            <ul class="dropdown-content" id="menuDropdown">
                                                <li>
                                                    <a href="../../why-choose-us/our-mission-vision-and-values">Our
                                                        Mission, Vision & Values</a>
                                                </li>
                                                <li>
                                                    <a href="../../why-choose-us/quality-patient-care">Quality Patient
                                                        Care</a>
                                                </li>
                                                <li>
                                                    <a href="../../why-choose-us/patient-stories-testimonies">Patient's
                                                        Stories/Testimonies</a>
                                                </li>
                                                <li>
                                                    <a href="../../why-choose-us/our-team">Our Team</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="contact-li">
                                            <a href="../../contact-us" class="contact-us">Contact Us</a>
                                        </li>
                                    </ul>
                                    <!--navbar2-->
                                    <ul class="flex navbar2">
                                        <li>
                                            <a href="../../map-and-directions">Maps & Direction</a>
                                        </li>
                                        <li>
                                            <a href="../../request-an-appointment">Request Appointment</a>
                                        </li>
                                        <li>
                                            <a href="../../refer-a-patient">Refer a Patient</a>
                                        </li>
                                        <li>
                                            <a href="../../find-a-doctor">Find a Doctor</a>
                                        </li>
                                        <li>
                                            <a href="#/"><i class="fa fa-phone-alt"
                                                    style="margin-right: 0.5em; color: #e4b77d"></i>
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
                                                onkeyup="showSearchBox(this.value)" id="searchQuery" />
                                            <button type="submit" id="searchBtn" class="overlaySearch">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                    <!--set fixed height for this container-->
                                    <div class="ajax-result-p-search-container">
                                        <!--display Ajax result from server here-->
                                        <div class="searchResultWrapper" id="searchWrapper">
                                            <div id="showSearchResult" class="search_result_container"></div>
                                        </div>
                                        <div id="searchResult" class="popular-searches">
                                            <h3>Popular Searches</h3>
                                            <ul>
                                                <li>
                                                    <a href="../../refer-a-patient">Refer a patient</a>
                                                </li>
                                                <li>
                                                    <a href="../../map-and-directions">Maps & Directions</a>
                                                </li>
                                                <li><a href="#/">Treatments</a></li>
                                                <li>
                                                    <a
                                                        href="../../medical-test-and-services/A-Z-of-all-medical-services">Services</a>
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
            <div class="section-background-image departments-and-services">
                <div class="container">
                    <h2 class="subnavbar-color">Department of Nursing</h2>
                    <ul class="inline-block-breadcrumb subnavbar-color">
                        <li>
                            <a href="../../index">Home</a>
                        </li>
                        <li>
                            <a href="../department-and-services">Department and Services</a>
                        </li>
                        <li>Nursing Department</li>
                    </ul>
                </div>
            </div>

            <section id="Nursing">
                <div class="container  align-start column-reverse">
                    <div class="flex">
                        <div class="aside col-30">

                            <aside>
                                <img src="../../img/background-image/Sidebar Image.jpg" alt="Nurse smiling"
                                    class="caring_since_Image">
                                <div class="column-left">

                                    <div class="quick-links department-quicklinks">
                                        <h4 class="navy-blue">Quick Links</h4>
                                        <h5 class="accordion navy-blue">Clinical Departments</h5>
                                        <ul class="accordion-content" id="menuDropdown">

                                            <li><a href="../clinical-departments/anesthesiology-and-perioperative">Anesthesiology
                                                    & Perioperative</a></li>
                                            <li><a href="../clinical-departments/audiometry">Audiometry</a></li>
                                            <li><a href="../clinical-departments/ear-nose-and-throat">Ear, Nose &
                                                    Throat</a></li>
                                            <li><a href="../clinical-departments/emergency-medicine">Emergency
                                                    Medicine</a></li>
                                            <li><a href="../clinical-departments/geriatric">Geriatric</a></li>
                                            <li><a href="#/">Immunization</a></li>
                                            <li><a href="../clinical-departments/laboratory">Laboratory</a></li>
                                            <li><a href="../clinical-departments/molecular">Molecular</a></li>
                                            <li><a href="../clinical-departments/obstetrics-and-gynecology">Obstetrics
                                                    and Gynecology</a></li>
                                            <li><a href="../clinical-departments/pharmacy">Pharmacy</a></li>
                                            <li><a href="../clinical-departments/physiotherapy">Physiotherapy</a></li>
                                            <li><a href="../clinical-departments/radiology">Radiology</a></li>
                                        </ul>

                                        <h5 class="accordion navy-blue">Patient Support Services</h5>
                                        <ul class="accordion-content" id="menuDropdown">
                                            <li><a href="account">Account</a></li>
                                            <li><a href="client-relations">Client Relations</a></li>
                                            <li><a href="insurance">Insurance</a></li>
                                            <li><a href="medical-records">Medical Record</a></li>
                                            <li><a href="nursing">Nursing</a></li>
                                            <li><a href="occupational-health">Occupational Health</a></li>
                                            <li><a href="out-patient-department">Out Patient Department</a></li>
                                            <li><a href="supermart">Supermart</a></li>
                                            <li><a href="cafeteria">Cafeteria</a></li>
                                            <li><a href="security">Security</a></li>


                                        </ul>
                                        <ul>
                                            <li><a href="../../contact-us">Contact Us</a></li>
                                            <li><a href="../../patient-and-visitors/online-pay">Pay a Bill</a></li>
                                        </ul>
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
                        <!--Clincal Departments-->
                        <div class="column-right col-70 welcome-text">
                            <div class="margin-bottom">
                                <h3 class="navy-blue">
                                    Welcome to Department of Nursing</h3>
                                <div class="margin-bottom">
                                    <p>A nursing unit is a specialized division that is usually found in a hospital
                                        setting and is devoted to patients with particular needs. Each nurse in a
                                        nursing unit has been trained on how to handle different categories of patients.
                                        Our nurses collaborate with staff from allied disciplines, including dietetics,
                                        medical social service, pharmacy, etc. to provide holistic individualized care
                                        in the hospital.</p>
                                    <p>The nursing staff at Westend is committed to providing the best care possible for
                                        patients and their families, with a focus on their individual needs. They are
                                        driven by a desire for perfection and excellence.</p>
                                </div>

                                <div class="department-img-container margin-bottom margin-top">
                                    <div class="flex">
                                        <div class="col-30">
                                            <img src="../../img/other photos/Nurses/Westend-Hospital-Nurses.jpg"
                                                alt="Westend hospital nurses">
                                        </div>
                                        <div class="col-30">
                                            <img src="../../img/other photos/Nurses/nurses-surgery.jpg"
                                                alt="Westend hospital nurses during surgery">
                                        </div>
                                        <div class="col-30">
                                            <img src="../../img/other photos/Nurses/Westend-nurse-labour-room.jpg"
                                                alt="Westend nurse in labour room">
                                        </div>
                                    </div>
                                </div>

                                <div class="margin-bottom margin-top">
                                    <h4 class="navy-blue">Dedication to patient safety and high standards</h4>
                                    <p> Quality patient care and patient safety are the top priorities of the nursing
                                        staff at Westend Hospital. Our goal of becoming a dependable leader in improving
                                        health and providing care for people calls for steadfast dedication to both.
                                    </p>
                                    <p>As we endeavor to guarantee that they constantly receive safe, high-quality
                                        efficient care, we invite our patients to join us as our partners. </p>
                                    <p>Care, compassion, and clinical excellence are all infused into our patient-first
                                        mindset to deliver:</p>
                                    <ul class="square-list-type" id="squareList">
                                        <li><span class="sky-blue"><b>Highest level of care: </b></span> We'll score as
                                            highly as we can on all quality-related metrics.</li>
                                        <li><span class="sky-blue"><b>Transparency:</b></span> We'll be open about both
                                            our achievements and the things we want to do better.</li>
                                    </ul>
                                </div>
                                <div class="margin-bottom margin-top">
                                    <h4 class="navy-blue">Federal requirements</h4>
                                    <p> We evaluate ourselves using nurse quality measures that have been nationally
                                        recognized.</p>
                                </div>
                                <div class="margin-bottom margin-top">
                                    <h4 class="navy-blue">Why join us? </h4>
                                    <p>In addition to being valued by their physician colleagues and supported by a
                                        dedication to evidence-based care practices and professional development, nurses
                                        at Westend Hospital are an essential component of the care team.</p>
                                    <p>With the help of our Distributed Care Delivery Network, you can advance your
                                        nursing career and discover fresh, original approaches to practice. Consider
                                        being a member of our team of professionals that provide patients with
                                        high-quality treatment every day.</p>

                                </div>
                                <div class="margin-bottom margin-top">
                                    <h6 class="sky-blue">Customer service</h6>
                                    <p>By taking care of their bodily needs, avoiding disease, and treating medical
                                        issues, we serve as caretakers for our patients. Nurses must watch and monitor
                                        the patient while documenting any pertinent data to support treatment
                                        decision-making.</p>
                                    <p>Nurses treat wounds, give medication, perform regular physicals, take thorough
                                        medical histories, monitor vital parameters, run diagnostic tests, handle
                                        medical equipment, take blood samples, and admit and discharge patients on
                                        doctor's orders.</p>
                                </div>
                                <div class="margin-bottom margin-top">
                                    <h6 class="sky-blue">Advocacy for patients</h6>
                                    <p>At Westend Hospital, nurses frequently offer their patients and family emotional
                                        assistance in addition to their clinical duties. This can involve listening to
                                        patients and determining their physical, emotional, cultural, and mental
                                        requirements, as well as making sure they comprehend their therapy and are ready
                                        for it.</p>
                                </div>
                                <div class="margin-bottom margin-top">
                                    <h6 class="sky-blue">Care preparation</h6>
                                    <p>The choice of how to treat patients is directly influenced by a nurse. As a
                                        result, our nurses consider all available information while evaluating patient
                                        signs and spotting potential issues to provide the best advice.</p>
                                </div>
                                <div class="margin-bottom margin-top">
                                    <h6 class="sky-blue">Patient support and education</h6>
                                    <p>The nurses at Westend hospitals are in charge of making sure that patients have
                                        the best possible understanding of their health, ailments, drugs, and
                                        treatments. This is crucial when patients are discharged from the hospital and
                                        left to continue their care on their private schedule at home.</p>
                                </div>
                                <div class="light-grey-border"></div>
                                <!--News-->
                                <div class="margin-bottom margin-top">
                                    <h4 class="navy-blue">Nurses News </h4>
                                    <ul class="square-list-type" id="squareList">
                                        <li><a href="#/" class="sky-blue">Job Opportunity</a></li>
                                        <li><a href="#/" class="sky-blue">Upcoming events</a></li>
                                        <li><a href="#/" class="sky-blue">Nurses Week</a></li>

                                    </ul>
                                </div>




                                <div class="light-grey-border"></div>
                                <h4 class="navy-blue margin-top scheduling-heading">Nursing Central Scheduling</h4>
                                <div class="scheduling margin-bottom">
                                    <ul>
                                        <li><span class=" fa fa-phone-alt navy-blue"></span> +234 (0) 807 420 3365</li>
                                        <li><span class="fa fa-envelope navy-blue"></span> <a
                                                href="mailto:nursing@thewestendhospital.com">nursing@thewestendhospital.com</a>
                                        </li>
                                        <li><span class="fa fa-envelope navy-blue"></span> <a
                                                href="mailto:nursingmanager@thewestendhospital.com">nursingmanager@thewestendhospital.com</a>
                                        </li>
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
                        <img src="../../img/logo/_1511456132_462_General-Electric-mobile copy 2.png"
                            alt="General Electric logo" /><img src="../../img/logo/Safari logo copy.png"
                            alt="Safari Pharmacy logo" /><img src="../../img/logo/ddccopy.png"
                            alt="DNA diagnostic Center" /><img src="../../img/logo/Fathers Heart copy.png"
                            alt="Fathers Hearth Children Trust logo" /><img src="../../img/logo/Tymed CT Scan copy.png"
                            alt="TYMED CT Scan Center logo" />
                    </div>
                </div>
            </div>

            <section id="main-footer">
                <div class="container">
                    <!--row 1 About, For Health Professionals, Billing and Insurance & Ways to help-->
                    <!--BACK TO TOP-->
                    <button class="scrollTopBtn flex-column" id="myTopBTN" onclick="topFunction()"> <i
                            class="fa fa-angle-up"></i>
                        <p>Top</p>
                    </button>
                    <!--BACK TO TOP BTN ENDS-->
                    <div class="flex lg-size">
                        <div class="dropdown">
                            <h4 class="dropbtn">About Us</h4>
                            <ul class="dropdown-content footer-menu" id="menuDropdown">
                                <li>
                                    <a href="../../our-history">History</a>
                                </li>
                                <li>
                                    <a href="../../awards-and-accreditations">Awards & Accreditations</a>
                                </li>
                                </li>
                                <li>
                                    <a href="../../map-and-directions">Maps & Directions</a>
                                </li>
                                <li>
                                    <a href="../../report-misconduct">Report Misconduct</a>
                                </li>
                                <li>
                                    <a href="../../contact-us">Contact</a>
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
                                    <a href="../../refer-a-patient">Refer a patient</a>
                                </li>
                                <li>
                                    <a href="nursing">For nurses</a>
                                </li>
                                <li>
                                    <a href="#/">For physician</a>
                                </li>
                                <li>
                                    <a href="../../request-an-appointment">Enquiries & appointment</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="billing-insurrance dropdown">
                                <h4 class="dropbtn">Billing and Insurance</h4>
                                <ul class="dropdown-content footer-menu" id="menuDropdown">
                                    <li>
                                        <a href="../../patient-and-visitors/accepted-insurance">Insurance
                                            Information</a>
                                    </li>
                                    <li>
                                        <a href="../../patient-and-visitors/online-pay">Pay a bill</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ways-to-help footer-header">
                                <h4>Ways to Help</h4>
                                <p>
                                    We supports Father's Heart Children's Trust, see how you can
                                    make the lives of Orphans in Delta State better.
                                </p>

                                <a href="../../make-a-donation" class="make-donation btn rounded-white-btn">Make a
                                    Donation</a>
                            </div>
                        </div>
                    </div>
                    <div class="social-img flex">
                        <!--row 2 socials media-->
                        <div class="follow-us-align-left footer-header mini-section">
                            <h4>Follow us on Social media</h4>
                            <div class="flex">
                                <a href="https://www.facebook.com/thewestendhospital" target="_blank"
                                    class="fa-brands fa-facebook-f fa"></a>
                                <a href="#/" class="fa-brands fa-twitter fa"></a>
                                <a href="https://instagram.com/westendhospitalwarri" target="_blank"
                                    class="fa-brands fa-instagram fa"></a>

                                <a href="https://www.linkedin.com/company/westend-hospital" target="_blank"
                                    class="fa-brands fa-linkedin fa"></a>
                            </div>
                        </div>

                        <!--row 3 Westend Hospital Logo -->
                        <div class="footer-img-container">
                            <img src="../../img/logo/Westend logo white.png" alt="Westend Hospital white logo"
                                class="westendbluelogo" id="myImg" />
                        </div>
                    </div>

                    <div class="copyright">
                        <small class="coy">&copy; <?php echo date("Y"); ?> Westend Hospital. All Right Reserved.
                        </small>
                        <small class="flex">
                            <a href="../../privacy-policy">Privacy Policy</a>
                            <a href="../../terms-of-use">Terms & Conditions</a>
                            <a href="../../patient-feedback">Feedback</a>
                            <a href="../../sitemap">Sitemap</a>
                            <a href="https://www.blackpopex.com" target="_blank">Designed and Built By <span
                                    class="gold">Blackpopex</span></a>
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
    </body>

</html>