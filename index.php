<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="google-site-verification" content="uKtr2UsvXYFJ7ODbXEfgpqLQWKyUk05eIaa_YJjI_XU" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="icon" href="/favicon.ico" type="image/x-icon" />

  <title>From Idea to Live Website | Websites That Book Clients</title>
  <meta name="description"
    content="Turn your idea into a live website with booking and lead capture tools. Book a Free Discovery Call today." />

  <meta property="og:title" content="Modern Websites with Built-In Booking">
  <meta property="og:description"
    content="Get a website that automatically books clients and captures leads for your service business.">
  <meta property="og:image" content="https://samiraomar.com/photo/preview2.png">
  <meta property="og:url" content="https://samiraomar.com">
  <meta property="og:type" content="website">

  <meta name="author" content="Samira Omar">
  <meta name="theme-color" content="#ff7a00">


  <link rel="canonical" href="https://samiraomar.com">
  <meta name="robots" content="index, follow">
  
  <!-------------------------manifest------>
  <!-- Favicon for browser tabs -->
  <link rel="icon" type="image/png" sizes="32x32" href="icon/32.png" />
  <link rel="icon" type="image/png" sizes="192x192" href="icon/192.png" />

  <!-- Apple touch icon for iOS home screen -->
  <link rel="apple-touch-icon" sizes="180x180" href="icon/180.png" />

  <!-- PWA manifest -->
  <link rel="manifest" href="manifest.json" />

  <!-- Theme colors for browser UI -->
  <meta name="theme-color" content="#ffbd59" />

  <!-- Optional: Apple-specific meta tags -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="default" />

  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!--  WhatsApp Button -->
  <a href="https://wa.me/96567077369" target="_blank" class="whatsapp-right" aria-label="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
  </a>

  <nav>
    <div class="logo">
      <img src="photo/navlogo.webp" alt="Samira Omar logo" />
    </div>
    <ul class="nav-links">
    <li><a href="#hero">Home</a></li>
<li><a href="#services">Services</a></li>
<li><a href="#who-i-help">Who I Help</a></li>
<li><a href="#process">How It Works</a></li>
    </ul>

    <a href="#contact" class="navcontact">Contact Me</a>

    <div class="burger" id="burger">
      <span class="line1"></span>
      <span class="line2"></span>
      <span class="line3"></span>
    </div>
  </nav>


  <!-- MOBILE SLIDE MENU -->
  <div class="mobile-menu" id="mobileMenu">
    <ul>
      <li><a href="#hero" class="mobile-link">Home</a></li>
      <li><a href="#services" class="mobile-link">Services</a></li>
      <li><a href="#who-i-help" class="mobile-link">Who I Help</a></li>
      <li><a href="#process" class="mobile-link">How It Works</a></li>
      <li style="text-align: center">
        <a href="#contact" class="mobile-link navcontact" aria-label="Go to contact section">Contact Me</a>
      </li>
    </ul>
  </div>

  <main>
  <!-- ===== HERO ===== -->
  <section id="hero" class="hero">
    <div class="h1 card hidden animate-up">
      <h3>CLEAN • FAST • MODERN</h3>
      <h1>
        From Idea to Live Website
        </h1>
      <p>
      Clean, fast websites with <strong>built-in booking and lead capture</strong>,
      designed to turn visitors into real client inquiries.
      </p>

      <div class="service-btn hero-btn">
        <button class="btn calendly-btn"
          onclick="Calendly.initPopupWidget({url: 'https://calendly.com/samiraomar/30min?background_color=111111&text_color=ffffff&primary_color=ffbd59'}); return false;">
          Book a Free Discovery Call
        </button>
      </div>
    </div>

    <!-- Calendly Script -->
    <script src="https://assets.calendly.com/assets/external/widget.js" async></script>

    <!--Calendly CSS-->
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet" />

    <div class="card hidden animate-up">
      <img src="photo/now-profile.webp" alt="samira omar profile" fetchpriority="high" loading="lazy" />
      <div class="card-linkedin">
        <span class="connect-text">Let's connect</span>
        <a href="https://www.linkedin.com/in/samira-omar/" class="linkedin-hero" target="_blank">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
    </div>
  </section>
  <!------------Slider------------>
  <section class="slider-section">
    <div class="slider">
      <div class="slide-track">
        <div class="slide">
          <i class="fa-solid fa-rocket"></i>
          <span>More Bookings</span>
        </div>

        <div class="slide">
          <i class="fa-solid fa-calendar-check"></i>
          <span>Automated Scheduling</span>
        </div>

        <div class="slide">
          <i class="fa-solid fa-mobile-screen-button"></i>
          <span>Mobile-Friendly Design</span>
        </div>

        <div class="slide">
          <i class="fa-solid fa-bolt"></i>
          <span>Fast Loading</span>
        </div>

        <div class="slide">
          <i class="fa-solid fa-chart-line"></i>
          <span>SEO-Optimized</span>
        </div>

        <div class="slide">
          <i class="fa-solid fa-file-lines"></i>
          <span>Smart Client Forms</span>
        </div>

        <!-- Duplicate for smooth infinite scroll -->

        <div class="slide">
          <i class="fa-solid fa-rocket"></i>
          <span>More Bookings</span>
        </div>

        <div class="slide">
          <i class="fa-solid fa-calendar-check"></i>
          <span>Automated Scheduling</span>
        </div>

        <div class="slide">
          <i class="fa-solid fa-mobile-screen-button"></i>
          <span>Mobile-Friendly Design</span>
        </div>

        <div class="slide">
          <i class="fa-solid fa-bolt"></i>
          <span>Fast Loading</span>
        </div>

        <div class="slide">
          <i class="fa-solid fa-chart-line"></i>
          <span>SEO-Optimized</span>
        </div>

        <div class="slide">
          <i class="fa-solid fa-file-lines"></i>
          <span>Smart Client Forms</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== SERVICES ===== -->
  <section id="services" class="services">
    <h2 style="text-align: center" class="card hidden animate-up">
      My Services
    </h2>
    <p class="card hidden animate-up" style="color: #222; text-align: center">
      Here’s what I offer to help your business online:
    </p>
    <br />
    <div class="services-grid">
      <div class="service-card card hidden animate-up">
        <h3>🖥️ Responsive Websites</h3>
        <p>Work smoothly on desktop, tablet, and mobile devices</p>
      </div>

      <div class="service-card card hidden animate-up">
        <h3>📅 Booking & Forms</h3>
        <p>Integrated appointment scheduling and contact forms</p>
      </div>

      <div class="service-card card hidden animate-up">
        <h3>🎨 Custom Design</h3>
        <p>Clean designs tailored to your business brand</p>
      </div>

      <div class="service-card card hidden animate-up">
        <h3>⚡ SEO-Ready Websites</h3>
        <p>Proper headings, meta tags, optimized structure</p>
      </div>

      <div class="service-card card hidden animate-up">
        <h3>🖼️ Image Optimization</h3>
        <p>
          Fast-loading images that improve website speed and user experience.
        </p>
      </div>

      <div class="service-card card hidden animate-up">
        <h3>
          🛠️ Website Maintenance & Updates
          <span style="color: #ff7a00">(Add-On)</span>
        </h3>
        <p>Keep your website secure and updated</p>
      </div>
    </div>
    <br />
    <div class="service-btn">
      <button class="btn calendly-btn">Book a Free Discovery Call</button>
    </div>
  </section>

  <!-- ===== WHO I HELP ===== -->
  <section id="who-i-help" class="who">
    <div class="container card hidden animate-up">
      <h2 class="section-title card hidden animate-up">Who I Help</h2>

      <p class="section-subtitle">
        I work with service-based businesses that need modern websites with
        built-in booking systems and client forms.
      </p>

      <div class="who-grid">
        <div class="who-card card hidden animate-up">
          <div class="who-icon">💇‍♀️</div>
          <h3>Salons & Beauty Studios</h3>
          <p>Online appointment booking and client intake forms.</p>
        </div>

        <div class="who-card card hidden animate-up">
          <div class="who-icon">🏥</div>
          <h3>Clinics & Health Services</h3>
          <p>Secure forms and simple scheduling for patients.</p>
        </div>

        <div class="who-card card hidden animate-up">
          <div class="who-icon">🏋️</div>
          <h3>Fitness Coaches</h3>
          <p>Consultation booking, and lead capture.</p>
        </div>

        <div class="who-card card hidden animate-up">
          <div class="who-icon">💼</div>
          <h3>Consultants</h3>
          <p>Discovery calls and automated client onboarding.</p>
        </div>

        <div class="who-card card hidden animate-up">
          <div class="who-icon">🛠️</div>
          <h3>Other Service Providers</h3>
          <p>Any business that relies on appointments and client forms.</p>
        </div>
      </div>
    </div>
    <br />
    <div class="service-btn">
      <button class="btn calendly-btn">Book a Free Discovery Call</button>
    </div>
  </section>

  <section class="process" id="process">
    <h2 class="card hidden animate-up">How It Works</h2>

    <div class="process-steps">
      <div class="step card hidden animate-up">
        <span>1</span>
        <h3>Share Your Idea</h3>
        <p>Tell me what kind of website you need and your goals.</p>
      </div>

      <div class="step card hidden animate-up">
        <span>2</span>
        <h3>I Design & Build</h3>
        <p>I create a clean, responsive website tailored to your business.</p>
      </div>

      <div class="step card hidden animate-up">
        <span>3</span>
        <h3>Review & Launch</h3>
        <p>
          I review your site, make the needed updates, and launch it for you.
        </p>
      </div>
    </div>
  </section>
  <!------FAQ----------------->
  <section class="faq card hidden animate-up" id="faq">
    <h2 style="margin-top: 0">FAQ</h2>

    <details class="card hidden animate-up">
      <summary>How long does it take to build a website?</summary>
      <p>Usually 10 - 14 days, depending on the project size.</p>
    </details>

    <details class="card hidden animate-up">
      <summary>Do you offer revisions?</summary>
      <p>Yes, I include 2 revisions to make sure you’re happy.</p>
    </details>

    <details class="card hidden animate-up">
      <summary>What do you need from me to start?</summary>
      <p>Your content, ideas, and any examples you like.</p>
    </details>
  </section>

  <!-- ===== CONTACT ===== -->
  <section id="contact" class="contact">
    <div>
      <h2 class="card hidden animate-up" style="text-align: center">
        Get in Touch
      </h2>

      <p class="card hidden animate-up" style="text-align: center">
        Ready to build your website? Share your idea below.
      </p>
      <br />
      <form action="#" method="POST" name="contactform" class="contact-form card hidden animate-up" id="contactform">
        <input type="hidden" name="Source" value="SAM" />

        <input type="text" name="company" id="company" tabindex="-1" autocomplete="off" style="display: none" />

        <label for="name">Full Name</label>
        <input type="text" id="name" name="Name" autocomplete="complete-name" placeholder="Enter your full name" required />

        <label for="email">Email</label>
        <input type="email" id="email" name="Email" autocomplete="off" placeholder="Enter your email" required />

        <label for="social">Social Media Link (optional)</label>
        <input type="url" id="social" name="Social" autocomplete="social-media-link" placeholder="It helps us understand your brand or project" />

        <label for="message">Project Details / Message</label>
        <textarea id="message" name="Message" autocomplete="ideas" placeholder="Describe your website idea here…" required></textarea>

        <button type="submit" class="btn" id="button">Send message</button>
        <span id="msg" style="text-align: center"></span>
      </form>
    </div>
    <div></div>
  </section>
</main>

  <script src="script.js"></script>

  <!-- Floating Feedback Button -->
  <button id="feedbackButton">Feedback 📝</button>

  <!-- Feedback Popup -->
  <div id="feedbackPopup" class="popup">
    <form id="feedbackForm" class="popup-form" method="post">
      <h2>We Value Your Feedback</h2>
      <p>It helps us improve and serve you better.</p>

      <label>Name (optional)</label>
      <input type="text" name="name" placeholder="Your name" />

      <label>Feedback *</label>
      <textarea name="feedback" placeholder="Your feedback..." required></textarea>

      <label>Rating *</label>
      <div class="stars">
        <input type="radio" name="rating" id="star5" value="5" required /><label for="star5">★</label>
        <input type="radio" name="rating" id="star4" value="4" /><label for="star4">★</label>
        <input type="radio" name="rating" id="star3" value="3" /><label for="star3">★</label>
        <input type="radio" name="rating" id="star2" value="2" /><label for="star2">★</label>
        <input type="radio" name="rating" id="star1" value="1" /><label for="star1">★</label>
      </div>

      <button type="submit">Submit</button>
      <!--<button type="button" id="closePopup">Close</button>-->

      <p id="feedbackMessage"></p>
    </form>
  </div>

  <script>
    // Open/close popup
    const btn = document.getElementById("feedbackButton");
    const popup = document.getElementById("feedbackPopup");
    //const closeBtn = document.getElementById('closePopup');
    const message = document.getElementById("feedbackMessage");

    btn.addEventListener("click", () => (popup.style.display = "flex"));
    //closeBtn.addEventListener('click', ()=> popup.style.display='none');
    window.addEventListener("click", (e) => {
      if (e.target == popup) popup.style.display = "none";
    });

    // AJAX form submission
    document
      .getElementById("feedbackForm")
      .addEventListener("submit", function (e) {
        e.preventDefault();
        const formData = new FormData(this);

        fetch("feedback/save_feedback.php", {
          method: "POST",
          body: formData,
        })
          .then((res) => res.text())
          .then((data) => {
            message.textContent = data;
            this.reset();
            setTimeout(() => (popup.style.display = "none"), 5000);
          });
      });
  </script>
</body>
<footer class="footer">
  <div>
    <span class="connect-text" style="color: #ff7a00">Linked</span>
    <a href="https://www.linkedin.com/in/samira-omar/" class="linkedin-footer" target="_blank">
      <i class="fab fa-linkedin-in" style="text-align: center"></i>
    </a>

  </div>
  <strong>© 2026 Samira Omar</strong> — Website Developer | All rights reserved


</footer>

</html>