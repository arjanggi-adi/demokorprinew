<div class="breadcrumbs overlay">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Our Teachers</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text</p>
                </div>
                <ul class="breadcrumb-nav">
                    <li><a href="index.html">Home</a></li>
                    <li>Team</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php if ($setting['team_status'] == 'Show') : ?>
    <section id="teachers" class="teachers section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title align-center gray-bg">
                        <span>Team</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Experienced Advisors</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                foreach ($team as $row) {
                ?>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="single-team wow fadeInUp" data-wow-delay=".2s">
                            <div class="row">
                                <div class="col-lg-5 col-12">

                                    <div class="image">
                                        <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="#">
                                    </div>

                                </div>
                                <div class="col-lg-7 col-12">
                                    <div class="info-head">

                                        <div class="info-box">
                                            <span class="designation"><?php echo $row['designation_name']; ?></span>
                                            <h4 class="name"><a href="#"><?php echo $row['name']; ?></a></a></h4>
                                        </div>


                                        <ul class="social">
                                            <a id="detail" class="btn" data-bs-toggle="modal" data-bs-target="#<?php echo $row['designation_id'] ?>" data-name="<?php echo $row['name']; ?>" data-designation_name="<?php echo $row['designation_name']; ?>" data-photo="<?php echo $row['photo']; ?>">Lihat anggota
                                            </a>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php include('frontend/modal/modalteam.php'); ?>