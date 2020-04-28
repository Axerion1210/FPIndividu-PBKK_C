<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Phalcon PHP Framework</title>
        <!-- Load CSS -->
        <?= $this->assets->outputCss() ?>
    </head>

    <body style="background-color: rgb(70, 140, 187);">
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="/" class="logo">Book'N'Meet</a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                <?php if ($this->session->has('auth_id')) { ?>
                                    <li><a href="/" class="active">Home</a></li>
                                    <li class="submenu">
                                            <a href="javascript:;">Drop Down</a>
                                            <ul>
                                                <li><a href="">Profile</a></li>
                                                <li><a href="/reserve">Reserve</a></li>
                                                <li><a href="/reserve/history">History</a></li>
                                                <li><a href="/logout">Logout</a></li>
                                            </ul>
                                        </li>
                                <?php } else { ?>
                                    <li><a href="/" class="active">Home</a></li>
                                    <li><a href="/signup">Register</a></li>
                                    <li><a href="/login">Login</a></li>
                                <?php } ?>
                            </ul>
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            

    <!-- ***** Welcome Area Start ***** -->
    <!-- <div class="welcome-area" id="welcome">  -->
        <!-- ***** Header Text Start ***** -->
        <!-- <div class="header-text"> -->
            <div class="forms">
                <!-- <div class="row"> -->
                    <br><br><br>
                        <form action="/signup/register" method="post">
      
                                <h1 class="form-header">Sign Up</h1>
                                
                                <fieldset>
                                    <label for="firstName">First Name:</label>
                                    <input type="text" id="name" name="firstName">

                                    <label for="lastName">Last Name:</label>
                                    <input type="text" id="name" name="lastName">

                                    <label for="email">Email:</label>
                                    <input type="email" id="mail" name="email">
                                    
                                    <label for="pass">Password:</label>
                                    <input type="password" id="password" name="pass">

                                    <label for="confirm">Password:</label>
                                    <input type="password" id="password" name="confirm">

                                    <label for="country">Country:</label>
                                    <input type="text" id="name" name="country">

                                    <label for="phone">Phone Number:</label>
                                    <input type="text" id="name" name="phone">
                                </fieldset>
                            <button class="formsbutton" type="submit">Sign Up</button>
                        </form>
                        <br>
                <!-- </div> -->
            </div>
        <!-- </div> -->
        <!-- ***** Header Text End ***** -->
    <!-- </div> -->
    <!-- ***** Welcome Area End ***** -->


        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <p class="copyright">Octavianus Giovanni Yauanatan - 05111740000113 -- PBKK C FP Individu</p>
                    </div>
                </div>
            </div>
        </footer>
         <!-- Load JS -->
         <?= $this->assets->outputJs() ?>
    </body>

</html>
