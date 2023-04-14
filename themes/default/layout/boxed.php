<?PHP

namespace Steampixel;

// Get the component props
$lang = $this->prop('lang', [
    'type' => 'string',
    'required' => true
]);

$title = $this->prop('title', [
    'type' => 'string',
    'required' => true
]);

$subtitle = $this->prop('subtitle', [
    'type' => 'string',
    'required' => false
]);

$hero_size = $this->prop('hero_size', [
    'type' => 'string',
    'required' => false,
    'default' => 'small'
]);

?>
<!DOCTYPE html>
<html lang="<?= $lang ?>" class="h-100">

<head>

    <?= Component::create('partials/title')->assign(['title' => $title])->render() ?>

    <?= Component::create('partials/meta')->render() ?>

    <?= Component::create('partials/style')->render() ?>

</head>

<body class="d-flex flex-column h-100">

<?= Component::create('partials/navigation') ?>

<?php
if (isset($_COOKIE["dpk"]) && "on" === $_COOKIE["dpk"]) {
    echo Component::create('partials/dpk_form');
}
?>

<?= Component::create('content/hero')->assign(['title' => $title, 'subtitle' => $subtitle, 'size' => $hero_size]) ?>

<main class="flex-shrink-0">
    <div class="container">

        <?= Component::create('partials/content') ?>

    </div>
</main>

<?= Component::create('partials/footer') ?>

<?= Component::create('partials/javascript') ?>

</body>

</html>
