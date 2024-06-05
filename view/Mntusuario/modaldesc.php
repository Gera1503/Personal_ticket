<div id="modaldes" class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
						<i class="font-icon-close-2"></i>
					</button>
					<h4 class="modal-title" id="mdldtitulo"></h4>
				</div>
                <form method="post" id="pass_form">
                    <div class="modal-body">
                         <input type="hidden" id="us_id" name="us_id">
                        


                        <div class="form-group">
                            <label class="form-label" for="key">Al terminar de verificar solo preciona "OK"</label> 
                            <input type="text" class="form-control" id="desi" name="desi" placeholder="" required>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button"  class="btn btn-rounded btn-primary" data-dismiss="modal">OK</button>
                        <!-- <button type="submit" name="act" id="act" value="add" class="btn btn-rounded btn-primary">aceptar</button> -->
                    </div>
                </form>
			</div>
		</div>
</div>