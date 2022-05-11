 <?php if(isset($_POST['formation'])){
	 $form=$_POST['formation']);
 $sql = "select * FROM candidat where vagueformation='$form'" ;}
else{$sql = "select * FROM candidat where vagueformation!=''"} 
	 
	 ?>
 
 <div class="class col-md-12">
  

<div class="">
 
            <div class="minheight-right-nav-data form-group ">
              <table id="data_report" class="table table-striped font-res" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" >
                     
  <thead>
                      <tr bgcolor="#2896df">
					  
					  <td>
					  <p style='color:#fff;'>Formation</p>
					  </td>
					  <td>
					  <p style='color:#fff;'>Formateur</p>
					  </td>
					  <td>
					  <p style='color:#fff;'>Projet</p>
					  </td>
					  
					  <td>
					  <p style='color:#fff;'>Date début</p>
					  </td>
					  <td>
					  <p style='color:#fff;'>Date fin</p>
					  </td>
					  <td>
					  <p style='color:#fff;'>Affecter</p>
					  </td>
					 
                     </tr>
					  </thead>
					                          <tbody>
					<?php
					
							
								$sql = "select * FROM formationtable ORDER BY id desc" ;
    foreach  ($bdd->query($sql) as $row) {
								
					?>
								
			    <tr>
				<td><?php echo $row['formation']; ?></td>
				<td><?php echo $row['formateur']; ?></td>
				<td><?php echo $row['projet']; ?></td>							
				<td><?php echo $row['datedebut']; ?></td>
				<td><?php echo $row['datefin']; ?></td>	
<td><a class="btn btn-danger btn-block" href="./affecterformation.php?id=<?php echo $row['formation']; ?>">Affecter</a></td>					
				</tr>
						


  

  
				
							  
							 <?php
	} ?>


					</tbody>
													</table>
													</div>
                                            </div>
							<script>
                $(document).ready(function() {
                $('#data_report').DataTable();
               
                });</script>

				                       
  </div>