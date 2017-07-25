<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('templates/head',array('title'=>'Lista de Mensagens')); ?>
	<body>
		<?php $this->load->view('templates/header'); ?>
		<div class="container">
			<div class="panel">
				<h1 class="text-center">Mensagens enviadas</h1>
				<a class="btn btn-default pull-right" href="<?= base_url('mensagem/nova'); ?>">
					<span class="glyphicon glyphicon-send">&nbsp;Escrever nova mensagem</span>
				</a>
				<table class="table table-hover">
					<thead>
						<th>ID da mensagem</th>
						<th>Nome do usuário</th>
						<th>Data do envio</th>
						<th>Mensagem</th>
						<th>Ações</th>
					</thead>
					<tbody>
						<?php for($i = 0; $i < count($data); $i++): ?>
							<tr>
								<td><?= $data[$i]['id']; ?></td>
								<td><?= $data[$i]['user']; ?></td>
								<td><?= $data[$i]['date']; ?></td>
								<td>
									<?php
										echo substr($data[$i]['msg'],0,25);
										if(strlen($data[$i]['msg']) > 25)echo '...';
									?>
								</td>
								<td>
									<a class="btn btn-primary" id="visualizar" title="Visualizar" href="<?= base_url('mensagem/visualizacao/').$data[$i]['id']; ?>" name="visualizar">
										<span class="glyphicon glyphicon-eye-open">&nbsp;Ver Detalhes</span>
									</a>
								</td>
							</tr>
						<?php endfor; ?>
					</tbody>
				</table>
			</div>
		</div>
		<?php $this->load->view('templates/footer'); ?>
		<?php $this->load->view('templates/scripts'); ?>
	</body>
</html>