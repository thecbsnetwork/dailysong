<?php 
//daily grind assignment Daily Song

//overall conditions
$theTime = date('G');
$theDay = date('l');

//greeting
if ($theTime >= 18)
{
    $greeting = 'Good evening! Need something to wind down your day with?';
}
elseif ($theTime < 12) 
{
    $greeting = 'Good morning! Looking for a killer way to start your day?';
}
    elseif ($theTime < 18) 
{
    $greeting = 'Good afternoon! Need that extra push to get you through?';
}

//daily items incl bg_color
switch($theDay)
{
    case 'Monday':
        $title = "Monday's Song";
        $dailySong = "'Fire Island, AK' by The Long Winters";
        $dailyPic = "longwinters.jpg";
        $dailyAlt = "John Roderick of The Long Winters";
        $dailyListen = "https://www.youtube.com/watch?v=WQCcSeEZ_R0";
        $bg_color = "#2F2B27";
        $dailyLyric = "Monday, Monday. Can’t trust that day.";
    break;
        
    case 'Tuesday':
        $title = "Tuesday's Song";
        $dailySong = "'North American Scum' by LCD Soundsystem";
        $dailyPic = "lcdsoundsystem.jpg";
        $dailyAlt = "James Murphy of LCD Soundsystem";
        $dailyListen = "https://www.youtube.com/watch?v=gJ2np7R-Uwg";
        $bg_color = "#684944";
        $dailyLyric = "Give me your heart and I'll love you till Tuesday.";
    break;
        
    case 'Wednesday':
        $title = "Wednesday's Song";
        $dailySong = "'I Won't Back Down' by Tom Petty and the Heartbreakers";
        $dailyPic = "tompetty.jpg";
        $dailyAlt = "Tom Petty and the Heartbreakers";
        $dailyListen = "https://www.youtube.com/watch?v=nvlTJrNJ5lA";
        $bg_color = "#5C4C3D";
        $dailyLyric = "Wednesday evening we didn’t talk at all.";
    break;
        
    case 'Thursday':
        $title = "Thursday's Song";
        $dailySong = "'It's Only Love' by the Beatles";
        $dailyPic = "beatles.jpg";
        $dailyAlt = "The Beatles in the movie Help";
        $dailyListen = "https://www.youtube.com/watch?v=TLvcXs_4QjM";
        $bg_color = "#5A5D51";
        $dailyLyric = "It's Thursday night, let's get it right.";
    break;
        
    case 'Friday':
        $title = "Friday's Song";
        $dailySong = "'Sexy Boy' by Air";
        $dailyPic = "air.jpg";
        $dailyAlt = "Air the French Band";
        $dailyListen = "https://www.youtube.com/watch?v=wouKI_myXxk";
        $bg_color = "#2D7096";
        $dailyLyric = "Gotta get down on Friday.";
    break;
        
    case 'Saturday':
        $title = "Saturday's Song";
        $dailySong = "'Bring Me Your Loves' by St. Vincent";
        $dailyPic = "stvincent.jpg";
        $dailyAlt = "St Vincent on the Digital Witness Tour";
        $dailyListen = "https://www.youtube.com/watch?v=ECbjQIqb-BY";
        $bg_color = "#14045F";
        $dailyLyric = "It's Saturday, the evening’s come.";
    break;
        
    case 'Sunday':
        $title = "Sunday's Song";
        $dailySong = "'Sunday Morning' by Velvet Underground and Nico";
        $dailyPic = "velvetunderground.jpg";
        $dailyAlt = "Velvet Underground and Nico";
        $dailyListen = "https://www.youtube.com/watch?v=3qK82JvRY5s";
        $bg_color = "#898675";
        $dailyLyric = "Sunday morning, rain is falling.";
    break;     
}
?>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?=$title?></title>
        <meta name="robots" content="noindex,nofollow" />
        <meta name="viewport" content="width=device-width" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates" rel="stylesheet">
        <link rel="stylesheet" href="css/dailysong.css">
    </head>
    <body>
        <!--start left column-->
        <div class="left">
           <img src="dsimg/<?=$dailyPic?>" alt="<?=$dailyAlt?>" class="band"/>
        
            <h2><strong>Today is <?=$theDay?></strong>.</h2> <p>On <?=$theDay?>s we listen to <strong><?=$dailySong?></strong></p>
        <p><a href="<?=$dailyListen?>" style="background-color:<?=$bg_color?>" target="_blank">Listen to the song on YouTube</a></p>
        </div>
        <!--end left column-->
        <!--start right column-->
        <div class="right">
             <div class="title" style="background-color:<?=$bg_color?>"><h1>Daily Song</h1>
                <h2><?=$greeting?></h2></div>
            <p><strong><?=$dailyLyric?> </strong>Lorem ipsum dolor amet fam taiyaki tbh paleo swag, mumblecore coloring book banh mi. Literally chartreuse tote bag, etsy sriracha mixtape hoodie. Mixtape heirloom banjo put a bird on it vape butcher shaman subway tile lumbersexual slow-carb bitters. Vegan small batch raw denim whatever +1 kitsch DIY knausgaard. Tbh brunch cronut, snackwave cloud bread cred green juice aesthetic kinfolk gluten-free prism hella paleo chillwave. Vape portland williamsburg pabst taiyaki mixtape chicharrones PBR, tofu cronut viral flexitarian.</p>
            <p>Hashtag 90's meggings hella. Brunch cornhole tbh austin, raw denim distillery VHS edison bulb small batch heirloom seitan. Messenger bag air plant yuccie austin selvage chicharrones. Kale chips organic chambray chia. Marfa raclette brunch sustainable keytar everyday carry deep v slow-carb.</p>
            <p>Intelligentsia cred XOXO, vape direct trade polaroid DIY cray PBR keffiyeh normcore tattooed lumbersexual occupy skateboard. Raw denim disrupt pug celiac fixie, bitters schlitz crucifix. Live-edge typewriter echo park master cleanse cred artisan. Chillwave live-edge portland retro artisan, whatever slow-carb cred vexillologist art party intelligentsia semiotics synth VHS. Succulents lyft knausgaard, letterpress flannel ennui farm-to-table brooklyn. Bespoke adaptogen small batch migas tousled, banjo swag kogi microdosing poke pickled synth cardigan blog.</p>
        </div>
        <!--end right column-->
    </body>
</html>