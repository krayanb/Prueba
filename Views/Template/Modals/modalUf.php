<!-- Modal -->
<div class="modal fade" id="modalFormUf" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Valor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="tile">
            <div class="tile-body">
              <form id="formUf" name="formUf">
                <input type="hidden" id="id" name="id" value="">
                <div class="form-group">
                  <label class="control-label">Fecha</label>
                  <input class="form-control" id="txtFecha" name="txtFecha" type="date" placeholder="Fecha" required="">
                </div>
                <div class="form-group">
                  <label class="control-label">Valor</label>
                  <input class="form-control" id="txtValor" name="txtValor" type="number" step="0.01" placeholder="Valor de la uf" required="">
                 </div>
                <div class="tile-footer">
                  <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#" data-dismiss="modal" ><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                </div>
              </form>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

