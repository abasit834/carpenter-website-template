<?php include 'includes/header.php'; ?> 

<!-- Page Header -->
<div class="container-fluid page-header py-5 mb-5 position-relative" style="background: url('img/carousel-1.jpg') center center/cover no-repeat;">
    <div class="overlay"></div> <!-- Dark Overlay -->
    <div class="container py-5 position-relative">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Installation</h1>
        <p class="text-white mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga unde veritatis ea ab molestias blanditiis aut. Mollitia modi, qui laborum iste, doloremque adipisci labore quaerat magni suscipit error tenetur blanditiis!</p>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="service.php">Services</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Installation</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Content Section -->
<div class="container mt-5">
   
    <!-- Image Gallery -->
    <div class="row g-4">
        <?php 
        $images = [
            'img/portfolio-1.jpg',
            'img/portfolio-2.jpg',
            'img/portfolio-3.jpg',
            'img/portfolio-4.jpg',
            'img/portfolio-5.jpg',
            'img/portfolio-6.jpg'
        ];
        
        foreach($images as $index => $image) {
        ?>
            <div class="col-md-4">
                <div class="gallery-item position-relative">
                    <img src="<?= $image ?>" class="img-fluid rounded shadow-sm" alt="Sanding Image" data-bs-toggle="modal" data-bs-target="#imageModal">
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<!-- Modal for Image Slideshow -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">
                        <?php foreach($images as $index => $image) { ?>
                            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                <img src="<?= $image ?>" class="d-block w-100 rounded" alt="Sanding Image">
                            </div>
                        <?php } ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'includes/footer.php'; ?> 