@extends('todo.layout')

@section('lista')
	 <div class="table-responsive">
        <div id="list">
            <div class="col-md-6">
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
                    @foreach ($data['activities'] as $activity)
                        <tr id="tr-{{ $activity->id }}">
                            <td style="text-align: center;">
                                <input id="{{ $activity->id }}" class="doActivity" type="checkbox" {{ $activity->concluido ? 'checked="checked"' : "" }} >
                            </td>
                            <td >
                                <span id="span-{{ $activity->id }}" class="spans">
                                {{ $activity->nome }}   
                                </span>
                                
                                <div class="div-input" id="text-span-{{ $activity->id }}" style="display: none;">
                                    <input id="text-{{ $activity->id }}" class="input-name" type="text" value="{{ $activity->nome }}">
                                    <button class="btn btn-lg btn-primary btn-sm change" >Salvar</button>
                                </div>
                            </td>
                            <td>
                                <button id="{{ $activity->id }}" class="btn btn-lg btn-danger btn-sm rmActivity" >Remover</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr> 
                        <td colspan="3">
                        <h4>Progresso:
                        <span id="concluded">{{ $data['done'] }}</span>/<span id="total">{{ $data['quantity'] }}</span>
                        </h4>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection