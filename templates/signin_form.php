<?= TWXHtmlUtils::startForm('signin', '', 'GET') ?>

    <?= TWXHtmlUtils::inputHidden('do', ['value' => 'signin']) ?>

    <p>
        <?= TWXHtmlUtils::label('redeemc', 'Redeem Code') ?>
        <br/>
        <?= TWXHtmlUtils::inputText('redeemc') ?>
    </p>

    <p class="">
        <?= TWXHtmlUtils::inputSubmit('submit', 'Login', ['class' => 'button']) ?>
    </p>

<?= TWXHtmlUtils::endForm() ?>
