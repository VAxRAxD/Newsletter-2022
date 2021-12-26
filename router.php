<?php
$requested_page = $_GET["page"];
switch($requested_page){
    case "timeline": header("location: index.php");
                    break;
    case "alumni_speak": header("location: Alumni_Speak.php");
                    break;
    case "editor": header("location: editor.php");
                    break;
    case "events": header("location: events.php");
                    break;
    case "foreword": header("location: foreword.php");
                    break;
    case "mentor": header("location: mentor.php");
                    break;
    case "mini_stories": header("location: mini_stories.php");
                    break;
    case "spotlight": header("location: spotlight.php");
                    break;
    case "credits": header("location: credits.php");
                    break;
}
?>