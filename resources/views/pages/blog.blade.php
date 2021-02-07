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
    <section class="pt-105 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="privacy-desc">
                    <h2 class="mb-30">Our Blog</h2>
                        <p>One of the most important things you should know and never neglect when you own a website or run an online shop is the legal aspect of the trade. In this article, we are going to provide all the information necessary to completely understand privacy policies, how they work and why you need them. </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
   
   <!--====== BLOG PART START ======-->
    
   <section id="blog-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
               <div class="col-lg-8">
                   <div class="single-blog mt-30">
                       <div class="blog-thum">
                           <img src="images/blog/b-1.jpg" alt="Blog">
                       </div>
                       <div class="blog-cont">
                           <a href="blog-single.html"><h3>Few tips for get better results in examination</h3></a>
                           <ul>
                               <li><a href="#"><i class="fa fa-calendar"></i>25 Dec 2018</a></li>
                               <li><a href="#"><i class="fa fa-user"></i>Mark anthem</a></li>
                               <li><a href="#"><i class="fa fa-tags"></i>Education</a></li>
                           </ul>
                           <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus .</p>
                       </div>
                   </div> <!-- single blog -->
                   <div class="single-blog mt-30">
                       <div class="blog-thum">
                           <img src="images/blog/b-2.jpg" alt="Blog">
                       </div>
                       <div class="blog-cont">
                           <a href="blog-single.html"><h3>Few tips for get better results in examination</h3></a>
                           <ul>
                               <li><a href="#"><i class="fa fa-calendar"></i>25 Dec 2018</a></li>
                               <li><a href="#"><i class="fa fa-user"></i>Mark anthem</a></li>
                               <li><a href="#"><i class="fa fa-tags"></i>Education</a></li>
                           </ul>
                           <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus .</p>
                       </div>
                   </div> <!-- single blog -->
                   <nav class="courses-pagination mt-50">
                        <ul class="pagination justify-content-lg-end justify-content-center">
                            <li class="page-item">
                                <a href="#" aria-label="Previous">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="active" href="#">1</a></li>
                            <li class="page-item"><a href="#">2</a></li>
                            <li class="page-item"><a href="#">3</a></li>
                            <li class="page-item">
                                <a href="#" aria-label="Next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>  <!-- courses pagination -->
               </div>
               <div class="col-lg-4">
                   <div class="sidebar">
                       <div class="row">
                           <div class="col-lg-12 col-md-6">
                               {{--
                                <div class="sidebar-search mt-30">
                                   <form action="#">
                                       <input type="text" placeholder="Search">
                                       <button type="button"><i class="fa fa-search"></i></button>
                                   </form>
                               </div>
                               --}} <!-- sidebar search -->
                               <div class="categories mt-30">
                                   <h4>Categories</h4>
                                   <ul>
                                       <li><a href="#">Fronted</a></li>
                                       <li><a href="#">Backend</a></li>
                                       <li><a href="#">Photography</a></li>
                                       <li><a href="#">Technology</a></li>
                                       <li><a href="#">GMET</a></li>
                                       <li><a href="#">Language</a></li>
                                       <li><a href="#">Science</a></li>
                                       <li><a href="#">Accounting</a></li>
                                   </ul>
                               </div>
                           </div> <!-- categories -->
                           <div class="col-lg-12 col-md-6">
                               <div class="sidebar-post mt-30">
                                   <h4>Popular Posts</h4>
                                   <ul>
                                       <li>
                                            <a href="#">
                                                <div class="single-post">
                                                   <div class="thum">
                                                       <img src="images/blog/blog-post/bp-1.jpg" alt="Blog">
                                                   </div>
                                                   <div class="cont">
                                                       <h6>Introduction to languages</h6>
                                                       <span>20 Dec 2018</span>
                                                   </div>
                                               </div> <!-- single post -->
                                            </a>
                                       </li>
                                       <li>
                                            <a href="#">
                                                <div class="single-post">
                                                   <div class="thum">
                                                       <img src="images/blog/blog-post/bp-2.jpg" alt="Blog">
                                                   </div>
                                                   <div class="cont">
                                                       <h6>How to build a game with java</h6>
                                                       <span>10 Dec 2018</span>
                                                   </div>
                                               </div> <!-- single post -->
                                            </a>
                                       </li>
                                       <li>
                                            <a href="#">
                                                <div class="single-post">
                                                   <div class="thum">
                                                       <img src="images/blog/blog-post/bp-1.jpg" alt="Blog">
                                                   </div>
                                                   <div class="cont">
                                                       <h6>Basic accounting from primary</h6>
                                                       <span>07 Dec 2018</span>
                                                   </div>
                                               </div> <!-- single post -->
                                            </a>
                                       </li>
                                   </ul>
                               </div> <!-- sidebar post -->
                           </div>
                       </div> <!-- row -->
                   </div> <!-- sidebar -->
               </div>
           </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== BLOG PART ENDS ======-->
   
    <!--====== PARTNER PART START ======-->
    
    {{--@include('frontlayout.partner')--}}
    
    <!--====== PARTNER PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
    
    @include('frontlayout.footer')
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-arrow-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
	@include('frontlayout.javascript')

</body>
</html>