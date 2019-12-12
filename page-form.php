<?php
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="grid-container section-p-t-b">
	<div class="">

        <!-- Formulario -->
	<div class="form-content">
		<form action="" class="formulario-tarjeta" id="formulario-tarjeta">
			<div class="grupo">
				<label for="inputNumero">Número  Tarjeta</label>
				<input type="text" id="inputNumero" maxlength="19" autocomplete="off">
			</div>
			<div class="grupo">
				<label for="inputNombre">Nombre</label>
				<input type="text" id="inputNombre" maxlength="19" autocomplete="off">
			</div>
	
			<div class="flexbox">
				<div class="grupo expira">
					<label for="selectMes">Expira</label>
					<div class="flexbox">
						<div class="grupo-select">
							<select name="mes" id="selectMes">
								<option disabled selected>Mes</option>
								<option value="1">1</option>
								<option value="2">2</option>
							</select>
							<i class="fas fa-angle-down"></i>
						</div>
						<div class="grupo-select">
							<select name="year" id="selectYear">
								<option disabled selected>Año</option>
								<option value="1">1</option>
								<option value="2">2</option>
							</select>
							<i class="fas fa-angle-down"></i>
						</div>
					</div>
				</div>
				
				<div class="grupo ccv">
					<label for="inputCCV">CCV</label>
					<input type="text" id="inputCCV" maxlength="3">
				</div>
			</div>
	
			<button type="submit" class="btn-enviar">Enviar</button>
		</form>
	</div>

	</div>
</div>
<?php
get_footer();