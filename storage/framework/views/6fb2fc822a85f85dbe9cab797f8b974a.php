

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white py-3">
                    <h3 class="mb-0"><i class="fas fa-ticket-alt me-2"></i> Checkout Tiket</h3>
                </div>
                
                <div class="card-body p-4">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <h6><i class="fas fa-exclamation-triangle me-2"></i>Terjadi Kesalahan:</h6>
                            <ul class="mb-0">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php if(session('error')): ?>
                        <div class="alert alert-danger">
                            <i class="fas fa-exclamation-triangle me-2"></i><?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>

                    <div class="alert alert-info">
                        <h5 class="alert-heading"><i class="fas fa-info-circle me-2"></i>Informasi Tiket</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="mb-1"><strong>Konser:</strong> <?php echo e($ticket->judul); ?></p>
                                <p class="mb-1"><strong>Tanggal:</strong> <?php echo e(\Carbon\Carbon::parse($ticket->tanggal)->translatedFormat('l, d F Y')); ?></p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-1"><strong>Lokasi:</strong> <?php echo e($ticket->lokasi); ?></p>
                                <p class="mb-1"><strong>Harga:</strong> Rp <?php echo e(number_format($ticket->harga, 0, ',', '.')); ?></p>
                                <p class="mb-1"><strong>Status:</strong> 
                                    <?php if($ticket->status == 'active'): ?>
                                        <span class="badge bg-success">Tersedia</span>
                                    <?php elseif($ticket->status == 'deactive'): ?>
                                        <span class="badge bg-danger">Sold Out</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary">Tidak Tersedia</span>
                                    <?php endif; ?>
                                </p>
                                <p class="mb-1"><strong>Stok:</strong> <?php echo e($ticket->stok); ?> tiket</p>
                            </div>
                        </div>
                    </div>

                    <form action="<?php echo e(route('ticket.pay', $ticket->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        
                        <h5 class="mb-3"><i class="fas fa-user-circle me-2"></i>Data Pembeli</h5>
                        
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nomor Telepon</label>
                                <input type="tel" name="no_telepon" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nomor KTP</label>
                                <input type="text" name="no_ktp" class="form-control" required>
                            </div>
                        </div>

                        <div class="d-grid gap-2 mt-4">
                            <?php if($ticket->status == 'active' && $ticket->stok > 0): ?>
                                <button type="submit" class="btn btn-primary btn-lg py-3">
                                    <i class="fas fa-credit-card me-2"></i> Lanjutkan Pembayaran
                                </button>
                            <?php elseif($ticket->status == 'deactive'): ?>
                                <button type="button" class="btn btn-danger btn-lg py-3" disabled>
                                    <i class="fas fa-ban me-2"></i> Sold Out
                                </button>
                            <?php elseif($ticket->stok <= 0): ?>
                                <button type="button" class="btn btn-secondary btn-lg py-3" disabled>
                                    <i class="fas fa-times me-2"></i> Tiket Habis
                                </button>
                            <?php else: ?>
                                <button type="button" class="btn btn-secondary btn-lg py-3" disabled>
                                    <i class="fas fa-times me-2"></i> Tidak Tersedia
                                </button>
                            <?php endif; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\konser1\resources\views/tickets/checkout.blade.php ENDPATH**/ ?>