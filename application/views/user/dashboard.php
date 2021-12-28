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
    style="font-size:5mm; 
	color: maroon;" >
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


    <div class="row clearfix" style="text-align:center; padding:20px">

        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="body">
                    <div class="card-value float-right text-muted"><i class="icon-calendar"></i></div>
                    <h3 class="mb-1">-</h3>
                    <div>Date of Join</div>
                </div>
            </div>
        </div>

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

    
</section>