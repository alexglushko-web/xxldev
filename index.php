<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Project</title>
    @@include('html/_styles.html')
</head>
<body>
    <div class="wrapper">
      @@include('html/_header.html')
      
      <section class="startpage">
        <div class="startpage__container">
          <div class="startpage__title maintitle">
            <h1 class="maintitle__title">Seamless Solutions for a Mobile World</h1>
            <h5 class="maintitle__subtitle">Navigate the complexities of the mobile world with our seamless solutions. From concept to launch, we provide comprehensive services to ensure your success.</h5>
            <a class="contactus feedback__link" href="#feedback">
              Contact Us
              <i class="contactus__icon icon-arrow1-top-right"></i>
            </a>
          </div>
          <div class="startpage__achievment achievment">
            <i class="achievment__icon icon-medal">
              <div class="path1"></div>
              <div class="path2"></div>
              <div class="path3"></div>
              <div class="path4"></div>
              <div class="path5"></div>
            </i>
            <div class="achievment__devider"></div>
            <h4 class="achievment__text">30+ successfully <br>launched projects</h4>
          </div>
          <div class="startpage__phone phone">
            <div class="phone__note _1">
              <i class="phone__icon icon-cup"></i> LTC Hackathon <br>2023 Winner!
            </div>
            <div class="phone__note _2">
              <i class="phone__icon icon-ticket-time"></i> 3 months on average <br>for development
            </div>
            <div class="phone__note _3">
              <i class="phone__icon icon-star"></i> 4.5 star avg. rating <br>of our apps
            </div>
            <img class="phone__pic" src="./img/attachements/startpage-phones.png" alt="">
            <img class="phone__light" src="./img/background/startpage-light-bg.png" alt="">
          </div>
          <div class="startpage__technologies technologies">
            <h5 class="technologies__title">Next-level technologies</h5>
            <div class="technologies__list">
              <img src="./img/logo/company-1.png" alt="" class="technologies__pic">
              <img src="./img/logo/company-2.png" alt="" class="technologies__pic">
              <img src="./img/logo/company-3.png" alt="" class="technologies__pic">
              <img src="./img/logo/company-4.png" alt="" class="technologies__pic">
            </div>
          </div>
        </div>
      </section>
      <section class="business">
        <div class="business__container">
          <h2 class="business__title title">
            A mobile app is a <span class="_color-blue">key tool for your business</span>
          </h2>
          <h5 class="business__subitle subtitle">
            Unlock the potential of your business with our mobile app. Streamline operations, engage customers, and stay ahead of the competition.
          </h5>
          <div class="business__list">
            <div class="business__item" id="business_item1">
              <i class="icon-accessibility business__icon"></i>
              <h4 class="business__name">Increased accessibility</h4>
              <p class="business__desc">Mobile apps make your business available to your customers anytime and anywhere. Your customers can easily access your services or products by simply opening the app on their smartphone.</p>
            </div>
            <div class="business__item" id="business_item2">
              <i class="icon-category business__icon"></i>
              <h4 class="business__name">Improved marketing and customer interaction</h4>
              <p class="business__desc">You can send them notifications about special offers, promotions and new products, which helps to increase customer loyalty.</p>
            </div>
            <div class="business__item" id="business_item3">
              <i class="icon-graphic business__icon"></i>
              <h4 class="business__name">Increased convenience and personalization</h4>
              <p class="business__desc">Mobile apps allow you to create personalised offers and services for each customer based on their preferences and history of interaction with your brand.</p>
            </div>
            <div class="business__item" id="business_item4">
              <i class="icon-friends business__icon"></i>
              <h4 class="business__name">Competitive advantage</h4>
              <p class="business__desc">Nowadays, mobile apps have already become a standard for most businesses. Those that don't utilise this tool risk falling behind the competition.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="studio">
        <div class="studio__container">
          <div class="studio__info">
            <h2 class="studio__title title">Our studio specialises in <span class="_color-blue">MVPs</span></h2>
            <h5 class="studio__subtitle">We will make every effort to release your app in the shortest possible time with the necessary functionality and quality design.</h5>
            <a class="contactus feedback__link" href="#feedback">
              Contact Us
              <i class="contactus__icon icon-arrow1-top-right"></i>
            </a>
          </div>
          <div class="studio__pic"><img class="studio__img" src="img/attachements/studio-phones.png" alt=""></div>
        </div>
      </section>
      <section class="benefits">
        <div class="benefits__container">
          <div class="benefits__header">
            <h2 class="benefits__title title">What you <span class="_color-blue">get</span></h2>
            <h5 class="benefits__subtitle">Discover what awaits you! Explore our offerings and uncover the benefits that await with our products or services. Find out more now!</h5>
          </div>
          <a href="#feedback" class="benefits__contact contactus feedback__link">
            Contact Us
            <i class="contactus__icon icon-arrow1-top-right"></i>
          </a>
          <div class="benefits__list">
            <div class="benefits__item">
              <h4 class="benefits__name">Excellence in App Development</h4>
              <h5 class="benefits__desc">You will get a high quality application developed with the best technology. Our team strives for flawlessness in every aspect of the app to ensure reliability and efficiency.</h5>
            </div>
            <div class="benefits__item">
              <h4 class="benefits__name">Efficiency Redefined</h4>
              <h5 class="benefits__desc">Our development approach is based on efficiency and time optimisation. We aim to minimise the time from idea to implementation, offering fast project turnaround times without sacrificing quality. This allows you to get your product to market faster and ahead of the competition.</h5>
            </div>
            <div class="benefits__item">
              <h4 class="benefits__name">Sleek Design, Seamless Experience</h4>
              <h5 class="benefits__desc">Your app will not only have outstanding functionality, but also an attractive appearance. We pay special attention to design, creating a user-friendly and colourful interface that will provide a pleasant user experience.</h5>
            </div>
            <div class="benefits__item">
              <h4 class="benefits__name">Guided by Expert Insight</h4>
              <h5 class="benefits__desc">We provide not only technical execution but also expert opinion on all aspects of development. Our team of professionals is ready to share their experience and recommendations to make your project not only successful, but also long-term sustainable.</h5>
            </div>
          </div>
        </div>
      </section>
      <section class="work">
        <div class="work__header">
          <h2 class="work__title title">How we <span class="_color-blue">work</span></h2>
          <h5 class="work__subtitle subtitle">Streamline operations, engage customers, and stay ahead of the competition.</h5>
        </div>
        <div class="work__steps steps tabs">
          <div class="steps__container">
            <div class="steps__header ">
              <h5 class="steps__tab tabs__title _active">Step 01</h5>
              <h5 class="steps__tab tabs__title">Step 02</h5>
              <h5 class="steps__tab tabs__title">Step 03</h5>
              <h5 class="steps__tab tabs__title">Step 04</h5>
            </div>
            <div class="steps__list tabs__list">
              <div class="steps__item tabs__item _active">
                <div class="steps__pic">
                  <img src="./img/attachements/howwework-step1-pic.png" alt="" class="steps__img">
                  <div class="steps__card card">
                    <h6 class="card__title">
                      2-Defining Goal
                    </h6>
                    <div class="card__profiles">
                      <img src="img/attachements/howwework-step1-avatar1.png" alt="" class="card__avatar">
                      <img src="img/attachements/howwework-step1-avatar2.png" alt="" class="card__avatar">
                      <img src="img/attachements/howwework-step1-avatar3.png" alt="" class="card__avatar">
                    </div>
                    <div class="card__icons">
                      <button class="card__btn">
                        <i class="card__icon icon-microphone"></i>
                        <i class="card__icon icon-fileshare"></i>
                      </button>
                    </div>
                    <div class="card__info">
                      <div class="card__author">
                        <img src="img/attachements/howwework-step1-avatar4.png" alt="" class="">
                      </div>
                      
                      <h6 class="card__fio">Phillipe Jaan <br></h6>
                      <span class="card__review">Nice work</span>
                      <span class="card__time">05:20pm</span>
                      <button class="card__other"><div></div></button>
                      <div class="card__deviders"></div>
                    </div>
                  </div>
                </div>
                <div class="steps__info">
                  <h2 class="steps__name">Collaboratively Defining Goals, Priorities, and MVP Functionality</h2>
                  <h5 class="steps__desc">Discussing the future product Together we will define goals and priorities, divide the project into stages and define the necessary basic MVP functionality to quickly test the hypotheses of your business model. We will draw up a detailed Terms of Reference and a preliminary commercial proposal for each of the stages of project creation/development</h5>
                  <a href="#feedback" class="steps__contact contactus feedback__link">
                    Contact Us <i class="contactus__icon icon-arrow1-top-right"></i>
                  </a>
                </div>
              </div>
              <div class="steps__item tabs__item">
                <div class="steps__pic">
                  <img src="./img/attachements/howwework-step1-pic.png" alt="" class="steps__img">
                  <div class="steps__card card">
                    <h6 class="card__title">
                      2-Defining Goal
                    </h6>
                    <div class="card__profiles">
                      <img src="img/attachements/howwework-step1-avatar1.png" alt="" class="card__avatar">
                      <img src="img/attachements/howwework-step1-avatar2.png" alt="" class="card__avatar">
                      <img src="img/attachements/howwework-step1-avatar3.png" alt="" class="card__avatar">
                    </div>
                    <div class="card__icons">
                      <button class="card__btn">
                        <i class="card__icon icon-microphone"></i>
                        <i class="card__icon icon-fileshare"></i>
                      </button>
                    </div>
                    <div class="card__info">
                      <div class="card__author"><img src="img/attachements/howwework-step1-avatar4.png" alt="" class=""></div>
                      
                      <h6 class="card__fio">Phillipe Jaan <br></h6>
                      <span class="card__review">Nice work</span>
                      <span class="card__time">05:20pm</span>
                      <button class="card__other"><div></div></button>
                      <div class="card__deviders"></div>
                    </div>
                  </div>
                </div>
                <div class="steps__info">
                  <h2 class="steps__name">Collaboratively Defining Goals, Priorities, and MVP Functionality</h2>
                  <h5 class="steps__desc">Discussing the future product Together we will define goals and priorities, divide the project into stages and define the necessary basic MVP functionality to quickly test the hypotheses of your business model. We will draw up a detailed Terms of Reference and a preliminary commercial proposal for each of the stages of project creation/development</h5>
                  <a href="#feedback" class="steps__contact contactus feedback__link">
                    Contact Us
                    <i class="contactus__icon icon-arrow1-top-right"></i>
                  </a>
                </div>
              </div>
              <div class="steps__item tabs__item">
                <div class="steps__pic">
                  <img src="./img/attachements/howwework-step1-pic.png" alt="" class="steps__img">
                  <div class="steps__card card">
                    <h6 class="card__title">
                      Defining Goal
                    </h6>
                    <div class="card__profiles">
                      <img src="img/attachements/howwework-step1-avatar1.png" alt="" class="card__avatar">
                      <img src="img/attachements/howwework-step1-avatar2.png" alt="" class="card__avatar">
                      <img src="img/attachements/howwework-step1-avatar3.png" alt="" class="card__avatar">
                    </div>
                    <div class="card__icons">
                      <button class="card__btn">
                        <i class="card__icon icon-microphone"></i>
                        <i class="card__icon icon-fileshare"></i>
                      </button>
                    </div>
                    <div class="card__info">
                      <div class="card__author"><img src="img/attachements/howwework-step1-avatar4.png" alt="" class=""></div>
                      
                      <h6 class="card__fio">Phillipe Jaan <br></h6>
                      <span class="card__review">Nice work</span>
                      <span class="card__time">05:20pm</span>
                      <button class="card__other"><div></div></button>
                      <div class="card__deviders"></div>
                    </div>
                  </div>
                </div>
                <div class="steps__info">
                  <h2 class="steps__name">Collaboratively Defining Goals, Priorities, and MVP Functionality</h2>
                  <h5 class="steps__desc">Discussing the future product Together we will define goals and priorities, divide the project into stages and define the necessary basic MVP functionality to quickly test the hypotheses of your business model. We will draw up a detailed Terms of Reference and a preliminary commercial proposal for each of the stages of project creation/development</h5>
                  <a href="#feedback" class="steps__contact contactus feedback__link">
                    Contact Us
                    <i class="contactus__icon icon-arrow1-top-right"></i>
                  </a>
                </div>
              </div>
              <div class="steps__item tabs__item">
                <div class="steps__pic">
                  <img src="./img/attachements/howwework-step1-pic.png" alt="" class="steps__img">
                  <div class="steps__card card">
                    <h6 class="card__title">
                      Defining Goal
                    </h6>
                    <div class="card__profiles">
                      <img src="img/attachements/howwework-step1-avatar1.png" alt="" class="card__avatar">
                      <img src="img/attachements/howwework-step1-avatar2.png" alt="" class="card__avatar">
                      <img src="img/attachements/howwework-step1-avatar3.png" alt="" class="card__avatar">
                    </div>
                    <div class="card__icons">
                      <button class="card__btn">
                        <i class="card__icon icon-microphone"></i>
                        <i class="card__icon icon-fileshare"></i>
                      </button>
                    </div>
                    <div class="card__info">
                      <div class="card__author"><img src="img/attachements/howwework-step1-avatar4.png" alt="" class=""></div>
                      
                      <h6 class="card__fio">Phillipe Jaan <br></h6>
                      <span class="card__review">Nice work</span>
                      <span class="card__time">05:20pm</span>
                      <button class="card__other"><div></div></button>
                      <div class="card__deviders"></div>
                    </div>
                  </div>
                </div>
                <div class="steps__info">
                  <h2 class="steps__name">Collaboratively Defining Goals, Priorities, and MVP Functionality</h2>
                  <h5 class="steps__desc">Discussing the future product Together we will define goals and priorities, divide the project into stages and define the necessary basic MVP functionality to quickly test the hypotheses of your business model. We will draw up a detailed Terms of Reference and a preliminary commercial proposal for each of the stages of project creation/development</h5>
                  <a href="#feedback" class="steps__contact contactus feedback__link">
                    Contact Us
                    <i class="contactus__icon icon-arrow1-top-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="advantages">
        <div class="advantages__top">
          <span class="advantages__logo">
            Our Studio
          </span>
          <div class="advantages__header">
            <h2 class="advantages__title title"> <span class="_color-blue">Advantages</span> of our studio</h2>
            <h5 class="advantages__subtitle">Streamline operations, engage customers, and stay ahead of the competition.</h5>
          </div>
        </div>
        <div class="advantages__container">
          <div class="advantages__list">
            <div class="advantages__item _1">
              <h5 class="advantages__desc">
                We develop on Flutter and FlutterFlow The <br>
                app will work on both iOS and Android and <br>
                will significantly speed up development time.
                <a href="#feedback" class="advantages__contact contactus _transparent feedback__link">
                  Contact Us
                  <i class="contactus__icon icon-arrow1-top-right"></i>
                </a>
              </h5>
              
              <div class="advantages__pic"><img src="img/attachements/advantages-pic1.png" alt=""></div>
            </div>
            <div class="advantages__item _2">
              <div class="advantages__pic"><img src="img/attachements/advantages-pic2.png" alt=""></div>
              <h5 class="advantages__desc">High rating in Stores All users highly appreciate the quality and design of our applications</h5>
            </div>
            <div class="advantages__item _3">
              <h5 class="advantages__desc">Extensive experience in app development Our team has been in IT and app development for over 5 years.</h5>
              <div class="advantages__pic"><img src="img/attachements/advantages-pic3.png" alt=""></div>
            </div>
            <div class="advantages__item _4">
              <h5 class="advantages__desc">Working with AI Experience with Chat GPT, Gemini, Midjorney integration</h5>
            </div>
            <div class="advantages__item _5">
              <h5 class="advantages__desc">Always ready to help We are always ready to help, explain, customise or just talk. Your comfort is our priority!</h5>
            </div>
          </div>
        </div>
      </section>
      <section class="projects">
        <div class="slider projects__container">
          <div class="projects__header">
            <h2 class="projects__title title">Our Recent <span class="_color-blue">Work</span></h2>
            <h5 class="projects__subtitle">Practice at their pace, pace, filling in gaps in their understanding.</h5>
          </div>
          <div class="projects__list slider__list">
            <div class="projects__item slider__item">
              <img src="img/background/work-item1-bg.png" alt="" class="projects__bg">
              <h4 class="projects__name">App Name Here</h4>
              <div class="projects__pic">
                <img src="img/attachements/work-item1.png" alt="" class="projects__pic">
                <a href="#" class="projects__app _appstore"><img src="img/attachements/appstore.png" alt=""></a>
                <a href="#" class="projects__app _googlepay"><img src="img/attachements/googleplay.png" alt=""></a>
              </div>
            </div>
            <div class="projects__item slider__item">
              <img src="img/background/work-item2-bg.png" alt="" class="projects__bg">
              <h4 class="projects__name">App Name Here</h4>
              <img src="img/attachements/work-item2.png" alt="" class="projects__pic">
            </div>
            <div class="projects__item slider__item">
              <img src="img/background/work-item3-bg.png" alt="" class="projects__bg">
              <h4 class="projects__name">App Name Here</h4>
              <img src="img/attachements/work-item3.png" alt="" class="projects__pic">
            </div>
            <div class="projects__item slider__item">
              <img src="img/background/work-item4-bg.png" alt="" class="projects__bg">
              <h4 class="projects__name">App Name Here</h4>
              <img src="img/attachements/work-item4.png" alt="" class="projects__pic">
            </div>
            <div class="projects__item slider__item">
              <img src="img/background/work-item3-bg.png" alt="" class="projects__bg">
              <h4 class="projects__name">App Name Here</h4>
              <img src="img/attachements/work-item3.png" alt="" class="projects__pic">
            </div>
            <div class="projects__item slider__item">
              <img src="img/background/work-item4-bg.png" alt="" class="projects__bg">
              <h4 class="projects__name">App Name Here</h4>
              <img src="img/attachements/work-item4.png" alt="" class="projects__pic">
            </div>
            <div class="projects__item slider__item">
              <img src="img/background/work-item3-bg.png" alt="" class="projects__bg">
              <h4 class="projects__name">App Name Here</h4>
              <img src="img/attachements/work-item3.png" alt="" class="projects__pic">
            </div>
            <div class="projects__item slider__item">
              <img src="img/background/work-item4-bg.png" alt="" class="projects__bg">
              <h4 class="projects__name">App Name Here</h4>
              <img src="img/attachements/work-item4.png" alt="" class="projects__pic">
            </div>
          </div>
          <div class="projects__arrows slider__arrows"></div>
        </div>
      </section>
      <!-- <section class="collaborates">
        <div class="slider collaborates__container">
          <div class="collaborates__header">
            <h2 class="collaborates__title"><span class="_color-blue">Voices</span> of Our <br>Collaborators</h2>
            <h5 class="collaborates__subtitle">Practice at their pace, pace, filling in gaps in their understanding.</h5>
            <div class="collaborates__dots slider__dots">
            </div>

          </div>
          <div class="collaborates__list">
            <div class="collaborates__item slider__item">
              <p class="collaborates__text">
                <i class="icon-quote-first quote quote _first"></i>
                “Starting from strategic planning along with their any type of methodical approach, WinHub is essential to our day-to-day operations because it provides functional and advisory support in every area of our business from leaders and experts in the field. day-to-day operations because it provides functional.”
                <i class="icon-quote-last quote quote _last"></i>
              </p>
              <div class="collaborates__author">
                <div class="collaborates__avatar"><img src="img/attachements/voicescb-item1.png" alt="" class=""></div>
                <h5 class="collaborates__name">Sam Arnold Elias</h5>
                <h6 class="collaborates__jobtitle">Co-Founder at Bame Group</h6>
              </div>
            </div>
            <div class="collaborates__item slider__item">
              <p class="collaborates__text">
                <i class="icon-quote-first quote quote _first"></i>
                “Starting from strategic planning along with their any type of methodical approach, WinHub is essential to our day-to-day operations because it provides functional and advisory support in every area of our business from leaders and experts in the field. day-to-day operations because it provides functional.”
                <i class="icon-quote-last quote quote _last"></i>
              </p>
              <div class="collaborates__author">
                <div class="collaborates__avatar"><img src="img/attachements/voicescb-item1.png" alt="" class=""></div>
                <h5 class="collaborates__name">Sam Arnold Elias</h5>
                <h6 class="collaborates__jobtitle">Co-Founder at Bame Group</h6>
              </div>
            </div>
            <div class="collaborates__item slider__item">
              <p class="collaborates__text">
                <i class="icon-quote-first quote quote _first"></i>
                “Starting from strategic planning along with their any type of methodical approach, WinHub is essential to our day-to-day operations because it provides functional and advisory support in every area of our business from leaders and experts in the field. day-to-day operations because it provides functional.”
                <i class="icon-quote-last quote quote _last"></i>
              </p>
              <div class="collaborates__author">
                <div class="collaborates__avatar"><img src="img/attachements/voicescb-item1.png" alt="" class=""></div>
                <h5 class="collaborates__name">Sam Arnold Elias</h5>
                <h6 class="collaborates__jobtitle">Co-Founder at Bame Group</h6>
              </div>
            </div>
            <div class="collaborates__item slider__item">
              <p class="collaborates__text">
                <i class="icon-quote-first quote quote _first"></i>
                “Starting from strategic planning along with their any type of methodical approach, WinHub is essential to our day-to-day operations because it provides functional and advisory support in every area of our business from leaders and experts in the field. day-to-day operations because it provides functional.”
                <i class="icon-quote-last quote quote _last"></i>
              </p>
              <div class="collaborates__author">
                <div class="collaborates__avatar"><img src="img/attachements/voicescb-item1.png" alt="" class=""></div>
                <h5 class="collaborates__name">Sam Arnold Elias</h5>
                <h6 class="collaborates__jobtitle">Co-Founder at Bame Group</h6>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <section class="team">
        <div class="team__container">
          <h2 class="team__title title">Our <span class="_color-blue">Team</span></h2>
          <h5 class="team__subtitle subtitle">Behind every successful partnership at XXLDEV</h5>
          <div class="team__list">
            <div class="team__item">
              <div class="team__pic"><img src="img/attachements/team-item1.png" alt="" class=""></div>
              <div class="team__info">
                <h3 class="team__name">Vsevolod Korgin</h3>
                <h4 class="team__jobtitle">Co-founder (Client Service)</h4>
                <div class="team__devider"></div>
                <div class="team__desc">
                  <ul class="team__points points">
                    <li class="point__item">In sales and IT project management since 2005;</li>
                    <li class="point__item">I get high from packaging and structuring the client's idea, I see details and forks thanks to my versatile accumulated experience;</li>
                    <li class="point__item">I will bring your idea to the best result as quickly as possible, professionally and with an individual approach;</li>
                    <li class="point__item">I will help you to choose the optimal set of tools and solutions both in terms of money and content for the cool realization of your idea.</li>
                  </ul>
                  <p class="team__text">
                    Studio is a dream, to which I have been going all my life, for the sake of which I have been accumulating experience and kicking up bumps.
                  </p>
                </div>
              </div>
            </div>
            <div class="team__item">
              <div class="team__pic"><img src="img/attachements/team-item1.png" alt="" class=""></div>
              <div class="team__info">
                <h3 class="team__name">Vsevolod Korgin</h3>
                <h4 class="team__jobtitle">Co-founder (Client Service)</h4>
                <div class="team__devider"></div>
                <div class="team__desc">
                  <ul class="team__points points">
                    <li class="point__item">In sales and IT project management since 2005;</li>
                    <li class="point__item">I get high from packaging and structuring the client's idea, I see details and forks thanks to my versatile accumulated experience;</li>
                    <li class="point__item">I will bring your idea to the best result as quickly as possible, professionally and with an individual approach;</li>
                    <li class="point__item">I will help you to choose the optimal set of tools and solutions both in terms of money and content for the cool realization of your idea.</li>
                  </ul>
                  <p class="team__text">
                    Studio is a dream, to which I have been going all my life, for the sake of which I have been accumulating experience and kicking up bumps.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="team__arrows slider__arrows"></div>
        </div>
      </section>
      <section class="faq">
        <div class="faq__container">
          <h4 class="faq__subtitle subtitle">_ <span class="_color-blue">HOW CAN WE HELP?</span></h4>
          <h2 class="faq__title title">Frequently Asked Questions <span class="_color-blue">(FAQ)</span></h2>
          <div class="faq__list">
            <div class="faq__item dropdown">
              <h4 class="dropdown__title"><span class="dropdown__title_text">What budget should I allocate for launching an app?</span><span class="dropdown__icon"></span></h4>
              <div class="dropdown__wrapper">
                <div class="dropdown__content">
                  <p class="dropdown__text">
                    The budget for launching an app can vary greatly depending on the required functionality, complexity of design, platform (iOS, Android or both) and other factors. We are ready to discuss your requirements and come up with the best solution that fits your budget.
                  </p>
                </div>
              </div>
            </div>
            <div class="faq__item dropdown">
              <h4 class="dropdown__title"><span class="dropdown__title_text">How much time will it take to create an app?</span><span class="dropdown__icon"></span></h4>
              <div class="dropdown__wrapper">
                <div class="dropdown__content">
                  <p class="dropdown__text">
                    App development time also depends on the complexity and requirements of the app. We usually provide an estimate of time after thoroughly reviewing your project.
                  </p>
                </div>
              </div>
            </div>
            <div class="faq__item dropdown">
              <h4 class="dropdown__title"><span class="dropdown__title_text">Why will you be able to launch the app so quickly?</span><span class="dropdown__icon"></span></h4>
              <div class="dropdown__wrapper">
                <div class="dropdown__content">
                  <p class="dropdown__text">
                    Our team has extensive experience in mobile app development and uses modern development methods, which allows us to optimise the process and achieve fast results without compromising on quality.
                  </p>
                </div>
              </div>
            </div>
            <div class="faq__item dropdown">
              <h4 class="dropdown__title"><span class="dropdown__title_text">What do I need from me to start mobile app development?</span><span class="dropdown__icon"></span></h4>
              <div class="dropdown__wrapper">
                <div class="dropdown__content">
                  <p class="dropdown__text">
                    To start development, we need a detailed description of your idea or requirements for the app. The more detailed you describe your expectations, the better we can turn them into reality.
                  </p>
                </div>
              </div>
            </div>
            <div class="faq__item dropdown">
              <h4 class="dropdown__title"><span class="dropdown__title_text">Do you provide post-launch product support?</span><span class="dropdown__icon"></span></h4>
              <div class="dropdown__wrapper">
                <div class="dropdown__content">
                  <p class="dropdown__text">
                    Yes, we offer post-launch support services. This includes bug fixes, functionality updates, adaptation to new versions of operating systems and other necessary work to keep the application up to date.
                  </p>
                </div>
              </div>
            </div>
            <div class="faq__item dropdown">
              <h4 class="dropdown__title"><span class="dropdown__title_text">Will you sign a non-disclosure agreement?</span><span class="dropdown__icon"></span></h4>
              <div class="dropdown__wrapper">
                <div class="dropdown__content">
                  <p class="dropdown__text">
                    Yes, we are ready to sign a non-disclosure agreement (NDA) to ensure the confidentiality of your idea and all related data. Your safety and confidence in maintaining your confidentiality is our priority.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="feedback" id="feedback">
        <div class="feedback__container">
          <h1 class="feedback__title title">Let's Plan For Your Next level!</h1>
          <form action="" class="feedback__form form" id="feedback__form">
            <div class="form__fields">
              <input type="text" class="form__input _name" id="feedback_name" placeholder="Name">
              <input type="text" class="form__input _email" id="feedback_email" placeholder="Email*" required>
              <textarea class="form__input _description" id="feedback_description" placeholder="Project Description"></textarea>
            </div>
            <p class="form__policy">
              By sending this form I confirm that I have read and accept the 
              <a href="#" class="form__link">Privacy Policy</a>
            </p>
            <button class="form__submit">Submit<i class="form__icon icon-mail"></i></button>
          </form>
        </div>
      </section>

      @@include('html/_footer.html')
    </div>
    @@include('html/_scripts.html')
  </body>
</html>