<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaipur Hospital chnaged by suman pradhan</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet" type="text/css">
    <link href="assets/css/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" />


    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '227323439568430');
        fbq('track', 'PageView');
        fbq(‘track’, ‘ViewContent’);
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=227323439568430&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->



    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8Z2X3XTXEJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-8Z2X3XTXEJ');
    </script>



    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10831951491"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-10831951491');
    </script>
</head>

<body>



    <a href="#enquiry" id="showEnq" class="enquery-btn">Enquiry</a>

    <main id="main">
        <!-- ====== Banner Section -->

        <section class="section-banner pb-4 pt-0 py-lg-0 position-relative" id="home">
            <img alt="" class="img-fluid w-100 d-lg-block d-none" src="assets/img/Find-The-Best-Hospital.jpg">
            <img alt="" class="img-fluid w-100 d-lg-none mob" src="assets/img/Find-The-Best-Hospital.jpg">
            <div class="container pos-ab">
                <div class="row">
                    <div class="col-lg-7 mb-4 mb-lg-0">
                        <div class="h-100"></div>
                    </div>

                    <div class="col-lg-5">
                        <form action="banner-mail.php" class="mx-auto mr-lg-0" id="enquiry" method="post">
                            <h3 class="first text-center font-weight-bold f-15 mb-3">Enquire Now</h3>

                            <div class="form-group pb-1 mb-1">
                                <input class="form-control" type="text" id="fname" name="fname" placeholder="Full Name" required>
                            </div>

                            <div class="form-group pb-1 mb-1">
                                <input class="form-control" type="text" id="phone" pattern="[0-9]{10}" title="Should be 10 digit number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="10" maxlength="10" name="phone" placeholder="Mobile No*" required>
                            </div>

                            <div class="form-group pb-1 mb-1">
                                <input class="form-control" type="email" id="mail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Ener a valid email id. (e.g. :  emailid@example.com)" placeholder="Email*" required>
                            </div>

                            <div class="form-group pb-1 mb-1">
                                <input class="form-control" type="text" id="city" name="city" placeholder="City" required>
                            </div>

                            <div class="form-group pb-1 mb-1">
                                <select id="Specialities" class="form-control" name="specialities" required>
                                    <option value="">Choose a Specialities</option>
                                    <option value="Anaesthesiology">Anaesthesiology</option>
                                    <option value="Cardiac Sciences & Cardiology">Cardiac Sciences & Cardiology</option>
                                    <option value="Clinical Immunology & Rheumatology">Clinical Immunology & Rheumatology</option>
                                    <option value="Dentistry">Dentistry</option>
                                    <option value="Dermatology, Cosmetology & Lasers (Skin Diseases)">Dermatology, Cosmetology & Lasers (Skin Diseases)</option>
                                    <option value="Ear, Nose & Throat">Ear, Nose & Throat</option>
                                    <option value="Emergency Medicine">Emergency Medicine</option>
                                    <option value="Ophthalmology">Ophthalmology</option>
                                    <option value="General & Laparoscopic Surgery">General & Laparoscopic Surgery</option>
                                    <option value="Internal Medicine">Internal Medicine</option>
                                    <option value="Obstetrics and Gynecology">Obstetrics and Gynecology</option>
                                    <option value="Nephrology (Treatment of Kidney Conditions)">Nephrology (Treatment of Kidney Conditions)</option>
                                    <option value="Neuro & Spine Surgery (Brain Disorders)">Neuro & Spine Surgery (Brain Disorders)</option>
                                    <option value="Oncology (Treatment of cancer)">Oncology (Treatment of cancer)</option>
                                    <option value="Orthopedics, Joint Replacement & Trauma">Orthopedics, Joint Replacement & Trauma</option>
                                    <option value="Pediatrics">Pediatrics</option>
                                    <option value="Plastic, Cosmetic & Cancer Reconstructive Surgery">Plastic, Cosmetic & Cancer Reconstructive Surgery</option>
                                    <option value="Psychiatry & Deaddiction">Psychiatry & Deaddiction</option>
                                    <option value="Radiology, Imaging & Interventional Radiology">Radiology, Imaging & Interventional Radiology</option>
                                    <option value="Respiratory & Sleep Medicine">Respiratory & Sleep Medicine</option>
                                    <option value="Urology & Andrology ( Endourological surgery, Ultrasound, Microsurgery, Laparoscopic surgery etc.)">Urology & Andrology ( Endourological surgery, Ultrasound, Microsurgery, Laparoscopic surgery etc.)</option>
                                </select>
                            </div>

                            <div class="form-group pb-1 mb-1">
                                <input class="form-control" type="text" id="message" name="message1" placeholder="Message" required>
                            </div>

                            <input name="message" type="hidden" value="" />
                            <input name="utm_source" type="hidden" value="<?= isset($_REQUEST['utm_source']) ? $_REQUEST['utm_source'] : ""; ?>" />
                            <input name="utm_medium" type="hidden" value="<?= isset($_REQUEST['utm_medium']) ? $_REQUEST['utm_medium'] : ""; ?>" />
                            <input name="utm_campaign" type="hidden" value="<?= isset($_REQUEST['utm_campaign']) ? $_REQUEST['utm_campaign'] : ""; ?>" />
                            <input name="utm_term" type="hidden" value="<?= isset($_REQUEST['utm_term']) ? $_REQUEST['utm_term'] : ""; ?>" />
                            <input name="utm_content" type="hidden" value="<?= isset($_REQUEST['utm_content']) ? $_REQUEST['utm_content'] : ""; ?>" />

                            <div class="d-flex justify-content-center">
                                <input class="form_submit_btn w-100" id="submit" type="submit" name="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== Banner End ===== -->

        <!-- ==== Welcome Section ==== -->

        <section class="section welcome-section">
            <div class="container">
                <div class="sec-title">
                    <h2>Welcome to <span class="span-color">Jaipur Hospital</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 title-para my-auto">
                        <p>
                            Welcome to our hospital comparison website! Here, we provide comprehensive information about hospitals in your area,including their services, facilities,
                            and patient satisfaction ratings. We believe that every patient deserves access to the best possible healthcare,and we are here to help you make informed
                            decisions about your medical care.
                        </p>
                        <p>
                            Our website features a user-friendly interface that allows you to easily search for hospitals by location,specialty, and other criteria. You can browse
                            through hospital profiles to learn more about their doctors, services, and amenities.We have also included patient reviews and ratings to give you a sense
                            of how others have experienced the hospital's care.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <img src="assets/img/welcome-img.jpg" alt="" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </section>
        <!-- ==== Welcome Section End ==== -->

        <!-- ==== Discover Section ==== -->


        <section class="section explore-section">
            <div class="container">
                <div class="sec-title">
                    <h2 class="text-white" style="text-shadow: #000 1px 0 10px;">Explore The Best Hospital In Jaipur</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="discover-school-slider">
                            <div class="testimonial-slide">
                                <div class="testimonial_box">
                                    <div class="testimonial_box-inner">
                                        <div class="testimonial_box-top">
                                            <a href="https://jaipurhospitals.com/jnu-hospital.php">

                                                <div class="card-primary">
                                                    <div class="card-body text-center p-1">
                                                        <div class="card-image m-0">
                                                            <img src="assets/img/jnu-Hospital.webp" alt="" class="img-fluid rounded">
                                                        </div>
                                                        <h4 class="card-title mt-2 mb-0">JNU Hospital</h4>
                                                        <p>JNU Hospital Offering an entirely new healthcare experience in India, JNU Hospital Jaipur is a Multi Super Specialty Hospital that seamlessly blends the best principles of the healthcare industry with the latest medical facilities, diagnostic equipment and world-class personnel.</p>
                                                        <a href="https://jaipurhospitals.com/jnu-hospital.php" class="custom-btn my-2">Enquiry Now</a>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial-slide">
                                <div class="testimonial_box">
                                    <div class="testimonial_box-inner">
                                        <div class="testimonial_box-top">

                                            <div class="card-primary">
                                                <div class="card-body text-center p-1">
                                                    <div class="card-image m-0">
                                                        <img src="assets/img/Manipal_Hospital.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                    <h4 class="card-title mt-2 mb-0">Manipal Hospital in Vidhyadhar Nagar, Jaipur</h4>
                                                    <p>Manipal Hospital in Jaipur has a supportive and friendly staff, and the latest medical know-how to help patients. The specialist has also won awards such as Jacob If Jxlg Undefined for the expertise in the field.</p>
                                                    <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial-slide">
                                <div class="testimonial_box">
                                    <div class="testimonial_box-inner">
                                        <div class="testimonial_box-top">

                                            <div class="card-primary">
                                                <div class="card-body text-center p-1">
                                                    <div class="card-image m-0">
                                                        <img src="assets/img/fortis.webp" alt="" class="img-fluid rounded">
                                                    </div>
                                                    <h4 class="card-title mt-2 mb-0">Fortis Escorts Hospital</h4>
                                                    <p>Established in the year 2006, Fortis Escorts Hospital in Malviya Nagar, Jaipur is a top player in the category Hospitals in the Jaipur. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Jaipur. </p>
                                                    <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial-slide">
                                <div class="testimonial_box">
                                    <div class="testimonial_box-inner">
                                        <div class="testimonial_box-top">

                                            <div class="card-primary">
                                                <div class="card-body text-center p-1">
                                                    <div class="card-image m-0">
                                                        <img src="assets/img/apex.webp" alt="" class="img-fluid rounded">
                                                    </div>
                                                    <h4 class="card-title mt-2 mb-0">Apex Hospitals Malviya Nagar</h4>
                                                    <p>Apex Hospitals Malviya Nagar in Jaipur, Jaipur is one of the most renowned Hospitals in the area.Apex Hospitals Malviya Nagar is situated at SP- 4-6, Near Apex Circle, Malviya Industrial Area, which is easily accessible through various modes of transport.</p>
                                                    <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial-slide">
                                <div class="testimonial_box">
                                    <div class="testimonial_box-inner">
                                        <div class="testimonial_box-top">

                                            <div class="card-primary">
                                                <div class="card-body text-center p-1">
                                                    <div class="card-image m-0">
                                                        <img src="assets/img/liberty-hospital-mansarovar.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                    <h4 class="card-title mt-2 mb-0">Liberty Hospital</h4>
                                                    <p>Established in the year 1999, Liberty Hospital in Mansarovar, Jaipur is a top player in the category Private Hospitals in the Jaipur. This well-known establishment acts as a one-stop destination in jaipur.</p>
                                                    <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial-slide">
                                <div class="testimonial_box">
                                    <div class="testimonial_box-inner">
                                        <div class="testimonial_box-top">

                                            <div class="card-primary">
                                                <div class="card-body text-center p-1">
                                                    <div class="card-image m-0">
                                                        <img src="assets/img/mahatma-gandhi.webp" alt="" class="img-fluid rounded">
                                                    </div>
                                                    <h4 class="card-title mt-2 mb-0">Mahatma Gandhi Hospital</h4>
                                                    <p>Mahatma Gandhi Hospital in Sitapura Industrial Area, Jaipur is one of the most renowned Neurological Hospitals in the area. Countless locals in Sitapura Industrial Area have placed immense trust in the practitioner over the years. </p>
                                                    <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
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

        <!-- ==== Discover Section End ==== -->

        <section class="section why-choose-us position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="why-choose-us-left p-4">
                            <h2 class="mb-3"><strong>Why Choose Us:</strong></h2>
                            <p class="pb-3">
                                If you're in the process of selecting a hospital for yourself or a loved one, it can be overwhelming and confusing to know where to start.
                                There are many factors to consider, including the hospital's location, reputation, quality of care, and amenities. That's why we've created
                                a hospital comparison video to help you make an informed decision.
                            </p>
                            <h5 class="mb-3 mt-3">Here are some reasons why you should choose our hospital comparison Website:</h5>
                            <ul>
                                <!-- <li>20+ Years Of Experience</li>
                                <li>0% Hidden Charges</li>
                                <li>FREE One on One Counselling Session</li>
                                <li>100% Online Process</li>
                                <li> 600+ Schools</li> -->
                                <li><strong>Comprehensive comparison:</strong> Our Website provides a comprehensive comparison of various hospitals in your area, including their strengths and weaknesses.
                                    We cover everything from the hospital's reputation and patient satisfaction ratings to their medical expertise and the quality of their facilities.</li>
                                <li><strong>Expert analysis:</strong> Our hospital comparison Website is created by experts in the healthcare industry, who have years of experience working with hospitals
                                    and healthcare systems. They have a deep understanding of what makes a great hospital and can provide valuable insights that can help you make an informed decision.</li>
                                <li><strong>Objective information:</strong> Our hospital comparison Website provides objective information that is based on data and facts. We don't rely on opinions or biases,
                                    so you can trust that the information we provide is accurate and unbiased.</li>
                                <li><strong>Easy to understand:</strong> We understand that healthcare can be complex and difficult to understand. That's why we've created our hospital comparison Website in a way
                                    that is easy to understand, so you can make an informed decision without feeling overwhelmed or confused.</li>
                                <li><strong>Saves you time:</strong> Researching hospitals can be time-consuming and tedious. Our hospital comparison Website saves you time by providing all the information you
                                    need in one place, so you don't have to spend hours searching for it yourself.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- ==== Explore Section ==== -->

        <section class="section secondary-section">
            <div class="container">
                <div class="sec-title">
                    <h2>Explore The Private Hospitals In Jaipur</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <a href="https://jaipurhospitals.com/jnu-hospital.php">
                                    <img src="assets/img/jnu-Hospital.webp" alt="" class="img-fluid rounded">
                                </a>
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">JNU Hospital</h4>
                                <p class="pb-2 mb-2">Jagatpura, Jaipur - 302017</p>
                                <ul class="mb-3">
                                    <li>Otoplasty</li>
                                    <li>Hand Surgery</li>
                                    <li>Breast Implant</li>
                                    <li>Maxillofacial Trauma</li>
                                    <li>Development Assessment</li>
                                    <li>Temporomandibular Joint Disorder</li>
                                    <li>Ear Micro Surgery</li>
                                </ul>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                                <a href="https://jaipurhospitals.com/jnu-hospital.php" class="custom-btn my-2 ml-2">View Details</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">JNU Hospital Offering an entirely new healthcare experience in India, JNU Hospital Jaipur is a Multi Super Specialty Hospital that seamlessly blends the best principles of the healthcare industry with the latest medical facilities, diagnostic equipment and world-class personnel, to set new standards in healthcare service. JNU Hospital listed under Private Hospitals in Jagatpura Getor, Jaipur. Check Visiting Time, Fees, Address, Contact Number, Ratings &amp; Reviews, Photos, Maps etc, on Justdial. Private Hospitals are not owned by the government. They have proven to be a popular choice among many for their quality service, attention to detail and less waiting time. They follow all the required protocols when it comes to patient's safety and hygiene. Their staff are quick in providing help. The majority of healthcare systems in the world frequently include private hospitals. You can find some of the best private hospitals in Jaipur to get your or your loved one's treatment. We strongly recommend you to visit JNU Hospital in Jagatpura Getor, Jaipur for the best services and treatments. They offer services like Otoplasty , Liposuction , Rhinoplasty JNU Hospital has been considered as the best Private Hospitals in the Jaipur, since 2015 .</p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div>

                        <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img src="assets/img/fortis.webp" alt="" class="img-fluid rounded">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">Fortis Escorts Hospital</h4>
                                <p class="pb-2 mb-2">JLN Marg, Malviya Nagar, Jaipur - 302017 (Opposite Clarks Amer Hotel)</p>
                                <ul>
                                    <li>Casualty</li>
                                    <li>Online Report</li>
                                    <li>Operation Theatre</li>
                                    <li>Complete Health Check Up</li>
                                    <li> Centralized Testing Facility Available</li>
                                    <li> 24 Hours Open</li>
                                </ul>
                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Established in the year 2006, Fortis Escorts Hospital in Malviya Nagar, Jaipur is a top player in the category Hospitals in the Jaipur. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Jaipur. Over the course of its journey, this business has established a firm foothold in it’s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Jaipur, this establishment occupies a prominent location in Malviya Nagar. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is at JLN Marg, Opposite Clarks Amer Hotel, which makes it easy for first-time visitors in locating this establishment. It is known to provide top service in the following categories: Hospitals, Paediatricians, Gynaecologist &amp; Obstetrician Doctors, Neurologists, Private Hospitals, Diagnostic Centres, Gastroenterologists, General Physician Doctors.
                                </p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div>

                        <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img src="assets/img/manipal.webp" alt="" class="img-fluid rounded">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">Manipal Hospital</h4>
                                <p class="pb-2 mb-2">Main Sikar Road, Vidhyadhar Nagar, Jaipur - 302039 (Near Sector-5)</p>
                                <ul>
                                    <li>Hypertension Treatment</li>
                                    <li>Laminectomy</li>
                                    <li>Septoplasty</li>
                                    <li>BP Monitoring</li>
                                    <li> Tonsillectomy</li>
                                    <li> Foot Infection</li>
                                </ul>
                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Manipal Hospital in Vidhyadhar Nagar, Jaipur is one of the most renowned Hospitals in the area. Countless locals in Vidhyadhar Nagar have placed immense trust in the practitioner over the years. Manipal Hospital is situated at Near Sector-5, Main Sikar Road, Vidhyadhar Nagar-302039 near Sector-5, which is easily accessible through various modes of transport.

                                </p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div>

                        <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img src="assets/img/apex.webp" alt="" class="img-fluid rounded">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">Apex Hospitals Malviya Nagar</h4>
                                <p class="pb-2 mb-2">SP- 4-6, Malviya Industrial Area, Jaipur, Jaipur - 302021 (Near Apex Circle)</p>
                                <ul>
                                    <li>Hospital</li>
                                    <li>Nursery Icu</li>
                                    <li>Dialysis Unit</li>
                                    <li>Dialysis Chair</li>
                                    <li> Heart Institute</li>
                                    <li> Laser Technology</li>
                                </ul>
                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Apex Hospitals Malviya Nagar in Jaipur, Jaipur is one of the most renowned Hospitals in the area. The specialist has in-depth knowledge of related areas of specialization like Oncologist, Cardiologists, Urologists, Neurologist, Dermatologists, Gastroenterologist, Gynaecologist &amp; Obstetrician Doctors, Orthopaedic Surgeons, General Surgeon, General Physicians, Dentists, ENT Doctors, pediatrician, Radiology &amp; Diagnostics, Psychiatrist, pediatrician etc. Countless locals in Jaipur have placed immense trust in the practitioner over the years. Apex Hospitals Malviya Nagar is situated at SP- 4-6, Near Apex Circle, Malviya Industrial Area, Jaipur-302021 near Apex Circle, which is easily accessible through various modes of transport.
                                </p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div>

                        <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img src="assets/img/mahatma-gandhi.webp" alt="" class="img-fluid rounded">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">Mahatma Gandhi Hospital</h4>
                                <p class="pb-2 mb-2">Tonk Road, Sitapura Industrial Area, Jaipur - 302022</p>
                                <ul>
                                    <li>24 Hours Open</li>
                                    <li>Fistula Treatment</li>
                                    <li>Diabetology</li>
                                    <li>Blood Group Test</li>
                                    <li> Gastro Intestinal Surgeon</li>
                                    <li> Liver Surgery</li>
                                </ul>
                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Mahatma Gandhi Hospital in Sitapura Industrial Area, Jaipur is one of the most renowned Neurological Hospitals in the area. Countless locals in Sitapura Industrial Area have placed immense trust in the practitioner over the years. Mahatma Gandhi Hospital is situated at Tonk Road, Sitapura Industrial Area-302022 which is easily accessible through various modes of transport.
                                </p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div>

                        <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img src="assets/img/mittal.webp" alt="" class="img-fluid rounded">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">Mittal Hospital & Research Centre</h4>
                                <p class="pb-2 mb-2">Vidhyadhar Nagar, Jaipur</p>
                                <ul>
                                    <li>Anomaly Scan</li>
                                    <li>Abdominal Ultrasound</li>
                                    <li>Digital Ultrasound Services</li>
                                    <li>Gynae Cancer</li>
                                    <li>Menopause Clinic </li>
                                    <li> Fistula Surgery</li>
                                </ul>
                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Established in the year 2006, Mittal Hospital &amp; Research Centre in Vidhyadhar Nagar, Jaipur is a top player in the category Research Centres in the Jaipur. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Jaipur. Over the course of its journey, this business has established a firm foothold in it’s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Jaipur, this establishment occupies a prominent location in Vidhyadhar Nagar. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is at Sector 10, Near RTO OFFICE, which makes it easy for first-time visitors in locating this establishment. It is known to provide top service in the following categories: Gynaecologist &amp; Obstetrician Doctors, Paediatricians, Private Hospitals, General Surgeon Doctors, Physiotherapists, Pathology Labs, Piles Doctors, Infertility Doctors.
                                </p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div>

                        <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img src="assets/img/manglam-plus-medicity.avif" alt="" class="img-fluid rounded">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">Manglam Plus Medicity Hospital</h4>
                                <p class="pb-2 mb-2">Mansarovar, Jaipur</p>
                                <ul>
                                    <li>Cardiology</li>
                                    <li>Cardio Thoracic Surgery</li>
                                    <li>PEREPHERAL VASCULAR</li>
                                    <li>Urology</li>
                                    <li>Ogd Scopy</li>
                                    <li> Arthroscopy</li>
                                </ul>
                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Established in the year 2021, Manglam Plus Medicity Hospital in Mansarovar, Jaipur is a top player in the category Private Hospitals in the Jaipur. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Jaipur. Over the course of its journey, this business has established a firm foothold in it’s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Jaipur, this establishment occupies a prominent location in Mansarovar. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is known to provide top service in the following categories: Hospitals, Paediatricians, Gynaecologist &amp; Obstetrician Doctors, Neurologists, Private Hospitals, Gastroenterologists, General Physician Doctors, Orthopaedic Doctors.
                                </p>

                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div>

                        <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img src="assets/img/neuro-care-hospital.webp" alt="" class="img-fluid rounded">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">Neuro Care Hospital & Research Centre Pvt Ltd</h4>
                                <p class="pb-2 mb-2">Vidhyadhar Nagar, Jaipur</p>
                                <ul>
                                    <li>Neurology</li>
                                    <li>Pediatric Neurology</li>
                                    <li>All Forms of Neuro-Psychiatric and Behavioral Disorders</li>

                                </ul>
                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Established in the year 2013, Neuro Care Hospital &amp; Research Centre Pvt Ltd in Vidhyadhar Nagar, Jaipur is a top player in the category Hospitals in the Jaipur. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Jaipur. Over the course of its journey, this business has established a firm foothold in it’s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Jaipur, this establishment occupies a prominent location in Vidhyadhar Nagar. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is at Sector - 1, Near MGPS School, Near Dwarka Sweets, which makes it easy for first-time visitors in locating this establishment. It is known to provide top service in the following categories: Hospitals, Neurologists, Neurosurgeons, Private Hospitals, Neuro Physician Doctors, Spine Surgeons, Neurological Hospitals, Multispeciality Hospitals.

                                </p>

                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div>

                        <!-- <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img class="img-fluid rounded" src="assets/img/Sunil-Hospital.jpg">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">Sunil Hospital Saipura</h4>
                                <p class="pb-2 mb-2">Tilak Nagar, Jaipur</p>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Healthcare is something that can’t be compromised, can it? Hospitals have a huge role to play in developing the healthcare system of any country because, with a growing population, the healthcare demands too are growing and evolving. Providing the highest standard of care for both, minor and major health issues, hospitals create a safe space for the patients by offering end-to-end clinical, surgical, and diagnostic services.
                                    Hospitals have been making healthcare accessible to one and all and Sunil Hospital Saipura in Tilak Nagar, Jaipur is one such reliable hospital that is committed to providing expert medical care. Having established a firm presence as a trusted name in Hospitals, it is renowned for offering specialised services and treatments
                                    Sunil Hospital Saipura in Tilak Nagar, Jaipur is one of the most renowned Hospitals in the area. Countless locals in Tilak Nagar have placed immense trust in the practitioner over the years. Sunil Hospital Saipura is situated at Saipura, Chawand Ma Mand, Jamwa Ramgarh Road, , Near Jawahar Nagar Tuti Poliya, A-56a Shanti Path, Tilak Nagar-302004 near Jawahar Nagar Tuti Poliya, which is easily accessible through various modes of transport.
                                    Sunil Hospital Saipura in Jaipur has a supportive and friendly staff, and the latest medical know-how to help patients. The clinic abides by all the necessary safety protocols, including Covid-19 precautionary measures. The doctor and team offer world-class care and guidance, always putting their patients first.
                                    If you’re planning to visit Sunil Hospital Saipura in the near future, it’s advisable to book an appointment in advance to avoid waiting time. The hours of operation are 00:00 - 23:59.
                                    The clinic accepts payments through multiple modes of payment like Cash, making it easy and convenient for patients.
                                </p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div> -->

                        <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img src="assets/img/RN-hospital.jpg" class="img-fluid rounded">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">R N Multispeciality Hospital</h4>
                                <p class="pb-2 mb-2">Nirman Nagar, Jaipur</p>
                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Private Hospitals are not owned by the government. They have proven to be a popular choice among many for their quality service, attention to detail and less waiting time. They follow all the required protocols when it comes to patient's safety and hygiene. Their staff are quick in providing help. The majority of healthcare systems in the world frequently include private hospitals.
                                    You can find some of the best private hospitals in Jaipur to get your or your loved one's treatment. We strongly recommend you to visit R N Multispeciality Hospital in Nirman Nagar, Jaipur for the best services and treatments.
                                    Healthcare is something that can’t be compromised, can it? Hospitals have a huge role to play in developing the healthcare system of any country because, with a growing population, the healthcare demands too are growing and evolving. Providing the highest standard of care for both, minor and major health issues, hospitals create a safe space for the patients by offering end-to-end clinical, surgical, and diagnostic services.
                                    Hospitals have been making healthcare accessible to one and all and R N Multispeciality Hospital in Nirman Nagar, Jaipur is one such reliable hospital that is committed to providing expert medical care. Having established a firm presence as a trusted name in Private Hospitals, it is renowned for offering specialised services and treatments
                                    R N Multispeciality Hospital in Nirman Nagar, Jaipur is one of the most renowned Private Hospitals in the area. Countless locals in Nirman Nagar have placed immense trust in the practitioner over the years. R N Multispeciality Hospital is situated at 109-110, Shiv Shakti Nagar, Near Mansarovar Metro Station, Main Kings Road, Nirman Nagar-302019 near Mansarovar Metro Station, which is easily accessible through various modes of transport.
                                    R N Multispeciality Hospital in Jaipur has a supportive and friendly staff, and the latest medical know-how to help patients. The clinic abides by all the necessary safety protocols, including Covid-19 precautionary measures. The doctor and team offer world-class care and guidance, always putting their patients first.
                                    If you’re planning to visit R N Multispeciality Hospital in the near future, it’s advisable to book an appointment in advance to avoid waiting time. The hours of operation are 00:00 - 23:59.
                                    The clinic accepts payments through multiple modes of payment like Cash, Debit Cards, Cheques, Credit Card, making it easy and convenient for patients.
                                </p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div>

                        <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img src="assets/img/bhansal-hospital.jpg" class="img-fluid rounded">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">Bansal Hospital</h4>
                                <p class="pb-2 mb-2">Shyamnagar, Jaipur</p>
                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Private Hospitals are not owned by the government. They have proven to be a popular choice among many for their quality service, attention to detail and less waiting time. They follow all the required protocols when it comes to patient's safety and hygiene. Their staff are quick in providing help. The majority of healthcare systems in the world frequently include private hospitals.
                                    You can find some of the best private hospitals in Jaipur to get your or your loved one's treatment. We strongly recommend you to visit Bansal Hospital in Shyamnagar, Jaipur for the best services and treatments.
                                    Healthcare is something that can’t be compromised, can it? Hospitals have a huge role to play in developing the healthcare system of any country because, with a growing population, the healthcare demands too are growing and evolving. Providing the highest standard of care for both, minor and major health issues, hospitals create a safe space for the patients by offering end-to-end clinical, surgical, and diagnostic services.
                                    Hospitals have been making healthcare accessible to one and all and Bansal Hospital in Shyamnagar, Jaipur is one such reliable hospital that is committed to providing expert medical care. Having established a firm presence as a trusted name in Private Hospitals, it is renowned for offering specialised services and treatments.
                                    Bansal Hospital in Shyamnagar, Jaipur is one of the most renowned Private Hospitals in the area. Countless locals in Shyamnagar have placed immense trust in the practitioner over the years. Bansal Hospital is situated at B-106, Near Dana Pani Restaurant, Janpath, Shyamnagar-302019 near Dana Pani Restaurant, which is easily accessible through various modes of transport.
                                    Bansal Hospital in Jaipur has a supportive and friendly staff, and the latest medical know-how to help patients. The clinic abides by all the necessary safety protocols, including Covid-19 precautionary measures. The doctor and team offer world-class care and guidance, always putting their patients first.
                                    If you’re planning to visit Bansal Hospital in the near future, it’s advisable to book an appointment in advance to avoid waiting time. The hours of operation are 00:00 - 23:59.
                                    The clinic accepts payments through multiple modes of payment like Cash, Debit Cards, Cheques, Credit Card, UPI, Paytm, BHIM, making it easy and convenient for patients.
                                </p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div>

                        <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img src="assets/img/Shekhawati_Hospital.jpg" class="img-fluid rounded">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">Shekhawati Hospital & Research Centre</h4>
                                <p class="pb-2 mb-2">Vidhyadhar Nagar, Jaipur</p>
                                <ul>
                                    <li>Heart Conditions</li>
                                    <li>Gastroenterologist</li>
                                    <li>Chest Pain Treatment</li>
                                    <li>Urology</li>
                                    <li>Arthroscopy</li>
                                    <li>Laminectomy</li>
                                    <li>Opd Services</li>
                                </ul>
                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Established in the year 2006, Shekhawati Hospital & Research Centre in Vidhyadhar Nagar, Jaipur is a top player in the category Hospitals in the Jaipur. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Jaipur. Over the course of its journey, this business has established a firm foothold in it’s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Jaipur, this establishment occupies a prominent location in Vidhyadhar Nagar. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is at , Opposite Time Square , Sector 2, which makes it easy for first-time visitors in locating this establishment. It is known to provide top service in the following categories: Hospitals, Neurologists, Gynaecologist & Obstetrician Doctors, Gastroenterologists, Dermatologists, ENT Doctors, Paediatricians, General Physician Doctors.
                                    Shekhawati Hospital & Research Centre in Vidhyadhar Nagar has a wide range of products and / or services to cater to the varied requirements of their customers. The staff at this establishment are courteous and prompt at providing any assistance. They readily answer any queries or questions that you may have. Pay for the product or service with ease by using any of the available modes of payment, such as Cash, Debit Cards, Cheques, Credit Card, Paytm, Card on Delivery, Amex Card. This establishment is functional from 00:00 - 23:59.
                                    Please scroll to the top for the address and contact details of Shekhawati Hospital & Research Centre at Vidhyadhar Nagar, Jaipur.
                                </p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div>

                        <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img src="assets/img/Prithasavi-Hospitals.jpg" class="img-fluid rounded">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">Prithasavi Hospitals Pvt Ltd</h4>
                                <p class="pb-2 mb-2">Jagatpura Getor, Jaipur</p>
                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Private Hospitals are not owned by the government. They have proven to be a popular choice among many for their quality service, attention to detail and less waiting time. They follow all the required protocols when it comes to patient's safety and hygiene. Their staff are quick in providing help. The majority of healthcare systems in the world frequently include private hospitals.
                                    You can find some of the best private hospitals in Jaipur to get your or your loved one's treatment. We strongly recommend you to visit Prithasavi Hospitals Pvt Ltd in Jagatpura Getor, Jaipur for the best services and treatments.
                                    Healthcare is something that can’t be compromised, can it? Hospitals have a huge role to play in developing the healthcare system of any country because, with a growing population, the healthcare demands too are growing and evolving. Providing the highest standard of care for both, minor and major health issues, hospitals create a safe space for the patients by offering end-to-end clinical, surgical, and diagnostic services.
                                    Hospitals have been making healthcare accessible to one and all and Prithasavi Hospitals Pvt Ltd in Jagatpura Getor, Jaipur is one such reliable hospital that is committed to providing expert medical care. Having established a firm presence as a trusted name in Private Hospitals, it is renowned for offering specialised services and treatments
                                    Prithasavi Hospitals Pvt Ltd in Jagatpura Getor, Jaipur is one of the most renowned Private Hospitals in the area. Countless locals in Jagatpura Getor have placed immense trust in the practitioner over the years. Prithasavi Hospitals Pvt Ltd is situated at 10A, Brij Vihar Extension, Near Jagat Pura Flyover, Mahal Road, Jagatpura Getor-302017 near Jagat Pura Flyover, which is easily accessible through various modes of transport.
                                    Prithasavi Hospitals Pvt Ltd in Jaipur has a supportive and friendly staff, and the latest medical know-how to help patients. The clinic abides by all the necessary safety protocols, including Covid-19 precautionary measures. The doctor and team offer world-class care and guidance, always putting their patients first.
                                    If you’re planning to visit Prithasavi Hospitals Pvt Ltd in the near future, it’s advisable to book an appointment in advance to avoid waiting time. The hours of operation are 00:00 - 23:59.
                                    The clinic accepts payments through multiple modes of payment like Cash, Debit Cards, Credit Card, American Express Card, making it easy and convenient for patients.
                                </p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div>

                        <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img src="assets/img/Tilak-hospital.jpg" class="img-fluid rounded">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">Tilak Hospital & Research Centre</h4>
                                <p class="pb-2 mb-2">Agra Road, Jaipur</p>
                                <ul>
                                    <li>24 Hours Open</li>
                                    <li>HIV Testing</li>
                                    <li>Blood Group Test</li>
                                    <li>Diagnostic And Pathology</li>
                                    <li>Urology</li>
                                    <li>Diabetology</li>
                                </ul>

                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Private Hospitals are not owned by the government. They have proven to be a popular choice among many for their quality service, attention to detail and less waiting time. They follow all the required protocols when it comes to patient's safety and hygiene. Their staff are quick in providing help. The majority of healthcare systems in the world frequently include private hospitals.
                                    You can find some of the best private hospitals in Jaipur to get your or your loved one's treatment. We strongly recommend you to visit Tilak Hospital & Research Centre in Agra Road, Jaipur for the best services and treatments. They offer services like HIV Testing , Blood Group Test , Diagnostic And Pathology Tilak Hospital & Research Centre has been considered as the best Private Hospitals in the Jaipur, since 2011 .
                                    Established in the year 2011, Tilak Hospital & Research Centre in Agra Road, Jaipur is a top player in the category Private Hospitals in the Jaipur. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Jaipur. Over the course of its journey, this business has established a firm foothold in it’s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Jaipur, this establishment occupies a prominent location in Agra Road. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is at Chanakya Puri, Chanakya Puri, Paldi Meena, which makes it easy for first-time visitors in locating this establishment. It is known to provide top service in the following categories: Hospitals, Gynaecologist & Obstetrician Doctors, ENT Doctors, General Physician Doctors, Orthopaedic Doctors, Diagnostic Centres, Urologist Doctors, Dentists.
                                    Tilak Hospital & Research Centre in Agra Road has a wide range of products and / or services to cater to the varied requirements of their customers. The staff at this establishment are courteous and prompt at providing any assistance. They readily answer any queries or questions that you may have. Pay for the product or service with ease by using any of the available modes of payment, such as Cash, Cheques. This establishment is functional from 00:00 - 23:59.
                                    Please scroll to the top for the address and contact details of Tilak Hospital & Research Centre at Agra Road, Jaipur.
                                </p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div>

                        <!-- <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img class="img-fluid rounded" src="assets/img/mittal-maternity.jpg">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">Mittal Maternity & General Clinic</h4>
                                <p class="pb-2 mb-2">Panchyawala, Jaipur</p>
                                <ul>
                                    <li>Malaria Treatment</li>
                                    <li>Endocrinology Test Available</li>
                                    <li>Obstetrics Problems</li>
                                    <li>Infectious Disease Treatment</li>
                                    <li> Preventive Medicine</li>
                                    <li>Thyroid Specialist</li>
                                </ul>
                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Healthcare is something that can’t be compromised, can it? Hospitals have a huge role to play in developing the healthcare system of any country because, with a growing population, the healthcare demands too are growing and evolving. Providing the highest standard of care for both, minor and major health issues, hospitals create a safe space for the patients by offering end-to-end clinical, surgical, and diagnostic services.
                                </p>

                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div> -->

                        <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img class="img-fluid" src="assets/img/Balaji-Hospital.JPG">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">Balaji Multispeciality Hospital</h4>
                                <p class="pb-2 mb-2">Sirsi Road, Jaipur</p>
                                <ul>
                                    <li>Arthroplasty</li>
                                    <li>Sonography</li>
                                    <li>Urology</li>
                                    <li>Post Surgery Physiotherapy</li>
                                    <li> Adolescent Medicine</li>
                                </ul>
                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Established in the year 2017, Balaji Multispeciality Hospital in Sirsi Road, Jaipur is a top player in the category Multispeciality Hospitals in the Jaipur. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Jaipur. Over the course of its journey, this business has established a firm foothold in it’s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Jaipur, this establishment occupies a prominent location in Sirsi Road. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is at Kanakpura Bus Stand, Near Kanakpura Bus Stand, which makes it easy for first-time visitors in locating this establishment. It is known to provide top service in the following categories: Hospitals, Gynaecologist &amp; Obstetrician Doctors, Gastroenterologists, ENT Doctors, Paediatricians, General Physician Doctors, Orthopaedic Doctors, Urologist Doctors.
                                </p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div>

                        <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img class="img-fluid rounded" src="assets/img/shri-ram.jpg">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">Shri Ram Hospital & Eye Care Center</h4>
                                <p class="pb-2 mb-2">Rampura Dabri, Jaipu</p>
                                <ul>
                                    <li>24 Hours Open</li>
                                    <li>Diagnostic And Pathology</li>
                                    <li>Eye Surgery</li>
                                    <li>Dental Surgeon</li>
                                    <li> Child Specialist</li>
                                    <li> Braces Adjustment</li>
                                </ul>
                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Shri Ram Hospital &amp; Eye Care Center in Rampura Dabri, Jaipur is one of the most renowned Hospitals in the area. Countless locals in Rampura Dabri have placed immense trust in the practitioner over the years. Shri Ram Hospital &amp; Eye Care Center is situated at Jahota Road Bus Stand, Rampura Dabari, Rampura Dabri-303704 which is easily accessible through various modes of transport.
                                </p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div>

                        <!-- <div class="row mb-4 hospital-details">
                            <div class="col-4 hospital-image">
                                <img class="img-fluid rounded" src="assets/img/archana-hospital.png">
                            </div>
                            <div class="col-8">
                                <h4 class="hospital_title pb-1 mb-1">Archana Hospital</h4>
                                <p class="pb-2 mb-2">Jhotwara, Jaipur</p>
                                <ul>
                                    <li>Fungal Infection Treatment</li>
                                    <li>Viral Fever Treatment</li>
                                    <li>Neck Pain Treatment</li>
                                    <li>Child Specialist</li>
                                    <li>Skin Checks</li>
                                </ul>

                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Archana Hospital in Jhotwara, Jaipur is one of the most renowned Children Hospitals in the area. Countless locals in Jhotwara have placed immense trust in the practitioner over the years. Archana Hospital is situated at Plat No 208 A, Near By 200 Ft Bypaas, 21 St South Colony Rajendra Path Nivaru Road, Jhotwara-302012 near By 200 Ft Bypaas, which is easily accessible through various modes of transport.
                                </p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div> -->

                        <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img class="img-fluid rounded" src="assets/img/abhishek-hospital.jpg">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">Abhishek Hospital Laser & Cosmetic Surgery Centre</h4>
                                <p class="pb-2 mb-2">Moti Dungri, Jaipurr</p>
                                <ul>
                                    <li>Vaginoplasty</li>
                                    <li>Nephrology</li>
                                    <li>Urology</li>
                                    <li>Hormone Therapy for Breast Cancer</li>
                                    <li>
                                        Mesolipolysis</li>
                                </ul>
                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Abhishek Hospital Laser &amp; Cosmetic Surgery Centre in Moti Dungri, Jaipur is one of the most renowned Hospitals in the area. Countless locals in Moti Dungri have placed immense trust in the practitioner over the years. Abhishek Hospital Laser &amp; Cosmetic Surgery Centre is situated at 3-B-III, Near Dharam Singh Circle, Moti Dungri Raod, Moti Dungri-302004 near Dharam Singh Circle, which is easily accessible through various modes of transport.
                                </p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div>

                        <!-- <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img class="img-fluid rounded" src="assets/img/goyal-hospita.jpg">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">Goyal Hospital</h4>
                                <p class="pb-2 mb-2">Agra Road, Jaipurr</p>
                                <ul>
                                    <li>Urine Test</li>
                                    <li>Complete Health Check Up</li>
                                    <li>Parking Available</li>
                                    <li>Air Conditioned</li>
                                </ul>
                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Goyal Hospital in Agra Road, Jaipur is one of the most renowned Hospitals in the area. Countless locals in Agra Road have placed immense trust in the practitioner over the years. Goyal Hospital is situated at Goyal Hospital, Near Purani Chungi, Purani Chungi Agra Road, Agra Road-302004 near Purani Chungi, which is easily accessible through various modes of transport.
                                </p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div> -->

                        <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img class="img-fluid rounded" src="assets/img/vaishali-hospital.jpg">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">Vaishali Hospital & Surgical Research Centre</h4>
                                <p class="pb-2 mb-2">Vaishali Nagar, JAIPUR</p>
                                <ul>
                                    <li>Abdominal Surgery</li>
                                    <li>Gi And Hpb Surgery</li>
                                    <li>Vertigo Treatment</li>
                                    <li>Bariatric Surgeon</li>
                                    <li>Fistula Surgery</li>
                                </ul>
                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Established in the year 1999, Vaishali Hospital &amp; Surgical Research Centre in Vaishali Nagar, Jaipur is a top player in the category Private Hospitals in the Jaipur. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Jaipur. Over the course of its journey, this business has established a firm foothold in it’s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Jaipur, this establishment occupies a prominent location in Vaishali Nagar. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is at Nand Vihar,Amrpali Marg, Near Under Bridge, which makes it easy for first-time visitors in locating this establishment. It is known to provide top service in the following categories: Hospitals, Gynaecologist &amp; Obstetrician Doctors, ENT Doctors, Orthopaedic Doctors, Urologist Doctors, Dentists, Private Hospitals, Sexologist Doctors.
                                </p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div>

                        <!-- <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img class="img-fluid rounded" src="assets/img/chiranjeevi-hospital.jpg">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">Chiranjeevi Multispeciality Hospital</h4>
                                <p class="pb-2 mb-2">Kalwad, JaipurRAMKUTIYA, Kalwad, Jaipur - 303706 (Oppoite Ashiana Manglam)</p>
                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Established in the year 2018, Chiranjeevi Multispeciality Hospital in Kalwad, Jaipur is a top player in the category Hospitals in the Jaipur. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Jaipur. Over the course of its journey, this business has established a firm foothold in it’s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Jaipur, this establishment occupies a prominent location in Kalwad. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is at , Oppoite Ashiana Manglam, which makes it easy for first-time visitors in locating this establishment. It is known to provide top service in the following categories: Hospitals, Gynaecologist &amp; Obstetrician Doctors, Paediatricians, General Physician Doctors, Orthopaedic Doctors, Urologist Doctors, Dentists, Private Hospitals.
                                </p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div> -->

                        <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img class="img-fluid rounded" src="assets/img/liberty-hospital-mansarovar.jpg">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">Liberty Hospital</h4>
                                <p class="pb-2 mb-2">Mansarovar, Jaipur</p>
                                <ul>
                                    <li>Myomectomy</li>
                                    <li>Lithotripsy</li>
                                    <li>Hand Surgery</li>
                                    <li>Spine Surgery</li>
                                    <li>Fistula Surgery</li>
                                </ul>
                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Established in the year 1999, Liberty Hospital in Mansarovar, Jaipur is a top player in the category Private Hospitals in the Jaipur. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Jaipur. Over the course of its journey, this business has established a firm foothold in it’s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Jaipur, this establishment occupies a prominent location in Mansarovar. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is at Tagore Path, Thadi Market, which makes it easy for first-time visitors in locating this establishment. It is known to provide top service in the following categories: Hospitals, Gynaecologist &amp; Obstetrician Doctors, Private Hospitals, General Physician Doctors, Orthopaedic Doctors, Urologist Doctors, General Surgeon Doctors, Multispeciality Hospitals.
                                    <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div>

                        <div class="row mb-4 hospital-details">
                            <div class="col-4 hospital-image">
                                <img class="img-fluid rounded" src="assets/img/Dhanwantri-hospital.jpg">
                            </div>
                            <div class="col-8">
                                <h4 class="hospital_title pb-1 mb-1">Dhanwantri Hospital & Research Centre</h4>
                                <p class="pb-2 mb-2">Mansarovar, Jaipur
                                </p>
                                <ul>
                                    <li>Loose Motion Treatment</li>
                                    <li>Cashless Type</li>
                                    <li>Arthroplasty</li>
                                    <li>Limb Lengthening</li>
                                    <li>Shoulder Replacement</li>
                                </ul>
                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Dhanwantri Hospital &amp; Research Centre in Mansarovar, Jaipur is one of the most renowned Private Hospitals in the area.
                                    Countless locals in Mansarovar have placed immense trust in the practitioner over the years. Dhanwantri Hospital &amp;
                                    Research Centre is situated at A-67/56, Near Mandara Bus Stand, New Sanganer Road, Mansarovar-302020 near Mandara Bus Stand,
                                    which is easily accessible through various modes of transport.
                                </p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div>

                        <!-- <div class="row mb-4 hospital-details">
                            <div class="col-4 hospital-image">
                                <img class="img-fluid rounded" src="assets/img/radha-general-hospital.jpg">
                            </div>
                            <div class="col-8">
                                <h4 class="hospital_title pb-1 mb-1">Radha Nursing Home & General Hospital</h4>
                                <p class="pb-2 mb-2">Agra Road, JaipurrJhotwara, Jaipur</p>
                                <ul>
                                    <li>Cancer Pain Management</li>
                                    <li>Cancer Treatment</li>
                                    <li>Gynecology Problems</li>
                                    <li>Loose Motion Treatment</li>
                                    <li>Diagnostic Radiology and Imaging</li>
                                </ul>
                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Radha Nursing Home &amp; General Hospital in Jhotwara, Jaipur is one of the most renowned Hospitals in the area. Countless locals in Jhotwara have placed immense trust in the practitioner over the years. Radha Nursing Home &amp; General Hospital is situated at Plot -14 - A, Main Tiraha, Main Kalwar Road , Joshi Marg, Jhotwara-302012 near Main Tiraha, which is easily accessible through various modes of transport.
                                </p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div> -->

                        <div class="row mb-4 hospital-details">
                            <div class="col-lg-4 hospital-image">
                                <img class="img-fluid rounded" src="assets/img/swastic-multi-speciality.jpg">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="hospital_title pb-1 mb-1">Swastik Multispeciality Hospital</h4>
                                <p class="pb-2 mb-2">Dudu, Jaipur</p>
                                <ul>
                                    <li>Eye Surgery</li>
                                    <li>Headache Management</li>
                                    <li>Typhoid Fever Treatment</li>
                                    <li>Hypertension Management</li>
                                    <li>Height Problems</li>
                                </ul>

                                <br>
                                <a href="#enquiry" class="custom-btn my-2">Enquiry Now</a>
                            </div>
                            <div class="col-12">
                                <p id="content" class="hospital-content">
                                    Established in the year 2012, Swastik Multispeciality Hospital in Dudu, Jaipur is a top player in the category Hospitals in the Jaipur. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Jaipur. Over the course of its journey, this business has established a firm foothold in it’s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Jaipur, this establishment occupies a prominent location in Dudu. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is known to provide top service in the following categories: Hospitals, Private Hospitals, General Physician Doctors, Eye Hospitals, Ophthalmologists, General Surgeon Doctors, Eye Surgeon Doctors, Dental Hospitals.
                                </p>
                                <button id="read-more-btn" onclick="toggleReadMore(this,this.parentElement)">Read More</button>
                            </div>
                        </div>

                    </div>
                </div>
        </section>

        <!-- ====  Explore Section End ==== -->


        <section class="section contact-section" style="background-color: aliceblue;">
            <div class="container">
                <div class="sec-title">
                    <h2>Have any query?</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="contact-form">
                            <form action="mail.php" method="post" id="">
                                <div class="form-group row">
                                    <div class="mb-3 col-lg-6">
                                        <label for="FormControlName" class="form-label">Name</label>
                                        <input type="text" value="" class="form-control" id="FormControlName" name="fname" required>
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="FormControlEmail" class="form-label">Email</label>
                                        <input type="email" value="" class="form-control" id="FormControlEmail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Ener a valid email id. (e.g. :  emailid@example.com)" required>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="FormControlNumber" class="form-label">Phone No.</label>
                                        <input type="text" value="" class="form-control" id="FormControlNumber" name="phone" pattern="[0-9]{10}" title="Should be 10 digit number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="10" maxlength="10" required>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="FormControlTextarea" class="form-label">Message</label>
                                        <textarea class="form-control" id="FormControlTextarea" rows="3" name="message"></textarea>
                                    </div>

                                    <input name="city" type="hidden" value="" />
                                    <input name="utm_source" type="hidden" value="<?= isset($_REQUEST['utm_source']) ? $_REQUEST['utm_source'] : ""; ?>" />
                                    <input name="utm_medium" type="hidden" value="<?= isset($_REQUEST['utm_medium']) ? $_REQUEST['utm_medium'] : ""; ?>" />
                                    <input name="utm_campaign" type="hidden" value="<?= isset($_REQUEST['utm_campaign']) ? $_REQUEST['utm_campaign'] : ""; ?>" />
                                    <input name="utm_term" type="hidden" value="<?= isset($_REQUEST['utm_term']) ? $_REQUEST['utm_term'] : ""; ?>" />
                                    <input name="utm_content" type="hidden" value="<?= isset($_REQUEST['utm_content']) ? $_REQUEST['utm_content'] : ""; ?>" />
                                    <div class="mb-3 col-12 text-center">
                                        <button type="submit" class="custom-btn btn-lg w-50">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==== Testimonial ==== -->
        <!-- <section class="section testmonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="h-100"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="testimonial-right-title">
                            <h2>Our Testimonial</h2>
                        </div>
                        <div class="card-customt-testimonial">
                            <div class="testimonial__inner">
                                <div class="testimonial-slider">
                                    <div class="testimonial-slide">
                                        <div class="testimonial_box">
                                            <div class="testimonial_box-inner">
                                                <div class="testimonial_box-top">

                                                    <div class="testimonial_box-img">
                                                       
                                                        <div class="testimonial_box-name text-center">
                                                            <h4>Kapil Mishra</h4>
                                                            <p class="mt-2">Parent</p>
                                                        </div>

                                                    </div>

                                                    <div class="testimonial_box-text text-center">
                                                        <p>My experience with SchoolKhojo was awesome. The counsellors are
                                                            very helpful and polite. They made me
                                                            comfortable, and I felt I could easily discuss any queries. With
                                                            their help, I was able to find a good quality
                                                            school for my son</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-slide">
                                        <div class="testimonial_box">
                                            <div class="testimonial_box-inner">
                                                <div class="testimonial_box-top">

                                                    <div class="testimonial_box-img">
                                                      
                                                        <div class="testimonial_box-name text-center">
                                                            <h4>Gurpreet Kaur</h4>
                                                            <p class="mt-2">Parent</p>
                                                        </div>

                                                    </div>

                                                    <div class="testimonial_box-text text-center">
                                                        <p>Last year, I shifted from Delhi to Jaipur with my twin daughters.
                                                            Living on the outer side of Jaipur has been quite
                                                            enjoyable, except for the daily travel during peak times. This year,
                                                            I decided to place my daughters in a better
                                                            school - one that's near me and offers better quality of education.
                                                            Thanks to BrandName, I quickly found the best
                                                            pre-primary school in Jaipur. I was afraid it would take a lot of
                                                            time. But their incredible team made everything
                                                            simple and smooth. Great job, guys!</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-slide">
                                        <div class="testimonial_box">
                                            <div class="testimonial_box-inner">
                                                <div class="testimonial_box-top">

                                                    <div class="testimonial_box-img">
                                                   
                                                        <div class="testimonial_box-name text-center">
                                                            <h4> Nirmala Devi</h4>
                                                            <p class="mt-2">Principal</p>
                                                        </div>

                                                    </div>

                                                    <div class="testimonial_box-text text-center">
                                                        <p>Highly satisfied with their process. Thank you for placing our school
                                                            on your list of top institutes! Wish you all
                                                            the best!</p>
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

            </div>
        </section> -->
        <!-- ==== Testimonial End -->

        <!-- ==== FAQ Section ==== -->
        <section class="section">
            <div class="container">
                <div class="sec-title">
                    <h2>Frequently Asked Question</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="accordions-wrapper">
                            <div class="accordion">
                                <div class="accordion-header">
                                    <h4>What services does the hospital offer?</h4>
                                    <i class="fas fa-chevron-down accordion-icon"></i>
                                </div>

                                <div class="accordion-body">
                                    <p>The hospital website should have a list of services offered by the hospital, which may include medical specialties, diagnostic tests, surgical procedures, and other treatments.</p>
                                </div>
                            </div>

                            <div class="accordion">
                                <div class="accordion-header">
                                    <h4>How do I schedule an appointment?</h4>
                                    <i class="fas fa-chevron-down accordion-icon"></i>
                                </div>

                                <div class="accordion-body">
                                    <p>The hospital website should provide information on how to schedule an appointment, including phone numbers and online appointment booking options.</p>
                                </div>
                            </div>

                            <div class="accordion">
                                <div class="accordion-header">
                                    <h4>What insurance plans does the hospital accept?</h4>
                                    <i class="fas fa-chevron-down accordion-icon"></i>
                                </div>

                                <div class="accordion-body">
                                    <p>The hospital website should provide a list of insurance plans accepted by the hospital, along with any specific requirements or limitations. </p>
                                </div>
                            </div>

                            <div class="accordion">
                                <div class="accordion-header">
                                    <h4>What is the hospital's policy on patient safety and quality of care?</h4>
                                    <i class="fas fa-chevron-down accordion-icon"></i>
                                </div>

                                <div class="accordion-body">
                                    <p>The hospital website should provide information on the hospital's policies and procedures related to patient safety and quality of care. This may include information on infection control, medication safety, and patient experience.</p>
                                </div>
                            </div>

                            <div class="accordion">
                                <div class="accordion-header">
                                    <h4>What services do hospitals typically offer?</h4>
                                    <i class="fas fa-chevron-down accordion-icon"></i>
                                </div>

                                <div class="accordion-body">
                                    <p>Hospitals typically offer a wide range of medical services, including emergency care, surgery, diagnostic testing, inpatient and outpatient care, and various medical treatments.</p>
                                </div>
                            </div>

                            <div class="accordion">
                                <div class="accordion-header">
                                    <h4>How do I find a hospital near me?</h4>
                                    <i class="fas fa-chevron-down accordion-icon"></i>
                                </div>

                                <div class="accordion-body">
                                    <p>You can search for hospitals near you online, using a search engine or a hospital directory website. You can also ask your doctor or insurance provider for recommendations.</p>
                                </div>
                            </div>

                            <div class="accordion">
                                <div class="accordion-header">
                                    <h4>What are the hospital's visiting hours?</h4>
                                    <i class="fas fa-chevron-down accordion-icon"></i>
                                </div>

                                <div class="accordion-body">
                                    <p>The hospital website should provide information on visiting hours and any restrictions or guidelines that visitors must follow.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==== FAQ Section End ==== -->



        <!-- ==== scrollTotop ==== -->
        <button id="scrolltoButton"></button>

    </main>

    <!-- ==== Footer Section -->
    <footer class="footer pt-5 mt-5 mt-lg-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <div class="footer-img">
                        <img src="assets/img/hospital_khojo_logo.png">
                    </div>
                </div>

                <div class="col-lg-6 mt-3 mt-lg-0">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Our Offerings</a></li>
                            <li><a href="#">Cities We Serve</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Useful Articles</a></li>
                        </ul>
                    </div>
                </div>

                <!-- <div class="col-lg-4 mt-3 mt-lg-0">
                    <div class="footer-widget">
                        <ul>
                            <li>
                                <p>Postmaster, Jaipur City S.O, Jaipur, Rajasthan, India (IN) Pin Code:-302003</p>
                            </li>
                        </ul>
                    </div> -->

            </div>
        </div>
        </div>

        <div class="footer-copyright py-2">
            <div class="container">
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                    <p class="text-white">Copyright &copy; 2023. | Jaipur Hospital. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==== Footer Section End -->









    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>

    <script>
        $(document).ready(function() {

            var num = $('header').height();
            $("header ul li a").click(function() {
                var pageId = $(this).attr("data-page");
                if ($(window).width() < 991) {
                    $('#menu').click();
                }

                $("html, body").animate({
                    scrollTop: $("#" + pageId).offset().top - num
                }, 500);

            });

            /*  $(window).bind('scroll', function() {

                 if ($(window).scrollTop() > num) {
                     $('#menuHeader').addClass('fixed');
                 } else {
                     $('#menuHeader').removeClass('fixed');

                 }
             }); */

            /* === NavToggle === */

            $('#menu').bind('click', function(event) {
                $('#mainnav ul').slideToggle();
                $('body').css('overflow-y', 'initial')
            });

            /*  $(window).resize(function() {
                 var w = $(window).width();
                 if (w > 991) {
                     $('#mainnav ul').removeAttr('style');

                 }

             }); */

            AOS.init();

        });



        document.getElementById('menu').addEventListener('click', function() {
            document.body.classList.toggle('nav-open');
        });
    </script>

    <script>
        function toggleReadMore(element, parent_element) {
            //console.log(parent_element.childNodes[1]);
            const content = parent_element.childNodes[1];
            const btn = element;

            if (content.classList.contains('show-more')) {
                // show less
                content.classList.remove('show-more');
                btn.innerHTML = 'Read More';
            } else {
                // show more
                content.classList.add('show-more');
                btn.innerHTML = 'Show Less';
            }
        }
    </script>

    <script>
        $(document).ready(function() {
            let minDate = new Date();
            $("#orderDatePicker").datepicker({
                minDate: '0',
                maxDate: "+1M +10D",
                showAnim: 'clip'
            });
        });
    </script>

</body>

</html>