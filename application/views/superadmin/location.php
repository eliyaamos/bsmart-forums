
 <section style="padding:40px" > 
 <div>
     <?php 
			if($this->session->has_userdata('log_email')){

			$email = $this->session->userdata('log_email');
			$id = $this->session->userdata('id');
			$full_name = $this->session->userdata('full_name');
			$phone = $this->session->userdata('phone');
             $user_type = $this->session->userdata('user_type');
			
			}?> 
</div> 
     <!-- <div class="card">       -->
              <h3 class="text-center">Akaunti yangu</h3> 
        <br>
           <form action="<?php echo base_url()."location/update_profile"; ?>" method="POST"> 
           <h5 style="text-align:center; text-weight: 5px; color:blue;">Taarifa Binafsi</h5>
               <div class="row">
                 <div class="col-xl-3 col-md-6 form-group"> 
                    <label>Jina</label><br>
                    <input style="text-weight: 5mm;  text-align:center;" disabled value="<?php if(!empty($full_name)){echo $full_name; }  ?>">
                  </div>
                  <div class="col-xl-3 col-md-6 form-group"> 
                    <label>Namba ya Simu</label><br>
                    <input style="text-weight: 5mm;  text-align:center;" value="<?php if(!empty($phone)){echo $phone; }  ?>"> 
                    </div>

                    <div class="col-xl-3 col-md-6 form-group"> 
                    <label>Barua Pepe</label><br>
                    <input style="text-weight: 5mm;  text-align:center;" value="<?php if(!empty($email)){echo $email; }  ?>">
                    </div>

                    <div class="col-xl-3 col-md-6 form-group"> 
                    <label>Membership No</label><br>
                    <input style="text-weight: 5mm;  text-align:center;" value="<?php if(!empty($phone)){echo $phone; }  ?>"> 
                    </div>
               </div>
               <h5 style="text-weight: 5mm; color:blue; text-align:center;" >Makazi</h5>
                <div class="row"> 
                    <div class="col-xl-3 col-md-6 form-group"> 
                        <label for="region">Region</label>
                        
                        <select id="regions" name="region" class="form-control"> 
                        <option selected disabled>Select Region</option> 
                                <?php  if(isset($regions[0]))  { 
                                foreach ($regions as $key => $value)  { ?>
                                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option> <?php } } ?> 
                    </select> 
                    
                    </div>

                    <div class="col-xl-3 col-md-6 form-group"> 
                        <label for="district">District</label>
                        <select id="districts" name="district" class="form-control"> 
                        <option selected disabled>Select Districts</option> 
                                <?php  if(isset($districts[0]))  { 
                                foreach ($districts as $key => $value)  { ?> 
                                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option> <?php } } ?> 
                                    
                    </select> 
                    </div>

                    <div class="col-xl-3 col-md-6 form-group"> 
                        <label for="ward">Ward</label>
                        <select id="wards" name="ward" class="form-control"> 
                        <option selected disabled>Select Ward</option> 
                                <?php  if(isset($wards[0]))  { 
                                foreach ($wards as $key => $value)  { ?> 
                                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option> <?php } } ?> 
                    </select> 
                    </div>

                    <div class="col-xl-3 col-md-6 form-group"> 
                    <label for="village">Village</label>
                    <select id="villages" name="village" class="form-control"> 
                        <option selected >Select Village</option> 
                        
                    </select> 
                    </div>
                </div>  
                <div>
                    <!-- <input for="id" name="id" value="<?php if(!empty($email)){echo $email; }  ?>"> -->
                   <input type="submit" class="btn btn-warning" style="border-radius:0px;" name="save" value="Update">
                </div>
                
           </form>
          
        </div>
    </section>
     <!-- //Jquery code to load the place while change the country  */ -->
      
    