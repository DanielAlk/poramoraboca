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
	      			<form class="form-horizontal space-NS-20">
			      		<div class="form-group">
			      			<div class="col-xs-4">
			      				<input type="text" class="form-control" name="contact[name]" id="contact_name" placeholder="Nombre">
			      			</div>
			      		</div>
			      		<div class="form-group">
			      			<div class="col-xs-4">
			      				<input type="text" class="form-control" name="contact[last_name]" id="contact_last_name" placeholder="Apellido">
			      			</div>
			      		</div>
			      		<div class="form-group">
			      			<div class="col-xs-4">
			      				<input type="email" class="form-control" name="contact[email]" id="contact_email" placeholder="Email">
			      			</div>
			      		</div>
			      		<div class="form-group">
			      			<div class="col-xs-4">
			      				<input type="text" class="form-control" name="contact[dni]" id="contact_dni" placeholder="DNI">
			      			</div>
			      		</div>
			      		<div class="form-group">
			      			<div class="col-xs-4">
			      				<input type="text" class="form-control" name="contact[birthday]" id="contact_birthday" placeholder="Fecha de Nacimiento">
			      				<span class="form-help">* Formato DD/MM/AAAA</span>
			      			</div>
			      		</div>
			      		<div class="form-group">
			      			<div class="col-xs-4">
			      				<input type="text" class="form-control" name="contact[member_id]" id="contact_member_id" placeholder="Número de socio">
			      			</div>
			      			<div class="col-xs-4">
			      				<select class="form-control" name="contact[member_type]" id="contact_member_type">
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
			      			<div class="col-xs-4">
			      				<input type="text" class="form-control" name="contact[location]" id="contact_location" placeholder="Localidad">
			      			</div>
			      			<div class="col-xs-4">
			      				<input type="text" class="form-control" name="contact[zip_code]" id="contact_zip_code" placeholder="Código postal numérico">
			      			</div>
			      		</div>
			      		<div class="form-group">
			      			<div class="col-xs-4">
			      				<input type="text" class="form-control" name="contact[province]" id="contact_province" placeholder="Provincia">
			      			</div>
			      		</div>
			      		<div class="form-group">
			      			<div class="col-xs-4">
			      				<input type="text" class="form-control" name="contact[address]" id="contact_address" placeholder="Domicilio particular">
			      			</div>
			      		</div>
			      		<div class="form-group">
			      			<div class="col-xs-4">
			      				<input type="text" class="form-control" name="contact[profession]" id="contact_profession" placeholder="Profesión actual">
			      			</div>
			      			<div class="col-xs-4">
			      				<select class="form-control" name="contact[social_status]" id="contact_social_status">
			      					<option value="Jubilado">Jubilado</option>
			      					<option value="Estudiante">Estudiante</option>
			      					<option value="Profesional">Profesional</option>
			      				</select>
			      			</div>
			      		</div>
			      		<div class="form-group">
			      			<div class="col-xs-4">
			      				<input type="tel" class="form-control" name="contact[phone]" id="contact_phone" placeholder="Teléfono particular">
			      			</div>
			      			<div class="col-xs-4">
			      				<input type="tel" class="form-control" name="contact[cell_phone]" id="contact_cell_phone" placeholder="Teléfono celular">
			      			</div>
			      			<div class="col-xs-4">
			      				<input type="tel" class="form-control" name="contact[work_phone]" id="contact_work_phone" placeholder="Teléfono laboral">
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