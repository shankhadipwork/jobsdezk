<?php include_once("main.class.php"); ?>
<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
        <a href="dashboard" class="brand-logo">
          <img src="assets/images/logo-new.png" alt="logo">
        </a>
      </div>
      <div class="mdc-drawer__content">
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="index.html">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                Home Page
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                Companies
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">                  
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="add-company">
                      Companies Listing
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="sample-page-submenu">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pages</i>
                Jobs Posting
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="sample-page-submenu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="job-listing">
                      Job List
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="sample-page-submenu1">
                  <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pages</i>
                  Recruiters
                  <i class="mdc-drawer-arrow material-icons">chevron_right</i>
                </a>
                <div class="mdc-expansion-panel" id="sample-page-submenu1">
                  <nav class="mdc-list mdc-drawer-submenu">
                    <div class="mdc-list-item mdc-drawer-item">
                      <a class="mdc-drawer-link" href="recruiter-list">
                        Recruiters List
                      </a>
                    </div>
                    <div class="mdc-list-item mdc-drawer-item">
                      <a class="mdc-drawer-link" href="add-recruiter">
                        Add New Recruiter
                      </a>
                    </div>
                  </nav>
                </div>
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="candidate-submenu">
                    <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pages</i>
                    Candidates
                    <i class="mdc-drawer-arrow material-icons">chevron_right</i>
                  </a>
                  <div class="mdc-expansion-panel" id="candidate-submenu">
                    <nav class="mdc-list mdc-drawer-submenu">
                      <div class="mdc-list-item mdc-drawer-item">
                        <a class="mdc-drawer-link" href="candidates-listing">
                          Candidates List
                        </a>
                      </div>
                    </nav>
                  </div>
                </div>

          </nav>
        </div>
      </div>
    </aside>