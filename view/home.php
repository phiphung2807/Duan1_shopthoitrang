<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>


</head>

<body>



	<div class="container w-10/12 m-auto">



		<div class="px-[30px]">

			<div class="grid grid-cols-3 gap-3">
				<?php
				$i = 0;
				foreach ($spnew as $sp) {
					extract($sp);
					$linksp= "index.php?act=sanphamchitiet&idsp=".$product_id;
					$hinh = $img_path . $img;
					if (($i == 2) || ($i == 5) || ($i == 8)) {
						$mr = "";
					} else {
						$mr = "mr";
					}
					echo '<a href="'.$linksp.'" class="block group mt-3">
						<img src="' . $hinh . '" alt="" class="object-cover w-full rounded aspect-square" />

					<div class="mt-3">
						<h3 class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">' . $name . '</h3>
						<p class="mt-1 text-sm text-gray-700">$' . $price . '</p>
					</div>
				</a>';
					$i += 1;
				}
				?>
			</div>
		</div>



</body>

</html>