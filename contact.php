<?php

	if (isset($_POST['email'])) {

		// EDIT THE 2 LINES BELOW AS REQUIRED
		$email_to = "hey@sarozpoddar.com.np";
		$email_subject = "My offer for [Your Domain]";


		$name = $_POST['name']; // required
		$email_from = $_POST['email']; // required
		$telephone = $_POST['phone']; // not required
		$price = $_POST['price']; // not required
		$comments = $_POST['comments']; // required


		$email_message = "Form details below.\n\n";

		function clean_string($string) {
				$bad = array("content-type", "bcc:", "to:", "cc:", "href");
				return str_replace($bad, "", $string);
		}

		$email_message .= "Name: " . clean_string($name) . "\n";
		$email_message .= "Email: " . clean_string($email_from) . "\n";
		$email_message .= "Telephone: " . clean_string($telephone) . "\n";
		$email_message .= "Price($): " . clean_string($price) . "\n";
		$email_message .= "Comments: " . clean_string($comments) . "\n";

		// create email headers
		$headers = 'From: ' . $email_from . "\r\n" .
						'Reply-To: ' . $email_from . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
		@mail($email_to, $email_subject, $email_message, $headers);

?>
<!DOCTYPE html>
<html lang="en">
		<head>
				<meta charset="utf-8">
				<title>Sales Inquery || [Your Domain]</title>
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
				<link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:300,700" rel="stylesheet">
				<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
				<link rel="stylesheet" href="css/style.css" />
		</head>
		<body>
			<section class="bg-alt hero p-0">
				<div class="container-fluid">
					<div class="row">
							<div class="bg-faded col-sm-6 text-center col-fixed">
									<div class="vMiddle">
										<h1 class="pt-4 h2">
											<span>Thak you for offer, I will contact as soon as possible. Cheers !!!</span>
										</h1>
										<div class="row d-md-flex text-center justify-content-center text-primary action-icons">
											<div class="col-sm-4">
												<p><em class="ion-ios-telephone-outline icon-md"></em></p>
											</div>
											<div class="col-sm-4">
												<p><em class="ion-ios-chatbubble-outline icon-md"></em></p>
												<p class="lead"><a href="mailto:the.saroz@gmail.com">hey@sarozpoddar.com.np</a></p>
											</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 offset-sm-6 px-0">
									<section class="bg-alt">
											<div class="row height-100">
													<div class="col-sm-8 offset-sm-2 mt-2">
														<h1 class="pt-4 h2"><span class="text-green">Saroz Poddar</span></h1>
														<span class="text-muted">Nepal</span>
														<p><span>UX/UI Designer & Front-end Developer</span></p>
													</div>
											</div>
									</section>
							</div>
					</div>
				</div>
			</section>
		</body>
</html>
<?php } ?>
