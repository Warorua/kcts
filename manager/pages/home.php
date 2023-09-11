<style>
	#notif {
		display: none
	}

	/* Container for the cards */
	/* Adjust the card styles */
/* Adjust the card styles */
/* Adjust the card styles *//* Adjust the card container styles *//* Remove the flex properties from .col-sm-4.col-md-4.col-lg-3.project-item */
.kolp {
    max-width: calc(33.3333% - 20px); /* Adjust the width as needed for at least three cards per row */
    margin-bottom: 20px; /* Add margin to the bottom of each card */
}

/* Ensure cards adapt to the screen width */
.card {
    background: linear-gradient(45deg, #8B4513, #4B9539);
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    background: linear-gradient(45deg, #4B9539, #8B4513);
    color: white;
}

.card-img-top {
    max-width: 100%;
    height: 280px;
}

.card-title {
    color: #333;
    background-color: #f4f4f4;
    padding: 10px;
    border-radius: 0 0 10px 10px;
}

/* Make cards responsive */
@media (max-width: 991px) {
    .col-md-4.col-lg-3.project-item {
        max-width: calc(50% - 20px); /* Display two cards per row on medium screens */
    }
}

@media (max-width: 767px) {
    .col-md-4.col-lg-3.project-item {
        max-width: calc(100% - 20px); /* Display one card per row on small screens */
    }
}

</style>
<div class="col-lg-12" id="project-field">
	<div class="panel panel-success">
		<div class="panel-body ">
			<?php include '../includes/db.php';
			$query = mysqli_query($conn2, "SELECT * FROM projects where io = '1' ");
			while ($row = mysqli_fetch_assoc($query)) {
			?>
	<div class="card-container">
    <!-- Repeat the following card code for each card -->
    <div class="col-sm-4 col-md-4 col-lg-3 project-item mt-6 kolp">
        <a href="index.php?page=project_detail&id=<?php echo $row['id'] ?>&action=view details" style="color: black; text-decoration: none;">
            <div class="card">
                <img src="../images/<?php echo $row["site_pic"] ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title text-center" style="text-transform: capitalize; font-size: 1.25rem;"><?php echo $row['settings_name'] ?></h5>
                </div>
            </div>
        </a>
    </div>
    <!-- Repeat the above code for each card -->
</div>


			<?php } ?>
		</div>
	</div>

</div>
<div class="col-lg-4" id="notif">
	<div id="" style="">

		<?php include '../includes/db.php';

		$query1 = mysqli_query($conn2, "SELECT * FROM projects where io = '1' ");

		while ($row1 = mysqli_fetch_assoc($query1)) {
			$d1 = date("Ymd", strtotime($row1['deadline'] . ' -15 days'));
			$d2 = date("Ymd");

			if ($d2 >= $d1 && date("Ymd", strtotime($row1['deadline'])) > $d2) {
		?>

				<a href="index.php?page=project_detail&id=<?php echo $row1['id'] ?>&action=upcoming deadline" style="color:black">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Deadline Soon
						</div>
						<div class="panel-body">
							<center>
								<p><b><?php echo ucfirst($row1['settings_name']) ?></b></p>
							</center>
							<p><i>Deadline:</i><b><?php echo date("F d, Y", strtotime($row1['deadline'])) ?></b></p>
						</div>
					</div>
				</a>
			<?php } elseif (date("Ymd", strtotime($row1['deadline'])) < $d2) { ?>
				<div class="panel panel-danger">
					<div class="panel-heading">
						Deadline Soon
					</div>
					<div class="panel-body">
						<center>
							<p><b><?php echo ucfirst($row1['settings_name']) ?></b></p>
						</center>
						<p><i>Overdue since:</i><b><?php echo date("F d, Y", strtotime($row1['deadline'])) ?></b></p>
					</div>
				</div>
		<?php }
		} ?>
	</div>
</div>
<script>
	if ($('#notif .panel').length > 0) {
		$('#project-field').removeClass('col-lg-12').addClass("col-md-8")
		$('#notif').show()
	}
</script>