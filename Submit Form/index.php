<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</Form></title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<?php
    if(!empty($_POST["send"])){
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $userEmail = $_POST["userEmail"];
        $userPhone = $_POST["userPhone"];
        $gender = $_POST["gender"];
        $country = $_POST["country"];
        $userMessage = $_POST["userMessage"];
        $toEmail = "info@webmonk.solutions";

        $mailHeaders = "First tName: " . $firstName .
        "\r\n Last Name:" . $lastName . 
        "\r\n Email: " . $userEmail .
        "\r\n Phone: " . $userPhone .
        "\r\n Gender:" . $gender .
        "\r\n Country:" . $country .
        "\r\n Message: " . $firstMessage . "\r\n";
        
        if(mail($toEmail, $userName, $mailHeaders)){
            $message = "Your Information is Received Successfully.";

        }
    }

  ?>
    <div class="form-container">
        <form method="post" name="emailContact">
            <div class="input-row">
                <label>First Name <em>*</em></label>
                <input type="text" name="firstName" required>
            </div>
            <div class="input-row">
                <label>Last Name <em>*</em></label>
                <input type="text" name="lastName" required>
            </div>
            <div class="input-row">
                <label>Email <em>*</em></label>
                <input type="email" name="userEmail" required>
            </div>
            <div class="input-row">
                <label>Phone <em>*</em></label>
                <input type="tel" name="userPhone" required>
            </div>
            <div class="input">
                <label>Gender <em>*</em></label> 
                <input type="radio" name="gender">Male
                <input type="radio" name="gender">Female
            </div>
            <div class="input-row">
                <label>Country <em>*</em></label>
                <select name="country" id="country">
                    <option value="sc"> Select Country</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Australia">Australia</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Canada">Canada</option>
                    <option value="India">India</option>
                    <option value="USA">USA</option>
                    <option value="United Kingdom">United Kingdom</option>
                </select>
            </div>
            <div class="input-row">
                <label>Additional Information <em>*</em></label>
                <textarea name="userMessage" required></textarea>
            </div>
            <div class="input-row">
                <input type="submit" name="send" value="Submit">
                <?php if(!empty($message)) { ?>
                <div class="success">
                    <strong><?php echo $message; ?></strong>
                </div>
                <?php } ?>
            </div>
        </form>
    </div>
    
</body>
</html>