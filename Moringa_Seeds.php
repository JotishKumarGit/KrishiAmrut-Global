<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KrishiAmrut Global - Organic Moringa Products</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">

</head>

<body>

    <!-- header -->
    <?php include('header.php') ?>

    <!-- Breadcrumb Section -->
    <section class="breadcrumb-section text-white d-flex align-items-center">
        <div class="overlay"></div>

        <div class="container text-center position-relative">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="page-title">Moringa Seeds</h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item">
                                <a href="#" class="text-white">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="text-white">Pages</a>
                            </li>
                            <li class="breadcrumb-item active text-white" aria-current="page">
                                Moringa Seeds
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- products details -->
    <div class="container-fluid product-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Product Details</h2>
                <p class="section-subtitle">Premium quality herbal products</p>
            </div>

            <div class="row align-items-center product-card shadow-lg p-4 rounded">
                <!-- Image -->
                <div class="col-lg-6 col-md-12 text-center mb-4 mb-lg-0">
                    <img src="assets/img/Moringa_Seeds.avif" class="img-fluid product-img" alt="Moringa Seeds">
                </div>

                <!-- Content -->
                <div class="col-lg-6 col-md-12">
                    <h2 class="product-title mb-3">Moringa Seeds</h2>
                    <p class="product-desc">
                        Our Moringa Seeds are carefully harvested and naturally dried to preserve
                        their potency and nutrients. Known for their numerous health benefits,
                        these seeds are ideal for extracting Moringa Oil, medicinal use, and
                        nutritional supplements.
                    </p>

                    <ul class="product-features">
                        <li>100% natural and chemical-free</li>
                        <li>High in antioxidants, vitamins, and healthy fats</li>
                        <li>Perfect for oil extraction, medicinal, and dietary use</li>
                    </ul>

                    <button class="btn btn-success px-4 py-2 mt-3" data-bs-toggle="modal"
                        data-bs-target="#enquiryModal">
                        Enquiry Now
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer  -->
    <?php include('footer.php') ?>