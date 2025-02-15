<?php $this->load->view('admin/admin_sidebar_new'); ?>

<?php if($this->session->flashdata('update_success')): ?>
                <script>
                  Swal.fire({
                    title: 'Success!',
                    text: '<?= $this->session->flashdata('update_success'); ?>',
                    icon: 'success'
                  });
                </script>
              <?php endif; ?>

              <?php if($this->session->flashdata('update_fail')): ?>
              <script>
                Swal.fire({
                  title: 'Error!',
                  text: '<?= $this->session->flashdata('update_fail'); ?>',
                  icon: 'error'
                });
              </script>
<?php endif; ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Slides</h1>
          </div>
            
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Sliders name</h4>
                  </div>
                  <div class="card-body">
                    <form action="<?=base_url('admin_sliders_add')?>" method="post" enctype='multipart/form-data'>
                      <div class="form-group">
                        <label>slider</label>
                        <input type="text" name="name"class="form-control">
                      </div>
                      <div class="form-group">
                        <label>File</label>
                        <input type="file" name="file" class="form-control">
                      </div>
                      <button type="submit" class="btn btn-primary text-white">Submit</button>
                    </form>
                  </div>
                </div>                  
                <div class="card mt-5">
                  <div class="card-header">
                      List
                  </div>
                  <div class="card-body">
                  <table class="table ">
                  <thead>
                        <tr>
                          <th>Name</th>
                          <th>File</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                    <tbody>
                      
                  <?php
                    foreach ($sliders as $key => $slider) { ?>
                      <tr>
                          <td><?=$slider->name?></td>
                          <td><?=$slider->file?></td>
                        <td>
                          <a href="<?= base_url('admin_sliders/edit/' . $slider->id) ?>" class="btn btn-warning">Edit</a>
                  </td>
                  <td>
                    <a href="<?= base_url('admin_sliders/delete/' . $slider->id) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this file?');">Delete</a>
                 </td>
                        </tr>

                     <?php 
                     }
                    ?>           
                       </tbody>
                       </table>                           
                  </div>
                </div>                
              </div>              
            </div>
          </div>          
          <?php $this->load->view('admin/admin_footer_view'); ?>          
        </section>
      </div>
