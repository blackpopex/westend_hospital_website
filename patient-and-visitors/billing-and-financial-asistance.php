<!DOCTYPE html>
<html lang="en">

    <head>
        <title>
            Billing and finance department | Westend Hospital
        </title>
        <link rel="icon" type="image/x-icon" href="./img/logo/favicon.ico.png" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
        <meta name="description"
            content="Are you having a problem understanding your bill? At Westend hospital, we help our patient understand their bill, show how billing works, offer numerous channels including an online payment gateway, and treat the uninsured with dignity and respect despite the financial burdens they may face. " />
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
            <div class="section-background-image billing-and-finance">
                <div class="container">
                    <h2 class="subnavbar-color">Billing and Financial Assistance</h2>
                    <ul class="inline-block-breadcrumb subnavbar-color">
                        <li>
                            <a href="../index">Home</a>
                        </li>
                        <li>Billing and finance</li>
                    </ul>
                </div>
            </div>

            <section id="billing-and-fiance">
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

                            <!--Billing and finance-->
                            <div>

                                <p>Thank you for choosing Westend Hospital for your healthcare services and needs. We
                                    are here to help you because we know that healthcare services billing can be
                                    confusing and stressful.</p>
                                <p>This page contains information that is designed to help you comprehend the
                                    fundamentals of your bills, answer questions you may have, and provide you with
                                    information that will help you with issues surrounding your bill.
                                </p>
                            </div>
                            <!-- Billing topics-->
                            <div class="billing-topics-container  margin-top">
                                <h3 class="navy-blue">Billing Topics</h3>
                                <!--Accordions-->
                                <div class="accordion-wrapper">
                                    <!--understand your bills-->
                                    <h4 class="accordion navy-blue">Understanding Your Bill</h4>
                                    <div class="accordion-content" id="menuDropdown">
                                        <div class="margin-bottom">
                                            <p>We understand billing process can be stressful and going through a health
                                                situation can be difficult hence we have made the billing process as
                                                stress-free as possible. We don’t want your bill to cause additional
                                                worries, so we have multiple guidelines to help you through the billing
                                                process.
                                            </p>
                                            <p>At Westend Hospital our primary goal is restoring patients’ health and we
                                                want our patients' primary focus to be on getting better at the quickest
                                                time possible.</p>
                                            <p>We understand healthcare may be expensive and patient concern is about
                                                managing the cost of their healthcare, hence we have provided detailed
                                                information to help patients comprehend healthcare costs.</p>
                                            <p>The medical care billing process is uniquely tailored to its patients –
                                                some are fortunate enough to have insurance while others do not.</p>
                                        </div>

                                        <div class="margin-bottom">
                                            <div>
                                                <h5>Insured patient</h5>
                                                <p>For patients under insurance coverage, we will bill your insurance
                                                    company directly for services covered by the insurance. Please note
                                                    that health insurance coverage differs, so some services may not be
                                                    covered. If you have questions about your health insurance coverage,
                                                    please call your insurance company before receiving care at Westend
                                                    Hospital so you fully understand how your insurance package works.
                                                </p>
                                            </div>
                                            <div>
                                                <h5>Uninsured patient</h5>
                                                <p>For patients not having any insurance package or third-party
                                                    coverage, you will be automatically discounted equal to the
                                                    discounts offered to insurance companies. However, discount varies
                                                    with type of services rendered.</p>
                                            </div>
                                        </div>
                                        <div class="margin-bottom">
                                            <div>
                                                <h5>Billing basics</h5>
                                                <p>Below are the types of hospital bills:</p>
                                                <ul class="square-list-type margin-bottom" id="squareList">
                                                    <li><b class="navy-blue">Summary Bill</b> -This list out the total
                                                        charges for your hospital visit and categorize them into service
                                                        categories. </li>
                                                    <li><b class="navy-blue"> Detailed Bill </b> -In this type, the bill
                                                        lists details on the services you were provided, including dates
                                                        and charges for each service. </li>

                                                </ul>
                                                <p>At Westend Hospital, patients have a right to receive this bill upon
                                                    request, also this bill is often time presented to uninsured
                                                    patients prior to discharge.</p>
                                                <p>In addition to your hospital bill, you may also receive additional
                                                    bills from physicians, special investigations procedures (such as CT
                                                    Scan Services), and specialists (such as urologists, cardiologists,
                                                    anesthesiologists, neurologists, surgeons, and other specialists)
                                                    you saw while in the hospital; often time, these physicians and
                                                    specialist may not be hospital employees.</p>
                                            </div>

                                            <div>
                                                <h5>Questions About Your Bill? </h5>
                                                <p>If you have questions or difficulty understanding a bill you received
                                                    from us, you may call the billing unit at +234 (0) 807 420 3056 or
                                                    +234 (0) 807 734 4853, to help you better understand the costs
                                                    associated with your hospital care.</p>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="light-grey-border"></div>
                                    <!--How Billing Works-->
                                    <h4 class="accordion navy-blue">How Billing Works</h4>
                                    <div class="accordion-content" id="menuDropdown">
                                        <div class="margin-bottom">
                                            <div>
                                                <h5>Inpatient Bill</h5>
                                                <p>For one reason or the other, a patient may be admitted to the
                                                    hospital (inpatients), and as such, they will receive separate
                                                    invoices for services rendered in the course of their stay. </p>
                                            </div>
                                            <div>
                                                <h5>Outpatient Bill</h5>
                                                <p>Patients seen in a clinic or outpatient setting may receive separate
                                                    invoices for some services. Your outpatient bill will include
                                                    charges for medications, consultations, and any tests or procedures.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="margin-bottom">
                                            <p>The hospital bills for in and outpatient include, but are not limited to,
                                                the following services:</p>
                                            <ul class="square-list-type" id="squareList">
                                                <li>Charges for your room (inpatient)</li>
                                                <li>Medical Supplies (inpatient)</li>
                                                <li>Food (inpatient)</li>
                                                <li>Laboratory</li>
                                                <li>Operating room services</li>
                                                <li>Pharmacy</li>
                                                <li>Radiology and other testing services</li>
                                                <li>Nursing Care</li>
                                                <li>Other services provided by the hospital</li>
                                            </ul>
                                        </div>
                                        <div class="margin-bottom">
                                            <h4>Physician Services Bills </h4>
                                            <p>Bills for physician services will include but are not limited to:</p>
                                            <ul class="square-list-type" id="squareList">
                                                <li>Examinations</li>
                                                <li>Interpretations of tests</li>
                                                <li>Surgical procedures</li>
                                                <li>Services provided by anesthesiologists, psychiatrists,
                                                    dermatologist, radiologists, neurologist, other specialties, and
                                                    surgeons.</li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="light-grey-border"></div>
                                    <!--Pay Your Bills Online-->
                                    <h4 class="accordion navy-blue">Pay Your Bills</h4>
                                    <div class="accordion-content" id="menuDropdown">
                                        <p class="margin-bottom">We are pleased to offer patients easy, time-saving ways
                                            to pay for their healthcare and medical services, the process is simple and
                                            secure. If you receive an invoice or statement from Westend Hospital, you
                                            may pay using one of these accepted methods:</p>

                                        <!---PAY IN PERSON-->
                                        <div class="margin-bottom">
                                            <h5>Pay in person</h5>
                                            <p>You can make payment in person at Westend Hospital frontdesk via </p>
                                            <ul class="square-list-type" id="squareList">
                                                <li>Point of Sale (POS).</li>
                                                <li>Cash Payments</li>
                                                <li>Bank Transfer </li>
                                            </ul>
                                        </div>
                                        <div class="margin-bottom">
                                            <!---PAY ONLINE-->
                                            <h5>Pay Online</h5>
                                            <p>We offer stress-free, easy, and time-saving online payment through <a
                                                    href="online-pay" class="sky-blue">PayStack</a>, Payment is secured,
                                                fast, and one-time, it does not require registration, and you can pay
                                                anytime, 24 hours a day, seven days a week.</p>
                                            <div>
                                                <h6 class="navy-blue">Steps to follow: </h6>
                                                <p>Begin by clicking on Paystack link above then </p>
                                                <ul class="square-list-type margin-bottom" id="squareList">
                                                    <li>Input first name,</li>
                                                    <li>Last name, </li>
                                                    <li>Your email,</li>
                                                    <li>Select the service you are paying for, amount to pay get
                                                        generated automatically.</li>
                                                </ul>
                                                <p>Please have the below information on hand before you begin the online
                                                    payment process:</p>
                                                <ul class="square-list-type margin-bottom" id="squareList">
                                                    <li>Your credit card information.</li>
                                                </ul>
                                                <p>Please note that you can only pay certain hospital bills through this
                                                    website. Unless noted on your hospital bill, bills that can be
                                                    processed through this website payment gateway are those listed on
                                                    the dropdown menu under the “payment for” section of the form on the
                                                    online payment page.</p>
                                                <p>If you have any questions about your hospital bill or the online bill
                                                    pay service, please call Westend Hospital‘s Account Department at
                                                    +234 (0) 807 420 3056 or +234 (0) 807 734 4853. </p>
                                            </div>
                                        </div>
                                        <!--DIRECT ONLINE TRANSFER-->
                                        <div class="margin-bottom">
                                            <h5>Direct Bank Transfer</h5>
                                            <p>You may conveniently and securely pay for your healthcare by direct
                                                transfer to the below account details, please bear in mind the total
                                                cost of your bill. </p>

                                            <ul>
                                                <li>
                                                    <p><b>Account Name:</b> Dr. Amadasun Hospitals Limited</p>
                                                </li>
                                                <li>
                                                    <p><b>Account Number: </b>1014903808</p>
                                                </li>
                                                <li>
                                                    <p><b>Bank Name:</b> Zenith Bank</p>
                                                </li>
                                            </ul>
                                        </div>



                                    </div>

                                    <div class="light-grey-border"></div>
                                    <!--Uninsured-->
                                    <h4 class="accordion navy-blue">Uninsured (Self-pay or Private pay)
                                    </h4>
                                    <div class="accordion-content" id="menuDropdown">

                                        <div class="margin-bottom">
                                            <p>Uninsured simply means that you have to pay for your services and that
                                                you do not have insurance coverage for the hospital services rendered.
                                                Uninsured may also be referred to as Self Pay or Private pay. </p>
                                        </div>

                                        <div class="margin-bottom">
                                            <p>You may be considered uninsured if you have a:</p>
                                            <ul class="square-list-type" id="squareList">
                                                <li>None contracted insurance plan</li>
                                                <li>High deductible</li>
                                                <li>Limited benefit plan(s)</li>
                                            </ul>
                                            <p>A lot of persons regrettably do not have health insurance plans and, as
                                                such a number of patients face difficulties in paying for medical
                                                services and care. We understand times are hard, therefore in line with
                                                our key statements we strive to serve uninsured patients with dignity
                                                and respect despite the financial burdens they may face.</p>
                                        </div>
                                        <div>
                                            <h5>How We Treat Uninsured Patients </h5>
                                            <ul class="square-list-type" id="squareList">
                                                <li>We treat the uninsured fairly and with respect before, during, and
                                                    after treatment, regardless of their ability to pay.</li>
                                                <li>Uninsured patients, when applicable, will be offered reasonable
                                                    payment schedules as part of the financial counseling process.</li>
                                                <li>Hospital-based physicians and related entities will be encouraged to
                                                    follow Westend Hospital guidelines regarding treating uninsured
                                                    patients with dignity and respect regardless of their ability to
                                                    pay.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="light-grey-border"></div>

                                </div>

                            </div>
                            <div class="accepted-insurance margin-top">
                                <h4 class="navy-blue">
                                    <b>Accepted Insurance Plans</b>
                                </h4>
                                <p>View our current list of accepted insurance plans at Westend Hospital.</p>
                                <a href="accepted-insurance"
                                    class="btn white-background-sky-blue-border sky-blue">Accepted Insurance</a>
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

</html>
</body>

</html>