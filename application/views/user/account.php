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

<h4 class="text-center">My Account</h4>
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
                                    <b>Region : </b>
                                    <span>Kagera</span>
                                </td>
                              </tr>
                            <tr>
                                <td>
                                    <b>District :</b>
                                    <span>BUKOBA</span>
                                </td>
                                <td>
                                    <b>WARD: </b>
                                    <span>Katerero</span>
                                </td>
 
                            </tr>
                            <tr>
                                <td>
                                    <b>Villege/Street :</b>
                                    <span>Kyema</span>
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
                                    <span>TSH 135,000.00</span>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                    
                </div>