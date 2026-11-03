<?php
$ishome = 1;
include_once "includes/base.php"; 
?>
<?php include_once "includes/header.php"; ?>


<div id="smooth-wrapper">
    <div id="smooth-content">
        <!-- Page Wrapper -->
        <div class="contentWrapper">
            <section class="request-care">
                <div class="container">
                    <div class="sectionHead">
                        <span class="sectionHead__subtitle">Request Care</span>
                        <div class="sectionHead__wrapper">
                            <h1>
                                Request a home care assessment</span>
                            </h1>
                            <p>
                               Tell us a little about your needs. We will contact you to discuss suitable support and arrange an assessment.Please complete what you can.

                            </p>
                        </div>
                    </div>
                    <div class="request-care__form">
                        <form id="careRequestForm">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label class="form-label" for="yourName">Your name</label>
                                    <input type="text" class="form-control" id="yourName" name="your_name"
                                    autocomplete="name" minlength="2" maxlength="80" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                <label class="form-label" for="relationship">Relationship to person needing care</label>
                                <input type="text" class="form-control" id="relationship" name="relationship"
                                        maxlength="60" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="form-label" for="telephone">Telephone</label>
                                    <input type="tel" class="form-control" id="telephone" name="telephone"
                                            autocomplete="tel" inputmode="tel"
                                            pattern="^[0-9+()\-\s.]{7,20}$"
                                            >
                                </div>
                                 <div class="col-sm-6 form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        autocomplete="email" maxlength="120">
                                </div>
                                <div class="col-12 form-group">
                                    <p class="info-text">Please provide at least one way to contact you.</p>
                                </div>
                                 <div class="col-sm-6 form-group">
                                    <label class="form-label" for="careRecipientName">Name of person needing care <span aria-hidden="true">*</span></label>
                                    <input type="text" class="form-control" id="careRecipientName" name="care_recipient_name"
                                        minlength="2" maxlength="80" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="form-label" for="careLocation">Care location: city and ZIP code <span aria-hidden="true">*</span></label>
                                    <input type="text" class="form-control" id="careLocation" name="care_location"
                                        maxlength="100" required>
                                </div>
                                 <div class="col-sm-12 form-group">
                                    <label class="form-label" for="country">Country <span aria-hidden="true">*</span></label>
                                    <input type="text" class="form-control" id="country" name="country"
                                            autocomplete="country-name" maxlength="60" required>
                                    </div>
                                <div class="col-12 form-group">
                                    <p class="info-text">We serve Gwinnett, Fulton, DeKalb, Cobb and Clayton counties.</p>
                                </div>
                                <div class="col-12 form-group checkbox-wrapper">
                                    <h2>What help are you looking for? Select all that apply.</h2>
                                    <div class="request-care__form--checkboxes">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Companionship / sitter</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Bathing, dressing or grooming</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                            <label class="form-check-label" for="inlineCheckbox3">Meals / light housekeeping</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                            <label class="form-check-label" for="inlineCheckbox4">A break for a family caregiver</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                                            <label class="form-check-label" for="inlineCheckbox5">Not sure yet </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                                            <label class="form-check-label" for="inlineCheckbox6">Other </label>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label class="form-label">Anything else you would like us to know? Please avoid detailed medical information.</label>
                                    <textarea class="form-control" placeholder="" name=""></textarea>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="form-label">When would you like care to start? </label>
                                    <input type="text" class="form-control" placeholder="" name="Your Name">
                                </div>
                                 <div class="col-sm-6 form-group">
                                    <label class="form-label">Preferred days / times or hours needed</label>
                                    <input type="text" class="form-control" placeholder="" name="Your Name">
                                </div>
                                <div class="col-12 form-group">
                                    <label class="form-label">Best time and method to contact you</label>
                                    <input type="text" class="form-control" placeholder="" name="Your Name">
                                </div>
                            </div>
                            <p>By returning this form, you request contact from Inspire HCS about care and an assessment. This is not a service agreement. Assessment appointments and care starts are subject to availability.</p>
                            <p>Save your completed copy and return it directly to your Inspire HCS contact. This PDF does not submit automatically. For a medical emergency, call 911.</p>
                            <p>Inspire HCS LLC | Personal care and companion or sitter services | Lawrenceville, Georgia</p>
                        </form>
                    </div>
                </div>
            </section>

        </div>
         <?php include_once "includes/footer.php"; ?>
    </div>
</div>
<?php include_once "includes/scripts.php"; ?> 

</body>

</html>

