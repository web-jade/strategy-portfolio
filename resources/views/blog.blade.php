@extends('layouts.master')

@section('content')
  <!-- END templateux-navbar -->
  <section class="templateux-hero"  data-scrollax-parent="true">
    <!-- <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img src="images/hero_2.jpg" /></div> -->

    <div class="container">
      <div class="row align-items-center justify-content-center intro">
        <div class="col-md-10" data-aos="fade-up">
          <h1>Our Blog</h1>
          <p class="lead">We are experts, engineers, authors, speakers, artists who creates astounding products for people.</p>
          <a href="#next" class="go-down js-smoothscroll"></a>
        </div>
      </div>
    </div>
  </section>
  <!-- END templateux-hero -->


  <section class="templateux-portfolio-overlap mb-5" id="next">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6" data-aos="fade-up">
          <a class="post animsition-link" href="blog-single.html">
            <figure>
              <img src="images/img_1.jpg" alt="Free Template" class="img-fluid">
            </figure>
            <div class="project-hover">
              <div class="project-hover-inner">
                <h2>45 Cool Bag Illustrations</h2>
                <span>February 21, 2018</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <a class="post animsition-link" href="blog-single.html">
            <figure>
              <img src="images/img_2.jpg" alt="Free Template" class="img-fluid">
            </figure>
            <div class="project-hover">
              <div class="project-hover-inner">
                <h2>45 Cool Bag Illustrations</h2>
                <span>February 21, 2018</span>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- END row -->

      <div class="row">
        <div class="col-md-6" data-aos="fade-up">
          <a class="post animsition-link" href="blog-single.html">
            <figure>
              <img src="images/img_3.jpg" alt="Free Template" class="img-fluid">
            </figure>
            <div class="project-hover">
              <div class="project-hover-inner">
                <h2>45 Cool Bag Illustrations</h2>
                <span>February 21, 2018</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <a class="post animsition-link" href="blog-single.html">
            <figure>
              <img src="images/img_4.jpg" alt="Free Template" class="img-fluid">
            </figure>
            <div class="project-hover">
              <div class="project-hover-inner">
                <h2>45 Cool Bag Illustrations</h2>
                <span>February 21, 2018</span>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- END row -->

      <div class="row">
        <div class="col-md-6" data-aos="fade-up">
          <a class="post animsition-link" href="blog-single.html">
            <figure>
              <img src="images/img_5.jpg" alt="Free Template" class="img-fluid">
            </figure>
            <div class="project-hover">
              <div class="project-hover-inner">
                <h2>45 Cool Bag Illustrations</h2>
                <span>February 21, 2018</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <a class="post animsition-link" href="blog-single.html">
            <figure>
              <img src="images/img_2.jpg" alt="Free Template" class="img-fluid">
            </figure>
            <div class="project-hover">
              <div class="project-hover-inner">
                <h2>45 Cool Bag Illustrations</h2>
                <span>February 21, 2018</span>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- END row -->

      <div class="row pt-5" data-aos="fade-up" data-aos-delay="100">
        <div class="col-md-12 text-center">
          <a href="#" class="button button--red  mb-5">Load More Posts...</a>
        </div>
      </div>

    </div>
  </section>
@endsection
