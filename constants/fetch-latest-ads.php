<?php

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("SELECT * FROM tbl_ads LEFT JOIN tbl_users on tbl_ads.author = tbl_users.user_id WHERE tbl_ads.status = 'active' ORDER BY enc_id DESC LIMIT 20");
	$stmt->execute();
	$result = $stmt->fetchAll();

    foreach($result as $row)
    {
      $ad_id = $row['ad_id'];
      $directory = "uploads/ads/$ad_id/";
      $files = scandir ($directory);
      $firstFile = $directory . $files[2];
      $approved = $row['verified'];
      $featured = $row['featured'];

    	?>
    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="featured-box">
<figure>

<div class="icon">
	<?php
	if ($approved == "YES") {
	print '<span class="bg-green"><i class="lni-check-mark-circle"></i></span>';

	}

	if ($featured == "yes") {
		print '<span ><i class="lni-star"></i></span>';
	}
	?>
</div>
<a href="ad/<?php echo $row['ad_id']; ?>"><img class="img-fluid" src="<?php echo $firstFile; ?>" alt=""></a>
</figure>
<div class="feature-content">
	
<div class="product">
<a ><?php echo $row['category']; ?></a>
</div>
<h4 class="list-limit"><a href="ad/<?php echo $row['ad_id']; ?>"><?php echo $row['title']; ?></a></h4>
<div class="meta-tag">
<span>
<a ><i class="lni-user"></i> <?php echo $row['username']; ?>

</a>
	<?php
	if ($approved == "YES") {
	print '<i class="lni-check-mark-circle"></i>';

	}
	?>
</span>
<span>
<a><i class="lni-map-marker"></i> <?php echo $row['city']; ?></a>
</span>
<span>
<a><i class="lni-map-marker"></i> <?php echo $row['price']; ?></a>
</span>

</div>
<p class="dsc limit-text-desc"><?php echo substr($row['short_desc'],0,60)."..." ; ?></p>
<div class="listing-bottom">
<div class="widget">
<a href="#" & title="I'm%20interested%20in%20your%20car%20for%20sale" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
</div>
<ul class="posts-list">
	

<a href="#"  &  class="btn btn float-left" onclick="window.open('https://api.whatsapp.com/send?phone=<?php echo ($row['price']); ?>')"><img src="icon/whatsms1.png" alt="" srcset="" > &nbsp Chat Now  </a>	 
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/22695288.js"></script>
<!-- End of HubSpot Embed Code -->
<a href="ad/<?php echo $row['ad_id']; ?>" class="btn btn-common float-right">View post</a>
</div>
</div> 
</div>
</div>

<?php
		

	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


    ?>