<?php
/**
 * View file for block: BoxBlock 
 *
 * File has been created with `block/create` command on LUYA version 1.0.0-RC3. 
 *
 * @param $this->extraValue('image');
 * @param $this->varValue('image');
 * @param $this->varValue('link');
 * @param $this->varValue('subtitle');
 * @param $this->varValue('text');
 * @param $this->varValue('title');
 *
 * @var $this \luya\cms\base\PhpBlockView
 */
?>

<div class="4u 12u(medium)">
    <!-- Box -->
    <section class="box feature">
        <a href="<?= $this->extraValue('link') ? $this->extraValue('link') : '#' ?>" class="image featured"><? if ($this->extraValue('image')): ?><img src="<?= $this->extraValue('image')->source ?>" alt="" /> <? endif; ?></a>
        <div class="inner">
            <header>
                <h2><?= $this->varValue('title'); ?></h2>
                <p><?= $this->varValue('subtitle'); ?></p>
            </header>
            <p><?= $this->varValue('text'); ?></p>
        </div>
    </section>
</div>
