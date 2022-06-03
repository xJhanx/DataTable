
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card card-primary">
                    <form action="{{ Route('Inventario.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Modelo del vehiculo</label>
                                <input name="modelo" type="text" class="form-control modelo" id="exampleInputEmail1"
                                    placeholder="Modelo del vehiculo">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Placa del vehiculo</label>
                                <input name="placa" type="text" class="form-control placa" id="exampleInputEmail1"
                                    placeholder="Placa del vehiculo">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Propietario asignado</label>
                                <input name="propietario" type="text" class="form-control propietario"
                                    id="exampleInputPassword1" placeholder="Protietario asignado">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Marca del vehiculo</label>
                                <input name="marca" type="text" class="form-control marca" id="exampleInputPassword1"
                                    placeholder="Marca del vehiculo">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Precio</label>
                                <input name="precio" type="number" class="form-control precio"
                                    id="exampleInputPassword1" placeholder="Precio">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Imagen del vehiculo</label>
                                <div class="form-group">
                                    <img src="" alt="..." class="img-thumbnail imageAdd" id="imageAdd">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="imagen" type="file" class="custom-file-input fileAdd"
                                            id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile" accept="image">Choose
                                            file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>

                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <input type="submit" class="btn btn-primary">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

