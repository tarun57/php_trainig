<?php
											mysql_connect("localhost","root","");
                                            mysql_select_db("pizone2");
											$query1 = mysql_query("select * from category");
											while ($row1 = mysql_fetch_array($query1))
											{
											    $cat_id=$row1['cat_id'];
												$cat_name=$row1['cat_name'];
												$cat_image=$row1['cat_image'];
												$cat_desc=$row1['cat_desc'];
												?>
	
                                          
											<img src="upload/<?php echo $cat_image;?>" width="100px" height="100px">
											<?php echo $cat_name;?>
											<?php } ?>