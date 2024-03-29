<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Medical Services - A-Z List | Westend Hospital</title>
        <link rel="icon" type="image/x-icon" href="../img/logo/favicon.ico.png" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
        <meta name="description" content="All the medical services provided at Westend Hospital Warri are listed from A to Z.
        Get top-notch treatment at our hospitals.
        Discover how we are changing the definition of excellence in healthcare by exploring our medical services. " />
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

    <body data-spy="scroll" data-offset="50" style="position: relative">
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
                                                    <a href="A-Z-of-all-medical-test">A-Z of all Medical Test</a>
                                                </li>
                                                <li>
                                                    <a href="A-Z-of-all-medical-services">A-Z of all Medical
                                                        Services</a>
                                                </li>
                                                <li>
                                                    <a href="department-and-services">Department & Services</a>
                                                </li>
                                                <li>
                                                    <a href="patient-education">Patient Education</a>
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
            <div class="section-background-image A-Z-list-of-medical-services">
                <div class="container" id="a_zContainer">
                    <h2 class="subnavbar-color">Medical Services, A-Z List</h2>
                    <ul class="inline-block-breadcrumb subnavbar-color">
                        <li>
                            <a href="../index">Home</a>
                        </li>
                        <li>Medical Services</li>
                    </ul>
                    <!--Links to navigate each of the alphabets-->
                    <ul class="a-z-nav-links flex scroll" id="A-Z-List">
                        <li class="test-letters-alphabets">
                            <a href="#a">A</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#b">B</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#c">C</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#d">D</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#e">E</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#f">F</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#g">G</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#h">H</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#i">I</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#j">J</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#k">K</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#l">L</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#m">M</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#n">N</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#o">O</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#p">P</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#q">Q</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#r">R</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#s">S</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#t">T</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#u">U</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#v">V</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#w">W</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#x">X</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#y">Y</a>
                        </li>
                        <li class="test-letters-alphabets">
                            <a href="#z">Z</a>
                        </li>
                    </ul>
                </div>
            </div>

            <section id="A-Z-list-of-medical-test">
                <div class="container">
                    <!--List by alphabets A-Z-->
                    <section id="a" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>A</h1>
                            <ul>
                                <li><a href="#/">Abscess (I & D Includin G Dressings)</a></li>

                                <li><a href="#/">Ambulance</a></li>
                                <li><a href="#/">Ante-Natal Care</a></li>
                                <li><a href="#/">Audiological Investigations</a></li>
                                <li>
                                    <a href="#/">Audiometry (for Medical Certification only)</a>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="b" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>B</h1>
                            <ul>
                                <li><a href="#/">BCG Immunization</a></li>
                                <li><a href="#/">BERA (Brain Evoked Response Auditory)</a></li>
                                <li><a href="#/">Bilateral Antrum Washout</a></li>
                                <li><a href="#/">Blood Exchange Transfusion</a></li>
                                <li><a href="#/">Blood Transfusion</a></li>
                                <li><a href="#/">Blood Transfusion (Per Bag)</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="c" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>C</h1>
                            <ul>
                                <li><a href="#/">Caesarian Section Operation</a></li>
                                <li><a href="#/">Cataract Extraction & Iol Implant</a></li>
                                <li><a href="#/">Catheterization</a></li>
                                <li><a href="#/">Cautery</a></li>
                                <li><a href="#/">Central Vein Catheterization</a></li>
                                <li>
                                    <a href="#/">Central Visual Field (Twice A Year For Glaucoma)</a>
                                </li>
                                <li><a href="#/">Cervical Biopsy</a></li>
                                <li><a href="#/">Cervical Cerclage</a></li>
                                <li><a href="#/">Cervical Laceration Repair</a></li>
                                <li>
                                    <a href="#/">Chronic Relapsing Erythematous Dermatitis</a>
                                </li>
                                <li><a href="#/">Circumcision For Male Baby</a></li>
                                <li><a href="#/">Collar</a></li>
                                <li><a href="#/">Colonoscopy</a></li>
                                <li><a href="#/">Comedones extraction</a></li>
                                <li><a href="#/">Conjuctivitis</a></li>
                                <li><a href="#/">CTG Monitoring</a></li>
                                <li><a href="#/">Curettage/Exfoliation Skin</a></li>
                                <li><a href="#/">Cyst extraction</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="d" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>D</h1>
                            <ul>
                                <li><a href="#/">Deep Corneal Foreign Body Removal</a></li>
                                <li><a href="#/">Digital Otoscopy</a></li>
                                <li><a href="#/">DPOAE(Distortion product otoacoustic emissions)</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="e" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>E</h1>
                            <ul>
                                <li><a href="#/">Ear Lavage</a></li>
                                <li><a href="#/">Ear Piercing For Female Baby</a></li>
                                <li><a href="#/">Ear Toiletry Bilateral</a></li>
                                <li><a href="#/">ECG</a></li>
                                <li><a href="#/">Echocardiogram</a></li>
                                <li><a href="#/">Electro Encephalogram (EEG)</a></li>
                                <li><a href="#/">Electrocavtery (Large)</a></li>
                                <li><a href="#/">Electrocavtery (Small)</a></li>
                                <li><a href="#/">Endometrial Biopsy</a></li>
                                <li><a href="#/">Enema</a></li>
                                <li><a href="#/">Episiotomy Repair</a></li>
                                <li><a href="#/">Evacuation (ERPC)</a></li>
                                <li><a href="#/">Excision Biopsy</a></li>
                                <li><a href="#/">Exercise ECG</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="f" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>F</h1>
                            <ul>
                                <li><a href="#/">Foot/Ankle Casts</a></li>
                                <li><a href="#/">Forearm Casts</a></li>
                                <li>
                                    <a href="#/">Foreign Body Removal in the ear with Sedation</a>
                                </li>
                                <li>
                                    <a href="#/">Foreign Body Removal in the ear without Sedation</a>
                                </li>
                                <li>
                                    <a href="#/">Foreign Body Removal in the Nose with Sedation</a>
                                </li>
                                <li>
                                    <a href="#/">Foreign Body Removal in the Nose without Sedation</a>
                                </li>
                                <li><a href="#/">Full Arm Casts</a></li>
                                <li>
                                    <a href="#/">Full Audiological evaluation (With Report))</a>
                                </li>
                                <li><a href="#/">Full Leg Casts</a></li>
                                <li><a href="#/">Functional Capacity Evaluation</a></li>
                                <li><a href="#/">Fungal Culture</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="g" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>G</h1>
                            <ul>
                                <li>
                                    <a href="#/">Nil</a>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="h" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>H</h1>
                            <ul>
                                <li>
                                    <a href="#/">Haemophilus Influenza Vaccination (HIB)</a>
                                </li>
                                <li><a href="#/">Hand Casts</a></li>
                                <li><a href="#/">Hand P.O.P</a></li>
                                <li><a href="#/">Hepatitis B (0 To 5)</a></li>
                                <li><a href="#/">Hepatitis B Immunization</a></li>
                                <li><a href="#/">Hip Spica</a></li>
                                <li><a href="#/">Holter ECG</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="i" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>I</h1>
                            <ul>
                                <li><a href="#/">Imaging Services</a></li>
                                <li><a href="#/">Incision And Drainage (Major)</a></li>
                                <li><a href="#/">Incision And Drainage (Medium)</a></li>
                                <li><a href="#/">Incision And Drainage (Minor)</a></li>
                                <li><a href="#/">Incubator Use</a></li>
                                <li><a href="#/">Induction Of Labour</a></li>
                                <li><a href="#/">Inflammatory Conditions</a></li>
                                <li><a href="#/">Intradermal Implant (Contraceptive)</a></li>
                                <li><a href="#/">Intralesional Triamcinolone</a></li>
                                <li><a href="#/">IUCD Insertion</a></li>
                                <li><a href="#/">IUCD Removal</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="j" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>J</h1>
                            <ul>
                                <li><a href="#/">Nil</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="k" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>K</h1>
                            <ul>
                                <li><a href="#/">Knee Casts</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="l" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>L</h1>
                            <ul>
                                <li><a href="#/">Laceration Requiring Suturing</a></li>
                                <li><a href="#/">Laminectomy</a></li>
                                <li><a href="#/">Leg Casts</a></li>
                                <li><a href="#/">Leg P.O.P</a></li>
                                <li><a href="#/">Lump Excision (Medium With Local)</a></li>
                                <li><a href="#/">Lump Excision (Minor)</a></li>
                                <li><a href="#/">Lumpectomy (Theatre)</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="m" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>M</h1>
                            <ul>
                                <li><a href="#/">Major Burns Dressing</a></li>
                                <li><a href="#/">Major Major Wound Dressing</a></li>
                                <li><a href="#/">Major Repair (Suturing)</a></li>
                                <li><a href="#/">Major Wound Dressing</a></li>
                                <li>
                                    <a href="#/">Measles, Mumps, Rubella, Vaccination (MMR)</a>
                                </li>
                                <li><a href="#/">Medium Burns Dressing</a></li>
                                <li><a href="#/">Medium Repair (Suturing)</a></li>
                                <li><a href="#/">Medium Wound Dressing</a></li>
                                <li><a href="#/">Minor Burns Dressing</a></li>
                                <li><a href="#/">Minor Wound Dressing</a></li>
                                <li><a href="#/">Minor Lid Repair</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="n" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>N</h1>
                            <ul>
                                <li><a href="#/">Naso Endoscopy</a></li>
                                <li><a href="#/">Nebulization (Per Session)</a></li>
                                <li><a href="#/">Neck Collar (Hard)</a></li>
                                <li><a href="#/">Neck Collar (Soft)</a></li>
                                <li><a href="#/">Normal Delievery (Twin Delivery)</a></li>
                                <li><a href="#/">Normal Delivery For Registered Patient</a></li>
                                <li>
                                    <a href="#/">Normal Delivery For Un-Registered Patient</a>
                                </li>
                                <li><a href="#/">Nursing Care</a></li>
                                <li><a href="#/">Nursing Care (Major Cases)</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="o" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>O</h1>
                            <ul>
                                <li><a href="#/">Ophthalmological Treatment</a></li>
                                <li>
                                    <a href="#/">Ophthalmologist Consultation (Once Per Quarter)</a>
                                </li>
                                <li><a href="#/">Otitis Media</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="p" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>P</h1>
                            <ul>
                                <li><a href="#/">Paediatric Assessment At Birth</a></li>
                                <li><a href="#/">Phototherapy (Per Day)</a></li>
                                <li><a href="#/">Phototherapy (Per Diem)</a></li>
                                <li><a href="#/">Physiotherpy Service</a></li>
                                <li><a href="#/">Pneumococcal Vaccine</a></li>
                                <li><a href="#/">Pneumonia</a></li>
                                <li><a href="#/">Polio Immunization</a></li>
                                <li><a href="#/">Primary Repair (Suturing)</a></li>
                                <li><a href="#/">Prostheses</a></li>
                                <li><a href="#/">Prostrate Biopsy</a></li>
                                <li><a href="#/">Pterigium Excision</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="q" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>Q</h1>
                            <ul>
                                <li><a href="#/">Nil</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="r" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>R</h1>
                            <ul>
                                <li><a href="#/">Reflex Audiometry</a></li>
                                <li><a href="#/">Release of Tongue Tie</a></li>
                                <li><a href="#/">Rogam Injection</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="s" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>S</h1>
                            <ul>
                                <li><a href="#/">Salpingectomy</a></li>
                                <li><a href="#/">Skin Biopsy</a></li>
                                <li><a href="#/">Skin Biopsy/Koh Microscopy</a></li>
                                <li>
                                    <a href="#/">Slow Infiltration with Depo Medrol/ Xylocaine/
                                        Adrenaline</a>
                                </li>
                                <li><a href="#/">Soft Tissue</a></li>
                                <li><a href="#/">Spirometry</a></li>
                                <li>
                                    <a href="#/">Spirometry (For Medical Certification only)</a>
                                </li>
                                <li><a href="#/">Standard Frames + Lenses</a></li>
                                <li><a href="#/">Stress ECG</a></li>
                                <li><a href="#/">Suction of Tonsils</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="t" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>T</h1>
                            <ul>
                                <li><a href="#/">Therapeutic D & C</a></li>
                                <li><a href="#/">Tonometry</a></li>
                                <li><a href="#/">Tonsillitis/Sore Throat</a></li>
                                <li><a href="#/">Tympanic Membrane Repair</a></li>
                                <li><a href="#/">Tympanometry</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="u" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>U</h1>
                            <ul>
                                <li><a href="#/">Upper Arm Casts</a></li>
                                <li><a href="#/">Upper Respiratory Tract Infection</a></li>
                                <li><a href="#/">Urethral Bouginage</a></li>
                                <li><a href="#/">Urinary Tract Infection</a></li>
                                <li><a href="#/">Uterine Suction</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="v" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>V</h1>
                            <ul>
                                <li><a href="#/">Vacuum or Forceps Delivery</a></li>
                                <li><a href="#/">Ventilator Use - Per Day</a></li>
                                <li><a href="#/">Visual Test - Eye Test</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="w" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>W</h1>
                            <ul>
                                <li><a href="#/">Walking Frame</a></li>
                                <li><a href="#/">Wart Excision</a></li>
                                <li><a href="#/">Wheel Chair</a></li>
                                <li><a href="#/">Wound Dressing Only</a></li>
                                <li><a href="#/">Uterine Suction</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="x" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>X</h1>
                            <ul>
                                <li><a href="#/">Nil</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="y" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>Y</h1>
                            <ul>
                                <li><a href="#/">Yellow Fever Vaccination</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="z" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>Z</h1>
                            <ul>
                                <li><a href="#/">Nil</a></li>
                            </ul>
                        </div>
                    </section>
                </div>
            </section>
        </main>

        <!---------------------------MAIN PAGE CONTENT ENDS----------------------------------------->

        <footer id="footer">
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
                    <button class="scrollTopBtn flex-column" id="myTopBTN" onclick="topFunction()">
                        <i class="fa fa-angle-up"></i>
                        <p>Top</p>
                    </button>
                    <!--BACK TO TOP BTN ENDS-->
                    <div class="flex lg-size">
                        <div class="dropdown">
                            <h4 class="dropbtn">About Us</h4>
                            <ul class="dropdown-content footer-menu" id="menuDropdown">
                                <li>
                                    <a href="../our-history">History</a>
                                </li>
                                <li>
                                    <a href="../awards-and-accreditations">Awards & Accreditations</a>
                                </li>
                                <li>
                                    <a href="../map-and-directions">Maps & Directions</a>
                                </li>
                                <li>
                                    <a href="../report-misconduct">Report Misconduct</a>
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
                                    <a href="../refer-a-patient">Refer a patient</a>
                                </li>
                                <li>
                                    <a href="../medical-test-and-services/patient-support-services/nursing">For
                                        nurses</a>
                                </li>
                                <li>
                                    <a href="#/">For physician</a>
                                </li>
                                <li>
                                    <a href="../request-an-appointment">Enquiries & appointment</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="billing-insurrance dropdown">
                                <h4 class="dropbtn">Billing and Insurance</h4>
                                <ul class="dropdown-content footer-menu" id="menuDropdown">
                                    <li>
                                        <a href="../patient-and-visitors/accepted-insurance">Insurance Information</a>
                                    </li>
                                    <li>
                                        <a href="../patient-and-visitors/online-pay">Pay a bill</a>
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
                            <a href="../privacy-policy">Privacy Policy</a>
                            <a href="../terms-of-use">Terms & Conditions</a>
                            <a href="../patient-feedback">Feedback</a>
                            <a href="../sitemap">Sitemap</a>
                            <a href="https://www.blackpopex.com" target="_blank">Designed and Built By <span
                                    class="gold">Blackpopex</span></a>
                        </small>
                    </div>
                </div>
            </section>
        </footer>
        <script src="../js/mainA-Z.js"></script>
        <script src="../js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="../js/slick.js" type="text/javascript"></script>
        <script src="../js/clearinputfield.js"></script>
    </body>

</html>