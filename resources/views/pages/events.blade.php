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
        @include('frontlayout.topheader')
        
        @include('frontlayout.menu')
    </header>
    
    <!--====== HEADER PART ENDS ======-->
   
    
   
    <!--====== BREADCRUMB PART START ======-->
    
    @include('frontlayout.breadcrumb')
    
    <!--====== BREADCRUMB PART ENDS ======-->
    <section class="pt-105 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="privacy-desc">
                    <h2 class="mb-30">Upcoming Events</h2>
                        <p>One of the most important things you should know and never neglect when you own a website or run an online shop is the legal aspect of the trade. In this article, we are going to provide all the information necessary to completely understand privacy policies, how they work and why you need them. </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
   
    <!--====== ABOUT PART START ======-->
    
    @include('frontlayout.activities')
    
    <!--====== ABOUT PART ENDS ======-->
   
    <!--====== PARTNER PART START ======-->
    
    {{--@include('frontlayout.partner')--}}
    
    <!--====== PARTNER PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
    
    @include('frontlayout.footer')
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
	@include('frontlayout.javascript')

</body>
</html>