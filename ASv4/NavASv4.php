<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	section {
		display: none;
		padding: 48px 3vw 48px 3vw;
		border-radius: 18px;
		background: linear-gradient(120deg, #232836 80%, #1a1d25 100%);
		color: #e0e6ed;
		font-size: 18px;
		margin: 48px 1vw 48px 1vw;
		min-height: 70vh;
		max-width: 1200px;
		box-shadow: 0 8px 40px 0 #0008;
		border: 1.5px solid #2a3140;
		position: relative;
		z-index: 1;
		transition: box-shadow 0.2s;
		margin-top: 2px;
		/* reduziert von 10px auf 2px */
	}

	section.active {
		display: block;
		animation: fadeIn 0.5s;
	}

	@keyframes fadeIn {
		from {
			opacity: 0;
			transform: translateY(30px);
		}

		to {
			opacity: 1;
			transform: translateY(0);
		}
	}
</style>

<body>
Seite 1
</body>

</html>