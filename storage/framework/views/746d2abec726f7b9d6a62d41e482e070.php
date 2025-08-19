<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Konser Musik'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fas fa-music me-2"></i>ZONA MUSIK
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="konser">Konser</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="artis">Artis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentangkami">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak">Kontak</a>
                    </li>
                </ul>
                    <?php if(auth()->guard()->check()): ?>
                    <div class="d-flex align-items-center">
                        <a href="/admin/dashboard" class="btn btn-outline-light me-2">
                            <i class="fas fa-tachometer-alt me-1"></i> Dashboard
                        </a>
                        <a href="/profile" class="btn btn-outline-light me-2">
                            <i class="fas fa-user me-1"></i> Profile
                        </a>
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-sign-out-alt me-1"></i> Logout
                            </button>
                        </form>
                    </div>
                    <?php else: ?>
                    <a href="login" class="btn btn-outline-light me-2">Login</a>
                    <a href="register" class="btn btn-primary">Daftar</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="mb-4">ZONA MUSIK</h5>
                    <p>Platform penjualan tiket konser musik standar internasional di Indonesia. Beli tiket konser favoritmu dengan mudah dan aman.</p>
                    <div class="social-icons mt-4">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <h5 class="mb-4">Menu</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white">Home</a></li>
                        <li class="mb-2"><a href="#" class="text-white">Konser</a></li>
                        <li class="mb-2"><a href="#" class="text-white">Artis</a></li>
                        <li class="mb-2"><a href="#" class="text-white">Tentang Kami</a></li>
                        <li><a href="#" class="text-white">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <h5 class="mb-4">Bantuan</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white">Cara Pesan</a></li>
                        <li class="mb-2"><a href="#" class="text-white">Pembayaran</a></li>
                        <li class="mb-2"><a href="#" class="text-white">Pengembalian</a></li>
                        <li><a href="#" class="text-white">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h5 class="mb-4">Kontak Kami</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Jl. Nitikan, yogyakarta</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i> +62 858 4263 0868</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> info@zonamusik.com</li>
                        <li><i class="fas fa-clock me-2"></i> Senin - Jumat, 09:00 - 17:00</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 bg-secondary">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2025 Zona Musik. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">
                        <a href="#" class="text-white me-3">Terms of Service</a>
                        <a href="#" class="text-white">Privacy Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\laragon\www\konser1\resources\views/layouts/app.blade.php ENDPATH**/ ?>