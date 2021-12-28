<div>
     <?php 

		// if (isset($read_set_value)) {
		// echo $this->session->userdata('name');
		// }
			if($this->session->has_userdata('log_email')){

			$email = $this->session->userdata('log_email');
			$id = $this->session->userdata('id');
			$full_name = $this->session->userdata('full_name');
			$phone = $this->session->userdata('phone');
             $user_type = $this->session->userdata('user_type');
			// echo $log_email;
			// echo $id;
			// echo $full_name;

      //print_r($user_data);
			}else {
        redirect();
      }?> 
</div> 
       

	
<section>
  <div class="session_data" 
    style="font-size:5mm; color: maroon;" >
       <div class="row" > 
            <div style="text-align:right; padding-right:30px"class="col xl-6 md-6">
            <p><b>Welcome Back: </b>
                <b style="color:red"><?php echo $full_name; ?></b> <br>
                <b style="color: blue"><?php echo $phone;?></b> <br> 
                <b><?php echo $user_type; ?></b>
            </p>
            </div>
        </div>
    </div>


       <div style="text-align:center; padding:10px;" class="text-center;">
         <h4 style="color: black; font-weight: bolder; text-align:center;">Super Admin DashBoard</h4> 
        <div class="row">
          <div class="col-md-3 col-sm-6 col-6">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="far fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Users</span>
                <span class="info-box-number"><?php $this->db->from('users'); $numquery = $this->db->get();
             echo $numquery->num_rows();?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-6">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="far fa-coin"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Contribution</span>
                <span class="info-box-number"><?php $this->db->from('users'); $numquery = $this->db->get();
                 echo $numquery->num_rows();?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-6">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="far fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Admins</span>
                <span class="info-box-number"><?php $this->db->from('users'); $numquery = $this->db->get();
               echo $numquery->num_rows();?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-6">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Mosques</span>
                <span class="info-box-number"><?php $this->db->from('users'); $numquery = $this->db->get();
                echo $numquery->num_rows();?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          
       </div>


        <div class="row">
          <div class="col-md-3 col-sm-6 col-6">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Users</span>
                <span class="info-box-number"><?php $this->db->from('users'); $numquery = $this->db->get();
                 echo $numquery->num_rows();?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-6">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="far fa-coin"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Contribution</span>
                <span class="info-box-number"><?php $this->db->from('users'); $numquery = $this->db->get();
               echo $numquery->num_rows();?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-6">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="far fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Admins</span>
                <span class="info-box-number"><?php $this->db->from('users'); $numquery = $this->db->get();
               echo $numquery->num_rows();?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-6">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Mosques</span>
                <span class="info-box-number"><?php $this->db->from('users'); $numquery = $this->db->get();
                echo $numquery->num_rows();?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        </div>
      </div> 
      

      <!-- MY INFORMATIONS -->
<div class="card">
  <h2 style="color: black; font-weight: bolder; text-align:center;">My Info</h2>
<div class="row clearfix" style="text-align:center; padding:20px">

<div class="col-lg-4 col-md-6">
    <div class="card">
        <div class="body">
            <div class="card-value float-right text-muted"><i class="icon-diamond"></i></div>
            <h3 class="mb-1">
                TSH 120,624                    </h3>
            <div>Total Contribution</div>
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6">
    <div class="card">
        <div class="body">
            <div class="card-value float-right text-muted"><i class="icon-credit-card"></i></div>
            <h3 class="mb-1">
                TSH 10,000                    </h3>
            <div>Last Contribution</div>
        </div>
    </div>
</div>
</div>

<div class="body">

<table class="table table-striped table-bordered table-member-details break-lines">
                    <tbody>
                    <tr>
                        <th class="top-title">Member Details</th>
                        <th class="top-title">Contribution Details</th>
                    </tr>
                    <tr>
                        <td>
                            <b>Member Number :</b>
                            <span>45047814</span>
                        </td>
                        <td>
                            <b>First Contribution Period : </b>
                            <span>Apr 2020</span>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <b>Member Name :</b>
                            <span><?php echo $full_name; ?></span>
                        </td>
                        <td>
                            <b>Last Contribution Period: </b>
                            <span>Nov 2021</span>
                        </td>
                   </tr>
                    <tr>
                        <td>
                            <b>Member Phone :</b>
                            <span> <?php echo $phone; ?></span>
                        </td>
                        <td>
                            <b>Last Contribution : </b>
                            <span>100,000</span>
                        </td>
                      </tr>

                      <tr>
                        <td>
                            <b>Region :</b>
                            <span> Kagera</span>
                        </td>
                        
                      </tr>

                    <tr>
                        <td>
                            <b>District :</b>
                            <span>BUKOBA</span>
                        </td>
                        <td>
                            <b>Mosque :</b>
                            <span> Bukoba</span>
                        </td>

                    </tr>
                    <tr>
                    <td>
                            <b>WARD: </b>
                            <span>Katerero</span>
                        </td>
                        <td>
                            <b>No of Contributions: </b>
                            <span>19</span>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <b>Date of Join :</b>
                            <span>05-6-2020</span>
                        </td>
                        <td>
                            <b>Total Contributions: </b>
                            <span>TSH 1,624,864.41</span>
                        </td>

                    </tr>
                </tbody></table>
            
        </div>

    </div>
    
</div>

   

</section>

