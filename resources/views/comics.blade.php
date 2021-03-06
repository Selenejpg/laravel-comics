<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Fumetti</title>
</head>
<body>
    <header>
        <div>
            <img src="{{asset('images/dc-logo.png')}}" alt="">
        </div>
        <div>
            <ul>
                <li>
                    <a href="url('/')">CHARACTERS</a>
                </li>
                <li>
                    <a href="url('/comics')">COMICS</a>
                </li>
                <li><a href="">MOVIES</a></li>
                <li><a href="">TV</a></li>
                <li><a href="">GAMES</a></li>
                <li><a href="">COLLECTIBLES</a></li>
                <li><a href="">VIDEOS</a></li>
                <li><a href="">FANS</a></li>
                <li><a href="">NEWS</a></li>
                <li><a href="">SHOP</a></li>
            </ul> 
        </div>
    </header>

    <div class="container bg-image">
      
    </div>

    <main>
        <div class="margin">
            <div class="current">
                <h1>CURRENT SERIES</h1>
            </div>
        </div>

        <div class="products">
            <div class="main-active product">
                <div class="box">
      
                </div>
            </div>
        </div>

        <div class="flex">
            <div class="button">
            <h1>LOAD MORE</h1>
            </div> 
        </div>
          
        <div class="main-barra">
            <ul>
                <li>
                    <img class="icon" src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
                    <span>DIGITAL COMICS</span>
                </li>
                <li>
                    <img class="icon" src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
                    <span>DC MERCHANDISE</span>
                </li>
                <li>
                    <img class="icon" src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
                    <span>SUBSCRIPTION</span>
                </li>
                <li>
                    <img class="icon-locator" src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
                    <span>COMIC SHOP LOCATOR</span>
                </li>
                <li class="visa">
                    <img class="icon-visa" src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">
                    <span>DC POWER VISA</span>
                </li>
            </ul>
        </div> 
    </main>

    <footer>
        <div class="col"></div>
        <div class="col padding">
            <h1>DC COMICS</h1>
            <ul class="style-type">
                <li>Characters</li>
                <li>Comics</li>
                <li>Movies</li>
                <li>TV</li>
                <li>Games</li>
                <li>Videos</li>
                <li>News</li>
            </ul>

            <h1  style="margin-top: 15px;">SHOP</h1>
            <ul class="style-type">
                <li>Shop DC</li>
                <li>Shop DC Collectibles</li>
            </ul>

        </div>

        <div class="col padding">
            <h1>DC</h1>
            <ul class="style-type">
                <li>Terms of use</li>
                <li>Privacy policy (New)</li>
                <li>Ad Choices</li>
                <li>Advertising</li>
                <li>Jobs</li>
                <li>Subscriptions</li>
                <li>Talent Workshops</li>
                <li>CPSC Certificates</li>
                <li>Ratings</li>
                <li>Shop Help</li>
                <li>Contact Us</li>
            </ul>
        </div>

        <div class="col padding">
            <h1>SITES</h1>
            <ul class="style-type">
                <li>DC</li>
                <li>MAD Magazine</li>
                <li>DC Kids</li>
                <li>DC Universe</li>
                <li>DC Power visa</li>
            </ul>
        </div>

        <div class="col"></div>
    
        <div class="col">
            <img class="mega-logo" src="{{asset('images/dc-logo-bg.png')}}" alt="">
        </div> 

        <div class="col"></div>
      
    </footer>

    <div class="flex-due all">
       <div class="button-1 flex-li"><h2>SIGN-UP NOW!</h2></div>
       <div class="flex-li font-size">
           <h1 class"followus">FOLLOW US</h1>
           <div class="marginicons">
                <ul>
                    <li><img src="{{asset('images/footer-facebook.png')}}" alt=""></li>
                    <li><img src="{{asset('images/footer-twitter.png')}}" alt=""></li>
                    <li><img src="{{asset('images/footer-youtube.png')}}" alt=""></li>
                    <li><img src="{{asset('images/footer-pinterest.png')}}" alt=""></li>
                    <li><img src="{{asset('images/footer-periscope.png')}}" alt=""></li>
                </ul> 
           </div>
           
       </div>
    </div>
        
</body>
</html>
