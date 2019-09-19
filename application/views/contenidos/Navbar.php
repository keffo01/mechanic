<style >
  .avatar {
    /* cambia estos dos valores para definir el tamaño de tu círculo */
    height: 70px;
    width: 80px;
    /* los siguientes valores son independientes del tamaño del círculo */
    background-repeat: no-repeat;
    background-position: 30%;
    border-radius:50%;
    background-size: 100% auto;
  }
</style>
<header class="header">
  
  <nav class="navbar navbar-expand-sm navbar-dark bg-black">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="col-md-2">
          <span class="text-light" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span> 
        </div>
        <div class="col-md-8"></div>
        <div class="col-md-2"> 
          <a href="<?=base_url()?>Login/Logout" class="btn btn-danger "><strong>Cerrar Sesion</strong></a>
        </div>

    </div>
  </nav>
</div>
</header>



