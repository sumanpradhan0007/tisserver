<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JNU Hospital 2nd Changes by git</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet" type="text/css">
    <link href="assets/css/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" />


    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>


    <section class="py-lg-0 position-relative" style="z-index: 999;">
        <div class="banner-logo">
            <a href="https://jaipurhospitals.com/" class="text-white text-center back-to-home"><i class="far fa-home icon-home"></i> <br> Back to Home</a>
            <img src="assets/img/jnu-logo.jpg" alt="" class="img-fluid icon-logo ml-3">
        </div>
    </section>

    <main id="main">

        <!-- ====== Banner Section -->
        <section class="section-banner pb-4 pt-0 py-lg-0 position-relative" id="home">
            <img alt="" class="img-fluid w-100 d-lg-block d-none" src="assets/img/jnu-Hospital-banner.jpg">
            <img alt="" class="img-fluid w-100 d-lg-none mob" src="assets/img/jnu-Hospital-banner.jpg">
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
                    <h2>Welcome to <span class="span-color">JNU Hospital</span></h2>
                    <p>At JNU Hospital, we are committed to providing exceptional healthcare services to our patients. Our state-of-the-art facility and highly skilled medical professionals ensure that you receive the best possible care in a comfortable and compassionate environment. Here are some key features and services we offer:</p>
                </div>
                <div class="row">
                    <div class="col-lg-8  my-auto">
                        <div class="why-choose-us-left">
                            <h2 class="mb-3"><strong>Specialized Departments:</strong></h2>

                            <h5 class="mb-3 mt-3">We have specialized departments staffed with experienced doctors and nurses who provide comprehensive care in various fields, including:</h5>
                            <ul>
                                <li><strong>Cardiology:</strong> Diagnosis and treatment of heart-related conditions.</li>
                                <li><strong>Orthopedics:</strong> Expert care for bone and joint disorders.</li>
                                <li><strong>Gynecology and Obstetrics:</strong> Comprehensive women's health services.</li>
                                <li><strong>Pediatrics:</strong> Dedicated care for infants, children, and adolescents.</li>
                                <li><strong>Gastroenterology:</strong> Diagnosis and treatment of digestive system disorders.</li>
                                <li><strong>Neurology:</strong> Expert care for neurological conditions.</li>
                                <li><strong>Oncology:</strong> Comprehensive cancer care and treatment.</li>
                                <li><strong>Emergency Medicine:</strong> 24/7 emergency services for immediate medical attention.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 my-auto">
                        <img src="assets/img/welcome-img.jpg" alt="" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </section>
        <!-- ==== Welcome Section End ==== -->
        <!-- service section start -->
        <section class="section ourservice-section">
            <div class="container">
                <div class="sec-title">
                    <h2 class="text-white" style="text-shadow: #000 1px 0 10px;">Our Services </h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="discover-school-slider">
                            <div class="testimonial-slide">
                                <div class="testimonial_box">
                                    <div class="testimonial_box-inner">
                                        <div class="testimonial_box-top">

                                            <div class="service-card service-info">
                                                <div class="card-body text-center p-1">
                                                    <div class="card-image m-0">
                                                        <img src="assets/img/advanced.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                    <h4 class="card-title mt-2 mb-2">Advanced Medical Technology</h4>
                                                    <p>Our hospital is equipped with advanced medical technology to support accurate diagnoses and effective treatments. We continually invest in the latest equipment and techniques to ensure the best possible outcomes for our patients.</p>

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

                                            <div class="service-card service-info">
                                                <div class="card-body text-center p-1">
                                                    <div class="card-image m-0">
                                                        <img src="assets/img/diagnostic.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                    <h4 class="card-title mt-2 mb-2">Diagnostic Services</h4>
                                                    <p>We offer a comprehensive range of diagnostic services, including laboratory tests, imaging (X-ray, ultrasound, MRI, CT scan), and pathology services. Our diagnostic facilities are equipped with modern equipment to provide accurate and timely results.</p>

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

                                            <div class="service-card service-info">
                                                <div class="card-body text-center p-1">
                                                    <div class="card-image m-0">
                                                        <img src="assets/img/surgical.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                    <h4 class="card-title mt-2 mb-2">Surgical Services</h4>
                                                    <p>Our hospital boasts advanced surgical facilities and a team of skilled surgeons who perform a wide range of surgical procedures. From minimally invasive surgeries to complex procedures, we strive for excellence in surgical care. </p>

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

                                            <div class="service-card service-info">
                                                <div class="card-body text-center p-1">
                                                    <div class="card-image m-0">
                                                        <img src="assets/img/Rehabilitation.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                    <h4 class="card-title mt-2 mb-2">Rehabilitation and Physiotherapy</h4>
                                                    <p>We have a dedicated department for rehabilitation and physiotherapy, where experienced therapists help patients regain their strength, mobility, and independence after an illness, injury, or surgery.</p>

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

                                            <div class="service-card service-info">
                                                <div class="card-body text-center p-1">
                                                    <div class="card-image m-0">
                                                        <img src="assets/img/Wellness.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                    <h4 class="card-title mt-2 mb-2">Wellness and Preventive Care</h4>
                                                    <p>At JNUHospital, we believe in the importance of preventive care and promoting overall wellness. We offer health check-up packages, vaccination programs, and health education initiatives to help you stay healthy and prevent diseases.</p>

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

                                            <div class="service-card service-info">
                                                <div class="card-body text-center p-1">
                                                    <div class="card-image m-0">
                                                        <img src="assets/img/Approach.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                    <h4 class="card-title mt-2 mb-2">Patient-Centered Approach</h4>
                                                    <p>We prioritize patient satisfaction and well-being. Our compassionate and attentive staff members are committed to providing personalized care and addressing any concerns or queries you may have throughout your healthcare journey. </p>

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

                                            <div class="service-card service-info">
                                                <div class="card-body text-center p-1">
                                                    <div class="card-image m-0">
                                                        <img src="assets/img/International.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                    <h4 class="card-title mt-2 mb-2">International Patient Services</h4>
                                                    <p>We welcome patients from around the world and provide comprehensive support to international patients, including assistance with visa arrangements, language interpretation, accommodation, and travel arrangements.</p>

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

                                            <div class="service-card service-info">
                                                <div class="card-body text-center p-1">
                                                    <div class="card-image m-0">
                                                        <img src="assets/img/emergency-service.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                    <h4 class="card-title mt-2 mb-2">Emergency Services</h4>
                                                    <p>Offering a fully functional 24X7 service, the Emergency at JNU Hospital is primarily concerned with the care of illnesses or injuries requiring immediate medical attention. </p>

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
        <!-- service section end -->

        <!-- nutritional care section -->
        <section class="section nutritional-section">
            <div class="container">
                <div class="sec-title">
                    <h2 class="">Nutritional Care of Patients </h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 my-auto">
                        <figure class="nutrition">
                            <img src="assets/img/Nutritional-Care2.jpg" alt="" class="img-fluid rounded">
                        </figure>

                    </div>
                    <div class="col-lg-8 title-para my-auto">
                        <div class="why-choose-us-left">
                            <h2 class="mb-3"><strong>In-Patients:</strong></h2>

                            <p class="mb-3">The department provides normal, modified and therapeutic diets to all the in-patients depending on their respective disease conditions in consultation with treating physician of the individual patient. All the patients on special diet are also provided a detailed diet chart at the time of discharge.</p>

                            <h2 class="mb-3"><strong>OPD Patients:</strong></h2>

                            <p class="mb-3">The dietitians counsel the referred patients for a variety of conditions. The patients’ general food pattern is noted and accordingly appropriate Diet plan is given.</p>

                        </div>

                    </div>

                </div>
            </div>
        </section>

    </main>

    <!-- ==== Footer Section -->
    <footer class="footer">
        <div class="footer-copyright py-2">
            <div class="container">
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                    <p class="text-white">Copyright &copy; 2023. | JNU Hospital. All rights reserved.</p>
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

</body>

</html>