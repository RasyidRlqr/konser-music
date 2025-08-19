

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-success text-white py-4">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <i class="fas fa-check-circle fa-3x"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h2 class="mb-0">Pembayaran Berhasil!</h2>
                            <p class="mb-0">Terima kasih telah memesan tiket kami</p>
                        </div>
                    </div>
                </div>
                
                <div class="card-body p-5 text-center">
                    <div class="alert alert-success mb-4">
                        <h4 class="alert-heading"><i class="fas fa-ticket-alt me-2"></i> Detail Pemesanan</h4>
                        <hr>
                        <div class="row text-start">
                            <div class="col-md-6">
                                <p><strong>Konser:</strong> <?php echo e($ticket->judul); ?></p>
                                <p><strong>Pembeli:</strong> <?php echo e($ticket->buyer_name ?? 'Tidak tersedia'); ?></p>
                                <p><strong>Email:</strong> <?php echo e($ticket->buyer_email ?? 'Tidak tersedia'); ?></p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Tanggal Konser:</strong> <?php echo e(\Carbon\Carbon::parse($ticket->tanggal)->translatedFormat('d F Y')); ?></p>
                                <p><strong>Kode Tiket:</strong> <?php echo e($ticket->kode_unik ?? 'TKT-' . str_pad($ticket->id, 6, '0', STR_PAD_LEFT)); ?></p>
                                <p><strong>Waktu Checkout:</strong> <?php echo e($ticket->checkout_at ? $ticket->checkout_at->translatedFormat('d F Y, H:i') : 'Tidak tersedia'); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center gap-3 mt-4">
                        <a href="<?php echo e(route('ticket.downloadPDF', $ticket->id)); ?>" class="btn btn-primary btn-lg px-4">
                            <i class="fas fa-download me-2"></i> Download Tiket
                        </a>
                        <a href="<?php echo e(route('home')); ?>" class="btn btn-outline-secondary btn-lg px-4">
                            <i class="fas fa-home me-2"></i> Kembali ke Beranda
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\konser1\resources\views/tickets/success.blade.php ENDPATH**/ ?>