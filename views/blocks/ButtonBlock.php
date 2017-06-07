<?php
/**
 * View file for block: ButtonBlock 
 *
 * File has been created with `block/create` command on LUYA version 1.0.0-RC3. 
 *
 * @param $this->varValue('big');
 * @param $this->varValue('icon');
 * @param $this->varValue('link');
 * @param $this->varValue('label');
 *
 * @var $this \luya\cms\base\PhpBlockView
 */
?>
<? if ($this->varValue('big')): ?>
    <? if (!$this->isPrevEqual): ?>
    <ul>
    <? endif; ?>
    <li>
<? endif; ?>

<a<?= $this->varValue('link')['type'] == 2 ? ' target="_blank"' : ''; ?> href="<?= $this->extraValue('link') ? $this->extraValue('link') : '#'?>" class="button<?= $this->varValue('big') ? ' big ' : '' ?> <?= $this->varValue('icon') ? $this->varValue('icon') : 'info'?> icon fa-<?= $this->varValue('icon') ? $this->varValue('icon') : 'info'?>"><?= $this->varValue('label') ? $this->varValue('label') : 'Button'?></a>

<? if ($this->varValue('big')): ?>
    </li>
    <? if (!$this->isNextEqual): ?>
        </ul>
    <? endif; ?>
<? endif; ?>

