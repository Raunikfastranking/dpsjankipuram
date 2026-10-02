<?php
require_once dirname(__DIR__) . '/proxy/config.php';

$api_url = "https://dps.allenhouseschools.com";

if (!defined('DPS_JANKIPURAM_GALLERY_BRANCH_ID')) {
    define('DPS_JANKIPURAM_GALLERY_BRANCH_ID', DPS_JANKIPURAM_BRANCH_ID);
}

function fetchMultipleApiData($endpoints)
{
    $baseUrl = "https://dps.allenhouseschools.com/api";
    $mh = curl_multi_init();
    $curlHandles = [];
    $responses = [];
    // Create all curl handles
    foreach ($endpoints as $key => $endpoint) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $baseUrl . $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // disable SSL check if needed
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, api_auth_headers());
        curl_multi_add_handle($mh, $ch);
        $curlHandles[$key] = $ch;
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

    // Collect responses
    foreach ($curlHandles as $key => $ch) {
        $content = curl_multi_getcontent($ch);
        $responses[$key] = json_decode($content, true);
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