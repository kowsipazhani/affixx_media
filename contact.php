<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Affixx Media</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="image/favicon.ico">

    <style>
    /**** Alert Style ****/
    @media screen and (max-width: 991px) {
        .step-box-one {
            margin-bottom: 0px;
        }
    }
    .main-steps-in-one {
    padding-top: 120px;
    padding-bottom: 60px;}
    .unstyled {
      margin: 0;
      list-style: none;
    }
    .unstyled a, .unstyled #test {
      width: 120px;
      text-decoration: none;
      padding: .5em 1em;
      background-color: #213347;
      border-radius: 4px;
      display: block;
      margin-bottom: .5em;
      font-size:15px;
      font-weight:300;
      font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    }
    .unstyled a:hover, .unstyled #test:hover {
      background-color: #f25c5d;
    }
    
    .cf, .alert {
      *zoom: 1;
    }
    .cf:before, .alert:before, .cf:after, .alert:after {
      display: table; 
      content: "";
      line-height: 0;
    }
    .cf:after, .alert:after {
      clear: both;
    }
    
    #alerts {
      /*width: 400px;*/
      top: 12px;
      right: 50px;
      position: fixed;
      z-index: 9999;
      list-style: none;
    }
    
    .alert {
      width: 100%;
      margin-bottom: 8px;
      display: block;
      position: relative;
      border-left: 4px solid;
      right: -50px;
      opacity: 0;
      line-height: 1;
      padding: 0;
      transition: right 400ms, opacity 400ms, line-height 300ms 100ms, padding 300ms 100ms;
      display: table;
    }
    
    .alert:hover {
      cursor: pointer;
      box-shadow: 0 0 6px rgba(0, 0, 0, 0.3);
    }
    
    .open {
      right: 0;
      opacity: 1;
      line-height: 2;
      padding: 3px 15px;
      transition: line-height 200ms, padding 200ms, right 350ms 200ms, opacity 350ms 200ms;
    }
    
    .alert-title {
      font-weight: bold;
    }
    
    .alert-block {
      width: 80%;
      width: -webkit-calc(100% - 10px);
      width: calc(100% - 10px);
      text-align: left;
    }
    .alert-block em, .alert-block small {
      font-size: .75em;
      opacity: .75;
      display: block;
    }
    
    .alert i {
      font-size: 2em;
      width: 1.5em;
      max-height: 48px;
      top: 50%;
      margin-top: -12px;
      display: table-cell;
      vertical-align: middle;
    }
    
    .alert-success {
      color: #fff;
      border-color: #539753;
      background-color: #8fbf2f;
    }
    
    .alert-error {
      color: #fff;
      border-color: #dc4a4d;
      background-color: #f25c5d;
    }
    
    .alert-trash {
      color: #fff;
      border-color: #dc4a4d;
      background-color: #f25c5d;
    }
    
    .alert-info {
      color: #fff;
      border-color: #076d91;
      background-color: #3397db;
    }
    
    .alert-warning {
      color: #fff;
      border-color: #dd6137;
      background-color: #f7931d;
    }
    /**** Alert Style End ****/
    
    </style>

</head>
<body>
    
    <!-- Section Header -->
    <header>
        <!-- Section Navbar -->
        <div id="header"></div>
    </header>

    <!-- Section Content Edit -->
    <aside>
        <div id="edit-sidebar"></div>
    </aside>

    <!-- Section Search -->
    <aside>
        <div id="search-form-container"></div>
    </aside>

    <!-- Section Sidebar -->
    <aside>
        <div id="sidebar"></div>
    </aside>

    <!-- Section Main Content -->
    <main>
        <!-- Section Banner -->
        <div class="section-banner">
            <div class="banner-layout-wrapper">
                <div class="banner-layout">
                    <div class="d-flex flex-column text-center align-items-center gspace-2">
                        <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">Contact Us</h2>
                        <nav class="breadcrumb">
                            <a href="index.html" class="gspace-2">Home</a>
                            <span class="separator-link">/</span>
                            <p class="current-page">Contact Us</p>
                        </nav>    
                    </div>
                    <div class="spacer"></div>
                </div>
            </div>
        </div>
        
        <!-- Section Contact -->
        <div class="section">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1 g-5">
                    <div class="col col-xl-5">
                        <div class="contact-title-wrapper">
                            <div class="card contact-title">
                                <div class="sub-heading">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    <span>Reach out to us</span>
                                </div>
                                <h2 class="title-heading">Get in Touch</h2>
                                <p>Let’s create digital strategies that drive real growth and lasting impact for your business.</p>
                                <div class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
                                    <div>
                                        <div class="icon-wrapper">
                                            <div class="icon-box">
                                                <i class="fa-solid fa-phone-volume accent-color"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid">
                                        <span>Phone Number</span>
                                        <h5>+(91) 93 637 71010</h5> 
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
                                    <div>
                                        <div class="icon-wrapper">
                                            <div class="icon-box">
                                                <i class="fa-solid fa-envelope accent-color"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid">
                                        <span>Email Address</span>
                                        <h5>affixxmedia@gmail.com</h5>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
                                    <div>
                                        <div class="icon-wrapper">
                                            <div class="icon-box">
                                                <i class="fa-solid fa-location-dot accent-color"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid">
                                        <span>Office Address</span>
                                        <h5>3rd & 4th Floor, Fun center, 64, South Boulevard, MG Road Area, Puducherry, 605001</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-7">
                        <div class="form-layout-wrapper">
                            <div class="card form-layout">
                                <h3 class="title-heading">Let's Create Digital Success Together</h3>
                                <form action="" method="post" id="contactForm" class="form">
                                    <div class="row row-cols-md-2 row-cols-1 g-3">
                                        <div class="col">
                                            <input type="text" name="name" id="name" placeholder="Name *" required>
                                        </div>
                                        <div class="col">
                                            <input type="email" name="email" id="email" placeholder="Email Address">
                                        </div>
                                    </div>

                                    <div class="row row-cols-md-2 row-cols-1 g-3">
                                        <div class="col">
                                            <input type="number" name="mobile_number" id="mobile_number" placeholder="Mobile Number *" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" name="business_name" id="business_name" placeholder="Business Name *" required>
                                        </div>
                                    </div>

                                    <div class="row row-cols-md-1 row-cols-1 g-3">
                                        <div class="col">
                                            <select name="service" id="service" required>
                                                <option value="">Select Service *</option>
                                                <option value="Social Media Marketing">Social Media Marketing</option>
                                                <option value="Personal Branding">Personal Branding</option>
                                                <option value="Search Engine Optimization">Search Engine Optimization</option>
                                                <option value="Performance Marketing">Performance Marketing</option>
                                                <option value="Influencer Marketing">Influencer Marketing</option>
                                                <option value="Website Development">Website Development</option>
                                            </select>
                                        </div>
                                    </div>
                                    <textarea name="message" id="message" rows="5" placeholder="Message"></textarea>
                                    <div class="form-button-container">
                                        <button type="submit" class="btn btn-accent">
                                            <span class="btn-title">
                                                <span>Send a Message</span>
                                            </span>
                                            <span class="icon-circle">
                                              <i class="fa-solid fa-arrow-right"></i>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Maps -->
        <div class="section pt-0">
            <div class="hero-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31227.8711017969!2d79.80357983034001!3d11.940962800393518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5361040687a021%3A0xd784e9604e9eeb8f!2sPulsebay%20Coworking%20-%20Whitetown!5e0!3m2!1sen!2sin!4v1762530005926!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </main>

    <!-- Section Footer -->
    <footer>
        <div id="footer"></div>
    </footer>

    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/swiper-script.js"></script>
    <script src="js/submit-form.js"></script>
    <script src="js/video_embedded.js"></script>

    <script>

        $(document).ready(function() {
            $('#contactForm').on('submit', function(e) {
                //alert("Submit");
                e.preventDefault(); // Prevent form submission
                
                // Get reference to the submit button and disable it
                var submitButton = $('.btn-title');
                var submitButtonText = $('.btn-title span');
                
                submitButtonText.text('Please Wait...'); // Change button text
                submitButton.prop('disabled', true); // Disable the button to prevent multiple submits

                // Get form field values
                var name = $('input[name="name"]').val();
                var phone = $('input[name="mobile_number"]').val();
                var email = $('input[name="email"]').val();
                var business_name = $('input[name="business_name"]').val();
                var service = $('select[name="service"]').val();
                var message = $('textarea[name="message"]').val();

                var nameRegex = /^[a-zA-Z\s]+$/;
                if (!nameRegex.test(name)) {
                    Alert.warning('Warning! Please enter a valid name using only letters and spaces.', 'Warning', {displayDuration: 3000, pos: 'top'});
                    resetSubmitButton();
                    return;
                }

                var phoneRegex = /^\d{10}$/;
                if (!phoneRegex.test(phone)) {
                    Alert.warning('Warning! Please enter a valid 10-digit phone number.', 'Warning', {displayDuration: 3000, pos: 'top'});
                    resetSubmitButton();
                    return;
                }

                var emailRegex = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/;
                if (email.trim() !== "" && !emailRegex.test(email)) {
                    Alert.warning('Warning! Please enter a valid email address.', 'Warning', {displayDuration: 3000, pos: 'top'});
                    resetSubmitButton();
                    return;
                }

                var businessNameRegex = /^[a-zA-Z0-9\s]+$/;
                if (!businessNameRegex.test(business_name) || business_name.trim() === "") {
                    Alert.warning('Warning! Please enter a valid business name.', 'Warning', {displayDuration: 3000, pos: 'top'});
                    resetSubmitButton();
                    return;
                }

                if (service === null || service === "" || service === "Select Service") {
                    Alert.warning('Warning! Please select a service.', 'Warning', {displayDuration: 3000, pos: 'top'});
                    resetSubmitButton();
                    return;
                }

                if (message.length > 250) {
                    Alert.warning('Warning! Message should not exceed 250 characters.', 'Warning', {displayDuration: 3000, pos: 'top'});
                    resetSubmitButton();
                    return;
                }
                
                // Generate reCAPTCHA v3 Token
                // grecaptcha.ready(function() {
                //     grecaptcha.execute('....', { action: 'eshop_form' }).then(function(token) {
                        var FormData = $('#contactForm').serialize();
                        //var FormData = $('#contactForm').serialize() + '&g-recaptcha-response=' + token;
                        //console.log(FormData);
                        var from = "getintouch";
                        var enquiryfrom = "Contact Form";
                        //Perform AJAX
                        $.ajax({
                            type: 'POST',
                            url: 'commonajax.php?enquiryfrom='+enquiryfrom+'&from='+from,
                            data: FormData,
                            success: function (data) {
                                //alert("success--"+data);
                                console.log(data);
                                if(data==1){
                                    // Display success alert
                                    Alert.success('Success! Your enquiry has been submitted successfully!. ','Success',{displayDuration: 3000, pos: 'top'});
                                    // Optionally reset the form
                                    $('#contactForm')[0].reset();
                                }else{
                                    //Alert.warning('Warning! Something went wrong, please try again later.','Warning',{displayDuration: 3000});
                                    Alert.error('error! Something went wrong, please try again later.', 'Error', {
                                        displayDuration: 3000,
                                        pos: 'top'
                                    }); 
                                }
                                // Reset the button text and re-enable the button after completion
                                submitButtonText.text('Send a Message');
                                submitButton.prop('disabled', false);
                            },
                            error: function () {
                                //alert("Error");
                                 // Display error alert
                                Alert.error('error! There was an error submitting your enquiry. Please try again later.', 'Error', {
                                    displayDuration: 3000,
                                    pos: 'top'
                                }); 
                                submitButtonText.text('Send a Message');
                                submitButton.prop('disabled', false);
                            }
                        });
                //     });
                // });
                
            });
        });


        var Alert = undefined;

        (function(Alert) {
          var alert, error, trash, info, success, warning, _container;
          
          info = function(message, title, options) {
            return alert("info", message, title, "fa fa-info-circle", options);
          };
          
          warning = function(message, title, options) {
            return alert("warning", message, title, "fa fa-warning", options);
          };
          
          error = function(message, title, options) {
            return alert("error", message, title, "fa fa-exclamation-circle", options);
          };

          trash = function(message, title, options) {
            return alert("trash", message, title, "fa fa-trash-o", options);
          };

          success = function(message, title, options) {
            return alert("success", message, title, "fa fa-check-circle", options);
          };
          
          alert = function(type, message, title, icon, options) {
            var alertElem, messageElem, titleElem, iconElem, innerElem, _container;
            if (typeof options === "undefined") {
              options = {};
            }
            options = $.extend({}, Alert.defaults, options);
            if (!_container) {
              _container = $("#alerts");
              if (_container.length === 0) {
                _container = $("<ul>").attr("id", "alerts").appendTo($("body"));
              }
            }
            if (options.width) {
              _container.css({
                width: options.width
              });
            }
            alertElem = $("<li>").addClass("alert").addClass("alert-" + type);
            setTimeout(function() {
              alertElem.addClass('open');
            }, 1);
            if (icon) {
              iconElem = $("<i>").addClass(icon);
              alertElem.append(iconElem);
            }
            innerElem = $("<div>").addClass("alert-block");
            alertElem.append(innerElem);
            
            if (title) {
              titleElem = $("<div>").addClass("alert-title").append(title);
              innerElem.append(titleElem);
            }
            
            if (message) {
              messageElem = $("<div>").addClass("alert-message").append(message);
              innerElem.append(messageElem);
            }
            
            if (options.displayDuration > 0) {
              setTimeout(function() {
                leave();
              }, options.displayDuration);
            } else {
              innerElem.append("<em>Click to Dismiss</em>");
            }
            
            alertElem.on("click", function() {
              leave();
            });

            function leave() {
              alertElem.removeClass('open');
              alertElem.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
                return alertElem.remove();
              });
            }
            return _container.prepend(alertElem);
          };
          
          Alert.defaults = {
            width: "",
            icon: "",
            displayDuration: 3000,
            pos: ""
          };
          
          Alert.info = info;
          Alert.warning = warning;
          Alert.error = error;
          Alert.trash = trash;
          Alert.success = success;
          
          return _container = void 0;

        })(Alert || (Alert = {}));

        this.Alert = Alert;

        //Removed the test click handler
        // $('#test').on('click', function() {
        //   Alert.info('Message');
        // });

    </script>


</body>

</html>