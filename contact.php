<?php
    require_once 'includes/header.php';
?>

<div class="container0-fluid contact-font">
    <div class="banner">
        <div class="rgb-bg"></div>
        <div class="container z">
            <h1 class="dark-color">Contact Us</h1>
            <div class="sub">
                You are here: 
                <span xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="http://www.navigatormaritime.com" rel="v:url" property="v:title" class="light-color-a">Home</a> » Contact Us </span></span>
            </div>
        </div>
    </div>
    <!-- Contact Form And other information -->
    <div class="container contact-container rounded-0">
        <div class="contact-form row">
            <form action="forms/submit-contact.php" class="col-lg-6">
                <div class="inputField">
                    <label for="name">Your Name (required)</label>
                    <div class="form-group">
                        <input class="form-control" type="text" id="name" name="name">
                    </div>
                </div>
                <div class="inputField">
                    <label for="name">Your Email (required)</label>
                    <div class="form-group">
                        <input class="form-control" type="email" id="email" name="email">
                    </div>
                </div>
                <div class="inputField">
                    <label for="name">Contact Number</label>
                    <div class="form-group">
                        <input class="form-control" type="text" id="contact-number" name="contact-number">
                    </div>
                </div>
                <div class="inputField">
                    <label for="name">Purpose</label>
                    <div class="form-group">
                        <select class="form-control" id="select-purpose" name="select-purpose" multiple required>
                            <option value>---</option>
                            <option value="Inquiry">Iniquiry</option>
                            <option value="Book a Course">Book a Course</option>
                            <option value="Request an appointment">Request an appointment</option>
                            <option value="Feedback">Feedback</option>
                        </select>
                    </div>
                </div>
                <div class="inputField">
                    <label for="name">Course you want to enroll (optional)</label>
                    <div class="form-group">
                        <input class="form-control" type="text" id="course" name="course">
                        <p><small>Enter the name of the course you want to enroll</small></p>
                </div>
                <div class="inputField">
                    <label for="name">Your Message (required)</label>
                    <div class="form-group">
                        <textarea class="form-control"  name="message" id="message" rows="3">
                        </textarea>
                    </div>
                    <p><small>For appointments, please specify your preferred time and data, and attention to the person on the message.</small></p>
                </div>
                <input type="submit" value="Submit Form" class="form-control dark-button" name="submit">
                </div>
            </form>
            <div class="aside col-lg-6">
                <div class="row">
                    <div class="col-lg-6 text-secondary">
                    <i class="fa-solid fa-location-dot dark-color"></i>
                        <h4 class="dark-color d-inline bolder mt">Address</h4>
                        <p class="mt">Unit 701 S&L Building 1500 Roxas Boulevard, 1000 Ermita, Manila</p>
                    </div>
                    <div class="col-lg-6 text-secondary">
                        <i class="fa-solid fa-phone dark-color"></i>
                        <h4 class="dark-color bolder d-inline pt-3">Contact NUMBERS</h4>
                        <p class="mt">
                        +632 527 1069 LOCAL <br>
                        +632 516 2993 LOCAL <br>
                        +632 516 3674 <br>
                        SUN: 09493326357 / 09985944089 <br>
                        GLOBE: 09957894170 / 09778337279 <br>
                        <br>
                        <br>
                        info@navigatormaritime.com
                        </p>
                    </div>
                </div>
                <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.4388808834397!2d120.97845207619581!3d14.574049985909168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ca2c1b739e25%3A0xc3add675d0493723!2sNavigator%20International%20Maritime%20Training%20and%20Assessment%20Center%20Inc.!5e0!3m2!1sen!2sph!4v1718068441172!5m2!1sen!2sph" width="100%" height="410px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
    require_once 'includes/footer.php';
?>