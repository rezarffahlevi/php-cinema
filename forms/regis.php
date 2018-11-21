<section id="contentSection">
	<h2 style="text-align:center">Form Register</h2><br>
	<div class="panel-body">
		<form class="form-horizontal form-bordered" method="post">
					
			<div class="form-group">
				<label class="col-md-3 control-label">Username</label>
					<div class="col-md-6">
						<div class="input-group input-group-icon">
							<span class="input-group-addon">
								<span class="icon"><i class="glyphicon glyphicon-user"></i></span>
							</span>
								<input type="text" class="form-control" name="username" maxlength="40" placeholder="Username" required>
						</div>
					</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label">Password</label>
					<div class="col-md-6">
						<div class="input-group input-group-icon">
							<span class="input-group-addon">
								<span class="icon"><i class="glyphicon glyphicon-asterisk"></i></span>
							</span>
								<input type="password" class="form-control" name="password" maxlength="40" placeholder="******" required>
						</div>
					</div>
			</div>

			<div class="form-group">
				<label class="col-md-3 control-label">Nama Lengkap</label>
					<div class="col-md-6">
						<div class="input-group input-group-icon">
							<span class="input-group-addon">
								<span class="icon"><i class="fa fa-user"></i></span>
							</span>
								<input type="text" class="form-control" name="nama" maxlength="40" placeholder="Nama Lengkap" required>
						</div>
					</div>
			</div>
					
					<div class="form-group">
						<label class="col-md-3 control-label">Tanggal Lahir</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</span>
										<input type="date" data-plugin-masked-input data-input-mask="99/99/9999" placeholder="__/__/____" class="form-control" name="lahir" required>
								</div>
							</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-3 control-label">No Telepon</label>
							<div class="col-md-6 control-label">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-phone"></i>
									</span>
										<input type="text" name="notelp" placeholder="089 123 1234" class="form-control" maxlength="16" required>
								</div>
							</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-3 control-label">Email</label>
							<div class="col-md-6">
								<div class="input-group input-group-icon">
									<span class="input-group-addon">
										<span class="icon"><i class="fa fa-envelope"></i></span>
									</span>
										<input type="email" name="email" class="form-control" maxlength="50" placeholder="contoh@contoh.com" required>
								</div>
							</div>
					</div>
				
					<div class="form-group">
						<label class="col-md-3 control-label" for="textareaAutosize">Alamat</label>
							<div class="col-md-6">
								<textarea class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize name="alamat" placeholder="Jl. H.Contoh rt07/01 No.14 Kel - Kec Kota" required></textarea>
							</div>
					</div>



					<div class="form-group">
						<label class="col-md-8 control-label"></label>
							<div class="col-md-4">												
								<button type="submit" class="btn btn-primary" name="regist">Setuju</button>
							</div>
					</div>	


			</div>
		</form>
	</div>
</section>