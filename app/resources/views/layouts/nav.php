<!-- <div class="startup-logo">
<svg class="icone" viewBox="0 0 416 118" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path class="cls-1" d="M68.5,2.5H95.4v107H68.5V69.4H26.9v40H0V2.5H26.9v40H68.5V2.5Z" stroke="white" />
      <path class="cls-1" d="M190.9,15.6c9.9,10.4,14.9,23,14.9,37.8v56.1H179.1V85.3H130.9v24.2H104V53.4c0-14.8,5-27.4,14.9-37.8S140.8,0,154.8,0C169,0,181,5.2,190.9,15.6ZM179,58.6V53.4a27,27,0,0,0-7.1-18.8c-4.7-5.2-10.4-7.9-17.1-7.9a21.84,21.84,0,0,0-17,7.9,27.78,27.78,0,0,0-7,18.8v5.2Z" stroke="white" />
      <path class="cls-1" d="M242.8,81.1a5.14,5.14,0,0,0,3.7,1.5h50.9v26.9H246.5a32.27,32.27,0,0,1-32.1-32.1V2.5h26.9V77.4A4.76,4.76,0,0,0,242.8,81.1Z" stroke="white" />
      <path class="cls-2" d="M304.3,109.6V2.8H331V109.6ZM368.6,53l7,19.8Q379,83,387,83h17.1v26.7h-17q-11.85,0-22.2-8.1A42.66,42.66,0,0,1,350.5,82L337.9,46.2,370.7,3h33.4Z" stroke="white" />
      <path class="cls-2" d="M461.4.1a52.15,52.15,0,0,1,39,16.6,57.44,57.44,0,0,1,0,79.5,51.83,51.83,0,0,1-39,16.7c-15.3,0-28.3-5.6-39-16.7a57.25,57.25,0,0,1,0-79.5C433.1,5.7,446.1.1,461.4.1Zm0,86.2a26.38,26.38,0,0,0,20-8.8,30.6,30.6,0,0,0,0-41.8A27.09,27.09,0,0,0,443,34c-.6.6-1.2,1.1-1.7,1.7a30.6,30.6,0,0,0,0,41.8A26.59,26.59,0,0,0,461.4,86.3Z" stroke="white" />
      <path class="cls-2" d="M595.3,73.5c2.7,6.2,6.4,9.3,11.2,9.3h16.9v26.7H606.5c-7.9,0-15.3-2.7-22.3-8.1a41.48,41.48,0,0,1-14.4-19.6L557.5,47h33.3a6.33,6.33,0,0,0,5.3-2.8,9.91,9.91,0,0,0,0-12.2,6.49,6.49,0,0,0-5.3-2.7H550.1v80.2H523.4V2.5h67.4A31.83,31.83,0,0,1,615,13.1a36.84,36.84,0,0,1,1.5,48.5A32.39,32.39,0,0,1,595.3,73.5Z" stroke="white" />
      <path class="cls-2" d="M701.4,2.5A30.73,30.73,0,0,1,724.1,12a31.42,31.42,0,0,1,9.4,22.8c0,8.6-2,15.7-6.1,21.3a31.53,31.53,0,0,1,6.1,18.8v2.5a32.14,32.14,0,0,1-32.1,32.1H631.8V2.5Zm5.4,75c0-5.3-1.8-8-5.4-8H674.7V42.8h26.7a5.46,5.46,0,0,0,3.8-1.6,5.23,5.23,0,0,0,1.6-3.7q0-8.1-5.4-8.1H658.5V82.9h42.9a5.46,5.46,0,0,0,3.8-1.6,5.65,5.65,0,0,0,1.6-3.8Z" stroke="white" />
</svg>
</div> -->

<div id="mySidenav" class="sidenav">
      <div class="container-fluid">
            <div class="row">
                  <!-- <div class="col-md-6">
                        <img src="/img/medias/bg.svg" class="img-fluid" alt="">
                  </div> -->
                  <div class="col-md-12">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="#">Accueil</a>
                        <a href="#">Business Digital</a>
                        <a href="#">Solutions</a>
                        <a href="#">Innovation</a>
                        <a href="#">À Propos</a>
                        <a href="#">Capital Humain</a>
                        <a href="#">Contact</a>
                  </div>
            </div>
      </div>
      
</div>
<nav class="navbar fixed-top">
      <div class="container mt-4">
            <a class="navbar-brand"><img src="img/assets/white.svg" height="20" alt="logo halkorb"></a>
      </div>
</nav>
<div class="navigation border-left" style="color:white !important">
      <div class="grid-item mt-4">
            <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
      </div>
      <div class="grid-item">
            <h5 class="rotatedM90" style="margin-top:20px"><?php echo $page['title'] ;?></h5>
      </div>
      <div class="grid-item">
            <h5>H</h5>
      </div>
</div>


<script>
      function openNav() {
            document.getElementById("mySidenav").style.width = "40%";
      }

      function closeNav() {
            document.getElementById("mySidenav").style.right = "0";
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("mySidenav").style.transform = "translate(0%, 0)";
      }
</script>