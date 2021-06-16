<!DOCTYPE html>
<html>
	<head>
		<title>Localhost</title>
		<link rel="stylesheet" type="text/css" href="public/style/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="public/style/style.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<ul class="list-group">
					<?php foreach ( scandir(__DIR__ . '/app/') as $key => $folderName ) { ?>
						<?php if ( $folderName !== '.' && $folderName !== '..' ) { ?>
							<a href="app/<?= $folderName ?>">
								<div class="col-md-3">
									<li class="list-group-item justify-content-between">
										<strong>
											<?php echo getCleanName( $folderName ); ?>
										</strong>
										<span class="badge badge-default badge-pill"><strong>+</strong></span>
									</li>
								</div>
							</a>
						<?php } ?>
					<?php } ?>
				</ul>			
			</div>
		</div>
	</body>
</html>

<?php
function getCleanName ( $folderName )
{
	$folderName = implode(' ', explode( '-', $folderName ));
	return strlen( $folderName ) > 3 ? ucwords( $folderName ) : strtoupper( $folderName );
}
// exit('PHP examples available here...');