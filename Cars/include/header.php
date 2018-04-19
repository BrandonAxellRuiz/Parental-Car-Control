<!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar" style="position:fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.php">Parental Car Control </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                  
                    <!-- Tasks -->
                    <!-- #END# Tasks -->
                      <!-- Notifications -->
                    <li class="dropdown ">
                        <a href="javascript:void(0);" class="dropdown-toggle " data-toggle="dropdown" role="button" >
                         <i class="material-icons" title="Ver notificaciones" >notifications</i> 
                            <span class="label-count" id="c_noti">0</span>
                        </a>
                        <ul class="dropdown-menu ">
                            <li class="header">Notificaciones</li>
                            <li class="body ">
                                <ul class="menu col-md-12 col-xs-12"  id="noti">
                                    
                                </ul>      
                            <li class="footer" id="noti_fo">
            
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
         <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo $_SESSION['image'];?>" width="48" height="48" alt="Foto usuario" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name']; ?></div>
                    <div class="email"><?php echo $_SESSION['email']; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="../../login/logout.php"><i class="material-icons">input</i>Cerrar sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
           <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Menu</li>
                    <li>
                        <a href="../index.php">
                            <i class="material-icons">home</i>
                            <span>Inicio</span>
                        </a>
                    </li>
                    <li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                           <i class="material-icons">collections</i>
                            <span>Administrar Articulos</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="../lineas/index.php">Lista de Articulos</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                           <i class="material-icons">account_circle</i>
                            <span>Usuarios</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="../usuario/index.php">Usuarios</a>
                            </li>
                        </ul>
                    </li>              
                   
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a href="javascript:void(0);">Parental Car Control</a>.
                </div>
                <div class="version">
                    <a target="_blank" href="http://solti.com.mx"><b> </b> Brandon Axell Ruiz </a>
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab"><i class="material-icons">invert_colors</i> Temas</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab"><i class="material-icons">settings</i> Confguracion</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Rojo</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Rosa</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Morado</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Purpura</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Azul</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Azul Cielo</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Verde</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Verde Claro</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lima</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Amarillo</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Ambar</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Naranja</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Anaranjado Obscuro</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Cafe</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Gris</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Gris Azul</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Negro</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>Configuraciones Generales</p>
                        <ul class="setting-list">
                            <li>
                                <span>Reportes de uso de panel</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Redireccionamiento de correo</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>Configuraciones de sistema</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notificaciones</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Actualizaciones</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>Configuraciones de cuenta</p>
                        <ul class="setting-list">
                            <li>
                                <span>Modo Avion</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Localizador GPS</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>