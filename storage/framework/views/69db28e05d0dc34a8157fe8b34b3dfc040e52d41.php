

<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/boostrap.min.css')); ?>" rel="stylesheet">
    

</head>
<body class="app">
    <!-- @TOC  -->
    <!-- =================================================== -->
    <!--
      + @Page  Loader
      + @App  Content
          - #Left Sidebar
              > $Sidebar Header
              > $Sidebar Menu

          - #Main
              > $Topbar
              > $App Screen Content
    -->

    <!-- @Page  Loader -->
    <!-- =================================================== -->
        <div id='loader'>
            <div class="spinner"></div>
        </div>
        <script>
          window.addEventListener('load', () => {
            const loader = document.getElementById('loader');
            setTimeout(() => {
              loader.classList.add('fadeOut');
            }, 300);
          });
        </script>
        
        <?php echo $__env->yieldContent('content'); ?>
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/vendor.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bundle.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <?php echo $__env->yieldContent('script'); ?>
</body>
</html>
