<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('templates/head',array('title'=>'Usuários')); ?>
	<body>
		<?php $this->load->view('templates/header'); ?>
		<div class="container">
			<div class="panel">
				<h1 class="text-center">Usuários cadastrados</h1>
				<a class="btn btn-default pull-right" href="<?= base_url('usuario/cadastro'); ?>">
					<span class="glyphicon glyphicon-plus">Inserir novo usuário</span>
				</a>
				<?php $this->load->view('templates/status',array('status' => $status)); ?>
				<table class="table table-hover">
					<thead>
						<th>ID</th>
						<th>Nome do usuário</th>
						<th>Ações</th>
					</thead>
					<tbody>
						<?php for($i = 0; $i < count($data); $i++): ?>
							<tr>
								<td><?= $data[$i]['id']; ?></td>
								<td><?= $data[$i]['name']; ?></td>
								<td>
									<a class="btn btn-default" id="editar" title="Editar" href="<?= base_url('usuario/atualizacao/').$data[$i]['id']; ?>" name="editar">
										<span class="glyphicon glyphicon-edit"></span>
									</a>
									<a class="btn btn-default" id="editar" title="Editar" href="<?= base_url('usuario/visualizacao/').$data[$i]['id']; ?>" name="editar">
										<span class="glyphicon glyphicon-eye-open"></span>
									</a>
									<button type="button" class="btn btn-danger" title="Excluir" data-toggle="modal" data-target=".confirmacaoExclusao<?= $data[$i]['id']; ?>">
										<span class="glyphicon glyphicon-remove"></span>
									</button>
									<div class="modal fade confirmacaoExclusao<?= $data[$i]['id']; ?>" role="dialog" aria-labelledby="confirm">
										<div class="modal-dialog modal-sm" role="document">
											<div class="modal-content">	
												<div class="modal-body">
													<h5 class="text-center"><strong>Deseja realmente alterar esses dados?</strong></h5>
												</div>
												<div class="modal-footer">
													<div class="row">
														<div class="col-md-offset-1 col-md-5">
															<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove">&nbsp;</span>Cancel</button>
														</div>
														<div class="col-md-5">
															<a class="btn btn-primary" id="excluir" name="excluir" href="<?= base_url('usuario/delete/').$data[$i]['id']; ?>">
																<span class="glyphicon glyphicon-remove">&nbsp;</span>Excluir
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
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