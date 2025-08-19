<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <!-- Header dengan Search -->
    <div class="row mb-5">
        <div class="col-md-8 mx-auto text-center">
            <h1 class="fw-bold mb-3">Daftar Konser</h1>
        </div>
    </div>

    <!-- Daftar Konser -->
    <div class="row g-4">
        <?php $__empty_1 = true; $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm hover-effect">
               
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="badge bg-primary"><?php echo e($ticket->lokasi); ?></span>
                        <span class="text-success fw-bold">Rp <?php echo e(number_format($ticket->harga,0,',','.')); ?></span>
                    </div>
                    <h5 class="card-title"><?php echo e($ticket->judul); ?></h5>
                    <p class="text-muted small">
                        <i class="far fa-calendar-alt me-1"></i> 
                        <?php echo e(\Carbon\Carbon::parse($ticket->tanggal)->translatedFormat('d M Y, H:i')); ?>

                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <?php if($ticket->status == 'active'): ?>
                                <span class="badge bg-success">Tersedia</span>
                            <?php elseif($ticket->status == 'deactive'): ?>
                                <span class="badge bg-danger">Sold Out</span>
                            <?php else: ?>
                                <span class="badge bg-secondary">Tidak Tersedia</span>
                            <?php endif; ?>
                        </div>
                        <small class="text-muted">Stok: <?php echo e($ticket->stok); ?></small>
                    </div>
                </div>
                <div class="card-footer bg-white border-0 d-flex justify-content-between">
                    <a href="<?php echo e(route('konser.detail', $ticket->id)); ?>" class="btn btn-outline-primary btn-sm">
                        <i class="far fa-eye me-1"></i> Detail
                    </a>
                    <?php if($ticket->status == 'active' && $ticket->stok > 0): ?>
                        <a href="<?php echo e(route('konser.detail', $ticket->id)); ?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-shopping-cart me-1"></i> Beli
                        </a>
                    <?php elseif($ticket->status == 'deactive'): ?>
                        <button class="btn btn-danger btn-sm" disabled>
                            <i class="fas fa-ban me-1"></i> Sold Out
                        </button>
                    <?php else: ?>
                        <button class="btn btn-secondary btn-sm" disabled>
                            <i class="fas fa-times me-1"></i> Habis
                        </button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="col-12 text-center py-5">
            <h4 class="text-muted">Tidak ada konser ditemukan</h4>
        </div>
        <?php endif; ?>
    </div>

    <!-- Pagination -->
    <div class="row mt-4">
        <div class="col-md-12">
            <?php echo e($tickets->appends(request()->query())->links()); ?>

        </div>
    </div>
</div>

<style>
    .hover-effect:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    .rounded-pill {
        border-radius: 50rem !important;
    }
    .rounded-pill-start {
        border-top-right-radius: 0 !important;
        border-bottom-right-radius: 0 !important;
    }
    .rounded-pill-end {
        border-top-left-radius: 0 !important;
        border-bottom-left-radius: 0 !important;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\konser1\resources\views/konser/index.blade.php ENDPATH**/ ?>