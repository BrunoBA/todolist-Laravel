<tr id="tr-{{ $dados['id'] }}">
    <td style="text-align: center;">
        <input id="{{ $dados['id'] }}" class="doActivity" type="checkbox">
    </td>
    <td >
        <span id="span-{{ $dados['id'] }}" class="spans"> {{ $dados['nome'] }}</span>
        <div class="div-input" id="text-span-{{ $dados['id'] }}" style="display: none;">
            <input id="text-{{ $dados['id'] }}" class="input-name" type="text" value="{{ $dados['nome'] }}">
            <button class="btn btn-lg btn-primary btn-sm change" >Salvar</button>
        </div>
    </td>
    <td>
        <button id="{{ $dados['id'] }}" class="btn btn-lg btn-danger btn-sm rmActivity" >Remover</button>
    </td>
</tr>