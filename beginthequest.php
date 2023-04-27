<html>
    <head>
        <title>mindlab</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="background-image2">
            <div class="navbar">
                    <a href="/index.html" id="mindlab_logo">mindlab.</a>
                    <ul> 
                        <div class="comdropcontainer"></div>
                        <li><a href="/community.html">community.</a></li>
                            <ul class="communitydropdown">
                                <br>
                                <li><a href="">forums.</a></li>
                                <br><br>
                                <li><a href="">growthlogs.</a></li>
                            </ul>
                        <li><a href="https://www.book.mindlab.lol/">mindbook.</a></li>
                        <li><a href="/beginthequest.html">begin the quest.</a></li>
                    </ul>
            </div>
            <img src="/images/mail-dynamic-gradient.png" id="mail">
            <div class="btqcontent">
                <span class="btqtextt"><strong id="gradtext">mindlab</strong> is currently <br> under <strong id="gradtext">construction.</strong></span>
                <p class="btqtextp"> 
                    so you're ready to begin huh?
                     <br>enter your email to receive updates on the platform.
                      <br> we'll notify you when it's ready to go!
                     <br><br>for now you must remain patient. 
                     <br> <br>
                     <br> <br> 
                     <a href="#lesson1" id="scrolldown">lesson #1</a>
                     <br> <br> <br id="lesson1">it's important to remain patient.
                      <br> without patience improvement will be difficult.
                     <br>do not be too patient. act accordingly when you see the opportunity to do so.
                      <br> <br> <i>"impatience with actions, patience with results"</i>
                      <br> - Naval Ravikant
                      <br> <br> you can take action by entering your email.
                 </p>
                 <form action="index.php" method="post"></form>
                    <?php
                    $userEmail="";
                    if(isset($_POST['submitbtn'])){
                        $userEmail = $_POST['email'];
                        if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
                            echo "Email is correct"
                        }else{
                            ?>
                            <div class="alert"> Invalid Email</div>
                            <?php
                        }
                    }
                    ?>
                <div class="inputbox">
                    <input type="text" required="required" required value="<?php echo  $userEmail?>">
                    <button type="submit" class="submitbtn">join</button>
                    <a class="email">enter email</a>
                    <i></i>
                </div>form
             </div>   
        </div>
    </body>
<html>