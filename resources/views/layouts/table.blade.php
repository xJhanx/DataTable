<div class="mr-1 ml-1">
    <div class="card">
        <div class="card-body">


            <table class="table table-striped table-bordered" id="inventario">

                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Placa</th>
                        <th scope="col">Propietario</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vehiculos as $vehiculo)
                        <tr>
                            <th class="align-middle" scope="row">{{ $vehiculo->id }}</th>
                            <td class="align-middle">{{ $vehiculo->modelo }}</td>
                            <td class="align-middle">{{ $vehiculo->placa }}</td>
                            <td class="align-middle">{{ $vehiculo->propietario }}</td>
                            <td class="align-middle">{{ $vehiculo->marca }}</td>
                            <td class="align-middle">{{ $vehiculo->precio }}</td>
                            <td class="img-vehicle align-middle">
                                <img src="{{ $vehiculo->imagen }}" class="img-fluid" alt="Responsive image">
                            </td>


                            <td class="align-middle">
                                <div class="d-flex justify-content-center">


                                    <button type="button" class="btn btn-dark m-0" data-toggle="modal"
                                        data-target="#ModalView"
                                        onclick="view('{{ Route('Inventario.show', $vehiculo) }}')"
                                        class="view" id="view">
                                        <i class="bi bi-eye"></i>
                                    </button>



                                    <button type="button" class="btn btn-dark m-0 " data-toggle="modal"
                                        data-target="#ModalEdit" class="edit" id="edit"
                                        onclick="edit('{{ Route('Inventario.update', $vehiculo) }}')">
                                        <i class="bi bi-pen"></i>
                                    </button>

                                    <form action="{{ Route('Inventario.destroy', $vehiculo) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-dark m-0" data-toggle="modal"
                                            data-target="#exampleModal">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
