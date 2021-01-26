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
   
    
   
    <!--====== SLIDER PART START ======-->
    
    @include('frontlayout.slider')
    
    <!--====== SLIDER PART ENDS ======-->
   
    <!--====== CATEGORY PART START ======-->
    
    @include('frontlayout.category')
    
    <!--====== CATEGORY PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
    
    @include('frontlayout.welcome')
    
    <!--====== ABOUT PART ENDS ======-->
   
    <!--====== PROJECT PART START ======-->
    
    @include('frontlayout.project')
    
    <!--====== PROJECT PART ENDS ======-->
   
    <!--====== VIDEO FEATURE PART START ======-->
    
    @include('frontlayout.video')
    
    <!--====== VIDEO FEATURE PART ENDS ======-->
   
    <!--====== TEASTIMONIAL PART START ======-->
    
    @include('frontlayout.testimony')
    
    <!--====== TEASTIMONIAL PART ENDS ======-->
   
    <!--====== NEWS PART START ======-->
    
    @include('frontlayout.news')
    
    <!--====== NEWS PART ENDS ======-->
   
    <!--====== PATNAR LOGO PART START ======-->
    
    @include('frontlayout.partner')
    
    <!--====== PATNAR LOGO PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
    
    @include('frontlayout.footer')
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
	@include('frontlayout.javascript')

</body>
</html>

