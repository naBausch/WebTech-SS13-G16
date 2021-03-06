<!DOCTYPE html>

<html lang="de">
	<head>

		<!-- Header -->
		<?php include('_include/header.php'); ?>
		
	</head>
	<body>
		
		<!-- Navigation -->
		<?php include('_include/navigation.php'); ?>
		
		<!-- Container -->
		<div class="container-fluid">
			
		<!-- App Navigation -->
		<?php include('_include/navigation_app.php'); ?>
		
		<!-- Content -->	
		<form class="form-horizontal"> 	
			<!--Container -->
			<div id="appWrapper" align="center">
			    <br />
			    <h2>Wegpunkt</h2>
			    <br />
			    <div class="container-fluid" align="center">
	            	<div class="row well" style="margin-left: 15%;" align="center">
						<div class="span4" align="center">	            		
							<div class="control-group">
								<label class="control-label">Name</label>
								<input class="input-medium" type="text" id="name" name="name"/>
							</div>
							<div class="control-group">
								<label class="control-label">Date</label>
								<input class="input-medium" type="date" id="wdate" name="wdate"/>
							</div>
							<div class="control-group">
								<label class="control-label">Time</label>
								<input class="input-medium" type="time" id="wtime", name="wtime"/>
							</div>
						</div>
						<div class="span4">
							<div class="control-group">
								<label class="control-label">Latitude</label>
								<input class="input-medium" type="text" id="lat" name="lat"/>
							</div>
							<div class="control-group">
								<label class="control-label">Longitude</label>
								<input class="input-medium" type="text" id="lng" name="lng"/>
							</div>
							<div class="control-group">
								<label class="control-label">Fahrt nach</label>
								<select name="fahrtziel" id="marker" name="marker" style="width: 165px;"></select>
							</div>
						</div>
						<div class="span4">
							<div class="control-group">
								<label class="control-label">COG</label>
								<input class="input-medium" type="text" id="cog" name="cog"/>
							</div>
							<div class="control-group">
								<label class="control-label">SOG</label>
								<input class="input-medium" type="text" id="sog" name="sog"/>
							</div>
							
							<div class="control-group">
								<label class="control-label">Manoever</label>
								<select name="manoever" id="manoever" name="manoever" style="width: 165px;"></select>
							</div>                   
						</div>
						<div class="span4">
							<div class="control-group">
								<label class="control-label">BTM</label>
								<input class="input-medium" type="text" id="btm" name="btm"/>
							</div>
							<div class="control-group">
								<label class="control-label">DTM</label>
								<input class="input-medium" type="text" id="dtm" name="dtm"/>
							</div>
							<div class="control-group">
								<label class="control-label">Vorsegel</label>
								<select name="vorsegel" id="vorsegel" name="vorsegel" style="width: 165px;"></select>
							</div>
						</div>
		            </div>      	 
	            </div>
				<br />
				<br />
				<div class="container" align="center">
					<div class="row" style="margin-left:5%;">
						<div class="span4" id="appNotes">
							<h4>Notes</h4>
							<textarea style="width:96%; height:360px;"></textarea>
						</div>
						<div class="span4" id="markerMap">
							<h4>Map</h4>
							<img src="../img/icons/marker_map.png" id="appInfoPhoto" style="width:100%; heigt: 100%;"/>
						</div>
						<div class="span4" id="appPhotos">
							<h4>Photos</h4>
							<img src="../img/icons/no_image.jpg" id="appInfoPhoto" style="width:100%; heigt: 100%;"/>
						</div>
					</div>
				</div>
				<br />
<!-- UNSER TEIL ------------------------------------------------------------------------------------------------------------------------------------ -->
				<h2>Weather information</h2>
				<br />
				<div class="container-fluid" align="center">
						<div class="row well" style="margin-left: 15%;" align="center">
							<div class="span4">
								<div class="control-group">
								<label class="control-label">Condition</label>
									<select name="condition" id="condition" tabindex="1" style="width: 165px";>
										
									</select>
								</div>
								<div class="control-group">
									<label class="control-label" >Wind direction</label>
									<select name="winddirection" id="winddirection" tabindex="3" style="width: 165px";>
									</select>
								</div>
							</div>
							<div class="span4">
								<div class="control-group">
									<label class="control-label">Description</label>
									<select name="wcc" id="wcc" tabindex="2" style="width: 165px";>
									</select>
								</div>
								<div class="control-group">
									<label class="control-label" >Wind speed [mps]</label>
									<input class="input-medium" type="number" name="windspeed" id="windspeed" tabindex="4" value="0" min="0" max="12" />	
								</div>
							</div>
							<div class="span4">
								<div class="control-group">
									<label class="control-label" >Clouds [%]</label>
									<input class="input-medium" type="number" name="clouds" id="clouds" tabindex="5" value="0" min="0" max="100" step="10"/>
								</div>
								<div class="control-group">
									<label class="control-label" >Temperature</label> 
									<input  type="text" id="temp" name="temp" tabindex="7" class="input-small" />
									<select name="scale" id="scale" tabindex="8" class="input-mini";>
										<option value="celsius" selected="selected">&degC </option>
										<option value="fahrenheit">&degF </option>
									</select>
								</div>	
							</div>
							<div class="span4">
								<div class="control-group">
									<label class="control-label" >Precipation [mm/3h]</label>
									<input class="input-medium" type="number" id="precipation" name="precipation" tabindex="6" min="0"/>
								</div>
								<div class="control-group">
									<label class="control-label" >Air pressure [hPa]</label>
									<input class="input-medium" type="number" id="airpressure" name="airpressure" tabindex="9" min="0"/>
								</div>
							</div>
							<div class="span4">
								<div class="control-group">
									<label class="control-label" >Wave direction</label>
									<select id="wavedirection" name="wavedirection" tabindex="10" style="width: 165px";>
									</select>
								</div>
								<div class="control-group">
									<label class="control-label" >Wavehight [m]</label>
									<input class="input-medium" type="number" id="wavehight" name="wavehight" tabindex="11" min="0"/>
								</div>
							</div>
							<div class="span4">
								<div class="control-group">
									<figure id="fig">
										<img id="icon" name="icon" src="">
									</figure>
								</div>
								
							</div>
							

						</div>    
				</div>
			</div>
		</form>
		</div>
	<!-- Container -->
		<!--footer -->
		<?php include('_include/footer.php'); ?>
		<!-- Java Script -->
		<script src="../js/bootstrap/bootstrap-transition.js"></script>
	    <script src="../js/bootstrap/bootstrap-button.js"></script>
	    <script src="../js/bootstrap/bootstrap-collapse.js"></script>
	    <script src="../js/bootstrap/bootstrap-affix.js"></script>
		
		<!-- Additional Java-Script -->
		<script src="../js/app/ajax/waypoint.js" type="text/javascript"></script>
		<script src="../js/app/ajax/app_waypoint.js" type="text/javascript"></script>

	</body>
</html>