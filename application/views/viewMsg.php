<?php
	$date = new DateTime($data[0]['date']);
	$date = $date->format('d/m/Y H:i:s');
?>
<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('templates/head',array('title'=>'Visualização da Mensagem')); ?>
	<body>
		<?php $this->load->view('templates/header'); ?>
		<div class="container">
			<div class="panel">
				<h1 class="text-center">Visualização da mensagem</h1>
					<p>
						<span><strong>Nome de remetente:</strong></span><br>
						<?= $data[0]['user']; ?>
					</p>
					<p>
						<span><strong>Data do Envio</strong></span><br>
						<?= $date; ?>
					</p>
					<p>
						<span><strong>Mensagem</strong></span><br>
						<?= nl2br($data[0]['msg']); ?>
					</p>
					<a class="btn btn-danger" href="<?= base_url('mensagens'); ?>">
						<span class="glyphicon glyphicon-arrow-left">
							&nbsp;Voltar
						</span>
					</a>
						
				</div>
			</div>
		</div>
		<?php $this->load->view('templates/footer'); ?>
		<?php $this->load->view('templates/scripts'); ?>
	</body>
</html>