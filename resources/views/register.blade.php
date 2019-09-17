
@extends('Layouts.app') 
{{-- passando parametro para o componente --}}
@section('body')
    <h1>REGISTERS</h1>
    <form method="POST" action="{{ url('/register/save') }}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="card" style="padding: 10px;">
            <div class="card" style="padding: 10px;">
                <input type="hidden" id='id' name="id" ><br>
                <label for="name">Name</label>
                <input type="text" id='name' name="name" ><br>
                <label for="ddl_city">City</label>
                <select id="ddl_city" name="ddl_city"></select>
                <br>
                <button type="submit" class="btn btn-primary btn-success" >Save Form</button>
                <br>
                <button type="button" class="btn btn-primary btn-success" onclick="save()">Save ajax</button>
            </div>
        </div>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card-footer">
        <table id="registers" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">City</th>
                    <th scope="#"></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table> 
    </div>

    
    <script type="text/javascript">
        $(document).ready(function () {
            getCities();
            getRegisters();
        });

        function deleteRegister(id){
            $.ajax({
                type: "DELETE", 
                url: "{{ url('register/delete') }}/" + id,
                success: function (data) {
                    alert('SUCESSO');
                    getRegisters();
                },
                error: function(error){
                    alert('ERRO' + error.responseText);
                }
            });
        }

        function getCities() {
            $.ajax({
                type: "GET",
                url: "{{ url('api/register/cities') }}",
                dataType: 'JSON',
                success: function (data) {
                    data.forEach(element => {
                        $('#ddl_city').append("<option>" + element + "</option>");
                    });
                }
            });
        }


        function save() {
            $.ajax({
                type: "POST", 
                url: "{{ url('api/register/save') }}",
                data:{ 
                    name:$("#name").val(),
                    ddl_city:$("#ddl_city").val(),
                    id:($('#id').val() != '') ? $('#id').val() : null,
                    _token: '{{ csrf_token() }}',
                },
                dataType: 'JSON',
                success: function (data) {
                    getRegisters();
                },
                error: function(error){
                    alert(error.responseText);
                }
            });
        }

        function getRegisters() {
            $("#registers > tbody").empty();
            $.ajax({
                type: "GET",
                url: "{{ url('api/register/registers') }}",
                dataType: 'JSON',
                success: function (data) {
                    for (let index = 0; index < data.length; index++) {
                        $('#registers > tbody').append("<tr><th scope='row'>" + data[index]['id'] + "</th><td>" + data[index]['name'] + "</td><td>" + data[index]['city'] + "</td><td><button name='btn_edit'  class='btn btn-success' onclick='edit(" + index + ")'>Edit</button><button name='btn_delete' class='btn btn-danger' onclick='deleteRegister(" + data[index]['id'] + ")'>Delete</button></td></tr>");
                    }
                }
            });
        }

        function edit(index){
            var $line = $('#registers > tbody tr').get(index);
            $('#id').val($line.getElementsByTagName('th')[0].textContent);
            $('#name').val($line.getElementsByTagName('td')[0].textContent);
            $("#ddl_city").val($line.getElementsByTagName('td')[1].textContent);
        }

        $.ajaxSetup({ 
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
@endsection

