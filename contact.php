<?php include_once('header.php') ?>


<!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div> -->
<!-- Spinner End -->

<!-- Navbar & Hero Start -->


<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Contact</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid contact py-3">
    <div class="container py-3">
        <div class="row g-5">
            <div class="col-12 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                <div>
                    <div class="pb-5">
                        <h4 class="text-primary">Get in Touch</h4>
                        <p class="mb-0">We’re here to help you! Whether you have questions, feedback, or need assistance with our services, our team is ready to assist you. Please feel free to reach out to us using the contact information provided below. Your inquiries are important to us, and we strive to respond promptly.</p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="contact-add-item rounded bg-light p-4">
                                <div class="contact-icon text-primary mb-4">
                                    <i class="fas fa-map-marker-alt fa-2x"></i>
                                </div>
                                <div>
                                    <h4>Address</h4>
                                    <p class="mb-0">Ratu Road, Ranchi</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-add-item rounded bg-light p-4">
                                <div class="contact-icon text-primary mb-4">
                                    <i class="fas fa-envelope fa-2x"></i>
                                </div>
                                <div>
                                    <h4>Mail Us</h4>
                                    <p class="mb-0">info@example.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-add-item rounded bg-light p-4">
                                <div class="contact-icon text-primary mb-4">
                                    <i class="fa fa-phone-alt fa-2x"></i>
                                </div>
                                <div>
                                    <h4>Telephone</h4>
                                    <p class="mb-0">(+91) 1234567890</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-add-item rounded bg-light p-4">
                                <div class="contact-icon text-primary mb-4">
                                    <i class="fab fa-firefox-browser fa-2x"></i>
                                </div>
                                <div>
                                    <h4>rsinhat@gmail.com</h4>
                                    <p class="mb-0">(+91) 1234567890</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex justify-content-around bg-light rounded p-4">
                                <a class="btn btn-xl-square btn-primary rounded-circle" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-xl-square btn-primary rounded-circle" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-xl-square btn-primary rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-xl-square btn-primary rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="bg-light p-5 rounded h-100">
                    <h4 class="text-primary mb-4">Send Your Message</h4>
                    <form action="contactdetail.php" method="post">
                        <div class="row g-4">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" name="name" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" id="email" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="phone" class="form-control border-0" id="phone" name="phone" placeholder="Phone">
                                    <label for="phone">Your Phone</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="project" name="address" placeholder="Project">
                                    <label for="project">Your Address</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="subject" name="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0" placeholder="Leave a message here" id="message" name="message" style="height: 160px"></textarea>
                                    <label for="message">Message</label>
                                </div>

                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" name="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                <div class="rounded">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3661.840008041741!2d85.26410877525676!3d23.394004502365302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4de0eafed440b%3A0xfed361612ff1075d!2sRatu%20Rd%2C%20Ranchi%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1726299821724!5m2!1sen!2sin" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once('footer.php') ?>