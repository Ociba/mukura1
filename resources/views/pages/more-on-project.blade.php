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

    <!--====== HEADER PART userT ======-->

    <header id="header-part">
        {{--@include('frontlayout.topheader')--}}

        @include('frontlayout.menu')
    </header>

    <!--====== HEADER PART ENDS ======-->



    <!--====== BREADCRUMB PART userT ======-->

    @include('frontlayout.breadcrumb')

    <!--====== BREADCRUMB PART ENDS ======-->
    <!--====== COURSES SINGEl PART userT ======-->
    
    <section id="courses-single" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="courses-single-left mt-30">
                        <div class="title" style="text-align:center;">
                            <h3>Learn basic javascript from usert for beginner</h3>
                        </div> <!-- title -->
                        <div class="course-terms" style="text-align:center;">
                            <ul>
                                <li>
                                    <div class="teacher-name">
                                        <div class="thum">
                                            <img src="images/course/teacher/t-1.jpg" alt="Teacher">
                                        </div>
                                        <div class="name">
                                            <span>Teacher</span>
                                            <h6>Mark anthem</h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="course-category">
                                        <span>Category</span>
                                        <h6>Education </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="review">
                                        <span>Members</span>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i></a></li>
                                            <li class="rating">(20 Members)</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- course terms -->
                        
                        <div class="courses-single-image pt-50">
                            <img src="images/gallery/1.jpg" alt="Courses">
                        </div> <!-- courses single image -->
                        
                        <div class="courses-tab mt-30">
                            <ul class="nav nav-justified" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Project Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a id="curriculum-tab" data-toggle="tab" href="#curriculum" role="tab" aria-controls="curriculum" aria-selected="false">Project Details</a>
                                </li>
                                <li class="nav-item">
                                    <a id="instructor-tab" data-toggle="tab" href="#instructor" role="tab" aria-controls="instructor" aria-selected="false">Instructor</a>
                                </li>
                                <li class="nav-item">
                                    <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Gallery</a>
                                </li>
                            </ul>
                            
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                    <div class="overview-description">
                                        <div class="single-description pt-40">
                                            <h6>Project Summary</h6>
                                            <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus .</p>
                                        </div>
                                        <div class="single-description pt-40">
                                            <h6>Objectives</h6>
                                            <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus .</p>
                                        </div>
                                    </div> <!-- overview description -->
                                </div>
                                <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                                    <div class="curriculum-cont">
                                        <div class="title">
                                            <h6>Learn basic javascript Lecture userted</h6>
                                        </div>
                                        <div class="accordion" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.1</span></li>
                                                            <li><span class="head">What is javascript</span></li>
                                                            <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 00.30.00</span></span></li>
                                                        </ul>
                                                    </a>
                                                </div>

                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Ut quis scelerisque risus, et viverra nisi. Phasellus ultricies luctus augue, eget maximus felis laoreet quis. Maecenasbibendum tempor eros.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="card">
                                                <div class="card-header" id="headingTow">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseTow" aria-expanded="true" aria-controls="collapseTow">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.2</span></li>
                                                            <li><span class="head">What is javascript</span></li>
                                                            <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 00.30.00</span></span></li>
                                                        </ul>
                                                    </a>
                                                </div>

                                                <div id="collapseTow" class="collapse" aria-labelledby="headingTow" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Ut quis scelerisque risus, et viverra nisi. Phasellus ultricies luctus augue, eget maximus felis laoreet quis. Maecenasbibendum tempor eros.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.3</span></li>
                                                            <li><span class="head">What is javascript</span></li>
                                                            <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 00.30.00</span></span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Ut quis scelerisque risus, et viverra nisi. Phasellus ultricies luctus augue, eget maximus felis laoreet quis. Maecenasbibendum tempor eros.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingFore">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseFore" aria-expanded="false" aria-controls="collapseFore">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.4</span></li>
                                                            <li><span class="head">What is javascript</span></li>
                                                            <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 00.30.00</span></span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapseFore" class="collapse" aria-labelledby="headingFore" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Ut quis scelerisque risus, et viverra nisi. Phasellus ultricies luctus augue, eget maximus felis laoreet quis. Maecenasbibendum tempor eros.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingFive">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.5</span></li>
                                                            <li><span class="head">What is javascript</span></li>
                                                            <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 00.30.00</span></span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Ut quis scelerisque risus, et viverra nisi. Phasellus ultricies luctus augue, eget maximus felis laoreet quis. Maecenasbibendum tempor eros.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="card">
                                                <div class="card-header" id="headingSix">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.6</span></li>
                                                            <li><span class="head">What is javascript</span></li>
                                                            <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 00.30.00</span></span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Ut quis scelerisque risus, et viverra nisi. Phasellus ultricies luctus augue, eget maximus felis laoreet quis. Maecenasbibendum tempor eros.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="card">
                                                <div class="card-header" id="headingSeven">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.7</span></li>
                                                            <li><span class="head">What is javascript</span></li>
                                                            <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 00.30.00</span></span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Ut quis scelerisque risus, et viverra nisi. Phasellus ultricies luctus augue, eget maximus felis laoreet quis. Maecenasbibendum tempor eros.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- curriculum cont -->
                                </div>
                                <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                                    <div class="instructor-cont">
                                        <div class="instructor-author">
                                            <div class="author-thum">
                                                <img src="images/instructor/i-1.jpg" alt="Instructor">
                                            </div>
                                            <div class="author-name">
                                                <a href="#"><h5>John Doe</h5></a>
                                                <span>Senior WordPress Developer</span>
                                                <ul class="social">
                                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="instructor-description pt-25">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus fuga ratione molestiae unde provident quibusdam sunt, doloremque. Error omnis mollitia, ex dolor sequi. Et, quibusdam excepturi. Animi assumenda, consequuntur dolorum odio sit inventore aliquid, optio fugiat alias. Veritatis minima, dicta quam repudiandae repellat non sit, distinctio, impedit, expedita tempora numquam?</p>
                                        </div>
                                    </div> <!-- instructor cont -->
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="reviews-cont">
                                       <div class="title">
                                            <h6>Project Gallery</h6>
                                        </div></br>
                                        <!--====== FAQ PART START ======-->
                                        <section class="pt-90 pb-120 gray-bg">
                                            <div class="container">
                                                <div class="row gallery">
                                                    <div class="col-md-4 col-xs-6 thumb">
                                                        <a href="images/gallery/1.jpg">
                                                            <figure><img class="img-fluid img-thumbnail" src="images/gallery/1.jpg" alt="Gallery Image"></figure>
                                                        </a>
                                                        <div class="content pt-3 text-center">
                                                            <h6 class="writer-nam"><span>By</span> Lorem ipsum dolor sit amet, consectetu adipiscing elit. Etiam nunc elit, pretium atlanta urna veloci, fermentum</h6>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-xs-6 thumb">
                                                        <a href="images/gallery/2.jpg">
                                                            <figure><img class="img-fluid img-thumbnail" src="images/gallery/2.jpg" alt="Gallery Image"></figure>
                                                        </a>
                                                        <div class="content pt-3 text-center">
                                                            <h6 class="writer-nam"><span>By</span> Lorem ipsum dolor sit amet, consectetu adipiscing elit. Etiam nunc elit, pretium atlanta urna veloci, fermentum</h6>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-xs-6 thumb">
                                                        <a href="images/gallery/3.jpg">
                                                            <figure><img class="img-fluid img-thumbnail" src="images/gallery/3.jpg" alt="Gallery Image"></figure>
                                                        </a>
                                                        <div class="content pt-3 text-center">
                                                            <h6 class="writer-nam"><span>By</span> Lorem ipsum dolor sit amet, consectetu adipiscing elit. Etiam nunc elit, pretium atlanta urna veloci, fermentum</h6>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-xs-6 thumb">
                                                        <a href="images/gallery/4.jpg">
                                                            <figure><img class="img-fluid img-thumbnail" src="images/gallery/4.jpg" alt="Gallery Image"></figure>
                                                        </a>
                                                        <div class="content pt-3 text-center">
                                                            <h6 class="writer-nam"><span>By</span> Lorem ipsum dolor sit amet, consectetu adipiscing elit. Etiam nunc elit, pretium atlanta urna veloci, fermentum</h6>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-xs-6 thumb">
                                                        <a href="images/gallery/5.jpg">
                                                            <figure><img class="img-fluid img-thumbnail" src="images/gallery/5.jpg" alt="Gallery Image"></figure>
                                                        </a>
                                                        <div class="content pt-3 text-center">
                                                            <h6 class="writer-nam"><span>By</span> Lorem ipsum dolor sit amet, consectetu adipiscing elit. Etiam nunc elit, pretium atlanta urna veloci, fermentum</h6>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-xs-6 thumb">
                                                        <a href="images/gallery/6.jpg">
                                                            <figure><img class="img-fluid img-thumbnail" src="images/gallery/6.jpg" alt="Gallery Image"></figure>
                                                        </a>
                                                        <div class="content pt-3 text-center">
                                                            <h6 class="writer-nam"><span>By</span> Lorem ipsum dolor sit amet, consectetu adipiscing elit. Etiam nunc elit, pretium atlanta urna veloci, fermentum</h6>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-xs-6 thumb">
                                                        <a href="images/gallery/7.jpg">
                                                            <figure><img class="img-fluid img-thumbnail" src="images/gallery/7.jpg" alt="Gallery Image"></figure>
                                                        </a>
                                                        <div class="content pt-3 text-center">
                                                            <h6 class="writer-nam"><span>By</span> Lorem ipsum dolor sit amet, consectetu adipiscing elit. Etiam nunc elit, pretium atlanta urna veloci, fermentum</h6>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-xs-6 thumb">
                                                        <a href="images/gallery/8.jpg">
                                                            <figure><img class="img-fluid img-thumbnail" src="images/gallery/8.jpg" alt="Gallery Image"></figure>
                                                        </a>
                                                        <div class="content pt-3 text-center">
                                                            <h6 class="writer-nam"><span>By</span> Lorem ipsum dolor sit amet, consectetu adipiscing elit. Etiam nunc elit, pretium atlanta urna veloci, fermentum</h6>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-xs-6 thumb">
                                                        <a href="images/gallery/9.jpg">
                                                            <figure><img class="img-fluid img-thumbnail" src="images/gallery/9.jpg" alt="Gallery Image"></figure>
                                                        </a>
                                                        <div class="content pt-3 text-center">
                                                            <h6 class="writer-nam"><span>By</span> Lorem ipsum dolor sit amet, consectetu adipiscing elit. Etiam nunc elit, pretium atlanta urna veloci, fermentum</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div> <!-- reviews cont -->
                                </div>
                            </div> <!-- tab content -->
                        </div>
                    </div> <!-- courses single left -->
                    
                </div>
            </div> <!-- row -->
            {{--
            <div class="row">
                <div class="col-lg-12">
                    <div class="related-courses pt-95">
                        <div class="title">
                            <h3>Related Courses</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-course mt-30">
                                    <div class="thum">
                                        <div class="image">
                                            <img src="images/course/cu-2.jpg" alt="Course">
                                        </div>
                                        <div class="price">
                                            <span>Free</span>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <ul>
                                            <li><i class="fa fa-user"></i></li>
                                            <li><i class="fa fa-user"></i></li>
                                            <li><i class="fa fa-user"></i></li>
                                            <li><i class="fa fa-user"></i></li>
                                            <li><i class="fa fa-user"></i></li>
                                        </ul>
                                        <span>(20 Reviews)</span>
                                        <a href="courses-single.html"><h4>Learn basic javascript from usert for beginner</h4></a>
                                        <div class="course-teacher">
                                            <div class="thum">
                                                <a href="#"><img src="images/course/teacher/t-2.jpg" alt="teacher"></a>
                                            </div>
                                            <div class="name">
                                                <a href="#"><h6>Mark anthem</h6></a>
                                            </div>
                                            <div class="admin">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- single course -->
                            </div>
                            <div class="col-md-6">
                                <div class="single-course mt-30">
                                    <div class="thum">
                                        <div class="image">
                                            <img src="images/course/cu-1.jpg" alt="Course">
                                        </div>
                                        <div class="price">
                                            <span>Free</span>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <ul>
                                            <li><i class="fa fa-user"></i></li>
                                            <li><i class="fa fa-user"></i></li>
                                            <li><i class="fa fa-user"></i></li>
                                            <li><i class="fa fa-user"></i></li>
                                            <li><i class="fa fa-user"></i></li>
                                        </ul>
                                        <span>(20 Reviews)</span>
                                        <a href="courses-single.html"><h4>Learn basic javascript from usert for beginner</h4></a>
                                        <div class="course-teacher">
                                            <div class="thum">
                                                <a href="#"><img src="images/course/teacher/t-3.jpg" alt="teacher"></a>
                                            </div>
                                            <div class="name">
                                                <a href="#"><h6>Mark anthem</h6></a>
                                            </div>
                                            <div class="admin">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- single course -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- related courses -->
                </div>
            </div> <!-- row -->
            --}}
        </div> <!-- container -->
    </section>
    
    <!--====== COURSES SINGEl PART ENDS ======-->

    <!--====== FOOTER PART userT ======-->

    @include('frontlayout.footer')

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TP PART userT ======-->

    <a href="#" class="back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!--====== BACK TO TP PART ENDS ======-->
	@include('frontlayout.javascript')

</body>
</html>
