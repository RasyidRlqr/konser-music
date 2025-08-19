<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 fw-bold text-primary">
        <i class="fas fa-ticket-alt me-2"></i>Dashboard Tiket
    </h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group">
            <a href="<?php echo e(route('tickets.create')); ?>" class="btn btn-primary">
                <i class="fas fa-plus me-1"></i> Tambah Tiket Baru
            </a>
            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"><i class="fas fa-file-export me-2"></i>Export Data</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-filter me-2"></i>Filter</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Statistik -->
<div class="row mb-4">
    <div class="col-md-4 mb-4">
        <div class="card border-start border-primary border-4 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-uppercase text-muted fw-bold mb-2">Total Tiket</h6>
                        <h2 class="mb-0 fw-bold"><?php echo e($totalTickets); ?></h2>
                    </div>
                    <div class="icon-shape bg-primary bg-opacity-10 text-primary rounded-3">
                        <i class="fas fa-ticket-alt fa-2x"></i>
                    </div>
                </div>
                <div class="mt-3">
                    <span class="text-success fw-bold"><i class="fas fa-arrow-up me-1"></i> 12.5%</span>
                    <span class="text-muted ms-2">dari bulan lalu</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card border-start border-success border-4 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-uppercase text-muted fw-bold mb-2">Tiket Aktif</h6>
                        <h2 class="mb-0 fw-bold"><?php echo e($activeTickets); ?></h2>
                    </div>
                    <div class="icon-shape bg-success bg-opacity-10 text-success rounded-3">
                        <i class="fas fa-check-circle fa-2x"></i>
                    </div>
                </div>
                <div class="mt-3">
                    <span class="text-success fw-bold"><i class="fas fa-arrow-up me-1"></i> 8.3%</span>
                    <span class="text-muted ms-2">dari bulan lalu</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card border-start border-info border-4 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-uppercase text-muted fw-bold mb-2">Total Pendapatan</h6>
                        <h2 class="mb-0 fw-bold">Rp <?php echo e(number_format($revenue, 0, ',', '.')); ?></h2>
                    </div>
                    <div class="icon-shape bg-info bg-opacity-10 text-info rounded-3">
                        <i class="fas fa-wallet fa-2x"></i>
                    </div>
                </div>
                <div class="mt-3">
                    <span class="text-success fw-bold"><i class="fas fa-arrow-up me-1"></i> 24.1%</span>
                    <span class="text-muted ms-2">dari bulan lalu</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tabel Tiket -->
<div class="card shadow-sm border-0">
    <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center">
        <h5 class="mb-0 fw-bold">Daftar Tiket Konser</h5>
        <div class="d-flex">
            <div class="input-group me-2" style="width: 200px;">
                <span class="input-group-text bg-white"><i class="fas fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Cari tiket...">
            </div>
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                <i class="fas fa-filter me-1"></i>Filter
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Semua Tiket</a></li>
                <li><a class="dropdown-item" href="#">Aktif</a></li>
                <li><a class="dropdown-item" href="#">Habis</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Terbaru</a></li>
                <li><a class="dropdown-item" href="#">Terlama</a></li>
            </ul>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-4">#</th>
                        <th>Judul Konser</th>
                        <th>Tanggal</th>
                        <th>Lokasi</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Status</th>
                        <th class="text-end pe-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="ps-4"><?php echo e($loop->iteration); ?></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/40" class="rounded me-3" alt="Poster">
                                <div>
                                    <h6 class="mb-0"><?php echo e($ticket->judul); ?></h6>
                                    <small class="text-muted"><?php echo e($ticket->kategori); ?></small>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span class="fw-bold"><?php echo e(\Carbon\Carbon::parse($ticket->tanggal)->translatedFormat('d M Y')); ?></span>
                                <small class="text-muted"><?php echo e(\Carbon\Carbon::parse($ticket->tanggal)->translatedFormat('H:i')); ?> WIB</small>
                            </div>
                        </td>
                        <td><?php echo e($ticket->lokasi); ?></td>
                        <td>Rp <?php echo e(number_format($ticket->harga, 0, ',', '.')); ?></td>
                        <td>
    <?php if($ticket->stok_awal > 0): ?>
        <div class="progress" style="height: 6px; width: 80px;">
            <?php
                $percentage = ($ticket->stok / $ticket->stok_awal) * 100;
                $color = $percentage > 50 ? 'bg-success' : ($percentage > 20 ? 'bg-warning' : 'bg-danger');
            ?>
            <div class="progress-bar <?php echo e($color); ?>" role="progressbar" style="width: <?php echo e($percentage); ?>%" aria-valuenow="<?php echo e($percentage); ?>" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <small><?php echo e($ticket->stok); ?> dari <?php echo e($ticket->stok_awal); ?></small>
    <?php else: ?>
        <span class="badge bg-secondary">Belum tersedia</span>
    <?php endif; ?>
</td>
                        <td>
    <?php if($ticket->status == 'active'): ?>
        <span class="badge bg-success">Tersedia</span>
    <?php elseif($ticket->status == 'deactive'): ?>
        <span class="badge bg-danger">Sold Out</span>
    <?php else: ?>
        <span class="badge bg-secondary">Tidak Diketahui</span>
    <?php endif; ?>
</td>
                        <td class="text-end pe-4">
                            <div class="btn-group" role="group">
                                <a href="<?php echo e(route('tickets.edit', $ticket->id)); ?>" class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="<?php echo e(route('tickets.destroy', $ticket->id)); ?>" method="POST" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus tiket ini?')" data-bs-toggle="tooltip" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="#" class="btn btn-sm btn-outline-secondary" data-bs-toggle="tooltip" title="Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer bg-white border-top d-flex justify-content-between align-items-center">
        <div class="text-muted">
            Menampilkan <?php echo e($tickets->firstItem()); ?> sampai <?php echo e($tickets->lastItem()); ?> dari <?php echo e($tickets->total()); ?> entri
        </div>
        <div>
            <?php echo e($tickets->links()); ?>

        </div>
    </div>
</div>

<!-- Quick Stats -->
<div class="row mt-4">
    <div class="col-md-6 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-header bg-white border-bottom">
                <h6 class="mb-0 fw-bold">Penjualan Tiket Terbaru</h6>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <div class="list-group-item border-0 px-0">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="mb-1">Coldplay: Music of the Spheres</h6>
                                <small class="text-muted">5 tiket terjual</small>
                            </div>
                            <span class="text-success fw-bold">Rp 7.500.000</span>
                        </div>
                    </div>
                    <div class="list-group-item border-0 px-0">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="mb-1">BLACKPINK: Born Pink World Tour</h6>
                                <small class="text-muted">3 tiket terjual</small>
                            </div>
                            <span class="text-success fw-bold">Rp 6.000.000</span>
                        </div>
                    </div>
                    <div class="list-group-item border-0 px-0">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="mb-1">Sheila On 7: 25 Tahun Perjalanan</h6>
                                <small class="text-muted">8 tiket terjual</small>
                            </div>
                            <span class="text-success fw-bold">Rp 4.800.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-header bg-white border-bottom">
                <h6 class="mb-0 fw-bold">Konser Mendatang</h6>
            </div>
            <div class="card-body">
                <div class="d-flex mb-3">
                    <img src="https://via.placeholder.com/80" class="rounded me-3" alt="Poster">
                    <div>
                        <h6 class="mb-1">Java Jazz Festival 2024</h6>
                        <small class="text-muted">2-4 Mar 2024 • JIE Expo, Jakarta</small>
                        <div class="mt-2">
                            <span class="badge bg-primary bg-opacity-10 text-primary me-2">Jazz</span>
                            <span class="badge bg-success bg-opacity-10 text-success">Tersedia</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <img src="https://via.placeholder.com/80" class="rounded me-3" alt="Poster">
                    <div>
                        <h6 class="mb-1">BTS: Yet to Come World Tour</h6>
                        <small class="text-muted">15 Apr 2024 • GBK Stadium, Jakarta</small>
                        <div class="mt-2">
                            <span class="badge bg-danger bg-opacity-10 text-danger me-2">K-Pop</span>
                            <span class="badge bg-warning bg-opacity-10 text-warning">Hampir Habis</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <img src="https://via.placeholder.com/80" class="rounded me-3" alt="Poster">
                    <div>
                        <h6 class="mb-1">NOAH: Konser Kembali ke Bandung</h6>
                        <small class="text-muted">10 Des 2023 • Gelora Bandung Lautan Api</small>
                        <div class="mt-2">
                            <span class="badge bg-info bg-opacity-10 text-info me-2">Rock</span>
                            <span class="badge bg-success bg-opacity-10 text-success">Tersedia</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->startSection('scripts'); ?>
<script>
    // Enable tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });

    // Search functionality
    document.querySelector('.input-group input').addEventListener('keyup', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        const rows = document.querySelectorAll('tbody tr');
        
        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            if (text.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\konser1\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>