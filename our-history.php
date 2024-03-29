<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Our History | Westend Hospital
        </title>
        <link rel="icon" type="image/x-icon" href="img/logo/favicon.ico.png"/>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"/>
        <meta name="description" content="Dr. John E.O. Amadasun (Dr. Med, FA (ORL), FWACS, FMC (ORL), FICS, MNES) and his Swiss wife, Mrs. Gratia Amadasun, established Westend Hospital Ltd. on January 4th, 1978.
The hospital is intended to be perceived as embodying the 'Western end' of orthodox medicine, or rather, the standard of medical care seen in Western Europe, hence the name 'Westend.'"/>
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
        <script src="http://code.jquery.com/jquery-3.1.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <script src="https://kit.fontawesome.com/12d9de5a0c.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
                                                <a href="why-choose-us/our-team.html">Our Team</a>
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
                                        <input type="text" placeholder="Looking for something?" name="Search"   onkeyup="showSearchBox(this.value)"
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
            <div class="section-background-image departments-and-services">
                <div class="container">
                    <h2 class="subnavbar-color">Our History</h2>
                    <ul class="inline-block-breadcrumb subnavbar-color">
                        <li>
                            <a href="index">Home</a>
                        </li>
                        <li>history</li>

                    </ul>
                </div>
            </div>

            <section id="ourHistory">
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
                        <!--About the founder, photo gallery of westend, and timeline-->
                        <div
                            class="column-right col-70">

                            <!--About the founder-->
                            <div class="founder margin-bottom">
                                <h3 class="navy-blue">The founding of the hospital</h3>
                                <div class="content-wrapper">
                                    <div class="clear-float">
                                        <img src="img/other photos/JEO.jpg" alt="Dr. J.E.O. Amadasun">
                                        <p>Westend Hospital Ltd was founded on January 4th, 1978 by Dr. John E.O Amadasun, Dr. Med, FA (ORL), FWACS, FMC (ORL), FICS, MNES, lifetime Member, Nigerian Medical Association (NMA), and his Swiss wife- Mrs. Gratia Amadasun.The day before this memorable day, he had resigned from the government’s employ. A major traffic accident with several people critically wounded and dying who could have been saved in a well-equipped hospital, forced his decision. </p>
                                    </div>
                        
                                    <p>
                                         Heading into private practice, his goal was to start and run an effectual, functioning, and caring hospital for the inhabitants of the young industrial city and its environs.
                                    </p>
                                    <p>

                                        The name ‘Westend’ came from the fact that the Hospital is designed to be seen as representing the ‘Western end’ of orthodox medicine or rather, the level of medical practice, experienced in Western Europe. </p>
                                    <p>
                                         The Hospital started as a humble 8 – bedded clinic in a hired bungalow on the 4th of January, 1978. By September 1979, it had expanded to include a 2 – storey building. There were 22 beds now and a staff of 32, including five expatriate doctors and nurses, and a well-equipped medical laboratory. 
                                    </p>
                                    <p>Westend Hospital is the first private hospital to acquire a CT Scan machine in the defunct Bendel State. Over time we have continued in this kiazen tradition by investing in technology and professional capacity with our recent acquisition of a new GE CT Scanner and the setup of a Stroke Unit managed by our own in-house Consultant Neurologist.</p>

                                </div>

                                <p>Our wards consist of 50 beds with private rooms, executive rooms, male, female, and children’s wards, ICU, NICU, and High Dependency Care Units. Care for the whole family is provided by our multi-disciplinary team of full-time consultants covering Obstetrics and Gynecology, Pediatrics, and Internal Medicine. Other specialties covered include ENT, Cardiology, Urology, Nephrology, Orthopedics, and General Surgery.</p>
                                <p>We have an average of five General Practitioners in this unit to handle general cases. This is the first point of call and cases that require specialist review are referred to any of the Specialist units.</p>
                                <p>Westend Hospital is a pacesetter and has been at the forefront of several technological promotions in the field of Teleradiology and EMR solutions. Westend Hospital has been outsourcing radiology reporting for almost 2 decades and now we utilize an international award-winning Teleradiology provider, Teleradiology Solutions, for the interpretation of non-invasive imaging studies, namely CT, ultrasound, and digitized Xrays. Also partnering with Insta Health Solutions India to customize an EMR and Hospital Management Software for Nigerian hospitals has brought affordable cutting-edge technology to the fingertips of many hospitals in Nigeria.</p>
                                <p>Westend Hospital has benefited from several capacity-building initiatives including a 2-year collaboration with SPDC`s COHSASA accredited I.A. Hospital Ogunu, Warri, for the development of capacity and expertise in Westend Hospital in preparation for our COHSASA accreditation towards which we are working.</p>
                                <p>There have been a lot of contributors from all over the world to the intellectual capital and innovation at Westend Hospital over the years. One such contributor is the immediate past Governor of Delta State, Dr. Emmanuel Uduaghan, who was our reliable Anaesthesist and Senior Medical Officer.</p>
                                <p>Having a staff strength of over a hundred, Westend Hospital has won the “Most Valuable Employer Award” by the Nigeria Social Insurance Trust Fund – the Federal Agency concerned with employees` welfare.</p>
                                <p>Our sister company, Safari Care Pharmaceuticals Ltd, ensures a unique collaboration at providing high-quality cost-effective medication in a society pervaded by fake and counterfeit drugs.</p>
                            </div>
                            <!--Our facility-->
                            <div class="margin-bottom">
                                <h3 class="navy-blue">Our Facility</h3>
                                <p>Westend Hospital is built in a low-density, well-planned, quiet, hygienic, residential estate with comfortable surroundings. The infrastructural facilities include four boreholes that guarantee regular and clear water supply, a world-class cafeteria for local and continental dishes, open to serve in-patient, out-patient, and patient’s relatives, and a suitable car parking space. Four high-power generators that support the electrical grid supply, two high-power inverter-UPS systems that function as a backup supply to the in-patient department, and surgical theatres for the transition during change-over between power sources. </p>

                            </div>

                            <!--photo gallery of various sections of westend hospital-->

                            
                            <div class="photo-gallery">
                                <h4 class="navy-blue text-center">Photo Gallery</h4>
                                <div class="flex">
                                    <div class="photo-gallery-img">
                                        <img src="img/photo-gallery-of-westend-hospital/Molecular-PCR-Laboratory.jpg" alt="Molecular-PCR-Laboratory">
                                        <div class="overlay-content">
                                            <h4>Molecular PCR Unit</h4>
                                            <p>We offer PCR Services, Covid-19, Ebola, Viral Load, Dengue etc.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="photo-gallery-img">
                                       <img src="img/photo-gallery-of-westend-hospital/Intensive-Care-Unit.jpg" alt="Intensive-Care-Unit">
                                        <div class="overlay-content">
                                            <h4>Neonative Intensive Care</h4>
                                            <p>Well equipped intensive care unit for premature babies.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="photo-gallery-img">
                                         <img src="img/photo-gallery-of-westend-hospital/CT-Scan-Investigation.jpg" alt="CT-Scan-Investigation">
                                        <div class="overlay-content">
                                            <h4>CT Scan Unit</h4>
                                            <p>Our CT Services, includes Abdominopelvic, Chest, Brain etc.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="photo-gallery-img">
                                        <img src="img/photo-gallery-of-westend-hospital/Ward-Walkway.jpg" alt="Ward-Walkway">
                                        <div class="overlay-content">
                                            <h4>Inpatient Ward</h4>
                                            <p>Our ward comprises of private, semi-private, and VIP.</p>
                                        </div>
                                    </div>
                                    <div class="photo-gallery-img">
                                        <img src="img/photo-gallery-of-westend-hospital/Car-Park.jpg" alt="Car-Park">
                                        <div class="overlay-content">
                                            <h4>Spacious Car Park</h4>
                                            <p>Patients and visitors can use either the main or opposite car parking space.</p>
                                        </div>
                                    </div>
                                     <div class="photo-gallery-img">
                                        <img src="img/photo-gallery-of-westend-hospital/Reception.jpg" alt="Reception">
                                        <div class="overlay-content">
                                            <h4>Outpatient Reception</h4>
                                            <p>A conducive waiting area, equipped with modern furnishing for your convenience.</p>
                                        </div>
                                    </div>
                                    <div class="photo-gallery-img">
                                        <img src="img/photo-gallery-of-westend-hospital/Surgery-team.jpg" alt="Surgery-team">
                                        <div class="overlay-content">
                                            <h4>Surgery Unit</h4>
                                            <p>We are equipped with the best surgical team, guaranteeing successful surgery.</p>
                                        </div>
                                    </div>
                                    <div class="photo-gallery-img">
                                        <img src="img/photo-gallery-of-westend-hospital/labour-room.jpg" alt="labour-room">
                                        <div class="overlay-content">
                                            <h4>Labour Room</h4>
                                            <p>Westend Hospital offers true mother/baby couplet care with no separation.</p>
                                        </div>
                                    </div>
                                    <div class="photo-gallery-img">
                                        <img src="img/photo-gallery-of-westend-hospital/Stress-ECG.jpg" alt="Stress-ECG">
                                        <div class="overlay-content">
                                            <h4>Stress ECG</h4>
                                            <p>We check how your heart works during physical activity.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--staff strength-->
                            <div class="margin-bottom margin-top">
                                <h3 class="navy-blue">Staff Strength of Over 170</h3>
                                <p>In other to maintain complete control, and have enough hands-on desks when the workload increases unexpectedly, we have a staff strength of over 100 to tackle whatever pressure that may arise.  </p>

                                <p class="navy-blue"><b>Our staffs include:</b></p>

                                <div class="flex align-start splited-50% each">
                                    <ul class="square-list-type col-50" id="squareList">
                                                    <li>General Practice Medical Doctors (6)</li>
                                                    <li>Gynaecologist (2)</li>
                                                    <li>General Surgeon(2)</li>
                                                    <li>Paediatrics (3)</li>
                                                    <li>Cardiologist</li>
                                                    <li>Nephrologist</li>
                                                    <li>Dietician</li>
                                                    <li>Physiotherapist</li>
                                                    <li>Laboratory Scientists (5)</li>
                                                </ul>
                                    <ul class="square-list-type col-50" id="squareList">
                                                    <li>Orthopaedic  Surgeon</li>
                                                    <li>Urology (2)</li>
                                                    <li>Neurologist</li>
                                                    <li>Anaesthesiologist</li>
                                                    <li>ENT Surgeon(1)</li>
                                                    <li>Radiologist(7)</li>
                                                    <li>Pharmacologist</li>
                                                    <li>Pharmacists</li>
                                                </ul>
                                </div>
                            </div>
                            <!--Timeline Event -->
                            <div class="timeline-event">
                                <h3 class="navy-blue text-center">Our Timeline Event</h3>
                                <!--timeline-container,max-width 800px for large screens-->
                                <div class="timeline-container">
                                    <div
                                        class="timeline">
                                        <!--first content right-->
                                        <div class="timecontainer right">
                                            <div class="timelineboxcontent flex">
                                                <h4 class="blue-color absolute-left" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-sine">1</h4>
                                                <div class="flex-year-info" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="3000">
                                                    <div class="year-rounded">
                                                        <h5 class=" cicle-left text-white cycles bg-blue-color">1978</h5>
                                                    </div>
                                                    <div class="info-text-container flex-column">
                                                        <h5 class="blue-color">Westend Hospital was founded</h5>
                                                        <p>The founding of Westend Hospital by <b>Dr. J.E.O. Amadasun</b>. 
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--second content left-->
                                        <div class="timecontainer left">
                                            <div class="timelineboxcontent flex">
                                                <h4 class="orange-color absolute-right" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-sine">2</h4>

                                                <div class="flex-year-info" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="3000">
                                                    <div class="year-rounded float-right">
                                                        <h5 class="cicle-right text-white  text-align-right cycles bg-orange-color">1979</h5>
                                                    </div>

                                                    <div class="info-text-container flex-column">
                                                        <h5 class="orange-color">Expansion of the Hospital</h5>
                                                        <p>Expansion of the hospital to include a 2-Storey building. 
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--third content right-->
                                        <div class="timecontainer right">
                                            <div class="timelineboxcontent flex">
                                                <h4 class="pink-color absolute-left" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-sine">3</h4>
                                                <div class="flex-year-info" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="3000">
                                                    <div class="year-rounded ">
                                                        <h5 class=" cicle-left text-white cycles bg-pink-color">1986</h5>
                                                    </div>
                                                    <div class="info-text-container flex-column">
                                                        <h5 class="pink-color">Official Opening of the Hospital</h5>
                                                        <p>Westend Hospital was offcially opened by the Bendel State Governor, represented by Commissional of Health, <b>Prof. Agnes Uduebor</b>.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         
                                        <!--fourth content left-->
                                        <div class="timecontainer left">
                                            <div class="timelineboxcontent flex">
                                                <h4 class="purple-color absolute-right" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-sine">4</h4>

                                                <div class="flex-year-info" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="3000">
                                                    <div class="year-rounded float-right">
                                                        <h5 class="cicle-right text-white  text-align-right cycles bg-purple-color">1994</h5>
                                                    </div>

                                                    <div class="info-text-container flex-column">
                                                        <h5 class="purple-color">Acquired a CT Scan machine</h5>
                                                        <p>First private hospital to acquire a CT Scan machine in the defunct Bendel State.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--fifth content right-->
                                        <div class="timecontainer right">
                                            <div class="timelineboxcontent flex">
                                                <h4 class="green-color absolute-left" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-sine">5</h4>
                                                <div class="flex-year-info" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="3000">
                                                    <div class="year-rounded ">
                                                        <h5 class=" cicle-left text-white cycles bg-green-color">2004</h5>
                                                    </div>
                                                    <div class="info-text-container flex-column">
                                                        <h5 class="green-color">Received its first Award</h5>
                                                        <p>Most Valuable Employer Award was presented by The Nigeria Social Insurance Trust Fund.
                                                        </p>
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

            <script>
                AOS.init();
            </script>
        </body>
</html>
