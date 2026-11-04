<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>
<script src="assets/js/wind.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener("scroll", function() {
      if (window.scrollY > 100) {
        document.getElementById("scroll").style.display = "block";
      } else {
        document.getElementById("scroll").style.display = "none";
      }
    });

    document.getElementById("scroll").addEventListener("click", function() {
      setTimeout(function() {
        window.scrollTo({
          top: 0,
          behavior: "smooth"
        });
      }, 500); // 500ms delay
    });
  });
</script>

<script>
  var glide09 = new Glide('.glide-marque', {
    type: 'carousel',
    autoplay: 1,
    animationDuration: 4500,
    animationTimingFunc: 'linear',
    perView: 3,
    classes: {
      activeNav: '[&>*]:bg-slate-700',
    },
    breakpoints: {
      1024: {
        perView: 2
      },
      640: {
        perView: 1,
        gap: 36
      }
    },
  });

  glide09.mount();
</script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const popup = document.getElementById("popupForm");
    const closePopupBtn = document.getElementById("closePopup");
    const openDesktop = document.getElementById("openPopupDesktop");
    const openMobile = document.getElementById("openPopupMobile");
    const openPopupEl = document.getElementById("openPopup");
    const openEnquiryBtn = document.getElementById("ctaEnquireBtn");
    const closeEnquiryBtn = document.getElementById("customCloseBtn");
    const enquiryPopup = document.getElementById("customEnquiryPopup");

    window.openPopup = function() {
      if (popup) popup.classList.remove("hidden");
      if (typeof window.initEeEnquiryForm === "function") {
        window.initEeEnquiryForm();
      }
    };

    if (openDesktop) openDesktop.addEventListener("click", window.openPopup);
    if (openMobile) openMobile.addEventListener("click", function(e) {
      e.preventDefault();
      window.openPopup();
    });
    if (openPopupEl) openPopupEl.addEventListener("click", function(e) {
      e.preventDefault();
      window.openPopup();
    });

    if (closePopupBtn && popup) {
      closePopupBtn.addEventListener("click", function() {
        popup.classList.add("hidden");
      });
    }

    if (popup) {
      popup.addEventListener("click", function(e) {
        if (e.target === popup) popup.classList.add("hidden");
      });
    }

    if (openEnquiryBtn && enquiryPopup) {
      openEnquiryBtn.addEventListener("click", function(e) {
        e.preventDefault();
        enquiryPopup.classList.remove("hidden");
      });
    }
    if (closeEnquiryBtn && enquiryPopup) {
      closeEnquiryBtn.addEventListener("click", function() {
        enquiryPopup.classList.add("hidden");
      });
    }
    if (enquiryPopup) {
      enquiryPopup.addEventListener("click", function(e) {
        if (e.target === enquiryPopup) enquiryPopup.classList.add("hidden");
      });
    }
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('.dps-menu-toggle').forEach(function(toggle) {
      toggle.addEventListener('click', function() {
        const submenu = this.nextElementSibling;
        if (submenu && submenu.classList.contains('dps-menu-open')) {
          submenu.classList.toggle('hidden-menu');
        }
      });
    });

    document.querySelectorAll('.dps2').forEach(function(toggle) {
      toggle.addEventListener('click', function() {
        const submenu = this.nextElementSibling;
        if (submenu && submenu.classList.contains('dps-menu-openss')) {
          submenu.classList.toggle('hidden-menu');
        }
      });
    });

    document.querySelectorAll('.dps3').forEach(function(toggle) {
      toggle.addEventListener('click', function() {
        const submenu = this.nextElementSibling;
        if (submenu && submenu.classList.contains('dps-menu-opensss')) {
          submenu.classList.toggle('hidden-menu');
        }
      });
    });

  });
</script>
