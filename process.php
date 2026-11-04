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
                            <div class="ee-process-form-wrap mx-auto">
                                <div id="ee-form-process"></div>
                            </div>
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
                if (tab === "step-2" && typeof window.initPageEeForm === "function") {
                    window.initPageEeForm("ee-form-process");
                }
            });
        });
    </script>

    <style>
    /* Process page enquiry form — match reference width/height/layout */
    .ee-process-form-wrap {
        width: 100%;
        max-width: 100%;
    }
    #ee-form-process {
        --ee-primary-color: #005224;
        --ee-border-color: #cfcfcf;
        width: 100%;
    }
    #ee-form-process .ee-form-widget,
    #ee-form-process .ee-form-widget .ee-container,
    #ee-form-process .ee-form-widget-form,
    #ee-form-process .ee-form-widget .modal-content,
    #ee-form-process .ee-form-widget .modal-body {
        background: transparent !important;
        padding: 0 !important;
        margin: 0 !important;
        box-shadow: none !important;
        border: none !important;
        width: 100% !important;
    }
    #ee-form-process .modal-header,
    #ee-form-process .ee-form-heading {
        display: none !important;
    }
    /* Keep ExtraaEdge 2-column for State/City like reference */
    #ee-form-process .ee-form-body.TWO_COLUMNS {
        display: flex !important;
        flex-direction: row !important;
        flex-wrap: wrap !important;
        width: 100% !important;
        gap: 0 12px !important;
    }
    #ee-form-process .ee-form-body > .ee-row,
    #ee-form-process .ee-form-body.TWO_COLUMNS > .ee-row {
        margin: 0 0 16px !important;
    }
    #ee-form-process .ee-form-body.TWO_COLUMNS > .ee-row:not(.full-width) {
        width: calc(50% - 6px) !important;
        margin: 0 0 16px !important;
        float: none !important;
    }
    #ee-form-process .ee-form-body.TWO_COLUMNS > .ee-row.full-width,
    #ee-form-process .ee-form-body > .ee-row.full-width {
        width: 100% !important;
        margin: 0 0 16px !important;
    }
    #ee-form-process .ee-form-widget .ee-row > label:not(:has(input[type="checkbox"])) {
        display: none !important;
    }
    #ee-form-process .ee-form-widget input:not([type="checkbox"]):not([type="radio"]):not([type="hidden"]):not([type="search"]):not([type="tel"]),
    #ee-form-process .ee-form-widget select,
    #ee-form-process .ee-form-widget textarea,
    #ee-form-process .ee-form-widget .select2-container .select2-selection--single {
        width: 100% !important;
        height: 40px !important;
        min-height: 40px !important;
        box-sizing: border-box !important;
        padding: 8px 12px !important;
        border: 1px solid #cfcfcf !important;
        border-radius: 4px !important;
        background: #fff !important;
        font-size: 14px !important;
        color: #333 !important;
        outline: none !important;
        box-shadow: none !important;
    }
    #ee-form-process .ee-form-widget input::placeholder {
        font-size: 14px !important;
        color: #808080 !important;
    }
    #ee-form-process .ee-form-widget .select2-container {
        width: 100% !important;
    }
    #ee-form-process .ee-form-widget .select2-container .select2-selection--single {
        display: flex !important;
        align-items: center !important;
    }
    #ee-form-process .ee-form-widget .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #808080 !important;
        font-size: 14px !important;
        line-height: 22px !important;
        padding: 0 !important;
    }
    #ee-form-process .ee-form-widget .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 38px !important;
        top: 1px !important;
        right: 6px !important;
    }
    /* Mobile: flag/+91 left, no overlap */
    #ee-form-process .ee-form-widget .iti {
        width: 100% !important;
        display: block !important;
        position: relative !important;
    }
    #ee-form-process .ee-form-widget .iti input[type="tel"],
    #ee-form-process .ee-form-widget .iti input[type="text"] {
        width: 100% !important;
        height: 40px !important;
        padding: 0 12px 0 110px !important;
        line-height: 40px !important;
        border: 1px solid #cfcfcf !important;
        border-radius: 4px !important;
        font-size: 14px !important;
        box-sizing: border-box !important;
    }
    #ee-form-process .ee-form-widget .iti__flag-container {
        position: absolute !important;
        left: 0 !important;
        top: 0 !important;
        bottom: 0 !important;
        right: auto !important;
    }
    #ee-form-process .ee-form-widget .iti--separate-dial-code .iti__selected-flag,
    #ee-form-process .ee-form-widget .iti--allow-dropdown .iti__selected-flag {
        height: 100% !important;
        display: flex !important;
        align-items: center !important;
        padding: 0 10px 0 8px !important;
        background: #f0f0f0 !important;
        border-radius: 3px 0 0 3px !important;
        gap: 4px !important;
    }
    #ee-form-process .ee-form-widget .iti__selected-dial-code {
        font-size: 14px !important;
        color: #333 !important;
    }
    /* Consent + submit */
    #ee-form-process .ee-form-widget .ee-row label:has(input[type="checkbox"]) {
        display: flex !important;
        align-items: flex-start !important;
        gap: 8px !important;
        font-size: 12px !important;
        line-height: 1.4 !important;
        color: #666 !important;
        font-weight: 400 !important;
    }
    #ee-form-process .ee-form-footer,
    #ee-form-process .btnContainer {
        display: block !important;
        width: 100% !important;
        margin-top: 12px !important;
    }
    #ee-form-process .btn.btn-submit,
    #ee-form-process button.btn-submit {
        width: 100% !important;
        height: 44px !important;
        background: #005224 !important;
        border: 1px solid #005224 !important;
        color: #fff !important;
        border-radius: 9999px !important;
        font-weight: 700 !important;
        font-size: 16px !important;
    }
    #ee-form-process .btn.btn-submit:hover {
        background: #003618 !important;
        border-color: #003618 !important;
    }
    @media (max-width: 600px) {
        .ee-process-form-wrap { max-width: 100%; }
        #ee-form-process .ee-form-body.TWO_COLUMNS > .ee-row:not(.full-width) {
            width: 100% !important;
        }
    }
    </style>

    <script>
    (function () {
        window.ee_form_widget_baseurl = window.ee_form_widget_baseurl || "https://eeconfigstaticfiles.blob.core.windows.net/staticfiles/ee-form-widget/";
        var pageEeInited = {};
        var pageEeLoading = {};

        function styleProcessEeForm(root) {
            if (!root) return;
            root.style.setProperty("--ee-primary-color", "#005224");
            root.querySelectorAll(".btn-submit, button[type='submit']").forEach(function (btn) {
                btn.style.setProperty("background-color", "#005224", "important");
                btn.style.setProperty("border-color", "#005224", "important");
                btn.style.setProperty("color", "#fff", "important");
                btn.style.setProperty("width", "100%", "important");
                btn.style.setProperty("border-radius", "9999px", "important");
            });
            root.querySelectorAll(".iti").forEach(function (iti) {
                var flag = iti.querySelector(".iti__selected-flag") || iti.querySelector(".iti__flag-container");
                var phone = iti.querySelector("input[type='tel'], input[type='text']");
                if (!phone) return;
                var pad = 110;
                if (flag) {
                    var w = Math.ceil(flag.getBoundingClientRect().width || flag.offsetWidth || 0);
                    if (w > 40) pad = w + 14;
                }
                phone.style.setProperty("padding-left", pad + "px", "important");
                phone.style.setProperty("line-height", "40px", "important");
                phone.style.setProperty("height", "40px", "important");
            });
        }

        window.initPageEeForm = function (targetId) {
            if (!targetId || !document.getElementById(targetId)) return;
            if (pageEeInited[targetId] || pageEeLoading[targetId]) return;
            pageEeLoading[targetId] = true;

            function runInit() {
                return (async function () {
                    _eeFormWidget = new eeFormWidget;
                    await _eeFormWidget.init("superhouseeducation", "form-20", targetId);
                    var root = document.getElementById(targetId);
                    styleProcessEeForm(root);
                    setTimeout(function () { styleProcessEeForm(root); }, 300);
                    setTimeout(function () { styleProcessEeForm(root); }, 1000);
                    pageEeInited[targetId] = true;
                    pageEeLoading[targetId] = false;
                })().catch(function () {
                    pageEeLoading[targetId] = false;
                });
            }

            if (!document.getElementById("__formWidgetCss")) {
                var e = document.createElement("link");
                e.id = "__formWidgetCss";
                e.rel = "stylesheet";
                e.href = window.ee_form_widget_baseurl + "css/stylesheet.min.css";
                e.type = "text/css";
                document.getElementsByTagName("head")[0].appendChild(e);
            }

            if (typeof eeFormWidget !== "undefined") {
                runInit();
                return;
            }

            var existing = document.querySelector('script[src*="eeFormWidget.min.js"]');
            if (existing) {
                existing.addEventListener("load", runInit);
                if (typeof eeFormWidget !== "undefined") runInit();
                return;
            }

            var t = document.createElement("script");
            t.type = "text/javascript";
            t.onload = runInit;
            t.onerror = function () { pageEeLoading[targetId] = false; };
            t.src = window.ee_form_widget_baseurl + "js/eeFormWidget.min.js";
            document.getElementsByTagName("head")[0].appendChild(t);
        };

        document.addEventListener("DOMContentLoaded", function () {
            if (document.getElementById("ee-form-process")) {
                var step2 = document.querySelector('[data-tab-content="step-2"]');
                if (step2 && !step2.classList.contains("hidden")) {
                    window.initPageEeForm("ee-form-process");
                }
            }
        });
    })();
    </script>

    <?php include "includes/foot.php" ?>
</body>
</html>