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
            <li> <a href="sobremim.php" id="tile2"><i class="icon ion-ios7-person-outline"></i> About</a></li>
            <li> <a href="#" id="tile3"><i class="icon ion-ios7-briefcase-outline"></i> Portfolio</a></li>
            <li> <a href="#" id="tile4"><i class="ion-ios7-monitor-outline"></i> Services</a></li>
            <li> <a href="#" id="tile5"><i class="ion-ios7-people-outline"></i> Clients</a></li>
            <li> <a href="#" id="tile6"><i class="ion-bag"></i> Order</a></li>
            <li> <a href="#" id="tile7"><i class="ion-ios7-paper-outline"></i> Blog</a></li>
            <li> <a href="#" id="tile8"><i class="ion-ios7-email-outline"></i> Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
  </div>
  <div >
    <div id="tabs" class="container">
      <div class="tabs">
        <a v-on:click="activetab=1" v-bind:class="[ activetab === 1 ? 'active' : '' ]">
          <svg id="Flat" height="30" viewBox="0 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg"><path d="m344 152c0 40-24 64-40 72s-24 24-24 24h-48s-8-16-24-24-40-32-40-72a105.3 105.3 0 0 1 4.84-31.06c6.46-20.98 18.99-40.77 35.16-56.94a354.576 354.576 0 0 1 48-40 354.576 354.576 0 0 1 48 40c24 24 40 56 40 88z" fill="#f49397"/><path d="m274.08 226.24-7.07 21.76h-35.01s-8-16-24-24-40-32-40-72a105.3 105.3 0 0 1 4.84-31.06 115.327 115.327 0 0 1 16.39 4.01c40.66 13.21 62.94 46.25 66.99 73.13 1.79 11.88 10.73 21.14 10.82 21.22z" fill="#f16d6f"/><path d="m184.284 140.169c38.042 12.361 53.451 42.6 56.115 60.292s15.409 30.239 15.409 30.239l-14.833 45.65s-17.689 2.664-30.242 15.409-42.794 28.154-80.836 15.793a105.29 105.29 0 0 1 -28.045-14.2c-17.952-12.625-32.906-30.652-43.288-51.033a354.517 354.517 0 0 1 -23.209-58.011 354.564 354.564 0 0 1 52.875-33.29c30.242-15.409 65.62-20.737 96.054-10.849z" fill="#f49397"/><path d="m233.284 229.608 18.51 13.449-10.819 33.3s-17.689 2.664-30.242 15.409-42.794 28.154-80.836 15.793a105.29 105.29 0 0 1 -28.045-14.2 115.48 115.48 0 0 1 8.879-14.349c25.128-34.588 63.436-45.567 90.252-41.112 11.851 1.968 23.421-3.673 23.525-3.734z" fill="#f16d6f"/><path d="m123.677 288.413c23.511-32.361 57.035-37.671 74.681-34.738s33.523-5.31 33.523-5.31l38.833 28.214s-2.932 17.647 5.31 33.523 13.551 49.4-9.96 81.761a105.274 105.274 0 0 1 -22.173 22.283c-17.557 13.176-39.327 21.822-61.913 25.4a354.523 354.523 0 0 1 -62.344 4.147 354.588 354.588 0 0 1 -15.322-60.574c-5.312-33.525.556-68.819 19.365-94.706z" fill="#f49397"/><path d="m223.88 269.449 18.51-13.449 28.324 20.578s-2.932 17.647 5.31 33.523 13.551 49.4-9.96 81.761a105.274 105.274 0 0 1 -22.173 22.283 115.358 115.358 0 0 1 -10.9-12.878c-25.13-34.586-23.735-74.412-11.211-98.539 5.534-10.663 3.745-23.41 3.719-23.527z" fill="#f16d6f"/><path d="m245.936 391.863c-23.511-32.361-18.2-65.884-9.96-81.761s5.31-33.523 5.31-33.523l38.833-28.214s15.876 8.242 33.523 5.31 51.17 2.377 74.681 34.738a105.281 105.281 0 0 1 14.341 27.973c7.106 20.77 8.6 44.145 5.024 66.732a354.588 354.588 0 0 1 -15.322 60.574 354.523 354.523 0 0 1 -62.344-4.147c-33.522-5.31-65.277-21.794-84.086-47.682z" fill="#f49397"/><path d="m258.865 290.7-7.07-21.76 28.324-20.579s15.876 8.242 33.523 5.31 51.17 2.377 74.681 34.738a105.281 105.281 0 0 1 14.341 27.973 115.444 115.444 0 0 1 -15.617 6.389c-40.659 13.213-78.1-.422-97.18-19.788-8.431-8.558-21.107-10.8-21.227-10.807z" fill="#f16d6f"/><path d="m256.192 230.7s12.745-12.553 15.409-30.242 18.073-47.931 56.115-60.292c30.434-9.888 65.812-4.56 96.054 10.849a354.564 354.564 0 0 1 52.875 33.29 354.517 354.517 0 0 1 -23.209 58.011c-15.409 30.242-40.9 55.348-71.333 65.236-38.042 12.361-68.284-3.048-80.836-15.793s-30.242-15.409-30.242-15.409z" fill="#f49397"/><g fill="#f16d6f"><path d="m358.752 135.174a110.655 110.655 0 0 0 -15.972 1.379 100.426 100.426 0 0 1 1.22 15.447c0 40-24 64-40 72s-24 24-24 24h-18.188l5.2 16h22.88l4.424-8.84c.049-.111 6.093-11.475 16.838-16.848 24.312-12.159 48.846-43.559 48.846-86.312a115.361 115.361 0 0 0 -1.248-16.826z"/><path d="m280 144h16v16h-16z"/><path d="m158.978 185.428h16v16h-16z" transform="matrix(.309 -.951 .951 .309 -68.582 292.46)"/><path d="m160.981 313.328h16v16.001h-16z" transform="matrix(.588 -.809 .809 .588 -190.306 269.184)"/><path d="m283.241 350.947h16.001v16h-16.001z" transform="matrix(.809 -.588 .588 .809 -155.36 239.733)"/><path d="m356.799 246.296h16v16h-16z" transform="matrix(.951 -.309 .309 .951 -60.735 125.202)"/><path d="m260.8 238.4-9.6-12.8 4.8 6.4-4.812-6.392c.289-.217 28.812-22.086 28.812-49.608h16c0 35.591-33.763 61.322-35.2 62.4z"/><path d="m225.609 251.184c-.118-.341-12.1-34.226-38.277-42.731l4.943-15.217c33.85 11 47.889 51.06 48.47 52.76z"/><path d="m189.562 306.614-12.945-9.4c20.919-28.793 63.359-29.765 65.155-29.793l.257 16c-.361.001-36.292.928-52.467 23.193z"/><path d="m270.662 344.232c-20.92-28.793-8.729-69.455-8.2-71.172l15.291 4.713-7.646-2.356 7.65 2.342c-.106.346-10.327 34.8 5.85 57.069z"/><path d="m325.8 272.184c-26.959 0-50.38-16.215-51.578-17.058l9.207-13.085-4.6 6.542 4.592-6.55c.3.207 29.913 20.574 56.083 12.071l4.945 15.217a60.1 60.1 0 0 1 -18.649 2.863z"/></g><circle cx="256" cy="256" fill="#ffc119" r="40"/><path d="m248 248h16v16h-16z" fill="#f79926"/></svg> Floral</a>


          <a v-on:click="activetab=2" v-bind:class="[ activetab === 2 ? 'active' : '' ]"><svg  height="30"  width="30" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 496.008 496.008" style="enable-background:new 0 0 496.008 496.008;" xml:space="preserve">
           <circle style="fill:#FFCB57;" cx="248.004" cy="200" r="120"/>
           <path style="fill:#3F3A34;" d="M480.004,241.472V174.52c9.288-3.312,16-12.112,16-22.528c0-13.232-10.768-24-24-24
           c-2.752,0-5.36,0.56-7.824,1.416l-35.848-44.816c2.288-3.656,3.672-7.952,3.672-12.592c0-13.232-10.768-24-24-24
           c-6.728,0-12.792,2.8-17.16,7.272L327.78,26.168c0.072-0.728,0.224-1.424,0.224-2.168c0-13.232-10.768-24-24-24
           c-10.416,0-19.216,6.712-22.528,16h-90.944C187.22,6.712,178.42,0,168.004,0c-13.232,0-24,10.768-24,24
           c0,0.992,0.176,1.944,0.296,2.904l-39.68,19.84C100.3,42.592,94.46,40,88.004,40c-13.232,0-24,10.768-24,24
           c0,4.64,1.384,8.936,3.664,12.608L31.82,121.416C29.356,120.56,26.756,120,24.004,120c-13.232,0-24,10.768-24,24
           c0,10.416,6.712,19.216,16,22.528v50.952c-9.288,3.304-16,12.104-16,22.52c0,13.232,10.768,24,24,24
           c8.888,0,16.568-4.912,20.72-12.104l43.672,7.944c1.848,11.4,11.688,20.16,23.608,20.16c0.328,0,0.624-0.08,0.944-0.096
           l15.264,38.16c-4.992,4.408-8.208,10.768-8.208,17.936c0,13.232,10.768,24,24,24c8.048,0,15.144-4.016,19.496-10.112l68.656,19.616
           c0.616,9.744,7.016,17.872,15.848,21.024v58.952c-9.288,3.312-16,12.112-16,22.528c0,13.232,10.768,24,24,24s24-10.768,24-24
           c0-10.416-6.712-19.216-16-22.528v-58.952c9.288-3.312,16-12.112,16-22.528c0-7.664-3.68-14.432-9.296-18.824l9.552-28.656
           l71.784,23.928c0.192,10.216,6.8,18.808,15.952,22.072v82.952c-9.288,3.312-16,12.112-16,22.528c0,13.232,10.768,24,24,24
           s24-10.768,24-24c0-10.416-6.712-19.216-16-22.528v-82.944c9.288-3.312,16-12.112,16-22.528c0-2.92-0.6-5.688-1.56-8.28
           l61.384-51.152c3.584,2.128,7.72,3.432,12.184,3.432c13.232,0,24-10.768,24-24C496.004,253.584,489.292,244.784,480.004,241.472z
           M135.956,255.552c-0.016-0.96-0.16-1.88-0.288-2.808l65.624-34.024l20.296,65.384L135.956,255.552z M118.1,232.88l-11.088-85.024
           l54.824-2.744c3.48,8.432,11.632,14.4,21.216,14.784l13.432,43.288l-68.136,35.328C125.484,235.848,121.988,233.912,118.1,232.88z
           M46.18,134.88c-0.504-1.224-1.152-2.376-1.848-3.488L80.18,86.584c0.928,0.32,1.84,0.664,2.808,0.872l5.912,45.288L46.18,134.88z
           M98.844,85.296c7.776-3.976,13.16-11.984,13.16-21.296c0-0.992-0.176-1.944-0.296-2.904l39.68-19.84
           c4.32,4.152,10.16,6.744,16.616,6.744c4.912,0,9.48-1.496,13.288-4.04l49.68,37.256l-35.968,33.568
           c-3.312-1.712-7.016-2.784-11-2.784c-10.832,0-19.904,7.256-22.88,17.136l-56.192,2.808L98.844,85.296z M282.028,33.576
           l-39.176,36.56L191.996,32h89.48C281.668,32.528,281.804,33.064,282.028,33.576z M304.332,147.264l-64.376,33.384l-34.36-34.36
           c1.496-3.136,2.408-6.592,2.408-10.288c0-3.408-0.736-6.632-2.016-9.568l37.984-35.456l61.224,45.92
           c-0.704,2.256-1.192,4.616-1.192,7.104C304.004,145.12,304.188,146.184,304.332,147.264z M192.004,136c0,4.408-3.584,8-8,8
           s-8-3.592-8-8s3.584-8,8-8S192.004,131.592,192.004,136z M225.06,188.368l-14.152,7.336l-9.672-31.16L225.06,188.368z
           M215.724,211.232l21.2-10.992l37.48,37.48c-1.488,3.128-2.4,6.584-2.4,10.28c0,7.672,3.68,14.432,9.296,18.824l-11.152,33.456
           l-29.872-9.96L215.724,211.232z M296.004,256c-4.416,0-8-3.592-8-8s3.584-8,8-8s8,3.592,8,8C304.004,252.408,300.42,256,296.004,256
           z M296.004,224c-3.696,0-7.152,0.904-10.28,2.408l-33.896-33.896l59.84-31.032c4.288,4.016,10.008,6.52,16.336,6.52
           c4.464,0,8.6-1.304,12.184-3.44l36.424,30.352l-64.664,35.272C307.692,226.384,302.148,224,296.004,224z M396.628,93
           c3.4,1.856,7.24,3,11.376,3c2.752,0,5.352-0.56,7.816-1.416l35.848,44.816c-2.28,3.672-3.664,7.96-3.664,12.6
           c0,1.288,0.184,2.536,0.384,3.768l-56.664,30.912l-41.28-34.4c0.96-2.592,1.56-5.36,1.56-8.28c0-3.256-0.664-6.352-1.84-9.184
           L396.628,93z M459.828,243.432l-54.888-45.744l51.128-27.888c2.296,2.064,4.976,3.664,7.944,4.72v66.952
           C462.54,242,461.148,242.648,459.828,243.432z M336.004,144c0,4.408-3.584,8-8,8s-8-3.592-8-8s3.584-8,8-8
           S336.004,139.592,336.004,144z M389.828,205.936l57.328,47.776l-124.208-11.296L389.828,205.936z M480.004,152c0,4.408-3.584,8-8,8
           s-8-3.592-8-8s3.584-8,8-8S480.004,147.592,480.004,152z M408.004,64c4.416,0,8,3.592,8,8s-3.584,8-8,8s-8-3.592-8-8
           S403.588,64,408.004,64z M384.22,69.832c-0.064,0.728-0.216,1.424-0.216,2.168c0,3.256,0.664,6.352,1.84,9.184L339.372,123
           c-3.392-1.856-7.232-3-11.368-3c-4.912,0-9.48,1.496-13.288,4.04l-58.864-44.152l37.16-34.68C296.316,46.936,300.02,48,304.004,48
           c6.728,0,12.8-2.8,17.16-7.272L384.22,69.832z M304.004,16c4.416,0,8,3.592,8,8s-3.584,8-8,8s-8-3.592-8-8S299.588,16,304.004,16z
           M168.004,16c4.416,0,8,3.592,8,8s-3.584,8-8,8s-8-3.592-8-8S163.588,16,168.004,16z M88.004,56c4.416,0,8,3.592,8,8s-3.584,8-8,8
           s-8-3.592-8-8S83.588,56,88.004,56z M24.004,136c4.416,0,8,3.592,8,8s-3.584,8-8,8s-8-3.592-8-8S19.588,136,24.004,136z M24.004,248
           c-4.416,0-8-3.592-8-8s3.584-8,8-8s8,3.592,8,8S28.42,248,24.004,248z M32.004,217.472V166.52c7.152-2.552,12.68-8.352,14.88-15.664
           l44.096-2.208l11.152,85.52c-4.592,2.08-8.344,5.584-10.848,9.92L47.62,236.16C46.204,227.456,40.124,220.368,32.004,217.472z
           M104.004,256c0-4.408,3.584-8,8-8s8,3.592,8,8s-3.584,8-8,8S104.004,260.408,104.004,256z M127.796,273.928
           c1.112-0.976,2.12-2.056,3.032-3.224l96.6,32.2l14.264,45.944c-1.984,1.488-3.744,3.24-5.184,5.256l-68.656-19.616
           C167.06,321.976,156.724,312,144.004,312c-0.32,0-0.624,0.08-0.936,0.096L127.796,273.928z M144.004,344c-4.416,0-8-3.592-8-8
           s3.584-8,8-8s8,3.592,8,8S148.42,344,144.004,344z M256.004,480c-4.416,0-8-3.592-8-8s3.584-8,8-8s8,3.592,8,8
           S260.42,480,256.004,480z M256.004,376c-4.416,0-8-3.592-8-8s3.584-8,8-8s8,3.592,8,8S260.42,376,256.004,376z M256.276,341.888
           l-10.168-32.752l18.976,6.328L256.276,341.888z M296.452,271.952c9.456-0.176,17.552-5.84,21.296-13.944l131.088,11.92
           c0.208,0.8,0.448,1.584,0.728,2.352l-61.384,51.152c-3.584-2.128-7.712-3.432-12.176-3.432c-7.664,0-14.432,3.68-18.824,9.296
           l-71.856-23.952L296.452,271.952z M376.004,480c-4.416,0-8-3.592-8-8s3.584-8,8-8s8,3.592,8,8S380.42,480,376.004,480z M376.004,352
           c-4.416,0-8-3.592-8-8s3.584-8,8-8s8,3.592,8,8S380.42,352,376.004,352z M472.004,272c-4.416,0-8-3.592-8-8s3.584-8,8-8s8,3.592,8,8
           S476.42,272,472.004,272z"/></svg> Barras Access</a>
           <a v-on:click="activetab=3" v-bind:class="[ activetab === 3 ? 'active' : '' ]"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  x="0px" y="0px" viewBox="0 0 511.976 511.976" style="enable-background:new 0 0 511.976 511.976;" xml:space="preserve" width="30" height="30"><path style="fill:#E4EAF8;" d="M231.827,24.801c-90.144,0-163.415,73.054-163.415,163.414v24.289    c0,26.201-10.408,51.33-28.936,69.857l-22.499,22.499c-9.529,9.529-2.78,25.822,10.696,25.822h32.358    c4.628,0,8.381,3.752,8.381,8.381v27.759c0,41.482,33.94,75.423,75.423,75.423c16.173,0,29.33,13.106,29.33,29.33v24.094    c0,4.918,3.987,8.904,8.904,8.904H321.26c4.99,0,9.035-4.045,9.035-9.035l0-61.794c0-24.227,8.075-48.075,24.105-66.24    c25.416-28.8,40.843-66.622,40.843-108.054v-71.233C395.243,97.965,322.079,24.801,231.827,24.801z"/><path style="fill:#CCD2DB;" d="M193.039,495.668v-24.094c0-16.224-13.156-29.33-29.33-29.33     c-41.482,0-75.422-33.94-75.422-75.423v-27.759c0-4.628-3.752-8.381-8.381-8.381H60.031c4.629,0,8.381,3.752,8.381,8.381v27.759     c0,41.482,33.94,75.423,75.422,75.423c16.174,0,29.33,13.106,29.33,29.33v24.094c0,4.918,3.987,8.904,8.904,8.904h19.875     C197.026,504.572,193.039,500.586,193.039,495.668z"/>
            <path style="fill:#CCD2DB;" d="M36.853,304.859l22.499-22.499c18.527-18.527,28.936-43.655,28.936-69.857v-24.289     c0-87.015,67.95-157.969,153.48-163.104c-3.289-0.198-6.601-0.31-9.94-0.31c-90.144,0-163.415,73.054-163.415,163.414v24.289     c0,26.202-10.409,51.33-28.936,69.857l-22.499,22.499c-9.529,9.529-2.78,25.822,10.696,25.822h19.875     C34.073,330.681,27.324,314.388,36.853,304.859z"/><path style="fill:#FECA57;" d="M327.071,175.045c2.331,1.544,5.377,1.544,7.708,0c59.592-39.475,59.563-126.829,0-166.285    c-2.331-1.544-5.377-1.544-7.708,0C267.479,48.236,267.508,135.59,327.071,175.045z"/>
            <path style="fill:#F4B537;" d="M340.925,13.19c-1.992-1.549-4.037-3.032-6.146-4.429c-2.331-1.543-5.377-1.543-7.708,0    c-59.592,39.476-59.562,126.829,0,166.285c2.331,1.544,5.377,1.544,7.708,0c2.109-1.397,4.154-2.88,6.146-4.429    C289.53,130.662,289.506,53.163,340.925,13.19z"/>
            <path style="fill:#54A0FF;" d="M329.767,202.647c1.544-2.331,1.544-5.377,0-7.708c-39.475-59.592-126.829-59.563-166.285,0    c-1.544,2.331-1.544,5.377,0,7.708C202.957,262.239,290.312,262.21,329.767,202.647z"/>
            <path style="fill:#338DEF;" d="M183.482,202.647c-1.544-2.331-1.544-5.377,0-7.708c16.108-24.318,42.592-41.159,73.142-44.204    c-37.01-3.692-72.656,13.278-93.142,44.204c-1.544,2.331-1.544,5.377,0,7.708c20.414,30.817,55.997,47.907,93.142,44.204    C226.074,243.806,199.591,226.965,183.482,202.647z"/>
            <path style="fill:#54A0FF;" d="M498.367,202.647c1.544-2.331,1.544-5.377,0-7.708c-39.475-59.592-126.829-59.563-166.285,0    c-1.544,2.331-1.544,5.377,0,7.708C371.557,262.239,458.912,262.21,498.367,202.647z"/>
            <path style="fill:#338DEF;" d="M352.083,202.647c-1.544-2.331-1.544-5.377,0-7.708c16.108-24.318,42.592-41.159,73.142-44.204    c-37.009-3.692-72.655,13.276-93.142,44.204c-1.544,2.331-1.544,5.377,0,7.708c20.426,30.835,56.018,47.904,93.142,44.204    C394.675,243.806,368.191,226.965,352.083,202.647z"/>
            <path style="fill:#1DD1A1;" d="M336.626,200.7c-2.78-0.556-4.965-2.711-5.53-5.45c-14.433-70.051,48.262-131.799,119.303-117.581    c2.78,0.556,4.965,2.711,5.53,5.45C470.362,153.17,407.668,214.918,336.626,200.7z"/>
            <path style="fill:#15BA8B;" d="M356.626,200.7c-2.78-0.556-4.966-2.711-5.53-5.45c-11.984-58.161,29.738-113.297,89.032-119.091    c-67.799-6.571-122.588,53.3-109.032,119.091c0.564,2.74,2.75,4.894,5.53,5.45c9.967,1.995,20.18,2.496,30.271,1.51    C363.455,201.876,360.026,201.38,356.626,200.7z"/>
            <path style="fill:#1DD1A1;" d="M325.223,200.7c2.78-0.556,4.965-2.711,5.53-5.45c14.433-70.051-48.262-131.799-119.303-117.581    c-2.78,0.556-4.965,2.711-5.53,5.45C191.487,153.17,254.182,214.918,325.223,200.7z"/>
            <path style="fill:#15BA8B;" d="M225.92,83.119c0.565-2.74,2.75-4.894,5.53-5.45c3.399-0.68,6.828-1.177,10.27-1.51    c-10.091-0.986-20.303-0.484-30.27,1.51c-2.78,0.556-4.965,2.711-5.53,5.45c-13.565,65.838,41.287,125.658,109.032,119.091    C255.69,196.418,213.931,141.313,225.92,83.119z"/><path d="M27.647,338.085h32.358c0.485,0,0.88,0.395,0.88,0.881v27.759c0,45.724,37.199,82.922,82.923,82.922    c12.037,0,21.83,9.793,21.83,21.83v24.094c0,9.045,7.359,16.404,16.404,16.404h47.056c4.143,0,7.5-3.358,7.5-7.5    s-3.357-7.5-7.5-7.5h-47.056c-0.774,0-1.404-0.63-1.404-1.404v-24.094c0-20.308-16.521-36.83-36.83-36.83    c-37.453,0-67.923-30.47-67.923-67.922v-27.759c0-8.757-7.124-15.881-15.88-15.881H27.647c-6.792,0-10.197-8.214-5.392-13.019    l22.498-22.498c20.075-20.076,31.132-46.768,31.132-75.16v-24.289c0-85.971,69.943-155.914,155.916-155.914    c19.062,0,37.586,3.378,55.183,10.053c-5.502,10.541-9.547,22.859-11.208,35.471c-19.943-9.111-43.018-12.151-65.912-7.514    c-0.014,0.003-0.028,0.005-0.042,0.008c-5.709,1.16-10.147,5.598-11.307,11.308c-4.898,24.126-1.24,48.269,8.748,68.57    c-31.959,12.69-49.745,38.45-51.633,43.77c-1.499,4.224-0.979,8.969,1.574,12.822c40.577,61.254,128.761,64.307,173.701,7.052    c14.431,18.366,34.267,31.442,56.702,37.405c0.037,0.01,0.073,0.022,0.109,0.031v8.173c0,38.006-13.839,74.618-38.966,103.092    c-16.755,18.986-25.982,44.273-25.982,71.203v61.793c0,0.847-0.688,1.535-1.534,1.535h-57.136c-4.143,0-7.5,3.358-7.5,7.5    s3.357,7.5,7.5,7.5h57.136c9.117,0,16.534-7.417,16.534-16.535v-61.793c0-23.272,7.895-45.034,22.229-61.278    c28.051-31.784,42.72-70.341,42.72-118.347c40.539,4.722,79.612-13.717,101.878-47.329c3.217-4.857,3.217-11.134,0-15.991v0    c-12.184-18.394-29.738-32.567-50.063-40.599c1.924-3.941,3.62-8.012,5.066-12.217c1.347-3.917-0.736-8.184-4.653-9.531    c-3.918-1.347-8.186,0.735-9.532,4.653c-14.64,42.58-58.923,69.53-105.226,60.313C327.651,127.863,384.565,72.088,448.65,84.854    c1.027,5.156,1.615,10.463,1.748,15.782c0.103,4.077,3.439,7.312,7.494,7.312c0.063,0,0.128-0.001,0.191-0.002    c4.142-0.104,7.414-3.545,7.311-7.686c-0.158-6.309-0.869-12.611-2.112-18.731c-1.16-5.708-5.599-10.147-11.308-11.307    c-22.625-4.594-45.641-1.769-65.964,7.525c-4.035-30.519-21.092-58.096-47.116-75.334c-4.856-3.217-11.133-3.217-15.991,0    c-11.013,7.295-20.421,16.441-27.918,26.878c-20.096-8.014-41.318-12.086-63.184-12.086c-94.243,0-170.916,76.671-170.916,170.914    v24.289c0,24.385-9.496,47.311-26.739,64.554L11.648,299.46C-2.608,313.718,7.467,338.085,27.647,338.085z M446.897,163.242    c18.275,6.7,34.098,19.129,45,35.455c-33.257,49.805-104.317,55.343-144.915,10.818    C385.963,213.665,424.45,196.156,446.897,163.242z M169.901,198.697c10.442-15.62,26.045-28.484,45.016-35.443    c21.735,31.877,59.526,50.512,99.937,46.258C274.238,254.19,203.066,248.366,169.901,198.697z M330.899,15.109    c23.893,15.955,38.938,42.061,40.841,70.521c-6.197,4.072-12.033,8.889-16.962,13.817c0,0,0,0-0.001,0    c-10.014,10.014-18.34,22.244-23.878,36.212c-8.276-20.876-23.002-38.303-40.835-50.025    C291.947,57.433,306.786,31.211,330.899,15.109z M321.611,193.322c-64.797,12.903-121.295-44.311-108.464-108.468    C275.795,72.471,334.207,126.011,321.611,193.322z"/></svg>
          Reiki</a>
          <a v-on:click="activetab=4" v-bind:class="[ activetab === 4 ? 'active' : '' ]"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="30" height="30"><g id="filled_outline" data-name="filled outline"><path d="M264,72A160,160,0,0,1,424,232a157.561,157.561,0,0,1-1.87,24h48.445A206.649,206.649,0,0,0,472,232c0-114.875-93.125-208-208-208S56,117.125,56,232h48A160,160,0,0,1,264,72Z" style="fill:#ff421d"/><path d="M144,120a119.413,119.413,0,0,0-66.679,20.243A207.086,207.086,0,0,0,56,232h48a159.4,159.4,0,0,1,45.573-111.719C147.713,120.2,145.881,120,144,120Z" style="fill:#bf3216"/><path d="M445.31,200.271A47.992,47.992,0,0,0,411.319,169.5,159.458,159.458,0,0,1,424,232a157.561,157.561,0,0,1-1.87,24h48.445A206.649,206.649,0,0,0,472,232a209.705,209.705,0,0,0-1.562-25.107A39.8,39.8,0,0,0,448,200C447.078,200,446.216,200.209,445.31,200.271Z" style="fill:#bf3216"/><path d="M264,120A111.83,111.83,0,0,1,373.357,256H422.13A157.561,157.561,0,0,0,424,232a160,160,0,0,0-320,0h48A112,112,0,0,1,264,120Z" style="fill:#fdb62f"/><path d="M205.112,136.86a119.164,119.164,0,0,0-55.539-16.579A159.4,159.4,0,0,0,104,232h48A111.813,111.813,0,0,1,205.112,136.86Z" style="fill:#f29706"/><path d="M376,232a112,112,0,0,0-224,0h48a64,64,0,1,1,123.3,24h50.053A111.026,111.026,0,0,0,376,232Z" style="fill:#39b54a"/><path d="M205.112,136.86A111.813,111.813,0,0,0,152,232h48a63.968,63.968,0,0,1,42.629-60.266A120.5,120.5,0,0,0,205.112,136.86Z" style="fill:#006837"/><path d="M373.357,256a110.725,110.725,0,0,0-8.551-72.562A47.773,47.773,0,0,0,352,216c0,.388.049.764.058,1.149a30.633,30.633,0,0,0-25.071,3.839A62.617,62.617,0,0,1,323.3,256Z" style="fill:#006837"/><path d="M364.806,183.438A110.725,110.725,0,0,1,373.357,256H422.13A157.561,157.561,0,0,0,424,232a159.458,159.458,0,0,0-12.681-62.5,46.828,46.828,0,0,0-46.513,13.939Z" style="fill:#f29706"/><path d="M64,488l2.713-12.21a147.862,147.862,0,0,0-19.6-111.463h0A147.865,147.865,0,0,1,24,284.941V256A120,120,0,0,1,144,136h0A120,120,0,0,1,264,256v8l32,80H264v61.067A42.933,42.933,0,0,1,221.067,448h0a42.933,42.933,0,0,0-39.862,26.988L176,488Z" style="fill:#fadbb7"/><path d="M222.716,165.569a49.528,49.528,0,0,0-14.735,6.261,49.344,49.344,0,0,0,6.279-12.968,119.482,119.482,0,0,0-30.6-16.014,15.931,15.931,0,0,0,4.1,7.964l14.676,15.252a24,24,0,0,0-33.934-.653,16,16,0,1,0,22.187,23.059,16,16,0,1,0,22.186,23.06,24,24,0,0,0,.656-33.934L228.2,192.848a16,16,0,0,0,17.547,3.732l1.938-.787A120.418,120.418,0,0,0,222.716,165.569Z" style="fill:#f4c08e"/><path d="M147.115,192a49.759,49.759,0,0,0-48.792,40,49.759,49.759,0,0,0-48.792-40A4.879,4.879,0,0,0,45,198.692l9.3,23.25A16,16,0,0,0,69.155,232H90.323a24,24,0,0,0-24,24,16,16,0,0,0,32,0,16,16,0,0,0,32,0,24,24,0,0,0-24-24H127.49a16,16,0,0,0,14.856-10.058l9.3-23.25A4.88,4.88,0,0,0,147.115,192Z" style="fill:#f4c08e"/><path d="M412.454,52.185,387.629,48.9a16,16,0,0,0-16.046,8.022L361.211,75.374a24,24,0,0,0-9.162-32.681,16,16,0,0,0-15.68,27.9A16,16,0,1,0,320.69,98.484a24,24,0,0,0,32.681-9.161L343,107.774a16,16,0,0,0,1.488,17.879l15.711,19.5a4.88,4.88,0,0,0,8.054-.671,49.756,49.756,0,0,0-10.962-62.132,49.76,49.76,0,0,0,58.776-22.935A4.88,4.88,0,0,0,412.454,52.185Z" style="fill:#662d91"/><path d="M136.792,176A49.759,49.759,0,0,0,88,216a49.759,49.759,0,0,0-48.792-40,4.88,4.88,0,0,0-4.531,6.692l9.3,23.25A16,16,0,0,0,58.833,216H80a24,24,0,0,0-24,24,16,16,0,0,0,32,0,16,16,0,0,0,32,0,24,24,0,0,0-24-24h21.167a16,16,0,0,0,14.856-10.058l9.3-23.25A4.88,4.88,0,0,0,136.792,176Z" style="fill:#662d91"/><path d="M278.654,159.426A49.758,49.758,0,0,0,216,152a49.759,49.759,0,0,0-5-62.894,4.88,4.88,0,0,0-7.964,1.375L192.725,113.3a16,16,0,0,0,3.052,17.678l14.676,15.253a24,24,0,0,0-33.934-.653,16,16,0,1,0,22.187,23.059,16,16,0,0,0,22.186,23.06,24,24,0,0,0,.656-33.934l14.675,15.252a16,16,0,0,0,17.548,3.732l23.2-9.418A4.881,4.881,0,0,0,278.654,159.426Z" style="fill:#662d91"/><path d="M68.854,424.883a147.614,147.614,0,0,1-2.141,50.907L64,488H176l5.205-13.012A42.933,42.933,0,0,1,221.067,448,42.933,42.933,0,0,0,264,405.067V344h32l-22.36-55.9A400.24,400.24,0,0,1,68.854,424.883Z" style="fill:#f4c08e"/><path d="M448,216c-.922,0-1.784.209-2.69.271A47.977,47.977,0,0,0,352,232c0,.388.049.764.058,1.149A31.949,31.949,0,1,0,344,296H448a40,40,0,0,0,0-80Z" style="fill:#6cbbc7"/><path d="M456.843,217.055a398.748,398.748,0,0,1-134.593,70.3A31.8,31.8,0,0,0,344,296H448a39.964,39.964,0,0,0,8.843-78.945Z" style="fill:#56959f"/><path d="M479.558,220.1A216.827,216.827,0,0,0,413.2,75.935a55.683,55.683,0,0,0,9.852-12.607,12.877,12.877,0,0,0-9.547-19.07l-24.828-3.289A23.341,23.341,0,0,0,372.166,45.1c-4.068-2.354-8.191-4.623-12.377-6.7a32.706,32.706,0,0,0-3.805-2.665,23.684,23.684,0,0,0-7.672-2.616A215.961,215.961,0,0,0,60.862,158.783,128.371,128.371,0,0,0,50.1,169.3,54.18,54.18,0,0,0,39.211,168,12.879,12.879,0,0,0,27.25,185.664l4.012,10.042A127.81,127.81,0,0,0,16,256v28.938a155.639,155.639,0,0,0,24.367,83.687A138.928,138.928,0,0,1,58.9,474.055l-2.71,12.211A8,8,0,0,0,64,496H176a8,8,0,0,0,7.43-5.031l5.2-13.008A34.765,34.765,0,0,1,221.07,456,50.984,50.984,0,0,0,272,405.07V352h24a8,8,0,0,0,7.43-10.969L272,262.461V256a127.326,127.326,0,0,0-21.358-70.364,23.374,23.374,0,0,0,6.139-1.472l17.465-7.087A56.235,56.235,0,0,1,320,232c0,.07-.01.138-.011.207A39.455,39.455,0,0,0,304,264a40.047,40.047,0,0,0,40,40H448a48.052,48.052,0,0,0,48-48A47.358,47.358,0,0,0,479.558,220.1Zm-16.831-9.643a46.747,46.747,0,0,0-12.141-2.384,55.877,55.877,0,0,0-26.4-26.168,168.07,168.07,0,0,0-42.276-69.287,58.048,58.048,0,0,0-6.383-20.055,57.248,57.248,0,0,0,24.517-6.988A200.852,200.852,0,0,1,462.727,210.454ZM110.992,234.68h0A15.847,15.847,0,0,1,112,240a8,8,0,0,1-16,0V224a15.77,15.77,0,0,1,5.789,1.141l.449-1.141h.016l-.449,1.148A15.916,15.916,0,0,1,110.992,234.68ZM104.805,208H99.057a41.8,41.8,0,0,1,33.013-23.727l-7.476,18.7a7.966,7.966,0,0,1-7.43,5.031Zm34.648.914,9.289-23.242A12.874,12.874,0,0,0,136.789,168a57.058,57.058,0,0,0-11,1.2A152.8,152.8,0,0,1,190.4,99.018l-4.964,10.99a23.824,23.824,0,0,0,1.113,21.828,30.992,30.992,0,0,0-15.582,7.984,24.076,24.076,0,0,0-6.037,24.84A118.624,118.624,0,0,0,144.317,224H123.51c-.148-.255-.231-.551-.385-.8A23.835,23.835,0,0,0,139.453,208.914Zm36-31.231a23.854,23.854,0,0,0,10.452,3.243,23.046,23.046,0,0,0,13.019,20.5A71.53,71.53,0,0,0,192.438,224H160.317A102.7,102.7,0,0,1,175.454,177.683Zm17.7-14.808a7.99,7.99,0,0,1-11.289-.195,9.115,9.115,0,0,1-1.055-1.368v-.007a8.025,8.025,0,0,1,1.243-9.953,16.448,16.448,0,0,1,15.781-3.664v0a15.782,15.782,0,0,1,6.851,4.1Zm6.86-46.281,8.289-18.352a41.736,41.736,0,0,1,5.776,40.225l-5.526-5.74-7.008-7.282A7.973,7.973,0,0,1,200.016,116.594Zm4.234,57.812,11.532-11.093.021.021a15.941,15.941,0,0,1,4.213,8.314h0a15.955,15.955,0,0,1-.118,6.016v.008a15.9,15.9,0,0,1-4.554,8.273,8,8,0,0,1-11.094-11.539Zm15.167-87.77a150.7,150.7,0,0,1,85.171-.968,24.137,24.137,0,0,0,12.178,19.793A31.733,31.733,0,0,0,332.32,109.5c.5,0,1-.106,1.507-.129a23.874,23.874,0,0,0,4.431,21.309l15.711,19.476A12.829,12.829,0,0,0,364,154.969c.352,0,.711-.008,1.062-.039a12.857,12.857,0,0,0,10.165-6.524,56.236,56.236,0,0,0,5.334-13.656,151.914,151.914,0,0,1,24.7,41.6,55.554,55.554,0,0,0-31.9,6.53A120.116,120.116,0,0,0,264,112a118.407,118.407,0,0,0-31.657,4.336A57.665,57.665,0,0,0,219.417,86.636ZM379.412,59.885a8.013,8.013,0,0,1,7.166-3.057l19.945,2.641a42.353,42.353,0,0,1-9.984,9.633h0l-.008.007a41.613,41.613,0,0,1-26.85,7.551l9-15.894Zm-13.068,57.029a42.035,42.035,0,0,1-3,19.391l-12.625-15.664a7.965,7.965,0,0,1-.742-8.946l6.2-11.031-1.175-.66,0,0,1.171.656,2.6-4.634A41.806,41.806,0,0,1,366.344,116.914Zm-29.11-64.187a7.778,7.778,0,0,1,6.807-4q3.657,1.6,7.235,3.345a15.975,15.975,0,0,1,2.959,19.384l-13.946-7.843a7.977,7.977,0,0,1-3.055-10.882Zm-4.789,24.835,15.047,8.462-1.1-.618-.022.04a16.224,16.224,0,0,1-21.76,6.062A8.018,8.018,0,0,1,320.9,82.18a8.577,8.577,0,0,1,.649-1.563A8.012,8.012,0,0,1,332.445,77.562ZM75.172,166.078a200.032,200.032,0,0,1,250.307-124.4,23.291,23.291,0,0,0-4.59,20.21,23.809,23.809,0,0,0-11.6,8.5A167.456,167.456,0,0,0,264,64c-53.359,0-102.375,24.648-134.492,67.617a167.191,167.191,0,0,0-24.292,45.919,57.788,57.788,0,0,0-17.211,17.488,57.5,57.5,0,0,0-16.534-17.036C72.585,174.024,73.788,170.044,75.172,166.078ZM50.641,185.773l.015.008a41.156,41.156,0,0,1,7.789,3.055h.008A41.7,41.7,0,0,1,76.949,208l-17.871-.02c-.425-.082-.85-.162-1.289-.217v0a7.871,7.871,0,0,1-6.383-4.789L47.5,193.211h0l-3.552-8.876A48.478,48.478,0,0,1,50.641,185.773ZM80,224v16a8,8,0,0,1-16,0,15.847,15.847,0,0,1,1.006-5.321h0A15.983,15.983,0,0,1,80,224Zm176,32v8a8.058,8.058,0,0,0,.57,2.969L284.188,336H264a8,8,0,0,0-8,8v61.07A34.973,34.973,0,0,1,221.07,440a50.7,50.7,0,0,0-47.3,32.016L170.586,480H73.969l.554-2.477A154.843,154.843,0,0,0,53.867,360.031,139.613,139.613,0,0,1,32,284.938V256a111.5,111.5,0,0,1,8-41.282,23.924,23.924,0,0,0,8.342,6.557c-.2,3.771-.34,7.356-.34,10.725a7.848,7.848,0,0,0,.519,2.571A29.566,29.566,0,0,0,48,240a23.9,23.9,0,0,0,40,17.758A23.9,23.9,0,0,0,128,240h72a8,8,0,0,0,8-8,55.606,55.606,0,0,1,8.114-28.75,23.433,23.433,0,0,0,10.324-5.781,31.732,31.732,0,0,0,6.554-9.182A111.526,111.526,0,0,1,256,256Zm-5.234-86.664a7.88,7.88,0,0,1-8.188-1.5l0,0c-.294-.258-.6-.5-.95-.754L229.507,154.5a41.773,41.773,0,0,1,39.783,7.32Zm22.664-.563-.279-.685.279.684Zm14.419-4.6a12.814,12.814,0,0,0-3.427-10.293,57.872,57.872,0,0,0-53.359-16.421c.339-1.382.619-2.773.856-4.182A102.929,102.929,0,0,1,264,128a104.049,104.049,0,0,1,96.116,64.728,55.732,55.732,0,0,0-15.546,31.28c-.195-.008-.382-.008-.57-.008a38.468,38.468,0,0,0-8.363,1.015A72.54,72.54,0,0,0,287.849,164.176ZM448,288H344a24.027,24.027,0,0,1-24-24,23.606,23.606,0,0,1,30.039-23.109,7.95,7.95,0,0,0,6.977-1.461,8.033,8.033,0,0,0,3.039-6.446L360,232a39.863,39.863,0,0,1,14.648-30.93,39.436,39.436,0,0,1,39.993-6.148A39.979,39.979,0,0,1,437.758,218.9a8.141,8.141,0,0,0,8.1,5.36c.571-.039,1.118-.11,2.141-.258a32.342,32.342,0,0,1,32,32A32.032,32.032,0,0,1,448,288Z"/></g></svg>Arteterapia</a>
        </div>
        <div class="content">
          <div v-if="activetab === 1" class="tabcontent">
           <div> 
            <p><h1>Apresentação</h1></p>
            <p>Bem-vindo, este site foi criado para apresentar a você os tratamentos que fazemos</p>
            <table border="2">
              <tr>
                <td>
                  <img src="images/floral2.jpg" height="300" width="300">
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
        <div v-if="activetab === 2" class="tabcontent">
          Florais são um tratamento...
          <br>
          <br>
          <br>
          <br>
          <br>      
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
        </div>
        <div v-if="activetab === 3" class="tabcontent">
          Barras de Access são 32 pontos ....
          <br>
          <br>
          <br>
          <br>
          <br>      
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
        </div>
        <div v-if="activetab === 4" class="tabcontent">
          Sou Claudia, formada em bla bla bla...
          <br>
          <br>
          <br>
          <br>
          <br>      
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
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
</body>
</html>