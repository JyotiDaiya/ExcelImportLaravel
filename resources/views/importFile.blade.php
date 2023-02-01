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
            Assignment
        </div>
        @if($errors->any())
            <div class='alert alert-danger mt-2 text-danger' id="err_file">{{ implode('', $errors->all(':message')) }}</div>
        @endif
        <div class="card-body">
            <form action="{{ route('import') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                <input type="file" name="file"
                       class="form-control">
                <br>
                <button class="btn btn-success">
                    Import User Data
                </button>

            </form>
        </div>
    </>
</div>

</body>

</html>
