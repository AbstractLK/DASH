<?php
    include('header.php');
?>


                    
                </div>
            </div>
        </header>
        <!-- end: Header -->

        <!-- Page title -->
        <section id="page-title" data-bg-parallax="assets/q1.jpg">
            <div class="container">
                <div class="page-title">
                    <h1>Contact Us</h1>
                    <span>The most happiest time of the day!.</span>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Home</a> </li>
                        <li class="active"><a href="#">Contact Us</a> </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- end: Page title -->
        <!-- CONTENT -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="text-uppercase">Get In Touch</h3>
                        <p>Please don't hesitate to contact us at any time or order
information material about the the Delvon Assistance for Social Harmony.</p>
                        <div class="m-t-30">
                            <form class="widget-contact-form" novalidate action="include/contact-form.php" role="form" method="post">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" aria-required="true" name="widget-contact-form-name" required class="form-control required name" placeholder="Enter your Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" aria-required="true" name="widget-contact-form-email" required class="form-control required email" placeholder="Enter your Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="subject">Your Subject</label>
                                        <input type="text" name="widget-contact-form-subject" required class="form-control required" placeholder="Subject...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea type="text" name="widget-contact-form-message" required rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
                                </div>
                                <!--    <div class="form-group">
                                    <script src="https://www.google.com/recaptcha/api.js"></script>
                                    <div class="g-recaptcha" data-sitekey="6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M"></div>
                                </div> -->
                                <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="text-uppercase">Address & Map</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <address>
                                    <strong>SLT Digital Services</strong><br>
                                    No.17, H.K Dharmadasa Mawatha,<br>
                                    Colombo 02.<br>
                                    <abbr title="Phone">P:</h4> +94 11 2 399 399
                                </address>
                            </div>
                            <!-- <div class="col-lg-6">
                                <address>
                                    <strong>Polo Office</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</h4> (123) 456-7890
                                </address>
                            </div> -->
                        </div>
                        <!-- Google Map -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7396106163947!2d79.85080197410383!3d6.921699793078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259150c90e9e1%3A0x63e643794fb81ed3!2sSLT%20Digital%20Services%20(Pvt)%20Ltd!5e0!3m2!1sen!2slk!4v1705402012019!5m2!1sen!2slk" width="540" height="460" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!-- <div class="map" data-latitude="-37.817240" data-longitude="144.955826" data-style="light" data-info="Hello from &lt;br&gt; Inspiro Themes"></div> -->
                        <!-- end: Google Map -->
                    </div>
                </div>
            </div>
        </section> <!-- end: Content -->

        <?php
            include('footer.php');
        ?>