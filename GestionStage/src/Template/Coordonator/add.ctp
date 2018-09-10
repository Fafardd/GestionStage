<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coordonator $coordonator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Coordonator'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="coordonator form large-9 medium-8 columns content">
    <?= $this->Form->create($coordonator) ?>
    <fieldset>
        <legend><?= __('Add Coordonator') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('first_name');
            echo $this->Form->control('title');
            echo $this->Form->control('place');
            echo $this->Form->control('city');
            echo $this->Form->control('province');
            echo $this->Form->control('email');
            echo $this->Form->control('phone');
            echo $this->Form->control('job');
            echo $this->Form->control('fax');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
