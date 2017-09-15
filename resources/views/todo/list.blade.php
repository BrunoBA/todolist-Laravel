@extends('todo.layout')

@section('lista')
	 <div class="table-responsive">
        <div id="list">
            <div class="col-md-6">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" id="addActivity" class="form-control" placeholder="O precisa ser feito?">
            </div>
            <div class="col-md-2">
                <button class="btn btn-lg btn-success addActivity btn-sm form-control" >Adicionar</button>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="text-align: center;" >Conclusão</th>
                        <th>Atividade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody id="concat">
                    @foreach ($activities as $user)
                        <tr>
                            <td style="text-align: center;">
                                <input id="{{$user}}" class="doActivity" type="checkbox">
                            </td>
                            <td> 
                                {{ $user }}
                            </td>
                            <td>
                                <button id="{{$user}}" class="btn btn-lg btn-danger btn-sm rmActivity">Remover</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr> 
                        <td colspan="3">
                        <h4>Progresso:
                        <span id="concluded">0</span>/<span id="total">0</span>
                        </h4>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection