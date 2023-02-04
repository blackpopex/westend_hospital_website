<!DOCTYPE html>
<html lang="en">

    <head>
        <title>
            Nurse Helen Okpue - Medical Team | Westend Hospital
        </title>
        <link rel="icon" type="image/x-icon" href="../../../img/logo/favicon.ico.png" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
        <meta name="description" content=" " />
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        <link rel="stylesheet" href="../../../css/demo.css" />
        <link rel="stylesheet" href="../../../css/slideshow.css" />
        <link rel="stylesheet" href="../../../css/slick.css" />
        <link rel="stylesheet" href="../../../css/slick-theme.css" />
        <link rel="stylesheet" href="../../../css/style.css" />
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
                            <a href="../../../index" id="wehLogo">
                                <img src="../../../img/logo/Westend logo blue.png" alt="Westend Hospital Logo" />
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
                                                    <a
                                                        href="../../../medical-test-and-services/A-Z-of-all-medical-test">A-Z
                                                        of all Medical Test</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="../../../medical-test-and-services/A-Z-of-all-medical-services">A-Z
                                                        of all Medical Services</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="../../../medical-test-and-services/department-and-services">Department
                                                        & Services</a>
                                                </li>
                                                <li>
                                                    <a href="../../../medical-test-and-services/patient-education">Patient
                                                        Education</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <!--Patient and visitors-->
                                        <li class="dropdown">
                                            <a href="#/" class="dropbtn">Patient & Visitors</a>
                                            <ul class="dropdown-content" id="menuDropdown">
                                                <li>
                                                    <a href="../../../patient-and-visitors/vistors">Visitors</a>
                                                </li>
                                                <li>
                                                    <a href="../../../patient-and-visitors/your-hospital-stay">Your
                                                        Hospital Stay</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="../../../patient-and-visitors/billing-and-financial-asistance">Billing
                                                        & Financial Asistance</a>
                                                </li>
                                                <li>
                                                    <a href="../../../patient-and-visitors/accepted-insurance">Accepted
                                                        Insurance</a>
                                                </li>
                                                <li>
                                                    <a href="../../../patient-and-visitors/patient-rights">Patient
                                                        Rights</a>
                                                </li>

                                                <li>
                                                    <a href="../../../patient-and-visitors/medical-records">Medical
                                                        Records</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <!--Why choose us-->
                                        <li class="dropdown">
                                            <a href="#/" class="dropbtn">Why Choose Us</a>
                                            <ul class="dropdown-content" id="menuDropdown">
                                                <li>
                                                    <a href="../../../why-choose-us/our-mission-vision-and-values">Our
                                                        Mission, Vision & Values</a>
                                                </li>
                                                <li>
                                                    <a href="../../../why-choose-us/quality-patient-care">Quality
                                                        Patient Care</a>
                                                </li>
                                                <li>
                                                    <a href="../../../why-choose-us/patient-stories-testimonies">Patient's
                                                        Stories/Testimonies</a>
                                                </li>
                                                <li>
                                                    <a href="../../../why-choose-us/our-team">Our Team</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="contact-li">
                                            <a href="../../../contact-us" class="contact-us">Contact Us</a>
                                        </li>
                                    </ul>
                                    <!--navbar2-->
                                    <ul class="flex navbar2">
                                        <li>
                                            <a href="../../../map-and-directions">Maps & Direction</a>
                                        </li>
                                        <li>
                                            <a href="../../../request-an-appointment">Request Appointment</a>
                                        </li>
                                        <li>
                                            <a href="../../../refer-a-patient">Refer a Patient</a>
                                        </li>
                                        <li>
                                            <a href="../../../Find-a-doctor">Find a Doctor</a>
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
                                                <li><a href="../../../refer-a-patient">Refer a patient</a></li>
                                                <li><a href="../../../map-and-directions">Maps & Directions</a></li>
                                                <li><a href="#/">Treatments</a></li>
                                                <li><a
                                                        href="../../../medical-test-and-services/A-Z-of-all-medical-services">Services</a>
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
            <div class="section-background-image staff-profile">
                <div class="container flex profile-header">
                    <img src="../../../img/team-members/profile-photo/medical-team/Helen-Okpue.jpg" alt="Helen-Okpue"
                        id="staffImg">
                    <div class="staff-profile-details">
                        <h2 class="subnavbar-color">Mrs. Helen Okpue</h2>
                        <h4 class="navy-blue">Nursing Manager</h4>

                        <div class="icon-contact-number flex navy-blue">
                            <i class="fa fa-phone-alt"></i>
                            <p>+234 (0) 807 771 9097</p>
                        </div>

                        <ul class="inline-block-breadcrumb subnavbar-color">
                            <li>
                                <a href="../../../index">Home</a>
                            </li>
                            <li>
                                <a href="../../../why-choose-us/our-team">our-team</a>
                            </li>
                            <li>
                                <a href="../../../why-choose-us/leardership/medical-team">medical-team</a>
                            </li>
                            <li>Helen Okpue</li>
                        </ul>
                    </div>

                </div>
            </div>

            <section id="our-team">
                <div class="container align-start column-reverse">
                    <div class="flex">
                        <!--Profile Details-->
                        <div class="column-left col-30">
                            <div class="profile-detail-wrapper">
                                <h4 class="navy-blue">Profile Details</h4>
                                <div class="margin-bottom">
                                    <h5 class="sky-blue">Specialty</h5>
                                    <ul>
                                        <li>Peadiatric clinical nurse specialist(CNS)</li>
                                    </ul>
                                </div>
                                <div class="margin-bottom">
                                    <h5 class="sky-blue">Qualification</h5>
                                    <ul>
                                        <li>Registered Paediatric Nurse</li>
                                        <li>Registered Nurse/Midwife</li>
                                        <li>Occupational Health Nurse</li>
                                        <li>Sickle Cell Counsellor</li>
                                    </ul>
                                </div>
                                <div class="margin-bottom">
                                    <h5 class="sky-blue">Memberships</h5>
                                    <ul>
                                        <li>Nil</li>

                                    </ul>
                                </div>

                                <div class="margin-bottom">
                                    <h5 class="sky-blue">Spoken Languages</h5>
                                    <ul>
                                        <li>English</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Staff Biography and expertise-->
                        <div class="column-right col-70">
                            <!--Biography-->
                            <div class="margin-bottom">
                                <h3 class="navy-blue">Biography</h3>
                                <p>An enthusiastic, compassionate, and devoted professional with extensive experience
                                    across all areas of healthcare provision and management. She is a highly experienced
                                    and exceptional leader who can develop and motivate others to achieve targets,
                                    upholds healthcare standards, and demonstrates a strong ability as a team leader
                                    with good listening skills.</p>
                                <p>She is a proactive individual, able to adapt and perform effectively under pressure.
                                    Amiable with good interpersonal relationships with superiors, colleagues,
                                    subordinates, patients, and relatives.</p>
                                <p>She is also diligent and goes the extra mile to achieve set goals, quick to learn
                                    with good interpersonal and organizational ethics; with the believes that it pays to
                                    work hard.</p>

                                <div class="margin-top">
                                    <h6 class="navy-blue">Her duties include: </h6>
                                    <ul class="square-list-type margin-bottom" id="squareList">
                                        <li>Coordinating the day-to-day activities of the hospital making sure that
                                            cost-effective healthcare is rendered to all categories of patients.</li>
                                        <li>Implementing the care plan and evaluating care rendered to clients as per
                                            hospital policy.</li>
                                        <li>Allocating staff to various units according to their strength and ability.
                                        </li>
                                        <li>Planning and budgeting for consumables and instruments as per the need of
                                            the hospital.</li>
                                        <li>Formulating policies and protocols as per hospital needs.</li>
                                        <li>Interviewing and recruitment of Nurses as the need arises.</li>
                                        <li>Ensuring that the equipments are functional and the faulty ones are reported
                                            for repairs.</li>
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
                        <img src="../../../img/logo/_1511456132_462_General-Electric-mobile copy 2.png"
                            alt="General Electric logo" /><img src="../../../img/logo/Safari logo copy.png"
                            alt="Safari Pharmacy logo" /><img src="../../../img/logo/ddccopy.png"
                            alt="DNA diagnostic Center" /><img src="../../../img/logo/Fathers Heart copy.png"
                            alt="Fathers Hearth Children Trust logo" /><img
                            src="../../../img/logo/Tymed CT Scan copy.png" alt="TYMED CT Scan Center logo" />
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
                                    <a href="../../../our-history">History</a>
                                </li>
                                <li>
                                    <a href="../../../awards-and-accreditations">Awards & Accreditations</a>
                                </li>
                                <li>
                                    <a href="../../../map-and-directions">Maps & Directions</a>
                                </li>
                                <li>
                                    <a href="../../../report-misconduct">Report Misconduct</a>
                                </li>
                                <li>
                                    <a href="../../../contact-us">Contact</a>
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
                                    <a href="../../../refer-a-patient">Refer a patient</a>
                                </li>
                                <li>
                                    <a href="../../../medical-test-and-services/patient-support-services/nursing">For
                                        nurses</a>
                                </li>
                                <li>
                                    <a href="#/">For physician</a>
                                </li>
                                <li>
                                    <a href="../../../request-an-appointment">Enquiries & appointment</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="billing-insurrance dropdown">
                                <h4 class="dropbtn">Billing and Insurance</h4>
                                <ul class="dropdown-content footer-menu" id="menuDropdown">
                                    <li>
                                        <a href="../../../patient-and-visitors/accepted-insurance">Insurance
                                            Information</a>
                                    </li>
                                    <li>
                                        <a href="../../../patient-and-visitors/online-pay">Pay a bill</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ways-to-help footer-header">
                                <h4>Ways to Help</h4>
                                <p>
                                    We supports Father's Heart Children's Trust, see how you can
                                    make the lives of Orphans in Delta State better.
                                </p>

                                <a href="../../../patient-and-visitors/online-pay"
                                    class="make-donation btn rounded-white-btn">Make a Donation</a>
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
                            <img src="../../../img/logo/Westend logo white.png" alt="Westend Hospital white logo"
                                class="westendbluelogo" id="myImg" />
                        </div>
                    </div>

                    <div class="copyright">
                        <small class="coy">&copy; <?php echo date("Y"); ?> Westend Hospital. All Right Reserved.
                        </small>
                        <small class="flex">
                            <a href="../../../privacy-policy">Privacy Policy</a>
                            <a href="../../../terms-of-use">Terms & Conditions</a>
                            <a href="../../../patient-feedback">Feedback</a>
                            <a href="../../../sitemap">Sitemap</a>
                            <a href="https://www.blackpopex.com" target="_blank">Designed and Built By <span
                                    class="gold">Blackpopex</span></a>
                        </small>
                    </div>
                </div>
            </section>
        </footer>
        <script src="../../../js/main.js"></script>
        <script src="../../../js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="../../../js/slick.js" type="text/javascript"></script>
    </body>

</html>