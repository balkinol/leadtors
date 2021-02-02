<?php 
    $title = 'Location';
    include './component/header.php'; 
?>
<div class="content">
    <div class="container-fluid border bg-white mb-3">
        <div class="row">
        <div id="map"></div>
        </div>
    </div>
</div>
<?php include './component/footer.php'; ?>

<script>
    $(document).ready(function() {
        demo.initGoogleMaps();
    });
</script>