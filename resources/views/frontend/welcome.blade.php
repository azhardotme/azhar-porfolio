@extends('frontend.master')
@section('content')
    <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>

  <!-- Setting button -->
  <div class="config">
    <div class="template-config">
      <!-- Settings -->
      <div class="d-block">
        <button class="btn btn-fab btn-sm" id="sideel" title="Settings"><span class="ti-settings"></span></button>
      </div>
      <!-- Puschase -->
      {{-- <div class="d-block">
        <a href="https://macodeid.com/projects/virtual-folio/" class="btn btn-fab btn-sm" title="Get this template" data-toggle="tooltip" data-placement="left"><span class="ti-download"></span></a>
      </div> --}}
      <!-- Help -->
      {{-- <div class="d-block">
        <a href="#" class="btn btn-fab btn-sm" title="Help" data-toggle="tooltip" data-placement="left"><span class="ti-help"></span></a>
      </div> --}}
    </div>
    <div class="set-menu">
      <p>Select Color</p>
      <div class="color-bar" data-toggle="selected">
        <span class="color-item bg-theme-red selected" data-class="theme-red"></span>
        <span class="color-item bg-theme-blue" data-class="theme-blue"></span>
        <span class="color-item bg-theme-green" data-class="theme-green"></span>
        <span class="color-item bg-theme-orange" data-class="theme-orange"></span>
        <span class="color-item bg-theme-purple" data-class="theme-purple"></span>
      </div>
      {{-- <select class="custom-select d-block my-2" id="change-page">
        <option value="">Choose Page</option>
        <option value="index">Topbar</option>
        <option value="blog-topbar">Blog (Topbar)</option>
        <option value="index-2">Minibar</option>
        <option value="blog-minibar">Blog (Minibar)</option>
      </select> --}}
    </div>
  </div>

  <div class="vg-page page-home" id="home" style="background-image: url(frontend//assets/img/bg_image_1.jpg)">
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand">Azhar</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
          <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="#home" class="nav-link" data-animate="scrolling">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link" data-animate="scrolling">About</a>
            </li>
            <li class="nav-item">
              <a href="#portfolio" class="nav-link" data-animate="scrolling">Portfolio</a>
            </li>
            <li class="nav-item">
              <a href="#blog" class="nav-link" data-animate="scrolling">Blog</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link" data-animate="scrolling">Contact</a>
            </li>
          </ul>
          <ul class="nav ml-auto">
            <li class="nav-item">
              <button class="btn btn-fab btn-theme no-shadow">En</button>
            </li>
          </ul>
        </div>
      </div>
    </div> <!-- End Navbar -->
    <!-- Caption header -->
    @foreach ($about as $about)
    <div class="caption-header text-center wow zoomInDown">
      <h5 class="fw-normal">Welcome</h5>
      <h1 class="fw-light mb-4">I'm <b class="fg-theme">Azharul</b> Islam</h1>
      <div class="badge">{{$about->designation}}</div>
    </div> <!-- End Caption header -->
    <div class="floating-button"><span class="ti-mouse"></span></div>
  </div>

  <div class="vg-page page-about" id="about">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="img-place wow fadeInUp">
            <img src="{{ asset('/image/'.$about->image) }}">
          </div>
        </div>

        <div class="col-lg-6 offset-lg-1 wow fadeInRight">

          <h1 class="fw-light">{{$about->name}}</h1>
          <h5 class="fg-theme mb-3">{{$about->designation}}</h5>
          <p class="text-muted">{!!$about->description!!}</p>
          <ul class="theme-list">
            <li><b>From: </b>{{$about->parmanent_address}} </li>
            <li><b>Lives In: </b>{{$about->present_address}}</li>

          </ul>
          <button class="btn btn-theme-outline"><a href="/about/download/{{$about->file}}">Download CV</a></button>
          @endforeach
        </div>
      </div>
    </div>
    <div class="container py-5">
      <h1 class="text-center fw-normal wow fadeIn">My Skills</h1>
      <div class="row py-3">

        <div class="col-md-4">
          <div class="px-lg-3">
            <h4 class="wow fadeInUp">Languages</h4>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">
                  <li> JavaScript</li>
                  <li> Java</li>
                </span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="px-lg-3">
            <h4 class="wow fadeInUp">Design Skills</h4>
            <div class="progress-wrapper wow fadeInUp">
              <span class="caption">
                <li> JavaScript</li>
                <li> Java</li>
                </span>

            </div>
          </div>
        </div>
        <div class="col-md-4">
            <div class="px-lg-3">
              <h4 class="wow fadeInUp">Framework,Libraries</h4>
              <div class="progress-wrapper wow fadeInUp">
                <span class="caption">

                    <li> JavaScript</li>
                    <li> Java</li>
                </span>
              </div>
            </div>
          </div>

      </div>
    </div>
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-6 wow fadeInRight">
          <h2 class="fw-normal">Education</h2>
          <ul class="timeline mt-4 pr-md-5">
            <li>
              <div class="title">2010</div>
              <div class="details">
                <h5>Specialize of course</h5>
                <small class="fg-theme">University of Study</small>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
              </div>

            </li>
            <li>
              <div class="title">2009</div>
              <div class="details">
                <h5>Specialize of course</h5>
                <small class="fg-theme">University of Study</small>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
              </div>
            </li>
            <li>
              <div class="title">2008</div>
              <div class="details">
                <h5>Specialize of course</h5>
                <small class="fg-theme">University of Study</small>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">

          <h2 class="fw-normal">Experience</h2>

          @foreach ($experience as $experience)


          <ul class="timeline mt-4 pr-md-5">
            <li>
              <div class="title">{{$experience->year}}</div>
              <div class="details">
                <h5>{{$experience->title}}</h5>
                <small class="fg-theme">{{$experience->institute}}</small>
                <p>{!!$experience->description!!}</p>
              </div>
            </li>
          </ul>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  <div class="vg-page page-service">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Service</div>
      </div>
      <h1 class="fw-normal text-center wow fadeInUp">What can i do?</h1>
      <div class="row mt-5">
        <div class="col-md-6 col-lg-6 ">
          <div class="card card-service wow fadeInUp">
            <div class="icon">
              <span class="ti-paint-bucket"></span>
            </div>
            <div class="caption">
              <h4 class="fg-theme">Web Design</h4>
              <p>There are many variations of passages of Lorem Ipsum available</p>
            </div>
          </div>
        </div>

        </div>
        <div class="col-md-6 col-lg-6">
          <div class="card card-service wow fadeInUp">
            <div class="icon">
              <span class="ti-desktop"></span>
            </div>
            <div class="caption">
              <h4 class="fg-theme">Web Development</h4>
              <p>There are many variations of passages of Lorem Ipsum available</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio page -->
  <div class="vg-page page-portfolio" id="portfolio">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Portfolio</div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">See my work</h1>
      <div class="filterable-button py-3 wow fadeInUp" data-toggle="selected">
        <button class="btn btn-theme-outline selected" data-filter="*">All</button>
        <button class="btn btn-theme-outline" data-filter=".apps">Apps</button>
        <button class="btn btn-theme-outline" data-filter=".template">Template</button>
{{--
        <button class="btn btn-theme-outline" data-filter=".ios">IOS</button>
        <button class="btn btn-theme-outline" data-filter=".ui-ux">UI/UX</button>
        <button class="btn btn-theme-outline" data-filter=".graphic">Graphic</button>
        <button class="btn btn-theme-outline" data-filter=".wireframes">Wireframes</button> --}}

      </div>

      <div class="gridder my-3">

        @foreach ($portfolio as $portfolio)
        <div class="grid-item apps wow zoomIn">
         {{-- // <img src="/portfolioimage/{{$portfolio->image}}"> --}}
          <div class="img-place" data-src="portfolioimage/{{$portfolio->image}}"  data-fancybox data-caption="<h5 class='fg-theme'>{{$portfolio->title}}</h5> <p>{{$portfolio->description}}</p>">
            <img src="portfolioimage/{{$portfolio->image}}" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">{{$portfolio->title}}</h5>
              <p>{{$portfolio->description}}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div> <!-- End gridder -->
      <div class="text-center wow fadeInUp">
        <a href="javascript:void(0)" class="btn btn-theme">Load More</a>
      </div>
    </div>
  </div> <!-- End Portfolio page -->


  <!-- Contact -->
  <div class="vg-page page-contact" id="contact">
    <div class="container-fluid">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Contact</div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">Get in touch</h1>
      <div class="row py-5">
        <div class="col-lg-7 px-0 pr-lg-3 wow zoomIn">

            <div class="address text-center">
                <h2>Phone</h2>
                <p>0179261115</p>

            </div>

          {{-- <div class="vg-maps">
            <div id="google-maps" style="width: 100%; height: 100%;"></div>
          </div> --}}

        </div>
        <div class="col-lg-5">
          <form class="vg-contact-form">
            <div class="form-row">
              <div class="col-12 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="Name" placeholder="Your Name">
              </div>
              <div class="col-6 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="Email" placeholder="Email Address">
              </div>
              <div class="col-6 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="Subject" placeholder="Subject">
              </div>
              <div class="col-12 mt-3 wow fadeInUp">
                <textarea class="form-control" name="Message" rows="6" placeholder="Enter message here.."></textarea>
              </div>
              <button type="submit" class="btn btn-theme mt-3 wow fadeInUp ml-1">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- End Contact -->


@endsection
