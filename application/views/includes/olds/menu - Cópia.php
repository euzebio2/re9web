  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
   <!-- UTILIZADOR -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url(); ?>assets/dist/img/user3-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Usuario Exemplo</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
        <!-- BUSCADOR INICIO -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Procurar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.BUSCADOR FIM -->

      <!-- MENU SIDEBAR -->
      <ul class="sidebar-menu">
        <li class="header">MENU PRINCIPAL</li>
       <li class="active"><a href=""><i class="fa fa-home"></i> <span>Página Principal</span></a></li>
        

        <li>
          <a href="#">
            <i class="fa fa-circle-o"></i> <span>Agrupador 01</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-caret-right"></i> Artigo 01</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Artigo 02</a></li>
          </ul>
        </li>

        </ul>

    </section>
    <!-- /. MENU SIDEBAR FIM -->
  </aside>