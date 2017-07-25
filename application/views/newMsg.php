<?php 
	$form['id'] = 'form';
	$select['class'] = 'form-control text-center';
?>
<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('templates/head',array('title'=>'Lista de Mensagens')); ?>
	<body>
		<?php $this->load->view('templates/header'); ?>
		<div class="container">
			<div class="panel">
				<h1 class="text-center">Cadastro de usuários</h1>
					<?= form_open('mensagem/enviar',$form); ?>
					<h4>Enviar mensagem</h4>
					<hr>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<?= form_label('Usuário:', 'user');?>
								<?php
									for($i = 0; $i < count($names); $i++):
											$name[$names[$i]['id']] = $names[$i]['name'];
									endfor;
									echo form_dropdown('name', $name, '', $select);
								?>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="msg">Mensagem:</label>
						<textarea class="form-control" id="msg" name="msg" rows="3"></textarea>
					</div>
					<?php $this->load->view('templates/submit',array('return' => 'mensagens', 'type' => 'enviar')); ?>
				</form>
			</div>
		</div>
		<?php $this->load->view('templates/footer'); ?>
		<?php $this->load->view('templates/scripts'); ?>
	</body>
</html>