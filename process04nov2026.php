<?php
include "includes/apis.php";

// ✅ FIX: API items reverse order me de raha hai, isliye reverse kar rahe hain
$processItems = $process_____data['data'][0]['items'] ?? [];
$processItems = array_reverse($processItems);
$totalSteps   = count($processItems);
$totalTabs    = max($totalSteps, 6); // tab buttons ke liye minimum 6
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $process_data['data']['title'] ?? "DPS Jankipuram | Process" ?></title>
    <meta name="description" content="<?= $process_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $process_data['data']['meta_keywords'] ?? "" ?>">
    <?php include "includes/head.php" ?>
    <style>
        /* --- GLOBAL & TABLE FIXES --- */
        html, body { max-width: 100%; overflow-x: hidden; }
        [data-tab-content="step-4"] table {
            display: block; max-width: 100%; overflow-x: auto;
            white-space: nowrap; -webkit-overflow-scrolling: touch;
        }

        /* --- MOBILE TAB SCROLLING --- */
        @media (max-width: 767px) {
            .tab-container {
                justify-content: flex-start !important;
                padding-left: 16px !important;
                padding-right: 40px !important;
                overflow-x: auto !important;
                -webkit-overflow-scrolling: touch !important;
            }
            #tab-buttons { justify-content: flex-start !important; gap: 10px !important; }
            .tab-btn { padding: 6px 16px !important; font-size: 13px !important; flex: 0 0 auto !important; }
        }

        .tab-btn.active { background-color: #fff !important; color: #003618 !important; font-weight: bold; }
    </style>
</head>

<body>
    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image comman-banner">
            <h1 class="sm:text-[32px] text-[28px] font-[700] text-white text-left ml-4 sm:ml-[7rem] hr-line relative">
                Process
            </h1>
        </div>

        <div class="flex m-5 overflow-x-auto text-blue-main text-xs">
            <a href="/">Home</a> <span class="mx-2">></span> <span>Admission</span> <span class="mx-2">></span> <b>Process</b>
        </div>

        <div class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 space-y-10 text-gray-600">
            <div>
               <?= $process_____data['data'][0]['description'] ?? "" ?>
            </div>

            <div class="mt-10 flex justify-center p-8 bg-[#003618] rounded-lg tab-container">
                <ul class="flex gap-8 items-center" id="tab-buttons">
                    <?php for ($i = 1; $i <= $totalTabs; $i++): ?>
                        <li class="tab-btn <?= $i === 1 ? 'active' : '' ?> text-white border border-white p-2 px-6 cursor-pointer rounded whitespace-nowrap" data-tab="step-<?= $i ?>">
                            Step <?= $i ?>
                        </li>
                    <?php endfor; ?>
                </ul>
            </div>

            <?php for ($i = 0; $i < $totalSteps; $i++): ?>
                <div class="tab-content <?= $i === 0 ? '' : 'hidden' ?>" data-tab-content="step-<?= $i + 1 ?>">
                    <?= $processItems[$i]['content'] ?? "" ?>

                    <?php if ($i === 1): // Step 2 ke liye form ?>
                        <div class="mt-10 bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <h2 class="text-center text-2xl font-bold text-blue-main mb-6">Enquiry Form | Session 2027–2028</h2>
                            <div id="AdmissionFormPopup" class="hidden bg-green-500 text-white p-3 rounded mb-4 text-center">Form submitted successfully!</div>

                            <form id="AdmissionForm" class="space-y-4">
                                <div>
                                    <select id="asession" required class="border p-3 rounded-md w-full">
                                        <option value="" disabled selected>Enquiry For Session</option>
                                        <?php
                                        $sessions = include "includes/session-api.php";
                                        foreach (array_unique(array_column($sessions, 'session')) as $sess): ?>
                                            <option value="<?= htmlspecialchars($sess) ?>"><?= htmlspecialchars($sess) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div>
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

                                            $uniqueGrades = [];
                                            foreach ($grades as $g) {
                                                $grade = trim($g['grades']);
                                                if ($grade && !in_array($grade, $uniqueGrades)) {
                                                    $uniqueGrades[] = $grade;
                                                }
                                            }

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
                                <div>
                                    <input type="text" id="astudent_name" placeholder="Student Name" class="w-full border p-3 rounded-md" required>
                                </div>
                                <div>
                                    <input type="text" id="aparent_name" placeholder="Parents Name" class="w-full border p-3 rounded-md">
                                </div>
                                <div>
                                    <input type="text" id="amobile" placeholder="Mobile Number" maxlength="10" class="border p-3 rounded-md w-full" required>
                                </div>
                                <div>
                                    <input type="email" id="aemail" placeholder="Email Address" class="border p-3 rounded-md w-full">
                                </div>

                                <div class="relative" id="cityWrapper">
                                    <select id="acity" name="city" class="hidden" required>
                                        <option value="">Select City</option>
                                        <?php
                                        $cities = include 'includes/get-city.php';
                                        foreach ($cities as $ct): if(empty($ct['name'])) continue; ?>
                                            <option value="<?= htmlspecialchars($ct['name']) ?>"><?= htmlspecialchars($ct['name']) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div id="cityTrigger" class="border p-3 rounded-md bg-white cursor-pointer flex justify-between items-center">
                                        <span class="selected-text text-gray-400">Select City</span>
                                        <span>▼</span>
                                    </div>
                                    <div id="cityDropdown" class="absolute w-full mt-1 border bg-white shadow-lg z-50 hidden rounded-md">
                                        <input type="text" id="citySearch" placeholder="Search city..." class="w-full p-2 border-b outline-none">
                                        <ul id="cityList" class="max-h-40 overflow-y-auto"></ul>
                                    </div>
                                </div>

                                <input type="text" id="apincode" placeholder="Pincode" maxlength="6" class="w-full border p-3 rounded-md" required>

                                <div class="flex items-center gap-2">
                                    <input type="checkbox" id="terms" required>
                                    <label for="terms" class="text-sm">I agree to Terms & Conditions</label>
                                </div>

                                <input type="hidden" id="source" name="source">
                                <button type="submit" id="AsubmitBtn" class="w-full bg-blue-main text-white p-4 rounded-md font-bold hover:bg-red-600 transition-colors">Submit</button>
                            </form>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <?php include "includes/footer.php" ?>

    <script>
        // Tab switching
        const tabButtons = document.querySelectorAll(".tab-btn");
        const tabContents = document.querySelectorAll(".tab-content");

        tabButtons.forEach(button => {
            button.addEventListener("click", () => {
                tabButtons.forEach(btn => btn.classList.remove("active"));
                tabContents.forEach(content => content.classList.add("hidden"));

                button.classList.add("active");
                const tab = button.getAttribute("data-tab");
                document.querySelector(`[data-tab-content="${tab}"]`).classList.remove("hidden");
            });
        });
    </script>

    <script>
        // Source detection
        (function() {
            function getParam(name) {
                const urlParams = new URLSearchParams(window.location.search);
                return urlParams.get(name);
            }

            let source = getParam("utm_source") || document.referrer || "";
            console.log("Initial Source:", source);

            const src = source.toLowerCase();

            if (!source) {
                source = "Website";
            } else if (src.includes("google")) {
                source = "Google-Ads by Agency";
            } else if (src.includes("facebook") || src.includes("meta")) {
                source = "Facebook by Agency";
            } else if (src.includes("instagram") || src.includes("ig")) {
                source = "Instagram by Agency";
            } else {
                source = "Others";
            }

            if (!sessionStorage.getItem("leadSource")) {
                sessionStorage.setItem("leadSource", source);
            }

            const finalSource = sessionStorage.getItem("leadSource");
            const sourceInput = document.getElementById("source");

            if (sourceInput) {
                sourceInput.value = finalSource;
            }

            console.log("Captured Source:", finalSource);
        })();

        // Validation regex patterns
        const nameRegex = /^[A-Za-z\s]+$/;
        const mobileRegex = /^[6-9]\d{9}$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const pincodeRegex = /^[1-9][0-9]{5}$/;

        const studentError = document.getElementById("astudent-error");
        const parentError = document.getElementById("aparent-error");
        const mobileError = document.getElementById("amobile-error");
        const emailError = document.getElementById("aemail-error");
        const pincodeError = document.getElementById("apincode-error");

        document.getElementById("astudent_name").addEventListener("input", function() {
            if (studentError) studentError.classList.toggle("hidden", !this.value || nameRegex.test(this.value));
        });

        document.getElementById("aparent_name").addEventListener("input", function() {
            if (parentError) parentError.classList.toggle("hidden", !this.value || nameRegex.test(this.value));
        });

        document.getElementById("amobile").addEventListener("input", function() {
            this.value = this.value.replace(/\D/g, '').slice(0, 10);
            if (mobileError) mobileError.classList.toggle("hidden", !this.value || mobileRegex.test(this.value));
        });

        document.getElementById("aemail").addEventListener("input", function() {
            this.value = this.value.toLowerCase();
            if (emailError) emailError.classList.toggle("hidden", !this.value || emailRegex.test(this.value));
        });

        document.getElementById("apincode").addEventListener("input", function() {
            this.value = this.value.replace(/\D/g, '').slice(0, 6);
            if (pincodeError) pincodeError.classList.toggle("hidden", !this.value || pincodeRegex.test(this.value));
        });

        // Form submission
        document.getElementById("AdmissionForm").addEventListener("submit", function(e) {
            e.preventDefault();
            const AsubmitBtn = document.getElementById("AsubmitBtn");
            AsubmitBtn.disabled = true;
            AsubmitBtn.textContent = "Submitting...";

            const agrade = document.getElementById("agrade").value.trim();
            const astudent_name = document.getElementById("astudent_name").value.trim();
            const aparent_name = document.getElementById("aparent_name").value.trim();
            const amobile = document.getElementById("amobile").value.trim();
            const aemail = document.getElementById("aemail").value.trim();
            const acity = document.getElementById("acity").value.trim();
            const apincode = document.getElementById("apincode").value.trim();
            const source = sessionStorage.getItem("leadSource") || "Website";
            const asession = document.getElementById("asession").value.trim();

            let isValid = true;

            if (!nameRegex.test(astudent_name)) {
                if (studentError) { studentError.textContent = "Only letters and spaces allowed."; studentError.classList.remove("hidden"); }
                isValid = false;
            }

            if (aparent_name && !nameRegex.test(aparent_name)) {
                if (parentError) { parentError.textContent = "Only letters and spaces allowed."; parentError.classList.remove("hidden"); }
                isValid = false;
            }

            if (!mobileRegex.test(amobile)) {
                if (mobileError) mobileError.classList.remove("hidden");
                isValid = false;
            }

            if (aemail && !emailRegex.test(aemail)) {
                if (emailError) emailError.classList.remove("hidden");
                isValid = false;
            }

            if (!pincodeRegex.test(apincode)) {
                if (pincodeError) pincodeError.classList.remove("hidden");
                isValid = false;
            }

            if (!acity) {
                alert("Please select a city.");
                isValid = false;
            }

            if (!isValid) {
                AsubmitBtn.disabled = false;
                AsubmitBtn.textContent = "Submit";
                return;
            }

            const payload = {
                session: asession,
                grade: agrade,
                name: astudent_name,
                parent_name: aparent_name,
                phone: amobile,
                email: aemail,
                city: acity,
                pincode: apincode,
                source: source,
                source_type: "Website",
                enquiry_type: "Digital",
                message: "This Message From DPS Jankipuram Website",
                subject: "Admission Enquiry",
                branch_id: 10,
                school_id: 1,
                language_id: 1
            };

            fetch(`proxy/admission-proxy`, {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify(payload)
                })
                .then(response => {
                    if (!response.ok) throw new Error("Error: " + response.statusText);
                    return response.json();
                })
                .then(data => {
                    document.getElementById("AdmissionFormPopup").classList.remove("hidden");
                    setTimeout(() => {
                        document.getElementById("AdmissionFormPopup").classList.add("hidden");
                    }, 3000);
                    document.getElementById("AdmissionForm").reset();
                    document.querySelector('#cityTrigger .selected-text').textContent = 'Select City';
                    document.querySelector('#cityTrigger .selected-text').classList.add('text-gray-400');
                })
                .catch(error => {
                    alert("There was an error submitting the form.");
                    console.error("Error:", error);
                })
                .finally(() => {
                    AsubmitBtn.disabled = false;
                    AsubmitBtn.textContent = "Submit";
                });
        });
    </script>

    <script>
        // City dropdown functionality
        document.addEventListener("DOMContentLoaded", function () {
            const wrapper = document.getElementById('cityWrapper');
            const trigger = document.getElementById('cityTrigger');
            const dropdown = document.getElementById('cityDropdown');
            const search = document.getElementById('citySearch');
            const list = document.getElementById('cityList');
            const hiddenSelect = document.getElementById('acity');
            const displaySpan = trigger.querySelector('.selected-text');

            function populateList(filter = '') {
                list.innerHTML = '';
                const options = Array.from(hiddenSelect.options);
                options.forEach(opt => {
                    if (opt.value && opt.text.toLowerCase().includes(filter.toLowerCase())) {
                        const li = document.createElement('li');
                        li.textContent = opt.text;
                        li.dataset.value = opt.value;
                        li.className = 'p-2 hover:bg-gray-100 cursor-pointer';
                        list.appendChild(li);
                    }
                });
            }

            trigger.addEventListener('click', function (e) {
                e.stopPropagation();
                dropdown.classList.toggle('hidden');
                if (!dropdown.classList.contains('hidden')) {
                    search.value = '';
                    populateList();
                    search.focus();
                }
            });

            search.addEventListener('input', function () {
                populateList(search.value);
            });

            list.addEventListener('click', function (e) {
                if (e.target.tagName === 'LI') {
                    const value = e.target.dataset.value;
                    const text = e.target.textContent;
                    hiddenSelect.value = value;
                    displaySpan.textContent = text;
                    displaySpan.classList.remove('text-gray-400');
                    dropdown.classList.add('hidden');
                }
            });

            document.addEventListener('click', function (e) {
                if (!wrapper.contains(e.target)) {
                    dropdown.classList.add('hidden');
                }
            });
        });
    </script>

    <?php include "includes/foot.php" ?>
</body>
</html>