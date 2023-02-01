<!DOCTYPE html>
<html>

<head>
    <title> Assignment </title>
    <link rel="stylesheet"
          href=
              "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>

<body>
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Read File
        </div>

        @if($errors->any())
            <div class='alert alert-danger mt-2 text-danger' id="err_file">{{ implode('', $errors->all(':message')) }}</div>
        @endif
        <div class="card-body">


            <form action="{{ route('save-file') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf

                <button class="btn btn-success">
                    Save Data
                </button>

                <br/>

                <table class="table">
                    @foreach($excel as $k => $v)
                        <thead>
                            <tr>
                                <th>Sapid</th>
                                <th>Hostname</th>
                                <th>Loopback</th>
                                <th>Mac Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($v as $k1 => $v1)
                                <tr>
                                    <td>{{$v1[0]}}<input type="hidden" name="sapid[]"></td>
                                    <td>{{$v1[1]}}<input type="hidden" name="hostname[]"></td>
                                    <td>{{$v1[2]}}<input type="hidden" name="loopback[]"></td>
                                    <td>{{$v1[3]}}<input type="hidden" name="mac_address[]"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    @endforeach
                    <td></td>
                </table>
            </form>
        </div>
    </>
</div>

</body>

</html>
