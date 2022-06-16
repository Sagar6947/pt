      <aside class="sidebar sidebar-left">
        <div class="sidebar-content">
          <div class="aside-toolbar">
            <ul class="site-logo">
              <li>
                <!-- START LOGO -->
                <a href="<?php echo base_url('admin'); ?>">
                  <div class="logo">
                    <img src="<?= base_url(); ?>assets/admin/logo.webp" alt="logo" style="background-color: ;" class="lwidth" />
                  </div>
                </a>
              </li>
            </ul>
            <ul class="header-controls">
              <li class="nav-item menu-trigger">
                <button type="button" class="btn btn-link btn-menu" data-toggle-state="mini-sidebar" data-key="leftSideBar">
                <i class="fas fa-dot-circle"></i>
                </button>
              </li>
            </ul>
          </div>
          <nav class="main-menu">
            <ul class="nav metismenu">
              <!-- <li>
                <a href="<?= base_url('admin'); ?>"><i class="fa fa-arrow-right" aria-hidden="true"></i><span>Blogs</span></a>
              </li> -->


              <li>
                <a href="<?= base_url('admin_Dashboard/blogs'); ?>"><i class="fa fa-arrow-right" aria-hidden="true"></i><span> Blogs </span></a>
              </li>

              <li class="nav-dropdown">
                <a href="<?= base_url('admin_Dashboard/view_category'); ?>"><i class="fa fa-arrow-right" aria-hidden="true"></i><span>Video Category</span></a>
              </li>

              <li>
                <a href="<?= base_url('admin_Dashboard/view_products'); ?>"><i class="fa fa-arrow-right" aria-hidden="true"></i><span>Video</span></a>
              </li>

              <li>
                <a href="<?= base_url('admin_Dashboard/contact_query'); ?>"><i class="fa fa-arrow-right" aria-hidden="true"></i><span>Subscribers</span></a>
              </li>

              <li>
                <a href="<?= base_url('admin_Dashboard/franchise_query'); ?>"><i class="fa fa-arrow-right" aria-hidden="true"></i><span>Franchise</span></a>
              </li>
              
              <!-- 
              <li>
                <a href="<?= base_url('admin_Dashboard/testimonials'); ?>"><i class="fa fa-arrow-right" aria-hidden="true"></i><span>Testimonials </span></a>
              </li>

              <li>
                <a href="<?= base_url('admin_Dashboard/blog'); ?>"><i class="fa fa-arrow-right" aria-hidden="true"></i><span>Blog </span></a>
              </li> -->

            
             


            </ul>
          </nav>
        </div>
      </aside>