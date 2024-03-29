<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Westend Hospital | Terms of use</title>
    <link rel="icon" type="image/x-icon" href="img/logo/favicon.ico.png" />
    <link
      rel="stylesheet"
      href="path/to/font-awesome/css/font-awesome.min.css"
    />
    <meta
      name="description"
      content="Read this user agreement carefully.
      Westend Hospital reserve the right to alter both the site's content and these conditions as our website develops.  "
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
      <div class="section-background-image terms-of-use">
        <div class="container">
          <h2 class="subnavbar-color">Terms of Use</h2>
          <ul class="inline-block-breadcrumb subnavbar-color">
            <li>
              <a href="index">Home</a>
            </li>
            <li>Terms of Use</li>
          </ul>
        </div>
      </div>

      <section id="TermsOfUse">
        <div class="container">
          <h3 class="navy-blue">Last updated: January 28, 2019</h3>
          <h4 class="navy-blue">Please read these terms of use carefully.</h4>
          <p>
            These Terms & Conditions of Use apply to our websites, online or
            mobile-enabled technology or digital tools that display or link to
            these terms. WESTEND HOSPITAL WARRI is referred to in these Terms &
            Conditions of Use as “we,” “us” or “our.”
          </p>
          <p class="navy-blue">
            THE ONLINE SERVICES ARE NOT INTENDED FOR USE IN THE EVENT OF A
            MEDICAL EMERGENCY.
          </p>
          <p>
            By accessing or using the Online Services, you agree that you have
            read, understand, and agree to be bound by these Terms & Conditions
            of Use, as amended from time to time. All amendments and updates to
            these Terms & Conditions of Use are effective immediately upon
            notice, which we may give by any means, including but not limited to
            posting notice of the revision on the Online Services homepage. If
            you do not wish to agree to these Terms & Conditions of Use, do not
            access or use any part of the Online Services.
          </p>
          <p>
            WESTEND HOSPITAL WARRI reserves the right to take whatever lawful
            actions it may deem appropriate in response to an actual or
            suspected violation of these Terms & Conditions of Use, including
            without limitation, suspending or terminating any account you have
            created on this Online Services.
          </p>

          <div class="margin-top margin-bottom">
            <h4 class="navy-blue">Intellectual Property</h4>
            <p>
              All trademarks, logos, designs, and slogans appearing on the
              Online Services, whether or not appearing in large print, italics,
              or with the trademark symbol, are owned by WESTEND HOSPITAL WARRI
              or their affiliate companies or service providers or are used
              under license. No right or license is granted, by implication or
              otherwise, to use any trademark, service mark, or logo displayed
              on the Online Services or any other intellectual property rights
              of WESTEND HOSPITAL WARRI or any third party.
            </p>
            <p>
              You may not distribute, modify, transmit, reuse, repost or use the
              content of the Online Services for public or commercial purposes,
              including the text, images, audio, or video, without the written
              permission of WESTEND HOSPITAL WARRI. You should assume that
              everything you see or read on the Online Services is copyrighted
              unless otherwise noted and may not be used, except as provided in
              the Terms & Conditions of Use or the text on the Online Services,
              without the written permission of WESTEND HOSPITAL WARRI, WESTEND
              HOSPITAL WARRI neither warrants nor represents that your use of
              materials displayed on the Online Services will not infringe
              rights of third parties not owned by, nor affiliated with, WESTEND
              HOSPITAL WARRI.
            </p>
          </div>
          <div class="margin-bottom">
            <h4 class="navy-blue">
              No Medical Advice, Disclaimer, No Warranty
            </h4>
            <p>
              The information that you obtain from the Online Services is
              provided for informational purposes only except otherwise
              instructed in cases of Tele Medicine. The Online Services are not
              intended to offer medical advice from WESTEND HOSPITAL WARRI. The
              Online Services may provide you with information or facilitate
              your communication with a health care provider, but are not a
              substitute for the professional judgment of a health care
              provider.
              <b
                >Call your health care provider if you think you have a medical
                emergency.</b
              >
              Always seek the advice of your physician or other qualified
              healthcare providers before starting any new treatment, or if you
              have any questions regarding symptoms or a medical condition.
            </p>
            <p>
              The online services and the information available through the
              online services are provided “as is” and “as available,” without
              any warranty or guarantee of any kind, either expressed or
              implied, including, but not limited to, the implied warranties of
              merchantability, fitness for a particular purpose, and
              non-infringement. Westend Hospital Warri, its affiliates, and
              service providers are neither responsible nor liable for any
              indirect, incidental, consequential, special, exemplary, punitive,
              or other damages arising out of or relating in any way to the
              online services, and/or content or information contained within
              online services. Westend Hospital Warri shall not be held liable
              under this agreement.
            </p>
          </div>
          <div class="margin-bottom">
            <h4 class="navy-blue">Privacy</h4>
            <p>
              WESTEND HOSPITAL WARRI’s use of your personal information and your
              responsibilities in connection with protecting your privacy are
              described in the WESTEND HOSPITAL WARRI Privacy Statement which is
              incorporated by reference into these Terms & Conditions of Use.
            </p>
          </div>
          <div class="margin-bottom">
            <h4 class="navy-blue">Physician Information</h4>
            <p>
              You may be able to access physician information from the Online
              Services. However, although WESTEND HOSPITAL WARRI has obtained
              the information provided on the Online Services concerning
              physicians (including specialty, credentials, and training) from
              sources believed to be reliable and accurate, WESTEND HOSPITAL
              WARRI can make no guarantee or warranty as to the accuracy,
              timeliness or completeness of that information.
            </p>
          </div>
          <div class="margin-bottom">
            <h4 class="navy-blue">Third-party links</h4>
            <p>
              Occasionally, at our discretion, we may include or offer
              third-party products or services on or linked to our Online
              Services. These third-party sites have separate and independent
              privacy policies. We, therefore, have no responsibility or
              liability for the content and activities of these linked sites.
              Nonetheless, we seek to protect the integrity of our site and
              welcome any feedback about these sites.
            </p>
            <p>
              By accessing this site, you agree to be bound by the terms and
              conditions of all third-party tools we use, including but not
              limited to YouTube’s Terms of Service, and subject to Google's
              Privacy Policy.
            </p>
          </div>
          <div class="margin-bottom">
            <h4 class="navy-blue">Updates to your devices</h4>
            <p>
              Please note that if you are using downloadable applications from
              WESTEND HOSPITAL WARRI, updates to your device’s systems or
              firmware may render your use of the applications incompatible.
              WESTEND HOSPITAL WARRI does not warrant that the Online Services
              will be compatible with any updates to, or prior versions of, your
              devices. WESTEND HOSPITAL WARRI may, but is not obligated to,
              provide you with updates to the Site or applications that improve
              compatibility with updated mobile devices.
            </p>
          </div>
          <div class="margin-bottom">
            <h4 class="navy-blue">Data Charges</h4>
            <p>
              To the extent that your use of the Online Services or any WESTEND
              HOSPITAL WARRI application requires, or permits utilization of,
              wireless, cellular data, or internet access, you are independently
              responsible for securing the necessary data access service. For
              example, concerning your mobile devices, the provider of your data
              plans may charge you data access fees in connection with your use
              of the Online Services and WESTEND HOSPITAL WARRI applications.
              You are solely responsible for all such charges payable to third
              parties.
            </p>
          </div>
          <div class="margin-bottom">
            <h4 class="navy-blue">Software and Downloads</h4>
            <p>
              If WESTEND HOSPITAL WARRI permits you to download or otherwise
              access such Online Services, the Online Services (including any
              data or images incorporated in or generated by the Online
              Services’ software) are licensed to you. You do not receive title
              to this software, and you may not distribute or use the software
              other than to use the applicable feature or service of the Online
              Services as offered by WESTEND HOSPITAL WARRI. You may not modify,
              adapt, reverse engineer, decompile, disassemble or otherwise
              attempt to discover the source code of such software. Except as
              expressly provided, you may not create any derivative works of the
              software or any services available on the Online Services. This
              license is revocable at any time without notice and with or
              without cause. You agree to destroy or return to WESTEND HOSPITAL
              WARRI all copies of the software upon revocation of your license
              to the software and/or termination of your access to the Online
              Services. The software is subject to all restrictions on use,
              disclaimers of warranties, and other provisions in these Terms &
              Conditions of Use. If the software is also subject to a separate
              end-user license agreement, the terms of such end-user license
              agreement shall control any conflict between those terms and these
              Terms & Conditions of Use.
            </p>
          </div>
          <div class="margin-bottom">
            <h4 class="navy-blue">Access and Interference</h4>
            <p>
              You agree that you will not (i) use any robot, spider, or other
              automatic devices, process, or means to access the Online
              Services, (ii) use any manual process to monitor or copy any of
              the material on this site or for any other unauthorized purpose
              without the prior written consent of WESTEND HOSPITAL WARRI, (iii)
              use any device, software or routine that interferes with the
              proper working of the Online Services, (iv) attempt to interfere
              with the proper working of the Online Services, (v) take any
              action that imposes an unreasonable or disproportionately large
              load on the WESTEND HOSPITAL WARRI’ infrastructure, or (vi)
              access, reload or “refresh” transactional pages, or make any other
              request to transactional servers, more than once during any three
              (3) second interval.
            </p>
            <p>
              You agree that you will not use the Online Services in connection
              with criminal or civil violations of applicable provincial, state,
              federal or international laws, regulations, or other government
              requirements, including theft or infringement of copyrights,
              trademarks, trade secrets, or other types of intellectual
              property; fraud; forgery, theft or misappropriation of funds,
              credit cards or personal information; and threats of physical harm
              or harassment. Sending spam or other duplicative or unsolicited
              messages is an unacceptable use of Online Services.
            </p>
            <p>
              You also agree that you will not use the Online Services: (i) to
              transmit materials of a threatening nature, including threats of
              death or physical harm, harassment, libel, or defamation, or (ii)
              for the distribution of offensive materials, including obscene,
              indecent and hateful materials.
            </p>
            <p>
              You agree that you will not use (or attempt to use) the Online
              Services to violate the security of a network, service, or other
              systems. Examples of prohibited activities include hacking,
              cracking into, monitoring, or using systems without authorization;
              scanning ports; conducting denial of service attacks; and
              distributing viruses or other harmful software.
            </p>
          </div>
          <div class="margin-bottom">
            <h4 class="navy-blue">Comments and Submissions</h4>
            <p>
              WESTEND HOSPITAL WARRI welcomes your comments. All comments,
              suggestions, or other information sent by you to WESTEND HOSPITAL
              WARRI or its advertisers or business partners (if any) in response
              to solicitations on the Online Services become WESTEND HOSPITAL
              WARRI’ property and you agree that all intellectual property
              rights therein are transferred to WESTEND HOSPITAL WARRI. For the
              avoidance of doubt, WESTEND HOSPITAL WARRI shall own any
              developments made by, or on behalf of, WESTEND HOSPITAL WARRI
              arising out of your comments, suggestions, or other submissions.
              To the extent WESTEND HOSPITAL WARRI does not own such materials,
              you grant and agree to grant WESTEND HOSPITAL WARRI a
              non-exclusive, royalty-free, perpetual, irrevocable license to
              utilize, create derivative works of, distribute and sublicense
              such materials for any purpose in connection with WESTEND HOSPITAL
              WARRI’ websites, products, and services. You have no expectation
              of any review, compensation, or consideration for any submission
              hereunder.
            </p>
          </div>
          <div class="margin-bottom">
            <h4 class="navy-blue">Indemnification</h4>
            <p>
              You agree to indemnify and hold harmless WESTEND HOSPITAL WARRI
              and its shareholders, partners, affiliates, directors, officers,
              subsidiaries, employees, agents, suppliers, third-party
              information providers, licensors, licensees, distributors,
              contractors, and others involved in the Online Services or the
              delivery of products, services or information over the Online
              Services, from and against all liabilities, expenses, damages and
              costs, including reasonable attorney’s fees, arising from any
              violation by you of these Terms & Conditions of Use or your use of
              any products, services or information obtained from the Online
              Services.
            </p>
          </div>
          <div class="margin-bottom">
            <h4 class="navy-blue">Applicable Law</h4>
            <p>
              These Terms & Conditions of Use shall be governed in all respects
              by and construed in accordance with the laws governing the Federal
              Republic of Nigeria without regard to its conflicts of law
              principles. You hereby consent to the exclusive jurisdiction of
              the state and federal courts located in Nigeria, with respect to
              any action arising in connection with the Online Services.
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
