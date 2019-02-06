<?
$username = '####WAHYU ARIF P####'; // MASUKKAN USERNAME
$password = '####WAHYU ARIF P####'; // MASUKKAN PASSWORD

$photoFilename = "rand.jpg";

$debug = false;
$truncatedDebug = true;

// EDIT CAPTION DISINI!

function randCaption($rand)
{
    switch ($rand) {
        case '1':$name = "The best photo that has a beauty that has no limits #awesome #amazing #world #culture #photography #dailycapture #photographydaily";
            break;
        case '2':$name = "Amazing beauty in my opinion, very beautiful #agameoftones #ig_masterpiece #ig_exquisite #ig_shotz #global_hotshotz #superhubs #main_vision #master_shots #exclusive_shots #hubs_united #jaw_dropping_shotz #worldshotz #theworldshotz #pixel_ig #photographyislifee #photographyislife #photographysouls #photographyeveryday #photographylover #worldbestgram #iglobal_photographers #ig_great_pics #ig_myshot #shotwithlove #justgoshoot #xposuremag #icatching #collectivelycreate #wanderlust #heatercentral #highsnobiety #shotzdelight";
            break;
        case '3':$name = "It's really beautiful, no one can match #portraits #portrait #portraits_ig #pixel_ig #portraiture #expofilm3k #portrait_perfection #portraitstyles_gf #snowisblack #portraits_universe #featurepalette #bleachmyfilm #portraitmood #featurepalette  #rsa_portraits #makeportraits #profile_vision #top_portraits #life_portraits #postthepeople #quietthechaos #2instagood #way2ill #justgoshoot #artofvisuals #l0tsabraids #ftwotw #igPodium_portraits #ftmedd";
            break;
        case '4':$name = "Nothing can match this beauty, so beautiful #landscapephotography #landscapelover #landscape_captures #landscapes #landscape_photography #pixel_ig #landscape_hunter #landscape_lovers #landscapecaptures #landscapestyles_gf #landscape_specialist";
            break;
        case '5':$name = "The most beautiful I've ever seen before, is amazing #landscapeporn #getlost #landscapephotomag #ig_landscape #trapping_tones #ig_masterpiece #ig_podium #splendid_earth #gramslayers #agameoftones #optoutside #discoverearth #exploretheglobe #nakedplanet";
            break;
    }return $name;
}

// EDIT URL GAMBAR DISINI!
function randImageURL($rand)
{
    switch ($rand) {
        case '1':$name = "https://source.unsplash.com/random";
            break;
        case '2':$name = "https://source.unsplash.com/user/sweeticecreamwedding";
            break;
        case '3':$name = "https://source.unsplash.com/user/anitaaustvika";
            break;
        case '4':$name = "https://source.unsplash.com/user/chuttersnap";
            break;
        case '5':$name = "https://source.unsplash.com/user/cjred";
            break;
    }return $name;
}