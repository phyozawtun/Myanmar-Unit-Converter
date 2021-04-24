<?php
include("./../mm_unit_converter.php");
if(isset($_POST['gram'])){
	//echo $_POST['gram'];
	//echo "<br />";
	$gram = $_POST['gram'];
	//echo $gram;
	//echo "<br />";
	$kyat = gram_to_kyat($gram);
	//echo $kyat;
	//echo "<br />";
	$kyat = kyat_to_kyat_pell_yway($kyat);

	$output = $kyat['kyat']." Kyat ";
	$output .= $kyat['pell']." Pell ";
	$output .= $kyat['yway']." Yway";
}
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Myanmar Unit Converter</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      body {
        background-image: linear-gradient(180deg, #eee, #fff 100px, #fff);
      }
      .container {
        max-width: 960px;
      }
      .pricing-header {
        max-width: 700px;
      }
    </style>
  </head>
  <body>



    <div class="container py-3">
      <?php include("views/header.php"); ?>
      <main>

        <!-- Form Start -->
        <form action="./gram_to_kyat.php#converter" id="converter" method="POST" class="row mb-5 pt-5">
          <div class="col-md-8 mx-auto">
            <h1 class="h2">Gram to Kyat Pell Yway</h1>
            <div class="card">
              <div class="card-body py-4">

                  <div class="mb-3">
                    <label class="form-label">Input Gram:</label>
                    <div class="input-group input-group-lg">
                      <input class="form-control" name="gram" value="<?=isset($_POST['gram'])?$_POST['gram']:'';?>">
                    </div>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Output Kyat Pell Yway:</label>
                    <div class="input-group input-group-lg mb-3">

											<input type="text" class="form-control" value="<?=isset($kyat['kyat'])?$kyat['kyat']:'';?>">
                      <span class="input-group-text">ကျပ်</span>

                      <input type="text" class="form-control" value="<?=isset($kyat['pell'])?$kyat['pell']:'';?>">
                      <span class="input-group-text">ပဲ</span>

                      <input type="text" class="form-control" value="<?=isset($kyat['yway'])?$kyat['yway']:'';?>">
                      <span class="input-group-text">ရွေး</span>

                      <span
												class="input-group-text btn-clipboard text-decoration-none"
												data-clipboard-text="<?=isset($output)?$output:'';?>">
														Copy
											</span>

                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary btn-lg w-100">Convert</button>

              </div>
            </div>
          </div>
        </form>
        <!-- Form End -->


        <?php include("views/list-group.php"); ?>


      </main>
      <?php include("views/footer.php"); ?>
    </div>
    <script src="js/clipboard.min.js"></script>
    <script type="text/javascript">
      new ClipboardJS('.btn-clipboard');
    </script>
  </body>
</html>
