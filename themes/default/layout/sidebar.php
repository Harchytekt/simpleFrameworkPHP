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

<?= Component::create('content/hero')->assign(['title' => $title, 'size' => $hero_size]) ?>

<main class="flex-shrink-0">
    <div class="container">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-3">
                    <?= Component::create('partials/sidebar')->assign(['title' => $subtitle]) ?>
                </div>
                <div class="col-9">
                    <?= Component::create('partials/content') ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?= Component::create('partials/footer') ?>

<?= Component::create('partials/javascript') ?>

</body>

</html>
