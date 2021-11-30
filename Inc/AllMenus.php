<nav class="navbar  navbar-expand-lg  navbar-dark bg-primary">
    <a class="navbar-brand" href="AdminDashboard.php"><?php echo $Settings['name'] ?></a>
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class=" text-success">Menu</span>
    </button>
    <div class="navbar-collapse collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="AdminDashboard.php"><span class="fa fa-tachometer-alt text-white"></span> Admin Dashboard</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="ManagerDashboard.php"><span class="fas fa-store-alt text-white"></span>Manager Dashboard</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link " href="CashierDashboard.php"><span class="fa fa-tachometer-alt text-info"></span> <?php echo $EmpName ?> DashBoard</a>
            </li>
                       
            <li class="nav-item">
                <a class="nav-link" href="SearchCustomer.php" title="View  All Customers"><span class="fa fa-user text-info"></span> Customer Search</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="SearchTransaction.php" title="View  All Customers"><span class="fas fa-file-invoice-dollar text-warning"></span> Transaction Search</a>
            </li>

            <?php if(isset($EmpRegisterID)){ ?>
                <li class="nav-item">
                    <a class="nav-link"  href="RegisterDetails.php?Action=View&RegisterID=<?php echo $EmpRegisterID; ?>"
                       target="_blank"  > Register # <?php echo $EmpRegisterID; ?></a>
                </li>
            <?php }?>
           
              <li class="nav-item">
                
                     <button class="nav-link float-right btn btn-sm"  data-toggle="modal" data-target="#RunReportModal"><i class="far fa-chart-bar text-success"></i>Reports</button>
                  </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-cog text-white-50"></span> Settings</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="TimeSheetDashboard.php">TimeSheet</a>
                    <a class="dropdown-item" href="Employees.php">Employees</a>
                    <a class="dropdown-item" href="Company.php">Company</a>
                    <a class="dropdown-item" href="Log.php">Logs</a>
                    <a class="dropdown-item" href="#">X</a>
                </div>
            </li>
        </ul>
        <form class=" mt-2 mt-md-0">            
            <a class="btn btn-outline-light  btn-sm my-2 my-sm-0" title="Log Out" href="DoLogIn.php?Action=LogOut"><?php echo $EmpName . " " . $EmpRegisterID; ?> <span class="fa fa-power-off"></span></a>
        </form>
    </div>
</nav>
