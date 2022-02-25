@extends('layouts.app')

@section('content')
<!--Header-->
  <header class="main-header">
    <div class="container">
      <div class="row personal-profile">
        <div class="col-md-4 personal-profile__avatar">
          <img class="" src="{{asset('/assets/img/img_profile.png')}}" alt="avatar">
        </div>
        <div class="col-md-8">
          <p class="personal-profile__name">Diqi</p>
          <p class="personal-profile__work">mobile app developer👨‍💻</p>
          <div class="personal-profile__contacts">
            <dl class="contact-list contact-list__opacity-titles">
              <dt>Age:</dt>
              <dd>{{Carbon\Carbon::parse('2001-06-27')->age}}</dd>
              <dt>Telegram:</dt>
              <dd><a href="https://t.me/dqbigd">t.me/dqbigd</a></dd>
              <dt>Email:</dt>
              <dd><a href="mailto:sukron.bigdsda@gmail.com">sukron.bigdsda@gmail.com</a></dd>
              <dt>Address:</dt>
              <dd>Park Royal Regency G1-09 Sidoarjo Indonesia 🇮🇩</dd>
            </dl>
          </div>
          <p class="personal-profile__social">
            <a href="https://github.com/dqbigd" target="_blank"><i class="fa fa-github"></i></a>
            <a href="https://www.linkedin.com/in/dqbigd/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
            <a href="https://www.youtube.com/channel/UCkC13Cp6mR0h6zoYqmTdX_g" target="_blank"><i class="fa fa-youtube-play"></i></a>
            <a href="https://www.instagram.com/dqbigd/" target="_blank"><i class="fa fa-instagram"></i></a>
          </p>
        </div>
      </div>
    </div>
  </header>
<!--Header-->

<!--Hello-->
  <section id="hello" class="container section">
    <div class="row">
      <div class="col-md-10">
        <h2 id="hello_header" class="section__title">Hi👋</h2>
        <p class="section__description">
          I am a Mobile App Developer using flutter and native android. I have experience developing and designing mobile applications for company in indonesia. 
          Apart from making mobile applications, I also have experience in creating websites from scratch with Laravel.
        </p>
        <a href="" class="section_btn site-btn"><img src="assets/img/img_btn_icon.png" alt="">Download CV</a>
      </div>
    </div>
  </section>
<!--Hello-->

  <hr>

<!--Portfolio-->
  <section id="portfolio" class="container section">
    <div class="row">
      <div class="col-md-12">
        <h2 id="portfolio_header" class="section__title">My projects</h2>
      </div>
    </div>
    <div class="row portfolio-menu">
      <div class="col-md-12">
        <nav>
          <ul>
            <li><a href="" data-portfolio-target-tag="all">all</a></li>
            <li><a href="" data-portfolio-target-tag="mobile apps">mobile apps</a></li>
            <li><a href="" data-portfolio-target-tag="web-sites">web-sites</a></li>
            {{-- <li><a href="" data-portfolio-target-tag="landing-pages">landing pages</a></li> --}}
          </ul>
        </nav>
      </div>
    </div>
    <div class="portfolio-cards">
      <div class="row project-card" data-toggle="modal" data-target="#portfolioModal" data-portfolio-tag="web-sites">
        <div class="col-md-6 col-lg-5 project-card__img">
          <img class="" src="assets/img/img_project_1_mono.png" alt="project-img">
        </div>
        <div class="col-md-6 col-lg-7 project-card__info">
          <h3 class="project-card__title">Mobile and desktop app for London hostel store  </h3>
          <p class="project-card__description">
            Do answered bachelor occasion in of offended no concerns. Supply worthy warmth branch of no ye.
            Voice tried known to as my to. Though wished merits or be. Alone visit use these smart rooms ham.
          </p>
          <p class="project-card__stack">Used stack:</p>
          <ul class="tags">
            <li>html5</li>
            <li>css3</li>
            <li>JavaScript</li>
            <li>bower</li>
            <li>grunt</li>
          </ul>
          <a href="" class="project-card__link">www.superapp.com</a>
        </div>
      </div>
      <div class="row project-card"  data-toggle="modal" data-target="#portfolioModal" data-portfolio-tag="mobile apps">
        <div class="col-md-6 col-lg-5 project-card__img">
          <img class="" src="assets/img/img_project_2_mono.png" alt="project-img">
        </div>
        <div class="col-md-6 col-lg-7 project-card__info">
          <h3 class="project-card__title">Web app page for trevel company</h3>
          <p class="project-card__description">
            Preference any astonished unreserved mrs. Prosperous understood middletons in conviction an
             uncommonly do. Supposing so be resolving breakfast am or perfectly. Is drew am hill from mr.
          </p>
          <p class="project-card__stack">Used stack:</p>
          <ul class="tags">
            <li>html5</li>
            <li>css3</li>
            <li>JavaScript</li>
            <li>BEM</li>
            <li>bower</li>
            <li>grunt</li>
          </ul>
          <a href="" class="project-card__link">www.travellend.com</a>
        </div>
      </div>
      <div class="row project-card"  data-toggle="modal" data-target="#portfolioModal" data-portfolio-tag="landing-pages">
        <div class="col-md-6 col-lg-5 project-card__img">
        <img class="" src="assets/img/img_project_3_mono.png" alt="project-img">
      </div>
        <div class="col-md-6 col-lg-7 project-card__info">
        <h3 class="project-card__title">Admin template for Photo Service</h3>
        <p class="project-card__description">
          Do answered bachelor occasion in of offended no concerns. Supply worthy warmth branch of no ye.
          Voice tried known to as my to. Though wished merits or be. Alone visit use these smart rooms ham.
        </p>
        <p class="project-card__stack">Used stack:</p>
        <ul class="tags">
          <li>html5</li>
          <li>css3</li>
          <li>JavaScript</li>
          <li>BEM</li>
          <li>bower</li>
          <li>grunt</li>
        </ul>
        <a href="" class="project-card__link">www.coolphoto.com</a>
      </div>
      </div>
    </div>
  </section>
<!--Portfolio-->

<!--Contact-->
  <div class="background">
    <div id="contact" class="container section">
      <div class="row">
        <div class="col-md-12">
          <p id="contacts_header" class="section__title">Get in touch</p>
        </div>
      </div>
      <div class="row contacts">
        <div class="col-md-5 col-lg-4">
          <div class="contacts__list">
            <dl class="contact-list">
              <dt>Telegram:</dt>
              <dd><a href="https://t.me/dqbigd">t.me/dqbigd</a></dd>
              <dt>Email:</dt>
              <dd><a href="mailto:sukron.bigdsda@gmail.com">sukron.bigdsda@gmail.com</a></dd>
              <dt>Address:</dt>
              <dd>Park Royal Regency G1-09 Sidoarjo Indonesia 🇮🇩</dd>
            </dl>
          </div>
          <div class="contacts__social">
            <ul>
                <a href="https://github.com/dqbigd" target="_blank"><i class="fa fa-github"></i></a>
                <a href="https://www.linkedin.com/in/dqbigd/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                <a href="https://www.youtube.com/channel/UCkC13Cp6mR0h6zoYqmTdX_g" target="_blank"><i class="fa fa-youtube-play"></i></a>
                <a href="https://www.instagram.com/dqbigd/" target="_blank"><i class="fa fa-instagram"></i></a>
            </ul>
          </div>
        </div>
        <div class="col-md-7 col-lg-5">
          <div class="contacts__form">
            <p class="contacts__form-title">Or just write me a letter here 😀</p>
            <form class="js-form">
              <div class="form-group">
                <input class="form-field js-field-name" type="text" placeholder="Your name" required>
                <span class="form-validation"></span>
                <span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
              </div>
              <div class="form-group">
                <input class="form-field js-field-email" type="email"  placeholder="Your e-mail" required>
                <span class="form-validation"></span>
                <span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
              </div>
              <div class="form-group">
                <textarea class="form-field js-field-message" placeholder="Type the message here" required></textarea>
                <span class="form-validation"></span>
                <span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
              </div>
              <button class="site-btn site-btn--form" type="submit" value="Send">Send</button>
            </form>
          </div>
          <div class="footer">
            <p>&copy; Diqi {{ date('Y') }}. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--Contact-->

<!-- Portfolio Modal -->
{{-- <div class="modal fade portfolio-modal" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body col-md-11 col-lg-9 ml-auto mr-auto">
        <p class="portfolio-modal__title">Mobile and desktop app for London hostel store</p>
        <img class="portfolio-modal__img" src="assets/img/img_project_1_mono.png" alt="modal_img">
        <p class="portfolio-modal__description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utlabore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcolaboris nisi ut aliquip ex
          ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
          nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
          anim id est laborum. Sed ut perspiciatis undeomnis iste natus error sit voluptatem accusantium doloremque
          laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
          dicta sunt explicabo.Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
          conse.
        </p>
        <div class="portfolio-modal__link">
          <a href="">www.superapp.com</a>
        </div>
        <div  class="portfolio-modal__stack">
          <p class="portfolio-modal__stack-title">Using stack:</p>
          <ul class="tags">
            <li>html5</li>
            <li>css3</li>
            <li>JavaScript</li>
            <li>bower</li>
            <li>grunt</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div> --}}
<!-- Portfolio Modal -->
@endsection