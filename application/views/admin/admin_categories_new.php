<?php $this->load->view('admin/admin_sidebar_new'); ?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if($this->session->flashdata('success')): ?>
<script>
  Swal.fire({
    title: 'Success!',
    text: '<?= $this->session->flashdata('success'); ?>',
    icon: 'success'
  });
</script>
<?php endif; ?>

<?php if($this->session->flashdata('fail')): ?>
<script>
  Swal.fire({
    title: 'Error!',
    text: '<?= $this->session->flashdata('fail'); ?>',
    icon: 'error'
  });

</script>
<?php endif; ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Categories</h1>
          </div>
            
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Categories name</h4>
                  </div>
                  <div class="card-body">
                    <form action="<?=base_url('admin_categories_add')?>" method="post" enctype='multipart/form-data'>
                      <div class="form-group">
                        <label>Name</label>
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
                        </tr>
                      </thead>
                    <tbody>
                      
                  <?php
                    foreach ($categories as $key => $category) { ?>
                      <tr>
                          <td><?=$categories->name?></td>
                          <td><?=$categories->file?></td>
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
