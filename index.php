<?php
    require('connection.php');
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Charity</title>
</head>

<body>
    <header class="navbar">

        <div class="top">
            <ul>
                <li>Phone: +9108888888</li>
                <li>Email: info@gmail.com</li>
           
            
            
            <?php
             if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
             {
                
                echo"
                <li>
                    <div class='user'>
                        $_SESSION[username]-<a href='logout.php'>LOGOUT</a>
                    </div>
                </li>
                ";
                
             }
             else
             {
                echo"
                <li>
                    <div class='sign-in-up'>
                    <button type='button'  onclick=\"popup('login-popup')\">LOGIN</button>
                    <button type='button' onclick=\"popup('register-popup')\">REGISTER</button>
                    </div>
                </li>
                ";
             }


        ?>

            </ul>
        </div>

        



        <div class="popup-container" id="login-popup">
        <div class="popup">
           <form action="login_register.php" method="post">
            <h2>
                <span>USER LOGIN</span>
                <button type="reset" onclick="popup('login-popup')">X</button>
            </h2>
            <input type="text" placeholder="E-mail or Username" name="email_username">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" class="login-btn" name="login">LOGIN</button>
            </form>
        </div>
    </div>


    <div class="popup-container" id="register-popup">
        <div class="register popup">
            <form action="login_register.php" method="post">
            <h2>
                <span>USER REGISTER</span>
                <button type="reset"  onclick="popup('register-popup')">X</button>
            </h2>
            <input type="text" placeholder="Fullname" name="fullname">
            <input type="text" placeholder="Username" name="username">
            <input type="email" placeholder="E-mail" name="email">
            <input type="password" placeholder="Password" name="password" >
            <button type="submit" class="register-btn" name="register">REGISTER</button>
            </form>
        </div>
    </div>

       

       <!--<div class="popup-container" id="signUp" style="display: none;">
            <h1 class="form-title">Register</h1>
            <button type="reset" class="close-btn" onclick="toggleLoginPopup">X</button>
            <form action="register.php" method="post" >
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="fname" id="fname" placeholder="First Name" required >
                    <label for="fname">First Name</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="lname" id="lname" placeholder="last Name" required >
                    <label for="lname">Last Name</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email" required >
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="password" required >
                    <label for="password">password</label>
                </div>
                <input type="submit" class="btn" value="Sign Up" name="signup">
            </form>

            <p class="or">
                ----------or----------
                <div class="icons">
                    <i class="fab fa-google"></i>
                    <i class="fab fa-facebook"></i>
                </div>
                <div class="links">
                    <p>Alredy have an account ?</p>
                    <button id="signInButton">Sign In</button>
                </div>
            </p>
        </div>

        <div class="popup-container" id="signIn">
            <h1 class="form-title">Sign In</h1>
            <button class="close-btn" onclick="toggleLoginPopup">X</button>
            <form action="register.php" method="post">
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email" required >
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="password" required >
                    <label for="password">password</label>
                </div>
                <p class="recover">
                    <a href="#">Recover Password</a>
                </p>
                <input type="submit" class="btn" value="Sign In" name="signIn">
            </form>

            <p class="or">
                ----------or----------
                <div class="icons">
                    <i class="fab fa-google"></i>
                    <i class="fab fa-facebook"></i>
                </div>
                <div class="links">
                    <p>don't have an account ?</p>
                    <button id="signUpButton">Sign Up</button>
                </div>
            </p>
        </div>-->



        <div class="container">
            <div class="logo">
                <img src="logo.png" alt="">
            </div>
            <div class="main">
                <div class="menu">
                    <nav>
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#aboutSection">About us</a>
                            </li>
                            <li>
                                <a href="#activitiesSection">activities</a>
                            </li>
                            <li>
                                <a href="#educationSection">Education</a>
                            </li>
                            <li>
                                <a href="#gallerySection">Gallery</a>
                            </li>
                        </ul>

                    </nav>
                </div>
                <div class="header-btn">
                    <div class="header-hover">
                        <a href="donation.php">Donate</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header section end-->

    <div class="banner">
        <h1>Together, We Fight <span>For Lives</span></h1>
        <p>
            At CHARITY, we believe that by standing together, we can overcome even the greatest challenges.
            Every action we take, every life we touch is a testament to the power of unity and compassion.
            Together, we turn hope into action and create lasting change.
        </p>
        <button> Start With A Little </button>
    </div>
    </div>
    <!--home section end-->

    <section class="fullContainer" id="aboutSection">

        <div class="container">
            <h2 class="sectionTitle"> About Us</h2>
            <p class="about-font">
                At CHARITY, we are committed to creating a world where every individual has the opportunity to thrive.
                Founded on the
                principles of compassion, integrity and communtiy, our mission is empower those in need by providing
                essential resource,
                education, and support.Join us on the journey to make a difference-one life, one community at a time.
            </p>
        </div>
        <div class="cards">
            <div class="donationBox">
                <div class="title">
                    <h1>Give Donation</h1>
                </div>
                <p>
                    Make a lasting impact, your donation changes lives now.
                </p>
                <button>
                    Donate Now
                </button>
            </div>
            <!--donation end here-->

            <div class="volunteerBox">
                <div class="title">
                    <h1>Become a volunteer</h1>
                </div>
                <p>
                    Make an impact, become a volunteer, and change lives today.
                </p>
                <button>
                    Become Now
                </button>
            </div>
            <!--donation end here-->

            <div class="scholarshipBox">
                <div class="title">
                    <h1>Give scholarship</h1>
                </div>
                <p>
                    Empower futures, give a scholarship,and create new opportunities.
                </p>
                <button>
                    Give Scholarship
                </button>
            </div>
            <!--donation end here-->
        </div>
    </section>

    <section class="activities" id="activitiesSection">

        <div class="container">
            <h2 class="sectionTitle">activities</h2>

            <div class="boxContainer">
                <div class="box">
                    <div class="cardImage"></div>
                    <div class="activitiesTitle">Education To Every Child</div>
                    <div class="donationCount">
                        Donation Goal : <span>Rs 9845</span>
                    </div>
                    <button>Donate Now</button>
                </div>
                <!--box end-->

                <div class="box">
                    <div class="cardImage"></div>
                    <div class="activitiesTitle">Make Life Easier For Them</div>
                    <div class="donationCount">
                        Donation Goal : <span>Rs 9845</span>
                    </div>
                    <button>Donate Now</button>
                </div>
                <!--box end-->

                <div class="box">
                    <div class="cardImage"></div>
                    <div class="activitiesTitle">Bright Future For Kids</div>
                    <div class="donationCount">
                        Donation Goal : <span>Rs 9845</span>
                    </div>
                    <button>Donate Now</button>
                </div>
                <!--box end-->

                <div class="box">
                    <div class="cardImage"></div>
                    <div class="activitiesTitle">Water That Refreshes Lives</div>
                    <div class="donationCount">
                        Donation Goal : <span>Rs 9845</span>
                    </div>
                    <button>Donate Now</button>
                </div>
                <!--box end-->

            </div>
            <!--boxContainer end-->
        </div>

    </section>

    <!--Activities-Section end here-->

    <section class="education" id="educationSection">
        <div class="sectionTitle"> Education </div>
        <div class="container">


            <div class="educationContainer">
                <h3>
                    Knowledge Transforms Lives, Secures<br />
                    <strong>BRIGHT FUTURES</strong>
                </h3>
                <p>
                    Education is the cornerstone of a brighter future, at CHARITY, We
                    are dedicated to make quality education accessible to all. Join us
                    in our mission to transform lives through education and create a
                    world where every child has the opportunity to succeed.
                </p>
                <button>EXPLORE NOW</button>
            </div>
        </div>
    </section>
    <!--educationSection end here-->


    <section class="gallery" id="gallerySection">
        <div class="container">
            <div class="sectionTitle">Gallery</div>

            <div class="galleryContainer">
                <div class="item">
                    <span class="title">Image Title</span>
                    <img src="NGO/gallery6.jpg" alt="">
                </div>
                <!--item-->

                <div class="item">
                    <span class="title">Image Title</span>
                    <img src="NGO/gallery4.jpg" alt="">
                </div>
                <!--item-->

                <div class="item">
                    <span class="title">Image Title</span>
                    <img src="NGO/gallery3.jpg" alt="">
                </div>
                <!--item-->

                <div class="item">
                    <span class="title">Image Title</span>
                    <img src="NGO/gallery10.jpg" alt="">
                </div>
                <!--item-->

                <div class="item">
                    <span class="title">Image Title</span>
                    <img src="NGO/gallery5.jpg" alt="">
                </div>
                <!--item-->

                <div class="item">
                    <span class="title">Image Title</span>
                    <img src="NGO/gallery11.jpg" alt="">
                </div>
                <!--item-->

                <div class="item">
                    <span class="title">Image Title</span>
                    <img src="NGO/gallery7.jpg" alt="">
                </div>
                <!--item-->

                <div class="item">
                    <span class="title">Image Title</span>
                    <img src="NGO/gallery8.jpg" alt="">
                </div>
                <!--item-->
            </div>

        </div>
    </section>
    <!--Gallery Section end here-->



    <section class="join" id="joinSection">
        <div class="container">
            <div class="joinTitle">ADOPT A CHILD & <span>SAVE LIVES</span></div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Earum, blanitiis unde aspernatur deserunt vertatis, autem
                perspiciatis volupatatem expalicabo exercitationen quos
                sapiente qui. vel nobis aut alias tempore vero,aliquam
                soluta?
            </p>
            <button class="joinNow">JOIN US</button>
            <button class="adoptBtn">ADOPT A CHILD</button>
        </div>
    </section>
    <!--joinSection end here-->

    <footer>
        <div class="container">
            <div class="newsLetterComtainer">
                <img src="photos/charity/logo1.png" alt="">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Dolorem reprehenderit quam nobis possimus velit?
                </p>
                <input type="text" placeholder="Enter your email id">
            </div>
            <!--newsLetterContainer-->

            <div class="linkContainer">
                <div class="title">Useful Links</div>
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#aboutSection">About us</a>
                    </li>
                    <li>
                        <a href="#activitiesSection">Activities</a>
                    </li>
                    <li>
                        <a href="#educationSection">Education</a>
                    </li>
                    <li>
                        <a href="#gallerySection">Gallery</a>
                    </li>
                    <li>
                        <a href="#joinSection">join us</a>
                    </li>
                </ul>
            </div>
            <!--linkContainer-->

            <div class="conectContainer">
                <div class="title">Conect With Us</div>
                <p>
                    Ambedkar colony,Nowlakha,Deoghar<br />
                    815351,Jharkhand
                </p>
                <p>info@ngo.com </p>
                <p>(+91)9608715157</p>
            </div>
            <!--conectContainer-->

        </div>
    </footer>

<?php

    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
    {
        echo "<h1 style='text-align: center; margin-top: 200px; color: #fff'> welcome to the website . $_SESSION[username]    </h1>";
    }

?>



    <!--Coustom Js file link-->
    <script src="script.js"></script>
</body>

</html>