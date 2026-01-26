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

/* ----------------- CONTACT FORM ----------------- */
const scriptURL =
  "https://script.google.com/macros/s/AKfycbzgPUgeoDvwhGkB5MMEpIg3G4U_9NJxzOOQUqkLCdMYKeU3akWveiKm2Au6wNWiPyZQ9Q/exec";

const form = document.getElementById("contactform");
const msg = document.getElementById("msg");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  msg.innerHTML = "Sending message...";

  fetch(scriptURL, { method: "POST", body: new FormData(form) })
    .then((response) => {
      if (!response.ok) throw new Error(`Server returned ${response.status}`);
      msg.innerHTML = "✅ Message sent successfully!";
      form.reset();
      setTimeout(() => (msg.innerHTML = ""), 3000);
    })
    .catch((error) => {
      console.error("Form submit error:", error);
      msg.innerHTML = "❌ Failed to send message. Try again later.";
    });
});

/* ----------------- ANTI-SPAM ----------------- */
const formStartTime = Date.now();

document.querySelector("form").addEventListener("submit", function (e) {
  const honeypot = document.getElementById("company").value;
  const timeSpent = (Date.now() - formStartTime) / 1000;

  if (honeypot !== "" || timeSpent < 5) {
    e.preventDefault();
    return false;
  }

  const spamWords = [
    "telegram",
    "whatsapp",
    "million messages",
    "bulk",
    "automatically generated",
    "feedback form",
    "proposal",
    "send messages",
  ];

  const msgVal = document.getElementById("message").value.toLowerCase();
  if (spamWords.some((word) => msgVal.includes(word))) {
    e.preventDefault();
    alert("Message blocked.");
    return false;
  }
});
