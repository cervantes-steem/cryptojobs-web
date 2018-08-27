<section class="container-fluid" id="perfil-freelancer"  style="background-image: url('images/foto-header.jpg');">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-md-12 titulo-seccion" > <h1> Buscador de Empleos </1></div>
				</div>

			</div>
		</div>
	</section>


	<section class="container-fluid" id="buscador-empresas">
		<div class="row">
			<div class="container">
				<div class="row add-feild" id="buscador-interno">
					<div class="col-md-4">
						<div class="form-group">

						<div class="controls ">

							<input id="Key-search" type="text" class="form-control k-textbox" data-role="text" placeholder="Palabra clave Ej: Nombre, Tag..." data-parsley-maxlength="120" data-parsley-errors-container="#errId1">
							<span id="errId1" class="error"></span>
						</div>

					</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">

						<div class="controls">

							<input id="Key-search-location" type="text" class="form-control k-textbox" data-role="text" placeholder="Locación: Ciudad, país" data-parsley-maxlength="120" data-parsley-errors-container="#errId1">
							<span id="errId1" class="error"></span>
						</div>

					</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
									<label class="control-label control-label-left  sr-only" for="categorias-freelancer"></label>
									<div class="controls ">

										<select id="categorias-freelancer" class="form-control" data-role="select" data-parsley-errors-container="#errId4">
											<option value="">All Categories</option>
											<option value="Option 1">Option 1</option>
											<option value="Option 2">Option 2</option>
											<option value="Option 3">Option 3</option>
											<option value="Option 4">Option 4</option>
										</select>
										<span id="errId4" class="error"></span>
									</div>

								</div>
					</div>
					<div class="col-md-2"> <button style="height: 52px;" class="btn btn-verde btn-lg col-xs-12"> Filtrar</button></div>

					
				</div>

				<div class="row">
					<article>
							<div class="brows-job-list">
								<div class="col-md-1 col-sm-2 small-padding">
									<div class="brows-job-company-img">
										<a href="job-detail.html"><img src="images/u-perfil.jpg" class="img-responsive img-circle" alt=""></a>
									</div>
								</div>
								<div class="col-md-6 col-sm-5">
									<div class="brows-job-position">
										<a href="job-apply-detail.html"><h3>Digital Marketing Manager</h3></a>
										<p>
											<span>Autodesk</span><span class="brows-job-sallery"><i class="fa fa-money"></i>Sbd 750 - 800</span>
											<span class="job-type cl-success bg-trans-success">Full Time</span>
										</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="brows-job-location">
										<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-job-link">
										<a href="job-apply-detail.html" class="btn btn-default">Apply Now</a>
									</div>
								</div>
							</div>
							<span class="tg-themetag tg-featuretag">Premium</span>
						</article>
						<article>
							<div class="brows-job-list">
								<div class="col-md-1 col-sm-2 small-padding">
									<div class="brows-job-company-img">
										<a href="job-detail.html"><img src="images/u-perfil.jpg" class="img-responsive img-circle" alt=""></a>
									</div>
								</div>
								<div class="col-md-6 col-sm-5">
									<div class="brows-job-position">
										<a href="job-apply-detail.html"><h3>Digital Marketing Manager</h3></a>
										<p>
											<span>Autodesk</span><span class="brows-job-sallery"><i class="fa fa-money"></i>Sbd 750 - 800</span>
											<span class="job-type bg-trans-denger cl-danger">Entretenimiento</span>
										</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="brows-job-location">
										<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-job-link">
										<a href="job-apply-detail.html" class="btn btn-default">Apply Now</a>
									</div>
								</div>
							</div>
							
						</article>
						<article>
							<div class="brows-job-list">
								<div class="col-md-1 col-sm-2 small-padding">
									<div class="brows-job-company-img">
										<a href="job-detail.html"><img src="images/u-perfil.jpg" class="img-responsive img-circle" alt=""></a>
									</div>
								</div>
								<div class="col-md-6 col-sm-5">
									<div class="brows-job-position">
										<a href="job-apply-detail.html"><h3>Digital Marketing Manager</h3></a>
										<p>
											<span>Autodesk</span><span class="brows-job-sallery"><i class="fa fa-money"></i>Sbd 750 - 800</span>
											<span class="job-type bg-trans-primary cl-primary"> Freelancer</span>
										</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="brows-job-location">
										<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-job-link">
										<a href="job-apply-detail.html" class="btn btn-default">Apply Now</a>
									</div>
								</div>
							</div>
							
						</article>
				</div>

				<div class="row">
					<div class="col-md-12 center-block text-center"> <?php include('p-elementos-repetidos/paginado.php'); ?></div>
				</div>
			</div>
		</div>
	</section>


