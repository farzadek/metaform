<section id="contact" class="mb-5">
    <div class="container py-5">
        <div class="row justify-content-center estimation-message">
            <div class="col col-11 col-sm-10 col-lg-8">
                <p class="text-center"><?php echo $messages['contact_estimation_message'] ?></p>
                <p class="tel-event text-center">Tel : <a href="tel:4388351455">(438) 835-1455</a></p>
            </div>
        </div>
        <h2 class="text-center my-5"><?php echo $messages['contact_main_title'] ?></h2>
        <div class="row justify-content-center">
            <div class="col col-11 col-sm-10 col-lg-8">
                <?php
                if (isset($_POST['sendMessage'])) {
                    if(empty($_POST['contact_name']) || empty($_POST['contact_message']) || empty($_POST['contact_phone'])) {
                        echo '<div class="alert alert-danger" role="alert">'.$messages['contact_form_error'].'</div>';
                    }
                    else{  
                        $name = strip_tags(htmlspecialchars($_POST['contact_name']));
                        $email = strip_tags(htmlspecialchars($_POST['contact_email']));
                        $phone = strip_tags(htmlspecialchars($_POST['contact_phone']));
                        $message = strip_tags(htmlspecialchars($_POST['contact_message']));
                        
                        $to = "metaformconstruction@gmail.com";
                        $subject = "Email from:  $name";
                        $body = "Message details:\n\nName: $name\n\nEmail: $email\n\nPhone: $phone\n\n\nMessage: $message";
                        $header = "From: $email";
                
                        if(mail($to, $subject, $body, $header)){
                            echo '<div class="alert alert-success" role="alert">'.$messages['contact_form_send_success'].'</div>';
                        } else{
                            echo '<div class="alert alert-danger" role="alert">'.$messages['contact_form_send_error'].'</div>';
                        }
                        header('Location: index.php');
                    }
                }
                ?>
                    <form novalidate="novalidate" method="POST">
                        <div class="mb-3">
                            <label for="contact_name" class="form-label"><?php echo $messages['contact_form_name'] ?><sup>*</sup></label>
                            <input type="text" class="form-control" name="contact_name" id="contact_name" required="required" minlength="2">
                        </div>
                        <div class="mb-3">
                            <label for="contact_email" class="form-label"><?php echo $messages['contact_form_email'] ?></label>
                            <input type="email" class="form-control" id="contact_email" name="contact_email">
                        </div>
                        <div class="mb-3">
                            <label for="contact_phone" class="form-label"><?php echo $messages['contact_form_phone'] ?><sup>*</sup></label>
                            <input type="phone" class="form-control" id="contact_phone" name="contact_phone">
                        </div>
                        <div class="mb-3">
                            <label for="contact_phone" class="form-label"><?php echo $messages['contact_form_message'] ?><sup>*</sup></label>
                            <textarea class="form-control" id="contact_message" name="contact_message" rows="5" required="required"></textarea>
                        </div>
                        <button type="submit" name="sendMessage" id="sendMessageButton" class="btn main-button w-100"><?php echo $messages['contact_form_submit'] ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>