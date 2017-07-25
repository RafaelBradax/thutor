<?php
	$form['id'] = 'form';
	$name['class'] = 'form-control';
	$name['placeholder'] = 'Nome Completo';
	$biography['class'] = 'form-control';
	$biography['placeholder'] = 'Quem é você?';
	$select['class'] = 'form-control text-center';
	$mounth = array(
				'1' => 'Janeiro',
				'2' => 'Fevereiro',
				'3' => 'Março',
				'4' => 'Abril',
				'5' => 'Maio',
				'6' => 'Junho',
				'7' => 'Julho',
				'8' => 'Agosto', 
				'9' => 'Setembro',
				'10' => 'Outubro', 
				'11' => 'Novembro',
				'12' => 'Dezembro'
			);
	$cep['class'] = 'form-control';
	$cep['placeholder'] = 'xxxxx-xxx';
	$cep['id'] = 'cep';
	$phone['class'] = 'form-control';
	$phone['placeholder'] = '(xx) xxxx-xxxx';
	$phone['id'] = 'phone';
	$street['class'] = 'form-control';
	$street['placeholder'] = 'Nome da rua';
	$street['id'] = 'street';
	$number['class'] = 'form-control';
	$number['placeholder'] = 'Número';
	$number['id'] = 'number';
	$complement['class'] = 'form-control';
	$complement['placeholder'] = 'Complemento';
	$complement['id'] = 'complement';
	$neighborhood['class'] = 'form-control';
	$neighborhood['placeholder'] = 'Bairro';
	$neighborhood['id'] = 'neighborhood';
	$city['class'] = 'form-control';
	$city['placeholder'] = 'Cidade';
	$city['id'] = 'city';
	$uf['class'] = 'form-control';
	$uf['placeholder'] = 'UF';
	$uf['id'] = 'uf';
?>
<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('templates/head',array('title'=>'Cadastro de Usuário')); ?>
	<body>
		<?php $this->load->view('templates/header'); ?>
		<div class="container">
			<div class="panel">
				<h1 class="text-center">Cadastro de usuários</h1>
				<?php if($errors): ?>
					<div class="alert alert-warning">
						<ul>
							<?= $errors; ?>
						</ul>
					</div>
				<?php endif; ?>
				<?= form_open('usuario/cadastrar',$form); ?>
					<h4>Informações pessoais</h4>
					<hr>
					<div class="form-group">
						<?= form_label('Nome:', 'name'); ?>
						<?= form_input('name', set_value('name'), $name); ?>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-1">
								<?= form_label('Dia:', 'day');?>
								<?php
									for($i = 1; $i <= 31; $i++):
										$day[$i] = $i;
									endfor;
									echo form_dropdown('day', $day, '1', $select);
								?>
							</div>
							<div class="col-md-3">
								<?= form_label('Mês:', 'mounth');?>
								<?php
									echo form_dropdown('mounth', $mounth, 'Janeiro', $select);
								?>
							</div>
							<div class="col-md-2">
								<?= form_label('Ano:', 'year');?>
								<?php
									for($i = 2017; $i >= 1917; $i--):
											$year[$i] = $i;
									endfor;
									echo form_dropdown('year', $year, '2017', $select);
								?>
							</div>
						</div>
					</div>
					<div class="form-group">
						<?= form_label('Biografia:', 'biography'); ?>
						<?= form_textarea('biography', set_value('biography'), $biography); ?>
					</div>
					<h4>Endereço</h4>
					<hr>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<?= form_label('CEP:', 'cep');  ?>
								<?= form_input('cep', set_value('cep'), $cep); ?>
							</div>
						</div>
						<div class="col-md-offset-4 col-md-4">
							<div class="form-group">
								<?= form_label('Telefone Residêncial:', 'phone');  ?>
								<?= form_input('phone', set_value('phone'), $phone); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-9">
							<div class="form-group">
								<?= form_label('Nome da rua:', 'street'); ?>  
								<?= form_input('street', set_value('street'), $street); ?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<?= form_label('Número', 'number'); ?>
								<?= form_input('number', set_value('number'), $number); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<?= form_label('Bairro:', 'neighborhood'); ?>  
								<?= form_input('neighborhood', set_value('neighborhood'), $neighborhood); ?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<?= form_label('Complemento', 'complement'); ?> 
								<?= form_input('complement', set_value('complement'), $complement); ?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<?= form_label('Cidade:', 'city'); ?> 
								<?= form_input('city', set_value('city'), $city); ?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<?= form_label('Estado:', 'uf'); ?>  
								<?= form_input('uf', set_value('uf'), $uf); ?>
							</div>
						</div>
					</div>
					<?php $this->load->view('templates/submit',array('return' => 'usuarios', 'type' => 'cadastrar')); ?>
				<?= form_close(); ?>
				
			</div>
		</div>
		<?php $this->load->view('templates/footer'); ?>
		<?php $this->load->view('templates/scripts'); ?>
	</body>
</html>