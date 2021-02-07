<!doctype html>
<html lang="en">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    @include('frontlayout.title')
    <!--Css-->
    @include('frontlayout.css')


</head>

<body>

    <!--====== HEADER PART START ======-->

    <header id="header-part">
        {{--@include('frontlayout.topheader')--}}

        @include('frontlayout.menu')
    </header>

    <!--====== HEADER PART ENDS ======-->



    <!--====== BREADCRUMB PART START ======-->

    @include('frontlayout.breadcrumb')

    <!--====== BREADCRUMB PART ENDS ======-->

   <!--====== MORE ON ACTIVITIES PART START ======-->

   <section id="event-single" class="pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="events-area">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="single-event-list-2 mt-30">
                       <div class="event-cont" style="text-align:center;">
                            <h3>World Education Day Conference</h3>
                           <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                            <span><i class="fa fa-user"></i> By Admin</span>
                       </div>
                       <div class="event-thum">
                           <img src="images/event/e2-1.jpg" alt="Event">
                       </div>
                       <p>
                          Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt mauris.
                       </p>
                       <p>
                          Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt mauris.
                       </p>
                       <p>
                          Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt mauris.
                       </p>
                   </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-form" style="text-align:center;">
                            <a href="/activities" button type="submit" class="main-btn">Back</button></a>
                        </div> <!-- single form -->
                    </div>
                </div> <!-- row -->
            </div> <!-- events-area -->
        </div> <!-- container -->
    </section>

    <!--====== EVENTS PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    @include('frontlayout.footer')

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TP PART START ======-->

    <a href="#" class="back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!--====== BACK TO TP PART ENDS ======-->
	@include('frontlayout.javascript')

</body>
</html>
