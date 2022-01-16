<?php
$navbar_items = [
    [
        'name' => 'Home',
        'href' => url_for('/'),
        'is_active' => str_contains($_SERVER['SCRIPT_NAME'], '/index.php'),
    ],
];
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class="container">
        <span class="navbar-brand mb-0 h1">Client Hints Demo</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <?php foreach ($navbar_items as $navbar_item) { ?>
                <a class="nav-link <?php if ($navbar_item['is_active']) { echo 'active'; } ?>" aria-current="page" href="<?php echo $navbar_item['href']; ?>">
                    <?php echo $navbar_item['name']; ?>
                </a>
                <?php } ?>
            </div>
        </div>
    </div>
</nav>
