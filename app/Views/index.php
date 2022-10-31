<h1>Generate Short Links</h1>

<?= session()->getFlashdata('error') ?>
<?= session()->getFlashdata('success') ?>
<?php
if (session()->getFlashdata('link')) {
    echo '<a href="/s/' . session()->getFlashdata('link') . '" target="_blank">Show</a>';
}
?>
<?= service('validation')->listErrors() ?>

<form action="/link/create" method="post">
    <?= csrf_field() ?>

    <label for="title">Url: </label>
    <input type="text" name="url" placeholder="http://example.com" />

    <input type="submit" name="submit" value="Shorten URL" />
</form>