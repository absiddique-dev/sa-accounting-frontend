<?php
include('./layout/header.php');
include('./includes/connection.php');
?>

<!--===== WELCOME STARTS=======-->
<div class="welcome2-section-area">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5">
        <div
          class="welcome2-textarea"
          data-aos="fade-right"
          data-aos-duration="1000">
          <span
            class="maximum font-outfit font-16 lineh-16 color-12 weight-500 margin-b24 d-inline-block">Maximize Your Financial Growth with Expert Accounting & Tax Solutions</span>
          <h1 class="font-outfit font-56 weight-600 lineh-64 color-17 margin-b18">
            Expert Accounting, Consultation to Drive <span class="succes">Growth</span> and Success.
          </h1>

          <p class="font-16 lineh-26 color-17 weight-400 font-outfit">
            Our team brings years of experience across diverse industries, allowing us to deliver customized strategies and insights designed to meet your unique financial needs and optimize your business's financial health.
          </p>
          <div
            class="theme-btn4 margin-t32 d-inline-block margn-left"
            data-aos="fade-up"
            data-aos-duration="1200">
            <a
              href="/"
              class="theme-btn5 font-outfit font-16 weight-700">Schedule a Consultation
              <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
          </div>
        </div>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-6" data-aos="zoom-out" data-aos-duration="1200">
        <div class="welcome2-images-area">
          <div class="welcome-imgs-area">
            <div class="main-img">
              <img
                src="assets/images/models/image-3.jpg"
                alt=""
                class="main-imgs" />
              <img
                src="assets/images/sectionimg/ecommers-img.png"
                alt=""
                class="ecommer aniamtion-key-2"
                data-aos="fade-left"
                data-aos-duration="1400" />
            </div>
            <img
              src="assets/images/elementor/elementor7.png"
              alt=""
              class="elementor-8 aniamtion-key-1" />
            <img
              src="assets/images/elementor/elementor8.png"
              alt=""
              class="elementor9 aniamtion-key-2" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <img
    src="assets/images/elementor/elementor6.png"
    alt=""
    class="elementor-6" />
</div>
<!--===== WELCOME END=======-->

<!--===== ABOUT STARTS=======-->
<div class="about2-section-area section-padding5" id="about">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="about2-author-images">
          <div
            class="about2-scetion-images"
            data-aos="zoom-out"
            data-aos-duration="1200">
            <img src="assets/images/models/image-1.jpg" alt="" />
          </div>
          <div class="row">
            <div
              class="col-lg-6"
              data-aos="fade-up"
              data-aos-duration="1400">
              <div class="about-2-authr1">
                <img src="assets/images/models/image-2.jpg" alt="" />
              </div>
            </div>
            <div
              class="col-lg-6"
              data-aos="fade-up"
              data-aos-duration="1600">
              <div class="about-2-authr1">
                <img src="assets/images/models/image-4.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
        <div class="about-2-textarea">
          <span
            class="maximum font-outfit font-16 lineh-16 color-12 weight-500 margin-b20 d-inline-block">About Us</span>
          <h1
            class="font-outfit font-44 weight-600 lineh-52 color-17 margin-b20"
            data-aos="fade-left"
            data-aos-duration="1000">
            Unlock Your Business's Full Potential with us.
          </h1>
          <div
            class="pera-background"
            data-aos="fade-left"
            data-aos-duration="1200">
            <p class="font-outfit font-16 lineh-26 color-17 weight-500">
              Partner with us to experience the advantages of professional financial consultation. Schedule a free consultation today and learn how our expertise can enhance growth, streamline operations, and maximize your business's success.
            </p>
          </div>
          <p class="font-outfit font-16 lineh-26 colorp weight-400">
            With years of experience across multiple industries, we provide tailored strategies and insights to meet your unique financial needs.We focus on delivering measurable results, ensuring your business achieves its financial goals.
          </p>
          <div
            class="theme-btn4 margin-t32 d-inline-block margn-left"
            data-aos="fade-up"
            data-aos-duration="1400">
            <a
              href="servicev1.html"
              class="theme-btn5 font-outfit font-16 weight-700">Explore services
              <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== ABOUT END=======-->

<!--===== SERVICE STARTS=======-->
<div class="service2-section-areas section-padding8" id="service">
  <img
    src="assets/images/elementor/elementor9.png"
    alt=""
    class="elementoe5" />
  <div class="container">
    <div class="row">
      <div class="col-lg-12" data-aos="fade-down" data-aos-duration="800">
        <div class="service-haeder-text text-center margin-b60">
          <span
            class="maximum font-outfit font-16 lineh-16 color-12 weight-500 margin-b20 d-inline-block">Our Services</span>
          <h1
            class="font-outfit font-44 weight-600 lineh-52 color-17 margin-b20">
            Our Professional Business Consulting Services.
          </h1>
        </div>
      </div>
    </div>
    <div class="row">

      <?php
      $query = mysqli_query($conn, "SELECT * FROM services");
      while ($data = mysqli_fetch_assoc($query)) {
      ?>
        <div
          class="col-lg-4 col-md-6"
          data-aos="fade-down"
          data-aos-duration="1000">

          <div class="service-after-before border rounded">
            <div class="service2-icon">
              <img src="assets/images/icons/icon2.svg" alt="" />
            </div>
            <a href="/">
              <h1
                class="font-outfit font-22 weight-600 lineh-22 color-17 margin-b">
                <?= $data['name'] ?>
              </h1>
            </a>
            <p class="font-outfit font-16 lineh-26 weight-400 color-15">
              <?= $data['description'] ?>
            </p>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
    <!-- <div class="row">
      <div
        class="col-lg-12 text-center"
        data-aos="fade-up"
        data-aos-duration="1200">
        <div class="theme-btn4 d-inline-block margin-left service-center">
          <a
            href="/"
            class="theme-btn5 font-outfit font-16 weight-700 margin-t32">view More services
            <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
        </div>
      </div>
    </div> -->
  </div>
  <img
    src="assets/images/elementor/elementor8.png"
    alt=""
    class="elementor-7 aniamtion-key-2" />
</div>

<!--===== COMPANY STARTS=======-->
<div class="company-section-area section-padding5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
        <div class="company-progress-area">
          <span
            class="maximum font-outfit font-16 lineh-16 color-12 weight-500 margin-b20 d-inline-block">Company Progress</span>
          <h1
            class="font-outfit font-44 weight-600 lineh-52 color-17 margin-b20">
            Setting New Standards in Business Strategy and Consulting.
          </h1>
          <p class="margin-b8">
            At SA Accounting, we are dedicated to helping businesses reach their highest potential. Whether you're a startup or an established company, our expertise in strategic planning and business consulting drives growth and success.
          </p>
          <!-- <div class="progress7 margin-b12">
            <div class="bussibess-plan">
              <span
                class="font-16 font-outfit lineh-16 color-17 weight-500 international1">Business Planning</span>
              <p class="font-16 font-outfit lineh-16 color-17 weight-500">
                98%
              </p>
            </div>
            <div
              class="progress-wrap3 progress3"
              data-progress-percent="98">
              <div class="progress-bar3 progress3"></div>
            </div>
          </div>
          <div class="bussibess-plan">
            <span
              class="font-16 font-outfit lineh-16 color-17 weight-500 international1">International Business
            </span>
            <p class="font-16 font-outfit lineh-16 color-17 weight-500">
              96%
            </p>
          </div> -->
          <!-- <div class="progress-wrap3 progress3" data-progress-percent="96">
            <div class="progress-bar3 progress3"></div>
          </div> -->
          <div
            class="theme-btn4 margin-t32 d-inline-block margn-left service-center"
            data-aos="fade-left"
            data-aos-duration="1200">
            <a
              href="#"
              class="theme-btn5 font-outfit font-16 weight-700 margin-b12">Contact Us
              <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="zoom-out" data-aos-duration="1000">
        <div class="company-images">
          <img src="assets/images/models/image-8.jpg" alt="" />
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== COMPANY END=======-->

<!--===== COUNTER STARTS=======-->
<div class="counter2-section-area">
  <img
    src="assets/images/elementor/elementor10.png"
    alt=""
    class="elementor-10" />
  <div class="container">
    <div class="row">
      <div
        class="col-lg-3 col-md-6"
        data-aos="zoom-in"
        data-aos-duration="800">
        <div class="countre2-boxarea text-center">
          <div class="counter-box">
            <h1 class="font-outfit font-44 lineh-52 color-17 weight-600">
              <span class="counter">400</span>+
            </h1>
            <p
              class="font-outfit font-16 lineh-16 color-15 weight-400 margin-t">
              Consulting Solution
            </p>
          </div>
        </div>
      </div>

      <div
        class="col-lg-3 col-md-6"
        data-aos="zoom-in"
        data-aos-duration="1000">
        <div class="countre2-boxarea text-center">
          <div class="counter-box">
            <h1 class="font-outfit font-44 lineh-52 color-17 weight-600">
              <span class="counter">620</span>+
            </h1>
            <p
              class="font-outfit font-16 lineh-16 color-15 weight-400 margin-t">
              Complete Cases
            </p>
          </div>
        </div>
      </div>

      <div
        class="col-lg-3 col-md-6"
        data-aos="zoom-in"
        data-aos-duration="1200">
        <div class="countre2-boxarea text-center">
          <div class="counter-box">
            <h1 class="font-outfit font-44 lineh-52 color-17 weight-600">
              <span class="counter">800</span>+
            </h1>
            <p
              class="font-outfit font-16 lineh-16 color-15 weight-400 margin-t">
              Happy Customer
            </p>
          </div>
        </div>
      </div>

      <div
        class="col-lg-3 col-md-6"
        data-aos="zoom-in"
        data-aos-duration="1400">
        <div class="countre2-boxarea text-center">
          <div class="counter-box">
            <h1 class="font-outfit font-44 lineh-52 color-17 weight-600">
              <span class="counter">120</span>+
            </h1>
            <p
              class="font-outfit font-16 lineh-16 color-15 weight-400 margin-t">
              Expert Consultant
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <img
    src="assets/images/elementor/elementor8.png"
    alt=""
    class="elementor-3 aniamtion-key-2" />
</div>
<!--===== COUNTER END=======-->

<!--===== CLIENT STARTS=======-->
<div class="client-section-area section-padding5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div
          class="animationdiv"
          data-aos="fade-left"
          data-aos-duration="1000">
          <div class="client-author-area margin-b30">
            <div class="client-icon">
              <img src="assets/images/icons/client1.svg" alt="" />
            </div>
            <div class="client-main-pera">
              <h1
                class="font-24 lineh-26 weight-600 font-outfit color-17 margin-b14">
                <a href="servicemiddle.html" class="color-17">Identifying Your Financial Goals</a>
              </h1>
              <p class="font-outfit font-16 lineh-26 weight-400 color-22">
                We begin by thoroughly understanding your unique financial aspirations and challenges to tailor our approach to your needs.
              </p>
            </div>
          </div>
        </div>

        <div
          class="animationdiv"
          data-aos="fade-left"
          data-aos-duration="1200">
          <div class="client-author-area margin-b30">
            <div class="client-icon">
              <img src="assets/images/icons/client2.svg" alt="" />
            </div>
            <div class="client-main-pera">
              <h1
                class="font-24 lineh-26 weight-600 font-outfit color-17 margin-b14">
                <a href="servicemiddle.html" class="color-17">In-Depth Financial Analysis</a>
              </h1>
              <p class="font-outfit font-16 lineh-26 weight-400 color-22">
                Our detailed analysis uncovers opportunities and addresses challenges, ensuring a customized strategy for your financial success.
              </p>
            </div>
          </div>
        </div>

        <div
          class="animationdiv"
          data-aos="fade-left"
          data-aos-duration="1400">
          <div class="client-author-area">
            <div class="client-icon">
              <img src="assets/images/icons/client3.svg" alt="" />
            </div>
            <div class="client-main-pera">
              <h1
                class="font-24 lineh-26 weight-600 font-outfit color-17 margin-b14">
                <a href="servicemiddle.html" class="color-17 ts">Achieving Your Financial Success</a>
              </h1>
              <p class="font-outfit font-16 lineh-26 weight-400 color-22">
                Our goal is to transform your financial aspirations into reality with expert strategies and dedicated support.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
        <div class="works-text-area">
          <span
            class="maximum font-outfit font-16 lineh-16 color-12 weight-500 margin-b20 d-inline-block">How it works</span>
          <h1
            class="font-outfit font-44 weight-600 lineh-52 color-17 margin-b24">
            Why Choose SA Accounting?
          </h1>
          <p
            class="font-outfit font-16 lineh-26 weight-400 color-17 margin-b">
            we offer tailored business consulting services designed to address your unique financial goals and challenges. Our expert team provides customized strategies, leveraging years of industry experience to deliver actionable insights and proven results. Whether you're looking to optimize your operations, plan for growth, or navigate complex financial landscapes, we're here to guide you every step of the way.
          </p>
          <p
            class="font-outfit font-16 lineh-26 weight-400 color-17 margin-b">
            Our commitment to excellence is reflected in our certifications, industry affiliations, and the trust of our valued clients. We offer flexible pricing options and service packages to meet diverse needs, and our responsive team is always available to answer your questions.
          </p>
          <div
            class="theme-btn4 margin-t32 margn-left"
            data-aos="fade-right"
            data-aos-duration="1200">
            <a
              href="#consultation"
              class="theme-btn5 font-outfit font-16 weight-700">Schedule a Consultation
              <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== CLIENT END=======-->

<!--===== CASE STUDY STARTS=======-->
<div class="case-study-scetion-area section-padding8" id="casestudy">
  <img
    src="assets/images/elementor/elementor8.png"
    alt=""
    class="elementor-5 aniamtion-key-1" />
  <div class="container">
    <div class="row">
      <div class="col-lg-12" data-aos="fade-down" data-aos-duration="800">
        <div class="case-study-header text-center margin-b60">
          <span
            class="maximum font-outfit font-16 lineh-16 color-12 weight-500 margin-b20 d-inline-block">Case Study</span>
          <h1 class="font-outfit font-44 weight-600 lineh-52 color-17">
            View our case study
          </h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="single-portfolio singlecase">
          <div class="portfolio-images singleportfolio">
            <img src="assets/images/models/team-3.jpg" alt="" />
          </div>
          <div class="portfolio-textarea">
            <h1
              class="font-24 weight-600 font-outfit lineh-24 color-17 margin-b14">
              Startup Growth
            </h1>
            <p class="font-outfit weight-400 color-17 lineh-26 font-16">
              We streamlined financial operations for a growing startup.
            </p>
            <div class="portfolio-visible-textarea margin-t">
              <p class="font-outfit weight-400 color-17 lineh-26 font-16">
                Our solutions reduced inefficiencies and improved financial visibility, enabling sustained growth.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="single-portfolio singlecase">
          <div class="portfolio-images singleportfolio">
            <img src="assets/images/models/team-2.jpg" alt="" />
          </div>
          <div class="portfolio-textarea">
            <h1
              class="font-24 weight-600 font-outfit lineh-24 color-17 margin-b14">
              Tax Optimization
            </h1>
            <p class="font-outfit weight-400 color-17 lineh-26 font-16">
              We refined tax strategies for a mid-sized enterprise.
            </p>
            <div class="portfolio-visible-textarea margin-t">
              <p class="font-outfit weight-400 color-17 lineh-26 font-16">
                Our strategic planning identified savings opportunities and enhanced financial stability.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="single-portfolio singlecase">
          <div class="portfolio-images singleportfolio">
            <img src="assets/images/models/team-4.jpg" alt="" />
          </div>
          <div class="portfolio-textarea">
            <h1
              class="font-24 weight-600 font-outfit lineh-24 color-17 margin-b14">
              Non-Profit Planning
            </h1>
            <p class="font-outfit weight-400 color-17 lineh-26 font-16">
              We developed a comprehensive financial plan for a non-profit.
            </p>
            <div class="portfolio-visible-textarea margin-t">
              <p class="font-outfit weight-400 color-17 lineh-26 font-16">
                Our approach improved resource management and financial transparency for better mission support.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <img
    src="assets/images/elementor/elementor11.png"
    alt=""
    class="elementor-11" />
</div>
<!--===== CASE STUDY END=======-->

<!--===== PRICING PLAN END=======-->
<div class="pricing2-plan-section-area section-padding8" id="pricing">
  <div class="container">
    <div class="row">
      <div class="col-lg-12" data-aos="fade-down" data-aos-duration="800">
        <div class="pricing-pan2-header text-center">
          <span
            class="maximum font-outfit font-16 lineh-16 color-12 weight-500 margin-b20 d-inline-block">Pricing Plan</span>
          <h1 class="font-outfit font-44 weight-600 lineh-52 color-17">
            Smart solution for your digital business
          </h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div
        class="col-lg-12 text-center"
        data-aos="fade-down"
        data-aos-duration="800">
        <div class="plan-toggle-wrap margin-t32">
          <div class="toggle-inner">
            <input id="ce-toggle" checked="" type="checkbox" />
            <span class="custom-toggle"></span>
            <span
              class="t-month font-outfit font-16 lineh-26 weight-500 colop">Monthly</span>
            <span
              class="t-year font-outfit font-16 lineh-26 weight-500 colop">Annual</span>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="tab-content">
          <div id="monthly" style="display: block">
            <div class="row">
              <div class="col-lg-1"></div>
              <div
                class="col-lg-10"
                data-aos="fade-down"
                data-aos-duration="1000">
                <div class="tabs2-area margin-b30">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="pricing2-textarea">
                        <h2
                          class="font-outfit font-24 weight-500 lineh-26 color-17 margin-b20">
                          Basic
                        </h2>
                        <div class="space20"></div>
                        <h2
                          class="pricing-heading font-outfit color-17 margin-b weight-700 font-44">
                          $29<span
                            class="font-outfit font-20 weight-500 lineh-20 color-17">/month</span>
                        </h2>
                        <p
                          class="font-outfit font-16 color-15 weight-400 lineh-26">
                          Ideal for individuals and small businesses looking for basic financial and tax management services.
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="features-textarea">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="features-author-area">
                              <h1
                                class="font-24 font-outfit lineh-24 color-17 margin-b24 weight-600">
                                Our Features
                              </h1>
                              <div class="features-list">
                                <ul>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Basic Financial Planning
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Standard Tax Preparation & Filing
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Bookkeeping Services
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Tax Compliance Assistance
                                    </p>
                                  </li>

                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="features-author-area margin-t45">
                              <div class="features-list">
                                <ul>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Personal Finance Consulting
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Income & Expense Tracking
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Quarterly Financial Reports
                                    </p>
                                  </li>
                                  <li>
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Essential Business Consulting
                                    </p>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-1"></div>
              <div
                class="col-lg-10"
                data-aos="fade-down"
                data-aos-duration="1200">
                <div class="tabs2-area margin-b30">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="pricing2-textarea">
                        <h2
                          class="font-outfit font-24 weight-500 lineh-26 color-17 margin-b20">
                          Pro
                        </h2>
                        <div class="space20"></div>
                        <h2
                          class="pricing-heading font-outfit color-17 margin-b weight-700 font-44">
                          $99<span
                            class="font-outfit font-20 weight-500 lineh-20 color-17">/month</span>
                        </h2>
                        <p
                          class="font-outfit font-16 color-15 weight-400 lineh-26">
                          Aut quod doloremque saepe sit deleniti
                          consequatur. Possimus quod officiis pariatur
                          voluptatem velit sint.
                        </p>
                        <div class="theme-btn4 margin-t32 margn-left">
                          <a
                            href="#"
                            class="theme-btn5 font-outfit font-16 weight-700">choose a plan
                            <span><i
                                class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="features-textarea">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="features-author-area">
                              <h1
                                class="font-24 font-outfit lineh-24 color-17 margin-b24 weight-600">
                                Our Features
                              </h1>
                              <div class="features-list">
                                <ul>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Advanced Financial Planning
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Comprehensive Tax Solutions
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Tax Audit Support
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Payroll and Accounting Services
                                    </p>
                                  </li>
                                </ul>
                              </div>

                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="features-author-area margin-t45">
                              <div class="features-list">
                                <ul>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Business Tax Optimization
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Financial Health Assessment
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Monthly Financial Reports
                                    </p>
                                  </li>
                                  <li>
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Corporate Tax Strategy Consulting
                                    </p>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-1"></div>
              <div
                class="col-lg-10"
                data-aos="fade-down"
                data-aos-duration="1400">
                <div class="tabs2-area margin-b30">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="pricing2-textarea">
                        <h2
                          class="font-outfit font-24 weight-500 lineh-26 color-17 margin-b20">
                          Premium
                        </h2>
                        <div class="space20"></div>
                        <h2
                          class="pricing-heading font-outfit color-17 margin-b weight-700 font-44">
                          $49<span
                            class="font-outfit font-20 weight-500 lineh-20 color-17">/month</span>
                        </h2>
                        <p
                          class="font-outfit font-16 color-15 weight-400 lineh-26">
                          Aut quod doloremque saepe sit deleniti
                          consequatur. Possimus quod officiis pariatur
                          voluptatem velit sint.
                        </p>
                        <div class="theme-btn4 margin-t32 margn-left">
                          <a
                            href="#"
                            class="theme-btn5 font-outfit font-16 weight-700">choose a plan
                            <span><i
                                class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="features-textarea">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="features-author-area">
                              <h1
                                class="font-24 font-outfit lineh-24 color-17 margin-b24 weight-600">
                                Our Features
                              </h1>
                              <div class="features-list">
                                <ul>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Complete Financial Management
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Full-Service Tax Planning & Filing
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      International Tax Solutions
                                  </li>
                                  <li>
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Financial Compliance Consulting
                                    </p>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="features-author-area margin-t45">
                              <div class="features-list">
                                <ul>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Custom Business Tax Strategies
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      CFO Advisory Services
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Real-Time Financial Reporting
                                    </p>
                                  </li>
                                  <li>
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Investment and Wealth Management Strategies
                                    </p>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="yearly" style="display: none">
            <div class="row">
              <div class="col-lg-1"></div>
              <div class="col-lg-10">
                <div class="tabs2-area margin-b30">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="pricing2-textarea">
                        <h2
                          class="font-outfit font-24 weight-500 lineh-26 color-17 margin-b20">
                          Basic
                        </h2>
                        <div class="space20"></div>
                        <h2
                          class="pricing-heading font-outfit color-17 margin-b weight-700 font-44">
                          $299<span
                            class="font-outfit font-20 weight-500 lineh-20 color-17">/Annual</span>
                        </h2>
                        <p
                          class="font-outfit font-16 color-15 weight-400 lineh-26">
                          Aut quod doloremque saepe sit deleniti
                          consequatur. Possimus quod officiis pariatur
                          voluptatem velit sint.
                        </p>
                        <div class="theme-btn4 margin-t32 margn-left">
                          <a
                            href="#"
                            class="theme-btn5 font-outfit font-16 weight-700">choose a plan
                            <span><i
                                class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="features-textarea">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="features-author-area">
                              <h1
                                class="font-24 font-outfit lineh-24 color-17 margin-b24 weight-600">
                                Our Features
                              </h1>
                              <div class="features-list">
                                <ul>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Business Planning
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Next Genaration Accounting
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Financial Freedom Consulting
                                    </p>
                                  </li>
                                  <li>
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Purposive Business Planning
                                    </p>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="features-author-area margin-t45">
                              <div class="features-list">
                                <ul>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Corporate Finance
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      International Business
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Business Finance Planning
                                    </p>
                                  </li>
                                  <li>
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Business Strategy
                                    </p>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-1"></div>
              <div class="col-lg-10">
                <div class="tabs2-area margin-b30">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="pricing2-textarea">
                        <h2
                          class="font-outfit font-24 weight-500 lineh-26 color-17 margin-b20">
                          Pro
                        </h2>
                        <div class="space20"></div>
                        <h2
                          class="pricing-heading font-outfit color-17 margin-b weight-700 font-44">
                          $499<span
                            class="font-outfit font-20 weight-500 lineh-20 color-17">/Annual</span>
                        </h2>
                        <p
                          class="font-outfit font-16 color-15 weight-400 lineh-26">
                          Aut quod doloremque saepe sit deleniti
                          consequatur. Possimus quod officiis pariatur
                          voluptatem velit sint.
                        </p>
                        <div class="theme-btn4 margin-t32 margn-left">
                          <a
                            href="#"
                            class="theme-btn5 font-outfit font-16 weight-700">choose a plan
                            <span><i
                                class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="features-textarea">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="features-author-area">
                              <h1
                                class="font-24 font-outfit lineh-24 color-17 margin-b24 weight-600">
                                Our Features
                              </h1>
                              <div class="features-list">
                                <ul>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Business Planning
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Next Genaration Accounting
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Financial Freedom Consulting
                                    </p>
                                  </li>
                                  <li>
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Purposive Business Planning
                                    </p>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="features-author-area margin-t45">
                              <div class="features-list">
                                <ul>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Corporate Finance
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      International Business
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Business Finance Planning
                                    </p>
                                  </li>
                                  <li>
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Business Strategy
                                    </p>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-1"></div>
              <div class="col-lg-10">
                <div class="tabs2-area margin-b30">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="pricing2-textarea">
                        <h2
                          class="font-outfit font-24 weight-500 lineh-26 color-17 margin-b20">
                          Premium
                        </h2>
                        <div class="space20"></div>
                        <h2
                          class="pricing-heading font-outfit color-17 margin-b weight-700 font-44">
                          $399<span
                            class="font-outfit font-20 weight-500 lineh-20 color-17">/Annual</span>
                        </h2>
                        <p
                          class="font-outfit font-16 color-15 weight-400 lineh-26">
                          Aut quod doloremque saepe sit deleniti
                          consequatur. Possimus quod officiis pariatur
                          voluptatem velit sint.
                        </p>
                        <div class="theme-btn4 margin-t32 margn-left">
                          <a
                            href="#"
                            class="theme-btn5 font-outfit font-16 weight-700">choose a plan
                            <span><i
                                class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="features-textarea">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="features-author-area">
                              <h1
                                class="font-24 font-outfit lineh-24 color-17 margin-b24 weight-600">
                                Our Features
                              </h1>
                              <div class="features-list">
                                <ul>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Business Planning
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Next Genaration Accounting
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Financial Freedom Consulting
                                    </p>
                                  </li>
                                  <li>
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Purposive Business Planning
                                    </p>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="features-author-area margin-t45">
                              <div class="features-list">
                                <ul>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Corporate Finance
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      International Business
                                    </p>
                                  </li>
                                  <li class="margin-b24">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Business Finance Planning
                                    </p>
                                  </li>
                                  <li>
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <p
                                      class="font-16 font-outfit lineh-20 weight-500 color-17">
                                      Business Strategy
                                    </p>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== PRICING PLAN END=======-->

<!--===== CONTACT STARTS=======-->
<div class="contact2-section-area section-padding5" id="contact">
  <img
    src="assets/images/elementor/elementor8.png"
    alt=""
    class="elementor14 aniamtion-key-1" />
  <div class="container">
    <div class="row">
      <div class="col-lg-12" data-aos="fade-down" data-aos-duration="800">
        <div class="contact2-header text-center margin-b60">
          <span
            class="maximum font-outfit font-16 lineh-16 color-12 weight-500 margin-b20 d-inline-block">Contuct Us</span>
          <h1 class="font-outfit font-44 weight-600 lineh-52 color-17">
            Get in touch with us today
          </h1>
        </div>
      </div>
    </div>
    <div class="col-lg-12" data-aos="fade-right" data-aos-duration="1000">
      <div class="contact2-all-contact">
        <div class="row align-items-center" id="consultation">
          <div class="col-lg-6">
            <div class="contact2-maincontact">
              <h1
                class="font-24 font-outfit lineh-24 color-17 weight-600 margin-b">
                Send Us A Message
              </h1>
              <p
                class="font-16 font-outfit lineh-26 weight-400 color-15 margin-b24">
                Our response time is within 30 minutes during business hours
              </p>

              <div class="contact-from-area">
                <form method="POST" action="">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="first-input">
                        <input type="text" placeholder="Name" name="name" required />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="first-input">
                        <input type="number" placeholder="Phone Number" name="phone" required />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="first-input">
                        <input type="email" placeholder="Email Address" name="email" required />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="textarea">
                        <textarea cols="30" rows="10" placeholder="Message" name="message" required></textarea>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="theme-btn4 margin-t32 margin-left" data-aos="fade-left" data-aos-duration="1200">
                        <button class="theme-btn5 font-outfit font-16 weight-700">
                          Schedule a Consultation
                          <span><i class="fa-solid fa-arrow-right-long"></i></span>
                        </button>
                      </div>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div
              class="contact-padding"
              data-aos="fade-right"
              data-aos-duration="1000">
              <div class="contact2-auhtor-section">
                <div class="clock-area">
                  <img src="assets/images/icons/clock1.svg" alt="" />
                </div>
                <div class="contact-location">
                  <h1
                    class="font-20 font-outfit lineh-24 color-17 weight-600 margin-b">
                    Contact us
                  </h1>
                  <p
                    class="font-outfit font-16 lineh-26 color-17 weight-400">
                    8708 Technology Forest Pl Suite 125 -G, The <br />
                    Woodlands, TX 77381
                  </p>
                </div>
              </div>
            </div>

            <div
              class="contact-padding margin-t"
              data-aos="fade-right"
              data-aos-duration="1200">
              <div class="contact2-auhtor-section contact-phonr-bg">
                <div class="clock-area">
                  <img src="assets/images/icons/phone4.svg" alt="" />
                </div>
                <div class="contact-location">
                  <h1
                    class="font-20 font-outfit lineh-24 color weight-600 margin-b">
                    Call or text
                  </h1>
                  <p class="font-outfit font-16 lineh-26 color weight-400">
                    <a href="tel:123-456-7890" class="color">123-456-7890</a>
                  </p>
                </div>
              </div>
            </div>

            <div
              class="contact-padding margin-t"
              data-aos="fade-right"
              data-aos-duration="1400">
              <div class="contact2-auhtor-section">
                <div class="clock-area">
                  <img src="assets/images/icons/email3.svg" alt="" />
                </div>
                <div class="contact-location">
                  <h1
                    class="font-20 font-outfit lineh-24 color-17 weight-600 margin-b">
                    Email us today
                  </h1>
                  <p
                    class="font-outfit font-16 lineh-26 color-17 weight-400">
                    <a href="mailto:info@taxvice.com" class="color-17">info@saaccounting.com</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <img
    src="assets/images/elementor/elementor12.png"
    class="elementor13"
    alt="" />
</div>
<!--===== CONTACT  END=======-->

<!--===== CTA STARTS=======-->
<div class="cta2-section-area section-padding7">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
        <div class="cta2-textarea">
          <h1
            class="font-outfit font-44 lineh-52 color weight-600 margin-b">
            Let us help your grow business
          </h1>
          <p class="font-outfit font-16 lineh-26 weight-400 color">
            Consider adding a brief personalized message, expressing your
            eagerness to connect with potential clients and help them
            achieve their business goals.
          </p>
        </div>
      </div>
      <div class="col-lg-2"></div>
      <div class="col-lg-4" data-aos="fade-left" data-aos-duration="1000">
        <div class="cta2-from-area">
          <form>
            <div class="input1-area">
              <input type="email" placeholder="Email Address" />
            </div>
            <div class="theme5-btn">
              <button
                type="submit"
                class="font-16 weight-700 lineh-16 color font-outfit">
                Subscribe
                <span><i class="fa-solid fa-arrow-right-long"></i></span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <img
    src="assets/images/elementor/elementor13.png"
    alt=""
    class="elementor-13" />
</div>
<!--===== CTA  END=======-->

<?php
include('./layout/footer.php');

if (isset($_POST['submit'])) {
  $query = "SELECT * FROM enquiry_form WHERE phone = ? OR email = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("ss", $_POST['phone'], $_POST['email']);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 0) {
    $insert_query = "INSERT INTO enquiry_form (name, phone, email, message) VALUES (?, ?, ?, ?)";
    $insert_stmt = $conn->prepare($insert_query);
    $insert_stmt->bind_param("ssss", $_POST['name'], $_POST['phone'], $_POST['email'], $_POST['message']);

    if ($insert_stmt->execute()) {
      $_SESSION['toast'] = ['message' => 'Enquiry submitted successfully!', 'type' => 'success'];
?>
      <script>
        window.location.href()
      </script>
<?php
    } else {
      $_SESSION['toast'] = ['message' => 'Something went wrong', 'type' => 'error'];
    }
  } else {
    $_SESSION['toast'] = ['message' => 'Form already submitted', 'type' => 'error'];
  }
  $stmt->close();
}

?>