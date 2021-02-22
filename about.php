<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masayoshi Itou</title>
    <meta name="description" content="web designer Masayoshi ItouのWebサイトです。">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <link rel="stylesheet" href="./css/style.css">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/7bb7032217.js" crossorigin="anonymous"></script>

</head>

<body>
    
    
   <header class="header">
      <div class="header-box">
       <div class="page-title">
        <h2>About</h2>
       </div>
       
       <!-- SPナビゲーション -->
       
       <div id="nav-button" class="nav-button"><i class="fas fa-bars" aria-label="menu"></i></div>
       
        <nav class="sp-nav">
            <ul class="sp-nav-list">
                <li><a href="index.html">Top</a></li>
                <li><a href="works.html">Works</a></li>
                <li><a href="hobby.html"><span>Hobby</span></a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
         </nav>
         </div>
         
         <!-- PCナビゲーション -->
        <nav class="pc-nav">
            <ul class="pc-nav-list">
                <li><a href="index.html">Top</a></li>
                <li><a href="works.html">Works</a></li>
                <li><a href="hobby.html"><span>Hobby</span></a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
            
            
   </header>
   
   <main class="about-main">
       <div class="about-box">
         <div class="profile-photo">
           <img src="./images/photo/photo.jpg" alt="プロフィール写真" class="profile-icon">
         </div>
       
         <div class="about-text">
           <h2>略歴</h2>
           <p>1977年生まれ。栃木県出身。<br>大学卒業後、派遣社員、ビル管理員等を経て、現在は埼玉県にて製造業の会社で勤務。<br>その傍ら、webプログラミングに興味を持ち、
              techacademyにてプログラミングを学ぶ。</p>
           <h2 class="skill">Skill</h2>
           <p>HTML、CSS。また、Wordpressを今後学習予定。</p>
         </div>
        </div>
       
   </main>
   
   <?php include './parts/footer.php'; ?>
   
   <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./js/hamburger.js"></script>
   
</body>


</html>