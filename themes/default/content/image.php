<?PHP

// Get the component props
$src = $this->prop('src', [
    'type' => 'string',
    'required' => true
]);

$title = $this->prop('title', [
    'type' => 'string',
    'required' => false
]);

?>

<div class="container">

    <figure class="figure">
    <img src="<?= $src ?>" class="figure-img img-fluid rounded mx-auto d-block"/>

    <?PHP if ($title) { ?>
        <figcaption class="figure-caption"><?= $title ?></figcaption>
    <?PHP } ?>
    </figure>

</div>
