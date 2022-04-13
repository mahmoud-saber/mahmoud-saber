<lablel>
    Checkbox
    <input type="checkbox" name="test" @checked("active" == 'active') value="active" >
</lablel>
<lable>
    selection
    <select name="test">
        <option selected disabled></option>
        @foreach(["laravel","9","8","7"] as $val)
            <option value="{{$val}}" @selected(9 ==$val)>{{$val}}</option>
        @endforeach
    </select>
</lable>
