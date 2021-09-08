@extends('layout.master')

@section('title', 'California Burrito | Press')

<link rel="stylesheet" href="css/press/style.css">
<link rel="stylesheet" href="css/press/responsive.min.css">
@section('content')

 <div class="mainDiv">
        <div class="sound-press-img">
            <img src="img/press/Icons.png" alt="">
        </div>
        <div class="head-button">
            <img src="img/press/Media-kit.png" alt="" srcset="" id="mediakitBtn">
            <a href="/contact"><img src="img/press/Contact-us.png" alt="" srcset="" ></a>
        </div>
        <div class="company-list-name">
            <img src="img/press/Logos.png" alt="">
        </div>
        <div class="textcontrol">
       
        <div class="text-link-1 text-link-head left—side">
            <div class="title">
                <p>Taking the healthy route</p>
            </div>
            <div class="text-link">
                <p><a href="https://www.deccanherald.com/metrolife/taking-the-healthy-route-722850.html"
                        target="_blank"> https://www.deccanherald.com/metrolife/taking-the-healthy-route-722850.html</a>
                </p>
            </div>
            <div class="text-date">
                <p>12 mar 2019</p>
            </div>
        </div>
        <!-- text added2  -->
        <div class="text-link-1 text-link-head left—side">
            <div class="title">
                <p>California Burrito to open 15 restarants across India by 2019−end</p>
            </div>
            <div class="text-link">
                <p><a href="https://www.indiaretailing.com/2019/03/05/food/food-
service/california-burrito-to-open-15-restaurants-across-
india-by-2019-end/" target="_blank">
                        https://www.indiaretailing.com/2019/03/05/food/food-
                        service/california-burrito-to-open-15-restaurants-across-
                        india-by-2019-end/</a>
                </p>
            </div>
            <div class="text-date">
                <p>5 mar 2019</p>
            </div>
        </div>

        <!-- text added3  -->
        <div class="text-link-1 text-link-head left—side">
            <div class="title">
                <p>Wrapped in happiness</p>
            </div>
            <div class="text-link">
                <p><a href="https://www.deccanherald.com/content/654753/
wrapped-happiness.html" target="_blank">
                        https://www.deccanherald.com/content/654753/
wrapped-happiness.html</a>
                </p>
            </div>
            <div class="text-date">
                <p>19 mar 2018</p>
            </div>
        </div>

        <!-- text added 4 -->
        <div class="text-link-1 text-link-head left—side">
            <div class="title">
                <p>Nine ventures from expat entrepreneurs
                    giving their best shot in the Indian
                    startup boom</p>
            </div>
            <div class="text-link">
                <p><a href="https://economictimes.indiatimes.com/news/politics-
and-nation/nine-ventures-from-expat-entrepreneurs-
giving-their-best-shot-in-the-indian-startup-boom/
articleshow/47399387.cms" target="_blank">
                        https://economictimes.indiatimes.com/news/politics-
and-nation/nine-ventures-from-expat-entrepreneurs-
giving-their-best-shot-in-the-indian-startup-boom/
articleshow/47399387.cms</a>
                </p>
            </div>
            <div class="text-date">
                <p>24 may 2015</p>
            </div>
        </div>

        <!-- text added 5 -->
        <div class="text-link-1 text-link-head left—side">
            <div class="title">
                <p>Awesome Startup Employee From an
                    office boy to Operations Manager,
                    California Burrito: Ashok Swain's climb
                    up the success ladder</p>
            </div>
            <div class="text-link">
                <p><a href="https://yourstory.com/2015/01/ase-ashok-swain-
california-burrito/amp/" target="_blank">
                        https://yourstory.com/2015/01/ase-ashok-swain-
                        california-burrito/amp/</a>
                </p>
            </div>
            <div class="text-date">
                <p> 1 february 2015</p>
            </div>
        </div>


        <!-- text added  -->
        <div class="text-link-1 text-link-head left—side">
            <div class="title">
                <p>Foreign Entrepreneurs jump into India's
                    start-up mix</p>
            </div>
            <div class="text-link">
                <p><a href="https://www.livemint.com/Companies/HaqHNOifzBMPsH
QdlyDBDP/Foreign-entrepreneurs-jump-into-Indias-
startup-mix.html" target="_blank">
                        https://www.livemint.com/Companies/HaqHNOifzBMPsH
                        QdlyDBDP/Foreign-entrepreneurs-jump-into-Indias-
                        startup-mix.html</a>
                </p>
            </div>
            <div class="text-date">
                <p>11 june 2014</p>
            </div>
        </div>


        <!-- text added  -->
        <div class="text-link-1 text-link-head left—side">
            <div class="title">
                <p>Bangalore set to get a taste of Mexico
                    via three Americans</p>
            </div>
            <div class="text-link">
                <p><a href="http://archive.indianexpress.com/news/bangalore-
set-to-get-a-taste-of-mexico-via-three-
americans/996893/" target="_blank">
                        http://archive.indianexpress.com/news/bangalore-
                        set-to-get-a-taste-of-mexico-via-three-
                        americans/996893/</a>
                </p>
            </div>
            <div class="text-date">
                <p>3 sep 2012</p>
            </div>
        </div>

        <!-- text added  -->
        <div class="text-link-1 text-link-head left—side" id="lastpresstext">
            <div class="title">
                <p>Bringing the Burrito to Bangalore</p>
            </div>
            <div class="text-link">
                <p><a href="https://www.wsj.com/articles/BL-IRTB-16813" target="_blank">
                        https://www.wsj.com/articles/BL-IRTB-16813
                    </a>
                </p>
            </div>
            <div class="text-date">
                <p>1 oct 2012</p>
            </div>
        </div>
         </div>
    </div>

    <script>
    $('#mediakitBtn').on('click',function()
{
 window.open('https://drive.google.com/drive/folders/1e4BDTMnhqzAPxDJN6nSzEaCzLDJx-Pza?usp=sharing' , '_blank');
})
    </script>
@endsection