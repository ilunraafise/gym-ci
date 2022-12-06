<body id="mycont">
<div  class="main-panel ps-container ps-theme-default ps-active-y">
<div class="content">
          <div class="container-fluid">

          <?php $page='dashboard';?>
            
                        
                        
                        <div class="row">
                          <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">how_to_reg</i>
                                </div>
                                <p class="card-category">Member Aktif</p>
                                <h3 class="card-title"><?php echo $active ?></h3>
                              </div>
                              <div class="card-footer">
                                 <!-- <div class="stats">
                                  <i class="material-icons">update</i> Just Updated
                                </div> -->
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-warning card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">person_outline</i>
                                </div>
                                <p class="card-category">Member Non Aktif</p>
                                <h3 class="card-title"><?php echo $inactive ?></h3>
                              </div>
                              <div class="card-footer">
                                <!-- <div class="stats">
                                  <i class="material-icons">update</i> Just Updated
                                </div> -->
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                  <i class="material-icons">money</i>
                                </div>
                                <p class="card-category">Pendapatan</p>
                                <h3 class="card-title">$<?php $query = $this->db->query('SELECT SUM( balance_status)as total FROM members')->row(); echo floatval($query->total);?></h3>
                              </div>
                              <div class="card-footer">
                                 <!-- <div class="stats">
                                  <i class="material-icons">update</i> Just Updated
                                </div> -->
                              </div>
                            </div>
                          </div>


                        </div>
                        
                        <br>
                        
                      </div>
                    </div>