<tr>
    <td>{{id}}</td>
    <td>{{name}}</td>
    <td>{{lastname}}</td>
    <td>{{email}}</td>
    <td>
        <div class="button-group">
            <a class="btn btn-xs btn-success" data-toggle='tooltip' data-placement='bottom' title='Detalhes' a href="{{URL}}/clint?id={{id}}"><ion-icon  name="link-sharp"></ion-icon></a>
        </div>
    </td>
    <td>
        <div class="form-check form-switch">
            <input type="checkbox" name="todelete[]" class="form-check-input" role="switch" value="{{id}}">
        </div>
    </td>
</tr>