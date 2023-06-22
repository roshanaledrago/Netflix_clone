<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NETFLIX INDIA</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header">
    <nav>
        <img src="img/dragoround.jfif" alt="logo">
        <div>
            <button class="language-btn"><img src="images/down-icon.png" >
                <select name="languages" id="language-btn">
                    <option value="english">english</option>
                    <option value="hindhi">hindi</option>
                </select></button>
            <a href="register.php "class="link-secondary"></a>
            <button type="submit" onclick="window.location.href = 'login.php';" >sign in</button> 
            </button>
        </div>
    </nav>
    <div class="header-content">
        <h1>Unlimited movies, TV shows and more.</h1>
        <h3>Watch anywhere . Cancel anytime</h3>
        <p>Ready to watch? Enter your email to create or restart your membership</p>
        <form class="email-signup">
            <input type="email" placeholder="Email adddress" required>
            <button type="submit" onclick="window.location.href = 'subscription.php';" >Get started</button> 

        </form>
    </div>
    </div>
    <div class="features">
        <div class="row">
            <div class="text-col">
                <h2>watch online</h2>
                <p>Watch on smart TVs, PlayStation, Xbox, Chromecast, Apple TV, Blu-ray players and more.</p>
            </div>
            <div class="img-col">
                <img src="images/feature-1.png" alt="">
            </div>
        </div>
    </div>
    <div class="features">
        <div class="row">
            <div class="img-col">
                <img src="images/feature-2.png" alt="">
            </div>
            <div class="text-col">
                <h2>Download your shows to watch offline.</h2>
                <p>Save your favourites easily and always have something to watch.</p>
            </div>
        </div>
    </div>
    <div class="features">
        <div class="row">
            <div class="text-col">
                <h2>Watch everywhere.</h2>
                <p>Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV.</p>
            </div>
            <div class="img-col">
                <img src="images/feature-3.png" alt="">
            </div>
        </div>
    </div>
    <div class="features">
        <div class="row">
            <div class="img-col">
                <img src="images/feature-4.png" alt="">
            </div>
            <div class="text-col">
                <h2>stream music with friends and watch movies with friends.</h2>
                <p>Watch movies with friends and stream music .</p>
            </div>
        </div>
    </div>
    <div class="faq">
        <h2>Frequently asked questions</h2>
        <ul class="accordion">
            <li>
                <input type="radio" name="accordion" id="first">
                <label for="first">What is VIBE</label>
                <div class="content">
                    <p>VIBE IS A STREAMING PLATFORM CAN WATCH MOVIES AND SERIES AND EVEN HAS AN INBUILT CLONE LIKE SPOTIFY ETC .</p>
                </div>
            </li>
            <li>
                <input type="radio" name="accordion" id="second">
                <label for="second">How much does thE VIBE cost?</label>
                <div class="content">
                    <p>ITS COMPLETLEY FREE FOR NOW LATER IF IT REACHES A GOOD POTENTIAL WE CAN MONTEZIED THIS APP ACCORDING TO THE CUSTOMER.</p>
                </div>
            </li>
            <li>
                <input type="radio" name="accordion" id="third">
                <label for="third">CAN WE STREAM WITH FRIENDS AND WATCH MOVIES ONLINE</label>
                <div class="content">
                    <p>YES INFACT WE CAN WATCH WITH FRIENDS LIKW A WATCH PARTY AND YOU CAN ALSO LISTEN TO AUDIO AND SONGS WITH FRIENDS AND VIBE.</p>
                </div>
            </li>
            <li>
                <input type="radio" name="accordion" id="fourth">
                <label for="fourth">How do i STREAM?</label>
                <div class="content">
                    <p>SIMPLE JUST USE THE STREAM BUTTON ON THE MOVIE SECTION WHERE YOU CAN GET AQR CODE GENERATOR SHARE IT WITH YOUR FRIEND SO THAT HE CAN JOINYOUR PARTY TO WATCH THE ENTIRE MOVIE.</p>
                </div>
            </li>
            <li>
                <input type="radio" name="accordion" id="fifth">
                <label for="fifth">What can i watch on vibe?</label>
                <div class="content">
                    <p>EVERY CONTENTS MADE ON VIBE IS ORGINALLY MADE BUT VARIETY OF SERIES WE ALSO PROVIDE A GOOD LINK S WITH YOUTUBE TOP S WATCH ALSO AND THAT MAKES VIBE.COM MOST POPULAR.</p>
                </div>
            </li>
            <li>
                <input type="radio" name="accordion" id="sixth">
                <label for="sixth">Is Vibe Good for kids?</label>
                <div class="content">
                    <p>VIBE CAN PROVIDE A SEPERATE PLATFORM FR KIDS IF THIS IS A GOOD DEVELOPMENT OF PRODUCT .</p>
                </div>
            </li>
        </ul>
        
    </div>
    <div class="footer">
        <h2>Questions? call 000-000-000</h2>
        <div class="row">
            <div class="col">
                <a href="#">FAQ</a>
                <a href="#">Investor relation</a>
                <a href="#">Privacy</a>
                <a href="#">speed test</a>
            </div>
            <div class="col">
                <a href="#">help center</a>
                <a href="#">jobs</a>
                <a href="#">cookies preferences</a>
                <a href="#">legal notices</a>
            </div>
            <div class="col">
                <a href="#">account</a>
                <a href="#">ways to watch</a>
                <a href="#">corporate information</a>
                <a href="#">only on netflix</a>
            </div>
            <div class="col">
                <a href="#">Media center</a>
                <a href="#">terms of use</a>
                <a href="#">contact us</a>
            </div>
        </div>
        <button class="language-btn">english <img src="images/down-icon.png" ></button>
        <p class="copyright-txt">Drago</p>
    </div>
</body>
</html>