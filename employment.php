<?php
$ishome = 1;
include_once "includes/base.php"; 
?>
<?php include_once "includes/header.php"; ?>


<div id="smooth-wrapper">
    <div id="smooth-content">
        <!-- Page Wrapper -->
        <div class="contentWrapper">
            
            <section class="employment-hero" id="employment">
                <figure class="employment-hero__banner">
                    <img src="src/images/employment/hero-banner.jpg" alt="" class="img-fluid" loading="lazy">
                </figure>
                 <div class="container">
                    <div class="hero-body">
                        <ul class="roles">
                            <li>Companion caregivers</li>
                            <li>Personal care aides and CNAs</li>
                            <li>Gwinnett · Fulton · DeKalb · Cobb · Clayton</li>
                        </ul>
                        <div class="card">
                            <div class="sectionHead">
                                <span class="sectionHead__subtitle">Employment</span>
                                <h1>Bring compassion to your work.</h1>
                                <p>Connect with Inspire HCS about caregiver opportunities in our authorised Georgia service area.</p>
                            </div>
                            <div class="button-row">
                                <a class="btn btn-secondary" href="#interest">Express Interest</a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section class="join-network">
                <div class="container">
                    <div class="join-network__wrapper">
                        <div class="sectionHead">
                            <h2 class="sectionHead__title m-0">Join our caregiver network</h2>
                        </div>
                        <div class="join-network__content">
                            <p>We welcome expressions of interest from compassionate, dependable people interested in companion care and personal care roles. Assignments depend on client needs, location, qualifications and available schedules.</p>
                            <div class="join-network__items">
                                <div class="join-network__item">
                                    <h3>Companion caregivers</h3>
                                    <p>Support with companionship and everyday activities.</p>
                                </div>
                                <div class="join-network__item">
                                    <h3>Personal care aides and CNAs</h3>
                                    <p>Assistance with daily personal care within the agreed service plan and role requirements.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            
            <section class="caregiver-requirements">
                <div class="container">
                    <div class="caregiver-requirements__wrapper">
                        <div class="sectionHead">
                            <h2 class="sectionHead__title">What we look for</h2>
                            <p>Role-specific screening, references, competency and orientation requirements must be completed before assignment.</p>
                        </div>
                        <div class="caregiver-requirements__items">
                            <div class="caregiver-requirements__item">
                                
                                <h3>Respectful communication</h3>
                            </div>
                            <div class="caregiver-requirements__item">
                                
                                <h3>Reliability</h3>
                            </div>
                            <div class="caregiver-requirements__item">
                                
                                <h3>Appropriate qualifications</h3>
                            </div>
                            <div class="caregiver-requirements__item">
                                
                                <h3>Ability to follow care plans and document services</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="interest-process">
                <div class="container">
                    <div class="interest-process__wrapper">
                        <div class="sectionHead">
                            <h2 class="sectionHead__title">How to express interest</h2>
                            <div class="sectionHead__desc">
                                <p>Share your name, contact information, county, relevant experience, qualifications and availability. We will discuss whether a suitable opportunity is available and explain the next steps.</p>
                            </div>
                            <p>
                                An expression of interest does not guarantee employment or a client assignment. Duties, pay, employment arrangements and scheduling are discussed for each available position.
                            </p>
                            <a href="#">
                                Looking for care for a loved one? Use the service enquiry instead.
                            </a>
                        </div>
                        <div class="interest-process__form">
                            <h3>Express interest</h3>
                            <p>Fields marked * are required.</p>
                            <form>
                                <div class="alert alert-danger">Please check 3 highlighted fields.</div>
                                <div class="row">
                                    <div class="col-12 form-group error">
                                        <label class="form-label">Full name <span>*</span></label>
                                        <input type="text" class="form-control" placeholder="" name="Full Name">
                                        <span class="validation-msg">Enter your full name.</span>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label class="form-label">Email <span>*</span></label>
                                        <input type="mail" class="form-control" placeholder="" name="Email">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label class="form-label">Phone <span>*</span></label>
                                        <input type="tel" class="form-control" placeholder="" name="Phone">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label class="form-label">County <span>*</span></label>
                                        <select class="nice-select" name="county" required>
                                            <option value="" selected disabled>Choose a county</option>
                                            <option value="gwinnett">Gwinnett</option>
                                            <option value="fulton">Fulton</option>
                                            <option value="dekalb">DeKalb</option>
                                            <option value="cobb">Cobb</option>
                                            <option value="clayton">Clayton</option>
                                        </select>

                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label class="form-label">Role <span>*</span></label>
                                        <select class="nice-select">
                                            <option value="1" selected disabled>Choose a role</option>
                                            <option value="2">Another option</option>
                                        </select>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label class="form-label">Experience and qualifications</label>
                                        <textarea class="form-control" placeholder=""></textarea>
                                    </div>
                                     <div class="col-12 form-group">
                                        <label class="form-label">Availability</label>
                                        <input type="text" class="form-control" placeholder="e.g. weekday mornings, some weekends" name="Full Name">
                                    </div>
                                </div>
                                <div class="alert alert-success">
                                    Please don’t include Social Security numbers, bank details or identity documents.
                                </div>
                                <div class="button-row mt-20">
                                    <button type="submit" class="btn btn-primary">Send expression of interest</button>
                                </div>
                            </form>
                            <!-- Thank YOu Msg Screen -->
                            <div class="thankyou-msg">
                                <h3>Thank you for your interest.</h3>
                                <p>We’ve received your details. We will be in touch to discuss whether a suitable opportunity is available and explain the next steps.</p>
                                <p class="thankyou-msg__note">We’ve received your details. We will be in touch to discuss whether a suitable opportunity is available and explain the next steps.</p>
                                <div class="button-row">
                                    <a href="#" class="btn btn-light">Send another</a>
                                </div>
                            </div>

                            <!-- Submission Error Screen -->
                             <div class="submission-error pt-40 pb-40">
                                <h3>We couldn’t send your details.</h3>
                                <p>Your answers are still here. Please try again in a moment, or email us at [RECRUITMENT EMAIL].</p>
                                <div class="button-row">
                                    <a href="#" class="btn btn-primary">Try again</a>
                                </div>
                            </div>
                        </div>
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

