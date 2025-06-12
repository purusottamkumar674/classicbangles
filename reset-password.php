<?php include 'header.php';?>

        <main class="page-main">
            <div class="section-hero">
                <div class="section-hero__bg"><img src="assets/sillider3.jpg" alt="home-hero"></div>
                <div class="section-hero__content" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 500">
                    <h1 class="section-hero__title section-hero__top_padding">My Account</h1>
                </div>
            </div>
            <div class="page-content">
                <div class="uk-section-large uk-container uk-container-small">
                    <div class="uk-h2">Reset Password</div>
                    <form class="uk-form-stacked" action="#!" autocomplete="off">
                        <!-- Hidden Required Fields -->
                        <input type="hidden" name="project_name" value="Viasun">
                        <input type="hidden" name="admin_email" value="test@gmail.com">
                        <input type="hidden" name="form_subject" value="Reset Password">
                        <!-- END Hidden Required Fields -->
                        <div class="uk-margin">
                            <p>Lost your password?<br> Please enter your email or username. You will receive a link to create a new password via email.</p>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-form-label">Enter Username or Email <span class="accent-text">*</span></div>
                            <div class="uk-form-controls"><input class="uk-input uk-form-large" type="email" name="Email" autocomplete="off"></div>
                        </div>
                        <div class="uk-margin"><button class="uk-button uk-button-danger uk-button-large" type="submit">Reset Password</button></div>
                    </form>
                </div>
            </div>
        </main>


      <?php include 'footer.php';?>