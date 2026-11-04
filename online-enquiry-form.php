<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title>DPS Jankipuram | Online Enquiry Form</title>
    <style>
    /* Online enquiry — same design as reference (image 2) */
    #ee-form-online {
        --ee-primary-color: #005224;
        --ee-border-color: #cfcfcf;
        width: 100%;
    }
    #ee-form-online .ee-form-widget,
    #ee-form-online .ee-form-widget .ee-container,
    #ee-form-online .ee-form-widget-form,
    #ee-form-online .ee-form-widget .modal-content,
    #ee-form-online .ee-form-widget .modal-body {
        background: transparent !important;
        padding: 0 !important;
        margin: 0 !important;
        box-shadow: none !important;
        border: none !important;
        width: 100% !important;
    }
    #ee-form-online .modal-header,
    #ee-form-online .ee-form-heading {
        display: none !important;
    }
    #ee-form-online .ee-form-body.TWO_COLUMNS {
        display: flex !important;
        flex-direction: row !important;
        flex-wrap: wrap !important;
        width: 100% !important;
        gap: 0 12px !important;
    }
    #ee-form-online .ee-form-body > .ee-row,
    #ee-form-online .ee-form-body.TWO_COLUMNS > .ee-row {
        margin: 0 0 16px !important;
    }
    #ee-form-online .ee-form-body.TWO_COLUMNS > .ee-row:not(.full-width) {
        width: calc(50% - 6px) !important;
        margin: 0 0 16px !important;
        float: none !important;
    }
    #ee-form-online .ee-form-body.TWO_COLUMNS > .ee-row.full-width,
    #ee-form-online .ee-form-body > .ee-row.full-width {
        width: 100% !important;
        margin: 0 0 16px !important;
    }
    #ee-form-online .ee-form-widget .ee-row > label:not(:has(input[type="checkbox"])) {
        display: none !important;
    }
    #ee-form-online .ee-form-widget input:not([type="checkbox"]):not([type="radio"]):not([type="hidden"]):not([type="search"]):not([type="tel"]),
    #ee-form-online .ee-form-widget select,
    #ee-form-online .ee-form-widget textarea,
    #ee-form-online .ee-form-widget .select2-container .select2-selection--single {
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
    #ee-form-online .ee-form-widget input::placeholder {
        font-size: 14px !important;
        color: #808080 !important;
    }
    #ee-form-online .ee-form-widget .select2-container {
        width: 100% !important;
    }
    #ee-form-online .ee-form-widget .select2-container .select2-selection--single {
        display: flex !important;
        align-items: center !important;
    }
    #ee-form-online .ee-form-widget .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #808080 !important;
        font-size: 14px !important;
        line-height: 22px !important;
        padding: 0 !important;
    }
    #ee-form-online .ee-form-widget .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 38px !important;
        top: 1px !important;
        right: 6px !important;
    }
    #ee-form-online .ee-form-widget .iti {
        width: 100% !important;
        display: block !important;
        position: relative !important;
    }
    #ee-form-online .ee-form-widget .iti input[type="tel"],
    #ee-form-online .ee-form-widget .iti input[type="text"] {
        width: 100% !important;
        height: 40px !important;
        padding: 0 12px 0 110px !important;
        line-height: 40px !important;
        border: 1px solid #cfcfcf !important;
        border-radius: 4px !important;
        font-size: 14px !important;
        box-sizing: border-box !important;
    }
    #ee-form-online .ee-form-widget .iti__flag-container {
        position: absolute !important;
        left: 0 !important;
        top: 0 !important;
        bottom: 0 !important;
        right: auto !important;
    }
    #ee-form-online .ee-form-widget .iti--separate-dial-code .iti__selected-flag,
    #ee-form-online .ee-form-widget .iti--allow-dropdown .iti__selected-flag {
        height: 100% !important;
        display: flex !important;
        align-items: center !important;
        padding: 0 10px 0 8px !important;
        background: #f0f0f0 !important;
        border-radius: 3px 0 0 3px !important;
        gap: 4px !important;
    }
    #ee-form-online .ee-form-widget .iti__selected-dial-code {
        font-size: 14px !important;
        color: #333 !important;
    }
    #ee-form-online .ee-form-widget .ee-row label:has(input[type="checkbox"]) {
        display: flex !important;
        align-items: flex-start !important;
        gap: 8px !important;
        font-size: 12px !important;
        line-height: 1.4 !important;
        color: #666 !important;
        font-weight: 400 !important;
    }
    #ee-form-online .ee-form-footer,
    #ee-form-online .btnContainer {
        display: block !important;
        width: 100% !important;
        margin-top: 12px !important;
        margin-bottom: 24px !important;
        text-align: center !important;
        justify-content: center !important;
    }
    #ee-form-online .btn.btn-submit,
    #ee-form-online button.btn-submit {
        width: 100% !important;
        height: 44px !important;
        background: #005224 !important;
        border: 1px solid #005224 !important;
        color: #fff !important;
        border-radius: 9999px !important;
        font-weight: 700 !important;
        font-size: 16px !important;
        margin-bottom: 8px !important;
    }
    #ee-form-online .btn.btn-submit:hover {
        background: #003618 !important;
        border-color: #003618 !important;
    }
    @media (max-width: 600px) {
        #ee-form-online .ee-form-body.TWO_COLUMNS > .ee-row:not(.full-width) {
            width: 100% !important;
        }
    }
    </style>
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

                <div class="mt-10 mb-16">
                    <div id="ee-form-online" class="w-full"></div>
                </div>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php" ?>

    <script>
    (function () {
        window.ee_form_widget_baseurl = window.ee_form_widget_baseurl || "https://eeconfigstaticfiles.blob.core.windows.net/staticfiles/ee-form-widget/";
        var pageEeInited = false;
        var pageEeLoading = false;

        function styleOnlineEeForm(root) {
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

        function initOnlineEeForm() {
            if (pageEeInited || pageEeLoading) return;
            if (!document.getElementById("ee-form-online")) return;
            pageEeLoading = true;

            function runInit() {
                return (async function () {
                    _eeFormWidget = new eeFormWidget;
                    await _eeFormWidget.init("superhouseeducation", "form-20", "ee-form-online");
                    var root = document.getElementById("ee-form-online");
                    styleOnlineEeForm(root);
                    setTimeout(function () { styleOnlineEeForm(root); }, 300);
                    setTimeout(function () { styleOnlineEeForm(root); }, 1000);
                    pageEeInited = true;
                    pageEeLoading = false;
                })().catch(function () {
                    pageEeLoading = false;
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
            t.onerror = function () { pageEeLoading = false; };
            t.src = window.ee_form_widget_baseurl + "js/eeFormWidget.min.js";
            document.getElementsByTagName("head")[0].appendChild(t);
        }

        if (document.readyState === "loading") {
            document.addEventListener("DOMContentLoaded", initOnlineEeForm);
        } else {
            initOnlineEeForm();
        }
    })();
    </script>

    <?php include "includes/foot.php" ?>
</body>
</html>
