<!-- how to create a tootltip -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h3>Designing a Sustainable Campus Area, ITS Team Wins at FUCAD Malaysia</h3>
  <a href="#" data-toggle="tooltip" title="The Arapaima Team from Institut Teknologi Sepuluh Nopember (ITS) designed a futuristic campus complex with a sustainable building concept. This innovative design eventually won the 3rd place in the Futuristic University Campus Design (FUCAD) competition held by Universiti Teknologi Petronas, Malaysia on Thursday (24/8).">ITS Campus, ITS News</a>
</div>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>
</html>
