<div class="actions">
    <ul>
	<li><?php echo $this->Html->link(
    'Home',
    array('controller' => 'pages', 'action' => 'index')); ?>
	</li>  
<?php if(isset($roles) and $roles=='customer') { ?>
	<li><?php echo $this->Html->link('CannaRabbit Order',array('controller' => 'users', 'action' => 'place_order'), array('escape'=>false)); ?></li>
	<li><?php echo $this->Html->link(
		'Check Status',
		array('controller' => 'users', 'action' => 'order_status')
	); ?></li>
	<li><?php echo $this->Html->link(
		'Logout',
		array('controller' => 'users', 'action' => 'logout')
	); ?></li>
	<?php } elseif(isset($roles) and $roles=='driver') { ?>
	<li><?php echo $this->Html->link('My Orders',array('controller' => 'drivers', 'action' => 'my_orders'), array('escape'=>false)); ?></li>
	<li><?php echo $this->Html->link(
		'Logout',
		array('controller' => 'users', 'action' => 'logout')
	); ?></li>
<?php } else { ?>
    <li><?php echo $this->Html->link(
    'Request a Quote',
    array('controller' => 'users', 'action' => 'add')
	); ?></li>
	<li><?php echo $this->Html->link(
		'Get Quote',
		array('controller' => 'users', 'action' => 'get_quote')
	); ?></li>
	<li><?php echo $this->Html->link(
		'Login',
		array('controller' => 'users', 'action' => 'login')
	); ?></li>

<?php } ?>
    </ul>
</div>