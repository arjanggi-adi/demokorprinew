<?php
if (!$this->session->userdata('id')) {
  redirect(base_url() . 'admin/login');
}
?>

<div class="row">
  <div class="col-12">
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
      <h4 class="mb-sm-0 font-size-18">Blog</h4>

      <div class="page-title-right">
        <ol class="breadcrumb m-0">
          <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
          <li class="breadcrumb-item active">Blog</li>
        </ol>
      </div>

    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-8">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mini-stats-wid">
          <div class="card-body">

            <div class="d-flex flex-wrap">
              <div class="me-3">
                <p class="text-muted mb-2">Total Portfolio</p>
                <h5 class="mb-0"><?php echo $total_portfolio; ?></h5>
              </div>

              <div class="avatar-sm ms-auto">
                <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                  <i class="bx bxs-book-bookmark"></i>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card blog-stats-wid">
          <div class="card-body">

            <div class="d-flex flex-wrap">
              <div class="me-3">
                <p class="text-muted mb-2">Total Berita</p>
                <h5 class="mb-0"><?php echo $total_news; ?></h5>
              </div>

              <div class="avatar-sm ms-auto">
                <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                  <i class="bx bxs-news"></i>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card blog-stats-wid">
          <div class="card-body">
            <div class="d-flex flex-wrap">
              <div class="me-3">
                <p class="text-muted mb-2">Total Team</p>
                <h5 class="mb-0"><?php echo $total_team_member; ?></h5>
              </div>

              <div class="avatar-sm ms-auto">
                <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                  <i class="bx bxs-group"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end row -->

    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start">
          <div class="me-2">
            <h5 class="card-title mb-4">Recent post</h5>
          </div>
        </div>

        <div class="table-responsive">
          <table class="table align-middle table-nowrap mb-0">
            <tr>
              <th scope="col" colspan="2">Post</th>
              <th scope="col">View</th>
              <th scope="col">Comments</th>
            </tr>
            <tbody>
              <?php
              $i = 0;
              foreach ($news as $row) {
                $i++;
              ?>
                <tr>
                  <td style="width: 100px;"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['news_title']; ?>" class="avatar-md h-auto d-block rounded"></td>
                  <td>
                    <h5 class="font-size-13 text-truncate mb-1"><a href="#" class="text-dark"><?php echo $row['news_title']; ?></a></h5>
                    <p class="text-muted mb-0"><?php echo format_indo(date('Y-m-d', strtotime($row['news_date']))); ?></p>
                  </td>
                  <td><i class="bx bx-show align-middle me-1"></i> <?php echo $row['total_view']; ?></td>
                  <td><i class="bx bx-comment-dots align-middle me-1"></i> <?php echo $row['comment']; ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>


        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-4">
    <div class="card overflow-hidden">
      <div class="bg-primary bg-soft">
        <div class="row">
          <div class="col-7">
            <div class="text-primary p-3">
              <h5 class="text-primary">Selamat Datang Di</h5>
              <p>Dashboard Korpri Bali</p>
            </div>
          </div>
          <div class="col-5 align-self-end">
            <img src="<?php echo base_url(); ?>assets/images/profile-img.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
      <div class="card-body pt-0">
        <div class="row">
          <div class="col-sm-4">
            <div class="avatar-md profile-user-wid mb-4">
              <?php if ($this->session->userdata('photo') == '') : ?>
                <img src="<?php echo base_url(); ?>public/img/no-photo.jpg" alt="" class="img-thumbnail rounded-circle">
              <?php else : ?>
                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $this->session->userdata('photo'); ?>" alt="" class="img-thumbnail rounded-circle">
              <?php endif; ?>
            </div>
            <h5 class="font-size-15 text-truncate"><?php echo $this->session->userdata('full_name'); ?></h5>
            <p class="text-muted mb-0 text-truncate">KORPRI</p>
          </div>

          <div class="col-sm-8">
            <div class="pt-4">

              <!-- <div class="row">
                <div class="col-6">
                  <h5 class="font-size-15">125</h5>
                  <p class="text-muted mb-0">Projects</p>
                </div>
                <div class="col-6">
                  <h5 class="font-size-15">$1245</h5>
                  <p class="text-muted mb-0">Revenue</p>
                </div>
              </div> -->
              <!-- <div class="mt-4">
                <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>