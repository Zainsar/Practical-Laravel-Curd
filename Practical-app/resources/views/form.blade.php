<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>
<style>
    .form-control {
        border-radius: 50px;
        margin-top: 5px;
        margin-bottom: 10px;
    }

    .btn {
        border-radius: 50px;
        margin-top: 20px
    }

    label {
        margin-left: 20px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 20px
    }
</style>

<body>

    <div class="container p-5 mt-5">
        <h1 class="mb-4 text-center">Student Register Form</h1>
        <form action="{{ url('/form') }}" method="POST" class="form-group">
            @csrf
            <label for="firstname">FirstName</label>
            <input type="text" name="firstname" class="form-control" value="{{ old('firstname') }}">
            <span class="text-danger">
                @error('firstname')
                    {{ $message }}
                @enderror
            </span>
            <label for="lastname">LastName</label>
            <input type="text" name="lastname" class="form-control" value="{{ old('lastname') }}">
            <span class="text-danger">
                @error('lastname')
                    {{ $message }}
                @enderror
            </span>
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            <span class="text-danger">
                @error('email')
                    {{ $message }}
                @enderror
            </span>
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
            <span class="text-danger">
                @error('password')
                    {{ $message }}
                @enderror
            </span>
            <input type="submit" name="submit" class="btn btn-success col-sm-12" value="submit">

        </form>
    </div>

</body>

</html>
