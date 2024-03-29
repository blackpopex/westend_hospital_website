<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Privacy Policy | Westend Hospital</title>
    <link rel="icon" type="image/x-icon" href="img/logo/favicon.ico.png" />
    <link
      rel="stylesheet"
      href="path/to/font-awesome/css/font-awesome.min.css"
    />
    <meta
      name="description"
      content="Westend Hospital protects the privacy of its patients.
      Please read our privacy policy to see how we use and safeguard the data gathered from our websites."
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/demo.css" />
    <link rel="stylesheet" href="css/slideshow.css" />
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/slick-theme.css" />
    <link rel="stylesheet" href="css/style.css" />
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
                      <a href="contact-us" class="contact-us"
                        >Contact Us</a
                      >
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
    </div>

    <!---------------------------MAIN PAGE CONTENT---------------------------------------------->
    <main>
      <div class="section-background-image privacy-policy">
        <div class="container">
          <h2 class="subnavbar-color">Privacy Policy</h2>
          <ul class="inline-block-breadcrumb subnavbar-color">
            <li>
              <a href="index">Home</a>
            </li>
            <li>Privacy Policy</li>
          </ul>
        </div>
      </div>

      <section id="privacyPolicy">
        <div class="container">
          <!--Privacy policy-->
          <h3 class="navy-blue">Last updated: January 28, 2019</h3>
          <p>
            Thank you for visiting Westend Hospital Warri. We are committed to
            protecting the privacy of all visitors to our websites. This privacy
            statement has been written to help you understand what information
            we collect, how we use it, what choices you have, and other
            important information regarding the use of information collected
            through our websites and online services. Westend Hospital Warri and
            its affiliates are referred to in this privacy statement,
            collectively, as
            <i>“Westend Hospital Warri,” “we,” “us,” or “our.”</i>
          </p>
          <p>
            If you have any questions or comments about this privacy statement
            or the ways in which Westend Hospital Warri uses the information we
            collect online, please do not hesitate to contact us using the
            contact information provided at the bottom of this statement.
          </p>

          <div class="margin-top margin-bottom">
            <h4 class="navy-blue">Scope & Application</h4>
            <p>
              This privacy statement applies to information collected through
              this websites, mobile applications, and/or online or
              mobile-enabled technology, and/or digital tools that display or
              link to this privacy statement (collectively, our
              <i>“Online Platforms”</i>). This privacy statement also applies to
              information shared with us by our approved partners and other
              third-party sources. This privacy statement does not apply to (i)
              information collected from you either offline or through websites
              and other online services that do not display or link to this
              privacy statement, including third-party websites to which our
              online services may link, or (ii) information that would be
              considered “Protected Health Information under the
              <b>National Health Act (NHA) 2014</b>. Westend Hospital Warri use
              and disclosure of Protected Health Information will only be
              embarked upon with written consent from the patient.
            </p>
          </div>
          <div class="margin-bottom">
            <h4 class="navy-blue">Collection and Use of Information</h4>
            <p>
              When you view and/or interact with our Online Platforms, we may
              collect and combine information about you, how you engage with our
              Online Platforms, and the devices you use to view and/or interact
              with our Online Platforms for the legitimate purposes described
              below. This includes information you provide to us in connection
              with your use of the Online Platforms and information collected
              automatically when you view and/or interact with our Online
              Platforms.
            </p>
            <p>
              Some of the information we collect may be personally identifiable
              information, which includes, but is not limited to, information
              like your name, email address, postal address, or phone number. We
              do not collect information that would personally identify you
              unless you choose to provide it or as otherwise provided in this
              privacy statement. You can access and browse our Online Platforms
              at any time without providing any personally identifying
              information.
            </p>
          </div>
          <div class="margin-bottom">
            <h4 class="navy-blue">Information You Provide to Us</h4>
            <p>
              We collect the information you provide directly to us, such as
              when you create or modify your account or user preferences, sign
              up for a newsletter, contact us, respond to a survey, or otherwise
              communicate with us. This information may include your name, email
              address, phone number, postal address, insurance information,
              personal health information (however this does not rise to the
              level of “Protected Health Information” protected by NHA), survey
              responses, user content stored or entered into the forms found in
              our Online Platforms, and other information you choose to provide
              through use of our Online Platforms.
            </p>
            <p>
              The information you provide to us will be used to (i) set up your
              account (if applicable); (ii) if you elect to receive information
              from Westend Hospital Warri, provide you with such information;
              (iii) improve the Online Platforms; (iv) respond to your
              inquiries; (v) facilitate your comfort or the level care you
              receive in our facility and, or (vi) fulfill any other purpose for
              which you provided it.
            </p>
            <p>
              We will not use the information you provide for any purposes other
              than as described in this privacy statement or explained to you at
              the point at which the information was collected.
            </p>
          </div>
          <div class="margin-bottom">
            <h4 class="navy-blue">Information Collected Automatically</h4>
            <p>
              We may automatically collect additional information about your
              visit to our Online Platforms, including pages you visit, your
              geographic location based solely on your Internet Protocol (IP)
              address, promotions with which you interacted, and other
              behaviors. This information is collected for the purpose of
              improving your overall visit to our Online Platforms by providing
              interest-based content. For example, we may collect information
              about your geographic location and specific interest, based on
              topics you have browsed on our Online Platforms so that we can
              highlight a program or resource close to your location. The data
              may also be used to provide interest-based content for
              communications for which you have opted in.
            </p>
            <p>
              We may also gather certain information automatically, including
              but not limited to, IP addresses, browser type, Internet Service
              Provider (ISP), operating system, date/time stamp, mobile
              location, device type, and/or clickstream data. This information
              may be collected via cookies, web beacons, and/or similar
              technologies that help us serve you better, for example, by making
              your interactions with our Online Platforms faster or more
              personalized. The information we collect automatically through
              these technologies may be linked to other information we collect
              about you.
            </p>
          </div>
          <div class="margin-bottom">
            <h4 class="navy-blue">
              Information Collected by Third-Party Tools
            </h4>
            <p>
              We may also use certain third-party products or services
              (“Third-Party Tools”), such as Google Analytics, a web analysis
              service provided by Google, in order to better understand the use
              of our Online Platforms. These Third-Party Tools may collect
              information such as how often users visit our Online Platforms,
              what pages they visit, and the websites which referred you to our
              Online Platforms. Further, the Third-Party Tools may use the data
              collected to track and examine the use of the Online Platforms,
              prepare reports on its activities, and share them with other
              related services. The Third Party Tools, to the extent they serve
              advertising, may also use the data collected on the Online
              Platforms to contextualize and personalize ads on their own
              advertising networks. Each Third-Party Tool’s ability to use and
              share information it collects about your visits to the Online
              Platforms is restricted by its own privacy policies and terms of
              use. Additional information about the Third-Party Tools we use can
              be provided by contacting us as set forth below.
            </p>
          </div>

          <div>
            <h4 class="navy-blue">Your Control Over Information Consent</h4>
            <p>
              You have a variety of tools to manage cookies and similar
              technologies that collect information related to your use of the
              Online Platforms, including:
            </p>
            <ul class="square-list-type" id="squareList">
              <li>
                Web browser controls to block and delete cookies, or adjust your
                tracking preferences.
              </li>
            </ul>

            <p>
              For cookies and similar technologies used on our mobile
              applications for applicable targeted advertising activities,
              follow the steps provided by your mobile device platform provider
              (Apple, Android, or others) to opt-out of having your information
              collected and used by us and our digital marketing partners.
            </p>

            <p>
              <b class="sky-blue">Please note:</b> Disabling, removing, or
              blocking cookies may turn off some of the features of our Online
              Platforms that make your experience more efficient, and some
              Online Platforms may not function properly as a result. Further,
              if you opt-out of having your information collected and used by us
              and our digital marketing partners for interest-based advertising
              purposes, you will continue to receive ads, but such ads will not
              be tailored to your specific interests based on web viewing data
              collected from your device over time and across unaffiliated
              websites.
            </p>
          </div>

          <div class="margin-bottom">
            <h4 class="navy-blue">Sharing of Information</h4>
            <p>
              We may share the information described above as set forth in this
              privacy statement or as otherwise described at the time such
              information is collected from you. We will not sell, rent, or swap
              this information, nor will we authorize any of our service
              providers or business partners to use this information for their
              own commercial purposes without your permission.
            </p>
          </div>

          <div class="margin-bottom">
            <h4 class="navy-blue">Information Shared by Us</h4>
            <p>
              <b class="sky-blue">Service Providers:</b> In the course of doing
              business, we employ other companies and individuals to perform a
              variety of functions on our behalf. For example, we may provide
              information as necessary to companies that host our Online
              Platforms or send communications on our behalf. These service
              providers may have access to information about you if it is needed
              to perform their functions for us, but they are not authorized by
              us to use or disclose such information except as necessary to
              perform services on our behalf or to comply with legal
              requirements, and they are required to maintain the information in
              confidence.
            </p>
            <p>
              <b class="sky-blue">Legally Required:</b> We reserve the right to
              disclose the information if required to do so by law or by a
              regulatory authority, including those that regulate health care
              services in Nigeria. We may also disclose information as part of
              an investigation or enforcement action relating to improper or
              illegal conduct in connection with our Online Platforms or other
              products, including, without limitation, any situations that may
              potentially involve threats to the safety or privacy of any person
              or misuse of our Online Platforms.
            </p>
            <p>
              <b class="sky-blue">Aggregated and Non-Identified Data:</b> We may
              maintain and use aggregate data or other non-identified
              information (i.e., data that does not identify a specific
              individual), such as usage statistics, device data, online traffic
              patterns, and user feedback. In addition to using this information
              for the purposes discussed in this privacy statement, we may
              disclose such aggregated or non-identified data to third parties
              without restriction.
            </p>
            <p>
              <b class="sky-blue">Business Partners:</b>Westend Hospital Warri
              may securely share your information with our business partners,
              such as local advertisers who pay for banner ads on Westend
              Hospital Warri Online Platforms. Once your information has been
              shared with a business partner, it is no longer subject to the
              control of Westend Hospital Warri or subject to this privacy
              statement, however, Westend Hospital Warri requires its business
              partners to maintain appropriate data security.
            </p>
          </div>
          <div class="margin-bottom">
            <h4 class="navy-blue">Security</h4>
            <p>
              TThe security of your information is important to us. We take
              precautions to protect your information by implementing safeguards
              to protect the information we collect. But you should keep in mind
              that no website or Internet transmission is ever completely secure
              or error-free.
            </p>
            <p>
              <b class="scky-blue">Please note: </b>The safety and security of
              your information also depend on you. We urge you to take steps to
              keep your private information secure, such as choosing strong
              passwords and never sharing your password with anyone else. If you
              create or receive a password in connection with Online Platform
              access, please notify us promptly if you believe your password
              security has been breached, and remember to log off of the Online
              Platform before you leave your computer or mobile device.
            </p>

            <p>
              The Online Platforms may offer opportunities to communicate
              through email. Because normal email is not encrypted, the
              possibility exists that unauthorized individuals may intercept
              email messages. Westend Hospital Warri and affiliates are not
              responsible for the privacy and security of email messages except
              those stored in our system.
            </p>
          </div>
          <div class="margin-bottom">
            <h4 class="navy-blue">Third-Party Links</h4>
            <p>
              Occasionally, at our discretion, we may include or offer
              third-party products or services on or linked to our Online
              Platforms. These third-party websites have separate and
              independent privacy policies. We, therefore, have no
              responsibility or liability for the content and activities of
              these linked websites. Nonetheless, we seek to protect the
              integrity of our website and welcome any feedback about these
              websites. We also encourage the following disclaimer when links
              are provided: “You are being redirected to a website outside of
              Westend Hospital Warri. Westend Hospital Warri is not responsible
              for any aspect of the external website.”
            </p>
          </div>
          <div class="margin-bottom">
            <h4 class="navy-blue">Communication with Children</h4>
            <p>
              We do not knowingly collect or use any personally identifiable
              information from minors younger children on our Online Platforms.
              We do not knowingly allow children to communicate with us or use
              any of our Online Platforms. If you are a parent and become aware
              that your child has provided us with information, please contact
              us using one of the methods specified herein, and we will work
              with you to address this issue.
            </p>
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
            <img
              src="img/logo/_1511456132_462_General-Electric-mobile copy 2.png"
              alt="General Electric logo"
            /><img
              src="img/logo/Safari logo copy.png"
              alt="Safari Pharmacy logo"
            /><img src="img/logo/ddccopy.png" alt="DNA diagnostic Center" /><img
              src="img/logo/Fathers Heart copy.png"
              alt="Fathers Hearth Children Trust logo"
            /><img
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
                  <a href="#/">Transfer a patient</a>
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
              >&copy; <?php echo date("Y"); ?> Westend Hospital. All Right Reserved.
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
