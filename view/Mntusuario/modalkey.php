<div id="modalkey" class="modal fade bd-example-modal"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
						<i class="font-icon-close-2"></i>
					</button>
					<h4 class="modal-title" id="mdlkey"></h4>
				</div>
                <form method="post" id="key_form">
                    <div class="modal-body">
                        <!-- <input type="hidden" id="us_id" name="us_id"> -->
                        


                        <div class="form-group">
                            <label class="form-label" for="key">Ingresa llave para desencriptar</label>
                            <input type="password" class="form-control" id="key" name="key" placeholder="" required>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-rounded btn-primary" data-dismiss="modal">cerrar</button>
                        <button type="button" id="btnvalidar" value="add" class="btn btn-rounded btn-primary">aceptar</button>
                    </div>
                </form>
			</div>
		</div>
</div>