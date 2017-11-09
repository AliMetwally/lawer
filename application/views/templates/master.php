<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Title</title>
        
        <!--Bootstrap Css-->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css')?>"/>        
        <!--<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style-rtl.alpha6.min.css')?>"/>-->                
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/font-awesome.min.css')?>"/>                
                
        <?php if(isset($styles)): ?>      
        <!--Optional Styles-->
        <?php foreach ($styles as $style):?>
        <link rel="stylesheet" href='<?= base_url("assets/css/$style")?>'/>
        <?php endforeach;  endif;?>
        
        
        <!--main style-->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css')?>"/>
        
        
        
    </head>
    <body>
        
        <?= $body ?>
        
        
        <!--scripts-->
        <script src="<?= base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
        <script src="<?= base_url('assets/js/popper.js')?>"></script>
        <script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
        
        <?php if(isset($scripts)): ?>      
        <!--Optional scripts-->
        <?php foreach ($scripts as $script):?>
        <script src='<?= base_url("assets/js/$script")?>'></script>
        <?php endforeach;  endif;?>
        
        <script src="<?= base_url('assets/js/main.js')?>"></script>
    </body>
</html>