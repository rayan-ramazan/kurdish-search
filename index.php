<?php include'include/nav.php'; ?>
<section>
		<center>
		<div class="head-box">
			<img src="img/book.svg" alt="" srcset="">
			<h1>پەرتووک</h1>
		</div>
	</center>
		<div class="group-cards">
		<?php 
			$query = mysqli_query($db , "SELECT * FROM `book` ORDER BY RAND() LIMIT 4");
			while($row = mysqli_fetch_assoc($query)){?>
		
			<div class="card">
				<a href="view-book.php?postid=<?php echo sec($row['id']); ?>"><img src="img/upload/<?php echo sec($row['photo']); ?>">
					<h1> <?php echo sec($row['names']); ?></h1>
				</a>
			</div>
			<?php } ?>
		</div>

		<hr width="80%" style="margin: auto; margin-top: 4rem; margin-bottom: 4rem;" color="#555">
		<center>
		<div class="head-box">
			<img src="img/course.svg" style="width: 20%;" class="head-title" alt="" srcset="">
			<h1>کۆرس</h1>
		</div>
	</center>
		<div class="group-cards">
		<?php 
                $query = mysqli_query($db , "SELECT * FROM `categories-course` ORDER BY RAND() LIMIT 6");
                while($row = mysqli_fetch_assoc($query)){?>
            
			<div class="card-course">
				<a href="course.php?course=<?php echo sec($row['id']); ?>"><img src="img/icon/course/<?php echo sec($row['photo']);?>">
					<h1 class="title"> <?php echo sec($row['name']);?></h1>
				</a>
			</div>
            <?php } ?>

		</div>

		<hr width="80%" style="margin: auto; margin-top: 4rem; margin-bottom: 4rem;" color="#555">
		<center>
		<div class="head-box">
			<img src="img/ui.svg" style="width: 20%;" class="head-title" alt="" srcset="">
			<h1>بەڕنامە</h1>
		</div>
	</center>
		<div class="group-cards">
			<?php
				$query = mysqli_query($db , "SELECT * FROM `app` ORDER BY RAND() LIMIT 4");

				while($row = mysqli_fetch_assoc($query)){?>
			
			<div class="card-app">
				<a href="view-app.php?app=<?php echo sec($row['id']); ?>"><img src="img/app/<?php echo sec($row['photo']); ?>">
					<h1> <?php echo sec($row['name-app']); ?></h1>
				</a>
				<hr>
				<div class="info">
					<p>
						<?php echo sec($row['description']); ?>
					</p>
				</div>
			</div>
			<?php } ?>

		</div>
		<hr width="80%" style="margin: auto; margin-top: 4rem; margin-bottom: 4rem;" color="#555">
		<center>
		<div class="head-box">
			<img src="img/seo-report.svg" class="head-title" style="width: 20%;" alt="" srcset="">
			<h1>ڕاپۆرت</h1>
		</div>
	</center>
		<div class="box-report">
			<table>
				<tr id="head-table">
					<td>دەونڵۆد</td>
					<td>فایل</td>
					<td>بابەت</td>
				</tr>
				<?php 
					$query = mysqli_query($db , "SELECT * FROM `raport` ORDER BY RAND() LIMIT 15");
					while($row = mysqli_fetch_assoc($query)){?>
				<tr>
					<td><a href="<?php echo sec($row['link']); ?>"> داگرتن </a></td>
					<td><?php echo sec($row['files']); ?></td>
					<td><?php echo sec($row['names']); ?></td>
				</tr>
				<?php } ?>
			</table>
		</div>

	</section>

<?php include'include/footer.php'; ?>