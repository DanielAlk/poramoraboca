<div class="modal fade" id="modal_participate">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="glyphicon glyphicon-remove"></i></span></button>
      <div class="modal-body">
		  	<?php scroll_bar('#modal_participate .page', '#modal_participate') ?>
      	<h2 class="modal-gold-title">PARTICIPÁ</h2>
      	<div class="page">
	      	<h4 class="uppercase italic space-N-30">Comunicate con nosotros: contacto@juntosporboca.com</h4>
	      	<h3 class="uppercase italic space-N-30"><img class="space-E-20" src="<?php $asset->path('icon-heart.png') ?>">Ficha de afiliación</h3>
	      	<div class="row">
	      		<div class="col-md-9">
	      			<form action="http://www.ameal2015.com.ar/engine/registro.php" method="post" class="form-horizontal space-NS-20">
			      		<div class="form-group">
			      			<div class="col-sm-4">
			      				<input type="text" class="form-control" name="Nombre" id="contact_name" placeholder="Nombre" required>
			      			</div>
			      		</div>
			      		<div class="form-group">
			      			<div class="col-sm-4">
			      				<input type="text" class="form-control" name="Apellido" id="contact_last_name" placeholder="Apellido" required>
			      			</div>
			      		</div>
			      		<div class="form-group">
			      			<div class="col-sm-4">
			      				<input type="email" class="form-control" name="Email" id="contact_email" placeholder="Email" required>
			      			</div>
			      		</div>
			      		<div class="form-group">
			      			<div class="col-sm-4">
			      				<input type="text" class="form-control" name="DNI" id="contact_dni" placeholder="DNI" required>
			      			</div>
			      		</div>
			      		<div class="form-group">
			      			<div class="col-sm-4">
			      				<input type="text" class="form-control" name="FecNac" id="contact_birthday" placeholder="Fecha de Nacimiento" required>
			      				<span class="form-help">* Formato DD/MM/AAAA</span>
			      			</div>
			      		</div>
			      		<div class="form-group">
			      			<div class="col-sm-4">
			      				<input type="text" class="form-control" name="Numsocio" id="contact_member_id" placeholder="Número de socio" required>
			      			</div>
			      			<div class="col-sm-4">
			      				<select class="form-control" name="Categoria" id="contact_member_type">
			      					<option value="Vitalicios">Vitalicios</option>
			      					<option value="Activos">Activos</option>
			      					<option value="Cadetes">Cadetes</option>
			      					<option value="Menores">Menores</option>
			      					<option value="Infantiles">Infantiles</option>
			      					<option value="Del Interior">Del Interior</option>
			      					<option value="Adherente">Adherente</option>
			      				</select>
			      			</div>
			      		</div>
			      		<div class="form-group">
			      			<div class="col-sm-4">
			      				<input type="text" class="form-control" name="Localidad" id="contact_location" placeholder="Localidad" required>
			      			</div>
			      			<div class="col-sm-4">
			      				<input type="text" class="form-control" name="CP" id="contact_zip_code" placeholder="Código postal numérico" required>
			      			</div>
			      		</div>
			      		<div class="form-group">
			      			<div class="col-sm-4">
			      				<input type="text" class="form-control" name="Provincia" id="contact_province" placeholder="Provincia" required>
			      			</div>
			      		</div>
			      		<div class="form-group">
			      			<div class="col-sm-4">
			      				<input type="text" class="form-control" name="Domicilio" id="contact_address" placeholder="Domicilio particular" required>
			      			</div>
			      		</div>
			      		<div class="form-group">
			      			<div class="col-sm-4">
			      				<input type="text" class="form-control" name="profesion" id="contact_profession" placeholder="Profesión actual" required>
			      			</div>
			      			<div class="col-sm-4">
			      				<select class="form-control" name="ocupacion_profesion" id="contact_social_status">
			      					<option value="Jubilado">Jubilado</option>
			      					<option value="Estudiante">Estudiante</option>
			      					<option value="Profesional">Profesional</option>
			      				</select>
			      			</div>
			      		</div>
			      		<div class="form-group">
			      			<div class="col-sm-4">
			      				<input type="tel" class="form-control" name="Telpart" id="contact_phone" placeholder="Teléfono particular">
			      			</div>
			      			<div class="col-sm-4">
			      				<input type="tel" class="form-control" name="Telcel" id="contact_cell_phone" placeholder="Teléfono celular">
			      			</div>
			      			<div class="col-sm-4">
			      				<input type="tel" class="form-control" name="Tellaboral" id="contact_work_phone" placeholder="Teléfono laboral">
			      			</div>
			      		</div>
			      		<button type="submit" class="btn btn-default">ENVIAR</button>
			      	</form>
			      </div>
			    </div>
			  </div>
      </div>
    </div>
  </div>
</div>