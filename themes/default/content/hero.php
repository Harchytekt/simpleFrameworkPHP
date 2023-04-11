<?PHP

// Get the component props
$title = $this->prop('title', [
    'type' => 'string',
    'required' => true
]);

$subtitle = $this->prop('subtitle', [
    'type' => 'string',
    'required' => false
]);

$size = $this->prop('size', [
    'type' => 'string',
    'required' => false,
    'default' => 'small'
]);

?>

<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold"><?= $title ?></h1>
    <?PHP if ($subtitle) { ?>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4"><?= $subtitle ?></p>
        </div>
    <?PHP } ?>
</div>
