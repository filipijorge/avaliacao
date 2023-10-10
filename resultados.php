<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Resultados</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
    </head>
    <body>
        <div class="container text-center ">
            <div class="row justify-content-md-center">		
                <div class="col-md-auto mt-5">
                    1<br>
                    2<br>
                    3<br>
                    4<br>
                    5<br>
                </div>	
                <div class="col-md-auto mt-5" style="min-width:300px;">
                    <?php
                        include 'config.php';
                        $sql = "SELECT * FROM notas";
                        $res = $conn->query($sql);
                        $total = mysqli_num_rows($res);

                        $sql = "SELECT nota FROM notas WHERE nota='1'";
                        $res = $conn->query($sql);
                        $nota1 = mysqli_num_rows($res);

                        $sql = "SELECT nota FROM notas WHERE nota='2'";
                        $res = $conn->query($sql);
                        $nota2 = mysqli_num_rows($res);

                        $sql = "SELECT nota FROM notas WHERE nota='3'";
                        $res = $conn->query($sql);
                        $nota3 = mysqli_num_rows($res);

                        $sql = "SELECT nota FROM notas WHERE nota='4'";
                        $res = $conn->query($sql);
                        $nota4 = mysqli_num_rows($res);

                        $sql = "SELECT nota FROM notas WHERE nota='5'";
                        $res = $conn->query($sql);
                        $nota5 = mysqli_num_rows($res);

                        $pc1 = $nota1 / $total * 100;
                        $pc2 = $nota2 / $total * 100;
                        $pc3 = $nota3 / $total * 100;
                        $pc4 = $nota4 / $total * 100;
                        $pc5 = $nota5 / $total * 100;

                        $med = (1 * $nota1 + 2 * $nota2 + 3 * $nota3 + 4 * $nota4 + 5 * $nota5) / $total;
                    ?>
                    
                    <div class="progress" role="progressbar" aria-valuenow="<?php echo round($pc1); ?>" aria-valuemin="0" aria-valuemax="100">
                       <div class="progress-bar" style="width: <?php echo round($pc1); ?>%"><?php echo round($pc1); ?>%</div>
                    </div>
                    
                    <div class="progress" role="progressbar" aria-valuenow="<?php echo round($pc2); ?>" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: <?php echo round($pc2); ?>%"><?php echo round($pc2); ?>%</div>
                    </div>
                    
                    <div class="progress" role="progressbar" aria-valuenow="<?php echo round($pc3); ?>" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: <?php echo round($pc3); ?>%"><?php echo round($pc3); ?>%</div>
                    </div>
                    
                    <div class="progress" role="progressbar" aria-valuenow="<?php echo round($pc4); ?>" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: <?php echo round($pc4); ?>%"><?php echo round($pc4); ?>%</div>
                    </div>
                    
                    <div class="progress" role="progressbar" aria-valuenow="<?php echo round($pc5); ?>" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: <?php echo round($pc5); ?>%"><?php echo round($pc5); ?>%</div>
                    </div>

                </div>
                <div class="col-md-auto mt-5">
                    <?php echo $nota1; ?><br>
                    <?php echo $nota2; ?><br>
                    <?php echo $nota3; ?><br>
                    <?php echo $nota4; ?><br>
                    <?php echo $nota5; ?><br>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col">
                    <h1>Média <?php echo round($med,2); ?> / 5</h1>
                </div>
            </div>
        </div>
    </body>
</html>
