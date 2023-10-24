(()=>{
    function n(t) {
        for (var e = t + "=", s = document.cookie.split(";"), r = 0; r < s.length; r++) {
            for (var i = s[r]; i.charAt(0) === " "; )
                i = i.substring(1);
            if (i.indexOf(e) === 0)
                return i.substring(e.length, i.length)
        }
        return ""
    }
    function o(t, e, s) {
        var r = new Date;
        r.setTime(r.getTime() + s * 24 * 60 * 60 * 1e3);
        var i = "expires=" + r.toUTCString();
        document.cookie = t + "=" + e + ";" + i + ";path=/"
    }
    if (!n("sitevisitor")) {
        let t = new Object
          , e = new Date(Date().toLocaleString("de-DE", {
            timeZone: "Europe/Sofia"
        }));
        t.referer = document.referrer,
        t.request = location.pathname.substring(1),
        t.time = e.getFullYear() + "-" + ("0" + (e.getMonth() + 1)).slice(-2) + "-" + e.getDate() + " " + e.getHours() + ":" + e.getMinutes() + ":" + ("0" + e.getSeconds()).slice(-2),
        o("sitevisitor", btoa(JSON.stringify(t)), 365)
    }
    document.addEventListener("DOMContentLoaded", ()=>{
        "use strict";
        document.querySelectorAll(".preview-test").forEach(e=>{
            e.addEventListener("click", function(s) {
                s.preventDefault(),
                document.querySelector(".preview-devices-active").classList.remove("preview-devices-active"),
                this.classList.add("preview-devices-active"),
                document.querySelector("#preview-frame").className = this.id.replace("-test", "")
            })
        }
        )
    }
    );
}
)();


document.addEventListener('DOMContentLoaded', function () {
    const navItems = document.querySelectorAll('.navbar-nav li');
    navItems.forEach(function (item) {
      item.addEventListener('click', function () {
        navItems.forEach(function (i) {
          i.classList.remove('active');
        });
        item.classList.add('active');
      });
    });
  });


  document.addEventListener('DOMContentLoaded', function () {
    const navItems = document.querySelectorAll('.navbar-nav li a');
    const audio = new Audio('assets/whoosh.flac'); // Add the path to your whoosh sound effect
  
    navItems.forEach(function (item) {
      item.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = item.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
        audio.play();
        createParticles(e.clientX, e.clientY);
        window.scrollTo({
          top: targetElement.offsetTop,
          behavior: 'smooth'
        });
      });
    });
  
    function createParticles(x, y) {
      const particlesContainer = document.getElementById('particles-container');
      for (let i = 0; i < 10; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.left = x + 'px';
        particle.style.top = y + 'px';
        particlesContainer.appendChild(particle);
        animateParticle(particle);
      }
    }
  
    function animateParticle(particle) {
      const dx = (Math.random() - 0.5) * 100;
      const dy = (Math.random() - 0.5) * 100;
      const duration = Math.random() * 1 + 1;
      const opacity = Math.random();
      particle.style.transform = `translate(${dx}px, ${dy}px)`;
      particle.style.transition = `transform ${duration}s, opacity ${duration}s`;
      particle.style.opacity = opacity;
      setTimeout(function () {
        particle.remove();
      }, duration * 1000);
    }
  });
  
  