<!DOCTYPE html>
<html lang="en">

    <head>
        <title>
            Laboratory - Clinical Department | Westend Hospital</title>
        <link rel="icon" type="image/x-icon" href="../../img/logo/favicon.ico.png" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
        <meta name="description"
            content="In order to acquire information about a patient's health that is crucial for the diagnosis, treatment, and prevention of disease, Westend Hospital employs a highly trained staff of licensed medical laboratory scientists and skilled technicians." />
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
                    <h2 class="subnavbar-color">Laboratory</h2>
                    <ul class="inline-block-breadcrumb subnavbar-color">
                        <li>
                            <a href="../../index">Home</a>
                        </li>
                        <li>
                            <a href="../department-and-services">Department and Services</a>
                        </li>
                        <li>Laboratory</li>
                    </ul>
                </div>
            </div>

            <section id="Laboratory">
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

                                            <li><a href="anesthesiology-and-perioperative">Anesthesiology &
                                                    Perioperative</a></li>
                                            <li><a href="audiometry">Audiometry</a></li>
                                            <li><a href="ear-nose-and-throat">Ear, Nose & Throat</a></li>
                                            <li><a href="emergency-medicine">Emergency Medicine</a></li>
                                            <li><a href="geriatric">Geriatric</a></li>
                                            <li><a href="#/">Immunization</a></li>
                                            <li><a href="laboratory">Laboratory</a></li>
                                            <li><a href="molecular">Molecular</a></li>
                                            <li><a href="obstetrics-and-gynecology">Obstetrics and Gynecology</a></li>
                                            <li><a href="pharmacy">Pharmacy</a></li>
                                            <li><a href="physiotherapy">Physiotherapy</a></li>
                                            <li><a href="radiology">Radiology</a></li>
                                        </ul>

                                        <h5 class="accordion navy-blue">Patient Support Services</h5>
                                        <ul class="accordion-content" id="menuDropdown">
                                            <li><a href="../patient-support-services/account">Account</a></li>
                                            <li><a href="../patient-support-services/client-relations">Client
                                                    Relations</a></li>
                                            <li><a href="../patient-support-services/insurance2">Insurance</a></li>
                                            <li><a href="../patient-support-services/medical-records">Medical Record</a>
                                            </li>
                                            <li><a href="../patient-support-services/nursing">Nursing</a></li>
                                            <li><a href="../patient-support-services/occupational-health">Occupational
                                                    Health</a></li>
                                            <li><a href="../patient-support-services/out-patient-department">Out Patient
                                                    Department</a></li>
                                            <li><a href="../patient-support-services/supermart">Supermart</a></li>
                                            <li><a href="../patient-support-services/cafeteria">Cafeteria</a></li>
                                            <li><a href="../patient-support-services/security">Security</a></li>


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
                                    Welcome to Laboratory Department</h3>
                                <div class="margin-bottom">
                                    <p>In a clinical laboratory, tests are performed on clinical specimens to gather
                                        data about a patient's health; which is essential for diagnosis, treatment, and
                                        prevention of disease. At Westend Hospital, we have highly equipped staff of
                                        certified medical laboratory scientists and experienced technicians. We offer
                                        cost-effective, close-to-home laboratory services that not only enhance
                                        diagnosis but monitor a wide range of conditions as well. Furthermore, we form
                                        one of the best clinical laboratories in Delta state and conduct a wide range of
                                        tests annually.</p>
                                </div>



                                <!--GRID CONTAINER-->
                                <div
                                    class="grid-photo-main-container department-img-container margin-bottom margin-top">
                                    <div class="grid-wrapper flex">
                                        <img src="../../img/other photos/laboratory-department/lab-staff.jpg"
                                            alt="Lab staff" class="grid-item large-grid-item">
                                        <img src="../../img/other photos/laboratory-department/450x300/analyzing-sampley.jpg"
                                            alt="analyzing-sampley" class="grid-item">
                                        <img src="../../img/other photos/laboratory-department/450x300/collecting-sample.jpg"
                                            alt="collecting sample" class="grid-item">

                                        <img src="../../img/other photos/laboratory-department/450x300/microscope.jpg"
                                            alt="microscope" class="grid-item">
                                        <img src="../../img/other photos/laboratory-department/450x300/staff-analyzing-blood-sample.jpg"
                                            alt="Staff analyzing blood sample" class="grid-item">
                                        <img src="../../img/other photos/laboratory-department/450x300/viewing-microscope.jpg"
                                            alt="Viewing Microscope" class="grid-item">
                                        <img src="../../img/other photos/laboratory-department/450x300/ongoing-test.jpg"
                                            alt="Testing a sample" class="grid-item">

                                    </div>
                                </div>

                                <div class="margin-top margin-bottom" style="margin-top: 2em">
                                    <h4 class="navy-blue  margin-top">The most significant of all the results we offer
                                        is credibility.</h5>
                                        <p>Regardless of status, whether you're an inpatient, outpatient, or facing an
                                            emergency or life-threatening situation, rest assured our state-of-the-art
                                            laboratory is available 24 hours and every day of the week to offer
                                            guaranteed results that are quick and accurate in testing.</p>
                                        <div>
                                            <p>At Westend Hospital, the following laboratory specialties are available:
                                            </p>
                                            <ul class="square-list-type" id="squareList">
                                                <li>Clinical/Chemical pathologist</li>
                                                <li>Medical Microbiologist/Immunologist</li>
                                                <li>Histopathologist</li>
                                                <li>Heamatologist</li>
                                            </ul>
                                        </div>
                                </div>



                                <div class="margin-top margin-bottom">
                                    <h4 class="navy-blue">Our Approach</h4>
                                    <div>
                                        <p>Our laboratory is located in the heart of Delta State, Nigeria. Aside from
                                            serving hospital patients, we facilitate tests for other clinics and
                                            hospitals nationally. Our laboratory provides a wide range of vast majority
                                            of testing equipment best for laboratory practices.</p>
                                        <p>When doctor request to have a patient's blood sample tested, the following
                                            procedures are undergone:</p>
                                        <p><b class="sky-blue bold-text">Collection: </b> First and foremost a doctor,
                                            nurse, technician, or phlebotomist will draw the patient's blood. Note that
                                            sample collecting tubes differ therefore every test has a special tube. It
                                            depends on the condition the patient might have, the doctor may also request
                                            a urine sample, throat swab, or any other sample as indicated.
                                            The next phase after the sample collection is labeling with the patient's
                                            name and other information. The sample is then received and processed by the
                                            laboratory, and testing begins.
                                        </p>
                                    </div>

                                </div>

                                <h4 class="navy-blue">Types of Testing</h4>

                                <div class="margin-bottom">
                                    <h6 style="margin-top: 1em">Chemistry Testing</h6>
                                    <p>Fluids and importantly the blood is tested for substances such as chemicals,
                                        drugs, etc, that indicate an abnormality or disease conditions. We check
                                        cholesterol and other tests for the risk of heart disease, glucose to monitor
                                        diabetes, or thyroxine to monitor the thyroid gland.</p>
                                </div>

                                <div class="margin-top margin-bottom">
                                    <h6>Terminology Testing</h6>
                                    <p>In this procedure, an analysis of the amount and function of one's blood cells
                                        and plasma is done. There are specific signs the doctor looks out for, one of
                                        them being the complete blood cell count (CBC), which indicates how many blood
                                        cells of each type are in a patient's blood, and the prothrombin time (PT),
                                        which measures the amount of time for the blood clot.</p>
                                </div>

                                <div class="margin-top margin-bottom">
                                    <h6>Microbiology Testing</h6>
                                    <p>This section indulges in tests related to a variety of specimen samples
                                        consisting of infections caused by bacteria, fungi, or parasites. Urine cultures
                                        for urinary tract infections are also conducted.</p>
                                </div>

                                <div class="margin-top margin-bottom">
                                    <h6>Virology Testing</h4>
                                        <p>We test for viral infections, rapid tests for respiratory viruses such as
                                            influenza, antibody tests for HIV, and molecular tests for noroviruses.</p>
                                </div>

                                <div class="margin-top margin-bottom">
                                    <h6>Immunology/Molecular Diagnostics</h6>
                                    <p>We conduct tests that determine the state of the immune system that is, checking
                                        its functions to make sure they are performing normally. An analysis of DNA and
                                        RNA is used in testing for a variety of diseases and also for the risk of
                                        developing diseases, and factor V Leiden genotyping for patients with blood
                                        clots.</p>
                                </div>

                                <div class="margin-top margin-bottom">
                                    <h6>Tumor Profiling Laboratory</h6>
                                    <p>Simply put, we analyze tumor DNA to predict the resistance of tumors and
                                        sensitivity to a vast variety of tailored drugs.</p>
                                </div>


                                <div class="light-grey-border"></div>
                                <h4 class="navy-blue margin-top scheduling-heading">Laboratory Central Scheduling</h4>
                                <div class="scheduling margin-bottom">
                                    <ul>
                                        <li><span class=" fa fa-phone-alt navy-blue"></span> +234 (0) 807 420 2846</li>
                                        <li><span class="fa fa-envelope navy-blue"></span> <a
                                                href="mailto:laboratory@thewestendhospital.com">laboratory@thewestendhospital.com</a>
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
                                    <a href="../patient-support-services/nursing">For nurses</a>
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