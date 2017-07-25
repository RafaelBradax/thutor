<div class="row">
    <div class="col-md-offset-4 col-md-4"> 
        <?php if($status == 'created'): ?>


            <div class="alert alert-success text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Dados criados com sucesso!&nbsp;</strong>
            </div>

        <?php elseif($status == 'updated'): ?>


            <div class="alert alert-success text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Dados atualizados com sucesso!&nbsp;</strong>
            </div>

        <?php elseif($status == 'deleted'): ?>


            <div class="alert alert-success text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Dados deletados com sucesso!&nbsp;</strong>
            </div>
        <?php elseif($status == 'error'): ?>


            <div class="alert alert-danger text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Erro ao modificar os dados&nbsp;</strong>
            </div>

            
        <?php endif; ?>
    </div>
</div>