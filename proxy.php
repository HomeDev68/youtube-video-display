<?php

function getVideoInfo($videoId) {
    $url = "https://www.youtube.com/get_video_info?video_id=" . $videoId;
    $videoInfo = file_get_contents($url);
    parse_str($videoInfo, $infoArray);
    return $infoArray;
}

function getBestQualityUrl($streamMap) {
    $streams = explode(',', $streamMap);
    $bestQualityUrl = '';
    foreach ($streams as $stream) {
        parse_str($stream, $streamInfo);
        if (strpos($streamInfo['type'], 'video/mp4') !== false) {
            $bestQualityUrl = $streamInfo['url'];
            break;
        }
    }
    return $bestQualityUrl;
}

$videoUrl = urldecode($_GET["url"]);
parse_str(parse_url($videoUrl, PHP_URL_QUERY), $queryParams);
$videoId = $queryParams['v'];

$videoInfo = getVideoInfo($videoId);
$streamMap = $videoInfo['url_encoded_fmt_stream_map'];
$bestQualityUrl = getBestQualityUrl($streamMap);

header("Content-Type: video/mp4");
readfile($bestQualityUrl);

?>
