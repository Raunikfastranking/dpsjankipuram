<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title>DPS Jankipuram | Online Enquiry Form</title>
</head>
<body>
    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <h1 class="text-[32px] font-[700] text-white ml-4 sm:ml-[7rem] hr-line relative">Online Enquiry Form</h1>
        </div>

        <div class="sm:mt-20 mt-10 mx-4 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-4">
            <div class="relative">
                <h2 class="text-center sm:text-[32px] text-[28px] font-[700] text-blue-main leading-9">
                    Enquiry Form | Session 2026–2027
                </h2>

                <div class="mt-10">
                    <form id="AdmissionForm" method="post">
                        <div class="mt-4">
                            <select name="session" required id="asession" class="w-full border border-gray-300 p-2 rounded-md text-gray-500">
                                <option value="" disabled selected>Enquiry For Session</option>
                                <?php
                                $sessions = include "includes/session-api.php";
                                foreach ($sessions as $item):
                                    $sessionName = trim($item['session'] ?? '');
                                    if ($sessionName === '') continue; ?>
                                    <option value="<?= htmlspecialchars($sessionName) ?>"><?= htmlspecialchars($sessionName) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mt-4">
                            <select id="agrade" required class="w-full border p-3 rounded-md">
                                    <option value="" disabled selected>Select Grade</option>
                                        <?php
                                            if (!empty($grades)) {

                                            $gradeOrder = [
    'P.G', 'Nursery', 'Prep',
    'I', 'II', 'III', 'IV', 'V',
    'VI', 'VII', 'VIII', 'IX',
    'X', 'XI', 'XII'
];

                                            // remove duplicates
                                            $uniqueGrades = [];
                                            foreach ($grades as $g) {
                                                $grade = trim($g['grades']);
                                                if ($grade && !in_array($grade, $uniqueGrades)) {
                                                    $uniqueGrades[] = $grade;
                                                }
                                            }

                                            // safe sorting
                                            usort($uniqueGrades, function ($a, $b) use ($gradeOrder) {

                                                $posA = array_search($a, $gradeOrder);
                                                $posB = array_search($b, $gradeOrder);

                                                $posA = ($posA === false) ? 999 : $posA;
                                                $posB = ($posB === false) ? 999 : $posB;

                                                return $posA - $posB;
                                            });

                                            foreach ($uniqueGrades as $gr):
                                        ?>
                                    <option value="<?= htmlspecialchars($gr, ENT_QUOTES, 'UTF-8') ?>">
                                        <?= htmlspecialchars($gr, ENT_QUOTES, 'UTF-8') ?>
                                    </option>
                                    <?php endforeach; } else { ?>
                                        <option value="">No grades available</option>
                                    <?php } ?>
                                </select>
                        </div>

                        <div class="mt-4">
                            <input type="text" id="astudent_name" placeholder="Student Name" class="w-full border border-gray-300 p-[11px] rounded-md outline-none" required>
                            <span id="astudent-error" class="text-red-500 text-sm mt-1 hidden">Only letters and spaces allowed.</span>
                        </div>
                        <div class="mt-4">
                            <input type="text" id="aparent_name" placeholder="Parents Name" class="w-full border border-gray-300 p-[11px] rounded-md outline-none">
                            <span id="aparent-error" class="text-red-500 text-sm mt-1 hidden">Only letters and spaces allowed.</span>
                        </div>

                        <div class="mt-4">
                            <input type="text" id="amobile" placeholder="Mobile Number" maxlength="10" class="w-full border border-gray-300 p-[11px] rounded-md outline-none" required>
                            <div id="amobile-error" class="text-red-500 text-sm mt-1 hidden">Please enter valid phone number</div>
                        </div>
                        <div class="mt-4">
                            <input type="email" id="aemail" placeholder="Email" class="w-full border border-gray-300 p-[11px] rounded-md outline-none">
                            <span id="aemail-error" class="text-red-500 text-sm mt-1 hidden">Please enter a valid email address.</span>
                        </div>

                        <div class="mt-4 relative" id="cityWrapper">
                            <select id="acity" name="city" class="hidden" required>
                                <option value="">Select City</option>
                                <?php
                                $cities = include 'includes/get-city.php';
                                if (!empty($cities)):
                                    foreach ($cities as $city): 
                                        $cityName = trim($city['name'] ?? '');
                                        if ($cityName === '') continue; ?>
                                        <option value="<?= htmlspecialchars($cityName) ?>"><?= htmlspecialchars($cityName) ?></option>
                                <?php endforeach; endif; ?>
                            </select>

                            <div class="border border-gray-300 p-[11px] rounded-md bg-white cursor-pointer flex justify-between items-center" id="cityTrigger">
                                <span class="selected-text text-[#808080cc]">Select City</span>
                                <span>▼</span>
                            </div>

                            <div class="absolute mt-1 border border-gray-300 rounded-md bg-white shadow-md hidden z-50 w-full" id="cityDropdown">
                                <input type="text" id="citySearch" placeholder="Search..." class="w-full p-2 border-b border-gray-300 outline-none">
                                <ul class="max-h-48 overflow-y-auto" id="cityList"></ul>
                            </div>
                        </div>

                        <div class="mt-4">
                            <input type="text" id="apincode" placeholder="Pincode" class="w-full border border-gray-300 p-[11px] rounded-md" maxlength="6" required>
                            <span id="apincode-error" class="text-red-500 text-sm hidden">Please enter a valid Pincode.</span>
                        </div>

                        <div class="mt-4 flex items-center gap-2">
                            <input type="checkbox" id="terms" required>
                            <label for="terms" class="text-sm">I agree to <a href="#" class="underline">Terms & Conditions</a></label>
                        </div>

                        <input type="hidden" name="source" id="source">
                        
                        <div id="successPopup" class="hidden px-4 py-2 mt-4 text-white bg-green-500 rounded text-center">Form submitted successfully!</div>

                        <div class="mt-4">
                            <button type="submit" id="AsubmitBtn" class="p-4 bg-blue-main w-full text-white font-semibold text-[18px] rounded hover:bg-red-500 transition">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php" ?>

    <script>
        // --- 1. City Dropdown Logic (THE FIX) ---
        const cityWrapper = document.getElementById('cityWrapper');
        const cityTrigger = document.getElementById('cityTrigger');
        const cityDropdown = document.getElementById('cityDropdown');
        const citySearch = document.getElementById('citySearch');
        const cityList = document.getElementById('cityList');
        const hiddenCitySelect = document.getElementById('acity');
        const selectedLabel = cityTrigger.querySelector('.selected-text');

        // Populate list from hidden select
        Array.from(hiddenCitySelect.options).forEach(opt => {
            if (opt.value === "") return;
            const li = document.createElement('li');
            li.className = "p-2 hover:bg-blue-50 cursor-pointer text-sm border-b last:border-0";
            li.textContent = opt.text;
            li.onclick = (e) => {
                e.stopPropagation();
                hiddenCitySelect.value = opt.value;
                selectedLabel.textContent = opt.text;
                selectedLabel.classList.remove('text-[#808080cc]');
                selectedLabel.classList.add('text-black');
                cityDropdown.classList.add('hidden');
            };
            cityList.appendChild(li);
        });

        cityTrigger.onclick = (e) => {
            e.stopPropagation();
            cityDropdown.classList.toggle('hidden');
            if(!cityDropdown.classList.contains('hidden')) citySearch.focus();
        };

        citySearch.oninput = (e) => {
            const term = e.target.value.toLowerCase();
            cityList.querySelectorAll('li').forEach(li => {
                li.style.display = li.textContent.toLowerCase().includes(term) ? "block" : "none";
            });
        };

        document.addEventListener('click', () => cityDropdown.classList.add('hidden'));

        // --- 2. Source Tracking ---
        (function() {
            const params = new URLSearchParams(window.location.search);
            let source = params.get("utm_source") || document.referrer || "Website";
            const srcLower = source.toLowerCase();
            if (srcLower.includes("google")) {
                source = "Google-Ads by Agency";
            } else if (srcLower.includes("facebook") || srcLower.includes("meta")) {
                source = "Facebook by Agency";
            } else if (srcLower.includes("instagram") || srcLower.includes("ig")) {
                source = "Instagram by Agency";
            } else if (source !== "Website") {
                source = "Others";
            }
            if (!sessionStorage.getItem("leadSource")) {
                sessionStorage.setItem("leadSource", source);
            }
            document.getElementById("source").value = sessionStorage.getItem("leadSource");
        })();

        // --- 3. Validation & Submission ---
        const nameRegex = /^[A-Za-z\s]+$/;
        const mobileRegex = /^[6-9]\d{9}$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const pincodeRegex = /^[1-9][0-9]{5}$/;

        // Live validation (optional, but keep)
        document.getElementById("astudent_name").addEventListener("input", function() {
            const err = document.getElementById("astudent-error");
            if (this.value && !nameRegex.test(this.value)) {
                err.classList.remove("hidden");
            } else {
                err.classList.add("hidden");
            }
        });
        document.getElementById("aparent_name").addEventListener("input", function() {
            const err = document.getElementById("aparent-error");
            if (this.value && !nameRegex.test(this.value)) {
                err.classList.remove("hidden");
            } else {
                err.classList.add("hidden");
            }
        });
        document.getElementById("amobile").addEventListener("input", function() {
            this.value = this.value.replace(/\D/g, '').slice(0, 10);
            const err = document.getElementById("amobile-error");
            if (this.value && !mobileRegex.test(this.value)) {
                err.classList.remove("hidden");
            } else {
                err.classList.add("hidden");
            }
        });
        document.getElementById("aemail").addEventListener("input", function() {
            this.value = this.value.toLowerCase();
            const err = document.getElementById("aemail-error");
            if (this.value && !emailRegex.test(this.value)) {
                err.classList.remove("hidden");
            } else {
                err.classList.add("hidden");
            }
        });
        document.getElementById("apincode").addEventListener("input", function() {
            this.value = this.value.replace(/\D/g, '').slice(0, 6);
            const err = document.getElementById("apincode-error");
            if (this.value && !pincodeRegex.test(this.value)) {
                err.classList.remove("hidden");
            } else {
                err.classList.add("hidden");
            }
        });

        // Form submission
        document.getElementById("AdmissionForm").addEventListener("submit", function(e) {
            e.preventDefault();
            const btn = document.getElementById("AsubmitBtn");
            
            // Get values
            const session = document.getElementById("asession").value;
            const grade = document.getElementById("agrade").value;
            const studentName = document.getElementById("astudent_name").value.trim();
            const parentName = document.getElementById("aparent_name").value.trim();
            const mobile = document.getElementById("amobile").value.trim();
            const email = document.getElementById("aemail").value.trim();
            const city = hiddenCitySelect.value;
            const pincode = document.getElementById("apincode").value.trim();
            const source = document.getElementById("source").value;

            // Basic required field checks
            if (!session || !grade || !studentName || !mobile || !city || !pincode) {
                alert("Please fill all required fields.");
                return;
            }

            // Validate formats
            if (!nameRegex.test(studentName)) {
                alert("Student name contains invalid characters.");
                return;
            }
            if (parentName && !nameRegex.test(parentName)) {
                alert("Parent name contains invalid characters.");
                return;
            }
            if (!mobileRegex.test(mobile)) {
                alert("Please enter a valid 10-digit mobile number starting with 6-9.");
                return;
            }
            if (email && !emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return;
            }
            if (!pincodeRegex.test(pincode)) {
                alert("Please enter a valid 6-digit pincode.");
                return;
            }

            btn.disabled = true;
            btn.textContent = "Submitting...";

            // Build payload – MATCHES THE BACKEND EXPECTATIONS
            const payload = {
                session: session,
                grade: grade,
                name: studentName,
                parent_name: parentName,
                phone: mobile,
                email: email,
                city: city,
                pincode: pincode,
                source: source,
                source_type: "Website",            // ADDED
                enquiry_type: "Digital",            // ADDED
                message: "This Message From DPS Jankipuram Website", // ADDED
                subject: "Admission Enquiry",       // ADDED
                branch_id: 10,
                school_id: 1,
                language_id: 1                       // ADDED (optional but safe)
            };

            fetch(`proxy/admission-proxy`, {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify(payload)
            })
            .then(async response => {
                if (!response.ok) {
                    // Try to get error message from response
                    const errorText = await response.text();
                    throw new Error(`Server responded with ${response.status}: ${errorText}`);
                }
                return response.json();
            })
            .then(data => {
                document.getElementById("successPopup").classList.remove("hidden");
                document.getElementById("AdmissionForm").reset();
                selectedLabel.textContent = "Select City";
                selectedLabel.classList.add('text-[#808080cc]');
                selectedLabel.classList.remove('text-black');
                hiddenCitySelect.value = "";
                setTimeout(() => document.getElementById("successPopup").classList.add("hidden"), 5000);
            })
            .catch(error => {
                console.error("Submission error:", error);
                alert("Submission failed. Please check the console for details or contact support.");
            })
            .finally(() => {
                btn.disabled = false;
                btn.textContent = "Submit";
            });
        });
    </script>
</body>
</html>