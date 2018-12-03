<h1>Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->control('email') ?>
<?= $this->Form->control('password') ?>
<?= $this->Form->button('Login') ?>
</br>
<?= $this->Html->link(__('Forgot your password ?'), ['controller' => 'Users', 'action' => 'rpassword']) ?>
<?= $this->Form->end() ?>