<div class="row">
	<div class="col-md-6">
		<a class="btn btn-danger" href="<?= base_url($return); ?>"><span class="glyphicon glyphicon-arrow-left">&nbsp;</span>Voltar</a>
	</div>
	<div class="col-md-6">
		<button type="button" class="btn btn-primary pull-right" data-toggle="modal" id="submit" data-target=".confirmacaoEdicao">
			<span class="glyphicon glyphicon-ok"></span> <?= $type; ?>
		</button>
		<div class="modal fade confirmacaoEdicao" id="modal_Confirm" role="dialog" aria-labelledby="confirm">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">	
					<div class="modal-body">
						<h5 class="text-center"><strong>Deseja realmente <?= $type; ?> esses dados?</strong></h5>
					</div>
					<div class="modal-footer">
						<div class="row">
							<div class="col-md-offset-1 col-md-5">
								<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove">&nbsp;</span>Cancelar</button>
							</div>
							<div class="col-md-5">	
								<button type="submit" class="btn btn-primary" id="confirm" form="form"><span class="glyphicon glyphicon-ok">&nbsp;</span>Confirmar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

