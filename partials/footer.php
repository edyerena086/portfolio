<footer>
	<div class="container">
		<!-- top -->
		<div class="row footer-top">
			<div class="col-xl-12 text-center">
				<h5>
					Contáctame
				</h5>

				<p>
					¡Me encantaría apoyarte con tu proyecto de <b>desarrollo web</b> o<br/>de <b>desarrollo de aplicaciones móviles</b>!
				</p>
			</div>
		</div>

		<form action="">
			<!-- form first row -->
			<div class="row footer-contact-form">
				<div class="col-xl-6">
					<div class="form-group">
						<input type="text" placeholder="Nombre(s)" class="form-control" name="nombre">
						<span id="frmFooterName" class="footer-display-errors"></span>
					</div>
				</div>

				<div class="col-xl-6">
					<div class="form-group">
						<input type="text" placeholder="Apellido(s)" class="form-control" name="apellido">
						<span id="frmFooterLastName" class="footer-display-errors"></span>
					</div>
				</div>
			</div>

			<!-- form second row -->
			<div class="row footer-contact-form">
				<div class="col-xl-6">
					<div class="form-group">
						<input type="email" placeholder="Correo electrónico" name="email" class="form-control">
						<span id="frmFooterEmail" class="footer-display-errors"></span>
					</div>
				</div>

				<div class="col-xl-6">
					<div class="form-group">
						<input type="tel" placeholder="Teléfono" name="telefono" class="form-control">
						<span id="frmFooterPhone" class="footer-display-errors"></span>
					</div>
				</div>
			</div>

			<!-- form third row -->
			<div class="row footer-contact-form">
				<div class="col-xl-12">
					<div class="form-group">
						<textarea name="mensaje" id="" cols="30" rows="5" class="form-control" placeholder="Tu Mensaje"></textarea>
					</div>
				</div>
			</div>

			<!-- bottom -->
			<div class="row footer-contact-form">
				<div class="col-xl-12 text-center">
					<button class="btn btn-black">Enviar</button>
				</div>
			</div>
		</form>

		<!-- bottom -->
		<div class="row footer-bottom">
			<div class="col-xl-6">
				¡Me encantaría apoyarte con tu proyecto!<br/><a href="contacto">contáctame</a>
			</div>

			<div class="col-xl-6 d-flex align-items-center justify-content-end">
				&copy;<?php echo(date('Y')) ?> -  Todos los derechos reservados.
			</div>
		</div>
	</div>
</footer>