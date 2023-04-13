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
    <div class="text-center">
        <figure class="figure">
            <img src="<?= $src ?>" class="figure-img img-fluid rounded"/>

            <?PHP if ($title) { ?>
                <figcaption class="figure-caption"><?= $title ?></figcaption>
            <?PHP } ?>
        </figure>
    </div>
</div>
