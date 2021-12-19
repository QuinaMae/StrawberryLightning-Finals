<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet">

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="assets/css/get_involved.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
    <title>Get Involved</title>
</head>
<body>

    <main class="l-main"></main>
    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class="bx bx-chevron-up scrolltop__icon"></i>
     </a>
    <!--========== NAVIGATION BAR ==========-->
     <?php require_once('header.php')?>

    <!--===== REGISTER FOR BOOTH =====-->
    <section class="booth" id="booth">
                <div class="max-width">
                    <h2 class="title">Booth Application Form</h2>
                    <div class="booth-content">
                        <div class="column left">
                            <div class="text">Set an Appointment</div>
                            <p>Thank you for your interest in exhibiting at Hex Con!
                                Please take a few minutes to complete the following form. We will contact you when there is 
                                availability upon your current standing on the waitlist.</p>
                            <div class="icons">
                                <div class="row">
                                    <i class="fas fa-user"></i>
                                    <div class="info">
                                        <div class="head">Strawberry Lightning</div>
                                        <div class="sub-title">A place for -cons!</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div class="info">
                                        <div class="head">Address</div>
                                        <div class="sub-title">Baguio City Luzon, Philippines</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <i class="fas fa-envelope"></i>
                                    <div class="info">
                                        <div class="head">Email</div>
                                        <div class="sub-title">SLightning_Official@email.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column right">
                            <div class="text">General Information</div>
                            <form action="#">
                                <div class="field">
                                    <input type="text" placeholder="Booth Name" required>
                                </div>
                                <div class="fields">
                                    <div class="field name">
                                        <input type="text" placeholder="Facilator's Name" required>
                                    </div>
                                </div>
                                    
                                <div class="fields">
                                    <div class="field email">
                                        <input type="email" placeholder="Email" required>
                                    </div>
                                </div>

                                <div class="fields">                                   
                                    
                                    <div class="field name">
                                        <p>Start Date</p>                                        
                                        <input type="date" placeholder="Start Date" required>
                                    </div>

                                    <div class="field name">       
                                        <p>End Date</p>                                 
                                        <input type="date" placeholder="End Date" required>
                                    </div>
                                </div>
                                <br>
                                <div class="field textarea">
                                    <textarea cols="30" rows="10" placeholder="Description of your booth and its services" required></textarea>
                                </div>
                                
                                <div class="button-area">
                                    <button type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </section>


<!--==== REGISTER TICKET ====-->
<section class="booth" id="booth">
    <div class="max-width">
        <h2 class="title">Ticket Registration</h2>
        <div class="booth-content">
            <div class="column left">
                <div class="text">Create your Ticket</div>
                <p>Ticket registration is only effective for a specific event you are trying to register to. Please take the time to
                    fill out the forms. <br><br>You will be notified via your email once we have approved of your registration. If you are having an error 
                    or issues with our registration, please contact us immediately. 
                </p>
                
            </div>
            <div class="column right">
                <div class="text">Your Information</div>
                <form action="#">
                    <div class="field">
                        <input type="text" placeholder="Full Name" required>
                    </div>
                    <div class="fields">
                        <div class="field name">
                            <input type="email" placeholder="Email" required>
                        </div>
                        <div class="field email">
                            <input type="number" placeholder="Phone Number" required>
                        </div>
                    </div>
                
                    <div class="field textarea">
                        <textarea cols="30" rows="10" placeholder="Description of your booth and its services" required></textarea>
                    </div>
                    
                    <div class="button-area">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

   
    <!--========== FOOTER ==========-->
    <?php require_once('footer.php')?>

    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="assets/js/main.js"></script>
    </main>
</body>
</html>