<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Internship[]|\Cake\Collection\CollectionInterface $internships
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?$loggeduser = $this->request->getSession()->read('Auth.User');?>
		
		<? if($loggeduser['category']==3){?>
		
        <li><?= $this->Html->link(__('Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('Coordonators'), ['controller' => 'Coordonators', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('Customerbases'), ['controller' => 'Customerbases', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('Environments'), ['controller' => 'Environments', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('Internships Students'), ['controller' => 'InternshipsStudents', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Internships Customerbases'), ['controller' => 'InternshipsCustomerbases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Internships Environments'), ['controller' => 'InternshipsEnvironments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Internships Students'), ['controller' => 'InternshipsStudents', 'action' => 'index']) ?></li>	
		<li><?= $this->Html->link(__('New Internship'), ['action' => 'add']) ?></li>
        
			
			<?}else if($loggeduser['category']==2){?>
			
				<li><?= $this->Html->link(__('Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
				<li><?= $this->Html->link(__('Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
				<li><?= $this->Html->link(__('Internships Customerbases'), ['controller' => 'InternshipsCustomerbases', 'action' => 'index']) ?></li>
				<li><?= $this->Html->link(__('Internships Environments'), ['controller' => 'InternshipsEnvironments', 'action' => 'index']) ?></li>
				<li><?= $this->Html->link(__('Internships Students'), ['controller' => 'InternshipsStudents', 'action' => 'index']) ?></li>
				<li><?= $this->Html->link(__('New Internship'), ['action' => 'add']) ?></li>
				
				<?}else if($loggeduser['category']==1){?>
				
					<li><?= $this->Html->link(__('Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('Internships Customerbases'), ['controller' => 'InternshipsCustomerbases', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('Internships Environments'), ['controller' => 'InternshipsEnvironments', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('Internships Students'), ['controller' => 'InternshipsStudents', 'action' => 'index']) ?></li>

        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Files'), ['controller' => 'Files', 'action' => 'add']) ?></li>
					
					<?}else{?>
					
						<li><?= $this->Html->link(__('Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
						<li><?= $this->Html->link(__('Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
						<li><?= $this->Html->link(__('Internships Customerbases'), ['controller' => 'InternshipsCustomerbases', 'action' => 'index']) ?></li>
						<li><?= $this->Html->link(__('Internships Environments'), ['controller' => 'InternshipsEnvironments', 'action' => 'index']) ?></li>
						<li><?= $this->Html->link(__('Internships Students'), ['controller' => 'InternshipsStudents', 'action' => 'index']) ?></li>
						
					<?}?>
    </ul>
</nav>
<div class="internships index large-9 medium-8 columns content">
    <h3><?= __('Internships') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('period') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hours') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stage_details') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($internships as $internship):  /*debug($internship);*/ ?>
            <tr>
                <td><?= $this->Number->format($internship->id) ?></td>
                <td><?= h($internship->period) ?></td>
                <td><?= h($internship->date_start) ?></td>
                <td><?= h($internship->date_end) ?></td>
                <td><?= $this->Number->format($internship->hours) ?></td>
                <td><?= h($internship->title) ?></td>
                <td><?= h($internship->stage_details) ?></td>
                <td><?= $this->Number->format($internship->active) ?></td>
                
                <td><?= $internship->has('company') ? $this->Html->link($internship->company->name, ['controller' => 'Companies', 'action' => 'view', $internship->company->id]) : '' ?></td>
                <td><?= $internship->has('type') ? $this->Html->link($internship->type->name, ['controller' => 'Types', 'action' => 'view', $internship->type->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $internship->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $internship->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $internship->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internship->id)]) ?>
					
					
						
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
