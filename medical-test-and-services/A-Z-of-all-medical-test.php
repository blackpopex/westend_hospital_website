<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Medical Test - A-Z List | Westend Hospital</title>
        <link rel="icon" type="image/x-icon" href="../img/logo/favicon.ico.png" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
        <meta name="description"
            content="We provide a variety of diagnostic procedures for both patients and visitors, and you may learn how we support healthcare by making even the most difficult investigation available at our facility. Why not browse through our A-Z collection of medical tests today? " />
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

        <!---------------------------MAIN PAGE CONTENT ---------------------------------------------->
        <main>
            <div class="section-background-image A-Z-list-of-medical-test">
                <div class="container" id="a_zContainer">
                    <h2 class="subnavbar-color">Medical Tests, A-Z List</h2>
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
                                <li><a href="#/">Abdominal CT Scan</a></li>
                                <li><a href="#/">Abdominopelvic CT Scan</a></li>
                                <li><a href="#/">Abdominal Ultra Sound</a></li>
                                <li><a href="#/">Abdominopelvic Ultra Sound Scan</a></li>
                                <li><a href="#/">Abdomen (Upper)-TAS</a></li>
                                <li><a href="#/">Abdominal x-ray</a></li>
                                <li><a href="#/">Audiometry</a></li>
                                <li><a href="#/">Acid Phosphatase</a></li>
                                <li><a href="#/">Acid Phosphate</a></li>
                                <li><a href="#/">Allergy testing - skin</a></li>
                                <li><a href="#/">ACTH stimulation test</a></li>
                                <li><a href="#/">Acid loading test (pH)</a></li>
                                <li><a href="#/">Albumin</a></li>
                                <li><a href="#/">Alkaline Phosphatase(ALP)</a></li>
                                <li><a href="#/">Amylase</a></li>
                                <li><a href="#/">Aso Titre</a></li>
                                <li><a href="#/">APTT(Activated Partial Thromboplastin Time)</a></li>
                                <li><a href="#/">Alpha Fetoprotein</a></li>
                                <li><a href="#/">Aspirate / Fluid / Pus MCS</a></li>
                                <li><a href="#/">Anti HCV</a></li>
                                <li><a href="#/">Anti CCP</a></li>
                                <li><a href="#/">Anti Smith</a></li>
                                <li><a href="#/">Anti - Mullerian Hormone</a></li>
                                <li><a href="#/">ANA (ANF/DNA)</a></li>
                                <li><a href="#/">ACTH(Adrenocorticotropic Hormone)</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="b" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>B</h1>
                            <ul>
                                <li><a href="#/">Blood culture</a></li>
                                <li><a href="#/">Barium enema</a></li>
                                <li><a href="#/">Barium Swallow</a></li>
                                <li><a href="#/">Barium Meal</a></li>
                                <li><a href="#/">Barium Meal & Follow Through</a></li>
                                <li><a href="#/">Barium meal with Gastrografin</a></li>
                                <li><a href="#/">Breath alcohol test</a></li>
                                <li><a href="#/">Blood sugar test</a></li>
                                <li><a href="#/">Breath alcohol test</a></li>
                                <li><a href="#/">B-cell leukemia</a></li>
                                <li><a href="#/">Blood Group</a></li>
                                <li><a href="#/">Blood Microfilaria</a></li>
                                <li><a href="#/">Blood Pregnancy Test</a></li>
                                <li><a href="#/">B-HCG</a></li>
                                <li><a href="#/">B2 Microgblobulin</a></li>
                                <li><a href="#/">Brain CT Scan</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="c" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>C</h1>
                            <ul>
                                <li><a href="#/">Calcium</a></li>
                                <li><a href="#/">CD4 Count</a></li>
                                <li><a href="#/">Chlamydia Rapid</a></li>
                                <li><a href="#/">Chest X-ray</a></li>
                                <li><a href="#/">Chest CT Scan</a></li>
                                <li><a href="#/">Cholesterol</a></li>
                                <li><a href="#/">CHOL/HDL Ratio</a></li>
                                <li><a href="#/">Coomb's Test</a></li>
                                <li><a href="#/">Creatinine</a></li>
                                <li><a href="#/">Creatinine Clearance</a></li>
                                <li><a href="#/">Cross Matching</a></li>
                                <li><a href="#/">CSF Analysis</a></li>
                                <li><a href="#/">CSF Chloride</a></li>
                                <li><a href="#/">Cardiac Scanning</a></li>
                                <li>
                                    <a href="#/">CVIQ (Colour Velocity Imaging Quantification)</a>
                                </li>
                                <li><a href="#/">C - Reactive Protein Assay</a></li>
                                <li><a href="#/">CK-MB</a></li>
                                <li><a href="#/">CK</a></li>
                                <li><a href="#/">CA 153</a></li>
                                <li><a href="#/">CA 125</a></li>
                                <li><a href="#/">CA 19-9</a></li>
                                <li><a href="#/">Colour Doppler</a></li>
                                <li><a href="#/">Carcinoembryonic Antigen (CEA)</a></li>
                                <li><a href="#/">Cyclic Citrullinated Peptides (CCP)</a></li>
                                <li><a href="#/">CSF Biochemistry</a></li>
                                <li><a href="#/">Cortisol (Random)</a></li>
                                <li><a href="#/">Cervical (Dynamic Studies) X-Ray</a></li>
                                <li><a href="#/">Cervical CT Scan</a></li>
                                <li><a href="#/">C - Peptide Assay</a></li>
                                <li><a href="#/">Catheter TIP Culture</a></li>
                                <li><a href="#/">COVID-19 Antibodies</a></li>
                                <li><a href="#/">COVID-19 Antigen</a></li>
                                <li><a href="#/">Cytology</a></li>
                                <li><a href="#/">Chlamydia Elisa</a></li>
                                <li><a href="#/">Congenital Abnormality Screening 4D</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="d" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>D</h1>
                            <ul>
                                <li><a href="#/">Drug & Alcohol Screening</a></li>
                                <li><a href="#/">DNA Patenity Test</a></li>
                                <li><a href="#/">D-Dimer</a></li>
                                <li><a href="#/">Donated Blood</a></li>
                                <li><a href="#/">DsDNA</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="e" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>E</h1>
                            <ul>
                                <li><a href="#/">Ear Swab</a></li>
                                <li><a href="#/">Electrolytes</a></li>
                                <li><a href="#/">ESR</a></li>
                                <li><a href="#/">Endovaginal / Transvaginal Sonography </a></li>
                                <li><a href="#/">Endocervical Swab </a></li>
                                <li><a href="#/">Elisa - Anti-Treponema Pallidum </a></li>
                                <li><a href="#/">ECG </a></li>
                                <li><a href="#/">Echocardiogram </a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="f" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>F</h1>
                            <ul>
                                <li><a href="#/">Fasting Blood Sugar</a></li>
                                <li><a href="#/">FBC (Full Blood Count)</a></li>
                                <li><a href="#/">Foot X-ray</a></li>
                                <li><a href="#/">Foot CT Scan</a></li>
                                <li><a href="#/">Fistulogram</a></li>
                                <li><a href="#/">FSH(Follicle-Stimulating Hormone)</a></li>
                                <li><a href="#/">Fluid Biochemistry</a></li>
                                <li><a href="#/">Fluid Albumin</a></li>
                                <li><a href="#/">Fluid Glucose</a></li>
                                <li><a href="#/">Fluid Analysis</a></li>
                                <li><a href="#/">Fluid AFB</a></li>
                                <li><a href="#/">Free PSA</a></li>
                                <li><a href="#/">FOUR-D (4D) Obstetric Ultrasound Scan</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="g" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>G</h1>
                            <ul>
                                <li><a href="#/">Genotype</a></li>
                                <li><a href="#/">Genotype Special</a></li>
                                <li><a href="#/">Gene Xpert</a></li>
                                <li><a href="#/">Glucose</a></li>
                                <li><a href="#/">Glucose 2HPP</a></li>
                                <li><a href="#/">Gram Stain</a></li>
                                <li><a href="#/">G6PD</a></li>
                                <li><a href="#/">GGT (Gamma-glutamyl Transferase)</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="h" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>H</h1>
                            <ul>
                                <li><a href="#/">Hand x-ray</a></li>
                                <li><a href="#/">Hip x-ray</a></li>
                                <li><a href="#/">Hip CT Scan</a></li>
                                <li><a href="#/">Haematocrit(PCV)</a></li>
                                <li><a href="#/">HB (Haemoglobin Concentration)</a></li>
                                <li><a href="#/">HB Electrophoresis (HB Quantification)</a></li>
                                <li><a href="#/">HbA1C</a></li>
                                <li><a href="#/">HDL Cholesterol</a></li>
                                <li><a href="#/">Hepatitis A Virus (IgM Anti-HAV)</a></li>
                                <li>
                                    <a href="#/">Hepatitis B Virus Surface Antigen (HBsAg)</a>
                                </li>
                                <li><a href="#/">Hepatitis C Virus (Anti-HCV)</a></li>
                                <li><a href="#/">HIV -1/2</a></li>
                                <li><a href="#/">HIV P24 Antigen</a></li>
                                <li>
                                    <a href="#/">Hormonal Assay (LH, FSH, Prolactin, Oestradiol,
                                        Progesterone)</a>
                                </li>
                                <li><a href="#/">H. Pylori (Anti-H.pylori)</a></li>
                                <li><a href="#/">HVS (High vaginal swab)</a></li>
                                <li><a href="#/">Hysterosalpingogram (HSG)</a></li>
                                <li><a href="#/">HPV - Cervical Smear</a></li>
                                <li><a href="#/">HEP. B. Infection Marker</a></li>
                                <li><a href="#/">HEP. B. Viral Load</a></li>
                                <li><a href="#/">HEP. C. Viral Load</a></li>
                                <li><a href="#/">HIV Viral Load</a></li>
                                <li><a href="#/">Histology</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="i" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>I</h1>
                            <ul>
                                <li><a href="#/">Intravenous Pyelo-Urogram (IVU)</a></li>
                                <li><a href="#/">INR (International Normalized Ratio)</a></li>
                                <li><a href="#/">Iron Studies</a></li>
                                <li><a href="#/">Immunofixation</a></li>
                                <li><a href="#/">IUCD Insertion</a></li>
                                <li><a href="#/">IUCD Removal</a></li>
                                <li><a href="#/">Intradermal Implant (Contraceptive)</a></li>
                                <li><a href="#/">Immunohistochemistry</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="j" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>J</h1>
                            <ul>
                                <li><a href="#/">JAK 2V617 Mutation Assay</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="k" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>K</h1>
                            <ul>
                                <li><a href="#/">Karyotype Test</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="l" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>L</h1>
                            <ul>
                                <li><a href="#/">Leg X-Ray</a></li>
                                <li><a href="#/">LE Cell</a></li>
                                <li><a href="#/">LE Cells</a></li>
                                <li><a href="#/">Liver Function Test (LFT)</a></li>
                                <li><a href="#/">Lipid Profile</a></li>
                                <li><a href="#/">Lipase - S</a></li>
                                <li><a href="#/">Lower Extremity scanning</a></li>
                                <li><a href="#/">LH (Luteinizing Hormone)</a></li>
                                <li><a href="#/">Lumbosacral (Dynamic Studies) X-Ray</a></li>
                                <li><a href="#/">Lumbosacral AP /LAT RT & LT Oblique</a></li>
                                <li><a href="#/">Lumbosacral Spine CT Scan</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="m" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>M</h1>
                            <ul>
                                <li><a href="#/">Malaria Parasites</a></li>
                                <li><a href="#/">Mantoux (PPD) Test</a></li>
                                <li><a href="#/">MCH</a></li>
                                <li><a href="#/">MCHC</a></li>
                                <li><a href="#/">MCV</a></li>
                                <li><a href="#/">Micturating Cysto-Urethrogram (MCUG)</a></li>
                                <li><a href="#/">MCUG + RCUG</a></li>
                                <li><a href="#/">Myelogram ? Lumbar</a></li>
                                <li><a href="#/">Myelogram ? Cervical</a></li>
                                <li><a href="#/">Magnesium</a></li>
                                <li><a href="#/">Metanephrine</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="n" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>N</h1>
                            <ul>
                                <li><a href="#/">Neck CT Scan</a></li>
                                <li><a href="#/">Neck x-ray</a></li>
                                <li><a href="#/">Neck Ultra Sound Scan</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="o" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>O</h1>
                            <ul>
                                <li><a href="#/">Occult Blood in Faeces</a></li>
                                <li><a href="#/">Oral Glucose Tolerance Test</a></li>
                                <li><a href="#/">Oral Cholecystogram</a></li>
                                <li><a href="#/">Orbit CT Scan</a></li>
                                <li><a href="#/">Obstetrics Scan</a></li>
                                <li><a href="#/">Obstetrics Transvaginal Sonography</a></li>
                                <li><a href="#/">Obstetrics Trans Abdominal Scann</a></li>
                                <li>
                                    <a href="#/">Ovulometry / Folliculometry Scan ( TVS)</a>
                                </li>
                                <li><a href="#/">Ocular scanning </a></li>
                                <li><a href="#/">Oestrogen (Oestradiol) </a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="p" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>P</h1>
                            <ul>
                                <li><a href="#/">Pap Smear</a></li>
                                <li><a href="#/">Package For COVID Confirmation</a></li>
                                <li><a href="#/">Phosphorus (Inorganic)</a></li>
                                <li><a href="#/">Platelets</a></li>
                                <li><a href="#/">Potassium</a></li>
                                <li><a href="#/">Prothrombin Time</a></li>
                                <li><a href="#/">PSA (TOTAL)</a></li>
                                <li><a href="#/">Peripheral Arteriography</a></li>
                                <li>
                                    <a href="#/">Pelvic / Kidney, Ureter, Urinary Tract and Bladder -TAS</a>
                                </li>
                                <li><a href="#/">Prostate (TAS) </a></li>
                                <li>
                                    <a href="#/">Paediatric Ultrasonography Neurosonography </a>
                                </li>
                                <li><a href="#/">Paediatric Ultrasonography Spine </a></li>
                                <li><a href="#/">Paediatric Ultrasonography Abdomen </a></li>
                                <li>
                                    <a href="#/">Paediatric Ultrasonography Kidney + Bladder (TAS)
                                    </a>
                                </li>
                                <li>
                                    <a href="#/">Paediatric Ultrasonography Neurosonography </a>
                                </li>
                                <li><a href="#/">Prolactin </a></li>
                                <li><a href="#/">Progesterone </a></li>
                                <li><a href="#/">Parathyroid Hormone </a></li>
                                <li><a href="#/">Paracentesis </a></li>
                                <li><a href="#/">PCR HEP C Genotype </a></li>
                                <li><a href="#/">Post Nasal Space X-Ray </a></li>
                                <li><a href="#/">Post Nasal Space CT Scan </a></li>
                                <li><a href="#/">Para Nasal Sinuses CT Scan </a></li>
                                <li><a href="#/">Post Dialysis Test </a></li>
                                <li><a href="#/">Pre Dialysis Test </a></li>
                                <li><a href="#/">Pre-Natal DNA Paternity </a></li>
                                <li><a href="#/">PTT (Partial Thromboplastin Time) </a></li>
                                <li><a href="#/">PCR COVID-19</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="q" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>Q</h1>
                            <ul>
                                <li><a href="#/">Quantification-HBsAg</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="r" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>R</h1>
                            <ul>
                                <li><a href="#/">Reticulocyte</a></li>
                                <li><a href="#/">Rheumatoid Factor</a></li>
                                <li><a href="#/">Retrograde Urethrogram (RCUG)</a></li>
                                <li><a href="#/">Random Blood Sugar</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="s" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>S</h1>
                            <ul>
                                <li><a href="#/">Semen Analysis</a></li>
                                <li><a href="#/">Semen Culture</a></li>
                                <li><a href="#/">Serum Protein</a></li>
                                <li><a href="#/">SGOT</a></li>
                                <li><a href="#/">SGPT</a></li>
                                <li><a href="#/">Sickling</a></li>
                                <li><a href="#/">Skin Scrapping</a></li>
                                <li><a href="#/">Skin Snip</a></li>
                                <li><a href="#/">Stool MCS</a></li>
                                <li><a href="#/">Stool Microscopy</a></li>
                                <li><a href="#/">Stress ECG</a></li>
                                <li><a href="#/">Swab MCS</a></li>
                                <li><a href="#/">Syphilis (Anti-Treponema Pallidum)</a></li>
                                <li><a href="#/">Seminal Fructose Test</a></li>
                                <li><a href="#/">Sinogram</a></li>
                                <li><a href="#/">Skeletal Survey</a></li>
                                <li>
                                    <a href="#/">Sonographic Hysterography [& Patency Test] ( TVS)</a>
                                </li>
                                <li><a href="#/">Small Part Sonography Thyroid </a></li>
                                <li><a href="#/">Small Part Sonography Breast </a></li>
                                <li><a href="#/">Small Part Sonography Testis </a></li>
                                <li><a href="#/">Small Part Sonography Appendix </a></li>
                                <li><a href="#/">Sputum MCS </a></li>
                                <li><a href="#/">Sputum AFB </a></li>
                                <li><a href="#/">Serum- Creatine Kinase (CK) </a></li>
                                <li><a href="#/">Serum Eletrophoresis </a></li>
                                <li><a href="#/">Serum Iron </a></li>
                                <li><a href="#/">Serum Folate </a></li>
                                <li><a href="#/">Serum Ferritin </a></li>
                                <li><a href="#/">Serum Erythropoetin </a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="t" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>T</h1>
                            <ul>
                                <li><a href="#/">Throat Swab</a></li>
                                <li><a href="#/">Thyroid Function Test (T3, T4, TSH)</a></li>
                                <li><a href="#/">Total Protein</a></li>
                                <li><a href="#/">Triglyceride</a></li>
                                <li><a href="#/">TAS + Transperineal Sonography</a></li>
                                <li><a href="#/">TAS + Transrectal Sonography</a></li>
                                <li><a href="#/">TB (Anti-TB Antibodies)</a></li>
                                <li><a href="#/">TB Quantiferon</a></li>
                                <li><a href="#/">Total Testosterone</a></li>
                                <li><a href="#/">Troponin</a></li>
                                <li>
                                    <a href="#/">Twenty-Four Hours (24Hrs) Urine Protein</a>
                                </li>
                                <li><a href="#/">TSH (Thyroid Stimulating Hormone)</a></li>
                                <li><a href="#/">Transferrin Saturation</a></li>
                                <li><a href="#/">Total Iron Binding Capacity</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="u" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>U</h1>
                            <ul>
                                <li><a href="#/">Urea</a></li>
                                <li><a href="#/">Urethral Swab MCS</a></li>
                                <li><a href="#/">Uric Acid</a></li>
                                <li><a href="#/">Urine Analysis</a></li>
                                <li><a href="#/">Urine MCS</a></li>
                                <li><a href="#/">Urine Calcium</a></li>
                                <li><a href="#/">Urine Microscopy</a></li>
                                <li><a href="#/">Urine Pregnancy Test</a></li>
                                <li><a href="#/">Urine Micro Albumin Creatinine Ratio</a></li>
                                <li><a href="#/">Ultrasound Neck</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="v" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>V</h1>
                            <ul>
                                <li><a href="#/">VLDL Cholesterol</a></li>
                                <li><a href="#/">Vascular Scanning</a></li>
                                <li><a href="#/">Vitamin B12 S</a></li>
                                <li><a href="#/">Vitamin D</a></li>
                                <li><a href="#/">Vanillylmandelic Acid (VMA)</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="w" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>W</h1>
                            <ul>
                                <li><a href="#/">Water Bacteriology</a></li>
                                <li><a href="#/">Widal Test</a></li>
                                <li><a href="#/">Wound</a></li>
                                <li><a href="#/">Wound Swab</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="x" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>X</h1>
                            <ul>
                                <li><a href="#/">X - Ray Ankle</a></li>
                                <li><a href="#/">X - Ray Cervical Spine</a></li>
                                <li><a href="#/">X - Ray Chest</a></li>
                                <li><a href="#/">X - Ray Clavicle</a></li>
                                <li><a href="#/">x - Ray Elbow (AP & LAT)</a></li>
                                <li><a href="#/">x - Ray Femur (AP & LAT</a></li>
                                <li><a href="#/">x - Ray Finger (AP & LAT*)</a></li>
                                <li><a href="#/">x - Ray Foot (AP & OBLIQUE)</a></li>
                                <li><a href="#/">X - Ray One Forearm (AP & LAT)</a></li>
                                <li><a href="#/">x - Ray Knee joint</a></li>
                                <li><a href="#/">X - Ray One Hand (PA & OBLIQUE)</a></li>
                                <li><a href="#/">x - Ray Hip joint (AP & LAT)</a></li>
                                <li><a href="#/">X - Ray One Humerus (PA & LAT)</a></li>
                                <li><a href="#/">x - Ray Leg (Tib & fib)</a></li>
                                <li><a href="#/">x - Ray Lumbar Spine (AP & LAT)</a></li>
                                <li><a href="#/">X - Ray Lumbosacral (AP & LAT)</a></li>
                                <li><a href="#/">x - Ray Open jaw wide</a></li>
                                <li><a href="#/">X - Ray Para Sinuses</a></li>
                                <li><a href="#/">x - Ray Pelvis</a></li>
                                <li><a href="#/">x - Ray Open jaw wide</a></li>
                                <li><a href="#/">X - Ray Plain Film Abdomen</a></li>
                                <li><a href="#/">x - Ray Pubic Bones</a></li>
                                <li><a href="#/">x - Ray Sacro-lliac joint</a></li>
                                <li><a href="#/">X - Ray Sacrum & Coccyx</a></li>
                                <li><a href="#/">x - Ray Scapula</a></li>
                                <li><a href="#/">X - Ray Shoulder (AP & LAT)</a></li>
                                <li><a href="#/">x - Ray Skull (AP & LAT)</a></li>
                                <li><a href="#/">x - Ray Sterno-clavicular joint)</a></li>
                                <li><a href="#/">x - Ray Sternum (LAT)</a></li>
                                <li><a href="#/">x - Ray Temporal Bones</a></li>
                                <li><a href="#/">x - Ray Thoracic Spine (AP & LAT)</a></li>
                                <li><a href="#/">x - Ray Wrist (PA & LAT)</a></li>
                                <li><a href="#/">X - Ray Facial Bone (Maxilla/Nasal)</a></li>
                                <li><a href="#/">X - Ray TMJ</a></li>
                                <li><a href="#/">X - Ray Thoracic Inlet</a></li>
                                <li><a href="#/">X - Ray Sella Turcica</a></li>
                                <li><a href="#/">X - Ray Neck (soft Tissue)</a></li>
                                <li><a href="#/">X - Ray Both Hips </a></li>
                                <li><a href="#/">X - Ray Carpal Tunnel</a></li>
                                <li><a href="#/">X - Ray Fistulography</a></li>
                                <li><a href="#/">X - Ray Sialography</a></li>
                                <li><a href="#/">X - Ray Skeletal Survey</a></li>
                                <li><a href="#/">X - Ray Abdomen Erect + Supine</a></li>
                            </ul>
                        </div>
                    </section>
                    <div class="light-grey-border"></div>
                    <section id="y" class="test-names-by-aphabets">
                        <div class="flex test-list">
                            <h1>Y</h1>
                            <ul>
                                <li><a href="#/">Nil</a></li>
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