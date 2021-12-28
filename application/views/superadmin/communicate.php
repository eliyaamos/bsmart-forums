<section class="content">

<div class="row">
  <div class="col-xl-6 md-12">
  <form action="" method="POST">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
              <h3 style="background:green; color:black; text-align:center; ">Send SMS</h3>
            <div class="card-header ">
               <label for="page_tittle">From
                   <input type="text" class="form-control " name="page_tittle" >
                </label>
                <label for="page_tittle">To
                   <input type="text" class="form-control " name="page_tittle" >
                </label>

              <!-- tools box -->
              <div class="card-tools">
              <button style="background:black; color:red; " type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button style="background:white; color:black; text-width:5mm;" type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fas fa-times"></i></button>
                  
              </div>
              <!-- /. tools -->
            </div>

            

            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <textarea for="page_content" name="page_content" class="form-control textarea" 
                 style="width: 100%; height: 300px; font-size: 14px; line- height: 300px; border: 1px solid #dddddd; padding: 10px;">
                </textarea>
               </div> 
               <div class="modal-footer">
                  <input for="page_id" class="btn btn-default" type="hidden" name="page_id" value="Home" />
                <input style="color:white; background: green;" class="btn btn-default" type="submit" name="save" type="button" value="Send" />
                <input style="color:white; background: red;" class="btn btn-default" type="button" type="button"  data-card-widget="collapse" value="Minimize Page" />
            </div>             
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>


 <!--=================== ITEM TWO SEND EMAIL====================== -->
  <div class="col-xl-6 md-12">  
<form action="" method="POST">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
              <h3 style="background:black; color:red; text-align:center; ">Send Email</h3>
            <div class="card-header ">
               <label for="page_tittle">From
                   <input type="text" class="form-control " name="page_tittle" >
                </label>
                <label for="page_tittle">To
                   <input type="text" class="form-control " name="page_tittle" >
                </label>

              <!-- tools box -->
              <div class="card-tools">
              <button style="background:black; color:red; " type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button style="background:white; color:black; text-width:5mm;" type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fas fa-times"></i></button>
                  
              </div>
              <!-- /. tools -->
            </div>

            

            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <textarea for="page_content" name="page_content" class="form-control textarea" 
                 style="width: 100%; height: 300px; font-size: 14px; line- height: 300px; border: 1px solid #dddddd; padding: 10px;">
                 <?php if(!empty($user_data)){$page_content = $user_data[0]['page_content']; echo $page_content; }?>
                </textarea>
               </div> 
               <div class="modal-footer">
                  <input for="page_id" class="btn btn-default" type="hidden" name="page_id" value="Home" />
                <input style="color:white; background: green;" class="btn btn-default" type="submit" name="save" type="button" value="Send" />
                <input style="color:white; background: red;" class="btn btn-default" type="button" type="button"  data-card-widget="collapse" value="Minimize Page" />
            </div>             
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>



</section>