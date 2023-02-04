<!DOCTYPE html>
<html lang="en">

    <head>
        <title>
            Anxiety Disorders | Westend Hospital
        </title>
        <link rel="icon" type="image/x-icon" href="../../img/logo/favicon.ico.png" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
        <meta name="description"
            content="Simply expressed, it's a mental health issue. This disorder rewires your brain so that it reacts to situations automatically with fear and dread. As a result, you acquire particular traits and routines. Physical signs of anxiety include rapid temperature increase and heavy sweating. " />
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
                    <h2 class="subnavbar-color">Patient Education</h2>
                    <ul class="inline-block-breadcrumb subnavbar-color">
                        <li>
                            <a href="../../index">Home</a>
                        </li>
                        <li>
                            <a href="../patient-education">Adolescents mental health</a>
                        </li>
                        <li>anxiety disorders</li>
                    </ul>
                </div>
            </div>

            <section id="department-and-services">
                <div class="container align-start column-reverse">
                    <div class="flex">
                        <!--left column, various life cycles-->
                        <div class="aside col-30">
                            <aside>
                                <img src="../../img/background-image/Sidebar Image.jpg" alt="Nurse smiling"
                                    class="caring_since_Image">
                                <div class="column-left">

                                    <div class="quick-links department-quicklinks">
                                        <div>
                                            <h4 class="sky-blue">Paediatric</h4>

                                            <h5 class="accordion navy-blue">Adolescent Mental Health</h5>
                                            <ul class="accordion-content" id="menuDropdown">
                                                <li><a href="../patient-education">Anxiety Disorder</a></li>
                                                <li><a href="../adolescent-mental-health/dysthymia">Dysthymia</a></li>
                                                <li><a href="../adolescent-mental-health/phobias">Phobias</a></li>
                                                <li><a href="../adolescent-mental-health/post-traumatic-stress">Post-traumatic
                                                        stress </a></li>
                                                <li><a href="../adolescent-mental-health/behaviour-disorder">Behaviour
                                                        Disorder </a></li>
                                            </ul>
                                            <h5 class="accordion navy-blue">Infant & toddler health</h5>
                                            <ul class="accordion-content" id="menuDropdown">
                                                <li><a href="#/">Link 1 </a></li>
                                                <li><a href="#/">Link 2</a></li>
                                                <li><a href="#/">Link 3</a></li>
                                                <li><a href="#/">Link 4 </a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="../patient-education">Adolescent Growth & development</a>
                                                </li>
                                                <li><a href="#/">Children's health</a></li>

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


                        <!--right column, links to each articles-->
                        <div class="column-right col-70">
                            <div class="margin-bottom">
                                <h3 class="navy-blue">Anxiety Disorder</h3>
                                <p>Recently, it has been difficult for you to get through the day. You are constantly
                                    anxious, panicked, and afraid that something will go wrong. You are a sweaty mess,
                                    and your heart is beating quickly.</p>
                                <p>I'm sorry to say, but you might have an anxiety disorder. Don't worry, it can be
                                    treated, and we can assist you.</p>
                            </div>
                            <div class="margin-bottom">
                                <h6 class="sky-blue">What is a disorder of anxiety?</h6>
                                <p>It's a mental health issue, to put it simply. Your brain is rewired by this condition
                                    to respond to situations with an automatic response of fear and dread. You develop
                                    certain behaviors and habits as a result. Deep sweating and a quick rise in body
                                    temperature are some physical symptoms of anxiousness.</p>
                                <p>It's common to experience worry; perhaps you experience anxiety or even nervousness
                                    when working, or perhaps you're getting ready for an interview or an exam. You may
                                    feel anxious in situations like these, and that's quite normal.</p>
                                <p>Before channeling energy or concentrating on the current issue to keep us safe,
                                    anxiety helps us recognize life-threatening circumstances and boost reflexes.</p>
                                <p>However, an anxiety disorder goes beyond the occasional trepidation and mild worry
                                    you might feel. </p>
                                <p>When anxiety interferes with your ability to function or overreacting to situations
                                    that make you feel something, you have cause for concern.</p>
                                <p> Life can be challenging for anyone who has an anxiety illness, but it can be
                                    particularly difficult for adolescents.</p>
                                <p>An individual's likelihood of developing an anxiety disorder may be increased by
                                    several hereditary and environmental factors, including:</p>
                                <ul class="square-list-type" id="squareList">
                                    <li>Stressful or traumatic events in early childhood or adulthood. Shyness,
                                        behavioral inhibition, feeling restless and uncomfortable around unfamiliar
                                        people, places, and environments (violence, sexual harassment, strict
                                        discipline, and poverty). </li>
                                    <li>Physical disorders such as thyroid issues and heart arrhythmias (unusual heart
                                        rhythm). </li>
                                    <li>Gender and sex: Women are more prone to anxiety disorders than men. It could be
                                        brought on by hormones, particularly those that change during the month. The
                                        hormone testosterone, which men have more of and which may reduce anxiety, is
                                        another contributor.</li>
                                </ul>
                            </div>
                            <div class="margin-bottom">
                                <p>There are other sorts of anxiety disorders, such as GAD (general anxiety disorder),
                                    which is characterized by intense, irrational worry and tension. Even when there is
                                    nothing wrong, it is incredibly simple to make someone feel uneasy. One might
                                    occasionally worry about their well-being, jobs, interpersonal connections, or even
                                    unimportant issues. Insomnia, trouble concentrating or focusing, and restlessness
                                    are physical symptoms.</p>
                                <p>Separation anxiety disorder is a frequent disorder in kids and teenagers who worry
                                    about being away from their parents for no other reason than that they think they
                                    might get hurt or forget to come back when they say they will. Adults with this
                                    illness often have a strong connection to trauma.</p>
                                <p>Intense panic episodes are one of the symptoms of panic disorders. Compared to other
                                    anxiety disorders, these attacks frequently impose stronger, more intense feelings.
                                    Patients may experience terror because an attack is often triggered suddenly when
                                    they are in a feared situation. Heart attacks, sweating, heart palpitations, chest
                                    pain, and choked-up emotions are all common symptoms of panic attacks.</p>
                                <p>Because panic attacks can be confusing, persons who experience them worry and fear
                                    the next attack all the time.</p>
                            </div>
                            <div class="margin-bottom">
                                <h6 class="sky-blue">Identifying anxiety disorders</h6>
                                <p>Please get medical attention if you have any of the following symptoms as you may be
                                    experiencing an anxiety disorder.</p>
                                <ul class="square-list-type" id="squareList">
                                    <li>Physical signs include chilly or sweaty palms, racing heart, nausea, numbness,
                                        tense muscles, shortness of breath, and dry mouth.</li>
                                    <li>Behavioral symptoms include recurrent activities or behaviors, an uneasy
                                        feeling, and difficulty falling asleep.</li>
                                    <li>Panic-like symptoms, nightmares, recurrent flashbacks to trauma, and irrational
                                        ideas are all examples of mental or emotional symptoms.</li>
                                </ul>
                                <p>Patients with anxiety disorders should pay attention to this very important health
                                    issue. It's vital to keep in mind that anxiety disorders are a type of mental
                                    illness and are not caused by character faults, personal failings, or poor
                                    upbringing. You need assistance; you cannot wait for it to abate or disappear on its
                                    own. Ask for assistance from your healthcare practitioner, such as Westend Hospital,
                                    whose job is to create a treatment plan just for you. Plans could include both
                                    counseling and medicine.</p>
                            </div>
                            <div class="margin-bottom">
                                <h6 class="sky-blue">Next, let's talk about therapy</h6>
                                <p>Counseling is another term for this, and it aids in addressing the condition's
                                    emotional effects. You may anticipate that a mental health professional will guide
                                    you through the procedure and create tools to aid in better managing the illness.
                                </p>

                                <p>An example of psychotherapy kind is a. psychological counseling using CBT (CBT). This
                                    is the most popular form of treatment for the disease; its curriculum calls for
                                    identifying cognitive patterns and behavioral distinctions. It is now up to you to
                                    take on the challenge in light of this understanding.</p>
                                <p>Exposure therapy involves facing the fears and ideas that underlie the anxiety. It
                                    forces you to engage in things and situations that you may have been avoiding to
                                    deal with or cope with your condition. This approach could include leisure
                                    activities, exercise, and relaxation.</p>
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
                                    <a href="../../medical-test-and-services/patient-support-services/nursing">For
                                        nurses</a>
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
                                        <a href="../../patient-and-visitors/billing-and-financial-asistance">Pay a
                                            bill</a>
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

</html>