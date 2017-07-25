<?php
	$date = explode('-', $data[0]['birthday']);
	$addr = explode(';', $data[0]['address']);
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
?>
<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('templates/head',array('title'=>'Visualização de Usuário')); ?>
	<body>
		<?php $this->load->view('templates/header'); ?>
		<div class="container">
			<div class="panel">
				<h1 class="text-center">Visualização de cadastro</h1>
					<p>
						<h4 class="subjectForm">Informações pessoais</h4>
						<hr>
					</p>
					<div class="row">
						<div class="col-md-6">
							<p>
								<span><strong>Nome</strong></span><br>
								<?= $data[0]['name']; ?>
							</p>
							<p>
								<span><strong>Data de nascimento</strong></span><br>
								<?= $date[2].' de '.$mounth[(int)$date[1]].' de '.$date[0]; ?>
							</p>
							<p>
								<span><strong>Biografia</strong></span><br>
								<?= nl2br($data[0]['biography']); ?>
							</p>
							<p>
								<h4 class="subjectForm">Endereço</h4>
								<hr>
							</p>
						</div>
						<div class="col-md-6">
							<p>
								<span><strong>Data de criação do usuário</strong></span><br>
								<?php
									$date = new DateTime($data[0]['creation']);
									echo $date->format('d/m/Y H:i:s');
								?>
							</p>
						</div>
					</div>
						
					<div class="row">
						<div class="col-md-6">
							<p>
								<span><strong>CEP</strong></span><br>
								<?= $addr[0]; ?>
							</p>
							<p>
								<span><strong>Telefone Residêncial</strong></span><br>
								<?= $data[0]['phone']; ?>
							</p>
							<p>
								<span><strong>Rua</strong></span><br>
								<?= $addr[1]; ?>
							</p>
							<p>
								<span><strong>Número</strong></span><br>
								<?= $addr[3]; ?>
							</p>
						</div>
						<div class="col-md-6">
							<p>
								<span><strong>Bairro</strong></span><br>
								<?= $addr[2]; ?>
							</p>
							<p>
								<span><strong>Complemento</strong></span><br>
								<?= $addr[4]; ?>
							</p>
							<p>
								<span><strong>Cidade</strong></span><br>
								<?= $addr[5]; ?>
							</p>
							<p>
								<span><strong>Estado</strong></span><br>
								<?= $addr[6]; ?>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<a class="btn btn-danger" href="<?= base_url('usuarios'); ?>">
								<span class="glyphicon glyphicon-arrow-left">
									&nbsp;Voltar
								</span>
							</a>
						</div>
						<div class="col-md-6">
							<a class="btn btn-primary pull-right" href="<?= base_url('usuario/atualizacao/').$data[0]['id']; ?>">
								<span class="glyphicon glyphicon-pencil">
									&nbsp;Editar
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $this->load->view('templates/footer'); ?>
		<?php $this->load->view('templates/scripts'); ?>
	</body>
</html>