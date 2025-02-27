<?php include 'includes/header.php'; ?> 

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Projects</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Projects</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

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
                    <!-- Link with data-bs-slide-to -->
                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-slide-to="<?= $index ?>">
                        <img src="<?= $image ?>" class="img-fluid rounded shadow-sm" alt="Project Image">
                    </a>
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
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php foreach($images as $index => $image) { ?>
                            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                <img src="<?= $image ?>" class="d-block w-100 rounded" alt="Project Image">
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

<!-- Custom CSS -->
<style>
    /* Page Header Styles */
    .page-header {
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: white;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }

    /* Gallery Item */
    .gallery-item img {
        cursor: pointer;
        transition: transform 0.3s ease;
    }
    .gallery-item img:hover {
        transform: scale(1.05);
    }

    /* Modal Image */
    .modal-body img {
        max-height: 80vh;
        width: auto;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get all the gallery links
        var galleryLinks = document.querySelectorAll('.gallery-item a');

        // Add click event to each link
        galleryLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                var slideTo = this.getAttribute('data-bs-slide-to');
                var carousel = new bootstrap.Carousel(document.querySelector('#carouselExampleIndicators'));
                carousel.to(slideTo); // Move to the selected slide
            });
        });
    });
</script>

<?php include 'includes/footer.php'; ?> 