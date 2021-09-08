@extends('layout.master')

@section('title', 'California Burrito | Loyalty')
 <link rel="stylesheet" href="css/loyalty/style.css">
 <link rel="stylesheet" href="css/loyalty/responsive.min.css">
@section('content')
 <div class="mainLoyaltyDiv">
        <div class="bannerDiv">
            <div class="subBannerDiv">
                <img src="/img/loyalty/Burrito-club-New.png" alt="" srcset="">
                <p class="welcomeText">A LOYALTY PROGRAM <br>
                    JUST FOR YOU</p>
            </div>
        </div>
        <div class="textDiv">
            <div id="textcenterloyalty">

           
            <div class="rewardImg">
                <img src="/img/loyalty/How-will-you-be-rewarded-by-burrito-club.png?v=duwduewhfuieh" alt="" srcset="">
            </div>

            <div class="mainText" id="text1">
                <div class="title">
                    <p>EAT</p>
                </div>
                <div class="newdesc">
                    <p>Visit our store and register yourself to become the member!</p>
                </div>
            </div>
            <!-- Earn text -->

            <div class="mainText">
                <div class="title">
                    <p>EARN</p>
                </div>
                <div class="newdesc">
                    <p>You automatically get 10 points every Rs.250 spent in-store. <br>
                        You may also scan your bills ordered online with <br>
                        Swiggy, Zomato, Amazon to accumulate these points.</p>
                </div>
            </div>



            <!-- Enjoy text -->

            <div class="mainText">
                <div class="title">
                    <p>ENJOY</p>
                </div>
                <div class="newdesc">
                    <p>Every time you hit 100 points, you'll get 1 free meal on us!</p>
                </div>
            </div>


            <!-- Enjoy points Img -->

            <div class="enjoypoints">
                <img src="/img/loyalty/Check-your-point.png" alt="" id="checkpointBtn">
            </div>

            <!-- doted Bg -->

            <div class="dottedBG">
                <div class="mainText">
                    <div class="title">
                        <p>HOW TO ENROLL?</p>
                    </div>
                    <div class="newdesc">
                        <p>Buy a meal. Register yourself <br>
                            and you will receive a message.</p>
                        <p> With every transaction, you will get <br>
                            an update on your current points.</p>
                        <p> Once you reach 100 points, you will receive a code <br>
                            which can be redeemed at any outlet near you <br>
                            Once you receive the code, the points <br>
                            will get deducted automatically.</p>
                    </div>
                </div>
            </div>

            <div class="faqImg">
                <img src="/img/loyalty/FAQ.png" alt="">
            </div>

            <div class="faqText">
                <div class="title">
                    <p>How do I check the number of points I have?</p>
                </div>
                <div class="newdesc">
                    <p>You will receive an SMS after placing an order. <br>
                        You may also login to your account at <br><a id="orderLink"
                            href="https://order.californiaburrito.in/accounts"
                            target="_blank">https://order.californiaburrito.in/accounts</a>
                        <br>and open the section “Burrito Club points”
                    </p>

                </div>
                <div class="title">
                    <p>Do points expire?</p>
                </div>
                <div class="newdesc">
                    <p>Yes, points expire after 180 days on rotational basis.</p>
                </div>

                <div class="title">
                    <p>Do Coupons Expire?</p>
                </div>
                <div class="newdesc">
                    <p>Yes, coupons expire after 90 days</p>
                </div>

                <div class="title">
                    <p>How do I receive my free meal coupon?</p>
                </div>
                <div class="newdesc">
                    <p>You will receive a coupon code in an SMS. <br>
                        You may also visit <br><a id="cbaccounts" href="https://order.californiaburrito.in/accounts"
                            target="_blank">https://order.californiaburrito.in/accounts</a>
                        <br>
                        and open the section "Burrito Club points” <br>to see your coupon codes

                    </p>
                </div>

                <div class="title">
                    <p>Is there a membership fee?</p>
                </div>
                <div class="newdesc">
                    <p>No</p>
                </div>

                <div class="title">
                    <p>Which stores are points valid in?</p>
                </div>
                <div class="newdesc">
                    <p>Visits to all stores will earn you burrito club points</p>
                </div>
                <div class="title">
                    <p>Are points valid between cities?</p>
                </div>
                <div class="newdesc">
                    <p>Currently, points will accumulate at a city-level.</p>
                </div>

                <div class="title">
                    <p>How do I redeem the offer?</p>
                </div>
                <div class="newdesc">
                    <p>To redeem, visit a store and <br>share your coupon code during billing.</p>
                </div>
                <div class="title"><p> Can I redeem multiple rewards at once?</p></div>
                <div class="newdesc">
                    <p>No, you can only redeem one coupon per day. <br>
                        No other offer can clubbed with this offer.</p>
                </div>
                 <div class="lastText">
                <div class="title">
                    <p>Can coupons be redeemed for online orders?</p>
                </div>
                <div class="newdesc">
                    <p>No, coupons are not valid for any online orders.
                    </p>
                </div>
                </div>
            </div>
             </div>
        </div>
    </div>

<script>
$('#checkpointBtn').on('click',function()
{
 window.open('https://order.californiaburrito.in/accounts' , '_blank');
})
</script>
@endsection
