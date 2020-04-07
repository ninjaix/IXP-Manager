<?php
/** @var Foil\Template\Template $t */
/** @var $t->active */

$this->layout( 'layouts/ixpv4' );
?>

<?php $this->section( 'page-header-preamble' ) ?>
    Document Store
    :: <a class="tw-font-normal" href="<?= route( 'docstore-dir@list', [ 'dir' => $t->file->directory ] ) ?>"><?= $t->file->directory ? $t->file->directory->name : 'Root Directory' ?></a>
<?php $this->append() ?>

<?php $this->section( 'page-header-postamble' ) ?>
    <div class="btn-group btn-group-sm ml-auto" role="group">

        <a id="add-file" class="btn btn-white" href="<?= route('docstore-file@download', ['file' => $t->file ] ) ?>">
            Download
        </a>
    </div>
<?php $this->append() ?>

<?php $this->section('content') ?>

<div class="row">
<div class="col-md-12">

<?= $t->alerts() ?>

<h3 class="tw-mt-4">Viewing File: <?= $t->file->name ?></h3>

<?php if( $t->file->extension() == 'md' ): ?>

<div class="tw-mt-8 tw-border tw-p-5 tw-rounded-lg tw-border-gray-200 tw-bg-gray-100 tw-text-black">
<?= @parsedown( $t->content ) ?>
</div>

<?php elseif( $t->file->extension() == 'mp4' ): ?>

<video  controls>
    <source src="<?= route('docstore-file@download', ['file' => $t->file ] ) ?>" type="video/mp4">
</video>

<?php else: ?>

<div class="tw-mt-8 tw-border tw-p-5 tw-rounded-lg tw-border-gray-200 tw-bg-gray-100 tw-text-black">
<pre><?= $t->ee( trim( $t->content ) ) ?></pre>
</div>

<?php endif; ?>
</div>
</div>
<?php $this->append() ?>