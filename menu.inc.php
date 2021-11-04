
<?php

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <?php
    foreach($menupontok as $key => $value){
        $active = '';
        if($_SERVER['REQUEST_URI'] == '/teszt/'.$key) $active = 'active';
    ?>
    <div class="container-fluid <?php echo $active; ?>">
            <a class="navbar-brand" href="index.php?page=<?php echo $key; ?>"><?php echo $value; ?></a>
    </div>
    <?php
        }
    ?>
</nav>