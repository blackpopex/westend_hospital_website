<!DOCTYPE html>
<html lang="en">

    <head>
        <title>
            For Visitors | Westend Hospital
        </title>
        <link rel="icon" type="image/x-icon" href="./img/logo/favicon.ico.png" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
        <meta name="description"
            content="At Westend Hospital, we endeavor to make visiting loved ones in the hospital simple and convenient while ensuring that visitation rules and regulations are followed." />
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        <link rel="stylesheet" href="../css/demo.css" />
        <link rel="stylesheet" href="../css/slideshow.css" />
        <link rel="stylesheet" href="../css/slick.css" />
        <link rel="stylesheet" href="../css/slick-theme.css" />
        <link rel="stylesheet" href="../css/style.css" />
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
                            <a href="../index" id="wehLogo">
                                <img src="../img/logo/Westend logo blue.png" alt="Westend Hospital Logo" />
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
                                                    <a href="../medical-test-and-services/A-Z-of-all-medical-test">A-Z
                                                        of all Medical Test</a>
                                                </li>
                                                <li>
                                                    <a href="../medical-test-and-services/A-Z-of-all-medical-services">A-Z
                                                        of all Medical Services</a>
                                                </li>
                                                <li>
                                                    <a href="../medical-test-and-services/department-and-services">Department
                                                        & Services</a>
                                                </li>
                                                <li>
                                                    <a href="../medical-test-and-services/patient-education">Patient
                                                        Education</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <!--Patient and visitors-->
                                        <li class="dropdown">
                                            <a href="#/" class="dropbtn">Patient & Visitors</a>
                                            <ul class="dropdown-content" id="menuDropdown">
                                                <li>
                                                    <a href="../patient-and-visitors/vistors">Visitors</a>
                                                </li>
                                                <li>
                                                    <a href="../patient-and-visitors/your-hospital-stay">Your Hospital
                                                        Stay</a>
                                                </li>
                                                <li>
                                                    <a href="../patient-and-visitors/billing-and-financial-asistance">Billing
                                                        & Financial Asistance</a>
                                                </li>
                                                <li>
                                                    <a href="../patient-and-visitors/accepted-insurance">Accepted
                                                        Insurance</a>
                                                </li>
                                                <li>
                                                    <a href="../patient-and-visitors/patient-rights">Patient Rights</a>
                                                </li>
                                                <li>
                                                    <a href="../patient-and-visitors/medical-records">Medical
                                                        Records</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <!--Why choose us-->
                                        <li class="dropdown">
                                            <a href="#/" class="dropbtn">Why Choose Us</a>
                                            <ul class="dropdown-content" id="menuDropdown">
                                                <li>
                                                    <a href="../why-choose-us/our-mission-vision-and-values">Our
                                                        Mission, Vision & Values</a>
                                                </li>
                                                <li>
                                                    <a href="../why-choose-us/quality-patient-care">Quality Patient
                                                        Care</a>
                                                </li>
                                                <li>
                                                    <a href="../why-choose-us/patient-stories-testimonies">Patient's
                                                        Stories/Testimonies</a>
                                                </li>
                                                <li>
                                                    <a href="../why-choose-us/our-team">Our Team</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="contact-li">
                                            <a href="../contact-us" class="contact-us">Contact Us</a>
                                        </li>
                                    </ul>
                                    <!--navbar2-->
                                    <ul class="flex navbar2">
                                        <li>
                                            <a href="../map-and-directions">Maps & Direction</a>
                                        </li>
                                        <li>
                                            <a href="../request-an-appointment">Request Appointment</a>
                                        </li>
                                        <li>
                                            <a href="../refer-a-patient">Refer a Patient</a>
                                        </li>
                                        <li>
                                            <a href="../find-a-doctor">Find a Doctor</a>
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
                                                    <a href="../refer-a-patient">Refer a patient</a>
                                                </li>
                                                <li>
                                                    <a href="../map-and-directions">Maps & Directions</a>
                                                </li>
                                                <li><a href="#/">Treatments</a></li>
                                                <li>
                                                    <a
                                                        href="../medical-test-and-services/A-Z-of-all-medical-services">Services</a>
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
            <div class="section-background-image visitors">
                <div class="container">
                    <h2 class="subnavbar-color">For Visitors</h2>
                    <ul class="inline-block-breadcrumb subnavbar-color">
                        <li>
                            <a href="../index">Home</a>
                        </li>
                        <li>visitors</li>
                    </ul>
                </div>
            </div>


            <section id="visitor">
                <div class="container align-start column-reverse">

                    <div class="flex">
                        <div class="aside col-30">
                            <aside>
                                <img src="/img/background-image/Sidebar Image.jpg" alt="Nurse smiling"
                                    class="caring_since_Image">
                                <div class="column-left">

                                    <div class="quick-links">
                                        <h4 class="navy-blue">Quick Links</h4>
                                        <ul>

                                            <li><a href="vistors">Visitors</a></li>
                                            <li><a href="your-hospital-stay">Your Hospital Stay</a></li>
                                            <li><a href="billing-and-financial-asistance">Billing and Financial
                                                    Asistance</a></li>
                                            <li><a href="accepted-insurance">Accepted Insurance</a></li>
                                            <li><a href="patient-rights">Patient Rights</a></li>

                                            <li><a href="medical-records">Medical Records</a></li>
                                            <li><a href="../contact-us">Contact Us</a></li>
                                            <li><a href="../patient-and-visitors/online-pay">Pay a Bill</a></li>
                                        </ul>

                                    </div>
                                    <div class="er-24hrs-contact-numb">
                                        <img src="/img/background-image/24hours.jpg" alt="24 hours advert image">

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


                        <div class="column-right col-70">
                            <!--visitation policy-->
                            <div class="margin-bottom">
                                <h3 class="navy-blue">Visitation Policy</h3>
                                <p>At Westend Hospital we understand the need of our patients to have family, friends,
                                    and well-wishers come around to provide support to their loved ones while in the
                                    hospital especially during moments of critical health conditions. However, our
                                    patients may designate visitors of their choosing, including a person to be present
                                    for emotional support during the course of the patient's stay whether or not the
                                    visitor is related by blood or marriage, unless no visitors are allowed.</p>
                                <h4 class="navy-blue margin-top">All visitors to our hospital must abide by the below
                                    visitation policies and guidelines.</h4>
                                <ul class="square-list-type" id="squareList">
                                    <li>Patients and Visitors coming into the hospital are REQUIRED to state their
                                        purpose of visit, Washing/Sanitizing hands upon entry and exit are COMPULSORY.
                                    </li>
                                    <li>Patients for treatment, immunization, and other Outpatient services should be
                                        directed FIRST to the Out-patient Department, Patients coming only to buy drugs
                                        or run tests are to be directed to the APPROPRIATE department. Customers
                                        visiting the cafeteria should be directed to the cafeteria ONLY.</li>
                                    <li>Visitors of admitted patients in the in-patient facility are only to be
                                        permitted access within visiting hours (2 pm – 4 pm & 6 pm – 7 pm) and the
                                        number of visitors per visit and per patient must not be exceeded. Children
                                        under 5 years are discouraged from visiting for health reasons. If unavoidably
                                        present, they must be supervised, and sanitary precautions observed.</li>
                                    <li>Visitors of staff members or any of the Management team (including the Chairman
                                        or MD) must call such staff before the visit and will only be allowed entry
                                        after confirmation by such staff. For visitors of the Chairman, a confirmation
                                        of visit must be obtained from his Personal Assistant before access is granted
                                        in each case they are required to fill the Visitor’s ledger upon entry and exit.
                                    </li>
                                    <li>Visitors of staff and management are to be escorted by the security men to the
                                        designated office/department. Visiting in hallways in the patient care area is
                                        prohibited.</li>
                                    <li>Unaccompanied minors under (the age of 16 will not be allowed entry into the
                                        hospital. Parents are expected to properly supervise their children/wards and
                                        ensure they do not wander around the hospital. The hospital will not be
                                        responsible for the welfare of minors left unsupervised.</li>
                                    <li>Patients and Visitors are advised to be considerate and keep noise levels down
                                        at all times. Maintain low voice tones in all areas of the hospital and avoid
                                        running up and down the halls.</li>
                                    <li>Smoking, drinking alcohol and illicit drug use is BANNED on hospital premises.
                                    </li>
                                    <li>Patients/Visitors are fully responsible for their personal belongings and any
                                        loss is at the owner’s risk except for certain items kept in the care of
                                        hospital security. The hospital will not be held liable for missing or misplaced
                                        belongings.</li>
                                    <li>Fighting and violent disagreements on hospital premises are frowned upon.
                                        Physical and verbal abuse of staff is PROHIBITED. Report all personal and
                                        service complaints to the Operations Manager.</li>
                                </ul>

                                <p>We appreciate your cooperation and we thank you for Choosing Westend Hospital.</p>
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
                        <img src="../img/logo/_1511456132_462_General-Electric-mobile copy 2.png"
                            alt="General Electric logo" /><img src="../img/logo/Safari logo copy.png"
                            alt="Safari Pharmacy logo" /><img src="../img/logo/ddccopy.png"
                            alt="DNA diagnostic Center" /><img src="../img/logo/Fathers Heart copy.png"
                            alt="Fathers Hearth Children Trust logo" /><img src="../img/logo/Tymed CT Scan copy.png"
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
                                    <a href="/our-history">History</a>
                                </li>
                                <li>
                                    <a href="/awards-and-accreditations">Awards & Accreditations</a>
                                </li>
                                <li>
                                    <a href="../map-and-directions">Maps & Directions</a>
                                </li>
                                <li>
                                    <a href="/report-misconduct">Report Misconduct</a>
                                </li>
                                <li>
                                    <a href="../contact-us">Contact</a>
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
                                    <a href="/refer-a-patient">Refer a patient</a>
                                </li>
                                <li>
                                    <a href="/medical-test-and-services/patient-support-services/nursing">For nurses</a>
                                </li>
                                <li>
                                    <a href="#/">For physician</a>
                                </li>
                                <li>
                                    <a href="/request-an-appointment">Enquiries & appointment</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="billing-insurrance dropdown">
                                <h4 class="dropbtn">Billing and Insurance</h4>
                                <ul class="dropdown-content footer-menu" id="menuDropdown">
                                    <li>
                                        <a href="/patient-and-visitors/accepted-insurance">Insurance Information</a>
                                    </li>
                                    <li>
                                        <a href="/patient-and-visitors/online-pay">Pay a bill</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ways-to-help footer-header">
                                <h4>Ways to Help</h4>
                                <p>
                                    We supports Father's Heart Children's Trust, see how you can
                                    make the lives of Orphans in Delta State better.
                                </p>

                                <a href="../make-a-donation" class="make-donation btn rounded-white-btn">Make a
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
                            <img src="../img/logo/Westend logo white.png" alt="Westend Hospital white logo"
                                class="westendbluelogo" id="myImg" />
                        </div>
                    </div>

                    <div class="copyright">
                        <small class="coy">&copy; <?php echo date("Y"); ?> Westend Hospital. All Right Reserved.
                        </small>
                        <small class="flex">
                            <a href="/privacy-policy">Privacy Policy</a>
                            <a href="/terms-of-use">Terms & Conditions</a>
                            <a href="/patient-feedback">Feedback</a>
                            <a href="/sitemap">Sitemap</a>
                            <a href="https://www.blackpopex.com" target="_blank">Designed and Built By <span
                                    class="gold">Blackpopex</span></a>
                        </small>
                    </div>
                </div>
            </section>
        </footer>
        <script src="../js/main.js"></script>
        <script src="../js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="../js/slick.js" type="text/javascript"></script>
        <script src="../js/clearinputfield.js"></script>

    </body>
    </body>

</html>
</body>

</html>