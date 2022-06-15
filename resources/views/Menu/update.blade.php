<!-- Add Employee Modal -->
<form method="POST" v-on:submit.prevent="updateModulo(fillModulo.id)">
    <div id="update_modulo" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Modulo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Nombre Modulo <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" v-model="fillMenu.nombreMenu">
                                <span v-for=" error in errors" class="text-danger">@{{ error }}</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Icono Modulo</label>
                                <input class="form-control" type="text" v-model="fillMenu.moduloMenu">
                                <span v-for=" error in errors" class="text-danger">@{{ error }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn" >Actualizar</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>
<!-- /Add Employee Modal -->
