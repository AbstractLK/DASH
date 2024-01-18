


                <?php
                    include('header.php');
                ?>  

                </div>
            </div>
        </header>
        <!-- end: Header -->

        <!-- Page title -->
        <section id="page-title" data-bg-parallax="assets/q1.jpg">
            <div class="container">
                <div class="page-title">
                    <h1>Gallery 2 Columns</h1>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Home</a>
                        </li>
                        <li class="active"><a href="#">Photo Gallery</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- end: Page title -->

        <!-- Content -->
        <section id="page-content" style="background-image: url('assets/opacity-changed-breadcrums1.jpg');">
            <div class="container">
                <!-- Gallery -->
                <div class="grid-layout grid-3-columns m-l-40 m-r-40" data-margin="20" data-item="grid-item" data-lightbox="gallery">
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="assets/1.jpg" data-lightbox="gallery-image"><img src="assets/1.jpg" style="width: 100%;"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="assets/2.jpg" data-lightbox="gallery-image"><img src="assets/2.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="assets/3.jpg" data-lightbox="gallery-image"><img src="assets/3.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="assets/5.jpg" data-lightbox="gallery-image"><img src="assets/5.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="assets/4.jpg" data-lightbox="gallery-image"><img src="assets/4.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="assets/6.jpg" data-lightbox="gallery-image"><img src="assets/6.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="assets/7.jpg" data-lightbox="gallery-image"><img src="assets/7.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="assets/8.jpg" data-lightbox="gallery-image"><img src="assets/8.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="assets/9.jpg" data-lightbox="gallery-image"><img src="assets/9.jpg"></a>
                    </div>
                </div>
                <!-- end: Gallery -->

                <!-- Show more posts Button -->
                <div id="showMore">
                    <a href="#" class="btn btn-rounded btn-light" style='background-color: rgb(255 255 255 / 80%); color: gray'><i class="icon-refresh-cw"></i> Load More Photos</a>
                </div>
                <!-- end: Show more posts Button -->
            </div>
        </section> <!-- end: Content --><br>
        
        <?php
            include('footer.php');
        ?>