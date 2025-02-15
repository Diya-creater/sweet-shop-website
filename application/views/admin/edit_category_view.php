<?php $this->load->view('admin/admin_sidebar_new'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit categories</h1>
        </div>

        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Image/Video</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('admin_categories/update') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $categories->id ?>">

                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" name="name" class="form-control" value="<?= $categories->name ?>">
                            </div>

                            <div class="form-group">
                                <label>Current File</label>
                                <p><?= $categories->file ?></p>
                            </div>

                            <div class="form-group">
                                <label>Upload New File (Optional)</label>
                                <input type="file" name="file" class="form-control">
                            </div>

                            <!-- <div class="form-group">
                      <label>Package Availabilities</label><br>
                      <label for="option1">
                          <input type="checkbox" id="option1" name="options" value="<?= $categories->is_250gm ?>">
                          Is_250gm
                      </label>
                      
                      <label for="option2">
                          <input type="checkbox" id="option2" name="options" value="<?= $categories->is_500gm ?>">
                          Is_500gm
                      </label>
                      
                      <label for="option3">
                          <input type="checkbox" id="option3" name="options" value="<?= $categories->is_1000gm ?>">
                          Is_1000gm
                      </label>
                  </div>   -->


                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('admin/admin_footer_view'); ?>
    </section>
</div>