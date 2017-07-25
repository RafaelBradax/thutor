<?php
	$form['id'] = 'form';
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
	$hidden = array('id' => $data[0]['id']);
	$date = explode('-', $data[0]['birthday']);
	$addr = explode(';', $data[0]['address']);
?>
<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('templates/head',array('title'=>'Cadastro atualização de Usuário')); ?>
	<body>
		<?php $this->load->view('templates/header'); ?>
		<div class="container">
			<div class="panel">
				<h1 class="text-center">Cadastro de usuários</h1>
				<?= form_open('usuario/atualizar',$form,$hidden); ?>
					<h4>Informações pessoais</h4>
					<hr>
					<div class="form-group">
						<?= form_label('Nome:', 'name'); ?>
						<?= form_input('name', $data[0]['name'], $name); ?>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-1">
								<?= form_label('Dia:', 'day');?>
								<?php
									for($i = 1; $i <= 31; $i++):
										$day[$i] = $i;
									endfor;
									echo form_dropdown('day', $day, $date[2], $select);
								?>
							</div>
							<div class="col-md-3">
								<?= form_label('Mês:', 'mounth');?>
								<?php
									echo form_dropdown('mounth', $mounth, $date[1], $select);
								?>
							</div>
							<div class="col-md-2">
								<?= form_label('Ano:', 'year');?>
								<?php
									for($i = 2017; $i >= 1917; $i--):
											$year[$i] = $i;
									endfor;
									echo form_dropdown('year', $year, $date[0], $select);
								?>
							</div>
						</div>
					</div>
					<div class="form-group">
						<?= form_label('Biografia:', 'biography'); ?>
						<?= form_textarea('biography', $data[0]['biography'], $biography); ?>
					</div>
					<h4>Endereço</h4>
					<hr>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<?= form_label('CEP:', 'cep');  ?>
								<?= form_input('cep', $addr[0], $cep); ?>
							</div>
						</div>
						<div class="col-md-offset-4 col-md-4">
							<div class="form-group">
								<?= form_label('Telefone Residêncial:', 'phone');  ?>
								<?= form_input('phone', $data[0]['phone'], $phone); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-9">
							<div class="form-group">
								<?= form_label('Nome da rua:', 'street'); ?>  
								<?= form_input('street', $addr[1], $street); ?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<?= form_label('Número', 'number'); ?>
								<?= form_input('number', $addr[3], $number); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<?= form_label('Bairro:', 'neighborhood'); ?>  
								<?= form_input('neighborhood', $addr[2], $neighborhood); ?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<?= form_label('Complemento', 'complement'); ?> 
								<?= form_input('complement', $addr[4], $complement); ?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<?= form_label('Cidade:', 'city'); ?> 
								<?= form_input('city', $addr[5], $city); ?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<?= form_label('Estado:', 'uf'); ?>  
								<?= form_input('uf', $addr[6], $uf); ?>
							</div>
						</div>
					</div>
					<?php $this->load->view('templates/submit',array('return' => 'usuarios', 'type' => 'atualizar')); ?>
				<?= form_close(); ?>
				
			</div>
		</div>
		<?php $this->load->view('templates/footer'); ?>
		<?php $this->load->view('templates/scripts'); ?>
	</body>
</html>