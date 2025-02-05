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
            <h1>Products</h1>
          </div>
            
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Products name</h4>
                  </div>
                  <div class="card-body">
                    <form action="<?=base_url('admin_products_add')?>" method="post" enctype='multipart/form-data'>
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name"class="form-control">
                      </div>
                      <div class="form-group">
                        <label>File</label>
                        <input type="file" name="file" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Weight in grams</label>
                        <input type="text" name="weight_in_grams" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>packaging_type</label>
                        <select class="form-control" name="packaging_type">                   
                        <option value="box">Box</option>
                        <option value="packet">Packet</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>packaging_quantity</label>
                        <input type="text" name="packaging_quantity" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Category</label>
                    
                        <select name="category_id" id="category_id" class="form-control">
                        <?php foreach ($categories as $key => $category) { ?>
                        <option value="<?php echo $category->id?>"><?php echo $category->name?></option>
                      
                        <?php } ?>
                        </select>
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
                          <th>Category</th>
                          <th>Quantity in grams</th>
                          <th>Packaging Quantity</th>
                          <th>Packaging type</th>
                          <th>Price</th>
                        </tr>
                      </thead>
                    <tbody>
                      
                  <?php
                    foreach ($product as $key => $product) { ?>
                      <tr>
                          <td><?=$product->name?></td>
                          <td><?=$product->file?></td>
                          <td><?=$product->category_id?></td>
                          <td><?=$product->weight_in_grams?></td>
                          <td><?=$product->packaging_type?></td>
                          <td><?=$product->packaging_quantity?></td>
                          <td><?=$product->price?></td>
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
