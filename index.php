<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="I build responsive, SEO-ready websites with online booking, contact forms, and optimized performance.">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <link rel="icon" href="/favicon.ico" type="image/x-icon" />
  <title>Websites That Capture Leads for Small Businesses</title>

  <!-------------------------manifest------>
  <!-- Favicon for browser tabs -->
  <link rel="icon" type="image/png" sizes="32x32" href="icons-32.png">
  <link rel="icon" type="image/png" sizes="192x192" href="icons-192.png">

  <!-- Apple touch icon for iOS home screen -->
  <link rel="apple-touch-icon" sizes="180x180" href="icons-180.png">

  <!-- PWA manifest -->
  <link rel="manifest" href="site.webmanifest">


  <!-- Theme colors for browser UI -->
  <meta name="theme-color" content="#ffbd59">

  <!-- Optional: Apple-specific meta tags -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">




  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav>
    <div class="logo">
      <img src="photo/nav-logo.png" alt="SN logo" />
    </div>
    <ul class="nav-links" ;>
      <li><a href="#hero">Home</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#projects">Projects</a></li>
      <li><a href="#process">How It Works</a></li>
      <li><a href="#about">About</a></li>
    </ul>

    <a href="#contact" class="navcontact">Contact Me</a>


    <div class="burger" id="burger">
      <span class="line1"></span>
      <span class="line2"></span>
      <span class="line3"></span>
    </div>
  </nav>

  <!-- ===== NAVBAR ===== -->

  <!-- MOBILE SLIDE MENU -->
  <div class="mobile-menu" id="mobileMenu">
    <ul>
      <li><a href="#hero" class="mobile-link">Home</a></li>
      <li><a href="#services" class="mobile-link">Services</a></li>
      <li><a href="#projects" class="mobile-link">Projects</a></li>
      <li><a href="#process" class="mobile-link">How It Works</a></li>
      <li><a href="#about" class="mobile-link">About</a></li>
      <li style="text-align: center;"><a href="#contact" class="mobile-link navcontact">Contact Me</a></li>
    </ul>
  </div>

  <!-- ===== HERO ===== -->
  <section id="hero" class="hero">
    <div class="h1 card hidden animate-up">
      <h1><span> Bring Your Vision to Life </span><span
          style="background: #222; padding: 0 1rem; color: #ffbd59; border-radius: 0px 20px 0px 20px;">Online</span>
      </h1>
      <p style="text-align: justify;">Grow your business with fast, responsive websites featuring online booking,
        contact forms, and SEO-friendly structure.</p>
      <br>

      <div class="hero-btn">
        <button class="btn btnmobile" data-target="#contact">Get Your Website</button>

        <!-- CTA Button -->
        <button class="cta-btn btn mywork"
          onclick="Calendly.initPopupWidget({url: 'https://calendly.com/samiraomar/30min?background_color=111111&text_color=ffffff&primary_color=ffbd59'}); return false;">
          <span class="cta-text">Book a Free Discovery Call</span>
          <span class="cta-icon">Free Discovery call</span>
        </button>
      </div>
    </div>

    <!-- Calendly Script -->
    <script src="https://assets.calendly.com/assets/external/widget.js" async></script>

    <!--Calendly CSS-->
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet" />

    <div class="card hidden animate-up">
      <img src="photo/hero-image.webp" alt="website logo" fetchpriority="high">

    </div>
  </section>

  <section class="tech-stack">

    <div class="tech-slider">
      <div class="tech-track">
        <img src="photo/icons/HTML5.svg" alt="HTML">
        <img src="photo/icons/CSS3.svg" alt="CSS">
        <img src="photo/icons/JavaScript.svg" alt="JavaScript">
        <img src="photo/icons/PHP.svg" alt="PHP">
        <img src="photo/icons/Git.svg" alt="Git">
        <img src="photo/icons/GitHub.svg" alt="GitHub">
        <img src="photo/icons/Visual Studio Code (VS Code).svg" alt="VS Code">
        <img src="photo/icons/calendly-icon.svg" alt="Calendly">
        <img src="photo/icons/google-sheet.png" alt="google-sheets-icon">

        <img src="photo/icons/HTML5.svg" alt="HTML">
        <img src="photo/icons/CSS3.svg" alt="CSS">
        <img src="photo/icons/JavaScript.svg" alt="JavaScript">
        <img src="photo/icons/PHP.svg" alt="PHP">
        <img src="photo/icons/Git.svg" alt="Git">
        <img src="photo/icons/GitHub.svg" alt="GitHub">
        <img src="photo/icons/Visual Studio Code (VS Code).svg" alt="VS Code">
        <img src="photo/icons/calendly-icon.svg" alt="Calendly">
        <img src="photo/icons/google-sheet.png" alt="google-sheets-icon">

        <img src="photo/icons/HTML5.svg" alt="HTML">
        <img src="photo/icons/CSS3.svg" alt="CSS">
        <img src="photo/icons/JavaScript.svg" alt="JavaScript">
        <img src="photo/icons/PHP.svg" alt="PHP">
        <img src="photo/icons/Git.svg" alt="Git">
        <img src="photo/icons/GitHub.svg" alt="GitHub">
        <img src="photo/icons/Visual Studio Code (VS Code).svg" alt="VS Code">
        <img src="photo/icons/calendly-icon.svg" alt="Calendly">
        <img src="photo/icons/google-sheet.png" alt="google-sheets-icon">

      </div>
    </div>
  </section>


  <!-- ===== SERVICES ===== -->
  <section id="services" class="service">
    <h2 style="color: #222;">My Services</h2>
    <p style="color:#222">Here’s what I offer to help your business online:</p>
    <br>
    <div class="services-grid">
      <div class="service-card card hidden animate-up">
        <h3>🖥️ Responsive Websites</h3>
        <p>Websites that adjust to any device, making it easy for your customers to reach your business on <strong>
            desktop, tablet, or mobile.</strong></p>
      </div>

      <div class="service-card card hidden animate-up">
        <h3>📅 Booking & Forms</h3>
        <p>Contact forms that send submissions to Google Sheets and online booking through Calendly, so you can
          easily
          keep track of inquiries and appointments.</p>
      </div>

      <div class="service-card card hidden animate-up">
        <h3>🎨 Custom Design</h3>
        <p>Clean, modern designs tailored to your brand, ensuring your website is easy to use and looks
          professional.
        </p>
      </div>

      <div class="service-card card hidden animate-up">
        <h3>⚡ SEO-Ready Websites</h3>
        <p>Built with proper structure, headings, and meta tags, so your website is optimized for search engines
          from
          day one — making it easier for clients to find you online.
        </p>
      </div>

      <div class="service-card card hidden animate-up">
        <h3>🖼️ Image Optimization</h3>
        <p>Compress, resize, and convert images to modern formats like WebP to make your website load faster, look
          better, and improve overall performance.
        </p>
      </div>

      <div class="service-card card hidden animate-up">
        <h3>🛠️ Website Maintenance & Updates <span style="color: #ffbd59;">(Add-On)</span> </h3>
        <p>Keep your website secure, updated, and running smoothly with regular backups, updates, and
          troubleshooting.
        </p>
      </div>
    </div>
    <br>
    <div class="service-btn"><a href="#contact" class="btn">Get Your Website</a></div>
  </section>

  <!-- ===== PROJECTS ===== -->
  <section id="projects" class="project">
    <h2>Projects</h2>
    <p>Check out some of my work:</p>
    <br>
    <div class="projects-grid">
      <div class="project-card card hidden animate-up">
        <img src="photo/project1.webp" alt="Project 1" />
        <h3>Podcast Demo</h3>
        <p> A sample website showcasing my services:
          <strong>Responsive Websites, Integrated
            Booking & Forms,
            Custom Design tailored to your brand</strong>
        </p>

        <a href="https://samira-sites.github.io/podcast-demo/" class="inquire-btn">View Live Demo ↗️
        </a>
      </div>

      <div class="project-card card hidden animate-up">
        <img src="photo/nav-logo.png" alt="SAM WEBSITE" />
        <h3>Coming Soon</h3>
        <p>I’m continuously creating websites for small businesses. Stay tuned for new projects!</p>
      </div>

      <div class="project-card card hidden animate-up">
        <img src="photo/nav-logo.png" alt="SAM WEBSITE" />
        <h3>Coming Soon</h3>
        <p>I’m continuously creating websites for small businesses. Stay tuned for new projects!</p>
      </div>
    </div>
    <br>
    <div class="project-btn"><a href="#contact" class="btn">Get Your Website</a></div>
  </section>

  <section class="tech-stack">

    <div class="tech-slider">
      <div class="tech-track">
      <img src="photo/icons/HTML5.svg" alt="HTML">
        <img src="photo/icons/CSS3.svg" alt="CSS">
        <img src="photo/icons/JavaScript.svg" alt="JavaScript">
        <img src="photo/icons/PHP.svg" alt="PHP">
        <img src="photo/icons/Git.svg" alt="Git">
        <img src="photo/icons/GitHub.svg" alt="GitHub">
        <img src="photo/icons/Visual Studio Code (VS Code).svg" alt="VS Code">
        <img src="photo/icons/calendly-icon.svg" alt="Calendly">
        <img src="photo/icons/google-sheet.png" alt="google-sheets-icon">

        <img src="photo/icons/HTML5.svg" alt="HTML">
        <img src="photo/icons/CSS3.svg" alt="CSS">
        <img src="photo/icons/JavaScript.svg" alt="JavaScript">
        <img src="photo/icons/PHP.svg" alt="PHP">
        <img src="photo/icons/Git.svg" alt="Git">
        <img src="photo/icons/GitHub.svg" alt="GitHub">
        <img src="photo/icons/Visual Studio Code (VS Code).svg" alt="VS Code">
        <img src="photo/icons/calendly-icon.svg" alt="Calendly">
        <img src="photo/icons/google-sheet.png" alt="google-sheets-icon">

        <img src="photo/icons/HTML5.svg" alt="HTML">
        <img src="photo/icons/CSS3.svg" alt="CSS">
        <img src="photo/icons/JavaScript.svg" alt="JavaScript">
        <img src="photo/icons/PHP.svg" alt="PHP">
        <img src="photo/icons/Git.svg" alt="Git">
        <img src="photo/icons/GitHub.svg" alt="GitHub">
        <img src="photo/icons/Visual Studio Code (VS Code).svg" alt="VS Code">
        <img src="photo/icons/calendly-icon.svg" alt="Calendly">
        <img src="photo/icons/google-sheet.png" alt="google-sheets-icon">


      </div>
    </div>
  </section>


  <section class="process" id="process">
    <h2>How It Works</h2>

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
        <p>I review your site, make the needed updates, and launch it for you.</p>
      </div>
    </div>
  </section>


  <section class="faq" id="faq">
    <h2>FAQ</h2>

    <details class="card hidden animate-up">
      <summary>How long does it take to build a website?</summary>
      <p>Usually 7–10 business days, depending on the project size.</p>
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


  <!-- ===== ABOUT ===== -->
  <section class="about" id="about">
    <div class="about-container">

      <div class="about-image card hidden animate-up">
        <img src="photo/about-image.webp" alt="Your Name">
      </div>

      <div class="about-content card hidden animate-up">
        <h2>About Me</h2>
        <p>
          Hi, I’m <span style="font-weight: 700; font-size: 1.2rem;"> Samira Omar <br><strong>Frontend Developer</strong> </span>who builds
          <strong>fast, responsive, custom-coded websites</strong> for small businesses that
          <strong>generate more leads</strong>.
        </p>
       
        <p>
          I create websites with
          <strong>contact forms and online booking integration</strong>, so your
          clients can easily reach you and schedule appointments.
        </p>
    
        <p>
          My focus is on
          <strong>simple, effective, and user-friendly designs</strong> that
          help business owners grow their online presence and capture leads
          efficiently.
        </p>
        <p>
          I’m passionate about
          <strong>helping small businesses grow online</strong> and building
          websites that <strong>actually deliver results</strong>.
        </p>
        <p>
          💡 If you want a website that works for your business, let’s connect!
        </p>

      </div>

    </div>
  </section>


  <!-- ===== CONTACT ===== -->
  <section id="contact" class="contact">
    <div>
      <h2>Contact Me</h2>
      <p>Ready to build your website? Share your idea below! 😊</p>
      <br>
      <form action="#" method="POST" name="contactform" class="contact-form card hidden animate-up" id="contactform">

        <input type="hidden" name="Source" value="SAM">

        <input type="text" name="company" id="company" tabindex="-1" autocomplete="off" style="display:none">

        <label for="name">Full Name</label>
        <input type="text" id="name" name="Name" placeholder="Enter your full name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="Email" placeholder="Enter your email" required>

        <label for="social">Social Media Link (optional)</label>
        <input type="url" id="social" name="Social" placeholder="It helps us understand your brand or project">

        <label for="message">Project Details / Message</label>
        <textarea id="message" name="Message" placeholder="Describe your website idea here…" required></textarea>

        <button type="submit" class="btn" id="button">Send message</button>
        <span id="msg" style="text-align: center;"></span>
      </form>
    </div>

    <div class="contact-B card hidden animate-up">
      <div class="get">

        <div class="contact-icons">

          <a href="https://wa.me/96567077369" target="_blank" title="Chat on WhatsApp">
            <i class="fab fa-whatsapp "></i>
          </a>


          <a href="mailto:samiraomar.xx@gmail.com" title="Send an Email">
            <i class="fas fa-envelope envelop"></i>
          </a>
        </div>
        <br>
        <div>

          <p style="line-height: 4; font-size: large; text-align: center;"><strong>Follow Me:</strong></p>

          <div class="social-icons">

            <a href="https://www.linkedin.com/in/samira-omar-85082b31a/" target="_blank" title="My LinkedIn">
              <i class="fab fa-linkedin"></i>
            </a>

            <a href="https://www.tiktok.com/@sam_websolutions?_r=1&_t=ZS-93cVaA30U4e" target="_blank"><i
                class="fab fa-tiktok"></i></a>

            <a href="https://github.com/samira-sites" target="_blank"><i class="fab fa-github"></i></a>

            <a href="https://www.facebook.com/profile.php?id=61584179950754" target="_blank"><i
                class="fab fa-facebook"></i></a>
            </a>
          </div>
        </div>
  </section>



  <script src="script.js"></script>



  <!-- Floating Feedback Button -->
  <button id="feedbackButton">Feedback</button>

  <!-- Feedback Popup -->
  <div id="feedbackPopup" class="popup">
    <form id="feedbackForm" class="popup-form" method="post">


      <h2>We Value Your Feedback</h2>
      <p>It helps us improve and serve you better.</p>

      <label>Name (optional)</label>
      <input type="text" name="name" placeholder="Your name">

      <label>Feedback *</label>
      <textarea name="feedback" placeholder="Your feedback..." required></textarea>

      <label>Rating *</label>
      <div class="stars">
        <input type="radio" name="rating" id="star5" value="5" required><label for="star5">★</label>
        <input type="radio" name="rating" id="star4" value="4"><label for="star4">★</label>
        <input type="radio" name="rating" id="star3" value="3"><label for="star3">★</label>
        <input type="radio" name="rating" id="star2" value="2"><label for="star2">★</label>
        <input type="radio" name="rating" id="star1" value="1"><label for="star1">★</label>
      </div>

      <button type="submit">Submit</button>
      <!--<button type="button" id="closePopup">Close</button>-->

      <p id="feedbackMessage"></p>
    </form>
  </div>

  <script>
    // Open/close popup
    const btn = document.getElementById('feedbackButton');
    const popup = document.getElementById('feedbackPopup');
    //const closeBtn = document.getElementById('closePopup');
    const message = document.getElementById('feedbackMessage');

    btn.addEventListener('click', () => popup.style.display = 'flex');
    //closeBtn.addEventListener('click', ()=> popup.style.display='none');
    window.addEventListener('click', e => { if (e.target == popup) popup.style.display = 'none'; });

    // AJAX form submission
    document.getElementById('feedbackForm').addEventListener('submit', function (e) {
      e.preventDefault();
      const formData = new FormData(this);

      fetch('feedback/save_feedback.php', { method: 'POST', body: formData })

        .then(res => res.text())
        .then(data => {
          message.textContent = data;
          this.reset();
          setTimeout(() => popup.style.display = 'none', 5000);
        });
    });
  </script>


</body>
<footer class="footer">
  © 2026 <strong>Sam Nex.solutions</strong> | Samira Omar <br> All rights reserved
</footer>

</html>