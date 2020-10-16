<?php get_header(); ?>
<div class="hero-image">
  <div class="hero-text">
    <h1>Welcome!</h1>
    <h2>We Think You Will Like it here.</h2>
    <h3>Why don't you check out the major you are intrested in?</h3>
    <button type="button" class="btn btn-info">Find Your Major</button>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2
            class="headline headline--small-plus t-center"
            style="margin-top: 42px"
          >
            Upcoming Events
          </h2>

          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Mar</span>
              <span class="event-summary__day">25</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny">
                <a href="#">Poetry in the 100</a>
              </h5>
              <p>
                Bring poems you&rsquo;ve wrote to the 100 building
                <a href="#" class="nu gray">Learn more</a>
              </p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Apr</span>
              <span class="event-summary__day">02</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny">
                <a href="#">Quad Picnic Party</a>
              </h5>
              <p>
                Live music, a taco truck and more can found in our
                <a href="#" class="nu gray">Learn more</a>
              </p>
            </div>
          </div>

          <button type="button" class="btn btn-info">View more events</button>
        </div>
      </div>
    </div>
    <div class="col bottom">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
        <div class="event-summary">
          <a
            class="event-summary__date event-summary__date--beige t-center"
            href="#"
          >
            <span class="event-summary__month">Jan</span>
            <span class="event-summary__day">20</span>
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny">
              <a href="#">We Were Voted Best School</a>
            </h5>
            <p>
              For the 100th year in a row we are voted #1.
              <a href="#" class="nu gray">Read more</a>
            </p>
          </div>
        </div>
        <div class="event-summary">
          <a
            class="event-summary__date event-summary__date--beige t-center"
            href="#"
          >
            <span class="event-summary__month">Feb</span>
            <span class="event-summary__day">04</span>
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny">
              <a href="#">Professors in the National Spotlight</a>
            </h5>
            <p>
              Two of our professors have been in national news lately.
              <a href="#" class="nu gray">Read more</a>
            </p>
          </div>
        </div>

        <button type="button" class="btn btn-warning">View all posts</button>
      </div>
    </div>
  </div>
</div>
<div id="demo" class="carousel slide" data-ride="carousel">
  <h1 style="text-align: center">Our Gallery</h1>
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img
        src="https://res.cloudinary.com/dul7ycim4/image/upload/v1602548990/Uni/graduate1_jh77l6.jpg"
        alt="Library"
      />
    </div>
    <div class="carousel-item">
      <img
        src="https://res.cloudinary.com/dul7ycim4/image/upload/c_scale,h_500,w_1200/v1602545854/Uni/library_cdjzuh.jpg"
        alt="Students"
      />
    </div>
    <div class="carousel-item">
      <img
        src="https://res.cloudinary.com/dul7ycim4/image/upload/v1602799606/Uni/bus_qvhfl1.jpg"
        alt="Students"
      />
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<?php   get_footer(); ?>
