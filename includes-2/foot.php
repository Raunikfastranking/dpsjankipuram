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
    const openPopup = document.getElementById('openPopup');
    const closePopup = document.getElementById('closePopup');
    const popupForm = document.getElementById('popupForm');

    openPopup.addEventListener('click', (e) => {
      e.preventDefault(); // Prevents default anchor behavior
      popupForm.classList.remove('hidden');
    });

    closePopup.addEventListener('click', () => {
      popupForm.classList.add('hidden');
    });

    popupForm.addEventListener('click', (e) => {
      if (e.target === popupForm) {
        popupForm.classList.add('hidden');
      }
    });
  </script>
<script>
  const openEnquiryBtn = document.getElementById('ctaEnquireBtn');
  const closeEnquiryBtn = document.getElementById('customCloseBtn');
  const enquiryPopup = document.getElementById('customEnquiryPopup');

  openEnquiryBtn.addEventListener('click', (e) => {
    e.preventDefault();
    enquiryPopup.classList.remove('hidden');
  });

  closeEnquiryBtn.addEventListener('click', () => {
    enquiryPopup.classList.add('hidden');
  });

  enquiryPopup.addEventListener('click', (e) => {
    if (e.target === enquiryPopup) {
      enquiryPopup.classList.add('hidden');
    }
  });
</script>


  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggles = document.querySelectorAll('input[type="checkbox"]');

    toggles.forEach((toggle) => {
      toggle.addEventListener('change', function () {
        if (this.checked) {
          toggles.forEach((otherToggle) => {
            if (otherToggle !== this) {
              otherToggle.checked = false;
            }
          });
        }
      });
    });
  });
</script>

<script>
 
document.getElementById("openPopup").addEventListener("click", function(e) {
    e.preventDefault();
    document.getElementById("popupForm").classList.remove("hidden");
});

document.getElementById("closePopup").addEventListener("click", function() {
    document.getElementById("popupForm").classList.add("hidden");
});

 </script>
 <script>
  // Validation regex patterns
  const nameRegex = /^[A-Za-z\s]+$/;
  const mobileRegex = /^[6-9]\d{9}$/;
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const pincodeRegex = /^[1-9][0-9]{5}$/;

  // Error elements
  const studentError = document.getElementById("student-error");
  const parentError = document.getElementById("parent-error");
  const mobileError = document.getElementById("mobile-error");
  const emailError = document.getElementById("email-error");
  const pincodeError = document.getElementById("pincode-error");


  document.getElementById("estudent_name").addEventListener("input", function() {
    studentError.classList.toggle("hidden", !this.value || nameRegex.test(this.value));
  });

  document.getElementById("eparent_name").addEventListener("input", function() {
    parentError.classList.toggle("hidden", !this.value || nameRegex.test(this.value));
  });

  document.getElementById("emobile").addEventListener("input", function() {
    this.value = this.value.replace(/\D/g, '').slice(0, 10);
    mobileError.classList.toggle("hidden", !this.value || mobileRegex.test(this.value));
  });

  document.getElementById("eemail").addEventListener("input", function() {
    this.value = this.value.toLowerCase();
    emailError.classList.toggle("hidden", !this.value || emailRegex.test(this.value));
  });

  document.getElementById("epincode").addEventListener("input", function() {
    this.value = this.value.replace(/\D/g, '').slice(0, 6);
    pincodeError.classList.toggle("hidden", !this.value || pincodeRegex.test(this.value));
  });

  // Submit Validation
  document.getElementById("enquiryForm").addEventListener("submit", function(e) {
    e.preventDefault();

    // Inputs
    const egrade = document.getElementById("egrade").value.trim();
    const estudent_name = document.getElementById("estudent_name").value.trim();
    const eparent_name = document.getElementById("eparent_name").value.trim();
    const emobile = document.getElementById("emobile").value.trim();
    const eemail = document.getElementById("eemail").value.trim();
    const ecity = document.getElementById("ecity").value.trim();
    const epincode = document.getElementById("epincode").value.trim();


    let isValid = true;

    if (!nameRegex.test(estudent_name)) {
      studentError.textContent = "Only letters and spaces allowed.";
      isValid = false;
    }

    if (!nameRegex.test(eparent_name)) {
      parentError.textContent = "Only letters and spaces allowed.";
      isValid = false;
    }

    if (!mobileRegex.test(emobile)) {
      mobileError.classList.remove("hidden");
      isValid = false;
    }

    if (!emailRegex.test(eemail)) {
      emailError.classList.remove("hidden");
      isValid = false;
    }

    if (!pincodeRegex.test(epincode)) {
      pincodeError.classList.remove("hidden");
      isValid = false;
    }

    if (!isValid) return; // STOP submission if any field is invalid
    const submitBtn = document.getElementById("submitBtn");
    submitBtn.disabled = true;
    submitBtn.textContent = "Submitting...";

    // API Payload
    const payload = {
      grade: egrade,
      studentName: estudent_name,
      parentName: eparent_name,
      mobile: emobile,
      email: eemail,
      city: ecity,
      pincode: epincode
    };

    fetch(`${baseUrl}/api/save-enqury-form/SCLID00000725`, {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify(payload)
      })
      .then(response => {
        if (!response.ok) throw new Error("Error: " + response.statusText);
        return response.json();
      })
      .then(data => {
        document.getElementById("esuccessPopup").classList.remove("hidden");
        closePopup()
        setTimeout(() => {
          document.getElementById("esuccessPopup").classList.add("hidden");
        }, 3000);
        document.getElementById("enquiryForm").reset();
      })
      .catch(error => {
        alert("There was an error submitting the form.");
        console.error("Error:", error);
      });
  });
</script>
 <script>
  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('.dps-menu-toggle').forEach(function(toggle) {
      toggle.addEventListener('click', function () {
        const submenu = this.nextElementSibling;
        if (submenu && submenu.classList.contains('dps-menu-open')) {
          submenu.classList.toggle('hidden-menu');
        }
      });
    });

    document.querySelectorAll('.dps2').forEach(function(toggle) {
      toggle.addEventListener('click', function () {
        const submenu = this.nextElementSibling;
        if (submenu && submenu.classList.contains('dps-menu-openss')) {
          submenu.classList.toggle('hidden-menu');
        }
      });
    });

    document.querySelectorAll('.dps3').forEach(function(toggle) {
      toggle.addEventListener('click', function () {
        const submenu = this.nextElementSibling;
        if (submenu && submenu.classList.contains('dps-menu-opensss')) {
          submenu.classList.toggle('hidden-menu');
        }
      });
    });

   });
</script>
 
