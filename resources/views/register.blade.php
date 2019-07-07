@extends('Layouts.app') 
{{-- passando parametro para o componente --}}
@section('body')
    
    <h1>REGISTERS</h1>
    <br>
    <form method="POST" action="api/register/save" enctype="multipart/form-data">
        
        <div class="card" style="padding: 10px;">
            <div class="card" style="padding: 10px;">
                <label for="name">Name</label>
                <input type="text" name="name" value=""><br>
                <label for="ddl_city">city</label>
                <select id="ddl_city" name="ddl_city"></select>
                <br>

                <button type="submit" class="btn btn-primary btn-success" >Save Form</button>
                <br>
                <button type="button" class="btn btn-primary btn-success" onclick="save()">Save ajax</button>
                <br>
                <button type="button" class="btn btn-primary btn-danger">Delete</button>
            </div>
        </div>
    </form>

    {{-- @if ($errors->any()) --}}
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    {{-- @endif --}}

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

        function getCities() {
            $.ajax({
                type: "GET",
                url: "api/register/cities",
                dataType: 'JSON',
                success: function (data) {
                    data.forEach(element => {
                        $('#ddl_city').append("<option>" + element + "</option>");
                    });
                }
            });
        }

        function getRegisters() {
            $.ajax({
                type: "GET",
                url: "api/register/registers",
                dataType: 'JSON',
                success: function (data) {
                        for (let index = 0; index < data.length; index++) {
                            $('#registers > tbody').append("<tr><th scope='row'>" + index + "</th><td>" + data[index]['name'] + "</td><td>" + data[index]['city'] + "</td><td><button name='btn_edit'  class='btn btn-success'>Edit</button><button name='btn_delete' class='btn btn-danger'>Delete</button></td></tr>");
                        }
                }
            });
        }

        function save() {
            $.ajax({
                type: "POST", 
                url: "api/register/save",
                data:{ 
                    name:$("#name").val(),
                    ddl_city:$("#ddl_city").val(),
                    /*_token: '{{ csrf_token() }}'*/
                },
                dataType: 'JSON',
                success: function (data) {
                    console.log(data);
                    getRegisters();
                }
            });
            // $.post(
            //     "api/register/save", 
            //     JSON.stringify({ city:'$("#name").val()', name:"$('#ddl_city').val()", _token: '{{ csrf_token() }}' }),
            //     function (data, textStatus, jqXHR) {
            //         alert(data);
            //     },
            //     "dataType"
            // );
         }

        // function deleteRegister(id){
        //     $.ajax({
        //         type: "DELETE",
        //         url: "api/register/delete",
        //         data: {
        //             id:id,
        //             // _token: '{{ csrf_token() }}',
        //             },
        //         dataType: "JSON",
        //         success: function (response) {
        //             console.log(response);
        //             // alert('Exclusão concluída com sucesso.');
        //         }
        //     });
        // }

        function deleteRegister(id){
            $.ajax({
                type: "DELETE",
                url: "api/register/delete/" + id,
                dataType: "JSON",
                success: function (response) {
                    console.log(response);
                    // alert('Exclusão concluída com sucesso.');
                }
            });
        }        

        $.ajaxSetup({ 
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
@endsection

