<?php if ($this->session->userdata('user_id')) : ?>
    <ul class="sidebar navbar-nav">
        <?php
        if ($this->session->userdata('role_id') == 1) {
            ?>
            <li class="nav-item dropdown" id="admin">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-cog"></i>
                    <span>System Admin</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Login Security:</h6>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>Role" id="role">
                        <i class="fas fa-users-cog"></i>
                        <span>Role</span>
                    </a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>User" id="user">
                        <i class="fas fa-user-cog"></i>
                        <span>User</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Calender :</h6>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>Year" id="year">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Year and Period</span>
                    </a>
                </div>
            </li>

        <?php } ?>

        <li class="nav-item dropdown" id="weekly">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-tasks"></i>
                <span>Task</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="<?php echo base_url(); ?>Weekly" id="role">
                    <i class="fas fa-fw fa-bug"></i>
                    <span>Weekly</span>
                </a
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Charts</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span></a>
        </li>
    </ul>
<?php endif; ?>