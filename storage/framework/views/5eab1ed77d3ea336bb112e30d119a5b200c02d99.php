<?php $__env->startSection('konten'); ?>
<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Kode Barang
						</th>
						<th>
							Nama barang
						</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; ?>
					<?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td>
							<?php echo e($no++); ?>

						</td>
						<td>
							<?php echo e($tab->Kode_barang); ?>

						</td>
						<td>
							<?php echo e($tab->Nama_barang); ?>

						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
				</tbody>
			</table> 
			<button type="button" class="btn btn-primary">
				Default
			</button>
			<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master5', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>