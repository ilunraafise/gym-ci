<?php
  $path = $_SERVER['REQUEST_URI'];
  $path = explode('/', $path);
  $path = end($path);
?>
<div class="sidebar" data-color="purple" data-background-color="black">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="" class="simple-text logo-mini">

        </a>
        <a href="" class="simple-text logo-normal">
        <p>FitGym</p>
        </a>
      </div>
      <div class="sidebar-wrapper ps-container ps-theme-default ps-active-y">
        <!-- <div class="user">
          <div class="photo">
           <i class="material-icons">person</i>
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                <?php echo $this->session->userdata('gym_admin') ?>
                <b class="caret"></b>
              </span>
            </a>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url()."Admin/Profile" ?>">
                    <i class="material-icons">account_circle</i>
                    <span class="sidebar-normal"> My Profile </span>
                  </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> S </span>
                    <span class="sidebar-normal"> Settings </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div> -->
        <ul class="nav">

          <li class="nav-item <?php if ($path == 'dashboard'){ echo 'active';} ?>">
            <a class="nav-link" href="<?php echo base_url('Admin/dashboard') ?>">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>
          

          <li class="nav-item <?php if ($path == 'addPackage_Form' || $path == 'showDailyPackages' || $path == 'showMonthlyPackages' || $path == 'showTMPackages' || $path == 'showWorkoutPackages' || $path == 'showItems'){ echo 'active';}?>">
            <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
              <i class="material-icons">fitness_center</i>
              <p> Packages
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="componentsExamples">
              <ul class="nav">

                <?php
                if($this->session->userdata('access_level')==1)
                {
                  ?>

                <li class="nav-item <?php if ($path == 'addPackage_Form'){ echo 'active';} ?>">
                  <a class="nav-link" href="<?php echo base_url()."Admin/addPackage_Form" ?>">
                    <span class="sidebar-mini"> + </span>
                    <span class="sidebar-normal"> Add Packages/Items
                     
                    </span>
                  </a>
                 
                </li>

              <?php
                }

                 ?>
                </li>
                <li class="nav-item <?php if ($path == 'showMonthlyPackages'){ echo 'active';} ?>">
                  <a class="nav-link" href="<?php echo base_url()."Admin/showMonthlyPackages" ?>">
                    <span class="sidebar-mini"> M </span>
                    <span class="sidebar-normal"> Paket Bulanan </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <!------Members section start ----->
          <li class="nav-item <?php if ($path == 'addMemberForm' || $path == 'showAllMembers' || $path == 'showActiveMembers' || $path == 'showInActiveMemers' || $path == 'showDormantMembers' || $path == 'showFreezeMembers' || $path == 'showUnpaidMembers' || $path == 'showDailyVisitors'){ echo 'active';} ?>">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
              <i class="material-icons">face</i>
              <p> Members
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples">
              <ul class="nav">
                <?php
                if($this->session->userdata('access_level')==1)
                {
                  ?>
                  <li class="nav-item <?php if ($path == 'addMemberForm'){ echo 'active';} ?>">
                  <a class="nav-link" href="<?php echo base_url()."Admin/addMemberForm" ?>">
                    <i class="material-icons">person_add</i>
                    <span class="sidebar-normal"> Add Members </span>
                  </a>
                </li>


                  <?php
                }


                 ?>
                      <li class="nav-item <?php if ($path == 'showAllMembers'){ echo 'active';} ?>">
                  <a class="nav-link" href="<?php echo base_url()."Admin/showAllMembers" ?>">
                    <i class="material-icons">group</i>
                    <span class="sidebar-normal"> Total Members </span>
                  </a>
                </li>
                <li class="nav-item <?php if ($path == 'showActiveMembers'){ echo 'active';} ?>">
                  <a class="nav-link" href="<?php echo base_url()."Admin/showActiveMembers" ?>">
                    <i class="material-icons">how_to_reg</i>
                    <span class="sidebar-normal"> Member Aktif </span>
                  </a>
                </li>
                <li class="nav-item <?php if ($path == 'showInActiveMemers'){ echo 'active';} ?>">
                  <a class="nav-link" href="<?php echo base_url()."Admin/showInActiveMemers" ?>">
                    <i class="material-icons">perm_identity</i>
                    <span class="sidebar-normal"> Member Non Aktif </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <!------Members section end ----->

          <li class="nav-item <?php if ($path == 'showReports'){ echo 'active';} ?>">
            <a class="nav-link" href="<?php echo base_url()."Admin/showReports"?>">
              <i class="material-icons">timeline</i>
              <p> Sales Reports </p>
            </a>
          </li>
              <li class="nav-item <?php if ($path == 'showBalance'){ echo 'active';} ?>">
            <a class="nav-link" href="<?php echo base_url()."Admin/showBalance" ?>">
              <i class="material-icons">money</i>
              <p> Remaining balance </p>
            </a>
          </li>
          <li class="nav-item <?php if ($path == 'showLogs'){ echo 'active';} ?>">
            <a class="nav-link" href="<?php echo base_url()."Admin/showLogs" ?>">
              <i class="material-icons">receipt</i>
              <p> Logs </p>
            </a>
          </li>
            <li class="nav-item <?php if ($path == 'showBin'){ echo 'active';} ?>">
            <a class="nav-link" href="<?php echo base_url()."Admin/showBin" ?>">
              <i class="material-icons">delete</i>
              <p> Reports Bin </p>
            </a>
          </li>
          <?php
          if($this->session->userdata('access_level')==1)
          {
            ?>
               <li class="nav-item <?php if ($path == 'showAdmins'){ echo 'active';} ?>">
                <a class="nav-link" href="<?php echo base_url()."Admin/showAdmins" ?>">
                <i class="material-icons">group</i>
                <p> Admins </p>
              </a>
              </li>


            <?php
          }


          ?>
        


        </ul>
      <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 582px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 552px;"></div></div></div>
    <div class="sidebar-background"></div></div>