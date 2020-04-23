<?php
if (isset($_GET['taluk'])) {
include('../dbconnect.php');
	$taluk=$_GET['taluk'];
	?>
		<label for="selector1" class="col-sm-2 control-label">Villages</label>
									<div class="col-sm-4"><select id="wood" name="wood" class="form-control1">
										<option value="0" disabled selected>Select</option>
    									
                    <?php
                    $sql="SELECT * FROM tble_subcategory where category_id='$taluk'";
                    $result=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($result))
                    {
                        $wid=$row['subcategory_id'];
                        $name=$row['subcategory_name'];
                        ?>
                        
                        <option value='<?php echo $wid ?>'><?php echo $name ?></option>";
                        <?php
                    }
                    ?>
									</select></div>
	<?php
	
}
?>