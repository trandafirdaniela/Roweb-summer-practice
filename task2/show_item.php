<?php
	include('conn.php');
	if(isset($_POST['show'])){
		?>
		<table class = "table table-hover table-success" >
			<thead>
				<th>#Id</th>
				<th>Title</th>
				<th>Text</th>
				<th>Category</th>
                <th>Image</th>
				<th>Actions</th>
			</thead>
				<tbody>
					<?php
						$qitem=mysqli_query($conn,"select * from `items`");
						
						while($urow=mysqli_fetch_array($qitem)){
							?>

								<tr>
                                    <td><?php echo $urow['id']; ?></td>
									<td style="width:150px"><?php echo $urow['title']; ?></td>
									<td style="width:300px"><?php echo $urow['text']; ?></td>
                                    <td><?php echo $urow['category']; ?></td>
                                    <td><?php

                                        $pic=$urow['image'];
                                        if($pic==1){
                                            echo "<img src=\"images/240_1.jpg\" width=\"100\" >";
                                        }else if($pic==2){
                                            echo "<img src=\"images/240_2.jpg\" width=\"100\" >";
                                        }else if($pic==3){
                                            echo "<img src=\"images/240_3.jpg\" width=\"100\" >";
                                        }
                                        ?></td>
									<td><button class="btn btn-outline-success" data-toggle="modal" data-target="#edit<?php echo $urow['id']; ?>"> Edit </button>
                                        <button class="btn btn-outline-danger delete" value="<?php echo $urow['id']; ?>"> Delete</button>
									<?php include('edit_modal.php'); ?>
									</td>
								</tr>
							<?php
						}
					
					?>
				</tbody>
			</table>
		<?php
	}

?>