
<div class="wrapper" style=" z-index: 100">
    <!-- Sidebar -->
    <nav id="sidebar" class="sidenav bg-black">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="sidebar-header">
            <a href="<?=base_url()?>"><h3 class="text-light">Mechanic 6:33</h3></a>
        </div>

        <ul class="list-unstyled components text-light text-center">
            <a href="<?=base_url()?>"><img src="<?=base_url()?>assets/img/lion-2.png"></a>
            <p><?php $user = $this->session->userdata('Nombre');
            echo '<h4>'.$user.'</h4>';?></p>
            <li class="active">
                <a href="#ventaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Ventas</a>
                <ul class="collapse list-unstyled" id="ventaSubmenu">
                    <li>
                        <a href="<?=base_url('Venta/Nueva')?>">Nueva Venta</a>
                    </li>
                    <li>
                        <a href="<?=base_url('Venta')?>">Registro de Venta</a>
                    </li>
                  
                </ul>
            </li>
            <li>
            </li>
            <li>
                <a href="#compraSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Compras</a>
                <ul class="collapse list-unstyled" id="compraSubmenu">
                    <li>
                        <a href="<?=base_url('Compra/Nueva')?>">Nueva compra</a>
                    </li>
                    <li>
                        <a href="<?=base_url('Compra')?>">Registro de compras</a>
                    </li>
                </ul>
            </li>
            
            <a href="#pagosSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pagos</a>
            <ul id="pagosSubmenu" class="collapse list-unstyled">
                <li>
                <a href="<?=base_url('Pago/Planillas')?>">Planillas</a>
            </li>
            <li>
                <a href="<?=base_url('Pago')?>">Pagos de la empresa</a>
            </li>
            </ul>
            <li>
                <a href="<?=base_url('Abono')?>">Abonos</a>
            </li>
            <li>
                <a href="<?=base_url('Empleado')?>">Empleados</a>
            </li>
        </ul>
    </nav>
</div>


