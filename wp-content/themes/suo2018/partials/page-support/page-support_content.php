<div class="container">
	<div id="before_help">
		<div class="row">
			<div class="col-12">
				<h1>Werbung</h1>
				<?php the_content();?>
			</div>
		</div>

		<!-- The Form -->
		<div class="row">
		<div class="col-md-6">
		<form action="#">
			<div class="form-row">
				<input type="text" class="form-control" name="prename" required placeholder="Vorname">
				<input type="text" class="form-control" name="name" required placeholder="Nachname">
			</div>
			<div class="form-row">
				<input type="text" class="form-control" name="street" required placeholder="Straße">
				<input type="text" class="form-control" name="nr" required placeholder="Hausnummer">
			</div>
			<div class="form-row">
				<input type="text" class="form-control" name="plz" required placeholder="PLZ">
				<input type="text" class="form-control" name="ort" required placeholder="Ort">
			</div>
			<div class="form-row">
				<input type="submit" class="btn btn-secondary" value="Los!">
			</div>
		</form>
		</div>
		</div>
	</div>

	<div id="after_helpt"></div>
</div>