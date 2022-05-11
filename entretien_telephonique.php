<?php
require_once('bdd.php');

$sql ="SELECT * FROM entretien
INNER JOIN candidat ON candidat.id_candidat = entretien.id_candidat
 where entretien.type_entretien='Entretien Telephonique' and candidat.situation_candidat='attente'";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RH</title>

    <!-- Bootstrap Core CSS -->
    <link href="css1/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- FullCalendar -->
	<link href='css1/fullcalendar.css' rel='stylesheet' />
	<link href='css1/caroussel.css' rel='stylesheet' />

	<link href="./asset/bootstrap.min.css" rel="stylesheet">

		<link href="./asset/css" rel="stylesheet">

		
	
		<link href="./asset/style.css" rel="stylesheet">
		

    <!-- Custom CSS -->
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
<?php require_once('nav.php');?>




    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Calendrier Greatcall</h1>
                <p class="lead">Greatcall Entretien Telephonique</p>
                <div id="calendar" class="col-centered">
                </div>
            </div>
			
        </div>
        <!-- /.row -->
	<!-- Modal -->
<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form class="form-horizontal" method="POST" action="addEvent.php">
    
      <div class="modal-header">
      <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
      <h4 class="modal-title" id="myModalLabel">Cordonner</h4>
      </div>
      <div class="modal-body">
        
    
    <div class="form-group">
            <label for="start" class="col-sm-2 control-label">Entretien:</label>
            <div class="col-sm-10">
             <select class="form-control" id="type_entretien" name="type_entretien">
<option value="Entretien Telephonique">Entretien Telephonique</option>
<option value="Entretien Physique">Entretien physique</option>

</select>
            </div>
          </div>
          <div class="form-group">
        <div class="col-sm-2">  <label for="title" class="col-sm-2 control-label">Candidat</label></div><div class="col-sm-10">
<select class=" form-control" id="id_candidat" name="id_candidat" required>
<?php
            require_once('bdd.php');
            
            $sql = "select * FROM candidat where situation_candidat='attente' ORDER BY id_candidat desc" ;
foreach  ($bdd->query($sql) as $row) {
                        
           ?>
<option value="<?php echo $row['id_candidat']; ?>"><?php echo $row['nom'];  ?></option>
<?php } 
        ?>
</select></div>

</div>
    
          <div class="form-group">
            <label for="start" class="col-sm-2 control-label">Debut</label>
            <div class="col-sm-10">
              <input type="text" name="start" class="form-control" id="start" >
              <input type="hidden" name="nom_candidat" class="form-control" id="nom_candidat" value="<?php echo $row['nom'];  ?>" >
              
            </div>
          </div>
          <div class="form-group">
            <label for="end" class="col-sm-2 control-label">Fin </label>
            <div class="col-sm-10">
              <input type="text" name="end" class="form-control" id="end" >
            </div>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
      </div>
    </form>
    </div>
  </div>
</div>


		
<!-- Modal -->
<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form class="form-horizontal" method="POST" action="editEventTitle.php">
      <div class="modal-header">
      <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">Cordonner </h4>
      </div>
      <div class="modal-body">
        
          
              <input type="hidden" name="title" class="form-control" id="title" placeholder="Nom">
            
          <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Nom </label>
            <div class="col-sm-10">
              <input type="text" name="nom_candidat" class="form-control" id="nom_candidat" placeholder="Nom">
            </div>
          </div>
          
          <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Telephone </label>
            <div class="col-sm-10">
              <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Telephone">
            </div>
          </div>
        <!--  <div class="form-group">
            <label for="color" class="col-sm-2 control-label">Color</label>
            <div class="col-sm-10">
              <select name="color" class="form-control" id="color">
                  <option value="">Choose</option>
                  <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                  <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
                  <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                  <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                  <option style="color:#000;" value="#000">&#9724; Black</option>
                  
                </select>
            </div>
          </div>-->
           <div class="form-group">
            <label for="start" class="col-sm-2 control-label">Debut</label>
            <div class="col-sm-10">
              <input type="text" name="start" class="form-control" id="start" >
            </div>
          </div>
          <div class="form-group">
            <label for="end" class="col-sm-2 control-label">Fin</label>
            <div class="col-sm-10">
              <input type="text" name="end" class="form-control" id="end" >
            </div>
          </div>
            <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label class="text-danger"><input type="checkbox"  name="delete"> Supprimé </label>
                  </div>
                </div>
            </div>
          <!--hidden-->
           <input type="hidden" name="id_candidat" class="form-control" id="id_candidat" >
          <input type="hidden" name="id_entretien" class="form-control" id="id_entretien" >
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Sauvegarder</button>
        <button type="submit" id="entretienphysique" name="entretienphysique" class="btn btn-Success">Entretien Physique</button>
        <button type="submit" id="nonretenue" name="nonretenue" class="btn btn-danger">Non Retenue</button>
        
        
      </div>
    </form>
    </div>
  </div>
</div>

</div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js1/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js1/bootstrap.min.js"></script>
	
	<!-- FullCalendar -->
	<script src='js1/moment.min.js'></script>
	<script src='js1/fullcalendar.min.js'></script>
	
		
	<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},//'2016-01-12'
			defaultDate: new Date(),
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				
				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd').modal('show');
			},

			eventRender: function(event, element) {
				element.bind('dblclick', function() {
					$('#ModalEdit #id_entretien').val(event.id_entretien);
					$('#ModalEdit #title').val(event.nom_candidat);
          $('#ModalEdit #nom_candidat').val(event.nom_candidat);
					$('#ModalEdit #color').val(event.color);
          $('#ModalEdit #telephone').val(event.telephone);
					$('#ModalEdit #id_candidat').val(event.id_candidat);
					$('#ModalEdit #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				    $('#ModalEdit #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
					$('#ModalEdit').modal('show');
				});
				
			},
			eventDrop: function(event, delta, revertFunc) { // si changement de position

				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

				edit(event);

			},
			events: [
			<?php foreach($events as $event): 
			
				$start = explode(" ", $event['debut']);
				$end = explode(" ", $event['fin']);
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{
					$start = $event['debut'];
				}
				if($end[1] == '00:00:00'){
					$end = $end[0];
				}else{
					$end = $event['fin'];
				}
			?>
				{
                
					id_entretien: '<?php echo $event['id_entretien']; ?>',
					title: '<?php echo $event['nom_candidat']; ?>',
          nom_candidat: '<?php echo $event['nom_candidat']; ?>',
					start: '<?php echo $start; ?>',
					end: '<?php echo $end; ?>',
					color: '<?php echo $event['color']; ?>',
          telephone:'<?php echo $event['telephone']; ?>',
					id_candidat:'<?php echo $event['id_candidat']; ?>',
					
					

				},
			<?php endforeach; ?>
			]
			
		});
		
		function edit(event){
			start = event.start.format('YYYY-MM-DD HH:mm:ss');
			if(event.end){
				end = event.end.format('YYYY-MM-DD HH:mm:ss');
			}else{
				end = start;
			}
			
			id =  event.id;
			
			Event = [];
			Event[0] = id;
			Event[1] = start;
			Event[2] = end;
			
			$.ajax({
			 url: 'editEventDate.php',
			 type: "POST",
			 data: {Event:Event},
			 success: function(rep) {
					if(rep == 'OK'){
						alert('Saved');
					}else{
						alert('Could not be saved. try again.'); 
					}
				}
			}
			
			);
			
		}
		
	});

</script>
<br><br><br><br><br><br><br>
<!--<script src="./asset/jquery-1.12.4.min.js.téléchargement"></script>
	<script src="./asset/jquery-migrate-1.4.1.min.js.téléchargement"></script>	
	<script src="./asset/bootstrap.min.js.téléchargement"></script>
	<script src="./asset/jquery.nav.js.téléchargement"></script>
	<script src="./asset/owl.carousel.js.téléchargement"></script>
	<script src="./asset/jquery.shuffle.modernizr.min.js.téléchargement"></script>
	<script src="./asset/jquery.magnific-popup.min.js.téléchargement"></script>
	<script src="./asset/custom.js.téléchargement"></script>-->
	<footer class="main-footer">
		
			<div class="container text-center-xs">
			
				<div class="row">
				
					<div class="col-sm-4 col-xs-12">
						<!--<ul class="list-unstyled list-inline">
							<li><a href="">Home</a></li>
							<li><a href="">Privacy</a></li>
							<li><a href="">Terms</a></li>
							<li><a href="">Contact</a></li>
						</ul>-->
					</div>
				
					<div class="col-sm-4 col-xs-12">
					<p class="text-center">
							© Kglink All Rights Reserved | By <a href="https://www.instagram.com/yassine.essammah/">Yassine es sammah</a>
						</p>
					</div>
				
					<div class="col-sm-4 col-xs-12">
						<!--<ul class="list-unstyled list-inline sm-links pull-right-lg pull-right-md pull-right-sm">
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-pinterest"></i></a></li>
							<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							<li><a href=""><i class="fa fa-tumblr"></i></a></li>
							<li><a href=""><i class="fa fa-youtube-play"></i></a></li>
						</ul>-->
					</div>
				<!-- Social Media Links Ends -->
				</div>
			<!-- Nested Row Ends -->
			</div>
		<!-- Nested Container Ends -->
		</footer>
</body>

</html>
