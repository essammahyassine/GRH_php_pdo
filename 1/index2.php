<?php
require_once('bdd.php');


$sql = "SELECT id, title, start, end, color FROM events ";

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

    <title>L Goal Calendrier</title>

    <!-- Bootstrap Core CSS -->
    <link href="css1/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- FullCalendar -->
	<link href='css1/fullcalendar.css' rel='stylesheet' />
	<link href='css1/caroussel.css' rel='stylesheet' />

	<link href="./asset/bootstrap.min.css" rel="stylesheet">

		<link href="./asset/css" rel="stylesheet">

		<link href="./asset/font-awesome.min.css" rel="stylesheet">
		<link href="./asset/owl.carousel.css" rel="stylesheet">
		<link href="./asset/owl.theme.css" rel="stylesheet">
		<link href="./asset/magnific-popup.css" rel="stylesheet">
		<link href="./asset/style.css" rel="stylesheet">
		<link href="./asset/responsive.css" rel="stylesheet">	

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
<nav id="nav" class="navbar navbar-default sticky-nav flat animation fixednav" role="navigation" style="position&nbsp: fixed; top&nbsp: 0px; display&nbsp: block;">
	
			<div class="container text-center">
			
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar animation"></span>
						<span class="icon-bar animation"></span>
						<span class="icon-bar animation"></span>
					</button>
					<a href="http&nbsp://sainathchillapuram.com/BS/CreativePlus/demo/Digital-Agency/#top-bar" class="navbar-brand">
						<img src="./asset/loogo.png" alt="Digital Plus" class="img-responsive img-center-sm img-center-xs">
					</a>
				</div>
		
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right animation">
						<li class=""><a href="http&nbsp://sainathchillapuram.com/BS/CreativePlus/demo/Digital-Agency/#top-bar">Home</a></li>
						<li class=""><a href="http&nbsp://sainathchillapuram.com/BS/CreativePlus/demo/Digital-Agency/#about">About</a></li>
						<li class=""><a href="http&nbsp://sainathchillapuram.com/BS/CreativePlus/demo/Digital-Agency/#services">Services</a></li>
						<li class=""><a href="http&nbsp://sainathchillapuram.com/BS/CreativePlus/demo/Digital-Agency/#works">Works</a></li>
						<li class=""><a href="http&nbsp://sainathchillapuram.com/BS/CreativePlus/demo/Digital-Agency/#who">Who We Are</a></li>
						<li class=""><a href="http&nbsp://sainathchillapuram.com/BS/CreativePlus/demo/Digital-Agency/#blog">Blog</a></li>
						<li class=""><a href="http&nbsp://sainathchillapuram.com/BS/CreativePlus/demo/Digital-Agency/#team">Team</a></li>
						<li class=""><a href="http&nbsp://sainathchillapuram.com/BS/CreativePlus/demo/Digital-Agency/#testimonails">Testimonails</a></li>
						<li class=""><a href="http&nbsp://sainathchillapuram.com/BS/CreativePlus/demo/Digital-Agency/#clients">Clients</a></li>
						<li class="current"><a href="http&nbsp://sainathchillapuram.com/BS/CreativePlus/demo/Digital-Agency/#contact">Contact</a></li>
					</ul>
				</div>
			
			</div>
	
		</nav>




    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Calendrier Kglink</h1>
                <p class="lead">Kglink service RH online</p>
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
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Cordonner</h4>
			  </div>
			  <div class="modal-body">
				
				 <!-- <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Nom :</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Nom et prenom">
					</div>
				  </div>
				  <div class="form-group" hidden>
					<label for="color" class="col-sm-2 control-label" hidden>Color</label>
					<div class="col-sm-10">
					  <select name="color" class="form-control" id="color" >
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
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Terrain :</label>
					<div class="col-sm-10">
					  <select name="Terain" class="form-control" id="Terain">
						  <option value="">Choose</option>
						  <option > Terrain multideciplinaire</option>
						  <option > Terrain 1</option>
						  <option > Terrain 2</option>					  
						  <option > Terrain 3</option>
						  <option > Terrain 4</option>
						  <option > Terrain 5</option>
						  
						  
						</select>
					</div>
				  </div>
				   <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Situation :</label>
					<div class="col-sm-10">
					  <select name="Situation" class="form-control" id="Situation">
						  <option value="">Choose</option>
						  <option > Paye</option>
						  <option > Reservation</option>
						  <option > Avance</option>					  
						  
						  
						  
						</select>
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Paiement par :</label>
					<div class="col-sm-10">
					  <select name="Mode" class="form-control" id="Mode">
						  <option value="">Choose</option>
						  <option > Espece </option>
						  <option > Carte</option>
						  <option > Chéque</option>			  
						 				  
						  </select>
					</div>
				  </div>
				   <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Montant :</label>
					<div class="col-sm-10">
					  <input type="text" name="Montant" class="form-control" id="Montant" placeholder="Montant à payé">
					</div>
				  </div>
				    <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Vestiere :</label>
					<div class="col-sm-10">
					  <select name="Vestiere" class="form-control" id="Vestiere">
						  <option value="">Choose</option>
						  <option >Avec douche</option>
						   <option >Sans douche</option>
						 				  
						  </select>
					</div>
				  </div>
				  <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Start date</label>
					<div class="col-sm-10">
					  <input type="text" name="start" class="form-control" id="start" >
					</div>
				  </div>
				  <div class="form-group">
					<label for="end" class="col-sm-2 control-label">End date</label>
					<div class="col-sm-10">
					  <input type="text" name="end" class="form-control" id="end" >
					</div>
				  </div>
				
			  </div>-->
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
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
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Event</h4>
			  </div>
			  <div class="modal-body">
				
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Title</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
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
						<div class="col-sm-offset-2 col-sm-10">
						  <div class="checkbox">
							<label class="text-danger"><input type="checkbox"  name="delete"> Delete event</label>
						  </div>
						</div>
					</div>
				  <!--hidden-->
				  <input type="hidden" name="id" class="form-control" id="id" >
				
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
				<button type="button" id="pass_data" class="btn btn-primary">Detail</button>
				
				
				
			  </div>
			</form>
			</div>
		  </div>
		</div>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js1/jquery.js"></script>
<script>
				
				$(document).ready(function(){
					
					$('#pass_data').click(function() {
                    if ($('#id').val() != "" ) {
						
                   window.location = 'http://localhost:82/3/CalendarLgoal/DETAIL.php?id='+ $('#id').val();
                   
				   }
                  
					
					
					
				});
				});
				
				
				</script>
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
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit #color').val(event.color);
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
			
				$start = explode(" ", $event['start']);
				$end = explode(" ", $event['end']);
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{
					$start = $event['start'];
				}
				if($end[1] == '00:00:00'){
					$end = $end[0];
				}else{
					$end = $event['end'];
				}
			?>
				{
					id: '<?php echo $event['id']; ?>',
					title: '<?php echo $event['title']; ?>',
					start: '<?php echo $start; ?>',
					end: '<?php echo $end; ?>',
					color: '<?php echo $event['color']; ?>',
					
					
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
<script src="./asset/jquery-1.12.4.min.js.téléchargement"></script>
	<script src="./asset/jquery-migrate-1.4.1.min.js.téléchargement"></script>	
	<script src="./asset/bootstrap.min.js.téléchargement"></script>
	<script src="./asset/jquery.nav.js.téléchargement"></script>
	<script src="./asset/owl.carousel.js.téléchargement"></script>
	<script src="./asset/jquery.shuffle.modernizr.min.js.téléchargement"></script>
	<script src="./asset/jquery.magnific-popup.min.js.téléchargement"></script>
	<script src="./asset/custom.js.téléchargement"></script>
</body>

</html>
