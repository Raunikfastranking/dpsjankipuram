<?php
require_once dirname(__DIR__) . '/proxy/config.php';

$api_url = "https://dps.allenhouseschools.com";

if (!defined('DPS_JANKIPURAM_GALLERY_BRANCH_ID')) {
    define('DPS_JANKIPURAM_GALLERY_BRANCH_ID', DPS_JANKIPURAM_BRANCH_ID);
}

function dps_get_current_page_endpoint_keys(array $endpoints): array
{
    // Layout endpoints needed on every single page
    $priority = [
        'header_footer_data',
        'menu_data',
        'scroll_text_data',
        'flyer_data',
        'footer_link_data',
    ];

    // Detect current script name
    $script = '';
    if (!empty($_SERVER['SCRIPT_FILENAME'])) {
        $script = strtolower(basename($_SERVER['SCRIPT_FILENAME'], '.php'));
    }
    if ($script === '' || $script === 'index') {
        $uriPath = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '';
        $cleanPath = trim(strtolower($uriPath), '/');
        $cleanPath = preg_replace('/\.php$/i', '', $cleanPath);
        if ($cleanPath !== '') {
            $parts = explode('/', $cleanPath);
            $script = end($parts);
        }
    }

    if ($script === '' || $script === 'index') {
        $priority[] = 'home_data';
        $priority[] = 'statistic_data';
        $priority[] = 'photo_gallery_data';
        return array_values(array_unique($priority));
    }

    $aliasMap = [
        'testimonial' => ['testimonial_data', 'home_data'],
        'testimonials' => ['testimonial_data', 'home_data'],
        'video-gallery' => ['video_data'],
        'videos' => ['video_data'],
        'photo-gallery' => ['photo_gallery_data', 'photo_data'],
        'gallery' => ['photo_gallery_data', 'photo_data'],
        'contact' => ['contact_data'],
        'contact-us' => ['contact_data'],
        'news' => ['dps_data', 'magazine_data'],
        'magazine' => ['magazine_data'],
        'faq' => ['faqs_data'],
        'faqs' => ['faqs_data'],
        'mission' => ['mv_data'],
        'our-story' => ['ourstory_data'],
        'process' => ['process_data', 'process_____data', 'x_____data', 'xii_____data'],
        'bus-routes' => ['bus_routes_data', 'route_data', 'busroute_data'],
        'sports' => ['sports_data', 'northwest_data'],
        'facilities' => ['facilities_data', 'otherfacilitie_data', 'smartclassrooms_data', 'laboratories_data'],
        'fee-structure' => ['feestructure_data'],
        'about-the-clan' => ['abouttheclan_data'],
        'chairman-message' => ['chairmans_data'],
        'principal-message' => ['principal_data'],
        'leadership-team' => ['leadershipteam_data'],
        'management-committee' => ['mc_data'],
        'teachers-details' => ['teacherdetails_data', 'staffteaching_data'],
        'cbse-page' => ['cbsepage_data', 'cbseinformation_data'],
        'cbse-information' => ['cbseinformation_data', 'cbsepage_data'],
        'superhouse-education' => ['superhouse_data'],
        'termsandconditions' => ['terms_and_conditions'],
        'blog' => ['blogData'],
        'academic-achievement' => ['academicachievement_data'],
        'non-academic' => ['nonacademicachievement_data'],
        'school-awards' => ['schoolawards_data'],
        'principal-awards' => ['principalawards_data'],
        'parent-teacher-association' => ['parentteacher_data'],
        'sexual-harassment-committee' => ['sexualharassment_data'],
        'disaster-management-committee' => ['disastermanagement_data'],
        'safe-and-healthy-food-committee' => ['safehealthy_data'],
        'safety-and-security' => ['safesecurity_data'],
        'pocso' => ['pocso_data'],
        'admission-overview' => ['admissionoverview_data'],
        'withdrawal-policy' => ['withdrawalpolicy_data'],
        'group-transfer-policy' => ['grouptransfer_data'],
        'smart-classrooms' => ['smartclassrooms_data'],
        'laboratories' => ['laboratories_data'],
        'other-facilities' => ['otherfacilitie_data'],
        'our-curriculum' => ['ourcurriculum_data'],
        'coding' => ['coding_data'],
        'animation' => ['animation_datas'],
        'financial-literacy' => ['financial_data'],
        'school-clubs' => ['schoolclub_data'],
        'health-and-wellbeing' => ['health_data'],
        'mental-health-wellness' => ['mentalhealth_data'],
        'student-led-programme' => ['studentled_data'],
        'career-guidence-program' => ['careerguidance_data'],
        'senior-junior-library' => ['seniorjunior_data'],
        'house-system' => ['house_data'],
        'general-information' => ['generalinformation_data'],
        'documents-and-information' => ['documentsinformation_data'],
        'results-and-academics' => ['resultsandacademics_data'],
        'staff-teaching' => ['staffteaching_data'],
        'school-infrastructure' => ['schoolinfrastructure_data'],
        'dpss-human-resource-department' => ['dpsshuman_data'],
        'pedagogy' => ['pedagogy_data'],
        'activities' => ['activities_data'],
        'physical-health-fitness-development' => ['physicalhealth_data'],
        'senior-wing-faculty' => ['seniorwing_data'],
        'middle-wing-faculty' => ['middlewing_data'],
        'primary-wing-faculty' => ['primarywing_data'],
        'pre-primary-wing-faculty' => ['Preprimarywing_data'],
        'job-openings' => ['jobs_data'],
        'job-apply' => ['jobs_data'],
        'excellence-in-action' => ['excellence_data'],
        'celebrating-excellence' => ['celebrating_data'],
        'excellence-in-spotlight' => ['spotlight_data'],
        'embark-on-journey' => ['embark_data'],
        'dps-society' => ['society_data'],
        'dps-history' => ['history_data'],
        'school-guidelines' => ['schoolguidelines_data'],
        'debriefing-sessions' => ['debriefing_data'],
        'awards-and-accolades' => ['awards_data'],
    ];

    if (isset($aliasMap[$script])) {
        foreach ($aliasMap[$script] as $k) {
            $priority[] = $k;
        }
    }

    $scriptSlug = str_replace('_', '-', $script);
    foreach ($endpoints as $k => $path) {
        if (stripos($path, '/' . $scriptSlug . '-') !== false || stripos($path, '/' . $scriptSlug) !== false) {
            $priority[] = $k;
        }
    }

    return array_values(array_unique($priority));
}

function fetchMultipleApiData($endpoints)
{
    $baseUrl = "https://dps.allenhouseschools.com/api";
    $cacheDir = __DIR__ . '/cache/api';
    $cacheTtl = defined('DPS_API_CACHE_TTL') ? DPS_API_CACHE_TTL : 60; // 60s freshness (reflects within 1-2 min max)
    $staleMaxAge = $cacheTtl * 2; // 120s max for background endpoints
    $responses = [];
    $pending = [];

    $forceRefreshAll = !empty($_GET['clear_all']) || (isset($_GET['refresh']) && $_GET['refresh'] === 'all');
    $forceRefreshPage = !empty($_GET['refresh']) || !empty($_GET['nocache']) || !empty($_GET['clear_cache']);

    $priorityKeys = dps_get_current_page_endpoint_keys($endpoints);
    $priorityMap = array_fill_keys($priorityKeys, true);

    // Serve fresh cache hits; queue the rest for fetching
    foreach ($endpoints as $key => $endpoint) {
        $cacheFile = $cacheDir . '/' . md5($endpoint) . '.json';
        $isPriority = isset($priorityMap[$key]);
        $effectiveTtl = $isPriority ? $cacheTtl : $staleMaxAge;
        $isForced = $forceRefreshAll || ($isPriority && $forceRefreshPage);

        if (!$isForced && is_file($cacheFile)) {
            $age = time() - (int)@filemtime($cacheFile);
            if ($age < $effectiveTtl) {
                $cached = json_decode(@file_get_contents($cacheFile), true);
                if (json_last_error() === JSON_ERROR_NONE && !empty($cached)) {
                    $responses[$key] = $cached;
                    continue;
                }
            }
        }
        $pending[$key] = $endpoint;
    }

    if (empty($pending)) {
        return $responses;
    }

    // Deduplicate identical endpoints; create one curl handle per unique endpoint
    $endpointKeys = [];
    foreach ($pending as $key => $endpoint) {
        $endpointKeys[$endpoint][] = $key;
    }

    $mh = curl_multi_init();
    $curlHandles = [];
    foreach ($endpointKeys as $endpoint => $keys) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $baseUrl . $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 4);
        curl_setopt($ch, CURLOPT_TIMEOUT, 12);
        curl_setopt($ch, CURLOPT_HTTPHEADER, api_auth_headers());
        curl_multi_add_handle($mh, $ch);
        $curlHandles[$endpoint] = $ch;
    }
    $running = null;
    do {
        $status = curl_multi_exec($mh, $running);
        if ($status > CURLM_OK) {
            break;
        }
        curl_multi_select($mh);
        usleep(10000);
    } while ($running > 0);

    if (!is_dir($cacheDir)) {
        @mkdir($cacheDir, 0755, true);
    }

    // Collect responses, write cache, fall back to stale cache on failure
    foreach ($curlHandles as $endpoint => $ch) {
        $content = curl_multi_getcontent($ch);
        $decoded = json_decode($content, true);
        $cacheFile = $cacheDir . '/' . md5($endpoint) . '.json';

        if (json_last_error() === JSON_ERROR_NONE && !empty($decoded)) {
            $value = $decoded;
            @file_put_contents($cacheFile . '.tmp', $content, LOCK_EX);
            @rename($cacheFile . '.tmp', $cacheFile);
        } elseif (is_file($cacheFile)) {
            $stale = json_decode(@file_get_contents($cacheFile), true);
            $value = (json_last_error() === JSON_ERROR_NONE && !empty($stale)) ? $stale : null;
        } else {
            $value = null;
        }

        foreach ($endpointKeys[$endpoint] as $key) {
            $responses[$key] = $value;
        }
        curl_multi_remove_handle($mh, $ch);
        curl_close($ch);
    }
    curl_multi_close($mh);
    return $responses;
}
$endpoints = [
    'home_data'   => '/pages/home-page-jankipuram',
    'menu_data'   => '/menus/4',
    'statistic_data' => '/statistics/branch/10',
    'flyer_data'   => '/flyers/branch/10',
    'header_footer_data' => '/public/branches/10/layout-parts/',
    'scroll_text_data' => '/scrolling-texts/branch/10',
    'excellence_data' => '/pages/excellence-in-action-page-jankipuram',
    'celebrating_data' => '/pages/celebrating-excellence-page-jankipuram',
    'spotlight_data' => '/pages/excellence-in-the-spotlight-page-jankipuram',
    'embark_data' => '/pages/embark-on-a-journey-of-excellence-page-jankipuram',
    'mv_data' => '/pages/mission-vision-and-core-values-page-jankipuram',
    'society_data' => '/pages/dps-jankipuram-society-page-jankipuram',
    'h_data' => '/pages/dps-gomtinagar-sr-in-news-page-gomtinagar-sr',
    'history_data' => '/pages/dps-jankipuram-history-page-jankipuram',
    'chairmans_data' => '/pages/chairmans-message-page-jankipuram',
    'principal_data' => '/pages/principals-message-page-jankipuram',
    'mc_data' => '/pages/management-committee-page-jankipuram',
    'seniorwing_data' => '/pages/senior-wing-pgt-page-jankipuram',
    'middlewing_data' => '/pages/middle-wing-tgt-page-jankipuram',
    'primarywing_data' => '/pages/primary-wing-prt-page-jankipuram',
    'Preprimarywing_data' => '/pages/pre-primary-wing-pprt-page-jankipuram',
    'physicalhealth_data' => '/pages/physical-health-fitness-development-page-jankipuram',
    'activities_data' => '/pages/activities-page-jankipuram',
    'pedagogy_data' => '/pages/pedagogy-page-jankipuram',
    'facilities_data' => '/pages/facilities-page-jankipuram',
    'smartclassrooms_data' => '/pages/smart-classrooms-page-jankipuram',
    'laboratories_data' => '/pages/laboratories-page-jankipuram',
    'otherfacilitie_data' => '/pages/other-facilities-page-jankipuram',
    'sports_data' => '/pages/sports-page-jankipuram',
    'ourcurriculum_data' => '/pages/our-curriculum-page-jankipuram',
    'abouttheclan_data' => '/pages/about-the-clan-page-jankipuram',
    'animation_datas' => '/pages/animation-page-jankipuram',
    'coding_data' => '/pages/coding-page-jankipuram',
    'olmxi_data' => '/pages/oluxi-smart-skill-page-jankipuram',
    'financial_data' => '/pages/financial-literacy-page-jankipuram',
    'northwest_data' => '/pages/north-west-sports-academy-page-jankipuram',
    'schoolclub_data' => '/pages/school-clubs-page-jankipuram',
    'health_data' => '/pages/health-and-well-being-page-jankipuram',
    'mentalhealth_data' => '/pages/mental-health-and-wellness-page-jankipuram',
    'studentled_data' => '/pages/student-led-programme-page-jankipuram',
    'careerguidance_data' => '/pages/career-guidance-and-counselling-program-page-jankipuram',
    'seniorjunior_data' => '/pages/senior-junior-library-page-jankipuram',
    'house_data' => '/pages/house-system-page-jankipuram',
    'admissionoverview_data' => '/pages/admission-overview-page-jankipuram',
    'feestructure_data' => '/pages/fee-structure-page-jankipuram',
    'withdrawalpolicy_data' => '/pages/withdrawal-policy-page-jankipuram',
    'grouptransfer_data' => '/pages/group-transfer-policy-page-jankipuram',
    'busroute_data' => '/pages/bus-routes-page-jankipuram',
    'academicachievement_data' => '/pages/academic-achievement-page-jankipuram',
    'nonacademicachievement_data' => '/pages/non-academic-achievement-page-jankipuram',
    'schoolawards_data' => '/pages/school-awards-page-jankipuram',
    'principalawards_data' => '/pages/principal-awards-page-jankipuram',
    'ourstory_data' => '/pages/our-story-page-jankipuram',
    'otherinformation_data' => '/pages/other-information-page-jankipuram',
    'parentteacher_data' => '/pages/parent-teacher-association-page-jankipuram',
    'sexualharassment_data' => '/pages/sexual-harassment-committee-page-jankipuram',
    'teacherdetails_data' => '/pages/teacher-details-page-jankipuram',
    'leadershipteam_data' => '/pages/leadership-team-page-jankipuram',
    'generalinformation_data' => '/pages/general-information-page-jankipuram',
    'documentsinformation_data' => '/pages/documents-and-information-page-jankipuram',
    'resultsandacademics_data' => '/pages/results-and-academics-page-jankipuram',
    'staffteaching_data' => '/pages/staff-teaching-page-jankipuram',
    'schoolinfrastructure_data' => '/pages/school-infrastructure-page-jankipuram',
    'dpsshuman_data' => '/pages/dpss-human-resource-department-page-jankipuram',
    'cbsepage_data' => '/pages/cbse-page-jankipuram',
    'superhouse_data' => '/pages/superhouse-education-page-jankipuram',
    'disastermanagement_data' => '/pages/disaster-management-committee-page-jankipuram',
    'safehealthy_data' => '/pages/safe-and-healthy-food-committee-page-jankipuram',
    'safesecurity_data' => '/pages/safety-and-security-page-jankipuram',
    'pocso_data' => '/pages/pocso-page-jankipuram',
    'cbseinformation_data' => '/pages/cbse-information-page-jankipuram',
    'faqs_data' => '/pages/faqs-page-jankipuram',
    'process_____data' => '/accordions/branch/10/filter/id?id=6',
    'x_____data' => '/accordions/branch/10/filter/id?id=10',
    'xii_____data' => '/accordions/branch/10/filter/id?id=17',
    // 'process_____data' => '/accordions/branch/10',
    // 'x_____data' => '/accordions/branch/10',
    // 'xii_____data' => '/accordions/branch/10',
    'oluxi_data' => '/pages/oluxi-smart-skill-page-jankipuram',
    'dps_data' => '/pages/dps-in-news-page-jankipuram',
    'magazine_data' => '/pages/magazine-and-news-letter-page-jankipuram',
    'video_data' => '/pages/video-gallery-page-jankipuram',
    'photo_data' => '/pages/photo-gallery-page-jankipuram',
    'awards_data' => '/pages/awards-and-accolades-page-jankipuram',
    'debriefing_data' => '/pages/debriefing-sessions-page-jankipuram',
    'schoolguidelines_data' => '/pages/school-guidelines-page-jankipuram',
    'footer_link_data' => '/public/link-groups/position/footer/hierarchical?branch_id=10',
    'contact_data' => '/pages/contact-us-page-jankipuram',
    'photo_gallery_data' => '/galleries/type/gallery/branch/10',
    'achievement_data' => '/galleries/type/achievements/branch/10',
    'jobs_data' => '/jobs/branch/10',
    'process_data' => '/pages/process-page-jankipuram',
     'bus_routes_data' => '/pages/bus-routes-page-jankipuram',
    'route_data' => '/get-bus-routes/10',
    'blogData' => '/blogs/branch/10',
    'testimonial_data' => '/pages/testimonials-page-jankipuram',
    'terms_and_conditions' => '/pages/terms-and-conditions-page-jankipuram'
];

$data = fetchMultipleApiData($endpoints);

$home_data   = $data['home_data'];
$menu_data   = $data['menu_data'];
$statistic_data = $data['statistic_data'];
$flyer_data = $data['flyer_data'];
$header_footer_data = $data['header_footer_data'];
$scroll_text_data = $data['scroll_text_data'];
$excellence_data   = $data['excellence_data'];
$celebrating_data   = $data['celebrating_data'];
$spotlight_data   = $data['spotlight_data'];
$embark_data   = $data['embark_data'];
$mv_data   = $data['mv_data'];
$h_data = $data['h_data'];
$history_data = $data['history_data'];
$society_data = $data['society_data'];
$chairmans_data = $data['chairmans_data'];
$principal_data = $data['principal_data'];
$seniorwing_data = $data['seniorwing_data'];
$middlewing_data = $data['middlewing_data'];
$primarywing_data = $data['primarywing_data'];
$Preprimarywing_data = $data['Preprimarywing_data'];
$physicalhealth_data = $data['physicalhealth_data'];
$activities_data = $data['activities_data'];
$pedagogy_data = $data['pedagogy_data'];
$facilities_data = $data['facilities_data'];
$smartclassrooms_data = $data['smartclassrooms_data'];
$laboratories_data = $data['laboratories_data'];
$otherfacilitie_data = $data['otherfacilitie_data'];
$sports_data = $data['sports_data'];
$ourcurriculum_data = $data['ourcurriculum_data'];
$abouttheclan_data = $data['abouttheclan_data'];
$animation_datas = $data['animation_datas'];
$coding_data = $data['coding_data'];
$oluxi_data = $data['oluxi_data'];
$financial_data = $data['financial_data'];
$northwest_data = $data['northwest_data'];
$schoolclub_data = $data['schoolclub_data'];
$health_data = $data['health_data'];
$mentalhealth_data = $data['mentalhealth_data'];
$studentled_data = $data['studentled_data'];
$careerguidance_data = $data['careerguidance_data'];
$seniorjunior_data = $data['seniorjunior_data'];
$house_data = $data['house_data'];
$admissionoverview_data = $data['admissionoverview_data'];
$feestructure_data = $data['feestructure_data'];
$withdrawalpolicy_data = $data['withdrawalpolicy_data'];
$grouptransfer_data = $data['grouptransfer_data'];
$busroute_data = $data['busroute_data'];
$academicachievement_data = $data['academicachievement_data'];
$nonacademicachievement_data = $data['nonacademicachievement_data'];
$schoolawards_data = $data['schoolawards_data'];
$principalawards_data = $data['principalawards_data'];
$ourstory_data = $data['ourstory_data'];
$mc_data = $data['mc_data'];
$otherinformation_data = $data['otherinformation_data'];
$parentteacher_data = $data['parentteacher_data'];
$sexualharassment_data = $data['sexualharassment_data'];
$teacherdetails_data = $data['teacherdetails_data'];
$leadershipteam_data = $data['leadershipteam_data'];
$generalinformation_data = $data['generalinformation_data'];
$documentsinformation_data = $data['documentsinformation_data'];
$resultsandacademics_data = $data['resultsandacademics_data'];
$staffteaching_data = $data['staffteaching_data'];
$schoolinfrastructure_data = $data['schoolinfrastructure_data'];
$cbsepage_data = $data['cbsepage_data'];
$superhouse_data = $data['superhouse_data'];
$disastermanagement_data = $data['disastermanagement_data'];
$safehealthy_data = $data['safehealthy_data'];
$safesecurity_data = $data['safesecurity_data'];
$pocso_data = $data['pocso_data'];
$cbseinformation_data = $data['cbseinformation_data'];
$faqs_data = $data['faqs_data'];
$process_____data = $data['process_____data'];
$x_____data = $data['x_____data'];
$xii_____data = $data['xii_____data'];
$dps_data = $data['dps_data'];
$magazine_data = $data['magazine_data'];
$video_data = $data['video_data'];
$photo_data = $data['photo_data'];
$awards_data = $data['awards_data'];
$debriefing_data = $data['debriefing_data'];
$dpsshuman_data = $data['dpsshuman_data'];
$schoolguidelines_data = $data['schoolguidelines_data'];
$footer_link_data = $data['footer_link_data'];
$contact_data = $data['contact_data'];
$photo_gallery_data = $data['photo_gallery_data'];
$achievement_data = $data['achievement_data'];
$jobs_data = $data['jobs_data'];
$process_data = $data['process_data'];
$bus_routes_data = $data['bus_routes_data'];
$route_data = $data['route_data'];
$blogData = $data['blogData'];
$testimonial_data = $data['testimonial_data'];
$terms_and_conditions = $data['terms_and_conditions'];

require_once __DIR__ . '/alt-helper.php';