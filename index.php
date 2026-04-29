<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Calendly Script -->
  <script src="https://assets.calendly.com/assets/external/widget.js" async></script>

  <!--Calendly CSS-->
  <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet" />

  <script src="https://unpkg.com/lucide@latest"></script>
  <script>
    lucide.createIcons();
  </script>

  <!-- Basic Meta -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="uKtr2UsvXYFJ7ODbXEfgpqLQWKyUk05eIaa_YJjI_XU">

  <title>Custom Websites for Small Businesses | Samira Omar Website Developer</title>

  <meta name="description"
    content="We design fast, modern, and conversion-focused websites for small businesses. Build trust, attract customers, and grow your online presence with a clean, professional design.">

  <meta name="keywords"
    content="web developer, custom websites, small business websites, landing pages, website design">

  <!-- SEO -->
  <meta name="author" content="Samira Omar">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://samiraomar.com">

  <!-- Structured Data -->
  <script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "Person",
 "name": "Samira Omar",
 "url": "https://samiraomar.com/",
 "jobTitle": "Website Developer",
 "image": "https://samiraomar.com/photo/sam.webp",
 "logo": "https://samiraomar.com/photo/navlogo.webp",
 "sameAs": [
   "https://www.linkedin.com/in/samira-omar/"
 ]
}
</script>

  <!-- Open Graph -->
  <meta property="og:title" content="Custom Websites for Small Businesses | Samira Omar">
  <meta property="og:description"
    content="We design custom websites that help small businesses showcase their services, build trust, and turn visitors into real customers.">
  <meta property="og:site_name" content="Samira Omar">
  <meta property="og:url" content="https://samiraomar.com">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="en_US">

  <meta property="og:image" content="https://samiraomar.com/photo/preview.webp">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Preview of Samira Omar's modern website developer portfolio homepage">

  <meta property="fb:app_id" content="your_app_id">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@yourusername">

  <!-- Theme -->
  <meta name="theme-color" content="#ff7a00">

  <!-- Icons / Favicons -->
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" type="image/svg+xml" href="/favicon.svg">
  <link rel="icon" type="image/png" href="/favicon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="icon/32.png">
  <link rel="icon" type="image/png" sizes="192x192" href="icon/192.png">
  <link rel="apple-touch-icon" sizes="180x180" href="icon/180.png">

  <!-- PWA -->
  <link rel="manifest" href="manifest.json">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">

  <!-- CSS -->
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="preload" as="image" href="photo/hero-profile.webp">
</head>

<body>
  <!--  WhatsApp Button
  <a href="https://wa.me/96567077369" target="_blank" class="whatsapp-right" aria-label="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
  </a> -->

  <nav>

    <div class="logo">
      <img src="photo/navlogo.webp" width="100" height="100" alt="Samira Omar logo" loading="eager" decoding="async">
    </div>
    <ul class="nav-links">
      <li><a href="#hero">Home</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#who-i-help">Who I Help</a></li>
      <li><a href="#process">Process</a></li>
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
      <li><a href="#process" class="mobile-link">Process</a></li>
      <li style="text-align: center">
        <a href="#contact" class="mobile-link navcontact" aria-label="Go to contact section">Contact Me</a>
      </li>
    </ul>
  </div>

  <main>
    <!-- ===== HERO ===== -->

    <section id="hero" class="hero">

<div class="hero-div">
      <div class="h1 card hidden animate-up">
        <h3>CLEAN • FAST • MODERN</h3>
        <h1>
          From Idea to Live Website
        </h1>
        <p>
          Whether you're a small business or building a personal portfolio, we design clean, modern custom websites that showcase your work, build trust, and turn visitors into real opportunities.
        </p>
        <div class="service-btn hero-btn">
          <button class="btn calendly-btn" style="margin: 0 auto;"> Book a Free Discovery Call </button>
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

      <h2 class="section-title">My Services</h2>

      <p class="section-subtitle card hidden animate-up">
        Choose a package that fits your business goals
      </p>

      <div class="services-grid card hidden animate-up">

        <!-- 🟢 STARTER -->
        <div class="service-card card hidden animate-up">
          <h3>🟢 Starter Website</h3>

          <p class="desc">Perfect for a simple and professional online presence</p>

          <ul>
            <li>✔ One-page website (up to 3 sections)</li>
            <li>✔ Responsive design (mobile, tablet, desktop)</li>
            <li>✔ Clean custom design tailored to your brand</li>
            <li>✔ Contact form integration</li>
            <li>✔ Basic SEO setup for visibility on Google</li>
            <li>✔ Image optimization for faster loading</li>
          </ul>

          <div>Starting from <span class="price"><br>$120</span></div>
          <span class="delivery">7–10 days delivery</span>
        </div>

        <!-- 🔵 PRO (FEATURED) -->
        <div class="service-card card hidden animate-up featured">

          <h3>🔵 Pro Website</h3>

          <p class="desc">Best for businesses ready to improve their online presence</p>

          <ul>
            <li>✔ Everything included in Starter</li>
            <li>✔ 4–6 custom sections</li>
            <li>✔ Booking system & advanced forms</li>
            <li>✔ SEO-ready structure</li>
            <li>✔ Speed optimization for performance</li>
            <li>✔ 1 month support (bug fixes & minor updates to keep your website running smoothly)</li>
            <li>🎁 Bonus: AI Chatbot Integration (Tidio)</li>
          </ul>

          <div>
            Starting from
            <span class="price"><br>$220</span>
            <span class="old-price">$300</span>
          </div>

          <span class="delivery">10–15 days delivery</span>
          <p style="color: red;">limited offer only!</p>
        </div>

        <!-- ⚡ ADD-ONS -->
        <div class="service-card card hidden animate-up addons">
          <h3>⚡ Add-Ons</h3>

          <p class="desc">Enhance your website with powerful upgrades</p>

          <ul>
            <li>✔ AI Chatbot Integration (Tidio) → $60</li>
            <li>✔ Social Media Sharing Optimization (Open Graph / OG Tags) → $25</li>
            <li>✔ Extra Custom Page → $20</li>
            <li>✔ Website Maintenance → $30/month (ongoing support & updates)</li>
          </ul>
        </div>
      </div>


    </section>
    <!-- ===== WHO I HELP ===== -->
    <section id="who-i-help" class="who">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ff7a00" fill-opacity="1" d="M0,288L40,261.3C80,235,160,181,240,176C320,171,400,213,480,208C560,203,640,149,720,112C800,75,880,53,960,74.7C1040,96,1120,160,1200,176C1280,192,1360,160,1400,144L1440,128L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
      <div class="container">
        <h2 class="section-title card" style="color: white;">Who I Help</h2>

        <p class="section-subtitle">
          I help service-based businesses grow online with modern websites, built-in booking systems, client forms, and
          AI chatbots that convert visitors into clients.
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
      <h2 class="card hidden">How It Works</h2>

      <div class="process-steps">
        <div class="step card hidden animate-up">
          <span>1</span>
          <h3>Share Your Idea</h3>
          <p>Tell me what kind of website you need and your business goals.</p>
        </div>

        <div class="step card hidden animate-up">
          <span>2</span>
          <h3>I Design & Build</h3>
          <p>I create a clean, responsive website tailored to your brand and audience.<p>
        </div>

        <div class="step card hidden animate-up">
          <span>3</span>
          <h3>Review & Launch</h3>
          <p>
            We refine the details, make final adjustments, and launch your website.
          </p>
        </div>
      </div>
    </section>
    <!------FAQ----------------->
    <section class="faq card" id="faq">
      <h2 style="margin-top: 0">FAQ</h2>

      <details class="card hidden animate-up">
        <summary>How long does it take to build a website?</summary>
        <p>Usually 10 - 15 days, depending on the project size.</p>
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

    <!----new contact-->
    <section class="contact-section" id="contact">
      <div class="contact-container">

        <!-- LEFT SIDE -->
        <form action="#" method="POST" name="contactform" class="contact-form glass hidden animate-up" id="contactform">
      
          <input type="hidden" name="Source" value="SAM" />

          <input type="text" name="company" id="company" tabindex="-1" autocomplete="off" style="display: none" />

          <label for="name"></label>
          <input type="text" id="name" name="Name" autocomplete="complete-name" placeholder="Enter your full name"
            required />

          <label for="email"></label>
          <input type="email" id="email" name="Email" autocomplete="off" placeholder="Enter your email" required />

          <label for="social"></label>
          <input type="url" id="social" name="Social" autocomplete="social-media-link"
            placeholder="Social Media Link (optional)" />

          <label for="message"></label>
          <textarea id="message" name="Message" autocomplete="ideas" placeholder="Describe your website idea here…"
            required></textarea>

          <button type="submit" class="btn" id="button">Send message</button>
          <span id="msg" style="text-align: center"></span>
        </form>
<br>
        <!-- RIGHT FORM -->
        <div class="contact-info">
          <h2 class="hidden animate-up">GET IN TOUCH</h2>
          <p class="hidden animate-up">
            Ready to grow your business with a clean, professional website? Let’s work together.
          </p>

          <!-- EMAIL -->
          <a href="mailto:hello@samiraomar.com" class="info-item">
            <i class="fa-solid fa-envelope icon hidden animate-up"></i>
            <span class="hidden animate-up">hello@samiraomar.com</span>
          </a>

          <!-- WHATSAPP -->
          <a href="https://wa.me/+96567077369" target="_blank" class="info-item">
            <i class="fa-brands fa-whatsapp icon hidden animate-up"></i>
            <span class="hidden animate-up">Chat on WhatsApp</span>
          </a>

          <!-- LINKEDIN -->
          <a href="https://www.linkedin.com/in/samira-omar/" target="_blank" class="info-item hidden animate-up">
            <i class="fa-brands fa-linkedin icon"></i>
            <span class="hidden animate-up">LinkedIn Profile</span>
          </a>
        </div>
      </div>
    </section>

    <!-- FOOTER -->

    <footer class="footer">

      <div class="footer-container">

        <!-- Brand -->
        <div class="footer-brand">
          <h3 class="hidden animate-up">Samira Omar | Website Developer</h3>
          <p class="hidden animate-up">I create modern websites that help your business convert.
          <p>
        </div>

        <!-- Navigation -->

        <div class="footer-links hidden animate-up">
          <p class="footer-title">Quick Links</p>
          <a href="#hero">Home</a>
          <a href="#services">Services</a>
          <a href="#process">Process</a>
          <a href="#contact">Contact</a>
        </div>


        <!-- Social -->
        <div class="footer-social hidden animate-up">
          <p class="footer-title">Let's Connect</p>
          <div class="social-links">
            <a href="https://www.linkedin.com/in/samira-omar/" target="_blank" class="info-item">
              <i class="fa-brands fa-linkedin icon" style="color: white;"></i>
            </a>
          </div>
        </div>

      </div>

      <!-- Bottom Bar -->
      <div class="footer-bottom" style="text-align: center; margin-top: 1.5rem;">
        <p>© 2026 Samira Omar — All rights reserved</p>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ff7a00" fill-opacity="1"
          d="M0,32L40,53.3C80,75,160,117,240,117.3C320,117,400,75,480,90.7C560,107,640,181,720,224C800,267,880,277,960,282.7C1040,288,1120,288,1200,293.3C1280,299,1360,309,1400,314.7L1440,320L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
      </svg>

    </footer>
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

  <script src="https://code.tidio.co/yi66fojsyeziel45e6zntp5pde3dlm9x.js" async></script>

</body>

</html>