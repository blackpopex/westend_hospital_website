<?php include 'text_alert_request_call_back.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>
      Multispecialist Hospital - Warri, Delta State | Westend Hospital
    </title>
    <link rel="icon" type="image/x-icon" href="./img/logo/favicon.ico.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <meta
      name="description"
      content="Dr. John E.O. Amadasun, Dr. Med, FA (ORL), FWACS, FMC (ORL), FICS, and his Swiss wife, Mrs. Gratia Amadasun, established Westend Hospital on January 4th, 1978.
With more than 170 staff committed to improving people's lives through the delivery of high-quality healthcare, we are one of the most reputable healthcare providers in Warri, Delta State. We offer a variety of services, such as PCR testing, Brain Evoked Response Auditory (BERA), gynecological care, pediatrics, computed tomography (CT) scans, and many more. "
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/demo.css" />
    <link rel="stylesheet" href="./css/slideshow.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/mobileslideshowstyle.css" />
    <link rel="stylesheet" href="./css/slick.css" />
    <link
      href="https://www.jqueryscript.net/css/jquerysctipttop.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
    <script src="http://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="./js/multi-animated-counter.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://kit.fontawesome.com/12d9de5a0c.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    

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
      <header id="myHeaderMenu">
        <!-----------TOP NAVIGATION------------->

        <div class="main-header-wrapper">
          <div class="topNav">
            <div class="container flex">
              <a href="index" id="wehLogo">
                <img
                  src="img/logo/Westend logo blue.png"
                  alt="Westend Hospital Logo"
                />
              </a>
              <nav class="flex">
                <div
                  id="navToggler"
                  class="hamburgerMenu"
                  onclick="myFunction(this)"
                >
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
                            href="medical-test-and-services/A-Z-of-all-medical-test"
                            >A-Z of all Medical Test</a
                          >
                        </li>
                        <li>
                          <a
                            href="medical-test-and-services/A-Z-of-all-medical-services"
                            >A-Z of all Medical Services</a
                          >
                        </li>
                        <li>
                          <a
                            href="medical-test-and-services/department-and-services"
                            >Department & Services</a
                          >
                        </li>
                        <li>
                          <a
                            href="medical-test-and-services/patient-education"
                            >Patient Education</a
                          >
                        </li>
                      </ul>
                    </li>
                    <!--Patient and visitors-->
                    <li class="dropdown">
                      <a href="#/" class="dropbtn">Patient & Visitors</a>
                      <ul class="dropdown-content" id="menuDropdown">
                        <li>
                          <a href="patient-and-visitors/vistors"
                            >Visitors</a
                          >
                        </li>
                        <li>
                          <a href="patient-and-visitors/your-hospital-stay"
                            >Your Hospital Stay</a
                          >
                        </li>
                        <li>
                          <a
                            href="patient-and-visitors/billing-and-financial-asistance"
                            >Billing & Financial Asistance</a
                          >
                        </li>
                        <li>
                          <a href="patient-and-visitors/accepted-insurance"
                            >Accepted Insurance</a
                          >
                        </li>
                        <li>
                          <a href="patient-and-visitors/patient-rights"
                            >Patient Rights</a
                          >
                        </li>
                        <li>
                          <a href="patient-and-visitors/medical-records"
                            >Medical Records</a
                          >
                        </li>
                      </ul>
                    </li>
                    <!--Why choose us-->
                    <li class="dropdown">
                      <a href="#/" class="dropbtn">Why Choose Us</a>
                      <ul class="dropdown-content" id="menuDropdown">
                        <li>
                          <a
                            href="why-choose-us/our-mission-vision-and-values"
                            >Our Mission, Vision & Values</a
                          >
                        </li>
                        <li>
                          <a href="why-choose-us/quality-patient-care"
                            >Quality Patient Care</a
                          >
                        </li>
                        <li>
                          <a
                            href="why-choose-us/patient-stories-testimonies"
                            >Patient's Stories/Testimonies</a
                          >
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
                      <a href="request-an-appointment"
                        >Request Appointment</a
                      >
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
                      <input
                        type="text"
                        placeholder="Looking for something?"
                        name="Search"
                        onkeyup="showSearchBox(this.value)"
                        id="searchQuery"
                      />
                      <button
                        type="submit"
                        id="searchBtn"
                        class="overlaySearch"
                      >
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
      <!--Slideshows-->
      <section id="slideshow_container">
        <div class="rt-container">
          <div class="col-rt-12">
            <!-- Slider -->
            <div id="slider">
              <div class="slides">
                <div class="slider">
                  <div class="content">
                    <div class="content-txt">
                      <h2>Focusing on Quality</h2>
                      <p>
                        Cross section photo of Director and Staff, representing
                        our virtue & Quality.
                      </p>
                    </div>
                  </div>
                  <div class="image">
                    <img
                      src="img/slideshow/slideshow-1.jpg"
                      id="slideshow_image_1"
                    />
                  </div>
                </div>
                <div class="slider">
                  <div class="content">
                    <div class="content-txt">
                      <h2 id="styledText">Our Doctors, Our Pride!</h2>
                      <p>
                        We only work with the qualified, giving you guaranteed
                        healthcare.
                      </p>
                    </div>
                  </div>
                  <div class="image">
                    <img
                      src="img/slideshow/slideshow-2.jpg"
                      id="slideshow_image_2"
                    />
                  </div>
                </div>
                <div class="slider">
                  <div class="content">
                    <div class="content-txt">
                      <h2>Geriatric Care</h2>
                      <p>
                        We offer creative aging for the old by caring for them
                        at delicate age.
                      </p>
                    </div>
                  </div>
                  <div class="image">
                    <img
                      src="img/slideshow/slideshow-3.jpg"
                      id="slideshow_image_3"
                    />
                  </div>
                </div>
                <div class="slider">
                  <div class="content">
                    <div class="content-txt">
                      <h2>Paediatrics</h2>
                      <p>A healthy home, a healthy child.</p>
                    </div>
                  </div>
                  <div class="image">
                    <img
                      src="img/slideshow/slideshow-4.jpg"
                      id="slideshow_image_4"
                    />
                  </div>
                </div>
              </div>
              <div class="switch">
                <ul>
                  <li>
                    <div class="on"></div>
                  </li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!---------------------------MAIN PAGE CONTENT---------------------------------------------->

    <!--Welcome to Westend Hospital and Image section -->
    <section id="faithful_work">
      <div class="container flex faithful-work">
        <!--Welcome to Westend Hospital container -->
        <div class="text-container col-60">
          <div class="brief-history">
            <h2 class="navy-blue">Welcome</h2>
            <h3 class="sky-blue">to Westend Hospital</h3>

            <div>
              <p>
                Westend Hospital Limited was founded on January 4th, 1978 by Dr.
                John E.O Amadasun, Dr. Med, FA (ORL), FWACS, FMC (ORL), FICS,
                MNES, Life-time Member, Nigerian Medical Association (NMA), and
                his Swiss wife- Mrs. Gratia Amadasun.
              </p>
              <p>
                The day before this memorable day, he had resigned from the
                government’s employ. A major traffic accident with several
                people critically wounded and dying who could have been saved in
                a well equipped hospital, forced his decision.
              </p>
              <p>
                Heading into private practice, his goal was to start and run an
                effectual, functioning and caring hospital for the inhabitants
                of the young industrial city and its environs.
              </p>

              <div class="more-text-box">
                <a href="our-history" class="btn bg-navy-blue-square-Btn"
                  >Read More</a
                >
              </div>
            </div>
          </div>
        </div>
        <!--Image container -->
        <div class="i-want-to col-40">
          <div class="i-want-to-text-link">
            <h4 class="navy-blue">I Want to</h4>

            <div class="i-want-to-box-link-wrapper">
              <div class="box-link">
                <a
                  href="find-a-doctor"
                  class="link-box text-white bg-navy-blue"
                >
                  <span> Find a Doctor</span>
                </a>
                <a
                  href="patient-and-visitors/online-pay"
                  class="link-box text-white bg-sky-blue i-want-to-pay-bill"
                >
                  <span>Pay a Bill</span>
                </a>
                <div>
                  <a
                    href="request-an-appointment"
                    class="link-box navy-blue bg-grey"
                  >
                    <span>Become a Patient</span>
                  </a>
                  <a
                    href="refer-a-patient"
                    class="link-box navy-blue bg-light-blue"
                  >
                    <span>Refer a Patient</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--42 Years of Faithful Work Ends, Our HMO/Insurance, Avantages and Clinic Days-->

    <!--Our Services-->
    <section id="Our-services">
      <!--background-grey-->
      <div class="col-100 services-wrapper">
        <div class="container">
          <div class="services-specific-width">
            <h2 class="navy-blue text-center">Our Services</h2>
            <p class="text-center text-black">
              We combine the convenience of a full range of hospital and
              wellness services. All of this is delivered in our ultra modern
              health care facility in the region designed for the comfort and
              convenience of our patients.
            </p>
          </div>
        </div>
      </div>
      <!--background-grey ends-->
      <!--background-white-->
      <div class="col-100">
        <div class="what-we-do-slideshow-container">
          <div class="what-we-do col-30">
            <div class="container">
              <div class="what-we-do-content-wrapper">
                <h3 class="text-center text-white">What We Do</h3>
                <h4 class="text-center">At A Glance</h4>
                <div class="pragraph-text">
                  <p class="text-white">
                    We are one of the most respected providers of healthcare
                    services in Delta State with over 170 employees dedicated to
                    improving and transforming people’s lives through efficient
                    delivery of healthcare. Our services include CT Scan, PCR
                    Testing, BERA, Gynaecological Care, Pediatrics, and many
                    more. Our quality care is the powerful bond between us and
                    our patients.
                  </p>
                </div>
                <div class="services-a-z-btn-container">
                  <a
                    href="medical-test-and-services/A-Z-of-all-medical-services"
                    class="btn square-btn-bg-white"
                    >A - Z of All Our Services</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="service-boxes col-70">
            <div class="container">
              <div class="service-box-wrapper slick-slider-box">
                <!--first slider box-->

                <div class="absolute-box">
                  <div class="box-container flex">
                    <div class="box width-50">
                      <div class="service-box-icon flex">
                        <i class="fas fa-biohazard sky-blue"></i>
                        <div>
                          <h6 class="text-white">Radiological</h6>
                          <p class="text-white">
                            We offer CT Scan, X-rays, 4D Ultrasound Scan etc
                            services.
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="box width-50">
                      <div class="service-box-icon flex">
                        <i class="fas fa-microscope sky-blue"></i>
                        <div>
                          <h6 class="text-white">Laboratory</h6>
                          <p class="text-white">
                            DNA Paternity, Blood culture, PSA, Full blood Count,
                            etc.
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="box width-50">
                      <div class="service-box-icon flex">
                        <i class="fas fa-light fa-virus-covid sky-blue"></i>
                        <div>
                          <h6 class="text-white">Molecular PCR</h6>
                          <p class="text-white">
                            Covid-19, HIV Viral Load, VDRL (ELISA), Lassa Fever,
                            Ebola etc.
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="box width-50">
                      <div class="service-box-icon flex">
                        <iconify-icon
                          icon="healthicons:kidneys"
                          class="sky-blue kidneys"
                        ></iconify-icon>
                        <div>
                          <h6 class="text-white">Dialysis</h6>
                          <p class="text-white">
                            We aim to support, guide and look after your
                            kidneys.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!--second slider box -->

                <div class="absolute-box">
                  <div class="box-container flex">
                    <div class="box width-50">
                      <div class="service-box-icon flex">
                        <i class="fas fa-light fa-truck-medical sky-blue"></i>
                        <div>
                          <h6 class="text-white">Ambulance</h6>
                          <p class="text-white">
                            Treatment for illness and transport to definitive
                            care.
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="box width-50">
                      <div class="service-box-icon flex">
                        <i class="fas fa-heartbeat sky-blue"></i>
                        <div>
                          <h6 class="text-white">Cardiology</h6>
                          <p class="text-white">
                            Caring for your heart using the best techniques.
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="box width-50">
                      <div class="service-box-icon flex">
                        <iconify-icon
                          icon="lucide:ear"
                          class="fas sky-blue"
                        ></iconify-icon>
                        <div>
                          <h6 class="text-white">Ear, Nose & Throat</h6>
                          <p class="text-white">
                            We treat loss of hearing, infections of the ears,
                            etc
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="box width-50">
                      <div class="service-box-icon flex">
                        <i class="fas fa-solid fa-pills sky-blue"></i>
                        <div>
                          <h6 class="text-white">Pharmaceutical</h6>
                          <p class="text-white">
                            Direct patient & collaborative care, Immunizations.
                            etc.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!--Third slider box -->
                <div class="absolute-box">
                  <div class="box-container flex">
                    <div class="box width-50">
                      <div class="service-box-icon flex">
                        <iconify-icon
                          icon="medical-icon:i-surgery"
                          class="fas sky-blue"
                        ></iconify-icon>
                        <div>
                          <h6 class="text-white">Surgery</h6>
                          <p class="text-white">
                            We provide secured surgery using state-of-art
                            technology.
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="box width-50">
                      <div class="service-box-icon flex">
                        <iconify-icon
                          icon="game-icons:brain"
                          class="fas sky-blue"
                        ></iconify-icon>
                        <div>
                          <h6 class="text-white">Encephalogram</h6>
                          <p class="text-white">
                            We check the brain for seizures, coma, tumor, etc.
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="box width-50">
                      <div class="service-box-icon flex">
                        <iconify-icon
                          icon="healthicons:nurse"
                          class="fas sky-blue"
                        ></iconify-icon>
                        <div>
                          <h6 class="text-white">Nursing</h6>
                          <p class="text-white">
                            We provide both inpatient and outpatient nursing
                            care.
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="box width-50">
                      <div class="service-box-icon flex">
                        <iconify-icon
                          icon="medical-icon:i-outpatient"
                          class="fas sky-blue"
                        ></iconify-icon>
                        <div>
                          <h6 class="text-white">Outpatient</h6>
                          <p class="text-white">
                            We offer outpatient care such as treatments and
                            testing.
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
      </div>
    </section>
    <!--Our Services ends-->

    <!--Hmo and Clinic Days-->
    <section id="Hmo-clinic-days">
      <div class="container">
        <div class="hmo-clinic-days-wrapper">
          <div class="flex">
            <div class="col-50">
              <!--Hmo & insurance-->
              <div class="hmo-container">
                <div class="fixed-container-width">
                  <h3 class="navy-blue text-right">
                    Supported HMO & Insurance
                  </h3>
                </div>
                <div>
                  <p class="black-text text-right">
                    Westend accepts most health insurance plans, including
                    RedCare, Hygeia, Avon, SHT, Medexia and many more.
                  </p>
                  <div class="read-more">
                    <a
                      href="patient-and-visitors/accepted-insurance"
                      class="btn bg-navy-blue-square-Btn"
                      >Read More</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="border-left"></div>
            <div class="col-50">
              <!--Clinic Days-->
              <div class="clinic-days">
                <h3 class="navy-blue text-left">Clinic Days</h3>
                <table>
                  <tr>
                    <th class="tiny-font-weight">Gynaecology</th>
                    <td>Monday 9:00am - 5:00pm</td>
                  </tr>
                  <tr>
                    <th class="tiny-font-weight">Ante-Natal</th>
                    <td>Tuesday & Thursday 9 - 5:00pm</td>
                  </tr>
                  <tr>
                    <th class="tiny-font-weight">Immunization</th>
                    <td>Wednesday 9:00am - 2:00pm</td>
                  </tr>
                  <tr>
                    <th class="tiny-font-weight">Echocardiography</th>
                    <td>Friday 9:00am - 2:00pm</td>
                  </tr>
                  <tr>
                    <th class="tiny-font-weight">Ultrasound Scan</th>
                    <td>Saturday 11:00am - 2:00pm</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Emergency ?-->
    <section id="emergency">
      <div class="bg-img-emergency">
        <div class="transparent-bg-white col-50">
          <h2>
            <span class="navy-blue bolder-text">Emergency ?</span>
          </h2>
          <h3 class="black-text sky-blue">Contact Us</h3>
          <div class="paragraph-contact-info">
            <p>
              Providing emergency services is our specialty; hence our emergency
              channels are open 24/7. Don't delay, every minute counts.
            </p>
            <div class="flex contact-info">
              <i class="fas fa-phone-alt"></i>
              <div>
                <p>Call us now</p>
                <p class="subnav-color">+234 (0) 905 376 4762</p>
              </div>
            </div>
            <div class="flex contact-info">
              <i class="fa fa-envelope"></i>
              <div>
                <p>Email us</p>
                <p class="subnav-color">
                  clientrelations@thewestendhospital.com
                </p>
              </div>
            </div>
            <div class="flex contact-info">
              <i class="fa fa-home"></i>
              <div>
                <p>Visit us at</p>
                <p class="subnav-color">
                  Westend hospital road, Off airport road, D.D.P.A. Effurun
                </p>
                <p class="subnav-color get-direction">
                  <a
                    target="_blank"
                    href="https://www.google.com/maps/dir//Westend+Hospital,+Westend+Road,+Warri/@5.5460997,5.7260374,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x1041ad6fdb19da31:0xe03820e6e47d8767!2m2!1d5.7610569!2d5.5461007"
                    >Get Driving Direction</a
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Emergency ends-->

    <!--Why Westend Hospital -->
    <section id="caringSince1978">
      <div class="bg-grey col-100">
        <div class="container">
          <div class="caring-text-box advert-container text-center">
            <p class="navy-blue">
              Over 2 decades, we have built long-standing relationship based on
              trust, by delivering quality healthcare services using
              state-of-art technology.
            </p>
            <h2 class="grey-text-opacity-50 caring grey-text" id="counters_3">
              <span class=""> Caring Since</span>
              <span
                class="counter"
                data-targetnum="1978"
                data-easing="linear"
                data-speed="15000"
              ></span>
            </h2>
          </div>

          <div class="icon-statistics-wrapper">
            <div class="statistics-icon-container flex">
              <!--Statistics icons-->
              <div class="col-25">
                <div class="flex-column text-center bg-white">
                  <i
                    class="fa-solid fa-screwdriver-wrench navy-blue ft-2em fa"
                  ></i>
                  <h4 class="navy-blue ft-1 mb">100+</h4>
                  <h3 class="text-black ft-1">Professional Staff</h3>
                </div>
              </div>

              <div class="col-25">
                <div class="flex-column text-center bg-white">
                  <i class="fa-solid fa-hospital-user fa navy-blue"></i>
                  <h4 class="navy-blue mb">50+</h4>
                  <h3 class="text-black ft-1">Huge HMO Support</h3>
                </div>
              </div>

              <div class="col-25">
                <div class="flex-column text-center bg-white">
                  <i class="fa fa-thin fa-users ft-2em navy-blue"></i>
                  <h4 class="navy-blue ft-1 mb">5000+</h4>
                  <h3 class="text-black ft-1">Happy Patients</h3>
                </div>
              </div>

              <div class="col-25">
                <div class="flex-column text-center bg-white">
                  <i
                    class="fa-sharp fa-solid fa-person-dots-from-line ft-2em navy-blue fa"
                  ></i>
                  <h4 class="navy-blue ft-1 mb">2000+</h4>
                  <h3 class="text-black ft-1">Successful Surgery</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-white col-100">
        <div class="container">
          <div class="flex why-choose-us-container">
            <div class="why-choose-us-left col-60">
              <h2 class="navy-blue bolder-text">Why Choose</h2>
              <h3 class="sky-blue">Us ?</h3>
              <div class="paragraph-links">
                <p>
                  We are one of Nigeria's top hospitals for the treatment of
                  ear, nose, and throat conditions and have many years of
                  experience in this area. Our facility is well equipped with
                  the most modern tools to offer the greatest service and
                  attention. Why choose Westend Hospital for your health care
                  need ?
                </p>

                <div class="flex equal-flex-division">
                  <ul class="col-50 flex-column">
                    <li>
                      <a href="why-choose-us/our-mission-vision-and-values"
                        >Mission, vision & Values</a
                      >
                    </li>
                    <li>
                      <a href="why-choose-us/quality-patient-care"
                        >Patient Care</a
                      >
                    </li>
                    <li>
                      <a href="why-choose-us/patient-stories-testimonies"
                        >Patient’s Testimonies</a
                      >
                    </li>
                  </ul>
                  <ul class="col-50 flex-column">
                    <li>
                      <a href="our-history">Our History</a>
                    </li>
                    <li>
                      <a href="why-choose-us/our-team">Our Team</a>
                    </li>
                    <li>
                      <a href="our-rating">Google Ratings</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="photo-gallery-activities col-40">
              <div class="flex">
                <div class="img-50-staff1">
                  <img
                    src="img/other photos/index-page-img/viewing-microscope.jpg"
                    alt="Staff Viewing Microscope"
                  />
                </div>

                <div class="img-50-staff1 img-column">
                  <img
                    src="img/other photos/index-page-img/surgery-2.jpg"
                    alt="surgery"
                  />
                  <img
                    src="img/other photos/index-page-img/molecular-pcr.jpg"
                    alt="Staff performing PCR test"
                  />
                </div>
                <div class="img-50-staff1" style="margin-left: 0.25em">
                  <img
                    src="img/other photos/index-page-img/performing-CT-investigation.jpg"
                    alt="Staff performing-CT-investigation"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Why Westend Hospital ends -->

    <!--Request Call back-->
    <section id="RequestCallBack">
      <div class="request-call-back-bg-img">
        <div class="container">
          <h3 class="white-text text-center bolder-text">
            Request a Call Back
          </h3>
          <p class="white-text text-center specific-width">
            Need a callback? Fill out the below form with your details; our
            patient care team will get back to you shortly.
          </p>
          <!-----------------------REQUEST A CALL BACK (BACKEND) -------------------------------->
          <form action="" method="post" class="call-back-form"
            autocomplete="off"
          >
            <input
              type="text"
              name="firstName"
              id="firstName"
              placeholder="First Name" 
            />
            
          
            <input
              type="text"
              name="lastName"
              id="lastName"
              placeholder="Last Name" 
            />  
  
            <input
              type="tel"
              name="phoneNumber"
              id="phoneNumber"
              placeholder="Phone Number" 
            />
   
            <button
              type="submit"
              class="square-btn-white request-call-btn"
              name="request_callBack"
            >
              Send
            </button>
          </form>
          <p class="navy-blue"><?php echo $result; ?></p>
          <p class="navy-blue"><?php echo $resultErr; ?></p>
        </div>
      </div>
    </section>
    <!--Request Call back end-->

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
            <img
              src="img/logo/_1511456132_462_General-Electric-mobile copy 2.png"
              alt="General Electric logo"
            />
            <img
              src="img/logo/Safari logo copy.png"
              alt="Safari Pharmacy logo"
            />
            <img src="img/logo/ddccopy.png" alt="DNA diagnostic Center" />
            <img
              src="img/logo/Fathers Heart copy.png"
              alt="Fathers Hearth Children Trust logo"
            />
            <img
              src="img/logo/Tymed CT Scan copy.png"
              alt="TYMED CT Scan Center logo"
            />
          </div>
        </div>
      </div>

      <section id="main-footer">
        <div class="container">
          <!--row 1 About, For Health Professionals, Billing and Insurance & Ways to help-->
          <!--BACK TO TOP-->
          <button
            class="scrollTopBtn flex-column"
            id="myTopBTN"
            onclick="topFunction()"
          >
            <i class="fa fa-angle-up"></i>
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
                  <a href="#">Transfer a patient</a>
                </li>
                <li>
                  <a href="refer-a-patient">Refer a patient</a>
                </li>
                <li>
                  <a
                    href="medical-test-and-services/patient-support-services/nursing"
                    >For nurses</a
                  >
                </li>
                <li>
                  <a href="#/">For physician</a>
                </li>
                <li>
                  <a href="request-an-appointment"
                    >Enquiries & appointment</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <div class="billing-insurrance dropdown">
                <h4 class="dropbtn">Billing and Insurance</h4>
                <ul class="dropdown-content footer-menu" id="menuDropdown">
                  <li>
                    <a href="patient-and-visitors/accepted-insurance"
                      >Insurance Information</a
                    >
                  </li>
                  <li>
                    <a href="patient-and-visitors/online-pay"
                      >Pay a bill</a
                    >
                  </li>
                </ul>
              </div>
              <div class="ways-to-help footer-header">
                <h4>Ways to Help</h4>
                <p>
                  We supports Father's Heart Children's Trust, see how you can
                  make the lives of Orphans in Delta State better.
                </p>

                <a
                  href="make-a-donation"
                  class="make-donation btn rounded-white-btn"
                  >Make a Donation</a
                >
              </div>
            </div>
          </div>
          <div class="social-img flex">
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
              <img
                src="img/logo/Westend logo white.png"
                alt="Westend Hospital white logo"
                class="westendbluelogo"
                id="myImg"
              />
            </div>
          </div>

          <div class="copyright">
            <small class="coy"
              >&copy;
              <?php echo date("Y"); ?>
              Westend Hospital. All Right Reserved.
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
    <script src="js/slick.min.js" type="text/javascript"></script>
    <script src="js/slideshow.js"></script>
    <script src="js/clearinputfield.js"></script>
    <script src="js/submitCallRequest.js"></script>
    <script>
      // must be an array, could have only one element
      let visibilityIds = [
        "#counters_1",
        "#counters_2",
        "#counters_3",
        "#counters_4",
      ];
      // default counter class
      let counterClass = ".counter";
      // default animation speed
      let defaultSpeed = 6000;

      // slick slider control for service boxes
      $(".slick-slider-box").slick({
        dots: true,
        infinite: true,
        speed: 2000,
        slidesToShow: 1,
        centerMode: true,
        autoplay: true,
        autoplaySpeed: 6000,
        prevArrow: false,
        nextArrow: false,
        pauseOnHover: false,
        variableWidth: true,
      });
      // slideshow for mobile phones on advert section
      $(document).ready(function () {
        $(".slickAdvert").slideshowPlugin({
          effect: "sliding",
          autoplay: "true",
          delay: 8000,
          slideSpeed: 1000,
          ratio: "keep",
        });
      });
    </script>
    
  </body>
</html>
