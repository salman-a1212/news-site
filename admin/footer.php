<?php 

if(!isset($_SESSION["username"])){
header("Location: {$hostname}admin/");
}

$sql = "SELECT * FROM settings";

$result = mysqli_query($conn, $sql) or die("Query Failed.");
if(mysqli_num_rows($result) > 0){
$row = mysqli_fetch_assoc($result);
}

?>
<!-- Footer -->


<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span><?php echo $row['footerdesc']?></a></span>
            </div>
        </div>
    </div>
</div>
<!-- /Footer -->
</body>

</html>