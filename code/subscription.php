<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="subscription.css">
</head>
<body>
    <div class="container">
        <div class="col-1">
            <img src="img/dragoround.jfif" class="logo">
            <ul>
                <li><img src="img/star.png" > movies and sereis </li>
                <li><img src="img/star.png" >listen music with friends</li>
                <li> <img src="img/star.png" >watch party with friends</li>
                <li><img src="img/star.png" >youtube series play list available</li>
            </ul>
        </div>
        <div class="col-2">

            <h2><img src="img/star.png" >our plans</h2>
            <form >
                <label for="free">
                    <input type="radio" name="plans" id="free">
                    <span>FREE</span>
                </label>
                <label for="paid">
                    <input type="radio" name="plans" id="paid">
                    <span>5$ <small>/month</small></span> NO limit
                </label>
                <br>
                <p>YOUR NAME</p>
                <input type="text" placeholder="Enter your Name">
                <p>EMAIL</p>
                <input type="email" name="email" placeholder="Enter your mail" required>
                <button type="submit" onclick="window.location.href ='subscriptionsucces.php'"; name="subscribe" value="subscribe">Subscribe</button>
            </form>
        </div>
    </div>
    
</body>
</html>