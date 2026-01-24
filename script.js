/*-- ===== JS: Smooth Scroll for Hero Buttons ===== --*/
document.querySelectorAll('.hero .btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const targetId = btn.getAttribute('data-target');
      const target = document.querySelector(targetId);
      if(target){
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

/* ----------------- BURGER & MOBILE MENU ----------*/
const burger = document.getElementById("burger");
const mobileMenu = document.getElementById("mobileMenu");
const mobileLinks = document.querySelectorAll(".mobile-link");

burger.addEventListener("click", () => {
  mobileMenu.classList.toggle("active"); // slide menu
  burger.classList.toggle("toggle"); // X animation
});

mobileLinks.forEach((link) => {
  link.addEventListener("click", () => {
    mobileMenu.classList.remove("active"); // close menu
    burger.classList.remove("toggle"); // reset burger
  });
});


  /*---------smooth-behavior-----*/
  document.querySelectorAll('nav a').forEach(link => {
  link.addEventListener('click', function(e) {
    e.preventDefault();

    const target = document.querySelector(this.getAttribute('href'));
    const start = window.scrollY;
    const end = target.offsetTop;
    const duration = 1500; // duration in ms (increase = slower)
    const startTime = performance.now();

    function animate(time) {
      const elapsed = time - startTime;
      const progress = Math.min(elapsed / duration, 1); // 0 → 1
      const ease = 0.5 - Math.cos(progress * Math.PI) / 2; // easeInOut
      window.scrollTo(0, start + (end - start) * ease);

      if (progress < 1) requestAnimationFrame(animate);
    }

    requestAnimationFrame(animate);
  });
});




// Select all buttons with data-target
document.querySelectorAll('.hero-btn .btn').forEach(button => {
  button.addEventListener('click', function() {
    const target = document.querySelector(this.getAttribute('data-target'));
    if (target) {
      // Jump instantly to the section
      window.scrollTo({
        top: target.offsetTop,
        behavior: 'auto' // 'auto' = instant jump, not smooth
      });
    }
  });
})
