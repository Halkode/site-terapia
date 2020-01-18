<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style/estilo.css">
  <link rel="stylesheet" type="text/css" href="style/pagina.css">
  <link rel="stylesheet" type="text/css" href="style/icons.css">
  <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  <link href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery-2.1.0.min.js" type="text/javascript"></script>
  <title>Claudia Girassol</title>
</head>
<body id="colunaComImagem">
  <div id="app">
    <header class="header">
 
<nav class="nav-bar">
    <div class="nav-container"> 
        <a id="nav-menu" class="nav-menu">☰ Menu</a>
        <ul class="nav-list " id="nav">
            <li> <a href="index.php" id="tile1"><i class="icon ion-ios7-home-outline"></i> Home</a></li>
            <li> <a href="sobremim.php" id="tile2"><i class="icon ion-ios7-person-outline"></i>Sobre mim</a></li>
            <li> <a href="#" id="tile3"><i class="icon ion-ios7-briefcase-outline"></i> Portfolio</a></li>
            <li> <a href="#" id="tile4"><i class="ion-ios7-monitor-outline"></i> Services</a></li>
            <li> <a href="#" id="tile5"><i class="ion-ios7-people-outline"></i> Clients</a></li>
            <li> <a href="#" id="tile6"><i class="ion-bag"></i> Order</a></li>
            <li> <a href="#" id="tile7"><i class="ion-ios7-paper-outline"></i> Blog</a></li>
            <li> <a href="#" id="tile8"><i class="ion-ios7-email-outline"></i> Contact</a></li>
        </ul>
    </div>
</nav>
<div >
  <div id="tabs" class="container">
      <div class="content">
        <div v-if="activetab === 1" class="tabcontent">
         <div> 
          <p><h1>Apresentação</h1></p>
          <p>Bem-vindo, este site foi criado para apresentar a você os tratamentos que fazemos</p>
          <table border="2">
            <tr>
              <td>
                <img src="images/floral2.jpg" height="300" width="300">]
              </td>
              <td>
                <img src="images/girasol.jpg" height="300" width="300">
              </td>
              <td>
                <img src="images/floral3.jpeg" height="300" width="300">
              </td>
            </tr>

          </table>
          
          <br>
          <br>
          <br>

        </div>
      </div>
    </div>
  </div>
<div>
  <main class="main">
    <p class="main__subtitle">@TODOS OS DIREITOS RESERVADOS</p>
    <div class="main__social">

      <a href="https://facebook.com/rafael.pereirapires" class="main__link" target="_blank" rel="noopener">
        <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 0 112.196 112.196" width="35" height="35" role="img" >

        <circle style="fill:#3B5998;" cx="56.098" cy="56.098" r="56.098"/>
        <path style="fill:#FFFFFF;" d="M70.201,58.294h-10.01v36.672H45.025V58.294h-7.213V45.406h7.213v-8.34
        c0-5.964,2.833-15.303,15.301-15.303L71.56,21.81v12.51h-8.151c-1.337,0-3.217,0.668-3.217,3.513v7.585h11.334L70.201,58.294z"/>

      </svg>
    </a>
    <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5551997878734" class="main__link" target="_blank" rel="noopener">
      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      viewBox="0 0 512 512" width="35" height="35" role="img">

      <path style="fill:#4CAF50;" d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104
      l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z"/>
      <path style="fill:#FAFAFA;" d="M405.024,361.504c-6.176,17.44-30.688,31.904-50.24,36.128c-13.376,2.848-30.848,5.12-89.664-19.264
      C189.888,347.2,141.44,270.752,137.664,265.792c-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624,26.176-62.304
      c6.176-6.304,16.384-9.184,26.176-9.184c3.168,0,6.016,0.16,8.576,0.288c7.52,0.32,11.296,0.768,16.256,12.64
      c6.176,14.88,21.216,51.616,23.008,55.392c1.824,3.776,3.648,8.896,1.088,13.856c-2.4,5.12-4.512,7.392-8.288,11.744
      c-3.776,4.352-7.36,7.68-11.136,12.352c-3.456,4.064-7.36,8.416-3.008,15.936c4.352,7.36,19.392,31.904,41.536,51.616
      c28.576,25.44,51.744,33.568,60.032,37.024c6.176,2.56,13.536,1.952,18.048-2.848c5.728-6.176,12.8-16.416,20-26.496
      c5.12-7.232,11.584-8.128,18.368-5.568c6.912,2.4,43.488,20.48,51.008,24.224c7.52,3.776,12.48,5.568,14.304,8.736
      C411.2,329.152,411.2,344.032,405.024,361.504z"/> 
    </svg>
  </a>
  <a class="button--svg" href="https://www.instagram.com/rafael_pereira_pires/" target="_blank">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    viewBox="0 0 551.034 551.034"  width="35" height="35" role="img">
    <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="275.517" y1="4.57" x2="275.517" y2="549.72" gradientTransform="matrix(1 0 0 -1 0 554)">
      <stop  offset="0" style="stop-color:#E09B3D"/>
      <stop  offset="0.3" style="stop-color:#C74C4D"/>
      <stop  offset="0.6" style="stop-color:#C21975"/>
      <stop  offset="1" style="stop-color:#7024C4"/>
    </linearGradient>
    <path style="fill:url(#SVGID_1_);" d="M386.878,0H164.156C73.64,0,0,73.64,0,164.156v222.722
    c0,90.516,73.64,164.156,164.156,164.156h222.722c90.516,0,164.156-73.64,164.156-164.156V164.156
    C551.033,73.64,477.393,0,386.878,0z M495.6,386.878c0,60.045-48.677,108.722-108.722,108.722H164.156
    c-60.045,0-108.722-48.677-108.722-108.722V164.156c0-60.046,48.677-108.722,108.722-108.722h222.722
    c60.045,0,108.722,48.676,108.722,108.722L495.6,386.878L495.6,386.878z"/>

    <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="275.517" y1="4.57" x2="275.517" y2="549.72" gradientTransform="matrix(1 0 0 -1 0 554)">
      <stop  offset="0" style="stop-color:#E09B3D"/>
      <stop  offset="0.3" style="stop-color:#C74C4D"/>
      <stop  offset="0.6" style="stop-color:#C21975"/>
      <stop  offset="1" style="stop-color:#7024C4"/>
    </linearGradient>
    <path style="fill:url(#SVGID_2_);" d="M275.517,133C196.933,133,133,196.933,133,275.516s63.933,142.517,142.517,142.517
    S418.034,354.1,418.034,275.516S354.101,133,275.517,133z M275.517,362.6c-48.095,0-87.083-38.988-87.083-87.083
    s38.989-87.083,87.083-87.083c48.095,0,87.083,38.988,87.083,87.083C362.6,323.611,323.611,362.6,275.517,362.6z"/>
    <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="418.31" y1="4.57" x2="418.31" y2="549.72" gradientTransform="matrix(1 0 0 -1 0 554)">
      <stop  offset="0" style="stop-color:#E09B3D"/>
      <stop  offset="0.3" style="stop-color:#C74C4D"/>
      <stop  offset="0.6" style="stop-color:#C21975"/>
      <stop  offset="1" style="stop-color:#7024C4"/>
    </linearGradient>
    <circle style="fill:url(#SVGID_3_);" cx="418.31" cy="134.07" r="34.15"/>
  </svg>
</a>
</div>
</main>
</div>  
<script src="./node_modules/vue/dist/vue.min.js"></script>
<script src="./vue/main.js"></script>
<script src="./vue/navbar.js"></script>
<script src="./vue/nav.js"></script>
</body>
</html>