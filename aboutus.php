<?php require_once('./php/info.php'); ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="<?=$base_url?>/img/chirag.ico">

    <title>Watch anime online - <?=$website_name?></title>

    <meta name="robots" content="index, follow" />
    <meta name="description"
        content="Watch anime online in English. You can watch free series and movies online and English subtitle.">
    <meta name="keywords"
        content="watch anime, anime online, free anime, english anime, sites to watch anime">
    <meta itemprop="image" content="<?=$base_url?>/img/genkai.gif" />

    <meta property="og:site_name" content="<?=$website_name?>" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?=$website_name?> | Watch anime online, English anime online HD" />
    <meta property="og:description"
        content="Watch anime online in English. You can watch free series and movies online and English subtitle.">
    <meta property="og:url" content="" />
    <meta property="og:image" content="<?=$base_url?>/img/genkai.gif" />
    <meta property="og:image:secure_url" content="<?=$base_url?>/img/genkai.gif" />

    <meta property="twitter:card" content="summary" />
    <meta property="twitter:title" content="<?=$website_name?> | Watch anime online, English anime online HD" />
    <meta property="twitter:description"
        content="Watch anime online in English. You can watch free series and movies online and English subtitle." />

    <link rel="canonical" href="<?=$base_url?>" />
    <link rel="alternate" hreflang="en-us" href="<?=$base_url?>" />



    <link rel="stylesheet" type="text/css" href="<?=$base_url?>/css/style.css" />

    <script type="text/javascript" src="<?=$base_url?>/js/libraries/jquery.js"></script>
    <script>
        var base_url = 'http://' + document.domain + '/';
        var base_url_cdn_api = 'https://ajax.gogocdn.net/';
        var api_anclytic = 'https://ajax.gogocdn.net/anclytic-ajax.html';
    </script>
    <script type="text/javascript" src="https://cdn.gogocdn.net/files/gogo/js/main.js"></script>

    <?php require_once('./php/advertisments/popup.html'); ?>
    
</head>

  <body>
    <div class="clr"></div>
    <div id="wrapper_inside">
      <div id="wrapper">
        <div id="wrapper_bg">
          <header>
  <div class="menu_top_link">

    <div class="link_face intro">
      <a class="btn twitter" href="https://x.com/chiragS43352?t=J2IlRqQmXXvLd6uTmm9NKQ&s=08 " target="_blank" data-url=""></a>
      <a class="btn reddit" href="https://www.reddit.com/r/AroundAnimeTV/" target="_blank" data-url=""></a>
      <a class="btn facebook" href="https://www.facebook.com/profile.php?id=100044321028365" target="_blank"></a>
      <a class="btn discord" style="margin-right:5px;" href="https://discord.com/invite/ZENSpKrpja" target="_blank" data-url=""></a>
      <a class="btn telegram" style="margin-right:5px;" href="https://t.me/chirag_s01" target="_blank" data-url=""></a>
    </div>
                    
    <div class="submenu_intro">
	 
      <a href="/contact-us.html">Contact us</a>
      <span>|</span>
     
    </div>          
  </div>
  <div class="clr"></div>

  <!-- banner -->
  <section class="headnav">
    <div style="text-align:center;margin-bottom:20px;">
      <a href="/home"><img src="<?=$base_url?>/img/genkai.gif" class="l-download" alt="animeverse - Watch Anime Online" /></a>
    </div>
    <div style="width:100%;font-family: Tahoma, Geneva, sans-serif;font-size: 14px;text-transform: uppercase;text-align:center;">
      <!-- menu top -->
      <nav>
        <ul>
          <li style="display:inline-block;margin:0px 18px;">
            <a style="display: block;color: #97E7E1;padding: 0 0 14px 0px;transition: all 0s linear 0s;webkit-transition: all 0s linear 0s;moz-transition: all 0s linear 0s;o-transition: all 0s linear 0s;" href="/home" title="Home" class="home">Home</a>
          </li>
          <li style="display:inline-block;margin:0px 18px;">
            <a style="display: block;color: #97E7E1;padding: 0 0 14px 0px;transition: all 0s linear 0s;webkit-transition: all 0s linear 0s;moz-transition: all 0s linear 0s;o-transition: all 0s linear 0s;" href="/anime-list" title="Anime list" class="list">Anime list</a>
          </li>
          <li style="display:inline-block;margin:0px 18px;">
            <a style="display: block;color: #97E7E1;padding: 0 0 14px 0px;transition: all 0s linear 0s;webkit-transition: all 0s linear 0s;moz-transition: all 0s linear 0s;o-transition: all 0s linear 0s;" href="/new-season" title="New season" class="series">New season</a>
          </li>
          <li style="display:inline-block;margin:0px 18px;">
            <a style="display: block;color: #97E7E1;padding: 0 0 14px 0px;transition: all 0s linear 0s;webkit-transition: all 0s linear 0s;moz-transition: all 0s linear 0s;o-transition: all 0s linear 0s;" href="/anime-movies" title="Movies" class="movie">Movies</a>
          </li>
          <li style="display:inline-block;margin:0px 18px;">
            <a style="display: block;color: #97E7E1;padding: 0 0 14px 0px;transition: all 0s linear 0s;webkit-transition: all 0s linear 0s;moz-transition: all 0s linear 0s;o-transition: all 0s linear 0s;" href="/popular" title="Popular" class="popular">Popular</a>
          </li>
        </ul>	
      </nav>
      <!-- /menu top -->
    </div>
    <div class="form" style="padding-bottom:20px;width:100%;">
        <form style="max-width:600px;margin:0 auto;position:relative;text-align:left;" onsubmit="" id="search-form" action="<?=$base_url?>/search" method="get">
          <div class="row">
            <input placeholder="search" name="keyword" id="keyword" type="text" value="" autocomplete="off">            
            <input class="btngui" value="" type="button" name="" onclick="do_search();">
            <input id="key_pres" name="key_pres" value="" type="hidden" />
            <input id="link_alias" name="link_alias" value="" type="hidden" />
            <input id="keyword_search_replace" name="keyword_search_replace" value="" type="hidden" />
          </div>
          <div class="hide_search hide"><i class="icongec-muiten"></i></div>
          <div id="header_search_autocomplete"></div>
          <div class="loader"></div>
        </form>           
        <div class="clr"></div>
        <div class="search-iph"><a href="javascript:void(0)"><i class="icongec-search-mb"></i></a></div>
      </div>
  </section>
  <!-- /banner -->
</header>


<div class="main_body">
    <div style="color:#97E7E1;padding:18px;">
	  <h1 style="text-transform:uppercase;font-size:20px;"><?=$website_name?> - Best site to watch anime online for FREE.</h1>
      <p>When we create animeverse, we hope for anime fans to have a free anime streaming site with good design and easy to use. </p>
	  <h6 style="font-size:18px;">What's <?=$website_name?>?</h6>
	  <p><?=$website_name?> is a completely free streaming site for users to watch or download anime in HD quality with English subtitles or dubbing. </p>
	  <h6 style="font-size:18px;>Is <?=$website_name?> safe?</h6>
	  <p>Absolutely! We make changes to improve user experience. <?=$website_name?> is completely safe. If you find any ads that are suspicious, please forward us the information and we will remove it. Hope you will understand that the advertising is needed to maintain the site.</p>
	  <h6 style="font-size:18px;>Why should I choose <?=$website_name?> ?</h6>
	  <p>Streaming experience: fast loading and easy to download. We have all the top line streaming servers for you to choose.</p>
	  <p>Content library: We have all the anime here, from old anime to the new one. You can find all the genres you like such as action; drama; fiction; mystery,... You can also request your favorite animes.</p>
	  <p>Update: Vast content and updating hourly is always a strong point of animeverse as well as <?=$website_name?>.</p>
	  <p>Quality/Resolution: We provide high-quality anime in multiple resolutions and allow users to choose the one that suits their preferences and device capabilities</p>
	  <p>Customer care: Users can always contact us for help or query by clicking on contact us .</p>
	  <p>Device compatibility: <?=$website_name?> work well on both desktop and mobile devices. Fell free to enjoy your favorite anime on any device you want.</p>
	  <p>Therefore, if you are looking for a great and safe website to watch anime for free.  try <?=$website_name?>. </p>
	  
    </div>
  </div>

  <div style="text-align:center;margin:20px 0;">
    <a href="<?=$base_url?>/home" style="background:#000;color:#97E7E1;font-size:18px;border:1px solid #97E7E1;padding:10px 25px;border-radius:20px;">GO TO HOMEPAGE</a>
  </div>
                                                
     
          <div class="clr"></div>
<footer>
  <div class="menu_bottom">

  

  </div>
  <div class="croll">
    <div class="big"><i class="icongec-backtop"></i></div>
    <div class="small"><i class="icongec-backtop_mb"></i></div>
  </div>
</footer>
        </div>
      </div>
    </div>
    <div id="off_light"></div>
    <div class="clr"></div>
    <div class="mask"></div>
    <script type="text/javascript" src="<?=$base_url?>/js/files/combo.js"></script>
    <script type="text/javascript" src="<?=$base_url?>/js/files/video.js"></script>
    <script type="text/javascript" src="<?=$base_url?>/js/files/jquery.tinyscrollbar.min.js"></script>
    <?php include('./php/include/footer.php')?>  
    <script>
      if(document.getElementById('scrollbar2')){
        $('#scrollbar2').tinyscrollbar();
      }
    </script>
  </body>
</html>