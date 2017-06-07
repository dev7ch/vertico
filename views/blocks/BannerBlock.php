<?php
/**
 * View file for block: BannerBlock 
 *
 * File has been created with `block/create` command on LUYA version 1.0.0-RC3. 
 *
 * @param $this->placeholderValue('left');
 * @param $this->placeholderValue('right');
 *
 * @var $this \luya\cms\base\PhpBlockView
 */
?>

<div class="7u 12u(medium)">
    <? if ($this->placeholderValue('left')): ?>
        <?= $this->placeholderValue('left') ?>
    <? else: ?>
    <h2>Hi. This is Verti.</h2>
    <p>It's a free responsive site template by HTML5 UP</p>
    <? endif; ?>
</div>
<div class="5u 12u(medium)">
    <? if ($this->placeholderValue('right')): ?>
        <?= $this->placeholderValue('right') ?>
    <? else: ?>
    <ul>
        <li><a href="#" class="button big icon fa-arrow-circle-right">Ok let's go</a></li>
        <li><a href="#" class="button alt big icon fa-question-circle">More info</a></li>
    </ul>
    <? endif; ?>
</div>
