@extends('layouts.master')

@section('content')
  <!-- END templateux-navbar -->
  <section class="templateux-hero"  data-scrollax-parent="true">
    <!-- <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img src="images/hero_2.jpg" /></div> -->

    <div class="container">
      <div class="row align-items-center justify-content-center intro">
        <div class="col-md-10" data-aos="fade-up">
          <h1>Portfolio</h1>
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
          <a class="project animsition-link" href="work-single.html">
            <figure>
              <img src="images/img_1.jpg" alt="Free Template" class="img-fluid">
            </figure>
            <div class="project-hover">
              <div class="project-hover-inner">
                <h2>Canvas Tote Bag</h2>
                <span>View Case Study</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <a class="project animsition-link" href="work-single.html">
            <figure>
              <img src="images/img_2.jpg" alt="Free Template" class="img-fluid">
            </figure>
            <div class="project-hover">
              <div class="project-hover-inner">
                <h2>Work Hard, Play Hard</h2>
                <span>View Case Study</span>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- END row -->

      <div class="row">
        <div class="col-lg-4 col-md-6" data-aos="fade-up">
          <a class="project animsition-link" href="work-single.html">
            <figure>
              <img src="images/img_3.jpg" alt="Free Template" class="img-fluid">
            </figure>
            <div class="project-hover">
              <div class="project-hover-inner">
                <h2>Moon High Res</h2>
                <span>View Case Study</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <a class="project animsition-link" href="work-single.html">
            <figure>
              <img src="images/img_4.jpg" alt="Free Template" class="img-fluid">
            </figure>
            <div class="project-hover">
              <div class="project-hover-inner">
                <h2>H20 Water Bottle</h2>
                <span>View Case Study</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <a class="project animsition-link" href="work-single.html">
            <figure>
              <img src="images/img_5.jpg" alt="Free Template" class="img-fluid">
            </figure>
            <div class="project-hover">
              <div class="project-hover-inner">
                <h2>Creatsy Mailing Box</h2>
                <span>View Case Study</span>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- END row -->

      <div class="row">
        <div class="col-md-6" data-aos="fade-up">
          <a class="project animsition-link" href="work-single.html">
            <figure>
              <img src="images/img_1.jpg" alt="Free Template" class="img-fluid">
            </figure>
            <div class="project-hover">
              <div class="project-hover-inner">
                <h2>Canvas Tote Bag</h2>
                <span>View Case Study</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <a class="project animsition-link" href="work-single.html">
            <figure>
              <img src="images/img_2.jpg" alt="Free Template" class="img-fluid">
            </figure>
            <div class="project-hover">
              <div class="project-hover-inner">
                <h2>Work Hard, Play Hard</h2>
                <span>View Case Study</span>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- END row -->

      <div class="row mb-5">
        <div class="col-lg-4 col-md-6" data-aos="fade-up">
          <a class="project animsition-link" href="work-single.html">
            <figure>
              <img src="images/img_3.jpg" alt="Free Template" class="img-fluid">
            </figure>
            <div class="project-hover">
              <div class="project-hover-inner">
                <h2>Moon High Res</h2>
                <span>View Case Study</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <a class="project animsition-link" href="work-single.html">
            <figure>
              <img src="images/img_4.jpg" alt="Free Template" class="img-fluid">
            </figure>
            <div class="project-hover">
              <div class="project-hover-inner">
                <h2>H20 Water Bottle</h2>
                <span>View Case Study</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <a class="project animsition-link" href="work-single.html">
            <figure>
              <img src="images/img_5.jpg" alt="Free Template" class="img-fluid">
            </figure>
            <div class="project-hover">
              <div class="project-hover-inner">
                <h2>Creatsy Mailing Box</h2>
                <span>View Case Study</span>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- END row -->

    </div>
  </section>


  <a class="templateux-section templateux-cta animsition-link mt-5" href="contact.html" data-aos="fade-up">
    <div class="container-fluid">
      <div class="cta-inner">
        <h2><span class="words-1">Start a Project.</span> <span class="words-2">Let's chat we are good people.</span></h2>
      </div>
    </div>
  </a>
@endsection
