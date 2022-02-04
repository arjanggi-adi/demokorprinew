<?php
if (!$this->session->userdata('id')) {
    redirect(base_url() . 'admin/login');
}
?>

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Halaman</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Halaman</a></li>
                    <li class="breadcrumb-item active">Halaman</li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div class="">
    <?php if ($error) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="mdi mdi-block-helper me-2"></i>
            <?php echo $error; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <?php if ($success) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="mdi mdi-check-all me-2"></i>
            <?php echo $success; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills nav-justified" role="tablist">
                    <li class="nav-item waves-effect waves-light">
                        <a href="#tab_1" class="nav-link active" data-bs-toggle="tab" role="tab">
                            <span class="d-none d-sm-block">Home</span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a href="#tab_2" class="nav-link" data-bs-toggle="tab" role="tab">
                            <span class="d-none d-sm-block">About</span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a href="#tab_3" class="nav-link" data-bs-toggle="tab" role="tab">
                            <span class="d-none d-sm-block">Gallery</span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a href="#tab_4" class="nav-link" data-bs-toggle="tab" role="tab">
                            <span class="d-none d-sm-block">FAQ</span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a href="#tab_5" class="nav-link" data-bs-toggle="tab" role="tab">
                            <span class="d-none d-sm-block">Service</span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a href="#tab_6" class="nav-link" data-bs-toggle="tab" role="tab">
                            <span class="d-none d-sm-block">Portfolio</span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a href="#tab_7" class="nav-link" data-bs-toggle="tab" role="tab">
                            <span class="d-none d-sm-block">Testimonial</span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a href="#tab_8" class="nav-link" data-bs-toggle="tab" role="tab">
                            <span class="d-none d-sm-block">News</span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a href="#tab_9" class="nav-link" data-bs-toggle="tab" role="tab">
                            <span class="d-none d-sm-block">Contact</span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a href="#tab_10" class="nav-link" data-bs-toggle="tab" role="tab">
                            <span class="d-none d-sm-block">Search</span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a href="#tab_11" class="nav-link" data-bs-toggle="tab" role="tab">
                            <span class="d-none d-sm-block">Terms</span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a href="#tab_12" class="nav-link" data-bs-toggle="tab" role="tab">
                            <span class="d-none d-sm-block">Privacy</span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="tab_1" role="tabpanel">
                        <?php echo form_open(base_url() . 'admin/page/update', array('class' => 'form-horizontal')); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Title </label>
                                    <input type="text" name="mt_home" class="form-control" value="<?php echo $page['mt_home']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Keyword </label>
                                    <textarea class="form-control" name="mk_home"><?php echo $page['mk_home']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mt-4">
                                <label for="" class="form-label">Meta Description </label>
                                <textarea class="form-control" name="md_home" style="height:60px;"><?php echo $page['md_home']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <label for="" class="form-label"></label>
                                <button type="submit" class="btn btn-success pull-left" name="form_home">Update</button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>

                    <div class="tab-pane" id="tab_2">

                        <h4 class="card-title">Photo Section</h4>
                        <?php echo form_open_multipart(base_url() . 'admin/page/update', array('class' => 'form-horizontal')); ?>
                        <input type="hidden" name="current_about_photo" value="<?php echo $page['about_photo']; ?>">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Existing Photo </label>
                                    <?php if ($page['about_photo'] == '') : ?>
                                        <div style="padding-top:6px;color:red;">No Photo Found</div>
                                    <?php else : ?>
                                        <img src="<?php echo base_url(); ?>public/uploads/<?php echo $page['about_photo']; ?>" style="width:300px;">
                                        <br>
                                        <a href="<?php echo base_url(); ?>admin/page/delete_about_photo" class="btn btn-danger btn-xs mt-4" onClick="return confirm('Are you sure?');">Delete Photo</a>
                                    <?php endif; ?>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Change Photo </label>
                                    <input type="file" name="about_photo" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4 mb-4">
                                <label for="" class="form-label"></label>
                                <button type="submit" class="btn btn-success pull-left" name="form_about_photo">Update Photo</button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>

                        <h4 class="card-title">Other Information Section</h4>
                        <?php echo form_open(base_url() . 'admin/page/update', array('class' => 'form-horizontal')); ?>
                        <div class="col-lg-12">
                            <div class="mt-4">
                                <label for="" class="form-label">About Heading </label>
                                <input type="text" name="about_heading" class="form-control" value="<?php echo $page['about_heading']; ?>">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mt-4">
                                <label for="" class="form-label">About Content </label>
                                <textarea name="about_content" class="form-control" cols="30" rows="10" id="editor1"><?php echo $page['about_content']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mt-4">
                                <label for="" class="form-label">Mission Heading </label>
                                <input type="text" name="mission_heading" class="form-control" value="<?php echo $page['mission_heading']; ?>">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mt-4">
                                <label for="" class="form-label">Mission Content </label>
                                <textarea name="mission_content" class="form-control" cols="30" rows="10" id=""><?php echo $page['mission_content']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mt-4">
                                <label for="" class="form-label">Vision Heading </label>
                                <input type="text" name="vision_heading" class="form-control" value="<?php echo $page['vision_heading']; ?>">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mt-4">
                                <label for="" class="form-label">Vision Content </label>
                                <textarea name="vision_content" class="form-control" cols="30" rows="10" id=""><?php echo $page['vision_content']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mt-4">
                                <label for="" class="form-label">Meta Title </label>
                                <input type="text" name="mt_about" class="form-control" value="<?php echo $page['mt_about']; ?>">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mt-4">
                                <label for="" class="form-label">Meta Keyword </label>
                                <textarea class="form-control" name="mk_about" style="height:60px;"><?php echo $page['mk_about']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mt-4">
                                <label for="" class="form-label">Meta Description </label>
                                <textarea class="form-control" name="md_about" style="height:60px;"><?php echo $page['md_about']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mt-4">
                                <label for="" class="form-label"></label>
                                <button type="submit" class="btn btn-success pull-left" name="form_about">Update Information</button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>

                    <div class="tab-pane" id="tab_3">
                        <?php echo form_open(base_url() . 'admin/page/update', array('class' => 'form-horizontal')); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">About Heading </label>
                                    <input type="text" name="gallery_heading" class="form-control" value="<?php echo $page['gallery_heading']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Title </label>
                                    <input type="text" name="mt_gallery" class="form-control" value="<?php echo $page['mt_gallery']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Keyword </label>
                                    <textarea class="form-control" name="mk_gallery" style="height:60px;"><?php echo $page['mk_gallery']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Description </label>
                                    <textarea class="form-control" name="md_gallery" style="height:60px;"><?php echo $page['md_gallery']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <label for="" class="form-label"></label>
                                <button type="submit" class="btn btn-success pull-left" name="form_gallery">Update</button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>


                    <div class="tab-pane" id="tab_4">
                        <?php echo form_open(base_url() . 'admin/page/update', array('class' => 'form-horizontal')); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">FAQ Heading </label>
                                    <input type="text" name="faq_heading" class="form-control" value="<?php echo $page['faq_heading']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Title </label>
                                    <input type="text" name="mt_faq" class="form-control" value="<?php echo $page['mt_faq']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Keyword </label>
                                    <textarea class="form-control" name="mk_faq" style="height:60px;"><?php echo $page['mk_faq']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Description </label>
                                    <textarea class="form-control" name="md_faq" style="height:60px;"><?php echo $page['md_faq']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <label for="" class="form-label"></label>
                                <button type="submit" class="btn btn-success pull-left" name="form_faq">Update</button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>



                    <div class="tab-pane" id="tab_5">
                        <?php echo form_open(base_url() . 'admin/page/update', array('class' => 'form-horizontal')); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Service Heading </label>
                                    <input type="text" name="service_heading" class="form-control" value="<?php echo $page['service_heading']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Title </label>
                                    <input type="text" name="mt_service" class="form-control" value="<?php echo $page['mt_service']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Keyword </label>
                                    <textarea class="form-control" name="mk_service" style="height:60px;"><?php echo $page['mk_service']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Description </label>
                                    <textarea class="form-control" name="md_service" style="height:60px;"><?php echo $page['md_service']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <label for="" class="form-label"></label>
                                <button type="submit" class="btn btn-success pull-left" name="form_service">Update</button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>



                    <div class="tab-pane" id="tab_6">
                        <?php echo form_open(base_url() . 'admin/page/update', array('class' => 'form-horizontal')); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Portfolio Heading </label>
                                    <input type="text" name="portfolio_heading" class="form-control" value="<?php echo $page['portfolio_heading']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Title </label>
                                    <input type="text" name="mt_portfolio" class="form-control" value="<?php echo $page['mt_portfolio']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Keyword </label>
                                    <textarea class="form-control" name="mk_portfolio" style="height:60px;"><?php echo $page['mk_portfolio']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Description </label>
                                    <textarea class="form-control" name="md_portfolio" style="height:60px;"><?php echo $page['md_portfolio']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <label for="" class="form-label"></label>
                                <button type="submit" class="btn btn-success pull-left" name="form_portfolio">Update</button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>





                    <div class="tab-pane" id="tab_7">
                        <?php echo form_open(base_url() . 'admin/page/update', array('class' => 'form-horizontal')); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Testimonial Heading </label>
                                    <input type="text" name="testimonial_heading" class="form-control" value="<?php echo $page['testimonial_heading']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Title </label>
                                    <input type="text" name="mt_testimonial" class="form-control" value="<?php echo $page['mt_testimonial']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Keyword </label>
                                    <textarea class="form-control" name="mk_testimonial" style="height:60px;"><?php echo $page['mk_testimonial']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Description </label>
                                    <textarea class="form-control" name="md_testimonial" style="height:60px;"><?php echo $page['md_testimonial']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <label for="" class="form-label"></label>
                                <button type="submit" class="btn btn-success pull-left" name="form_testimonial">Update</button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>



                    <div class="tab-pane" id="tab_8">
                        <?php echo form_open(base_url() . 'admin/page/update', array('class' => 'form-horizontal')); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">News Heading </label>
                                    <input type="text" name="news_heading" class="form-control" value="<?php echo $page['news_heading']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Title </label>
                                    <input type="text" name="mt_news" class="form-control" value="<?php echo $page['mt_news']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Keyword </label>
                                    <textarea class="form-control" name="mk_news" style="height:60px;"><?php echo $page['mk_news']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Description </label>
                                    <textarea class="form-control" name="md_news" style="height:60px;"><?php echo $page['md_news']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <label for="" class="form-label"></label>
                                <button type="submit" class="btn btn-success pull-left" name="form_news">Update</button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>


                    <div class="tab-pane" id="tab_9">
                        <?php echo form_open(base_url() . 'admin/page/update', array('class' => 'form-horizontal')); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Contact Heading </label>
                                    <input type="text" name="contact_heading" class="form-control" value="<?php echo $page['contact_heading']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Title </label>
                                    <input type="text" name="mt_contact" class="form-control" value="<?php echo $page['mt_contact']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Keyword </label>
                                    <textarea class="form-control" name="mk_contact" style="height:60px;"><?php echo $page['mk_contact']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Description </label>
                                    <textarea class="form-control" name="md_contact" style="height:60px;"><?php echo $page['md_contact']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <label for="" class="form-label"></label>
                                <button type="submit" class="btn btn-success pull-left" name="form_contact">Update</button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>


                    <div class="tab-pane" id="tab_10">
                        <?php echo form_open(base_url() . 'admin/page/update', array('class' => 'form-horizontal')); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Search Heading </label>
                                    <input type="text" name="search_heading" class="form-control" value="<?php echo $page['search_heading']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Title </label>
                                    <input type="text" name="mt_search" class="form-control" value="<?php echo $page['mt_search']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Keyword </label>
                                    <textarea class="form-control" name="mk_search" style="height:60px;"><?php echo $page['mk_search']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Description </label>
                                    <textarea class="form-control" name="md_search" style="height:60px;"><?php echo $page['md_search']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <label for="" class="form-label"></label>
                                <button type="submit" class="btn btn-success pull-left" name="form_search">Update</button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>




                    <div class="tab-pane" id="tab_11">
                        <?php echo form_open(base_url() . 'admin/page/update', array('class' => 'form-horizontal')); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Term & Condition Heading </label>
                                    <input type="text" name="term_heading" class="form-control" value="<?php echo $page['term_heading']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Term & Condition Content </label>
                                    <textarea name="term_content" class="form-control" cols="30" rows="10" id="editor2"><?php echo $page['term_content']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Title </label>
                                    <input type="text" name="mt_term" class="form-control" value="<?php echo $page['mt_term']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Keyword </label>
                                    <textarea class="form-control" name="mk_term" style="height:60px;"><?php echo $page['mk_term']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Description </label>
                                    <textarea class="form-control" name="md_term" style="height:60px;"><?php echo $page['md_term']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <label for="" class="form-label"></label>
                                <button type="submit" class="btn btn-success pull-left" name="form_term">Update</button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>


                    <div class="tab-pane" id="tab_12">
                        <?php echo form_open(base_url() . 'admin/page/update', array('class' => 'form-horizontal')); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Privacy Policy Heading </label>
                                    <input type="text" name="privacy_heading" class="form-control" value="<?php echo $page['privacy_heading']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Privacy Policy Content </label>
                                    <textarea name="privacy_content" class="form-control" cols="30" rows="10" id="editor3"><?php echo $page['privacy_content']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Title </label>
                                    <input type="text" name="mt_privacy" class="form-control" value="<?php echo $page['mt_privacy']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Keyword </label>
                                    <textarea class="form-control" name="mk_privacy" style="height:60px;"><?php echo $page['mk_privacy']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <label for="" class="form-label">Meta Description </label>
                                    <textarea class="form-control" name="md_privacy" style="height:60px;"><?php echo $page['md_privacy']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <label for="" class="form-label"></label>
                                <button type="submit" class="btn btn-success pull-left" name="form_privacy">Update</button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>