<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" style="">
                <li class="nav-small-cap">MENU</li>
                <?php
                if ($this->Session->check('Auth.User')) {
                    ?>    
                    <li>
                        <a class="has-arrow " href="<?php echo $this->Html->url(['controller' => 'publicaciones', 'action' => 'index']) ?>" aria-expanded="false">
                            <i class="mdi mdi-home"></i><span class="hide-menu">Inicio</span>
                        </a>
                    </li>
                    <li class="nav-devider"></li>        
                    <li>
                        <a class="has-arrow " href="<?php echo $this->Html->url(['controller' => 'publicaciones', 'action' => 'add']) ?>" aria-expanded="false">
                            <i class="fa fa-pencil-square-o"></i><span class="hide-menu">Publicar</span>
                        </a>
                    </li>
                    <li class="nav-devider"></li>
                    <li>
                        <a class="has-arrow " href="<?php echo $this->Html->url(['controller' => 'publicaciones', 'action' => 'index']) ?>" aria-expanded="false">
                            <i class="mdi mdi-book-open-page-variant"></i><span class="hide-menu">Mis Publicaciones</span>
                        </a>
                    </li>

                    <li class="nav-devider"></li>

                    <?php
                }
                ?>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<span style="display:none;" id="unixVal"><?php echo time(); ?></span>

<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->