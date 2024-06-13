<?php
    require_once 'includes/header.php';
?>

<div class="container0-fluid  contact-font">
    <div class="banner">
        <div class="rgb-bg"></div>
        <div class="container contact-wrapper z">
            <h1 class="dark-color">ELECTRICAL COURSES</h1>
            <div class="sub">
                <small>
                    You are here: 
                    <span xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="#" rel="v:url" property="v:title" class="light-color-a">Home</a> » Electrical Courses</span></span>
                </small>
            </div>
        </div>
    </div>

    <div class="container contact-container contact-wrapper rounded-0">
        <h4 class="dark-color d-inline text-capitalize bolder">ELECTRICAL COURSES (NEW)</h4>
        <div class="facilities-wrapper mt-5">
            <div class="col-lg-9 mb-5" id="electrical-course-table-data">
                
            </div>
            <?php
                require_once 'archives.php';
            ?> 
        </div>
    </div>
</div>

<?php
    require_once 'includes/footer.php';
?>