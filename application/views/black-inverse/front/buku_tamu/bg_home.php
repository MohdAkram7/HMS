					<section class="post">
						<div>
							<h2>Buku Tamu</h2>
							<?php echo $this->session->flashdata("hasil"); ?>
							<?php echo form_open("web/buku_tamu/kirim"); ?>
							<table border="0" cellpadding="5" cellspacing="0">
								<tr>
									<td width="100">Nama</td>
									<td width="20">:</td>
									<td><input type="text" name="nama" size="40" required></td>
								</tr>
								<tr>
									<td width="100">Email</td>
									<td width="20">:</td>
									<td><input type="text" name="email" size="40" required></td>
								</tr>
								<tr>
								<tr valign="top">
									<td width="100">Pesan</td>
									<td width="20">:</td>
									<td><textarea name="pesan" rows="10" cols="50" required></textarea></td>
								</tr>
								<tr>
									<td width="100"></td>
									<td width="20"></td>
									<td><input type="submit" value="Kirim"><input type="reset" value="Hapus"></td>
								</tr>

							</table>
							<?php echo form_close(); ?>
							<?php echo $dt; ?>
						</div>
						<div class="cl">&nbsp;</div>
					</section>