<!DOCTYPE html>
<html lang="en">

    <head>
        <title>
            Ear, Nose and Throat (Otolaryngology) - Clinical Department | Westend Hospital</title>
        <link rel="icon" type="image/x-icon" href="../../img/logo/favicon.ico.png" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
        <meta name="description"
            content="The ears, nose, and throat are the main areas of interest in the medical field of otolaryngology." />
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
                    <h2 class="subnavbar-color">Ear, Nose and Throat (Otolaryngology)</h2>
                    <ul class="inline-block-breadcrumb subnavbar-color">
                        <li>
                            <a href="../../index">Home</a>
                        </li>
                        <li>
                            <a href="../department-and-services">Department and Services</a>
                        </li>
                        <li>Ear, nose and throat</li>
                    </ul>
                </div>
            </div>

            <section id="Ent">
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
                        <div class="column-right col-70 ">
                            <div class="margin-bottom">
                                <h3 class="navy-blue">
                                    Welcome to Department of Otolaryngology</h3>
                                <div class="margin-bottom">
                                    <p>The ears, nose, and throat are the main areas of interest in the medical field of
                                        otolaryngology. Because specialists are trained in both medicine and surgery, it
                                        is also known as otolaryngology-head and neck surgery. An ENT, or ear, nose, and
                                        throat physician is another name for an otolaryngologist.</p>

                                </div>

                                <div class="department-img-container margin-bottom margin-top">
                                    <img src="../../img/other photos/ear-nose-throat.jpg" alt="Ear, nose and throat">
                                </div>



                                <div class="margin-top margin-bottom">
                                    <h4 class="sky-blue text-center margin-rt">Otolaryngology (ENT) At A Glance</h4>

                                    <div class="ent-conditions_wrapper">
                                        <div class="flex">
                                            <div class="col-30">
                                                <div class="conditions-wrapper ear-orange_border">
                                                    <div class="condition-desc">
                                                        <h6 class="navy-blue">Ear Problems</h6>
                                                        <p>Ear infections, Tinnitus, and ringing in your ears can be the
                                                            result of loud noises or medicines. Ear barotrauma is an
                                                            injury to your ear due to insufficient equilibration of the
                                                            middle ear.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-30">
                                                <div class="conditions-wrapper throat-pink_border">
                                                    <div class="condition-desc">
                                                        <h6 class="navy-blue">Throat Problems</h6>
                                                        <p>Inflammation is a primary cause of throat pain. The reason
                                                            could be allergies, strep infection, GERD, or tonsillitis.
                                                            Hoarseness or voice loss is caused by Laryngitis(swelling of
                                                            the voice box).</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-30">
                                                <div class="conditions-wrapper nose-blue_border">
                                                    <div class="condition-desc">
                                                        <h6 class="navy-blue">Nose Problems</h6>
                                                        <p>Soft growths that form on the sinus or nasal mucosa are known
                                                            as nasal polyps. Rhinitis is an allergy-related inflammation
                                                            of the nose and sinuses. A runny nose is the main sign. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="margin-top margin-bottom">
                                    <p>The ear, nose, and throat perform important tasks and are some of the basic
                                        bodily processes that make life so full and lovely. However, life is hampered or
                                        even endangered when one or more of these processes stop functioning as they
                                        should.</p>

                                </div>

                                <div class="margin-top margin-bottom">
                                    <p>Some of the conditions that Westend's Hospital "ENT" (ear, nose, and throat)
                                        experts treat include:</p>
                                    <ul class="square-list-type" id="squareList">
                                        <li>Hearing and balance challenges</li>
                                        <li>Swallowing and speech problems.</li>
                                        <li>Breathing and sleep concerns.</li>
                                        <li>Allergies and sinus problems.</li>
                                        <li>Skin conditions.</li>
                                        <li>Facial plastic surgery.</li>
                                    </ul>
                                </div>

                                <div class="margin-bottom">
                                    <h4 class="navy-blue">Factors for ENT appointment</h4>
                                    <p>There may be a variety of factors that make an ENT appointment necessary for you.
                                        The body parts most likely to be impacted by a condition that an ENT physician
                                        can treat are those listed below:</p>

                                    <ul class="square-list-type" id="squareList">
                                        <li><b class="sky-blue">Nose (rhinology): </b>Nose-related crises such as
                                            allergies, sinus headaches, migraines, deviated septum, and reduction of the
                                            enlarged turbinate. </li>
                                        <li><b class="sky-blue">Otology/neurotology of the ears: </b> Not just in terms
                                            of hearing, but also about balance, our ears play a critical function in a
                                            healthy body. Many ear problems, such as hearing loss and ringing (Tinnitus)
                                            in the ears.</li>
                                        <li><b class="sky-blue">Throat (laryngology):</b>Issues with the airways or
                                            painful throats (laryngology) diseases like gastroesophageal reflux disease,
                                            as well as issues with the airways or sore throats.</li>
                                        <li><b class="sky-blue">Face: </b>The change or discomfort in the face could be
                                            the result of something like a congenital defect or a side effect of another
                                            medical disease, changes in facial appearance brought on by trauma or
                                            injury.</li>
                                        <li><b class="sky-blue">Neck and head: </b>ENT physicians may provide care for
                                            this vital area of the body, which contains several of the most vital
                                            organs, including dealing with enlarged thyroid glands.</li>
                                        <li><b class="sky-blue">Snoring: </b>Snoring issues, as well as disorders like
                                            sleep apnoea, which may have a serious impact, are other reasons why many
                                            people schedule an appointment at our ENT clinic.</li>

                                    </ul>
                                </div>
                                <div class="margin-bottom">
                                    <h4 class="navy-blue">Services rendered at our ENT department</h4>
                                    <p>You will be seen by one of the best otolaryngologists when you schedule a visit
                                        at Westend Hospital's ear, nose, and throat (ENT) clinic. These professionals
                                        will figure out the cause of any problems you or your loved ones may be
                                        experiencing, whether they have to do with sleep, sinus and allergy issues,
                                        breathing, swallowing, hearing, or balancing. In the primary care setting, our
                                        team of experts presides over ENT-related issues that are present in about 50%
                                        of patients. Westend’s Otolaryngologists are specialized consultants who can
                                        diagnose you, create a treatment plan for you, and carry out delicate
                                        operations, such as removing tumors or regaining hearing and reconstructing of
                                        tympanic membrane.</p>
                                    <div class="margin-bottom">
                                        <h6 class="navy-blue">Conditions our ENT Department treat includes:</h6>
                                        <ul class="square-list-type" id="squareList">
                                            <li>Infections of the ears.</li>
                                            <li>Loss of hearing.</li>
                                            <li>Sinus and nose issues.</li>
                                            <li>Diseases of the thyroid and parathyroid.</li>
                                            <li>Sleep problems.</li>
                                            <li>Facial immobility (facial movement disorders).</li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="light-grey-border"></div>
                                <h4 class="navy-blue margin-top scheduling-heading">Otolaryngology Central Scheduling
                                </h4>
                                <div class="scheduling margin-bottom">
                                    <ul>
                                        <li><span class=" fa fa-phone-alt navy-blue"></span> +234 (0) 807 419 8678</li>
                                        <li><span class="fa fa-envelope navy-blue"></span> <a
                                                href="mailto:ent@thewestendhospital.com">ent@thewestendhospital.com</a>
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