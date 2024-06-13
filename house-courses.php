<?php
    require_once 'includes/header.php';
?>

<div class="container0-fluid  contact-font">
    <div class="banner">
        <div class="rgb-bg"></div>
        <div class="container contact-wrapper z">
            <h1 class="dark-color">IN HOUSE COURSES</h1>
            <!-- TODO: change the style of class sub -->
            <div class="sub">
                You are here: 
                <span xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="#" rel="v:url" property="v:title" class="light-color-a">Home</a> »  In House Courses </span></span>
            </div>
        </div>
    </div>
    <!-- Contact Form And other information -->
    <div class="container contact-container contact-wrapper rounded-0">
        <div class="contact-form row">
            <div class="col-lg-7">
                <p class="m-0 p-0">
                    <a href="#" class="light-color-a">
                        <small>To book a course(s) from this list click here</small>
                    </a>
                </p>
                <h4 class="dark-color bolder mt-4 mb-5">IN HOUSE COURSES</h4>
                <!-- course Table -->
                <div id="house-course-table-data">
                        <!-- Table data request  -->
                </div>
            </div>
            <div class="aside col-lg-5">
                <?php
                    require_once 'includes/information.php';
                ?>
                <h4 class="dark-color d-inline text-capitalize bolder mt">BOOK A COURSE</h4>
                <form action="forms/form-house-course.php" class="col-lg-12" method="post">
                    <div class="inputField">
                        <label for="name">Your Name (required)</label>
                        <div class="form-group">
                            <input class="form-control" type="text" id="name" name="name">
                        </div>
                    </div>
                    <div class="inputField">
                        <label for="email">Your Email (required)</label>
                        <div class="form-group">
                            <input class="form-control" type="email" id="email" name="email">
                        </div>
                    </div>
                    <div class="inputField">
                        <label for="contact-number">Contact Number</label>
                        <div class="form-group">
                            <input class="form-control" type="text" id="contact-number" name="contact-number">
                        </div>
                    </div>
                    <div class="inputField">
                        <label for="select-course">SELECT a course(s) (required)</label>
                        <div class="form-group">
                            <select class="form-control" id="select-course" name="select-course[]" multiple required>
                                <option value>---</option>
                                <option value="Practical Assessment for Deck Managemenet Level">Practical Assessment for Deck Managemenet Level</option>
                                <option value="Practical Assessment for Deck Operational Level">Practical Assessment for Deck Operational Level</option>
                                <option value="Practical Assessment for Engine Operational Level">Practical Assessment for Engine Operational Level</option>
                            </select>
                        </div>
                    </div>
                    <div class="inputField">
                        <label for="message">Your Message (required)</label>
                        <div class="form-group">
                            <textarea class="form-control"  name="message" id="message" rows="3">
                            </textarea>
                        </div>
                    </div>
                    <input type="submit" value="Enroll Course" class="form-control dark-button" name="submit">
                    </div>
                </form>
            </div>
        </div>
      
    </div>
</div>

<?php
    require_once 'includes/footer.php';
?>