@extends('layouts.cssNjs')
<div id="wrapper">

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/portal">Proprio.pk</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
      
      <!-- /.dropdown -->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
          <li><a href="#"><i class="fa fa-user fa-fw"></i> {{$email}}</a>
          </li>
          <li><a href="adminSetting"><i class="fa fa-gear fa-fw"></i> Settings</a>
          </li>
          <li class="divider"></li>
          <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
          </li>
        </ul>
        <!-- /.dropdown-user -->
      </li>
      <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
          
          <li>
            <a href="portal"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
          </li>
          
          <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Orders<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
              <li>
                <a href="/insert">Add Orders</a>
              </li>
              <li>
                <a href="/view-records">View Orders</a>
              </li>
            </ul>
            <!-- /.nav-second-level -->
          </li>
          
          <li>
            <a href="#"><i class="fa fa-files-o fa-fw"></i> Admin<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
              <li>
                <a href="/insertAdmin">Add Admin</a>
              </li>
              <li>
                <a href="/viewAdmin-records">View Admin</a>
              </li>
            </ul>
            <!-- /.nav-second-level -->
          </li>
        </ul>
      </div>
      <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
  </nav>

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">New Order</h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    
    <div class="row">
      <div class="col-lg-8">
        <div class="panel panel-default">
          
          
          <!-- /.Add orders data -->
          <form action = "/create" method = "post">
            {{ csrf_field() }}
           
           <table>
            <tr class="form-group">
             <td class="col-sm-2 control-label">Full Name</td>
             <td><input class="form-control" type='text' placeholder="Full Name" maxlength="16" name='name' required /></td>
           </tr>
           <tr class="form-group">
             <td class="col-sm-2 control-label">Email</td>
             <td><input class="form-control" type='email' placeholder="a@example.com" name='email' required /></td>
           </tr>
           <tr class="form-group">
             <td class="col-sm-2 control-label">Shipping Address</td>
             <td><input class="form-control" type='text' placeholder="Shipping Address" name='address' required /></td>
           </tr>
           <tr class="form-group">
             <td class="col-sm-2 control-label">Phone Number</td>
             <td><input class="form-control" type='number' placeholder="03121234567" name='phone' required /></td>
           </tr>
           <tr class="form-group">
             <td class="col-sm-2 control-label">Waist</td>
             <td><input class="form-control" type="text" placeholder="-inch" maxlength="2" name="waist" required /></td>
           </tr>
           <tr class="form-group">
             <td class="col-sm-2 control-label">Inseam</td>
             <td><input class="form-control" type='text' placeholder="-inch" maxlength="2" name='inseam' required /></td>
           </tr>
           <tr class="form-group">
             <td class="col-sm-2 control-label">Outseam</td>
             <td><input class="form-control" type='text' placeholder="-inch" maxlength="2" name='outseam' required /></td>
           </tr>
           <tr class="form-group">
             <td class="col-sm-2 control-label">Rise</td>
             <td><input class="form-control" type='text' placeholder="-inch" maxlength="2" name='rise' required /></td>
           </tr>
           <tr class="form-group">
             <td class="col-sm-2 control-label">Hips</td>
             <td><input class="form-control" type="text" name='hip' placeholder="-inch" maxlength="2" required /></td>
           </tr>
           <tr class="form-group">
             <td class="col-sm-2 control-label">Thigh</td>
             <td><input class="form-control" type="text" placeholder="-inch" maxlength="2" name="thigh" required /></td>
           </tr>
           <tr class="form-group">
             <td class="col-sm-2 control-label">JeansFit</td>
             <td>
              <input type="radio" name="jeanfit" value="male" checked> Male<br>
              <input type="radio" name="jeanfit" value="female"> Female<br>
            </td>
          </tr>
          <tr class="form-group">
           <td class="col-sm-2 control-label">Style</td>
           <td><input class="form-control" type='text' placeholder="" maxlength="10" name='style' required /></td>
         </tr>
         <tr class="form-group">
           <td class="col-sm-2 control-label">Fabric</td>
           <td><input class="form-control" type='text' placeholder="" maxlength="10" name='fabric' required /></td>
         </tr>
         <tr class="form-group">
           <td class="col-sm-2 control-label">Fabric Color</td>
           <td><input class="form-control" type='text' placeholder="" maxlength="10" name='fabricColor' required /></td>
         </tr>
         <tr class="form-group">
           <td class="col-sm-2 control-label">Scrapping</td>
           <td><input class="form-control" type='text' placeholder="" maxlength="10" name='scrapping' required /></td>
         </tr>
         <tr class="form-group">
           <td class="col-sm-2 control-label">Whiskers</td>
           <td><input class="form-control" type='text' placeholder="" maxlength="10" name='whiskers' required /></td>
         </tr>
         <tr class="form-group">
           <td class="col-sm-2 control-label">Ripped</td>
           <td><input class="form-control" type='text' placeholder="" maxlength="10" name='rip' required /></td>
         </tr>
         <tr class="form-group">
           <td class="col-sm-2 control-label">Custom Text</td>
           <td><input class="form-control" type='text' placeholder="" maxlength="25" name='comment' required /></td>
         </tr>
         <tr class="form-group">
           <td colspan = '2'>
            <input type = 'submit' value = "Add Order"/>
          </td>
        </tr>
      </table>
      
    </form>
    
  </div>
  <!-- /.panel-footer -->
</div>
<!-- /.panel .chat-panel -->
</div>
<!-- /.col-lg-4 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
